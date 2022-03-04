<script src="{{ asset('vendor/jquery-3.6.0/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/jquery-validation-1.19.3/dist/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/jquery-validation-1.19.3/dist/additional-methods.min.js') }}"></script>
<script src="{{ asset('storage/js/panelEdit.js') }}"></script>

<form action="{{ route('panel.update', $specLaptop) }}" method="POST" enctype="multipart/form-data" class="form-edit">
    {{--*
        * HEADER *
        * Encabezado para título de acción y botones.
    --}}
    <div class="header">
        <button class="button--neutral-ow sq btn-close" type="button"><i class='bx bx-arrow-back'></i></button>
        <h2>Editar Laptop {{ $specLaptop->equipo_marca}} {{ $specLaptop->equipo_linea}} {{ $specLaptop->equipo_modelo}} con ID {{ $specLaptop->id}}
        </h2>
        <button class="button--positive-ow btn-submit" type="submit" tabindex="2">Estoy listo</button>
    </div>
    @csrf
    @method('put')
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
                    <input type="text" name="equipo_marca" id="equipo_marca" class="input--ow outl--blue-ow" required placeholder="Marca de laptop" tabindex="1"
                    value="{{ $specLaptop->equipo_marca }}">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Línea</p>
                </div>
                <div class="input input-min">
                    <input type="text"  name="equipo_linea" id="equipo_linea" class="input--ow outl--blue-ow" required placeholder="Línea de laptop" tabindex="1"
                    value="{{ $specLaptop->equipo_linea }}">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Modelo</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="equipo_modelo" id="equipo_modelo" class="input--ow outl--blue-ow" required placeholder="Modelo de laptop" tabindex="1"
                    value="{{ $specLaptop->equipo_modelo }}">
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
                    <input type="text" name="sku" id="sku" class="input--ow outl--blue-ow" required placeholder="#A1B2" tabindex="1"
                    value="{{ $specLaptop->product->sku }}">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Precio</p>
                </div>
                <div class="input input-min input-min--label-left">
                    <label for="price"><h3>$</h3></label>
                    <input type="text" name="price" id="price" class="input--ow outl--blue-ow" required placeholder="00.00" tabindex="1"
                    value="{{ $specLaptop->product->price }}">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Descuento</p>
                </div>
                <div class="input input-min input-min--label-left">
                    <label for="price_discount"><h3>$</h3></label>
                    <input type="text" name="price_discount" id="price_discount" class="input--ow outl--blue-ow" placeholder="00.00 (Descuento aplicado)" tabindex="1"
                    value="{{ $specLaptop->product->price_discount }}">
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
                    <input type="text" name="warranty_days" id="warranty_days" class="input--ow outl--blue-ow" required placeholder="Días de duración" tabindex="1"
                    value="{{ $specLaptop->product->warranty_days }}">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Soporte</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="support" id="support" class="input--ow outl--blue-ow" required placeholder="Duración y tipo de soporte" tabindex="1"
                    value="{{ $specLaptop->product->support }}">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Envio</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="delivery" id="delivery" class="input--ow outl--blue-ow" required placeholder="Tipo de entrega" tabindex="1"
                    value="{{ $specLaptop->product->delivery }}">
                </div>
            </div>
            <div class="item">
                <div class="name">
                    <p>Stock</p>
                </div>
                <div class="input input-min">
                    <input type="text" name="stock" id="stock" class="input--ow outl--blue-ow" required placeholder="Unidades disponibles" tabindex="1"
                    value="{{ $specLaptop->product->inventory->stock }}">
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
            <p class="p--description">
                Puedes sustituir imagenes o eliminarlas.
            </p>
        </div>
        <div class="fields">
            <div class="item item-file-upload">
                {{--*
                    * IMAGE 1 
                --}}
                <div class="file-upload">
                    {{-- Posición de imagen --}}
                    <span>1</span>
                    {{-- Botón para cancelar imagen seleccionada --}}
                    <button type="button" class="button--neutral-ow sq outl--blue-ow btn-upload-cancel" id="btn-upload-cancel-1"><i class='bx bx-x'></i></button>
                    {{-- PopUp de confirmación para eliminar imagen existente --}}
                    <div class="popup-confirm"><p>¿Eliminar imagen 1?</p>
                        {{-- Botón eliminar imagen existente--}}
                        <button type="button" class="button--negative-ow sq" id="btn-replace-1"><i class='bx bxs-trash'></i></button>
                        {{-- Botón cerrar popup --}}
                        <button type="button" class="button--neutral-ow">Cancelar</button>
                    </div>
                    {{-- Input file--}}
                    <input type="file" accept="image/*" id="image_1" name="image_1">
                    {{-- Contenedor de conjunto file y file-name --}}
                    <div class="container-file">
                        {{-- Contenedor de imagen seleccionada o existente --}}
                        <div class="file" id="file-1">
                            {{-- Si existe una imagen la agregamos y recuperamos su nombre --}}
                            @if ($specLaptop->product->file->image_1)
                                <img src="{{ asset($specLaptop->product->file->image_1) }}">
                                @php $imageName = str_replace('/storage/images/upload/', '', $specLaptop->product->file->image_1) @endphp
                            @else
                                @php $imageName = 'Seleccionar imagen' @endphp
                            @endif
                        </div>
                        {{-- Campo para mostrar nombre de imagen--}}
                        <input type="text" class="file-name" id="file-name-1" value="{{ $imageName }}" tabindex="-1" readonly>
                    </div>
                    {{-- Si existe una imagen mostramos el boton de eliminar imagen existente --}}
                    @if ($specLaptop->product->file->image_1)
                        {{-- Botón recortado para seleccionar imagen --}}
                        <label for="image_1" class="btn-upload button--alternative-ow short" id="btn-upload-1" tabindex="1">Cargar</label>
                        {{-- Botón para abrir popup --}}
                        <button type="button" class="button--negative-ow sq btn-popup-confirm" id="btn-popup-confirm-1" tabindex="1"><i class='bx bxs-trash'></i></button>
                    @else
                        {{-- Botón para seleccionar imagen --}}
                        <label for="image_1" class="btn-upload button--alternative-ow" id="btn-upload-1" tabindex="1">Cargar</label> 
                    @endif
                </div>
                {{--*
                    * IMAGE 2 
                --}}
                <div class="file-upload">
                    {{-- Posición de imagen --}}
                    <span>2</span>
                    {{-- Botón para cancelar imagen seleccionada --}}
                    <button type="button" class="button--neutral-ow sq outl--blue-ow btn-upload-cancel" id="btn-upload-cancel-2"><i class='bx bx-x'></i></button>
                    {{-- PopUp de confirmación para eliminar imagen existente --}}
                    <div class="popup-confirm"><p>¿Eliminar imagen 2?</p>
                        {{-- Botón eliminar imagen existente--}}
                        <button type="button" class="button--negative-ow sq" id="btn-replace-2"><i class='bx bxs-trash'></i></button>
                        {{-- Botón cerrar popup --}}
                        <button type="button" class="button--neutral-ow">Cancelar</button>
                    </div>
                    {{-- Input file--}}
                    <input type="file" accept="image/*" id="image_2" name="image_2">
                    {{-- Contenedor de conjunto file y file-name --}}
                    <div class="container-file">
                        {{-- Contenedor de imagen seleccionada o existente --}}
                        <div class="file" id="file-2">
                            {{-- Si existe una imagen la agregamos y recuperamos su nombre --}}
                            @if ($specLaptop->product->file->image_2)
                                <img src="{{ asset($specLaptop->product->file->image_2) }}">
                                @php $imageName = str_replace('/storage/images/upload/', '', $specLaptop->product->file->image_2) @endphp
                            @else
                                @php $imageName = 'Seleccionar imagen' @endphp
                            @endif
                        </div>
                        {{-- Campo para mostrar nombre de imagen--}}
                        <input type="text" class="file-name" id="file-name-2" value="{{ $imageName }}" tabindex="-1" readonly>
                    </div>
                    {{-- Si existe una imagen mostramos el boton de eliminar imagen existente --}}
                    @if ($specLaptop->product->file->image_2)
                        {{-- Botón recortado para seleccionar imagen --}}
                        <label for="image_2" class="btn-upload button--alternative-ow short" id="btn-upload-2" tabindex="1">Cargar</label>
                        {{-- Botón para abrir popup --}}
                        <button type="button" class="button--negative-ow sq btn-popup-confirm" id="btn-popup-confirm-2" tabindex="1"><i class='bx bxs-trash'></i></button>
                    @else
                        {{-- Botón para seleccionar imagen --}}
                        <label for="image_2" class="btn-upload button--alternative-ow" id="btn-upload-2" tabindex="1">Cargar</label> 
                    @endif
                </div>
                {{--*
                    * IMAGE 3 
                --}}
                <div class="file-upload">
                    {{-- Posición de imagen --}}
                    <span>3</span>
                    {{-- Botón para cancelar imagen seleccionada --}}
                    <button type="button" class="button--neutral-ow sq outl--blue-ow btn-upload-cancel" id="btn-upload-cancel-3"><i class='bx bx-x'></i></button>
                    {{-- PopUp de confirmación para eliminar imagen existente --}}
                    <div class="popup-confirm"><p>¿Eliminar imagen 3?</p>
                        {{-- Botón eliminar imagen existente--}}
                        <button type="button" class="button--negative-ow sq" id="btn-replace-3"><i class='bx bxs-trash'></i></button>
                        {{-- Botón cerrar popup --}}
                        <button type="button" class="button--neutral-ow">Cancelar</button>
                    </div>
                    {{-- Input file--}}
                    <input type="file" accept="image/*" id="image_3" name="image_3">
                    {{-- Contenedor de conjunto file y file-name --}}
                    <div class="container-file">
                        {{-- Contenedor de imagen seleccionada o existente --}}
                        <div class="file" id="file-3">
                            {{-- Si existe una imagen la agregamos y recuperamos su nombre --}}
                            @if ($specLaptop->product->file->image_3)
                                <img src="{{ asset($specLaptop->product->file->image_3) }}">
                                @php $imageName = str_replace('/storage/images/upload/', '', $specLaptop->product->file->image_3) @endphp
                            @else
                                @php $imageName = 'Seleccionar imagen' @endphp
                            @endif
                        </div>
                        {{-- Campo para mostrar nombre de imagen--}}
                        <input type="text" class="file-name" id="file-name-3" value="{{ $imageName }}" tabindex="-1" readonly>
                    </div>
                    {{-- Si existe una imagen mostramos el boton de eliminar imagen existente --}}
                    @if ($specLaptop->product->file->image_3)
                        {{-- Botón recortado para seleccionar imagen --}}
                        <label for="image_3" class="btn-upload button--alternative-ow short" id="btn-upload-3" tabindex="1">Cargar</label>
                        {{-- Botón para abrir popup --}}
                        <button type="button" class="button--negative-ow sq btn-popup-confirm" id="btn-popup-confirm-3" tabindex="1"><i class='bx bxs-trash'></i></button>
                    @else
                        {{-- Botón para seleccionar imagen --}}
                        <label for="image_3" class="btn-upload button--alternative-ow" id="btn-upload-3" tabindex="1">Cargar</label> 
                    @endif
                </div>
                {{--*
                    * IMAGE 4 
                --}}
                <div class="file-upload">
                    {{-- Posición de imagen --}}
                    <span>4</span>
                    {{-- Botón para cancelar imagen seleccionada --}}
                    <button type="button" class="button--neutral-ow sq outl--blue-ow btn-upload-cancel" id="btn-upload-cancel-4"><i class='bx bx-x'></i></button>
                    {{-- PopUp de confirmación para eliminar imagen existente --}}
                    <div class="popup-confirm"><p>¿Eliminar imagen 4?</p>
                        {{-- Botón eliminar imagen existente--}}
                        <button type="button" class="button--negative-ow sq" id="btn-replace-4"><i class='bx bxs-trash'></i></button>
                        {{-- Botón cerrar popup --}}
                        <button type="button" class="button--neutral-ow">Cancelar</button>
                    </div>
                    {{-- Input file--}}
                    <input type="file" accept="image/*" id="image_4" name="image_4">
                    {{-- Contenedor de conjunto file y file-name --}}
                    <div class="container-file">
                        {{-- Contenedor de imagen seleccionada o existente --}}
                        <div class="file" id="file-4">
                            {{-- Si existe una imagen la agregamos y recuperamos su nombre --}}
                            @if ($specLaptop->product->file->image_4)
                                <img src="{{ asset($specLaptop->product->file->image_4) }}">
                                @php $imageName = str_replace('/storage/images/upload/', '', $specLaptop->product->file->image_4) @endphp
                            @else
                                @php $imageName = 'Seleccionar imagen' @endphp
                            @endif
                        </div>
                        {{-- Campo para mostrar nombre de imagen--}}
                        <input type="text" class="file-name" id="file-name-4" value="{{ $imageName }}" tabindex="-1" readonly>
                    </div>
                    {{-- Si existe una imagen mostramos el boton de eliminar imagen existente --}}
                    @if ($specLaptop->product->file->image_4)
                        {{-- Botón recortado para seleccionar imagen --}}
                        <label for="image_4" class="btn-upload button--alternative-ow short" id="btn-upload-4" tabindex="1">Cargar</label>
                        {{-- Botón para abrir popup --}}
                        <button type="button" class="button--negative-ow sq btn-popup-confirm" id="btn-popup-confirm-4" tabindex="1"><i class='bx bxs-trash'></i></button>
                    @else
                        {{-- Botón para seleccionar imagen --}}
                        <label for="image_4" class="btn-upload button--alternative-ow" id="btn-upload-4" tabindex="1">Cargar</label> 
                    @endif
                </div>
                {{--*
                    * IMAGE 5 
                --}}
                <div class="file-upload">
                    {{-- Posición de imagen --}}
                    <span>5</span>
                    {{-- Botón para cancelar imagen seleccionada --}}
                    <button type="button" class="button--neutral-ow sq outl--blue-ow btn-upload-cancel" id="btn-upload-cancel-5"><i class='bx bx-x'></i></button>
                    {{-- PopUp de confirmación para eliminar imagen existente --}}
                    <div class="popup-confirm"><p>¿Eliminar imagen 5?</p>
                        {{-- Botón eliminar imagen existente--}}
                        <button type="button" class="button--negative-ow sq" id="btn-replace-5"><i class='bx bxs-trash'></i></button>
                        {{-- Botón cerrar popup --}}
                        <button type="button" class="button--neutral-ow">Cancelar</button>
                    </div>
                    {{-- Input file --}}
                    <input type="file" accept="image/*" id="image_5" name="image_5">
                    {{-- Contenedor de conjunto file y file-name --}}
                    <div class="container-file">
                        {{-- Contenedor de imagen seleccionada o existente --}}
                        <div class="file" id="file-5">
                            {{-- Si existe una imagen la agregamos y recuperamos su nombre --}}
                            @if ($specLaptop->product->file->image_5)
                                <img src="{{ asset($specLaptop->product->file->image_5) }}">
                                @php $imageName = str_replace('/storage/images/upload/', '', $specLaptop->product->file->image_5) @endphp
                            @else
                                @php $imageName = 'Seleccionar imagen' @endphp
                            @endif
                        </div>
                        {{-- Campo para mostrar nombre de imagen--}}
                        <input type="text" class="file-name" id="file-name-5" value="{{ $imageName }}" tabindex="-1" readonly>
                    </div>
                    {{-- Si existe una imagen mostramos el boton de eliminar imagen existente --}}
                    @if ($specLaptop->product->file->image_5)
                        {{-- Botón recortado para seleccionar imagen --}}
                        <label for="image_5" class="btn-upload button--alternative-ow short" id="btn-upload-5" tabindex="1">Cargar</label>
                        {{-- Botón para abrir popup --}}
                        <button type="button" class="button--negative-ow sq btn-popup-confirm" id="btn-popup-confirm-5" tabindex="1"><i class='bx bxs-trash'></i></button>
                    @else
                        {{-- Botón para seleccionar imagen --}}
                        <label for="image_5" class="btn-upload button--alternative-ow" id="btn-upload-5" tabindex="1">Cargar</label> 
                    @endif
                </div>
                {{--*
                    * IMAGE 6 
                --}}
                <div class="file-upload">
                    {{-- Posición de imagen --}}
                    <span>6</span>
                    {{-- Botón para cancelar imagen seleccionada --}}
                    <button type="button" class="button--neutral-ow sq outl--blue-ow btn-upload-cancel" id="btn-upload-cancel-6"><i class='bx bx-x'></i></button>
                    {{-- PopUp de confirmación para eliminar imagen existente --}}
                    <div class="popup-confirm"><p>¿Eliminar imagen 6?</p>
                        {{-- Botón eliminar imagen existente--}}
                        <button type="button" class="button--negative-ow sq" id="btn-replace-6"><i class='bx bxs-trash'></i></button>
                        {{-- Botón cerrar popup --}}
                        <button type="button" class="button--neutral-ow">Cancelar</button>
                    </div>
                    {{-- Input file --}}
                    <input type="file" accept="image/*" id="image_6" name="image_6">
                    {{-- Contenedor de conjunto file y file-name --}}
                    <div class="container-file">
                        {{-- Contenedor de imagen seleccionada o existente --}}
                        <div class="file" id="file-6">
                            {{-- Si existe una imagen la agregamos y recuperamos su nombre --}}
                            @if ($specLaptop->product->file->image_6)
                                <img src="{{ asset($specLaptop->product->file->image_6) }}">
                                @php $imageName = str_replace('/storage/images/upload/', '', $specLaptop->product->file->image_6) @endphp
                            @else
                                @php $imageName = 'Seleccionar imagen' @endphp
                            @endif
                        </div>
                        {{-- Campo para mostrar nombre de imagen--}}
                        <input type="text" class="file-name" id="file-name-6" value="{{ $imageName }}" tabindex="-1" readonly>
                    </div>
                    {{-- Si existe una imagen mostramos el boton de eliminar imagen existente --}}
                    @if ($specLaptop->product->file->image_6)
                        {{-- Botón recortado para seleccionar imagen --}}
                        <label for="image_6" class="btn-upload button--alternative-ow short" id="btn-upload-6" tabindex="1">Cargar</label>
                        {{-- Botón para abrir popup --}}
                        <button type="button" class="button--negative-ow sq btn-popup-confirm" id="btn-popup-confirm-6" tabindex="1"><i class='bx bxs-trash'></i></button>
                    @else
                        {{-- Botón para seleccionar imagen --}}
                        <label for="image_6" class="btn-upload button--alternative-ow" id="btn-upload-6" tabindex="1">Cargar</label> 
                    @endif
                </div>
                {{--*
                    * IMAGE 7 
                --}}
                <div class="file-upload">
                    {{-- Posición de imagen --}}
                    <span>7</span>
                    {{-- Botón para cancelar imagen seleccionada --}}
                    <button type="button" class="button--neutral-ow sq outl--blue-ow btn-upload-cancel" id="btn-upload-cancel-7"><i class='bx bx-x'></i></button>
                    {{-- PopUp de confirmación para eliminar imagen existente --}}
                    <div class="popup-confirm"><p>¿Eliminar imagen 7?</p>
                        {{-- Botón eliminar imagen existente--}}
                        <button type="button" class="button--negative-ow sq" id="btn-replace-7"><i class='bx bxs-trash'></i></button>
                        {{-- Botón cerrar popup --}}
                        <button type="button" class="button--neutral-ow">Cancelar</button>
                    </div>
                    {{-- Input file --}}
                    <input type="file" accept="image/*" id="image_7" name="image_7">
                    {{-- Contenedor de conjunto file y file-name --}}
                    <div class="container-file">
                        {{-- Contenedor de imagen seleccionada o existente --}}
                        <div class="file" id="file-7">
                            {{-- Si existe una imagen la agregamos y recuperamos su nombre --}}
                            @if ($specLaptop->product->file->image_7)
                                <img src="{{ asset($specLaptop->product->file->image_7) }}">
                                @php $imageName = str_replace('/storage/images/upload/', '', $specLaptop->product->file->image_7) @endphp
                            @else
                                @php $imageName = 'Seleccionar imagen' @endphp
                            @endif
                        </div>
                        {{-- Campo para mostrar nombre de imagen--}}
                        <input type="text" class="file-name" id="file-name-7" value="{{ $imageName }}" tabindex="-1" readonly>
                    </div>
                    {{-- Si existe una imagen mostramos el boton de eliminar imagen existente --}}
                    @if ($specLaptop->product->file->image_7)
                        {{-- Botón recortado para seleccionar imagen --}}
                        <label for="image_7" class="btn-upload button--alternative-ow short" id="btn-upload-7" tabindex="1">Cargar</label>
                        {{-- Botón para abrir popup --}}
                        <button type="button" class="button--negative-ow sq btn-popup-confirm" id="btn-popup-confirm-7" tabindex="1"><i class='bx bxs-trash'></i></button>
                    @else
                        {{-- Botón para seleccionar imagen --}}
                        <label for="image_7" class="btn-upload button--alternative-ow" id="btn-upload-7" tabindex="1">Cargar</label> 
                    @endif
                </div>
            </div>
        </div>
        {{-- <label for="image_x">
            <input type="file" name="image_x" id="image_x">here
        </label> --}}
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
                            <input type="text" name="ram_gb" id="ram_gb" class="input--ow outl--blue-ow" required placeholder="Cantidad de memoria RAM" tabindex="1"
                            value="{{ $specLaptop->ram_gb }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Tipo de RAM</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="ram_tipo" id="ram_tipo" class="input--ow outl--blue-ow" required placeholder="Tipo de memoria RAM" tabindex="1"
                            value="{{ $specLaptop->ram_tipo }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Disco duro</p>
                        </div>
                        <div class="input input-min discod">
                            @php
                                $discod = rtrim($specLaptop->discod_gb, " GBT");
                            @endphp
                            <input type="text" name="discod_amount" id="discod_amount" class="input--ow outl--blue-ow" required placeholder="Cantidad de almacenamiento" tabindex="1"
                            value="@php echo $discod @endphp">
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
                            <input type="text" name="discod_tipo" id="discod_tipo" class="input--ow outl--blue-ow" required placeholder="Tipo de disco duro" tabindex="1"
                            value="{{ $specLaptop->discod_tipo }}">
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
                            <input type="text" name="procesador_marca" id="procesador_marca" class="input--ow outl--blue-ow" required placeholder="Marca de procesador" tabindex="1"
                            value="{{ $specLaptop->procesador_marca }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Modelo</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="procesador_modelo" id="procesador_modelo" class="input--ow outl--blue-ow" required placeholder="Modelo de procesador" tabindex="1"
                            value="{{ $specLaptop->procesador_modelo }}">
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
                            <input type="text"  name="procesador_ghz" id="procesador_ghz" class="input--ow outl--blue-ow" required placeholder="Velocidad de procesador" tabindex="1"
                            value="{{ $specLaptop->procesador_ghz }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Cantidad de nucleos</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="procesador_nucleos" id="procesador_nucleos" class="input--ow outl--blue-ow" required placeholder="Cantidad de nucleos del procesador" tabindex="1"
                            value="{{ $specLaptop->procesador_nucleos }}">
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
                            <input type="text" name="tarjetag_marca" id="tarjetag_marca" class="input--ow outl--blue-ow" placeholder="Marca de tarjeta gráfica" tabindex="1"
                            value="{{ $specLaptop->tarjetag_marca }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Modelo</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="tarjetag_modelo" id="tarjetag_modelo" class="input--ow outl--blue-ow" placeholder="Modelo de tarjeta gráfica" tabindex="1"
                            value="{{ $specLaptop->tarjetag_modelo }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Tipo de memoria</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="tarjetag_tipomemoria" id="tarjetag_tipomemoria" class="input--ow outl--blue-ow" placeholder="Tipo de memoria de la tarjeta gráfica" tabindex="1"
                            value="{{ $specLaptop->tarjetag_tipomemoria }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Cantidad de memoria</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="tarjetag_gb" id="tarjetag_gb" class="input--ow outl--blue-ow" placeholder="Cantidad de memoria" tabindex="1"
                            value="{{ $specLaptop->tarjetag_gb }}">
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
                            <input type="text" name="pantalla_tamano" id="pantalla_tamano" class="input--ow outl--blue-ow" required placeholder="Tamaño de pantalla en pulgadas" tabindex="1"
                            value="{{ $specLaptop->pantalla_tamano }}">
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
                            @php $pantalla_res_x = substr($specLaptop->pantalla_resolucion, 0, 4); @endphp
                            <label for="pantalla_resolucion">x</label>
                            <input type="text" name="pantalla_resolucion" id="pantalla_resolucion" class="input--ow outl--blue-ow" required placeholder="Res X" tabindex="1"
                            value="@php echo $pantalla_res_x @endphp">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Resolución Y</p>
                        </div>
                        <div class="input input-min input-min--label-right">
                            @php $pantalla_res_y = substr($specLaptop->pantalla_resolucion, 7, 12); @endphp
                            <label for="pantalla_resolucion_y">px</label>
                            <input type="text" name="pantalla_resolucion_y" id="pantalla_resolucion_y" class="input--ow outl--blue-ow" required placeholder="Res Y" tabindex="1"
                            value="@php echo $pantalla_res_y @endphp">
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
                            <input type="text" name="conectv_usb2" id="conectv_usb2" class="input--ow outl--blue-ow" required placeholder="Cantidad de puertos USB 2.0" tabindex="1"
                            value="{{ $specLaptop->conectv_usb2 }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>USB 3.0</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="conectv_usb3" id="conectv_usb3" class="input--ow outl--blue-ow" required placeholder="Cantidad de puertos USB 3.0" tabindex="1"
                            value="{{ $specLaptop->conectv_usb3 }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>USB C</p>
                        </div>
                        <div class="input input-min">
                            <input type="text" name="conectv_usbc" id="conectv_usbc" class="input--ow outl--blue-ow" required placeholder="Cantidad de puertos USB C" tabindex="1"
                            value="{{ $specLaptop->conectv_usbc }}">
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
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con puerto SerialCOM?</p>
                        </div>
                        <div class="input input-min">
                            <select name="conectv_serialcom" id="conectv_serialcom" class="input--ow outl--blue-ow" required tabindex="1">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>¿Cuenta con puerto IEEE1394?</p>
                        </div>
                        <div class="input input-min">
                            <select name="conectv_ieee1394" id="conectv_ieee1394" class="input--ow outl--blue-ow" required tabindex="1">
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
                            <input type="text" name="so" id="" class="input--ow outl--blue-ow" value="Windows 10 Pro" required placeholder="Nombre y versión de SO instalado" tabindex="1"
                            value="{{ $specLaptop->so }}">
                        </div>
                    </div>
                    <div class="item textarea">
                        <div class="name">
                            <p>Software adicional</p>
                        </div>
                        <div class="input input-min">
                            <textarea name="software_ad" id="software_ad" class="input--ow outl--blue-ow" required placeholder="Lista de software adicional instalado separada por comas" tabindex="1">{{ $specLaptop->software_ad }}</textarea>
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
                            <input type="text" name="bateria_celdas" id="" class="input--ow outl--blue-ow" required placeholder="Cantidad de celdas de la batería" tabindex="1"
                            value="{{ $specLaptop->bateria_celdas }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
