<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_verification extends Model
{
    protected $fillable = ['user_id','passport','address_proof','id_card'];


    protected $table = 'user_verifications';
    
    public function user(){
    	return $this->belongsTo('App\User', 'id');
    }
}
