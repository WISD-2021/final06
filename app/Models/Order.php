<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'users_id',
        'products_id',
        'number',
        'sum',
        'date',
        'status',
    ];
    //與users關聯 多對一
    public function users(){
        return $this->belongsTo(User::class);
    }
    //與products關聯 多對多
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
