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
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id("Tournament_ID");
            $table->string('Tournament_name');
            $table->string('Description');
            $table->date('Start_date');
            $table->date('End_date');
            $table->bigInteger('Max_number_of_teams');
            $table->bigInteger('Max_number_of_individuals');
            $table->enum('Status', ["canceled", "ongoing", "scheduled", "completed"]);
            $table->string('Prizes');
            $table->string('Rules_and_regulations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournaments');
    }
};
