jQuery(function() {
    jQuery("#menu-nav").supersubs({
        minWidth:    12,   // minimum width of sub-menus in em units
        maxWidth:    27,   // maximum width of sub-menus in em units
        extraWidth:  1   
    }).superfish();


    jQuery('.contooltip').tooltip({placement:'bottom'});

});            
