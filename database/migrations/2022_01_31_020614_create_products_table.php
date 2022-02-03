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

            $table->string('sku', 45);
            $table->float('price');
            $table->float('price_discount')->nullable();
            $table->string('status_usage', 45);
            $table->float('status_aesthetic');
            $table->integer('warranty_days');
            $table->string('support', 45);
            $table->string('delivery', 45);

            // Images FK
            $table->foreignId('file_id')
                ->constrained('files')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            // Categories FK
            $table->foreignId('category_id')
                  ->constrained('categories')
                  ->restrictOnDelete()
                  ->cascadeOnUpdate();

            // Inventories FK
            $table->foreignId('inventory_id')
                  ->unique()
                  ->constrained('inventories')
                  ->cascadeOnDelete()
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
