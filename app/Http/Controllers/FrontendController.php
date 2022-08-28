<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {

        return view('frontend.home', array(
            'judul' => "Wisata Daerah Lampung",

        ));
    }

    public function pahawang($id=null)
    {
        if($id !== null){
            $riwayat = Riwayat::where('user_id',$id)->orderBy('id','desc')->first();
            $str = $riwayat->name;
            $hasil= $riwayat->ygdifilter;
            $solusi =  $riwayat->solusi;
        } else {
            $str = "";
            $hasil ="";
            $solusi = "";
        }
        $riwayat = Riwayat::orderBy('id',"DESC")->limit(5)->get();
        return view('frontend.pahawang', array(
            'judul' => "Wisata Daerah Lampung",
            'dataKomentar' => $riwayat,
            'kataFilter' => $str,
            'katakotor' => $hasil,
            'solusi' => $solusi,
        ));
    }
}
