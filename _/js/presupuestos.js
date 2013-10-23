"use strict";

//http://stackoverflow.com/questions/149055/how-can-i-format-numbers-as-money-in-javascript
Number.prototype.formatMoney = function(c, d, t){
var n = this,
    c = isNaN(c = Math.abs(c)) ? 2 : c,
    d = d == undefined ? "," : d,
    t = t == undefined ? "." : t,
    s = n < 0 ? "-" : "",
    i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
    j = (j = i.length) > 3 ? j % 3 : 0;
   return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
 };
//http://mtrpcic.github.io/pathjs/
var Path={version:"0.8.4",map:function(a){if(Path.routes.defined.hasOwnProperty(a)){return Path.routes.defined[a]}else{return new Path.core.route(a)}},root:function(a){Path.routes.root=a},rescue:function(a){Path.routes.rescue=a},history:{initial:{},pushState:function(a,b,c){if(Path.history.supported){if(Path.dispatch(c)){history.pushState(a,b,c)}}else{if(Path.history.fallback){window.location.hash="#"+c}}},popState:function(a){var b=!Path.history.initial.popped&&location.href==Path.history.initial.URL;Path.history.initial.popped=true;if(b)return;Path.dispatch(document.location.pathname)},listen:function(a){Path.history.supported=!!(window.history&&window.history.pushState);Path.history.fallback=a;if(Path.history.supported){Path.history.initial.popped="state"in window.history,Path.history.initial.URL=location.href;window.onpopstate=Path.history.popState}else{if(Path.history.fallback){for(route in Path.routes.defined){if(route.charAt(0)!="#"){Path.routes.defined["#"+route]=Path.routes.defined[route];Path.routes.defined["#"+route].path="#"+route}}Path.listen()}}}},match:function(a,b){var c={},d=null,e,f,g,h,i;for(d in Path.routes.defined){if(d!==null&&d!==undefined){d=Path.routes.defined[d];e=d.partition();for(h=0;h<e.length;h++){f=e[h];i=a;if(f.search(/:/)>0){for(g=0;g<f.split("/").length;g++){if(g<i.split("/").length&&f.split("/")[g].charAt(0)===":"){c[f.split("/")[g].replace(/:/,"")]=i.split("/")[g];i=i.replace(i.split("/")[g],f.split("/")[g])}}}if(f===i){if(b){d.params=c}return d}}}}return null},dispatch:function(a){var b,c;if(Path.routes.current!==a){Path.routes.previous=Path.routes.current;Path.routes.current=a;c=Path.match(a,true);if(Path.routes.previous){b=Path.match(Path.routes.previous);if(b!==null&&b.do_exit!==null){b.do_exit()}}if(c!==null){c.run();return true}else{if(Path.routes.rescue!==null){Path.routes.rescue()}}}},listen:function(){var a=function(){Path.dispatch(location.hash)};if(location.hash===""){if(Path.routes.root!==null){location.hash=Path.routes.root}}if("onhashchange"in window&&(!document.documentMode||document.documentMode>=8)){window.onhashchange=a}else{setInterval(a,50)}if(location.hash!==""){Path.dispatch(location.hash)}},core:{route:function(a){this.path=a;this.action=null;this.do_enter=[];this.do_exit=null;this.params={};Path.routes.defined[a]=this}},routes:{current:null,root:null,rescue:null,previous:null,defined:{}}};Path.core.route.prototype={to:function(a){this.action=a;return this},enter:function(a){if(a instanceof Array){this.do_enter=this.do_enter.concat(a)}else{this.do_enter.push(a)}return this},exit:function(a){this.do_exit=a;return this},partition:function(){var a=[],b=[],c=/\(([^}]+?)\)/g,d,e;while(d=c.exec(this.path)){a.push(d[1])}b.push(this.path.split("(")[0]);for(e=0;e<a.length;e++){b.push(b[b.length-1]+a[e])}return b},run:function(){var a=false,b,c,d;if(Path.routes.defined[this.path].hasOwnProperty("do_enter")){if(Path.routes.defined[this.path].do_enter.length>0){for(b=0;b<Path.routes.defined[this.path].do_enter.length;b++){c=Path.routes.defined[this.path].do_enter[b]();if(c===false){a=true;break}}}}if(!a){Path.routes.defined[this.path].action()}}}

