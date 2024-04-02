@extends('tampilan_superadmin.index')
@section('kelompok-edit')
    <div class="content-inner container-fluid pb-0" id="page_layout">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @foreach ($allkelompok as $kelompokp)
                            <form method="POST"
                                action="{{ route('superadmin.kelompok.update', ['nokelompok' => $kelompokp->nokelompok]) }}">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group col-md-8">
                                            <label class="form-label" for="nokelompok">Nomor Kelompok</label>
                                            <input type="text" name="nokelompok" class="form-control"
                                                value="{{ $kelompokp->nokelompok }}" readonly>
                                        </div>

                                        <!-- Mahasiswa -->
                                        <div id="mahasiswa">
                                            <!-- Elemen select untuk nomor pokok mahasiswa -->
                                            @foreach ($kelompok->sortByDesc('ketua') as $kelompoks)
                                                <div class="form-group">
                                                    <input type="hidden" name="id[]" value="{{ $kelompoks->id }}">
                                                    <label class="form-label" for="npm{{ $loop->iteration }}">Nomor Pokok
                                                        Mahasiswa {{ $loop->iteration }}
                                                        @if ($kelompoks->ketua == 1)
                                                            <b class="text-warning"> (Ketua Kelompok)</b>
                                                        @else
                                                        @endif
                                                    </label>
                                                    <select name="npm[]" id="npm{{ $loop->iteration }}"
                                                        class="selectpicker form-select border-success @error('npm') is-invalid @enderror"
                                                        data-live-search="true">
                                                        <!-- Isi pilihan NPM di sini -->
                                                        <option value="" disabled>Pilih Mahasiswa</option>
                                                        @foreach ($mahasiswas as $mhs)
                                                            <option value="{{ $mhs->npm }}"
                                                                {{ $kelompoks->npm == $mhs->npm ? 'selected' : '' }}>
                                                                {{ $mhs->npm }} - {{ $mhs->namalengkap }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dosen" class="form-label">Dosen Pembimbing (NIP / NAMA
                                                LENGKAP)</label>
                                            <select name="dosen" class="form-select border-success" id="dosen">
                                                <option value="">Pilih dosen</option>
                                                @foreach ($dosens as $dosen)
                                                    <option value="{{ $dosen->nip }}"
                                                        {{ $kelompokp->dosen == $dosen->nip ? 'selected' : '' }}>
                                                        {{ $dosen->nip }} / {{ $dosen->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('dosen')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="desa" class="form-label">Desa</label>
                                            <select name="lokasi" id="lokasi" class="form-control">
                                                <option value="">Pilih Lokasi</option>
                                                @foreach ($desas as $desa)
                                                    <option value="{{ $desa->id }}"
                                                        {{ $kelompokp->lokasi == $desa->id ? 'selected' : '' }}>
                                                        {{ $desa->nip }} - {{ $desa->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('lokasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ route('superadmin.kelompok') }}" class="btn btn-danger">Batal</a>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                        <!-- Footer Section Start -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('tampilan_superadmin.javascript')
    <!-- Footer Section End -->

    <script>
        $(document).ready(function() {
            $('#dosen').select2({
                placeholder: 'Pilih dosen',
                allowClear: true,
                width: '100%', // Sesuaikan lebar select dengan kebutuhan Anda
                ajax: {
                    url: '{{ route('superadmin.cari.dosen') }}',
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(dosen) {
                                return {
                                    id: dosen.nip,
                                    text: dosen.nip + ' / ' + dosen.nama
                                };
                            })
                        };
                    },
                    cache: true
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#lokasi').select2({
                placeholder: 'Pilih lokasi',
                allowClear: true,
                width: '100%', // Sesuaikan lebar select dengan kebutuhan Anda
                ajax: {
                    url: '{{ route('superadmin.cari.lokasi') }}',
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(lokasi) {
                                return {
                                    id: lokasi.desa,
                                    text: lokasi.nip + ' - ' + lokasi.village_name
                                };
                            })
                        };
                    },
                    cache: true
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Inisialisasi select2 untuk elemen yang ada saat halaman dimuat
            $('[id^="npm"]').select2({
                placeholder: "Cari Data Mahasiswa",
                minimumInputLength: 2,
                ajax: {
                    url: "{{ route('superadmin.kelompok.searchedit') }}",
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

            $('#tambahMahasiswa').click(function() {
                // Logika untuk menambahkan elemen select mahasiswa
                let jumlahMahasiswa = $('[id^="npm"]').length + 1; // Hitung jumlah elemen select yang ada
                if (jumlahMahasiswa <= 10) { // Batasi jumlah mahasiswa
                    let selectHTML = `<div class="form-group">
                                    <label class="form-label" for="npm${jumlahMahasiswa}">Nomor Pokok Mahasiswa ${jumlahMahasiswa}</label>
                                    <select name="npm[]" id="npm${jumlahMahasiswa}" class="selectpicker form-select border-success @error('npm') is-invalid @enderror" data-live-search="true">
                                        <!-- Isi pilihan NPM di sini -->
                                        <option value="" disabled selected>Pilih Mahasiswa</option>
                                    </select>
                                </div>`;
                    $('#mahasiswa').append(
                        selectHTML); // Tambahkan elemen select ke dalam div dengan id 'mahasiswa'
                } else {
                    alert('Maksimal 10 mahasiswa dalam satu kelompok.');
                }
            });

            $('#kurangiMahasiswa').click(function() {
                // Logika untuk mengurangi elemen select mahasiswa
                let jumlahMahasiswa = $('[id^="npm"]').length; // Hitung jumlah elemen select yang ada
                if (jumlahMahasiswa > 1) { // Batasi jumlah mahasiswa
                    $(`#npm${jumlahMahasiswa}`).parent().remove(); // Hapus elemen select terakhir
                } else {
                    alert('Minimal 1 mahasiswa dalam satu kelompok.');
                }
            });
        });
    </script>
@endsection
