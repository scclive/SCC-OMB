<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personality extends Model
{
    protected $table = 'personality';
    protected $primaryKey = 'pid';

    protected $fillable=[
        'user_id',
        'result',
        'conventional',
        'enterprising',
        'social',
        'artistic',
        'investigative',
        'realistic'
    ];
}
