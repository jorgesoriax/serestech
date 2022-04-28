<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['sku', 'price', 'price_discount', 'status_usage', 'status_aesthetic', 'warranty_days', 'support', 'delivery', 'file_id', 'category_id', 'inventory_id'];

    /**
     * Relación uno a uno
     */
    public function specificationLaptop(){
        return $this->hasOne(SpecificationsLaptop::class);
    }
    /**
     * Relación uno a uno inverso
     */
    public function inventory(){
        return $this->belongsTo(Inventory::class);
    }
    /**
     * Relación uno a uno inverso
     */
    public function file(){
        return $this->belongsTo(File::class);
    }
    /**
     * Relación uno a mucho inverso
     */
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
