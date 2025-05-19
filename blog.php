<?php
get_header();

/** Template Name: Blog Template*/

$term = get_queried_object();
$termId = $term->term_id;
global $wp_query;

$contactUs = get_page_by_path('contact-us');
$content_contact_post = get_post($contactUs);
$contactUsID = $content_contact_post->ID;


?>



<!-- Gallery Main Banner Start -->
<section class="gallery_banner section-padding" style="background:url('<?php the_post_thumbnail_url();?>') !important;  background-position: center !important; background-size: cover !important; @media (max-width: 640px){    background-position: center !important;}">
    <div class="gallery_banner_overlay">
        <div class="gallery_banner_content  wow fadeIn" data-wow-delay="0.2s">
            <div class="gallery_banner_title">
                <h1><?php the_field('page_title'); ?></h1>
            </div>
            <div class="gallery_banner_subtitle">
               <?php the_field('page_intro'); ?>
            </div>
        </div>
    </div>
</section>
<!-- Gallery Main Banner Ends -->

<section class="BlogListings section-padding">

    <div class="container">
        <div class="blog-data">
            <!-- row start   -->
            <div class="row justify-content-center">
            <!-- -- list col start -->
<div class="col-md-12">
    <div class="row">
        <?php
        global $search;
        global $paged;
        global $post;
        $args = array(
            'post_type' => 'post',
            's' => $search,
            'paged' => $paged,
            'posts_per_page' => 8 // this will retrieve all the posts that are published
        );
        $resultt = new WP_Query($args);

        $i = 1;
        if ($resultt->have_posts()) {
            while ($resultt->have_posts()) : $resultt->the_post();
                // Get the custom ACF image field (replace 'blog_image' with your actual field name)
                $custom_image = get_field('blog_image'); // This retrieves the ACF image URL
        ?>
        <div class="col-md-4">
            <div class="post-list  wow fadeIn" data-wow-delay="0.2s">
                <a href="<?php the_permalink(); ?>">
                    <div class="post-image">
                        <?php if ($custom_image) { ?>
                            <img src="<?php echo esc_url($custom_image['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($custom_image['alt']); ?>" />
                        <?php } elseif (get_the_post_thumbnail_url()) { ?>
                            <!-- Fallback to default post thumbnail if no ACF image is found -->
                            <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>" />
                        <?php } ?>
                    </div>
                    <div class="blog_content_wrapper">
                        <div class="author_date"> <?php echo get_the_time('M d, Y'); ?> </div>
                        <h3 class="entry-title"> <?php the_title(); ?> </h3>
                        <div class="desc"> <?php the_excerpt(); ?></div>
                    </div>
                </a>
            </div>
        </div>
        <?php
            $i++;
            endwhile;
        } else {
        ?>
        <p class="text-center">No blog found.</p>
        <?php
        }
        wp_reset_postdata();
        ?>
        <?php
        if (function_exists("wpbeginner_numeric_posts_nav")) {
            wpbeginner_numeric_posts_nav($resultt->max_num_pages);
        }
        ?>
    </div>
</div>
<!-- -- list col end -->


            </div>
            <!-- -- row end  -->
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
                <div class="section_title  wow fadeIn" data-wow-delay="0.2s">
                    <div class="section_title_sub"><img src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg" alt=""><?php echo $contact_section_['contact_section_sub_title_text']; ?></div>
                    <div class="section_title_main"><?php echo $contact_section_['contact_section_title_main']; ?></div>
                    <div class="section_title_mini_text"><?php echo $contact_section_['contact_section_conntent']; ?></div>
                </div>
                <!-- section title end  -->
                <ul class=" wow fadeIn" data-wow-delay="0.2s">
                    <li>
                        <div class="ctinfo_icon"><img src="<?php echo bloginfo('template_directory'); ?>/images/phone.svg" alt=""></div>
                        <div class="ctinfo_text">
                            <div class="ctinfo_text_title">Phone Number</div>
                            <div class="ctinfo_text_in">
                                <a href="tel:<?php echo $contact_section_['phone_number']; ?>"><?php echo $contact_section_['phone_number']; ?></a> <br>
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
                <div class="contact_form  wow fadeIn" data-wow-delay="0.2s">
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