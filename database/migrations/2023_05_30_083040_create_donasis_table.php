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
        Schema::create('donasis', function (Blueprint $table) {
            $table->id();
            $table->integer('komunitas_id')->nullable();
            $table->string('judul');
            $table->string('email');
            $table->text('keterangan');
            $table->integer('target');
            $table->integer('terkumpul')->default(0);
            $table->string('foto');
            $table->date('tutup');
            $table->string('status')->default('Belum Terkonfirmasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donasis');
    }
};