var presupuesto = {
	datosFiesta: {
		slideActual: 0,
		valor: 0,
		tipoFiesta: '',
		personas: 0
	},
	slides: {
		fiesta_graduacion: [1, 2, 5, 6, 7, 11],
		fiesta_sub20: [1, 2, 5, 6, 11],
		fiesta_matrimonio: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
		fiesta_cumpleanos: [1, 2, 5, 6, 9, 11],
		fiesta_evento: [1, 2, 3, 4, 5, 6, 7, 11]
	},
	minimos: {
		fiesta_graduacion: 200000,
		fiesta_sub20: 200000,
		fiesta_matrimonio: 300000,
		fiesta_cumpleanos: 200000,
		fiesta_evento: 200000
	},
	historiaSlides: [1],
	items: [],
	mensaje_3: '',
	rangos: [],
	enviado: false,
	alerta: false,
	init: function(){
		presupuesto_1.init();
	},
	cambiarSlide: function(slide){
		var that = this,
		tipoFiesta = this.datosFiesta.tipoFiesta;
		if(tipoFiesta !== ''){
			var slideActual = this.slides[tipoFiesta][this.datosFiesta.slideActual];
			if(slide !== slideActual){
				if(typeof window['presupuesto_'+slideActual].exit === 'function'){
					window['presupuesto_'+slideActual].exit();
				}
				$('#presupuesto_' + slideActual).fadeOut('slow', function(){
					$('#presupuesto_' + slide).fadeIn('slow');
					that.initSlide(slide);
				});
			}
			this.datosFiesta.slideActual = $.inArray(slide, this.slides[tipoFiesta]);
			if($('#presupuesto_' + slide + ' div.presupuesto-navegacion').css('display') != 'none'){
				this.mostrarNavegacion();
			}
		}
	},
	initSlide: function(slide){
		window['presupuesto_'+slide].init();
	},
	mostrarNavegacion: function(){
		this.rangos = []; // Dejamos vacio los rangos para el siguiente slide
		var that = this,
		tipoFiesta = this.datosFiesta.tipoFiesta,
		slideActual = this.datosFiesta.slideActual,
		boton = '#presupuesto_' + this.slides[tipoFiesta][slideActual] + ' div.presupuesto-navegacion';
		// Volver a empezar
		$(boton+' .volver a').off('click').on('click', function(){
			presupuesto.modal('<p>Perderás todos los datos ingresados. ¿Estás seguro que deseas volver a empezar?.</p><button>Sí</button> <button>No</button>');
			$('#modal').find('button:eq(0)').one('click', function(){
				$.magnificPopup.close();
				that.cambiarSlide(1);
				that.reset();
				document.location.hash = '/presupuesto/' + 1;
			});
			$('#modal').find('button:eq(1)').one('click', function(){
				$.magnificPopup.close();
				presupuesto.mostrarNavegacion();
			});
		});
		// Siguiente
		$(boton+' button').off('click').one('click', function(e){
			e.preventDefault();
			document.location.hash = '/presupuesto/' + that.slides[tipoFiesta][slideActual+1];
		});
		boton = '#presupuesto_' + this.slides[tipoFiesta][slideActual] + ' div.anterior';
		// Anterior
		$(boton+' button').off('click').one('click', function(e){
			e.preventDefault();
			document.location.hash = '/presupuesto/' + that.slides[tipoFiesta][slideActual-1];
		});
		$('#presupuesto_' + this.slides[tipoFiesta][slideActual] + ' div.presupuesto-navegacion').fadeIn('slow');
	},
	ocultarNavegacion: function(presupuesto){
		presupuesto = typeof presupuesto !== 'undefined' ? presupuesto : false;
		if(!presupuesto){
			var tipoFiesta = this.datosFiesta.tipoFiesta,
			slideActual = this.datosFiesta.slideActual;
			$('#presupuesto_' + this.slides[tipoFiesta][slideActual] + ' div.presupuesto-navegacion').hide();
		} else {
			$('#presupuesto_' + presupuesto + ' div.presupuesto-navegacion').hide();
		}
	},
	encontrarRango: function(){
		var tipoFiesta = this.datosFiesta.tipoFiesta,
		slideActual = this.datosFiesta.slideActual,
		personas = this.datosFiesta.personas;
		if(this.rangos.length === 0){
			var that = this;
			$('#presupuesto_'+ this.slides[tipoFiesta][slideActual] +' .rango').each(function(){
				that.rangos.push($(this).attr('data-rango'));
			});
		}
		for (var i = 0; i < this.rangos.length; i++) {
			var rangos = this.rangos[i].split('-');
			if(personas >= parseInt(rangos[0], 10) && personas <= parseInt(rangos[1], 10)){
				return this.rangos[i];
			}
		}
		return false; // No encontró rango
	},
	agregarItem: function(rango, unico){
		unico = unico || false;
		var item = {},
		tipoFiesta = this.datosFiesta.tipoFiesta,
		slideActual = this.slides[tipoFiesta][this.datosFiesta.slideActual];
		item.cantidad = $('#presupuesto_' + slideActual +' .rango[data-rango="'+ rango +'"] span[data-cantidad]').html();
		item.item = $('#presupuesto_' + slideActual + ' .rango[data-rango="'+ rango +'"] span[data-item]').html();
		item.precio = $('#presupuesto_' + slideActual + ' .rango[data-rango="'+ rango +'"] span[data-precio]').html();
		if(this.items[slideActual] instanceof Array){
			if(unico) {
				this.items[slideActual][this.items[slideActual].length-1] = item;
			} else {
				this.items[slideActual].push(item);
			}
		} else {
			this.items[slideActual] = [item];
		}
	},
	modal: function(msg){
		$.magnificPopup.open({
				items: {
				src: '<div id="modal" class="modal">' + msg + '</div>',
				type: 'inline'
			},
			closeBtnInside: true
		});
	},
	reset: function(sinPresupuesto_2){
		sinPresupuesto_2 = sinPresupuesto_2 || false;
		presupuesto.items = [];
		presupuesto.historiaSlides = [];
		if(!sinPresupuesto_2){
			presupuesto_2.reset();
		}
		presupuesto_3.reset();
		presupuesto_4.reset();
		presupuesto_5.reset();
		presupuesto_6.reset();
		presupuesto_7.reset();
		presupuesto_8.reset();
		presupuesto_9.reset();
		presupuesto_10.reset();
	}
};

