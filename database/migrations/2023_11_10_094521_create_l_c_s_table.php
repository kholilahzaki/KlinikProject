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
        Schema::create('l_c_s', function (Blueprint $table) {
            $table->id();
            $table->integer('no_lc')->unsigned();
            $table->enum('lc_jenis', ['L', 'R', 'LR', 'LN', 'PADI']);
            $table->date('lc_tglInput');
            $table->date('lc_tglUpdate');
            $table->text('lc_alasan_update');
            $table->enum('lc_sumber_data', ['GAPLE', 'BAZAR', 'REKOMENDASI']);
            $table->binary('lc_form');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('l_c_s');
    }
};
