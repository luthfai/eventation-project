<x-guest-layout>
    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('admin.templates.update', $undangan->id) }}">
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
                            :value="old('name', $undangan->name)"
                            required
                            autofocus
                            placeholder="{{ __('Name') }}"
                        />
                    </x-form.input-with-icon-wrapper>
                </div>

                <!-- Slug -->
                <div class="space-y-2">
                    <x-form.label
                        for="slug"
                        :value="__('Slug')"
                    />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input
                            withicon
                            id="slug"
                            class="block w-full"
                            type="text"
                            name="slug"
                            :value="old('slug', $undangan->slug)"
                            required
                            autofocus
                            placeholder="{{ __('Slug') }}"
                        />
                    </x-form.input-with-icon-wrapper>
                </div>

                <!-- Description -->
                <div class="space-y-2">
                    <x-form.label
                        for="description"
                        :value="__('Description')"
                    />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input
                            withicon
                            id="description"
                            class="block w-full"
                            type="text"
                            name="description"
                            :value="old('description', $undangan->description)"
                            required
                            autofocus
                            placeholder="{{ __('Description') }}"
                        />
                    </x-form.input-with-icon-wrapper>
                </div>

                <!-- Price -->
                <div class="space-y-2">
                    <x-form.label
                        for="price"
                        :value="__('Price')"
                    />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input
                            withicon
                            id="price"
                            class="block w-full"
                            type="text"
                            name="price"
                            :value="old('price', $undangan->price)"
                            required
                            autofocus
                            placeholder="{{ __('Price') }}"
                        />
                    </x-form.input-with-icon-wrapper>
                </div>

                <!-- Description -->
                <div class="space-y-2">
                    <x-form.label
                        for="description"
                        :value="__('Description')"
                    />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input
                            withicon
                            id="description"
                            class="block w-full"
                            type="text"
                            name="description"
                            :value="old('description', $undangan->description)"
                            required
                            autofocus
                            placeholder="{{ __('Description') }}"
                        />
                    </x-form.input-with-icon-wrapper>
                </div>

                <!-- Category -->
                <div class="space-y-2">
                    <x-form.label
                        for="category"
                        :value="__('Category')"
                    />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input
                            withicon
                            id="kategori"
                            class="block w-full"
                            type="text"
                            name="kategori"
                            :value="old('kategori', $undangan->kategori)"
                            required
                            autofocus
                            placeholder="{{ __('Category') }}"
                        />
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
