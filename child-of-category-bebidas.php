<?php

    get_header('agaba');


    $cat = get_query_var('cat');

    $args =  array( 'posts_per_page' => 20, 
      'paged' => $paged,
//      'category_name' => 'bebidas',
      'post_type' => 'bebidas',

      'cat' => $cat,
      'orderby' => 'name', 
      'order' => 'ASC'
      ); 


    $my_query = new WP_Query($args);

  

?>	
	


<div class="caja">


    <div class="row">
        <div class="span12 titular"><h1>ABC de bebidas</h1></div>  
    </div>

    <div class="row">
        <div class="span12 indice">
          <a href="a">A</a>
          <a href="b">B</a>
          <a href="c">C</a>
          <a href="d">D</a>
          <a href="e">E</a>
          <a href="e">F</a>
          <a href="e">G</a>
          <a href="e">H</a>
          <a href="e">I</a>
          <a href="e">J</a>
          <a href="e">K</a>
          <a href="e">L</a>
          <a href="e">M</a>
          <a href="e">N</a>
          <a href="e">O</a>
          <a href="e">P</a>
          <a href="e">Q</a>
          <a href="e">R</a>
          <a href="e">S</a>
          <a href="e">T</a>
          <a href="e">U</a>
          <a href="e">V</a>
          <a href="e">W</a>
          <a href="e">Y</a>
          <a href="e">Z</a>

        </div>  
    </div>



<?php 

while ($my_query->have_posts()) : $my_query->the_post(); ?>

    <div class="row bebidas">
        <div class="span3 nombre">
          <?php the_title(); ?>
        </div>

        <div class="span8">
          <?php the_content(); ?>
        </div>

    </div>


<?php endwhile; ?>



</div>



<?php



  get_footer();
?>