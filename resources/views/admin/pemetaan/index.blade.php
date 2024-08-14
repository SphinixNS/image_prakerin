@extends('admin.layout.app')
@section('title', 'Kelas')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Siswa</h5>
                                </div>
                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="user"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3" id="total_siswa"></h1>
                            <div class="mb-0">
                                <span class="text-muted tahun-ajaran"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Terpetakan</h5>
                                </div>
                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="map-pin"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3" id="terpetakan"></h1>
                            <div class="mb-0">
                                <span class="text-muted tahun-ajaran"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Mencari</h5>
                                </div>
                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="search"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3" id="belum_terpetakan"></h1>
                            <div class="mb-0">
                                <span class="text-muted tahun-ajaran"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Konfirmasi</h5>
                                </div>
                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="check-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3" id="konfirmasi"></h1>
                            <div class="mb-0">
                                <span class="text-muted tahun-ajaran"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Data Kelas</h5>
                            {{-- <a href="{{ route('admin.pemetaan.create') }}"> <button type="button" class="btn btn-primary">Pemetaan</button></a> --}}
                        </div>
                        <div class="card-body">

                            <table class="table" id="table-pemetaan">
                                <thead>
                                    <tr>
                                        <td style="width: 10%">No</td>
                                        <td>Nama</td>
                                        <td>Siswa</td>
                                        <td>Diterima</td>
                                        <td>Konfirmasi</td>
                                        <td>Mencari</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>

                            </table>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </main>
@endsection

@section('scripts')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <script>
        $(document).ready(function() {

            // Pastikan tabel HTML dengan ID 'table-pemetaan' sudah ada di DOM
            $('#table-pemetaan').DataTable({
                // Data: (Jika data diambil secara asynchronous, letakkan di sini)
                data: [], // Contoh jika data kosong saat inisialisasi
                autoWidth: false,


                // Kolom: Sesuaikan dengan nama properti di data JSON
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + 1;
                        }
                    },
                    {
                        data: 'nama',
                        name: 'nama',
                        render: function(data, type, row) {
                            var kelasName = data; // Menggunakan data yang sudah ada
                            var kelasid = row.id; // Pastikan `id` adalah property yang ada pada row
                            return '<a href="/admin/kelas/detail/' + kelasid + '" style="text-decoration: none; color: inherit;">' + kelasName + '</a>';
                        }
                    },
                    {
                        data: 'siswa_count',
                        name: 'siswa_count',
                        // render: (siswa_count) => `${siswa_count} orang`
                    },
                    {
                        data: 'diterima',
                        name: 'diterima'
                    },
                    {
                        data: 'pending',
                        name: 'pending'
                    },
                    {
                        data: 'mencari',
                        name: 'mencari'
                    },
                    {
                        data: 'id',
                        render: (id) => /* html */ `
                 <div class="dropdown">
                          <button class="btn" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="/backend/align-justify.svg">
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item"
                               href="/admin/pemetaan/create/${id}"">Pemetaan</a>
                            </li>

                          </ul>
                        </div>
                `
                    },

                ],
                "columnDefs": [{
                    "targets": '_all', // Menerapkan ke semua kolom
                    "render": function(data, type, row, meta) {
                        return '<div style="white-space: nowrap;">' + data +
                            '</div>'; // Membungkus konten dalam div untuk menghindari pemotongan teks
                    }
                }],
                // dom:'rtp',
                pagingType: 'simple_numbers',
                orderCellsTop: true,

                // Konfigurasi tambahan (opsional)
                order: [
                    [0, 'asc']
                ], // Urutkan berdasarkan kolom pertama secara ascending
                paging: true, // Aktifkan pagination
                searching: true, // Aktifkan pencarian
                info: true, // Tampilkan informasi jumlah data

                lengthMenu: [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ] // Opsi jumlah data per halaman
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('admin.pemetaan.pemetaan') }}",
                method: "GET",
                success: function(response) {
                    // Update data setelah respon Ajax diterima
                    $('#table-pemetaan').DataTable().clear().rows.add(response).draw();
                }
            });
        });
    </script>



    <script>
        function deleteData(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',

                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Kirim permintaan AJAX ke server untuk menghapus data
                    $.ajax({
                        url: 'pemetaan/delete/' + id, // Sesuaikan dengan route Anda
                        type: 'GET',
                        success: function(response) {
                            Swal.fire(
                                'Terhapus!',
                                'Data berhasil dihapus.',
                                'success'
                            )
                            // Refresh halaman atau update tampilan tabel
                            location.reload()
                        },
                        error: function(error) {
                            Swal.fire(
                                'Gagal!',
                                'Terjadi kesalahan saat menghapus data.',
                                'error'
                            )
                        }
                    });
                }
            })
        }
    </script>

    <script>
        $(document).ready(function() {
            // Fungsi untuk mengambil data dari controller
            function fetchData() {
                $.ajax({
                    url: '/admin/pemetaan/pemetaan_all', // Ganti dengan URL endpoint Anda
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        // Update nilai elemen HTML dengan data yang diterima
                        $('#total_siswa').text(response.siswa);
                        $('#terpetakan').text(response.terpetakan);
                        $('#belum_terpetakan').text(response.belum_terpetakan);
                        $('#konfirmasi').text(response.konfirmasi);

                        // Update tahun ajaran
                        $('.tahun-ajaran').text('Tahun Ajaran ' + response.tahun );
                    },
                    error: function(xhr, status, error) {
                        console.error('Terjadi kesalahan: ', error);
                    }
                });
            }

            // Panggil fungsi fetchData() untuk pertama kali saat halaman dimuat
            fetchData();

            // Jika Anda ingin memperbarui data secara berkala, misalnya setiap 5 detik:
            setInterval(fetchData, 5000); // 5000ms = 5 detik
        });
    </script>
@endsection
