<div class="grid grid-cols-12 gap-6 mt-14">
    <div class="col-span-12 sm:col-span-12 bg-gray-50 shadowMe px-4 border-t-2 border-t-blue-500 pb-10 h-max">

        {{-- header --}}
        <h1 class="mt-8 text-center text-xl font-acmeRegular font-semibold text-slate-700">Daftar Guru</h1>
        {{-- akhir header --}}

        {{-- input search --}}
        <form action="" method="get">
            <div class=" relative flex items-center w-full mt-6  sm:mt-14">
                {{-- input search --}}
                <input class="w-full bg-transparent placeholder:text-gray-700 text-gray-900 text-xs border-[1.4px] border-gray-500 rounded-lg pl-3 py-2.5 transition duration-300 ease focus:outline-none focus:border-gray-700 hover:border-gray-600 shadow-sm focus:shadow " placeholder="Search Guru" name="search" type="text" id="search" value="{{ request('search') }}" />

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
        {{-- akhir input search --}}

        {{-- data guru --}}
        <div class="overflow-x-auto w-[100%] text-left mt-7">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg ">
                <thead>
                    <tr class=" text-gray-700 border border-gray-300 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-center border border-gray-300">No</th>
                        <th class="py-3 px-6 text-center border border-gray-300">NIP/NUTPK</th>
                        <th class="py-3 px-6 text-center border border-gray-300">Nama</th>
                        <th class="py-3 px-6 text-center border border-gray-300">Alamat</th>
                        <th class="py-3 px-6 text-center border border-gray-300">Phone</th>
                        <th class="py-3 px-6 text-center border border-gray-300">Email</th>
                        <th class="py-3 px-6 text-center border border-gray-300">ACTION</th>
                    </tr>
                </thead>
                <tbody class="text-gray-900 text-sm ">
                    @foreach ($guru as $g)
                        <tr class="">
                            <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap"> {{ $loop->iteration }} </td>
                            <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap"> {{ $g->NIP }} </td>
                            <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap"> {{ $g->name }}</td>
                            <td class="border border-gray-300 py-4 px-6 text-center whitespace-nowrap"> {{ $g->alamat ?? ' - ' }}</td>
                            <td class="border border-gray-300 py-4 px-6 text-center whitespace-nowrap"> {{ $g->phone ?? ' - ' }}</td>
                            <td class="border border-gray-300 py-4 px-6 text-center whitespace-nowrap"> {{ $g->email ?? ' - ' }}</td>
                            <td class="border border-gray-300 py-4 px-6 text-center whitespace-nowrap">
                                <a href="/admin/guru/{{ $g->id }}/edit" class="underline">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- akhir data guru --}}
    </div>
</div>
