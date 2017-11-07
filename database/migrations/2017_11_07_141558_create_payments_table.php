<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->integer('student_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->integer('instructor_id')->unsigned();
            $table->decimal('amount', 18, 2);
            $table->date('date');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('student_id')
                ->references('id')->on('students')
                ->onDelete('cascade');
            $table->foreign('course_id')
                ->references('id')->on('courses')
                ->onDelete('cascade');
            $table->foreign('instructor_id')
                ->references('id')->on('instructors')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
