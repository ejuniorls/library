<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'firstName', 'lastName', 'popularName', 'birth', 'death', 'gender', 'photo', 'biography',
    ];
}
