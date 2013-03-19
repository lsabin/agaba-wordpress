<?php
/*
Template Name: Page inicial agaba
*/
  get_header('agaba');


  add_action('loop_start','remove_wpautop_content_filter'); /* para borrar los p */



  if (have_posts()) : while (have_posts()) : the_post();
  ?>


<!-- va a contenido 
<div class="row">
    <div class="span12">
        <div id="slider">
            <img src="img/barra.jpg"/>
            <img src="img/cocktail_glasses_940.jpg" alt="Algun tipo de texto"/>
        </div>            
    </div>
</div>
-->





  <div id="contenido" class="clearfix" style="margin-top:20px">

    <?php the_content(__('(more...)')); ?>

  </div>



<div class="row">

  <div class="span4 seccion">
    <h2>COCTELES</h2>



<?php

    $args = array( 'post_type' => 'coctel' , 'orderby' => 'rand', 'posts_per_page' => '1');
    $my_query = new WP_Query($args);
 

?>  
  

<?php 

while ($my_query->have_posts()) : $my_query->the_post(); ?>

<?php
$image_attributes = "w=150&h=100&zc=c&q=90"; // 250x150px, crop to center, quality 90
?>

<a href="<?php the_permalink() ?>" rel="bookmark">
        <div class="span3 caja caja-coctel-aleatorio">
          <div class="crop"><img src="<?php echo get('imagen'); ?>" /></div>
          <h3><?php the_title(); ?></h3>
        </div>

        <div class="span3 caja tag-cloud">


            <?php
            $args = array( "title" => " " , 'post_type' => 'coctel',
              'color' => 'span',
              'color_span_from' => '#862d49',
              'color_span_to' => '#8e392f',
              'hover_underline' => 'no',
              'order' => 'random' 
               );

            do_utcw( $args );
            ?>

        </div>
</a>        


<?php endwhile; ?>





    
  </div>   <!-- fin seccion coctel --> 


  <div class="span4 seccion">
    <h2>NOTICIAS</h2>
    <p>bla bla bla</p>
    <p>bla bla bla</p>
    <p>bla bla bla</p>
    <p>bla bla bla</p>

  </div>  


  <div class="span4 seccion">
    <h2>CURSOS</h2>
    <p><b>15/12/2013</b> Curso básico en Parador de Santiago</p>
    <p><b>15/12/2013</b> Curso avanzado en Parador de Santiago</p>
    
  </div>  


 

</div>

  

  <?php
  

  endwhile; else: ?>

    <p>Sorry, no pages matched your criteria.</p>

<?php
  endif;

  get_footer();
?>