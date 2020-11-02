<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\slide_bar;

class slideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        slide_bar::create([
            'sourse' => "images\svg\slider\588.svg" ,
            'type' => 0,
        ]);
    }
}
