jQuery(function(){

  var galleries = jQuery('.ad-gallery').adGallery();


  jQuery(".ad-gallery").on("click", ".ad-image", function() {
    jQuery.fancybox.open({
      href : jQuery(this).find("img").attr("src"),
      closeBtn: true,
      closeClick : true,
      openEffect : 'elastic',
      openSpeed  : 150,
      closeEffect : 'elastic',
      closeSpeed  : 150,
      helpers : {
        overlay : null
      }
    });
  });

});  