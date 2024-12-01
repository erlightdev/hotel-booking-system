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
        Schema::create('system_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('model', 100);
            $table->integer('model_id');
            $table->enum('action', ["create","update","delete"]);
            $table->text('description');
            $table->enum('user_role', ["guest","admin","staff"]);
            $table->softDeletes();

            // Correct way to create indexes
            $table->index('model', 'system_log_model_index');
            $table->index('user_id', 'system_log_user_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_logs');
    }
};
