<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tags;
use App\Models\services;
use \Faker\Factory;



class tagSeeder extends Seeder
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
        $service = services::pluck('id')->toArray();
        tags::create([
            'name_ar'=> $faker_ar->name,
            'name_en'=> "Branding & Brand Positioning Positioning",

            "desc_en" => $faker_ar->realText(),
            'desc_ar' => $faker_en->realText(),


            "services_id"=> '2',
        ]);

        tags::create([
            'name_ar'=> $faker_ar->name,
            'name_en'=> "Marketing Planning",
            "services_id"=> '2',
        ]);
        tags::create([
            'name_ar'=> $faker_ar->name,
            'name_en'=> "Digital Marketing",
            "services_id"=> '2',
        ]);

    }
}
