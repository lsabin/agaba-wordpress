<?php

    get_header('agaba');

    $args =  array( 'posts_per_page' => 50, 
      'paged' => $paged,
      'post_type' => 'coctel',
      'orderby' => 'name', 
      'order' => 'ASC'); 

    $final_args = array_merge($wp_query->query_vars, $args);

    $wp_query = new WP_Query($final_args);  



    /*$args = array_merge( $wp_query->query_vars, 
            array( 'post_type' => 'coctel', 'orderby' => 'name', 'order' => 'ASC', 'posts_per_page' => 20 ) );
    $my_query = new WP_Query($args);*/
 

?>	
	

<div class="row">
    <div class="span12">

      <div class="row">


<?php 

while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<?php
$image_attributes = "w=150&h=100&zc=c&q=90"; // 250x150px, crop to center, quality 90
?>

<a href="<?php the_permalink() ?>" rel="bookmark">
        <div class="span3 caja">


 <?php if ( in_category('19') ) { ?>
           <div class="ribbon-wrapper-green"><div class="ribbon-green">ORUJO</div></div>
 <?php } elseif (in_category('6') && !in_category('19')) { ?>
           <div class="ribbon-wrapper-green"><div class="ribbon-blue">CLÁSICO</div></div>
 <?php } ?>


          <div class="crop">
            <?php if (get('imagen')) { ?>
            <img src="<?php echo get('imagen'); ?>" />
            <?php } else { ?>
              <img src="<?php bloginfo( 'template_url' ); ?>/images/icono-cocktail.jpg" />
            <?php } ?>
          </div>
          <h3><?php the_title(); ?></h3>
        </div>
</a>        


<?php endwhile; ?>


</div></div></div>


<?php if(function_exists('wp_paginate')) {
    wp_paginate();
} ?>



<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s">Busca por:</label>
        <input type="text" value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Busca" />
    </div>
</form>


<?php
$args = array( "title" => "Etiquetas de cócteles" , 'post_type' => 'coctel',
  'color' => 'span',
  'color_span_from' => '#862d49',
  'color_span_to' => '#8e392f',
  'hover_underline' => 'no',
  'order' => 'random' 
   );

do_utcw( $args );
?>

<?php
  get_footer();
?>