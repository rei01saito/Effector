<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // 追記
use App\Models\User;

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
            'name' => 'TestUser',
            'email' => 'TestUser@mail.com',
            'password' => 'password',
        ];
        User::create([
            'name' => 'TestUser',
            'email' => 'TestUser@mail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
