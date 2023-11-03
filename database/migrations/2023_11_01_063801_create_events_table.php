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
            $table->string('extra_date')->nullable();
            $table->decimal('days')->nullable();
            $table->string('booking_time')->nullable();
            $table->string('catering')->nullable();
            $table->string('ac')->nullable();
            $table->string('needs')->nullable();
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
