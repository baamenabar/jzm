"use strict";

var tools = {
	validar: {
		email: function(email){
			var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return regex.test(email);
		}
	},
	scrollTo: function(element){
		$('html, body').animate({ scrollTop: $(element).offset().top }, 1000);
	},
	trim: function(string){
		return string.replace(/^\s+/g,'').replace(/\s+$/g,'');
	}
};
var contacto = {
	init: function(){
		var that = this;
		$('#form-contacto input[type="submit"]').click(function(){
			return that.validar();
		});
	},
	validar: function(){
		var that = this;
		var nombre = tools.trim($('#form-nombre').val());
		var email = tools.trim($('#form-email').val());
		var telefono = tools.trim($('#form-telefono').val());
		var evento = tools.trim($('#form-evento').val());
		var fecha = tools.trim($('#form-fecha').val());
		var lugar = tools.trim($('#form-lugar').val());
		var personas = tools.trim($('#form-personas').val());
		var mensaje = tools.trim($('#form-mensaje').val());
		var errores = [];

		if(nombre == ''){
			errores.push('Debes ingresar un nombre');
		}
		if(email == ''){
			errores.push('Debes ingresar un e-mail');
		} else {
			if(!tools.validar.email(email)){
				errores.push('El e-mail ingresado es inválido');
			}
		}
		// if(telefono == ''){
		// 	errores.push('Debes ingresar un teléfono de contacto');
		// }
		// if(evento == '0'){
		// 	errores.push('Debes seleccionar un tipo de evento');
		// }
		// if(fecha == ''){
		// 	errores.push('Debes indicar la fecha del evento');
		// } else {

		// }
		// if(lugar == ''){
		// 	errores.push('Debes ingresar el lugar del evento');
		// }
		// if(personas == ''){
		// 	errores.push('Debes ingresar el número de personas');
		// }
		// if(mensaje == ''){
		// 	errores.push('Debes ingresar un mensaje');
		// }

		if(errores.length){
			that.mostrarErrores(errores);
			that.validarOnChange();
			return false;
		}
		return true;
	},
	mostrarErrores: function(errores){
		var errores_ = errores.slice(); // Necesitamos una copia de los errores
		if($('.form-error ul').length){ // La lista de errores ya existe
			var erroresViejos = $('.form-error ul li');
			// Agregamos errores nuevos primero
			$(erroresViejos).each(function(){
				var index = $.inArray($(this).html(), errores);
				if(index > -1){
					errores.splice(index, 1);
				}
			});
			for (var i = 0; i < errores.length; i++) {
				$('<li>').text(errores[i]).hide().appendTo('.form-error ul').slideDown('1000');
			}
			// Borramos errores solucionados
			$(erroresViejos).each(function(){
				var errorViejo = $(this).html();
				if($.inArray(errorViejo, errores_) === -1){
					$(this).slideUp('1000', function(){
						$(this).remove();
					});
				}
			});
		} else { // Primera vez que apreta clic a enviar, creamos lista de errores
			$('.form-error').append('<ul></ul>');
			var lista = $('.form-error ul');
			for (var i = 0; i < errores.length; i++) {
				$(lista).append('<li>'+ errores[i] +'</li>');
			}
			tools.scrollTo('.form-error');
			$('.form-error').slideDown(1000);
		}
	},
	validarOnChange: function(){
		var that = this;
		$('#form-contacto input[type!="submit"]').unbind('change');
		$('#form-contacto input[type!="submit"]').change(function(){
			that.validar();
		});
		$('#form-contacto select').unbind('change');
		$('#form-contacto select').change(function(){
			that.validar();
		});
		$('#form-contacto textarea').unbind('change');
		$('#form-contacto textarea').change(function(){
			that.validar();
		});
	}
}

$(function() {
	contacto.init();
	$( ".datepicker" ).datepicker();
	$.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
});
