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
        Schema::create('caselaws', function (Blueprint $table) {
            $table->id();
            $table->string('case_number')->unique();
            $table->string('case_title');
            $table->string('case_plaintiff')->nullable();
            $table->string('case_respondent')->nullable();
            $table->string('case_defendant')->nullable();
            $table->string('case_appellant')->nullable();
            $table->string('case_judges');
            $table->string('plaintiffs_advocate')->nullable();
            $table->string('respondents_advocate')->nullable();
            $table->string('defendants_advocate')->nullable();
            $table->string('appellants_advocate')->nullable();
            $table->string('decision');
            $table->string('outcome');
            $table->timestamp('year');
            $table->string('location');
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
        Schema::dropIfExists('caselaws');
    }
};
