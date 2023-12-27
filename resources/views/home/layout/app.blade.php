<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}" />
    @auth
        <title>File Xchange | {{ Auth::user()->username }}</title>
    @else
        <title>File Xchange</title>
    @endauth
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/login-signup-modal.css') }}"> --}}
    <link rel="icon" href="{{ asset('images/filex-icon.png') }}">
    @yield('styles')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="loading-container">
        <img src="{{ asset('images/filex-icon.png') }}" class="icon">
    </div>

    @include('components.navbar')
    <div class="main-container">
        @yield('main-container')
        @include('alert')
        <section class="main-section">
            @yield('content')
            <div class="contents-container">
                @yield('contents-container')
                
            </div>
        </section>
    </div>
    @include('components.footer')
    <script src="{{ asset('js/index.js') }}"></script>
    @yield('scripts')
</body>

</html>
