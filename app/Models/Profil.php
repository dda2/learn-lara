<?php

namespace Mitschool\Models;

use Illuminate\Database\Eloquent\Model as ELoquent;


class Profil extends Eloquent
{
    protected $table = 'profil';


    protected $fillable = ['filename'];
}