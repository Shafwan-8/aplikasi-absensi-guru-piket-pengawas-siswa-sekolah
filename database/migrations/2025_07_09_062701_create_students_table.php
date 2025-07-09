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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->required();
            $table->integer('nim')->required();
            $table->string('name')->required();
            $table->enum('gender', ['L', 'P'])->required(); 
            $table->longText('address')->required();
            $table->string('phone_number')->required();
            $table->string('email')->required();

            $table->foreign('parent_id')->references('id')->on('parent')->onDelete('cascade')->required();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
