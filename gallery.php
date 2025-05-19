<?php
/*

 * Template Name: Gallery Template

*/
get_header();

$contactUs = get_page_by_path('contact-us');
$content_contact_post = get_post($contactUs);
$contactUsID = $content_contact_post->ID;


?>


<!-- Gallery Main Banner Start -->
<section class="gallery_banner section-padding" style="background:url('<?php the_post_thumbnail_url();?>') !important;  background-position: center !important; background-size: cover !important; @media (max-width: 640px){    background-position: center !important;}">
    <div class="gallery_banner_overlay">
        <div class="gallery_banner_content  wow fadeIn" data-wow-delay="0.2s">
            <div class="gallery_banner_title">
                <h1><?php the_field('page_title_'); ?></h1>
            </div>
            <div class="gallery_banner_subtitle">
               <?php the_field('page_sub_intro'); ?>
            </div>
        </div>
    </div>
</section>
<!-- Gallery Main Banner Ends -->


<!-- Gallery Box Section Start -->
<?php if( have_rows('gallery_images') ): ?>
<section class="galleryblock gallery section-padding">
    <div class="container">
        <div class="row">
            <!-- col start  -->
            <div class="col-md-12">
                <div class="toptitlegallery  wow fadeIn" data-wow-delay="0.2s">All Photos</div>
            </div>
            <!-- col end  -->

            <!-- col start  -->
            <?php while( have_rows('gallery_images') ): the_row();  
            $add_gallery_images =  get_sub_field('add_gallery_images');
            ?>
            <div class="col-md-4">
                <div class="galleryblock_cards  wow fadeIn" data-wow-delay="0.2s">
                    <a href="<?php echo esc_url( $add_gallery_images['url'] ); ?>" data-lightbox="mygallery">
                        <img src="<?php echo esc_url( $add_gallery_images['url'] ); ?>" alt="Image 1">
                    </a>
                </div>
            </div>
            <?php endwhile; ?>	
            <!-- col end  -->

        </div>
    </div>
</section>
<?php endif; ?>  




<!-- FAQS SECTIOM START -->
<section class="faq_wrapper section-padding">
    <div class="container">

       	<!-- section title start  -->
		<?php $faq_section_title = get_field('faq_section_title');
        if( $faq_section_title ): ?>
	    <div class="section_title">
			<div class="section_title_sub"><img src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg" alt=""> <?php echo $faq_section_title['faq_section_title_sub_title']; ?></div>
			<div class="section_title_main"><?php echo $faq_section_title['faq_section_title_main']; ?></div>
		</div>
		<?php endif; ?>
		<!-- section title end  -->

        <div class="row">
            <!-- col start  -->
            <div class="col-md-12">
			    <?php if( have_rows('faq_blocks') ): ?>
                <div class="accordion  wow fadeIn" data-wow-delay="0.2s" id="accordionExample">
				   <?php while( have_rows('faq_blocks') ): the_row();  
                    $faq_blocks_number =  get_sub_field('faq_blocks_number');
		        	$write_word_collapsed_ =  get_sub_field('write_word_collapsed_');
		        	$write_word_show_ =  get_sub_field('write_word_show_');
		        	$faq_blocks_questions =  get_sub_field('faq_blocks_questions');
		        	$faq_ans =  get_sub_field('faq_ans');
                    ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button <?php echo $write_word_collapsed_; ?>" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq<?php echo $faq_blocks_number; ?>" aria-expanded="true" aria-controls="faq<?php echo $faq_blocks_number; ?>">
                                <?php echo $faq_blocks_questions; ?>
                            </button>
                        </h2>
                        <div id="faq<?php echo $faq_blocks_number; ?>" class="accordion-collapse collapse <?php echo $write_word_show_; ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
						    	<?php echo $faq_ans; ?>
                            </div>
                        </div>
                    </div>
					<?php endwhile; ?>	
                </div>
				<?php endif; ?> 
            </div>
            <!-- col end  -->
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