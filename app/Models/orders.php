<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;

    protected $fillable = [  "name","email","phone",'status'];

    public function order_tags()
    {
        return $this->hasMany('App\Models\orders_tags','order_id');
    }


}
