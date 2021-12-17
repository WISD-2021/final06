<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //與orders關聯 多對多
    public function orders(){
        return $this->belongsToMany(Order::class);
    }
}
