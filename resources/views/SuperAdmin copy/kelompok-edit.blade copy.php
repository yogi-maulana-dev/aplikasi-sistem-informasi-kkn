@extends('tampilan_superadmin.index')
@section('kelompok-edit')
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                  
                    <form method="POST" action="{{ route('superadmin.kelompok.update', ['nokelompok' => '001']) }}">
                        @csrf
                        @method('PUT')
                        @foreach ($allkelompok as $kelompokp)
                    
                        <div class="col-sm-6">
                            <div class="form-group col-md-8">
                                <label class="form-label" for="nokelompok">Nomor Kelompok</label>
                               
                                <input type="text" name="nokelompok" class="form-control" value="{{ $kelompokp->nokelompok }}" readonly>
                      
                            </div>
                    
                            <!-- Mahasiswa -->
                            <div id="mahasiswa">
                                <!-- Elemen select untuk nomor pokok mahasiswa -->
                          
                                @foreach ($kelompok as $kelompoks)
                                <div class="form-group">
                                    <input type="text" name="id[]" value="{{$kelompoks->id}}">
                                    <label class="form-label" for="npm{{ $loop->iteration }}">Nomor Pokok Mahasiswa {{ $loop->iteration }}</label>
                                    <select name="{{$kelompoks->id}}" id="npm{{ $loop->iteration }}" class="selectpicker form-select border-success @error('npm') is-invalid @enderror" data-live-search="true">
                                        <!-- Isi pilihan NPM di sini -->
                                        <option value="" disabled>Pilih Mahasiswa</option>
                                        @foreach ($mahasiswas as $mhs)
                                            <option value="{{ $mhs->npm }}" {{ $kelompoks->npm == $mhs->npm ? 'selected' : '' }}>
                                                {{ $mhs->npm }} - {{ $mhs->namalengkap }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @endforeach
                          
                          
                            </div>
                           
                        </div>
                    
                        @endforeach
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('superadmin.kelompok') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                    <!-- Footer Section Start -->
                </div>
            </div>
        </div>
    </div>
</div>
    @include('tampilan_mhs.javascript')
    <!-- Footer Section End -->

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
