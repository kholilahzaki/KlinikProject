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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('no_nik');
            $table->foreign('no_nik')->references('id')->on('ktps')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('no_kk');
            $table->foreign('no_kk')->references('id')->on('kks')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('no_bpjs');
            $table->foreign('no_bpjs')->references('id')->on('bpjs')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('no_lc');
            $table->foreign('no_lc')->references('id')->on('lcs')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('mem_notelp');
            $table->enum('mem_disabilitas', ['YA', 'TIDAK']);
            $table->text('mem_lokasitps');
            $table->enum('mem_status', ['SAKSI', 'SIMPATISAN']);
            $table->string('mem_koordinator');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
