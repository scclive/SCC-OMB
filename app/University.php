<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class University extends Model //implements Searchable
{

    //defining that uni hasone to many Rel with cities 
    public function cities()
    {
    	return $this->hasMany('App\City');
    }


   
    //
    protected $primaryKey = 'Uni_id';

    protected $fillable=[
        'Uni_Name',
        'Uni_Phone',
        'Uni_Email',
        'Uni_Sector',
        'Uni_Main',
        'Uni_Address',
        'Uni_Url',
        'Uni_Rank',
        'Uni_Files'
    ];
}
