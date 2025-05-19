<?php
/*
 * Template Name: Course Template
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
                <h1>
                    <?php the_field('page_title'); ?>
                </h1>
            </div>
            <div class="gallery_banner_subtitle">
                <?php the_field('page_intro'); ?>
            </div>
        </div>
    </div>
</section>
<!-- Gallery Main Banner Ends -->


<!-- Course Tab Section Start -->
<section class="course_tab section-padding">
    <div class="container">
        <div class="row">

            <div class="tab  wow fadeIn" data-wow-delay="0.2s">
                <button class="tablinks active" onclick="openCity(event, 'London')" id="defaultOpen">Short
                    Courses</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Diploma Courses</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Workshops </button>
            </div>


            <div id="London" class="tabcontent">
                <?php if( have_rows('course_cards') ): ?>
                <div class="row">
                    <?php while( have_rows('course_cards') ): the_row();  
                    $course_cards_image =  get_sub_field('course_cards_image');
		        	$course_cards_name =  get_sub_field('course_cards_name');
		        	$course_cards_intro =  get_sub_field('course_cards_intro');
                    $course_cards_button_text =  get_sub_field('course_cards_button_text');
                    ?>
                    <!-- col start   -->
                    <div class="col-md-12">
                        <div class="course_tab_card  wow fadeIn" data-wow-delay="0.2s">
                            <div class="tab_card_image"><img src="<?php echo esc_url( $course_cards_image['url'] ); ?>"
                                    alt=""></div>
                            <div class="tab_card_content">
                                <div class="tab_content_text">
                                    <h2>
                                        <?php echo $course_cards_name; ?>
                                    </h2>
                                </div>
                                <div class="tab_content_mini_text force-overflow ">
                                    <?php echo $course_cards_intro; ?>
                                </div>

                                <?php if( have_rows('course_cards_labels') ): ?>
                                <div class="tab_content_list">
                                    <?php while( have_rows('course_cards_labels') ): the_row();  
                            $course_cards_labels_icon =  get_sub_field('course_cards_labels_icon');
                            $course_cards_labels_text =  get_sub_field('course_cards_labels_text');
                            $course_cards_labels_two =  get_sub_field('course_cards_labels_two');
                            ?>
                                    <div class="tab_content_list_image"><img
                                            src="<?php echo esc_url( $course_cards_labels_icon['url'] ); ?>" alt="">
                                        <?php echo $course_cards_labels_text; ?> <span>
                                            <?php echo $course_cards_labels_two; ?>
                                        </span>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                                <?php endif; ?>
                                <div class="bgbtns">
                                    <button data-bs-toggle="modal" data-bs-target="#courseform"
                                        class="open-course-modal"
                                        data-course="<?php echo esc_attr($course_cards_name); ?>">
                                        <?php echo $course_cards_button_text; ?>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- col end   -->
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>

                <!-- Modal HTML -->
                <div class="modal fade popup_" id="courseform" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="contact_form">
                                    <?php echo do_shortcode('[contact-form-7 id="7cbda40" title="Short Course Form"]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="Paris" class="tabcontent">
                <?php $diploma_course_card = get_field('diploma_course_card');
                if( $diploma_course_card ): ?>
                <div class="course_info_tab  wow fadeIn" data-wow-delay="0.2s">
                    <div class="course_info_tab_bg"><img
                            src="<?php echo esc_url( $diploma_course_card['diploma_course_card_image']['url'] ); ?>"
                            alt=""></div>
                    <div class="course_info_box">
                        <div class="info_box_text">
                            <h4>
                                <?php echo $diploma_course_card['diploma_course_card_name']; ?>
                            </h4>
                        </div>
                        <div class="info_box_mini_text">
                            <?php echo $diploma_course_card['diploma_course_card_one_liner']; ?>
                        </div>
                        <div class="tab_content_list_image"><img
                                src="<?php echo bloginfo('template_directory'); ?>/images/duration_white.svg"
                                alt="">Duration <span>
                                <?php echo $diploma_course_card['duration']; ?>
                            </span></div>
                    </div>
                    <div class="courinfo_brief">
                        <?php echo $diploma_course_card['diploma_course_card_brief']; ?>
                        <div class="button_group d-flex gap-3" bis_skin_checked="1">
                            <div class="bgbtns" bis_skin_checked="1"><a href="#"><button  data-bs-toggle="modal" data-bs-target="#diploameform">Learn More</button></a></div>
<div class="bgbtns" bis_skin_checked="1">
  <a href="<?php echo esc_url( $diploma_course_card['pdf_link']['url'] ); ?>" download>
    <button>Download PDF</button>
  </a>
</div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                
                <!-- Modal HTML -->
                <div class="modal fade popup_" id="diploameform" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="contact_form">
                                    <?php echo do_shortcode('[contact-form-7 id="686572a" title="Diploma Course Form"]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div id="Tokyo" class="tabcontent">
                <?php if( have_rows('personality_development_course') ): ?>
                <div class="row">
                    <?php while( have_rows('personality_development_course') ): the_row();  
            $course_cards_image =  get_sub_field('course_cards_image');
            $course_cards_name =  get_sub_field('course_cards_name');
            $course_cards_intro =  get_sub_field('course_cards_intro');
            $course_cards_button_text =  get_sub_field('course_cards_button_text');
        ?>
                    <!-- col start -->
                    <div class="col-md-12">
                        <div class="course_tab_card  wow fadeIn" data-wow-delay="0.2s">
                            <div class="tab_card_image"><img src="<?php echo esc_url( $course_cards_image['url'] ); ?>"
                                    alt=""></div>
                            <div class="tab_card_content">
                                <div class="tab_content_text">
                                    <h2>
                                        <?php echo $course_cards_name; ?>
                                    </h2>
                                </div>
                                <div class="tab_content_mini_text force-overflow ">
                                    <?php echo $course_cards_intro; ?>
                                </div>

                                <?php if( have_rows('course_cards_labels') ): ?>
                                <div class="tab_content_list">
                                    <?php while( have_rows('course_cards_labels') ): the_row();  
                        $course_cards_labels_icon =  get_sub_field('course_cards_labels_icon');
                        $course_cards_labels_text =  get_sub_field('course_cards_labels_text');
                        $course_cards_labels_two =  get_sub_field('course_cards_labels_two');
                        ?>
                                    <div class="tab_content_list_image"><img
                                            src="<?php echo esc_url( $course_cards_labels_icon['url'] ); ?>" alt="">
                                        <?php echo $course_cards_labels_text; ?> <span>
                                            <?php echo $course_cards_labels_two; ?>
                                        </span>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                                <?php endif; ?>

                                <div class="bgbtns">
                                    <button data-bs-toggle="modal" data-bs-target="#courseformtwo"
                                        class="open-course-modal"
                                        data-course="<?php echo esc_attr($course_cards_name); ?>">
                                        <?php echo $course_cards_button_text; ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>

                <!-- Modal for Tokyo Tab -->
                <div class="modal fade popup_" id="courseformtwo" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="contact_form">
                                    <!-- The Contact Form 7 -->
                                    <?php echo do_shortcode('[contact-form-7 id="5c30d1f" title="Personality Development Course Form"]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
</section>

<!-- Course Tab Section Start -->



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
                <div class="section_title  wow fadeIn" data-wow-delay="0.2s">
                    <div class="section_title_sub"><img
                            src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg" alt="">
                        <?php echo $contact_section_['contact_section_sub_title_text']; ?>
                    </div>
                    <div class="section_title_main">
                        <?php echo $contact_section_['contact_section_title_main']; ?>
                    </div>
                    <div class="section_title_mini_text">
                        <?php echo $contact_section_['contact_section_conntent']; ?>
                    </div>
                </div>
                <!-- section title end  -->
                <ul class=" wow fadeIn" data-wow-delay="0.2s"">
                    <li>
                        <div class="ctinfo_icon"><img
                                src="<?php echo bloginfo('template_directory'); ?>/images/phone.svg" alt=""></div>
                        <div class="ctinfo_text">
                            <div class="ctinfo_text_title">Phone Number</div>
                            <div class="ctinfo_text_in">
                                <a href="tel:<?php echo $contact_section_['phone_number']; ?>">
                                    <?php echo $contact_section_['phone_number']; ?>
                                </a> <br>
                                <a href="tel:<?php echo $contact_section_['phone_number_two']; ?>">
                                    <?php echo $contact_section_['phone_number_two']; ?>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ctinfo_icon"><img
                                src="<?php echo bloginfo('template_directory'); ?>/images/clock.svg" alt=""></div>
                        <div class="ctinfo_text">
                            <div class="ctinfo_text_title">Business Hours</div>
                            <div class="ctinfo_text_in">
                                <?php echo $contact_section_['business_hours']; ?>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ctinfo_icon"><img
                                src="<?php echo bloginfo('template_directory'); ?>/images/map-pin.svg" alt=""></div>
                        <div class="ctinfo_text">
                            <div class="ctinfo_text_title">Email Id</div>
                            <div class="ctinfo_text_in">
                                <a href="mailto:<?php echo $contact_section_['email_id']; ?>">
                                    <?php echo $contact_section_['email_id']; ?>
                                </a> <br>
                                <a href="mailto:<?php echo $contact_section_['email_id_two']; ?>">
                                    <?php echo $contact_section_['email_id_two']; ?>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ctinfo_icon"><img
                                src="<?php echo bloginfo('template_directory'); ?>/images/map-pin.svg" alt=""></div>
                        <div class="ctinfo_text">
                            <div class="ctinfo_text_title">Address</div>
                            <div class="ctinfo_text_in">
                                <?php echo $contact_section_['address']; ?>
                            </div>
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

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const courseButtons = document.querySelectorAll('.open-course-modal');
        const courseNamePlaceholder = document.getElementById('courseNamePlaceholder');

        courseButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                const courseName = this.getAttribute('data-course');

                // Set modal span
                if (courseNamePlaceholder) {
                    courseNamePlaceholder.textContent = courseName;
                }

                // Set form field after delay to ensure it's loaded
                setTimeout(() => {
                    const courseInput = document.getElementById('course-name-field');
                    if (courseInput) {
                        courseInput.value = courseName;
                    }
                }, 300);
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const buttons = document.querySelectorAll('.open-course-modal');

        buttons.forEach(function (button) {
            button.addEventListener('click', function () {
                const courseName = this.getAttribute('data-course');

                // Update the modal title (if you have a title span)
                const courseNamePlaceholder = document.getElementById('courseNamePlaceholder');
                const courseNameField = document.getElementById('course-personalitycourse-field'); // Assuming you have a field for the course name in your form

                if (courseNamePlaceholder) {
                    courseNamePlaceholder.textContent = courseName; // Set the course name in the modal placeholder
                }

                if (courseNameField) {
                    courseNameField.value = courseName; // Set the course name in the input field of the form
                }
            });
        });
    });
</script>