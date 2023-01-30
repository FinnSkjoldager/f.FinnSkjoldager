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
        Schema::table('medlem', function (Blueprint $table) {
            //$table->string('fornavn');
            //$table->string('efternavn');
            //$table->string('telefonnr');
            $table->dropColumn(['telfonnr']);
            //$table->dropColumn('telfonnr');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
