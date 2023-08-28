<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Country;

class State extends Model{
    
	protected $guarded = ['id'];
	protected $table='states';
    public function states()
    {
       return $this->hasMany(State::class);
    }
        
        
        
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

  
}
