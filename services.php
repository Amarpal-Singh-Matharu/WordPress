<?php
/*
 * Template Name: Services Template
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


<!-- services banner bottom pointers start  -->
<?php if( have_rows('key_pointer_cards') ): ?>
<section class="service_bottom_pointers section-padding">
    <div class="container">
        <div class="row">
            <!-- col start  -->
            <?php while( have_rows('key_pointer_cards') ): the_row();  
            $key_pointer_cards_icon =  get_sub_field('key_pointer_cards_icon');
			$key_pointer_cards_title_ =  get_sub_field('key_pointer_cards_title_');
			$key_pointer_cards_text =  get_sub_field('key_pointer_cards_text');
            ?>
            <div class="col-md-3">
                <div class="serv_bpt_cards  wow fadeIn" data-wow-delay="0.2s">
                    <div class="serv_bpt_cards_icon"><img src="<?php echo esc_url( $key_pointer_cards_icon['url'] ); ?>"
                            alt=""></div>
                    <div class="serv_bpt_cards_content">
                        <div class="serv_bpt_cards_content_title">
                            <?php echo $key_pointer_cards_title_; ?>
                        </div>
                        <div class="serv_bpt_cadrs_content_text">
                            <?php echo $key_pointer_cards_text; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <!-- col end  -->
        </div>
    </div>
</section>
<?php endif; ?>
<!-- service banner bottom pointer end  -->


<!-- servcice block start  -->
<section class="serviceblock section-padding">
    <div class="container">

        <?php $service_title_block = get_field('service_title_block');
        if( $service_title_block ): ?>
        <div class="row">
            <!-- col start  -->
            <div class="col-md-6">
                <!-- section title start  -->
                <div class="section_title  wow fadeIn" data-wow-delay="0.2s">
                    <div class="section_title_main">
                        <?php echo $service_title_block['service_title_block_main_title']; ?>
                    </div>
                </div>
                <!-- section title end  -->
            </div>
            <!-- col end  -->
            <!-- col start  -->
            <div class="col-md-6">
                <!-- section title start  -->
                <div class="section_title  wow fadeIn" data-wow-delay="0.2s">
                    <div class="section_title_mini_text">
                        <?php echo $service_title_block['service_title_block_content']; ?>
                    </div>
                </div>
                <!-- section title end  -->
            </div>
            <!-- col end  -->
        </div>
        <?php endif; ?>
        
        <?php if( have_rows('service_cards') ): ?>
        <div class="row">
            <?php while( have_rows('service_cards') ): the_row();  
            $service_cards_names = get_sub_field('service_cards_names');
            $service_cards_short_intro = get_sub_field('service_cards_short_intro');
            $service_cards_sub_title = get_sub_field('service_cards_sub_title');
            $sub_heading_content_box_two_keep_one_line_content = get_sub_field('sub_heading_content_box_two_keep_one_line_content');
            $service_cards_button_text = get_sub_field('service_cards_button_text');
            $service_cards_sub_title_two = get_sub_field('service_cards_sub_title_two');
            $service_cards_image = get_sub_field('service_cards_image');
        ?>
            <div class="col-md-12">
                <div class="serviceblock_cards  wow fadeIn" data-wow-delay="0.2s">
                    <img class="service_block_img" src="<?php echo esc_url( $service_cards_image['url'] ); ?>" alt="">
                    <div class="serviceblock_cards_title">
                        <?php echo $service_cards_names; ?>
                    </div>
                    <div class="service_blocks_cards_content">
                        <div class="service_blocks_cards-content_txt">
                            <?php echo $service_cards_short_intro; ?>
                        </div>
                        <div class="service_blocks_cards_content_subtitle">
                            <?php echo $service_cards_sub_title; ?>
                        </div>

                        <?php if( have_rows('service_cards_pointers') ): ?>
                        <ul>
                            <?php while( have_rows('service_cards_pointers') ): the_row(); ?>
                            <li><span></span>
                                <?php echo get_sub_field('service_cards_pointer_text'); ?>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>

                        <div class="service_blocks_cards_content_subtitle">
                            <?php echo $service_cards_sub_title_two; ?>
                        </div>

                        <?php if( have_rows('service_cards_pointers_two') ): ?>
                        <ul>
                            <?php while( have_rows('service_cards_pointers_two') ): the_row(); ?>
                            <li><span></span>
                                <?php echo get_sub_field('service_cards_pointer_text'); ?>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>

                        <div class="contentboc-two">
                            <?php echo $sub_heading_content_box_two_keep_one_line_content; ?>
                        </div>

                        <div class="bgbtns">
                            <button data-bs-toggle="modal" data-bs-target="#serviceForm" class="open-service-modal"
                                data-service="<?php echo esc_attr($service_cards_names); ?>">
                                <?php echo $service_cards_button_text; ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <!-- Modal HTML -->
        <div class="modal fade popup_" id="serviceForm" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="contact_form">
                            <div class="subtitleform mb-4">
                                <span id="serviceNamePlaceholder"></span>
                            </div>
                            <?php echo do_shortcode('[contact-form-7 id="d841d96" title="Service Page Form"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript to autofill service name -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const buttons = document.querySelectorAll('.open-service-modal');
                const serviceNamePlaceholder = document.getElementById('serviceNamePlaceholder');

                buttons.forEach(function (button) {
                    button.addEventListener('click', function () {
                        const serviceName = this.getAttribute('data-service');

                        // Set text above form
                        if (serviceNamePlaceholder) {
                            serviceNamePlaceholder.textContent = serviceName;
                        }

                        // Wait briefly to ensure form is rendered
                        setTimeout(() => {
                            const serviceInput = document.getElementById('service-name-field');
                            if (serviceInput) {
                                serviceInput.value = serviceName;
                            }
                        }, 300); // Wait for form to load
                    });
                });
            });
        </script>


    </div>
</section>
<!-- service block end  -->




<!-- FAQS SECTIOM START -->
<section class="faq_wrapper section-padding">
    <div class="container">

        <!-- section title start  -->
        <?php $faq_section_title = get_field('faq_section_title');
        if( $faq_section_title ): ?>
        <div class="section_title  wow fadeIn" data-wow-delay="0.2s">
            <div class="section_title_sub"><img src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg"
                    alt="">
                <?php echo $faq_section_title['faq_section_title_sub_title']; ?>
            </div>
            <div class="section_title_main">
                <?php echo $faq_section_title['faq_section_title_main']; ?>
            </div>
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
                            <button class="accordion-button <?php echo $write_word_collapsed_; ?>" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq<?php echo $faq_blocks_number; ?>"
                                aria-expanded="true" aria-controls="faq<?php echo $faq_blocks_number; ?>">
                                <?php echo $faq_blocks_questions; ?>
                            </button>
                        </h2>
                        <div id="faq<?php echo $faq_blocks_number; ?>"
                            class="accordion-collapse collapse <?php echo $write_word_show_; ?>"
                            data-bs-parent="#accordionExample">
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
                <ul>
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
document.addEventListener('DOMContentLoaded', function () {
  if (window.innerWidth <= 800) {
    const cards = document.querySelectorAll('.serviceblock_cards');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
        } else {
          entry.target.classList.remove('active');
        }
      });
    }, {
      threshold: 0.5
    });

    cards.forEach(card => observer.observe(card));
  }
});
</script>
