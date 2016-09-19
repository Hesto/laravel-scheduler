<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarRestrictionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_restrictions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('calendar_id')->unsgined();
            $table->string('name');
            $table->timestamp('start_date');
            $table->timestamp('start_end');
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
        Schema::drop('calendar_restrictions');
    }
}
