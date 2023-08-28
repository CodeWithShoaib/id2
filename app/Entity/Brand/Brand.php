<?php

namespace App\Entity\Brand;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasMedia;
use App\Media;

class Brand extends Model
{
	use HasMedia;
	
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'testimonial';
    protected $guarded=['id'];
	
}