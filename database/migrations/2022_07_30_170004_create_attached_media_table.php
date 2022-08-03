<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attached_media', function (Blueprint $table) {
            $table->id();
            $table->string('national_id_residency_copy_passport')->nullable();
            $table->string('family_record_family_card)')->nullable();
            $table->string('picture_from_absher')->nullable();
            $table->string('proof_of_social_status')->nullable();
            $table->string('official_documents')->nullable();
            $table->string('proof_of_residence')->nullable();
            $table->string('affiliate_identity')->nullable();
            $table->string('medical_report')->nullable();
            $table->string('proof_of_financial_status')->nullable();
            $table->string('others')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attached_media');
    }
};