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
        Schema::create('kias', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kk_id')->unsigned();
            $table->foreign('kk_id')->references('id')->on('kks')->onDelete('cascade')->onUpdate('cascade');
            $table->string('kia_tempatlahir');
            $table->date('kia_tglLahir');
            $table->enum('kia_jeniskelamin', ['L', 'P']);
            $table->text('kia_alamat');
            $table->enum('kia_agama', ['ISLAM', 'KRISTEN', 'KATOLIK', 'HINDU', 'BUDDHA', 'KONGHUCU']);
            $table->string('no_akta_lahir');
            $table->binary('kia_fotokia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kias');
    }
};
