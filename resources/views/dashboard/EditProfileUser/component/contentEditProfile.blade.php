<div class="px-4 py-3 text-right">
    <a href="/profileUser">
        <button type="button" class="px-3 py-[0.5rem] text-sm bg-red-600 text-white rounded-sm">
            <i class="fa-solid fa-delete-left text-xs mr-1"></i> Kembali
        </button>
    </a>
</div>

<form action="/profileUser/{{ auth()->user()->id }}" method="post"  enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="grid grid-cols-12 gap-6  sm:px-5 sm:pb-6">
        {{-- profile --}}
        <div  class="col-span-12 lg:col-span-4 font-cabin px-4 rounded-md py-3 lg:py-8 h-max ">
            <div class="relative max-w-[55%] sm:max-w-[35%]  lg:max-w-[60%] mx-auto">
                {{-- img --}}
                <div class=" w-40 h-40 rounded-full object-center  overflow-hidden mx-auto relative ">
                    <img src="/storage/{{ auth()->user()->profile ?? 'profile/profile.png' }} " class="w-full h-full object-cover object-center ">
                </div>
                {{-- akhir img --}}

                {{-- input img --}}
                <div class="z-10 absolute bottom-0 right-0 text-slate-50 transition-all border-2 bg-sky-600 hover:bg-sky-800 w-9 h-9 leading-8 text-center rounded-full overflow-hidden">
                    <input type="file"  name="profile" id="imgInput" class="absolute scale-[3] opacity-0 cursor-pointer">
                    <i class="fa-solid fa-camera "></i>
                </div>
                {{-- akhir inout img --}}
            </div>
            <p class="mt-4 text-sm text-center text-slate-400 italic font-firaSans" id="nameFoto"></p>

            @error('profile')
            <div class="mt-2 text-xs text-center  text-red-500">
                <h1>{{ $message }}</h1>
            </div>
            @enderror

            <div class="text-center mt-7 lg:mt-5">
                <button type="submit" class="w-[70%] sm:w-[50%] lg:w-full px-3 py-[0.5rem] text-sm bg-emerald-600 hover:bg-emerald-800 text-white rounded-full mx-auto">
                    <i class="fa-solid fa-floppy-disk mr-1 text-xs"></i>Save Profile
                </button>
            </div>
        </div>
        {{-- akhir profile --}}

        {{-- info detail --}}
        <div  class="col-span-12 lg:col-span-8 font-cabin px-4 sm:px-2 lg:px-4 rounded-md py-3 lg:py-8 h-max ">
            <h1 class="text-left font-cabin font-bold text-gray-800 text-lg">Edit your profile </h1>
            <div class="mt-4 flex flex-col sm:flex-row sm:gap-2">
                <div class="mb-4 sm:mb-0 w-full">
                    <h1 class="text-sm sm:text-base text-gray-700 font-medium">Name :</h1>
                    <input required type="text" name="name" id="name" class="w-full placeholder:text-xs text-sm text-gray-600 px-3 py-2  rounded-lg mt-1 border-[1.5px] outline-emerald-500" placeholder="Your name" maxlength="150" value="{{ auth()->user()->name }}">

                    @error('name')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
                <div class="mb-4 sm:mb-0 w-full">
                    <h1 class="text-sm sm:text-base text-gray-700 font-medium">NIP/NUTPK :</h1>
                    <input required type="text" readonly name="NIP" id="NIP" class="w-full placeholder:text-xs text-sm text-gray-600 px-3 py-2  rounded-lg mt-1 border-[1.5px] outline-emerald-500" placeholder="Your NIP"  value="{{ auth()->user()->NIP }}">

                    @error('NIP')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="sm:mt-4 flex flex-col sm:flex-row sm:gap-2">
                <div class="mb-4 sm:mb-0  w-full sm:w-[50%]">
                    <h1 class="text-sm sm:text-base text-gray-700 font-medium">Gol :</h1>
                    <input  type="text" name="gol" id="gol" class="w-full placeholder:text-xs text-sm text-gray-600 px-3 py-2  rounded-lg mt-1 border-[1.5px] outline-emerald-500" placeholder="Your gol" maxlength="20" value="{{ auth()->user()->gol  }}">
                    @error('gol')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
                <div class="mb-4 sm:mb-0  w-full">
                    <h1 class="text-sm sm:text-base text-gray-700 font-medium">Alamat :</h1>
                    <input  type="text" name="alamat" id="alamat" class="w-full placeholder:text-xs text-sm text-gray-600 px-3 py-2  rounded-lg mt-1 border-[1.5px] outline-emerald-500" placeholder="Your alamat" maxlength="255" value="{{ auth()->user()->alamat  }}">

                    @error('alamat')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
            </div>

            <div class="sm:mt-4 flex flex-col sm:flex-row sm:gap-2">
                <div class="mb-4 sm:mb-0  w-full">
                    <h1 class="text-sm sm:text-base text-gray-700 font-medium">Email :</h1>
                    <input  type="text" name="email" id="name" class="w-full placeholder:text-xs text-sm text-gray-600 px-3 py-2  rounded-lg mt-1 border-[1.5px] outline-emerald-500" placeholder="Your email" maxlength="150" value="{{ auth()->user()->email  }}">

                    @error('email')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
                <div class="mb-4 sm:mb-0  w-full">
                    <h1 class="text-sm sm:text-base text-gray-700 font-medium">Phone :</h1>
                    <input  type="text" readonly name="phone" id="phone" class="w-full placeholder:text-xs text-sm text-gray-600 px-3 py-2  rounded-lg mt-1 border-[1.5px] outline-emerald-500" placeholder="Your phone" maxlength="14" value="{{ auth()->user()->phone  }}">

                    @error('phone')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="sm:mt-4 flex flex-col sm:flex-row sm:gap-2">
                <div class="mb-4 sm:mb-0  w-full">
                    <h1 class="text-sm sm:text-base text-gray-700 font-medium">New Password :</h1>
                    <input type="password" name="password" id="password" class="w-full placeholder:text-xs text-sm text-gray-600 px-3 py-2  rounded-lg mt-1 border-[1.5px] outline-emerald-500" placeholder="Optional (Jika ingin diganti,jika tidak kosongkan saja!)" minlength="4">

                    @error('password')
                        <div class="mt-2 text-xs text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        {{-- akhir info detail --}}
    </div>
</form>




