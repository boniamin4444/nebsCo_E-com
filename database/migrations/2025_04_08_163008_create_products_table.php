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
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('product_code')->unique();
            $table->string('tags');
            $table->decimal('purchase_price', 8, 2);
            $table->decimal('regular_price', 8, 2);
            $table->decimal('discount_price', 8, 2)->default(0.00);
            $table->enum('discount_type', ['fixed','percentage']);
            $table->integer('stock_qty')->nullable()->default(0);
            $table->string('product_thumbnail')->nullable();
            $table->string('short_description');
            $table->text('long_description');
            $table->json('attributes');
            $table->json('sizes')->nullable(); 
            $table->json('colors')->nullable(); 
            $table->boolean('is_varient')->default(true);
            $table->boolean('is_deals')->default(true);
            $table->enum('status', ['active','inactive','draft']);
            $table->boolean('is_approved')->default(true);
            $table->boolean('is_digital')->default(true);
            $table->decimal('tax', 10, 2)->nullable()->default(0.00);
            $table->dateTime('expiration_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
