<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = ['image_1', 'image_2', 'image_3', 'image_4', 'image_5', 'image_6', 'image_7',];

    /**
     * Uno a uno estándar
     */
    public function profile(){
        return $this->hasOne(Product::class);
    }
}
