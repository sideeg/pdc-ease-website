<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders_tags extends Model
{
    use HasFactory;

    protected $fillable = [  "order_id","tag_id"];

    public function tag()
    {
        return $this->belongsTo('App\Models\tags','tag_id');
    }

    public function order()
    {
        return $this->belongsTo('App\Models\orders','order_id');
    }

}
