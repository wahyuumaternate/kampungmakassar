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
        Schema::create('pengantar_s_k_c_k_s', function (Blueprint $table) {
            $table->id();
            $table->string('fc_kk');
            $table->string('fc_ktp');
            $table->string('pengantar_rt_rw');
            $table->unsignedBigInteger('masyarakat_id')->default(1);
            $table->timestamps();
            $table->foreign('masyarakat_id')->references('id')->on('masyarakats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengantar_s_k_c_k_s');
    }
};
