<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id('rating_id');
            $table->unsignedBigInteger('tenant_id');
            $table->foreign('tenant_id')->references('tenant_id')->on('tenants');
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')->references('property_id')->on('properties');
            $table->integer('rating');
            $table->string('comment');
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
        Schema::dropIfExists('ratings');
    }
}