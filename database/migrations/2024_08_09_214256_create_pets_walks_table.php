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
        if (!Schema::hasTable('pets_walks')) {
            Schema::create('pets_walks', function (Blueprint $table) {
                $table->id();
                $table->foreignId('pet_id')->references('id')->on('pets');
                $table->string('location');
                $table->date('walk_date');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets_walks');
    }
};
