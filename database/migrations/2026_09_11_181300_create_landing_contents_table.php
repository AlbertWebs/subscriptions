<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('landing_contents', function (Blueprint $table) {
            $table->id();
            $table->string('token')->unique();
            $table->string('title');
            $table->text('description');
            $table->string('image_path');
            $table->timestamps();
        });

        DB::table('landing_contents')->insert([
            'token' => 'k7m2x9qp4w8n',
            'title' => 'Subscribe for FREE to our #1 issue',
            'description' => 'By subscribing, you gain access to EXCLUSIVE content; articles, opinion pieces, latest insights, cutting-edge information from seasoned industry experts and much more. You will also be informed about crucial industry events that are poised to shape the world of pharmaceuticals and biotechnology. Join our community today!',
            'image_path' => 'subscribers/img/issue800.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('landing_contents');
    }
};
