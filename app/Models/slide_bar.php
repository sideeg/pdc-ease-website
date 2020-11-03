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
    protected $fillable = [  "tilte","desc","sourse","type",
    ];
}
