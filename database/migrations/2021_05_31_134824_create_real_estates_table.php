<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_estates', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('phone');
            $table->integer('city_id');
            $table->integer('town_id');
            $table->integer('type');
            $table->boolean('for_sale');//true for sale
            $table->boolean('for_rent');//true for rent
            $table->integer('duration_of_rent')->nullable();// in month
            $table->integer('price');
            $table->string('main_photo');
            $table->json('Secondary_photos');
            $table->integer('area'); // in mater
            $table->integer('number_of_rooms')->nullable();
            $table->integer('number_of_bathrooms')->nullable();
            $table->boolean('furnished')->nullable();
            $table->integer('floor_number');
            $table->integer('number_of_floors');
            $table->boolean('phone_subscription');
            $table->boolean('net_subscription');
            $table->integer('dimension_of_the_city');// in km
            $table->integer('dimension_of_the_school')->nullable();// in km
            $table->integer('dimension_of_the_market')->nullable();//in km
            $table->string('owner_description');
            $table->boolean('sold_rented');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->integer('owner_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('real_estates');
    }
}
