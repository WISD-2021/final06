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
    //與admins關聯 多對一
    public function admins(){
        return $this->belongsTo(Admin::class);
    }
    //與users關聯 多對多
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
