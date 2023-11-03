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
        Schema::create('facilities', function (Blueprint $table) {
            $table->string('nameFacility');
            $table->string('detail_Facility')->nullable();
            $table->decimal('cost',10,2);
            $table->unsignedBigInteger('auditorium');
            $table->foreign('auditorium')->references('id')->on('auditoria');
            $table->primary(['nameFacility', 'auditorium']);
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facilities');
    }
};
