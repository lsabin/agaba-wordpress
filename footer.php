      </div>



      <div id="footer" style="padding-top:10px;padding-left:30px;padding-right:30px;">
      	<div class="container">

		    <div class="row">
		        <div class="span9">      	
       				<span style="font-size:12px;color:#727272;"><strong>Copyright &copy; <?php echo date('Y');?> </strong></span>
       				<span style="font-size:12px;color: #F5DEB3;"><strong>Asociación Galega de Barmen</strong></span>
				</div>


				<div class="logos span6" style="float:right;margin-right:0px;">

					<div class="caja-logo" style="float:right;width:90px;height:90px;background:#fff;border:1px solid #868686;text-align:center;padding:5px;margin-left:10px;">
						<a href="http://www.iba-world.com/" title="International Bartenders Association" class="contooltip">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/logo-iba.png" alt="International Bartenders Association"/>
						</a>
					</div>

					<div class="caja-logo" style="float:right;width:90px;height:90px;background:#fff;border:1px solid #868686;text-align:center;padding:5px;margin-left:10px;">
						<a href="http://www.federacionabe.com/" title="Federación de Asociaciones de Barmen Españoles" class="contooltip">
						<img src="<?php bloginfo( 'template_url' ); ?>/images/logo-abe.png" alt="Federación de Asociaciones de Barmen Españoles"/>
						</a>
					</div>

					<div class="caja-logo" style="float:right;width:90px;height:90px;background:#fff;border:1px solid #868686;text-align:center;padding:5px;margin-left:10px;">
						<span class="contooltip" title="Asociación Galega de Barmen">
						<img src="<?php bloginfo( 'template_url' ); ?>/images/logo-agaba.png" alt="Asociación Galega de Barmen" />
						</span>
					</div>


				</div>


			</div>


		</div>



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


		    jQuery('.contooltip').tooltip({placement:'bottom'});

		});
	</script>

      

  </body>
</html>