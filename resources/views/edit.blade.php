@extends('layouts.template')

@section('title', 'Editar registro')

@section('scripts')
    <script src="../resources/js/panel.js"></script>
@endsection

@section('content')
<a href="{{ route('panel.index') }}">Volver al panel</a><br><br>

<h1>Editar producto: {{ $specLaptop->equipo_marca  }} 
                     {{ $specLaptop->equipo_linea  }} 
                     {{ $specLaptop->equipo_modelo }}
             con id: {{ $specLaptop->id }}
</h1>

    <style>
        img{
            height: 150px;
        }
    </style>
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

<form action="{{ route('panel.update', $specLaptop) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')

    <table border="0" style="background: gainsboro">
        <caption style="text-align: left">Equipo</caption>
        <tr>
            <td>Marca</td><td><input type="text" placeholder="Alfanumérico" name="equipo_marca" value="{{ $specLaptop->equipo_marca }}"></td>
        </tr>
        <tr>
            <td>Línea</td><td><input type="text" placeholder="Alfanumérico" name="equipo_linea" value="{{ $specLaptop->equipo_linea }}"></td>
        </tr>
        <tr>
            <td>Modelo</td><td><input type="text" placeholder="Alfanumérico" name="equipo_modelo" value="{{ $specLaptop->equipo_modelo }}"></td>
        </tr>
    </table><br>

    <table border="0" style="background: gainsboro">
        <caption style="text-align: left">Características del producto</caption>
        <tr>
            <td>SKU</td><td><input type="text" placeholder="Alfanumérico" name="sku" value="{{ $specLaptop->product->sku }}"></td>
        </tr>
        <tr>
            <td>Precio</td><td><input type="text" placeholder="Numérico" name="price" value="{{ $specLaptop->product->price }}"></td>
        </tr>
        <tr>
            <td>Precio con descuento</td><td><input type="text" placeholder="Numérico" name="price_discount" value="{{ $specLaptop->product->price_discount }}">Dejar en blanco si no es necesario</td>
        </tr>
        <tr>
            <td>Uso</td><td>
                <select name="status_usage" id="status_usage">
                    <option value="Nuevo">Nuevo</option>
                    <option value="Seminuevo">Seminuevo</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Estética</td><td><input type="text" placeholder="Numérico" name="status_aesthetic" value="{{ $specLaptop->product->status_aesthetic }}">Del 1 al 10</td>
        </tr>
        <tr>
            <td>Dias de garantía</td><td><input type="text" placeholder="Numérico" name="warranty_days" value="{{ $specLaptop->product->warranty_days }}"></td>
        </tr>
        <tr>
            <td>Meses de soporte</td><td><input type="text" placeholder="Alfanumérico" name="support"  value="{{ $specLaptop->product->support }}">Solo cambiar el número de mes (1 mes, n meses...)</td>
        </tr>
        <tr>
            <td>Entrega</td><td><input type="text" value="Entrega a domicilio de inmediato" placeholder="Numérico" name="delivery" value="{{ $specLaptop->product->delivery }}"></td>
        </tr>
        <tr>
            <td>Stock</td><td><input type="text" placeholder="numérico" name="stock" value="{{ $specLaptop->product->inventory->stock }}"></td>
        </tr>
    </table><br>

    <table border="0" style="background: gainsboro">
        <caption style="text-align: left">Imagenes</caption>
        <tr>
            <td>Imagen 1</td><td><img src="{{ asset($specLaptop->product->file->image_1) }}"></td>
            <td><input type="file" name="image_1"></td>
        </tr>
        <tr>
            <td>Imagen 2</td><td><img src="{{ asset($specLaptop->product->file->image_2) }}"></td>
            <td><input type="file" name="image_2"></td>
        </tr>
        <tr>
            <td>Imagen 3</td><td><img src="{{ asset($specLaptop->product->file->image_3) }}"></td>
            <td><input type="file" name="image_3"></td>
        </tr>
        <tr>
            <td>Imagen 4</td><td><img src="{{ asset($specLaptop->product->file->image_4) }}"></td>
            <td><input type="file" name="image_4"></td>
        </tr>
        <tr>
            <td>Imagen 5</td><td><img src="{{ asset($specLaptop->product->file->image_5) }}"></td>
            <td><input type="file" name="image_5"></td>
        </tr>
        <tr>
            <td>Imagen 6</td><td><img src="{{ asset($specLaptop->product->file->image_6) }}"></td>
            <td><input type="file" name="image_6"></td>
        </tr>
        <tr>
            <td>Imagen 7</td><td><img src="{{ asset($specLaptop->product->file->image_7) }}"></td>
            <td><input type="file" name="image_7"></td>
        </tr>
    </table><br>

    <table border="0" style="background: gainsboro">
        <caption style="text-align: left">Especificaciones del producto</caption>
        <tr>
            <td>Cantidad de RAM</td><td><input type="text" placeholder="Numérico" name="ram_gb" value="{{ $specLaptop->ram_gb }}">GB</td>
        </tr>
        <tr>
            <td>Tipo de RAM</td><td><input type="text" placeholder="Alfanumérico" name="ram_tipo" value="{{ $specLaptop->ram_tipo }}"></td>
        </tr>
        <tr>
            <td>Disco duro cantidad de GB</td><td><input type="text" placeholder="Numérico" name="discod_gb" value="{{ $specLaptop->discod_gb }}">GB</td>
        </tr>
        <tr>
            <td>Tipo de disco duro</td><td><input type="text" placeholder="Alfanumérico" name="discod_tipo" value="{{ $specLaptop->discod_tipo }}"></td>
        </tr>
        <tr>
            <td>Procesador marca</td><td><input type="text" placeholder="Alfanumérico" name="procesador_marca" value="{{ $specLaptop->procesador_marca }}"></td>
        </tr>
        <tr>
            <td>Procesador modelo</td><td><input type="text" placeholder="Alfanumérico" name="procesador_modelo" value="{{ $specLaptop->procesador_modelo }}"></td>
        </tr>
        <tr>
            <td>Procesador generación</td><td>
                <select name="procesador_gen" id="procesador_gen">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Procesador velocidad</td><td><input type="text" placeholder="Flotante" name="procesador_mhz" value="{{ $specLaptop->procesador_mhz }}">00.0 MHZ</td>
        </tr>
        <tr>
            <td>Procesador núcleos</td><td><input type="text" placeholder="Numérico" name="procesador_nucleos" value="{{ $specLaptop->procesador_nucleos }}"></td>
        </tr>
        <tr>
            <td>Tarjeta gráfica</td><td><input type="text" placeholder="Booleano" name="tarjetag" value="{{ $specLaptop->tarjetag }}">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Tarjeta gráfica marca</td><td><input type="text" placeholder="Alfanumérico" name="tarjetag_marca" value="{{ $specLaptop->tarjetag_marca }}"></td>
        </tr>
        <tr>
            <td>Tarjeta gráfica modelo</td><td><input type="text" placeholder="Alfanumérico" name="tarjetag_modelo" value="{{ $specLaptop->tarjetag_modelo }}"></td>
        </tr>
        <tr>
            <td>Tarjeta gráfica tipo de memoria</td><td><input type="text" placeholder="Alfanumérico" name="tarjetag_tipomemoria" value="{{ $specLaptop->tarjetag_tipomemoria }}"></td>
        </tr>
        <tr>
            <td>Tarjeta gráfica GB</td><td><input type="text" placeholder="Numérico" name="tarjetag_gb" value="{{ $specLaptop->tarjetag_gb }}">GB</td>
        </tr>
        <tr>
            <td>Pantalla tipo</td><td>
                <select name="pantalla_tipo" id="pantalla_tipo">
                    <option value="LED">LED</option>
                    <option value="LCD">LCD</option>
                    <option value="TFT">TFT</option>
                    <option value="IPS">IPS</option>
                    <option value="OLED">OLED</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Pantalla tamaño</td><td><input type="text" placeholder="Flotante" name="pantalla_tamano" value="{{ $specLaptop->pantalla_tamano }}">00.0 "</td>
        </tr>
        <tr>
            <td>Pantalla táctil</td><td><input type="text" placeholder="Booleano" name="pantalla_tactil" value="{{ $specLaptop->pantalla_tactil }}">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Pantalla resolución</td><td><input type="text" placeholder="Flotante" name="pantalla_resolucion" value="{{ $specLaptop->pantalla_resolucion }}">00.00</td>
        </tr>
        <tr>
            <td>Teclado idioma</td><td>
                <select name="teclado_idioma" id="teclado_idioma">
                    <option value="Español">Español</option>
                    <option value="Inglés">Inglés</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Teclado retroiluminado</td><td><input type="text" placeholder="Booleano" name="teclado_retroi" value="{{ $specLaptop->teclado_retroi }}">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Teclado numérico</td><td><input type="text" placeholder="Booleano" name="teclado_num" value="{{ $specLaptop->teclado_num }}">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Conectividad cantidad de USB 2.0</td><td><input type="text" placeholder="Numérico" name="conectv_usb2" value="{{ $specLaptop->conectv_usb2 }}">Mínimo 0</td>
        </tr>
        <tr>
            <td>Conectividad cantidad de USB 3.0</td><td><input type="text" placeholder="Numérico" name="conectv_usb3" value="{{ $specLaptop->conectv_usb3 }}">Mínimo 0</td>
        </tr>
        <tr>
            <td>Conectividad cantidad de USB C</td><td><input type="text" placeholder="Numérico" name="conectv_usbc" value="{{ $specLaptop->conectv_usbc }}">Mínimo 0</td>
        </tr>
        <tr>
            <td>Conectividad Wifi</td><td><input type="text" placeholder="Booleano" name="conectv_wifi" value="{{ $specLaptop->conectv_wifi }}">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Conectividad Bluetooth</td><td><input type="text" placeholder="Booleano" name="conectv_bluetooth" value="{{ $specLaptop->conectv_bluetooth }}">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Conectividad JACK</td><td><input type="text" placeholder="Booleano" name="conectv_jack" value="{{ $specLaptop->conectv_jack }}">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Conectividad HDMI</td><td><input type="text" placeholder="Booleano" name="conectv_hdmi" value="{{ $specLaptop->conectv_hdmi }}">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Conectividad VGA</td><td><input type="text" placeholder="Booleano" name="conectv_vga" value="{{ $specLaptop->conectv_vga }}">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Conectividad Display port</td><td><input type="text" placeholder="Booleano" name="conectv_displayp" value="{{ $specLaptop->conectv_displayp }}">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Conectividad Ethernet</td><td><input type="text" placeholder="Booleano" name="conectv_ethernet" value="{{ $specLaptop->conectv_ethernet }}">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Conectividad SerialCOM</td><td><input type="text" placeholder="Booleano" name="conectv_serialcom" value="{{ $specLaptop->conectv_serialcom }}">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Conectividad IEEE1394</td><td><input type="text" placeholder="Booleano" name="conectv_ieee1394" value="{{ $specLaptop->conectv_ieee1394 }}">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Sistema Operativo</td><td><input type="text" placeholder="Alfanumérico" name="so" value="{{ $specLaptop->so }}"></td>
        </tr>
        <tr>
            <td>Software adicional</td><td><textarea name="software_ad" onkeyup="countChars(this)" style="height: 100px">{{ $specLaptop->software_ad }}</textarea><label id="charNum">0 caracteres</label></td>
        </tr>
        <tr>
            <td>Audio y video Cámara</td><td><input type="text" placeholder="Booleano" name="audiov_camara" value="{{ $specLaptop->audiov_camara }}">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Audio y video Micrófono</td><td><input type="text" placeholder="Booleano" name="audiov_microfono" value="{{ $specLaptop->audiov_microfono }}">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Lectura Unidad Optica</td><td><input type="text" placeholder="Booleano" name="lectura_unidadoptica" value="{{ $specLaptop->lectura_unidadoptica }}">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Lectura SD</td><td><input type="text" placeholder="Booleano" name="lectura_sd" value="{{ $specLaptop->lectura_sd }}">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Bateria tipo</td><td>
                <select name="bateria_tipo" id="bateria_tipo">
                    <option value="Ion-Litio">Ion-Litio</option>
                    <option value="Polimero-Litio" >Polimero-Litio</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Bateria cantidad de celdas</td><td><input type="text" placeholder="Numérico" name="bateria_celdas" value="{{ $specLaptop->bateria_celdas}}"></td>
        </tr>
    </table>

    <br><input type="submit" value="Actualizar">
    
