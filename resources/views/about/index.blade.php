@extends('layouts.app')

@section('content')
<div class="container">
    <div class="md:flex md:flex-wrap -mx-4 md:justify-center">
        <div class="w-full md:w-3/4 lg:w-1/2 px-4">
            <h1 class="mb-3">About</h1>
            <div class="markdown">
                <p>I'm a web developer from Sweden who enjoys developing great web applications, explore new technologies, contribute to open source projects and to spend time with my family.</p>
                <p>Occasionally I will post neat little tips and tricks related to web development, mostly as a way to keep notes for my future self. Hopefully these notes can be of value to other fellow devs as well.</p>
                <img src="/images/about.jpg" alt="about">
                <p>☝🏻Photo taken by <a href="http://github.com/johanlinander" target="_BLANK" rel="noopener">@johanlinander</a>. It's a few years old but it was the best I could find, it was either that or a random image of a cat.</p>
                <p>Full source code of this website is open source and available over at <a href="https://github.com/robbinworks/site" target="_BLANK" rel="noopener">GitHub</a>.</p>
            </div>
            <h2 class="mt-10 mb-8 pt-10 border-t">Recent projects</h2>
            <div class="mb-10">
                <h3><a href="https://github.com/robbinworks/v-siema" target="_BLANK" rel="noopener">v-siema</a></h3>
                <div class="mb-2">
                    <div class="text-xs font-bold text-gray-500">
                        #vue #vue-component #carousel
                    </div>
                </div>
                <div class="text-sm mb-1">
                    <p>Vue wrapper for Siema carousel.</p>
                </div>
                <a href="https://github.com/robbinworks/v-siema" target="_BLANK" rel="noopener">View on GitHub &rarr;</a>
            </div>
            <div class="mb-10">
                <h3><a href="https://github.com/robbinworks/vuebbble" target="_BLANK" rel="noopener">vuebbble</a></h3>
                <div class="mb-2">
                    <div class="text-xs font-bold text-gray-500">
                        #vue #vue-component #dribbble-api
                    </div>
                </div>
                <div class="text-sm mb-1">
                    <p>Vue component to easily display dribbble shots from a user using the v2 API.</p>
                </div>
                <a href="https://github.com/robbinworks/vuebbble" target="_BLANK" rel="noopener">View on GitHub &rarr;</a>
            </div>
            <div class="mb-10">
                <h3><a href="https://github.com/robbinworks/vue-scroll-indicator" target="_BLANK" rel="noopener">vue-scroll-indicator</a></h3>
                <div class="mb-2">
                    <div class="text-xs font-bold text-gray-500">
                        #vue #vue-component #js-scroll-indicator
                    </div>
                </div>
                <div class="text-sm mb-1">
                    <p>Scroll indicator component using Vue.js.</p>
                </div>
                <a href="https://github.com/robbinworks/vue-scroll-indicator" target="_BLANK" rel="noopener">View on GitHub &rarr;</a>
            </div>
            <div>
                <h3><a href="https://github.com/robbinworks/haywire-grav" target="_BLANK" rel="noopener">haywire-grav</a></h3>
                <div class="mb-2">
                    <div class="text-xs font-bold text-gray-500">
                        #grav-cms #grav-starter-theme
                    </div>
                </div>
                <div class="text-sm mb-1">
                    <p>Starter theme for Grav CMS using modern tools and frameworks.</p>
                </div>
                <a href="https://github.com/robbinworks/haywire-grav" target="_BLANK" rel="noopener">View on GitHub &rarr;</a>
            </div>
        </div>
    </div>
</div>
@endsection
