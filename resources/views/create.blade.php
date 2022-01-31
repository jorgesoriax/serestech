@extends('layouts.template')

@section('title', 'Añadir nuevo registro')

@section('css')
@endsection

@section('scripts')
    <script src="../resources/js/panel.js"></script>
@endsection

@section('content')
<a href="{{ route('panel.index') }}">Volver al panel</a><br><br>

<h1>Añadir nuevo registro</h1>

<form action="{{ route('panel.store') }}" method="POST" enctype="multipart/form-data" >
    @csrf

    {{-- <div class="imgPreview"> </div> --}}
    <style>
        .imgPreview img{
            width: 250px;
            border: 1px solid red
        }
        #scroll-top{
            border: 1px solid red;
            width: 50px;
            height: 50px;
            cursor: pointer;
            position: fixed;
            bottom: 80px;
            right: 25px;
        }
        #scroll-bot{
            border: 1px solid red;
            width: 50px;
            height: 50px;
            cursor: pointer;
            position: fixed;
            bottom: 25px;
            right: 25px;
        }
        input{
            width: 250px;
        }
        textarea{
            height: 100px;
        }
    </style>

    <div id="scroll-bot">Ir hacia abajo</div>
    <div id="scroll-top">Ir hacia arriba</div>

    <table border="0" style="background: gainsboro">
        <caption style="text-align: left">Equipo</caption>
        <tr>
            <td>Marca</td>
            <td><input type="text" 
                placeholder="Alfanumérico" 
                name="equipo_marca"
                value="{{ old('equipo_marca') }}">
                @error('equipo_marca')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Línea</td>
            <td><input type="text" 
                placeholder="Alfanumérico" 
                name="equipo_linea"
                value="{{ old('equipo_linea') }}">
                @error('equipo_linea')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Modelo</td>
            <td><input type="text" 
                placeholder="Alfanumérico" 
                name="equipo_modelo"
                value="{{ old('equipo_modelo') }}">
                @error('equipo_modelo')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
    </table><br>

    <table border="0" style="background: gainsboro">
        <caption style="text-align: left">Características del producto</caption>
        <tr>
            <td>SKU</td>
            <td><input type="text" 
                placeholder="Alfanumérico" 
                name="sku"
                value="{{ old('sku') }}">
                @error('sku')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Precio</td><td>
                <input type="text" 
                placeholder="Numérico" 
                name="price"
                value="{{ old('price') }}">
                @error('price')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Precio con descuento</td>
            <td><input type="text" 
                placeholder="Numérico" 
                name="price_discount"
                value="{{ old('price_discount') }}">
                @error('price_discount')
                    <br><small>*{{$message}}</small><br>
                @enderror
                Dejar en blanco si es necesario
            </td>
        </tr>
        <tr>
            <td>Uso</td><td>
                <select name="status_usage">
                    <option value="Nuevo"     {{ old('status_usage') == 'Nuevo'     ? 'selected' : '' }}>Nuevo</option>
                    <option value="Seminuevo" {{ old('status_usage') == 'Seminuevo' ? 'selected' : '' }}>Seminuevo</option>
                </select>
                @error('status_usage')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Estética</td>
            <td><input type="text" 
                placeholder="Numérico" 
                name="status_aesthetic"
                value="{{ old('status_aesthetic') }}">
                @error('status_aesthetic')
                    <br><small>*{{$message}}</small><br>
                @enderror
                Del 1 al 10
            </td>
        </tr>
        <tr>
            <td>Dias de garantía</td>
            <td><input type="text" 
                placeholder="Numérico" 
                name="warranty_days"
                value="{{ old('warranty_days') }}">
                @error('warranty_days')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Soporte</td>
            <td><input type="text" 
                placeholder="Alfanumérico" 
                name="support" 
                value="1 mes de soporte sin costo">
                @error('support')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Entrega</td>
            <td><input type="text" 
                placeholder="Numérico" 
                name="delivery" 
                value="Entrega de inmediato">
                @error('delivery')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Imagen 1</td>
            <td><input type="file" accept="image/*" id="images" name="image_1"></td>
            <td>
                Nota: Las imágenes son redimensionadas a 600 x 600px,
                por lo que se recomienda centrar el contenido importante.
                Cada registro debe contar con al menos 2 imágenes.
            </td>
        </tr>
        <tr>
            <td>Imagen 2</td>
            <td><input type="file" accept="image/*" id="images" name="image_2"></td>
        </tr>
        <tr>
            <td>Imagen 3</td>
            <td><input type="file" accept="image/*" id="images" name="image_3"></td>
        </tr>
        <tr>
            <td>Imagen 4</td>
            <td><input type="file" accept="image/*" id="images" name="image_4"></td>
        </tr>
        <tr>
            <td>Imagen 5</td>
            <td><input type="file" accept="image/*" id="images" name="image_5"></td>
        </tr>
        <tr>
            <td>Imagen 6</td>
            <td><input type="file" accept="image/*" id="images" name="image_6"></td>
        </tr>
        <tr>
            <td>Imagen 7</td>
            <td><input type="file" accept="image/*" id="images" name="image_7"></td>
        </tr>
        <tr>
            <td>Stock</td>
            <td><input type="text" 
                placeholder="Numérico" 
                name="stock"
                value="{{ old('stock') }}">
                @error('stock')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
    </table><br>

    <table border="0" style="background: gainsboro">
        <caption style="text-align: left">Especificaciones del producto</caption>
        <tr>
            <td>Cantidad de RAM</td>
            <td><input type="text" 
                placeholder="Numérico" 
                name="ram_gb"
                value="{{ old('ram_gb') }}">
                @error('ram_gb')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Tipo de RAM</td>
            <td><input type="text" 
                placeholder="Alfanumérico" 
                name="ram_tipo"
                value="{{ old('ram_tipo') }}">
                @error('ram_tipo')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Disco duro cantidad de GB</td>
            <td><input type="text" 
                placeholder="Numérico" 
                name="discod_gb"
                value="{{ old('discod_gb') }}">
                @error('discod_gb')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Tipo de disco duro</td>
            <td><input type="text" 
                placeholder="Alfanumérico" 
                name="discod_tipo"
                value="{{ old('discod_tipo') }}">
                @error('discod_tipo')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Procesador marca</td>
            <td><input type="text" 
                placeholder="Alfanumérico" 
                name="procesador_marca"
                value="{{ old('procesador_marca') }}">
                @error('procesador_marca')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Procesador modelo</td>
            <td><input type="text" 
                placeholder="Alfanumérico" 
                name="procesador_modelo"
                value="{{ old('procesador_modelo') }}">
                @error('procesador_modelo')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Procesador generación</td><td>
                <select name="procesador_gen">
                    <option value="1"  {{ old('procesador_gen') == 1  ? 'selected' : '' }}>1</option>
                    <option value="2"  {{ old('procesador_gen') == 2  ? 'selected' : '' }}>2</option>
                    <option value="3"  {{ old('procesador_gen') == 3  ? 'selected' : '' }}>3</option>
                    <option value="4"  {{ old('procesador_gen') == 4  ? 'selected' : '' }}>4</option>
                    <option value="5"  {{ old('procesador_gen') == 5  ? 'selected' : '' }}>5</option>
                    <option value="6"  {{ old('procesador_gen') == 6  ? 'selected' : '' }}>6</option>
                    <option value="7"  {{ old('procesador_gen') == 7  ? 'selected' : '' }}>7</option>
                    <option value="8"  {{ old('procesador_gen') == 8  ? 'selected' : '' }}>8</option>
                    <option value="9"  {{ old('procesador_gen') == 9  ? 'selected' : '' }}>9</option>
                    <option value="10" {{ old('procesador_gen') == 10 ? 'selected' : '' }}>10</option>
                    <option value="11" {{ old('procesador_gen') == 11 ? 'selected' : '' }}>11</option>
                    <option value="12" {{ old('procesador_gen') == 12 ? 'selected' : '' }}>12</option>
                </select>
                @error('procesador_gen')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Procesador velocidad</td>
            <td><input type="text" 
                placeholder="Flotante" 
                name="procesador_mhz"
                value="{{ old('procesador_mhz') }}">
                @error('procesador_mhz')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Procesador núcleos</td>
            <td><input type="text" 
                placeholder="Numérico" 
                name="procesador_nucleos"
                value="{{ old('procesador_nucleos') }}">
                @error('procesador_nucleos')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            
            <td>Tarjeta gráfica</td>
            <td>Si eliges NO, los 4 campos consecutivos puedes dejarlos vacios<br>
                <input type="text" 
                placeholder="Booleano" 
                name="tarjetag"
                value="{{ old('tarjetag') }}">
                @error('tarjetag')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Tarjeta gráfica marca</td>
            <td><input type="text" 
                placeholder="Alfanumérico" 
                name="tarjetag_marca"
                value="{{ old('tarjetag_marca') }}">
                @error('tarjetag_marca')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Tarjeta gráfica modelo</td>
            <td><input type="text" 
                placeholder="Alfanumérico" 
                name="tarjetag_modelo"
                value="{{ old('tarjetag_modelo') }}">
                @error('tarjetag_modelo')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Tarjeta gráfica tipo de memoria</td>
            <td><input type="text" 
                placeholder="Alfanumérico" 
                name="tarjetag_tipomemoria"
                value="{{ old('tarjetag_tipomemoria') }}">
                @error('tarjetag_tipomemoria')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Tarjeta gráfica GB</td>
            <td><input type="text" 
                placeholder="Numérico" 
                name="tarjetag_gb"
                value="{{ old('tarjetag_gb') }}">
                @error('tarjetag_gb')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Pantalla tipo</td><td>
                <select name="pantalla_tipo">
                    <option value="LED"  {{ old('pantalla_tipo') == 'LED'  ? 'selected' : '' }}>LED</option>
                    <option value="LCD"  {{ old('pantalla_tipo') == 'LCD'  ? 'selected' : '' }}>LCD</option>
                    <option value="TFT"  {{ old('pantalla_tipo') == 'TFT'  ? 'selected' : '' }}>TFT</option>
                    <option value="IPS"  {{ old('pantalla_tipo') == 'IPS'  ? 'selected' : '' }}>IPS</option>
                    <option value="OLED" {{ old('pantalla_tipo') == 'OLED' ? 'selected' : '' }}>OLED</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Pantalla tamaño</td>
            <td><input type="text" 
                placeholder="Flotante" 
                name="pantalla_tamano"
                value="{{ old('pantalla_tamano') }}">
                @error('pantalla_tamano')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Pantalla táctil</td>
            <td><input type="text" 
                placeholder="Booleano" 
                name="pantalla_tactil"
                value="0">
                @error('pantalla_tactil')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Pantalla resolución</td>
            <td><input type="text" 
                placeholder="Flotante" 
                name="pantalla_resolucion"
                value="{{ old('pantalla_resolucion') }}">
                @error('pantalla_resolucion')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Teclado idioma</td><td>
                <select name="teclado_idioma">
                    <option value="Español" {{ old('teclado_idioma') == 'Español' ? 'selected' : '' }}>Español</option>
                    <option value="Inglés"  {{ old('teclado_idioma') == 'Inglés'  ? 'selected' : '' }}>Inglés</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Teclado retroiluminado</td>
            <td><input type="text" 
                placeholder="Booleano" 
                name="teclado_retroi"
                value="0">
                @error('teclado_retroi')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Teclado numérico</td>
            <td><input type="text" 
                placeholder="Booleano" 
                name="teclado_num"
                value="0">
                @error('teclado_num')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Conectividad cantidad de USB 2.0</td>
            <td><input type="text" 
                placeholder="Numérico" 
                name="conectv_usb2"
                value="{{ old('conectv_usb2') }}">
                @error('conectv_usb2')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Conectividad cantidad de USB 3.0</td>
            <td><input type="text" 
                placeholder="Numérico" 
                name="conectv_usb3"
                value="{{ old('conectv_usb3') }}">
                @error('conectv_usb3')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Conectividad cantidad de USB C</td>
            <td><input type="text" 
                placeholder="Numérico" 
                name="conectv_usbc"
                value="{{ old('conectv_usbc') }}">
                @error('conectv_usbc')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Conectividad Wifi</td>
            <td><input type="text" 
                placeholder="Booleano" 
                name="conectv_wifi"
                value="1">
                @error('conectv_wifi')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Conectividad Bluetooth</td>
            <td><input type="text" 
                placeholder="Booleano" 
                name="conectv_bluetooth"
                value="1">
                @error('conectv_bluetooth')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Conectividad JACK</td>
            <td><input type="text" 
                placeholder="Booleano" 
                name="conectv_jack"
                value="1">
                @error('conectv_jack')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Conectividad HDMI</td>
            <td><input type="text" 
                placeholder="Booleano" 
                name="conectv_hdmi"
                value="1">
                @error('conectv_hdmi')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Conectividad VGA</td>
            <td><input type="text" 
                placeholder="Booleano" 
                name="conectv_vga"
                value="0">
                @error('conectv_vga')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Conectividad Display port</td>
            <td><input type="text" 
                placeholder="Booleano" 
                name="conectv_displayp"
                value="0">
                @error('conectv_displayp')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Conectividad Ethernet</td>
            <td><input type="text" 
                placeholder="Booleano" 
                name="conectv_ethernet"
                value="1">
                @error('conectv_ethernet')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Conectividad SerialCOM</td>
            <td><input type="text" 
                placeholder="Booleano" 
                name="conectv_serialcom"
                value="0">
                @error('conectv_serialcom')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Conectividad IEEE1394</td>
            <td><input type="text" 
                placeholder="Booleano" 
                name="conectv_ieee1394"
                value="0">
                @error('conectv_ieee1394')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Sistema Operativo</td>
            <td><input type="text" 
                placeholder="Alfanumérico" 
                name="so"
                value="Windows 10 Pro">
                @error('so')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Software adicional</td>
            <td><textarea name="software_ad" 
                onkeyup="countChars(this)"
                placeholder="Alfanumérico, agregar lista de programas, con un  máximo de 155 caracteres">{{ old('software_ad') }}</textarea>
                <label id="charNum">0 caracteres</label>
                @error('software_ad')
                    <br><small>*{{$message}}</small><br>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Audio y video Cámara</td>
            <td><input type="text" 
                placeholder="Booleano" 
                name="audiov_camara"
                value="1">
                @error('audiov_camara')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Audio y video Micrófono</td>
            <td><input type="text" 
                placeholder="Booleano" 
                name="audiov_microfono"
                value="1">
                @error('audiov_microfono')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Lectura Unidad Optica</td>
            <td><input type="text" 
                placeholder="Booleano" 
                name="lectura_unidadoptica"
                value="0">
                @error('lectura_unidadoptica')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Lectura SD</td>
            <td><input type="text" 
                placeholder="Booleano" 
                name="lectura_sd"
                value="1">
                @error('lectura_sd')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
        <tr>
            <td>Bateria tipo</td><td>
                <select name="bateria_tipo">
                    <option value="Ion-Litio"      {{ old('bateria_tipo') == 'Ion-Litio'      ? 'selected' : '' }}>Ion-Litio</option>
                    <option value="Polimero-Litio" {{ old('bateria_tipo') == 'Polimero-Litio' ? 'selected' : '' }}>Polimero-Litio</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Bateria cantidad de celdas</td>
            <td><input type="text" 
                placeholder="Numérico" 
                name="bateria_celdas"
                value="{{ old('bateria_celdas') }}">
                @error('bateria_celdas')
                    <br><small>*{{$message}}</small><br>
                @enderror
            <td>
        </tr>
    </table>

    <br><input type="submit" value="Crear nuevo registro">
</form><br>

<a href="{{ route('panel.index') }}">Volver al panel</a><br><br>

<script>
    function countChars(obj){
        document.getElementById('charNum').innerHTML = obj.value.length+' caracteres';
    }

    // Nos desplaza hacia la altura máxima de nuestra página
    document.getElementById('scroll-top').addEventListener('click', () => window.scrollTo(0, 0));
    // Nos desplaza hacia la altura mínima de nuestra página
    document.getElementById('scroll-bot').addEventListener('click', () => window.scrollTo(0, 1170));

    // Multiple preview images
    // $(function(){
    //     var multiImgPreview = function(input, imgPreviewPlaceholder){
    //         if(input.files){
    //             var filesAmount = input.files.length;

    //             for(i = 0; i < filesAmount; i++){
    //                 var reader = new FileReader();

    //                 reader.onload = function(e){
    //                     $($.parseHTML('<img>')).attr('src', e.target.result).appendTo(imgPreviewPlaceholder);
    //                 }

    //                 reader.readAsDataURL(input.files[i]);
    //             }
    //         }
    //     };

    //     $('#images').on('change', function(){
    //         multiImgPreview(this, 'div.imgPreview');
    //     });
    // });
</script>
@endsection