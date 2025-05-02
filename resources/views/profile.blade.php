@extends('layout/layout2')

@section('content')
    {{-- navbar --}}
    @include('component/navbar2')
    {{-- akhir navbar --}}


    {{-- tentang sekolah --}}
    @include('profile/tentangSekolah')
    {{-- akhir tentang sekolah --}}

    {{-- visi dan misi --}}
    @include('profile.visiMisi')
    {{-- akhir visi dan misi --}}


    {{-- tata tertib --}}
    @include('profile.tataTertib')
    {{-- Akhir tata tertib --}}


    {{-- news --}}
    @include('profile/news')
    {{-- akhir news --}}

    {{-- map --}}
    @include('profile.map')
    {{-- akhir map --}}


    {{-- footer --}}
    @include('component/footer')
    {{-- akhir footer --}}
@endsection
