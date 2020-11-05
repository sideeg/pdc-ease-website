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
            'logo' => "images\svg\clints\Lfss.png" ,
            'name' => $Factory->name,
        ]);
        clints::create([
            'logo' => "images\svg\clints\khaber.png" ,
            'name' => $Factory->name,
        ]);
        clints::create([
            'logo' => "images\svg\clints\kumani.png" ,
            'name' => $Factory->name,
        ]);

        clints::create([
            'logo' => "images\svg\clints\mvmv.png" ,
            'name' => $Factory->name,
        ]);
        clints::create([
            'logo' => "images\svg\clints\Ocean_Media.png" ,
            'name' => $Factory->name,
        ]);
        clints::create([
            'logo' => "images\svg\clints\investin.png" ,
            'name' => $Factory->name,
        ]);
        clints::create([
            'logo' => "images\svg\clints\Ltopaz.png" ,
            'name' => $Factory->name,
        ]);
    }
}
