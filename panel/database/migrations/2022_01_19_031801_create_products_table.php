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

            $table->integer('sku');
            $table->integer('price');
            $table->integer('discount_price');
            $table->string('image_1', 155);
            $table->string('image_2', 155);
            $table->string('image_3', 155);
            $table->string('image_4', 155);
            $table->string('image_5', 155);
            $table->string('image_6', 155);
            $table->string('image_7', 155);

            // Categories
            $table->foreignId('category_id')
                  ->constrained('categories')
                  ->restrictOnDelete()
                  ->cascadeOnUpdate();

            // Inventories
            $table->foreignId('inventory_id')
                  ->constrained('inventories')
                  ->restrictOnDelete()
                  ->cascadeOnUpdate();

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