popupConfirm();
selectsEdit();
$('#tarjetag').ready(function(){ tarjetagYN(); });
$('#tarjetag').change(function(){ tarjetagYN(); });
replaceGet('#btn-replace-1', "{{ route('replace.index', ['specLaptop' => $specLaptop, 'col' => 1]) }}", '#image_1', 'div#file-1', '#file-name-1', '#btn-upload-cancel-1', '.popup-confirm', '#btn-upload-1', '#btn-popup-confirm-1');
replaceGet('#btn-replace-2', "{{ route('replace.index', ['specLaptop' => $specLaptop, 'col' => 2]) }}", '#image_2', 'div#file-2', '#file-name-2', '#btn-upload-cancel-2', '.popup-confirm', '#btn-upload-2', '#btn-popup-confirm-2');
replaceGet('#btn-replace-3', "{{ route('replace.index', ['specLaptop' => $specLaptop, 'col' => 3]) }}", '#image_3', 'div#file-3', '#file-name-3', '#btn-upload-cancel-3', '.popup-confirm', '#btn-upload-3', '#btn-popup-confirm-3');
replaceGet('#btn-replace-4', "{{ route('replace.index', ['specLaptop' => $specLaptop, 'col' => 4]) }}", '#image_4', 'div#file-4', '#file-name-4', '#btn-upload-cancel-4', '.popup-confirm', '#btn-upload-4', '#btn-popup-confirm-4');
replaceGet('#btn-replace-5', "{{ route('replace.index', ['specLaptop' => $specLaptop, 'col' => 5]) }}", '#image_5', 'div#file-5', '#file-name-5', '#btn-upload-cancel-5', '.popup-confirm', '#btn-upload-5', '#btn-popup-confirm-5');
replaceGet('#btn-replace-6', "{{ route('replace.index', ['specLaptop' => $specLaptop, 'col' => 6]) }}", '#image_6', 'div#file-6', '#file-name-6', '#btn-upload-cancel-6', '.popup-confirm', '#btn-upload-6', '#btn-popup-confirm-6');
replaceGet('#btn-replace-7', "{{ route('replace.index', ['specLaptop' => $specLaptop, 'col' => 7]) }}", '#image_7', 'div#file-7', '#file-name-7', '#btn-upload-cancel-7', '.popup-confirm', '#btn-upload-7', '#btn-popup-confirm-7');
/**
 * AJAX GET
 * Eliminar imagen existente
 */
 function replaceGet(btnReplace, route, imageInput, imageContainer, imageName, btnCancel, popup, btnUpload, btnPopUp){
    $(btnReplace).click(function(){
        $.ajax({
            url: route 
        }).done(function(){
            // Reseteamos campos de upload
            $(imageInput).val('');
            $(imageContainer).empty();
            $(imageName).val('Seleccione una imagen');
            $(btnCancel).css('display', 'none');
            // Escondemos popup
            $(popup).css('transform','translate(-5px, -5px)');
            $(popup).css('opacity', '0');
            // Ocutamos boton de eliminar y quitamos clase short de boton upload
            $(btnUpload).removeClass('short');
            $(btnPopUp).css('display', 'none');
            // Devolvemos mensaje
            alert('Se ha eliminado correctamente. Ahora puede elegir una nueva imagen o dejar el campo en blanco.');
        });
    });
}
/**
 * * MULTIPLE PREVIEW IMAGES
 * Muestra una vista previa de las imagenes que cargaremos
 */
