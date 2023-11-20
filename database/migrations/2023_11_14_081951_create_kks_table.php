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
        Schema::create('kks', function (Blueprint $table) {
            $table->id();
            $table->integer('kk_no');
            $table->integer('kk_no_dokumen');
            $table->string('kk_kepalakeluarga');
            $table->string('kk_pasangan');
            $table->string('kk_anak');
            $table->binary('kk_fotokk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kks');
    }
};
