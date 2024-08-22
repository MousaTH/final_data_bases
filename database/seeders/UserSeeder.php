<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name'=>'Mousa',
            'last_name'=>'Taha',
            'email'=>'mousa2003@gmail.com',
            'password'=>'mousa',
            'phone_number'=>'0798055272'
        ]);
    }
}
