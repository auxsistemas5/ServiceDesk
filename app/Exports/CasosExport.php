<?php

namespace App\Exports;

use App\Models\Caso;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

/*class CasosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    //public function collection()
    //{
      //  return Caso::all();
    //}

    
//}

class CasosExport implements FromView
{
    public function view(): View
    {
        $casos = Caso::where('ESTADO', 'Cerrado')->get();
        return view('document.excel', ['casos' => $casos]);
    }
}


