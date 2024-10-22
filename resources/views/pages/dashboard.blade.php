{{-- views/welcome.blade.php --}}

@extends('layouts.app')

@section('title', __('auth.dashboard'))

@section('slot')
    <div class="flex flex-col md:gap-1 md:flex-row justify-center">
        @livewire('chat.conversation')
        @livewire('chat.message')
    </div>
@endsection
