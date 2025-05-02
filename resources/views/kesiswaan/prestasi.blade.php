<div class=" px-5 sm:px-14 lg:px-16 mt-14 sm:mt-28 lg:mt-28  mx-auto lg:mx-0 mb-10 lg:mb-14"  id="prestasi">
    <div class="text-center">
        <h1 class="font-fira-sans text-center text-blue-950   font-semibold mb-4 sm:mb-3 text-xl sm:text-3xl md:text-4xl lg:text-4xl font-jersey">Prestasi SMP Negeri 16 Kota Cirebon</h1>
    </div>

    {{-- Daftar prestasi --}}
    <div class="pt-0 sm:pt-10 lg:pt-8 text-center flex flex-col lg:flex-row">

        {{-- tabel prestasi --}}
        <div class="overflow-x-auto w-[100%] lg:w-[80%] lg:mx-2 text-left">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead>
                    <tr class="bg-gray-300 text-gray-950 border-[1.5px] border-gray-400 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left border-[1.5px] border-gray-400">No</th>
                        <th class="py-3 px-6 text-left border-[1.5px] border-gray-400">Prestasi</th>
                        <th class="py-3 px-6 text-center border-[1.5px] border-gray-400">Tanggal</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm ">
                    <tr class=" ">
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-left" >1.</td>
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-left" >Juara I GULAT POPKOTA 2024 (Putra)</td>
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">29 September 2024</td>
                    </tr>
                    <tr class=" ">
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-left" >2.</td>
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-left" >Juara 3 GULAT POPKOTA 2024 (Putri)</td>
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">29 September 2024</td>
                    </tr>
                    <tr class=" ">
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-left" >3.</td>
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-left" >Penghargaan Pj. Walikota Cirebon</td>
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">18 Agustus 2024</td>
                    </tr>
                    <tr class=" ">
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-left" >4.</td>
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-left" >Juara I MSQ Tingkat Provinsi</td>
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">28 November 2024</td>
                    </tr>
                    <tr class=" ">
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-left" >5.</td>
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-left" >Juara Harapan II Musikalisasi Puisi Pesta Literasi Se Kota Cirebon</td>
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">2 November 2024</td>
                    </tr>
                    <tr class=" ">
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-left" >6.</td>
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-left" >Juara 1 Pidato Bahasa indonesia Tingkat Kota</td>
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">30 Juli 2024</td>
                    </tr>
                    <tr class=" ">
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-left" >7.</td>
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-left" >Juara 3 Musabaqoh hifdzil Qur'an Tingkat Kota</td>
                        <td class="border-[1.5px] border-gray-400 py-3 px-6 text-center">30 Juli 2024</td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-7">
                <a href="#" class="text-gray-600 text-sm hover:text-blue-500">Selanjutnya &raquo;</a>
            </div>
        </div>
        {{-- akhir tabel prestasi --}}

        {{-- search --}}
        <div class=" rounded-md lg:w-[20%] lg:mx-2 mt-10 lg:mt-0">
            <h1 class="text-gray-600  font-cabin font-bold text-base sm:text-xl lg:text-base lg:p-3 text-left lg:text-center w-[100%] ">Cari Siswa Berprestasi</h1>
            <div class="w-[100%]  lg:m-auto mt-3 sm:mt-5 lg:mt-0">
                {{-- search bar --}}
                <div class=" relative flex items-center w-full lg:px-2">
                    {{-- input search --}}
                        <input class="w-full bg-transparent placeholder:text-gray-500 text-gray-600 text-xs sm:text-base lg:text-xs border-[1.4px] border-gray-400 rounded-lg pr-14 pl-5 sm:pl-7 lg:pl-3 py-2.5 sm:py-3 lg:py-2 transition duration-300 ease focus:outline-none focus:border-gray-600 hover:border-gray-500 shadow-sm focus:shadow " placeholder="Search Siswa" type="text"  />

                    {{-- akhir input search --}}

                    {{-- btn lup --}}
                    <button class="absolute top-1 right-1 py-1.5 sm:py-2 lg:py-1.5 rounded-3xl ml-2 bg-transparent px-3  text-center text-slate-400 transition-all  disabled:pointer-events-none "
                        type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 sm:w-6 sm:h-6 lg:w-4 lg:h-4">
                            <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    {{-- akhir btn lup  --}}
                </div>
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
        {{-- akhir search --}}

    </div>
    {{-- akhir Daftar prestasi--}}
</div>
