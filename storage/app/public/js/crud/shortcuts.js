/**
 * KEYS INPUT IMAGE
 * Permite que al presionar space o enter se ejecute un click
 */
function shortcutBtnUpload(){
    const shortcutFileUploads = document.querySelectorAll('.file-upload');
    
    shortcutFileUploads.forEach(fileUpload => {
        const btnUpload = fileUpload.querySelector('.btn-upload'), 
              input = fileUpload.querySelector('.input-file');

        $(btnUpload).keydown(function(e){
            if(e.keyCode == 32 || e.keyCode == 13){
                e.preventDefault();
                $(input).click();
            };
        });
    });
}