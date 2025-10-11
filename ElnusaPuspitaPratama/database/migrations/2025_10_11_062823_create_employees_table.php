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
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // employee_id (auto increment)
            $table->string('nama', 100);
            $table->text('alamat')->nullable();
            $table->string('position', 50)->nullable();
            $table->enum('tingkatan', ['Junior', 'Senior', 'Manager', 'Director'])->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->date('hire_date')->nullable();
            $table->string('specialization', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
