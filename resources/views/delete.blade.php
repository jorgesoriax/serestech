<h3>¿Desea eliminar el registro permanentemente?</h3>
<form action="{{ route('panel.destroy', $specLaptop) }}" method="POST" id="form-delete">
    @csrf
    @method('delete')
    <button type="submit" class="button--negative-ow btn-delete" id="btn-submit--delete">Eliminar</button>
</form>