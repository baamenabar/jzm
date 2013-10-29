(function($){$.fn.swipe=function(options){var defaults={threshold:{x:50,y:10},swipeLeft:function(){alert('swiped left')},swipeRight:function(){alert('swiped right')}};var options=$.extend(defaults,options);if(!this)return false;return this.each(function(){var me=$(this)
var originalCoord={x:0,y:0}
var finalCoord={x:0,y:0}
function touchStart(event){originalCoord.x=event.targetTouches[0].pageX
originalCoord.y=event.targetTouches[0].pageY}
function touchMove(event){event.preventDefault();finalCoord.x=event.targetTouches[0].pageX
finalCoord.y=event.targetTouches[0].pageY}
function touchEnd(event){var changeY=originalCoord.y- finalCoord.y
if(changeY<defaults.threshold.y&&changeY>(defaults.threshold.y*-1)){changeX=originalCoord.x- finalCoord.x
if(changeX>defaults.threshold.x){defaults.swipeLeft()}
if(changeX<(defaults.threshold.x*-1)){defaults.swipeRight()}}}
function touchStart(event){originalCoord.x=event.targetTouches[0].pageX
originalCoord.y=event.targetTouches[0].pageY
finalCoord.x=originalCoord.x
finalCoord.y=originalCoord.y}
function touchCancel(event){}
this.addEventListener("touchstart",touchStart,false);this.addEventListener("touchmove",touchMove,false);this.addEventListener("touchend",touchEnd,false);this.addEventListener("touchcancel",touchCancel,false);});};})(jQuery);
/* Author: Agustin Amenabar

*/
/*Primero declaramos variables generales
  First we declare general variables//*/
var tos;

/*Segundo ejecutamos acciones a penas el DOM esté listo
  Second we ejecute acions on DOM ready */
$(document).ready(function(){
	$('#abreYcierra').click(function(eve){
		eve.preventDefault();
		$cuerpo = $('body');
		if($cuerpo.hasClass('navAbierto')){
            if($cuerpo.hasClass('articulo')){
                if ($cuerpo.hasClass('subNavAbierto')) {
                    if($cuerpo.hasClass('allNavAbierto')){
                        $cuerpo.removeClass('navAbierto');
                        $cuerpo.removeClass('subNavAbierto');
                        $cuerpo.removeClass('allNavAbierto');
                    }else{
                        $cuerpo.addClass('allNavAbierto');
                    }
                }else{
                    $cuerpo.addClass('subNavAbierto');
                }
            }else{
                $cuerpo.removeClass('navAbierto');
            }
		}else{
			$cuerpo.addClass('navAbierto');
            if($cuerpo.hasClass('articulo'))$cuerpo.addClass('subNavAbierto');
		}
	});
    $('.evenMoreShameful').mouseover(abreShame).mouseout(preCierraShame);
   /* $('body').swipe({
        swipeLeft: function() { cierraShame(); },
        swipeRight: function() { abreShame(); }
    });*/
    if(!window.matchMedia("(min-width: 640px)").matches)$('body').removeClass('navAbierto');
});
$(function() {
                $('#carousel').carouFredSel({
                    width: $(window).width(),
                    height: $(window).height(),
                    align: false,
                    items: {
                        visible: 1,
                        width: 'variable',
                        height: 'variable'
                    },
                    scroll: {
                        fx: "crossfade",
                        duration: 1000
                    },
                    auto: 8000,
                    prev: "left",
                    next: "right"
                });

                $(window).resize(function() {
                    var newCss = {
                        width: $(window).width()//,
                        //height: $(window).height()
                    };
                    $('#carousel').css( 'width', newCss.width);
                    $('#carousel').parent().css( newCss );
                    $('#carousel div').css( newCss );
                }).resize();
            });

/* Tercero: ejecutamos acciones no-escenciales y llamados a contenido externo adicional (como publicidad)
   Third: we execute the non-escential actions and extra content calls (like adds)*/
$(window).load(function(){

});

function abreShame(){
    if(!window.matchMedia("(min-width: 960px)").matches)return;
    $cuerpo = $('body');
    if($cuerpo.hasClass('articulo')){
        $cuerpo.addClass('subNavAbierto');
        $cuerpo.addClass('allNavAbierto');
    }
}
function preCierraShame(){
    if(!window.matchMedia("(min-width: 960px)").matches)return;
    clearTimeout(tos);
    tos = setTimeout(function() {
       cierraShame();
    }, 5000);
}
function cierraShame(){
    $cuerpo = $('body');
    if($cuerpo.hasClass('articulo')){
        //$cuerpo.addClass('subNavAbierto');
        $cuerpo.removeClass('allNavAbierto');
    }
}
