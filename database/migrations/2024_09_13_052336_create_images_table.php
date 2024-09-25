<?php

use App\Models\Post;
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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('path');
            $table->foreignIdfor(Post::class);
            $table->timestamps();
        });
    }

    /**

     */
    public function down(): void
    {
        Schema::dropIfExits('images');
    }
};
