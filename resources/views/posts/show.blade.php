@extends('layouts.app')

@section('content')
<div class="container">
    <div class="md:flex md:flex-wrap -mx-4 md:justify-center mt-12 md:mt-20">
        <div class="w-full md:w-1/2 px-4">
            <div class="w-full">
                <h1>{{ $post->title }}</h1>
                <div class="mb-8">
                    <div class="text-sm font-bold text-gray-500">
                        Published {{ $post->date->format('d F, Y') }}.
                    </div>
                </div>
                <div class="markdown">
                    {{ $post->contents }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
