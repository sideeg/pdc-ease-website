<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\clints;
use \Faker\Factory;


class clintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Factory = Factory::create('en_JO');
        $path = "public/images";
        if (!is_dir($path)) {
            \File::makeDirectory($path, $mode = 0755, true, true);
        }
        clints::create([
            'logo' => $Factory->imageUrl(400,300, 'business', false) ,
            'name' => $Factory->name,
        ]);
    }
}
