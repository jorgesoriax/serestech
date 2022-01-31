<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

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
