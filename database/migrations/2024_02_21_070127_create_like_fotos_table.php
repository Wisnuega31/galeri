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
        Schema::create('like_fotos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('FotoID');
            $table->unsignedBigInteger('UserID');
            $table->timestamps();

            // $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('FotoID')->references('id')->on('fotos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('like_fotos');
    }
};
