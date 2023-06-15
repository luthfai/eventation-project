<x-guest-layout>
    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('user.guests.update', $guest->id) }}">
            @csrf
            @method('PATCH')
            <div class="grid gap-6">
                <!-- Name -->
                <div class="space-y-2">
                    <x-form.label
                        for="name"
                        :value="__('Name')"
                    />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input
                            withicon
                            id="name"
                            class="block w-full"
                            type="text"
                            name="name"
                            :value="old('name', $guest->name)"
                            required
                            autofocus
                            placeholder="{{ __('Name') }}"
                        />
                    </x-form.input-with-icon-wrapper>
                </div>

                <!-- Email Address -->
                <div class="space-y-2">
                    <x-form.label
                        for="email"
                        :value="__('Email')"
                    />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input
                            withicon
                            id="email"
                            class="block w-full"
                            type="email"
                            name="email"
                            :value="old('email', $guest->email)"
                            required
                            placeholder="{{ __('Email') }}"
                        />
                    </x-form.input-with-icon-wrapper>
                </div>

                <!-- Phone Number -->
                <div class="space-y-2">
                    <x-form.label
                        for="phone_number"
                        :value="__('Phone Number')"
                    />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-phone aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input
                            withicon
                            id="phone"
                            class="block w-full"
                            type="text"
                            name="phone"
                            :value="old('phone', $guest->phone)"
                            required
                            placeholder="{{ __('Phone Number') }}"
                        />
                    </x-form.input-with-icon-wrapper>
                </div>

                <!-- Status dropdown -->
                <div class="space-y-2">
                    <x-form.label
                        for="status"
                        :value="__('Status')"
                    />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-status-online aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.select
                            withicon
                            id="status"
                            class="block w-full"
                            name="status"
                            :value="old('status', $guest->status)"
                            required
                            autofocus
                            placeholder="{{ __('Status') }}"
                        >
                            <option value="hadir">Hadir</option>
                            <option value="tidak hadir">Tidak Hadir</option>
                            <option value="belum dikonfirmasi">Belum Dikonfirmasi</option>
                        </x-form.select>
                    </x-form.input-with-icon-wrapper>
                </div>
                <div>
                    <x-button class="justify-center w-full gap-2">
                        <x-heroicon-o-user-add class="w-6 h-6" aria-hidden="true" />

                        <span>{{ __('Update') }}</span>
                    </x-button>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
