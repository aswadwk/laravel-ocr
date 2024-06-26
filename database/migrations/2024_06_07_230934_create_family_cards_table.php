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
        Schema::create('family_cards', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('number')->nullable();
            $table->string('contract_number')->nullable();
            $table->string('kk_no_gros')->nullable();
            $table->string('kk_no')->nullable();
            $table->string('cabang')->nullable();
            $table->string('name')->nullable();
            $table->string('nik_gros')->nullable();
            $table->string('nik')->nullable();
            $table->string('gender')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('religion')->nullable();
            $table->string('education')->nullable();
            $table->string('profession')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('status_on_family_card')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_on_family_card')->nullable();
            $table->string('address')->nullable();
            $table->string('rt_rw')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('province')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('file_name')->nullable();
            $table->string('file_path')->nullable();

            $table->string('status')->nullable();  // approved, etc
            $table->timestamp('approved_at')->nullable();

            $table->uuid('approved_by')
                ->nullable();
            $table->foreign('approved_by')
                ->references('id')->on('users');

            $table->uuid('smart_scan_id')->nullable();
            $table->foreign('smart_scan_id')
                ->references('id')->on('smart_scans');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_cards');
    }
};
