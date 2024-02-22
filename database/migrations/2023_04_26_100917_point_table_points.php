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
        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->time("mentre");
            $table->time("msortie");
            $table->string("mabsence");
            $table->time("sentre");
            $table->time("ssortie");
            $table->string("sabsence");
            $table->string("totale");
            $table->string("supp");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('points');
    }
};
