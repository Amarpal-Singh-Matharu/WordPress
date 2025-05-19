<?php
/*
 * Template Name: Portfolio Template
*/
get_header();

$contactUs = get_page_by_path('contact-us');
$content_contact_post = get_post($contactUs);
$contactUsID = $content_contact_post->ID;


?>



<?php $main_banner_section = get_field('main_banner_section');
if( $main_banner_section ): ?>
<!-- Portfolio About User Section Start -->
 <section class="portfolio_card section-padding">
    <div class="portfolio_card_bg"><img src="<?php echo bloginfo('template_directory'); ?>/images/portbg.png" alt=""></div>
    <div class="container">
        <div class="row">
            <!-- col-start -->
            <div class="col-md-4">
                <div class="profile_card_image"><img src="<?php echo esc_url( $main_banner_section['main_banner_section_profile_image']['url'] ); ?>" alt=""></div>
            </div>
            <!-- col ends -->

            <!-- col start -->
            <div class="col-md-8">
                <div class="profile_card_content">
                    <!-- section title start  -->
                    <div class="section_title">  
                        <div class="section_title_main"><?php echo $main_banner_section['main_banner_section_full_name']; ?></div>
                        <div class="section_title_text_small"><p><?php echo $main_banner_section['main_banner_section_sub_text']; ?></p></div>
                        <div class="section_title_mini_text"><p><?php echo $main_banner_section['main_banner_section_intro_paragraph']; ?></p></div>
                    </div>
                    <!-- section title end  -->

                    <div class="button_group d-flex gap-3">
                        <div class="bgbtns"><a href="#contactme"><button>Book appointment</button></a></div>
                        <div class="bgbtns"><a href="#aboutme"><button>Know More About Me</button></a></div>
                    </div>

                </div>
            </div>
            <!-- col ends -->
        </div>
    </div>
 </section>
 <?php endif; ?>
<!-- Portfolio About User Section Ends -->



<!-- Our Therapy Section Start -->
 <section class="our_therapy section-padding">
    <div class="container">

        <?php $art_therapy_block_ = get_field('art_therapy_block_');
        if( $art_therapy_block_ ): ?>
        <div class="row">
            <!-- col start -->
            <div class="col-md-6">
                <!--<div class="therapy_bg1"></div>-->
                <div class="our_therapy_image">
                    <img src="<?php echo esc_url( $art_therapy_block_['art_therapy_block_image']['url'] ); ?>" alt="">
                </div>
            </div>
            <!-- col ends -->

            <!-- col start -->
            <div class="col-md-6">
                <div class="our_therapy_content">
                    <div class="our_therapy_text"><h2><?php echo $art_therapy_block_['art_therapy_block_title']; ?></h2></div>
                    <div class="our_therapy_mini_text"><?php echo $art_therapy_block_['art_therapy_block_text']; ?></div>
                </div>
            </div>
            <!-- col ends -->
        </div>
         <?php endif; ?>

        <?php $art_therapy_block__two = get_field('art_therapy_block__two');
        if( $art_therapy_block__two ): ?>
        <div class="row swaping mt-5">
            <!-- col start -->
            <div class="col-md-6 swapone">
                <div class="our_therapy_content">
                    <div class="our_therapy_text"><h2><?php echo $art_therapy_block__two['art_therapy_block_title']; ?></h2></div>
                    <div class="our_therapy_mini_text"><?php echo $art_therapy_block__two['art_therapy_block_text']; ?></div>
                </div>
            </div>
            <!-- col ends -->
            <!-- col start -->
            <div class="col-md-6 swaptwo">
            <!--<div class="therapy_bg2"></div>-->
                <div class="our_therapy_image">
                    <img src="<?php echo esc_url( $art_therapy_block__two['art_therapy_block_image']['url'] ); ?>" alt="">
                </div>
            </div>
            <!-- col ends -->
        </div>
        <?php endif; ?>
        
        
        <?php $art_therapy_block__three = get_field('art_therapy_block__three');
        if( $art_therapy_block__three ): ?>
        <div class="row mt-5">
            <!-- col start -->
            <div class="col-md-6">
                <!--<div class="therapy_bg1"></div>-->
                <div class="our_therapy_image">
                    <img src="<?php echo esc_url( $art_therapy_block__three['art_therapy_block_image']['url'] ); ?>" alt="">
                </div>
            </div>
            <!-- col ends -->

            <!-- col start -->
            <div class="col-md-6">
                <div class="our_therapy_content">
                    <div class="our_therapy_text"><h2><?php echo $art_therapy_block__three['art_therapy_block_title']; ?></h2></div>
                    <div class="our_therapy_mini_text"><?php echo $art_therapy_block__three['art_therapy_block_text']; ?></div>
                </div>
            </div>
            <!-- col ends -->
        </div>
         <?php endif; ?>


    </div>
 </section>
