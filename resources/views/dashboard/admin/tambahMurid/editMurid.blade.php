<div class="mt-4 w-full bg-gray-50 shadowMe border-t-2 border-t-blue-600 px-4">
    <div class="mt-8 pb-8">
        <div class="mb-0 text-xs font-lexend font-medium   text-gray-500">
            <a href="/admin" class="hover:text-blue-600">Admin Dashboard </a> &raquo; <a href="/admin/murid" class="hover:text-blue-600">Create Murid </a> &raquo;
        </div>

        {{-- header --}}
        <h1 class="mt-8 text-xl font-acmeRegular font-semibold text-slate-700">Edit  Murid</h1>
        {{-- akhir header --}}

        <form action="/admin/murid/{{ $murid->id }}" method="post" class="">
            @csrf
            @method('put')


            {{-- input create new guru --}}
            <div class="mt-8">
                <div>
                    <h1 class="text-slate-600 font-cabin">Nama Siswa : </h1>
                    <input type="text" name="name" id="name" placeholder="Nama Siswa" class="w-full  py-2 outline-none bg-transparent border-b-[1.5px] border-b-gray-500 text-gray-700 placeholder:text-sm" maxlength="150" required value="{{ $murid->name }}">
                    @error('name')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
                <div class="mt-10">
                    <h1 class="text-slate-600 font-cabin">NIS :</h1>
                    <input type="text" name="NIS" id="NIS" placeholder="NIS" class="w-full  py-2 outline-none bg-transparent border-b-[1.5px] border-b-gray-500 text-gray-700 placeholder:text-sm"  maxlength="11" required value="{{ $murid->NIS }}">
                    @error('NIS')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
                <div class="mt-10">
                    <h1 class="text-slate-600 font-cabin">NISN :</h1>
                    <input type="text" name="NISN" id="NISN" placeholder="NISN" class="w-full  py-2 outline-none bg-transparent border-b-[1.5px] border-b-gray-500 text-gray-700 placeholder:text-sm"  maxlength="11" required value="{{ $murid->NISN }}">
                    @error('NISN')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
                <div class="mt-10">
                    <h1 class="text-slate-600 font-cabin">Alamat :</h1>
                    <input type="text" name="alamat" id="alamat" placeholder="Alamat" class="w-full  py-2 outline-none bg-transparent border-b-[1.5px] border-b-gray-500 text-gray-700 placeholder:text-sm"  maxlength="255" value="{{ $murid->alamat }}">
                    @error('alamat')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
                <div class="mt-10">
                    <label for="kelas_id" class="text-slate-600 font-cabin" >Pilih Kelas:</label>
                    <select name="kelas_id" id="kelas_id" class="block mt-3 cursor-pointer  font-cabin text-sm px-6 py-2 border-gray-700 text-gray-700 border rounded-sm outline-none" required>
                        <option value="{{ $murid->kelas->id }}" class="px-0 mx-0">{{ $murid->kelas->name_kelas }}</option>
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
                <a href="/admin/murid">
                    <button type="button" class="mt-10 bg-red-600 hover:bg-red-700 text-gray-50  text-sm py-2 px-4 rounded-md "> &laquo; Kembali</button>
                </a>
                <button type="submit" class="mt-10 bg-green-600 hover:bg-green-700 text-gray-50  text-sm py-2 px-4 rounded-md ">Update Data <i class="fa-solid fa-plus text-xs ms-1"></i></button>
            </div>
            {{-- akhir button Submit --}}
        </form>
    </div>
</div>
