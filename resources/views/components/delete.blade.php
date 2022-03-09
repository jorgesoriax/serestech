<form action="{{ route('panel.destroy', $specLaptop) }}" method="POST" class="form-delete">
    <div class="header">
        <h2>Eliminar Laptop {{ $specLaptop->equipo_marca}} {{ $specLaptop->equipo_linea}} {{ $specLaptop->equipo_modelo}} con ID {{ $specLaptop->id}}</h2>
    </div>
    @csrf
    @method('delete')
    <div class="buttons">
        <button type="submit" class="button--negative-ow btn-delete" id="btn-submit--delete">Eliminar</button>
        <button type="button" class="button--neutral-ow btn-close" id="btn-delete-cancel">Cancelar<br>
            <div class="shortcut-keys">
                <div class="shortcut-key">Esc</div>
            </div>
        </button>
    </div>
</form>
<script>
$(document).ready(function(){
    closeModal();
    fieldLoadFocus();
});
</script>