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
            $table->id();
            $table->string("name");
            $table->string("kind_of_product")->references("kind_of_product")->on("kind_of_products");
            $table->string("description");
            $table->string("image_name");
            $table->string("image_path");
            $table->integer('borrow_days');
            $table->string("owner")->references("id")->on("users");
            $table->boolean("borrowed")->default(false);
            $table->boolean("give_back")->default(false);
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
