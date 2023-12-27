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
            $table->string('fname', 50);
            $table->string('lname', 50);
            $table->string('username', 50)->unique();
            $table->string('roll', 50)->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('editor',5)->default('0');
            $table->string('image', 255)->default('default.jpg');
            $table->text('bio')->default('A student of Parul');
            $table->rememberToken();
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
