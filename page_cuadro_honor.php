<?php
/*
Template Name: Pagina cuadro honor
*/
  get_header('agaba');


  add_action('loop_start','remove_wpautop_content_filter'); /* para borrar los p */



  if (have_posts()) : while (have_posts()) : the_post();
  ?>




  <div id="contenido" class="clearfix" style="margin-top:20px">

    <?php the_content(__('(more...)')); ?>

  </div>




  

  <?php
  

  endwhile; else: ?>

    <p>Sorry, no pages matched your criteria.</p>

<?php
  endif;

  add_script_fancybox();
  add_script_fancybox_start();

  get_footer();
?>