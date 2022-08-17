<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Katasensor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Exception;

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

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $kata = Katasensor::all();

            return DataTables::of($kata)
                ->addIndexColumn()
                ->editColumn('created_at', function ($request) {
                    return $request->created_at->format('d-m-Y H:i:s');
                })
                ->addColumn('action', function ($row) {
//                    $btn = "<button class=\"btn btn-sm btn-primary ml-1\"> Edit</button>";
                    $btn = "<button class=\"btn btn-sm btn-danger ml-1 open-hapus\" data-id=\"$row->id\" data-toggle=\"modal\" data-target=\"#modalTambah\"> Hapus</button>";
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.katasensor',array(
            'judul' => "Dashboard Administrator | MyFilter V.1.0",
            'menuUtama' => 'master',
            'menuKedua' => 'katasensor',
        ));
    }

    public function store(Request $request)
    {
        if ($request->routeIs('adm.*')) {
            $rules = [
                'name' => 'required|unique:katasensors,name|max:125',
            ];
            $message = [
                'name.required' => "Anda harus mengisi nama kata!",
                'name.unique' => "Nama sudah terdaftar di dalam database!",
                'name.max' => "Panjang karakter yang diperbolehkan adalah 125 karakter!",
            ];
            $request->validateWithBag('tambah', $rules, $message);
            DB::beginTransaction();
            try {
                $kata = new Katasensor();
                $kata->name = $request->name;
                $kata->save();
                DB::commit();
                return redirect(route('adm.katasensor'))->with(['success' => "Berhasil ditambah"]);
            } catch (Exception $e) {
                DB::rollback();
                return redirect(route('adm.katasensor'))->with(['error' => $e->getMessage()]);
            }
        } else {
            return abort("404", "NOT FOUND");
        }
    }

    public function destroy(Request $request)
    {
        if ($request->routeIs('adm.*')) {
            $rules = [
                'id_kata' => 'required|numeric',
            ];
            $message = [
                'id_kata.required' => "Data id tidak ditemukan",
                'id_kata.numeric' => "Data id tidak ditemukan",
            ];
            $request->validateWithBag('hapus', $rules, $message);
            DB::beginTransaction();
            try{
                $kata = Katasensor::findOrFail($request->id_kata);
                $kata->delete();
                DB::commit();
                return redirect(route('adm.katasensor'))->with(['success' => "Data berhasil dihapus"]);
            } catch (Exception $e) {
                DB::rollback();
                return redirect(route('adm.katasensor'))->with(['error' => $e->getMessage()]);
            }

        } else {
            return abort("404", "NOT FOUND");
        }
    }

}
