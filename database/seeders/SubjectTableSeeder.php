<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('subjects')->count() === 0){
            DB::table('subjects')->insert([
               [
                  'name' => 'Math',
                  'is_active' => 0,
                  'time' => 2020/10/1,
               ] ,
            ]);
        }
    }
}
