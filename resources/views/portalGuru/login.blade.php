<div class="flex justify-center items-center  w-full h-full flex-col">
    <div class="absolute inset-0 bg-black bg-opacity-40 h-screen  "></div>
    @include('component.alert')
    @include('component.succes')
    <div class="w-[95%] sm:w-[60%] lg:w-[30%]  bg-gray-100 rounded-lg relative z-50 mx-3 lg:mx-0 px-5 sm:px-8 lg:px-5   pt-5 pb-10  sm:pt-10 sm:pb-20  lg:pt-5 lg:pb-10">
        <h1 class=" font-cabin text-xl sm:text-2xl lg:text-xl text-gray-700 font-bold text-center">LOGIN</h1>
        <form action="/login" method="post" class="mt-6 sm:mt-10 lg:mt-6">
            @csrf
            {{-- username --}}
            <div class="font-nunito font-semibold text-gray-900">
                <h1 class="text-base sm:text-lg lg:text-base">NIP/NUTPK : </h1>
                <input type="text" name="NIP" id="NIP" placeholder="Masukan NIP/NUTPK" class="px-0 placeholder:text-xs sm:placeholder:text-sm lg:placeholder:text-sm text-sm sm:text-base lg:text-sm py-2 w-full mt-1 sm:mt-0 lg:mt-1 tracking-wide bg-transparent  outline-none border-b-[1.3px] border-black" required>
                @error('NIP')
                    <div class=" text-[0.7rem] sm:text-sm lg:text-xs text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>
            {{-- akhir username --}}

            {{-- password --}}
            <div class="font-nunito font-semibold text-gray-900 mt-6 sm:mt-8 lg:mt-8">
                <h1 class="text-base sm:text-lg lg:text-base">Password :</h1>
                <input type="password" name="password" id="password" placeholder="Masukan Password" class="px-0 placeholder:text-xs sm:placeholder:text-sm lg:placeholder:text-sm text-sm sm:text-base lg:text-sm py-2 w-full mt-1 sm:mt-0 lg:mt-1 tracking-wide bg-transparent  outline-none border-b-[1.3px] border-black" required>
                @error('password')>
                    <div class=" text-[0.7rem] sm:text-sm lg:text-xs text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>
            {{-- akhir password --}}
            <button type="submit" class="mt-6 bg-sky-600 text-gray-100 py-1.5 px-5 rounded-md w-full">Log In</button>
            <p class="mt-3 text-red-600 text-[0.65rem] sm:text-xs lg:text-xs tracking-wider">*pastikan NIP/NUTPK dan password anda benar</p>
        </form>

    </div>
</div>
