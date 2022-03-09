<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class SpecificationsLaptop extends Model
{
    use HasFactory;
    use Searchable;
    protected $guarded = [
        'sku', 'price', 'price_discount', 'status_usage', 'status_aesthetic', 'warranty_days',
        'support', 'delivery', 'file_id', 'category_id', 'inventory_id', 'stock'
    ];
    // Uno a uno inverso
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function getRouteKeyName(){
        return 'slug';
    }
    public function toSearchableArray(){
        $array = [
            'id'             => $this->id,
            'equipo_marca'   => $this->equipo_marca,
            'equipo_linea'   => $this->equipo_linea,
            'equipo_modelo'  => $this->equipo_modelo,
            'ram_gb'         => $this->ram_gb,
            'discod_gb'      => $this->discod_gb,
            'procesador_ghz' => $this->procesador_ghz,
            'descripcion'    => $this->descripcion
        ];
        return $array;
    }
}