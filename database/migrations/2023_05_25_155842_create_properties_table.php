<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id('property_id');
            $table->unsignedBigInteger('landlord_id');
            $table->foreign('landlord_id')->references('landlord_id')->on('landlords');
            $table->decimal('price', 8, 2);
            $table->unsignedBigInteger('address_id');
            $table->foreign('address_id')->references('address_id')->on('addresses');
            $table->string('description');
            $table->integer('room_count');
            $table->decimal('area', 8, 2);
            $table->string('image')->nullable();
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
        Schema::dropIfExists('properties');
    }
}