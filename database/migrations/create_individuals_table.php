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

        Schema::create('individuals', function (Blueprint $table) {
            $table->id("Individual_ID");
            $table->string('Name');
            $table->string('Email');
            $table->string('Password');
            $table->unsignedBigInteger("Tournament_ID");
            $table->foreign('Tournament_ID')->references('Tournament_ID')->on('tournaments')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger("Event_ID");
            $table->foreign('Event_ID')->references("Event_ID")->on("events")->cascadeOnDelete()->cascadeOnUpdate();
            $table->bigInteger("college_ID")->unique();
            $table->foreign('College_ID')->references('College_ID')->on('college_members')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('individuals');
    }
};
