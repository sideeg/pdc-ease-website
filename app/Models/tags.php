<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    use HasFactory;
    
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ "name","desc","service_id",
    ];

    public function service()
    {
        return $this->belongsTo('App\Models\services');
    }

}
