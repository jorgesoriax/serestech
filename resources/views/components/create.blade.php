<form action="{{ route('panel.store') }}" method="POST" enctype="multipart/form-data" class="form-create">
    {{--*
        * HEADER *
        * Encabezado para título de acción y botones.
    --}}
    <div class="header">
        <button class="button--neutral-ow sq btn-close" type="button">
            <i class='bx bx-arrow-back'></i>
            <div class="shortcut-keys">
                <div class="shortcut-key">Esc</div>
            </div>
        </button>
        <h2>Nuevo producto</h2>
        <button class="button--positive-ow btn-submit" type="submit" id="btn-submit--create" tabindex="2">Estoy listo</button>
    </div>
    @csrf
    {{--*
        * GRUPO NAME *
        * Contiene 3 campos necesarios para formar el nombre del producto.
    --}}
    <div class="group group--name">
        <div class="instructions">
            <h3>Nombre</h3>
            <p class="p--description">Comienza con rellenar los siguientes campos para indicar el nombre de tu laptop.</p>
        </div>
        <div class="fields">
            <div class="item">
                <div class="name">
                    <p>Marca</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="equipo_marca" id="equipo_marca" class="input--ow outl--blue-ow" required placeholder="Marca de laptop" tabindex="1">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Línea</p>
                </div>
                <div class="input input-min">
                    <input type="text"  name="equipo_linea" id="equipo_linea" class="input--ow outl--blue-ow" required placeholder="Línea de laptop" tabindex="1">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Modelo</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="equipo_modelo" id="equipo_modelo" class="input--ow outl--blue-ow" required placeholder="Modelo de laptop" tabindex="1">
                </div>
            </div>
        </div>
    </div>
    {{--*
        * GRUPO PRODUCT *
        * Contiene la información básica del producto.
    --}}
    <div class="group group--product">
        <div class="instructions">
            <h3>Características básicas</h3>
            <p class="p--description">Indica la información básica que indentifica a tu laptop como producto.</p>
        </div>
        <div class="fields">
            <div class="item">
                <div class="name">
                    <p>SKU</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="sku" id="sku" class="input--ow outl--blue-ow" required placeholder="#A1B2" tabindex="1">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Precio</p>
                </div>
                <div class="input input-min input-min--label-left">
                    <label for="price"><h3>$</h3></label>
                    <input type="text" name="price" id="price" class="input--ow outl--blue-ow" required placeholder="00.00" tabindex="1">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Descuento</p>
                </div>
                <div class="input input-min input-min--label-left">
                    <label for="price_discount"><h3>$</h3></label>
                    <input type="text" name="price_discount" id="price_discount" class="input--ow outl--blue-ow" placeholder="00.00 (Descuento aplicado)" tabindex="1">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Estado del equipo</p>
                </div>
                <div class="input input-min">
                    <select name="status_usage" id="status_usage" class="input--ow outl--blue-ow" required tabindex="1">
                        <option value="Nuevo">Nuevo</option>
                        <option value="Seminuevo">Seminuevo</option>
                    </select>
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Estética del equipo</p>
                </div>
                <div class="input input-min">
                    <select name="status_aesthetic" id="status_aesthetic" class="input--ow outl--blue-ow" required tabindex="1">
                        <option value="10">10</option>
                        <option value="9.5">9.5</option>
                        <option value="9">9</option>
                        <option value="8.5">8.5</option>
                        <option value="8">8</option>
                        <option value="7.5">7.5</option>
                        <option value="7">7</option>
                    </select>
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Garantía</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="warranty_days" id="warranty_days" class="input--ow outl--blue-ow" required placeholder="Días de duración" tabindex="1">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Soporte</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="support" value="1 mes de soporte remoto y presencial sin costo" id="support" class="input--ow outl--blue-ow" required placeholder="Duración y tipo de soporte" tabindex="1">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Envio</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="delivery" value="Entrega inmediata" id="delivery" class="input--ow outl--blue-ow" required placeholder="Tipo de entrega" tabindex="1">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Stock</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="stock" id="stock" class="input--ow outl--blue-ow" required placeholder="Unidades disponibles" tabindex="1">
                </div>
            </div>
        </div>
    </div>
    {{--*
        * GRUPO IMAGES *
        * Contiene solo inputs para imágenes.
    --}}
    <div class="group group--images">
        <div class="instructions">
            <h3>Imagenes</h3>
            <p class="p--description">Las imágenes son redimensionadas a 600 x 600 pixeles, se recomienda centrar el contenido importante con un margen considerable.</p>
        </div>
        <div class="fields">
            <div class="item item-file-upload">
                @for ($i = 1; $i <= 7; $i++)
                    <div class="file-upload">
                        <span>{{ $i }}</span>
                        <button type="button" class="button--neutral-ow sq outl--blue-ow btn-upload-cancel" id="{{ 'btn-upload-cancel-'.$i }}"><i class='bx bx-x'></i></button>
                        <input type="file" accept="image/*" class="input-file" id="{{ 'image_'.$i }}" name="{{ 'image_'.$i }}" tabindex="-1">
                        <div class="container-file">
                            <div class="file" id="{{ 'file-'.$i }}"></div>
                            <input type="text" class="file-name" id="{{ 'file-name-'.$i }}" value="Seleccione una imagen" tabindex="-1" readonly>
                        </div>
                        <label for="{{ 'image_'.$i }}" class="btn-upload button--alternative-ow" id="{{ 'btn-upload-'.$i }}" tabindex="1">Elegir imagen</label>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    {{--*
        * GRUPO SPECIFICATIONS *
        * Contiene todas las especificaciones del producto.
    --}}
    <div class="group group--specs">
        <div class="instructions">
            <h3>Características especificas</h3>
            <p class="p--description">Por último, indica todas las especificaciones de tu laptop.</p>
        </div>
        <div class="fields">
            {{--*
                * SUBGRUPO ALMACENAMIENTO *
            --}}
            <div class="group subgroup subgroup--almacenamiento">
                <div class="instructions">
                    <h3>Almacenamiento</h3>
                    <p class="p--description"></p>
                </div>
                <div class="fields">
                    <div class="item">
                        <div class="name">
                            <p>RAM</p>
                        </div>
                        <div class="input input-min input-min--label-right">
                            <label for="ram_gb">GB</label>
                            <input type="text" name="ram_gb" id="ram_gb" class="input--ow outl--blue-ow" required placeholder="Cantidad de memoria RAM" tabindex="1">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Tipo de RAM</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="ram_tipo" id="ram_tipo" class="input--ow outl--blue-ow" required placeholder="Tipo de memoria RAM" tabindex="1">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Disco duro</p>
                        </div>
                        <div class="input input-min discod">
                            <input type="text" name="discod_amount" id="discod_amount" class="input--ow outl--blue-ow" required placeholder="Cantidad de almacenamiento" tabindex="1">
                            <select name="discod_storage" id="discod_storage" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="GB">GB</option>
                                <option value="TB">TB</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Tipo de disco duro</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="discod_tipo" id="discod_tipo" class="input--ow outl--blue-ow" required placeholder="Tipo de disco duro" tabindex="1">
                        </div>
                    </div>
                </div>
            </div>
            {{--*
                * SUBGRUPO PROCESADOR *
            --}}
            <div class="group subgroup subgroup--procesador">
                <div class="instructions">
                    <h3>Procesador</h3>
                    <p class="p--description"></p>
                </div>
                <div class="fields">
                    <div class="item">
                        <div class="name">
                            <p>Marca</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="procesador_marca" id="procesador_marca" class="input--ow outl--blue-ow" required placeholder="Marca de procesador" tabindex="1">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Línea</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="procesador_linea" id="procesador_linea" class="input--ow outl--blue-ow" required placeholder="Línea de procesador" tabindex="1">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Modelo</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="procesador_modelo" id="procesador_modelo" class="input--ow outl--blue-ow" required placeholder="Modelo de procesador" tabindex="1">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Generación</p>
                        </div>
                        <div class="input input-min">
                            <select name="procesador_gen" id="procesador_gen" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="0">No aplica</option>
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
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Velocidad</p>
                        </div>
                        <div class="input input-min input-min--label-right">
                            <label for="procesador_ghz">GHz</label>
                            <input type="text"  name="procesador_ghz" id="procesador_ghz" class="input--ow outl--blue-ow" required placeholder="Velocidad de procesador" tabindex="1">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Cantidad de nucleos</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="procesador_nucleos" id="procesador_nucleos" class="input--ow outl--blue-ow" required placeholder="Cantidad de nucleos del procesador" tabindex="1">
                        </div>
                    </div>
                </div>
            </div>
            {{--*
                * SUBGRUPO TARJETA GRÁFICA *
            --}}
            <div class="group subgroup subgroup--tarjetag">
                <div class="instructions">
                    <h3>Tarjeta gráfica</h3>
                    <p class="p--description"></p>
                </div>
                <div class="fields">
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con tarjeta gráfica?</p>
                        </div>
                        <div class="input input-min">
                            <select name="tarjetag" id="tarjetag" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Marca</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="tarjetag_marca" id="tarjetag_marca" class="input--ow outl--blue-ow" placeholder="Marca de tarjeta gráfica" tabindex="1">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Modelo</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="tarjetag_modelo" id="tarjetag_modelo" class="input--ow outl--blue-ow" placeholder="Modelo de tarjeta gráfica" tabindex="1">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Tipo de memoria</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="tarjetag_tipomemoria" id="tarjetag_tipomemoria" class="input--ow outl--blue-ow" placeholder="Tipo de memoria de la tarjeta gráfica" tabindex="1">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Cantidad de memoria</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="tarjetag_gb" id="tarjetag_gb" class="input--ow outl--blue-ow" placeholder="Cantidad de memoria" tabindex="1">
                        </div>
                    </div>
                </div>
            </div>
            {{--*
                * SUBGRUPO PANTALLA *
            --}}
            <div class="group subgroup subgroup--pantalla">
                <div class="instructions">
                    <h3>Pantalla</h3>
                    <p class="p--description"></p>
                </div>
                <div class="fields">
                    <div class="item">
                        <div class="name">
                            <p>Tipo</p>
                        </div>
                        <div class="input input-min">
                            <select name="pantalla_tipo" id="pantalla_tipo" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="LED">LED</option>
                                <option value="LCD">LCD</option>
                                <option value="TFT">TFT</option>
                                <option value="IPS">IPS</option>
                                <option value="OLED">OLED</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Tamaño</p>
                        </div>
                        <div class="input input-min input-min--label-right">
                            <label for="pantalla_tamano">"</label>
                            <input type="text" name="pantalla_tamano" id="pantalla_tamano" class="input--ow outl--blue-ow" required placeholder="Tamaño de pantalla en pulgadas" tabindex="1">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Es táctil?</p>
                        </div>
                        <div class="input input-min">
                            <select name="pantalla_tactil" id="pantalla_tactil" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Resolución X</p>
                        </div>
                        <div class="input input-min input-min--label-right">
                            <label for="pantalla_resolucion">x</label>
                            <input type="text" name="pantalla_resolucion" id="pantalla_resolucion" class="input--ow outl--blue-ow" required placeholder="Resolución X" tabindex="1">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Resolución Y</p>
                        </div>
                        <div class="input input-min input-min--label-right">
                            <label for="pantalla_resolucion_y">px</label>
                            <input type="text" name="pantalla_resolucion_y" id="pantalla_resolucion_y" class="input--ow outl--blue-ow" required placeholder="Resolución Y" tabindex="1">
                        </div>
                    </div>
                </div>
            </div>
            {{--*
                * SUBGRUPO TECLADO *
            --}}
            <div class="group subgroup subgroup--teclado">
                <div class="instructions">
                    <h3>Teclado</h3>
                    <p class="p--description"></p>
                </div>
                <div class="fields">
                    <div class="item">
                        <div class="name">
                            <p>Idioma</p>
                        </div>
                        <div class="input input-min">
                            <select name="teclado_idioma" id="teclado_idioma" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="Español">Español</option>
                                <option value="Inglés">Inglés</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Es retroiluminado?</p>
                        </div>
                        <div class="input input-min">
                            <select name="teclado_retroi" id="teclado_retroi" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Tiene teclado númerico?</p>
                        </div>
                        <div class="input input-min">
                            <select name="teclado_num" id="teclado_num" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            {{--*
                * SUBGRUPO CONECTIVIDAD *
            --}}
            <div class="group subgroup subgroup--conectv">
                <div class="instructions">
                    <h3>Conectividad</h3>
                    <p class="p--description"></p>
                </div>
                <div class="fields">
                    <div class="item">
                        <div class="name">
                            <p>USB 2.0</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="conectv_usb2" id="conectv_usb2" class="input--ow outl--blue-ow" required placeholder="Cantidad de puertos USB 2.0" tabindex="1">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>USB 3.0</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="conectv_usb3" id="conectv_usb3" class="input--ow outl--blue-ow" required placeholder="Cantidad de puertos USB 3.0" tabindex="1">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>USB C</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="conectv_usbc" id="conectv_usbc" class="input--ow outl--blue-ow" required placeholder="Cantidad de puertos USB C" tabindex="1">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con WiFi?</p>
                        </div>
                        <div class="input input-min">
                            <select name="conectv_wifi" id="conectv_wifi" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con Bluetooth?</p>
                        </div>
                        <div class="input input-min">
                            <select name="conectv_bluetooth" id="conectv_bluetooth" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con puerto jack?</p>
                        </div>
                        <div class="input input-min">
                            <select name="conectv_jack" id="conectv_jack" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con puerto HDMI?</p>
                        </div>
                        <div class="input input-min">
                            <select name="conectv_hdmi" id="conectv_hdmi" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con puerto VGA?</p>
                        </div>
                        <div class="input input-min">
                            <select name="conectv_vga" id="conectv_vga" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con Display Port?</p>
                        </div>
                        <div class="input input-min">
                            <select name="conectv_displayp" id="conectv_displayp" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con puerto Ethernet?</p>
                        </div>
                        <div class="input input-min">
                            <select name="conectv_ethernet" id="conectv_ethernet" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            {{--*
                * SUBGRUPO SOFTWARE *
            --}}
            <div class="group subgroup subgroup--software">
                <div class="instructions">
                    <h3>Software</h3>
                    <p class="p--description"></p>
                </div>
                <div class="fields">
                    <div class="item">
                        <div class="name">
                            <p>Sistema operativo</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="so" id="" class="input--ow outl--blue-ow" value="Windows 10 Pro" required placeholder="Nombre y versión de SO instalado" tabindex="1">
                        </div>
                    </div>
                    <div class="item textarea">
                        <div class="name">
                            <p>Software adicional</p>
                        </div>
                        <div class="input input-min">
                            <textarea name="software_ad" id="software_ad" class="input--ow outl--blue-ow" required placeholder="Lista de software adicional instalado separada por comas" tabindex="1">Adobe Reader, Java, Winrar, Office 201x, Actualizaciones</textarea>
                        </div>
                    </div>
                </div>
            </div>
            {{--*
                * SUBGRUPO AUDIO Y VIDEO *
            --}}
            <div class="group subgroup subgroup--audiov">
                <div class="instructions">
                    <h3>Audio y video</h3>
                    <p class="p--description"></p>
                </div>
                <div class="fields">
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con cámara?</p>
                        </div>
                        <div class="input input-min">
                            <select name="audiov_camara" id="audiov_camara" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con micrófono?</p>
                        </div>
                        <div class="input input-min">
                            <select name="audiov_microfono" id="audiov_microfono" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            {{--*
                * SUBGRUPO LECTURA *
            --}}
            <div class="group subgroup subgroup--lectura">
                <div class="instructions">
                    <h3>Lectura</h3>
                    <p class="p--description"></p>
                </div>
                <div class="fields">
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con unidad de lectura óptica?</p>
                        </div>
                        <div class="input input-min">
                            <select name="lectura_unidadoptica" id="lectura_unidadoptica" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con unidad de lectura SD?</p>
                        </div>
                        <div class="input input-min">
                            <select name="lectura_sd" id="lectura_sd" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            {{--*
                * SUBGRUPO BATERÍA *
            --}}
            <div class="group subgroup subgroup--bateria">
                <div class="instructions">
                    <h3>Batería</h3>
                    <p class="p--description"></p>
                </div>
                <div class="fields">
                    <div class="item">
                        <div class="name">
                            <p>¿Con qué tipo de batería cuenta?</p>
                        </div>
                        <div class="input input-min">
                            <select name="bateria_tipo" id="bateria_tipo" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="Ion-Litio">Ion-Litio</option>
                                <option value="Polimero-Litio">Polimero-Litio</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Celdas</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="bateria_celdas" id="bateria_celdas" class="input--ow outl--blue-ow" required placeholder="Cantidad de celdas de la batería" tabindex="1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
