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
        Schema::create('primary_data', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('id_number')->nullable();
            $table->date('exp_identity_date')->default(now());
            $table->date('birth_date')->nullable(now());
            $table->string('marital_status')->nullable();
            $table->date('divorce_date')->nullable(now());
            $table->boolean('has_divorce_reason')->nullable();
            $table->boolean('there_divorce_family')->nullable();
            $table->string('divorce_reason')->nullable();
            $table->boolean('have_custody_deed')->nullable();
            $table->boolean('have_guardianship_deed_over_children')->nullable();
            $table->boolean('have_avisitor_deed_your_children')->nullable();
            $table->integer('number_of_marriages')->nullable();
            $table->string('phone')->nullable();
            $table->string('another_phone')->nullable();
            $table->boolean('have_car')->nullable();
            $table->string('nationality')->nullable();
            $table->string('education_level')->nullable();
            $table->string('general_health_condition')->nullable();
            $table->string('experiences_skills')->nullable();
            $table->boolean('have_desire_join_labor_market')->nullable();
            $table->boolean('have_courses_join_labormarket')->nullable();
            $table->boolean('benefit_psychological_counseling')->nullable();
            $table->boolean('benefits_financial_support')->nullable();
            $table->boolean('judicial_legal_children')->nullable();
            $table->string('name_bank')->nullable();
            $table->string('iban_account_number')->nullable();
            $table->boolean('have_suspended_services')->nullable();            
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
        Schema::dropIfExists('primary_data');
    }
};