<!-- Our Therapy Section Ends -->


<!-- Work With ME Section Start -->
 <section class="our_work">
    <div class="container">
        <div class="row">

             <!-- section title start  -->
             <div class="section_title">  
                 <div class="section_title_main">Work With Me</div>
            </div>
            <!-- section title end  -->

            <?php if( have_rows('work_with_me_cards') ): ?>
            <?php while( have_rows('work_with_me_cards') ): the_row();  
            $work_with_me_cards_icons =  get_sub_field('work_with_me_cards_icons');
			$work_with_me_cards_title_main =  get_sub_field('work_with_me_cards_title_main');
			$work_with_me_cards_title_text =  get_sub_field('work_with_me_cards_title_text');
            ?>
            <!-- col start -->
            <div class="col-md-4">
                <div class="our_work_card">
                    <div class="work_card_icon"><img src="<?php echo esc_url( $work_with_me_cards_icons['url'] ); ?>" alt=""></div>
                    <div class="work_card_content">
                        <div class="work_card_text"><h3><?php echo $work_with_me_cards_title_main; ?></h3></div>
                        <div class="work_card_mini_text"><?php echo $work_with_me_cards_title_text; ?></div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>	
            <?php endif; ?>  
            <!-- col ends -->

            <!--<div class="bgbtns mt-3"><a href="#contactme"><button><img src="<?php echo bloginfo('template_directory'); ?>/images/appointment.svg" alt="">Book appointment</button></a></div>-->

        </div>
    </div>
 </section>
<!-- Work With ME Section Ends -->


<!-- Our Programs Section Start -->
 <section class="our_program section-padding">
    <div class="container">
            <!-- section title start  -->
            <div class="section_title">  
                <div class="section_title_main">Events Completed</div>
            </div>
            <!-- section title end  -->

            <?php if( have_rows('events_tabs') ): ?>
            <div class="tab">
              <?php while( have_rows('events_tabs') ): the_row();  
              $events_tab_name =  get_sub_field('events_tab_name');
              ?>
              <button class="programTablinks" onclick="openCity(event, '<?php echo $events_tab_name; ?>')" id="defaultOpen"><?php echo $events_tab_name; ?></button>
              <?php endwhile; ?>	
            </div>
            <?php endif; ?>  
            
            <?php if( have_rows('events_tabs') ): ?>
            <?php while( have_rows('events_tabs') ): the_row();  
            $events_tab_name =  get_sub_field('events_tab_name');
            $events_tabs_brief =  get_sub_field('events_tabs_brief');
            ?>
            <div id="<?php echo $events_tab_name; ?>" class="tabcontent active">
            <div class="row swaping">
              <!-- col start -->
               <div class="col-md-6 swapone">
                <div class="tab_content">
                    <div class="tab_text"><h2><?php echo $events_tab_name; ?></h2></div>
                    <div class="tab_mini_text"><p><?php echo $events_tabs_brief; ?></p></div>
                </div>
               </div>
              <!-- col ends -->

              <!-- col start -->
               <div class="col-md-6 tabimgwidth_ swaptwo">
                <?php if( have_rows('events_tabs_images') ): ?>
                <div class="row">
                    <!-- inner col start  -->
                    <?php while( have_rows('events_tabs_images') ): the_row();  
                    $events_image_block =  get_sub_field('events_image_block');
                    ?>
                    <div class="col-md-6">
                        <div class="tab_image"><img src="<?php echo esc_url( $events_image_block['url'] ); ?>" alt=""></div>
                    </div>
                    <?php endwhile; ?>
                    <!--inner col ends  -->
                </div>
                <?php endif; ?>  
               </div>
              <!-- col ends -->
              </div>	
            </div>
            <?php endwhile; ?>
            <?php endif; ?>  

        </div>

 </section>
<!-- Our Programs Section ends -->


