<?php

namespace App\Http\Controllers\backend;

use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function tahun_ajaran()
    {
        $tahun_ajaran = TahunAjaran::latest()->get();
        return response()->json($tahun_ajaran);
        
    }
    public function index()
    {

        $tahun_ajaran = TahunAjaran::latest()->get();
        return view('admin.tahun_ajaran.index', compact('tahun_ajaran'));
    }


    public function create()
    {
        $data = null;
        return view('admin.tahun_ajaran.action', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required',
            // Add other validation rules as needed
        ]);

        TahunAjaran::create($request->except('_token'));
        Alert::success('Create Berhasil', 'Data Berhasil Di Tambah');

        return redirect()->route('admin.tahun_ajaran.index')->with(['created' => 'created']);
    }

    public function edit(TahunAjaran $tahun_ajaran)
    {
        $data = $tahun_ajaran;

        return view('admin.tahun_ajaran.action', compact('data'));
    }

    public function update(Request $request, TahunAjaran $tahun_ajaran)
    {
        $request->validate([
            'tahun' => 'required',
        ]);


        $tahun_ajaran->update([
            'tahun' => $request->tahun,
        ]);
        Alert::success('Update Berhasil', 'Data Berhasil Di Ubah');


        return redirect()->route('admin.tahun_ajaran.index')->with(['updated' => 'updated']);
    }
    public function status(Request $request, TahunAjaran $tahun_ajaran)
    {

        if($tahun_ajaran -> status == 'Tidak Aktif' ){
            $tahun_ajaran->update([
                'status' => 'Aktif',
            ]);
        }else{
            $tahun_ajaran->update([
                'status' => 'Tidak Aktif',
            ]);
        }
        $semua_tahun = TahunAjaran::all();
        foreach ($semua_tahun as $item) {
            if($item -> id == $tahun_ajaran -> id){
              
            }else{
                $item->update([
                    'status' => 'Tidak Aktif',
                ]);
            }
        }
       
        Alert::success('Update Berhasil', 'Status Berhasil Di Ubah');


        return redirect()->route('admin.tahun_ajaran.index')->with(['updated' => 'updated']);
    }

    public function delete(TahunAjaran $tahun_ajaran)
    {
        // $this->upload->delete($tahun_ajaran->image);
        $tahun_ajaran->delete();
    }
}