<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('clinet_name');
            $table->string('buss_address');
            $table->integer('zipcode');
            $table->bigInteger('client_number');
            $table->string('client_email');
            $table->text('comment');
            $table->string('intersted');
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
        Schema::dropIfExists('member_data');
    }
}
