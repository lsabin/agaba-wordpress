jQuery(function() {




  jQuery('#pinterest').sharrre({
      share: { pinterest: true },
      enableHover: false,
      enableCounter: true, 
      enableTracking: true,
        template: "<a class='box' href='#''><div class='share'><span></span><img src='../../imagenes/pinterest-black.png' /></div><div class='count' href='#''>{total}</div></a>",
      click: function(api, options){
      api.simulateClick();
      api.openPopup('pinterest');
    }
    });

jQuery('#twitter').sharrre({
      share: { twitter: true },
      enableHover: false,
      enableCounter: true, 
      enableTracking: true,
      template: '<a class="box" href="#"><div class="share"><span></span><img src="../../imagenes/twitter-pajarito.png" /></div><div class="count" href="#">{total}</div></a>',
      //buttons: { twitter: {via: 'paulund_'}},
      click: function(api, options){
      api.simulateClick();
      api.openPopup('twitter');
    }
    });

    jQuery('#facebook').sharrre({
      share: { facebook: true },
      enableHover: false,
      enableTracking: true,
      template: '<a class="box" href="#"><div class="share"><span></span><img src="../../imagenes/facebook-black.png" /></div><div class="count" href="#">{total}</div></a>',
      click: function(api, options){
      api.simulateClick();
      api.openPopup('facebook');
    }
    });


        });