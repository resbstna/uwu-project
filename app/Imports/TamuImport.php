<?php

namespace App\Imports;

use App\Models\Tamu;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class TamuImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    
    public function __construct($uuid,$id)
    {
        $this->uuid = $uuid;
        $this->id = $id;
    }
    public function model(array $row)
    { 
        

        return new Tamu([
            'uuid' => $this->uuid,
            'cidnr' => $this->id,
            'nasme' => $row[1],
            'email' => $row[2],
            'telph' => $row[3],
            'addrs' => $row[4],
            'status' => $row[5],
        ]);
    }

    
    public function startRow(): int
    {
        return 2;
    }

}