var presupuesto_1 = {
	init: function(){
		var that = this;
		this.removerSeleccionado();
		$('.tipo-fiesta').each(function(){
			$(this).off('click').one('click', function(e){
				e.preventDefault();
				$('.tipo-fiesta').each(function(){
					$(this).off('click');
				});
				var tipoFiesta = $(this).attr('id'),
				slideActual = presupuesto.datosFiesta.slideActual;
				presupuesto.datosFiesta.tipoFiesta = tipoFiesta;
				var evento = $('#' + presupuesto.datosFiesta.tipoFiesta + ' h3[data-evento]').html();
				$('.tipo-fiesta-seleccionada').text(evento);
				that.marcarSeleccionado(evento);
				that.alerta();
				document.location.hash = '/presupuesto/' + presupuesto.slides[tipoFiesta][slideActual+1];
				// Reseteamos todo por si empieza de nuevo todo el proceso
				presupuesto.reset();
			});
		});
	},
	marcarSeleccionado: function(evento){
		$('#principal').find('.itm-presupuestos ul > li').each(function(){
			if($(this).text() === evento){
				$(this).addClass('seleccionado');
			} else {
				$(this).removeClass('seleccionado');
			}
		});
	},
	removerSeleccionado: function(){
		$('#principal').find('.itm-presupuestos ul > li').removeClass('seleccionado');
	},
	alerta: function(){
		if(!presupuesto.alerta){
			presupuesto.modal('<p>Ten en consideración que este es un presupuesto referencial, los precios no son definitivos y se pueden ajustar en la medida que no afecten la calidad del evento.</p><button>Aceptar</button>');
			$('#modal').find('button:eq(0)').one('click', function(){
				$.magnificPopup.close();
				$('#cantidad-personas').focus();
			});
			$(window).unbind('keypress').bind('keypress', function(e){
				if(e.which == 13){
					$.magnificPopup.close();
					$('#cantidad-personas').focus();
				}
			});
			presupuesto.alerta = true;
		}
	}
};

var presupuesto_2 = {
	items: [],
	init: function(){
		var that = this,
		cantidadPersonas_ = 0;
		$('#cantidad-personas').focus();
		$('#boton_calcular').off('click').on('click', function(){
			var cantidadPersonas = $('#cantidad-personas').val();
			presupuesto.datosFiesta.personas = cantidadPersonas;
			if(cantidadPersonas != cantidadPersonas_){
				$('#presupuesto_2 .rango').slideUp();
				$('#presupuesto_2_resultado').slideUp();
				presupuesto.ocultarNavegacion();
				if(cantidadPersonas > 0 && cantidadPersonas <= 1000){
					var rango = presupuesto.encontrarRango(),
					parlantes = $('#presupuesto_2 .rango[data-rango="'+ rango +'"] span[data-item]').html();
					$('#presupuesto_2_resultado span[data-personas]').html(cantidadPersonas);
					$('#presupuesto_2_resultado span[data-item-resultado]').html(parlantes);
					$('#presupuesto_2_resultado').slideDown('slow');
					$('#presupuesto_2 .rango[data-rango="'+ rango +'"]').slideDown('slow');
					presupuesto.reset(true);
					presupuesto.mostrarNavegacion();
					presupuesto.agregarItem(rango, true);
				} else {
					if(cantidadPersonas === 0 && cantidadPersonas !== ''){
						presupuesto.modal('<p>Debes ingresar más de 1 invitado. No harás una fiesta solo, ¿o sí?.</p>');
					} else if(cantidadPersonas > 1000  && cantidadPersonas !== '') {
						presupuesto.modal('<p>Nuestro formulario de presupuestos está pensado en fiestas de hasta 1.000 personas. Si estás planeando realizar un evento con más de 1.000 invitados, puedes utilizar nuestro <a href="contacto">formulario de contacto</a> para poder entregarte un presupuesto más especializado.</p><button>Ir al formulario</button>');
						$('#modal').find('button:eq(0)').one('click', function(){
							document.location.href = 'contacto';
						});
					}
				}
			}
			cantidadPersonas_ = cantidadPersonas;
		});
		if(presupuesto.datosFiesta.tipoFiesta == 'fiesta_matrimonio'){
			$('#presupuesto_2_matrimonio').show();
		}
		//Evento enter
		$('#cantidad-personas').unbind('keypress').bind('keypress', function(e){
			if(e.which == 13){
				$('#boton_calcular').click();
			}
		});
	},
	reset: function(){
		$('#cantidad-personas').val('');
		$('#presupuesto_2_resultado').hide();
		$('#presupuesto_2 .rango').hide();
		presupuesto.ocultarNavegacion('2');
	}
};

