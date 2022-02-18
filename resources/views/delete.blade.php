<form action="{{ route('panel.destroy', $specLaptop) }}" method="POST" id="form-delete">
    <div class="header">
        <h2>
            Eliminar Laptop
            {{ $specLaptop->equipo_marca}}
            {{ $specLaptop->equipo_linea}} 
            {{ $specLaptop->equipo_modelo}}
            con ID {{ $specLaptop->id}}
        </h2>
    </div>
    @csrf
    @method('delete')
    <div class="buttons">
        <button type="submit" class="button--negative-ow btn-delete" id="btn-submit--delete">Eliminar</button>
        <button type="button" class="button--neutral-ow btn-close" id="btn-delete-cancel">Cancelar</button>
    </div>
</form>
<script>
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
            // Remueve la clase que reduce el tamaño del modal
            $('.modal').removeClass('modal-mid');
        }
    });
    // Al terminar de cargar, el focus se coloca en el primer input
    $('#btn-submit--delete').focus(); 
});
/**
 * * BTN CLOSE MODAL
 */
$('.btn-close').click(function(){
    $('.modal-shadow--panel').css('display', 'none');
    $('.modal-container').css('display', 'none');
    $('.content').empty();
    $('.content').append('<div class="loading"><i class="bx bx-loader-alt"></i></div>');
    // Remueve la clase que reduce el tamaño del modal
    $('.modal').removeClass('modal-mid');
    $('.modal-shadow--panel').css('background', '#fff');
    $('body').css('overflow', 'visible');
});
</script>