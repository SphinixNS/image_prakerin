@extends('admin.layout.app')
@section('title', 'Guru Detail')
@section('content')


    <main class="content">
        <div class="container-fluid p-0">

            {{-- <h1 class="h3 mb-3">Guru</h1> --}}

            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Data Guru</h5>

                        </div>
                        <div class="card-body">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <td>:</td>
                                        <td>{{ $data->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">NIP</th>
                                        <td>:</td>
                                        <td>{{ $data->nip }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Alamat</th>
                                        <td>:</td>
                                        <td>{{ $data->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Jenis Kelamin</th>
                                        <td>:</td>
                                        <td>{{ $data->jenkel }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">No. Telp</th>
                                        <td>:</td>
                                        <td>{{ $data->telp }}</td>
                                    </tr>

                                </thead>
                                <tbody>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Tambah Perusahaan</h5>

                        </div>
                        <form action="{{ route('admin.guru.pemetaan') }}" method="POST">
                            @csrf
                            <input type="text" name="guru_id" value="{{ $data->id }}" hidden>
                            <div class="card-body">
                                <div class="mb-4">
                                    <label class="form-label mb-2">Perusahaan</label>
                                    <select id="perusahaanDropdown" name="perusahaan_id" class="form-select select2"
                                        required></select>
                                </div>
                                <label class="form-label">Jurusan</label>
                                <div id="jurusanContainer"></div>

                                <button type="submit" class="btn btn-primary float-end mb-3">Tambah</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="row">
            @foreach ($data->perusahaan as $jurusanPerusahaan)
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama</th>
                                            <td>:</td>
                                            <td><a href="{{ route('admin.perusahaan.detail', $jurusanPerusahaan->perusahaan->id) }}"
                                                    style="text-decoration: none; color: inherit">
                                                    {{ $jurusanPerusahaan->perusahaan->nama }}
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Jurusan</th>
                                            <td>:</td>
                                            <td>
                                                {{ \Illuminate\Support\Str::words($jurusanPerusahaan->jurusan->nama, 4, '...') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="col">MOU</th>
                                            <td>:</td>
                                            <td>{{ $jurusanPerusahaan->perusahaan->mou }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Alamat</th>
                                            <td>:</td>
                                            <td>
                                                {{ \Illuminate\Support\Str::words($jurusanPerusahaan->perusahaan->alamat, 4, '...') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Email</th>
                                            <td>:</td>
                                            <td>{{ $jurusanPerusahaan->perusahaan->email }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">No. Telp</th>
                                            <td>:</td>
                                            <td>{{ $jurusanPerusahaan->perusahaan->no_telp }}</td>
                                        </tr>



                                    </thead>

                                </table>
                                <a href="{{ route('admin.guru.pemetaan_hapus', $jurusanPerusahaan->id) }}">
                                    <button type="submit" class="btn btn-danger float-end mb-3">Hapus</button>
                                </a>

                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Data Siswa</h5>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col" width="50%">Nama</th>
                                                <th scope="col" width="50%">Kelas</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jurusanPerusahaan->siswa as $siswa)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><a href="/admin/siswa/detail/{{ $siswa->siswa->id }}"
                                                            style="text-decoration: none; color: inherit;">
                                                            {{ $siswa->siswa->nama }}</a></td>
                                                    <td><a href="/admin/kelas/detail/{{ $siswa->siswa->kelas->id }}"
                                                            style="text-decoration: none; color: inherit;">
                                                            {{ $siswa->siswa->kelas->nama }}</a></td>



                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    @endforeach
                </div>



        </div>
    </main>
@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            // Inisialisasi select2 untuk perusahaan
            $('#perusahaanDropdown').select2({
                ajax: {
                    url: '/admin/perusahaan/search',
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: data.map(function(item) {
                                return {
                                    id: item.id,
                                    text: item.nama
                                };
                            })
                        };
                    }
                }
            });


            // Event handler untuk perubahan perusahaan
            $('#perusahaanDropdown').on('select2:select', function(e) {
                var perusahaan = e.params.data;
                $('#perusahaan_id').val(perusahaan.id); // Simpan ID perusahaan

                // Kode untuk mengambil jurusan berdasarkan perusahaanId
                loadJurusan(perusahaan.id);
            });

            // Fungsi untuk memuat dan menampilkan jurusan
            function loadJurusan(perusahaanId, selectedJurusanId = null) {
                var jurusanContainer = $('#jurusanContainer');
                jurusanContainer.empty();

                $.ajax({
                    url: '/admin/perusahaan/jurusan/guru/' + perusahaanId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        if (data.length === 0) {
                            jurusanContainer.append(
                                '<p>Sudah ada Pembimbing di Perusahaan tersebut</p>');
                        } else {
                            $.each(data, function(index, item) {
                                var isChecked = selectedJurusanId ? (item.id ==
                                    selectedJurusanId ? 'checked' : '') : (index === 0 ?
                                    'checked' : '');
                                var radioInput = `<div class="form-check">
                                    <input class="form-check-input" type="radio" name="jurusan_id" value="${item.id}" id="jurusan${item.id}" ${isChecked}>
                                    <label class="form-check-label" for="jurusan${item.id}">
                                        ${ item.jurusan.nama}
                                    </label>
                                </div>`;
                                jurusanContainer.append(radioInput);
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching jurusan:', error);
                        jurusanContainer.append('<p>Gagal memuat jurusan. Silakan coba lagi.</p>');
                    }
                });
            }

            function loadJurusanUpdate(perusahaanId, selectedJurusanId = null) {
                var jurusanContainer = $('#jurusanContainer');
                jurusanContainer.empty();

                $.ajax({
                    url: '/admin/perusahaan/jurusan/' + perusahaanId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        if (data.length === 0) {
                            jurusanContainer.append('<p>Jurusan tidak ditemukan.</p>');
                        } else {
                            $.each(data, function(index, item) {
                                var isChecked = (item.jurusan_id == selectedJurusanId ?
                                    'checked' : '');
                                var radioInput = `<div class="form-check">
                                    <input class="form-check-input" type="radio" name="jurusan_id" value="${item.id}" id="jurusan${item.id}" ${isChecked}>
                                    <label class="form-check-label" for="jurusan${item.id}">
                                        ${ item.jurusan.nama}
                                    </label>
                                </div>`;
                                jurusanContainer.append(radioInput);
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching jurusan:', error);
                        jurusanContainer.append('<p>Gagal memuat jurusan. Silakan coba lagi.</p>');
                    }
                });
            }
        });
    </script>
@endsection
