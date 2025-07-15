<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kodeage - @yield('title') </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-blue-300 h-auto lg:h-screen w-full flex items-center justify-center font-monda text-white-100">
    <main class="relative flex w-full lg:w-[95%] lg:h-[95%]">
        {{-- Menu Large Screen --}}
        @include('partials.menu-large-screen')
        
        {{-- Menu Mobile Screen --}}
        @include('partials.menu-mobile-screen')

        @yield('content')

        <img src="{{ asset('images/eclipse-1.svg') }}" class="absolute w-[97%] lg:w-auto left-1 lg:left-[10%] -top-[3%] z-0"
            alt="eclipse 1">
    </main>
</body>

</html>