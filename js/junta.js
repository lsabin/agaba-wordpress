jQuery(function(){
    jQuery('.foto-redonda').mouseenter(function() {
        jQuery(this).stop().animate({opacity:.99},200,'linear');
        jQuery('.texto-foto', this).stop().animate({opacity:.99},200,'linear');
    }).mouseleave(function() {
        jQuery(this).stop().animate({opacity:1},700,'linear');
        jQuery('.texto-foto', this).stop().animate({opacity:0},700,'linear');
    });
});
