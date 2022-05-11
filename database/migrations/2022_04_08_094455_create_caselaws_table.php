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
            $table->mediumText('case_plaintiff')->nullable();
            $table->mediumText('case_respondent')->nullable();
            $table->mediumText('case_defendant')->nullable();
            $table->mediumText('case_appellant')->nullable();
            $table->mediumText('case_judges');
            $table->mediumText('plaintiffs_advocate')->nullable();
            $table->mediumText('respondents_advocate')->nullable();
            $table->mediumText('defendants_advocate')->nullable();
            $table->mediumText('appellants_advocate')->nullable();
            $table->string('case_decision');
            $table->string('case_outcome');
            $table->string('citation');
            $table->string('case_date');
            $table->string('case_country');
            $table->string('case_county');
            $table->string('case_town');
            $table->string('case_court');
            $table->longText('case_body');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
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
