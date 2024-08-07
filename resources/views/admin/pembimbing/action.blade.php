@extends('admin.layout.app')
@section('title', 'Tambah Pembimbing')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h1 class="card-title mb-0">{{ $data ? 'Edit Data' : 'Tambah Data' }} Pembimbing</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ $data ? route('admin.pembimbing.update', $data->id) : route('admin.pembimbing.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label">Nama Pembimbing</label>
                                        <input type="text" name="nama" class="form-control mb-3" value="{{ old('nama', $data->nama ?? '') }}" required>

                                        <label class="form-label">NIP</label>
                                        <input type="text" name="nip" class="form-control mb-3" value="{{ old('nip', $data->nip ?? '') }}" required>

                                        <label class="form-label">No Telp</label>
                                        <input type="text" name="no_telp" class="form-control mb-3" value="{{ old('no_telp', $data->no_telp ?? '') }}">

                                        <label class="form-label">Jenkel</label>
                                        <select name="jenkel" class="form-select mb-3" required>
                                            @if ($data)
                                                <option value="Laki-Laki" {{ $data->jenkel == "Laki-Laki" ? 'selected' : '' }}>Laki-Laki</option>
                                                <option value="Perempuan" {{ $data->jenkel == "Perempuan" ? 'selected' : '' }}>Perempuan</option>
                                            @else
                                                <option value="" selected hidden>Pilih Jenis Kelamin</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-4">
                                            <label class="form-label mb-2">Perusahaan</label>
                                            <select id="perusahaanDropdown" name="perusahaan_id" class="form-select select2" required></select>
                                        </div>
                                        <label class="form-label">Jurusan</label>
                                        <div id="jurusanContainer"></div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary float-end">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
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

            // Jika ada data perusahaan yang telah dipilih (saat update)
            @if ($data && $data-> perusahaan)
                var selectedPerusahaanId = {{ $data -> perusahaan -> perusahaan_id }};
                var selectedPerusahaanNama = '{{ $data->perusahaan->perusahaan->nama }}';
                var selectedJurusanId = {{ $data->perusahaan->jurusan_id}};
                
                // Set value dan text pada select2
                var option = new Option(selectedPerusahaanNama, selectedPerusahaanId, true, true);
                $('#perusahaanDropdown').append(option).trigger('change');

                // Ambil dan tampilkan jurusan yang sesuai dengan perusahaan yang telah dipilih
                // Jangan langsung memuat jurusan saat halaman pertama kali dimuat
                $('#perusahaan_id').val(selectedPerusahaanId);
                console.log('selectedJurusanId : ', selectedJurusanId);
                
                loadJurusanUpdate(selectedPerusahaanId, selectedJurusanId);
            @endif

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
                    url: '/admin/perusahaan/jurusan/' + perusahaanId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        if (data.length === 0) {
                            jurusanContainer.append('<p>Jurusan tidak ditemukan.</p>');
                        } else {
                            $.each(data, function(index, item) {
                                var isChecked = selectedJurusanId ? (item.id == selectedJurusanId ? 'checked' : '') : (index === 0 ? 'checked' : '');
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
                                var isChecked = (item.jurusan_id == selectedJurusanId ? 'checked' : '') ;
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
