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
        Schema::create('admins', function (Blueprint $table) {
            $table->id("Admin_ID");
            $table->string('Admin_name');
            $table->string('Admin_email');
            $table->string('Admin_password');
            $table->bigInteger("College_ID")->unique();
            $table->foreign('College_ID')->references("College_ID")->on("college_members")->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger("Event_ID");
            $table->foreign("Event_ID")->references("Event_ID")->on("events")->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
