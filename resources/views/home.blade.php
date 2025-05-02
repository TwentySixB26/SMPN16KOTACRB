@extends('layout/layout')

@section('content')
    {{-- navbar --}}
    @include('component/navbar')
    {{-- akhir navbar --}}

    {{-- hero section --}}
    @include('home/hero')
    {{-- akhir hero section --}}

    {{-- info --}}
    @include('home.info')
    {{-- akhir info --}}


    {{-- ppdb --}}
    @include('home.ppdb')
    {{-- akhir ppdb --}}

    {{-- news --}}
    @include('home.news')
    {{-- akhir news --}}

    {{-- footer --}}
    @include('component/footer')
    {{-- akhir footer --}}

@endsection