var presupuesto_3 = {
	items: [],
	init: function(){
		var that = this;
		$('#presupuesto_3 [data-si]').off('click').on('click', function(){
			that.opcionSi(this);
			var _that = this;
			$('#presupuesto_3 [data-si]').each(function(){
				if(this !== _that){
					$(this).fadeTo('slow', 0.3);
				} else {
					$(this).fadeTo('slow', 1);
				}
			});
			$('#presupuesto_3 [data-no]').fadeTo('slow', 0.3);
			presupuesto.mensaje_3 = $.trim($(this).text());
		});
		$('#presupuesto_3 [data-no]').off('click').on('click', function(){
			that.opcionNo();
			var _that = this;
			$('#presupuesto_3 [data-no]').each(function(){
				if(this !== _that){
					$(this).fadeTo('slow', 0.3);
				} else {
					$(this).fadeTo('slow', 1);
				}
			});
			$('#presupuesto_3 [data-si]').fadeTo('slow', 0.3);
			presupuesto.mensaje_3 = $.trim($(this).text());
		});
	},
	opcionSi: function(){
		$('#presupuesto_3_opcion_no').slideUp();
		$('#presupuesto_3_opcion_si').slideDown();
		var rango = presupuesto.encontrarRango();
		$('#presupuesto_3 .rango[data-rango="'+ rango +'"]').slideDown();
		presupuesto.mostrarNavegacion();
		presupuesto.agregarItem(rango, true);
	},
	opcionNo: function(){
		$('#presupuesto_3_opcion_si').slideUp();
		$('#presupuesto_3 .rango').slideUp();
		$('#presupuesto_3_opcion_no').slideDown();
		presupuesto.mostrarNavegacion();
	},
	reset: function(){
		$('#presupuesto_3 [data-si]').css('opacity', 1).find('input').prop('checked', false);
		$('#presupuesto_3 [data-no]').css('opacity', 1).find('input').prop('checked', false);
		$('#presupuesto_3_opcion_no').hide();
		$('#presupuesto_3_opcion_si').hide();
		$('#presupuesto_3 .rango').hide();
		presupuesto.ocultarNavegacion('3');
	}
};

var presupuesto_4 = {
	init: function(){
		var that = this;
		$('#presupuesto_4 [data-si]').off('click').on('click', function(){
			that.opcionSi();
			$('#presupuesto_4 [data-si]').fadeTo('slow', 1);
			$('#presupuesto_4 [data-no]').fadeTo('slow', 0.3);
		});
		$('#presupuesto_4 [data-no]').off('click').on('click', function(){
			that.opcionNo();
			$('#presupuesto_4 [data-no]').fadeTo('slow', 1);
			$('#presupuesto_4 [data-si]').fadeTo('slow', 0.3);
		});
	},
	opcionSi: function(){
		$('#presupuesto_4_opcion_no').slideUp();
		$('#presupuesto_4_opcion_si').slideDown();
		var rango = presupuesto.encontrarRango();
		$('#presupuesto_4 .rango[data-rango="'+ rango +'"]').slideDown();
		presupuesto.mostrarNavegacion();
		presupuesto.agregarItem(rango, true);
	},
	opcionNo: function(){
		$('#presupuesto_4_opcion_si').slideUp();
		$('#presupuesto_4 .rango').slideUp();
		$('#presupuesto_4_opcion_no').slideDown();
		presupuesto.mostrarNavegacion();
	},
	reset: function(){
		$('#presupuesto_4 [data-si]').css('opacity', 1).find('input').prop('checked', false);
		$('#presupuesto_4 [data-no]').css('opacity', 1).find('input').prop('checked', false);
		$('#presupuesto_4_opcion_no').hide();
		$('#presupuesto_4_opcion_si').hide();
		$('#presupuesto_4 .rango').hide();
		presupuesto.ocultarNavegacion('4');
	}
};

var presupuesto_5 = {
	init: function(){
		var that = this;
		$('#presupuesto_5 [data-si]').off('click').on('click', function(){
			that.opcionSi();
			$('#presupuesto_5 [data-si]').fadeTo('slow', 1);
			$('#presupuesto_5 [data-no]').fadeTo('slow', 0.3);
		});
		$('#presupuesto_5 [data-no]').off('click').on('click', function(){
			that.opcionNo();
			$('#presupuesto_5 [data-no]').fadeTo('slow', 1);
			$('#presupuesto_5 [data-si]').fadeTo('slow', 0.3);
		});
	},
	opcionSi: function(){
		$('#presupuesto_5_opcion_no').slideUp();
		$('#presupuesto_5_opcion_si').slideDown();
		var rango = presupuesto.encontrarRango();
		$('#presupuesto_5 .rango[data-rango="'+ rango +'"]').slideDown();
		presupuesto.mostrarNavegacion();
		presupuesto.agregarItem(rango, true);
	},
	opcionNo: function(){
		$('#presupuesto_5_opcion_si').slideUp();
		$('#presupuesto_5 .rango').slideUp();
		$('#presupuesto_5_opcion_no').slideDown();
		presupuesto.mostrarNavegacion();
	},
	reset: function(){
		$('#presupuesto_5 [data-si]').css('opacity', 1).find('input').prop('checked', false);
		$('#presupuesto_5 [data-no]').css('opacity', 1).find('input').prop('checked', false);
		$('#presupuesto_5_opcion_no').hide();
		$('#presupuesto_5_opcion_si').hide();
		$('#presupuesto_5 .rango').hide();
		presupuesto.ocultarNavegacion('5');
	}
};

