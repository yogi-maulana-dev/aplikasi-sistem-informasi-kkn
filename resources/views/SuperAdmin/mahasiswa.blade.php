@extends('tampilan_superadmin.index')
@section('mahasiswa')

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
                                                <th>Foto</th>
                                                <th>NPM</th>
                                                <th>Nama Lengkap</th>
                                                <th>Email</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allmahasiswa as $mahasiswa)
                                                <tr>
                                                    <td style="max-width: 100px;">
                                                        <div class="grid grid-cols-3 gap-4">
                                                            <a data-fslightbox="gallery"
                                                                href="{{ url($mahasiswa->gambar) }}">
                                                                <img src="{{ url($mahasiswa->gambar) }}"
                                                                    class="img-fluid bg-soft-primary rounded w-100 h-100"
                                                                    alt="profile-image" loading="lazy">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>{{ $mahasiswa->npm }}</td>
                                                    <td>{{ $mahasiswa->nama_lengkap }}</td>
                                                    <td>{{ $mahasiswa->email }}</td>
                                                    <td>{{ $mahasiswa->jenis_kelamin }}</td>
                                                    <td>{{ $mahasiswa->status }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editMahasiswaModal{{ $mahasiswa->id }}">
                                                            Edit
                                                        </button>
                                                        <form
                                                            action="{{ route('superadmin.mahasiswa.delete', ['id' => $mahasiswa->id]) }}"
                                                            method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                        </form>


                                                    </td>
                                                </tr>

                                           <!-- Modal Edit Mahasiswa -->
    

                                            @endforeach
                                        </tbody>
                                        <tfoot>

                                            <tr>
                                                <th>Foto</th>
                                                <th>NPM</th>
                                                <th>Nama Lengkap</th>
                                                <th>Email</th>
                                                <th>Jenis Kelamin</th>
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


                                <form method="POST" class="row" action="{{ route('superadmin.simpan.mahasiswa') }}"
                                    enctype="multipart/form-data">
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
                                            <label class="form-label" for="choices-single-default">Fakultas</label>
                                            <select name="fakultas"
                                                class="form-select border-success @error('fakultas') is-invalid @enderror"
                                                data-trigger id="fakultas">
                                                <option value="">Pilih</option>
                                                @foreach ($fakultasx as $fakultasItem)
                                                    <option value="{{ $fakultasItem->nama }}">{{ $fakultasItem->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('fakultas')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="choices-single-default">Jurusan</label>
                                            <select name="jurusan"
                                                class="form-select border-success @error('jurusan') is-invalid @enderror"
                                                data-trigger id="jurusan">
                                                <option value="">Pilih Jurusan</option>
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


                    <!-- Modal Edit Mahasiswa -->
                    <div class="modal fade" id="editMahasiswaModal{{ $mahasiswa->id }}" tabindex="-1" aria-labelledby="editMahasiswaModalLabel{{ $mahasiswa->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editMahasiswaModalLabel{{ $mahasiswa->id }}">Edit Mahasiswa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('superadmin.mahasiswa.update', ['id' => $mahasiswa->id]) }}" method="POST"  enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <!-- Form untuk mengedit data mahasiswa -->
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="npm">NPM</label>
                                                <input type="text" class="form-control border-success" id="npm" name="npm" value="{{ old('npm', $mahasiswa->npm) }}" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="namalengkap">Nama Lengkap</label>
                                                <input type="text" class="form-control border-success" id="namalengkap" name="namalengkap" value="{{ old('namalengkap', $mahasiswa->namalengkap) }}" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control border-success" id="email" name="email" value="{{ old('email', $mahasiswa->email) }}" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="jk">Jenis Kelamin</label>
                                                <select class="form-control border-success" id="jk" name="jk" required>
                                                  <option value="Laki - Laki" {{ $mahasiswa->jk === 'Laki - Laki' ? 'selected' : '' }}>Laki - Laki</option>
                                                  <option value="Wanita" {{ $mahasiswa->jk === 'Wanita' ? 'selected' : '' }}>Wanita</option>
                                                </select>
                                              </div>
                                              <div class="form-group">
                                                <label for="nohp">Nomor HP</label>
                                                <input type="text" class="form-control border-success" id="nohp" name="nohp" value="{{ old('nohp', $mahasiswa->nohp) }}" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <textarea class="form-control border-success" id="alamat" name="alamat" rows="3" required>{{ old('alamat', $mahasiswa->alamat) }}</textarea>
                                              </div>
                                              <div class="form-group">
                                                <label for="fakultas">Fakultas</label>
                                                <input type="text" class="form-control border-success" id="fakultas" name="fakultas" value="{{ old('fakultas', $mahasiswa->fakultas) }}" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="jurusan">Jurusan</label>
                                                <input type="text" class="form-control border-success" id="jurusan" name="jurusan" value="{{ old('jurusan', $mahasiswa->jurusan) }}" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="gambar">Gambar</label>
                                                <input type="file" class="form-control-file" id="gambar" name="gambar">
                                              </div>
                                    
                                        </div>
                                        <!-- Tambahkan input lainnya sesuai dengan atribut yang ingin diubah -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                

                </div>
            </div>
        </div>
        <!-- div fb Start -->
    </div>




    <!-- Footer Section Start -->

    @include('tampilan_superadmin.javascript')
    <script>
        $(document).ready(function() {
            $('.edit-mahasiswa').click(function() {
                var mahasiswaId = $(this).data('id');

                // Request data mahasiswa ke server
                $.ajax({
                    type: 'GET',
                    url: '/superadmin/mahasiswa/' + mahasiswaId + '/edit',
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


    <script src="/admin/js/plugins/fslightbox.js" defer></script>

    </main>
@endsection
