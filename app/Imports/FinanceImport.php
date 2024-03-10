<?php

namespace App\Imports;

use App\Models\Finance;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FinanceImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
        return new Finance([
            'transaction_date' =>  $row['transaction_date'],
            'transactions' => $row['transactions'],
            'type' => $row['type'],
            'status' => $row['status'],
            'money_status' => $row['money_status'],
            'nominal' => $row['nominal'],
            'note' => $row['note'],
        ]);
    }
}