var presupuesto_6 = {
	init: function(){
		var that = this;
		$('#presupuesto_6 .grupo').each(function(){
			that.cargarDatos(this);
		});
		$('#presupuesto_6 .grupo-seleccionar').off('click').on('click', function(){
			that.seleccionar(this);
			that.agregarItem(this);
		});
		$('#presupuesto_6 a[data-siguiente]').off('click').on('click', function(){
			$('#presupuesto_6 div.siguiente').find('button').click();
		});
		presupuesto.mostrarNavegacion();
	},
	cargarDatos: function(grupo){
		var that = this,
		a = this.encontrarRangos(grupo),
		rango = presupuesto.encontrarRango(a),
		precio = $(grupo).find('.rango[data-rango="'+rango+'"] span[data-precio]').html(),
		equipos = $(grupo).find('.rango[data-rango="'+rango+'"] span[data-equipos]').html();
		$(grupo).find('[data-precio]').html(precio);
		$(grupo).find('[data-equipos]').html(equipos);
		this.cargarFondo($(grupo).find('figure'));
		$(grupo).find('figure').off('click').on('click', function(){
			that.cargarVideo(this);
		});
	},
	cargarVideo: function(figure){
		var idVideo = $(figure).data('video');
		$(figure).html('<iframe id="'+ idVideo +'" width="240" height="210" src="//www.youtube.com/embed/'+ idVideo +'?rel=0&controls=0&enablejsapi=1&origin=http://'+ document.domain +'" frameborder="0" allowfullscreen></iframe>');
		var player = new YT.Player(idVideo, {
			events: {
				'onReady': function(){
					player.playVideo();
					player.mute();
				}
			}
		});
	},
	cargarFondo: function(figure){
		var bg = $(figure).data('bg');
		$(figure).css('background', 'url(imgs/presupuestos/'+ bg +') no-repeat top center');
	},
	seleccionar: function(grupo){
		if($(grupo).hasClass('seleccionado')){
			$(grupo).removeClass('seleccionado');
			$(grupo).find('button').text('Seleccionar');
			$('#presupuesto_6 .grupo').fadeTo('slow', 1);
		} else {
			$(grupo).closest('.grupo').fadeTo('slow', 1);
			$('#presupuesto_6 .grupo-seleccionar').each(function(){
				if(grupo != this){
					$(this).closest('.grupo').fadeTo('slow', 0.3);
					$(this).removeClass('seleccionado');
					$(this).find('button').html('Seleccionar');
				} else {
					$(this).addClass('seleccionado');
					$(this).find('button').html('Seleccionado');
				}
			});
		}
	},
	encontrarRangos: function(grupo){
		presupuesto.rangos = [];
		$(grupo).find('.rango').each(function(){
			presupuesto.rangos.push($(this).attr('data-rango'));
		});
	},
	agregarItem: function(grupo){
		var cantidad = 1,
		item_ = $(grupo).siblings('p[data-equipos]').html(),
		valor = $(grupo).siblings('p[data-precio]').html(),
		item = {};
		item.cantidad = cantidad;
		item.item = item_;
		item.precio = valor;
		var tipoFiesta = presupuesto.datosFiesta.tipoFiesta,
		slideActual = presupuesto.slides[tipoFiesta][presupuesto.datosFiesta.slideActual];
		if(presupuesto.items[slideActual] instanceof Array){
			presupuesto.items.splice(6, 1);
		} else {
			presupuesto.items[slideActual] = [item];
		}
	},
	removerVideos: function(){
		$('#presupuesto_6').find('iframe').remove();
		$('#presupuesto_6').find('figure').html('&#9658;');
	},
	exit: function(){
		this.removerVideos();
	},
	reset: function(){
		$('#presupuesto_6 .grupo').css('opacity', 1);
		$('#presupuesto_6 .grupo-seleccionar').removeClass('seleccionado').html('<button>Seleccionar</button>');
		presupuesto.ocultarNavegacion('6');
	}
};

