<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["image","title_en","title_ar","desc_en","desc_ar","tag_id","created_at"
    ];

    protected $appends = ['image_full_path'];

    public function tag()
    {
        return $this->belongsTo('App\Models\tags');
    }

    public function getImageFullPathAttribute()
	{
		return isset($this->attributes['image']) ?  '/images/' . $this->attributes['image'] : null;
    }



}
