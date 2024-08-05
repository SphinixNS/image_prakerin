<?php

namespace App\Http\Controllers\backend;

use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function getDataPerusahaan()
    {
        $perusahaan = Perusahaan::latest()->get();
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
        return view('admin.perusahaan.action', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kuota' => 'required',
            // Add other validation rules as needed
        ]);

        Perusahaan::create($request->except('_token'));
        Alert::success('Create Berhasil', 'Data Berhasil Di Tambah');

        return redirect()->route('admin.perusahaan.index')->with(['created' => 'created']);
    }

    public function edit(Perusahaan $perusahaan)
    {
        $data = $perusahaan;

        return view('admin.perusahaan.action', compact('data'));
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
            'kuota' => $request->kuota,
            'mou' => $request->mou,
        ]);
        Alert::success('Update Berhasil', 'Data Berhasil Di Ubah');


        return redirect()->route('admin.perusahaan.index')->with(['updated' => 'updated']);
    }

    public function delete(Perusahaan $perusahaan)
    {
        // $this->upload->delete($perusahaan->image);
        $perusahaan->delete();
    }
}