$(function(){
    var ImgPreview = function(input, imgPreviewPlaceholder, fileName, btnCancel){
        // Vaciamos el contenedor
        $(imgPreviewPlaceholder).empty();
        
        // Comprobamos que el input no este vacío en cada cambio
        if($(input).val()){
            // Extraemos la imagen
            var reader = new FileReader();
            reader.onload = function(e){
                $($.parseHTML('<img>')).attr('src', e.target.result).appendTo(imgPreviewPlaceholder);
                // Mostramos botón para cancelar selección de imagen
                $(btnCancel).css('display', 'flex');
            }
            reader.readAsDataURL(input.files[0]);
            $(fileName).val(input.files[0].name);
            // Asignamos acciones al botón btnCancel
            $(btnCancel).click(function(){
                $(input).val('');
                $(imgPreviewPlaceholder).empty();
                $(fileName).val('Seleccione una imagen');
                $(btnCancel).css('display', 'none');
            });
        } else {
            $(input).val('');
            $(imgPreviewPlaceholder).empty();
            $(fileName).val('Seleccione una imagen');
            $(btnCancel).css('display', 'none');
        };
    };
    $('#image_1').on('change', function(){
        ImgPreview(this, 'div#file-1', '#file-name-1', '#btn-upload-cancel-1');
    });
    $('#image_2').on('change', function(){
        ImgPreview(this, 'div#file-2', '#file-name-2', '#btn-upload-cancel-2');
    });
    $('#image_3').on('change', function(){
        ImgPreview(this, 'div#file-3', '#file-name-3', '#btn-upload-cancel-3');
    });
    $('#image_4').on('change', function(){
        ImgPreview(this, 'div#file-4', '#file-name-4', '#btn-upload-cancel-4');
    });
    $('#image_5').on('change', function(){
        ImgPreview(this, 'div#file-5', '#file-name-5', '#btn-upload-cancel-5');
    });
    $('#image_6').on('change', function(){
        ImgPreview(this, 'div#file-6', '#file-name-6', '#btn-upload-cancel-6');
    });
    $('#image_7').on('change', function(){
        ImgPreview(this, 'div#file-7', '#file-name-7', '#btn-upload-cancel-7');
    });
});
/**
 * * KEYS INPUT IMAGE
 * Permite que al presionar space o enter se ejecute un click
 */
