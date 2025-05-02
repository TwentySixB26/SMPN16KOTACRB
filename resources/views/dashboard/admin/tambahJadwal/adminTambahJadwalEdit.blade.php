@extends('dashboard/layout/layout')

@section('content')

    {{-- menu left --}}
    @include('dashboard.component.menuLeft')
    {{-- akhir menu left --}}

    {{-- content --}}
    <div class="w-full flex flex-col h-screen overflow-y-hidden bg-gray-200">
        <!-- Desktop Header -->
        @include('dashboard.component.headerDesktop')
        {{-- akhir dekstop header --}}

        <!-- Mobile Header & Nav -->
        @include('dashboard.component.mobileHeaderNav')
        {{-- akhir Mobile header & Nav --}}

        <div class="w-full overflow-x-hidden border-t flex flex-col relative">
            <main class="w-full flex-grow p-6 mb-14">
                <div class="mt-4">
                    @include('dashboard.component.failed')
                    <h1 class="text-xl text-slate-700 font-semibold font-lexend">Edit Jadwal mengajar kelas</h1>
                    <div class="mt-5">
                        @include('dashboard.admin.tambahJadwal.editJadwal')
                    </div>
                </div>
            </main>
        </div>
    </div>
    {{-- content --}}
@endsection
