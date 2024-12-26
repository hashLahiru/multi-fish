<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('cat_name');
            $table->unsignedBigInteger('super_category_id');
            $table->text('img_url')->nullable();
            $table->enum('status', ['active', 'pause', 'delete'])->default('active');
            $table->timestamps();

            $table->foreign('super_category_id')->references('id')->on('product_super_categories')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_categories');
    }
};
