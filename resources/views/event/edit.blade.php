@extends('layouts.template')
@section('title', 'Edit Undangan')

@section('content')
    <x-header></x-header>
    <x-form-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="">
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
                            :value="old('name1',$event->name1)" required autofocus placeholder="{{ __('Name1') }}" />
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
                            :value="old('nickname1',$event->nickname1)" required autofocus placeholder="{{ __('Nickname1') }}" />
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
                            :value="old('name2',$event->name2)" required autofocus placeholder="{{ __('Name2') }}" />
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
                            :value="old('nickname2',$event->nickname2)" required autofocus placeholder="{{ __('Nickname2') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>
                <!-- Description -->
                <div class="space-y-2">
                    <x-form.label for="description" :value="__('Description')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.textarea withicon id="description" class="block w-full" type="text" name="description"
                            :value="old('description',$event->description)" required autofocus placeholder="{{ __('Description') }}" />
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
                            :value="old('location',$event->location)" required autofocus placeholder="{{ __('Location') }}" />
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
                            :value="old('date',$event->event_date)" required autofocus placeholder="{{ __('Event Date') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>
                <!-- Event Time -->
                <div class="space-y-2">
                    <x-form.label for="event_time" :value="__('Event Time')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-clock aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-form.input withicon id="event_time" class="block w-full" type="time" name="event_time"
                            :value="old('time',$event->event_time)" required autofocus placeholder="{{ __('Event Time') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>

                <!-- Event Type -->
                <div class="space-y-2">
                    <x-form.label for="event_type" :value="__('Event Type')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-tag aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-form.select withicon id="event_type" class="block w-full" type="text" name="event_type"
                            :value="old('event_type',$event->event_type)" required autofocus placeholder="{{ __('Event Type') }}">
                            <option value="wedding">Wedding</option>
                            <option value="engagement">Engagement</option>
                            <option value="birthday">Birthday</option>
                            <option value="anniversary">Anniversary</option>
                            <option value="other">Other</option>
                        </x-form.select>
                    </x-form.input-with-icon-wrapper>
                </div>

                <!-- Event Status -->
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
