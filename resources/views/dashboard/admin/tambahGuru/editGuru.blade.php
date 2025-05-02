<div class="mt-4 w-full bg-gray-50 shadowMe border-t-2 border-t-blue-600 px-4">
    <div class="mt-8 pb-8">
        <div class="mb-0 text-xs font-lexend font-medium   text-gray-500">
            <a href="/admin" class="hover:text-blue-600">Admin Dashboard </a> &raquo; <a href="/admin/guru" class="hover:text-blue-600">Create Guru </a> &raquo;
        </div>

        {{-- header --}}
        <h1 class="mt-3 text-xl font-acmeRegular font-semibold text-slate-700">Edit Acount Guru</h1>
        {{-- akhir header --}}

        <form action="/admin/guru/{{ $guru->id }}" method="post" class="">
            @csrf
            @method('put')


            {{-- input create new guru --}}
            <div class="mt-8">
                <div>
                    <h1 class="text-slate-600 font-cabin">Nama Guru dan Gelar :</h1>
                    <input type="text" name="name" id="name" placeholder="Nama Guru dan Gelar" class="w-full  py-2 outline-none bg-transparent border-b-[1.5px] border-b-gray-500 text-gray-700 placeholder:text-sm" maxlength="150" required value="{{ $guru->name }}">
                    @error('name')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
                <div class="mt-10">
                    <h1 class="text-slate-600 font-cabin">Gol :</h1>
                    <input type="text" name="gol" id="gol" placeholder="Gol" class="w-full  py-2 outline-none bg-transparent border-b-[1.5px] border-b-gray-500 text-gray-700 placeholder:text-sm"  maxlength="20" required value="{{ $guru->gol }}">
                    @error('gol')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
                <div class="mt-10">
                    <h1 class="text-slate-600 font-cabin">NIP/NUTPK :</h1>
                    <input type="text" name="NIP" id="NIP" placeholder="NIP/NUTPK untuk login" class="w-full  py-2 outline-none bg-transparent border-b-[1.5px] border-b-gray-500 text-gray-700 placeholder:text-sm"  maxlength="20" required value="{{ $guru->NIP }}">
                    @error('NIP')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
                <div class="mt-10">
                    <h1 class="text-slate-600 font-cabin">Alamat :</h1>
                    <input type="text" name="alamat" id="alamat" placeholder="Alamat" class="w-full  py-2 outline-none bg-transparent border-b-[1.5px] border-b-gray-500 text-gray-700 placeholder:text-sm"  maxlength="255" value="{{ $guru->alamat }}">
                    @error('alamat')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
                <div class="mt-10">
                    <h1 class="text-slate-600 font-cabin">Phone :</h1>
                    <input type="text" name="phone" id="phone" placeholder="Phone (*Optional)" class="w-full  py-2 outline-none bg-transparent border-b-[1.5px] border-b-gray-500 text-gray-700 placeholder:text-sm"  maxlength="14" value="{{ $guru->phone }}">
                    @error('phone')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
                <div class="mt-10">
                    <h1 class="text-slate-600 font-cabin">Email :</h1>
                    <input type="text" name="email" id="email" placeholder="Email (*Optional)" class="w-full  py-2 outline-none bg-transparent border-b-[1.5px] border-b-gray-500 text-gray-700 placeholder:text-sm"  maxlength="150" value="{{ $guru->email }}">
                    @error('email')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
            </div>
            {{-- akhir create new guru --}}

            <p class="text-red-600 text-xs mt-2">*perhatikan data anda dan cek kembali!</p>

            {{-- button submit --}}
            <div class="text-end">
                <a href="/admin/guru">
                    <button type="button" class="mt-10 bg-red-600 hover:bg-red-700 text-gray-50  text-sm py-2 px-4 rounded-md "> &laquo; Kembali</button>
                </a>
                <button type="submit" class="mt-10 bg-green-600 hover:bg-green-700 text-gray-50  text-sm py-2 px-4 rounded-md ">Update Data <i class="fa-solid fa-plus text-xs ms-1"></i></button>
            </div>
            {{-- akhir button Submit --}}
        </form>
    </div>
</div>

