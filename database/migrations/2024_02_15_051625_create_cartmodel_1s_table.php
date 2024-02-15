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
        Schema::create('cartmodel_1s', function (Blueprint $table) {
            $table->id();
            $table->integer('Cartmodel_1_id')->default('0');
            $table->integer('Cartmodel_2_id')->default('0');
            $table->integer('Cartmodel_3_id')->default('0');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartmodel_1s');
    }
};
