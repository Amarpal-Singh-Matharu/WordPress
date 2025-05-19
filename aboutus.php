<?php
/*
 * Template Name: About Us Template
*/
get_header();


$homePage = get_page_by_path('home');
$content_home_post = get_post($homePage);
$homePageID = $content_home_post->ID;

$contactUs = get_page_by_path('contact-us');
$content_contact_post = get_post($contactUs);
$contactUsID = $content_contact_post->ID;


?>


<!-- Gallery Main Banner Start -->
<section class="gallery_banner section-padding" style="background:url('<?php the_post_thumbnail_url();?>') !important;  background-position: center !important; background-size: cover !important; @media (max-width: 640px){    background-position: center !important;}">
    <div class="gallery_banner_overlay">
        <div class="gallery_banner_content   wow fadeIn" data-wow-delay="0.2s">
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



<!-- About Positive Wing Wellness Section Start -->
<?php $about_brief = get_field('about_brief');
if( $about_brief ): ?>
<section class="about_profession section-padding">
    <div class="container">
        <div class="row">
            <div class="about_profession_contet   wow fadeIn" data-wow-delay="0.2s">
                <div class="profession_logo"><img src="<?php echo esc_url( $about_brief['about_brief_logo_one']['url'] ); ?>" alt=""> <img class="imgtwo" src="<?php echo esc_url( $about_brief['about_brief_logo_two']['url'] ); ?>" alt=""></div>
                <!-- section title start  -->
                    <div class="section_title">
                        <div class="section_title_main"><?php echo $about_brief['about_brief_title_main']; ?></div>
                        <div class="section_title_mini_text"><?php echo $about_brief['about_brief_content_full']; ?></div>
                    </div>
                <!-- section title end  -->
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- About Positive Wing Wellness Section Start -->



<!-- Our Aim Section Start -->
<section class="our_goal section-padding">
    <div class="container">
        <div class="row">
            <!-- col start -->
            <div class="col-md-6">
                <!-- section title start  -->
                <?php $our_mission_vision_section_title = get_field('our_mission_vision_section_title');
                if( $our_mission_vision_section_title ): ?>
                <div class="section_title   wow fadeIn" data-wow-delay="0.2s">
                    <div class="section_title_sub"><img src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg" alt=""><?php echo $our_mission_vision_section_title['our_mission_vission_section_title_sub_title']; ?></div>
                    <div class="section_title_main"><?php echo $our_mission_vision_section_title['our_mission_vission_section_title_main_']; ?></div>
                    <div class="section_title_mini_text"><?php echo $our_mission_vision_section_title['our_mission_vission_section_title_text']; ?></div>
                </div>
                <?php endif; ?>
                <!-- section title end  -->
            </div>
            <!-- col ends -->

            <!-- col start -->
            <div class="col-md-6">
                <div class="row">
                    <!-- col inner col start -->
                    <?php $vision_card = get_field('vision_card');
                    if( $vision_card ): ?>
                    <div class="col-md-6">
                        <div class="our_gaol_card   wow fadeIn" data-wow-delay="0.2s">
                            <div class="our_goal_card_img"><img src="<?php echo esc_url( $vision_card['vision_card_icon']['url'] ); ?>" alt=""></div>
                            <div class="our_goal_card_content">
                                <div class="goal_card_text"><h2><?php echo $vision_card['vision_card_title']; ?></h2></div>
                                <div class="goal_card_mini_text"><?php echo $vision_card['vision_card_text']; ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <!-- col inner col start -->

                    <!-- col inner col start -->
                    <?php $mission_card = get_field('mission_card');
                    if( $mission_card ): ?>
                    <div class="col-md-6">
                        <div class="our_gaol_card change_card_color   wow fadeIn" data-wow-delay="0.2s">
                            <div class="our_goal_card_img"><img src="<?php echo esc_url( $mission_card['mission_card_icon']['url'] ); ?>" alt=""></div>
                            <div class="our_goal_card_content">
                                <div class="goal_card_text"><h2><?php echo $mission_card['mission_card_title']; ?></h2></div>
                                <div class="goal_card_mini_text"><?php echo $mission_card['mission_card_text']; ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <!-- col inner col start -->

                </div>
            </div>
            <!-- col ends -->
        </div>
    </div>
</section>
<!-- Our Aim Section Ends -->


