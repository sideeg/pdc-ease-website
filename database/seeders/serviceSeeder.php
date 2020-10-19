<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\services;
use \Faker\Factory;

class serviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker_ar = Factory::create('ar_JO');
        $faker_en = Factory::create('en_JO');

        
        $path = "public/images";
        if (!is_dir($path)) {
            \File::makeDirectory($path, $mode = 0755, true, true);
        }
        services::create([
            'title_ar'=> $faker_ar->name,
            'title_en'=> $faker_en->name,

            "desc_en" => $faker_ar->realText(),
            'desc_ar' => $faker_en->realText(),

            'image' => $faker_en->image($path,400,300, null, false) ,

            

           
        ]);
    }
}
