<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Teachers')->insert([
            'name'=>'Mark',
            'age'=>18,
            'sex'=>10,
        ]);
    }
}
