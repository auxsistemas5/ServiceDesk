<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>ADMINISTRACION</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        

        @yield('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/style.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased content" >
        
        <x-jet-banner />
            
            <div class="min-h-screen content">
                @livewire('navigation-menu')
                
                <!-- Page Heading -->
                @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8" >
                        {{ $header }}
                    </div>
                </header>
                @endif
                
                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
            
            @stack('modals')
        

        @livewireScripts

        @yield('js')
        <script src="https://kit.fontawesome.com/ed8911e2fa.js" crossorigin="anonymous"></script>
        <script rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script rel="stylesheet" href="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
        <script rel="stylesheet" href="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"defer></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
    <style>
        body{
            background-color: black;
        }    
    </style>
</html>

