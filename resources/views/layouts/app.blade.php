<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white antialiased">
<head>
    @if(app()->environment() === 'production')
        <!-- Google Analytics -->
        <script>
        window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
        ga('set', 'anonymizeIp', true);
        ga('create', 'UA-134187327-1', 'auto');
        ga('send', 'pageview');
        </script>
        <script async src='https://www.google-analytics.com/analytics.js'></script>
        <!-- End Google Analytics -->
    @endif
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
    <title>{{ Route::currentRouteName() === 'posts.show' ? $post->title : $title }} – {{ config('app.name') }}</title>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@robbinworks">
    <meta name="twitter:title" content="{{ Route::currentRouteName() === 'posts.show' ? $post->title : $title }} – {{ config('app.name') }}">
    <meta name="twitter:description" content="{{ (Route::currentRouteName() === 'posts.show' && $post->description) ? $post->description : 'My name is Robbin, I enjoy building great web apps.' }}">
    <meta name="twitter:image" content="{{ (Route::currentRouteName() === 'posts.show' && $post->featured_image) ? url($post->featured_image) : url('/images/about1200x630.jpg') }}">
    <meta name="twitter:creator" content="@robbinworks">
    <meta property="og:url" content="{{ url()->full() }}" />
    <meta property="og:type" content="{{ Route::currentRouteName() === 'posts.show' ? 'article' : 'website' }}" />
    <meta property="og:title" content="{{ Route::currentRouteName() === 'posts.show' ? $post->title : $title }} – {{ config('app.name') }}" />
    <meta property="og:description" content="{{ (Route::currentRouteName() === 'posts.show' && $post->description) ? $post->description : 'My name is Robbin, I enjoy building great web apps.' }}" />
    <meta property="og:image" content="{{ (Route::currentRouteName() === 'posts.show' && $post->featured_image) ? url($post->featured_image) : url('/images/about1200x630.jpg') }}" />
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans font-normal text-lg text-gray-700 tracking-wider leading-relaxed">
    <div id="app">
        @include('partials.navbar')
        @yield('content')
        @include('partials.footer')
    </div>
</body>
</html>
