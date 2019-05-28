function actualizar_spin(funcion) {
    $(".base_spin").each(function () {
        if (funcion == 'show') {
            $(".base_spin").show();
        } else {
            $(".base_spin").hide();
        }
    });
}
function date_picker(){
    $('.date-picker').each(function(){
        $(this).datepicker();
    });
}
function vel_submit(form) {
    actualizar_spin('show');
    setTimeout(function () {
        actualizar_spin('hide');
    }, 1500);
    $(form).submit();
}
function camara() {
    var numItems = $('.camera').length
    if (numItems > 0) {
        Webcam.set({
            width: 260,
            height: 200,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
        Webcam.attach('.camera');
    }
}
function velEditorHtml() {
    $('.velEditorHtml').each(function () {
        $(this).summernote();
    });
}
function velInputDesactivado() {
    $('.velInputDesactivado').each(function () {
        var objeto = $(this);
        var objeto_relacion = $(objeto.attr('relacion'));
        var valor = objeto_relacion.val();
        var oculta_padre = function (oculta, objeto) {
            if (objeto.hasClass('oculta_abuelo')) {
                if (oculta) {
                    objeto.parent().parent().hide();
                } else {
                    objeto.parent().parent().show();
                }
            } else {
                if (oculta) {
                    objeto.parent().hide();
                } else {
                    objeto.parent().show();
                }
            }
        };
        if (valor == "") {
            oculta_padre(true, objeto);
        }
        if (objeto_relacion.is('input')) {
            objeto_relacion.on('input', function () {
                var valor = objeto_relacion.val();
                if (valor != "") {
                    oculta_padre(false, objeto);
                } else {
                    oculta_padre(true, objeto);
                }
            });
        } else if (objeto_relacion.data('select2')) {
            objeto_relacion.select2().on('change', function () {
                var valor = objeto_relacion.val();
                if (valor != "") {
                    oculta_padre(false, objeto);
                } else {
                    oculta_padre(true, objeto);
                }
            });
        } else {
            objeto_relacion.on('change', function () {
                var valor = objeto_relacion.val();
                if (valor != "") {
                    oculta_padre(false, objeto);
                } else {
                    oculta_padre(true, objeto);
                }
            });
        }

    });
}
function velTamanioMaximo() {
    $(".velTamanioMaximo").each(function () {
        var input = $(this);
        var id = input.attr('id');
        var tamanio_maximo = input.attr('tamanio_maximo');
        input.on('input', function () {
            var tamanio = input.val().length;
            if (tamanio_maximo > 0 && tamanio_maximo < tamanio) {
                var valor = input.val().substring(0, tamanio_maximo);
                input.val(valor);
                if (!$("#" + id + "_error").length) {
                    input.parent().append('<div id="' + id + '_error">Tamaño Maximo Permitido: ' + tamanio_maximo + '</div>');
                    setTimeout(function () {
                        $("#" + id + "_error").remove();
                    }, 500);
                }

            }
        });
    });
}
function velRequerido() {
    $('.velRequerido').each(function () {
        var input = $(this);
        var id = input.attr('id');
        if (!input.parent().hasClass('has-danger')) {
            document.getElementById(id).addEventListener('invalid', function () {
                if (input.is("input")) {
                    if (input.val() == "") {
                        this.setCustomValidity("Éste es un campo necesario");
                    }
                } else {
                    this.setCustomValidity("Éste es un campo necesario");
                }
            });
            if (input.is("select")) {
                $("#" + id).on('change', function () {
                    document.getElementById(id).setCustomValidity("");
                });
            } else {
                document.getElementById(id).addEventListener('input', function () {
                    if (input.is('input')) {
                        document.getElementById(id).setCustomValidity("");
                    }
                });
            }
            input.parent().addClass('has-danger');
            $(this).parent().children('label').addClass('form-control-label');
            var label = $(this).parent().children('label').html();
            $(this).parent().children('label').html("<b>" + label + "* </b>");
        }
    });
}
var opcionesToastrError = {
    tapToDismiss: true,
    toastClass: 'toast',
    containerId: 'toast-container',
    debug: false,
    showMethod: 'fadeIn', //fadeIn, slideDown, and show are built into jQuery
    showDuration: '300',
    showEasing: 'swing', //swing and linear are built into jQuery
    onShown: undefined,
    hideMethod: 'fadeOut',
    hideDuration: 1000,
    hideEasing: 'swing',
    onHidden: undefined,
    closeMethod: false,
    closeDuration: false,
    closeEasing: false,
    extendedTimeOut: 500000,
    iconClasses: {
        error: 'toast-error',
        info: 'toast-info',
        success: 'toast-success',
        warning: 'toast-warning'
    },
    iconClass: 'toast-error',
    positionClass: 'toast-top-full-width',
    timeOut: 500000, // Set timeOut and extendedTimeOut to 0 to make it sticky
    titleClass: 'toast-title',
    messageClass: 'toast-message',
    escapeHtml: false,
    target: 'body',
    closeHtml: '<button type="button">&times;</button>',
    newestOnTop: true,
    preventDuplicates: false,
    progressBar: false
};


var opcionesToastrExito = {
    tapToDismiss: true,
    toastClass: 'toast',
    containerId: 'toast-container',
    debug: false,
    showMethod: 'fadeIn', //fadeIn, slideDown, and show are built into jQuery
    showDuration: '300',
    showEasing: 'swing', //swing and linear are built into jQuery
    onShown: undefined,
    hideMethod: 'fadeOut',
    hideDuration: 1000,
    hideEasing: 'swing',
    onHidden: undefined,
    closeMethod: false,
    closeDuration: false,
    closeEasing: false,
    extendedTimeOut: 1000,
    iconClasses: {
        error: 'toast-error',
        info: 'toast-info',
        success: 'toast-success',
        warning: 'toast-warning'
    },
    iconClass: 'toast-info',
    positionClass: 'toast-top-full-width',
    timeOut: 20000, // Set timeOut and extendedTimeOut to 0 to make it sticky
    titleClass: 'toast-title',
    messageClass: 'toast-message',
    escapeHtml: false,
    target: 'body',
    closeHtml: '<button type="button">&times;</button>',
    newestOnTop: true,
    preventDuplicates: false,
    progressBar: false
};
function velOculta() {
    $('.grupo_pregunta_hidden').each(function () {
        var objeto = $(this);
        var input = $(this).attr('input_hidden');
        var valor = $(this).attr('valor_hidden');
        var condicion = $(this).attr('condicion_hidden');
        $(input).on('change', function () {
            velOcultaAccion(input, valor, condicion, objeto);
            velRequerido();
        });
        velOcultaAccion(input, valor, condicion, objeto);
    });
    $('.input_cambio_borrar').each(function () {
        var input = $(this).attr('ocultar');
        if ($(this).is('input')) {
            $(this).on('input', function () {
                $(input).html("");
            });
        } else {
            if ($(this).data('select2')) {
                $(this).select2().on('change', function () {
                    $(input).html("");
                });
            } else {
                $(input).html("");
            }
        }

    });
}
function velOcultaAccion(input, valor, condicion, objeto) {
    var valor_comparar = $(input).val();
    var iguales = false;
    if (valor_comparar == valor) {
        iguales = true;
    }
    if ((iguales && condicion == '=') || (!iguales && condicion == '!=')) {
        $(objeto).show();
        $(objeto).find('input').each(function () {
            $(this).attr('required', 'required');
            $(this).addClass('velRequerido');
        });
    } else {
        $(objeto).hide();
        $(objeto).find('input').each(function () {
            $(this).removeAttr('required');
            $(this).removeClass('velRequerido');
            var elemento = $(this).get(0);
            elemento.setCustomValidity("");
        });
    }
}

function velCambioDatos(id_origen, id_destino, url_destino) {
    if (id_origen.search(".") == 0) {
        $(id_origen).each(function () {
            id_origen = "#" + $(this).attr('id');
        });
    }
    if (id_destino.search(".") == 0) {
        $(id_destino).each(function () {
            id_destino = "#" + $(this).attr('id');
        });
    }
    var valor = jQuery(id_origen).val();
    $.ajax({
        url: url_destino,
        type: "POST",
        dataType: "JSON",
        async: false,
        data: {"valor": valor},
    }).done(function (response) {
        $(id_destino).html("");
        $.each(response, function (llave, valor) {
            $(id_destino).append("<option value='" + valor['id'] + "'>" + valor['descripcion'] + "</option>");
        });
        if (response.length == 2) {
            $(id_destino + ' option[value=' + response[1].id + ']').attr("selected", 'true');
        } else {
            $(id_destino).val("");
        }
        $(id_destino).trigger("change");
    }).fail(function (xhr, textStatus, errorThrown) {
        toastr.error(errorThrown, xhr.status, opcionesToastrError);
    });
    var elemento = jQuery(id_origen).get(0);
    elemento.setCustomValidity("");
}
function velSelectVacio() {
    $('select').each(function () {
        var input = $(this);
        var valor = input.val();
        if ($(this).attr('onchange') && valor != '') {
            input.trigger("change");
        }
    });
}
function velCambioValor(id_origen, id_destino, url_destino) {
    var valor = jQuery(id_origen).val();
    $.ajax({
        url: url_destino,
        type: "GET",
        dataType: "JSON",
        async: false,
        data: {"valor": valor}
    }).done(function (response) {
        $(id_destino).removeAttr('disabled');
        if ($(id_destino).is('select')) {
            $(id_destino).val(response);
            if (response != "") {
                $(id_destino).attr("disabled", 'true');
            }
        } else {
            $(id_destino).val(response);
        }
        var elemento = jQuery(id_destino).get(0);
        if (elemento) {
            elemento.setCustomValidity("");
        }
    }).fail(function (xhr, textStatus, errorThrown) {
        toastr.error(errorThrown, xhr.status, opcionesToastrError);
    });
}

function velSelect2() {
//    $('.select2').each(function () {
//        $(this).select2();
//    });
}
function numero(objeto) {
    var valor = objeto.val();
    valor = limpieza_coma(valor);
    decimal = valor.split('.');
    valor = decimal[0];
    var nuevo_valor = '';
    var contador = 0;
    for (var i = valor.length; i >= 0; i--) {
        nuevo_valor = valor.substring(i, i + 1) + nuevo_valor;
        if (contador == 3 && i != 0) {
            contador = 0;
            nuevo_valor = ',' + nuevo_valor;
        }
        contador++;
    }
    if (1 in decimal) {
        nuevo_valor = nuevo_valor + '.' + decimal[1];
    }
    objeto.val(nuevo_valor);
}
function velNumber() {

    $(".velNumber").each(function () {
        var objeto = $(this);
        objeto.on('input', function () {
            var objeto = $(this);
            numero(objeto);
        });
        numero(objeto);
    });

}
function limpieza_coma(valor) {
    valor = String(valor);
    do {
        valor = valor.replace(",", "");
    } while (valor.includes(','));
    return valor;
}
function agregarVacio() {
    $('.agregarVacio').each(function () {
        var id = $(this).attr('id');
        $("#" + id + " option[value='']").remove();
        $(this).attr("required", "true");
        $(this).prepend("<option value=''>[Seleccione una Opcion]</option>");
        if (!$(this).hasClass('persisteValor')) {
            $(this).val("");
        }
        $(this).removeClass("agregarVacio");
    });
    $('.agregarVacioNoRequerido').each(function () {
        var id = $(this).attr('id');
        $("#" + id + " option[value='']").remove();
        $(this).prepend("<option value=''>[Seleccione una Opcion]</option>");
        if (!$(this).hasClass('persisteValor')) {
            $(this).val("");
        }
        $(this).removeClass("agregarVacioNoRequerido");
    });
}
function velCambioOcultar(id_origen, id_destino, url_destino, padre) {
    var valor = jQuery(id_origen).val();
    $.ajax({
        url: url_destino,
        type: "POST",
        dataType: "JSON",
        async: false,
        data: {"valor": valor},
    }).done(function (response) {
        var div_ocultar_mostrar = $(id_destino);
        if (padre == "1") {
            div_ocultar_mostrar = div_ocultar_mostrar.parent();
        }
        if (response == "1") {
            div_ocultar_mostrar.hide();
        } else {
            div_ocultar_mostrar.show();
        }
    }).fail(function (xhr, textStatus, errorThrown) {
        toastr.error(errorThrown, xhr.status, opcionesToastrError);
    });
    var elemento = jQuery(id_origen).get(0);
    elemento.setCustomValidity("");
}

function velCambioOcultarEstado(id_origen, id_destino, url_destino, padre) {
    var valor = jQuery(id_origen).val();
    $.ajax({
        url: url_destino,
        type: "POST",
        dataType: "JSON",
        async: false,
        data: {"valor": valor},
    }).done(function (response) {
        var div_ocultar_mostrar = $(id_destino);
        if (padre == "1") {
            div_ocultar_mostrar = div_ocultar_mostrar.parent();
        }
        if (response == "1") {
            div_ocultar_mostrar.hide();
            $(id_destino).removeAttr('required');
            $(id_destino).removeClass('velRequerido');
        } else {
            div_ocultar_mostrar.show();
            $(id_destino).attr('required', 'true');
            $(id_destino).addClass('velRequerido');
        }
        var elemento = $(id_destino).get(0);
        elemento.setCustomValidity("");
    }).fail(function (xhr, textStatus, errorThrown) {
        toastr.error(errorThrown, xhr.status, opcionesToastrError);
    });
    var elemento = jQuery(id_origen).get(0);
    elemento.setCustomValidity("");
}

function velHelp() {
    $('.velHelp').each(function () {
        var input = $(this);
        input.on('change', function () {
            velLlenaTextoHelp(input);
        });
        velLlenaTextoHelp(input);
    });
}
function velLlenaTextoHelp(input) {
    var url = input.attr('urlHelp');
    var valor = input.val();
    var destino = $(input.attr('destino'));
    var id_help = destino.attr('id') + "_help";
    $("#" + id_help).remove();
    $.ajax({
        url: url,
        type: "GET",
        dataType: "TEXT",
        async: false,
        data: {"valor": valor}
    }).done(function (response) {
        var response = JSON.parse(response);
        if (response != "") {
            destino.parent().append("<span class='help-inline' id='" + id_help + "'>" + response['TEXTO'] + "</span>");
            if (response['TIPO'] != '') {
                switch (response['TIPO'].toUpperCase()) {
                    case 'NUMERICO':
                        destino.prop('type', 'number');
                        destino.prop('pattern', '\\d*');
                        break;
                    case 'FECHA':
                        destino.prop('type', 'date');
                        break;
                    default:
                        destino.prop('type', 'text');
                        break;
                }

            }
        }
    }).fail(function (xhr, textStatus, errorThrown) {
        toastr.error(errorThrown, xhr.status, opcionesToastrError);
    });
    var elemento = input.get(0);
    elemento.setCustomValidity("");
}
function carga_portlet(url_destino, tipo_envio, valores_envio, tipo_respuesta, list_panel_clean, list_panel_hidden, ubicacion_destino) {
    var exito = false;
//  LLAMADA
    $.ajax({
        url: url_destino,
        type: tipo_envio,
        async: true,
        cache: false,
        data: valores_envio,
        dataType: tipo_respuesta,
        timeout: 60000,
        beforeSend: function () {
            actualizar_spin('show');
        }
    }).fail(function (xhr, textStatus, errorThrown) {
        if (xhr.status == "401") {
            window.location.href = "http://" + window.location.host + "/seguridad/cambio_clave";
        } else {
            actualizar_spin('hide');
            toastr.error(xhr.responseText, xhr.status, opcionesToastrError);
        }
    }).done(function (response) {
        exito = true;
        tiempo = 0;
        if (tipo_respuesta == 'JSON') {
            if ('mensaje' in response) {
                var contenido = response['mensaje'];
                var tipo = contenido.tipo;
                var mensaje = contenido.contenido;
                switch (tipo) {
                    case "exito":
                        velSelectVacio();
                        opcionesToastrExito.iconClass = 'toast-success';
                        toastr.success(mensaje, 'Exito', opcionesToastrExito);
                        break;
                    case "alerta":
                        opcionesToastrExito.iconClass = 'toast-info';
                        toastr.info(mensaje, "Informacion", opcionesToastrExito);
                        exito = false;
                        break;
                    case "error":
                        toastr.error(mensaje, "Error", opcionesToastrError);
                        exito = false;
                        break;
                }
            }
            if ('tiempo' in response) {
                tiempo = response['tiempo'];
            }
            if ('redireccion' in response) {
                actualizar_spin('hide');
                setTimeout(function () {
                    window.location.replace(response['redireccion']);
                }, tiempo);
            }
        }
//LIMPIEZA PANELES
        if (list_panel_hidden) {
            var list_panel_hidden_array = list_panel_clean.split(',');
            for (var i = 0; i < list_panel_hidden_array.length; i++) {
                $(list_panel_hidden_array[i]).empty();
            }
        }
//QUITAR PANELES
        if (list_panel_hidden) {
            var list_panel_hidden_array = list_panel_hidden.split(',');
            for (var i = 0; i < list_panel_hidden_array.length; i++) {
                $(list_panel_hidden_array[i]).remove();
            }
        }
//SUSTITUIR
        if (ubicacion_destino) {
            if (tipo_respuesta == 'HTML') {
                var html_respuesta = response;
            }
            if (tipo_respuesta == 'JSON') {
                if ('html' in response) {
                    var html_respuesta = response['html'];
                    if ('ubicacion' in response) {
                        ubicacion_destino = response['ubicacion'];
                    }
                }
            }
            $(ubicacion_destino).html(html_respuesta);
            var codigo_postal_valor = false;
            if ($("#confirmacion_pago_CODIGO_POSTAL").length && $("#confirmacion_pago_CODIGO_POSTAL").val() != "") {
                codigo_postal_valor = $("#confirmacion_pago_CODIGO_POSTAL").val();
            }
            if ($("#envio_remesa_REM_CODIGO_POSTAL").length && $("#envio_remesa_REM_CODIGO_POSTAL").val() != "") {
                codigo_postal_valor = $("#envio_remesa_REM_CODIGO_POSTAL").val();
            }
            agregarVacio();
            velHelp();
            velRequerido();
            VelRojo();
            velOculta();
            velTamanioMaximo();
            velInputDesactivado();
            velSelect2();
            SwithToggle();
            velNumber();
            if ($("#confirmacion_pago_CODIGO_POSTAL").length && codigo_postal_valor) {
                $("#confirmacion_pago_CODIGO_POSTAL").val(codigo_postal_valor);
                if (tipo_respuesta == 'JSON') {
                    if (exito) {
                        codigo_postal(false);
                    }
                }
            }
            if ($("#envio_remesa_REM_CODIGO_POSTAL").length && codigo_postal_valor) {
                $("#envio_remesa_REM_CODIGO_POSTAL").val(codigo_postal_valor);
                if (tipo_respuesta == 'JSON') {
                    if (exito) {
                        codigo_postal(false);
                    }
                }
            }
            actualizar_spin('hide');
        }

    });
    return exito;
}
function update() {
    $(".clock").each(function () {
        var formato = $(this).attr('zona_horaria');
        var texto = $(this).attr('texto');
        var url = $(this).attr('url');
        var objeto = $(this);
        $.get(url, {'formato': formato}, function (response) {
            objeto.html(texto + response);
        });
//        $(this).html(texto + moment(fecha_hora + " " + formato).format('DD-MM-YYYY @ HH:mm'));
    });
}
$(document).ready(function () {
    if ($("#portlet_inicial").length > 0) {
        $('#portlet_inicial').each(function () {
            carga_portlet(
                    $(this).attr('url_destino'),
                    $(this).attr('tipo_envio'),
                    $(this).attr('valores_envio'),
                    $(this).attr('tipo_respuesta'),
                    "#portlet_inicial",
                    $(this).attr('list_panel_hidden'),
                    "#portlet_inicial"
                    );
        });
    }
    actualizar_spin('hide');
    camara();
    update();
    setInterval(update, 50000);
    velEditorHtml();
    velRequerido();
    VelRojo();
    velTamanioMaximo();
    velInputDesactivado();
    SwithToggle();
    date_picker();
});
function FunModal(url, tipo, valores, tipoDato, destino) {

    if (tipo == 'GET') {
        url = url + '?palabra_origen=' + valores;
    }

    $.ajax({
        url: url,
        type: tipo,
        async: true,
        data: valores,
        cache: false,
        dataType: tipoDato
    }).fail(function (xhr, textStatus, errorThrown) {
        toastr.error(errorThrown, xhr.status, opcionesToastrError);
    }).done(function (response) {
        var exito = true;
        if ('mensaje' in response) {
            switch (response['mensaje'].tipo) {
                case "exito":
                    opcionesToastrExito.iconClass = 'toast-success';
                    toastr.success(response['mensaje'].contenido, 'Exito', opcionesToastrExito);
                    break;
                case "error":
                    exito = false;
                    toastr.error(response['mensaje'].contenido, "Error", opcionesToastrError);
                    break;
            }
        }

        if ('html' in response) {
            if (exito) {
                $(destino).html(response['html']);
            }
        }
    });
}

function SwithToggle() {
    $('.toggle_checkbox').each(function () {
        $(this).bootstrapToggle({
            on: 'Si',
            off: 'No',
            size: 'small'
        });
        $(this).parent().css('display', 'block');
    });
}

function VelRojo() {
    $('.velRojo').each(function () {
        var input = $(this);
        if (!input.parent().hasClass('has-danger')) {
            input.parent().addClass('has-danger');
            $(this).parent().children('label').addClass('form-control-label');
            var label = $(this).parent().children('label').html();
            $(this).parent().children('label').html("<b>" + label + "* </b>");
        }
    });
}
function velCambioPais(id_origen, url_destino) {
    if (id_origen.search(".") == 0) {
        $(id_origen).each(function () {
            id_origen = "#" + $(this).attr('id');
        });
    }
    var valor = jQuery(id_origen).val();
    $.ajax({
        url: url_destino,
        type: "POST",
        dataType: "JSON",
        async: false,
        data: {"valor": valor}
    }).done(function (response) {
        if (response['tipo_direccion'].includes("Municipio")) {
            $("#envio_remesa_REM_MUNICIPIO").attr('required', 'true');
            $("#envio_remesa_REM_MUNICIPIO").parent().show();
        } else {
            $("#envio_remesa_REM_MUNICIPIO").removeAttr('required');
            $("#envio_remesa_REM_MUNICIPIO").parent().hide();
        }
        if (response['tipo_direccion'].includes("Ciudad")) {
            $("#envio_remesa_REM_CIUDAD").attr('required', 'true');
            $("#envio_remesa_REM_CIUDAD").parent().show();
        } else {
            $("#envio_remesa_REM_CIUDAD").removeAttr('required');
            $("#envio_remesa_REM_CIUDAD").parent().hide();
        }
        if (response['tipo_direccion'].includes("Asentamiento")) {
            $("#envio_remesa_REM_ASENTAMIENTO").attr('required', 'true');
            $("#envio_remesa_REM_ASENTAMIENTO").parent().show();
        } else {
            $("#envio_remesa_REM_ASENTAMIENTO").removeAttr('required');
            $("#envio_remesa_REM_ASENTAMIENTO").parent().hide();
        }

        remplaza_onchange("#envio_remesa_REM_DEPARTAMENTO");
        remplaza_onchange("#envio_remesa_REM_MUNICIPIO");
        remplaza_onchange("#envio_remesa_REM_CIUDAD");
        remplaza_onchange("#envio_remesa_REM_ASENTAMIENTO");
        if (response['tipo_direccion'] == 'Departamento,Codigo Postal') {
            cambia_on_change("#envio_remesa_REM_DEPARTAMENTO");
        }
        if (response['tipo_direccion'] == 'Departamento,Municipio,Codigo Postal') {
            cambia_on_change("#envio_remesa_REM_MUNICIPIO");
        }
        if (response['tipo_direccion'] == 'Departamento,Municipio,Ciudad,Codigo Postal') {
            cambia_on_change("#envio_remesa_REM_CIUDAD");
        }
        if (response['tipo_direccion'] == 'Departamento,Municipio,Ciudad,Asentamiento,Codigo Postal') {
            cambia_on_change("#envio_remesa_REM_ASENTAMIENTO");
        }
        cambio_tipo_input("envio_remesa_REM_DEPARTAMENTO", response['departamento'], response['listado_departamentos']);
        cambio_tipo_input("envio_remesa_REM_MUNICIPIO", response['municipio'], []);
        cambio_tipo_input("envio_remesa_REM_CIUDAD", response['ciudad'], []);
        cambio_tipo_input("envio_remesa_REM_ASENTAMIENTO", response['asentamiento'], []);
        velTamanioMaximo();
    }).fail(function (xhr, textStatus, errorThrown) {
        toastr.error(errorThrown, xhr.status, opcionesToastrError);
    });
    var elemento = jQuery(id_origen).get(0);
    elemento.setCustomValidity("");
}
function cambia_on_change(id) {
    var onchange_input_destino = $(id).attr("onchange");
    onchange_input_destino = onchange_input_destino.replace("&quot;", "'");
    $(id).attr('onchange_backup', onchange_input_destino);
    $(id).attr('onchange', 'velCambioValorPais("' + id + '", "#envio_remesa_REM_CODIGO_POSTAL", "' + jQuery("#url_webpos_frontend_envio_consulta_codigo_postal").attr("val") + '")');
}
function remplaza_onchange(id) {
    if (jQuery(id).attr("onchange_backup") && typeof jQuery(id).attr("onchange_backup") !== "undefined") {
        jQuery(id).attr('onchange', jQuery(id).attr("onchange_backup").replace("&quot;", "'"));
        jQuery(id).removeAttr('onchange_backup');
    }
}
function velCambioValorPais(id_origen, id_destino, url_destino) {
    var valor = jQuery(id_origen).val();
    $.ajax({
        url: url_destino,
        type: "GET",
        dataType: "JSON",
        async: false,
        data: {"valor": valor, "pais": jQuery("#envio_remesa_REM_PAIS_RESIDENCIA").val()}
    }).done(function (response) {
        $(id_destino).removeAttr('disabled');
        if ($(id_destino).is('select')) {
            $(id_destino).val(response);
            if (response != "") {
                $(id_destino).attr("disabled", 'true');
            }
        } else {
            $(id_destino).val(response);
        }
        var elemento = jQuery(id_destino).get(0);
        if (elemento) {
            elemento.setCustomValidity("");
        }
    }).fail(function (xhr, textStatus, errorThrown) {
        toastr.error(errorThrown, xhr.status, opcionesToastrError);
    });
}
function cambio_tipo_input(id, condicion, listado) {
    var objeto = $("#" + id);
    var padre = objeto.parent();
    var name_input_destino = objeto.attr("name");
    var onchange_input_destino = objeto.attr("onchange");
    onchange_input_destino = onchange_input_destino.replace("&quot;", "'");
    var onchange_input_destino_backup = objeto.attr("onchange_backup");
    if (onchange_input_destino_backup && typeof onchange_input_destino_backup !== "undefined") {
        onchange_input_destino_backup = onchange_input_destino_backup.replace("&quot;", "'");
    } else {
        onchange_input_destino_backup = '';
    }
    var required_input_destino = "";
    if (objeto.attr("required") && typeof objeto.attr("required") !== "undefined") {
        required_input_destino = "required='" + objeto.attr("required") + "'";
    }
    objeto.remove();
    if (condicion) {
        padre.append("<select  id='" + id + "' name='" + name_input_destino + "' class='form-control NoRequerido velRojo'  onchange_backup='" + onchange_input_destino_backup + "'  onchange='" + onchange_input_destino + "' " + required_input_destino + "></select>");
    } else {
        if (id.includes("DEPARTAMENTO")) {
            padre.append("<input autocomplete='off' type='text' id='" + id + "' name='" + name_input_destino + "' class='form-control velTamanioMaximo velRojo' tamanio_maximo='2' onchange_backup='" + onchange_input_destino_backup + "'  onchange='" + onchange_input_destino + "'  " + required_input_destino + "/>");
        } else {
            padre.append("<input autocomplete='off' type='text' id='" + id + "' name='" + name_input_destino + "' class='form-control velRojo' onchange_backup='" + onchange_input_destino_backup + "'  onchange='" + onchange_input_destino + "' " + required_input_destino + "/>");
        }

    }
    if (listado.length > 0) {
        $.each(listado, function (llave, valor) {
            $("#" + id).append("<option value='" + valor['id'] + "'>" + valor['descripcion'] + "</option>");
        });
    }
}