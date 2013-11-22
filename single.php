<?php

  /**
  *@desc A single blog post See page.php is for a page layout.
  */

  get_header('agaba');

  if (have_posts()) : while (have_posts()) : the_post();
  ?>

    <div class="caja-post" id="post-<?php the_ID(); ?>"  <?php post_class('postWrapper'); ?>>

      <h1 class="postTitle">
        <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
        <span class="date"><?php the_date(); ?></span>  
      </h1>
      

      <div class="post">
	  <div class="elthumb"><?php the_post_thumbnail(); ?></div>
	<?php the_content(__('(Leer más...)')); ?></div>
	<?php wp_link_pages('before=<p class="page-link">&after=</p>&next_or_number=number&pagelink=page %'); ?>
	  <p class="postMeta"><?php the_tags('', ' ', ''); ?> </p>

    </div>
    <!--
    <div class="post-link">
     <div class="pagination-newer"><?php previous_post_link('%link'); ?></div> 
      <div class="pagination-older"><?php next_post_link('%link'); ?></div>
	   </div>
   -->
	<?php

  //comments_template();

  endwhile; else: ?>

		<p>Lo siento, no existe nada parecido...</p>

<?php
  endif;

  get_footer();

?>