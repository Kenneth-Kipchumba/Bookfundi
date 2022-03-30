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
        Schema::create('judges', function (Blueprint $table) {
            $table->id();
            $table->string('judge_name');
            $table->string('judge_current_court_level');
            $table->string('judge_current_country');
            $table->string('judge_current_county');
            $table->string('judge_current_town');
            $table->string('judge_previous_court_level');
            $table->string('judge_previous_country');
            $table->string('judge_previous_county');
            $table->string('judge_previous_town');
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
        Schema::dropIfExists('judges');
    }
};
