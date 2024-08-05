<?php

namespace App\Http\Controllers\backend;

use App\Models\Konsentrasi;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use RealRashid\SweetAlert\Facades\Alert;

class KonsentrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct() {
        $this -> tahun = TahunAjaran::where('status', 'Aktif') -> first() -> id;
    }

    public function konsentrasi()
    {
        $konsentrasi = Konsentrasi::with('jurusan')->latest()->get();
        return response()->json($konsentrasi);
        
    }
    public function index()
    {

        $konsentrasi = Konsentrasi::latest()->get();
        // dd($data);
        return view('admin.konsentrasi.index', compact('konsentrasi'));
    }


    public function create()
    {
        $data = null;
        $jurusan = Jurusan::all();
        return view('admin.konsentrasi.action', compact('data', 'jurusan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            // Add other validation rules as needed
        ]);

        Konsentrasi::create([
             'nama' => $request->nama,
             'jurusan_id' => $request -> jurusan_id,
             'tahun_id' => $this -> tahun
        ]);
        Alert::success('Create Berhasil', 'Data Berhasil Di Tambah');

        return redirect()->route('admin.konsentrasi.index')->with(['created' => 'created']);
    }

    public function edit(Konsentrasi $konsentrasi)
    {
        $data = $konsentrasi;
        $jurusan = Jurusan::all();
        return view('admin.konsentrasi.action', compact('data', 'jurusan'));
    }

    public function update(Request $request, Konsentrasi $konsentrasi)
    {
        $request->validate([
            'nama' => 'required',
        ]);


        $konsentrasi->update([
            'nama' => $request->nama,
            'jurusan_id' => $request -> jurusan_id,
        ]);
        Alert::success('Update Berhasil', 'Data Berhasil Di Ubah');


        return redirect()->route('admin.konsentrasi.index')->with(['updated' => 'updated']);
    }

    public function delete(Konsentrasi $konsentrasi)
    {
        // $this->upload->delete($konsentrasi->image);
        $konsentrasi->delete();
    }
}

