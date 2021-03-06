<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "products";
    public function brand()
    {
        return $this->hasOne('App\Brand', 'id', 'id');
    }
    public function color()
    {
        return $this->hasOne('App\Color', 'id', 'id');
    }
    public function display()
    {
        return $this->hasOne('App\Display', 'id', 'id');
    }
    public function image()
    {
        return $this->hasMany('App\Image', 'product', 'id');
    }
    public function operating_system()
    {
        return $this->hasOne('App\Operating_System');
    }
    public function storage()
    {
        return $this->hasOne('App\StorageM', 'id', 'id');
    }
    public function orderdetail()
    {
        return $this->belongsToMany('App\Orderdetail');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }


}