$('#btn-upload-1').keydown(function(e){
if(e.keyCode == 32 || e.keyCode == 13){
    e.preventDefault();
    $('#image_1').click();
}
});
$('#btn-upload-2').keydown(function(e){
if(e.keyCode == 32 || e.keyCode == 13){
    e.preventDefault();
    $('#image_2').click();
}
});
$('#btn-upload-3').keydown(function(e){
if(e.keyCode == 32 || e.keyCode == 13){
    e.preventDefault();
    $('#image_3').click();
}
});
$('#btn-upload-4').keydown(function(e){
if(e.keyCode == 32 || e.keyCode == 13){
    e.preventDefault();
    $('#image_4').click();
}
});
$('#btn-upload-5').keydown(function(e){
if(e.keyCode == 32 || e.keyCode == 13){
    e.preventDefault();
    $('#image_5').click();
}
});
$('#btn-upload-6').keydown(function(e){
if(e.keyCode == 32 || e.keyCode == 13){
    e.preventDefault();
    $('#image_6').click();
}
});
$('#btn-upload-7').keydown(function(e){
if(e.keyCode == 32 || e.keyCode == 13){
    e.preventDefault();
    $('#image_7').click();
}
});
// Recuperación de campos select
function selectsEdit() {
    // Limpiamos el campo discod_storage para filtrar la magnitud de almacenamiento (GB o TB)
    const discod_storage_val_raw = '{{ $specLaptop->discod_gb }}';
    const discod_storage_val = discod_storage_val_raw.replace(/[0-9]+/g, '').trim();

    // Creamos la colección (selectID: consulta)
    let selectSpec = {'status_usage'         : '{{ $specLaptop->product->status_usage }}',
                      'status_aesthetic'     : '{{ $specLaptop->product->status_aesthetic }}',
                      'discod_storage'       : discod_storage_val,     
                      'procesador_gen'       : '{{ $specLaptop->procesador_gen }}',                 
                      'tarjetag'             : '{{ $specLaptop->tarjetag }}', 
                      'pantalla_tipo'        : '{{ $specLaptop->pantalla_tipo }}', 
                      'pantalla_tactil'      : '{{ $specLaptop->pantalla_tactil }}', 
                      'teclado_idioma'       : '{{ $specLaptop->teclado_idioma }}', 
                      'teclado_retroi'       : '{{ $specLaptop->teclado_retroi }}', 
                      'teclado_num'          : '{{ $specLaptop->teclado_num }}', 
                      'conectv_wifi'         : '{{ $specLaptop->conectv_wifi }}', 
                      'conectv_bluetooth'    : '{{ $specLaptop->conectv_bluetooth }}', 
                      'conectv_jack'         : '{{ $specLaptop->conectv_jack }}', 
                      'conectv_hdmi'         : '{{ $specLaptop->conectv_hdmi }}', 
                      'conectv_vga'          : '{{ $specLaptop->conectv_vga }}', 
                      'conectv_displayp'     : '{{ $specLaptop->conectv_displayp }}', 
                      'conectv_ethernet'     : '{{ $specLaptop->conectv_ethernet }}', 
                      'conectv_serialcom'    : '{{ $specLaptop->conectv_serialcom }}', 
                      'conectv_ieee1394'     : '{{ $specLaptop->conectv_ieee1394 }}', 
                      'audiov_camara'        : '{{ $specLaptop->audiov_camara }}', 
                      'audiov_microfono'     : '{{ $specLaptop->audiov_microfono }}', 
                      'lectura_unidadoptica' : '{{ $specLaptop->lectura_unidadoptica }}', 
                      'lectura_sd'           : '{{ $specLaptop->lectura_sd }}', 
                      'bateria_tipo'         : '{{ $specLaptop->bateria_tipo }}'
                    };
    // Asignamos claves y valores
    for(const spec in selectSpec){
        // Obtenemos la colección de options desde la id del select
        let selectOptions = document.getElementById(spec).getElementsByTagName('option');
    
        // Recorremos el objeto
        for(i = 0; i < selectOptions.length; i++){
            
            // Comparamos si el texto de la option en la posición i es el mismo
            // que el de la base de datos, si es así, asignamos el atributo selected
            // y el valor true, si no, continuamos con la siguiente posición
            if(selectOptions[i].value == selectSpec[spec]){
                selectOptions[i].setAttribute('selected', true);
            }
        }
    }
};
/**
 * POPUP CONFIRM
 * Muestra el popup de confirmación para eliminar una imagen existente
 * a traves del modal de edit
 */ 
