<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('type_service_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('mobile_number_work', 10);
            $table->string('phone_number_work');
            $table->text('description');
            $table->time('available_start_time');
            $table->time('available_end_time');
            $table->text('work_address');
            $table->timestamps();


            $table->foreign('type_service_id')
                ->references('id')
                ->on('service_types')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('services');
    }
}
