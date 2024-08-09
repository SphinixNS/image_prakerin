@extends('admin.layout.app')
@section('title', 'Tambah Kelas')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h1 class="card-title mb-0">Pemetaan Siswa</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.pemetaan.store') }}" method="POST">
                                @csrf
                                <input type="text" name="jurusan_id" value="{{$kelas -> konsentrasi -> jurusan -> id}}" hidden>
                                <input type="text" name="kelas_id" value="{{$kelas -> id}}" hidden>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-4">
                                            <label class="form-label mb-2">Pilih Siswa</label>
                                            <select id="siswaDropdown" name="siswa_id[]" class="form-select select2"
                                                multiple required></select>
                                        </div>

                                        <div class="mb-4">
                                            <label class="form-label mb-2">Periode Awal</label>
                                            <input type="text" class="form-control" name="periode_awal" id="periodeAwal">
                                        </div>



                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Perusahaan </label>
                                        <div class="mb-4">
                                            <select id="perusahaanDropdown" name="perusahaan_id" class="form-select select2"
                                                required></select>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label mb-2">Periode Akhir</label>
                                            <input type="text" class="form-control" name="periode_akhir"
                                                id="periodeAkhir">
                                        </div>

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
            // Inisialisasi select2 untuk siswa
            $('#siswaDropdown').select2({
                ajax: {
                    url: '/admin/siswa/search/' + {{ $kelas->id }},
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

            // Event handler untuk perubahan siswa
            $('#siswaDropdown').on('select2:select', function(e) {
                var siswa = e.params.data;
                var selectedIds = $('#siswaDropdown').val();
            });

            // Event handler untuk menghapus siswa dari pilihan
            $('#siswaDropdown').on('select2:unselect', function(e) {
                var siswa = e.params.data;
                var selectedIds = $('#siswaDropdown').val();
            });

            // select perusahaan

            // Inisialisasi select2 untuk perusahaan
            $('#perusahaanDropdown').select2({
                ajax: {
                    url: '/admin/perusahaan/pemetaan/'+ {{$kelas -> konsentrasi -> jurusan -> id}}, // Replace with the URL to fetch companies
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: data.map(function(item) {
                                return {
                                    id: item.id,
                                    text: item.nama + ' => ' + item.jurusan[0].kuota + ' orang'
                                };
                            })
                        };
                    }
                }
            });
            $('#perusahaanDropdown').on('select2:select', function(e) {
                var siswa = e.params.data;
                var selectedIds = $('#siswaDropdown').val();
            });





        });
    </script>

    {{-- Script Periode Awal --}}


    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <!-- Bootstrap Datepicker Language JS for Indonesian -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.id.min.js">
    </script>

    <script>
        $(document).ready(function() {



            $('#periodeAwal').datepicker({
                format: "MM yyyy",
                startView: "months",
                minViewMode: "months",
                language: "id",
                autoclose: true
            });
            $('#periodeAkhir').datepicker({
                format: "MM yyyy",
                startView: "months",
                minViewMode: "months",
                language: "id",
                autoclose: true
            });

        });
    </script>
@endsection
