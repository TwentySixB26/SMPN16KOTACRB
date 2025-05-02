<div>
    <div class=" w-full  px-5 sm:px-14 lg:px-16 mt-20 sm:mt-28 lg:mt-20 mb-14  mx-auto lg:mx-0" id="Presensi">

        {{-- header --}}
        <div class="w-full  text-center mt-20">
            <h1 class=" text-center text-blue-950  font-bold mb-1 sm:mb-3  text-base  sm:text-3xl md:text-4xl lg:text-3xl font-cabin tracking-wide"> Recap Kehadiran Siswa</h1>
        </div>
        {{-- akhir header --}}

        {{-- kehadiran siswa --}}
        <div class="flex mt-5 lg:mt-20 flex-col lg:flex-row">
            {{-- kelas dan nama siswa --}}
            <div class=" lg:mx-4   w-[100%] lg:w-[100%] ">

                {{-- kelas 7 --}}
                <details name="clases" class="py-3">
                    <summary class="text-base sm:text-base lg:text-xl font-bold w-[100%] sm:w-[100%] lg:w-[100%] text-gray-800 cursor-pointer font-lexend"> Recap 7A -  7H</summary>
                    <div class="pl-4 lg:pl-8">
                        @foreach ($totalKelas7 as $kelasNama => $siswaKelas)
                            <details name="class" class="py-3">
                                <summary class="text-base sm:text-base lg:text-xl font-bold w-full text-gray-900 cursor-pointer font-cabin">
                                    Recap Presensi {{ $siswaKelas->first()->kelas->name_kelas }}
                                </summary>
                                <p class="text-xs text-red-500 mt-8">*catatan! kehadiran diambil dari pertemuan setiap mapel! jadi jika murid tidak hadir karena sakit dalam satu hari dan  murid terdapat 4 mapel dalam hari tersebut maka murid akan dinyatakan izin sebanyak 4x  </p>
                                <div class="overflow-x-auto w-full  text-left">

                                    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md mt-6">
                                        <thead>
                                            <tr class="bg-gray-300 text-gray-950 border-[1.5px] border-gray-400  text-sm leading-normal">
                                                <th class="py-3 px-6 text-center border-[1.5px] border-gray-400 whitespace-nowrap">No</th>
                                                <th class="py-3 px-24 text-center border-[1.5px] border-gray-400 whitespace-nowrap">NIS / NISN</th>
                                                <th class="py-3 px-36 text-center border-[1.5px] border-gray-400 ">Nama</th>
                                                <th class="py-3 px-6 text-center border-[1.5px] border-gray-400 whitespace-nowrap">Total Tanpa Keterangan</th>
                                                <th class="py-3 px-6 text-center border-[1.5px] border-gray-400 whitespace-nowrap">Total Izin</th>
                                                <th class="py-3 px-6 text-center border-[1.5px] border-gray-400 whitespace-nowrap">Total Sakit</th>
                                                <th class="py-3 px-6 text-center border-[1.5px] border-gray-400 whitespace-nowrap">Total Persentase Kehadiran</th>
                                                @foreach ($jadwal->where('kelas_id', $kelasNama) as $j)
                                                    <th class="py-3 px-6 text-center border-[1.5px] border-gray-400 whitespace-nowrap"> {{ $j->guru_mapel->mapel->name_mapel }} (hadir / pertemuan)  </th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-700 text-sm">
                                            @foreach ($siswaKelas as $index => $siswa)
                                                @php
                                                    $totalPertemuan = $siswa->pertemuan->count();
                                                    $hadir = $siswa->pertemuan->where('pivot.kehadiran', 'hadir')->count();
                                                    $tanpaKeterangan = $siswa->pertemuan->where('pivot.kehadiran', 'tanpa_keterangan')->count();
                                                    $izin = $siswa->pertemuan->where('pivot.kehadiran', 'izin')->count();
                                                    $sakit = $siswa->pertemuan->where('pivot.kehadiran', 'sakit')->count();
                                                    $persentase = $totalPertemuan > 0 ? round(($hadir / $totalPertemuan) * 100) . '%' : 'belum ada presensi';
                                                @endphp
                                                <tr>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{  $loop->iteration }}</td>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{ $siswa->NIS }} / {{ $siswa->NIS }} </td>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{ $siswa->name }}</td>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{ $tanpaKeterangan }}</td>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{ $izin}}</td>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{ $sakit }}</td>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{ $persentase }}</td>
                                                    @foreach ($jadwal->where('kelas_id', $kelasNama) as $j)        {{-- jadwal = [7a mtk,7a biologi ] --}}  {{-- j = [7a mtk ] --}}
                                                        @if ($j->pertemuan->count() > 0)                     {{-- j (7a mtk) dicek apakah sudah melakukan pertemuan minimal 1x--}}
                                                            {{-- @foreach ($j->pertemuan as $pertemuan)            --}}
                                                                @php
                                                                    $total_per_mapel = $siswa->pertemuan->where('jadwal_id' , $j->id)->count() ;
                                                                    $tanpa_ket_per_mapel= $siswa->pertemuan->where('jadwal_id' , $j->id)->where('pivot.kehadiran', 'tanpa_keterangan')->count() ;
                                                                    $izin_per_mapel =  $siswa->pertemuan->where('jadwal_id' , $j->id)->where('pivot.kehadiran', 'izin')->count() ;
                                                                    $sakit_per_mapel= $siswa->pertemuan->where('jadwal_id' , $j->id)->where('pivot.kehadiran', 'sakit')->count() ;
                                                                    $hadir_per_mapel = $siswa->pertemuan->where('jadwal_id' , $j->id)->where('pivot.kehadiran', 'hadir')->count() . ' / ' . $total_per_mapel ;
                                                                @endphp
                                                            {{-- @endforeach --}}
                                                        @else
                                                            @php
                                                                $hadir_per_mapel = 'Belum ada pertemuan' ;
                                                            @endphp
                                                        @endif
                                                        <td class="py-3 px-6 text-center border-[1.5px] border-gray-400">
                                                            {{ $hadir_per_mapel}}
                                                        </td>
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </details>
                        @endforeach
                    </div>
                </details>
                {{-- akhir kelas 7 --}}


                {{-- kelas 8  --}}
                <details name="clases" class="py-3">
                    <summary class="text-base sm:text-base lg:text-xl font-bold w-[100%] sm:w-[100%] lg:w-[100%] text-gray-800 cursor-pointer font-lexend"> Recap 8A -  8I</summary>
                    <div class="pl-4 lg:pl-8">
                        @foreach ($totalKelas8 as $kelasNama => $siswaKelas)
                            <details name="class" class="py-3">
                                <summary class="text-base sm:text-base lg:text-xl font-bold w-full text-gray-900 cursor-pointer font-cabin">
                                    Recap Presensi {{ $siswaKelas->first()->kelas->name_kelas }}
                                </summary>
                                <p class="text-xs text-red-500 mt-8">*catatan! kehadiran diambil dari pertemuan setiap mapel! jadi jika murid tidak hadir karena sakit dalam satu hari dan  murid terdapat 4 mapel dalam hari tersebut maka murid akan dinyatakan izin sebanyak 4x  </p>
                                <div class="overflow-x-auto w-full  text-left">

                                    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md mt-6">
                                        <thead>
                                            <tr class="bg-gray-300 text-gray-950 border-[1.5px] border-gray-400  text-sm leading-normal">
                                                <th class="py-3 px-6 text-center border-[1.5px] border-gray-400 whitespace-nowrap">No</th>
                                                <th class="py-3 px-24 text-center border-[1.5px] border-gray-400 whitespace-nowrap">NIS / NISN</th>
                                                <th class="py-3 px-36 text-center border-[1.5px] border-gray-400 ">Nama</th>
                                                <th class="py-3 px-6 text-center border-[1.5px] border-gray-400 whitespace-nowrap">Total Tanpa Keterangan</th>
                                                <th class="py-3 px-6 text-center border-[1.5px] border-gray-400 whitespace-nowrap">Total Izin</th>
                                                <th class="py-3 px-6 text-center border-[1.5px] border-gray-400 whitespace-nowrap">Total Sakit</th>
                                                <th class="py-3 px-6 text-center border-[1.5px] border-gray-400 whitespace-nowrap">Total Persentase Kehadiran</th>
                                                @foreach ($jadwal->where('kelas_id', $kelasNama) as $j)
                                                    <th class="py-3 px-6 text-center border-[1.5px] border-gray-400 whitespace-nowrap"> {{ $j->guru_mapel->mapel->name_mapel }} (hadir / pertemuan)  </th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-700 text-sm">
                                            @foreach ($siswaKelas as $index => $siswa)
                                                @php
                                                    $totalPertemuan = $siswa->pertemuan->count();
                                                    $hadir = $siswa->pertemuan->where('pivot.kehadiran', 'hadir')->count();
                                                    $tanpaKeterangan = $siswa->pertemuan->where('pivot.kehadiran', 'tanpa_keterangan')->count();
                                                    $izin = $siswa->pertemuan->where('pivot.kehadiran', 'izin')->count();
                                                    $sakit = $siswa->pertemuan->where('pivot.kehadiran', 'sakit')->count();
                                                    $persentase = $totalPertemuan > 0 ? round(($hadir / $totalPertemuan) * 100) . '%' : 'belum ada presensi';
                                                @endphp
                                                <tr>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{  $loop->iteration }}</td>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{ $siswa->NIS }} / {{ $siswa->NIS }} </td>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{ $siswa->name }}</td>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{ $tanpaKeterangan }}</td>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{ $izin}}</td>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{ $sakit }}</td>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{ $persentase }}</td>
                                                    @foreach ($jadwal->where('kelas_id', $kelasNama) as $j)        {{-- jadwal = [8a mtk,8a biologi ] --}}  {{-- j = [8a mtk ] --}}
                                                        @if ($j->pertemuan->count() > 0)                     {{-- j (8a mtk) dicek apakah sudah melakukan pertemuan minimal 1x--}}
                                                            @php
                                                                $total_per_mapel = $siswa->pertemuan->where('jadwal_id' , $j->id)->count() ;
                                                                $tanpa_ket_per_mapel= $siswa->pertemuan->where('jadwal_id' , $j->id)->where('pivot.kehadiran', 'tanpa_keterangan')->count() ;
                                                                $izin_per_mapel =  $siswa->pertemuan->where('jadwal_id' , $j->id)->where('pivot.kehadiran', 'izin')->count() ;
                                                                $sakit_per_mapel= $siswa->pertemuan->where('jadwal_id' , $j->id)->where('pivot.kehadiran', 'sakit')->count() ;
                                                                $hadir_per_mapel = $siswa->pertemuan->where('jadwal_id' , $j->id)->where('pivot.kehadiran', 'hadir')->count() . ' / ' . $total_per_mapel ;
                                                            @endphp
                                                        @else
                                                            @php
                                                                $hadir_per_mapel = 'Belum ada pertemuan' ;
                                                            @endphp
                                                        @endif
                                                        <td class="py-3 px-6 text-center border-[1.5px] border-gray-400">
                                                            {{ $hadir_per_mapel}}
                                                        </td>
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </details>
                        @endforeach
                    </div>
                </details>
                {{-- akhir kelas 8 --}}



                {{-- kelas 9  --}}
                <details name="clases" class="py-3">
                    <summary class="text-base sm:text-base lg:text-xl font-bold w-[100%] sm:w-[100%] lg:w-[100%] text-gray-800 cursor-pointer font-lexend"> Recap 9A -  9I</summary>
                    <div class="pl-4 lg:pl-8">
                        @foreach ($totalKelas9 as $kelasNama => $siswaKelas)
                            <details name="class" class="py-3">
                                <summary class="text-base sm:text-base lg:text-xl font-bold w-full text-gray-900 cursor-pointer font-cabin">
                                    Recap Presensi {{ $siswaKelas->first()->kelas->name_kelas }}
                                </summary>
                                <p class="text-xs text-red-500 mt-8">*catatan! kehadiran diambil dari pertemuan setiap mapel! jadi jika murid tidak hadir karena sakit dalam satu hari dan  murid terdapat 4 mapel dalam hari tersebut maka murid akan dinyatakan izin sebanyak 4x  </p>
                                <div class="overflow-x-auto w-full  text-left">
                                    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md mt-6">
                                        <thead>
                                            <tr class="bg-gray-300 text-gray-950 border-[1.5px] border-gray-400  text-sm leading-normal">
                                                <th class="py-3 px-6 text-center border-[1.5px] border-gray-400 whitespace-nowrap">No</th>
                                                <th class="py-3 px-24 text-center border-[1.5px] border-gray-400 whitespace-nowrap">NIS / NISN</th>
                                                <th class="py-3 px-36 text-center border-[1.5px] border-gray-400 ">Nama</th>
                                                <th class="py-3 px-6 text-center border-[1.5px] border-gray-400 whitespace-nowrap">Total Tanpa Keterangan</th>
                                                <th class="py-3 px-6 text-center border-[1.5px] border-gray-400 whitespace-nowrap">Total Izin</th>
                                                <th class="py-3 px-6 text-center border-[1.5px] border-gray-400 whitespace-nowrap">Total Sakit</th>
                                                <th class="py-3 px-6 text-center border-[1.5px] border-gray-400 whitespace-nowrap">Total Persentase Kehadiran</th>
                                                @foreach ($jadwal->where('kelas_id', $kelasNama) as $j)
                                                    <th class="py-3 px-6 text-center border-[1.5px] border-gray-400 whitespace-nowrap"> {{ $j->guru_mapel->mapel->name_mapel }} (hadir / pertemuan)  </th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-700 text-sm">
                                            @foreach ($siswaKelas as $index => $siswa)
                                                @php
                                                    $totalPertemuan = $siswa->pertemuan->count();
                                                    $hadir = $siswa->pertemuan->where('pivot.kehadiran', 'hadir')->count();
                                                    $tanpaKeterangan = $siswa->pertemuan->where('pivot.kehadiran', 'tanpa_keterangan')->count();
                                                    $izin = $siswa->pertemuan->where('pivot.kehadiran', 'izin')->count();
                                                    $sakit = $siswa->pertemuan->where('pivot.kehadiran', 'sakit')->count();
                                                    $persentase = $totalPertemuan > 0 ? round(($hadir / $totalPertemuan) * 100) . '%' : 'belum ada presensi';
                                                @endphp
                                                <tr>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{  $loop->iteration }}</td>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{ $siswa->NIS }} / {{ $siswa->NIS }} </td>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{ $siswa->name }}</td>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{ $tanpaKeterangan }}</td>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{ $izin}}</td>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{ $sakit }}</td>
                                                    <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">{{ $persentase }}</td>
                                                    @foreach ($jadwal->where('kelas_id', $kelasNama) as $j)        {{-- jadwal = [8a mtk,8a biologi ] --}}  {{-- j = [8a mtk ] --}}
                                                        @if ($j->pertemuan->count() > 0)                     {{-- j (8a mtk) dicek apakah sudah melakukan pertemuan minimal 1x--}}
                                                            @php
                                                                $total_per_mapel = $siswa->pertemuan->where('jadwal_id' , $j->id)->count() ;
                                                                $tanpa_ket_per_mapel= $siswa->pertemuan->where('jadwal_id' , $j->id)->where('pivot.kehadiran', 'tanpa_keterangan')->count() ;
                                                                $izin_per_mapel =  $siswa->pertemuan->where('jadwal_id' , $j->id)->where('pivot.kehadiran', 'izin')->count() ;
                                                                $sakit_per_mapel= $siswa->pertemuan->where('jadwal_id' , $j->id)->where('pivot.kehadiran', 'sakit')->count() ;
                                                                $hadir_per_mapel = $siswa->pertemuan->where('jadwal_id' , $j->id)->where('pivot.kehadiran', 'hadir')->count() . ' / ' . $total_per_mapel ;
                                                            @endphp
                                                        @else
                                                            @php
                                                                $hadir_per_mapel = 'Belum ada pertemuan' ;
                                                            @endphp
                                                        @endif
                                                        <td class="py-3 px-6 text-center border-[1.5px] border-gray-400">
                                                            {{ $hadir_per_mapel}}
                                                        </td>
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </details>
                        @endforeach
                    </div>
                </details>
                {{-- akhir kelas 9 --}}

            </div>
            {{-- kelas dan nama siswa --}}


        </div>
        {{-- akhir kehadiran siswa --}}

        {{-- cek siswa --}}
        <h1 class="mt-8 text-center text-xl font-acmeRegular font-semibold text-slate-700">Daftar Siswa</h1>
        <div class="flex flex-col lg:flex-row">
            {{-- data siswa --}}
            <div class="lg:mx-4 overflow-x-auto  w-[100%] lg:w-[80%]  text-left mt-10">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg ">
                    <thead>
                        <tr class=" text-gray-700 border border-gray-300 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-center border border-gray-300">No</th>
                            <th class="py-3 px-6 text-center border border-gray-300">NIS</th>
                            <th class="py-3 px-6 text-center border border-gray-300">NISN</th>
                            <th class="py-3 px-6 text-center border border-gray-300">Nama</th>
                            <th class="py-3 px-6 text-center border border-gray-300">Kelas</th>
                            <th class="py-3 px-6 text-center border border-gray-300">Alamat</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-900 text-sm ">
                        @foreach ($muridAll as $m)
                            <tr class="">
                                <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap"> {{ $loop->iteration }} </td>
                                <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap"> {{ $m->NIS }} </td>
                                <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap"> {{ $m->NISN  }}</td>
                                <td class="border border-gray-300 py-4 px-6 text-center whitespace-nowrap"> {{ $m->name  ?? ' - ' }}</td>
                                <td class="border border-gray-300 py-4 px-6 text-center whitespace-nowrap"> {{ $m->kelas->name_kelas  ?? ' - ' }}</td>
                                <td class="border border-gray-300 py-4 px-6 text-center whitespace-nowrap"> {{ $m->alamat  ?? ' - ' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- akhir data siswa --}}


            {{-- search btn --}}
            <div class=" rounded-md lg:w-[20%] lg:mx-2 mt-7 lg:mt-0">
                        <h1 class="text-gray-600  font-cabin font-bold text-base sm:text-xl lg:text-base lg:p-3 text-left lg:text-center w-[100%] ">Cari Siswa</h1>
                        <div class="w-[100%]  lg:m-auto mt-3 sm:mt-5 lg:mt-0">
                            {{-- search bar --}}
                            <form action="" method="get">
                                <div class=" relative flex items-center w-full mt-2  sm:mt-3">
                                    {{-- input search --}}
                                    <input class="w-full bg-transparent placeholder:text-gray-700 text-gray-900 text-xs border-[1.4px] border-gray-500 rounded-lg pl-3 py-2.5 transition duration-300 ease focus:outline-none focus:border-gray-700 hover:border-gray-600 shadow-sm focus:shadow " placeholder="Search Murid"  type="text" id="search" value="{{ request('search') }}" wire:model.live='kataKunci' />

                                    {{-- akhir input search --}}

                                    {{-- btn lup --}}

                                        <button class="absolute top-1 right-1 py-1.5 rounded-3xl ml-2 bg-transparent px-2  text-center text-slate-700 transition-all  disabled:pointer-events-none" >
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class=" w-4 h-4">
                                                <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    {{-- akhir btn lup  --}}
                                </div>
                            </form>
                            {{-- akhir search bar --}}
                        </div>
                        <div class="mt-4 sm:mt-5 lg:mt-4  text-left lg:px-3 flex gap-2 flex-wrap">
                            <p class="text-xs font-bold font-lexend text-gray-700">#SMP16</p>
                            <p class="text-xs font-bold font-lexend text-gray-700">#Cirebon</p>
                            <p class="text-xs font-bold font-lexend text-gray-700">#JabarJuara</p>
                            <p class="text-xs font-bold font-lexend text-gray-700">#CirebonKota</p>
                            <p class="text-xs font-bold font-lexend text-gray-700">#SMPN16KotaCrb</p>
                        </div>
            </div>
            {{-- akhir search btn --}}
        </div>
        <div class="mt-14 w-full text-center">
            {{ $muridAll->links(data : ['scrollTo' => '#Presensi' ]) }}
        </div>
        {{-- akhir cek siswa --}}

    </div>
</div>
