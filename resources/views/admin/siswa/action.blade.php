@extends('admin.layout.app')
@section('title', 'Tambah Siswa')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            {{-- <h1 class="h3 mb-3">Siswa</h1> --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h1 class="card-title mb-0">{{ $data ? 'Edit Data' : 'Tambah Data' }} Siswa</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ $data ? route('admin.siswa.update', $data->id) : route('admin.siswa.store') }}"
                                method="POST">
                                @csrf

                                <label class="form-label">NIS</label>
                                <input type="text" name="nis" class="form-control mb-3" placeholder=""
                                    value="{{ old('nis', $data->nis ?? '') }}" required>

                                <label class="form-label">Nama Siswa</label>
                                <input type="text" name="nama" class="form-control mb-3" placeholder=""
                                    value="{{ old('nama', $data->nama ?? '') }}" required>


                                <label class="form-label">Kelas </label>
                                <div class="mb-5">
                                    <select id="kelasDropdown" name="kelas_id" class="form-select select2"
                                        required></select>
                                </div>



                                <button type="submit" class="btn btn-primary float-end">Save</button>
                            </form>


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
            // Inisialisasi select2 untuk kelas
            $('#kelasDropdown').select2({
                ajax: {
                    url: '/admin/kelas/search',
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

            // Jika ada data kelas yang telah dipilih (saat update)
            @if ($data && $data->kelas)
                var selectedKelasId = {{ $data->kelas->id }};
                var selectedKelasNama = '{{ $data->kelas->nama }}';

                // Set value dan text pada select2
                var option = new Option(selectedKelasNama, selectedKelasId, true, true);
                $('#kelasDropdown').append(option).trigger('change');

                // Ambil dan tampilkan jurusan yang sesuai dengan kelas yang telah dipilih
                // Jangan langsung memuat jurusan saat halaman pertama kali dimuat
                $('#kelas_id').val(selectedKelasId);
            @endif

        });
    </script>
@endsection
