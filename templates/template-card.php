<div class="col-md-4">
<div class="card" style="width: 22rem;">

  <img class="card-img-top" src="<?php the_post_thumbnail_url( 'medium' ); ?> " alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <p class="card-text"><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink() ?>" class="btn btn-primary">Leer Más</a>
  </div>
</div>
</div>