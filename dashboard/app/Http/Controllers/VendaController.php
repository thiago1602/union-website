<?php

namespace App\Http\Controllers;

use App\Exports\VendasExport;
use App\Http\Requests\ImportRequest;
use App\Import\VendaImport;
use App\Models\Venda;
use App\Report\CustomerReport;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class VendaController extends Controller
{

    protected $venda_import;

    public function __construct(Venda $venda,
    VendaImport $venda_import)
    {

        $this->venda = $venda;
        $this->venda_import = $venda_import;

}
    public function index()
    {

        $user_id = auth()->user()->id;
        $venda = Venda::where('user_id', $user_id)->paginate(10);
        return view('venda.index',['venda' => $venda]);
    }

    public function create()
    {
        return view('venda.create');
    }

    public function store(Request $request)
    {
        $dados = $request->all('nome','valor');
        if (isset(auth()->user()->id)) {
            $dados['user_id'] = auth()->user()->id;
        }

        $venda = Venda::create($dados);
        return redirect()->route('venda.show', ['venda' => $venda->id]);

    }


    public function show(Venda $venda)
    {

        return view('venda.show', ['venda'=> $venda]);
    }

    public function edit(Venda $venda)
    {
        $user_id = auth()->user()->id;

        if($venda->user_id == $user_id){
            return view('venda.edit', ['venda' => $venda]);

        }

        return view('acesso-negado');

    }

    public function update(Request $request, Venda $venda)
    {

        if (!$venda->user_id == auth()->user()->id) {
            return view('acesso-negado');
        }

        $venda->update($request->all());
        return redirect()->route('venda.show', ['venda' => $venda->id]);
    }



    public function destroy(Venda $venda)
    {

        if (!$venda->user_id == auth()->user()->id) {
            return view('acesso-negado');
        }
        $venda->delete();
        return redirect()->route('venda.index');

    }

    public function import()
    {

        return view('venda.import');
    }




    public function storeImport(ImportRequest $request)
    {
        Excel::import( new VendaImport, request()->file('file'));

        return back()->with('sucess', 'Vendas importada comsucesso');


//        try{
//            $notification = $this->venda_import->allData($request);
//            $notification = array(
//                'title'=> trans('validation.generic.Success'),
//                'message'=> trans('validation.generic.imported')." ".
//                            trans('validation.generic.data_created')." : ".$notification['created'].". ".
//                            trans('validation.generic.data_updated')." : ".$notification['updated'],
//                'alert-type' => 'success'
//            );





            /*
            if($notification['message'] == "worksheet_imported"){
                $notification = array(
                    'title'=> trans('validation.generic.Success'),
                    'message'=> trans('validation.generic.imported')." ".
                                trans('validation.generic.data_created')." : ".$notification['created'].". ".
                                trans('validation.generic.data_updated')." : ".$notification['updated'],
                    'alert-type' => 'success'
                );
            }
/*
            if($notification['message']  == "worksheet_invalid"){
                $notification = array(
                    'title'=> trans('validation.generic.Error'),
                    'message'=> trans('platform.customer.message.import'),
                    'alert-type' => 'danger'
                );
                return back()->withInput()->with($notification);
            }
            */



//            return redirect()->route('venda.index')->with($notification);
//
//        }
//        catch(\Exception $e)
//        {
//            $notification = array(
//                'title'=> trans('validation.generic.Error'),
//                'message'=> trans('validation.generic.not_imported').': '.$e->getMessage(),
//                'alert-type' => 'danger'
//            );
//            return back()->with($notification)->withInput();
//        }
    }

    public function vendaList()
    {
        $venda = DB::table('venda')->paginate(10);
        return view('index', ['venda'=>$venda]);
    }


    public function report($extensao)
    {


        $nome_arquivo =  'lista_de_vendas';

        if ($extensao == 'xlsx'){
            $nome_arquivo .= '.'.$extensao;
        }else if ($extensao == 'csv'){
            $nome_arquivo .= '.'.$extensao;
        } else{
            return redirect()->route('venda.index');

        }
        return Excel::download(new VendasExport, $nome_arquivo);




       /** if($customer_id==null){
            $customers = $this->customer->all();
        }else{
            $customers = $this->customer->where('id',$customer_id)->get();
        }
        try{
            $notification = $this->customer_report->list($customers);
        }
        catch(\Exception $e){
            $notification = array(
                'title'=> trans('platform.generic.Error'),
                'message'=> trans('platform.report.message.generated_error').': '.$e->getMessage(),
                'alert-type' => 'danger'
            );
        }
        return back()->with($notification);
        **/
    }

}
