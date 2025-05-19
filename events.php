<?php
/*
 * Template Name: Events Template
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
                <h1><?php the_field('page_title'); ?></h1>
            </div>
            <div class="gallery_banner_subtitle">
               <?php the_field('page_intro'); ?>
            </div>
        </div>
    </div>
</section>
<!-- Gallery Main Banner Ends -->



<!-- Event Banner Card Section Start -->
<section class="event_card section-padding">
    <div class="container">
        <?php if( have_rows('events_cards') ): ?>
        <div class="row">
            <?php while( have_rows('events_cards') ): the_row();  
                $events_cards_image =  get_sub_field('events_cards_image');
                $events_cards_name =  get_sub_field('events_cards_name');
                $events_cards_intro_text =  get_sub_field('events_cards_intro_text');
                $events_cards_date =  get_sub_field('events_cards_date');
                $events_cards_is_this_event_active_ = get_sub_field('events_cards_is_this_event_active_');
                $events_cards_invitation = get_sub_field('events_cards_invitation'); // 🎯 NEW FIELD

                if (!$events_cards_name) continue;
            ?>
            <div class="col-md-4">
                <div class="event_card_parent  wow fadeIn" data-wow-delay="0.2s">
                    <div class="event_card_image">
                        <img src="<?php echo esc_url( $events_cards_image['url'] ); ?>" alt="">
                    </div>
                    <div class="card_content">
                        <div class="card_main_text">
                            <h2><?php echo $events_cards_name; ?></h2>
                        </div>
                        <div class="card_mini_text"><?php echo $events_cards_intro_text; ?></div>

                        <?php if ( !empty($events_cards_date) ): ?>
                        <div class="card_date_box">
                            <div class="card_date_icon">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/calendar_13923570 1.svg" alt=""></a>
                            </div>
                            <div class="date_date"><?php echo $events_cards_date; ?></div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="bgbtns">
                        <button 
                            class="join-event-btn" 
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            data-name="<?php echo esc_attr($events_cards_name); ?>"
                            data-intro="<?php echo esc_attr($events_cards_intro_text); ?>"
                            data-active="<?php echo esc_attr($events_cards_is_this_event_active_); ?>"
                            data-image="<?php echo esc_url($events_cards_invitation['url']); ?>" 
                        >
                            Join us
                        </button>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Modal Title -->
                            <div class="section_title">
                                <div class="section_title_main" id="modalEventName">Event Title</div>
                                <div class="section_title_mini_text" id="modalEventIntro">Event intro text will appear here.</div>
                            </div>

                            <!-- Left image -->
                            <div class="col-md-6">
                                <div class="modal_lft_image">
                                    <img id="modalEventImage" src="<?php echo get_template_directory_uri(); ?>/images/image 40.png" alt="">
                                </div>
                            </div>

                            <!-- Right content -->
                            <div class="col-md-6">
                                <!-- Form block -->
                                <div class="contact_form" id="eventFormBlock">
                                    <div class="form_title_main"><h2>Fill Form and join Event</h2></div>
                                    <?php echo do_shortcode('[contact-form-7 id="a8aaa93" title="Events Page Form"]'); ?>	
                                </div>

                                <!-- Inactive message -->
                                <div class="inactive_event_msg" id="eventInactiveMsg" style="display:none;">
                                    Sorry!! <br> This event is no longer active.
                                </div>
                            </div>
                            <!-- End right content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS to populate modal content -->
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const buttons = document.querySelectorAll(".join-event-btn");

        buttons.forEach(button => {
            button.addEventListener("click", function () {
                const eventName = this.getAttribute("data-name");
                const eventIntro = this.getAttribute("data-intro");
                const eventActive = (this.getAttribute("data-active") || "").toLowerCase();
                const eventImage = this.getAttribute("data-image");

                // Update modal text
                document.getElementById("modalEventName").textContent = eventName;
                document.getElementById("modalEventIntro").textContent = eventIntro;

                // Update modal image
                const modalImage = document.getElementById("modalEventImage");
                if (modalImage && eventImage) {
                    modalImage.setAttribute("src", eventImage);
                }

                // Optional: Update hidden input for CF7 (if present)
                const eventNameInput = document.getElementById("eventNameInput");
                if (eventNameInput) {
                    eventNameInput.value = eventName;
                }

                // Toggle form visibility
                if (eventActive === "yes" || eventActive === "true" || eventActive === "1") {
                    document.getElementById("eventFormBlock").style.display = "block";
                    document.getElementById("eventInactiveMsg").style.display = "none";
                } else {
                    document.getElementById("eventFormBlock").style.display = "none";
                    document.getElementById("eventInactiveMsg").style.display = "block";
                }
            });
        });
    });
    </script>
</section>
<!-- Event Banner Card Section End -->


<!-- FAQS SECTIOM START -->
<section class="faq_wrapper section-padding">
    <div class="container">

       	<!-- section title start  -->
		<?php $faq_section_title = get_field('faq_section_title');
        if( $faq_section_title ): ?>
	    <div class="section_title  wow fadeIn" data-wow-delay="0.2s">
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