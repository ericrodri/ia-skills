<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ProfessionSeeder::class,
            SkillSeeder::class,
            ScrapedSkillsSeeder::class,
            RedditSkillsSeeder::class,
            WebSkillsSeeder::class,
            RedditScrapedSeeder2::class,
            ScrapedSkillsSeeder3::class,
        ]);
    }
}
