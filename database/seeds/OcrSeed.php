<?php

use Illuminate\Database\Seeder;

class OcrSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ocr')->insert([
            
            'OCR_id'             => 1,
            'Image_Dir'           => '393279924.jpg',
            'Image_Text'          => 'Unprocessed',
            'Image_Traversed'       => 'Unread',
            'Image_Conversion'        => 'N/A',
            'Image_Remote' => 'NO',
            
        ]);
    }
}
