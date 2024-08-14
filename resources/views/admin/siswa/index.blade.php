@extends('admin.layout.app')
@section('title', 'Siswa')
@section('content')

    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            width: 80%;
            max-width: 500px;
            text-align: center;
            animation: fadeIn 0.3s ease;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>

    <main class="content">

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
                                    <i class="align-middle" data-feather="truck"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">34</h1>
                        <div class="mb-0">
                            <span class="text-muted">Tahun 2024-2025</span>
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
                                    <i class="align-middle" data-feather="users"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">14</h1>
                        <div class="mb-0">
                            <span class="text-muted">Tahun 2024-2025</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Mencari </h5>
                            </div>
                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="users"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">10</h1>
                        <div class="mb-0">
                            <span class="text-muted">Tahun 2024-2025</span>
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
                                    <i class="align-middle" data-feather="users"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">10</h1>
                        <div class="mb-0">
                            <span class="text-muted">Tahun 2024-2025</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- Modal Import Start --}}
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2 class="card-title mb-0"> Import Data </h2>
                <form action="{{ route('admin.siswa.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <table class="table">
                            <tr>
                                <td>
                                    <label for="file" class="form-label">Pilih File</label>
                                </td>
                                <td> : </td>
                                <td>
                                    <input type="file" class="form-control" id="file" name="file" required>
                                    <span class="text-danger" style="font-size: 0.75em;">*pastikan file yang di upload
                                        sesuai dengan template</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="kelas" class="form-label">Pilih Kelas</label>
                                </td>
                                <td> : </td>
                                <td>
                                    <select id="kelasDropdown" name="kelas_id" class="select2" style=" width: 100%;"
                                        required></select>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <button type="submit" class="btn btn-primary">Import</button>
                </form>
            </div>
        </div>
        {{-- Modal Import End --}}





        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Data Siswa</h5>
                            <div class="d-flex justify-content-end align-items-center">
                                <button type="button" class="btn btn-primary mx-2" id="openModalBtn">Import Data</button>
                                <a href="{{ route('admin.siswa.create') }}">
                                    <button type="button" class="btn btn-primary mx-2">Add Data</button>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table" id="table-siswa">
                                <thead>
                                    <tr>
                                        <td style="width: 10%">No</td>
                                        <td>Nama</td>
                                        <td>Kelas</td>
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

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/smoothness/jquery-ui.css">
    <!-- jQuery UI JS -->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


    {{-- Modal JS --}}
    <script>
        // Get modal element
        var modal = document.getElementById("myModal");
        // Get open modal button
        var openModalBtn = document.getElementById("openModalBtn");
        // Get close button
        var closeBtn = document.getElementsByClassName("close")[0];

        // Listen for open click
        openModalBtn.addEventListener("click", function() {
            modal.style.display = "flex";
        });

        // Listen for close click
        closeBtn.addEventListener("click", function() {
            modal.style.display = "none";
        });

        // Listen for outside click
        window.addEventListener("click", function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        });
    </script>
    {{-- End Modal JS --}}

    <script>
        $(document).ready(function() {
            $('#table-siswa').DataTable({
                data: [],
                autoWidth: false,
                responsive: true, // Menambahkan opsi responsif
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + 1;
                        }
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'kelas.nama',
                        name: 'kelas.nama'
                    },
                    {
                        data: 'id',
                        render: (id) => `
                        <div class="dropdown">
                            <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="/backend/align-justify.svg">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="/admin/siswa/detail/${id}">Detail</a></li>
                                <li><a class="dropdown-item" href="/admin/siswa/edit/${id}">Edit</a></li>
                                <li><a class="dropdown-item" href="#" onclick="deleteData(${id})">Delete</a></li>
                            </ul>
                        </div>
                    `
                    }
                ],
                columnDefs: [{
                    targets: '_all',
                    render: function(data, type, row, meta) {
                        return '<div style="white-space: nowrap;">' + data + '</div>';
                    }
                }],
                pagingType: 'simple',
                orderCellsTop: true,
                order: [
                    [0, 'asc']
                ],
                paging: true,
                searching: true,
                info: true,
                lengthMenu: [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ]
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('admin.siswa.siswa') }}",
                method: "GET",
                success: function(response) {
                    $('#table-siswa').DataTable().clear().rows.add(response).draw();
                }
            });


        });

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
                    $.ajax({
                        url: 'siswa/delete/' + id,
                        type: 'GET',
                        success: function(response) {
                            Swal.fire('Terhapus!', 'Data berhasil dihapus.', 'success');
                            $('#table-siswa').DataTable().clear().rows.add(response).draw();
                            
                        },
                        error: function(error) {
                            Swal.fire('Gagal!', 'Terjadi kesalahan saat menghapus data.', 'error');
                        }
                    });
                }
            })
        }
    </script>

   



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


        });
    </script>
@endsection
