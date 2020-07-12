<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocr extends Model
{
    protected $table = 'ocr';
    protected $primaryKey = 'OCR_id';

    protected $fillable=[
        'Image_Dir',
        'Image_Text',
        'Image_Traversed',
        'Image_Conversion',
        'Image_Remote'
    ];
}
