
<div class="grid grid-cols-12 gap-6  bg-gray-100  p-5">
    {{-- profile --}}
    <div  class="col-span-12 lg:col-span-3 font-cabin px-4 rounded-md py-3 lg:py-8 h-max ">
        <div class=" w-28 h-28 rounded-full  overflow-hidden mx-auto">
            <img src="/storage/{{ auth()->user()->profile ?? 'profile/profile.png' }} " class="w-full h-full  object-cover">
        </div>
        <h1 class="mt-3 text-center font-semibold text-gray-900">{{ auth() ->user()->name}}</h1>
        <a href="/profileUser/{{ auth() ->user()->id }}/edit" class="text-[0.7rem] text-gray-700 py-1 rounded-sm block text-center mt-0"> <i class="fa-solid fa-pen-to-square text-xs mr-1"></i>  Edit Profile</a>
    </div>
    {{-- akhir profile --}}

    {{-- info detail --}}
    <div  class="col-span-12 lg:col-span-5 font-cabin px-4 rounded-md py-3 lg:py-8 h-max ">
        <h1 class="text-left font-semibold text-gray-900 text-lg">Detail User :</h1>

        <div class="mt-3">
            <div class="mb-1">
                <span class="text-left font-semibold text-gray-950 text-base">Name : </span>
                <span class="text-left text-gray-900 text-sm">{{ auth() ->user()->name}}</span>
            </div>
            <div class="mb-1">
                <span class="text-left font-semibold text-gray-950 text-base">NIP/NUTPK : </span>
                <span class="text-left text-gray-900 text-sm">{{ auth() ->user()->NIP}}</span>
            </div>
            <div class="mb-1">
                <span class="text-left font-semibold text-gray-950 text-base">Gol : </span>
                <span class="text-left text-gray-900 text-sm">{{ auth() ->user()->gol ?? '-' }}</span>
            </div>

            <div class="mb-1">
                <span class="text-left font-semibold text-gray-950 text-base">Alamat : </span>
                <span class="text-left text-gray-900 text-sm">{{ auth() ->user()->alamat ?? '-' }}</span>
            </div>
            <div class="mb-1">
                <span class="text-left font-semibold text-gray-950 text-base">Phone : </span>
                <span class="text-left text-gray-900 text-sm">{{ auth() ->user()->phone ?? '-'}}</span>
            </div>
            <div class="mb-1">
                <span class="text-left font-semibold text-gray-950 text-base">Email : </span>
                <span class="text-left text-gray-900 text-sm">{{ auth() ->user()->email ?? '-'}}</span>
            </div>
        </div>
    </div>
    {{-- akhir info detail --}}

    <div  class="col-span-12 lg:col-span-4 font-cabin px-4 rounded-md py-3 lg:py-8 h-max ">
        <h1 class="text-left  text-gray-900 text-lg">Kelas Diampu :</h1>

        <div class="mt-3">
            @foreach ($jadwals as $jadwal)
                <div class="mb-1">
                    <span class="text-left  text-blue-700 text-base">{{ $jadwal->guru_mapel->mapel->name_mapel }} ({{ $jadwal->kelas->name_kelas }}) </span>
                </div>
            @endforeach
        </div>
    </div>

</div>





