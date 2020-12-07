<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartPlateExecutiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart__plate_executive', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->references('id')->on('carts')->onDelete('cascade');
            $table->foreignId('plate_executive_id')->references('id')->on('plate_executives')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart__plate_executive');
    }
}
