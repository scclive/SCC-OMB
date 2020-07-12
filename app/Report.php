<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report';
    protected $primaryKey = 'rid';

    protected $fillable=[
        'uid',
        'rid',
        'Qid',
        'rMessage',
        'rStatus'
    ]; 
}
