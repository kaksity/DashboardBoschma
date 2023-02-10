<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $users = [
            [
                'full_name' => 'Admin User',
                'email' => 'admin@boschma.bo.gov.ng',
                'password' => 'password',
            ],
            [
                'full_name' => 'User 1',
                'email' => 'user1@boschma.bo.gov.ng',
                'password' => 'password',
            ],
            [
                'full_name' => 'User 2',
                'email' => 'user2@boschma.bo.gov.ng',
                'password' => 'password',
            ],
        ];

        DB::transaction(function () use ($users) {
            foreach ($users as $user) {
                User::create([
                    'full_name' => $user['full_name'],
                    'email' => $user['email'],
                    'password' => Hash::make($user['password'])
                ]);
            }
        });
    }
}
