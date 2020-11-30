<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slide_bar extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     *
     * @var array
     */
    protected $fillable = [  "title_en",'title_ar',"desc_en",'desc_ar',"sourse","type",
    ];

    protected $appends = ['sourse_full_path'];

    public function getSourseFullPathAttribute()
	{
		return isset($this->attributes['sourse']) ?  '/app/public/sliders/' . $this->attributes['sourse'] : null;
    }
}
