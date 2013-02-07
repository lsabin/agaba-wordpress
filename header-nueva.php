<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class=" ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if (gt IE 7)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?> <?php if ( !wp_title('', true, 'left') ); { ?> | <?php bloginfo('description'); ?> <?php } ?></title>
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/reset.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/text.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/960.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/slide.css" />


	<link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin' rel='stylesheet' type='text/css'>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

    
    <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis:400,200' rel='stylesheet' type='text/css'>    
    <style>
      .numero {
        font-family: 'Lobster', serif;
        font-size: 64px;
        color:#C93C3E;
      }
      
      .blanco {
          color:#fff;
      }
      
    </style>


    <style>
      .numero {
        font-family: 'Lobster', serif;
        font-size: 64px;
        color:#C93C3E;
      }
      
      .blanco {
          color:#fff;
      }
      .negro {
          color:#222;
      }
      .medio {
          font-size:36px;
      }
      #contenido p {
        font-family: 'Terminal Dosis', sans-serif;
      }
      
    </style>


<?php
    wp_head();
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
  ?>
</head>

<body <?php body_class(); ?> >

<div id="wrapper">  


    <div id="header" class="clearfix">
    
      <div class="container_16">

        <div class="grid_5">
          <div id="logo">
            <a href="index.html">
            <span class="numero"><span class="blanco">Gastro</span>nomia</span>
            </a>
          </div>
        </div>  
        
        <div class="grid_5">        
            <div id="logo" style="margin-top:46px;margin-left:-15px;float:left;"></div>
        </div>
        
        <div class="grid_6">
            <div id="navegacion" style="float: right; margin-top:100px">
                <ul id="nav">
                    <li><a href="index.html">Actividades</a></li>
                     <li><a href="http://gastrosexologia.com">Artículos</a></li>
                </ul>
            </div>  
        </div>
        
      </div>
      

      
    </div>



    <div id="main" class="clearfix">
	<div class="container_16">