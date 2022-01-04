<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();                       #編號
            $table->string('name');      #名稱
            $table->string('sort');      #類別
            $table->integer('price');    #價格
            $table->integer('capacity'); #容量
            $table->date('date');        #製造日期
            $table->integer('year');     #釀造年分
            $table->integer('stock');    #庫存
            $table->text('introduce');   #介紹
            $table->text('status');      #狀態
            $table->string('image');     #圖片
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
