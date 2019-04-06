<?php

namespace App\Models;

use Spatie\Sheets\Sheet;

class Post extends Sheet
{
    public function getUrlAttribute(): string
    {
        // return url("/posts/{$this->date->format('Y-m-d')}-{$this->slug}");
        return url("/posts/{$this->slug}");
    }
}
