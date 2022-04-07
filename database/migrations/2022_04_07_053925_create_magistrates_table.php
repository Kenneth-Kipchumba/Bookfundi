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
        Schema::create('magistrates', function (Blueprint $table) {
            $table->id();
            $table->string('magistrate_name');
            $table->string('magistrate_current_court_level');
            $table->string('magistrate_current_country');
            $table->string('magistrate_current_county');
            $table->string('magistrate_current_town');
            $table->string('magistrate_previous_court_level');
            $table->string('magistrate_previous_country');
            $table->string('magistrate_previous_county');
            $table->string('magistrate_previous_town');
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
        Schema::dropIfExists('magistrates');
    }
};
