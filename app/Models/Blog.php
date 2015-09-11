<?php

namespace Mitschool\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class Blog extends Builder
{
    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'content',
        'author',
    ];

    public function getBlog()
    {
        $users = DB::table('users')->get();

        return $users;
    }
}