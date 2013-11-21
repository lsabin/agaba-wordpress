<?php

    get_header('agaba');

    $args = array_merge( $wp_query->query_vars, 
      array(
        'posts_per_page' => 20, 
        'paged' => $paged, 
        'post_type' => 'coctel', 
        'orderby' => 'name', 
        'order' => 'ASC' ) 
      );


    /*$args =  array( 'posts_per_page' => 20, 
      'paged' => $paged,
      'post_type' => 'coctel',
      'orderby' => 'name', 
      'category_name' => 'orujo',
      'order' => 'ASC', 
      ); */

    $wp_query = new WP_Query($args);
 

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
    wp_paginate(array(title => ''));
} ?>


<!--<?php get_search_form( 'true' ); ?>-->

<div class="row">
    <div class="span12 form-busqueda">
      <form class="form-inline" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
       <!-- <label class="screen-reader-text" for="appendedInputButton">Busca en nuestras recetas de cócteles</label> -->

      <div class="input-append">
        <input class="span6" id="appendedInputButton" name="s" type="text">
        <button class="btn btn-infro" type="submit">Busca</button>
      </div>

              <!--<input type="submit" id="searchsubmit" value="Busca" />-->
      </form>

   </div>
</div>

<div class="row">
    <div class="span12 caja tag-cloud">

        <?php
        $args = array( "title" => " " , 'post_type' => 'coctel',
          'color' => 'span',
          'color_span_from' => '#862d49',
          'color_span_to' => '#8e392f',
          'hover_underline' => 'no',
          'order' => 'random',
          'size_from' => '18px',
          'size_to' => '32px',
          'max' => '60'
           );

        do_utcw( $args );
        ?>

    </div>
  
</div>


<?php
  get_footer();
?>