<!-- Journey Of Client Life Section Start -->
<section class="lifeflow section-padding">
    <div class="container">
        <div class="row">
            <!-- col start -->
            <div class="col-md-6">
                <?php $about_my_life = get_field('about_my_life');
                if( $about_my_life ): ?>
                <div class="lifeflow_image_group wow fadeIn" data-wow-delay="0.2s">
                    <div class="lifeflow_img1"><img src="<?php echo esc_url( $about_my_life['about_my_life_profile_image']['url'] ); ?>" alt=""></div>
                    <div class="lifeflow_img2"><img src="<?php echo esc_url( $about_my_life['about_my_life_happy_moment_image']['url'] ); ?>" alt=""></div>
                </div>
                <?php endif; ?>
            </div>
            <!-- col ends -->

            <!-- col start -->
            <div class="col-md-6">
                <div class="lifeflow_jorny   wow fadeIn" data-wow-delay="0.2s">
                    <!-- section title start  -->
                     <?php $about_my_life = get_field('about_my_life');
                    if( $about_my_life ): ?>
                    <div class="section_title  wow fadeIn" data-wow-delay="0.2s">
                        <div class="section_title_sub"><img src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg" alt=""><?php echo $about_my_life['about_my_life_sub_title']; ?></div>
                        <div class="section_title_main"><?php echo $about_my_life['about_my_life_main_title']; ?></div>
                        <div class="section_title_text force-overflow"><?php echo $about_my_life['about_my_life_small_intro_lines']; ?></div>
                    </div>
                    <?php endif; ?>
                    <!-- section title end  -->

                    <?php if( have_rows('journey_pointers') ): ?>
                    <div class="timeline  wow fadeIn" data-wow-delay="0.2s">
                        <div class="border_lft"></div>
						<?php while( have_rows('journey_pointers') ): the_row();  
                        $journey_pointers_title =  get_sub_field('journey_pointers_title');
			            $journey_pointers_text =  get_sub_field('journey_pointers_text');
                        ?>
                        <div class="timeline_item">
                          <div class="timeline_dot active"></div>
                          <div class="timeline_content">
                            <h4><?php echo $journey_pointers_title; ?></h4>
                            <p><?php echo $journey_pointers_text; ?></p>
                          </div>
                        </div>
                        <?php endwhile; ?>	
                    </div>
                    <?php endif; ?>  

                </div>
            </div>
            <!-- col ends -->
        </div>
    </div>
</section>
<!-- Journey Of Client Life Section Ends -->



<!-- About Us Counter Section Start -->
<section class="about_counter" id="counters">
    <div class="container">
        <div class="row justify-content-center">
            <?php if( have_rows('about_counter_cards_') ): ?>
            <div class="counter_wrapper wow fadeIn" data-wow-delay="0.2s">
			    <?php while( have_rows('about_counter_cards_') ): the_row();  
                $about_counter_cards_number =  get_sub_field('about_counter_cards_number');
			    $about_counter_cards_number_text =  get_sub_field('about_counter_cards_number_text');
			    $about_counter_cards_label =  get_sub_field('about_counter_cards_label');
                ?>
                <div class="counter_box">
                    <h2 class="counter_number"><span class="counter"><?php echo $about_counter_cards_number; ?></span> <?php echo $about_counter_cards_number_text; ?></h2>
                    <p><?php echo $about_counter_cards_label; ?></p>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>  
        </div>
    </div>
</section>
<!-- About Us Counter Section Start -->

