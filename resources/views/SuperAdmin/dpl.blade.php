@extends('tampilan_superadmin.index')
@section('dpl')

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
                                        role="tab" aria-selected="false">DATA DOSEN PEMBINBING</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile-profile" role="tab"
                                        aria-selected="false">TAMBAH DATA DOSEN PEMBINBING</a>
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

                                                <th>Dosen Pembimbing</th>
                                                <th>Nama Dosen</th>
                                                <th>Kelompok</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($alldpl as $dpl)
                                                <td>{{ $dpl->nodpl }}</td>
                                                <td>{{ $dpl->npm }}</td>
                                                <td>{{ $dpl->mahasiswa->namalengkap }}</td>

                                                <td>
                                                    <a href="{{ route('superadmin.dpl.edit', ['nodpl' => $dpl->nodpl]) }}" class="btn btn-primary">
                                                        Edit
                                                    </a>  <form
                                                            action="{{ route('superadmin.dpl.delete', ['nodpl' => $dpl->nodpl]) }}"
                                                            method="POST" style="display: inline;"> 
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                    </form>


                                                </td>
                                                </tr>

                                                <!-- Modal Edit dpl -->
                                            @endforeach
                                        </tbody>
                                        <tfoot>

                                            <tr>
                                                <th>Dosen Pembimbing</th>
                                                <th>Nama Dosen</th>
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

                                        <p class="d-inline-block pl-3"> - Perhatikan untuk ketua dpl akan dipilih
                                            dengan mengisi form data diri lalu diberikan kepada admin, membawa bukti
                                            pembayaran.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <p class="mb-3">
                                {{-- <form method="POST" class="row" action="{{ route('superadmin.simpan.dpl') }}"
                                    enctype="multipart/form-data" id="dplForm">
                                    @csrf --}}

                                    <div class="col-sm-6">
                              

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


                    <!-- Modal Edit dpl -->
                 

                </div>
            </div>
        </div>
        <!-- div fb Start -->
    </div>




    <!-- Footer Section Start -->

    @include('tampilan_superadmin.javascript')
  




    <!-- Select2 Script -->
    {{-- <script src="/admin/js/plugins/select2.js" defer></script> --}}

    <script src="/admin/js/plugins/fslightbox.js" defer></script>

    </main>
@endsection
