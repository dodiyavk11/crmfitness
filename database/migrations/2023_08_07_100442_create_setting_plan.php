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
        Schema::create('setting_plans', function (Blueprint $table) {
            $table->id();
            // $table->string('perms_tenure')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('price');
            $table->string('no_entries',255)->nullable();
            $table->string('solarium_min',255)->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting_plan');
    }
};
