<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clints extends Model
{
    use HasFactory;


     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["logo","name"
    ];

    protected $appends = ['logo_full_path'];

    public function getLogoFullPathAttribute()
	{
		return isset($this->attributes['logo']) ?  '/app/public/clints/' . $this->attributes['logo'] : null;
    }


}
