<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'テスト 花子',
            'email' => 'test@gmail.com',
            'password' => bcrypt('password')
        ];
        DB::table('users')->insert($param);
    }
}
