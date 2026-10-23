<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * akan dieksekusi ketika menjalankan "php artisan migrate" di terminal
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); //untuk membuat kolom id
            //$table->tipeData('namaKolom');
            $table->string('title');
            $table->timestamps(); //untuk membuat kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     * akan dieksekusi ketika menjalankan "php artisan migrate:rollback" di terminal
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
