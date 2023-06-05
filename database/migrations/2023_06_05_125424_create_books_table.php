<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('author');
            $table->string('registration_number');
            $table->enum('status', ['Emprestado', 'Disponível']);
            $table->enum('genre', ['Ficção', 'Romance', 'Fantasia', 'Aventura', 'Terror', 'Suspense', 'Drama', 'Autoajuda', 'Biografia', 'Infantil', 'Outro']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
