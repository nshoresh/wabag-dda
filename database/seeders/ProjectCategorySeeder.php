<?php

namespace Database\Seeders;

use App\Models\ProjectCategory;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectCategorySeeder extends Seeder
{
   /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Health Projects',
            'Education Projects',
            'Infrastructure',
            'Community Development',
        ];

        foreach ($categories as $name) {
            ProjectCategory::firstOrCreate(['name' => $name]);
        }
    }
}
