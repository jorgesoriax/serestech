<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Inventory;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['image_1','image_2','image_3','image_4','image_5','image_6','image_7'];

    // Uno a uno
    public function specificationLaptop(){
        return $this->hasOne(SpecificationsLaptop::class);
    }

    // Uno a uno inverso
    public function inventory(){
        return $this->belongsTo(Inventory::class);
    }

    public function file(){
        return $this->belongsTo(File::class);
    }

    // Uno a muchos inverso
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
