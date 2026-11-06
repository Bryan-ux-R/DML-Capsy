<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('product_categories')->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('badge')->nullable();
            $table->string('material')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('hardness')->nullable();
            $table->string('temperature_range')->nullable();
            $table->string('tensile_strength')->nullable();
            $table->string('elongation')->nullable();
            $table->string('standards')->nullable();
            $table->string('min_order')->nullable();
            $table->string('image_url')->nullable();
            $table->json('specifications')->nullable();
            $table->json('variants')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

