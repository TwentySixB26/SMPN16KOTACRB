<div class="mt-4 w-full bg-gray-50 shadowMe border-t-2 border-t-blue-600 px-4">
    <div class="mt-8 pb-8">

        <div class="mb-0 text-xs font-lexend font-medium   text-gray-500">
            <a href="/admin" class="hover:text-blue-600">Admin Dashboard </a> &raquo; <a href="/admin/guruMapel" class="hover:text-blue-600">Create Guru Mata Pelajaraan </a> &raquo;
        </div>

        {{-- header --}}
        <h1 class="mt-3 text-xl font-acmeRegular font-semibold text-slate-700">Edit Guru Mata Pelajaran</h1>
        {{-- akhir header --}}

        <form action="/admin/guruMapel/{{ $guruMapel->id }}" method="post" class="">
            @csrf
            @method('put')


            {{-- input create new guru --}}
            <div class="mt-0 flex gap-5 flex-col sm:flex-row">
                <div class="mt-10 w-full">
                    <label for="user_id" class="text-slate-600 font-cabin" >Pilih Guru:</label>
                    <select name="user_id" id="user_id" class="w-full block mt-3 cursor-pointer  font-cabin text-sm px-2 sm:px-3 py-2 border-gray-700 text-gray-700 border rounded-sm outline-none" required>
                        <option value="{{ $guruMapel->guru->id }}" class="px-0 mx-0">{{ $guruMapel->guru->name }}</option>
                        @foreach ($guru as $g)
                            <option value="{{ $g->id }}">{{ $g->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-2 sm:mt-10 w-full">
                    <label for="mapel_id" class="text-slate-600 font-cabin" >Pilih Mata Pelajaran:</label>
                    <select name="mapel_id" id="mapel_id" class="w-full block mt-3 cursor-pointer  font-cabin text-sm px-2 sm:px-3 py-2 border-gray-700 text-gray-700 border rounded-sm outline-none" required>
                        <option value="{{ $guruMapel->mapel->id }}" class="px-0 mx-0">{{ $guruMapel->mapel->name_mapel }}</option>
                        @foreach ($mapel as $m)
                            <option value="{{ $m->id }}">{{ $m->name_mapel }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- akhir create new guru --}}

            <p class="text-red-600 text-xs mt-2">*perhatikan data anda dan cek kembali!</p>

            {{-- button submit --}}
            <div class="text-end">
                <a href="/admin/guruMapel">
                    <button type="button" class="mt-10 bg-red-600 hover:bg-red-700 text-gray-50  text-sm py-2 px-4 rounded-md "> &laquo; Kembali</button>
                </a>
                <button type="submit" class="mt-10 bg-green-600 hover:bg-green-700 text-gray-50  text-sm py-2 px-4 rounded-md ">Update Data <i class="fa-solid fa-plus text-xs ms-1"></i></button>
            </div>
            {{-- akhir button Submit --}}
        </form>
    </div>
</div>
