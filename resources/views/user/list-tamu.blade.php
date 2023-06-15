<x-layouts.user>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }} <span class="text-sm text-gray-500">({{ Auth::user()->name }})</span>
            </h2>
        </div>
    </x-slot>


    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Guest List <span class="text-sm text-gray-500">({{ $event->title }})</span>
            </h2>
            <x-button href="{{ route('user.guests.create', $event->slug) }}" variant="success" class="justify-center text-center max-w-xs gap-2">
                <span class="w-6 h-6" aria-hidden="true">+</span>
                <span>Create Tamu</span>
            </x-button>
        </div>
        {{-- list all of tamu with crud --}}
        <table class="table-auto w-full mt-4 overflow-auto bg-white border rounded-md dark:bg-dark-eval-1">
            <thead class="bg-gray-50 dark:bg-dark-eval-2">
                <tr class="text-xs font-medium tracking-wider text-left text-gray-500 uppercase border-b dark:border-dark-eval-2">
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Phone</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Invit Link</th>
                    <th class="px-4 py-3 w-1/5">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-dark-eval-2">
                @foreach ($guests as $guest)

                <tr class="text-sm text-gray-500 dark:text-dark-eval-3">
                    <td class="px-4 py-3 text-sm font-medium text-gray-900 dark:text-dark-eval-3">
                        {{ $guest->id }}
                    </td>
                    <td class="px-4 py-3 text-sm font-medium text-gray-900 dark:text-dark-eval-3">
                        {{ $guest->name }}
                    </td>
                    <td class="px-4 py-3 text-sm font-medium text-gray-900 dark:text-dark-eval-3">
                        {{ $guest->email }}
                    </td>
                    <td class="px-4 py-3 text-sm font-medium text-gray-900 dark:text-dark-eval-3">
                        {{ $guest->phone }}
                    </td>
                    <td class="px-4 py-3 text-sm font-medium text-gray-900 dark:text-dark-eval-3">
                        {{ $guest->status }}
                    </td>
                    <td class="px-4 py-3 text-sm font-medium text-gray-900 dark:text-dark-eval-3">
                        <a>/event/{{ $event->slug }}/{{ $guest->token }}</a>
                    </td>
                    <td class="px-4 py-3 flex text-sm font-medium text-gray-900 dark:text-dark-eval-3">
                        <x-button href="{{ route('user.guests.edit', $guest->id) }}" variant="info" class="justify-center text-center max-w-xs gap-2 mx-2">
                            <x-icons.edit class="w-6 h-6" aria-hidden="true" />
                            <span class="w-16 h-6" aria-hidden="true">Edit</span>
                        </x-button>
                        <form action="{{ route('user.guests.destroy', $guest->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-button type="submit" variant="danger" class="justify-center text-center max-w-xs gap-2 mx-2">
                                <x-icons.trash class="w-6 h-6" aria-hidden="true" />
                                <span class="w-16 h-6" aria-hidden="true">Delete</span>
                            </x-button>
                        </form>
                    </td>
                @endforeach
            </tbody>
        </table>
    </div>


</x-layouts.user>
