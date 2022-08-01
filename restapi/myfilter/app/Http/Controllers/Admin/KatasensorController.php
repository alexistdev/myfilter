<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KatasensorController extends Controller
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
        return view('admin.katasensor',array(
            'judul' => "Dashboard Administrator | MyFilter V.1.0",
            'menuUtama' => 'master',
            'menuKedua' => 'katasensor',
        ));
    }
}