function popupConfirm(){
    const btnsCancel = document.querySelectorAll('.btn-popup-confirm');
    
    btnsCancel.forEach(btnCancel => {
        btnCancel.addEventListener('click', () => {
            // Indentificamos elemento popup de cada elemento
            let popup = btnCancel.parentElement.querySelector('.popup-confirm');

            // Modificamos su posición hacerlo visible
            popup.style.transform = 'translate(-5px, -91px)';
            popup.style.opacity = '1';

            //Botón para cancelar
            popup.querySelector('.button--neutral-ow').addEventListener('click', () => {
                popup.style.transform = 'translate(-5px, -5px)';
                popup.style.opacity = '0';
            });
        })
    });
};
/**
  * * TARJETAG Y/N
  * Verifica el campo booleano tarjetag para deshabilitar campos adyacentes
  * en caso de indicar un 0 (No) en #tarjetag
  */
  function tarjetagYN(){
    if($('#tarjetag option:selected').val() == 0){
        $('#tarjetag_marca').prop('disabled', true);
        $('#tarjetag_modelo').prop('disabled', true);
        $('#tarjetag_tipomemoria').prop('disabled', true);
        $('#tarjetag_gb').prop('disabled', true);
    } else if($('#tarjetag option:selected').val() == 1){
        $('#tarjetag_marca').prop('disabled', false);
        $('#tarjetag_modelo').prop('disabled', false);
        $('#tarjetag_tipomemoria').prop('disabled', false);
        $('#tarjetag_gb').prop('disabled', false);
    }; 
};
/**
 * * FORM VALIDATION
 */
