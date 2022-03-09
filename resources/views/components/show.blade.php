<form>
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
        <h2>Ver Laptop {{ $specLaptop->equipo_marca}} {{ $specLaptop->equipo_linea}} {{ $specLaptop->equipo_modelo}} con ID {{ $specLaptop->id}}</h2>
    </div>
    @csrf
    {{--*
        * GRUPO NAME *
        * Contiene 3 campos necesarios para formar el nombre del producto.
    --}}
    <div class="group group--name">
        <div class="instructions">
            <h3>Nombre</h3>
            <p class="p--description"></p>
        </div>
        <div class="fields">
            <div class="item">
                <div class="name">
                    <p>Marca</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="equipo_marca" id="equipo_marca" class="input--ow outl--blue-ow" tabindex="1"
                    readonly value="{{ $specLaptop->equipo_marca }}">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Línea</p>
                </div>
                <div class="input input-min">
                    <input type="text"  name="equipo_linea" id="equipo_linea" class="input--ow outl--blue-ow" tabindex="1"
                    readonly value="{{ $specLaptop->equipo_linea }}">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Modelo</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="equipo_modelo" id="equipo_modelo" class="input--ow outl--blue-ow" tabindex="1"
                    readonly value="{{ $specLaptop->equipo_modelo }}">
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
            <p class="p--description"></p>
        </div>
        <div class="fields">
            <div class="item">
                <div class="name">
                    <p>SKU</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="sku" id="sku" class="input--ow outl--blue-ow" tabindex="1"
                    readonly value="{{ $specLaptop->product->sku }}">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Precio</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="price" id="price" class="input--ow outl--blue-ow" tabindex="1"
                    readonly value="@convert($specLaptop->product->price)">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Descuento</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="price_discount" id="price_discount" class="input--ow outl--blue-ow" tabindex="1"
                    readonly value="@convert($specLaptop->product->price_discount)">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Estado del equipo</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="status_usage" id="status_usage" class="input--ow outl--blue-ow" tabindex="1"
                    readonly value="{{ $specLaptop->product->status_usage }}">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Estética del equipo</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="status_aesthetic" id="status_aesthetic" class="input--ow outl--blue-ow" tabindex="1"
                    readonly value="{{ $specLaptop->product->status_aesthetic }}">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Garantía</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="warranty_days" id="warranty_days" class="input--ow outl--blue-ow" tabindex="1"
                    readonly value="{{ $specLaptop->product->warranty_days }}">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Soporte</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="support" id="support" class="input--ow outl--blue-ow" tabindex="1"
                    readonly value="{{ $specLaptop->product->support }}">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Envio</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="delivery" id="delivery" class="input--ow outl--blue-ow" tabindex="1"
                    readonly value="{{ $specLaptop->product->delivery }}">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Stock</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="stock" id="stock" class="input--ow outl--blue-ow" tabindex="1"
                    readonly value="{{ $specLaptop->product->inventory->stock }}">
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
            <p class="p--description"></p>
        </div>
        <div class="fields">
            <div class="item item-file-upload">
                @if ($specLaptop->product->file->image_1)
                    <div class="file-upload">
                        <span>1</span>
                        <div class="file" id="file-1">
                            <img src="{{ asset($specLaptop->product->file->image_1) }}">
                        </div>
                        @if ($specLaptop->product->file->image_1)
                            @php $imageName = str_replace('/storage/images/upload/', '', $specLaptop->product->file->image_1) @endphp
                        @else
                            @php $imageName = 'Seleccionar imagen' @endphp
                        @endif
                        <input type="text" class="file-name" id="file-name-1" value="{{ $imageName }}" tabindex="-1" readonly>
                    </div>
                    @if ($specLaptop->product->file->image_2)
                        <div class="file-upload">
                            <span>2</span>
                            <div class="file" id="file-2">
                                <img src="{{ asset($specLaptop->product->file->image_2) }}">
                            </div>
                            @if ($specLaptop->product->file->image_2)
                                @php $imageName = str_replace('/storage/images/upload/', '', $specLaptop->product->file->image_2) @endphp
                            @else
                                @php $imageName = 'Seleccionar imagen' @endphp
                            @endif
                            <input type="text" class="file-name" id="file-name-2" value="{{ $imageName }}" tabindex="-1" readonly>
                        </div>
                    @endif
                    @if ($specLaptop->product->file->image_3)
                        <div class="file-upload">
                            <span>3</span>
                            <div class="file" id="file-3">
                                <img src="{{ asset($specLaptop->product->file->image_3) }}">
                            </div>
                            @if ($specLaptop->product->file->image_3)
                                @php $imageName = str_replace('/storage/images/upload/', '', $specLaptop->product->file->image_3) @endphp
                            @else
                                @php $imageName = 'Seleccionar imagen' @endphp
                            @endif
                            <input type="text" class="file-name" id="file-name-3" value="{{ $imageName }}" tabindex="-1" readonly>
                        </div>
                    @endif
                    @if ($specLaptop->product->file->image_4)
                        <div class="file-upload">
                            <span>4</span>
                            <div class="file" id="file-4">
                                <img src="{{ asset($specLaptop->product->file->image_4) }}">
                            </div>
                            @if ($specLaptop->product->file->image_4)
                                @php $imageName = str_replace('/storage/images/upload/', '', $specLaptop->product->file->image_4) @endphp
                            @else
                                @php $imageName = 'Seleccionar imagen' @endphp
                            @endif
                            <input type="text" class="file-name" id="file-name-4" value="{{ $imageName }}" tabindex="-1" readonly>
                        </div>
                    @endif
                    @if ($specLaptop->product->file->image_5)
                        <div class="file-upload">
                            <span>5</span>
                            <div class="file" id="file-5">
                                <img src="{{ asset($specLaptop->product->file->image_5) }}">
                            </div>
                            @if ($specLaptop->product->file->image_5)
                                @php $imageName = str_replace('/storage/images/upload/', '', $specLaptop->product->file->image_5) @endphp
                            @else
                                @php $imageName = 'Seleccionar imagen' @endphp
                            @endif
                            <input type="text" class="file-name" id="file-name-5" value="{{ $imageName }}" tabindex="-1" readonly>
                        </div>
                    @endif
                    @if ($specLaptop->product->file->image_6)
                        <div class="file-upload">
                            <span>6</span>
                            <div class="file" id="file-6">
                                <img src="{{ asset($specLaptop->product->file->image_6) }}">
                            </div>
                            @if ($specLaptop->product->file->image_6)
                                @php $imageName = str_replace('/storage/images/upload/', '', $specLaptop->product->file->image_6) @endphp
                            @else
                                @php $imageName = 'Seleccionar imagen' @endphp
                            @endif
                            <input type="text" class="file-name" id="file-name-6" value="{{ $imageName }}" tabindex="-1" readonly>
                        </div>
                    @endif
                    @if ($specLaptop->product->file->image_7)
                        <div class="file-upload">
                            <span>7</span>
                            <div class="file" id="file-7">
                                <img src="{{ asset($specLaptop->product->file->image_7) }}">
                            </div>
                            @if ($specLaptop->product->file->image_7)
                                @php $imageName = str_replace('/storage/images/upload/', '', $specLaptop->product->file->image_7) @endphp
                            @else
                                @php $imageName = 'Seleccionar imagen' @endphp
                            @endif
                            <input type="text" class="file-name" id="file-name-7" value="{{ $imageName }}" tabindex="-1" readonly>
                        </div>
                    @endif
                @else
                    <p class="p--description">Esta laptop no cuenta con imagenes.</p>
                @endif
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
            <p class="p--description"></p>
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
                        <div class="input input-min">
                            <input type="text" name="ram_gb" id="ram_gb" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->ram_gb }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Tipo de RAM</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="ram_tipo" id="ram_tipo" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->ram_tipo }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Disco duro</p>
                        </div>
                        <div class="input input-min discod">
                            <input type="text" name="discod_amount" id="discod_amount" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->discod_gb }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Tipo de disco duro</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="discod_tipo" id="discod_tipo" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->discod_tipo }}">
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
                            <input type="text" name="procesador_marca" id="procesador_marca" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->procesador_marca }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Línea</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="procesador_linea" id="procesador_linea" class="input--ow outl--blue-ow" placeholder="Línea de procesador" tabindex="1"
                            readonly value="{{ $specLaptop->procesador_linea }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Modelo</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="procesador_modelo" id="procesador_modelo" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->procesador_modelo }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Generación</p>
                        </div>
                        <div class="input input-min">
                            @php
                                if($specLaptop->procesador_gen == 0){ 
                                    $gen = 'No aplica';
                                } else {
                                    $gen = $specLaptop->procesador_gen;
                                }
                            @endphp
                            <input type="text" name="procesador_gen" id="procesador_gen" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $gen }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Velocidad</p>
                        </div>
                        <div class="input input-min input-min--label-right">
                            <input type="text"  name="procesador_ghz" id="procesador_ghz" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->procesador_ghz }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Cantidad de nucleos</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="procesador_nucleos" id="procesador_nucleos" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->procesador_nucleos }}">
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
                            @if ($specLaptop->tarjetag == 1)
                                <input type="text" name="tarjetag" id="tarjetag" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="Si">
                            @else
                                <input type="text" name="tarjetag" id="tarjetag" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="No">
                            @endif
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Marca</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="tarjetag_marca" id="tarjetag_marca" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->tarjetag_marca }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Modelo</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="tarjetag_modelo" id="tarjetag_modelo" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->tarjetag_modelo }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Tipo de memoria</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="tarjetag_tipomemoria" id="tarjetag_tipomemoria" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->tarjetag_tipomemoria }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Cantidad de memoria</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="tarjetag_gb" id="tarjetag_gb" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->tarjetag_gb }}">
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
                            <input type="text" name="pantalla_tipo" id="pantalla_tipo" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->pantalla_tipo }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Tamaño</p>
                        </div>
                        <div class="input input-min input-min--label-right">
                            <input type="text" name="pantalla_tamano" id="pantalla_tamano" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->pantalla_tamano }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Es táctil?</p>
                        </div>
                        <div class="input input-min">
                            @if ($specLaptop->pantalla_tactil == 1)
                                <input type="text" name="pantalla_tactil" id="pantalla_tactil" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="Si">
                            @else
                                <input type="text" name="pantalla_tactil" id="pantalla_tactil" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="No">
                            @endif
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Resolución</p>
                        </div>
                        <div class="input input-min input-min--label-right">
                            <input type="text" name="pantalla_resolucion" id="pantalla_resolucion" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->pantalla_resolucion }}">
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
                            <input type="text" name="teclado_idioma" id="teclado_idioma" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->teclado_idioma }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Es retroiluminado?</p>
                        </div>
                        <div class="input input-min">
                            @if ($specLaptop->teclado_retroi == 1)
                                <input type="text" name="teclado_retroi" id="teclado_retroi" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="Si">
                            @else
                                <input type="text" name="teclado_retroi" id="teclado_retroi" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="No">
                            @endif
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Tiene teclado númerico?</p>
                        </div>
                        <div class="input input-min">
                            @if ($specLaptop->teclado_num == 1)
                                <input type="text" name="teclado_num" id="teclado_num" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="Si">
                            @else
                                <input type="text" name="teclado_num" id="teclado_num" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="No">
                            @endif
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
                            <input type="text" name="conectv_usb2" id="conectv_usb2" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->conectv_usb2 }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>USB 3.0</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="conectv_usb3" id="conectv_usb3" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->conectv_usb3 }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>USB C</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="conectv_usbc" id="conectv_usbc" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->conectv_usbc }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con WiFi?</p>
                        </div>
                        <div class="input input-min">
                            @if ($specLaptop->conectv_wifi == 1)
                                <input type="text" name="conectv_wifi" id="conectv_wifi" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="Si">
                            @else
                                <input type="text" name="conectv_wifi" id="conectv_wifi" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="No">
                            @endif
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con Bluetooth?</p>
                        </div>
                        <div class="input input-min">
                            @if ($specLaptop->conectv_bluetooth == 1)
                                <input type="text" name="conectv_bluetooth" id="conectv_bluetooth" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="Si">
                            @else
                                <input type="text" name="conectv_bluetooth" id="conectv_bluetooth" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="No">
                            @endif
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con puerto jack?</p>
                        </div>
                        <div class="input input-min">
                            @if ($specLaptop->conectv_jack == 1)
                                <input type="text" name="conectv_jack" id="conectv_jack" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="Si">
                            @else
                                <input type="text" name="conectv_jack" id="conectv_jack" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="No">
                            @endif
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con puerto HDMI?</p>
                        </div>
                        <div class="input input-min">
                            @if ($specLaptop->conectv_hdmi == 1)
                                <input type="text" name="conectv_hdmi" id="conectv_hdmi" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="Si">
                            @else
                                <input type="text" name="conectv_hdmi" id="conectv_hdmi" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="No">
                            @endif
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con puerto VGA?</p>
                        </div>
                        <div class="input input-min">
                            @if ($specLaptop->conectv_vga == 1)
                                <input type="text" name="conectv_vga" id="conectv_vga" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="Si">
                            @else
                                <input type="text" name="conectv_vga" id="conectv_vga" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="No">
                            @endif
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con Display Port?</p>
                        </div>
                        <div class="input input-min">
                            @if ($specLaptop->conectv_displayp == 1)
                                <input type="text" name="conectv_displayp" id="conectv_displayp" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="Si">
                            @else
                                <input type="text" name="conectv_displayp" id="conectv_displayp" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="No">
                            @endif
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con puerto Ethernet?</p>
                        </div>
                        <div class="input input-min">
                            @if ($specLaptop->conectv_ethernet == 1)
                                <input type="text" name="conectv_ethernet" id="conectv_ethernet" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="Si">
                            @else
                                <input type="text" name="conectv_ethernet" id="conectv_ethernet" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="No">
                            @endif
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
                            <input type="text" name="so" id="" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->so }}">
                        </div>
                    </div>
                    <div class="item textarea">
                        <div class="name">
                            <p>Software adicional</p>
                        </div>
                        <div class="input input-min">
                            <textarea name="software_ad" id="software_ad" class="input--ow outl--blue-ow" tabindex="1" readonly>{{ $specLaptop->software_ad }}</textarea>
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
                            @if ($specLaptop->audiov_camara == 1)
                                <input type="text" name="audiov_camara" id="audiov_camara" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="Si">
                            @else
                                <input type="text" name="audiov_camara" id="audiov_camara" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="No">
                            @endif
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con micrófono?</p>
                        </div>
                        <div class="input input-min">
                            @if ($specLaptop->audiov_microfono == 1)
                                <input type="text" name="audiov_microfono" id="audiov_microfono" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="Si">
                            @else
                                <input type="text" name="audiov_microfono" id="audiov_microfono" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="No">
                            @endif
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
                            @if ($specLaptop->lectura_unidadoptica == 1)
                                <input type="text" name="lectura_unidadoptica" id="lectura_unidadoptica" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="Si">
                            @else
                                <input type="text" name="lectura_unidadoptica" id="lectura_unidadoptica" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="No">
                            @endif
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con unidad de lectura SD?</p>
                        </div>
                        <div class="input input-min">
                            @if ($specLaptop->lectura_sd == 1)
                                <input type="text" name="lectura_sd" id="lectura_sd" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="Si">
                            @else
                                <input type="text" name="lectura_sd" id="lectura_sd" class="input--ow outl--blue-ow" tabindex="1"
                                readonly value="No">
                            @endif
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
                            <input type="text" name="bateria_celdas" id="" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->bateria_tipo }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Celdas</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="bateria_celdas" id="" class="input--ow outl--blue-ow" tabindex="1"
                            readonly value="{{ $specLaptop->bateria_celdas }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
$(document).ready(function(){
    closeModal();
});    
</script>