<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('slug');
            $table->text('description');
            $table->integer('price');
            $table->integer('quantity');
            $table->boolean('is_android');
            $table->boolean('is_threeD');
            $table->integer('photo_id')->default(0);
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->integer('condition_id')->unsigned();
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade");
            $table->foreign("brand_id")->references("id")->on("brands")->onDelete("cascade");
            $table->foreign("condition_id")->references("id")->on("conditions")->onDelete("cascade");
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }


}
