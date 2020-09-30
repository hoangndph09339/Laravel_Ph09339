<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (DB::table('users')->count() > 0){
            DB::table('users')->where('id',  '2')
                ->update(
                [
                    'name' => 'Duc',
                    'password' => '123456'
                ]
            );
        }
    }
}
