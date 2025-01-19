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
        Schema::create('keritiks', function (Blueprint $table) {
            $table->id();
            $table->foreignid('user_id')-> constrained();
            $table->foreignid('film_id')-> constrained();
            $table->text('Content');
            $table->integer('Point');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keritiks');
    }
};
