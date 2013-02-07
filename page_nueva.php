<?php
/*
Template Name: Page nueva
*/
  get_header('nueva');


  add_action('loop_start','remove_wpautop_content_filter'); /* para borrar los p */



  if (have_posts()) : while (have_posts()) : the_post();
  ?>


  <div id="contenido" class="clearfix" >

    <?php the_content(__('(more...)')); ?>

  </div>

  <?php
  

  endwhile; else: ?>

    <p>Sorry, no pages matched your criteria.</p>

<?php
  endif;

  get_footer('nuevo');
?>