<?php

namespace App\Http\Controllers\backend;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct() {
        $this -> tahun = TahunAjaran::where('status', 'Aktif') -> first() -> id;
    }

    public function siswa()
    {
        $siswa = Siswa::with('kelas')->latest()->get();
        return response()->json($siswa);
        
    }

    public function search(Kelas $kelas, Request $request)
    {
        $search = $request->input('q');
        $siswa = Siswa::where('kelas_id', $kelas -> id)
        ->where('nama', 'LIKE', '%' . $search . '%')
        ->get();
        return response()->json($siswa);
        
    }

    public function index()
    {

        $siswa = Siswa::latest()->get();
        $kelas = Kelas::where('tahun_id', $this -> tahun)->get();
        return view('admin.siswa.index', compact('siswa', 'kelas'));
    }

    public function detail(Siswa $siswa)
    {
        // dd($siswa -> perusahaan);
        return view('admin.siswa.detail', compact('siswa'));
    }



    public function create()
    {
        $data = null;
        $kelas = Kelas::where('tahun_id', $this -> tahun) -> get();
        return view('admin.siswa.action', compact('data', 'kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas_id' => 'required',
        ]);

        Siswa::create([
             'nama' => $request->nama,
             'nis' => $request->nis,
             'kelas_id' => $request -> kelas_id,
             'tahun_id' => $this -> tahun
        ]);
        Alert::success('Create Berhasil', 'Data Berhasil Di Tambah');

        return redirect()->route('admin.siswa.index')->with(['created' => 'created']);
    }

    public function edit(Siswa $siswa)
    {
        $data = $siswa;
        $kelas = Kelas::where('tahun_id', $this -> tahun) -> get();
        return view('admin.siswa.action', compact('data', 'kelas'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama' => 'required',
            'kelas_id' => 'required',
        ]);


        $siswa->update([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'kelas_id' => $request -> kelas_id,
        ]);
        Alert::success('Update Berhasil', 'Data Berhasil Di Ubah');


        return redirect()->route('admin.siswa.index')->with(['updated' => 'updated']);
    }

    public function delete(Siswa $siswa)
    {
        // $this->upload->delete($siswa->image);
        $siswa->delete();
    }
}

