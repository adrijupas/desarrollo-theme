<main role="main" class="container index">
<div class="row">   
<?php 
    // empieza el bucle (El Loop)
if(have_posts()):

    while(have_posts()):
        the_post();
        // las etiquetas de contenido
        
     
      get_template_part('templates/template','card'); 
      
         
    endwhile;
else:

    get_template_part('templates/content','none');

endif;



?>

</div>

</main>