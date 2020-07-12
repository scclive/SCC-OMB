<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Suggestion extends Model
{
    //
    protected $table = 'suggestions';
    protected $primaryKey = 'sugid';

    protected $fillable=[
        'uid',
        'sugcom',
        'sugcomtext'
    ];
}
