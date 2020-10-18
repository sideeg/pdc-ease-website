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
    protected $fillable = ["image","title","desc","tag_id","created_at"
    ];

    public function tag()
    {
        return $this->belongsTo('App\Models\tags');
    }



}
