<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration.
     */
    public function up()
{
    Schema::create('authors', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->text('bio')->nullable();
        $table->timestamps();
    });
}


    /**
     * Balikkan migration (hapus tabel).
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