$(document).ready(function(){
    let createFields = {
        '#equipo_marca'          : 'A',
        '#equipo_linea'          : 'B',
        '#equipo_modelo'         : 'C',
        '#sku'                   : 'A1',
        '#price'                 : 12000,
        '#warranty_days'         : 120,
        '#stock'                 : 300,
        '#ram_gb'                : 4,
        '#ram_tipo'              : 'DDR4',
        '#discod_amount'         : '5',
        '#discod_tipo'           : 'SSD',
        '#procesador_marca'      : 'A',
        '#procesador_linea'      : 'B',
        '#procesador_modelo'     : 'C',
        '#procesador_ghz'        : 5.6,
        '#procesador_nucleos'    : 8,
        '#tarjetag_marca'        : 'A',
        '#tarjetag_modelo'       : 'B',
        '#tarjetag_tipomemoria'  : 'C',
        '#tarjetag_gb'           : 2,
        '#pantalla_tamano'       : 16.9,
        '#pantalla_resolucion'   : 1920,
        '#pantalla_resolucion_y' : 1080,
        '#conectv_usb2'          : 1,
        '#conectv_usb3'          : 2,
        '#conectv_usbc'          : 3,
        '#bateria_celdas'        : 40
    }
    for(const createField in createFields){
        $(createField).val(createFields[createField]);
    }
})
</script>
<script>
$(document).ready(function(){
    let createSelects = {
            'pantalla_tactil'      : 0, 
            'teclado_idioma'       : 'Inglés', 
            'teclado_retroi'       : 0, 
            'teclado_num'          : 0, 
            'conectv_vga'          : 0, 
            'conectv_displayp'     : 0,  
            'lectura_unidadoptica' : 0,
    };
    closeModal();
    fieldLoadFocus();
    tarjetagYN();
    $('.btn-submit').click( () => checkForm() );
    imgPreview();
    shortcutBtnUpload();
    selectsValue(createSelects);
});
</script>