@extends('tampilan_superadmin.index')
@section('kelompok')

    <style>
        /* Blink animation */
        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .blink {
            animation: blink 1s infinite;
        }
    </style>
    <div class="content-inner container-fluid pb-0" id="page_layout">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="profile-img position-relative me-3 mb-3 mb-lg-0 profile-logo profile-logo1">
                                    <img src="/admin/images/avatars/01.png" alt="User-Profile"
                                        class="theme-color-default-img img-fluid rounded-pill avatar-100" loading="lazy" />
                                    <img src="/admin/images/avatars/avtar_1.png" alt="User-Profile"
                                        class="theme-color-purple-img img-fluid rounded-pill avatar-100" loading="lazy" />
                                    <img src="/admin/images/avatars/avtar_2.png" alt="User-Profile"
                                        class="theme-color-blue-img img-fluid rounded-pill avatar-100" loading="lazy" />
                                    <img src="/admin/images/avatars/avtar_4.png" alt="User-Profile"
                                        class="theme-color-green-img img-fluid rounded-pill avatar-100" loading="lazy" />
                                    <img src="/admin/images/avatars/avtar_5.png" alt="User-Profile"
                                        class="theme-color-yellow-img img-fluid rounded-pill avatar-100" loading="lazy" />
                                    <img src="/admin/images/avatars/avtar_3.png" alt="User-Profile"
                                        class="theme-color-pink-img img-fluid rounded-pill avatar-100" loading="lazy" />
                                </div>
                                <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                                    <h4 class="me-2 h4">{{ Auth::guard('superadmin')->user()->namalengkap }}</h4>
                                    <span> - Web Developer</span>
                                </div>
                            </div>
                            <ul class="d-flex nav nav-pills mb-0 text-center profile-tab" data-toggle="slider-tab"
                                id="profile-pills-tab" role="tablist">
                                {{-- <li class="nav-item">
                                        <a class="nav-link active show" data-bs-toggle="tab" href="#profile-feed"
                                            role="tab" aria-selected="false">Feed</a>
                                    </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link active show" data-bs-toggle="tab" href="#profile-activity"
                                        role="tab" aria-selected="false">DATA kelompok</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile-profile" role="tab"
                                        aria-selected="false">TAMBAH DATA kelompok</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="profile-content tab-content iq-tab-fade-up">

                    <div id="profile-activity" class="tab-pane fade active show">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Activity</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger mt-4">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if (session('success'))
                                    <div class="alert alert-success mt-4">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <div class="table-responsive">
                                    <table id="example" class="stripe hover"
                                        style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                                        <thead>
                                            <tr>

                                                <th>Kelompok</th>
                                                <th>NPM</th>
                                                <th>Nama Ketua</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allkelompok as $kelompok)
                                                <td>{{ $kelompok->nokelompok }}</td>
                                                <td>{{ $kelompok->npm }}</td>
                                                <td>{{ $kelompok->mahasiswa->namalengkap }}</td>

                                                <td>
                                                    <a href="{{ route('superadmin.kelompok.edit', ['nokelompok' => $kelompok->nokelompok]) }}" class="btn btn-primary">
                                                        Edit
                                                    </a>  <form
                                                            action="{{ route('superadmin.kelompok.delete', ['nokelompok' => $kelompok->nokelompok]) }}"
                                                            method="POST" style="display: inline;"> 
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                    </form>


                                                </td>
                                                </tr>

                                                <!-- Modal Edit kelompok -->
                                            @endforeach
                                        </tbody>
                                        <tfoot>

                                            <tr>
                                                <th>NPM</th>
                                                <th>Nama Ketua</th>
                                                <th>Kelompok</th>
                                                <th>Aksi</th>
                                            </tr>

                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            <!-- Modal Edit Mahasiswa -->

                        </div>

                    </div>

                    <div id="profile-profile" class="tab-pane fade">
                        <div class="card">
                            <div class="card-header">
                                <div class="header-title">
                                    <h4 class="card-title">Pengumuman</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="text-left">

                                    <div class="mt-3">

                                        <p class="d-inline-block pl-3"> - Perhatikan untuk ketua kelompok akan dipilih
                                            dengan mengisi form data diri lalu diberikan kepada admin, membawa bukti
                                            pembayaran.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <p class="mb-3">
                                <form method="POST" class="row" action="{{ route('superadmin.simpan.kelompok') }}"
                                    enctype="multipart/form-data" id="kelompokForm">
                                    @csrf

                                    <div class="col-sm-6">
                                        <div class="form-group col-md-8">
                                            <label class="form-label" for="nokelompok">Nomor Kelompok</label>
                                            <input type="text" name="nokelompok" class="form-control"
                                                value="{{ sprintf('%03d', $nokelompok) }}" readonly>
                                        </div>

                                        <!-- Mahasiswa -->
                                        <div id="mahasiswa">
                                            <!-- Elemen select untuk nomor pokok mahasiswa -->
                                        </div>

                                        <!-- Tambah / Kurangi Mahasiswa -->
                                        <div class="form-group">
                                            <button type="button" class="btn btn-success"
                                                onclick="tambahMahasiswa()">Tambah Mahasiswa</button>
                                            <button type="button" class="btn btn-danger"
                                                onclick="kurangiMahasiswa()">Kurangi Mahasiswa</button>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="button" class="btn btn-danger">Batal</button>
                                    </div>
                                </form>



                            </div>
                        </div>
                    </div>


                    <!-- Modal Edit kelompok -->
                 

                </div>
            </div>
        </div>
        <!-- div fb Start -->
    </div>




    <!-- Footer Section Start -->

    @include('tampilan_superadmin.javascript')
    <script>
        $(document).ready(function() {
            // Inisialisasi select2 untuk elemen yang ada saat halaman dimuat
            $('[id^="npm"]').select2({
                placeholder: "Cari Data Mahasiswa",
                minimumInputLength: 2,
                ajax: {
                    url: "{{ route('superadmin.kelompok.search') }}",
                    dataType: "json",
                    delay: 250,
                    data: function(params) {
                        return {
                            search: params.term,
                            page: params.page || 1,
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(mahasiswa) {
                                return {
                                    id: mahasiswa.npm,
                                    text: mahasiswa.npm + ' - ' + mahasiswa.namalengkap
                                };
                            }),
                        };
                    },
                    cache: true,
                },
            });
        });

        // Fungsi untuk menambahkan elemen select dinamis
        // Fungsi untuk menambahkan elemen select dinamis
        function tambahMahasiswa() {
            let jumlahMahasiswa = $('[id^="npm"]').length + 1; // Hitung jumlah elemen select yang ada
            if (jumlahMahasiswa <= 10) { // Batasi jumlah mahasiswa
                let label = jumlahMahasiswa === 1 ? '<h5 class="text-warning">Ketua</h5>' :
                    ''; // Label "Ketua" ditambahkan hanya untuk NPM pertama
                let selectHTML = `<div class="form-group">
                                <label class="form-label" for="npm${jumlahMahasiswa}">Nomor Pokok Mahasiswa ${jumlahMahasiswa} ${label}</label>
                                <select name="npm[]" id="npm${jumlahMahasiswa}"
                                    class="selectpicker form-select border-success @error('npm') is-invalid @enderror"
                                    data-live-search="true">
                                    <!-- Isi pilihan NPM di sini -->
                                </select>
                            </div>`;
                $('#mahasiswa').append(selectHTML); // Tambahkan elemen select ke dalam div dengan id 'mahasiswa'
                $(`#npm${jumlahMahasiswa}`).select2({ // Inisialisasi select2 untuk elemen yang baru ditambahkan
                    placeholder: "Cari Data Mahasiswa",
                    minimumInputLength: 2,
                    ajax: {
                        url: "{{ route('superadmin.kelompok.search') }}",
                        dataType: "json",
                        delay: 250,
                        data: function(params) {
                            return {
                                search: params.term,
                                page: params.page || 1,
                            };
                        },
                        processResults: function(data) {
                            return {
                                results: $.map(data, function(mahasiswa) {
                                    return {
                                        id: mahasiswa.npm,
                                        text: mahasiswa.npm + ' - ' + mahasiswa.namalengkap
                                    };
                                }),
                            };
                        },
                        cache: true,
                    },
                });
            } else {
                alert('Maksimal 10 mahasiswa dalam satu kelompok.');
            }
        }

        // Fungsi untuk menghapus elemen select dinamis
        function kurangiMahasiswa() {
            let jumlahMahasiswa = $('[id^="npm"]').length; // Hitung jumlah elemen select yang ada
            if (jumlahMahasiswa > 5) { // Batasi jumlah mahasiswa
                $(`#npm${jumlahMahasiswa}`).parent().remove(); // Hapus elemen select terakhir
            } else {
                alert('Minimal 5 mahasiswa dalam satu kelompok.');
            }
        }
    </script>




    <!-- Select2 Script -->
    {{-- <script src="/admin/js/plugins/select2.js" defer></script> --}}

    <script src="/admin/js/plugins/fslightbox.js" defer></script>

    </main>
@endsection
