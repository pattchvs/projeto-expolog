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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('driver_id');
            $table->string('weeklyReport');
            $table->string('especiality');
            $table->string('drugs');
            $table->date('lastExam');
            $table->integer('urgency');
            $table->string('hasExhaustion');
            $table->date('exam_date')->nullable();
            $table->integer('workTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
};
