<?php

namespace App\Http\Controllers\backend;

use App\Models\Jurusan;
use App\Models\Perusahaan;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Models\JurusanPerusahaan;
use RealRashid\SweetAlert\Facades\Alert;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->tahun = TahunAjaran::where('status', 'Aktif')->first()->id;
    }

    public function perusahaan()
    {
        $perusahaan = Perusahaan::latest()->get();
        return response()->json($perusahaan);
    }

    public function jurusan(Perusahaan $perusahaan)
    {
        $jurusan = JurusanPerusahaan::with('jurusan')->where('perusahaan_id', $perusahaan->id)->get();
        return response()->json($jurusan);
    }

    public function search(Request $request)
    {
        $search = $request->q;
        // Query untuk mencari perusahaan berdasarkan nama
        $perusahaan = Perusahaan::where('nama', 'like', '%' . $search . '%')->get();
        return response()->json($perusahaan);
    }

    public function pemetaan(Request $request, Jurusan $jurusan)
    {
        $search = $request->q;
        $perusahaan = Perusahaan::with(['jurusan' => function($query) use($jurusan) {
            $query->where('jurusan_id', $jurusan->id)
                  ->where('kuota', '>=', 1);
        }])
        ->whereHas('jurusan', function($query) use($jurusan){
            $query->where('jurusan_id', $jurusan->id)
                  ->where('kuota', '>=', 1);
        })
        ->where('nama', 'like', '%' . $search . '%')
        ->get();
        // $perusahaan = Perusahaan::where('nama', 'like', '%' . $search . '%')->get();
        return response()->json($perusahaan);
    }
    public function index()
    {
        $perusahaan = Perusahaan::latest()->get();
        // dd($data);
        return view('admin.perusahaan.index', compact('perusahaan'));
    }


    public function create()
    {
        $data = null;
        $jurusan = Jurusan::where('tahun_id', $this->tahun)->get();
        return view('admin.perusahaan.action', compact('data', 'jurusan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kuota' => 'required',
            'jurusan' => 'required',
            // Add other validation rules as needed
        ]);


        $perusahaan = Perusahaan::create(
            [
                "nama" => $request->nama,
                "mou" => $request->mou,
                "alamat" => $request->alamat,
                "lokasi" => $request->lokasi,
                "email" => $request->email,
                "no_telp" => $request->no_telp,
                "website" => $request->website,
                "tahun_id" => $this->tahun
            ]
        );

        foreach ($request->jurusan as $key => $jurusan) {
            JurusanPerusahaan::create([
                'jurusan_id'    => $jurusan,
                'perusahaan_id' => $perusahaan->id,
                'kuota'         => $request->kuota[$key],
                'total'         => $request->kuota[$key],
                "tahun_id" => $this->tahun
            ]);
        }

        Alert::success('Create Berhasil', 'Data Berhasil Di Tambah');

        return redirect()->route('admin.perusahaan.index')->with(['created' => 'created']);
    }

    public function detail(Perusahaan $perusahaan)
    {
        $data = $perusahaan;
        // dd($perusahaan -> jurusan[0] -> pembimbing);
        return view('admin.perusahaan.detail', compact('data'));
    }



    public function edit(Perusahaan $perusahaan)
    {
        $data = $perusahaan;
        $jurusan = Jurusan::where('tahun_id', $this->tahun)->get();
        return view('admin.perusahaan.action', compact('data', 'jurusan'));
    }

    public function update(Request $request, Perusahaan $perusahaan)
    {
        $request->validate([
            'nama' => 'required',
            'kuota' => 'required',
        ]);

        $perusahaan->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'lokasi' => $request->lokasi,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'website' => $request->website,
            'mou' => $request->mou,
        ]);

        
        foreach ($request->jurusan as $key => $jurusan) {
            $JurusanPerusahaan = JurusanPerusahaan::where('tahun_id', $this->tahun)->where('perusahaan_id', $perusahaan->id) -> where('jurusan_id', $jurusan) -> first();
            if($JurusanPerusahaan){
                $JurusanPerusahaan -> kuota = $JurusanPerusahaan -> kuota + ($request->kuota[$key] - $JurusanPerusahaan -> total);
                $JurusanPerusahaan -> total = $request->kuota[$key];
                $JurusanPerusahaan -> save();
            }else {
                JurusanPerusahaan::create([
                    'jurusan_id'    => $jurusan,
                    'perusahaan_id' => $perusahaan->id,
                    'kuota'         => $request->kuota[$key],
                    'total'         => $request->kuota[$key],
                    "tahun_id"      => $this->tahun
                ]);
            }
           
        }
        Alert::success('Update Berhasil', 'Data Berhasil Di Ubah');


        return redirect()->route('admin.perusahaan.index')->with(['updated' => 'updated']);
    }

    public function delete(Perusahaan $perusahaan)
    {
        // $this->upload->delete($perusahaan->image);
        JurusanPerusahaan::where('tahun_id', $this->tahun)->where('perusahaan_id', $perusahaan->id)->delete();
        $perusahaan->delete();
    }
}
