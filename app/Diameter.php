<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diameter extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'delimeter';
    protected $guarded=['delimeter_id'];
}