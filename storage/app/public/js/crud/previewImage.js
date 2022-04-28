/**
 * MULTIPLE PREVIEW IMAGES
 * Muestra una vista previa de las imágenes que cargaremos
 */
function imgPreview(){
    // Obtenemos el padre de los elemento
    const fileUploads = document.querySelectorAll('.file-upload');

    fileUploads.forEach(fileUpload => {
        // Recuperamos los elementos necesarios
        const rInput        = fileUpload.querySelector('.input-file'),
              rImgContainer = fileUpload.querySelector('.file'),
              rImgName      = fileUpload.querySelector('.file-name'),
              rBtnCancel    = fileUpload.querySelector('.btn-upload-cancel');
        // Llamamos a la funcion imgPreview
        $(rInput).on('change', function(){
            preview(this, rImgContainer, rImgName, rBtnCancel);
        });
    })
    function preview(input, imgContainer, imgName, btnCancel){
        // Vaciamos el contenedor
        $(imgContainer).empty();
        // Si el campo está vacío...
        if($(input).val()){
            // Recuperamos e insertamos la imagen
            var reader = new FileReader();
            reader.onload = function(e){
                $($.parseHTML('<img>')).attr('src', e.target.result).appendTo(imgContainer);
                // Mostramos botón para cancelar selección de imagen
                $(btnCancel).css('display', 'flex');
            }
            reader.readAsDataURL(input.files[0]);
            $(imgName).val(input.files[0].name);
            // Asignamos acciones al botón .btn-upload-cancel
            $(btnCancel).click(function(){
                $(input).val('');
                $(imgContainer).empty();
                $(imgName).val('Seleccione una imagen');
                $(btnCancel).css('display', 'none');
            });
        // Si el campo no está vacío...
        } else {
            $(input).val('');
            $(imgContainer).empty();
            $(imgName).val('Seleccione una imagen');
            $(btnCancel).css('display', 'none');
        };
    };
}
