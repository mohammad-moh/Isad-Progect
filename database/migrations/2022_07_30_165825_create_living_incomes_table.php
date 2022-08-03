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
        Schema::create('living_incomes', function (Blueprint $table) {
            $table->id();
            $table->string('support_name')->nullable();
            $table->decimal('amount')->default(0);
            $table->string('payment_method')->nullable();
            $table->decimal('total_income')->default(0);
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
        Schema::dropIfExists('living_incomes');
    }
};