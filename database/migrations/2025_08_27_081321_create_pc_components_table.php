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
        Schema::create('pc_components', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pc_id')->constrained('products')->onDelete('cascade'); // PC
            $table->foreignId('component_id')->constrained('products')->onDelete('cascade'); // Linh kiện
            $table->integer('quantity')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pc_components');
    }
};
