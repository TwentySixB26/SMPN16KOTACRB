<div class="grid grid-cols-12 gap-6 mt-4">
    @foreach ($daftarKelas as $jadwal)
        <a href="/dashboard/{{ $jadwal->id }}" class="col-span-12 sm:col-span-4 lg:col-span-3 font-cabin bg-gray-950 text-center rounded-md text-gray-50 shadowMe py-10 h-max">
            <div class="">
                <h1 class="text-3xl font-bold">{{  $jadwal->kelas->name_kelas }}</h1>
                <p class="text-lg font-medium">{{  $jadwal->guru_mapel->mapel->name_mapel }}</p>
            </div>
        </a>
    @endforeach
</div>
