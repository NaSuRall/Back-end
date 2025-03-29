<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matieres', function (Blueprint $table) {
            $table->engine('InnoDB');
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('prof_id');
            $table->unsignedBigInteger('promotion_id');
            $table->timestamps();

            $table->foreign('prof_id')->references('id')->on('profs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matieres');
    }
};
