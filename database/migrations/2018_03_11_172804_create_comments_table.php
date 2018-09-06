<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{

    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('body');
            $table->integer('user_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->integer('condition_id')->unsigned();
            $table->boolean('status')->default(0);
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("product_id")->references("id")->on("products")->onDelete("cascade");
            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade");
            $table->foreign("brand_id")->references("id")->on("brands")->onDelete("cascade");
            $table->foreign("condition_id")->references("id")->on("conditions")->onDelete("cascade");
        });
    }


    public function down()
    {
        Schema::dropIfExists('comments');
    }


}
