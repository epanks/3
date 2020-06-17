<div class="w-2/3 mx-auto">
    <div>
        <div class="absolute inset-y-0 py-6 px-10 right-0 md:w-4/12">
            <input wire:model.debounce.500ms="search" type="text"
                class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
                placeholder="Search...">

            <div class="absolute mt-3 top-0">
                <svg class="fill-current w-4 text-gray-500 mt-5 ml-2" viewBox="0 0 24 24">
                    <path class="heroicon-ui"
                        d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z" />
                </svg>
            </div>
        </div>
    </div>

    <div class="py-6">
        <table class="table-fixed">
            <thead>
                <tr>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Nama Paket</th>
                    <th class="px-4 py-2">Pagu</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datapaket as $row)
                <tr>
                    <td class="border px-4 py-2">{{$row->id}}</td>
                    <td class="border px-4 py-2">{{$row->nmpaket}}</td>
                    <td class="border px-4 py-2 text-right">{{number_format($row->pagurmp)}}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <td></td>
                <td></td>
                <td class="border px-4 py-2 text-right">{{ number_format($datapaket->sum('pagurmp')) }}</td>
            </tfoot>
        </table>
        <div>
            {{ $datapaket->links('paket-pagination') }}
        </div>
    </div>
    </>

    {{-- <style>
    li {
        display: inline;
    }
</style> --}}