<!-- our teams start  -->
<section class="ourTeams section-padding wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
		<!-- section title start  -->
		<?php $team_section_title = get_field('team_section_title', $homePageID);
        if( $team_section_title ): ?>
	    <div class="section_title   wow fadeIn" data-wow-delay="0.2s">
			<div class="section_title_sub"><img src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg" alt=""> <?php echo $team_section_title['team_section_title_sub_title']; ?></div>
			<div class="section_title_main"><?php echo $team_section_title['team_section_title_main_']; ?></div>
		</div>
		<?php endif; ?>
		<!-- section title end  -->
			 
			<!-- team slide start  -->
			<?php if( have_rows('team_cards', $homePageID) ): ?>
			<div class="teamslide wow fadeIn" data-wow-delay="0.2s">
				<!-- singleslide start  -->
				<?php while( have_rows('team_cards', $homePageID) ): the_row();  
                $team_cards_profile_image =  get_sub_field('team_cards_profile_image');
			    $team_cards_name =  get_sub_field('team_cards_name');
			    $team_cards_linkedin_link =  get_sub_field('team_cards_linkedin_link');
				$team_form_calling_ids =  get_sub_field('team_form_calling_ids');
                ?>
				<div class="singleSlide">
					<div class="ourTeams_cards   wow fadeIn" data-wow-delay="0.2s">
						<div class="ourTeams_cards_profileimg">
						   <img src="<?php echo esc_url( $team_cards_profile_image['url'] ); ?>" alt="">
						</div>
						<div class="ourTeams_cards_content">
						   <div class="ourTeams_cards_name"><?php echo $team_cards_name; ?></div>
						   <div class="ourTeams_cards_sociallinks">
							  <ul>
							      <a href=""><li><img src="<?php echo bloginfo('template_directory'); ?>/images/linkedin.svg" alt=""></li></a>
						      </ul>
						   </div>
						</div>
						<div class="bgbtns"><button data-bs-toggle="modal" data-bs-target="#teammodal<?php echo $team_form_calling_ids; ?>">Contact Me</button></div>
					</div>
				</div>
				<?php endwhile; ?>	
				<!-- single slide end  -->
			</div>
			<?php endif; ?>  
			<!-- team slide end  -->

			<!-- Modal -->
			<?php $dr_amina_abdeali_introduction_ = get_field('dr_amina_abdeali_introduction_', $homePageID);
            if( $dr_amina_abdeali_introduction_ ): ?>
			<div class="modal fade" id="teammodalone" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
					      <!-- col start  -->
						  <div class="col-md-7">
							  <div class="teamprofileinfo">
								  <div class="teamprofileinfoname"><?php echo $dr_amina_abdeali_introduction_['full_name']; ?></div>
								  <div class="teamprofileinfotext"> <?php echo $dr_amina_abdeali_introduction_['description']; ?></div>
							  </div>
						  </div>
						  <!-- col end  -->
						   <!-- col start  -->
						   <div class="col-md-5">
						       <div class="contact_form">
							       <?php echo do_shortcode('[contact-form-7 id="6eb99bb" title="Amina Abdeali Contact Form"]'); ?>	
                               </div>
						   </div>
						   <!-- col end  -->
					  </div>
                  </div>
                </div>
              </div>
            </div>
			<?php endif; ?>
			<!-- modal end  -->

			<!-- Modal -->
			<?php $dr_rabab_reshamvala_introduction_ = get_field('dr_rabab_reshamvala_introduction_', $homePageID);
            if( $dr_rabab_reshamvala_introduction_ ): ?>
			<div class="modal fade" id="teammodaltwo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
					      <!-- col start  -->
						  <div class="col-md-7">
							  <div class="teamprofileinfo">
								  <div class="teamprofileinfoname"><?php echo $dr_rabab_reshamvala_introduction_['full_name']; ?></div>
								  <div class="teamprofileinfotext"><?php echo $dr_rabab_reshamvala_introduction_['description']; ?></div>
							  </div>
						  </div>
						  <!-- col end  -->
						   <!-- col start  -->
						   <div class="col-md-5">
						       <div class="contact_form">
							       <?php echo do_shortcode('[contact-form-7 id="cc55cbe" title="Dr. Rabab Reshamvala Contact Form"]'); ?>	
                               </div>
						   </div>
						   <!-- col end  -->
					  </div>
                  </div>
                </div>
              </div>
            </div>
			<?php endif; ?>
			<!-- modal end  -->

			<!-- Modal -->
			<?php $dr_niyamat_chimthanawla_introduction_ = get_field('dr_niyamat_chimthanawla_introduction_', $homePageID);
            if( $dr_niyamat_chimthanawla_introduction_ ): ?>
			<div class="modal fade" id="teammodalthree" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
					      <!-- col start  -->
						  <div class="col-md-7">
						      <div class="teamprofileinfo">
								  <div class="teamprofileinfoname"><?php echo $dr_niyamat_chimthanawla_introduction_['full_name']; ?></div>
								  <div class="teamprofileinfotext"><?php echo $dr_niyamat_chimthanawla_introduction_['description']; ?></div>
							  </div>
						  </div>
						  <!-- col end  -->
						   <!-- col start  -->
						   <div class="col-md-5">
						       <div class="contact_form">
							       <?php echo do_shortcode('[contact-form-7 id="c9fba5f" title="Dr. Niyamat Chimthanawla Contact Form"]'); ?>	
                               </div>
						   </div>
						   <!-- col end  -->
					  </div>
                  </div>
                </div>
              </div>
            </div>
			<?php endif; ?>
			<!-- modal end  -->

			<!-- Modal -->
			<?php $shirin_chimthanawala_introduction__ = get_field('shirin_chimthanawala_introduction__', $homePageID);
            if( $shirin_chimthanawala_introduction__ ): ?>
			<div class="modal fade" id="teammodalfour" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
					      <!-- col start  -->
						  <div class="col-md-7">
							      <div class="teamprofileinfo">
							    	  <div class="teamprofileinfoname"><?php echo $shirin_chimthanawala_introduction__['full_name']; ?></div>
							    	  <div class="teamprofileinfotext"><?php echo $shirin_chimthanawala_introduction__['description']; ?></div>
							      </div>
						  </div>
						  <!-- col end  -->
						   <!-- col start  -->
						   <div class="col-md-5">
						       <div class="contact_form">
							       <?php echo do_shortcode('[contact-form-7 id="37a0ffa" title="Shirin Chimthanawala Contact Form"]'); ?>	
                               </div>
						   </div>
						   <!-- col end  -->
					  </div>
                  </div>
                </div>
              </div>
            </div>
			<?php endif; ?>
			<!-- modal end  -->

			<!-- Modal -->
			<?php $dr_naznin_chimthanawala_introduction = get_field('dr_naznin_chimthanawala_introduction', $homePageID);
            if( $dr_naznin_chimthanawala_introduction ): ?>
			<div class="modal fade" id="teammodalfive" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
					      <!-- col start  -->
						  <div class="col-md-7">
							      <div class="teamprofileinfo">
							    	  <div class="teamprofileinfoname"><?php echo $dr_naznin_chimthanawala_introduction['full_name']; ?></div>
							    	  <div class="teamprofileinfotext"><?php echo $dr_naznin_chimthanawala_introduction['description']; ?></div>
							      </div>
						  </div>
						  <!-- col end  -->
						   <!-- col start  -->
						   <div class="col-md-5">
						       <div class="contact_form">
							       <?php echo do_shortcode('[contact-form-7 id="2933748" title="Dr. Naznin Chimthanawala Contact Form"]'); ?>	
                               </div>
						   </div>
						   <!-- col end  -->
					  </div>
                  </div>
                </div>
              </div>
            </div>
			<?php endif; ?>
			<!-- modal end  -->

		</div>
	</div>
