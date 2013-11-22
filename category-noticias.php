<?php

    get_header('agaba');

    $args = array_merge( $wp_query->query_vars, 
      array(
        'posts_per_page' => 10, 
        'paged' => $paged, 
        'post_type' => 'Post', 
        'orderby' => 'date', 
        'order' => 'DESC' ) 
      );


    $wp_query = new WP_Query($args);
 

?>	
	


<?php 

while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


    <div class="caja-post" id="post-<?php the_ID(); ?>"  <?php post_class('postWrapper'); ?>>

      <h1 class="postTitle">
        <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
        <span class="date"><?php echo get_the_date(); ?></span>  
      </h1>
      

      <div class="post">
        <div class="elthumb"><?php the_post_thumbnail(); ?></div>
        <?php the_content(__('(Leer más...)')); ?>
      </div>
      <?php wp_link_pages('before=<p class="page-link">&after=</p>&next_or_number=number&pagelink=page %'); ?>
      <p class="postMeta"><?php the_tags('', ' ', ''); ?> </p>

    </div>     


<?php endwhile; ?>



<?php if(function_exists('wp_paginate')) {
    wp_paginate(array(title => ''));
} ?>




<?php
  get_footer();
?>