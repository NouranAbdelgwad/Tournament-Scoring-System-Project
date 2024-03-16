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
        Schema::create('teams', function (Blueprint $table) {
            $table->id("Team_ID");
            $table->string('Team_name');
            $table->unsignedBigInteger("Tournament_ID")->unique();
            $table->foreign('Tournament_ID')->references('Tournament_ID')->on('tournaments')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger("Event_ID")->unique();
            $table->foreign('Event_ID')->references("Event_ID")->on("events_update")->cascadeOnDelete()->cascadeOnUpdate();
            $table->bigInteger("Team_leader_college_ID")->unique();
            $table->foreign('Team_leader_college_ID')->references("College_ID")->on("college_members")->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('Status', ["accepted", "rejected", "winner"]);
            $table->bigInteger("Score");
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
