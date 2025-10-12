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
        Schema::create('projects', function (Blueprint $table) {
            $table->id(); // project_id (auto increment)
            $table->string('project_name', 100);
            
            // Foreign Key ke tabel clients
            $table->foreignId('client_id')
                  ->nullable()
                  ->constrained('clients')
                  ->onDelete('set null'); // Kalau client dihapus, project tetap ada tapi client_id jadi NULL
            
            // Foreign Key ke tabel employees (project manager)
            $table->foreignId('project_manager_id')
                  ->nullable()
                  ->constrained('employees')
                  ->onDelete('set null'); // Kalau employee dihapus, project tetap ada tapi project_manager_id jadi NULL
            
            $table->date('start_date')->nullable();
            $table->date('deadline')->nullable();
            
            // UBAH INI: dari decimal(12, 2) jadi decimal(20, 2)
            $table->decimal('budget', 20, 2)->nullable(); // ✅ Sekarang bisa sampai 99 triliun!
            
            $table->enum('status', ['Planning', 'In Progress', 'Delayed', 'Completed'])->default('Planning');
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
