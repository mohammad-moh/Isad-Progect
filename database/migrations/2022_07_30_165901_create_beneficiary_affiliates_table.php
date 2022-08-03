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
        Schema::create('beneficiary_affiliates', function (Blueprint $table) {
            $table->id();
            $table->string('affiliate_name');
            $table->integer('identification_number');
            $table->date('date_of_birth')->default(today());
            $table->string('gender')->nullable();
            $table->string('relative_relation')->nullable();
            $table->string('general_health_condition')->nullable();
            $table->string('education_type')->nullable();
            $table->boolean('have_desire_training_course_join_labor_market')->nullable();
            $table->decimal('monthly_salary')->nullable()->default(0);
            $table->text('skills_experiences');
            
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
        Schema::dropIfExists('beneficiary_affiliates');
    }
};