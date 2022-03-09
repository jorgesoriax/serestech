<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $fillable = ['stock'];

    // uno a uno
    public function product(){
        return $this->hasOne(Product::class);
    }
}