</section>
<!-- our team end  -->



<!-- The Life Story Of Client Section Start -->
<?php $pocket_diary_ = get_field('pocket_diary_');
if( $pocket_diary_ ): ?>
<section class="dairy section-padding">
    <div class="container   wow fadeIn" data-wow-delay="0.2s">
        <div class="row">
            <!-- col start  -->
            <div class="col-md-12">
                <div class="diry_bird_image1"><img src="<?php echo bloginfo('template_directory'); ?>/images/bird 3.png" alt=""></div>
                <div class="diry_bird_image2"><img src="<?php echo bloginfo('template_directory'); ?>/images/bird 4.png" alt=""></div>
                <!-- section title start  -->
                <div class="section_title">
                    <div class="section_title_sub"><img src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg" alt=""><?php echo $pocket_diary_['pocket_diary_sub_title']; ?></div>
                    <div class="section_title_main"><?php echo $pocket_diary_['pocket_diary_main_title']; ?></div>
                    <div class="section_title_text"><p><?php echo $pocket_diary_['pocket_diary_intro']; ?></p></div>
                </div>
                <!-- section title end  -->
                <div class="download_diry">
                    <div class="bgbtns"><a href="<?php echo esc_url( $pocket_diary_['upload_book_']['url'] ); ?>" download><button><img src="<?php echo bloginfo('template_directory'); ?>/images/Layer_11.svg" alt=""> <?php echo $pocket_diary_['pocket_diary_button_text']; ?></button></a></div>
                </div>
            </div>
            <!-- col end  -->
        </div>
    </div>
</section>
<?php endif; ?>
<!-- The Life Story Of Client Section Start -->


