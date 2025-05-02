<div class="w-full border-t-2 border-t-blue-500 bg-gray-50 shadowMe py-5 sm:py-6 lg:py-4 px-3 mt-10">
    <div class="mb-5 text-xs font-lexend font-medium   text-gray-500">
        <a href="/dashboard" class="hover:text-blue-600">Dashboard </a> &raquo; <a href="/dashboard/{{ $jadwal->id }}" class="hover:text-blue-600"> Semua pertemuan </a> &raquo;
    </div>

    {{-- head --}}
    <h1 class="text-base sm:text-lg lg:text-base uppercase text-gray-500 font-lexend font-normal ">{{ $jadwal->guru_mapel->mapel->name_mapel }} ({{  $jadwal->kelas->name_kelas  }})</h1>
    <p class="text-xs sm:text-sm lg:text-xs text-gray-500 font-lexend mt-1">Date Now : {{ \Carbon\Carbon::now()->format('d-m-Y') }}</p>
    {{-- akhir head --}}


    <form action="/dashboard/{{ $pertemuan->id }}/persensiUpdate" method="post" class="mt-8">
        @csrf
        @method('put')
        {{-- tabel presensi --}}
        <div class="overflow-x-auto w-[100%] text-left mt-10 ">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg ">
                <thead>
                    <tr class=" text-gray-700 border border-gray-300 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-center border border-gray-300">No</th>
                        <th class="py-3 px-6 text-center border border-gray-300">NIS</th>
                        <th class="py-3 px-6 text-center border border-gray-300">NISN</th>
                        <th class="py-3 px-6 text-center border border-gray-300">Nama Siswa</th>
                        <th class="py-3 px-6 text-center border border-gray-300">Kehadiran</th>
                    </tr>
                </thead>
                <tbody class="text-gray-900 text-sm ">
                    @foreach ($presensiAll as $presensi)
                        <tr class="">
                            <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap" >{{  $loop->iteration }}</td>
                            <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap" >{{ $presensi->murid->NIS }}</td>
                            <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap">{{ $presensi->murid->NISN }}</td>
                            <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap">{{ $presensi->murid->name }}</td>
                            <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap">
                                <div class="flex gap-8 justify-center ">
                                    <label class="flex items-center gap-1">
                                        <input type="radio" name="kehadiran_{{ $presensi->murid->id }}" {{ $presensi->kehadiran === 'hadir' ? 'checked' : '' }}  value="hadir" required>
                                        <span>Hadir</span>
                                    </label>
                                    <label class="flex items-center gap-1">
                                        <input type="radio" name="kehadiran_{{ $presensi->murid->id }}" {{ $presensi->kehadiran === 'tanpa_keterangan' ? 'checked' : '' }}  value="tanpa_keterangan" required>
                                        <span>Tanpa Keterangan</span>
                                    </label>
                                    <label class="flex items-center gap-1">
                                        <input type="radio" name="kehadiran_{{ $presensi->murid->id }}" {{ $presensi->kehadiran === 'sakit' ? 'checked' : '' }}  value="sakit" required>
                                        <span>Sakit</span>
                                    </label>
                                    <label class="flex items-center gap-1">
                                        <input type="radio" name="kehadiran_{{ $presensi->murid->id }}" {{ $presensi->kehadiran === 'izin' ? 'checked' : '' }}  value="izin" required>
                                        <span>Izin</span>
                                    </label>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- akhir tabel presensi --}}

        {{-- recap --}}
        <div class="mt-3">
            <p class="text-sm text-gray-600 font-nunito">Total Siswa : {{ $presensiAll->count() }} </p>
            <p class="text-xs text-gray-600 font-nunito"> {{ $totalSiswaSakit->count() }} Sakit</p>
            <p class="text-xs text-gray-600 font-nunito">{{ $totalSiswaIzin->count() }} Izin </p>
            <p class="text-xs text-gray-600 font-nunito">{{ $totalSiswaTanpaKet->count() }} Tanpa Keterangan</p>
        </div>
        {{-- akhir recap --}}


        {{-- btn update --}}
            <div class="mt-6">
                <button type="submit" class="px-3 py-[0.5rem] text-sm bg-green-600 text-white rounded-sm"><i class="fa-solid fa-plus text-xs mr-1"></i> Update</button>
            </div>
    </form>
    {{-- akhir btn update --}}
</div>
