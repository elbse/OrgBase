<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained()->onDelete('cascade');
            $table->foreignId('uploaded_by')->constrained('users');
            
            $table->string('category'); // constitution, budget, etc.
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('file_path');
            $table->unsignedBigInteger('file_size'); // in bytes
            $table->string('mime_type');
            $table->string('academic_year');
            
            $table->timestamps();
            
            // Indexes for faster queries
            $table->index(['organization_id', 'category']);
            $table->index('academic_year');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};