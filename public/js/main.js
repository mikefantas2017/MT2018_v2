/**
 * Mon Tool v2.
 * Marzo, 2018.
 * Funciones para la vista "index".
 */

 $(function(){
     $('.panel-info').hover(function(){
         $(this).css('cursor', 'pointer');
         $(this).toggleClass('panel-info panel-primary');
     });
 });