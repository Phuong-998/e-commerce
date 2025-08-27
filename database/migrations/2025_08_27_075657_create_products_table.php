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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sku')->unique();
            $table->decimal('price', 15, 2)->default(0);
            $table->integer('quantity')->default(0);
            $table->text('description')->nullable();
            $table->string('warranty')->nullable();
            $table->tinyInteger('status')->default(1); // 1=active, 0=inactive
            $table->enum('type', ['pc', 'component', 'accessory'])->default('component');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
