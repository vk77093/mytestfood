<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYourBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('your_brands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('label_id');
            $table->string('client_name');
            $table->string('client_email');
            $table->bigInteger('client_number');
            $table->integer('country_id');
            $table->integer('state');
            $table->integer('city');
             $table->string('client_branch');
            $table->text('client_address');
            $table->string('product_segment');
            $table->string('qty_req');
            $table->string('per_size');
            $table->text('spe_note');
            $table->date('exp_date');

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
        Schema::dropIfExists('your_brands');
    }
}
