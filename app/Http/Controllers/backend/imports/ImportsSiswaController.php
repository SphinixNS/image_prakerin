<?php

namespace App\Http\Controllers\backend\imports;

use App\Models\Siswa;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpOffice\PhpSpreadsheet\IOFactory;
use RealRashid\SweetAlert\Facades\Alert;

class ImportsSiswaController extends Controller
{

    public function __construct() {
        $this -> tahun = TahunAjaran::where('status', 'Aktif') -> first() -> id;
    }

    public function import(Request $request)
    {
        $file = $request->file('file');
        $filePath = $file->getRealPath();

        $spreadsheet = IOFactory::load($filePath);
        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

        // Lakukan sesuatu dengan $sheetData, misalnya simpan ke database
        foreach ($sheetData as $key => $row) {
            // Proses data sesuai kebutuhan Anda
            if ($key != 1) {
                Siswa::create([
                    'nis' => $row['A'],
                    'nama' => $row['B'],
                    'jenkel' => $row['C'] == 'P' ? 'Perempuan' : 'Laki-Laki',
                    'kelas_id' => $request -> kelas_id,
                    'tahun_id' => $this -> tahun
                ]);
            }
            
        }
        Alert::success('Import Berhasil', 'Data Berhasil Di Import');

        return redirect()->route('admin.siswa.index')->with(['created' => 'created']);
    }
}
