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
        Schema::create('profil', function (Blueprint $table) {
            $table->integer('nis');
            $table->string('nama',50);
            $table->string('ttl',100);
            $table->string('sekolah',50);
            $table->text('alamat');
            // $table->enum('jk',['Laki-laki','Perempuan']);
            $table->text('foto');
            $table->text('about');
            $table->primary('nis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil');
    }
};
