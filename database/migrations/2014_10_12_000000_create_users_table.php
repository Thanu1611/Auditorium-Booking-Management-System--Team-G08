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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->enum('role', ['admin', 'internal', 'external']);
            $table->string('password');
            $table->string('faculty')->nullable();
            $table->string('department')->nullable();
            $table->string('designation')->nullable();
            $table->string('nic')->nullable();
            $table->string('organization')->nullable();
            $table->string('external_address')->nullable();
            $table->string('purpose')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
