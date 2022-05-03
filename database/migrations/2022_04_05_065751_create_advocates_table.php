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
        Schema::create('advocates', function (Blueprint $table) {
            $table->id();
            $table->string('advocate_name');
            $table->string('advocate_firm');
            $table->string('advocate_specialization');
            $table->string('created_by');
            $table->string('updated_by');
            $table->string('deleted_by');
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
        Schema::dropIfExists('advocates');
    }
};
