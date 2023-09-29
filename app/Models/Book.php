<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function comments()
    {
        $this->hasMany(Comment::class);
    }

    public function authors()
    {
        $this->belongsTo(Author::class);
    }

    // TODO: Cast is_explicit to true
}
