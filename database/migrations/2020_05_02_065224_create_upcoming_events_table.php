<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpcomingEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upcoming_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('event_doc_id');
            $table->integer('event_type_id');
            $table->string('event_name');
            $table->string('event_place');
            $table->text('event_address');
            $table->date('event_start_date');
            $table->date('event_end_date');
            $table->string('event_status')->default('open');
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
        Schema::dropIfExists('upcoming_events');
    }
}
