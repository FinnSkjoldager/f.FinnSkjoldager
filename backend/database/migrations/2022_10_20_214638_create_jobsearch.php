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
     
 Schema::dropIfExists('jobsearch');

 Schema::create('jobsearch', function (Blueprint $table) {
     $table->id();
     $table->timestamps();
     $table->string('title', 200);
     $table->string('desc', 2024);
     $table->string('company', 100);
     $table->string('url', 100);
     $table->integer('count');
 });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobsearch');
    }
};
