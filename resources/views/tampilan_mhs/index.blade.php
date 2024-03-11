@include('tampilan_mhs.head')
@include('tampilan_mhs.loading')

@include('tampilan_mhs.aside')
@include('tampilan_mhs.nav')

@yield('dashboard')
@yield('profil')
@yield('edit-profil')
@include('tampilan_mhs.modal')
@include('tampilan_mhs.footer')