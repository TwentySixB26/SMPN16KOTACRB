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
                    @include('dashboard.component.success')
                    <h1 class="text-xl text-slate-700 font-semibold font-lexend">Tambah Murid</h1>
                    @include('dashboard.admin.tambahMurid.createNewMurid')
                    @include('dashboard.admin.tambahMurid.muridAll')
                </div>
            </main>
        </div>
    </div>
    {{-- content --}}
@endsection
