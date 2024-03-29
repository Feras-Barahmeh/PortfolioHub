<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />

    <link rel="icon" href="{{ asset('guest/images/my-avatar.png') }}">
    @stack('css')

    {{--  Links --}}
    @include('layouts.admin.css-links')
    @livewireStyles

    {{--  Scripts  --}}

</head>

    <body >
        <div class="page d-flex" >
            @include('layouts.admin.sidebar', ['admin' => $admin])
            <div class="content w-full">
                @include('layouts.admin.navigation')
                {{ $slot }}
            </div>
        </div>

        @stack('js')
        <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
        @livewireScripts
    </body>



</html>
