<?php

namespace Database\Seeders;

use App\Models\orders;
use Illuminate\Database\Seeder;
use App\Models\tags;
use \Faker\Factory;

class orderSeeder extends Seeder
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
        orders::create([
            'name'=> $faker_ar->name,
            'email'=> $faker_ar->email,
            'phone'=> $faker_ar->phoneNumber,

        ]);

        orders::create([
            'name'=> $faker_ar->name,
            'email'=> $faker_ar->email,
            'phone'=> $faker_ar->phoneNumber,

        ]);
    }
}
