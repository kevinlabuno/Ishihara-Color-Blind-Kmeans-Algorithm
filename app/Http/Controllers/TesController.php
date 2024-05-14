<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Datakonver;

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
        
        $a = '1'; // Benar
        $b = '2'; // Parsial
        $c = '3'; // Total

        $datakonver = new Datakonver();
        $datakonver->nama = $request->input('nama');
        $datakonver->alamat = $request->input('alamat');
        $datakonver->umur = $request->input('umur');
        $datakonver->jenis = $request->input('jenis');
        if ($request->input('options1') =='12'){
            $datakonver->p1 = $a;
            }elseif($request->input('options1') =='5'){
            $datakonver->p1 = $b;
            }else {
            $datakonver->p1 = $c;
        }

        if ($request->input('options2') =='8'){
            $datakonver->p2 = $a;
            }elseif($request->input('options2') =='3'){
            $datakonver->p2 = $b;
            }else {
            $datakonver->p2 = $c;
        }

        if ($request->input('options3') =='29'){
            $datakonver->p3 = $a;
            }elseif($request->input('options3') =='70'){
            $datakonver->p3 = $b;
            }else {
            $datakonver->p3 = $c;
        }

        if ($request->input('options4') =='6'){
            $datakonver->p4 = $a;
            }elseif($request->input('options4') =='5'){
            $datakonver->p4 = $b;
            }else {
            $datakonver->p3 = $c;
        }

        if ($request->input('options5') =='5'){
            $datakonver->p5 = $a;
            }elseif($request->input('options5') =='2'){
            $datakonver->p5 = $b;
            }else {
            $datakonver->p5 = $c;
        }

        if ($request->input('options6') =='15'){
            $datakonver->p6 = $a;
            }elseif($request->input('options6') =='17'){
            $datakonver->p6 = $b;
            }else {
            $datakonver->p6 = $c;
        }

        if ($request->input('options7') =='5'){
            $datakonver->p7 = $a;
            }elseif($request->input('options7') =='3'){
            $datakonver->p7 = $b;
            }else {
            $datakonver->p7 = $c;
        }

        if ($request->input('options8') =='74'){
            $datakonver->p8 = $a;
            }elseif($request->input('options8') =='21'){
            $datakonver->p8 = $b;
            }else {
            $datakonver->p8 = $c;
        }

        if ($request->input('options9') =='2'){
            $datakonver->p9 = $a;
            }elseif($request->input('options9') =='5'){
            $datakonver->p9 = $b;
            }else {
            $datakonver->p9 = $c;
        }

        if ($request->input('options10') =='6'){
            $datakonver->p10 = $a;
            }elseif($request->input('options5') =='5'){
            $datakonver->p10 = $b;
            }else {
            $datakonver->p10 = $c;
        }

        if ($request->input('options11') =='97'){
            $datakonver->p11 = $a;
            }elseif($request->input('options11') =='89'){
            $datakonver->p11 = $b;
            }else {
            $datakonver->p11 = $c;
        }

        if ($request->input('options12') =='45'){
            $datakonver->p12 = $a;
            }elseif($request->input('options12') =='46'){
            $datakonver->p12 = $b;
            }else {
            $datakonver->p12 = $c;
        }

        if ($request->input('options13') =='5'){
            $datakonver->p13 = $a;
            }elseif($request->input('options13') =='3'){
            $datakonver->p13 = $b;
            }else {
            $datakonver->p13 = $c;
        }

        if ($request->input('options14') =='7'){
            $datakonver->p14 = $a;
            }elseif($request->input('options14') =='9'){
            $datakonver->p14 = $b;
            }else {
            $datakonver->p14 = $c;
        }

        if ($request->input('options15') =='16'){
            $datakonver->p15 = $a;
            }elseif($request->input('options15') =='76'){
            $datakonver->p15 = $b;
            }else {
            $datakonver->p15 = $c;
        }

        if ($request->input('options16') =='73'){
            $datakonver->p16 = $a;
            }elseif($request->input('options16') =='65'){
            $datakonver->p16 = $b;
            }else {
            $datakonver->p16 = $c;
        }

        if ($request->input('options17') =='x'){
            $datakonver->p17 = $a;
            }elseif($request->input('options17') =='5'){
            $datakonver->p17 = $b;
            }else {
            $datakonver->p17 = $c;
        }

        if ($request->input('options18') =='x'){
            $datakonver->p18 = $a;
            }elseif($request->input('options18') =='2'){
            $datakonver->p18 = $b;
            }else {
            $datakonver->p18 = $c;
        }

        if ($request->input('options19') =='x'){
            $datakonver->p19 = $a;
            }elseif($request->input('options19') =='45'){
            $datakonver->p19 = $b;
            }else {
            $datakonver->p19 = $c;
        }

        if ($request->input('options20') =='x'){
            $datakonver->p20 = $a;
            }elseif($request->input('option20') =='73'){
            $datakonver->p20 = $b;
            }else {
            $datakonver->p20 = $c;
        }

        if ($request->input('options21') =='26'){
            $datakonver->p21 = $a;
            }elseif($request->input('options21') =='2'){
            $datakonver->p21 = $b;
            }else {
            $datakonver->p21 = $c;
        }
        $datakonver->save();


        return redirect('hasil_tes')->with('success', 'Data berhasil disimpan');
    }

    public function hasil_tes(){
        $user = Data::all();
        $data= $user->last();

        $datakonver = Datakonver::all();
        $datak = $datakonver->last();

        $count1 = 0;
        $count2 = 0;
        $count3 = 0;
        $totalProperties = 21; 

        $properties = [
            'p1', 'p2', 'p3', 'p4', 'p5',
            'p6', 'p7', 'p8', 'p9', 'p10',
            'p11', 'p12', 'p13', 'p14', 'p15',
            'p16', 'p17', 'p18', 'p19', 'p20', 'p21'
        ];

        foreach ($properties as $property) {
            if ($datak->$property == '1') {
            $count1++;
            } elseif ($datak->$property == '2') {
            $count2++;
            } elseif ($datak->$property == '3') {
            $count3++;
            }
        }

        $normal = ($count1 / $totalProperties) * 100;
        $parsial = ($count2 / $totalProperties) * 100;
        $total = ($count3 / $totalProperties) * 100;

        return view('tes.hasil_tes', compact('data', 'normal', 'parsial','total'));
    }
}