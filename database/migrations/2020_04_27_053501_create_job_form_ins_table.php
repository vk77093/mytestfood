<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobFormInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_form_ins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('position');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->bigInteger('mobileNum');
            $table->text('address');
            $table->string('city');
            $table->string('country');
            $table->string('experience');
            $table->string('currentEmp');
            $table->string('currentDeg');
            $table->text('keySkills');
            $table->integer('resume_doc_id');
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
        Schema::dropIfExists('job_forms');
    }
}
