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

        Schema::create('members', function (Blueprint $table) {
            $table->id("Member_ID");
            $table->unsignedBigInteger("Team_ID");
            $table->foreign('Team_ID')->references('Team_ID')->on('teams')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('Name');
            $table->string('Email');
            $table->string('Password');
            $table->bigInteger("member_collge_ID")->unique();
            $table->foreign('member_collge_ID')->references('College_ID')->on('college_members')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
