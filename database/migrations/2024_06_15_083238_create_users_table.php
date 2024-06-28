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
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('title')->nullable();
            $table->string('address')->nullable();
            $table->string('terms')->nullable();
            $table->string('country_code')->nullable();
            $table->string('organization')->nullable();
            $table->string('phone')->nullable();
            $table->text('areas_of_interest')->nullable();
            $table->string('Job_function')->nullable();
            $table->string('other_Job_function')->nullable();
            $table->string('other_areas_of_interest')->nullable();
            $table->string('subscription_options')->nullable();
            $table->string('subscription_status')->nullable();
            $table->text('country')->nullable();
            $table->string('state')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->tinyInteger('type')->default(0);
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
