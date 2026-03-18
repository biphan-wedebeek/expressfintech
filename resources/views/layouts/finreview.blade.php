{{-- resources/views/layouts/finreview.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('expressfintech.png') }}">
    <meta name='impact-site-verification' value='e4bf24d0-e930-4ad6-b364-a86751a3d024'>
    <meta name="description" content="@yield('description', 'Expert financial reviews you can trust – Express Fintech')">
    <title>@yield('title', 'Express Fintech – Expert Financial Reviews')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    @stack('scripts')
</body>

</html>