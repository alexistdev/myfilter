<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Katasensor;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $users;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->users=Auth::user();
            return $next($request);
        });
    }

    public function index($id=null)
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
        return view('home.filterkata', array(
            'judul' => "Dashboard Administrator | MyFilter V.1.0",
            'menuUtama' => 'dashboard',
            'menuKedua' => 'dashboard',
            'kataFilter' => $str,
            'katakotor' => $hasil,
            'solusi' => $solusi,
        ));
    }

    public function filter(Request $request)
    {
        if ($request->routeIs('usr.*')) {
            $rules = [
                'filter' => 'required|max:255',
            ];
            $message = [
                'filter.required' => "Anda belum memposting pertanyaan!",
                'filter.max' => "Maksimal ada 255 karakter!",
            ];
            $request->validate($rules, $message);
            $katakotor = Katasensor::all();
            $ditemukan = "";
            $solusi = "";
            $count = 0;
            foreach($katakotor as $row){
                if(strpos($request->filter, $row->name) !== false){
                    if($count == 0 ){
                        $katadifilter = str_replace($row->name,"***",$request->filter);
                    } else {
                        $katadifilter = str_replace($row->name,"***",$katadifilter);
                    }
                    $ditemukan = "$row->name".",".$ditemukan;
                    if($row->solusi !==null){
                        $solusi = $row->solusi.",".$solusi;
                    }
                } else{
                    if($count == 0 ){
                        $katadifilter = $request->filter;
                    }
                }
                $count ++;
            }
            $riwayat = new Riwayat();
            $riwayat->user_id = $this->users->id;
            $riwayat->name = $katadifilter;
            $riwayat->ygdifilter = $ditemukan;
            $riwayat->solusi = $solusi;
            $riwayat->save();
            return redirect(route('frontend.pahawang',$this->users->id));

        } else {
            return abort("404", "NOT FOUND");
        }
    }
}
