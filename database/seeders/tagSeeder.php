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

            "service_id"=> '2',
        ]);

        tags::create([
            'name_ar'=> $faker_ar->name,
            'name_en'=> "Marketing Planning",
            "service_id"=> '2',
        ]);
        tags::create([
            'name_ar'=> $faker_ar->name,
            'name_en'=> "Digital Marketing",
            "service_id"=> '2',
        ]);

        tags::create([

            'name_en'=> "Process Mapping",
            "service_id"=> '3',
        ]);

        tags::create([

            'name_en'=> "Process Improvement",
            "service_id"=> '3',
        ]);

        tags::create([
            'name_en'=> "Organizational Capabilities Assessment & Improvement",
            "service_id"=> '3',
        ]);

        tags::create([
            'name_en'=> "Business & Marketing Strategy Formulation",
            "service_id"=> '3',
        ]);

        tags::create([
            'name_en'=> "Mobile app Android & IOS development ",
            "service_id"=> '1',
        ]);

        tags::create([
            'name_en'=> "E-Commerce Design & Development",
            "service_id"=> '1',
        ]);

        tags::create([
            'name_en'=> "Website Design & Development",
            "service_id"=> '1',
        ]);

        tags::create([
            'name_en'=> "UI & UX Design",
            "service_id"=> '1',
        ]);

        tags::create([
            'name_en'=> "Email & Domains Hosting Services",
            "service_id"=> '1',
        ]);

        tags::create([
            'name_en'=> "IT hardware/ Software Consumable      Sales – Support – Upgrade – Repairs",
            "service_id"=> '5',
        ]);

        tags::create([
            'name_en'=> "Network Hardware ( Infrastructure Planning, Deployment and support)",
            "service_id"=> '5',
        ]);

        tags::create([
            'name_en'=> "Server Support ( Remote and physical support )",
            "service_id"=> '5',
        ]);

        tags::create([
            'name_en'=> "  Anti-Virus, Internet Security, websites restrictions Data Recovery solutions",
            "service_id"=> '5',
        ]);


    }
}
