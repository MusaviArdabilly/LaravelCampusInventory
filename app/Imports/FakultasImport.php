<?php

namespace App\Imports;

use App\Fakultas;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class FakultasImport implements ToModel, WithStartRow
{
    public function startRow(): Int{
        return 2;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $column)
    {
        return new Fakultas([
            'faculty' => $column[1]
        ]);
    }
}
