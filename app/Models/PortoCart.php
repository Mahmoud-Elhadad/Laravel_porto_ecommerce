<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortoCart extends Model
{
    protected $fillable = [
        "count" , "user_id" , "product_id"
    ];

    public function user(){
        return $this->belongsTo(User::class , "user_id" , "id");
    }

    // foregin + id
    public function product(){
        return $this->belongsTo(Product::class , "product_id" , "id");
    }
}
