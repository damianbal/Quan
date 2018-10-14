<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // demo account
        User::create([
            'name' => 'Demo',
            'email' => 'demo@quan.app',
            'password' => bcrypt('demo123')
        ]);
    }
}
