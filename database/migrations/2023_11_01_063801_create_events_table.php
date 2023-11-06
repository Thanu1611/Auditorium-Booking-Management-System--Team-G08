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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('auditorium'); 
            $table->unsignedBigInteger('user'); // Define it as an unsigned big integer
            $table->string('nameEvent');
            $table->string('detail_event')->nullable();
            $table->string('booking_date');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('approval_status')->nullable();
            $table->string('payment_status')->nullable();
            $table->foreign('user')->references('id')->on('users');
            $table->foreign('auditorium')->references('id')->on('auditoria');
            $table->decimal('cost',10,2)->nullable();
            $table->string('payment')->nullable();
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
        Schema::dropIfExists('events');
    }
};
