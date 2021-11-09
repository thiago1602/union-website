<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use App\Models\Cliente;
use Illuminate\Http\Request;

class GraficoController extends Controller
{
    public function index (){
            $customers = Venda::all();
            $produtos = Cliente::all();

            $data =[
                'qtdvenda'=>'6',
                'qtdcliente'=>$customers->count(),
                'qtdproduto'=>$produtos->count(),
                'vendas_meses'=> [
                    12, 14, 20, 37, 56, 55, 40, 80, 90, 12
                ]
            ];
            return view('graficos.grafico')->with($data);
    }
}
