<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Country;

class City extends Model{
    
  protected $fillabel='cities';    
  protected $guarded = ['id'];
  public function state()
    {
        return $this->belongsTo(State::class);
    }
        
        
        
  

  
}
