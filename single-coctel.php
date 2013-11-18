<?php

  /**
  *@desc A single blog post See page.php is for a page layout.
  */

  get_header('agaba');

  if (have_posts()) : while (have_posts()) : the_post();
  ?>



<div class="row">
    <div class="span12">


    <div id="post-<?php the_ID(); ?>"  <?php post_class('postWrapper'); ?>>



    <div class="row caja">
        <div class="span12 seccion-foto">
          <div class="row titular">
            <div class="span12"><h1><?php the_title(); ?></h1></div>  
            <!--<div class="span4">&nbsp;</div>-->
          </div>

          <div class="row">
              <div class="span6">
                <?php if (get('imagen')) { ?>
                    <div class="foto">
                    <img src="<?php echo get('imagen'); ?>" />
                    </div>
                <?php } else {?>    
                    <div class="foto">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/icono-cocktail.jpg" />
                    </div>                
                <?php } ?>
              </div>


              <div class="span4 info ">
                  <div class="row"><div class="span4 linea"><strong>Tipo:</strong> <?php echo get('tipo'); ?></div></div>
                  <div class="row"><div class="span4 linea"><strong>Preparación:</strong> <?php echo get('preparacion'); ?></div></div>
                  <div class="row"><div class="span4 linea"><strong>Presentación: </strong><?php echo get('presentacion'); ?></div></div>

                  <?php if (get('autor')) { ?>
                    <div class="row"><div class="span4 linea"><strong>Autor: </strong> <?php echo get('autor'); ?></div></div>
                  <?php } ?> 


                  <?php if (get('premios')) { ?>
                    <div class="row"><div class="span4 linea"><strong>Premios: </strong> <?php echo get('premios'); ?></div></div>
                  <?php } ?>

                  <div class="row"><div class="span4"></div></div>

<!--
                  <div class="row social-buttons" style="margin-top:20px;">
                    <div class="span4">
                          <img src="<?php bloginfo('template_url'); ?>/images/twitter.png" style="background-color:tranparent;border:0"/>
                          <img src="<?php bloginfo('template_url'); ?>/images/facebook.png" style="background-color:transparent;border:0"/>
                    </div>
                  </div>
-->                  

                  <div class="row social-buttons" style="margin-top:20px;">
                    <div class="span4">

                      <div id="facebook" data-url="<?php the_permalink() ?>" data-title="Share on Facebook"></div>
                      <div id="twitter" data-url="<?php the_permalink() ?>" data-text="AGABA - <?php the_title(); ?>" data-title="Share on Twitter"></div>
                      <div id="pinterest" data-text="AGABA - <?php the_title(); ?>" data-url="<?php the_permalink() ?>" data-image="<?php echo get('imagen'); ?>"  data-title="Pinterest"></div>

                    </div>
                  </div>                  


                  <div class="row" style="margin-top:20px;">
                    <div class="span4"><strong>Etiquetas</strong></div>
                    <div class="span4 etiquetas"><?php the_tags('', ' ', ''); ?></div>
                  </div>  

              </div>

          </div>

          <div class="row">


            <div class="span6 ingredientes">
              <div class="row"><div class="span6 "><h3>Ingredientes</h3></div></div>
              <div class="row"><div class="span6 ">
                  <?php echo get('ingredientes'); ?>
              </div></div>

            </div>


            <div class="span6 elaboracion">

              <?php if (get('elaboracion')) { ?>
              <div class="row"><div class="span6 "><h3>Elaboración</h3></div></div>
              <div class="row"><div class="span5 "><?php echo get('elaboracion'); ?></div></div>
              <?php } ?> 

            </div>

       </div>     



                  

    </div>
  </div> <!-- fin caja -->




    </div> <!-- fin post-id -->


</div> <!-- fin span12 -->

</div> <!-- fin de row -->    

	<?php

  endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>





<!-- nueva plantilla -->




<!-- fin nueva plantilla -->





<?php
  endif;

add_script_social();
add_script_sharre();


 add_script_fancybox();
  add_script_fancybox_start();

  get_footer();

?>