</form><br>

<a href="{{ route('panel.index') }}">Volver al panel</a><br><br>

<script>
    // Contador de caracteres
    function countChars(obj){
        document.getElementById('charNum').innerHTML = obj.value.length+' caracteres';
    }

    // Recuperación de índices
    function selectsEdit() {

        // Creamos la colección (selectID: consulta)
        let selectSpec = {'status_usage' :   '{{ $specLaptop->product->status_usage }}',
                          'procesador_gen' : '{{ $specLaptop->procesador_gen }}',
                          'pantalla_tipo' :  '{{ $specLaptop->pantalla_tipo }}',
                          'teclado_idioma' : '{{ $specLaptop->teclado_idioma }}',
                          'bateria_tipo' :   '{{ $specLaptop->bateria_tipo }}'}

        // Asignamos claves y valores
        for(const spec in selectSpec){

            // Obtenemos la colección de options desde la id del select
            let selectOptions = document.getElementById(spec).getElementsByTagName('option');

            // Recorremos el objeto
            for(i = 0; i < selectOptions.length; i++){
                
                // Comparamos si el texto de la option en la posición i es el mismo
                // que el de la base de datos, si es así, asignamos el atributo selected
                // y el valor true, si no, continuamos con la siguiente posición
                if(selectOptions[i].text == selectSpec[spec]){
                    selectOptions[i].setAttribute('selected', true);
                }
            }
        }
    }
    selectsEdit();

    // Nos desplaza hacia la altura máxima de nuestra página
    document.getElementById('scroll-top').addEventListener('click', () => window.scrollTo(0, 0));
    // Nos desplaza hacia la altura mínima de nuestra página
    document.getElementById('scroll-bot').addEventListener('click', () => window.scrollTo(0, 1170));
</script>
@endsection