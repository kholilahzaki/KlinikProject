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
            $table->bigInteger('ktp_id')->unsigned();
            $table->foreign('ktp_id')->references('id')->on('ktps')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('kk_id')->unsigned();
            $table->foreign('kk_id')->references('id')->on('kks')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('bpjs_id')->unsigned();
            $table->foreign('bpjs_id')->references('id')->on('bpjs')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('lc_id')->unsigned();
            $table->foreign('lc_id')->references('id')->on('lcs')->onDelete('cascade')->onUpdate('cascade');
            $table->string('mem_notelp')->unique();
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
