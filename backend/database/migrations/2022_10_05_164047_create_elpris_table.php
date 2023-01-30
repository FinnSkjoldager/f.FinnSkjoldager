<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elpris', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('PriceArea');
            $table->string('HourDK');
            $table->double('SpotPriceDKK');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elpris');
    }
};
