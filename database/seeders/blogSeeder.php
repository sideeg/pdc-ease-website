<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Faker\Factory;
use App\Models\blogs;
use App\Models\tags;

// use Illuminate\Database\Eloquent\Factories\Factory;

class blogSeeder extends Seeder
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
        $tags = tags::pluck('id')->toArray();

        $path = "public/images";
        if (!is_dir($path)) {
            \File::makeDirectory($path, $mode = 0755, true, true);
        }
         
        blogs::create([
            'image' => $faker_en->image($path,400,300, null, false) ,
        'title_ar' => $faker_ar->name,
            'title_en' => $faker_en->name,
            'desc_en' => $faker_ar->realText(),
            'desc_ar' => $faker_en->realText(),
            'tag_id' => $faker_en->randomElement($tags),
            // 'tag_id' => 1,

        ]);

        // Create the catory
        //  blogs::factory()->count(50)->create();
        }

    }

