@extends('tampilan_dosen.index')
@section('kegiatan')

    <style>
        .btn-group .btn {
            margin-right: 5px;
            /* Sesuaikan dengan jarak yang Anda inginkan */
        }

        /* Add this CSS in your HTML file or in your stylesheet */
        .modal-body {
            background-color: #e8e8e8;
            /* Set background color */
            padding: 20px;
            /* Add padding */
        }

        .kartu {
            width: 800px;
            /* Set modal width */
            margin: 0 auto;
            /* Center modal horizontally */
            margin-top: 5px;
            /* Adjust top margin */
            box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, .03);
            /* Add box shadow */
            transition: all .3s;
            /* Add transition effect */
        }

        .foto {
            padding: 20px;
            /* Add padding */
        }

        .modal-body tbody {
            font-size: 20px;
            /* Set font size */
            font-weight: 300;
            /* Set font weight */
        }

        .biodata {
            margin-top: 30px;
            /* Adjust top margin */
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
                                    <h4 class="me-2 h4">{{ Auth::guard('dosen')->user()->namalengkap }}</h4>
                                    <span> - Super Admin</span>
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
                                        role="tab" aria-selected="false">DATA MAHASISWA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile-profile" role="tab"
                                        aria-selected="false">TAMBAH DATA MAHASISWA</a>
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
                                    <h4 class="card-title">Data Mahasiswa</h4>
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
                                @if (session('error'))
                                    <div class="alert alert-warning mt-4">
                                        {{ session('error') }}
                                    </div>
                                @endif

                                <div class="table-responsive">
                                    <table id="example" class="stripe hover"
                                        style="width:100%; padding-top: 1em; padding-bottom: 1em;">
                                        <thead>
                                            <tr>
                                                <th>Foto</th>
                                                <th>Kelompok</th>
                                                <th>Foto Kegiatan</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allkegiatan as $kegiatan)
                                                <tr>
                                                    <td style="max-width: 100px;">
                                                        <div class="grid grid-cols-3 gap-4">
                                                            <a data-fslightbox="gallery"
                                                                href="{{ url($kegiatan->fotokegiatan) }}">
                                                                <img src="{{ url($kegiatan->fotokegiatan) }}"
                                                                    class="img-fluid bg-soft-primary rounded w-100 h-100"
                                                                    alt="profile-image" loading="lazy">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>{{ $kegiatan->kelompoktugas }}</td>
                                                    <td>{{ $kegiatan->namalengkap }}</td>
                                                    <td>
                                                        @if ($kegiatan->aktif == '1')
                                                            <h5 class="text-success">Aktif</h5>
                                                        @else
                                                            <h5 class="text-warning">Tidak Aktif</h5>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Aksi">
                                                            <button type="button" class="btn btn-sm btn-warning"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#lihatkegiatanModal{{ $kegiatan->id }}">
                                                                Lihat Lengkap
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-primary"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#editkegiatanModal{{ $kegiatan->id }}">
                                                                Edit
                                                            </button>
                                                            <form
                                                                {{-- action="{{ route('dosen.kegiatan.delete', ['id' => $kegiatan->id]) }}" --}}
                                                                method="POST" style="display: inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger"
                                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                            </form>
                                                            <button type="button" class="btn btn-sm btn-primary cetak-btn d-none d-sm-inline" data-id="{{ $kegiatan->id }}">
                                                                Cetak Data
                                                            </button> <!-- Hide on small screens -->
                                                            <button type="button" class="btn btn-sm btn-success"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#aktif{{ $kegiatan->id }}">
                                                                Aktifkan Akun
                                                            </button>
                                                        </div>
                                                    </td>


                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Foto</th>
                                                <th>Kelompok</th>
                                                <th>Foto Kegiatan</th>
                                                <th>Keterangan</th>
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


                                {{-- <form method="POST" class="row" action="{{ route('dosen.simpan.mahasiswa') }}"
                                    enctype="multipart/form-data"> --}}
                                    @csrf

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="npm">Nomor Pokok Mahasiswa:</label>
                                            <input type="text" name="npm"
                                                class="form-control border-success @error('npm') is-invalid @enderror"
                                                id="npm" value="{{ old('npm') }}">
                                            @error('npm')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="namalengkap">Nama Lengkap:</label>
                                            <input type="text" name="namalengkap"
                                                class="form-control border-success @error('namalengkap') is-invalid @enderror"
                                                id="namalengkap" value="{{ old('namalengkap') }}">
                                            @error('namalengkap')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="email">Email address:</label>
                                            <input type="email" name="email"
                                                class="form-control border-success @error('email') is-invalid @enderror"
                                                id="email" value="{{ old('email') }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="jk">Jenis Kelamin</label>
                                            <select name="jk"
                                                class="form-select border-success @error('jk') is-invalid @enderror"
                                                data-trigger name="jk" id="jk">
                                                <option>Pilih Jenis Kelamin</option>
                                                <option value="Laki - Laki"
                                                    {{ old('jk') == 'Laki - Laki' ? 'selected' : '' }}>Laki - Laki</option>
                                                <option value="Wanita" {{ old('jk') == 'Wanita' ? 'selected' : '' }}>
                                                    Wanita
                                                </option>
                                            </select>
                                            @error('jk')
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

                                        <div class="form-group">
                                            <label class="form-label" for="baju">Ukuran Baju</label>
                                            <select name="sizebaju"
                                                class="form-select border-success @error('sizebaju') is-invalid @enderror"
                                                data-trigger name="sizebaju" id="sizebaju">
                                                <option {{ old('sizebaju') == '' ? 'selected' : '' }}>Pilih Ukuran Baju
                                                </option>
                                                <option value="s" {{ old('sizebaju') == 's' ? 'selected' : '' }}>S
                                                </option>
                                                <option value="m" {{ old('sizebaju') == 'm' ? 'selected' : '' }}>M
                                                </option>
                                                <option value="l" {{ old('sizebaju') == 'l' ? 'selected' : '' }}>L
                                                </option>
                                                <option value="xl" {{ old('sizebaju') == 'xl' ? 'selected' : '' }}>XL
                                                </option>
                                                <option value="xxl" {{ old('sizebaju') == 'xxl' ? 'selected' : '' }}>
                                                    XXL</option>
                                                <option value="xxxl" {{ old('sizebaju') == 'xxxl' ? 'selected' : '' }}>
                                                    XXXL</option>
                                            </select>
                                            @error('sizebaju')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="gambar" class="form-label custom-file-input">Upload Foto</label>
                                            <input
                                                class="form-control border-success @error('gambar') is-invalid @enderror"
                                                name="gambar" type="file" id="gambar">
                                            @error('gambar')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>



                                        <div class="form-group">
                                            <label class="form-label" for="alamat">Alamat:</label>
                                            <textarea name="alamat" class="form-control border-success @error('alamat') is-invalid @enderror" id="alamat">{{ old('alamat') }}</textarea>
                                            @error('alamat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                     


                                        <div class="form-group">
                                            <label for="gambarbayar" class="form-label custom-file-input">Upload Bukti
                                                Pembayaran</label>
                                            <input
                                                class="form-control border-success @error('gambarbayar') is-invalid @enderror"
                                                name="gambarbayar" type="file" id="gambarbayar">
                                            @error('gambarbayar')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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


                    <!-- Modal Edit Mahasiswa -->
                    @foreach ($allkegiatan as $mahasiswa)
                        <div class="modal fade" id="lihatMahasiswaModal{{ $mahasiswa->id }}" tabindex="-1"
                            aria-labelledby="editMahasiswaModalLabel{{ $mahasiswa->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editMahasiswaModalLabel{{ $mahasiswa->id }}">Detail
                                            Mahasiswa</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>


                                    <!-- Isi Biodata Paling Keren di HTML disini -->
                                    <div class="container">
                                        <div class="card kartu">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="foto">
                                                        <a data-fslightbox="gallery"
                                                            href="{{ url($mahasiswa->fotokegiatan) }}">
                                                            <img src="{{ url($mahasiswa->fotokegiatan) }}"
                                                                class="img-fluid bg-soft-primary rounded"
                                                                alt="Foto Mahasiswa" loading="lazy" width="250px"
                                                                height="420px">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 kertas-biodata">
                                                    <div class="biodata">
                                                        <table width="100%" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td valign="top">
                                                                        <table border="0" width="100%"
                                                                            style="padding-left: 2px; padding-right: 13px;">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="25%" valign="top"
                                                                                        class="textt">Nama Lengkap</td>
                                                                                    <td width="2%">:</td>
                                                                                    <td
                                                                                        style="color: rgb(118, 157, 29); font-weight:bold">
                                                                                        {{ $mahasiswa->namalengkap }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td width="25%" valign="top"
                                                                                        class="textt">Email</td>
                                                                                    <td width="2%">:</td>
                                                                                    <td
                                                                                        style="color: rgb(118, 157, 29); font-weight:bold">
                                                                                        {{ $mahasiswa->email }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="textt">Jenis Kelamin</td>
                                                                                    <td>:</td>
                                                                                    <td>{{ $mahasiswa->jk }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="textt">Akamat</td>
                                                                                    <td>:</td>
                                                                                    <td>{{ $mahasiswa->alamat }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="textt">Tempat Lahir</td>
                                                                                    <td>:</td>
                                                                                    <td>{{ $mahasiswa->tempat }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="textt">Tanggal Lahir</td>
                                                                                    <td>:</td>
                                                                                    <td>{{ $mahasiswa->tgllahir }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="textt">Fakultas</td>
                                                                                    <td>:</td>
                                                                                    <td>{{ $mahasiswa->fakultas }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" class="textt">
                                                                                        Prodi</td>
                                                                                    <td valign="top">:</td>
                                                                                    <td>{{ $mahasiswa->jurusan }}</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td valign="top" class="textt">
                                                                                        Nomor Handphone
                                                                                    </td>
                                                                                    <td valign="top">:</td>
                                                                                    <td>{{ $mahasiswa->nohp }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" class="textt">
                                                                                        Ukuran Baju
                                                                                    </td>
                                                                                    <td valign="top">:</td>
                                                                                    <td>{{ $mahasiswa->sizebaju }}</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td valign="top" class="textt">
                                                                                        Kelas
                                                                                    </td>
                                                                                    <td valign="top">:</td>
                                                                                    <td>{{ $mahasiswa->kelas }}</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td valign="top" class="textt">
                                                                                        Bukti Bayaran
                                                                                    </td>
                                                                                    <td valign="top">:</td>
                                                                                    <td> <a data-fslightbox="gallery"
                                                                                            href="{{ url($mahasiswa->fotokegiatan) }}">
                                                                                            <img src="{{ url($mahasiswa->fotokegiatan) }}"
                                                                                                class="img-fluid bg-soft-primary rounded"
                                                                                                alt="Gambar Pembayaran"
                                                                                                loading="lazy">
                                                                                        </a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal-footer">
                                        <!-- You can add footer buttons if necessary -->
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="editMahasiswaModal{{ $mahasiswa->id }}" tabindex="-1"
                            aria-labelledby="editMahasiswaModalLabel{{ $mahasiswa->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editMahasiswaModalLabel{{ $mahasiswa->id }}">Edit
                                            Mahasiswa</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    {{-- <form action="{{ route('dosen.mahasiswa.update', ['id' => $mahasiswa->id]) }}"
                                        method="POST" enctype="multipart/form-data"> --}}
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <!-- Form untuk mengedit data mahasiswa -->
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="npm">NPM</label>
                                                    <input type="text" class="form-control border-success"
                                                        id="npm" name="npm"
                                                        value="{{ old('npm', $mahasiswa->npm) }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="namalengkap">Nama Lengkap</label>
                                                    <input type="text" class="form-control border-success"
                                                        id="namalengkap" name="namalengkap"
                                                        value="{{ old('namalengkap', $mahasiswa->namalengkap) }}"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control border-success"
                                                        id="email" name="email"
                                                        value="{{ old('email', $mahasiswa->email) }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jk">Jenis Kelamin</label>
                                                    <select class="form-control border-success" id="jk"
                                                        name="jk" required>
                                                        <option value="Laki - Laki"
                                                            {{ $mahasiswa->jk === 'Laki - Laki' ? 'selected' : '' }}>Laki -
                                                            Laki</option>
                                                        <option value="Wanita"
                                                            {{ $mahasiswa->jk === 'Wanita' ? 'selected' : '' }}>Wanita
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nohp">Nomor HP</label>
                                                    <input type="text" class="form-control border-success" id="nohp" name="nohp" value="{{ old('nohp', $mahasiswa->nohp) }}" required>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="form-label" for="tempat">Tempat Lahir:</label>
                                                    <input type="text" name="tempat" class="form-control border-success @error('tempat') is-invalid @enderror" id="tempat" value="{{ old('tempat',$mahasiswa->tempat) }}">
                                                    @error('tempat')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="form-label" for="tgllahir">Tanggal Lahir:</label>
                                                    <input type="date" name="tgllahir" class="form-control border-success @error('tgllahir') is-invalid @enderror" id="tgllahir" value="{{ old('tgllahir',$mahasiswa->tgllahir) }}">
                                                    @error('tgllahir')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                

                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <textarea class="form-control border-success" id="alamat" name="alamat" rows="3" required>{{ old('alamat', $mahasiswa->alamat) }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="fakultas">Fakultas</label>
                                                    <input type="text" class="form-control border-success"
                                                        id="fakultas" name="fakultas"
                                                        value="{{ old('fakultas', $mahasiswa->fakultas) }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jurusan">Jurusan</label>
                                                    <input type="text" class="form-control border-success"
                                                        id="jurusan" name="jurusan"
                                                        value="{{ old('jurusan', $mahasiswa->jurusan) }}" required>
                                                </div>


                                                <div class="form-group">
                                                    <label for="gambar">Foto</label>
                                                    <input
                                                        class="form-control border-success @error('gambar') is-invalid @enderror"
                                                        name="gambar" type="file" id="gambar">
                                                    @error('gambar')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>



                                                <div class="form-group">
                                                    <label class="form-label" for="baju">Ukuran Baju</label>
                                                    <select name="sizebaju" class="form-select border-success @error('sizebaju') is-invalid @enderror" id="sizebaju">
                                                        <option value="">Pilih Ukuran Baju</option>
                                                        <option value="s" {{ $mahasiswa->sizebaju === 's' ? 'selected' : '' }}>S</option>
                                                        <option value="m" {{ $mahasiswa->sizebaju === 'm' ? 'selected' : '' }}>M</option>
                                                        <option value="l" {{ $mahasiswa->sizebaju === 'l' ? 'selected' : '' }}>L</option>
                                                        <option value="xl" {{ $mahasiswa->sizebaju === 'xl' ? 'selected' : '' }}>XL</option>
                                                        <option value="xxl" {{ $mahasiswa->sizebaju === 'xxl' ? 'selected' : '' }}>XXL</option>
                                                        <option value="xxxl" {{ $mahasiswa->sizebaju === 'xxxl' ? 'selected' : '' }}>XXXL</option>
                                                    </select>
                                                    @error('sizebaju')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="form-label" for="kelas">Kelas</label>
                                                    <select name="kelas" class="form-select border-success @error('kelas') is-invalid @enderror" id="kelas">
                                                        <option value="">Pilih Kelas</option>
                                                        <option value="a" {{ $mahasiswa->kelas === 'a' ? 'selected' : '' }}>A</option>
                                                        <option value="b" {{ $mahasiswa->kelas === 'b' ? 'selected' : '' }}>B</option>
                                                    </select>
                                                    @error('kelas')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="gambarbayar" class="form-label custom-file-input">Upload
                                                        Bukti
                                                        Pembayaran</label>
                                                    <input
                                                        class="form-control border-success @error('gambarbayar') is-invalid @enderror"
                                                        name="gambarbayar" type="file" id="gambarbayar">
                                                    @error('gambarbayar')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>


                                            </div>
                                            <!-- Tambahkan input lainnya sesuai dengan atribut yang ingin diubah -->
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


                        <div class="modal fade" id="aktif{{ $kegiatan->id }}" tabindex="-1"
                            aria-labelledby="editMahasiswaModalLabel{{ $kegiatan->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editkegiatanModalLabel{{ $kegiatan->id }}">Aktifkan
                                            kegiatan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('dosen.kegiatan.aktif', ['id' => $kegiatan->id]) }}"
                                        method="POST" enctype="multip
                                        art/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <!-- Form untuk mengedit data kegiatan -->
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        value="{{ $kegiatan->kelompoktugas }}" readonly>

                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" id="" cols="30" rows="10" readonly>{{ $kegiatan->tugas }}</textarea>

                                                </div>
                                                {{-- <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select class="form-control" id="status" name="aktif">
                                                        <option value="1"
                                                            {{ $kegiatan->status == '1' ? 'selected' : '' }}>Sudah Diperiksa
                                                        </option>
                                                        <option value="0"
                                                            {{ $kegiatan->status == '0' ? 'selected' : '' }}>
                                                            Tidak Aktif</option>
                                                    </select>
                                                </div> --}}

                                                <div class="form-group">
                                                    <label for="status">Keterangan</label>
                                                    <textarea class="form-control" name="keterangan" id="" cols="30" rows="10" readonly></textarea>
                                                </div>
                                            </div>
                                            <!-- Tambahkan input lainnya sesuai dengan atribut yang ingin diubah -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="modal fade" id="aktif{{ $mahasiswa->id }}" tabindex="-1"
                        aria-labelledby="editMahasiswaModalLabel{{ $mahasiswa->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editMahasiswaModalLabel{{ $mahasiswa->id }}">Aktifkan
                                        Mahasiswa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('dosen.mahasiswa.update', ['id' => $mahasiswa->id]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <!-- Form untuk mengedit data mahasiswa -->
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" id="status" name="status">
                                                    <option value="Aktif" {{ $mahasiswa->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                                    <option value="Tidak Aktif" {{ $mahasiswa->status == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Tambahkan input lainnya sesuai dengan atribut yang ingin diubah -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}


                </div>
            </div>



        </div>
        <!-- div fb Start -->
    </div>




    <!-- Footer Section Start -->

    @include('tampilan_dosen.javascript')
    <script>
        $(document).ready(function() {
            $('.cetak-btn').click(function() {
                var id = $(this).data('id');
                window.location.href = '/dosen/cetak-pdf/' + id;
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.edit-mahasiswa').click(function() {
                var mahasiswaId = $(this).data('id');

                // Request data mahasiswa ke server
                $.ajax({
                    type: 'GET',
                    url: '/dosen/mahasiswa/' + mahasiswaId + '/edit',
                    success: function(response) {
                        // Mengisi nilai input fields di modal dengan data mahasiswa yang diterima
                        $('#editMahasiswaId').val(response.id);
                        $('#editNpm').val(response.npm);
                        $('#editNamalengkap').val(response.nama_lengkap);
                        $('#editEmail').val(response.email);
                        $('#editJk').val(response.jenis_kelamin);
                        $('#editNohp').val(response.nohp);
                        $('#editAlamat').val(response.alamat);
                        $('#editFakultas').val(response.fakultas);
                        $('#editJurusan').val(response.jurusan);

                        // Menampilkan modal
                        $('#editMahasiswaModal').modal('show');
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.save-btn').click(function() {
                var formId = $(this).data('form-id');
                $('#editForm' + formId).submit();
            });
        });
    </script>



    <script src="/admin/js/plugins/fslightbox.js" defer></script>

    </main>
@endsection
