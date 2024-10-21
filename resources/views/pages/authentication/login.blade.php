{{-- views/welcome.blade.php --}}

@extends('layouts.app')

@section('title', __('header.login'))

@section('slot')
    @livewire('authentication.login')
@endsection
