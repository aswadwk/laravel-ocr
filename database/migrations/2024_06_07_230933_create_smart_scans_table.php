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
        Schema::create('smart_scans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('file_name')->nullable();
            $table->string('file_path')->nullable();
            $table->longText('response_json')->nullable();
            $table->string('status')->nullable(); // uploaded, extracted, mapped, etc
            $table->timestamp('extracted_at')->nullable();
            $table->timestamp('mapped_at')->nullable();
            $table->string('type')->nullable(); // kk, ktp, sim, npwp, bpjs, etc

            $table->timestamp('approved_at')->nullable();
            $table->uuid('approved_by')
                ->nullable();
            $table->foreign('approved_by')
                ->references('id')->on('users');

            $table->uuid('file_id')
                ->nullable();
            $table->foreign('file_id')
                ->references('id')->on('files');

            $table->timestamp('uploaded_at')->nullable();
            $table->uuid('uploaded_by')
                ->nullable();

            $table->foreign('uploaded_by')
                ->references('id')->on('users');

            $table->uuid('tenant_id')
                ->nullable();

            $table->foreign('tenant_id')
                ->references('id')->on('tenants');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smart_scans');
    }
};
