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
            'title_ar'=> "صفحات الويب وتطبيقات الهاتف",
            'title_en'=> "Web and Mobile Applications",

            "desc_en" => $faker_en->realText(),
            'desc_ar' => $faker_ar->realText(),

            'image' => 'images\svg\services\mobileAndWeb.svg' ,

        ]);

        services::create([
            'title_ar'=> "التسويق والعلامات التجارية",
            'title_en'=> "Markting and Branding",

            "desc_en" => $faker_en->realText(),
            'desc_ar' => $faker_ar->realText(),

            'image' => 'images\svg\services\markting.svg' ,

        ]);

        services::create([
            'title_ar'=> "تطوير الاعمال",
            'title_en'=> "Business Development",

            "desc_en" => $faker_en->realText(),
            'desc_ar' => $faker_ar->realText(),

            'image' => 'images\svg\services\development.svg' ,

        ]);

        services::create([
            'title_ar'=> "نظم تخطيط موارد المؤسسات",
            'title_en'=> "Enterprise Resource Planning Systems",

            "desc_en" => $faker_en->realText(),
            'desc_ar' => $faker_ar->realText(),

            'image' => 'images\svg\services\erp.svg' ,

        ]);

        services::create([
            'title_ar'=> "البنية التحتية لتكنولوجيا المعلومات والدعم الفني",
            'title_en'=> "IT Infrastructure,and Technical support",

            "desc_en" => $faker_en->realText(),
            'desc_ar' => $faker_ar->realText(),

            'image' => 'images\svg\services\techencialSupoort.svg' ,

        ]);
    }
}
