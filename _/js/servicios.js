(function () {
	"use strict";

	var servicios = {
		init: function(){
			var that = this;
			$('.servicio-item').each(function(){
				$(this).click(function(e){
					e.stopPropagation();
					if($(this).find('.servicio-desc').attr('id') != 'item-active'){
						that.servicio(this);
					}
				});
			});
			$(window).on('click', function(e){
				that.esconder();
			});
		},
		servicio: function(servicio){
			this.esconder();
			var that = this,
			item = $(servicio).find('.servicio-desc'),
			video = $(servicio).data('video'),
			pageScrollW = $('body').prop('scrollWidth'),
			pageScrollH = $('body').prop('scrollHeight'),
			goTop = false;
			if(video !== undefined){
				var videoDiv = $(item).find('.servicio-video');
				if(videoDiv.length){
					$(videoDiv).html('<p>Cargando video...</p>');
				}
			}
			var itemHeight = $(item).outerHeight(),
			itemWidth = $(item).outerWidth(),
			servicioScroll = $(servicio).offset().top + $(servicio).outerHeight();
			// Verifico si es necesario que la caja flote hacia arriba
			// para no provocar mas scroll vertical del existente
			if((servicioScroll + itemHeight)  > pageScrollH){
				goTop = true;
				$(item).css('top', (- $(item).outerHeight() - 20) + 'px');
			}
			if(goTop){
				if(!$(item).hasClass('servicio-arrow-down')){
					$(item).addClass('servicio-arrow-down');
				}
			} else {
				if(!$(item).hasClass('servicio-arrow-up')){
					$(item).addClass('servicio-arrow-up');
				}
			}
			// Evito que se provoque scroll lateral, y corro la caja mas a la izquierda
			if(($(servicio).outerWidth() + $(servicio).width()/2 + $(servicio).offset().left) > pageScrollW){
				$(item).addClass('servicio-desc-abierto-borde servicio-arrow-pull-right');
			}
			$(item).addClass('servicio-desc-abierto').attr('id', 'item-active').fadeIn(function(){
				var goTopElement;
				if(goTop){
					goTopElement = item;
				} else {
					goTopElement = servicio;
				}
				$('html, body').animate({ scrollTop: $(goTopElement).offset().top - 50 }, 500, function(){
					if(video !== undefined && videoDiv.length){
						$(videoDiv).html(that.video(video));
						var done = false;
						var player = new YT.Player(video, {
							events: {
								'onStateChange': function(event){
									if (event.data == YT.PlayerState.PLAYING && !done) {
										player.mute();
										done = true;
									}
								}
							}
						});
					}
				});
			}).on('click', function(e){
				e.stopPropagation();
			}).parent().addClass('servicio-item-abierto');
			// Boton cerrar
			$(item).find('.close').one('click', function(){
				that.esconder();
			});
		},
		esconder: function(){
			var item = $('#item-active');
			if($(item).length){
				$(item).find('.servicio-video').html('');
				$(item).slideUp('slow', function(){
					$(item).removeClass('servicio-desc-abierto');
					$(item).removeClass('servicio-arrow-down');
					$(item).removeClass('servicio-arrow-up');
					$(item).removeClass('servicio-arrow-pull-right');
					$(item).removeClass('servicio-desc-abierto-borde');
				}).parent().removeClass('servicio-item-abierto');
				$(item).removeAttr('id');
			}
		},
		video: function(video){
			return '<iframe id="'+ video +'" width="300" height="200" src="http://www.youtube.com/embed/' + video + '?rel=0&controls=0&enablejsapi=1&origin=http://'+ document.domain +'" frameborder="0" allowfullscreen></iframe>';
		}
	};

	var goTop = {
		init: function(){
			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					$('#go-top').addClass('active');
				} else {
					$('#go-top').removeClass('active');
				}
			});
			$('#go-top').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
		}
	};

	var subCategoria = {
		init: function(){
			$('.sub-categoria li').each(function(){
				var catId = $(this).data('section');
				$(this).click(function(){
					$('body,html').animate({ scrollTop: $('#'+catId).offset().top }, 800);
				});
			});
		}
	};

	$(function(){
		var tag = document.createElement('script');
		tag.src = "https://www.youtube.com/iframe_api";
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
		servicios.init();
		goTop.init();
		subCategoria.init();
	});

}());
