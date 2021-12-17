<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    //與user關聯 多對一
    public function users(){
        return $this->belongsTo(User::class);
    }
}
