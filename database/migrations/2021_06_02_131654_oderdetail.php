<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Oderdetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oderdetail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_oder')->unsigned();
            $table->integer('id_prod')->unsigned();
            $table->integer('quantity');
            $table->string('unit_price');
            $table->foreign('id_prod')
            ->references('product_id')
            ->on('Product')
            ->onDelete('cascade');

            $table->foreign('id_oder')
            ->references('id')
            ->on('oder')
            ->onDelete('cascade');
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
        Schema::dropIfExists('oderdetail');
    }
}
