<form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data" class="form-slider">
    @csrf
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
        <h2>Editar Slider</h2>
        <button class="button--positive-ow btn-submit" type="submit" tabindex="2">Estoy listo</button>
    </div>
    {{--*
        * GRUPO IMAGES *
        * Contiene solo inputs para imágenes.
    --}}
    <div class="group group--images">
        <div class="instructions">
            <h3>Imagenes</h3>
            <p class="p--description">Se recomienda que las imagenes tengan un tamaño de 1440 x 400px.</p>
        </div>
        <div class="fields">
            <div class="item item-file-upload">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="file-upload">
                        {{-- Posición de imagen --}}
                        <span>{{ $i }}</span>
                        {{-- Botón para cancelar imagen seleccionada --}}
                        <button type="button" class="button--neutral-ow sq outl--blue-ow btn-upload-cancel" id="{{ 'btn-upload-cancel-'.$i }}"><i class='bx bx-x'></i></button>
                        {{-- Input file oculto (opacity: 0) --}}
                        <input type="file" accept="image/*" class="input-file" id="{{ 'image_'.$i }}" name="{{ 'image_'.$i }}" tabindex="-1">
                        {{-- Contenedor de imagen seleccionada o existente --}}
                        <div class="container-file">
                            <div class="file" id="{{ 'file-'.$i }}">
                                <img src="{{ asset('storage/images/slider/slider_'.$i.'.webp') }}">
                                @php $imageName = 'Seleccionar imagen' @endphp
                            </div>
                            {{-- Campo para mostrar nombre de imagen--}}
                            <input type="text" class="file-name" id="{{ 'file-name-'.$i }}" value="{{ $imageName }}" tabindex="-1" readonly>
                        </div>
                        {{-- Botón recortado para seleccionar imagen --}}
                        <label for="{{ 'image_'.$i }}" class="btn-upload button--alternative-ow" id="{{ 'btn-upload-'.$i }}" tabindex="1">Cargar</label>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</form>
<script>
$(document).ready(function(){
    closeModal();
    shortcutBtnUpload();
    imgPreview();
})
</script>