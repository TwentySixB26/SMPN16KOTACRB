@extends('layout/layout')

@section('content')
    {{-- navbar --}}
    @include('component/navbar')
    {{-- akhir navbar --}}

    @include('kepegawaian/guru')

    {{-- footer --}}
    @include('component/footer')
    {{-- akhir footer --}}
@endsection
