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
        Schema::create('tours', function (Blueprint $table) {
            $table->uuid(column:'id')->primary();
            $table->foreignUuid(column:'travel_id')->constrained(table:'travel');
            $table->string(column:'name');
            $table->date(column:'starting_date');
            $table->date(column:'ending_date');
            $table->integer(column:'price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
