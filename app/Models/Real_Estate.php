<?php

namespace App\Models;

use Illuminate\Database\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Real_Estate extends Model
{
    use HasFactory, Notifiable;

    protected $table = "real_estates";
    protected $fillable =['id','phone','city_id','town_id',
        'type','for_sale','for_rent','duration_of_rent','price',
        'main_photo','Secondary_photos','area','number_of_rooms',
        'number_of_bathrooms','furnished','floor_number','number_of_floors',
        'phone_subscription','net_subscription','dimension_of_the_city',
        'dimension_of_the_school','dimension_of_the_market','owner_description',
        'sold_rented','owner_id','created_at','updated_at'];
    protected $hidden = [];


    public  function  get_town(){
        return $this-> belongsTo('App\Models\Town','town_id','id');
//////////////////////تعود الى///////////////////////
    }
    public  function  get_city(){
        return $this-> belongsTo('App\Models\Citie','city_id','id');
//////////////////////تعود الى///////////////////////
    }


}
