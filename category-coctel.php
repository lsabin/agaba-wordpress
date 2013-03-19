<?php

    get_header('agaba');

    $args = array_merge( $wp_query->query_vars, 
      array( 'post_type' => 'coctel', 'orderby' => 'name', 'order' => 'ASC', 'category__not_in' => array(19) ) );
    $my_query = new WP_Query($args);
 

?>	
	

<div class="row">
    <div class="span12">

      <div class="row">


<?php 

while ($my_query->have_posts()) : $my_query->the_post(); ?>

<?php
$image_attributes = "w=150&h=100&zc=c&q=90"; // 250x150px, crop to center, quality 90
?>

<a href="<?php the_permalink() ?>" rel="bookmark">
        <div class="span3 caja">
          <div class="crop"><img src="<?php echo get('imagen'); ?>" /></div>
          <h3><?php the_title(); ?></h3>
        </div>
</a>        


<?php endwhile; ?>


</div></div></div>


<!--<?php get_search_form( 'true' ); ?>-->


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