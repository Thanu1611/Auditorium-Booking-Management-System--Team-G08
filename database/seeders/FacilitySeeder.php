<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Facility;

class FacilitySeeder extends Seeder
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

        DB::table('facilities')->insert([
            ['auditorium' =>1,'nameFacility' => 'Hour_Payment', 'detail_Facility' => 'Default hour payment', 'cost' => 2500],
            ['auditorium' =>1,'nameFacility' => 'AC', 'detail_Facility' => 'Default AC charge for hour', 'cost' => 500],
            ['auditorium' =>1,'nameFacility' => 'Using_
            Device', 'detail_Facility' => 'Default device usage charge', 'cost' => 2000],
        ]);
    }
}
