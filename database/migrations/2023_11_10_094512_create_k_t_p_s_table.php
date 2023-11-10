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
        Schema::create('k_t_p_s', function (Blueprint $table) {
            $table->id();
            $table->integer('no_nik')->unsigned();
            $table->string('ktp_nama');
            $table->date('ktp_tglLahir');
            $table->enum('ktp_jenisKelamin', ['L', 'P']);
            $table->string('ktp_alamat');
            $table->enum('ktp_agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu', 'Lainnya']);
            $table->string('ktp_statusPerkawinan');
            $table->string('ktp_pekerjaan');
            $table->enum('ktp_kewarganegaraan', ['WNI', 'WNA']);
            $table->binary('ktp_foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('k_t_p_s');
    }
};
