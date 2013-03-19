<?php

   get_header('nueva');
   


    $args = array_merge( $wp_query->query_vars, array( 'post_type' => 'coctel' ) );

    $my_query = new WP_Query($args);
   

?>	
	

<div class="grid_12">	

<div style="border:1px solid red">

<?php
$args = Array();
do_utcw($args);

?>
</div>

  <ol id="posts">
  <?php 

    while ($my_query->have_posts()) : $my_query->the_post(); ?>

    <li id="post-<?php the_ID(); ?>" <?php post_class('postWrapper'); ?>>
   
      <h2 class="postTitle numero"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
      
      <p class="date"><small><?php the_time('F j, Y'); ?> by <?php the_author(); ?></small></p>
	
      <div class="post">

<p><?php echo get('elaboracion'); ?></p>

      <?php the_post_thumbnail(); ?>

<?php
$image_attributes = "w=150&h=100&zc=c&q=90"; // 250x150px, crop to center, quality 90
echo get_image('imagen',1,1,1,NULL,$image_attributes);
?>


	  <?php the_content(__('(more...)')); ?></div>
      <?php wp_link_pages('before=<p class="page-link">&after=</p>&next_or_number=number&pagelink=page %'); ?>
      <p class="postMeta">Category <?php the_category(', ') ?> | Tags: <?php the_tags(', '); ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
	
      <hr class="noCss" />
    </li>

    <?php comments_template(); // Get wp-comments.php template ?>

    <?php endwhile; ?>

  </ol>
  
</div>




 <div class="pagination-older"><?php next_posts_link('Older Entries'); ?></div>
<div class=" pagination-newer"><?php previous_posts_link('Newer Entries'); ?></div> 


    



  <?php
  get_footer('nuevo');
?>