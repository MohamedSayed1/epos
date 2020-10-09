<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->integer('product_id', true);
            $table->string('name', 500)->nullable();
            $table->string('parcod', 300)->nullable();
            $table->integer('count')->nullable();
            $table->float('pruch_prices', 10, 0)->nullable();
            $table->float('prices', 10, 0)->nullable();
            $table->string('photo', 200)->nullable();
            $table->float('discount', 10, 0)->nullable();
            $table->timestamp('created-at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
