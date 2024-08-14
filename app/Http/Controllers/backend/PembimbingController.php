<?php

namespace App\Http\Controllers\backend;

use App\Models\Pembimbing;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use App\Models\JurusanPerusahaan;
use App\Http\Controllers\Controller;
use App\Models\PembimbingPerusahaan;
use App\Models\Perusahaan;
use RealRashid\SweetAlert\Facades\Alert;

class PembimbingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct() {
        $this -> tahun = TahunAjaran::where('status', 'Aktif') -> first() -> id;
    }

    public function pembimbing()
    {
        $pembimbing = Pembimbing::with(['perusahaan.perusahaan.perusahaan'])->latest()->get();
        
        return response()->json($pembimbing);
        
    }
    public function index()
    {
        $pembimbing = Pembimbing::latest()->get();
        // dd($data);
        return view('admin.pembimbing.index', compact('pembimbing'));
    }


    public function create(Request $request)
    {
        $jurusan_perusahaanId = null;
        $data = null;
        $perusahaan = Perusahaan::all();
        if($request -> id){
            $jurusan_perusahaanId = decrypt($request -> id);
        }
        return view('admin.pembimbing.action', compact('data', 'perusahaan', 'jurusan_perusahaanId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenkel' => 'required',
            'nip' => 'required'
            // Add other validation rules as needed
        ]);

        // dd($request);
        $pembimbing = Pembimbing::create([
             'nama' => $request->nama,
             'jenkel' => $request->jenkel,
             'no_telp' => $request->no_telp,
             'nip' => $request->nip,
             'tahun_id' => $this -> tahun
        ]);

        PembimbingPerusahaan::create([
            'pembimbing_id' => $pembimbing -> id,
            'perusahaan_id' => $request -> jurusan_id,
            'tahun_id' => $this -> tahun
        ]);

        Alert::success('Create Berhasil', 'Data Berhasil Di Tambah');

        return redirect()->route('admin.pembimbing.index')->with(['created' => 'created']);
    }

   


    public function edit(Pembimbing $pembimbing)
    {
        $data = $pembimbing;
        $perusahaan = JurusanPerusahaan::all();
        // dd($data -> perusahaan -> perusahaan -> nama);
        return view('admin.pembimbing.action', compact('data', 'perusahaan'));
    }

    public function update(Request $request, Pembimbing $pembimbing)
    {
        $request->validate([
            'nama' => 'required',
            'jenkel' => 'required',
            'nip' => 'required'
        ]);


        $pembimbing->update([
            'nama' => $request->nama,
            'jenkel' => $request->jenkel,
            'no_telp' => $request->no_telp,
            'nip' => $request->nip,
            'perusahaan_id' => $request -> jurusan_id,
        ]);
        Alert::success('Update Berhasil', 'Data Berhasil Di Ubah');


        return redirect()->route('admin.pembimbing.index')->with(['updated' => 'updated']);
    }

    public function delete(Pembimbing $pembimbing)
    {
        // $this->upload->delete($pembimbing->image);
        $pembimbing->delete();
    }
}
