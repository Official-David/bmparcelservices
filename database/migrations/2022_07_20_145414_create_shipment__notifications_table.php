<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment__notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shipment_id');
            $table->enum('delivery_status', ['on transit', 'stopped', 'delivered']);
            $table->string('message');
            $table->string('location');
            $table->dateTime('created_at', $precision = 0);
            $table->foreign('shipment_id')->references('id')->on('shipments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipment__notifications');
    }
};
