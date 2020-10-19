<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [  "image","title_en","title_ar","desc_en","desc_ar"
    ];

    public function tag()
    {
        return $this->hasMany('App\Models\tags');
    }

}