var presupuesto_7 = {
	init: function(){
		var that = this;
		$('#presupuesto_7 .grupo').each(function(){
			that.cargarDatos(this);
		});
		$('#presupuesto_7 .grupo-seleccionar').off('click').on('click', function(){
			that.seleccionar(this);
			that.agregarItem(this);
		});
		$('#presupuesto_7 a[data-siguiente]').off('click').on('click', function(){
			$('#presupuesto_7 div.siguiente').find('button').click();
		});
		presupuesto.mostrarNavegacion();
	},
	cargarDatos: function(grupo){
		var that = this,
		rango = presupuesto.encontrarRango(this.encontrarRangos(grupo)),
		precio = $(grupo).find('.rango[data-rango="'+rango+'"] span[data-precio]').html(),
		equipos = $(grupo).find('.rango[data-rango="'+rango+'"] span[data-equipos]').html();
		$(grupo).find('[data-precio]').html(precio);
		$(grupo).find('[data-equipos]').html(equipos);
		this.cargarFondo($(grupo).find('figure'));
		$(grupo).find('figure').off('click').on('click', function(){
			that.cargarVideo(this);
		});
	},
	cargarVideo: function(figure){
		if(!$(figure).hasClass('no-video')){
			var idVideo = $(figure).data('video');
			$(figure).html('<iframe id="'+ idVideo +'" width="240" height="210" src="//www.youtube.com/embed/'+ idVideo +'?rel=0&controls=0&enablejsapi=1&origin=http://'+ document.domain +'" frameborder="0" allowfullscreen></iframe>');
			var player = new YT.Player(idVideo, {
				events: {
					'onReady': function(){
						player.playVideo();
						player.mute();
					}
				}
			});
		}
	},
	cargarFondo: function(figure){
		var bg = $(figure).data('bg');
		$(figure).css('background', 'url(imgs/presupuestos/'+ bg +') no-repeat top center');
	},
	seleccionar: function(grupo){
		if($(grupo).hasClass('seleccionado')){
			$(grupo).removeClass('seleccionado');
			$(grupo).html('<button>Seleccionar</button>');
		} else {
			$(grupo).addClass('seleccionado');
			$(grupo).html('<button>Seleccionado</button>');
		}
	},
	encontrarRangos: function(grupo){
		presupuesto.rangos = [];
		$(grupo).find('.rango').each(function(){
			presupuesto.rangos.push($(this).attr('data-rango'));
		});
	},
	agregarItem: function(grupo){
		var desmarcado = $(grupo).hasClass('seleccionado'),
		cantidad = 1,
		item_ = $(grupo).siblings('p[data-equipos]').html(),
		valor = $(grupo).siblings('p[data-precio]').html(),
		item = {};
		item.cantidad = cantidad;
		item.item = item_;
		item.precio = valor;
		var tipoFiesta = presupuesto.datosFiesta.tipoFiesta,
		slideActual = presupuesto.slides[tipoFiesta][presupuesto.datosFiesta.slideActual],
		existe = false;
		if(presupuesto.items[slideActual] instanceof Array){
			for (var i = 0; i < presupuesto.items[slideActual].length; i++) {
				var _item = presupuesto.items[slideActual][i];
				if(_item.item === item.item && !desmarcado){ // Eliminar
					presupuesto.items[slideActual].splice(i, 1);
					existe = true;
					break;
				} else if(_item.item === item.item){
					existe = true;
					break;
				}
			}
			if(presupuesto.items[slideActual].length === 0){
				presupuesto.items.splice(7, 1);
			} else {
				if(!existe){
					presupuesto.items[slideActual].push(item);
				}
			}
		} else {
			presupuesto.items[slideActual] = [item];
		}
	},
	removerVideos: function(){
		$('#presupuesto_6').find('iframe').remove();
		$('#presupuesto_6').find('figure').html('&#9658;');
	},
	exit: function(){
		this.removerVideos();
	},
	reset: function(){
		$('#presupuesto_7 .grupo-seleccionar').removeClass('seleccionado').html('<button>Seleccionar</button>');
		presupuesto.ocultarNavegacion('7');
	}
};

var presupuesto_8 = {
	init: function(){
		var that = this;
		$('#presupuesto_8 [data-si]').off('click').on('click', function(){
			that.opcionSi();
			$('#presupuesto_8 [data-si]').fadeTo('slow', 1);
			$('#presupuesto_8 [data-no]').fadeTo('slow', 0.3);
		});
		$('#presupuesto_8 [data-no]').off('click').on('click', function(){
			that.opcionNo();
			$('#presupuesto_8 [data-no]').fadeTo('slow', 1);
			$('#presupuesto_8 [data-si]').fadeTo('slow', 0.3);
		});
	},
	opcionSi: function(){
		$('#presupuesto_8_opcion_no').slideUp();
		$('#presupuesto_8_opcion_si').slideDown();
		var rango = presupuesto.encontrarRango();
		$('#presupuesto_8 .rango[data-rango="'+ rango +'"]').slideDown();
		presupuesto.mostrarNavegacion();
		presupuesto.agregarItem(rango, true);
	},
	opcionNo: function(){
		$('#presupuesto_8_opcion_si').slideUp();
		$('#presupuesto_8 .rango').slideUp();
		$('#presupuesto_8_opcion_no').slideDown();
		presupuesto.mostrarNavegacion();
	},
	reset: function(){
		$('#presupuesto_8 [data-si]').css('opacity', 1).find('input').prop('checked', false);
		$('#presupuesto_8 [data-no]').css('opacity', 1).find('input').prop('checked', false);
		$('#presupuesto_8_opcion_no').hide();
		$('#presupuesto_8_opcion_si').hide();
		$('#presupuesto_8 .rango').hide();
		presupuesto.ocultarNavegacion('8');
	}
};

