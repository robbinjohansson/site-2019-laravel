@extends('layouts.app')

@section('content')
<div class="container">
    <div class="md:flex md:flex-wrap -mx-4 md:justify-center mt-12 md:mt-20">
        <div class="w-full md:w-1/2 px-4">
            <div>
                <h1 class="text-black font-extrabold text-3xl mb-2 leading-normal">{{ $post->title }}</h1>
                <div class="text-sm">{{ $post->author }}</div>
                <div class="text-sm">{{ $post->date->format('d F, Y') }}</div>
                <div class="my-3">{{ $post->contents }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
