<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class blogsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    // protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //  ini_set('memory_limit', "1280000M");
        $faker_ar = Factory::create('ar_JO');
        $faker_en = Factory::create('en_JO');
        return [
           
            // 'image' => $faker_en->image('public/images',400,300, null, false) ,

            // 'title_ar' => $faker_ar->name,
            // 'title_en' => $faker_en->name,
            // 'desc_en' => $faker_ar->realText(),
            // 'desc_ar' => $faker_en->realText(),

            // 'created_at' => $faker_ar->dateTimeThisYear($max = 'now', $timezone = null) ,
            // 'updated_at' => $faker_en->dateTimeThisYear($max = 'now', $timezone = null) ,
        ];
    }
}
