@include('tampilan_superadmin.head')
@include('tampilan_superadmin.loading')

@include('tampilan_superadmin.aside')
@include('tampilan_superadmin.nav')

@yield('dashboard')
@yield('profil')
@yield('edit-profil')
@yield('lokasi')
@yield('mahasiswa')
@yield('dosen')
@yield('kelompok')
@yield('kelompok-edit')
@yield('dpl')
@yield('tesedit')
@include('tampilan_superadmin.modal')
@include('tampilan_superadmin.footer')