<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate([
            'email' => 'test@admin.com'
        ],[
            'name' => 'Test',
            'email' => 'test@admin.com',
            'phone' => '1234567890',
            'address' => 'test address',
            ]);
    }
}