<!-- About Client Protfolio Section Start -->
 <?php $about_me_brief = get_field('about_me_brief');
if( $about_me_brief ): ?>
 <section class="about_client" id="aboutme">
    <div class="container">
        <div class="row">
            <!-- section title start  -->
            <div class="section_title">
                <div class="section_title_bg"><img src="<?php echo bloginfo('template_directory'); ?>/images/bird 6.png" alt=""></div>
                <div class="section_title_main"><?php echo $about_me_brief['about_me_brief_title']; ?></div>
                <div class="section_title_text"><?php echo $about_me_brief['about_me_brief_name']; ?></div>
                <div class="section_title_mini_text"><?php echo $about_me_brief['about_me_brief_content']; ?></div>
            </div>
            <!-- section title end  -->
        </div>
    </div>
 </section>
 <?php endif; ?>
<!-- About Client Protfolio Section Ends -->



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
<section class="contact_section shirinpage_ctblock section-padding" id="contactme">
    <div class="container">
	<img class="birdimg" src="<?php echo bloginfo('template_directory'); ?>/images/bird 5.png" alt="">
        <div class="row align-items-center">
            
            <!-- col start -->
            <?php $contact_section = get_field('contact_section');
            if( $contact_section ): ?>
            <div class="col-md-6">

                <!-- section title start  -->
                <div class="section_title  wow fadeIn" data-wow-delay="0.2s">
                    <div class="section_title_sub"><img src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg" alt=""><?php echo $contact_section['contact_section_sub_title_text']; ?></div>
                    <div class="section_title_main"><?php echo $contact_section['contact_section_title_main']; ?></div>
                    <div class="section_title_mini_text"><?php echo $contact_section['contact_section_conntent']; ?></div>
                </div>
                <!-- section title end  -->
                <ul class=" wow fadeIn" data-wow-delay="0.2s">
                    <li>
                        <div class="ctinfo_icon"><img src="<?php echo bloginfo('template_directory'); ?>/images/phone.svg" alt=""></div>
                        <div class="ctinfo_text">
                            <div class="ctinfo_text_title">Phone Number</div>
                            <div class="ctinfo_text_in">
                                <a href="tel:<?php echo $contact_section['phone_number']; ?>"><?php echo $contact_section['phone_number']; ?></a> <br>
                                <a href="tel:<?php echo $contact_section['phone_number_two']; ?>"><?php echo $contact_section['phone_number_two']; ?></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ctinfo_icon"><img src="<?php echo bloginfo('template_directory'); ?>/images/clock.svg" alt=""></div>
                        <div class="ctinfo_text">
                            <div class="ctinfo_text_title">Business Hours</div>
                            <div class="ctinfo_text_in"><?php echo $contact_section['business_hours']; ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="ctinfo_icon"><img src="<?php echo bloginfo('template_directory'); ?>/images/map-pin.svg" alt=""></div>
                        <div class="ctinfo_text">
                            <div class="ctinfo_text_title">Email Id</div>
                            <div class="ctinfo_text_in">
                                <a href="mailto:<?php echo $contact_section['email_id']; ?>"><?php echo $contact_section['email_id']; ?></a> <br>
                                <a href="mailto:<?php echo $contact_section['email_id_two']; ?>"><?php echo $contact_section['email_id_two']; ?></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ctinfo_icon"><img src="<?php echo bloginfo('template_directory'); ?>/images/map-pin.svg" alt=""></div>
                        <div class="ctinfo_text">
                            <div class="ctinfo_text_title">Address</div>
                            <div class="ctinfo_text_in"><?php echo $contact_section['address']; ?></div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- col end  -->
            <?php endif; ?>

            <!-- col start -->
            <div class="col-md-6">
                <div class="contact_form  wow fadeIn" data-wow-delay="0.2s">
                   <?php echo do_shortcode('[contact-form-7 id="37a0ffa" title="Shirin Chimthanawala Contact Form"]'); ?>	
                </div>
            </div>
            <!-- col end  -->

        </div>
    </div>
</section>
<!-- Contact Us Section Ends -->


<!-- <div class="section-padding"></div> -->

<?php
	get_footer();
?>



<script>
function openCity(evt, cityName) {
  var i, tabcontent, programTablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  programTablinks = document.getElementsByClassName("programTablinks");
  for (i = 0; i < programTablinks.length; i++) {
    programTablinks[i].className = programTablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();
</script>