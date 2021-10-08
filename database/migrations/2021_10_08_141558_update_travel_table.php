<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // CREO TABELLA TRAVEL
        Schema::table('travel', function (Blueprint $table) {
            $table->tinyInteger('duration');
            $table->foreignId('id_transport');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('travel', function (Blueprint $table) {
            $table->dropColumn('duration');
            $table->dropColumn('id_transport');
        });
    }
}
