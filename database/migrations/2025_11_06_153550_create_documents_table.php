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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type')->nullable(); // PDF, DOCX, etc.
            $table->string('file_path');
            $table->string('file_size')->nullable();
            $table->foreignId('uploaded_by')->nullable()->constrained('users')->onDelete('set null');
            // Use a simple nullable foreign key column to avoid migration order issues.
            // You can add an explicit foreign key constraint in a later migration if needed.
            $table->foreignId('organization_id')->nullable();
            $table->unsignedBigInteger('folder_id')->nullable();
            $table->string('status')->default('Active'); // Active, Archived, Deleted
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
