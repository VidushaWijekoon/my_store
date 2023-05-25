<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta name="description" content="@yield('meta_description')">
    <meta name="author" content="Vidusha Wijekoon">

    @include('libraries.frontend.styles')
    @livewireStyles
</head>

<body>

    @include('components.frontend.navbar')

    <main id="main" class="main">
        @yield('content')
    </main>

    @yield('scripts')
    @include('components.frontend.footer')
    @include('libraries.frontend.scripts')
    @livewireScripts
    @stack('script')
</body>

</html>