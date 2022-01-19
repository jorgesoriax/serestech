<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class SpecificationsLaptop extends Model
{
    use HasFactory;

    // Uno a uno inverso
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
