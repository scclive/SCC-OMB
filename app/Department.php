<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Department extends Model //implements Searchable
{
    public function Dep_Belong_City()
    {
    	return $this->belongsTo('App\City');
    }
    protected $primaryKey = 'Dep_id';
    protected $fillable=[
        'Dep_Name',
        'Dep_Tags',
        'Dep_fees',
        'Dep_PrevAggr',
        'Dep_AggrMatric',
        'Dep_AggrHssc',
        'Dep_AggrNts',
        'Dep_AddmDeadline',
        'Dep_TestName',
        'City_id'
    ]; 
}
