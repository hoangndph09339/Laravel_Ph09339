<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('students')->count() === 0){
            DB::table('students')->insert([
                [
                    'name' => 'Nguyen Van A',
                    'phone' => '012345678',
                    'age' => 20,
                    'gender' => true,
                    'address' => 'HN',
                    'is_active' => true,
                    'time' => '09-05-2019',
                ],
            ]);
        }
    }
}
