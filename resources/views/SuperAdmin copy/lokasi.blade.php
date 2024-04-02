@extends('tampilan_superadmin.index')
@section('lokasi')

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
                                        role="tab" aria-selected="false">DATA LOKASI KKN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile-profile" role="tab"
                                        aria-selected="false">TAMBAH DATA LOKASI KKN</a>
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
                                    <h4 class="card-title">{{ $judul }}</h4>
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
                                                <th>NIP</th>
                                                <th>Nama Lengkap</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Nomor Handphone</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($alllokasi as $lokasi)
                                                <tr>
                                                    <td>{{ $lokasi->nip }}</td>
                                                    <td>{{ $lokasi->nama }}</td>
                                                    <td>{{ $lokasi->jenis_kelamin }}</td>
                                                    <td>{{ $lokasi->nohp }}</td>

                                                    <td>
                                                        <!-- Tombol untuk membuka modal -->
                                                        <button type="button" class="btn btn-success"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#viewlokasiModal{{ $lokasi->id }}">
                                                            Lihat Detail
                                                        </button>
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editlokasiModal{{ $lokasi->id }}">
                                                            Edit
                                                        </button>
                                                        <form
                                                            action="{{ route('superadmin.lokasi.delete', ['id' => $lokasi->id]) }}"
                                                            method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                        </form>


                                                    </td>
                                                </tr>

                                                <!-- Modal Edit lokasi -->
                                            @endforeach
                                        </tbody>
                                        <tfoot>

                                            <tr>
                                                <th>NIP</th>
                                                <th>Nama Lengkap</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Nomor Handphone</th>
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


                                <form method="POST" class="row" action="{{ route('superadmin.simpan.lokasi') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-sm-6">
                                        <!--pisah-->

                                        <div class="form-group">
                                            <label class="form-label" for="provinsi">Provinsi</label>
                                            <select name="provinsi"
                                                class="form-select border-success @error('provinsi') is-invalid @enderror"
                                                data-trigger id="provinsi">
                                                <option value="">Pilih Provinsi</option>
                                                @foreach ($provinces as $provinsi)
                                                    <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('provinsi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="kota">Kota/Kabupaten</label>
                                            <select name="kota"
                                                class="form-select border-success @error('kota') is-invalid @enderror"
                                                data-trigger id="kota">
                                                <option value="">Pilih Kota/Kabupaten</option>
                                            </select>
                                            @error('kota')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="kecamatan">Kecamatan</label>
                                            <select name="kecamatan"
                                                class="form-select border-success @error('kecamatan') is-invalid @enderror"
                                                data-trigger id="kecamatan">
                                                <option value="">Pilih Kecamatan</option>
                                            </select>
                                            @error('kecamatan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="desa">Desa</label>
                                            <select name="desa"
                                                class="form-select border-success @error('desa') is-invalid @enderror"
                                                data-trigger id="desa">
                                                <option value="">Pilih Desa</option>
                                            </select>
                                            @error('desa')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="alamat">Alamat KKN:</label>
                                            <textarea type="number" name="alamat" class="form-control border-success @error('alamat') is-invalid @enderror"
                                                id="alamat" value="{{ old('alamat') }}"></textarea>
                                            @error('alamat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="nohp">Nomor Induk Pegawai:</label>
                                            <input type="number" name="nip"
                                                class="form-control border-success @error('nip') is-invalid @enderror"
                                                id="nip" value="{{ old('nip') }}">
                                            @error('nip')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="nama">Nama Lengkap:</label>
                                            <input type="text" name="nama"
                                                class="form-control border-success @error('nama') is-invalid @enderror"
                                                id="nama" value="{{ old('nama') }}">
                                            @error('nip')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="nohp">Nomor Handphone:</label>
                                            <input type="number" name="nohp"
                                                class="form-control border-success @error('nohp') is-invalid @enderror"
                                                id="nohp" value="{{ old('nohp') }}">
                                            @error('nohp')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                        <label class="form-label" for="nohp">Jenis Kelamin:</label>
                                        <div class="form-group">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                    id="laki_laki" value="laki_laki">
                                                <label class="form-check-label" for="laki_laki">
                                                    Laki-laki
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                    id="perempuan" value="perempuan">
                                                <label class="form-check-label" for="perempuan">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="desa">Agama</label>
                                            <select name="agama"
                                                class="form-select border-success @error('agama') is-invalid @enderror"
                                                data-trigger id="agama">
                                                <option value="">Pilih Agama</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                                <option value="Kepercayaan Lainnya">Kepercayaan Lainnya</option>
                                            </select>
                                            @error('agama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>



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


                <!-- Modal View lokasi -->
                @isset($lokasi)
                    <div class="modal fade" id="viewlokasiModal{{ $lokasi->id }}" tabindex="-1"
                        aria-labelledby="viewlokasiModalLabel{{ $lokasi->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="viewlokasiModalLabel{{ $lokasi->id }}">Detail Lokasi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>NIP:</strong> {{ $lokasi->nip }}</p>
                                    <p><strong>Nama:</strong> {{ $lokasi->nama }}</p>
                                    <p><strong>Jenis Kelamin:</strong> {{ $lokasi->jenis_kelamin }}</p>
                                    <p><strong>Agama:</strong> {{ $lokasi->agama }}</p>
                                    <p><strong>Provinsi:</strong> {{ $lokasi->provinsiData->name }}</p>
                                    <p><strong>Kota/Kabupaten:</strong> {{ $lokasi->kotaData->name }}</p>
                                    <p><strong>Kecamatan:</strong> {{ $lokasi->kecamatanData->name }}</p>
                                    <p><strong>Desa:</strong> {{ $lokasi->desaData->name }}</p>
                                    <!-- Tambahkan detail lainnya sesuai kebutuhan -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endisset
                <!-- Modal Edit lokasi -->
                @isset($lokasi)
                    <div class="modal fade" id="editlokasiModal{{ $lokasi->id }}" tabindex="-1"
                        aria-labelledby="editlokasiModalLabel{{ $lokasi->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editlokasiModalLabel{{ $lokasi->id }}">Edit Mahasiswa
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('superadmin.lokasi.update', ['id' => $lokasi->id]) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <!-- Form untuk mengedit data lokasi -->
                                        <div class="mb-3">


                                            <!-- Di dalam modal -->
                                            <div class="form-group">
                                                <label class="form-label" for="provinsi{{ $lokasi->id }}">Provinsi</label>
                                                <select name="provinsi{{ $lokasi->id }}" class="form-select border-success"
                                                    id="provinsi{{ $lokasi->id }}">
                                                    <option value="">Pilih Provinsi</option>
                                                    @foreach ($provinces as $provinsi)
                                                        <option value="{{ $provinsi->id }}"
                                                            {{ $provinsi->id == $lokasi->provinsi ? 'selected' : '' }}>
                                                            {{ $provinsi->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label"
                                                    for="kota{{ $lokasi->id }}">Kota/Kabupaten</label>
                                                <select name="kota{{ $lokasi->id }}" class="form-select border-success"
                                                    id="kota{{ $lokasi->id }}">
                                                    <!-- Opsi akan dimuat melalui JavaScript -->
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label"
                                                    for="kecamatan{{ $lokasi->id }}">Kecamatan</label>
                                                <select name="kecamatan{{ $lokasi->id }}"
                                                    class="form-select border-success" id="kecamatan{{ $lokasi->id }}">
                                                    <!-- Opsi akan dimuat melalui JavaScript -->
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="desa{{ $lokasi->id }}">Desa</label>
                                                <select name="desa{{ $lokasi->id }}" class="form-select border-success"
                                                    id="desa{{ $lokasi->id }}">
                                                    <!-- Opsi akan dimuat melalui JavaScript -->
                                                </select>
                                            </div>


                                            <!-- Form untuk nomor induk pegawai -->
                                            <div class="form-group">
                                                <label class="form-label" for="nipx">Nomor Induk Pegawai:</label>
                                                <input type="number" name="nipx"
                                                    class="form-control border-success @error('nipx') is-invalid @enderror"
                                                    id="nipx" value="{{ $lokasi->nip }}">
                                                @error('nipx')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <!-- Form untuk nama lengkap -->
                                            <div class="form-group">
                                                <label class="form-label" for="namax">Nama Lengkap:</label>
                                                <input type="text" name="namax"
                                                    class="form-control border-success @error('namax') is-invalid @enderror"
                                                    id="namax" value="{{ $lokasi->nama }}">
                                                @error('namax')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <!-- Form untuk nomor handphone -->
                                            <div class="form-group">
                                                <label class="form-label" for="nohpx">Nomor Handphone:</label>
                                                <input type="number" name="nohpx"
                                                    class="form-control border-success @error('nohpx') is-invalid @enderror"
                                                    id="nohpx" value="{{ $lokasi->nohp }}">
                                                @error('nohpx')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>



                                            <div class="form-group">
                                                <label class="form-label" for="alamatx">Alamat KKN:</label>
                                                <textarea name="alamatx" class="form-control border-success @error('alamatx') is-invalid @enderror" id="alamatx">{{ $lokasi->alamat }}</textarea>
                                                @error('alamatx')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <!-- Form untuk jenis kelamin -->
                                            <label class="form-label">Jenis Kelamin:</label>
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis_kelaminx"
                                                        id="laki_lakix" value="laki_laki"
                                                        @if ($lokasi->jenis_kelamin == 'laki_laki') checked @endif>
                                                    <label class="form-check-label" for="laki_laki">Laki-laki</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis_kelaminx"
                                                        id="perempuanx" value="perempuan"
                                                        @if ($lokasi->jenis_kelamin == 'perempuan') checked @endif>
                                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                                </div>
                                            </div>

                                            <!-- Form untuk memilih agama -->
                                            <div class="form-group">
                                                <label class="form-label" for="agamax">Agama</label>
                                                <select name="agamax"
                                                    class="form-select border-success @error('agamax') is-invalid @enderror"
                                                    data-trigger id="agamax">
                                                    <option value="">Pilih Agama</option>
                                                    <option value="Islam" @if ($lokasi->agama == 'Islam') selected @endif>
                                                        Islam</option>
                                                    <option value="Kristen" @if ($lokasi->agama == 'Kristen') selected @endif>
                                                        Kristen</option>
                                                    <option value="Katolik" @if ($lokasi->agama == 'Katolik') selected @endif>
                                                        Katolik</option>
                                                    <option value="Hindu" @if ($lokasi->agama == 'Hindu') selected @endif>
                                                        Hindu</option>
                                                    <option value="Buddha" @if ($lokasi->agama == 'Buddha') selected @endif>
                                                        Buddha</option>
                                                    <option value="Konghucu"
                                                        @if ($lokasi->agama == 'Konghucu') selected @endif>Konghucu
                                                    </option>
                                                    <option value="Kepercayaan Lainnya"
                                                        @if ($lokasi->agama == 'Kepercayaan Lainnya') selected @endif>Kepercayaan
                                                        Lainnya</option>
                                                </select>
                                                @error('agamax')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update Data</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                @endisset
            </div>
        </div>
    </div>
    <!-- div fb Start -->
    </div>

    <!-- Footer Section Start -->

    @include('tampilan_superadmin.javascript')



    <script>
        $(document).ready(function() {
            // Ajax setup to include CSRF token with every request
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Event listener for province change
            $('#provinsi').on('change', function() {
                let id_provinsi = $(this).val();

                $.ajax({
                    type: 'POST',
                    url: "{{ route('superadmin.getkabupaten') }}",
                    data: {
                        id_provinsi: id_provinsi
                    },
                    success: function(response) {
                        $('#kota').html(response.options); // Populate regencies dropdown
                        $('#kecamatan')
                            .empty(); // Clear district dropdown when province changes
                        $('#desa').empty(); // Clear village dropdown when province changes
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });

            // Event listener for regency change
            $('#kota').on('change', function() {
                let id_kota = $(this).val();

                $.ajax({
                    type: 'POST',
                    url: "{{ route('superadmin.getkecamatan') }}",
                    data: {
                        id_kota: id_kota
                    },
                    success: function(response) {
                        $('#kecamatan').html(response.options); // Populate districts dropdown
                        $('#desa').empty(); // Clear village dropdown when regency changes
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });

            // Event listener for district change
            $('#kecamatan').on('change', function() {
                let id_kecamatan = $(this).val();

                $.ajax({
                    type: 'POST',
                    url: "{{ route('superadmin.getdesa') }}",
                    data: {
                        id_kecamatan: id_kecamatan
                    },
                    success: function(response) {
                        $('#desa').html(response.options); // Populate villages dropdown
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
    @isset($lokasi)
        <script>
            $(document).ready(function() {
                // Fungsi untuk memuat data kota/kabupaten saat modal ditampilkan
                function loadRegencies(provinsiId) {
                    $.ajax({
                        type: "GET",
                        url: "{{ route('superadmin.get.regencies') }}?provinsi_id=" + provinsiId,
                        success: function(res) {
                            if (res) {
                                $("#kota{{ $lokasi->id }}").empty();
                                $("#kota{{ $lokasi->id }}").append(
                                    '<option value="">Pilih Kota/Kabupaten</option>');
                                $.each(res, function(key, value) {
                                    $("#kota{{ $lokasi->id }}").append('<option value="' + value
                                        .id + '">' + value.name + '</option>');
                                });

                                // Memilih nilai yang sesuai
                                $("#kota{{ $lokasi->id }}").val({{ $lokasi->kota }});
                                loadDistricts(
                                    {{ $lokasi->kota }}); // Memuat kecamatan berdasarkan kota yang dipilih
                            } else {
                                $("#kota{{ $lokasi->id }}").empty();
                                $("#kecamatan{{ $lokasi->id }}").empty(); // Kosongkan dropdown kecamatan
                                $("#desa{{ $lokasi->id }}").empty(); // Kosongkan dropdown desa
                            }
                        }
                    });
                }

                // Fungsi untuk memuat data kecamatan saat dipanggil
                function loadDistricts(kotaId) {
                    $.ajax({
                        type: "GET",
                        url: "{{ route('superadmin.get.districts') }}?kota_id=" + kotaId,
                        success: function(res) {
                            if (res) {
                                $("#kecamatan{{ $lokasi->id }}").empty();
                                $("#kecamatan{{ $lokasi->id }}").append(
                                    '<option value="">Pilih Kecamatan</option>');
                                $.each(res, function(key, value) {
                                    $("#kecamatan{{ $lokasi->id }}").append('<option value="' +
                                        value.id + '">' + value.name + '</option>');
                                });

                                // Memilih nilai yang sesuai
                                $("#kecamatan{{ $lokasi->id }}").val({{ $lokasi->kecamatan }});
                                loadVillages(
                                    {{ $lokasi->kecamatan }}
                                    ); // Memuat desa berdasarkan kecamatan yang dipilih
                            } else {
                                $("#kecamatan{{ $lokasi->id }}").empty();
                                $("#desa{{ $lokasi->id }}").empty(); // Kosongkan dropdown desa
                            }
                        }
                    });
                }

                // Fungsi untuk memuat data desa saat dipanggil
                function loadVillages(kecamatanId) {
                    $.ajax({
                        type: "GET",
                        url: "{{ route('superadmin.get.villages') }}?kecamatan_id=" + kecamatanId,
                        success: function(res) {
                            if (res) {
                                var desaSelect = $("#desa{{ $lokasi->id }}");
                                desaSelect.empty().append('<option value="">Pilih Desa</option>');
                                $.each(res, function(key, value) {
                                    desaSelect.append('<option value="' + value.id + '">' + value
                                        .name + '</option>');
                                });

                                // Memilih nilai yang sesuai setelah opsi desa dimuat
                                $("#desa{{ $lokasi->id }}").val({{ $lokasi->desa }});
                            } else {
                                $("#desa{{ $lokasi->id }}").empty();
                            }
                        }
                    });
                }

                // Memuat data kota/kabupaten saat modal ditampilkan
                var provinsiId = $("#provinsi{{ $lokasi->id }}").val();
                if (provinsiId) {
                    loadRegencies(provinsiId);
                }

                // Menangani perubahan provinsi
                $('#provinsi{{ $lokasi->id }}').change(function() {
                    var provinsiId = $(this).val();
                    if (provinsiId) {
                        loadRegencies(provinsiId);
                    } else {
                        $("#kota{{ $lokasi->id }}").empty();
                        $("#kecamatan{{ $lokasi->id }}").empty(); // Kosongkan dropdown kecamatan
                        $("#desa{{ $lokasi->id }}").empty(); // Kosongkan dropdown desa
                    }
                });

                // Menangani perubahan kota/kabupaten
                $('#kota{{ $lokasi->id }}').change(function() {
                    var kotaId = $(this).val();
                    if (kotaId) {
                        loadDistricts(kotaId);
                    } else {
                        $("#kecamatan{{ $lokasi->id }}").empty();
                        $("#desa{{ $lokasi->id }}").empty(); // Kosongkan dropdown desa
                    }
                });

                // Menangani perubahan kecamatan
                $('#kecamatan{{ $lokasi->id }}').change(function() {
                    var kecamatanId = $(this).val();
                    if (kecamatanId) {
                        loadVillages(kecamatanId);
                    } else {
                        $("#desa{{ $lokasi->id }}").empty();
                    }
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                // Tambahkan kelas blink setiap 1 detik
                setInterval(function() {
                    $('#aktif option:selected').toggleClass('blink');
                }, 1000);
            });
        </script>
    @endisset
    <script src="/admin/js/plugins/fslightbox.js" defer></script>

    </main>
@endsection
