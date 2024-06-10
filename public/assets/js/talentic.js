function check_confirm() {
  flagSend = true;
  return confirm('¿Esta seguro que desea realziar esta acción?');
}

// Validate all forms by default
let flagSend = true;
let errorClass = 'error';
$('form button[type=submit]').on('click', function (e) {
  // Cancel event by default
  e.preventDefault();
  try {tinyMCE.triggerSave();}catch ($e){}

  let error = false,
    frm = $(this).parents("form"),
    flagFunctionJs = "",
    btn = this;

  $(frm).find(':input').each(function () {
    let tInput = $(this).attr("type");
    let elemento = $(this);
    let valor = '';

    $(elemento).removeClass(errorClass);

    if (tInput == "radio" || tInput == "checkbox") {
      if ($("input[name='" + elemento.attr('name') + "']:checked").val())
        valor = $("input[name='" + elemento.attr('name') + "']:checked").val();
    } else {
      valor = elemento.val();
    }

    if (elemento.hasClass('required') && !error && !valor.trim()) {
      let requerido = elemento.attr('data-required') ? elemento.attr('data-required') : 'El campo es requerido.';
      error = true;
      return showErrorValidation(this, requerido);
    }

    if (elemento.hasClass('cedula')) {
      if (valor.length < 4 || valor.length > 10) {
        let requerido = elemento.attr('data-invalid') ? elemento.attr('data-invalid') : 'El campo cédula debe tener entre 4 y 10 digitos';
        error = true;
        return showErrorValidation(this, requerido);
      }
    }

    if (elemento.hasClass('numero') && !error && valor.trim()) {
      if (!validar_numeros(valor.trim())) {
        let requerido = elemento.attr('data-invalid') ? elemento.attr('data-invalid') : 'El campo no es valido, debe contener solo números.';
        error = true;
        return showErrorValidation(this, requerido);
      }
    }

    if (elemento.hasClass('telefono') && !error) {
      if (!validar_telefono(valor.trim())) {
        let requerido = elemento.attr('data-phone-invalid') ? elemento.attr('data-phone-invalid') : 'El número de celular no es valido, debe tener entre 10 digitos y comenzar con el número 3';
        error = true;
        return showErrorValidation(this, requerido);
      }
    }

    if (elemento.hasClass('terminos') && !error && !elemento.prop('checked')) {
      let requerido = elemento.attr('data-invalid') ? elemento.attr('data-invalid') : 'Debe aceptar los términos y condiciones';
      error = true;
      return showErrorValidation(this, requerido);
    }

    if (elemento.hasClass('email') && !error && valor.trim()) {
      if (!validar_email(valor.trim())) {
        let requerido = elemento.attr('data-mail-invalid') ? elemento.attr('data-mail-invalid') : 'El email no es valido.';
        error = true;
        return showErrorValidation(this, requerido);
      }
    }

    if (elemento.hasClass('fecha') && !error && valor.trim()) {
      if (!validar_fecha(valor.trim())) {
        let requerido = elemento.attr('data-date-invalid') ? elemento.attr('data-date-invalid') : 'La fecha no es valida.';
        error = true;
        return showErrorValidation(this, requerido);
      }
    }

    if (elemento.hasClass('repeat') && !error) {
      let objRef = elemento.attr('data-repeat'),
        valMain = $(objRef).val().trim();
      if (valor != valMain) {
        let requerido = elemento.attr('data-repeat-msg') ? elemento.attr('data-repeat-msg') : 'Los valores deben ser iguales';
        error = true;
        return showErrorValidation(this, requerido);
      }
    }

    if (flagFunctionJs == '' && elemento.hasClass('function-js')) {
      flagFunctionJs = valor.trim();
    }

  });

  if (!error) {

    if (!flagSend) {
      return showErrorValidation(null, 'Por favor espere un momento estamos validando su solicitud');
    }

    if (flagFunctionJs != '') {
      eval(flagFunctionJs);
      return true;
    }

    flagSend = false;
    $('.error').remove();
    $(btn).html('CARGANDO...')
    $(frm).submit();
  }
});

function validar_email(valor) {
  let filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
  if (filter.test(valor)) {
    return true;
  }
  return false;
}
function validar_numeros(valor) {
  let filter = /^([0-9]|[,.])*$/;
  if (filter.test(valor)) {
    return true;
  }
  return false;
}

function validar_telefono(valor) {
  //let filter = /^([0-9]{7,})+(-){0,1}([0-9]{7,})$/;
  //let filter = /^([0-9]{7,10})*$/;
  //let filter = /^([0-9]{10})*$/;
  let filter = /^3[\d]{9}$/;
  //if (filter.test(valor) && valor.toString().length > 6 && valor.toString().length < 11) {
  if (isNaN(valor) || !filter.test(valor)) {
    return false;
  }
  return true;
}

function validar_fecha(valor) {
  //let filter = /^(\d{4})(\/|-)([0][1-9]|[1][0-2])(\/|-)([0][1-9]|[12][0-9]|3[01])$/;
  let filter = /^(\d{4})(-)([0][1-9]|[1][0-2])(-)([0][1-9]|[12][0-9]|3[01])$/;
  if (filter.test(valor)) {
    return true;
  }
  return false;
}

function showErrorValidation(obj, msg) {
  $(obj).addClass(errorClass).focus();
  $('.error-msg').html(msg);
  $('.toast-danger').toast('show');
  return false;
}

