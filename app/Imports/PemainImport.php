<?php

namespace App\Imports;

use App\Models\ModelStep4;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PemainImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ModelStep4([
            'namapunggung' => $row['nama_punggung'],
            'nomor' => $row['nomor'],
            'ukuran' => $row['ukuran'],
            'kd_step1' => session('id_invoice'),
        ]);
    }
}
