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
        Schema::create('penilaians', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 20);
            $table->string('nama', 50);
            $table->string('kd_matkul', 20);
            $table->integer('nilai1');
            $table->integer('nilai2');
            $table->integer('kuis1');
            $table->integer('kuis2');
            $table->integer('UTS');
            $table->integer('UAS');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaians');
    }
};
