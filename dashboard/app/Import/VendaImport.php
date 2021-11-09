<?php

namespace App\Import;

use App\Models\Venda;
use App\Tools\Sanitize;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\IOFactory;

class VendaImport
{
    public function model(array $row)
    {
        return new Venda([
            'nome' => $row['nome'],
            'valor' => $row['valor'],
            'created_at' => $row['created_at'],
        ]);
    }


//    protected $cliente;
//    protected $sanatize;
//
//    public function __construct(Venda $venda, Sanitize $sanatize)
//    {
//        $this->venda = $venda;
//        $this->sanatize = $sanatize;
//    }
//
//    public function allData(Request $request)
//    {
//        //insert customers in the database
//        $read = IOFactory::load($request->file);
//        $data = $read->getActiveSheet()->toArray();
//        $line = 0;
//        $created = 0;
//        $updated = 0;
//        foreach ($data as $item) {
//            //condition to verify if has 3 collumns in the worksheet
//            if (count($item) == 3) {
////                //your condition here to first line
//                if ($line == 0) {
////                    //
//                }













//                if($line>0){
//                    //verify if the current customer exists
//                    $cpf = $this->sanatize->validCpf($item[2]);
//                    $customer = $this->customer->where('cpf',$cpf)->first();
//                    //if exists customer
//                    if(!empty($customer)){
//                        $customer->update([
//                            'name'=> $item[0],
//                            'email'=> $item[1],
//                            'cpf'=> $cpf,
//                        ]);
//                        $updated++;
//                        //if not exists
//                    }else{













//                if ($line > 0) {
//                    $this->cliente->create([
//                        'nome' => $item[0],
//                        'valor' => $item[1],
//                    ]);
//                    $created++;
//                }
//                $line++;
//            }
//
//            //not exists 3 columns in the worksheet
//    else{
//        throw new Exception(trans('platform.cliente.message.import'));
//    }
//    }
//        //returns imported worksheet notification
//        $notification = [
//            'message'=> "worksheet_imported",
//            'created'=> $created,
//            'updated'=> $updated
//        ];
//        return $notification;
//    }
}
