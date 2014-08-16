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

  <section id="above-the-fold">
  	<video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
     		<source src="http://masonlawlor.com//smartkit/assets/video/timelapse.mp4" type="video/mp4">
     		<source src="http://masonlawlor.com//smartkit/assets/video/timelapse.ogv" type="video/ogv">
          Sorry, your browser does not support HTML5 video.
	</video>
    <div class="wrap container" role="document">
      <div class="content row">
        <div class="col-sm-12">
          <h1>No Contracts.</h1>
          <h3>How's that for a <span class="smart-home">Smart Home?</span></h3>
          <div class="col-sm-4 jack-cols">
              <a class="hero-sections" href="#"><img src="http://masonlawlor.com//smartkit/assets/images/security-hero.png" alt="the-athlete" />
              <h4>Security</h4></a>
          </div>
          <div class="col-sm-4 jack-cols">
              <a class="hero-sections" href="#"><img src="http://masonlawlor.com//smartkit/assets/images/energy-hero.png" alt="the-fit" />
              <h4>Energy</h4></a>
          </div>
          <div class="col-sm-4 jack-cols">
              <a class="hero-sections" href="#"><img src="http://masonlawlor.com//smartkit/assets/images/automation-hero.png" alt="the-restored" />
              <h4>Automation</h4></a>
          </div>
          <center></center>
          <a href="//fast.wistia.net/embed/iframe/1se5qohbsh?popover=true" class="wistia-popover[height=360,playerColor=7b796a,width=640]"><button type="button" class="btn hero-btn hero-btn-sides">Play Video</button></a>
<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
        </div>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </section>
<br />
<hr>

