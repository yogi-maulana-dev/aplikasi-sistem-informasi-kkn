@extends('tampilan_mhs.index')
@section('tugas')
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
                                    <h4 class="me-2 h4">{{ Auth::guard('web')->user()->namalengkap }}</h4>

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
                                        role="tab" aria-selected="false">Kegiatan Harian</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile-profile" role="tab"
                                        aria-selected="false">Profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <p>Apa yang anda dan Kelompok ada lakukan hari ini
                                ?</p>
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
                                    <h4 class="card-title text-success">Apa yang anda dan Kelompok ada lakukan hari ini ?
                                    </h4>
                                </div>
                            </div>

                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger mt-3">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="d-flex align-items-center justify-content-between position-relative">
                                    @if (!$tugas->isEmpty())
                                        <!-- Tampilkan formulir untuk mengupload tugas -->
                                        <div class="col-md-4">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <p>Deadline: <span id="waktuMundur"></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tambahkan skrip JavaScript untuk menghitung waktu mundur -->
                                    @else
                         
                                            <div class="col-lg-12">
                                                <form action="{{ route('tugas.simpan') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="gambar" class="form-label custom-file-input">Upload
                                                            Foto
                                                            Kegiatan</label>
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
                                                        <textarea class="form-control border-success @error('keterangan') is-invalid @enderror" name="keterangan"
                                                            id="exampleFormControlTextarea1" cols="120" rows="10"></textarea>
                                                        @error('keterangan')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <button type="submit" class="btn bg-success text-white">Upload
                                                        Tugas</button>
                                                </form>
                                            </div>
                                   
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title text-success">Tugas yang sudah dilakukan ?
                                    </h4>
                                </div>
                            </div>

                            <div class="card-body">
                                <div
                                    class="iq-timeline0 m-0 d-flex align-items-center justify-content-between position-relative">
                                    <ul class="list-inline p-0 m-0">
                                        {{-- Periksa apakah ada data tabungtugas --}}
                                        @if ($tabungtugas->isNotEmpty())
                                            {{-- Tampilkan tanggal hari pertama --}}
                                            <li>
                                                <div class="timeline-dots timeline-dot1 border-primary text-primary">
                                                </div>
                                                <h6 class="float-left mb-1">Hari 1</h6>
                                                <small
                                                    class="float-right mt-1">{{ $tabungtugas->first()->created_at->format('d F Y') }}</small>
                                                <div class="d-inline-block w-100">
                                                    <p>{{ $tabungtugas->first()->tugas }}</p>
                                                </div>
                                            </li>

                                            {{-- Tampilkan tanggal-tanggal berikutnya --}}
                                            @foreach ($tabungtugas as $key => $tabungtugasx)
                                                @if ($key > 0)
                                                    <li>
                                                        <div
                                                            class="timeline-dots timeline-dot1 border-primary text-primary">
                                                        </div>
                                                        <h6 class="float-left mb-1">Hari {{ $key + 1 }}</h6>
                                                        <small
                                                            class="float-right mt-1">{{ $tabungtugasx->created_at->addDays($key)->format('d F Y') }}</small>
                                                        <div class="d-inline-block w-100">
                                                            <p>{{ $tabungtugasx->tugas }}</p>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endforeach
                                        @else
                                            {{-- Tampilkan pesan jika tidak ada data tabungtugas --}}
                                            <li>Data tidak tersedia.</li>
                                        @endif
                                    </ul>

                                </div>
                            </div>
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
                            <div class="card-header">
                                <div class="header-title">
                                    <h4 class="card-title">KKN KELOMPOK ? TAHUN ?</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="user-bio">
                                    <p>Tart I love sugar plum I love oat cake. Sweet roll caramels I love jujubes.
                                        Topping cake wafer.</p>
                                </div>
                                <div class="mt-2">
                                    <h6 class="mb-1">Joined:</h6>
                                    <p>Feb 15, 2021</p>
                                </div>
                                <div class="mt-2">
                                    <h6 class="mb-1">Lives:</h6>
                                    <p>United States of America</p>
                                </div>
                                <div class="mt-2">
                                    <h6 class="mb-1">Email:</h6>
                                    <p><a href="#" class="text-body"> austin@gmail.com</a></p>
                                </div>
                                <div class="mt-2">
                                    <h6 class="mb-1">Url:</h6>
                                    <p><a href="#" class="text-body" target="_blank"> www.bootstrap.com </a>
                                    </p>
                                </div>
                                <div class="mt-2">
                                    <h6 class="mb-1">Contact:</h6>
                                    <p><a href="#" class="text-body">(001) 4544 565 456</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script>
        @foreach ($tugas as $tugasx)
            // Ambil waktu tugas dibuat
            var created_at = new Date("{{ $tugasx->created_at }}");

            // Set waktu target (23:59:00)
            var deadline = new Date(created_at);
            deadline.setHours(0);
            deadline.setMinutes(0);
            deadline.setSeconds(30);

            // Update status dan tampilkan waktu mundur menggunakan JavaScript
            var interval = setInterval(function() {
                var now = new Date();
                var difference = deadline - now;

                if (difference <= 0) {
                    // Waktu habis, update status dan hentikan interval
                    clearInterval(interval);
                    $.ajax({
                        url: "{{ route('updateStatus', $tugasx->id) }}",
                        type: "GET",
                        success: function(response) {
                            console.log(response.message);
                            window.location.href = "{{ route('tugas') }}";
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                } else {
                    // Hitung sisa waktu mundur
                    var remainingTime = new Date(difference);

                    // Ambil jam, menit, dan detik dari sisa waktu mundur
                    var hours = remainingTime.getUTCHours();
                    var minutes = remainingTime.getUTCMinutes();
                    var seconds = remainingTime.getUTCSeconds();

                    // Format output waktu mundur
                    var displayTime = hours + " jam " + minutes + " menit " + seconds + " detik ";
                    $("#waktuMundur").text(displayTime);
                }
            }, 1000);
        @endforeach
    </script>





    <!-- Footer Section Start -->
    @include('tampilan_mhs.javascript')
    <!-- Footer Section End -->
    </main>
@endsection
