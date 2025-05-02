<div class="grid grid-cols-12 gap-6 mt-14">
    <div class="col-span-12 sm:col-span-8 bg-gray-50 shadowMe px-4 border-t-2 border-t-blue-500 pb-10 h-max">
        <h1 class="mt-8 mb-10 text-center text-xl font-acmeRegular font-semibold text-slate-700">Daftar Guru</h1>
        <div class="overflow-x-auto w-[100%] text-left mt-10">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg ">
                <thead>
                    <tr class=" text-gray-700 border border-gray-300 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-center border border-gray-300">No</th>
                        <th class="py-3 px-6 text-center border border-gray-300">NIP/NUTPK</th>
                        <th class="py-3 px-6 text-center border border-gray-300">Nama</th>
                        <th class="py-3 px-6 text-center border border-gray-300">Alamat</th>
                    </tr>
                </thead>
                <tbody class="text-gray-900 text-sm ">
                    @foreach ($guru as $g)
                        <tr class="">
                            <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap"> {{ $loop->iteration }} </td>
                            <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap"> {{ $g->NIP }} </td>
                            <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap"> {{ $g->name }}</td>
                            <td class="border border-gray-300 py-4 px-6 text-center whitespace-nowrap"> {{ $g->alamat ?? ' - ' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-span-4  h-max hidden sm:block border-t-2 border-t-red-500 bg-gray-50 px-4 pb-10">
        <h1 class="mt-8 mb-10 text-center text-xl font-acmeRegular font-semibold text-slate-700">Daftar Mata Pelajaran</h1>
        <div class="overflow-x-auto w-[100%] text-left mt-10">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg ">
                <thead>
                    <tr class=" text-gray-700 border border-gray-300 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-center border border-gray-300">No</th>
                        <th class="py-3 px-6 text-center border border-gray-300">Nama Mapel</th>
                    </tr>
                </thead>
                <tbody class="text-gray-900 text-sm ">
                    @foreach ($mapel as $m)
                        <tr class="">
                            <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap"> {{ $loop->iteration }} </td>
                            <td class="border border-gray-300 py-3 px-6 text-center whitespace-nowrap"> {{ $m->name_mapel }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
