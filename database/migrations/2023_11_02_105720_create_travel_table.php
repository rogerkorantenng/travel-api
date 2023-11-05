<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    #create migratiions for id, is_public, slug, name, description, number_of_days, timestamps
    public function up(): void
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->uuid(column:'id')->primary();
            $table->boolean(column:'is_public')->default(value:false);
            $table->string(column:'slug')->unique();
            $table->string(column:'name');
            $table->text(column:'description');
            $table->unsignedinteger(column:'number_of_days');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel');
    }
};
