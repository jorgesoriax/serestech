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
        // $specsLaptop = SpecificationsLaptop::where('equipo_marca', 'a')->paginate(15);
        $specsLaptop = SpecificationsLaptop::paginate(15);
        $msgEmpty = 'Estoy en blanco. Comencemos a trabajar.';

        return view('panel', compact('specsLaptop', 'msgEmpty'));
    }
    public function create(){
        return view('components/create');
    }
    public function show(SpecificationsLaptop $specLaptop){
        return view('components/show', compact('specLaptop'));
    }
    public function edit(SpecificationsLaptop $specLaptop){
        return view('components/edit', compact('specLaptop'));
    }
    public function delete(SpecificationsLaptop $specLaptop){
        return view('components/delete', compact('specLaptop'));
    }
    public function slider(){
        return view('components/slider');
    }
    public function store(Request $request){
        /**
         * * Inventory
         */
        Inventory::create($request->all());
        // Recuperamos id de último registro
        $id = Inventory::orderBy('id', 'desc')->first();
        /** 
         * * Image
         */
        $image = new File();
        for($i = 1; $i <= 7; $i++){
            if($request->file('image_'.$i)){
                $name = Str::random(40) . '.webp';
                $url = public_path() . '/storage/images/upload/' . $name;
    
                Image::make($request->file('image_'.$i))->fit(800)->save($url);
    
                switch($i){
                    case 1:
                        $image->image_1 = '/storage/images/upload/' . $name;
                        break;
                    case 2:
                        $image->image_2 = '/storage/images/upload/' . $name;
                        break;
                    case 3:
                        $image->image_3 = '/storage/images/upload/' . $name;
                        break;
                    case 4:
                        $image->image_4 = '/storage/images/upload/' . $name;
                        break;
                    case 5:
                        $image->image_5 = '/storage/images/upload/' . $name;
                        break;
                    case 6:
                        $image->image_6 = '/storage/images/upload/' . $name;
                        break;
                    case 7:
                        $image->image_7 = '/storage/images/upload/' . $name;
                        break;
                }
            }
        }
        $image->save();
        /**
         * * Product
         */
        Product::create(array_merge($request->all(), [
            'file_id' => $id->id,
            'category_id' => 1,
            'inventory_id' => $id->id,
        ]));

        /**
         * * SpecificationsLaptop
         */
        if($request->procesador_gen != 0){
            $procesador_gen = $request->procesador_gen.'a gen ';
        } else {
            $procesador_gen = '';
        };
        if($request->tarjetag_gb != ''){
            $tarjetag_gb = $request->tarjetag_gb.' GB';
        } else {
            $tarjetag_gb = null;
        }
        SpecificationsLaptop::create(array_merge($request->all(), [
            'slug' => Str::slug(
                $request->equipo_marca.' '.
                $request->equipo_linea.' '.
                $request->equipo_modelo.' '.
                Str::random(10), '-'),
            'descripcion' => 'Procesador '.$request->procesador_marca.' '.
                             $request->procesador_linea.' '.
                             $request->procesador_modelo.' '.
                             $procesador_gen.
                             $request->procesador_ghz.'GHz '.
                             $request->procesador_nucleos.' núcleos, '.
                             'RAM '.$request->ram_tipo.' '.
                             $request->ram_gb.'GB, '.
                             'Disco duro '.$request->discod_tipo.' '.
                             $request->discod_amount.$request->discod_storage,
            'ram_gb' => $request->ram_gb.' GB',
            'discod_gb' => $request->discod_amount.' '.$request->discod_storage,
            'procesador_gen' => $request->procesador_gen.'a gen',
            'procesador_ghz' => $request->procesador_ghz.' GHz',
            'procesador_nucleos' => $request->procesador_nucleos.' núcleos',
            'tarjetag_gb' => $tarjetag_gb,
            'pantalla_tamano' => $request->pantalla_tamano.' pulgadas',
            'pantalla_resolucion' => $request->pantalla_resolucion . ' x ' . $request->pantalla_resolucion_y.' px',
            'product_id' => $id->id
        ]));
        
        return redirect()->back();
    }
    public function update(Request $request, SpecificationsLaptop $specLaptop){
        /**
         * * Inventory
         */
        $specLaptop->product->inventory->update($request->all());
        /**
         * * Product
         */
        $specLaptop->product->update($request->all());
        /**
         * * Image
         */
        for($i = 1; $i <= 7; $i++){
            if($request->file('image_'.$i)){
                $name = Str::random(40) . '.webp';
                $url = public_path() . '/storage/images/upload/' . $name;

                Image::make($request->file('image_'.$i))->fit(800)->save($url);
    
                switch($i){
                    case 1:
                        $imageOld = $specLaptop->product->file->image_1;
                        $urlOld = str_replace('storage', 'public' , $imageOld);
                        Storage::delete($urlOld);

                        $specLaptop->product->file->image_1 = '/storage/images/upload/' . $name;
                        break;
                    case 2:
                        $imageOld = $specLaptop->product->file->image_2;
                        $urlOld = str_replace('storage', 'public' , $imageOld);
                        Storage::delete($urlOld);

                        $specLaptop->product->file->image_2 = '/storage/images/upload/' . $name;
                        break;
                    case 3:
                        $imageOld = $specLaptop->product->file->image_3;
                        $urlOld = str_replace('storage', 'public' , $imageOld);
                        Storage::delete($urlOld);

                        $specLaptop->product->file->image_3 = '/storage/images/upload/' . $name;
                        break;
                    case 4:
                        $imageOld = $specLaptop->product->file->image_4;
                        $urlOld = str_replace('storage', 'public' , $imageOld);
                        Storage::delete($urlOld);

                        $specLaptop->product->file->image_4 = '/storage/images/upload/' . $name;
                        break;
                    case 5:
                        $imageOld = $specLaptop->product->file->image_5;
                        $urlOld = str_replace('storage', 'public' , $imageOld);
                        Storage::delete($urlOld);

                        $specLaptop->product->file->image_5 = '/storage/images/upload/' . $name;
                        break;
                    case 6:
                        $imageOld = $specLaptop->product->file->image_6;
                        $urlOld = str_replace('storage', 'public' , $imageOld);
                        Storage::delete($urlOld);

                        $specLaptop->product->file->image_6 = '/storage/images/upload/' . $name;
                        break;
                    case 7:
                        $imageOld = $specLaptop->product->file->image_7;
                        $urlOld = str_replace('storage', 'public' , $imageOld);
                        Storage::delete($urlOld);

                        $specLaptop->product->file->image_7 = '/storage/images/upload/' . $name;
                        break;
                }
            }
        }
        $specLaptop->product->file->save();
        /**
         * * SpecificationsLaptop
         */
        if($request->procesador_gen != 0){
            $procesador_gen = $request->procesador_gen.'a gen ';
        } else {
            $procesador_gen = '';
        };
        if($request->tarjetag_gb != ''){
            $tarjetag_gb = $request->tarjetag_gb.' GB';
        } else {
            $tarjetag_gb = null;
        }
        $specLaptop->update(array_merge($request->all(), [
            'slug' => Str::slug(
                $request->equipo_marca.' '.
                $request->equipo_linea.' '.
                $request->equipo_modelo.' '.
                Str::random(10), '-'),
                'descripcion' => 'Procesador '.$request->procesador_marca.' '.
                $request->procesador_linea.' '.
                $request->procesador_modelo.' '.
                $procesador_gen.
                $request->procesador_ghz.'GHz '.
                $request->procesador_nucleos.' núcleos, '.
                'RAM '.$request->ram_tipo.' '.
                $request->ram_gb.'GB, '.
                'Disco duro '.$request->discod_tipo.' '.
                $request->discod_amount.$request->discod_storage,
            'ram_gb' => $request->ram_gb.' GB',
            'discod_gb' => $request->discod_amount.' '.$request->discod_storage,
            'procesador_gen' => $request->procesador_gen.'a gen',
            'procesador_ghz' => $request->procesador_ghz.' GHz',
            'procesador_nucleos' => $request->procesador_nucleos.' núcleos',
            'tarjetag_gb' => $tarjetag_gb,
            'pantalla_tamano' => $request->pantalla_tamano.' pulgadas',
            'pantalla_resolucion' => $request->pantalla_resolucion . ' x ' . $request->pantalla_resolucion_y.' px',
        ]));

        return redirect()->back();  
    }
    public function destroy(SpecificationsLaptop $specLaptop){
        /**
         * * Inventory
         */
        $specLaptop->product->inventory->delete();
        /**
         * * Image
         */
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
        /**
         * * Product
         */
        $specLaptop->product->delete();
        /**
         * * SpecificationsLaptop
         */
        $specLaptop->delete();
        return redirect()->back();  
    }
    public function replace(SpecificationsLaptop $specLaptop, $col){
        /**
         * EDIT DELETE IMAGE
         * En la primera línea borramos imagen anterior de storage
         * En la segunda línea vacíamos el registro de la url en la tabla files
         */
        switch ($col) {
            case 1:
                $imageOld = $specLaptop->product->file->image_1;
                $urlOld = str_replace('storage', 'public' , $imageOld);
                Storage::delete($urlOld);

                $specLaptop->product->file->image_1 = null;
                $specLaptop->product->file->save();
                
                break;
            case 2:
                $imageOld = $specLaptop->product->file->image_2;
                $urlOld = str_replace('storage', 'public' , $imageOld);
                Storage::delete($urlOld);

                $specLaptop->product->file->image_2 = null;
                $specLaptop->product->file->save();
                break;
            case 3:
                $imageOld = $specLaptop->product->file->image_3;
                $urlOld = str_replace('storage', 'public' , $imageOld);
                Storage::delete($urlOld);

                $specLaptop->product->file->image_3 = null;
                $specLaptop->product->file->save();
                break;
            case 4:
                $imageOld = $specLaptop->product->file->image_4;
                $urlOld = str_replace('storage', 'public' , $imageOld);
                Storage::delete($urlOld);

                $specLaptop->product->file->image_4 = null;
                $specLaptop->product->file->save();
                break;
            case 5:
                $imageOld = $specLaptop->product->file->image_5;
                $urlOld = str_replace('storage', 'public' , $imageOld);
                Storage::delete($urlOld);

                $specLaptop->product->file->image_5 = null;
                $specLaptop->product->file->save();
                break;
            case 6:
                $imageOld = $specLaptop->product->file->image_6;
                $urlOld = str_replace('storage', 'public' , $imageOld);
                Storage::delete($urlOld);

                $specLaptop->product->file->image_6 = null;
                $specLaptop->product->file->save();
                break;
            case 7:
                $imageOld = $specLaptop->product->file->image_7;
                $urlOld = str_replace('storage', 'public' , $imageOld);
                Storage::delete($urlOld);

                $specLaptop->product->file->image_7 = null;
                $specLaptop->product->file->save();
                break;
        }

        return redirect()->back();
    }
    public function sliderStore(Request $request){
        if($request->file('image_1')){
            $name_1 = 'slider_1' . '.webp';
            $url_1 = public_path() . '/storage/images/slider/' . $name_1;

            Image::make($request->file('image_1'))
                 ->fit(1400, 400)
                 ->save($url_1);
        }
        if($request->file('image_2')){
            $name_2 = 'slider_2' . '.webp';
            $url_2 = public_path() . '/storage/images/slider/' . $name_2;

            Image::make($request->file('image_2'))
                 ->fit(1400, 400)
                 ->save($url_2);
        }
        if($request->file('image_3')){
            $name_3 = 'slider_3' . '.webp';
            $url_3 = public_path() . '/storage/images/slider/' . $name_3;

            Image::make($request->file('image_3'))
                 ->fit(1400, 400)
                 ->save($url_3);
        }
        return redirect()->back();

        // return dd($request);
    }
}