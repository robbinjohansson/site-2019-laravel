<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Spatie\Sheets\Sheets;
use Illuminate\Http\Request;

class PostController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Sheets $sheets)
    {
        return view('pages.posts.index', [
            'posts' => $sheets->collection('posts')->all()->sortByDesc('date')->take(3)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('pages.posts.show', ['post' => $post]);
    }
}
