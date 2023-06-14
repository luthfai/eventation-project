<x-guest-layout>
    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('super.admin.store') }}">
            @csrf
            <div class="grid gap-6">
                <!-- Name -->
                <div class="space-y-2">
                    <x-form.label for="name" :value="__('Name')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="name" class="block w-full" type="text" name="name" :value="old('name', $admin->name)" required autofocus placeholder="{{ __('Name') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>
                <!-- Username -->
                <div class="space-y-2">
                    <x-form.label for="username" :value="__('Username')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="name" class="block w-full" type="text" name="username" :value="old('username', $admin->username)" required autofocus placeholder="{{ __('Username') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>
                <!-- Email Address -->
                <div class="space-y-2">
                    <x-form.label for="email" :value="__('Email')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="email" class="block w-full" type="email" name="email" :value="old('email', $admin->email)" required placeholder="{{ __('Email') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>

                <!-- Role dropdown -->
                <div class="space-y-2">
                    <x-form.label for="role" :value="__('Role')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user-group aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.select withicon id="role" class="block w-full" name="role" :value="old('role', $admin->role)" required autofocus placeholder="{{ __('Role') }}">
                            <!-- <option value="super">Super</option> -->
                            <option value="admin">Admin</option>
                        </x-form.select>
                    </x-form.input-with-icon-wrapper>
                </div>
                <!-- Password -->
                <div class="space-y-2">
                    <x-form.label for="password" :value="__('Password')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="password" class="block w-full" type="password" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>

                <!-- Confirm Password -->
                <!-- <div class="space-y-2">
                    <x-form.label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="password_confirmation" class="block w-full" type="password" name="password_confirmation" required placeholder="{{ __('Confirm Password') }}" />
                    </x-form.input-with-icon-wrapper>

                </div> -->
                <div>
                    <x-button class="justify-center w-full gap-2">
                        <x-heroicon-o-user-add class="w-6 h-6" aria-hidden="true" />

                        <span>{{ __('Create') }}</span>
                    </x-button>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
