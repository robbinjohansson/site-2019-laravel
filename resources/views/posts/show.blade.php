@extends('layouts.app')

@section('content')
<article class="container">
    <div class="md:flex md:flex-wrap -mx-4 md:justify-center">
        <div class="w-full md:w-3/4 lg:w-1/2 px-4">
            <div class="w-full">
                <h1>{{ $post->title }}</h1>
                <div class="mb-8">
                    <div class="text-xs font-bold text-gray-500">
                        {{ dateFormat($post->date) }}.
                    </div>
                </div>
                <div class="markdown">
                    {{ $post->contents }}
                </div>
            </div>
        </div>
    </div>
</article>
@endsection
