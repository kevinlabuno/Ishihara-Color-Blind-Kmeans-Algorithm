<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class TesController extends Controller
{
    public function index(){
        return view('tes');
    }

    public function tesuser(){
        return view('tes.tesuser');
    }


    public function post(Request $request){
        $data = new Data();
        $data->nama = $request->input('nama');
        $data->alamat = $request->input('alamat');
        $data->umur = $request->input('umur');
        $data->jenis = $request->input('jenis');
        $data->p1 = $request->input('options1');
        $data->p2 = $request->input('options2');
        $data->p3 = $request->input('options3');
        $data->p4 = $request->input('options4');
        $data->p5 = $request->input('options5');
        $data->p6 = $request->input('options6');
        $data->p7 = $request->input('options7');
        $data->p8 = $request->input('options8');
        $data->p9 = $request->input('options9');
        $data->p10 = $request->input('options10');
        $data->p11 = $request->input('options11');
        $data->p12 = $request->input('options12');
        $data->p13 = $request->input('options13');
        $data->p14 = $request->input('options14');
        $data->p15 = $request->input('options15');
        $data->p16 = $request->input('options16');
        $data->p17 = $request->input('options17');
        $data->p18 = $request->input('options18');
        $data->p19 = $request->input('options19');
        $data->p20 = $request->input('options20');
        $data->p21 = $request->input('options21');
        $data->save();
        return redirect('hasil_tes')->with('success', 'Data berhasil disimpan');;
    }

    public function hasil_tes(){
        return view('tes.hasil_tes');
    }
}
