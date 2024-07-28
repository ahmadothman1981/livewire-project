<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::updateOrCreate([
            'name' => 'php'
        ],[
            'name' => 'PHP',
            'progress' => '75',
            
            ]);
    }
}
