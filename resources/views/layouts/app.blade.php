<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    @vite('resources/js/app.js')
</head>
<body>
    {{-- header --}}
    @include('includes.header')

    {{-- jumbotron --}}
    @include('includes.jumbo')

    {{-- main --}}
    <main>
        @yield('content')
    </main>

    {{-- navbar enorme --}}
    @include('includes.mainav')

    {{-- footer --}}
    @include('includes.footer')
</body>
</html>