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
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('age')->nullable();
            $table->bigInteger('cv_id')->nullable();
            $table->text('cv_setting')->nullable();
            $table->bigInteger('portfolio_id')->nullable();
            $table->string('image')->default('noimage.jpg');
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('interest')->nullable();
            $table->string('profession')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linked_in')->nullable();
            $table->string('instagram')->nullable();
            $table->string('github')->nullable();
            $table->string('fiverr')->nullable();
            $table->string('upwork')->nullable();
            $table->string('freelancer')->nullable();
            $table->string('website')->nullable();
            $table->string('youtube')->nullable();
            $table->text('profile_description')->nullable();
            $table->text('skill_description')->nullable();
            $table->text('service_description')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
