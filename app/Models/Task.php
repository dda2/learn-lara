<?php

namespace Mitschool\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Task extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'tasks';

    protected $fillable = [
        'task_title',
        'task_detail',
    ];

}
