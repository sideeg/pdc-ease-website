<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Database\Factories\blogsFactory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // ini_set('memory_limit', "-1");
        // \App\Models\User::factory(2)->create();
        // \App\Models\blogs::factory(2)->create();
        $this->call(clintSeeder::class);

        $this->call(serviceSeeder::class);
        $this->call(tagSeeder::class);

        $this->call(blogSeeder::class);
        $this->call(slideSeeder::class);

        


    }
}
