{{-- views/welcome.blade.php --}}

@extends('layouts.app')

@section('title', __('header.welcome'))

@section('slot')
    <div class="my-10 flex flex-col gap-y-20 md:gap-y-1 md:flex-row justify-center">
        <img class="rounded-lg max-w-80 md:max-w-lg" src="{{ asset('images/welcome.png') }}" alt="image description">

        <div class="content-center">
            <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-600 from-sky-400">
                    {{ __('Interactions intelligentes') }}
                </span>
                , {{ __('header.infinite growth') }}.
            </h1>
            <p class="text-lg font-normal text-gray-600 lg:text-xl dark:text-gray-200">
                {{ __('header.welcome-text') }}
            </p>
        </div>

    </div>

@endsection
