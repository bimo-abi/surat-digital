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
        Schema::create('detail_penggunas', function (Blueprint $table) {
            $table->foreignId('user_id')->primary()->constrained('users')->onDelete('cascade');
            $table->string('nomor_induk', 50)->unique();
            $table->foreignId('prodi_id')->nullable()->constrained('prodis')->onDelete('set null');
            $table->foreignId('golongan_id')->nullable()->constrained('golongans')->onDelete('set null');
            $table->string('nomor_telepon', 20)->nullable();
            $table->text('alamat')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_penggunas');
    }
};
