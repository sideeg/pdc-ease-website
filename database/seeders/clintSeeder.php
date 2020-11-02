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
            'logo' => "images\svg\clints\CC.svg" ,
            'name' => $Factory->name,
        ]);
        clints::create([
            'logo' => "images\svg\clints\fss.svg" ,
            'name' => $Factory->name,
        ]);
        clints::create([
            'logo' => "images\svg\clints\khaber.svg" ,
            'name' => $Factory->name,
        ]);
        clints::create([
            'logo' => "images\svg\clints\logo_mat.svg" ,
            'name' => $Factory->name,
        ]);
        clints::create([
            'logo' => "images\svg\clints\Mask.svg" ,
            'name' => $Factory->name,
        ]);
        clints::create([
            'logo' => "images\svg\clints\mvmv.svg" ,
            'name' => $Factory->name,
        ]);
        clints::create([
            'logo' => "images\svg\clints\Ocean_Media.svg" ,
            'name' => $Factory->name,
        ]);
        clints::create([
            'logo' => "images\svg\clints\investin.svg" ,
            'name' => $Factory->name,
        ]);
        clints::create([
            'logo' => "images\svg\clints\TOPAZ.svg" ,
            'name' => $Factory->name,
        ]);
    }
}
