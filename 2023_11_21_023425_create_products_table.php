<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->decimal('price', 8, 2);
        $table->text('description');
        $table->string('image')->default('\images\produk1.jpeg');
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
