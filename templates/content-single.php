<?php 

// empieza el bucle (El Loop)
get_template_part('templates/content','nav');

if(have_posts()):

    while(have_posts()):
        the_post();
        // las etiquetas de contenido

        get_template_part('templates/template','single');

    endwhile;
else:

    get_template_part('content','none');

endif;



?>