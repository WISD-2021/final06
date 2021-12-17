<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    //與products關聯 一對多
    public function products(){
        return $this->hasMany(Product::class);
    }
}
