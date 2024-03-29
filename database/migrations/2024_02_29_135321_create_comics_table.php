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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title',64);
            $table->string('description',2000)->nullable();
            $table->string('thumb',1024)->nullable();
            $table->decimal('price',4,2)->nullable();
            $table->string('series');
            $table->date('sale_date')->nullable();
            $table->string('type');
            $table->string('artist')->nullable();
            $table->string('writers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
