jQuery(function(){
    jQuery('a.foto-fancy').fancybox();


    jQuery("a.bebida").fancybox({
    'autoScale'         : false,
    'transitionIn'      : 'none',
    'transitionOut'     : 'none',
    'type'              : 'iframe',
    'width'             : '70%',
    'height'            : '70%',
    'fitToView'         : false, 
    });    

});
