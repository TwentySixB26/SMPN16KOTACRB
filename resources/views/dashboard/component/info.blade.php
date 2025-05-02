<div class="grid grid-cols-12 gap-6 mt-10">
    {{-- info sekola --}}
    <div class="col-span-12 lg:col-span-6 bg-gray-50 shadowMe py-6">
        <div class="w-2/12 mx-auto">
            <img src="/img/logo-smp.png" alt="" class="">
        </div>
        <h1 class="text-center mt-2 font-semibold text-gray-800 text-base sm:text-lg lg:text-base">SMP Negeri 16 Kota Cirebon</h1>
        <p class="text-sm sm:text-base lg:text-sm text-center text-gray-600 mx-auto w-11/12 sm:w-9/12 lg:w-9/12">Jl. Kebumen, Lemahwungkuk, Kec. Lemahwungkuk, Kota Cirebon, Jawa Barat.</p>
    </div>
    {{-- info sekola --}}

    {{-- detail pengajar --}}
    <div class="col-span-12 lg:col-span-6 bg-gray-50 shadowMe py-6 h-max">
        {{-- total --}}
        <div class="grid grid-cols-12 px-3">
            {{-- total kelas yang diajar --}}
            <div class="text-2xl sm:text-4xl lg:text-3xl bg-gray-900 text-gray-50  text-center rounded-md col-span-6 lg:col-span-6   mx-2 lg:mx-2 py-5 sm:py-12 lg:py-8 px-3 ">
                <i class="fa-solid fa-door-open"></i>
                <h1 class="font-lexend mt-3 lg:mt-2 text-xs sm:text-lg lg:text-base font-semibold"> {{ $totalJadwal }} KELAS </h1>
            </div>
            {{-- akhir total kelas yang diajar --}}

            {{-- total mata pelajaran diampu --}}
            <div class="text-2xl sm:text-4xl lg:text-3xl bg-gray-900 text-gray-50  text-center rounded-md col-span-6 lg:col-span-6   mx-2 lg:mx-2 py-5 sm:py-12 lg:py-8 px-3 ">
                <i class="fa-solid fa-book"></i>
                <h1 class="font-lexend mt-3 lg:mt-2 text-xs sm:text-lg lg:text-base font-semibold">{{ auth()->user()->guruMapel()->count() }} MATA PELAJARAN </h1>
            </div>
            {{-- akhir total mata pelajaran diampu --}}
        </div>
        {{-- akhir total --}}
    </div>
    {{-- akhir detail pengajar --}}
</div>
