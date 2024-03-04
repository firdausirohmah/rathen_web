<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function get_harga($kd_part){
        $data = DB::table('tbl_part')->where('kd_part', $kd_part)->select('product', 'harga', 'min_order')->first();
        return response()->json($data);
    }
}
