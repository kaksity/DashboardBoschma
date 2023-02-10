<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LgaSeeder::class);
        $this->call(FacilitySeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(EnrollmentSeeder::class);
        $this->call(UserSeeder::class);
    }
}
