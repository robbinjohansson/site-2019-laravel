@extends('layouts.app')

@section('content')
<div class="container">
    <div class="md:flex md:flex-wrap -mx-4 md:justify-center">
        <div class="w-full md:w-1/2 px-4">
            @foreach ($posts as $post)
                <div class="{{ !$loop->last ? 'mb-8' : '' }}">
                    <h3><a href="{{ $post->url }}">{{ $post->title }}</a></h3>
                    <div class="mb-2">
                        <div class="text-xs font-bold text-gray-500">
                            {{ $post->date->format('d F, Y') }}.
                        </div>
                    </div>
                    <div class="text-sm mb-1">
                        {{ $post->intro }}
                    </div>
                    <a href="{{ $post->url }}">Read more &rarr;</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
