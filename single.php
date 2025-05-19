<?php
get_header();
global $post;

$contactUs = get_page_by_path('contact-us');
$content_contact_post = get_post($contactUs);
$contactUsID = $content_contact_post->ID;


?>

<section class="singleBlogContent ">
   
<div class="featured-postcalled-inn">
    <div class="container">
            <div class="post-image">
                <?php if (get_the_post_thumbnail_url()) { ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" />
                    <?php } ?>
                    <!-- <div class="author_date"><?php echo get_the_time('M d, Y'); ?></div> -->
                 </div>
                <div class="sectionContent">
                <h1 class="entry-title"> <?php the_title(); ?> </h1>
                    <?php the_content(); ?>
                </div>     
             </div>
        </div>
    </div>

</section>

<!-- Contact Us Section Start -->
<section class="contact_section section-padding">
    <div class="container">
	<img class="birdimg" src="<?php echo bloginfo('template_directory'); ?>/images/bird 5.png" alt="">
        <div class="row align-items-center">
            
            <!-- col start -->
            <?php $contact_section_ = get_field('contact_section_', $contactUsID);
            if( $contact_section_ ): ?>
            <div class="col-md-6">

                <!-- section title start  -->
                <div class="section_title">
                    <div class="section_title_sub"><img src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg" alt=""><?php echo $contact_section_['contact_section_sub_title_text']; ?></div>
                    <div class="section_title_main"><?php echo $contact_section_['contact_section_title_main']; ?></div>
                    <div class="section_title_mini_text"><?php echo $contact_section_['contact_section_conntent']; ?></div>
                </div>
                <!-- section title end  -->
                <ul>
                    <li>
                        <div class="ctinfo_icon"><img src="<?php echo bloginfo('template_directory'); ?>/images/phone.svg" alt=""></div>
                        <div class="ctinfo_text">
                            <div class="ctinfo_text_title">Phone Number</div>
                            <div class="ctinfo_text_in">
                                <a href="tel:<?php echo $contact_section_['phone_number']; ?>"><?php echo $contact_section_['phone_number']; ?></a>
                                <a href="tel:<?php echo $contact_section_['phone_number_two']; ?>"><?php echo $contact_section_['phone_number_two']; ?></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ctinfo_icon"><img src="<?php echo bloginfo('template_directory'); ?>/images/clock.svg" alt=""></div>
                        <div class="ctinfo_text">
                            <div class="ctinfo_text_title">Business Hours</div>
                            <div class="ctinfo_text_in"><?php echo $contact_section_['business_hours']; ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="ctinfo_icon"><img src="<?php echo bloginfo('template_directory'); ?>/images/map-pin.svg" alt=""></div>
                        <div class="ctinfo_text">
                            <div class="ctinfo_text_title">Email Id</div>
                            <div class="ctinfo_text_in">
                                <a href="mailto:<?php echo $contact_section_['email_id']; ?>"><?php echo $contact_section_['email_id']; ?></a> <br>
                                <a href="mailto:<?php echo $contact_section_['email_id_two']; ?>"><?php echo $contact_section_['email_id_two']; ?></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ctinfo_icon"><img src="<?php echo bloginfo('template_directory'); ?>/images/map-pin.svg" alt=""></div>
                        <div class="ctinfo_text">
                            <div class="ctinfo_text_title">Address</div>
                            <div class="ctinfo_text_in"><?php echo $contact_section_['address']; ?></div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- col end  -->
            <?php endif; ?>

            <!-- col start -->
            <div class="col-md-6">
                <div class="contact_form">
                   <?php echo do_shortcode('[contact-form-7 id="65bf146" title="Contact Page Form"]'); ?>	
                </div>
            </div>
            <!-- col end  -->

        </div>
    </div>
</section>
<!-- Contact Us Section Ends -->



<?php
get_footer();
?>