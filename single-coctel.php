<?php

  /**
  *@desc A single blog post See page.php is for a page layout.
  */

  get_header('agaba');

  if (have_posts()) : while (have_posts()) : the_post();
  ?>




<!--
<?php echo get('elaboracion'); ?>
<?php echo get_image('imagen'); ?>
-->

<div class="row">
    <div class="span12">


    <div id="post-<?php the_ID(); ?>"  <?php post_class('postWrapper'); ?>>



    <div class="row caja">
        <div class="span12 seccion-foto">
          <div class="row ">
            <div class="span6"><h1><?php the_title(); ?></h1></div>  
            <div class="span4">&nbsp;</div>
          </div>

          <div class="row">
              <div class="span6">
                    <div class="foto">
                    <img src="<?php echo get('imagen'); ?>" />
                        <!--<img src="http://www.agaba.net/AGABA%20P%C3%81GINA%20WEB/recetario/cockteleriaclasica/americano.jpg"/>-->
                    </div>
              </div>


              <div class="span4 info ">
                  <div class="row"><div class="span4 linea"><strong>Tipo:</strong> <?php echo get('tipo'); ?></div></div>
                  <div class="row"><div class="span4 linea"><strong>Preparación:</strong> <?php echo get('preparacion'); ?></div></div>
                  <div class="row"><div class="span4 linea"><strong>Presentación: </strong><?php echo get('presentacion'); ?></div></div>
                  <div class="row"><div class="span4"></div></div>

                  <div class="row social-buttons" style="margin-top:20px;">
                    <div class="span4">
                          <img src="<?php bloginfo('template_url'); ?>/images/TwitterIconWhite48x48.png" style="background-color:#333;border:0"/>
                          <img src="<?php bloginfo('template_url'); ?>/images/FacebookIconWhite48x48.png" style="background-color:#333;border:0"/>
                    </div>
                  </div>


                  <div class="row" style="margin-top:20px;">
                    <div class="span4"><strong>Etiquetas</strong></div>
                    <div class="span4"><?php the_tags(' '); ?></div>
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

              <div class="row"><div class="span6 "><h3>Elaboración</h3></div></div>
              <div class="row"><div class="span5 ">
                  <?php echo get('elaboracion'); ?>
              </div></div>

            </div>

       </div>     



                  

    </div>
  </div> <!-- fin caja -->




    </div> <!-- fin post-id -->

	<?php

  endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>


</div> <!-- fin span12 -->

</div> <!-- fin de row -->


<!-- nueva plantilla -->




<!-- fin nueva plantilla -->



<?php
  endif;

  get_footer('nuevo');

?>