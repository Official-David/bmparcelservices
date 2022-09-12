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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('shipment_name');
            $table->unsignedBigInteger('origin');
            $table->unsignedBigInteger('destination');
            $table->enum('type_of_shipment', ['International', 'Local']);
            $table->string('carrier');
            $table->enum('shipment_mode', ['Air Freight', 'Ocean Freight', 'Road Freight']);
            $table->string('product');
            $table->string('quantity');
            $table->string('weight');
            $table->enum('payment_mode', ['Cash', 'Cheque']);
            $table->string('expected_delivery_date');
            $table->string('tracking_id');
            $table->enum('shipment_status', ['shipment accepted', 'in transit', 'out for delivery', 'delivered']);
            $table->dateTime('created_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipments');
    }
};
