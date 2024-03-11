@extends('tampilan_superadmin.index')
@section('dosen')

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
                                        role="tab" aria-selected="false">DATA DOSEN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile-profile" role="tab"
                                        aria-selected="false">TAMBAH DATA DOSEN</a>
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
                                                <th>NIP</th>
                                                <th>Nama Lengkap</th>
                                                <th>Email</th>
                                                <th>Program Studi</th>
                                                <th>Nomor Handphone</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($alldosen as $dosen)
                                                <tr>
                                                    <td>{{ $dosen->nip }}</td>
                                                    <td>{{ $dosen->nama }}</td>
                                                    <td>{{ $dosen->email }}</td>
                                                    <td>{{ $dosen->program_studi }}</td>
                                                    <td>{{ $dosen->nohp }}</td>
                                                    <td>
                                                        @if($dosen->aktif == 1)
                                                            <span class="text-success">Aktif</span>
                                                        @elseif($dosen->aktif == 0)
                                                            <span class="text-warning">Belum Aktif</span>
                                                        @elseif($dosen->aktif == 2)
                                                            <span class="text-danger blink">Diblokir</span>
                                                        @endif
                                                    </td>
                                                    
                                                    <td>
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editDosenModal{{ $dosen->id }}">
                                                            Edit
                                                        </button>
                                                        <form
                                                            action="{{ route('superadmin.dosen.delete', ['id' => $dosen->id]) }}"
                                                            method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                        </form>


                                                    </td>
                                                </tr>

                                           <!-- Modal Edit Dosen -->
    

                                            @endforeach
                                        </tbody>
                                        <tfoot>

                                            <tr>
                                                <th>NIP</th>
                                                <th>Nama Lengkap</th>
                                                <th>Email</th>
                                                <th>Program Studi</th>
                                                <th>Nomor Handphone</th>
                                                <th>Status</th>
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


                                <form method="POST" class="row" action="{{ route('superadmin.simpan.dosen') }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="nip">Nomor Induk Pegawai:</label>
                                            <input type="text" name="nip"
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
                                            @error('nama')
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
                                    </div>

                                    <div class="col-sm-6">
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
                                            <label class="form-label" for="choices-single-default">Jurusan</label>
                                            <select name="program_studi"
                                                class="form-select border-success @error('jurusan') is-invalid @enderror"
                                                data-trigger id="jurusan">
                                                <option value="">Pilih Program Studi</option>
                                                {{-- Loop untuk menampilkan opsi prodi --}}
                                                @foreach ($prodix as $prodiItem)
                                                    <option value="{{ $prodiItem->nama }}">{{ $prodiItem->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('jurusan')
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


                    <!-- Modal Edit Dosen -->
                    @foreach ($alldosen as $dosen)
                    <div class="modal fade" id="editDosenModal{{ $dosen->id }}" tabindex="-1" aria-labelledby="editDosenModalLabel{{ $dosen->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editDosenModalLabel{{ $dosen->id }}">Edit Mahasiswa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('superadmin.dosen.update', ['id' => $dosen->id]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <!-- Form untuk mengedit data dosen -->
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="nip">Nomor Induk Pegawai</label>
                                                <input type="text" class="form-control border-success" id="nip" name="nip" value="{{ old('nip', $dosen->nip) }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama">Nama Lengkap</label>
                                                <input type="text" class="form-control border-success" id="nama" name="nama" value="{{ old('nama', $dosen->nama) }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control border-success" id="email" name="email" value="{{ old('email', $dosen->email) }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nohp">Nomor HP</label>
                                                <input type="text" class="form-control border-success" id="nohp" name="nohp" value="{{ old('nohp', $dosen->nohp) }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="program_studi">Program Studi</label>
                                                <select name="program_studi" class="form-select border-success @error('program_studi') is-invalid @enderror" data-trigger id="program_studi">
                                                    <option value="">Pilih Program Studi</option>
                                                    {{-- Loop untuk menampilkan opsi prodi --}}
                                                    @foreach ($prodix as $prodiItem)
                                                    <option value="{{ $prodiItem->nama }}" {{ old('program_studi', $dosen->program_studi) == $prodiItem->nama ? 'selected' : '' }}>
                                                        {{ $prodiItem->nama }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @error('program_studi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="aktif">Aktifkan Dosen</label>
                                                <select name="aktif" class="form-select border-success @error('aktif') is-invalid @enderror" data-trigger id="aktif">
                                                    <option value="">Pilih Status</option>
                                                    <option value="0" {{ old('aktif', $dosen->aktif) == '0' ? 'selected' : '' }}>Belum Aktif</option>
                                                    <option value="1" {{ old('aktif', $dosen->aktif) == '1' ? 'selected' : '' }}>Aktif</option>
                                                    <option class="text-danger blink" value="2" {{ old('aktif', $dosen->aktif) == '2' ? 'selected' : '' }}>Blokir</option>
                                                </select>
                                                @error('aktif')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                

                </div>
            </div>
        </div>
        <!-- div fb Start -->
    </div>




    <!-- Footer Section Start -->

    @include('tampilan_superadmin.javascript')

    <script>
        $(document).ready(function() {
            // Tambahkan kelas blink setiap 1 detik
            setInterval(function() {
                $('#aktif option:selected').toggleClass('blink');
            }, 1000);
        });
    </script>
    
    <script>
        $(document).ready(function() {
            $('.edit-dosen').click(function() {
                var dosenId = $(this).data('id');

                // Request data dosen ke server
                $.ajax({
                    type: 'GET',
                    url: '/superadmin/dosen/' + dosenId + '/edit',
                    success: function(response) {
                        // Mengisi nilai input fields di modal dengan data dosen yang diterima
                        $('#editDosenId').val(response.id);
                        $('#editNip').val(response.nip);
                        $('#editNama').val(response.nama);
                        $('#editEmail').val(response.email);
                        $('#editNohp').val(response.nohp);
                        $('#editAlamat').val(response.alamat);
                        $('#editFakultas').val(response.program_studi);

                        // Menampilkan modal
                        $('#editDosenModal').modal('show');
                    }
                });
            });
        });
    </script>


    <script src="/admin/js/plugins/fslightbox.js" defer></script>

    </main>
@endsection
