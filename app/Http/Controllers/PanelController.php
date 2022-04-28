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

/**
 * Este controlador se encarga de manejar vistas y funcionamiento CRUD para el Panel
 */
class PanelController extends Controller
{
    /**
     * Esta función muestra la vista panel y un mensaje para DB vacía
     */
    public function index(){
        $specsLaptop = SpecificationsLaptop::paginate(15);
        $msgEmpty = 'Estoy en blanco. Comencemos a trabajar.';

        return view('panel', compact('specsLaptop', 'msgEmpty'));
    }
    /**
     * Esta función muestra la vista Create, formulario empleado para
     * insertar registros
     */
    public function create(){
        return view('components/create');
    }
    /**
     * Esta función muestra la vista Show, formulario empleado para
     * mostrar registros existentes
     * 
     * @param object $specLaptop — Establece registro a mostrar al compararlo con el campo id o slug en búsqueda de coincidencias
     */
    public function show(SpecificationsLaptop $specLaptop){
        return view('components/show', compact('specLaptop'));
    }
    /**
     * Esta función muestra la vista Edit, formulario empleado para
     * editar registros existentes
     * 
     * @param object $specLaptop — Establece registro a editar al compararlo con el campo id o slug en búsqueda de coincidencias
     */
    public function edit(SpecificationsLaptop $specLaptop){
        return view('components/edit', compact('specLaptop'));
    }
    /**
     * Esta función muestra la vista Delete, formulario empleado para
     * eliminar registros existentes
     * 
     * @param object $specLaptop — Establece registro a eliminar al compararlo con el campo id o slug en búsqueda de coincidencias
     */
    public function delete(SpecificationsLaptop $specLaptop){
        return view('components/delete', compact('specLaptop'));
    }
    /**
     * Esta función muestra la vista Slider, formulario empleado para
     * gestionar las imagenes del slider
     */
    public function slider(){
        return view('components/slider');
    }
    /**
     * Esta función Create, inserta registros para Inventory, Image, Product y SpecificationsLaptop
     * 
     * @param object $request — Establece la información para insertar un nuevo registro
     */
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
    
                Image::make($request->file('image_'.$i))->fit(600)->save($url);
    
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
                $id->id, '-'),
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
    /**
     * Esta función Update, modifica registros para Inventory, Image, Product y SpecificationsLaptop
     * 
     * @param object $request    — Establece la información para modificar el registro existente
     * @param object $specLaptop — Establece registro a modificar al compararlo con el campo id o slug en búsqueda de coincidencias
     */
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

                Image::make($request->file('image_'.$i))->fit(600)->save($url);
    
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
                $specLaptop->id, '-'),
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
    /**
     * Esta function Delete, elimina registros para Inventory, Image, Product y SpecificationsLaptop
     * 
     * @param object $specLaptop — Establece registro a eliminar al compararlo con el campo id o slug en búsqueda de coincidencias
     */
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
    /**
     * Esta función Delete, elimina imagenes existentes en formulario Update por medio de Ajax,
     * debido a que la tabla files cuenta con 7 imágenes por cada registro,
     * se usa $col para identificar la imagen que se desea eliminar al usarla en un switch case
     * Funciona para eliminar imagenes existente y reemplazarlas
     * 
     * @param object $specLaptop — Establece registro a eliminar al compararlo con el campo id o slug en búsqueda de coincidencias
     * @param integer $col       — Establece la posición de la imagen en la tabla files
     */
    public function replace(SpecificationsLaptop $specLaptop, $col){
        /**
         * 1 Recupera la url de la imagen seleccionada para eliminarla por medio del facade Storage
         * 2 Reemplaza el registro para esta imagen con null
         * 
         * $imageOld recupera la url de la imagen seleccionada
         * @var string
         * 
         * $urlOld establece la url de la imagen seleccionada
         * @var string
         */
        switch ($col) {
            case 1:
                // 1
                $imageOld = $specLaptop->product->file->image_1;
                $urlOld = str_replace('storage', 'public' , $imageOld);
                Storage::delete($urlOld);

                // 2
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
    /**
     * Esta función Update, actualiza las imágenes del slider
     * 
     * @param object $request — Establece las imagenes a modificar
     */
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
    }
}