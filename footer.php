<?php
/*

 * Template Name: Footer Template

*/


?>

<?php wp_footer(); ?>


<footer>
  <div class="container">
    <div class="row">

      <!-- col start  -->
      <div class="col-md-3">
         <div class="footerblock_intro">
             <div class="ftb_imgs">
                 <a href=""><div class="ftb_imgone"><img src="<?php echo bloginfo('template_directory'); ?>/images/logo1.svg" alt=""></div></a>
                 <a href=""><div class="ftb_imgtwo"><img src="<?php echo bloginfo('template_directory'); ?>/images/logo2.svg" alt=""></div></a>
             </div>
             <div class="ftb_subtext">We are available 24/7. Get your queries answered. Counselling by prior appointment</div>
             <!--<div class="ftb_sociallinks">-->
             <!--   <ul>-->
             <!--      <a href=""><li><img src="<?php echo bloginfo('template_directory'); ?>/images/Icon 1.svg" alt=""></li></a>-->
             <!--      <a href=""><li><img src="<?php echo bloginfo('template_directory'); ?>/images/Icon 2.svg" alt=""></li></a>-->
             <!--      <a href=""><li><img src="<?php echo bloginfo('template_directory'); ?>/images/Icon 3.svg" alt=""></li></a>-->
             <!--      <a href=""><li><img src="<?php echo bloginfo('template_directory'); ?>/images/Icon 4.svg" alt=""></li></a>-->
             <!--   </ul>-->
             <!--</div>-->
         </div>
      </div>
      <!-- col end  -->

      <!-- col start  -->
      <div class="col-md-1 quicklinksdiff">
        <div class="quicklinks">
            <div class="quicklinks_title">Company</div>
            <ul>
            <a class="nav-link <?php if (is_front_page()) echo 'active'; ?>" href="<?php echo get_home_url(); ?>/"><li>Home</li></a>
            <a class="nav-link <?php if (is_page('about-us')) echo 'active'; ?>" href="<?php echo get_home_url(); ?>/about-us"><li>About </li></a>
            <a class="nav-link <?php if (is_page('services')) echo 'active'; ?>" href="<?php echo get_home_url(); ?>/services"><li>Services</li></a>
            <a class="nav-link <?php if (is_page('courses')) echo 'active'; ?>" href="<?php echo get_home_url(); ?>/courses"><li>Courses</li></a>
            <a class="nav-link <?php if (is_page('events')) echo 'active'; ?>" href="<?php echo get_home_url(); ?>/events"><li>Events</li></a>
            <a class="nav-link <?php if (is_page('gallery')) echo 'active'; ?>" href="<?php echo get_home_url(); ?>/gallery"><li>Gallery</li></a>
            <a class="nav-link <?php if (is_home() || is_single()) echo 'active'; ?>" href="<?php echo get_home_url(); ?>/blog"><li>Blogs</li></a>
            <a class="nav-link <?php if (is_page('contact-us')) echo 'active'; ?>" href="<?php echo get_home_url(); ?>/contact-us"><li>Contact </li></a>
            </ul>
        </div>
      </div>
      <!-- col end  -->

      <!-- col start  -->
      <div class="col-md-8 quicklinksdot p-0">
        <div class="quicklinks quicklinkstwo space">
            <div class="quicklinks_title">Service</div>
            <ul>
              <a href="<?php echo get_home_url();?>/services"><li>Marital & Pre-Marital Relationship Counselling</li></a>
              <a href="<?php echo get_home_url();?>/services"><li>Counselling for Stress, Anxiety and Depression</li></a>
              <a href="<?php echo get_home_url();?>/services"><li>Chronic Pain management</li></a>
              <a href="<?php echo get_home_url();?>/services"><li>Group Counselling for Corporates, Schools and Organisations</li></a>
              <a href="<?php echo get_home_url();?>/services"><li>Family, Parenting & Adolescent Relationship Counselling</li></a>
              <a href="<?php echo get_home_url();?>/services"><li>CBT, REBT & Psychoanalytic Therapeutic Counselling</li></a>
              <a href="<?php echo get_home_url();?>/services"><li>Personality, Growth Mindset and Career Counselling</li></a>
              <a href="<?php echo get_home_url();?>/services"><li>Relief Counselling for Teachers, Nurses & Caregivers</li></a>
              <a href="<?php echo get_home_url();?>/services"><li>Clinical Hypnotherapy & Advanced Pranic Healing</li></a>
              <a href="<?php echo get_home_url();?>/services"><li>Art Psychotherapy Sessions and Workshops</li></a>
            </<?php echo get_home_url();?>/servicesul>
        </div>
      </div>
      <!-- col end  -->

      <!-- col start  -->
      <div class="col-md-12">
        <div class="copyright_text">
            <ul>
              <a href="<?php echo get_home_url();?>/terms-conditions" target="_blank"><li>Terms of Use</li></a>
              <a href="<?php echo get_home_url();?>/privacy-policy" target="_blank"><li>Privacy Policy</li></a>
            </ul>
        </div>
      </div>
      <!-- col end  -->

    </div>
  </div>
</footer>


</body>

