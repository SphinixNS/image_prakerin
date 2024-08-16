@extends('admin.layout.app')
@section('title', 'Perusahaan')
@section('content')
    <style>
        .wizard-step {
            display: none;
        }

        .wizard-step.active {
            display: block;
        }

        .file-upload {
            background-color: #ffffff;
            width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .file-upload-btn {
            width: 100%;
            margin: 0;
            color: #fff;
            background: #1FB264;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #15824B;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }

        .file-upload-btn:hover {
            background: #1AA059;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .file-upload-btn:active {
            border: 0;
            transition: all .2s ease;
        }

        .file-upload-content {
            display: none;
            text-align: center;
        }

        .file-upload-input {
            position: absolute;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            outline: none;
            opacity: 0;
            cursor: pointer;
        }

        .image-upload-wrap {
            margin-top: 20px;
            border: 4px dashed #1FB264;
            position: relative;
        }

        .image-dropping,
        .image-upload-wrap:hover {
            background-color: #1FB264;
            border: 4px dashed #ffffff;
        }

        .image-title-wrap {
            padding: 0 15px 15px 15px;
            color: #222;
        }

        .drag-text {
            text-align: center;
        }

        .drag-text h3 {
            font-weight: 100;
            text-transform: uppercase;
            color: #15824B;
            padding: 60px 0;
        }

        .file-upload-image {
            max-height: 200px;
            max-width: 200px;
            margin: auto;
            padding: 20px;
        }

        .remove-image {
            width: 200px;
            margin: 0;
            color: #fff;
            background: #cd4535;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #b02818;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }

        .remove-image:hover {
            background: #c13b2a;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .remove-image:active {
            border: 0;
            transition: all .2s ease;
        }
    </style>


    <main class="content">
        <div class="container-fluid p-0">

            {{-- <h1 class="h3 mb-3">Perusahaan</h1> --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h1 class="card-title mb-0">{{ $data ? 'Edit Data' : 'Tambah Data' }} Perusahaan</h1>
                            {{-- <button type="button" class="btn btn-primary">Add Data</button> --}}
                        </div>
                        <div class="card-body">

                            <form id="wizardForm"
                                action="{{ $data ? route('admin.perusahaan.update', $data->id) : route('admin.perusahaan.store') }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                               


                                <div id="step1" class="wizard-step active">

                                    <div class="file-upload">
                                        <button class="file-upload-btn" type="button"
                                            onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>
    
                                        <div class="image-upload-wrap">
                                            <input class="file-upload-input" type='file' name="image" onchange="readURL(this);"
                                                accept="image/*" />
                                            <div class="drag-text">
                                                <h3>Drag and drop a file or select add Image</h3>
                                            </div>
                                        </div>
                                        <div class="file-upload-content">
                                            <img class="file-upload-image" src="#" alt="your image" />
                                            <div class="image-title-wrap">
                                                <button type="button" onclick="removeUpload()" class="remove-image">Remove
                                                    <span class="image-title">Uploaded Image</span></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Nama Perusahaan</label>
                                                <input type="text" name="nama" class="form-control" placeholder=""
                                                    value="{{ old('nama', $data->nama ?? '') }}" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">MOU</label>
                                                <select name="mou" class="form-select" required>
                                                    @if ($data)
                                                        <option value="ya"
                                                            {{ old('mou') == 'ya' || $data->mou == 'ya' ? 'selected' : '' }}>
                                                            Ya
                                                        </option>
                                                        <option value="tidak"
                                                            {{ old('mou') == 'tidak' || $data->mou == 'tidak' ? 'selected' : '' }}>
                                                            Tidak</option>
                                                    @else
                                                        <option value="" hidden selected>Pilih Status</option>
                                                        <option value="ya" {{ old('mou') == 'ya' ? 'selected' : '' }}>Ya
                                                        </option>
                                                        <option value="tidak"
                                                            {{ old('mou') == 'tidak' ? 'selected' : '' }}>Tidak
                                                        </option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Jurusan</label>
                                                <div id="jurusan-inputs">
                                                    @if ($data)
                                                        @foreach ($data->jurusan as $item)
                                                            <div class="input-group mb-2 jurusan-group">
                                                                <select name="jurusan[]" class="form-select" required>
                                                                    @foreach ($jurusan as $jrs)
                                                                        <option value="{{ $jrs->id }}"
                                                                            {{ old('jurusan', $item->jurusan_id) == $jrs->id ? 'selected' : '' }}>
                                                                            {{ $jrs->nama }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="input-group mb-2 jurusan-group">
                                                            <select name="jurusan[]" class="form-select" required>
                                                                <option value="" hidden selected>Pilih Jurusan
                                                                </option>
                                                                @foreach ($jurusan as $jrs)
                                                                    <option value="{{ $jrs->id }}"
                                                                        {{ old('jurusan') == $jrs->id ? 'selected' : '' }}>
                                                                        {{ $jrs->nama }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Kuota</label>
                                                <div id="kuota-inputs">
                                                    @if ($data)
                                                        @foreach ($data->jurusan as $item)
                                                            <div class="input-group mb-2 kuota-group">
                                                                <input type="number" name="kuota[]" class="form-control"
                                                                    placeholder="" value="{{ old('kuota', $item->total) }}"
                                                                    required>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="input-group mb-2 kuota-group">
                                                            <input type="number" name="kuota[]" class="form-control"
                                                                placeholder="" value="{{ old('kuota') }}" required>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-primary mt-2 mx-2"
                                                id="btn-add">+</button>
                                            <button type="button" class="btn btn-danger mt-2" id="btn-remove">-</button>
                                        </div>


                                    </div>

                                    <button type="button" class="btn btn-primary float-end"
                                        onclick="nextStep()">Next</button>
                                </div>



                                <div id="step2" class="wizard-step">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Alamat</label>
                                                <input type="text" name="alamat" class="form-control" placeholder=""
                                                    value="{{ old('alamat', $data->alamat ?? '') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Lokasi</label>
                                                <input type="text" name="lokasi" class="form-control" placeholder=""
                                                    value="{{ old('lokasi', $data->lokasi ?? '') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control" placeholder=""
                                                    value="{{ old('email', $data->email ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">No Telepon</label>
                                                <input type="tel" name="no_telp" class="form-control" placeholder=""
                                                    value="{{ old('no_telp', $data->no_telp ?? '') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Website</label>
                                                <input type="url" name="website" class="form-control" placeholder=""
                                                    value="{{ old('website', $data->website ?? '') }}">
                                            </div>

                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-secondary"
                                        onclick="prevStep()">Previous</button>
                                    <button type="submit" class="btn btn-primary float-end">Save</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </main>
@endsection

@section('scripts')
<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <script>
        function nextStep() {
            document.getElementById('step1').classList.remove('active');
            document.getElementById('step2').classList.add('active');
        }

        function prevStep() {
            document.getElementById('step2').classList.remove('active');
            document.getElementById('step1').classList.add('active');
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.image-upload-wrap').hide();

                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();

                    $('.image-title').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload();
            }
        }

        function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
        }
        $('.image-upload-wrap').bind('dragover', function() {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function() {
            $('.image-upload-wrap').removeClass('image-dropping');
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btnAdd = document.getElementById('btn-add');
            const btnRemove = document.getElementById('btn-remove');
            const jurusanInputs = document.getElementById('jurusan-inputs');
            const kuotaInputs = document.getElementById('kuota-inputs');

            // Mengambil data jurusan yang sudah ada dari elemen HTML
            const jurusanOptions = Array.from(document.querySelectorAll('#jurusan-inputs select option')).map(opt =>
                ({
                    value: opt.value,
                    text: opt.textContent
                }));

            function updateJurusanOptions() {
                const selectedValues = Array.from(document.querySelectorAll('#jurusan-inputs select'))
                    .map(select => select.value);

                document.querySelectorAll('#jurusan-inputs select').forEach(select => {
                    Array.from(select.options).forEach(option => {
                        option.style.display = selectedValues.includes(option.value) ? 'none' : '';
                    });
                });
            }

            function addField() {
                // Mengambil semua nilai jurusan yang sudah dipilih dari semua dropdown
                const selectedValues = new Set(Array.from(document.querySelectorAll('#jurusan-inputs select'))
                    .map(select => select.value));

                // Menyiapkan elemen dropdown jurusan baru
                const newJurusanGroup = document.createElement('div');
                newJurusanGroup.classList.add('input-group', 'mb-2', 'jurusan-group');

                // Menyaring opsi jurusan yang belum dipilih
                const uniqueOptions = new Set(); // Untuk menghindari opsi duplikat

                const optionsHtml = jurusanOptions
                    .filter(opt => !selectedValues.has(opt.value)) // Hanya ambil opsi yang belum dipilih
                    .map(opt => {
                        if (!uniqueOptions.has(opt.value)) { // Cek dan tambahkan jika belum ada
                            uniqueOptions.add(opt.value);
                            return `<option value="${opt.value}">${opt.text}</option>`;
                        }
                        return ''; // Lewati opsi yang sudah ada
                    })
                    .join('');

                newJurusanGroup.innerHTML = `
        <select name="jurusan[]" class="form-select" required>
            <option value="" hidden selected>Pilih Jurusan</option>
            ${optionsHtml}
        </select>
    `;
                jurusanInputs.appendChild(newJurusanGroup);

                // Menambahkan field kuota yang sesuai
                const newKuotaGroup = document.createElement('div');
                newKuotaGroup.classList.add('input-group', 'mb-2', 'kuota-group');
                newKuotaGroup.innerHTML =
                    `<input type="number" name="kuota[]" class="form-control" placeholder="" required>`;
                kuotaInputs.appendChild(newKuotaGroup);

                // Memperbarui opsi jurusan untuk dropdown yang ada
                updateJurusanOptions();
            }


            function removeField() {
                const jurusanGroups = document.querySelectorAll('#jurusan-inputs .jurusan-group');
                const kuotaGroups = document.querySelectorAll('#kuota-inputs .kuota-group');

                if (jurusanGroups.length > 1) {
                    const lastJurusanGroup = jurusanGroups[jurusanGroups.length - 1];
                    const lastSelect = lastJurusanGroup.querySelector('select');

                    // Menambahkan kembali opsi jurusan dari field yang dihapus
                    if (lastSelect) {
                        const optionsHtml = Array.from(lastSelect.options).map(option =>
                            `<option value="${option.value}" ${option.style.display === 'none' ? 'style="display:none"' : ''}>${option.text}</option>`
                        ).join('');

                        document.querySelectorAll('#jurusan-inputs select').forEach(select => {
                            Array.from(select.options).forEach(option => {
                                if (option.style.display === 'none') {
                                    option.style.display = '';
                                }
                            });
                        });

                        lastSelect.innerHTML = optionsHtml;
                    }

                    jurusanInputs.removeChild(lastJurusanGroup);
                    kuotaInputs.removeChild(kuotaGroups[kuotaGroups.length - 1]);

                    updateJurusanOptions();
                }
            }

            btnAdd.addEventListener('click', addField);
            btnRemove.addEventListener('click', removeField);

            // Initial update of options
            updateJurusanOptions();
        });
    </script>
@endsection
