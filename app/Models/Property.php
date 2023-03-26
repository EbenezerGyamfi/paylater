<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function setPicturesAttribute($pictures)
{
    if (is_array($pictures)) {
        $this->attributes['pictures'] = json_encode($pictures);
    }
}

public function getPicturesAttribute($pictures)
{
    return json_decode($pictures, true);
}

   public function getAmenitiesAttribute($value)
    {
        return explode(',', $value);
    }

    public function setAmenitiesAttribute($value)
    {
        $this->attributes['amenities'] = implode(',', $value);
    }

       public function scopeFilter($query)
    {
        $search = request('search');
   if($search){
         $query
         ->where('title','like','%'. $search .'%')
         ->orwhere('price',$search);
   }
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }
}



