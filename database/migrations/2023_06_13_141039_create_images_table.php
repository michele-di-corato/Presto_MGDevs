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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('path')->nullable();
            $table->unsignedBigInteger('announce_id');
            $table->foreign('announce_id')->references('id')->on('announces');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('images',function(Blueprint $table){
            $table->dropForeign(['announce_id']);
            $table->dropColumn('announce_id');
        });
    }
};
