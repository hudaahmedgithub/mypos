<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	 use \Dimsav\Translatable\Translatable;

    protected $guarded = ['id'];

    public $translatedAttributes = ['name','description'];
	
	
	protected $appends = ['image_path','profit_percent'];
//profit_percent the win mony

    public function getImagePathAttribute()
    {
        return asset('uploads/product_images/' . $this->image);

    }
	 public function getProfitPercentAttribute()
    {
		 $profit=$this->sale_price - $this->sale_purchase;
		 $profit_percent=$profit*100/$this->purchase_price;
        return number_format($profit_percent,2);//i win mony with %

    }
	
	public function category()
	{
		return $this->belongsTo('App\Category');
	}
	
	public function orders()
	{
		return $this->belongsToMany('App\Order','product_order');
	}
}
