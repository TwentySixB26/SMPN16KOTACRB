@extends('layout/layout')

@section('content')
    {{-- navbar --}}
    @include('component/navbar')
    {{-- akhir navbar --}}

    {{-- hero section --}}
    @include('ppdb/hero')
    {{-- akhir hero section --}}

    {{-- Isi ppdb --}}
    @include('PPDB/isiPPDB')
    {{-- akhir isi ppdb --}}

    {{-- footer --}}
    @include('component/footer')
    {{-- akhir footer --}}
@endsection


