<?php

namespace App\Entity\Coupon;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
	
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'packages';
	

	


    public function products()
    {
        return $this->belongsToMany('App\Entity\Product\Product', 'coupon_products')
                    ->withPivot('exclude')
                    ->wherePivot('exclude', false);
    }

    public function excludeProducts()
    {
        return $this->belongsToMany('App\Entity\Product\Product', 'coupon_products')
                    ->withPivot('exclude')
                    ->wherePivot('exclude', true);
    }


    public function categories()
    {
        return $this->belongsToMany('App\Entity\Category\Category', 'coupon_categories')
                    ->withPivot('exclude')
                    ->wherePivot('exclude', false);
    }

    public function excludeCategories()
    {
        return $this->belongsToMany('App\Entity\Category\Category', 'coupon_categories')
                    ->withPivot('exclude')
                    ->wherePivot('exclude', true);
    }
	
}