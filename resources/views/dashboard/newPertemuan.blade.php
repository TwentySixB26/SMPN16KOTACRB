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
                {{-- alert ketika gagal --}}
                @include('dashboard/component/failed')
                {{-- akhir alert ketika gagal --}}

                <div class="w-full border-t-2 border-t-blue-500 bg-gray-50 shadowMe py-5 sm:py-6 lg:py-4 px-3">
                    <h1 class="text-base uppercase text-gray-500 font-lexend font-normal">{{ $jadwal->guru_mapel->mapel->name_mapel }} ({{  $jadwal->kelas->name_kelas  }})</h1>
                    <p class="text-xs text-gray-500 font-lexend mt-1">Date Now : {{ \Carbon\Carbon::now()->format('d-m-Y') }}</p>
                    <form action="/dashboard" method="post" class="mt-8">
                        @csrf
                        <div>
                            <h1 class=" font-acmeRegular font-semibold text-xl text-gray-700">Deksripsi :</h1>
                            <textarea id="content"  name="content" class="mt-2 w-full h-[40px] sm:h-[40px]  lg:h-[40px] border-b border-slate-950  outline-none active:border-b text-xs sm:text-base lg:text-sm resize-none bg-transparent" placeholder="Tambahkan deksripsi" required maxlength="100"></textarea>
                            <input type="hidden" class="text-base" name="jadwal_id" id="jadwal_id" value="{{ $jadwal->id }}"/>
                        </div>
                        <div class="mt-2">
                            <a href="/dashboard/{{ $jadwal->id }}">
                                <button type="button" class="px-3 py-[0.5rem] text-sm bg-red-600 text-white rounded-sm">
                                    <i class="fa-solid fa-delete-left text-xs mr-1"></i> Kembali
                                </button>
                            </a>
                            <button type="submit" class="px-3 py-[0.5rem] text-sm bg-green-600 text-white rounded-sm"><i class="fa-solid fa-plus text-xs mr-1"></i> Tambah Pertemuan</button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
    {{-- content --}}
@endsection
