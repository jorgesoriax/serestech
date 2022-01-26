<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // Uno a uno estándar
    public function profile(){
        return $this->hasOne(Product::class);
    }
}
