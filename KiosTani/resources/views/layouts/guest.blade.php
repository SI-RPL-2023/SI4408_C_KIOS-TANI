<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Kios Tani</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700;800&display=swap');
</style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
    @include('layouts.navigation')
        <div class="flex sm:justify-between h-fit items-center pt-6 sm:pt-0 bg-gray-100" style="height: 90vh;">
            <div class="w-1/2 h-screen" style="width:50vw;background-image: url('assets/login.png'); background-size: 100%; background-position: center; background-size: cover; background-repeat: no-repeat; height: 90vh;">
        </div>
                    
            <div class="w-1/2 px-6 bg-[#fffbef] grid place-items-center shadow-md overflow-hidden sm:rounded-lg" style="height: 90vh;">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
