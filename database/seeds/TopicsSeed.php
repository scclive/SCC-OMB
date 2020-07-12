<?php

use Illuminate\Database\Seeder;

class TopicsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert([
            'id'             => 1,
            'title'           => 'English',
        ]);
        DB::table('topics')->insert([
            'id'             => 2,
            'title'           => 'Analytical',
        ]);
        DB::table('topics')->insert([
            'id'             => 3,
            'title'           => 'Quantitative',
        ]);



        DB::table('topics')->insert([
            'id'             => 4,
            'title'           => 'Physics',
        ]);
        DB::table('topics')->insert([
            'id'             => 5,
            'title'           => 'Chemistry',
        ]);
        DB::table('topics')->insert([
            'id'             => 6,
            'title'           => 'Mathematics',
        ]);


        DB::table('topics')->insert([
            'id'             => 7,
            'title'           => 'Biology',
        ]);
        DB::table('topics')->insert([
            'id'             => 8,
            'title'           => 'Computer',
        ]);
        DB::table('topics')->insert([
            'id'             => 9,
            'title'           => 'Statistics',
        ]);
        DB::table('topics')->insert([
            'id'             => 10,
            'title'           => 'Economics',
        ]);



        DB::table('topics')->insert([
            'id'             => 11,
            'title'           => 'Personality',
        ]);
        DB::table('topics')->insert([
            'id'             => 12,
            'title'           => 'Accounting',
        ]);
        DB::table('topics')->insert([
            'id'             => 13,
            'title'           => 'Commerce',
        ]);



        // DB::table('topics')->insert([
        //     'id'             => 7,
        //     'title'           => 'Islamiyat / Ethics',
        // ]);
        // DB::table('topics')->insert([
        //     'id'             => 7,
        //     'title'           => 'Pakistan Studies',
        // ]);
        // DB::table('topics')->insert([
        //     'id'             => 7,
        //     'title'           => 'General Knowledge',
        // ]);

    }
}
