<div class="w-full border-t-2 border-t-blue-500 bg-gray-50 shadowMe py-5 sm:py-6 lg:py-4 px-3 mt-10 sm:mt-20 ">

    {{-- header --}}
    <div class="mt-2">
        <p class="text-xs sm:text-sm lg:text-xs text-gray-500 font-lexend mt-1">Recap Kehadiran Siswa</p>
        <h1 class="text-base sm:text-lg lg:text-base uppercase text-gray-500 font-lexend font-normal ">{{ $jadwal->guru_mapel->mapel->name_mapel }} ({{  $jadwal->kelas->name_kelas  }})</h1>
    </div>
    {{-- akhir header --}}

    <div class="overflow-x-auto w-[100%] text-left mt-10 ">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg ">
            <thead>
                <tr class=" text-gray-700 border border-gray-300 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-center border border-gray-300">No</th>
                    <th class="py-3 px-6 text-center border border-gray-300">NIS</th>
                    <th class="py-3 px-6 text-center border border-gray-300">NISN</th>
                    <th class="py-3 px-6 text-center border border-gray-300">Nama Siswa</th>
                    <th class="py-3 px-6 text-center border border-gray-300">Presentase kehadiran</th>
                    <th class="py-3 px-6 text-center border border-gray-300">Total Kehadiran</th>
                    <th class="py-3 px-6 text-center border border-gray-300">Sakit</th>
                    <th class="py-3 px-6 text-center border border-gray-300">Izin</th>
                    <th class="py-3 px-6 text-center border border-gray-300">Tanpa keterangan</th>

                </tr>
            </thead>
            <tbody class="text-gray-900 text-sm ">
                @foreach ($siswaAll as $siswa)
                    @php
                        $total_kehadiran = $siswa->pertemuan->whereIn('id', $pertemuans->pluck('id'))->count() ;
                        $sakit = $siswa->pertemuan
                                            ->whereIn('id', $pertemuans->pluck('id'))
                                            ->where('pivot.kehadiran', 'sakit')
                                            ->count();

                        $izin = $siswa->pertemuan
                                            ->whereIn('id', $pertemuans->pluck('id'))
                                            ->where('pivot.kehadiran', 'izin')
                                            ->count();

                        $sakit = $siswa->pertemuan
                                            ->whereIn('id', $pertemuans->pluck('id'))
                                            ->where('pivot.kehadiran', 'sakit')
                                            ->count();

                        $tanpa_keterangan = $siswa->pertemuan
                                            ->whereIn('id', $pertemuans->pluck('id'))
                                            ->where('pivot.kehadiran', 'tanpa_keterangan')
                                            ->count();


                        $hadir = $siswa->pertemuan
                                            ->whereIn('id', $pertemuans->pluck('id'))
                                            ->where('pivot.kehadiran', 'hadir')
                                            ->count();
                    @endphp

                    <tr class="">
                        <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap" >{{ $loop->iteration  }}</td>
                        <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap" > {{ $siswa->NIS }}</td>
                        <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap">{{ $siswa->NISN }}</td>
                        <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap">{{ $siswa->name }}</td>
                        <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap">{{ round(($hadir / $total_kehadiran) * 100) . '%' }} </td>
                        <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap">{{ $hadir }} / {{ $total_kehadiran }}</td>
                        <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap">{{ $sakit}}</td>
                        <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap">{{ $izin}}</td>
                        <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap">{{ $tanpa_keterangan}}</td>

                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
