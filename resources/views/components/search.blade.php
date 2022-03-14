<div id="header--search" class="input input-search">
    <label for="query"><i class="bx bx-search"></i></label>
    <input type="search" name="query" class="{{ $style }}" id="query" placeholder="Buscar características...">
    
    {{-- <div class="shortcut-keys">
        <div class="shortcut-key">Ctrl</div>
        <div class="shortcut-key">Space</div>
    </div> --}}
</div>
<script>
$(document).ready(function(){
    /**
     * LENGTH VALIDATION
     * Comprueba que el campo query contenga una cadena con una
     * longitud mayor a 2 para permitir el submit 
     */
    $('.input-search label').on('click', function(){
        if($('#query').val().length >= 2){
            $('.form-search-home').submit();
        }
    });
    $('#query').keypress(function (e) {
        if (e.keyCode == 13) {
            if($('#query').val().length >= 2){
                $('.form-search-home').submit();
            } else {
                e.preventDefault();
            }
        }
    });
    shortcut.add('Ctrl+Space', function(){
        $('#query').focus();
    });
});
</script>