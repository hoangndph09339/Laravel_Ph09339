<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
//        $this->call([
//            StudentsTableSeeder::class,
//            SubjectTableSeeder::class,
//        ]);

//        Student::factory(10)->create();
//        Subject::factory(20)->create();
//        User::factory(10)->create();
        $this->call([
           UsersTableSedder::class,
        ]);
    }
}
