@extends('home.layout.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
@endsection
@section('main-container')
    <div class="error-alert-container alert-body" style="display: none">
        <i class="fa-duotone fa-triangle-exclamation main-icon"></i>
        <p class="alert">Please login to access this feature</p>
        <i class="fa-regular fa-xmark close-icon"></i>
    </div>
    @auth
    @else
        <div class="query">
            <div class="btn">
                <i class="fa-solid fa-message-question"></i>
            </div>
            <ul>
                <li><a href="{{ route('how.to.use') }}">How to use</a></li>
                <li><a href="{{ route('about') }}">About us</a></li>
            </ul>
        </div>
    @endauth
@endsection

@section('contents-container')
    <div class="profile-preview">

        <div class="profile-card">

            <i class="fa-sharp fa-regular fa-xmark" id="close-profile"></i>

            <div class="pfp-container">
                <img src="{{ asset('') }}" alt="" class="pfp">
            </div>

            <h4 class="username"></h4>

            <p class="about">
                In the quiet forest, the old owl watched as the world went by, taking comfort in the timeless
                beauty.
            </p>

            <h3 class="name"></h3>
            <h3 class="enroll">Enrollment id: 2203460000000</h3>

        </div>

    </div>
    {{-- @section('cards')
    <x-card :files="$files" />
@endsection --}}
<div class="cards-container">
    {{-- @yield('cards') --}}
    <x-card :files="$files" />
</div>
    {{ $files->links() }}
@endsection
