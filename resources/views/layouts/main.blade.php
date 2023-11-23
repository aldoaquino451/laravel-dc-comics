<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- stili --}}
    @vite('resources/js/app.js')

    {{-- titolo --}}
    <title>Laravel Dc Comics</title>
</head>

<body>

    @include('partials.header')
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>

</html>
