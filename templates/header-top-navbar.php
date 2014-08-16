<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="http://masonlawlor.com//smartkit/assets/images/logo.png" alt="logo-nav" width="auto" height="48px" /></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
    <button type="button" class="pull-right btn btn-default nav-btn">Back on Kickstarter</button>
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>

  <section id="bottom-cta" class="home">
    <div class="wrap container" role="document">
      <div class="content row">
        <div class="col-sm-12">
	          <h1>Rationality meets smart home.</h1>
          <h3>No contracts.</h3>
          <center><button type="button" class="btn btn-default cta-btn blog-cta">Play video</button></center>
          <center><a href="" data-toggle="modal" data-target="#myModal">Virtual Walk-thru: How to pick the right equipment for your home</a></center>
        </div>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </section>
<br />
<hr>

