<div class="mt-4 w-full bg-gray-50 shadowMe border-t-2 border-t-blue-600 px-4">
    <div class="mt-8 pb-8">

        <div class="mb-0 text-xs font-lexend font-medium   text-gray-500">
            <a href="/admin" class="hover:text-blue-600">Admin Dashboard </a> &raquo; <a href="/admin/jadwal" class="hover:text-blue-600">Create Jadwal </a> &raquo;
        </div>

        {{-- header --}}
        <h1 class="mt-3 text-xl font-acmeRegular font-semibold text-slate-700">Edit Guru mengampu Kelas</h1>
        {{-- akhir header --}}

        <form action="/admin/jadwal/{{ $jadwal->id }}" method="post" class="">
            @csrf
            @method('put')


            {{-- input create new guru --}}
            <div class="mt-0 flex gap-5 flex-col sm:flex-row">
                <div class="mt-10 w-full">
                    <label for="kelas_id" class="text-slate-600 font-cabin" >Pilih Kelas:</label>
                    <select name="kelas_id" id="kelas_id" class="w-full block mt-3 cursor-pointer  font-cabin text-sm px-2 sm:px-3 py-2 border-gray-700 text-gray-700 border rounded-sm outline-none" required>
                        <option value="{{ $jadwal->kelas_id }}" class="px-0 mx-0">{{ $jadwal->kelas->name_kelas }}</option>
                        @foreach ($kelas as $k)
                            <option value="{{ $k->id }}">{{ $k->name_kelas }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-2 sm:mt-10 w-full">
                    <label for="guru_mapel_id" class="text-slate-600 font-cabin" >Pilih Guru Mapel :</label>
                    <select name="guru_mapel_id" id="guru_mapel_id" class="w-full block mt-3 cursor-pointer  font-cabin text-sm px-2 sm:px-3 py-2 border-gray-700 text-gray-700 border rounded-sm outline-none" required>
                        <option value="{{ $jadwal->guru_mapel_id }}" class="px-0 mx-0">{{ $jadwal->guru_mapel->guru->name }} | {{ $jadwal->guru_mapel->mapel->name_mapel }}</option>
                        @foreach ($guruMapel as $gm)
                            <option value="{{ $gm->id }}">{{ $gm->guru->name}} | {{ $gm->mapel->name_mapel }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- akhir create new guru --}}

            <p class="text-red-600 text-xs mt-2">*perhatikan data anda dan cek kembali!</p>

            {{-- button submit --}}
            <div class="text-end">
                <a href="/admin/jadwal">
                    <button type="button" class="mt-10 bg-red-600 hover:bg-red-700 text-gray-50  text-sm py-2 px-4 rounded-md "> &laquo; Kembali</button>
                </a>
                <button type="submit" class="mt-10 bg-green-600 hover:bg-green-700 text-gray-50  text-sm py-2 px-4 rounded-md ">Update Data <i class="fa-solid fa-plus text-xs ms-1"></i></button>
            </div>
            {{-- akhir button Submit --}}
        </form>
    </div>
</div>
