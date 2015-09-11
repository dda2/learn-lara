<?php

namespace Mitschool\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Blog extends Eloquent
{
    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'content',
        'author',
    ];
}