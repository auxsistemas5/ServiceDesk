<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/ed8911e2fa.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        @yield('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        @yield('js')
        <script rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js">
        <script rel="stylesheet" href="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js">
        <script rel="stylesheet" href="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js">
    </body>
</html>
