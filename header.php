<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="<?php echo bloginfo('template_directory'); ?>/images/Logo.png">
  <link rel="preload" href="<?php echo bloginfo('template_directory'); ?>/css/bootstrap.min.css" as="style"onload="this.onload=null;this.rel='stylesheet'"> <noscript> <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/bootstrap.min.css"></noscript>
  <link rel="preload" href="<?php echo bloginfo('template_directory'); ?>/css/stylesheet.min.css" as="style"onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="<?php echo bloginfo('template_directory'); ?>/css/slick.css" as="style"onload="this.onload=null;this.rel='stylesheet'"> <noscript><link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/slick.css"></noscript>
  <link rel="preload" href="<?php echo bloginfo('template_directory'); ?>/css/style.min.css" as="style"onload="this.onload=null;this.rel='stylesheet'"> <noscript><link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/style.min.css"></noscript>

  <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/animate.min.css">
  <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/stylesheet.min.css">
  <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/slick.css" />
  <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/slick-theme.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" integrity="sha512-Rd5Gf5A6chsunOJte+gKWyECMqkG8MgBYD1u80LOOJBfl6ka9CtatRrD4P0P5Q5V/z/ecvOCSYC8tLoWNrCpPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/bootstrap.min.js" defer></script>
  <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/bootstrap.bundle.min.js" defer></script>
  <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/custom.js" defer></script>
  <script src="<?php echo bloginfo('template_directory'); ?>/js/slick.min.js"></script>
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>


  <!-- Add your cover image Open Graph meta tag -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo bloginfo('template_directory'); ?>" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta property="og:image" content="<?php echo bloginfo('template_directory'); ?>/images/fav.png" />
  <meta property="og:image:type" content="image/jpeg" />
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
  <!-- top head news start  -->
  <div class="topheadnews">
    <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-5">
  <marquee class="topheadnews_txt">Positive Wings Wellness® – Empowering Mental Health since 2012</marquee>

           </div>
       </div>
    </div>
  </div>
  <!-- top head news end  -->
  <nav class="navbar sticky navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="<?php echo get_home_url();?>/">
        <img src="<?php echo bloginfo('template_directory'); ?>/images/logo1.svg" alt="">
        <img class="logotwo" src="<?php echo bloginfo('template_directory'); ?>/images/logo2.svg" alt="">
      </a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggler-icon top-bar"></span>
        <span class="toggler-icon middle-bar"></span>
        <span class="toggler-icon bottom-bar"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="logoInn_mobile">
          <img src="<?php echo bloginfo('template_directory'); ?>/images/logo1.svg" alt="">
          <img class="logotwo mt-3" src="<?php echo bloginfo('template_directory'); ?>/images/logo2.svg" alt="">
        </div>
        <div class="navbar-nav">
          <a class="nav-link <?php if (is_front_page()) echo 'active'; ?>" href="<?php echo get_home_url(); ?>/">Home</a>
          <a class="nav-link <?php if (is_page('about-us')) echo 'active'; ?>" href="<?php echo get_home_url(); ?>/about-us">About</a>
          <a class="nav-link <?php if (is_page('services')) echo 'active'; ?>" href="<?php echo get_home_url(); ?>/services">Services</a>
          <a class="nav-link <?php if (is_page('courses')) echo 'active'; ?>" href="<?php echo get_home_url(); ?>/courses">Courses</a>
          <a class="nav-link <?php if (is_page('events')) echo 'active'; ?>" href="<?php echo get_home_url(); ?>/events">Events</a>
          <a class="nav-link <?php if (is_page('gallery')) echo 'active'; ?>" href="<?php echo get_home_url(); ?>/gallery">Gallery</a>
          <a class="nav-link <?php if (is_home() || is_single()) echo 'active'; ?>" href="<?php echo get_home_url(); ?>/blog">Blogs</a>
          <a class="nav-link <?php if (is_page('contact-us')) echo 'active'; ?>" href="<?php echo get_home_url(); ?>/contact-us">Contact</a>
          <div class="bgbtns"><button data-bs-toggle="modal" data-bs-target="#popupForm">Book Appointment</button></div>
        </div>
      </div>
    </div>
  </nav>
  </header>

  <!-- Modal -->
<div class="modal fade popup_" id="popupForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="contact_form">
             <div class="subtitleform"> Query </div>
             <div class="subtitleforrm_txt">Submit your issues and we will get in touch with you</div>
             <?php echo do_shortcode('[contact-form-7 id="7d3e6ba" title="Popup Form"]'); ?>	
          </div>
      </div>
    </div>
  </div>
</div>

<body <?php body_class(); ?>>


<script>
  new WOW().init();
</script>