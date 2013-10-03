<?php

  /**
  *@desc A single blog post See page.php is for a page layout.
  */

  echo "<html><head></head><body>";

  if (have_posts()) : while (have_posts()) : the_post();
  ?>



<div class="row">
    <div class="span12">




    <div class="row caja">
        <div class="span12 seccion-foto">
          <div class="row titular">
            <div class="span12"><h1><?php the_title(); ?></h1></div>  
          </div>
  
          <div class="row">
            <div class="span12"><h1><?php the_content(); ?></h1></div>  
          </div>



                  

        </div>
  </div> <!-- fin caja -->




    </div> <!-- fin post-id -->


</div> <!-- fin span12 -->

</div> <!-- fin de row -->    

	<?php

  endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php
  endif;

  echo "</body></html>";

?>
