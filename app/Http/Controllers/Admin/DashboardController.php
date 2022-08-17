<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Katasensor;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    protected $users;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->users=Auth::user();
            return $next($request);
        });
    }

    public function index()
    {
        $katasensor = Katasensor::all();
        $riwayat = Riwayat::all();
        return view('admin.dashboard',array(
            'judul' => "Dashboard Administrator | MyFilter V.1.0",
            'menuUtama' => 'dashboard',
            'menuKedua' => 'dashboard',
            'jumlahKataSensor' => $katasensor->count(),
            'jumlahRiwayat' => $riwayat->count(),
        ));
    }
}
