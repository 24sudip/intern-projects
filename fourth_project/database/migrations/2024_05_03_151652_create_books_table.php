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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('format');
            $table->integer('subject_id');
            $table->string('title');
            $table->string('author');
            $table->string('publication_date');
            $table->float('price',8,2);
            $table->string('rack_number');
            $table->integer('number_of_copy');
            $table->string('book_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
