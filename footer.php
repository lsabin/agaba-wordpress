      </div>



      <div id="footer">
       <p>Copyright &copy; <?php echo date('Y');?>  <?php bloginfo('name'); ?>  </p>
        <?php wp_footer(); ?>
      </div>


    <script src="<?php bloginfo( 'template_url' ); ?>/js/hoverIntent.js" type="text/javascript"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/superfish.js" type="text/javascript"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/supersubs.js" type="text/javascript"></script>

	<script>
		jQuery(function() {
		    jQuery("#menu-nav").supersubs({
		        minWidth:    12,   // minimum width of sub-menus in em units
		        maxWidth:    27,   // maximum width of sub-menus in em units
		        extraWidth:  1   
		    }).superfish();
		});
	</script>

      

  </body>
</html>