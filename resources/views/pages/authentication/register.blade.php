{{-- views/welcome.blade.php --}}

@extends('layouts.app')

@section('title', __('header.register'))

@section('slot')
    @livewire('authentication.register')
@endsection
