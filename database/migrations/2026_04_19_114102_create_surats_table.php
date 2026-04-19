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
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemohon_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('jenis_surat_id')->constrained('jenis_surats')->onDelete('cascade');
            $table->string('nomor_surat', 100)->unique()->nullable();
            $table->text('keperluan');
            $table->string('bukti_pendukung')->nullable();
            $table->string('berkas_pdf')->nullable();
            $table->enum('status', ['tertunda', 'diproses', 'disetujui', 'ditolak'])->default('tertunda');
            $table->text('catatan_penolakan')->nullable();
            $table->foreignId('diverifikasi_oleh')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamp('diverifikasi_pada')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surats');
    }
};
