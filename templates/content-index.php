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
    ?>
    </div>

    <div>
    <?php  
    the_posts_pagination([
    'screen_reader_text' => ' ',
    'mid_size'  => 2,
    'prev_text' => __( '<<', 'textdomain' ),
    'next_text' => __( '>>', 'textdomain' )
]);
    ?>
    </div>
   
<?php  
else:

    get_template_part('templates/content','none');

endif;



?>


</main>