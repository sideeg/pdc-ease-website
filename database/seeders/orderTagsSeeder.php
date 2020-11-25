<?php

namespace Database\Seeders;

use App\Models\orders;
use App\Models\orders_tags;
use App\Models\tags;
use Illuminate\Database\Seeder;
use \Faker\Factory;


class orderTagsSeeder extends Seeder
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
        $tag = tags::pluck('id')->toArray();
        $orders = orders::pluck('id')->toArray();

        orders_tags::create([
            'order_id'=> $faker_ar->randomElement($orders),
            'tag_id'=> $faker_en->randomElement($tag),


        ]);

        orders_tags::create([
            'order_id'=> $faker_ar->randomElement($orders),
            'tag_id'=> $faker_en->randomElement($tag),

        ]);
    }
}
