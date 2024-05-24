<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('admin_id')->nullable();
            $table->string('title')->nullable();
            $table->double('mrp')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('qty')->nullable();
            $table->string('pkt_size')->nullable();
            $table->string('weight')->nullable();

            $table->double('box_price')->nullable();
            $table->double('distributer_price')->nullable();
            $table->foreignId('product_type_id')->nullable();
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
