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
        Schema::create('units_ingredients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unit_id')
                ->constrained('units');
            $table->foreignId('ingredient_id')
                ->constrained('ingredients');
            $table->float('count');
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
        Schema::dropIfExists('units_ingredients');
    }
};
