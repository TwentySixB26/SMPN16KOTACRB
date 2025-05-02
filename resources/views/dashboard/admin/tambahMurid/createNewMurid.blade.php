<div class="mt-4 w-full bg-gray-50 shadowMe border-t-2 border-t-blue-600 px-4">
    <div class="mt-8 pb-8">
        <div class="mb-0 text-xs font-lexend font-medium   text-gray-500">
            <a href="/admin" class="hover:text-blue-600">Admin Dashboard </a>  &raquo;
        </div>


        {{-- header --}}
        <h1 class="mt-3 text-xl font-acmeRegular font-semibold text-slate-700">Tambah Murid Baru </h1>
        {{-- akhir header --}}

        <form action="/admin/murid" method="post" class="">
            @csrf

            {{-- input create new guru --}}
            <div class="mt-8">
                <div>
                    <h1 class="text-slate-600 font-cabin">Nama Siswa :</h1>
                    <input type="text" name="name" id="name" placeholder="Nama siswa" class="w-full  py-2 outline-none bg-transparent border-b-[1.5px] border-b-gray-500 text-gray-700 placeholder:text-sm" maxlength="150" required>
                    @error('name')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
                <div class="mt-10">
                    <h1 class="text-slate-600 font-cabin">NIS :</h1>
                    <input type="text" name="NIS" id="NIS" placeholder="NIS" class="w-full  py-2 outline-none bg-transparent border-b-[1.5px] border-b-gray-500 text-gray-700 placeholder:text-sm"  maxlength="11" required>
                    @error('NIS')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
                <div class="mt-10">
                    <h1 class="text-slate-600 font-cabin">NISN :</h1>
                    <input type="text" name="NISN" id="NISN" placeholder="NISN " class="w-full  py-2 outline-none bg-transparent border-b-[1.5px] border-b-gray-500 text-gray-700 placeholder:text-sm"  maxlength="11" required>
                    @error('NISN')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
                <div class="mt-10">
                    <h1 class="text-slate-600 font-cabin">Alamat :</h1>
                    <input type="text" name="alamat" id="alamat" placeholder="Alamat " class="w-full  py-2 outline-none bg-transparent border-b-[1.5px] border-b-gray-500 text-gray-700 placeholder:text-sm"  maxlength="255" required>
                    @error('alamat')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
                <div class="mt-10">
                    <label for="kelas_id" class="text-slate-600 font-cabin" >Pilih Kelas:</label>
                    <select name="kelas_id" id="kelas_id" class="block mt-3 cursor-pointer  font-cabin text-sm px-3 py-2 border-gray-700 text-gray-700 border rounded-sm outline-none" required>
                        <option value="" class="px-0 mx-0">Belum memilih kelas</option>
                        @foreach ($kelas as $k)
                            <option value="{{ $k->id }}">{{ $k->name_kelas }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- akhir create new guru --}}

            <p class="text-red-600 text-xs mt-2">*perhatikan data anda dan cek kembali!</p>

            {{-- button submit --}}
            <div class="text-end">
                <button type="submit" class="mt-10 bg-green-600 hover:bg-green-700 text-gray-50  text-sm py-2 px-4 rounded-md ">Create New <i class="fa-solid fa-plus text-xs ms-1"></i></button>
            </div>
            {{-- akhir button Submit --}}
        </form>
    </div>
</div>
