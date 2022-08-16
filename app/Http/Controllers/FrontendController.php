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

    public function pahawang()
    {
        $riwayat = Riwayat::orderBy('id',"DESC")->limit(5)->get();
        return view('frontend.pahawang', array(
            'judul' => "Wisata Daerah Lampung",
            'dataKomentar' => $riwayat,
        ));
    }
}
