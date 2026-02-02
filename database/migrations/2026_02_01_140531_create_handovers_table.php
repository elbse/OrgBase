<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('handovers', function (Blueprint $table) {
            $table->id();
            
            // Foreign keys
            $table->foreignId('organization_id')
                  ->constrained()
                  ->onDelete('cascade');
            
            $table->foreignId('from_user_id')
                  ->constrained('users')
                  ->onDelete('cascade');
            
            $table->foreignId('to_user_id')
                  ->nullable()
                  ->constrained('users')
                  ->onDelete('set null');
            
            $table->string('position');
            $table->string('academic_year');
            $table->enum('status', ['draft', 'in_progress', 'completed'])
                  ->default('draft');
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('handovers');
    }
};