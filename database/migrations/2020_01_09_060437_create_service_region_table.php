<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_region', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('service_id')->unsigned();
            $table->bigInteger('region_id')->unsigned();
            $table->timestamps();

            $table->foreign('region_id')
                ->references('id')
                ->on('cities')
                ->onDelete('cascade');

            $table->foreign('service_id')
                ->references('id')
                ->on('services')
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
        Schema::dropIfExists('service_region');
    }
}
