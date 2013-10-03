<?php

    get_header('agaba');


    $args =  array( 'posts_per_page' => 20, 
      'paged' => $paged,
      'post_type' => 'bebida',
      'orderby' => 'name', 
      'order' => 'ASC'
      ); 


    $my_query = new WP_Query($args);

   

?>	
	


<?php if (function_exists('wp_snap')) { echo wp_snap(); } ?>



<div class="row">
    <div class="span12">

      <div class="row">


<?php 

while ($my_query->have_posts()) : $my_query->the_post(); ?>





        <div class="span3">
          <h3><?php the_title(); ?></h3>
        </div>

        <div class="span8">
          <?php the_content(); ?>
        </div>


<?php endwhile; ?>


</div></div></div>



<?php



  get_footer();
?>