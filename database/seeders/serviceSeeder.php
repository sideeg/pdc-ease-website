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
        // $success = curl_exec($ch) && curl_getinfo($ch, CURLINFO_HTTP_CODE) === 200;

        
        $path = "public/images";
        if (!is_dir($path)) {
            \File::makeDirectory($path, $mode = 0755, true, true);
        }
        services::create([
            'title_ar'=> $faker_ar->name,
            'title_en'=> $faker_en->name,

            "desc_en" => $faker_en->realText(),
            'desc_ar' => $faker_ar->realText(),

            'image' => $faker_en->imageUrl(400,300, null, false) ,


            

           
        ]);
    }
}
