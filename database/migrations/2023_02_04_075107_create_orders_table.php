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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')
                ->constrained('carts');
            $table->foreignId('status_id')
                ->constrained('order_statuses')
                ->default(1);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('address');
            $table->string('address_line_2');
            $table->string('city');
            $table->string('region');
            $table->string('zip_code');
            $table->date('delivery_day');
            $table->string('delivery_instructions');
            $table->boolean('promotions')->default(false);
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
        Schema::dropIfExists('orders');
    }
};
