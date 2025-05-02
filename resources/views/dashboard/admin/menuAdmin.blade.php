<div class="grid grid-cols-12 gap-6 mt-6">

    {{-- guru --}}
    <div class="col-span-12 sm:col-span-4 lg:col-span-3 font-cabin bg-success-600 text-center rounded-md text-gray-50   ">
        <div class="text-left px-4 font-cabin mt-4 pb-5 border-b border-gray-200">
            <h1 class="text-base font-semibold text-slate-50">Tambah Guru</h1>
            <p class="text-4xl  font-jersey">{{ $guru->count() }} <span class="text-xs">Guru</span></p>
        </div>
        <div class="text-left px-4 font-cabin mt-2 mb-2">
            <a href="/admin/guru" class="text-[0.7rem]">Click for create &raquo;</a>
        </div>
    </div>
    {{-- akhir guru --}}

    {{-- murid --}}
    <div class="col-span-12 sm:col-span-4 lg:col-span-3 font-cabin bg-blue-600 text-center rounded-md text-gray-50   ">
        <div class="text-left px-4 font-cabin mt-4 pb-5 border-b border-gray-200">
            <h1 class="text-base font-semibold text-slate-50">Tambah Murid</h1>
            <p class="text-4xl  font-jersey">{{ $murid->count() }} <span class="text-xs">Murid</span></p>
        </div>
        <div class="text-left px-4 font-cabin mt-2 mb-2">
            <a href="/admin/murid" class="text-[0.7rem]">Click for create &raquo;</a>
        </div>
    </div>
    {{-- akhir murid --}}


    {{-- guru mapel --}}
    <div class="col-span-12 sm:col-span-4 lg:col-span-3 font-cabin bg-red-600 text-center rounded-md text-gray-50   ">
        <div class="text-left px-4 font-cabin mt-4 pb-5 border-b border-gray-200">
            <h1 class="text-base font-semibold text-slate-50">Atur Guru mengampu mapel</h1>
            <p class="text-4xl  font-jersey">{{ $guruMapel->count() }} <span class="text-xs">Guru mengampu</span></p>
        </div>
        <div class="text-left px-4 font-cabin mt-2 mb-2">
            <a href="/admin/guruMapel" class="text-[0.7rem]">Click for create &raquo;</a>
        </div>
    </div>
    {{-- guru mapel --}}


    {{-- jadwal --}}
    <div class="col-span-12 sm:col-span-4 lg:col-span-3 font-cabin bg-yellow-500 text-center rounded-md text-gray-50   ">
        <div class="text-left px-4 font-cabin mt-4 pb-5 border-b border-gray-200">
            <h1 class="text-base font-semibold text-slate-50">Atur guru mengampu kelas </h1>
            <p class="text-4xl  font-jersey">{{ $jadwal->count() }} <span class="text-xs">guru mengampu</span></p>
        </div>
        <div class="text-left px-4 font-cabin mt-2 mb-2">
            <a href="/admin/jadwal" class="text-[0.7rem]">Click for create &raquo;</a>
        </div>
    </div>
    {{-- akhir jadwal --}}
</div>


