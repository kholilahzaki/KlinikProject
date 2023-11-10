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
        Schema::create('k_k_s', function (Blueprint $table) {
            $table->id();
            $table->integer('no_kk')->unsigned();
            $table->integer('kk_no_dokumen');
            $table->string('kk_kepalaKeluarga');
            $table->string('kk_pasangan');
            $table->string('kk_anak');
            $table->binary('kk_foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('k_k_s');
    }
};
