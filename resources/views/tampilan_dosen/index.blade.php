@include('tampilan_dosen.head')
@include('tampilan_dosen.loading')

@include('tampilan_dosen.aside')
@include('tampilan_dosen.nav')

@yield('home')
@yield('kegiatan')
@yield('profil')
@yield('peringatan')
@yield('edit-profil')
@include('tampilan_dosen.modal')
@include('tampilan_dosen.footer')