@extends('layouts.app')

@section('content')
<div class="container">
    <div class="md:flex md:flex-wrap -mx-4 md:justify-center">
        <div class="w-full md:w-3/4 lg:w-1/2 px-4">
            @foreach ($posts as $post)
                <div class="{{ !$loop->last ? 'mb-10' : '' }}">
                    <h3><a href="{{ $post->url }}">{{ $post->title }}</a></h3>
                    <div class="mb-2">
                        <div class="text-xs font-bold text-gray-500">
                            {{ dateFormat($post->date) }}.
                        </div>
                    </div>
                    <div class="text-sm mb-1">
                        {{ $post->description }}
                    </div>
                    <a href="{{ $post->url }}">Read more &rarr;</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
