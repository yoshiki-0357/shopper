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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('shop_name', 50);
            $table->string('color', 50);
            $table->string('pattern', 50)->nullable();
            $table->string('text', 50)->nullable();
            $table->string('created_at');
            $table->timestamp('created_dt')->nullable();
            $table->string('updated_at');
            $table->timestamp('updated_dt')->nullable();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