<!-- testimonials start  -->
<section class="testimonials">
	<div class="container">
		<div class="row">
			<!-- col start  -->
			<div class="col-md-12">

			    <?php $testimonials_img_block = get_field('testimonials_img_block', $homePageID);
                if( $testimonials_img_block ): ?>
				<div class="row">
					<!-- col start  -->
					<div class="col-md-2  wow fadeIn" data-wow-delay="0.2s">
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_one']['url'] ); ?>" alt=""></div>
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_two']['url'] ); ?>" alt=""></div>
					</div>
					<!-- col end  -->
					<!-- col start  -->
					<div class="col-md-2   wow fadeIn" data-wow-delay="0.2s">
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_three']['url'] ); ?>" alt=""></div>
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_four']['url'] ); ?>" alt=""></div>
					</div>
					<!-- col end  -->
					<!-- col start  -->
					<div class="col-md-2   wow fadeIn" data-wow-delay="0.2s">
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_five']['url'] ); ?>" alt=""></div>
					</div>
					<!-- col end  -->
					<!-- col start  -->
					<div class="col-md-2   wow fadeIn" data-wow-delay="0.2s">
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_six']['url'] ); ?>" alt=""></div>
					</div>
					<!-- col end  -->
					<!-- col start  -->
					<div class="col-md-2   wow fadeIn" data-wow-delay="0.2s">
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_seven']['url'] ); ?>" alt=""></div>
					</div>
					<!-- col end  -->
					<!-- col start  -->
					<div class="col-md-2   wow fadeIn" data-wow-delay="0.2s">
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_eight']['url'] ); ?>" alt=""></div>
					</div>
					<!-- col end  -->
					<!-- col start  -->
					<div class="col-md-2   wow fadeIn" data-wow-delay="0.2s">
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_nine']['url'] ); ?>" alt=""></div>
					</div>
					<!-- col end  -->
					<!-- col start  -->
					<div class="col-md-2  wow fadeIn" data-wow-delay="0.2s">
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_ten']['url'] ); ?>" alt=""></div>
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_eleven']['url'] ); ?>" alt=""></div>
					</div>
					<!-- col end  -->
					 <!-- col start  -->
					<div class="col-md-2  wow fadeIn" data-wow-delay="0.2s">
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_twelve']['url'] ); ?>" alt=""></div>
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_thirteen']['url'] ); ?>" alt=""></div>
					</div>
					<!-- col end  -->
				</div>
				<?php endif; ?>

				<!-- col start  -->
				<div class="col-md-12">
		            <!-- section title start  -->
		            <?php $testimonials_section_title = get_field('testimonials_section_title', $homePageID);
                    if( $testimonials_section_title ): ?>
	                <div class="section_title   wow fadeIn" data-wow-delay="0.2s">
		            	<div class="section_title_sub"><img src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg" alt=""> <?php echo $testimonials_section_title['testimonials_section_title_sub_title']; ?></div>
		            	<div class="section_title_main"><?php echo $testimonials_section_title['testimonials_section_title_main']; ?></div>
		            </div>
		            <?php endif; ?>
		            <!-- section title end  -->
				</div>
				<!-- col end  -->

				<!-- col start  -->
				<?php if( have_rows('testimonials_slider', $homePageID) ): ?>
				<div class="col-md-12">
					<div class="testimonial_slide">
						<!-- single slide start  -->
						<?php while( have_rows('testimonials_slider', $homePageID) ): the_row();  
                         $testimonials_slider_content =  get_sub_field('testimonials_slider_content');
			             $testimonials_slider_name =  get_sub_field('testimonials_slider_name');
			             $testimonials_slider_type =  get_sub_field('testimonials_slider_type');
                         ?>
						<div class="singleSlide">
							<div class="testimmonials_cards   wow fadeIn" data-wow-delay="0.2s">
								<div class="testimonials_cards_text"><?php echo $testimonials_slider_content; ?></div>
								<div class="testimonials_cards_name"><?php echo $testimonials_slider_name; ?></div>
								<div class="testinmonials_cards_type"><?php echo $testimonials_slider_type; ?></div>
							</div>
						</div>
						<?php endwhile; ?>	
						<!-- single slide end  -->
					</div>
				</div>
				<!-- col end  -->
				<?php endif; ?>  

			</div>
			<!-- col end  -->
		</div>
	</div>
