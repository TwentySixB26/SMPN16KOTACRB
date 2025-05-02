<div class="w-full border-t-2 border-t-blue-500 bg-gray-50 shadowMe py-5 sm:py-6 lg:py-4 px-3">
    <div class="mb-5 text-xs font-lexend font-medium   text-gray-500">
        <a href="/dashboard" class="hover:text-blue-600">Dashboard </a> &raquo;
    </div>

    <h1 class="text-base sm:text-lg lg:text-base uppercase text-gray-500 font-lexend font-normal ">{{ $jadwal->guru_mapel->mapel->name_mapel }} ({{  $jadwal->kelas->name_kelas  }})</h1>
    <p class="text-xs sm:text-sm lg:text-xs text-gray-500 font-lexend mt-1">Date Now : {{ \Carbon\Carbon::now()->format('d-m-Y') }}</p>

    <div class="overflow-x-auto w-[100%] text-left mt-10">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg ">
            <thead>
                <tr class=" text-gray-700 border border-gray-300 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-center border border-gray-300">No</th>
                    <th class="py-3 px-6 text-center border border-gray-300">Content</th>
                    <th class="py-3 px-6 text-center border border-gray-300">Date</th>
                    <th class="py-3 px-6 text-center border border-gray-300">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-900 text-sm ">
                @foreach ($pertemuans as $pertemuan)
                <tr class="">
                    <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap" >{{  $loop->iteration }}</td>
                    <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap" >{{ $pertemuan->content }}</td>
                    <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap">{{ $pertemuan->created_at->format('d-m-Y') }}</td>
                    <td class="border border-gray-300 py-4 px-6 text-center whitespace-nowrap">
                        <form action="/dashboard/{{ $pertemuan->id }}" method="post" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pertemuan ini?')">
                            @method('delete')
                            @csrf
                            <button type="submit" class="px-3 py-[0.5rem] text-sm bg-red-600 text-white rounded-sm"><i class="fa-solid fa-trash text-xs mr-1"></i> Hapus</button>
                        </form>
                        <a href="/dashboard/{{ $pertemuan->id }}/edit" class="px-3 py-[0.5rem] text-sm bg-blue-600 text-white rounded-sm"><i class="fa-solid fa-pen-to-square text-xs mr-1"></i> Edit</a>
                        <a href="/dashboard/{{ $pertemuan->id }}/presensiMurid" class="px-3 py-[0.5rem] text-sm bg-green-600 text-white rounded-sm"><i class="fa-solid fa-user-pen text-xs mr-1"></i> Presensi</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="text-right mt-7">
        <a href="/dashboard/{{ $jadwal->id }}/pertemuan" class="px-3 py-[0.5rem] text-sm bg-emerald-600 text-white rounded-sm"><i class="fa-solid fa-plus text-xs mr-1 "></i> Tambah Pertemuan</a>
        <p class="text-[0.7rem] text-gray-400 mt-3 font-lexend">{{ $pertemuans->count() }}</p>
    </div>
</div>
