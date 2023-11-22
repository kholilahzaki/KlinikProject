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
        Schema::create('ktps', function (Blueprint $table) {
            $table->id();
            $table->string('kk_nik')->unique();
            $table->string('kk_nama');
            $table->string('ktp_tempatlahir');
            $table->date('ktp_tglLahir');
            $table->enum('ktp_jeniskelamin', ['L', 'P']);
            $table->text('ktp_alamat');
            $table->enum('ktp_agama', ['ISLAM', 'KRISTEN', 'KATOLIK', 'HINDU', 'BUDDHA', 'KONGHUCU']);
            $table->enum('ktp_statuskawin', ['LAJANG', 'KAWIN', 'CERAI HIDUP', 'CERAI MATI']);
            $table->string('ktp_pekerjaan');
            $table->enum('ktp_kewarganegaraan', ['WNI', 'WNA']);
            $table->binary('ktp_fotoktp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ktps');
    }
};
