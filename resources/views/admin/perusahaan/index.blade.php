@extends('admin.layout.app')
@section('title', 'Perusahaan')
@section('content')


    <main class="content">
        <div class="container-fluid p-0">


            {{-- <h1 class="h3 mb-3">Perusahaan</h1> --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Data Perusahaan</h5>
                            <a href="{{ route('admin.perusahaan.create') }}"> <button type="button"
                                    class="btn btn-primary">Add Data</button></a>
                        </div>
                        <div class="card-body">

                                <table class="table" id="table-perusahaan">
                                    <thead>
                                        <tr>
                                            <td style="width: 10%">No</td>
                                            <td>Nama</td>
                                            <td>Image</td>
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

            // Pastikan tabel HTML dengan ID 'table-perusahaan' sudah ada di DOM
            $('#table-perusahaan').DataTable({
                // Data: (Jika data diambil secara asynchronous, letakkan di sini)
                autoWidth: false,
                data: [], // Contoh jika data kosong saat inisialisasi
                // Kolom: Sesuaikan dengan nama properti di data JSON
                columns: [{
                        data: null,
                        // title: 'No',
                        render: function(data, type, row, meta) {
                            return meta.row + 1;
                        }
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'image',
                        render: (image) => /* html */ `
                        <img src="${image}" alt="logo" width="100px" height="100px">
                        `
                    },
                    {
                        data: 'id',
                        render: (id) => /* html */ `
        <div class="dropdown" style="display: flex; justify-content: center; align-items: center;">
            <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/backend/align-justify.svg">
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="left: 50%; transform: translateX(-50%);">
                <li><a class="dropdown-item" href="/admin/perusahaan/detail/${id}">Detail</a></li>
                <li><a class="dropdown-item" href="/admin/perusahaan/edit/${id}">Edit</a></li>
                <li><a class="dropdown-item" href="#" onclick="deleteData(${id})">Delete</a></li>
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
                url: "{{ route('admin.perusahaan.perusahaan') }}",
                method: "GET",
                success: function(response) {
                    // Update data setelah respon Ajax diterima
                    $('#table-perusahaan').DataTable().clear().rows.add(response).draw();
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
                        url: 'perusahaan/delete/' + id, // Sesuaikan dengan route Anda
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
@endsection
