<!doctype html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class=" ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if (gt IE 7)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?> <?php if ( !wp_title('', true, 'left') ); { ?> | <?php bloginfo('description'); ?> <?php } ?></title>
    

    <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic|Lobster+Two:400italic,700italic' 
      rel='stylesheet' type='text/css'>    
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/style-black.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/js-image-slider.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/superfish.css" />


<!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->

</head>
<body>






  <div id="header" class="clearfix">
    <div class="container">
    <div class="row">
        <div class="span12 navbar">

          <div class="row">
              <div class="span3">
                  <a href="<?php echo home_url( '/' ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"/></a>
              </div>
              <div id="ddmenu" class="span9 menu">
                <ul class="sf-menu" id="menu-nav">
                    <li class=""><a href="/">AGABA</a>
                          <ul>
                            <li><a href="<?php echo home_url( '/' ); ?>quienes-somos">Quienes somos</a></li>
                            <li><a href="<?php echo home_url( '/' ); ?>como-asociarse">Como asociarse</a></li>
                            <li><a href="<?php echo home_url( '/' ); ?>junta-directiva">Junta directiva</a></li>
                          </ul>
                    </li>

                    <li class=""><a href="">COCTELES</a>
                      <ul>
                        <li><a href="<?php echo home_url( '/' ); ?>category/coctel">Recetas tradicionales</a></li>
                        <li><a href="<?php echo home_url( '/' ); ?>category/orujo">Recetas con orujo</a></li>
                      </ul>

                    <li class=""><a href="#">NOTICIAS</a></li>
                    <li class=""><a href="#">CURSOS</a></li>
                    <li class=""><a href="<?php echo home_url( '/' ); ?>contacto">CONTACTO</a></li>
                </ul>
            </div>
          </div>

    
      </div>

    </div>
    </div>

  </div> <!-- fin header -->

  <div class="container">