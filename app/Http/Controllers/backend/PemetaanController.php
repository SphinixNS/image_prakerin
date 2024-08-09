<?php

namespace App\Http\Controllers\backend;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JurusanPerusahaan;
use App\Models\SiswaPerusahaan;
use RealRashid\SweetAlert\Facades\Alert;

class PemetaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->tahun = TahunAjaran::where('status', 'Aktif')->first()->id;
        $this->tahun_ajaran = TahunAjaran::where('status', 'Aktif')->first()->tahun;
    }

    public function pemetaan()
    {
        $pemetaan = Kelas::withCount([
            'siswa as siswa_count',
            'siswa as diterima' => function ($query) {
                $query->whereHas('perusahaan', function ($query) {
                    $query->where('status', 'true');
                });
            },
            'siswa as mencari' => function ($query) {
                $query->doesntHave('perusahaan');
            },
            'siswa as pending' => function ($query) {
                $query->whereHas('perusahaan', function ($query) {
                    $query->where('status', 'pending');
                });
            }
        ])->get();

        return response()->json($pemetaan);
    }

    public function pemetaan_all()
    {
        $total_siswa = Siswa::where('tahun_id', $this->tahun)->count();
        $terpetakan = Siswa::where('tahun_id', $this->tahun)->whereHas('perusahaan', function ($q) {
            $q->where('status', 'true');
        })->count();
        $konfirmasi = Siswa::where('tahun_id', $this->tahun)->whereHas('perusahaan', function ($q) {
            $q->where('status', 'pending');
        })->count();
        $belum_terpetakan = Siswa::where('tahun_id', $this->tahun)->doesntHave('perusahaan')->count();

        return response()->json([
            'siswa' => $total_siswa,
            'terpetakan' => $terpetakan,
            'belum_terpetakan' => $belum_terpetakan,
            'konfirmasi' => $konfirmasi,
            'tahun' => $this -> tahun_ajaran
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->q;
        $pemetaan = Kelas::where('nama', 'like', '%' . $search . '%')->get();
        return response()->json($pemetaan);
    }

    public function siswa(Kelas $pemetaan)
    {
        $siswa = Siswa::where('pemetaan_id', $pemetaan->id)->get();
        return response()->json($siswa);
    }

    public function index()
    {

        $pemetaan = Kelas::latest()->get();
        return view('admin.pemetaan.index', compact('pemetaan'));
    }

    public function detail(Kelas $pemetaan)
    {
        $siswa = $pemetaan->siswa;
        return view('admin.pemetaan.detail', compact('pemetaan', 'siswa'));
    }


    public function create(Kelas $kelas)
    {
        $data = null;
        return view('admin.pemetaan.action', compact('data', 'kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required',
            'periode_awal' => 'required',
            'periode_akhir' => 'required',
            'periode_akhir' => 'required',
            'perusahaan_id' => 'required',
        ]);



        // Mendapatkan input dari form
        $periode_awal = $request->periode_awal;
        $periode_akhir = $request->periode_akhir;

        // Daftar nama bulan dalam bahasa Indonesia
        $bulan_indonesia = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];

        // Memisahkan bulan dan tahun dari periode_awal dan periode_akhir
        list($bulan_awal, $tahun_awal) = explode(' ', $periode_awal);
        list($bulan_akhir, $tahun_akhir) = explode(' ', $periode_akhir);

        // Mencari index bulan pada array $bulan_indonesia
        $start_index = array_search($bulan_awal, $bulan_indonesia);
        $end_index = array_search($bulan_akhir, $bulan_indonesia);

        // Inisialisasi array periode
        $periode = [];

        if ($tahun_awal == $tahun_akhir) {
            // Jika tahun sama, ambil bulan-bulan di antara periode_awal dan periode_akhir
            for ($i = $start_index; $i <= $end_index; $i++) {
                $periode[] = $bulan_indonesia[$i];
            }
        } else {
            // Jika tahun berbeda, ambil bulan dari periode_awal hingga akhir tahun dan dari awal tahun hingga periode_akhir
            for ($i = $start_index; $i < 12; $i++) {
                $periode[] = $bulan_indonesia[$i];
            }
            for ($i = 0; $i <= $end_index; $i++) {
                $periode[] = $bulan_indonesia[$i];
            }
        }
        // dd($periode);

        $perusahaan = JurusanPerusahaan::where('perusahaan_id', $request->perusahaan_id)->where('jurusan_id', $request->jurusan_id)->first();
        if ($perusahaan->kuota >= count($request->siswa_id)) {
            foreach ($request->siswa_id as $key => $item) {
                SiswaPerusahaan::create([
                    'siswa_id' => $item,
                    'perusahaan_id' => $perusahaan->id,
                    'status' => 'pending',
                    'periode' => $periode,
                    'tahun_awal' => $tahun_awal,
                    'tahun_akhir' => $tahun_akhir,
                    'tahun_id' => $this->tahun
                ]);

                $perusahaan->kuota -= 1;
                $perusahaan->save();
            }
            Alert::success('Pemetaan Berhasil', 'Siswa Berhasil Dipetakan');
        } else {
            Alert::error('Pemetaan Gagal', 'Kuota Di Perusahaan Tidak Mencukupi');
        }


        return redirect()->route('admin.kelas.detail', $request->kelas_id);
    }


    public function delete(Kelas $kelas)
    {
        $kelas->delete();
    }

    public function terima(SiswaPerusahaan $siswaPerusahaan)
    {
        $siswaPerusahaan->status = 'true';
        $siswaPerusahaan->save();
        Alert::success('Update Berhasil', 'Siswa telah Diterima');

        return redirect()->back();
    }
    public function tolak(SiswaPerusahaan $siswaPerusahaan)
    {
        $siswaPerusahaan->perusahaan->kuota += 1;
        $siswaPerusahaan->perusahaan->save();
        $siswaPerusahaan->delete();
        Alert::success('Update Berhasil', 'Siswa telah Ditolak');

        return redirect()->back();
    }
}
