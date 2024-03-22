<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TingkatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $tingkats = [
            ['tingkat' => '10'],
            ['tingkat' => '11'],
            ['tingkat' => '12']            
        ];
    
        foreach ($tingkats as $tingkat) {
            \App\Models\Tingkat::create($tingkat);
        }
    }
}
