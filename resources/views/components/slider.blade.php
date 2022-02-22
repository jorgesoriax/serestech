<form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{--*
        * HEADER *
        * Encabezado para título de acción y botones.
    --}}
    <div class="header">
        <button class="button--neutral-ow sq btn-close" type="button"><i class='bx bx-arrow-back'></i></button>
        <h2>
            Editar Slider
            {{-- {{ $specLaptop->equipo_marca}}
            {{ $specLaptop->equipo_linea}} 
            {{ $specLaptop->equipo_modelo}}
            con ID {{ $specLaptop->id}} --}}
        </h2>
        <button class="button--positive-ow btn-submit" type="submit" tabindex="2">Estoy listo</button>
    </div>
    {{--*
        * GRUPO IMAGES *
        * Contiene solo inputs para imágenes.
    --}}
    <div class="group group--images">
        <div class="instructions">
            <h3>Imagenes</h3>
            <p class="p--description">
                Se recomienda que las imagenes tengan un tamaño de 1440 x 400px.
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
                    {{-- Contenedor de imagen seleccionada o existente --}}
                    <div class="file" id="file-1">
                            <img src="{{ asset('storage/images/slider/slider_1.webp') }}">
                            {{-- @php $imageName = str_replace('/storage/images/upload/', '', $specLaptop->product->file->image_1) @endphp --}}
                            @php $imageName = 'Seleccionar imagen' @endphp
                    </div>
                    {{-- Campo para mostrar nombre de imagen--}}
                    <input type="text" class="file-name" id="file-name-1" value="{{ $imageName }}" tabindex="-1" readonly>
                        {{-- Botón recortado para seleccionar imagen --}}
                        <label class="btn-upload button--alternative-ow" id="btn-upload-1" tabindex="1">
                            <input type="file" accept="image/*" id="image_1" name="image_1">Cargar
                        </label>
                </div>
                {{--*
                    * IMAGE 2 
                --}}
                <div class="file-upload file-upload-slider">
                    {{-- Posición de imagen --}}
                    <span>2</span>
                    {{-- Botón para cancelar imagen seleccionada --}}
                    <button type="button" class="button--neutral-ow sq outl--blue-ow btn-upload-cancel" id="btn-upload-cancel-2"><i class='bx bx-x'></i></button>
                    {{-- Contenedor de imagen seleccionada o existente --}}
                    <div class="file" id="file-2">
                            <img src="{{ asset('storage/images/slider/slider_2.webp') }}">
                            {{-- @php $imageName = str_replace('/storage/images/upload/', '', $specLaptop->product->file->image_1) @endphp --}}
                            @php $imageName = 'Seleccionar imagen' @endphp
                    </div>
                    {{-- Campo para mostrar nombre de imagen--}}
                    <input type="text" class="file-name" id="file-name-2" value="{{ $imageName }}" tabindex="-1" readonly>
                        {{-- Botón recortado para seleccionar imagen --}}
                        <label class="btn-upload button--alternative-ow" id="btn-upload-2" tabindex="1">
                            <input type="file" accept="image/*" id="image_2" name="image_2">Cargar
                        </label>
                </div>
                {{--*
                    * IMAGE 3 
                --}}
                <div class="file-upload file-upload-slider">
                    {{-- Posición de imagen --}}
                    <span>3</span>
                    {{-- Botón para cancelar imagen seleccionada --}}
                    <button type="button" class="button--neutral-ow sq outl--blue-ow btn-upload-cancel" id="btn-upload-cancel-3"><i class='bx bx-x'></i></button>
                    {{-- Contenedor de imagen seleccionada o existente --}}
                    <div class="file" id="file-3">
                            <img src="{{ asset('storage/images/slider/slider_3.webp') }}">
                            {{-- @php $imageName = str_replace('/storage/images/upload/', '', $specLaptop->product->file->image_1) @endphp --}}
                            @php $imageName = 'Seleccionar imagen' @endphp
                    </div>
                    {{-- Campo para mostrar nombre de imagen--}}
                    <input type="text" class="file-name" id="file-name-3" value="{{ $imageName }}" tabindex="-1" readonly>
                        {{-- Botón recortado para seleccionar imagen --}}
                        <label class="btn-upload button--alternative-ow" id="btn-upload-3" tabindex="1">
                            <input type="file" accept="image/*" id="image_3" name="image_3">Cargar
                        </label>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
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
 * * BTN CLOSE MODAL
 */
$('.btn-close').click(function(){
    $('.modal-shadow--panel').css('display', 'none');
    $('.modal-container').css('display', 'none');
    $('.content').empty();
    $('.content').append('<div class="loading"><i class="bx bx-loader-alt"></i></div>');
    $('body').css('overflow', 'visible');
});
</script>