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
        Schema::create('lcs', function (Blueprint $table) {
            $table->id();
            $table->integer('no_lc')->unsigned;
            $table->enum('lc_jenis', ['L', 'R', 'LR', 'LN', 'PADI']);
            $table->date('lc_tglInput');
            $table->date('lc_tglUpdate');
            $table->enum('lc_jenisUpdate', ['L', 'R', 'LR', 'LN', 'PADI']);
            $table->enum('lc_sumberdata', ['GAPLE', 'BAZAR', 'REKOMENDASI']);
            $table->binary('lc_formlc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lcs');
    }
};
