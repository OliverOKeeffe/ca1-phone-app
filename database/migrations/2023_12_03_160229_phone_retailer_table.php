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
        Schema::create('phone_retailer', function (Blueprint $table) {
            $table->id();

            $table->foreignID('phone_id');
            $table->foreignID('retailer_id');

            $table->foreign('phone_id')->references('id')->on('phones')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('author_id')->references('id')->on('authors')->onUpdate('cascade')->onDelete('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phone_retailer');
    }
};