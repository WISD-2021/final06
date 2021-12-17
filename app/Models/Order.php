<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    //與users關聯 多對一
    public function users(){
        return $this->belongsTo(User::class);
    }
    //與products關聯 多對多
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
