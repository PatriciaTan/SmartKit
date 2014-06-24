<?php get_template_part('templates/head'); ?>
<body class="body-bottom">

  <!--[if lt IE 8]>
    <div class="alert alert-t4tg">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
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
    <button type="button" class="pull-right btn btn-default security-btn">Back on Indiegogo</button>
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
      
    </nav>
  </div>
</header>


  <section id="above-the-fold">
    <div class="wrap container" role="document">
      <div class="content row">
        <div class="col-sm-12 dark">
          <h1>No Contracts.</h1>
          <h3>How's that for a Smart Home?</h3>
          <div class="col-sm-4 jack-cols">
              <img class="badges the-athlete" src="http://www.jackalopemedia.com/t4tg/the-athlete.png" alt="the-athlete" />
              <p>Security</p>
          </div>
          <div class="col-sm-4 jack-cols">
              <img class="badges the-athlete" src="http://www.jackalopemedia.com/t4tg/the-fit.png" alt="the-fit" />
              <p>Energy</p>
          </div>
          <div class="col-sm-4 jack-cols">
              <img class="badges the-athlete" src="http://www.jackalopemedia.com/t4tg/the-restored.png" alt="the-restored" />
              <p>Automation</p>
          </div>
        </div>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </section>

  <section class="home jack-things">
    <div class="wrap container" role="document">
      <div class="content row">
        <div class="col-sm-6">
          <h2 class="paradigm"><i class="fa fa-yellow fa-circle-o-notch"></i> Home Security</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Nulla congue sem consequat, gravida lorem eu, bibendum ipsum. 
          Etiam commodo sem id tortor scelerisque, sed iaculis risus ultrices. 
          Nullam lobortis rutrum lacus id consequat. Suspendisse potenti.</p>
          <div class="alert alert-t4tg">Integer adipiscing iaculis ipsum, eget egestas metus euismod ac. 
          Nam ipsum sapien, ornare a ipsum eu, mollis mollis metus.</div>
          <button class="btn btn-default btn-lg security-btn">Read More <i class="fa fa-chevron-right"></i></button>
        </div>
        <div class="col-sm-6">
          <center>
          <img class="art img-responsive" src="http://placehold.it/450x250" />
          </center>
        </div>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </section>

  <section class="highlight home jack-things">
    <div class="wrap container" role="document">
      <div class="content row">
        <div class="col-sm-6">
          <h2 class="paradigm"><i class="fa fa-yellow fa-cutlery"></i> Smart Energy</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Nulla congue sem consequat, gravida lorem eu, bibendum ipsum. 
          Etiam commodo sem id tortor scelerisque, sed iaculis risus ultrices. 
          Nullam lobortis rutrum lacus id consequat. Suspendisse potenti.</p>
          <div class="alert alert-t4tg">Integer adipiscing iaculis ipsum, eget egestas metus euismod ac. 
          Nam ipsum sapien, ornare a ipsum eu, mollis mollis metus.</div>
          <button class="btn btn-default btn-lg energy-btn">Read More  <i class="fa fa-chevron-right"></i></button>
        </div>
        <div class="col-sm-6">
          <center>
          <img class="art img-responsive" src="http://placehold.it/450x250" />
          </center>
        </div>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </section>

  <section class="home jack-things">
    <div class="wrap container" role="document">
      <div class="content row">
        <div class="col-sm-6">
          <h2 class="paradigm"><i class="fa auto-btn fa-heart-o"></i> Home Automation</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Nulla congue sem consequat, gravida lorem eu, bibendum ipsum. 
          Etiam commodo sem id tortor scelerisque, sed iaculis risus ultrices. 
          Nullam lobortis rutrum lacus id consequat. Suspendisse potenti. 
          Donec luctus enim et ligula tristique ornare. 
          Nam dignissim congue est, ut placerat augue.</p>
          <div class="alert alert-t4tg">Integer adipiscing iaculis ipsum, eget egestas metus euismod ac. 
          Nam ipsum sapien, ornare a ipsum eu, mollis mollis metus.</div>
          <button class="btn btn-default btn-lg auto-btn">Read More  <i class="fa fa-chevron-right"></i></button>
        </div>
        <div class="col-sm-6">
          <center>
          <img class="art img-responsive" src="http://placehold.it/450x250" />
          </center>
        </div>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </section>

  <section class="highlight home jack-things">
    <div class="wrap container" role="document">
      <div class="content row">
        <div class="col-sm-6">
          <h1 class="paradigm"><i class="fa fa-yellow fa-plus-circle"></i> Plus</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Nulla congue sem consequat, gravida lorem eu, bibendum ipsum. 
          Etiam commodo sem id tortor scelerisque, sed iaculis risus ultrices. 
          Nullam lobortis rutrum lacus id consequat. Suspendisse potenti. 
          Donec luctus enim et ligula tristique ornare. 
          Nam dignissim congue est, ut placerat augue.</p>
          <div class="alert alert-t4tg">Integer adipiscing iaculis ipsum, eget egestas metus euismod ac. 
          Nam ipsum sapien, ornare a ipsum eu, mollis mollis metus.</div>
          <button class="btn btn-default btn-lg t4tg-home-btn">Read More <i class="fa fa-chevron-right"></i></button>
        </div>
        <div class="col-sm-6">
          <center>
          <img class="art img-responsive" src="http://placehold.it/450x250" />
          </center>
        </div>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </section>
  
  <section id="bottom-cta" class="home">
    <div class="wrap container" role="document">
      <div class="content row">
        <div class="col-sm-12">
          <h1>CREATE THE VEHICLE YOU LIVE IN.</h1>
          <div class="col-sm-4 jack-cols">
              <img class="badges the-athlete" src="http://www.jackalopemedia.com/t4tg/the-athlete.png" alt="the-athlete" />
              <button class="btn btn-default btn-lg t4tg-home-btn">Read Study  <i class="fa fa-chevron-right"></i></button>
          </div>
          <div class="col-sm-4 jack-cols">
              <img class="badges the-athlete" src="http://www.jackalopemedia.com/t4tg/the-fit.png" alt="the-fit" />
              <button class="btn btn-default btn-lg t4tg-home-btn">Read Study  <i class="fa fa-chevron-right"></i></button>
          </div>
          <div class="col-sm-4 jack-cols">
              <img class="badges the-athlete" src="http://www.jackalopemedia.com/t4tg/the-restored.png" alt="the-restored" />
              <button class="btn btn-default btn-lg t4tg-home-btn">Read Study  <i class="fa fa-chevron-right"></i></button>
          </div>
        </div>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </section>


  <?php get_template_part('templates/footer'); ?>

</body>
</html>
