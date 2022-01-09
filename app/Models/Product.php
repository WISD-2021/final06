<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'sort',
        'price',
        'capacity',
        'date',
        'year',
        'stock',
        'introduce',
        'status',
        'image',
    ];

    protected $casts = [

        'name' => 'string',
        'sort' => 'string',
        'price' => 'integer',
        'capacity' => 'integer',
        'date' => 'date',
        'year' => 'integer',
        'stock' => 'integer',
        'introduce' => 'string',
        'status' => 'string',
        'image' => 'string',
    ];

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
    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }
}