$('.form-edit').validate({
    rules : {
        stock                : { required: true, digits: true, maxlength: 11 },

        image_1              : { accept: 'image/*' },
        image_2              : { accept: 'image/*' },
        image_3              : { accept: 'image/*' },
        image_4              : { accept: 'image/*' },
        image_5              : { accept: 'image/*' },
        image_6              : { accept: 'image/*' },
        image_7              : { accept: 'image/*' },

        sku                  : { required: true, maxlength: 45 },
        price                : { required: true, number: true, max: 999999.99 },
        price_discount       : { number: true, max: 999999.99 },
        status_usage         : { required: true, maxlength: 45 },
        status_aesthetic     : { required: true, number: true, max: 10 },
        warranty_days        : { required: true, digits: true, maxlength: 11 },
        support              : { required: true, maxlength: 45 },
        delivery             : { required: true, maxlength: 45 },

        equipo_marca         : { required: true, maxlength: 45 },
        equipo_linea         : { required: true, maxlength: 45 },
        equipo_modelo        : { required: true, maxlength: 45 },
        ram_gb               : { required: true, number: true, maxlength: 11 },
        ram_tipo             : { required: true, maxlength: 45 },
        discod_amount        : { required: true, number: true, maxlength: 43 },
        discod_storage       : { required: true, maxlength: 2 },
        discod_tipo          : { required: true, maxlength: 45 },
        procesador_marca     : { required: true, maxlength: 45 },
        procesador_modelo    : { required: true, maxlength: 45 },
        procesador_gen       : { required: true, digits: true, maxlength: 11 },
        procesador_ghz       : { required: true, number: true, max: 99.99 },
        procesador_nucleos   : { required: true, digits: true, maxlength: 11 },
        tarjetag             : { required: true, range: [0, 1] },
        tarjetag_marca       : { maxlength: 45 },
        tarjetag_modelo      : { maxlength: 45 },
        tarjetag_tipomemoria : { maxlength: 45 },
        tarjetag_gb          : { digits: true, maxlength: 11 },
        pantalla_tipo        : { required: true, maxlength: 45 },
        pantalla_tamano      : { required: true, number: true, max: 999.99 },
        pantalla_tactil      : { required: true, range: [0, 1] },
        pantalla_resolucion  : { required: true, digits: true, minlength: 3, maxlength: 4 },
        pantalla_resolucion_y  : { required: true, digits: true, minlength: 3, maxlength: 4 },
        teclado_idioma       : { required: true, maxlength: 45 },
        teclado_retroi       : { required: true, range: [0, 1] },
        teclado_num          : { required: true, range: [0, 1] },
        conectv_usb2         : { required: true, digits: true, maxlength: 11 },
        conectv_usb3         : { required: true, digits: true, maxlength: 11 },
        conectv_usbc         : { required: true, digits: true, maxlength: 11 },
        conectv_wifi         : { required: true, range: [0, 1] },
        conectv_bluetooth    : { required: true, range: [0, 1] },
        conectv_jack         : { required: true, range: [0, 1] },
        conectv_hdmi         : { required: true, range: [0, 1] },
        conectv_vga          : { required: true, range: [0, 1] },
        conectv_displayp     : { required: true, range: [0, 1] },
        conectv_ethernet     : { required: true, range: [0, 1] },
        conectv_serialcom    : { required: true, range: [0, 1] },
        conectv_ieee1394     : { required: true, range: [0, 1] },
        so                   : { required: true, maxlength: 45 },
        software_ad          : { required: true, maxlength: 155 },
        audiov_camara        : { required: true, range: [0, 1] },
        audiov_microfono     : { required: true, range: [0, 1] },
        lectura_unidadoptica : { required: true, range: [0, 1] },
        lectura_sd           : { required: true, range: [0, 1] },
        bateria_tipo         : { required: true, maxlength: 45 },
        bateria_celdas       : { required: true, digits: true, maxlength: 11 }
    }
});
/**
 * KEY CLOSE MODAL
 * Permite que al presionar escape se cierre el modal
 */
 $(document).ready(function(){
    // Cuando se pierde el focus en el body, volvemos a el con escape
    $(document).bind('keydown', function(e) { 
        if (e.which == 27) {
            $('.modal-shadow--panel').css('display', 'none')
            $('.content').empty();
            $('.content').append('<div class="loading"><i class="bx bx-loader-alt"></i></div>');
        }
    });
    // Al terminar de cargar, el focus se coloca en el primer input
    $('#equipo_marca').focus(); 
});
/**
 * * CLOSE MODAL
 */
$('.btn-close').click(function(){
    $('.modal-shadow--panel').css('display', 'none');
    $('.modal-container').css('display', 'none');
    $('.content').empty();
    $('.content').append('<div class="loading"><i class="bx bx-loader-alt"></i></div>');
    $('body').css('overflow', 'visible');
});
</script>