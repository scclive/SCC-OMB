<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class City extends Model //implements Searchable
{

    public function departments()
    {
    	return $this->hasMany('App\Department');
    }

    public function City_Belong_Uni()
    {
    	return $this->belongsTo('App\University');
    }
    //
    protected $primaryKey = 'City_id';
    protected $fillable =   [
        'Campus_City',
        'City_Name',
        'Campus_Phone',
        'Campus_Email',
        'Campus_Url',
        'Uni_id'

    ];
    
}
