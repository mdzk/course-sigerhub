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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->unsignedBigInteger('id_videos');
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('comments_id')->nullable();
            $table->foreign('id_videos')->references('id')->on('videos');
            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('comments_id')->references('id')->on('comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
