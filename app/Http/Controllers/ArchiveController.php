<?php

namespace App\Http\Controllers;

use Spatie\Sheets\Sheets;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    /**
     * Display the archive.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Sheets $sheets)
    {
        return view('archive.index', [
            'posts' => $sheets->collection('posts')->all()->sortByDesc('date'),
        ]);
    }
}
