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
        Schema::table('posts', function (Blueprint $table) {
            // 1. aggiungendo la colonna
            $table->unsignedBigInteger('category_id')->nullable()->after('id');
            // 2. definendo il vincolo di relazione tra le colonne delle tabelle
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');

            // alternativa ai due metodi di sopra
            // $table->foreignId('category_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // 2. rimuovere il vincolo
            $table->dropForeign('posts_category_id_foreign'); // nome del vincolo
            // $table->dropForeign(['category_id']); // nome del vincolo

            // 1. rimuovere la colonna category_id
            $table->dropColumn('category_id');
        });
    }
};
