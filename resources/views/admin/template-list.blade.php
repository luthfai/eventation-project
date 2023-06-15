<x-layouts.admin>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Template List') }}
            </h2>
        </div>
        {{-- list all of admin with crud --}}
        <table class="table-auto w-full mt-4 overflow-auto bg-white border rounded-md dark:bg-dark-eval-1">
            <thead class="bg-gray-50 dark:bg-dark-eval-2">
                <tr
                    class="text-xs font-medium tracking-wider text-left text-gray-500 uppercase border-b dark:border-dark-eval-2">
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Price</th>
                    <th class="px-4 py-3">Description</th>
                    <th class="px-4 py-3 w-1/5">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-dark-eval-2">
                @foreach ($undangans as $undangan)
                    <tr class="text-sm text-gray-500 dark:text-dark-eval-3">
                        <td class="px-4 py-3 text-sm font-medium text-gray-900 dark:text-dark-eval-3">
                            {{ $undangan->id }}
                        </td>
                        <td class="px-4 py-3 text-sm font-medium text-gray-900 dark:text-dark-eval-3">
                            {{ $undangan->name }}
                        </td>
                        <td class="px-4 py-3 text-sm font-medium text-gray-900 dark:text-dark-eval-3">
                            {{ $undangan->price }}
                        </td>
                        <td class="px-4 py-3 text-sm font-medium text-gray-900 dark:text-dark-eval-3">
                            {{-- only show 20 characters --}}
                            {{ Str::limit($undangan->description, 100) }}
                        </td>
                        <td class="px-4 py-3 flex text-sm font-medium text-gray-900 dark:text-dark-eval-3">
                            <x-button target="_blank" href="{{ route('admin.templates.edit', $undangan->id) }}" variant="info"
                                class="justify-center text-center max-w-xs gap-2 mx-2">
                                <x-icons.edit class="w-6 h-6" aria-hidden="true" />
                                <span class="w-16 h-6" aria-hidden="true">Edit</span>
                            </x-button>
                            <form action="{{ route('admin.templates.destroy', $undangan->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-button type="submit" variant="danger" class="justify-center max-w-xs gap-2 text-center">
                                    <x-icons.trash class="w-6 h-6" aria-hidden="true" />
                                    <span class="w-16 h-6" aria-hidden="true">Delete</span>
                                </x-button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.admin>
