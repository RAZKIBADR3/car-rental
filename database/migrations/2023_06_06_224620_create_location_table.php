<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('location', function (Blueprint $table) {
            $table->id();
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('client');

            $table->unsignedBigInteger('vehicule_id');
            $table->foreign('vehicule_id')
            ->references('id')
            ->on('vehicule');

            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id')
            ->references('id')
            ->on('client');

            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('location');
    }
};
