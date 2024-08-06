<?php

namespace App\Http\Controllers\backend;

use App\Models\Guru;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct() {
        $this -> tahun = TahunAjaran::where('status', 'Aktif') -> first() -> id;
    }

    public function guru()
    {
        $guru = Guru::latest()->get();
        return response()->json($guru);
        
    }
    public function index()
    {

        $guru = Guru::latest()->get();
        // dd($data);
        return view('admin.guru.index', compact('guru'));
    }


    public function create()
    {
        $data = null;
        return view('admin.guru.action', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'      => 'required',
            'nip'       => 'required',
        ]);

        Guru::create([
            'nama'      => $request->nama,
            'nip'       => $request->nip,
            'alamat'    => $request->alamat,
            'jenkel'    => $request->jenkel,
            'telp'      => $request->telp,
            'tahun_id'  => $request->tahun_id
        ]);
        Alert::success('Create Berhasil', 'Data Berhasil Di Tambah');

        return redirect()->route('admin.guru.index')->with(['created' => 'created']);
    }

    public function edit(Guru $guru)
    {
        $data = $guru;

        return view('admin.guru.action', compact('data'));
    }

    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nama'      => 'required',
            'nip'       => 'required',
        ]);


        $guru->update([
            'nama'      => $request->nama,
            'nip'       => $request->nip,
            'alamat'    => $request->alamat,
            'jenkel'    => $request->jenkel,
            'telp'      => $request->telp,
        ]);
        Alert::success('Update Berhasil', 'Data Berhasil Di Ubah');


        return redirect()->route('admin.guru.index')->with(['updated' => 'updated']);
    }

    public function delete(Guru $guru)
    {
        // $this->upload->delete($guru->image);
        $guru->delete();
    }
}

