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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('city');
            $table->string('student')->default('adult');
            $table->string('gender');
            $table->string('telephone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('note_internal', 255)->nullable();
            $table->string('note_visible', 255)->nullable();
            $table->string('fitness')->default('labour')->nullable();
            $table->boolean('active')->nullable()->default(false);
            $table->integer('wallet_account_status')->nullable();
            $table->string('card_number',16)->nullable();
            $table->string('card_code',3)->nullable();
            $table->boolean('mark_note')->nullable();
            $table->date('dob')->nullable();
            $table->string('role')->default('user');
            $table->rememberToken( );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
