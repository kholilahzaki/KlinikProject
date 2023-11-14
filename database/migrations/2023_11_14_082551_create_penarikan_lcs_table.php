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
        Schema::create('penarikan_lcs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('no_lc');
            $table->foreign('no_lc')->references('id')->on('lcs')->onDelete('cascade')->onUpdate('cascade');
            $table->date('p_tglPenarikan');
            $table->enum('p_alasanPenarikan', ['TIDAK MENDUKUNG', 'MENINGGAL']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penarikan_lcs');
    }
};