</section>
<!-- testimonials end  -->


<!-- FAQS SECTIOM START -->
<section class="faq_wrapper section-padding">
    <div class="container">

       	<!-- section title start  -->
		<?php $faq_section_title = get_field('faq_section_title', $homePageID);
        if( $faq_section_title ): ?>
	    <div class="section_title   wow fadeIn" data-wow-delay="0.2s">
			<div class="section_title_sub"><img src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg" alt=""> <?php echo $faq_section_title['faq_section_title_sub_title']; ?></div>
			<div class="section_title_main"><?php echo $faq_section_title['faq_section_title_main']; ?></div>
		</div>
		<?php endif; ?>
		<!-- section title end  -->

        <div class="row">
            <!-- col start  -->
            <div class="col-md-12">
			    <?php if( have_rows('faq_blocks', $homePageID) ): ?>
                <div class="accordion   wow fadeIn" data-wow-delay="0.2s" id="accordionExample">
				   <?php while( have_rows('faq_blocks', $homePageID) ): the_row();  
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
                <div class="section_title   wow fadeIn" data-wow-delay="0.2s">
                    <div class="section_title_sub"><img src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg" alt=""><?php echo $contact_section_['contact_section_sub_title_text']; ?></div>
                    <div class="section_title_main"><?php echo $contact_section_['contact_section_title_main']; ?></div>
                    <div class="section_title_mini_text"><?php echo $contact_section_['contact_section_conntent']; ?></div>
                </div>
                <!-- section title end  -->
                <ul class="wow fadeIn" data-wow-delay="0.2s">
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
                <div class="contact_form   wow fadeIn" data-wow-delay="0.2s">
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
	 $(".mainBannerslider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        infinite: true,
        autoplay: true,
        dots: true,
        autoplaySpeed: 10000,
        speed: 2000,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

	$(".testimonial_slide").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        infinite: true,
        autoplay: true,
        dots: true,
        autoplaySpeed: 10000,
        speed: 2000,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

	    $(".slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        infinite: true,
        autoplay: true,
        dots: true,
        autoplaySpeed: 10000,
        speed: 2000,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

	$(".poemslide").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        infinite: true,
        autoplay: true,
        dots: true,
        autoplaySpeed: 10000,
        speed: 2000,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

	$(".teamslide").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        infinite: true,
        autoplay: true,
        dots: true,
        autoplaySpeed: 10000,
        speed: 2000,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

	// -------------- navabr sticky --------- 
$(window).scroll(function () {
	var sticky = $('.sticky'),
		scroll = $(window).scrollTop();

	if (scroll >= 1) sticky.addClass('fixed');
	else sticky.removeClass('fixed');
});

</script>

<script>
$(document).ready(function() {
    $('.course-col').hover(function() {
        // Reset all to col-md-2
        $('.course-col').removeClass('col-md-7').addClass('col-md-2');

        // Set hovered one to col-md-7
        $(this).removeClass('col-md-2').addClass('col-md-7');
    }, function() {
        // Optionally reset to default on mouse leave
        $('.course-col').removeClass('col-md-7').addClass('col-md-2');
        $('.course-col:first').removeClass('col-md-2').addClass('col-md-7');
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const playBtn = document.getElementById("playBtn");
    const coverImage = document.getElementById("coverImage");
    const video = document.getElementById("poemVideo");

    playBtn.addEventListener("click", function () {
        coverImage.style.display = "none";
        playBtn.style.display = "none";
        video.style.display = "block";
        video.play();
    });

    video.addEventListener("click", function () {
        if (!video.paused) {
            video.pause();
            playBtn.style.display = "block";
            // Do NOT show coverImage again
        }
    });
});
</script>


<script>
    $(document).ready(function () {
        function startCounter() {
            if ($('#counters').length && $(window).scrollTop() + $(window).height() > $('#counters').offset().top) {
                $('.counter').each(function () {
                    var $this = $(this);
                    if (!$this.hasClass('counted')) {
                        $this.addClass('counted');
                        $this.prop('Counter', 0).animate({
                            Counter: $this.text()
                        }, {
                            duration: 6000,
                            easing: 'swing',
                            step: function (now) {
                                $this.text(Math.ceil(now));
                            }
                        });
                    }
                });
            }
        }

        $(window).on('scroll', startCounter);
        startCounter();
    });
</script>