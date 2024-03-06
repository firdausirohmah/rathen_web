<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Rating as ModelsRating;
use Illuminate\Http\Request;

class Rating extends Controller
{
    public function index(){
        $model = new ModelsRating();
        $data = $model->with('media')->get();
        return view('landing_page.rating', ['data' => $data]);

    }
    public function add(Request $request){
        // return $request;
        $filename = time().'.'.$request->file('photo')->getClientOriginalExtension();
        $type = null;
        $media_type = 'rating';
        if (str_starts_with($request->file('photo')->getMimeType(), 'image')) {
            // File adalah gambar
            // Proses gambar di sini
            $type = 'image';
        } else {
            // File bukan gambar atau video
            return redirect()->back()->with('error', 'File harus berupa gambar atau video.');
        }

        $media = new Media();
        $media->filename = $filename;
        $media->alt = $filename;
        $media->type = $type;
        $media->media_type_of = $media_type;
        $media->save();

        $request->file('photo')->move('uploads', $filename);

        $model = new ModelsRating();
        $model->name = $request->nama;
        $model->team_name = $request->nama_tim;
        $model->kesesuaian = $request->kesesuaian;
        $model->kualitas = $request->kualitas;
        $model->fitur = $request->fitur;
        $model->waktu_produksi = $request->waktu_produksi;
        $model->pelayanan = $request->pelayanan;
        $model->alasan = json_encode($request->alasan);
        $model->pesan = $request->pesan;
        $model->penilaian = $request->penilaian;
        $model->id_media = $media->id;
        $model->save();

        return redirect()->back();

    }
}
