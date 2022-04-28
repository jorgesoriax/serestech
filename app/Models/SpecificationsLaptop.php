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
    /**
     * Relación uno a uno inverso
     */
    public function product(){
        return $this->belongsTo(Product::class);
    }
    /**
     * Función que reemplaza el id como nombre de ruta por el slug
     * 
     * @return string — Columna que contiene el slug
     */
    public function getRouteKeyName(){
        return 'slug';
    }
    /**
     * Función que se encarga de indexar Columnas
     * 
     * @return array — Columnas indexados para comparar con query
     */
    public function toSearchableArray(){
        $array = [
            'id'             => $this->id,
            'equipo_marca'   => $this->equipo_marca,
            'equipo_linea'   => $this->equipo_linea,
            'equipo_modelo'  => $this->equipo_modelo,
            'slug'           => $this->slug,
            'ram_gb'         => $this->ram_gb,
            'discod_gb'      => $this->discod_gb,
            'procesador_ghz' => $this->procesador_ghz,
            'descripcion'    => $this->descripcion
        ];
        
        return $array;
    }
}