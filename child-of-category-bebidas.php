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
          <a href="../a">A</a>
          <a href="../b">B</a>
          <a href="../c">C</a>
          <a href="../d">D</a>
          <a href="">E</a>
          <a href="../f">F</a>
          <a href="../g">G</a>
          <a href="../h">H</a>
          <a href="">I</a>
          <a href="../j">J</a>
          <a href="../k">K</a>
          <a href="">L</a>
          <a href="../m">M</a>
          <a href="">N</a>
          <a href="../o">O</a>
          <a href="../p">P</a>
          <a href="../q">Q</a>
          <a href="../r">R</a>
          <a href="../s">S</a>
          <a href="../t">T</a>
          <a href="../u">U</a>
          <a href="../v">V</a>
          <a href="../w">W</a>
          <a href="../y">Y</a>
          <a href="../z">Z</a>

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