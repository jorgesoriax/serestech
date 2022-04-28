/*
|--------------------------------------------------------------------------
| Funciones disponibles para modal
|--------------------------------------------------------------------------
*/

/**
  * * TARJETAG Y/N VALIDATE
  * Verifica el campo booleano tarjetag para deshabilitar campos adyacentes
  * en caso de indicar un 0 (No) en #tarjetag
  */
function tarjetagYN(){
    if($('#tarjetag').attr('readonly')){
        if($('#tarjetag').val() == 'No'){
            $('#tarjetag_marca').prop('disabled', true);
            $('#tarjetag_modelo').prop('disabled', true);
            $('#tarjetag_tipomemoria').prop('disabled', true);
            $('#tarjetag_gb').prop('disabled', true);
        } else if($('#tarjetag').val() == 'Si'){
            $('#tarjetag_marca').prop('disabled', false);
            $('#tarjetag_modelo').prop('disabled', false);
            $('#tarjetag_tipomemoria').prop('disabled', false);
            $('#tarjetag_gb').prop('disabled', false);
        };
    } else {
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
    }

    $('#tarjetag').change(function(){ tarjetagYN(); });
};
/**
 * * FOCUS
 * Al terminar de cargar, el focus se coloca en el primer input
 */
function fieldLoadFocus(){
    // Si el campo #tarjetag no es readonly, ejecuta
    if($('#tarjetag').attr('readonly') != 'readonly'){
        $('#equipo_marca').focus(); 
    };
    // Si el campo #tarjetag contiene la clase modal-mid, ejecuta
    if($('.modal').hasClass('modal-mid')){
        $('#btn-submit--delete').focus();
    };
};
/**
 * * CHECK FORM
 * Ejecuta instrucciones según el form que se cargue
 */
function checkForm(){
    // Si estamos en el form-create, ejecutar...
    if($('form').hasClass('form-create')){
        validate('.form-create');
    // Si estamos en el form-edit, ejecutar...
    } else if($('form').hasClass('form-edit')){
        validate('.form-edit');
    };
    /**
     * * VALIDATE
     * Utiliza un mismo conjunto de reglas para los form de create y edit
     * Recibe el parámetro form desde la función checkForm()
     */
    function validate(form){
        $(form).validate({
            rules : {
                stock                  : { required: true, digits: true, maxlength: 11 },
          
                image_1                : { accept: 'image/*' },
                image_2                : { accept: 'image/*' },
                image_3                : { accept: 'image/*' },
                image_4                : { accept: 'image/*' },
                image_5                : { accept: 'image/*' },
                image_6                : { accept: 'image/*' },
                image_7                : { accept: 'image/*' },
                
                sku                    : { required: true, maxlength: 45 },
                price                  : { required: true, number: true, max: 999999.99 },
                price_discount         : { number: true, max: 999999.99 },
                status_usage           : { required: true, maxlength: 45 },
                status_aesthetic       : { required: true, number: true, max: 10 },
                warranty_days          : { required: true, digits: true, maxlength: 11 },
                support                : { required: true, maxlength: 90 },
                delivery               : { required: true, maxlength: 45 },
    
                equipo_marca           : { required: true, maxlength: 45 },
                equipo_linea           : { required: true, maxlength: 45 },
                equipo_modelo          : { required: true, maxlength: 45 },
                ram_gb                 : { required: true, maxlength: 45 },
                ram_tipo               : { required: true, maxlength: 45 },
                discod_amount          : { required: true, number: true, maxlength: 43 },
                discod_storage         : { required: true, maxlength: 2 },
                discod_tipo            : { required: true, maxlength: 45 },
                procesador_marca       : { required: true, maxlength: 45 },
                procesador_linea       : { maxlength: 45 },
                procesador_modelo      : { required: true, maxlength: 45 },
                procesador_gen         : { required: true, maxlength: 45 },
                procesador_ghz         : { required: true, maxlength: 45 },
                procesador_nucleos     : { required: true, maxlength: 45 },
                tarjetag               : { required: true, range: [0, 1] },
                tarjetag_marca         : { maxlength: 45 },
                tarjetag_modelo        : { maxlength: 45 },
                tarjetag_tipomemoria   : { maxlength: 45 },
                tarjetag_gb            : { maxlength: 45 },
                pantalla_tipo          : { required: true, maxlength: 45 },
                pantalla_tamano        : { required: true, maxlength: 45 },
                pantalla_tactil        : { required: true, range: [0, 1] },
                pantalla_resolucion    : { required: true, digits: true, minlength: 3, maxlength: 4 },
                pantalla_resolucion_y  : { required: true, digits: true, minlength: 3, maxlength: 4 },
                teclado_idioma         : { required: true, maxlength: 45 },
                teclado_retroi         : { required: true, range: [0, 1] },
                teclado_num            : { required: true, range: [0, 1] },
                conectv_usb2           : { required: true, digits: true, maxlength: 11 },
                conectv_usb3           : { required: true, digits: true, maxlength: 11 },
                conectv_usbc           : { required: true, digits: true, maxlength: 11 },
                conectv_wifi           : { required: true, range: [0, 1] },
                conectv_bluetooth      : { required: true, range: [0, 1] },
                conectv_jack           : { required: true, range: [0, 1] },
                conectv_hdmi           : { required: true, range: [0, 1] },
                conectv_vga            : { required: true, range: [0, 1] },
                conectv_displayp       : { required: true, range: [0, 1] },
                conectv_ethernet       : { required: true, range: [0, 1] },
                conectv_serialcom      : { required: true, range: [0, 1] },
                conectv_ieee1394       : { required: true, range: [0, 1] },
                so                     : { required: true, maxlength: 45 },
                software_ad            : { required: true, maxlength: 155 },
                audiov_camara          : { required: true, range: [0, 1] },
                audiov_microfono       : { required: true, range: [0, 1] },
                lectura_unidadoptica   : { required: true, range: [0, 1] },
                lectura_sd             : { required: true, range: [0, 1] },
                bateria_tipo           : { required: true, maxlength: 45 },
                bateria_celdas         : { required: true, digits: true, maxlength: 11 }
            }
        });
    };
};
/**
 * * CLOSE MODAL
 * Cerrar modal con tecla ESC o haciendo clic sobre el botón
 */
