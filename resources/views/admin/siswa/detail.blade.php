@extends('admin.layout.app')
@section('title', 'Siswa')
@section('content')



    <main class="content">

        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Data {{ $siswa->nama }}</h5>
                        </div>
                        <div class="card-body">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">NIS</th>
                                        <td>:</td>
                                        <td>{{ $siswa->nis }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <td>:</td>
                                        <td>{{ $siswa->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Kelas</th>
                                        <td>:</td>
                                        <td>{{ $siswa->kelas->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Jenis Kelamin</th>
                                        <td>:</td>
                                        <td>{{ $siswa->jenkel }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Alamat</th>
                                        <td>:</td>
                                        <td>{{ $siswa->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Tanggal Lahir</th>
                                        <td>:</td>
                                        <td>{{ $siswa->tanggal_lahir }}</td>
                                    </tr>

                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Data Ortu {{ $siswa->nama }}</h5>
                        </div>
                        <div class="card-body">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>Nama Orang Tua / Wali</th>
                                        <td>:</td>
                                        <td>{{ $siswa->nama_ortu }}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat Orang tua</th>
                                        <td>:</td>
                                        <td>{{ $siswa->alamat_ortu }}</td>
                                    </tr>
                                    <tr>
                                        <th>Telepon Orang Tua / Wali</th>
                                        <td>:</td>
                                        <td>{{ $siswa->no_telp_ortu }}</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-6">

                    @foreach ($siswa->perusahaan as $perusahaan)
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Data Perusahaan</h5>
                            </div>
                            <div class="card-body">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>Perusahaan</th>
                                            <td>:</td>
                                            <td>{{ $perusahaan -> perusahaan -> perusahaan -> nama }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>:</td>
                                            <td>{{ $perusahaan -> status == 'pending' ? 'Menunggu' : 'Diterima' }}</td>

                                        </tr>
                                        <tr>
                                            <th>Periode</th>
                                            <td>:</td>
                                            <td>{{ $perusahaan -> periode[0] }} {{ $perusahaan -> tahun_awal }} - {{ $perusahaan -> periode[array_key_last($perusahaan -> periode)] }} {{ $perusahaan -> tahun_akhir }}</td>


                                        </tr>

                                    </thead>
                                </table>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Data Kehadiran</h5>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Data Nilai </h5>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Catatan Perusahan</h5>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                    @endforeach
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
                                <li><a class="dropdown-item" href="#" onclick="deleteData(${id})">Delete</a></li>
                                <li><a class="dropdown-item" href="/admin/siswa/edit/${id}">Edit</a></li>
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
