<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class Inventory extends Model
{
    use HasFactory;

    // uno a uno
    public function product(){
        return $this->hasOne(Product::class);
    }
}
