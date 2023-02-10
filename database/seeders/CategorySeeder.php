<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [ 'name' => 'Under Five(5)'],
            [ 'name' => 'Aged'],
            [ 'name' => 'Pregnant Women'],
            [ 'name' => 'Physically Challenged'],
            [ 'name' => 'Others'],
        ];

        DB::transaction(function () use ($categories) {
            foreach ($categories as $category) {
                Category::create([
                    'name' => $category['name']
                ]);
            }
        });
    }
}
