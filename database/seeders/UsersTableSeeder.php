<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Usuario administrador
        if(!User::where('email', 'administrator@example.com')->first()){
            User::create([
                'name' => 'Administrator',
                'email' => 'administrator@example.com',
                'password' => Hash::make('admin'),
            ]);
        }
        
    }
}