var presupuesto_9 = {
	init: function(){
		var that = this;
		$('#presupuesto_9 [data-si]').off('click').on('click', function(){
			that.opcionSi();
			$('#presupuesto_9 [data-si]').fadeTo('slow', 1);
			$('#presupuesto_9 [data-no]').fadeTo('slow', 0.3);
		});
		$('#presupuesto_9 [data-no]').off('click').on('click', function(){
			that.opcionNo();
			$('#presupuesto_9 [data-no]').fadeTo('slow', 1);
			$('#presupuesto_9 [data-si]').fadeTo('slow', 0.3);
		});
	},
	opcionSi: function(){
		var rango = presupuesto.encontrarRango();
		presupuesto.mostrarNavegacion();
		presupuesto.agregarItem(rango, true);
	},
	opcionNo: function(){
		presupuesto.mostrarNavegacion();
	},
	reset: function(){
		$('#presupuesto_9 [data-si]').css('opacity', 1).find('input').prop('checked', false);
		$('#presupuesto_9 [data-no]').css('opacity', 1).find('input').prop('checked', false);
		$('#presupuesto_9_opcion_no').hide();
		$('#presupuesto_9_opcion_si').hide();
		$('#presupuesto_9 .rango').hide();
		presupuesto.ocultarNavegacion('8');
	}
};

var presupuesto_10 = {
	init: function(){
		var that = this;
		$('#presupuesto_10 [data-si]').off('click').on('click', function(){
			that.opcionSi();
			$('#presupuesto_10 [data-si]').fadeTo('slow', 1);
			$('#presupuesto_10 [data-no]').fadeTo('slow', 0.3);
		});
		$('#presupuesto_10 [data-no]').off('click').on('click', function(){
			that.opcionNo();
			$('#presupuesto_10 [data-no]').fadeTo('slow', 1);
			$('#presupuesto_10 [data-si]').fadeTo('slow', 0.3);
		});
	},
	opcionSi: function(){
		var rango = presupuesto.encontrarRango();
		presupuesto.mostrarNavegacion();
		presupuesto.agregarItem(rango, true);
	},
	opcionNo: function(){
		presupuesto.mostrarNavegacion();
	},
	reset: function(){
		$('#presupuesto_10 [data-si]').css('opacity', 1).find('input').prop('checked', false);
		$('#presupuesto_10 [data-no]').css('opacity', 1).find('input').prop('checked', false);
		$('#presupuesto_10_opcion_no').hide();
		$('#presupuesto_10_opcion_si').hide();
		$('#presupuesto_10 .rango').hide();
		presupuesto.ocultarNavegacion('8');
	}
};

var presupuesto_11 = {
	init: function(){
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
		$('#presupuesto_11 span[data-volver]').off('click').on('click', function(){
			presupuesto.cambiarSlide(1);
		});
		var evento = $('#' + presupuesto.datosFiesta.tipoFiesta + ' h3[data-evento]').html();
		$('#presupuesto_11 span[data-evento]').html(evento);
		$('#presupuesto_11 span[data-personas]').html(presupuesto.datosFiesta.personas);
		var total = 0;
		$('#presupuesto_11 table tbody tr').remove();
		for (var i = 0; i < presupuesto.items.length; i++) {
			var items = presupuesto.items[i];
			if(items !== undefined){
				for (var j = 0; j < items.length; j++) {
					var item = items[j];
					var _item = $.trim(item.item[0]).toUpperCase() + item.item.slice(1);
					$('#presupuesto_11 table tbody').append('<tr><td class="centro">' + item.cantidad +'</td><td>' + _item +'</td><td class="derecha">' + item.precio + '</td></tr>');
					var precio = item.precio.replace('$', '');
					precio = parseInt(precio.replace('.', ''), 10);
					total = total + precio;
					$('#presupuesto_11 td[data-total]').html('$' + total.formatMoney(0));
				}
			}
		}
		this.montoMinimo(total);
		this.loadEvent();
	},
	montoMinimo: function(total){
		var minimo = presupuesto.minimos[presupuesto.datosFiesta.tipoFiesta];
		if(total < minimo){
			$('#presupuesto_11').find('.monto-minimo').show().find('[data-monto-minimo]').html(minimo.formatMoney(0));
		}
	},
	loadEvent: function(){
		$('#presupuesto_11').find('input[type="submit"]').one('click', function(){
			return presupuesto_final.email();
		});
	}
};