function closeModal(){
    $(document).bind('keydown', function(e) { 
        if (e.which == 27) {
            $('.btn-close').click();
        };
    });
    $('.btn-close').click(function(){
       $('.modal-shadow--panel').css('display', 'none');
       $('.modal-container').css('display', 'none');
       $('.content').empty();
       $('.content').append('<div class="loading"><i class="bx bx-loader-alt"></i></div>');
       $('body').css('overflow', 'visible');
       if($('.modal').hasClass('modal-mid')){
           $('.modal').removeClass('modal-mid');
       };
       // 2do item en nav
       $('#slider').removeClass('nav-load');
       $('#slider').blur();
    });
};
/**
 * POPUP CONFIRM
 * Muestra el popup de confirmación para eliminar una imagen existente
 * a traves del modal de edit
 */
function popupConfirm(){
const btnsCancel = document.querySelectorAll('.btn-show-popup-replace');
    btnsCancel.forEach(btnCancel => {
        btnCancel.addEventListener('click', () => {
            // Indentificamos elemento popup de cada elemento
            let popup = btnCancel.parentElement.querySelector('.popup-replace');
            // Modificamos su posición hacerlo visible
            popup.style.transform = 'translate(-5px, -91px)';
            popup.style.opacity = '1';
            //Botón para cancelar
            popup.querySelector('.btn-replace-cancel').addEventListener('click', () => {
                popup.style.transform = 'translate(-5px, -5px)';
                popup.style.opacity = '0';
            });
        })
    });
};
/**
 * STRING CLEANING
 * Limpia el valor de cada campo en el array, 
 * extrayendo cualquier caracter excepto dígitos y puntos
 */
function stringClean(){
    const dirtyFields = [
        '#ram_gb',
        '#procesador_ghz', 
        '#procesador_nucleos',
        '#tarjetag_gb',
        '#pantalla_tamano',
        '#pantalla_resolucion_y',
    ];
    for(i = 0; i < dirtyFields.length; i++){
        let stringValue = $(dirtyFields[i]).val();
        $(dirtyFields[i]).val(stringValue.replace(/[^0-9.]+/g, ''));
    };
};
/**
 * DEFAULT FIELDS
 * Asigna valores para selects
 */
function selectsValue(collection) {
    // Asignamos claves y valores
    for(const spec in collection){
        // Obtenemos la colección de options desde la id del select
        let selectOptions = document.getElementById(spec).getElementsByTagName('option');
        // Recorremos el objeto
        for(i = 0; i < selectOptions.length; i++){
            // Comparamos si el texto de la option en la posición i es el mismo
            // que el de la base de datos, si es así, asignamos el atributo selected
            // y el valor true, si no, continuamos con la siguiente posición
            if(selectOptions[i].value == collection[spec]){
                selectOptions[i].setAttribute('selected', true);
            }
        }
    }
};