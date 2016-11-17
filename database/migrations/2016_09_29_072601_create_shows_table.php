<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
           
            $table->increments('id');
            $table->string('name');
            $table->string('photo')->nullable();

            $table->enum('time', [
                "12pm",
                "1pm",
                "2pm",
                "3pm",
                "4pm",
                "5pm",
                "6pm",
                "7pm",
                "8pm",
                "9pm",
                "10pm",
                "11pm",
                "12am",
                "1am",
                "2am",
                "3am",
                "4am",
                "5am",
                "6am",
                "7am",
                "8am",
                "9am",
                "10am",
                "11am"
            ])->nullable();

            $table->enum('network', [
                "ABC",
                "CBS",
                "TBS",
                "THE CW",
                "NBC",
                "FOX",
                "HBO",
                "HSN",
                "TNT",
                "NICKELODEON",
                "SHOWTIME",
                "USA",
                "MTV",
                "CNN",
                "LIFETIME",
                "DISNEY",
                "CINEMAX",
                "UNIVISION",
                "TLC"
            ])->nullable();
            
            $table->enum('season', [
                "1",
                "2",
                "3",
                "4",
                "5",
                "6",
                "7",
                "8",
                "9",
                "10",
                "11",
                "12",
                "13",
                "14",
                "15"
            ])->nullable();

            $table->enum('day', [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday"
            ])->nullable();

            $table->tinyInteger('active')->nullable()->default(1);
            
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
        Schema::dropIfExists('shows');
    }
}
