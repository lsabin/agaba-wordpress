<?php

    get_header('agaba');

	
if (have_posts()): ?>
	

<div class="row">
    <div class="span12">

      <div class="row">


<?php 

while (have_posts()) : the_post(); ?>


<a href="<?php the_permalink() ?>" rel="bookmark">
        <div class="span3 caja">

 <?php if ( in_category('19') ) { ?>
           <div class="ribbon-wrapper-green"><div class="ribbon-green">ORUJO</div></div>
 <?php } elseif (in_category('104')) { ?>
           <div class="ribbon-wrapper-green"><div class="ribbon-orange">VUESTROS</div></div>
 <?php } elseif (in_category('6') && !in_category('19') && !in_category('104')) { ?>
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
 


      </div>
    </div>
</div>



<?php else: ?>

  <p><?php _e('Lo siento, no hay resultados.'); ?></p>
<?php endif; ?>



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
          'size_to' => '32px' 
           );

        do_utcw( $args );
        ?>

    </div>
  
</div>


<?php
  get_footer();
?>