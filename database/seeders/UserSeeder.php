<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'email' => 'andreasnovrianto35@gmail.com',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
            'name' => 'Superadmin',
            'role' => 'superadmin'
        ]);
    }
}
