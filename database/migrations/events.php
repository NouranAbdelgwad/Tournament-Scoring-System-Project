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
        Schema::disableForeignKeyConstraints();

        Schema::create('events', function (Blueprint $table) {
            $table->id("Event_ID");
            $table->unsignedBigInteger("Tournament_ID");
            $table->foreign('Tournament_ID')->references('Tournament_ID')->on('tournaments')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('Event_name');
            $table->date('Start_date');
            $table->date('End_date');
            $table->string('Description');
            $table->bigInteger('Max_number_of_teams');
            $table->bigInteger('Max_number_of_individuals');
            $table->enum('Event_type', ["sporting", "academic"]);
            $table->enum('Participation_type', ["teams", "individual"]);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
