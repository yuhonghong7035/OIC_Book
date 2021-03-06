<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class RETURN_BOOK extends Model
{
    protected $table = 'RETURN_BOOK';

    public function returnProduct(){
      return $this->hasMany('App\PRODUCT', 'product_id', 'product_id');
    }
    public function returnVendor(){
      return $this->hasMany('App\VENDOR', 'vendor_id', 'vendor_id');
    }
}
