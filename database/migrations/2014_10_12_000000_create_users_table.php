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
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->enum('role', ['superadmin','admin','customer']);
            $table->string('password');
            $table->string('faculty')->nullable();
            $table->string('department')->nullable();
            $table->string('designation')->nullable();
            $table->string('nic')->nullable();
            $table->string('organization')->nullable();
            $table->string('external_address')->nullable();
            $table->string('purpose')->nullable();
            $table->enum('usertype',['internal','external']);
            $table->string('image');
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_verified')->default(0);
        });
        DB::table('users')->insert([
            'firstname'=> 'dummy',
            'lastname'=> 'dummy',
            'email'=> 'dummy@gmail.com',
            'mobile'=> 0712345670,
            'address'=> 'dummy',
            'password'=> 'dummy123',
            'role'=>'admin',
            'faculty'=> 'dummy',
            'department'=> 'dummy',
            'designation'=> 'dummy',
            'nic'=> '',
            'organization'=> '',
            'external_address'=> '',
            'purpose'=> '',
            'image'=> '',
            'usertype'=> 'internal',
            'is_verified'=>1
        ]);
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
