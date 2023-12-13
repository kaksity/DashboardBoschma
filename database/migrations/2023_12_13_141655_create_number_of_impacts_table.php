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
        Schema::create('number_of_impacts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('formal_sector_beneficiaries');
            $table->string('bhcpf_Beneficiaries');
            $table->string('health_care_providers');
            $table->string('impacted_lives');
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
        Schema::dropIfExists('number_of_impacts');
    }
};
