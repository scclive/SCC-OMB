<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(RoleSeed::class);
        $this->call(UserSeed::class);
        //$this->call(OcrSeed::class);
        //$this->call(TopicsSeed::class);

        
        DB::unprepared(file_get_contents(public_path("/SQL/questions.sql")));
        DB::unprepared(file_get_contents(public_path("/SQL/questions_options.sql")));
        DB::unprepared(file_get_contents(public_path("/SQL/universities.sql")));
        DB::unprepared(file_get_contents(public_path("/SQL/cities.sql")));
        DB::unprepared(file_get_contents(public_path("/SQL/departments.sql")));
        DB::unprepared(file_get_contents(public_path("/SQL/ocr.sql")));
        DB::unprepared(file_get_contents(public_path("/SQL/topics.sql")));

        // DB::unprepared(file_get_contents(public_path("/SQL/sampledata/users.sql")));
        DB::unprepared(file_get_contents(public_path("/SQL/sampledata/olevels.sql")));
        DB::unprepared(file_get_contents(public_path("/SQL/sampledata/matric.sql")));
        DB::unprepared(file_get_contents(public_path("/SQL/sampledata/hssc.sql")));
        // DB::unprepared(file_get_contents(public_path("/SQL/sampledata/alevels.sql")));
        DB::unprepared(file_get_contents(public_path("/SQL/sampledata/personality.sql")));
        DB::unprepared(file_get_contents(public_path("/SQL/sampledata/tests.sql")));
        DB::unprepared(file_get_contents(public_path("/SQL/sampledata/test_answers.sql")));



        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Model::reguard();
    }
}
