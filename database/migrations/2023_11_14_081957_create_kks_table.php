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
            $table->bigInteger('ktp_id')->unsigned();
            $table->foreign('ktp_id')->references('id')->on('ktps')->onDelete('cascade')->onUpdate('cascade');
            $table->string('kk_nik')->unique();
            $table->enum('kk_status', ['KEPALA KELUARGA', 'ISTRI', 'ANAK']);
            $table->string('kk_nama');
            $table->string('kk_no');
            $table->string('kk_no_dokumen');
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
