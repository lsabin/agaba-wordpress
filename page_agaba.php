<?php
/*
Template Name: Page inicial agaba
*/
  get_header('agaba');


  add_action('loop_start','remove_wpautop_content_filter'); /* para borrar los p */



  if (have_posts()) : while (have_posts()) : the_post();
  ?>


<!-- va a contenido 
<div class="row">
    <div class="span12">
        <div id="slider">
            <img src="img/barra.jpg"/>
            <img src="img/cocktail_glasses_940.jpg" alt="Algun tipo de texto"/>
        </div>            
    </div>
</div>
-->





  <div id="contenido" class="clearfix" >

    <?php the_content(__('(more...)')); ?>

  </div>



<div class="row">
  <div class="span4 seccion">
    <h2>NOTICIAS</h2>
    <p>bla bla bla</p>
    <p>bla bla bla</p>
    <p>bla bla bla</p>
    <p>bla bla bla</p>

  </div>  


  <div class="span4 seccion">
    <h2>COCTELES</h2>
    <p>bla bla bla</p>
    <p>bla bla bla</p>
    <p>bla bla bla</p>
    <p>bla bla bla</p>    
  </div>  


  <div class="span4 seccion">
    <h2>CURSOS</h2>
    <p><b>15/12/2013</b> Curso básico en Parador de Santiago</p>
    <p><b>15/12/2013</b> Curso avanzado en Parador de Santiago</p>
    
  </div>  

</div>

  

  <?php
  

  endwhile; else: ?>

    <p>Sorry, no pages matched your criteria.</p>

<?php
  endif;

  get_footer('nuevo');
?>