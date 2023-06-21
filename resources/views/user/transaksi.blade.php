<x-layouts.user>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }} <span class="text-sm text-gray-500"></span>
            </h2>
        </div>
    </x-slot>


    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Transaction List <span class="text-sm text-gray-500"></span>
            </h2>
        </div>
        {{-- list all of tamu with crud --}}
        <table class="table-auto w-full mt-4 overflow-auto bg-white border rounded-md dark:bg-dark-eval-1">
            <thead class="bg-gray-50 dark:bg-dark-eval-2">
                <tr class="text-xs font-medium tracking-wider text-left text-gray-500 uppercase border-b dark:border-dark-eval-2">
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">Item</th>
                    <th class="px-4 py-3">Price</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">VA Number</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 dark:divide-dark-eval-2">
                @foreach ($transaksi as $item)
                    <tr class="text-sm text-gray-500 dark:text-dark-eval-3">
                        {{-- itemid is uuid reformat it to string --}}
                        <td class="px-4 py-3">{{ $item->id }}</td>
                        <td class="px-4 py-3">{{ DB::table('undangans')->where('id', $item->id_undangan)->value('name') }}</td>
                        <td class="px-4 py-3">Rp.{{ number_format($item->total_harga, 0, ',', '.') }} </td>
                        <td class="px-4 py-3">{{ $item->status }}</td>
                        <td class="px-4 py-3">{{ $item->no_va }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</x-layouts.user>
