@extends('dashboard/layout/layout')

@section('content')

    {{-- menu left --}}
    @include('dashboard.component.menuLeft')
    {{-- akhir menu left --}}

    <div class="w-full flex flex-col h-screen overflow-y-hidden bg-gray-100">
        <!-- Desktop Header -->
        @include('dashboard.component.headerDesktop')
        {{-- akhir dekstop header --}}

        <!-- Mobile Header & Nav -->
        @include('dashboard.component.mobileHeaderNav')
        {{-- akhir Mobile header & Nav --}}

        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6 mb-14">

                {{-- info --}}
                <h1 class="text-3xl text-black font-semibold">Dashboard Guru</h1>
                @include('dashboard.component.info')
                {{-- akhir info --}}



                {{-- kelas yg diampu --}}
                <div class="mt-20">
                    <h1 class="text-3xl text-black font-semibold">Presensi Siswa</h1>
                    @include('dashboard.component.kelasDiampu')
                </div>
                {{-- akhir kelas yg diampu --}}
            </main>
        </div>

    </div>
@endsection
