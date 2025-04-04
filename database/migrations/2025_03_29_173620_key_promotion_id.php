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
       Schema::table('profs', function (Blueprint $table) {

           $table->foreign('promotion_id')->references('id')->on('promotions')->onDelete('cascade');

       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
