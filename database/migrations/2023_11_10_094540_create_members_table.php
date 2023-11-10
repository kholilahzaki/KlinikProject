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
            $table->foreign('no_nik')->references(columns : 'id')->on(table : 'k_t_p_s')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('no_kk');
            $table->foreign('no_kk')->references(columns : 'id')->on(table : 'k_k_s')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('no_bpjs');
            $table->foreign('no_bpjs')->references(columns : 'id')->on(table : 'b_p_j_s')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('no_lc');
            $table->foreign('no_lc')->references(columns : 'id')->on(table : 'l_c_s')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('mem_telp');
            $table->enum('mem_disabilitas', ['YA', 'TIDAK']);
            $table->text('mem_tps');
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
