@extends('dashboard/layout/layout')

@section('content')

    {{-- menu left --}}
    @include('dashboard.component.menuLeft')
    {{-- akhir menu left --}}

    {{-- content --}}
    <div class="w-full flex flex-col h-screen overflow-y-hidden bg-gray-100">
        <!-- Desktop Header -->
        @include('dashboard.component.headerDesktop')
        {{-- akhir dekstop header --}}

        <!-- Mobile Header & Nav -->
        @include('dashboard.component.mobileHeaderNav')
        {{-- akhir Mobile header & Nav --}}

        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6 mb-14">
                <a href="/dashboard/{{  $pertemuan->jadwal->id }}" class="px-3 py-[0.5rem] text-sm bg-red-600 text-white rounded-sm"><i class="fa-solid fa-angles-left text-xs mr-1"></i> Kembali</a>
                @include('dashboard.component.presensi.muridAll')

            </main>
        </div>
    </div>
    {{-- content --}}
@endsection
