jQuery(function(){
    jQuery('a.foto-fancy').fancybox();


    jQuery("a.bebida").fancybox({
    'width'             : '75%',
    'height'            : '75%',
    'autoScale'         : false,
    'transitionIn'      : 'none',
    'transitionOut'     : 'none',
    'type'              : 'iframe'
    });    

});
