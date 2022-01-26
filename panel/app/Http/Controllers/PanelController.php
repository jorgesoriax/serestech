<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\SpecificationsLaptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class PanelController extends Controller
{
    public function index(){
        $specsLaptop = SpecificationsLaptop::paginate();

        return view('panel', compact('specsLaptop'));
    }

    public function create(){
        return view('create');
    }

    public function show(SpecificationsLaptop $specLaptop){
        return view('show', compact('specLaptop'));
    }
    
    public function edit(SpecificationsLaptop $specLaptop){
        return view('edit', compact('specLaptop'));
    }

    public function store(Request $request){
        $request->validate([
            'image_1' => 'image',
            'image_2' => 'image',
            'image_3' => 'image',
            'image_4' => 'image',
            'image_5' => 'image',
            'image_6' => 'image',
            'image_7' => 'image'
        ]);
        
        // * Inventory
        $inventory = new Inventory();
        $inventory->stock = $request->stock;
        $inventory->save();
        
        // Despues de crear el stock, recuperamos su id, el cual
        // será el último registro agregado, es por eso que en $id
        // ordenamos todos los registros por id y en orden descendente
        $id = Inventory::orderBy('id', 'desc')->first();

        // * Image
        $image = new Image();

        if($request->file('image_1')){
            $image_1 = $request->file('image_1')->store('public/images');
            $url_1 = Storage::url($image_1);

            $image->image_1 = $url_1;
        }

        if($request->file('image_2')){
            $image_2 = $request->file('image_2')->store('public/images');
            $url_2 = Storage::url($image_2);

            $image->image_2 = $url_2;
        }

        if($request->file('image_3')){
            $image_3 = $request->file('image_3')->store('public/images');
            $url_3 = Storage::url($image_3);

            $image->image_3 = $url_3;
        }

        if($request->file('image_4')){
            $image_4 = $request->file('image_4')->store('public/images');
            $url_4 = Storage::url($image_4);

            $image->image_4 = $url_4;
        }

        if($request->file('image_5')){
            $image_5 = $request->file('image_5')->store('public/images');
            $url_5 = Storage::url($image_5);

            $image->image_5 = $url_5;
        }

        if($request->file('image_6')){
            $image_6 = $request->file('image_6')->store('public/images');
            $url_6 = Storage::url($image_6);

            $image->image_6 = $url_6;
        }

        if($request->file('image_7')){
            $image_7 = $request->file('image_7')->store('public/images');
            $url_7 = Storage::url($image_7);

            $image->image_7 = $url_7;
        }

        $image->save();

        // * Product
        $product = new Product();
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->price_discount = $request->price_discount;
        $product->status_usage = $request->status_usage;
        $product->status_aesthetics = $request->status_aesthetics;
        $product->warranty_days = $request->warranty_days;
        $product->support = $request->support;
        $product->delivery = $request->delivery;
        $product->image_id = $id->id;
        $product->category_id = 1;
        $product->inventory_id = $id->id;
        $product->save();

        // * SpecificationsLaptop
        $spec = new SpecificationsLaptop();

        $spec->equipo_marca = $request->equipo_marca;
        $spec->equipo_linea = $request->equipo_linea;
        $spec->equipo_modelo = $request->equipo_modelo;
        $spec->ram_gb = $request->ram_gb;
        $spec->ram_tipo = $request->ram_tipo;
        $spec->discod_gb = $request->discod_gb;
        $spec->discod_tipo = $request->discod_tipo;
        $spec->procesador_marca = $request->procesador_marca;
        $spec->procesador_modelo = $request->procesador_modelo;
        $spec->procesador_gen = $request->procesador_gen;
        $spec->procesador_mhz = $request->procesador_mhz;
        $spec->procesador_nucleos = $request->procesador_nucleos;
        $spec->tarjetag = $request->tarjetag;
        $spec->tarjetag_marca = $request->tarjetag_marca;
        $spec->tarjetag_modelo = $request->tarjetag_modelo;
        $spec->tarjetag_tipomemoria = $request->tarjetag_tipomemoria;
        $spec->tarjetag_gb = $request->tarjetag_gb;
        $spec->pantalla_tipo = $request->pantalla_tipo;
        $spec->pantalla_tamano = $request->pantalla_tamano;
        $spec->pantalla_tactil = $request->pantalla_tactil;
        $spec->pantalla_resolucion = $request->pantalla_resolucion;
        $spec->teclado_idioma = $request->teclado_idioma;
        $spec->teclado_retroi = $request->teclado_retroi;
        $spec->teclado_num = $request->teclado_num;
        $spec->conectv_usb2 = $request->conectv_usb2;
        $spec->conectv_usb3 = $request->conectv_usb3;
        $spec->conectv_usbc = $request->conectv_usbc;
        $spec->conectv_wifi = $request->conectv_wifi;
        $spec->conectv_bluetooth = $request->conectv_bluetooth;
        $spec->conectv_jack = $request->conectv_jack;
        $spec->conectv_hdmi = $request->conectv_hdmi;
        $spec->conectv_vga = $request->conectv_vga;
        $spec->conectv_displayp = $request->conectv_displayp;
        $spec->conectv_ethernet = $request->conectv_ethernet;
        $spec->conectv_serialcom = $request->conectv_serialcom;
        $spec->conectv_ieee1394 = $request->conectv_ieee1394;
        $spec->so = $request->so;
        $spec->software_ad = $request->software_ad;
        $spec->audiov_camara = $request->audiov_camara;
        $spec->audiov_microfono = $request->audiov_microfono;
        $spec->lectura_unidadoptica = $request->lectura_unidadoptica;
        $spec->lectura_sd = $request->lectura_sd;
        $spec->bateria_tipo = $request->bateria_tipo;
        $spec->bateria_celdas = $request->bateria_celdas;
        $spec->product_id = $id->id;
        $spec->save();

        return redirect()->route('panel.index');
    }


    public function update(Request $request, SpecificationsLaptop $specLaptop){

        // return $request;

        // * Inventory
        $specLaptop->product->inventory->stock = $request->stock;
        $specLaptop->product->inventory->save();
        
        // * Product
        $specLaptop->product->sku = $request->sku;
        $specLaptop->product->price = $request->price;
        $specLaptop->product->price_discount = $request->price_discount;
        $specLaptop->product->status_usage = $request->status_usage;
        $specLaptop->product->status_aesthetics = $request->status_aesthetics;
        $specLaptop->product->warranty_days = $request->warranty_days;
        $specLaptop->product->support = $request->support;
        $specLaptop->product->delivery = $request->delivery;
        $specLaptop->product->save();

        // * Image
        // $specLaptop->product->image->image_1 = $request->image_1;
        if($request->file('image_1')){
            $image_1 = $request->file('image_1')->store('public/images');
            $url_1 = Storage::url($image_1);

            $specLaptop->product->image->image_1 = $url_1;
        }

        if($request->file('image_2')){
            $image_2 = $request->file('image_2')->store('public/images');
            $url_2 = Storage::url($image_2);

            $specLaptop->product->image->image_2 = $url_2;
        }

        if($request->file('image_3')){
            $image_3 = $request->file('image_3')->store('public/images');
            $url_3 = Storage::url($image_3);

            $specLaptop->product->image->image_3 = $url_3;
        }

        if($request->file('image_4')){
            $image_4 = $request->file('image_4')->store('public/images');
            $url_4 = Storage::url($image_4);

            $specLaptop->product->image->image_4 = $url_4;
        }

        if($request->file('image_5')){
            $image_5 = $request->file('image_5')->store('public/images');
            $url_5 = Storage::url($image_5);

            $specLaptop->product->image->image_5 = $url_5;
        }

        if($request->file('image_6')){
            $image_6 = $request->file('image_6')->store('public/images');
            $url_6 = Storage::url($image_6);

            $specLaptop->product->image->image_6 = $url_6;
        }

        if($request->file('image_7')){
            $image_7 = $request->file('image_7')->store('public/images');
            $url_7 = Storage::url($image_7);

            $specLaptop->product->image->image_7 = $url_7;
        }
        $specLaptop->product->image->save();
        
        // * SpecificationsLaptop
        $specLaptop->equipo_marca = $request->equipo_marca;
        $specLaptop->equipo_linea = $request->equipo_linea;
        $specLaptop->equipo_modelo = $request->equipo_modelo;
        $specLaptop->ram_gb = $request->ram_gb;
        $specLaptop->ram_tipo = $request->ram_tipo;
        $specLaptop->discod_gb = $request->discod_gb;
        $specLaptop->discod_tipo = $request->discod_tipo;
        $specLaptop->procesador_marca = $request->procesador_marca;
        $specLaptop->procesador_modelo = $request->procesador_modelo;
        $specLaptop->procesador_gen = $request->procesador_gen;
        $specLaptop->procesador_mhz = $request->procesador_mhz;
        $specLaptop->procesador_nucleos = $request->procesador_nucleos;
        $specLaptop->tarjetag = $request->tarjetag;
        $specLaptop->tarjetag_marca = $request->tarjetag_marca;
        $specLaptop->tarjetag_modelo = $request->tarjetag_modelo;
        $specLaptop->tarjetag_tipomemoria = $request->tarjetag_tipomemoria;
        $specLaptop->tarjetag_gb = $request->tarjetag_gb;
        $specLaptop->pantalla_tipo = $request->pantalla_tipo;
        $specLaptop->pantalla_tamano = $request->pantalla_tamano;
        $specLaptop->pantalla_tactil = $request->pantalla_tactil;
        $specLaptop->pantalla_resolucion = $request->pantalla_resolucion;
        $specLaptop->teclado_idioma = $request->teclado_idioma;
        $specLaptop->teclado_retroi = $request->teclado_retroi;
        $specLaptop->teclado_num = $request->teclado_num;
        $specLaptop->conectv_usb2 = $request->conectv_usb2;
        $specLaptop->conectv_usb3 = $request->conectv_usb3;
        $specLaptop->conectv_usbc = $request->conectv_usbc;
        $specLaptop->conectv_wifi = $request->conectv_wifi;
        $specLaptop->conectv_bluetooth = $request->conectv_bluetooth;
        $specLaptop->conectv_jack = $request->conectv_jack;
        $specLaptop->conectv_hdmi = $request->conectv_hdmi;
        $specLaptop->conectv_vga = $request->conectv_vga;
        $specLaptop->conectv_displayp = $request->conectv_displayp;
        $specLaptop->conectv_ethernet = $request->conectv_ethernet;
        $specLaptop->conectv_serialcom = $request->conectv_serialcom;
        $specLaptop->conectv_ieee1394 = $request->conectv_ieee1394;
        $specLaptop->so = $request->so;
        $specLaptop->software_ad = $request->software_ad;
        $specLaptop->audiov_camara = $request->audiov_camara;
        $specLaptop->audiov_microfono = $request->audiov_microfono;
        $specLaptop->lectura_unidadoptica = $request->lectura_unidadoptica;
        $specLaptop->lectura_sd = $request->lectura_sd;
        $specLaptop->bateria_tipo = $request->bateria_tipo;
        $specLaptop->bateria_celdas = $request->bateria_celdas;
        $specLaptop->product_id = $specLaptop->id;
        $specLaptop->save();
        
        return redirect()->route('panel.index');       
    }

    public function destroy(SpecificationsLaptop $specLaptop){
        $specLaptop->product->inventory->delete();

        $specLaptop->product->image->delete();
        $imagesUrl = [$specLaptop->product->image->image_1,
                      $specLaptop->product->image->image_2,
                      $specLaptop->product->image->image_3,
                      $specLaptop->product->image->image_4,
                      $specLaptop->product->image->image_5,
                      $specLaptop->product->image->image_6,
                      $specLaptop->product->image->image_7];
        $url = str_replace('storage', 'public', $imagesUrl);
        Storage::delete($url);

        $specLaptop->product->delete();
        $specLaptop->delete();

        return redirect()->route('panel.index');  
    }
}   