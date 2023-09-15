<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Category 2',
            'slug' => Str::slug('Category 2'),
            'description' => 'Category description text',
            'parent_id' => 1,
        ]);
    }
}

