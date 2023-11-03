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

        Schema::create('auditoria', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin'); // Define it as an unsigned big integer
            $table->string('nameAudi');
            $table->string('capacity')->nullable();
            $table->string('description')->nullable();
            $table->decimal('cost',10,2);
            $table->string('images')->nullable();
            $table->timestamps();
    
            // Define the foreign key constraint
            $table->foreign('admin')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auditoria');
    }
};
