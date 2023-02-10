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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->uuid('id')->index();
            $table->string('full_name')->nullable();
            $table->string('lga')->nullable();
            $table->string('ward')->nullable();
            $table->string('facility')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('category')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('gender')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('enrollments');
    }
};
