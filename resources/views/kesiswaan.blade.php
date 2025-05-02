@extends('layout/layout2')

@section('content')
    {{-- navbar --}}
    @include('component/navbar2')
    {{-- akhir navbar --}}


    {{-- eskul --}}
    @include('kesiswaan/eskul')
    {{-- akhir eskul --}}


    {{-- galeri --}}
    @include('kesiswaan/galeri')
    {{-- akhir galeri --}}

    {{-- prestasi --}}
    @include('kesiswaan/prestasi')
    {{-- akhir Prestasi --}}


    {{-- presensi --}}
    @livewire('kesiswaan')
    {{-- akhir presensi --}}


    {{-- footer --}}
    @include('component/footer')
    {{-- akhir footer --}}
@endsection
