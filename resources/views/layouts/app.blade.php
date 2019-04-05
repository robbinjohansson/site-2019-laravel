<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#f7fafc">
    <meta name="msapplication-TileColor" content="#f7fafc">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ config('app.name', 'Laravel') }}" />
    <meta property="og:description" content="I'm Robbin, I enjoy building great web apps." />
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans font-normal text-lg text-gray-700 tracking-wide leading-relaxed flex flex-wrap">
    <div id="app" class="w-full min-h-screen flex flex-col">
        <div class="flex-1">
            @yield('content')
        </div>
        @include('partials.footer')
    </div>
</body>
</html>
