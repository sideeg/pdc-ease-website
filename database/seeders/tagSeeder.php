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

        tags::create([

            'name_en'=> "Process Mapping",
            "services_id"=> '3',
        ]);

        tags::create([

            'name_en'=> "Process Improvement",
            "services_id"=> '3',
        ]);

        tags::create([
            'name_en'=> "Organizational Capabilities Assessment & Improvement",
            "services_id"=> '3',
        ]);

        tags::create([
            'name_en'=> "Business & Marketing Strategy Formulation",
            "services_id"=> '3',
        ]);

        tags::create([
            'name_en'=> "Mobile app Android & IOS development ",
            "services_id"=> '1',
        ]);

        tags::create([
            'name_en'=> "E-Commerce Design & Development",
            "services_id"=> '1',
        ]);

        tags::create([
            'name_en'=> "Website Design & Development",
            "services_id"=> '1',
        ]);

        tags::create([
            'name_en'=> "UI & UX Design",
            "services_id"=> '1',
        ]);

        tags::create([
            'name_en'=> "Email & Domains Hosting Services",
            "services_id"=> '1',
        ]);

        tags::create([
            'name_en'=> "IT hardware/ Software Consumable      Sales – Support – Upgrade – Repairs",
            "services_id"=> '5',
        ]);

        tags::create([
            'name_en'=> "Network Hardware ( Infrastructure Planning, Deployment and support)",
            "services_id"=> '5',
        ]);

        tags::create([
            'name_en'=> "Server Support ( Remote and physical support )",
            "services_id"=> '5',
        ]);

        tags::create([
            'name_en'=> "  Anti-Virus, Internet Security, websites restrictions Data Recovery solutions",
            "services_id"=> '5',
        ]);


    }
}
