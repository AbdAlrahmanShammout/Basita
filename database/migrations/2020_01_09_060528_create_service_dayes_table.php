<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceDayesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_dayes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('day_id')->unsigned();
            $table->bigInteger('service_id')->unsigned();
            $table->timestamps();

            $table->foreign('service_id')
                ->references('id')
                ->on('services')
                ->onDelete('cascade');

            $table->foreign('day_id')
                ->references('id')
                ->on('dayes')
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
        Schema::dropIfExists('service_dayes');
    }
}
