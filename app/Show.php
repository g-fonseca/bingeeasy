<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Show extends Model
{
    protected $fillable = [
    	'name',
    	'photo',
    	'network',
    	'time',
    	'season',
    	'day',
        'active'
    ]; 

    public static $enum_day = [
        "Monday"=>"Monday",
        "Tuesday"=>"Tuesday",
        "Wednesday"=>"Wednesday",
        "Thursday"=>"Thursday",
        "Friday"=>"Friday",
        "Saturday"=>"Saturday",
        "Sunday"=>"Sunday"
    ];

    public static $enum_season = [
        "1"=>"1",
        "2"=>"2",
        "3"=>"3",
        "4"=>"4",
        "5"=>"5",
        "6"=>"6",
        "7"=>"7",
        "8"=>"8",
        "9"=>"9",
        "10"=>"10",
        "11"=>"11",
        "12"=>"12",
        "13"=>"13",
        "14"=>"14",
        "15"=>"15"
    ];

    public static $enum_network = [
        "ABC"=>"ABC",
        "CBS"=>"CBS",
        "TBS"=>"TBS",
        "THE CW"=>"THE CW",
        "NBC"=>"NBC",
        "FOX"=>"FOX",
        "HBO"=>"HBO",
        "HSN"=>"HSN",
        "TNT"=>"TNT",
        "NICKELODEON"=>"NICKELODEON",
        "SHOWTIME"=>"SHOWTIME",
        "USA"=>"USA",
        "MTV"=>"MTV",
        "CNN"=>"CNN",
        "LIFETIME"=>"LIFETIME",
        "DISNEY"=>"DISNEY",
        "CINEMAX"=>"CINEMAX",
        "UNIVISION"=>"UNIVISION",
        "TLC"=>"TLC"
    ];
   
    public static $enum_time = [
        "12pm"=>"12pm",
        "1pm"=>"1pm",
        "2pm"=>"2pm",
        "3pm"=>"3pm",
        "4pm"=>"4pm",
        "5pm"=>"5pm",
        "6pm"=>"6pm",
        "7pm"=>"7pm",
        "8pm"=>"8pm",
        "9pm"=>"9pm",
        "10pm"=>"10pm",
        "11pm"=>"11pm",
        "12am"=>"12am",
        "1am"=>"1am",
        "2am"=>"2am",
        "3am"=>"3am",
        "4am"=>"4am",
        "5am"=>"5am",
        "6am"=>"6am",
        "7am"=>"7am",
        "8am"=>"8am",
        "9am"=>"9am",
        "10am"=>"10am",
        "11am"=>"11am"
    ];
    
}