var presupuesto_final = {
	email: function(){
		var nombre = $.trim($('#form-nombre').val()),
		email = $.trim($('#form-email').val()),
		telefono = $.trim($('#form-telefono').val()),
		fecha = $.trim($('#form-fecha').val()),
		lugar = $.trim($('#form-lugar').val()),
		mensaje = $.trim($('#form-mensaje').val()),
		personas = $.trim($('#presupuesto_11 span[data-personas]').html()),
		evento = $.trim($('#presupuesto_11 span[data-evento]').html()),
		total = $('#presupuesto_11 td[data-total]').html(),
		emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
		mensaje_3 = presupuesto.mensaje_3,
		errores = [];
		if(nombre === ''){
			errores.push('Debes ingresar un nombre');
		}
		if(email === ''){
			errores.push('Debes ingresar un e-mail');
		} else {
			if(!emailRegex.test(email)){
				errores.push('El e-mail ingresado es inválido');
			}
		}
		if(errores.length > 0){
			var errorMsg = '<ul>';
			for (var i = 0; i < errores.length; i++) {
				errorMsg = errorMsg + '<li>' + errores[i] + '</li>';
			}
			errorMsg = errorMsg + '</ul><button>Aceptar</button>';
			presupuesto.modal(errorMsg);
			$('#modal').find('button:eq(0)').one('click', function(){
				$.magnificPopup.close();
			});
			presupuesto_11.loadEvent();
		} else {
			$('#presupuesto_11 form').css('opacity', 0.5);
			$('#presupuesto_11 input[type="submit"]').val('Enviando...').css('opacity', 1);
			$('#presupuesto_11 input').attr('disabled', 'disabled');
			$('#presupuesto_11 div.anterior button').off('click').on('click', function(){
				return false;
			});
			var _items = '';
			for (var i = 0; i < presupuesto.items.length; i++) {
				var items = presupuesto.items[i];
				if(items !== undefined){
					for (var j = 0; j < items.length; j++) {
						var item = items[j];
						var _item = $.trim(item.item[0]).toUpperCase() + item.item.slice(1);
						_items = _items + '/' + item.cantidad + '::' + _item + '::' + item.precio;
					}
				}
			}
			_items = _items.substring(1);
			presupuesto.enviado = true;
			$.post('presupuestos.php', {nombre: nombre,
										email: email,
										telefono: telefono,
										fecha: fecha,
										lugar: lugar,
										mensaje: mensaje,
										evento: evento,
										personas: personas,
										total: total,
										items: _items,
										mensaje_3: mensaje_3}, function(data){
				if(data == 1){
					$('#presupuesto_11').fadeOut(function(){
						$('#presupuesto_enviado').fadeIn();
					});
				} else {
					presupuesto.enviado = false;
					presupuesto.modal('<p>¡UPS!. No pudimos enviar el formulario, por favor inténtalo nuevamente. Si el error persiste, toma contacto con nosotros a <a href="mailtto: contacto@jzmusic.cl">contacto@jzmusic.cl</a>.</p> <button>Aceptar</button>');
					$('#modal').find('button:eq(0)').one('click', function(){
						$.magnificPopup.close();
					});
					$('#presupuesto_11 form').css('opacity', 1);
					$('#presupuesto_11 input[type="submit"]').val('Enviar');
					$('#presupuesto_11 input').removeAttr('disabled');
					$('#presupuesto_11 div.anterior button').off('click').one('click', function(e){
						e.preventDefault();
						document.location.hash = '/presupuesto/' + that.slides[tipoFiesta][slideActual-1];
					});
					presupuesto_11.loadEvent();
				}
			});
		}
		return false;
	}
};

Path.root("#/presupuesto/1");
Path.map("#/presupuesto/:slide").to(function(){
	if(!presupuesto.enviado){
		var slide = parseInt(this.params['slide'], 10);
		if(!isNaN(slide) && slide > 0 && slide < 12){
			var slideActual = presupuesto.datosFiesta.slideActual,
			tipoFiesta = presupuesto.datosFiesta.tipoFiesta;
			// Que no sea el slide principal y que ya haya definido un tipo de evento
			// en el caso de que acceda a la URL con un slide superior a 1 directamente
			if(slide > 1 && tipoFiesta !== '') {
				// Revisamos que el slide pertenezca al tipo de fiesta
				if($.inArray(slide, presupuesto.slides[tipoFiesta]) > -1){
					//Revisamos si existe en la historia, si existe lo mostramos
					if($.inArray(slide, presupuesto.historiaSlides) > -1){
						presupuesto.cambiarSlide(slide);
					} else {
						//Si no existe, revisamos que sea el siguiente slide correspondiente
						//de modo que no se salte entre slides que no ha visto
						var siguienteSlide = presupuesto.slides[tipoFiesta][slideActual+1];
						if(siguienteSlide == slide){
							presupuesto.cambiarSlide(slide);
							//Lo agregamos a la historia
							presupuesto.historiaSlides.push(slide);
						} else {
							//Mostramos el ultimo slide visto
							document.location.hash = '/presupuesto/' + presupuesto.slides[tipoFiesta][slideActual];
						}
					}
				} else {
					//Mostramos el ultimo slide visto
					document.location.hash = '/presupuesto/' + presupuesto.slides[tipoFiesta][slideActual];
				}
			} else {
				presupuesto.cambiarSlide(1);
				document.location.hash = '/presupuesto/1';
			}
		} else { // Slide no existe
			document.location.hash = '/presupuesto/1';
		}
	}
});

function onPlayerReady(event) {
	alert(1);
	event.target.playVideo();
}

$(function() {
	var tag = document.createElement('script');
	tag.src = "https://www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	presupuesto.init();
	Path.listen();
});
