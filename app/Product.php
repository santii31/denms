<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name','price', 'genre','discount','category_id', 'photo1','photo2',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function waists(){
        return $this->belongsToMany(Waist::class);
    }

    public function colors(){
        return $this->belongsToMany(Color::class);
    }
}
