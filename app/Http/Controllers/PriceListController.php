<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PriceListController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data jika diperlukan
        $validatedData = $request->validate([
            'nama_tim' => 'required',
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'kualitas' => 'required',
        ]);
        // dd($validatedData);        // Simpan data ke database

        $priceList = DB::table('tbl_pemesanan')->insert($validatedData);

        return response()->json(['message' => 'Data berhasil disimpan', 'data' => $priceList]);
    }
}
