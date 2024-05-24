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
        Schema::create('houses', function (Blueprint $table) {
            $table->id(); // colonna id primary key unsigned bigint autoincrement
            $table->string('reference', 12);
            $table->string('address', 100);
            $table->string('postal_code', 10);
            $table->string('city', 50);
            $table->string('state', 50);
            $table->unsignedSmallInteger('square_meters');
            $table->tinyInteger('rooms')->unsigned();
            $table->tinyInteger('bathrooms')->unsigned();
            $table->string('type', 50);
            $table->text('description')->nullable();
            $table->float('price', 10, 2);
            $table->boolean('is_available')->default(true);
            $table->timestamps(); //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
