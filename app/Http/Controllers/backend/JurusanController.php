<?php

namespace App\Http\Controllers\backend;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TahunAjaran;
use RealRashid\SweetAlert\Facades\Alert;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct() {
        $this -> tahun = TahunAjaran::where('status', 'Aktif') -> first() -> id;
    }

    public function jurusan()
    {
        $jurusan = Jurusan::latest()->get();
        return response()->json($jurusan);
        
    }
    public function index()
    {

        $jurusan = Jurusan::latest()->get();
        // dd($data);
        return view('admin.jurusan.index', compact('jurusan'));
    }


    public function create()
    {
        $data = null;
        return view('admin.jurusan.action', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            // Add other validation rules as needed
        ]);

        Jurusan::create([
             'nama' => $request->nama,
             'tahun_id' => $this -> tahun
        ]);
        Alert::success('Create Berhasil', 'Data Berhasil Di Tambah');

        return redirect()->route('admin.jurusan.index')->with(['created' => 'created']);
    }

    public function edit(Jurusan $jurusan)
    {
        $data = $jurusan;

        return view('admin.jurusan.action', compact('data'));
    }

    public function update(Request $request, Jurusan $jurusan)
    {
        $request->validate([
            'nama' => 'required',
        ]);


        $jurusan->update([
            'nama' => $request->nama,
        ]);
        Alert::success('Update Berhasil', 'Data Berhasil Di Ubah');


        return redirect()->route('admin.jurusan.index')->with(['updated' => 'updated']);
    }

    public function delete(Jurusan $jurusan)
    {
        // $this->upload->delete($jurusan->image);
        $jurusan->delete();
    }
}
