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
            $table->string('lc_no')->unique();
            $table->bigInteger('kk_id')->unsigned();
            $table->foreign('kk_id')->references('id')->on('kks')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('lc_jenis', ['L', 'R', 'LR', 'LN', 'PADI']);
            $table->date('lc_tgldibuat');
            $table->enum('lc_sumberdata', ['GAPLE', 'BAZAR', 'REKOMENDASI']);
            $table->binary('lc_formlc');
            $table->enum('lc_isActive', ['0', '1']);
            $table->enum('lc_alasan', ['UPGRADE', 'BERHENTI SEMENTARA', 'TIDAK MENDUKUNG', 'MENINGGAL']);
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
