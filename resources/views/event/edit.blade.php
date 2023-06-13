@extends('layouts.template')
@section('title', 'Edit Undangan')

@section('content')
    <x-header></x-header>
    <x-form-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            {{-- make 2 collumn --}}
            <div class="grid grid-cols-1 gap-6 mt-4 md:grid-cols-2">
                {{-- $table->id();
                $table->string('title');
                $table->string('name1');
                $table->string('nickname1');
                $table->string('name2');
                $table->string('nickname2');
                $table->string('slug'); // this is the URL-friendly version of the title
                $table->string('description');
                $table->string('location');
                $table->timestamp('event_date');
                $table->string('event_image');
                $table->string('event_image_alt');
                $table->string('event_image_title');
                $table->string('event_image_caption');
                $table->string('event_video');
                $table->string('event_video_alt');
                $table->string('event_video_title');
                $table->string('event_video_caption');
                $table->string('event_audio');
                $table->string('event_audio_alt');
                $table->string('event_audio_title');
                $table->string('event_audio_caption');
                $table->longText('location_url');
                $table->foreignId('user_id')->constrained('users');
                $table->foreignId('undangan_id')->constrained('undangans');
                $table->timestamps(); --}}

                <!-- Title -->
                {{-- makw 2 column width --}}
                <div class="space-y-2 md:col-span-2">
                    <x-form.label for="title" :value="__('Title')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="title" class="block w-full" type="text" name="title"
                            :value="old('title', $event->title)" required autofocus placeholder="{{ __('Title') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>

                <!-- Name1 -->
                <div class="space-y-2">
                    <x-form.label for="name1" :value="__('Name1')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="name1" class="block w-full" type="text" name="name1"
                            :value="old('name1', $event->name1)" required autofocus placeholder="{{ __('Name1') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>
                <!-- Nickname1 -->
                <div class="space-y-2">
                    <x-form.label for="nickname1" :value="__('Nickname1')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="nickname1" class="block w-full" type="text" name="nickname1"
                            :value="old('nickname1', $event->nickname1)" required autofocus placeholder="{{ __('Nickname1') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>
                <!-- Name2 -->
                <div class="space-y-2">
                    <x-form.label for="name2" :value="__('Name2')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="name2" class="block w-full" type="text" name="name2"
                            :value="old('name2', $event->name2)" required autofocus placeholder="{{ __('Name2') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>
                <!-- Nickname2 -->
                <div class="space-y-2">
                    <x-form.label for="nickname2" :value="__('Nickname2')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="nickname2" class="block w-full" type="text" name="nickname2"
                            :value="old('nickname2', $event->nickname2)" required autofocus placeholder="{{ __('Nickname2') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>
                <!-- Location -->
                <div class="space-y-2">
                    <x-form.label for="location" :value="__('Location')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-location-marker aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="location" class="block w-full" type="text" name="location"
                            :value="old('location', $event->location)" required autofocus placeholder="{{ __('Location') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>
                <!-- Event Date -->
                <div class="space-y-2">
                    <x-form.label for="event_date" :value="__('Event Date')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-calendar aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="event_date" class="block w-full" type="date" name="event_date"
                            min="{{ now()->format('Y-m-d') }}" :value="old('start_date', date('Y-m-d', strtotime($event->start_date)))" required autofocus
                            placeholder="{{ __('Event Date') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>
                <!-- Event Start Time -->
                <div class="space-y-2">
                    <x-form.label for="event_time" :value="__('Event Time')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-clock aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        {{-- get time value from start_time --}}
                        <x-form.input withicon id="start_date" class="block w-full" type="time" name="start_date"
                            :value="old('start_date', date('H:i', strtotime($event->start_date)))" required autofocus placeholder="{{ __('Event Start') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>
                <!-- Event End Time -->
                <div class="space-y-2">
                    <x-form.label for="end_date" :value="__('Event End Time')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-clock aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="end_date" class="block w-full" type="time" name="end_date"
                            :value="old('end_date', date('H:i', strtotime($event->end_date)))" required autofocus placeholder="{{ __('Event End') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>
                {{-- gambar 1 --}}
                <div class="space-y-2">
                    <x-form.label for="image1" :value="__('Image 1')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-photograph aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        {{-- add input for styling, being background for input file --}}
                        <x-form.input withicon id="image1" class="block w-full z-99" type="file" name="image1"
                            :value="old('image1', $event->image1)" autofocus placeholder="{{ __('Image 1') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>

                {{-- gambar 2 --}}
                <div class="space-y-2">
                    <x-form.label for="image2" :value="__('Image 2')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-photograph aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        {{-- add input for styling, being background for input file --}}
                        <x-form.input withicon id="image2" class="block w-full z-99" type="file" name="image2"
                            :value="old('image2', $event->image2)" autofocus placeholder="{{ __('Image 2') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>

                {{-- gambar 3 --}}
                <div class="space-y-2">
                    <x-form.label for="image3" :value="__('Image 3')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-photograph aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        {{-- add input for styling, being background for input file --}}
                        <x-form.input withicon id="image3" class="block w-full z-99" type="file" name="image3"
                            :value="old('image3', $event->image3)" autofocus placeholder="{{ __('Image 3') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>

                {{-- gambar 4 --}}
                <div class="space-y-2">
                    <x-form.label for="image4" :value="__('Image 4')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-photograph aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        {{-- add input for styling, being background for input file --}}
                        <x-form.input withicon id="image4" class="block w-full z-99" type="file" name="image4"
                            :value="old('image4', $event->image4)" autofocus placeholder="{{ __('Image 4') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>

                {{-- location url get from google map --}}
                <div class="space-y-2">
                    <x-form.label for="location_url" :value="__('Location URL')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-location-marker aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="location_url" class="block w-full" type="text" name="location_url"
                            :value="old('location_url', $event->location_url)" required autofocus placeholder="{{ __('Location URL') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>

                {{-- guest list csv file --}}
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

            </div>
            <div>
                <x-button class="justify-center w-full gap-2 my-2">
                    <x-heroicon-o-check aria-hidden="true" class="w-5 h-5" />
                    <span>{{ __('Apply') }}</span>
                </x-button>
            </div>

        </form>
        </div>
        </form>
    </x-form-card>
@endsection
