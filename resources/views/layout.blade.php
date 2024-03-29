<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{url('css/site.css')}}">


</head>

<body class="antialiased bg-white">
    <div class="relative p-4">
        <nav>
            <a href="{{route('home.index')}}">Home</a>
            <a href="{{route('guitars.index')}}">Guiters</a>

            <a href="{{route('home.about')}}">About</a>

            <a href="/{{route('home.contact')}}">Contact</a>
        </nav>
    </div>
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen  bg-center bg-white  selection:bg-red-500 selection:text-white">
        @yield('content')
        @yield('scripts')

    </div>
</body>

</html>
