<?php

namespace App\Exports;

use App\Models\Venda;
use Maatwebsite\Excel\Concerns\FromCollection;

class VendasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Venda::all();


    }
}
