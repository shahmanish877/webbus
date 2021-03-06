<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    //protected $fillable=['name','reg_num',];
    protected $guarded =[];


    public function user(){
        return $this->belongsTo('App\User');
    }


    public function holiday(){
        return $this->hasMany('App\Holiday');
    }

//    public function seat(){
//        return $this->hasMany('App\Seat');
//    }
    public function userBookedseats(){
        return $this->hasMany('App\UserBookedSeats');
    }
    public function busBookedSeats(){
        return $this->hasMany('App\BusBookedSeats');
    }

    public function cancellation(){
        return $this->hasMany('App\Cancellation');
    }

}
