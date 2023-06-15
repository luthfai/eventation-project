<x-guest-layout>
    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('user.guests.storeCSV', $event->slug) }}" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-6">
                <!-- Name -->
                <div class="space-y-2">
                    <x-form.label for="guest_list" :value="__('Guest List')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-clipboard-list aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        {{-- add input for styling, being background for input file --}}
                        <x-form.input withicon id="guest_list" class="block w-full z-99" type="file"
                            name="guest_list" :value="old('guest_list', $event->guest_list)" autofocus placeholder="{{ __('Guest List') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>

                <div>
                    <x-button class="justify-center w-full gap-2">
                        <x-heroicon-o-user-add class="w-6 h-6" aria-hidden="true" />

                        <span>{{ __('Add') }}</span>
                    </x-button>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
