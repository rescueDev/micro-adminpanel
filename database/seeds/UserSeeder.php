<?php

use Illuminate\Database\Seeder;
use App\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
         'name' => 'Sample Name',
         'email' => 'admin@admin.com',
         'email_verified_at' => now(),
         'password' => bcrypt('password'), // password
         'remember_token' => Str::random(10),
    ]);
    }
}
