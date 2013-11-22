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

  <div class="span8 seccion">
    <h2>COCTELES</h2>
  </div>

  <div class="span4 seccion">
    <h2>NOTICIAS</h2>
  </div>

</div>





<?php

    $args = array( 
      'post_type' => 'coctel' ,
       'orderby' => 'rand', 
       'posts_per_page' => '1', 
       'category__not_in' => array(19,104) );
    $my_query = new WP_Query($args);
 

?>  
  

<?php 

while ($my_query->have_posts()) : $my_query->the_post(); ?>

<div class="row">


<?php
$image_attributes = "w=150&h=100&zc=c&q=90"; // 250x150px, crop to center, quality 90
?>


        <div class="span3 caja caja-coctel-aleatorio">
          <a href="<?php the_permalink() ?>" rel="bookmark">          
            <div class="crop">
                <?php if (get('imagen')) { ?>
                  <img src="<?php echo get('imagen'); ?>" />
                <?php } else { ?>
                  <img src="<?php bloginfo( 'template_url' ); ?>/images/icono-cocktail.jpg" />
                <?php } ?>
            </div>
            <h3><?php the_title(); ?></h3>
          </a>
        </div>

        <div class="span5">
          <div class="row">
            <div class="span5 caja tag-cloud">


                <?php
                $args = array( "title" => " " , 'post_type' => 'coctel',
                  'color' => 'span',
                  'color_span_from' => '#862d49',
                  'color_span_to' => '#8e392f',
                  'hover_underline' => 'no',
                  'order' => 'random',
                  'size_from' => '18px',
                  'size_to' => '32px' 
                   );

                do_utcw( $args );
                ?>

            </div>

          </div>

          <div class="row">
            <div class="span5 form-busqueda">
              <form class="form-inline" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
               <!-- <label class="screen-reader-text" for="appendedInputButton">Busca en nuestras recetas de cócteles</label> -->

              <div class="input-append">
                <input class="span4" id="appendedInputButton" name="s" type="text">
                <button class="btn btn-infro" type="submit">Busca</button>
              </div>

                      <!--<input type="submit" id="searchsubmit" value="Busca" />-->
              </form>

           </div>
            
          </div>

        </div>




<?php endwhile; ?>

  <!-- noticias -->
  <div class="span4 seccion-noticias">
<?php

    $args = array(
        'posts_per_page' => 5, 
        'post_type' => 'Post', 
        'orderby' => 'date', 
        'order' => 'DESC' ); 

    $my_query = new WP_Query($args);
 

?>  
  

<?php 

while ($my_query->have_posts()) : $my_query->the_post(); ?>
   
      <div class="noticia">
        <div class="date"><?php echo get_the_date(); ?></div>  
        <div class="titulo">
          <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
        </div>
      </div>


<?php endwhile; ?>    
  </div>  <!-- fin noticias -->

 

</div>

  

  <?php
  

  endwhile; else: ?>

    <p>Sorry, no pages matched your criteria.</p>

<?php
  endif;



  add_script_imageslider();

  get_footer();
?>