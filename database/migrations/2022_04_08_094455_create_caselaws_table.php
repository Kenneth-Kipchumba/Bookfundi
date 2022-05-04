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
            $table->tinyText('case_plaintiff')->nullable();
            $table->tinyText('case_respondent')->nullable();
            $table->tinyText('case_defendant')->nullable();
            $table->tinyText('case_appellant')->nullable();
            $table->tinyText('case_judges');
            $table->tinyText('plaintiffs_advocate')->nullable();
            $table->tinyText('respondents_advocate')->nullable();
            $table->tinyText('defendants_advocate')->nullable();
            $table->tinyText('appellants_advocate')->nullable();
            $table->string('case_decision');
            $table->string('case_outcome');
            $table->string('citation');
            $table->timestamp('case_date');
            $table->string('case_country');
            $table->string('case_county');
            $table->string('case_town');
            $table->string('case_court');
            $table->mediumText('case_body');
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
