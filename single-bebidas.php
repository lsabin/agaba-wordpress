<?php

  /**
  *@desc A single blog post See page.php is for a page layout.
  */

  echo "<html><head>";

  if (have_posts()) : while (have_posts()) : the_post();
  ?>


  <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic|Lobster+Two:400italic,700italic|Voltaire' 
      rel='stylesheet' type='text/css'>    
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/style-black.css" />

</head>
<body>


<div class="container">
    <div class="row bebidas">
        <div class="span3 nombre">
          <?php the_title(); ?>
        </div>

        <div class="span8">
          <?php the_content(); ?>
        </div>

    </div>

</div>
                  

   

	<?php

  endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php
  endif;

  echo "</body></html>";

?>
