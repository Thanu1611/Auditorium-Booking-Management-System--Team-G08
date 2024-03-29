<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'firstname' => 'Thanushika',
            'lastname'=>'Thedsanamoorthysarma',
            'email' => 'abmsuoj@gmail.com',
            'password' => Hash::make('test123'),
            'remember_token' => str::random(10),
            'role' => 'superadmin',
            'mobile' => 0767500411,
            'image'=>'Profile/local.png',
            'is_verified' => 1
        ]);
    }
}
