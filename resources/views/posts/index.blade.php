@extends('layouts.app')

@section('content')
<div class="container">
    <div class="md:flex md:flex-wrap -mx-4 md:justify-center mt-12 md:mt-20">
        <div class="w-full md:w-1/2 px-4">
            <div class="mb-10">
                <h1 class="text-black font-extrabold text-3xl mb-2 leading-normal">👋🏻 robbin.works</h1>
                <p class="mb-5">I enjoy building great web apps, current go-to tech stack for my projects is <a href="https://github.com/tailwindcss/tailwindcss" target="_blank" rel="noreferrer" class="font-extrabold text-gray-900 underline hover:no-underline">Tailwindcss</a>, <a href="https://github.com/vuejs/vue" target="_blank" rel="noreferrer" class="font-extrabold text-gray-900 underline hover:no-underline">Vuejs</a> and <a href="https://github.com/laravel/laravel" target="_blank" rel="noreferrer" class="font-extrabold text-gray-900 underline hover:no-underline">Laravel</a>. My latest work and open source contributions is available over at <a href="https://github.com/robbinworks" target="_blank" rel="noreferrer" class="font-extrabold text-gray-900 underline hover:no-underline">GitHub</a>.</p>
                <p>That's all. For now.</p>
            </div>
            @foreach ($posts as $post)
                <div class="mb-4">
                    <h2 class="text-black font-extrabold text-xl mb-2 leading-normal">
                        {{ $post->title }}
                    </h2>
                    <div class="text-sm">{{ $post->author }}</div>
                    {{-- <div class="text-sm">{{ $post->date->diffForHumans() }}</div>
                    <div class="text-sm">{{ $post->date->toFormattedDateString() }}</div> --}}
                    <div class="text-sm">{{ $post->date->format('d F, Y') }}</div>
                    <div class="my-3">{{ $post->contents }}</div>
                    <a href="{{ $post->url }}" class="text-black text-sm">Read more</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
