<?php
/*

 * Template Name: Error 404

*/
get_header();


?>

<style>
    header{
        display:none;
    }
    footer{
        display:none;
    }
    body{
        padding: 0;
    }
</style>


<section class="error-show section-padding">

<div class="error-blockinn">
   <div class="error-blocktext">
   <ul>
        <li>4</li>
        <li><div class="error-image"><img src="<?php echo bloginfo('template_directory'); ?>/images/Group 177.png" alt=""></div></li>
        <li>4</li>
    </ul>
    <p>We’re sorry, the page you requested could not be found please go back to the homepage</p>
    <div class="btnFilled"> <a href="" data-bs-toggle="modal" data-bs-target="#inquiryModal"> Go Home </a> </div>
   </div>
</div>

</section>



<?php
get_footer();
?>