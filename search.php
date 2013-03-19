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
          <div class="crop"><img src="<?php echo get('imagen'); ?>" /></div>
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


<div class="pagination-older"><?php next_posts_link('Older Entries'); ?></div>
<div class=" pagination-newer"><?php previous_posts_link('Newer Entries'); ?></div> 


    



  <?php
  get_footer('nuevo');
?>