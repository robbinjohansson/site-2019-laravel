@extends('layouts.app')

@section('content')
<div class="container">
    <div class="md:flex md:flex-wrap -mx-4 md:justify-center">
        <div class="w-full md:w-1/2 px-4">
            @foreach ($posts as $post)
                <div class="{{ !$loop->last ? 'mb-12' : '' }}">
                    <h1><a href="{{ $post->url }}">{{ $post->title }}</a></h1>
                    <div class="mb-4">
                        <div class="text-xs font-bold text-gray-500">
                            {{ $post->date->format('d F, Y') }}.
                        </div>
                    </div>
                    <div class="markdown mb-1">
                        {{ $post->intro }}
                    </div>
                    <a href="{{ $post->url }}" class="text-xs text-gray-600 hover:text-black font-normal">Read more &rarr;</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
