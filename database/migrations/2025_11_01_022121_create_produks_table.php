<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 10, 2)->nullable();
            $table->integer('stock')->default(0);
            $table->unsignedBigInteger('category_id')->nullable();
            $table->text('description')->nullable();
            $table->text('spesification')->nullable();
            $table->string('slug')->unique();
            $table->integer('viewer')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
