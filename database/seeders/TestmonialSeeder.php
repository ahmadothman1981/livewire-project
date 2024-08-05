<?php

namespace Database\Seeders;

use App\Models\Testmonial;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestmonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testmonial::factory()->count(20)->create();
    }
}
