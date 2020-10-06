<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <?php mostrar_menu(); ?>
        </ul>
        <form action='<?php bloginfo('url') ?>' method="get" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" name="s" id="search" placeholder="Buscar" aria-label="Buscar" value="<?php the_search_query(); ?>">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
      </div>
    </nav>