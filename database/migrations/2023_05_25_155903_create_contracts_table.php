<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id('contract_id');
            $table->unsignedBigInteger('landlord_id');
            $table->foreign('landlord_id')->references('landlord_id')->on('landlords');
            $table->unsignedBigInteger('tenant_id');
            $table->foreign('tenant_id')->references('tenant_id')->on('tenants');
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')->references('property_id')->on('properties');
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('price', 8, 2);
            $table->string('payment_status');
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
        Schema::dropIfExists('contracts');
    }
}