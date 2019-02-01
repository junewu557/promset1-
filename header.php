<head>

  <meta charset="<?php bloginfo("charset ") ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php bloginfo("name") ?> </title>

  <!-- Bootstrap core CSS -->
  <link href="<?php bloginfo("template_url") ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="<?php bloginfo("template_url") ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php bloginfo("stylesheet_url") ?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body id="page-top">
  <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">

      <?php
         wp_nav_menu(array(
         'menu'              => 'primary',
         'theme_location'    => 'primary',
         'depth'             => 2,
         'container'         => 'div',
         'container_class'   => 'collapse navbar-collapse',
         'container_id'      => 'bs-example-navbar-collapse-1',
         'menu_class'        => 'nav navbar-nav',
         'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
         'walker'            => new wp_bootstrap_navwalker())
         );
        ?>

          </ul>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">June Wu</span>
      <span class="d-none d-lg-block">

        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="('<?php bloginfo("image_url") ?>/img/june.png')">

      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="http://dev-junewu888.pantheonsite.io/">Home Page</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="http://dev-junewu888.pantheonsite.io/view-more/">View More</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="http://dev-junewu888.pantheonsite.io/cool/">Airtable</a>
        </li>


      </ul>
    </div>
  </nav>
