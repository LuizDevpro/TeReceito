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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 150);
            $table->string('email', 150)->unique();
            $table->string('password', 255)->nullable();
            $table->string('google_id', 120)->nullable()->unique();
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->boolean('active')->default(true);
            $table->string('profile_picture', 255)->nullable();
            $table->dateTime('blocked_until',)->nullable();
            $table->string('code', 64)->nullable()->default(null);
            $table->dateTime('code_expiration')->nullable()->default(null);
            $table->dateTime('last_login')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
