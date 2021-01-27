<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorPresencesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('instructor_presences', function (Blueprint $table) {
            $table->unsignedBigInteger('instructor_id');
            $table->unsignedBigInteger('class_schedule_id');
            $table->boolean('present')->default(false);
            $table->foreign('instructor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('class_schedule_id')->references('id')->on('class_schedules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('instructor_presences');
    }
}
