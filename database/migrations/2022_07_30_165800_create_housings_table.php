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
        Schema::create('housings', function (Blueprint $table) {
            $table->id();
            $table->string('housing_type')->nullable();
            $table->boolean('live_with_your_relatives_in_house_or_apartment')->nullable();
            $table->string('housing_ownership')->nullable();
            $table->string('rent_payment_method')->nullable();
            $table->integer('Value_rent')->nullable()->default(0);
            $table->date('rent_expiry_date')->nullable()->default(now());
            $table->string('house_owner_name')->nullable();
            $table->string('city_you_live_in')->nullable();
            $table->string('neighborhood_you_live_in')->nullable();
            $table->boolean('you_eligible_for_housing_support_in_program_Ministry_of_Housing')->nullable();
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
        Schema::dropIfExists('housings');
    }
};