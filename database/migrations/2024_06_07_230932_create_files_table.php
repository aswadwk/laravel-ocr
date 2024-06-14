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
        Schema::create('files', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('path');
            $table->string('type'); // image, video, document, audio
            $table->string('extension')->nullable();
            $table->string('size')->nullable();
            $table->string('status', 60)->nullable();

            $table->uuid('created_by')
                ->nullable();
            $table->foreign('created_by')
                ->references('id')->on('users');

            $table->uuid('tenant_id')
                ->nullable();
            $table->foreign('tenant_id')
                ->references('id')->on('tenants');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
