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
        Schema::create('news', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title');
            $table->string('image_path')->nullable();
            $table->text('content');
            $table->string('image')->nullable();
            $table->timestamp('published_at');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // FK naar users (optioneel)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
