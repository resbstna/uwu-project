<?php

namespace App\Exports;

use App\Models\Tamu;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class TamuExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        $tamu = Tamu::query()->select(DB::raw('name,email,telph, addrs,status'))
        ->where('cidnr',$this->id)->get();
        return view('excel.export_tamu', [
            'tamu' => $tamu
        ]);

    }
}
