<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\SpecificationsLaptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

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
            'stock'                => 'required|numeric',

            'image_1'              => 'nullable|image',
            'image_2'              => 'nullable|image',
            'image_3'              => 'nullable|image',
            'image_4'              => 'nullable|image',
            'image_5'              => 'nullable|image',
            'image_6'              => 'nullable|image',
            'image_7'              => 'nullable|image',

            'sku'                  => 'required|alpha_num',
            'price'                => 'required|numeric', 
            'price_discount'       => 'nullable|numeric',
            'status_usage'         => 'required|string',
            'status_aesthetic'     => 'required|numeric',
            'warranty_days'        => 'required|numeric',
            'support'              => 'required|string',
            'delivery'             => 'required|string',

            'equipo_marca'         => 'required|string',
            'equipo_linea'         => 'required|string',
            'equipo_modelo'        => 'required|string',
            'ram_gb'               => 'required|numeric',
            'ram_tipo'             => 'required|string',
            'discod_gb'            => 'required|string',
            'discod_tipo'          => 'required|string',
            'procesador_marca'     => 'required|string',
            'procesador_modelo'    => 'required|string',
            'procesador_gen'       => 'required|numeric',
            'procesador_mhz'       => 'required|numeric',
            'procesador_nucleos'   => 'required|numeric',
            'tarjetag'             => 'required|boolean',

            'tarjetag_marca'       => 'nullable|string',
            'tarjetag_modelo'      => 'nullable|string',
            'tarjetag_tipomemoria' => 'nullable|string',
            'tarjetag_gb'          => 'nullable|numeric',

            'pantalla_tipo'        => 'required|string',
            'pantalla_tamano'      => 'required|numeric',
            'pantalla_tactil'      => 'required|boolean',
            'pantalla_resolucion'  => 'required|numeric',
            'teclado_idioma'       => 'required|string',
            'teclado_retroi'       => 'required|boolean',
            'teclado_num'          => 'required|boolean',
            'conectv_usb2'         => 'required|numeric',
            'conectv_usb3'         => 'required|numeric',
            'conectv_usbc'         => 'required|numeric',
            'conectv_wifi'         => 'required|boolean',
            'conectv_bluetooth'    => 'required|boolean',
            'conectv_jack'         => 'required|boolean',
            'conectv_hdmi'         => 'required|boolean',
            'conectv_vga'          => 'required|boolean',
            'conectv_displayp'     => 'required|boolean',
            'conectv_ethernet'     => 'required|boolean',
            'conectv_serialcom'    => 'required|boolean',
            'conectv_ieee1394'     => 'required|boolean',
            'so'                   => 'required|string',
            'software_ad'          => 'required|string',
            'audiov_camara'        => 'required|boolean',
            'audiov_microfono'     => 'required|boolean',
            'lectura_unidadoptica' => 'required|boolean',
            'lectura_sd'           => 'required|boolean',
            'bateria_tipo'         => 'required|string',
            'bateria_celdas'       => 'required|numeric'
        ]);
        
        // * Inventory
        $inventory = new Inventory();
        $inventory->stock = $request->stock;
        $inventory->save();
        
        // Creamos un nuevo stock, recuperamos su id y lo asignamos a las FK necesarias
        $id = Inventory::orderBy('id', 'desc')->first();

        // * Image
        $image = new File();

        if($request->file('image_1')){
            $name_1 = Str::random(40) . '.webp';
            $url_1 = public_path() . '/storage/images/upload/' . $name_1;

            Image::make($request->file('image_1'))
                 ->fit(600)
                 ->save($url_1);

                 
                 $image->image_1 = '/storage/images/upload/' . $name_1;
        }

        if($request->file('image_2')){
            $name_2 = Str::random(40) . '.webp';
            $url_2 = public_path() . '/storage/images/upload/' . $name_2;

            Image::make($request->file('image_2'))
                 ->fit(600)
                 ->save($url_2);

                 
                 $image->image_2 = '/storage/images/upload/' . $name_2;
        }
        if($request->file('image_3')){
            $name_3 = Str::random(40) . '.webp';
            $url_3 = public_path() . '/storage/images/upload/' . $name_3;

            Image::make($request->file('image_3'))
                 ->fit(600)
                 ->save($url_3);

                 
                 $image->image_3 = '/storage/images/upload/' . $name_3;
        }
        if($request->file('image_4')){
            $name_4 = Str::random(40) . '.webp';
            $url_4 = public_path() . '/storage/images/upload/' . $name_4;

            Image::make($request->file('image_4'))
                 ->fit(600)
                 ->save($url_4);

                 
                 $image->image_4 = '/storage/images/upload/' . $name_4;
        }
        if($request->file('image_5')){
            $name_5 = Str::random(40) . '.webp';
            $url_5 = public_path() . '/storage/images/upload/' . $name_5;

            Image::make($request->file('image_5'))
                 ->fit(600)
                 ->save($url_5);

                 
                 $image->image_5 = '/storage/images/upload/' . $name_5;
        }
        if($request->file('image_6')){
            $name_6 = Str::random(40) . '.webp';
            $url_6 = public_path() . '/storage/images/upload/' . $name_6;

            Image::make($request->file('image_6'))
                 ->fit(600)
                 ->save($url_6);

                 
                 $image->image_6 = '/storage/images/upload/' . $name_6;
        }
        if($request->file('image_7')){
            $name_7 = Str::random(40) . '.webp';
            $url_7 = public_path() . '/storage/images/upload/' . $name_7;

            Image::make($request->file('image_7'))
                 ->fit(600)
                 ->save($url_7);

                 
                 $image->image_7 = '/storage/images/upload/' . $name_7;
        }

        $image->save();

        // * Product
        $product = new Product();
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->price_discount = $request->price_discount;
        $product->status_usage = $request->status_usage;
        $product->status_aesthetic = $request->status_aesthetic;
        $product->warranty_days = $request->warranty_days;
        $product->support = $request->support;
        $product->delivery = $request->delivery;
        $product->file_id = $id->id;
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

        $request->validate([
            'stock'                => 'required|numeric',

            'image_1'              => 'nullable|image',
            'image_2'              => 'nullable|image',
            'image_3'              => 'nullable|image',
            'image_4'              => 'nullable|image',
            'image_5'              => 'nullable|image',
            'image_6'              => 'nullable|image',
            'image_7'              => 'nullable|image',

            'sku'                  => 'required|alpha_num',
            'price'                => 'required|numeric', 
            'price_discount'       => 'nullable|numeric',
            'status_usage'         => 'required|string',
            'status_aesthetic'     => 'required|numeric',
            'warranty_days'        => 'required|numeric',
            'support'              => 'required|string',
            'delivery'             => 'required|string',

            'equipo_marca'         => 'required|string',
            'equipo_linea'         => 'required|string',
            'equipo_modelo'        => 'required|string',
            'ram_gb'               => 'required|numeric',
            'ram_tipo'             => 'required|string',
            'discod_gb'            => 'required|string',
            'discod_tipo'          => 'required|string',
            'procesador_marca'     => 'required|string',
            'procesador_modelo'    => 'required|string',
            'procesador_gen'       => 'required|numeric',
            'procesador_mhz'       => 'required|numeric',
            'procesador_nucleos'   => 'required|numeric',
            'tarjetag'             => 'required|boolean',

            'tarjetag_marca'       => 'nullable|string',
            'tarjetag_modelo'      => 'nullable|string',
            'tarjetag_tipomemoria' => 'nullable|string',
            'tarjetag_gb'          => 'nullable|numeric',

            'pantalla_tipo'        => 'required|string',
            'pantalla_tamano'      => 'required|numeric',
            'pantalla_tactil'      => 'required|boolean',
            'pantalla_resolucion'  => 'required|numeric',
            'teclado_idioma'       => 'required|string',
            'teclado_retroi'       => 'required|boolean',
            'teclado_num'          => 'required|boolean',
            'conectv_usb2'         => 'required|numeric',
            'conectv_usb3'         => 'required|numeric',
            'conectv_usbc'         => 'required|numeric',
            'conectv_wifi'         => 'required|boolean',
            'conectv_bluetooth'    => 'required|boolean',
            'conectv_jack'         => 'required|boolean',
            'conectv_hdmi'         => 'required|boolean',
            'conectv_vga'          => 'required|boolean',
            'conectv_displayp'     => 'required|boolean',
            'conectv_ethernet'     => 'required|boolean',
            'conectv_serialcom'    => 'required|boolean',
            'conectv_ieee1394'     => 'required|boolean',
            'so'                   => 'required|string',
            'software_ad'          => 'required|string',
            'audiov_camara'        => 'required|boolean',
            'audiov_microfono'     => 'required|boolean',
            'lectura_unidadoptica' => 'required|boolean',
            'lectura_sd'           => 'required|boolean',
            'bateria_tipo'         => 'required|string',
            'bateria_celdas'       => 'required|numeric'
        ]);

        // * Inventory
        $specLaptop->product->inventory->stock = $request->stock;
        $specLaptop->product->inventory->save();
        
        // * Product
        $specLaptop->product->sku = $request->sku;
        $specLaptop->product->price = $request->price;
        $specLaptop->product->price_discount = $request->price_discount;
        $specLaptop->product->status_usage = $request->status_usage;
        $specLaptop->product->status_aesthetic = $request->status_aesthetic;
        $specLaptop->product->warranty_days = $request->warranty_days;
        $specLaptop->product->support = $request->support;
        $specLaptop->product->delivery = $request->delivery;
        $specLaptop->product->save();

        // * File
        if($request->file('image_1')){
            $name = Str::random(40) . '.webp';
            $url = public_path() . '/storage/images/upload/' . $name;

            Image::make($request->file('image_1'))
                 ->fit(600)
                 ->save($url);

                // Eliminar imagen anterior
                $imageOld = $specLaptop->product->file->image_1;
                $urlOld = str_replace('storage', 'public' , $imageOld);
                Storage::delete($urlOld);

                // Subir nueva imagen
                $specLaptop->product->file->image_1 = '/storage/images/upload/' . $name;
        }
        if($request->file('image_2')){
            $name = Str::random(40) . '.webp';
            $url = public_path() . '/storage/images/upload/' . $name;

            Image::make($request->file('image_2'))
                 ->fit(600)
                 ->save($url);

            // Eliminar imagen anterior
                $imageOld = $specLaptop->product->file->image_2;
                $urlOld = str_replace('storage', 'public' , $imageOld);
                Storage::delete($urlOld);

                // Subir nueva imagen
                $specLaptop->product->file->image_2 = '/storage/images/upload/' . $name;
        }
        if($request->file('image_3')){
            $name = Str::random(40) . '.webp';
            $url = public_path() . '/storage/images/upload/' . $name;

            Image::make($request->file('image_3'))
                 ->fit(600)
                 ->save($url);

                // Eliminar imagen anterior
                $imageOld = $specLaptop->product->file->image_3;
                $urlOld = str_replace('storage', 'public' , $imageOld);
                Storage::delete($urlOld);

                // Subir nueva imagen
                $specLaptop->product->file->image_3 = '/storage/images/upload/' . $name;
        }
        if($request->file('image_4')){
            $name = Str::random(40) . '.webp';
            $url = public_path() . '/storage/images/upload/' . $name;

            Image::make($request->file('image_4'))
                 ->fit(600)
                 ->save($url);

                // Eliminar imagen anterior
                $imageOld = $specLaptop->product->file->image_4;
                $urlOld = str_replace('storage', 'public' , $imageOld);
                Storage::delete($urlOld);

                // Subir nueva imagen
                $specLaptop->product->file->image_4 = '/storage/images/upload/' . $name;
        }
        if($request->file('image_5')){
            $name = Str::random(40) . '.webp';
            $url = public_path() . '/storage/images/upload/' . $name;

            Image::make($request->file('image_5'))
                 ->fit(600)
                 ->save($url);

                // Eliminar imagen anterior
                $imageOld = $specLaptop->product->file->image_5;
                $urlOld = str_replace('storage', 'public' , $imageOld);
                Storage::delete($urlOld);

                // Subir nueva imagen
                $specLaptop->product->file->image_5 = '/storage/images/upload/' . $name;
        }
        if($request->file('image_6')){
            $name = Str::random(40) . '.webp';
            $url = public_path() . '/storage/images/upload/' . $name;

            Image::make($request->file('image_6'))
                 ->fit(600)
                 ->save($url);

                // Eliminar imagen anterior
                $imageOld = $specLaptop->product->file->image_6;
                $urlOld = str_replace('storage', 'public' , $imageOld);
                Storage::delete($urlOld);

                // Subir nueva imagen
                $specLaptop->product->file->image_6 = '/storage/images/upload/' . $name;
        }
        if($request->file('image_7')){
            $name = Str::random(40) . '.webp';
            $url = public_path() . '/storage/images/upload/' . $name;

            Image::make($request->file('image_7'))
                 ->fit(600)
                 ->save($url);

                // Eliminar imagen anterior
                $imageOld = $specLaptop->product->file->image_7;
                $urlOld = str_replace('storage', 'public' , $imageOld);
                Storage::delete($urlOld);

                // Subir nueva imagen
                $specLaptop->product->file->image_7 = '/storage/images/upload/' . $name;
        }

        $specLaptop->product->file->save();

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

        $specLaptop->product->file->delete();
        $imagesUrl = [$specLaptop->product->file->image_1,
                      $specLaptop->product->file->image_2,
                      $specLaptop->product->file->image_3,
                      $specLaptop->product->file->image_4,
                      $specLaptop->product->file->image_5,
                      $specLaptop->product->file->image_6,
                      $specLaptop->product->file->image_7];
        $url = str_replace('storage', 'public', $imagesUrl);
        Storage::delete($url);

        $specLaptop->product->delete();
        $specLaptop->delete();

        return redirect()->route('panel.index');  
    }
}
