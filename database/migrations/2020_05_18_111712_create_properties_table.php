<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
//            $table->bigInteger('user_id')->unsigned()->index();
//            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->integer('user_id');
            $table->integer('location_id');
            $table->longText('property_description');
            $table->string('property_usage');
            $table->string('property_name');
//            $table->string('property_location');
            $table->boolean('property_promotion')->default(false);
            $table->string('property_id')->unique();
            $table->string('property_main_image_url');
            $table->string('property_category')->nullable();
            $table->string('property_type')->nullable();
            $table->bigInteger('property_number_of_rooms');
            $table->float('property_price');
            $table->boolean('property_sold_status')->default(false);
            $table->string('property_size')->nullable();
            $table->date('property_date_of_construction')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
