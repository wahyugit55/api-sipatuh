<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password'), // Ubah 'password' dengan kata sandi yang Anda inginkan
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
