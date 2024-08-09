<?php

namespace App\Http\Controllers\backend;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Konsentrasi;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct() {
        $this -> tahun = TahunAjaran::where('status', 'Aktif') -> first() -> id;
    }

    public function kelas()
    {
        $kelas = Kelas::withCount('siswa')->get();
        return response()->json($kelas);
        
    }

    public function search(Request $request)
    {
        $search = $request->q;
        $kelas = Kelas::where('nama', 'like', '%' . $search . '%')->get();
        return response()->json($kelas);
    }

    public function siswa(Kelas $kelas)
    {
        $siswa = Siswa::with('perusahaan', 'perusahaan.perusahaan.perusahaan')->where('kelas_id', $kelas -> id)->get();
        return response()->json($siswa);
    }

    public function index()
    {

        $kelas = Kelas::latest()->get();
        return view('admin.kelas.index', compact('kelas'));
    }

    public function detail(Kelas $kelas)
    {
        $siswa = $kelas -> siswa;
        return view('admin.kelas.detail', compact('kelas', 'siswa'));
    }


    public function create()
    {
        $data = null;
        $konsentrasi = Konsentrasi::all();
        return view('admin.kelas.action', compact('data', 'konsentrasi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        Kelas::create([
             'nama' => $request->nama,
             'konsentrasi_id' => $request -> konsentrasi_id,
             'tahun_id' => $this -> tahun
        ]);
        Alert::success('Create Berhasil', 'Data Berhasil Di Tambah');

        return redirect()->route('admin.kelas.index')->with(['created' => 'created']);
    }

    public function edit(Kelas $kelas)
    {
        $data = $kelas;
        $konsentrasi = Konsentrasi::all();
        return view('admin.kelas.action', compact('data', 'konsentrasi'));
    }

    public function update(Request $request, Kelas $kelas)
    {
        $request->validate([
            'nama' => 'required',
        ]);


        $kelas->update([
            'nama' => $request->nama,
            'konsentrasi_id' => $request -> konsentrasi_id,
        ]);
        Alert::success('Update Berhasil', 'Data Berhasil Di Ubah');


        return redirect()->route('admin.kelas.index')->with(['updated' => 'updated']);
    }

    public function delete(Kelas $kelas)
    {
        // $this->upload->delete($kelas->image);
        $kelas->delete();
    }
}
