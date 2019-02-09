<!DOCTYPE html>
<html lang="en" class="bg-white antialiased">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>robbin.works</title>
        <meta name="description" content="I'm Robbin, I enjoy building great web apps.">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="font-sans font-normal leading-normal tracking-normal text-base md:text-lg text-gray-darker flex flex-wrap">
        <div class="w-full min-h-screen flex flex-col">
            <div class="flex-1">
                @yield('body')
            </div>
            @include('_partials.footer')
        </div>
    </body>
</html>
