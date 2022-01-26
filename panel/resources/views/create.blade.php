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

    <div class="imgPreview"> </div>
    <style>
        .imgPreview img{
            width: 250px;
            border: 1px solid red
        }
    </style>

    <table border="0" style="background: gainsboro">
        <caption style="text-align: left">Equipo</caption>
        <tr>
            <td>Marca</td><td><input type="text" placeholder="Alfanumérico" name="equipo_marca"></td>
        </tr>
        <tr>
            <td>Línea</td><td><input type="text" placeholder="Alfanumérico" name="equipo_linea"></td>
        </tr>
        <tr>
            <td>Modelo</td><td><input type="text" placeholder="Alfanumérico" name="equipo_modelo"></td>
        </tr>
    </table><br>

    <table border="0" style="background: gainsboro">
        <caption style="text-align: left">Características del producto</caption>
        <tr>
            <td>SKU</td><td><input type="text" placeholder="Alfanumérico" name="sku"></td>
        </tr>
        <tr>
            <td>Precio</td><td><input type="text" placeholder="Numérico" name="price"></td>
        </tr>
        <tr>
            <td>Precio con descuento</td><td><input type="text" placeholder="Numérico" name="price_discount">Dejar en blanco si no es necesario</td>
        </tr>
        <tr>
            <td>Uso</td><td>
                <select name="status_usage">
                    <option value="Nuevo">Nuevo</option>
                    <option value="Seminuevo">Seminuevo</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Estética</td><td><input type="text" placeholder="Numérico" name="status_aesthetics">Del 1 al 10</td>
        </tr>
        <tr>
            <td>Dias de garantía</td><td><input type="text" placeholder="Numérico" name="warranty_days"></td>
        </tr>
        <tr>
            <td>Meses de soporte</td><td><input type="text" placeholder="Alfanumérico" name="support" value="1 mes de soporte remoto sin costo">Solo cambiar el número de mes (1 mes, n meses...)</td>
        </tr>
        <tr>
            <td>Entrega</td><td><input type="text" value="Entrega a domicilio de inmediato" placeholder="Numérico" name="delivery"></td>
        </tr>
        <tr>
            <td>Imagen 1</td><td><input type="file" accept="image/*" id="images" name="image_1"><br></td>
        </tr>
        <tr>
            <td>Imagen 2</td><td><input type="file" accept="image/*" id="images" name="image_2"></td>
        </tr>
        <tr>
            <td>Imagen 3</td><td><input type="file" accept="image/*" id="images" name="image_3"></td>
        </tr>
        <tr>
            <td>Imagen 4</td><td><input type="file" accept="image/*" id="images" name="image_4"></td>
        </tr>
        <tr>
            <td>Imagen 5</td><td><input type="file" accept="image/*" id="images" name="image_5"></td>
        </tr>
        <tr>
            <td>Imagen 6</td><td><input type="file" accept="image/*" id="images" name="image_6"></td>
        </tr>
        <tr>
            <td>Imagen 7</td><td><input type="file" accept="image/*" id="images" name="image_7"></td>
        </tr>
        <tr>
            <td>Stock</td><td><input type="text" placeholder="numérico" name="stock"></td>
        </tr>
    </table><br>

    <table border="0" style="background: gainsboro">
        <caption style="text-align: left">Especificaciones del producto</caption>
        <tr>
            <td>Cantidad de RAM</td><td><input type="text" placeholder="Numérico" name="ram_gb">GB</td>
        </tr>
        <tr>
            <td>Tipo de RAM</td><td><input type="text" placeholder="Alfanumérico" name="ram_tipo"></td>
        </tr>
        <tr>
            <td>Disco duro cantidad de GB</td><td><input type="text" placeholder="Numérico" name="discod_gb" value="">GB</td>
        </tr>
        <tr>
            <td>Tipo de disco duro</td><td><input type="text" placeholder="Alfanumérico" name="discod_tipo"></td>
        </tr>
        <tr>
            <td>Procesador marca</td><td><input type="text" placeholder="Alfanumérico" name="procesador_marca"></td>
        </tr>
        <tr>
            <td>Procesador modelo</td><td><input type="text" placeholder="Alfanumérico" name="procesador_modelo"></td>
        </tr>
        <tr>
            <td>Procesador generación</td><td>
                <select name="procesador_gen">
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
            <td>Procesador velocidad</td><td><input type="text" placeholder="Flotante" name="procesador_mhz" value="">00.0 MHZ</td>
        </tr>
        <tr>
            <td>Procesador núcleos</td><td><input type="text" placeholder="Numérico" name="procesador_nucleos"></td>
        </tr>
        <tr>
            <td>Tarjeta gráfica</td><td><input type="text" placeholder="Booleano" name="tarjetag">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Tarjeta gráfica marca</td><td><input type="text" placeholder="Alfanumérico" name="tarjetag_marca"></td>
        </tr>
        <tr>
            <td>Tarjeta gráfica modelo</td><td><input type="text" placeholder="Alfanumérico" name="tarjetag_modelo"></td>
        </tr>
        <tr>
            <td>Tarjeta gráfica tipo de memoria</td><td><input type="text" placeholder="Alfanumérico" name="tarjetag_tipomemoria"></td>
        </tr>
        <tr>
            <td>Tarjeta gráfica GB</td><td><input type="text" placeholder="Numérico" name="tarjetag_gb">GB</td>
        </tr>
        <tr>
            <td>Pantalla tipo</td><td>
                <select name="pantalla_tipo">
                    <option value="LED">LED</option>
                    <option value="LCD">LCD</option>
                    <option value="TFT">TFT</option>
                    <option value="IPS">IPS</option>
                    <option value="OLED">OLED</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Pantalla tamaño</td><td><input type="text" placeholder="Flotante" name="pantalla_tamano">00.0 "</td>
        </tr>
        <tr>
            <td>Pantalla táctil</td><td><input type="text" placeholder="Booleano" name="pantalla_tactil">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Pantalla resolución</td><td><input type="text" placeholder="Flotante" name="pantalla_resolucion">00.00</td>
        </tr>
        <tr>
            <td>Teclado idioma</td><td>
                <select name="teclado_idioma">
                    <option value="Español">Español</option>
                    <option value="Inglés">Inglés</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Teclado retroiluminado</td><td><input type="text" placeholder="Booleano" name="teclado_retroi">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Teclado numérico</td><td><input type="text" placeholder="Booleano" name="teclado_num">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Conectividad cantidad de USB 2.0</td><td><input type="text" placeholder="Numérico" name="conectv_usb2">Mínimo 0</td>
        </tr>
        <tr>
            <td>Conectividad cantidad de USB 3.0</td><td><input type="text" placeholder="Numérico" name="conectv_usb3">Mínimo 0</td>
        </tr>
        <tr>
            <td>Conectividad cantidad de USB C</td><td><input type="text" placeholder="Numérico" name="conectv_usbc">Mínimo 0</td>
        </tr>
        <tr>
            <td>Conectividad Wifi</td><td><input type="text" placeholder="Booleano" name="conectv_wifi">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Conectividad Bluetooth</td><td><input type="text" placeholder="Booleano" name="conectv_bluetooth">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Conectividad JACK</td><td><input type="text" placeholder="Booleano" name="conectv_jack">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Conectividad HDMI</td><td><input type="text" placeholder="Booleano" name="conectv_hdmi">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Conectividad VGA</td><td><input type="text" placeholder="Booleano" name="conectv_vga">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Conectividad Display port</td><td><input type="text" placeholder="Booleano" name="conectv_displayp">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Conectividad Ethernet</td><td><input type="text" placeholder="Booleano" name="conectv_ethernet">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Conectividad SerialCOM</td><td><input type="text" placeholder="Booleano" name="conectv_serialcom">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Conectividad IEEE1394</td><td><input type="text" placeholder="Booleano" name="conectv_ieee1394">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Sistema Operativo</td><td><input type="text" placeholder="Alfanumérico" name="so"></td>
        </tr>
        <tr>
            <td>Software adicional</td><td><textarea name="software_ad" onkeyup="countChars(this)" style="height: 100px">Alfanumérico, agregar lista de programas, con un  máximo de 155 caracteres</textarea><label id="charNum">0 caracteres</label></td>
        </tr>
        <tr>
            <td>Audio y video Cámara</td><td><input type="text" placeholder="Booleano" name="audiov_camara">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Audio y video Micrófono</td><td><input type="text" placeholder="Booleano" name="audiov_microfono">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Lectura Unidad Optica</td><td><input type="text" placeholder="Booleano" name="lectura_unidadoptica">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Lectura SD</td><td><input type="text" placeholder="Booleano" name="lectura_sd">1 = Si, 0 = No</td>
        </tr>
        <tr>
            <td>Bateria tipo</td><td>
                <select name="bateria_tipo">
                    <option value="Ion-Litio">Ion-Litio</option>
                    <option value="Polimero-Litio">Polimero-Litio</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Bateria cantidad de celdas</td><td><input type="text" placeholder="Numérico" name="bateria_celdas"></td>
        </tr>
    </table>

    <br><input type="submit" value="Agregar">
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
    function countChars(obj){
        document.getElementById('charNum').innerHTML = obj.value.length+' caracteres';
    }

    // Multiple preview images
    $(function(){
        var multiImgPreview = function(input, imgPreviewPlaceholder){
            if(input.files){
                var filesAmount = input.files.length;

                for(i = 0; i < filesAmount; i++){
                    var reader = new FileReader();

                    reader.onload = function(e){
                        $($.parseHTML('<img>')).attr('src', e.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }
        };

        $('#images').on('change', function(){
            multiImgPreview(this, 'div.imgPreview');
        });
    });
</script>

<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>


@endsection