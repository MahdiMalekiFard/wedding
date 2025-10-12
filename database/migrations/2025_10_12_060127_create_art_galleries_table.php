<?php

use App\Enums\BooleanEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('art_galleries', function (Blueprint $table) {
            $table->id();

            // translation: title, description
            $table->string('slug')->unique();
            $table->boolean('published')->default(BooleanEnum::ENABLE->value);
            $table->text('languages')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('art_galleries');
    }
};
