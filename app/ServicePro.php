<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicePro extends Model
{
    //
    protected $fillable = ['s_name','logo','email','p_name','qualification','description','min_price','tool','address','city','state','phone'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
