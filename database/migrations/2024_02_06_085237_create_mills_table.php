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
        Schema::create('mills', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);
            $table->string('region');
            $table->string('country');
            $table->text('picture')->nullable();
            $table->boolean('watermill');
            $table->mediumInteger('size')->unsigned();
            $table->tinyInteger('mills_no')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mills');
    }
};
