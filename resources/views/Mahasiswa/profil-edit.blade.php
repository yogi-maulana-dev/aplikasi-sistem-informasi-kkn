@extends('tampilan_mhs.index')
@section('edit-profil')
    
        </div>
        <div class="content-inner container-fluid pb-0" id="page_layout">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="mb-3">
                                @if ($errors->any())
                                    <div class="alert alert-danger mt-4">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            <form method="POST" class="row"
                                action="{{ route('profil-update', ['id' => Auth::guard('web')->user()->id]) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="npm">Nomor Pokok Mahasiswa:</label>
                                        <input type="text" name="npm" class="form-control" id="npm"
                                            value="{{ Auth::guard('web')->user()->npm }}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="namalengkap">Nama Lengkap:</label>
                                        <input type="text" name="namalengkap" class="form-control"
                                            id="namalengkap" value="{{ Auth::guard('web')->user()->namalengkap }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="email1101">Email address:</label>
                                        <input type="email" name="email" class="form-control" id="email1101"
                                            value="{{ Auth::guard('web')->user()->email }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="choices-single-default">Jenis Kelamin</label>
                                        <select name="jk" class="form-select" data-trigger name="choices-single-default" id="choices-single-default">
                                            <option>Pilih Jenis Kelamin</option>
                                            <option value="Laki - Laki" {{ Auth::guard('web')->user()->jk == 'Laki - Laki' ? 'selected' : '' }}>Laki - Laki</option>
                                            <!-- Tandai opsi 'Laki - Laki' jika jenis kelamin pengguna adalah 'Laki - Laki' -->
                                            <option value="Wanita" {{ Auth::guard('web')->user()->jk == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                                            <!-- Tandai opsi 'Wanita' jika jenis kelamin pengguna adalah 'Wanita' -->
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="nohp">Nomor Handphone:</label>
                                        <input type="number" name="nohp" class="form-control" id="nohp"
                                            value="{{ Auth::guard('web')->user()->nohp }}">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="gambar" class="form-label custom-file-input">Upload Foto</label>
                                        <input class="form-control" name="gambar" type="file" id="gambar">
                                        @if(Auth::guard('web')->user()->gambar)
                                            <img src="{{ asset(Auth::guard('web')->user()->gambar) }}" alt="Foto" width="100">
                                        @else
                                            <p>Tidak ada foto yang diunggah</p>
                                        @endif
                                    </div>
                                    

                                    {{-- <div class="form-group">
                                        <label class="form-label" for="password">Password:</label>
                                        <input type="text" name="password" class="form-control" id="password">
                                    </div> --}}

                                    <div class="form-group">
                                        <label class="form-label" for="alamat">Alamat:</label>
                                        <textarea name="alamat" cols="30" class="form-control" id="alamat">{{ Auth::guard('web')->user()->alamat }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="choices-single-default">Fakultas</label>
                                        <select name="fakultas" class="form-select" data-trigger name="choices-single-default"
                                            id="choices-single-default">
                                            <option>Pilih</option>
                                            @foreach($fakultasx as $fakultasItem)
                                            <option value="{{ $fakultasItem->nama }}" @if ($fakultasItem->nama ==
                                                Auth::guard('web')->user()->fakultas) selected
                                        @endif>{{ $fakultasItem->nama }}</option>
                                        @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="choices-single-default">Jurusan</label>
                                        <select name="jurusan" class="form-select" data-trigger name="choices-single-default"
                                            id="choices-single-default">
                                            <option>Pilih</option>
                                             {{-- Loop untuk menampilkan opsi prodi --}}
                                             @foreach($prodix as $prodiItem)
                                             <option value="{{ $prodiItem->nama }}" @if ($prodiItem->nama ==
                                                 Auth::guard('web')->user()->jurusan) selected
                                         @endif>{{ $prodiItem->nama }}</option>
                                         @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{ route('dashboard')}}" class="btn btn-danger">Kembali</a>

                                </div>
                            </form>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section Start -->
        @include('tampilan_mhs.javascript')
        <!-- Footer Section End -->
    </main>
@endsection
