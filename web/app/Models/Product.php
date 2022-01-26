<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Inventory;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    // Uno a uno
    public function specification(){
        return $this->hasOne(SpecificationsLaptop::class);
    }

    // Uno a uno inverso
    public function inventory(){
        return $this->belongsTo(Inventory::class);
    }

    public function image(){
        return $this->belongsTo(Image::class);
    }

    // Uno a muchos inverso
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
