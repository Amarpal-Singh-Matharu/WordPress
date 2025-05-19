<?php
/*

 * Template Name: Home Template

*/
get_header();

$contactUs = get_page_by_path('contact-us');
$content_contact_post = get_post($contactUs);
$contactUsID = $content_contact_post->ID;

?>




<!-- main banner slide start  -->
<?php if( have_rows('main_banner_slider') ): ?>
<section class="mainBanner_">
	<div class="mainBannerslider">
		<!-- single slide start  -->
		<?php while( have_rows('main_banner_slider') ): the_row();  
        $main_banner_slider_image =  get_sub_field('main_banner_slider_image');
		$main_banner_slider_sub_title =  get_sub_field('main_banner_slider_sub_title');
		$main_banner_slider_main_title =  get_sub_field('main_banner_slider_main_title');
		$button_one_text =  get_sub_field('button_one_text');
		$button_one_link =  get_sub_field('button_one_link');
		$button_two_text =  get_sub_field('button_two_text');
		$button_two_link =  get_sub_field('button_two_link');
        ?>
		<div class="singleSlide">
			<div class="mainBanner_cards  wow fadeIn" data-wow-delay="0.2s">
				<div class="mainBanner_cards_img"><img src="<?php echo esc_url( $main_banner_slider_image['url'] ); ?>" alt=""></div>
				<div class="mainBanner_cards_content">
					<div class="mainBanner_cards_content_subtitle"><?php echo $main_banner_slider_sub_title; ?></div>
					<div class="mainBanner_cards_content_maintext"><?php echo $main_banner_slider_main_title; ?></div>
					<div class="bgbtns">
						<a href="<?php echo $button_one_link['url']; ?>"><button><img src="<?php echo bloginfo('template_directory'); ?>/images/btnicon.svg" alt=""><?php echo $button_one_text; ?></button></a>
						<a href="<?php echo $button_two_link['url']; ?>"><button><?php echo $button_two_text; ?></button></a>
					</div>
				</div>
			</div>
		</div>
		<!-- single slide end  -->
		<?php endwhile; ?>	
	</div>
</section>
<?php endif; ?>  
<!-- main banner slide end  -->


<!-- quotes start  -->
<?php if( have_rows('quotes_slider') ): ?>
<section class="quotes_ section-padding">

    <img class="quoteimg1  wow fadeIn" data-wow-delay="0.2s" src="<?php echo bloginfo('template_directory'); ?>/images/comma 2.svg" alt="">
    <img class="quoteimg2  wow fadeIn" data-wow-delay="0.2s" src="<?php echo bloginfo('template_directory'); ?>/images/comma 3.svg" alt="">

	<div class="container">
		<div class="row justify-content-center">
			<!-- col start  -->
			<div class="col-md-9">
				<div class="slider">
				    <?php while( have_rows('quotes_slider') ): the_row();  
                    $quotes_slider_text =  get_sub_field('quotes_slider_text');
                    ?>
					<!-- single slide start  -->
					<div class="singleSlide">
						<div class="quotesslide_cards  wow fadeIn" data-wow-delay="0.2s">
							<div class="quotesslide_cards_txt"><?php echo $quotes_slider_text; ?></div>
						</div>
					</div>
					<!-- single slide end  -->
					<?php endwhile; ?>	
				</div>
			</div>
			<!-- col end  -->
		</div>
	</div>
</section>
<?php endif; ?>  
<!-- quotes end  -->


<!-- about us block start  -->
<?php $about_us_section = get_field('about_us_section');
if( $about_us_section ): ?>
<section class="aboutus_block">
	<div class="container">
		<div class="row">
			<!-- col start  -->
			<div class="col-md-6">
				<div class="aboutus_block_img  wow fadeIn" data-wow-delay="0.2s">
					<img src="<?php echo esc_url( $about_us_section['about_us_section_image']['url'] ); ?>" alt="">
				</div>
			</div>
			<!-- col end  -->
			<!-- col start  -->
			<div class="col-md-6">
				<div class="section_title  wow fadeIn" data-wow-delay="0.2s">
					<div class="section_title_sub"><img src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg" alt=""> <?php echo $about_us_section['about_us_section_sub_title']; ?></div>
					<div class="section_title_main"><?php echo $about_us_section['about_us_section_title_main_']; ?></div>
					<div class="section_title_text"><?php echo $about_us_section['about_us_section_content']; ?></div>
					<div class="bgbtns"><a href="<?php echo esc_url( $about_us_section['about_us_section_button_link']['url'] ); ?>"><button><?php echo $about_us_section['about_us_section_button_text']; ?></button></a></div>
				</div>
			</div>
			<!-- col end  -->
		</div>
	</div>
</section>
<?php endif; ?>
<!-- about us block end  -->


<!-- counter block start  -->
<?php if( have_rows('counter_section') ): ?>
<section class="counters_block" id="counters">
    <img class="shapeone" src="<?php echo bloginfo('template_directory'); ?>/images/Group 19843.png" alt="">
    <img class="shapetwo" src="<?php echo bloginfo('template_directory'); ?>/images/Group 19846.png" alt="">
	<div class="container">
		<div class="row align-items-center">
			<!-- col start  -->
			<?php while( have_rows('counter_section') ): the_row();  
            $counter_section_number =  get_sub_field('counter_section_number');
			$counter_section_number_text =  get_sub_field('counter_section_number_text');
			$counter_section_label =  get_sub_field('counter_section_label');
            ?>
			<div class="col-md-3">
				<div class="counter_cards  wow fadeIn" data-wow-delay="0.2s">
					<div class="counter_cards_num"><span class="counter"><?php echo $counter_section_number; ?></span> <?php echo $counter_section_number_text; ?></div>
					<div class="counter_cards_text"><?php echo $counter_section_label; ?></div>
				</div>
			</div>
			<?php endwhile; ?>	
			<!-- col end  -->
		</div>
	</div>
</section>
<?php endif; ?>  
<!-- counter block end  -->



<!-- service block start  -->
<section class="service_block section-padding">
	<div class="container">
		<!-- section title start  -->
		<?php $service_section_title = get_field('service_section_title');
        if( $service_section_title ): ?>
	    <div class="section_title  wow fadeIn" data-wow-delay="0.2s">
			<div class="section_title_sub"><img src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg" alt=""> <?php echo $service_section_title['service_section_title_main']; ?></div>
			<div class="section_title_main"><?php echo $service_section_title['service_section_title_text']; ?></div>
		</div>
		<?php endif; ?>
		<!-- section title end  -->
		<?php if( have_rows('service_cards') ): ?>
		<div class="row">
	    	<?php while( have_rows('service_cards') ): the_row();  
            $service_cards_image =  get_sub_field('service_cards_image');
			$service_cards_icon =  get_sub_field('service_cards_icon');
			$service_cards_title_main =  get_sub_field('service_cards_title_main');
			$service_cards_text_ =  get_sub_field('service_cards_text_');
            ?>
			<!-- col start  -->
			<div class="col-md-4">
				<a href="<?php echo get_home_url();?>/services">
				<div class="service_block_cards  wow fadeIn" data-wow-delay="0.2s">
					<img class="service_block_cards_img" src="<?php echo esc_url( $service_cards_image['url'] ); ?>" alt="">
					<img class="arrowlinks" src="<?php echo bloginfo('template_directory'); ?>/images/Icon12.svg" alt="">
					<div class="service_block_cards_content">
						<div class="service_block_cards_content_icon"><img src="<?php echo esc_url( $service_cards_icon['url'] ); ?>" alt=""></div>
						<div class="service_block_cards_content_title"><?php echo $service_cards_title_main; ?></div>
						<div class="service_block_cards_content_text"><?php echo $service_cards_text_; ?></div>
					</div>
				</div>
				</a>
			</div>
			<!-- col end  -->
			<?php endwhile; ?>	
		</div>
		<?php endif; ?>  
	</div>
</section>
<!-- service block end  -->


<!-- courses block start  -->
<section class="courses_block section-padding">
	<div class="container">
		<div class="row">
		<!-- section title start  -->
		<?php $course_section_title = get_field('course_section_title');
        if( $course_section_title ): ?>
	    <div class="section_title  wow fadeIn" data-wow-delay="0.2s">
			<div class="section_title_sub"><img src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg" alt=""> <?php echo $course_section_title['course_section_title_sub_title']; ?></div>
			<div class="section_title_main"><?php echo $course_section_title['course_section_title_main']; ?></div>
		</div>
		<?php endif; ?>
		<!-- section title end  -->
		</div>
	</div>

	<div class="container">
    <div class="row">
        <div class="col-md-7 course-col">
            <a href="<?php echo get_home_url();?>/courses">
			<div class="courses_cards  wow fadeIn" data-wow-delay="0.2s">
                <div class="courses_cards_image">
				    <?php 
                    $course_one_image = get_field('course_one_image');
                    if( !empty( $course_one_image ) ): ?>
                        <img src="<?php echo esc_url($course_one_image['url']); ?>" alt="<?php echo esc_attr($course_one_image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="courses_cards_content">
                    <div class="courses_cards_content_name"><?php the_field('course_one_name'); ?></div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-2 course-col">
           <a href="<?php echo get_home_url();?>/courses">
		   <div class="courses_cards  wow fadeIn" data-wow-delay="0.2s">
                <div class="courses_cards_image">
				    <?php 
                    $course_two_image = get_field('course_two_image');
                    if( !empty( $course_two_image ) ): ?>
                        <img src="<?php echo esc_url($course_two_image['url']); ?>" alt="<?php echo esc_attr($course_two_image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="courses_cards_content">
                    <div class="courses_cards_content_name"><?php the_field('course_two_name'); ?></div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-2 course-col">
            <a href="<?php echo get_home_url();?>/courses">
		   <div class="courses_cards  wow fadeIn" data-wow-delay="0.2s">
                <div class="courses_cards_image">
				<?php 
                    $course_three_image = get_field('course_three_image');
                    if( !empty( $course_three_image ) ): ?>
                        <img src="<?php echo esc_url($course_three_image['url']); ?>" alt="<?php echo esc_attr($course_three_image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="courses_cards_content">
                    <div class="courses_cards_content_name"><?php the_field('course_three_name'); ?></div>
                </div>
            </div>
            </a>
        </div>
    </div>
</div>
</section>
<!-- courses block end  -->


<!-- events block start  -->
<section class="events_block section-padding">
	<div class="container">

	    <?php $event_section_title = get_field('event_section_title');
        if( $event_section_title ): ?>
		<div class="row align-items-center">
			<!-- col start  -->
			<div class="col-md-8">
		        <!-- section title start  -->
	            <div class="section_title  wow fadeIn" data-wow-delay="0.2s">
		        	<div class="section_title_sub"><img src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg" alt=""> <?php echo $event_section_title['event_section_title_sub_title']; ?></div>
		        	<div class="section_title_main"><?php echo $event_section_title['event_section_title_main']; ?></div>
		        </div>
		        <!-- section title end  -->
			</div>
			<!-- col end  -->
			<!-- col start  -->
			<div class="col-md-4">
				<div class="bgbtns  wow fadeIn" data-wow-delay="0.2s"><a href="<?php echo esc_url( $event_section_title['view_all_button_link']['url'] ); ?>"><button><?php echo $event_section_title['view_all_button_text']; ?></button></a></div>
			</div>
			<!-- col end  -->
		</div>
		<?php endif; ?>

		<?php if( have_rows('events_cards') ): ?>
		<div class="eventslide">
		    <!-- col start  -->
			<?php while( have_rows('events_cards') ): the_row();  
            $events_cards_image =  get_sub_field('events_cards_image');
			$events_cards_label =  get_sub_field('events_cards_label');
			$events_cards_name =  get_sub_field('events_cards_name');
            ?>
		    <div class="singleslide">
		    	<div class="events_cards  wow fadeIn" data-wow-delay="0.2s">
		    		<div class="events_cards_img">
						<img src="<?php echo esc_url( $events_cards_image['url'] ); ?>" alt="">
					    <div class="events_cards_label"><?php echo $events_cards_label; ?></div>
					</div>
					<div class="events_cards_name"><?php echo $events_cards_name; ?></div>
		    	</div>
		    </div>
			<?php endwhile; ?>	
		    <!-- col end  -->
	    </div>
		<?php endif; ?>  

	</div>
</section>
<!-- events block end  -->


<!-- poem block start  -->
<section class="poemblock">
	<div class="container  wow fadeIn" data-wow-delay="0.2s">
		<div class="row align-items-center">

			<!-- col start  -->
			<?php $poem_section_video = get_field('poem_section_video');
            if( $poem_section_video ): ?>
			<div class="col-md-5">
			    <div class="poemblock_img  wow fadeIn" data-wow-delay="0.2s" id="poemBlock">
                  <img id="coverImage" src="<?php echo esc_url( $poem_section_video['poem_section_video_featured_image']['url'] ); ?>" alt="">
                  <img id="playBtn" class="playbtn" src="<?php echo bloginfo('template_directory'); ?>/images/play-button-green-icon 1.png" alt="">
                  <video id="poemVideo" src="<?php echo esc_url( $poem_section_video['poem_section_video_link']['url'] ); ?>" style="display:none;" playsinline></video>
                </div>
			</div>
			<?php endif; ?>
			<!-- col end  -->

			<!-- col start  -->
			<?php if( have_rows('poem_block') ): ?>
			<div class="col-md-7">
		    	<img class="poemblock_bird  wow fadeIn" data-wow-delay="0.2s" src="<?php echo bloginfo('template_directory'); ?>/images/bird.png" alt="">
				<div class="poemslide">
					<!-- single slide start  -->
					<?php while( have_rows('poem_block') ): the_row();  
                    $poem_block_author_name =  get_sub_field('poem_block_author_name');
			        $poem_block_poem_name =  get_sub_field('poem_block_poem_name');
			        $poem_block_poem_lines =  get_sub_field('poem_block_poem_lines');
                    ?>
					<div class="singleSlide">
						<div class="poemblock_cards  wow fadeIn" data-wow-delay="0.2s">
							<div class="poemblock_cards_authorname"><?php echo $poem_block_author_name; ?></div>
							<div class="poemblock_cards_name"><?php echo $poem_block_poem_name; ?></div>
							<div class="poemblock_cards_content">
						    	<?php echo $poem_block_poem_lines; ?>
							</div>
						</div>
					</div>
					<?php endwhile; ?>	
					<!-- single slide end   -->
				</div>
			</div>
			<?php endif; ?>  
			<!-- col end  -->
		</div>
	</div>
</section>
<!-- poem block end  -->


<!-- our teams start  -->
<section class="ourTeams section-padding">
	<div class="container">
		<div class="row">
		<!-- section title start  -->
		<?php $team_section_title = get_field('team_section_title');
        if( $team_section_title ): ?>
	    <div class="section_title  wow fadeIn" data-wow-delay="0.2s">
			<div class="section_title_sub"><img src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg" alt=""> <?php echo $team_section_title['team_section_title_sub_title']; ?></div>
			<div class="section_title_main"><?php echo $team_section_title['team_section_title_main_']; ?></div>
		</div>
		<?php endif; ?>
		<!-- section title end  -->
			 
			<!-- team slide start  -->
			<?php if( have_rows('team_cards') ): ?>
			<div class="teamslide">
				<!-- singleslide start  -->
				<?php while( have_rows('team_cards') ): the_row();  
                $team_cards_profile_image =  get_sub_field('team_cards_profile_image');
			    $team_cards_name =  get_sub_field('team_cards_name');
			    $team_cards_linkedin_link =  get_sub_field('team_cards_linkedin_link');
				$team_form_calling_ids =  get_sub_field('team_form_calling_ids');
                ?>
				<div class="singleSlide">
					<div class="ourTeams_cards  wow fadeIn" data-wow-delay="0.2s">
						<div class="ourTeams_cards_profileimg">
						   <img src="<?php echo esc_url( $team_cards_profile_image['url'] ); ?>" alt="">
						</div>
						<div class="ourTeams_cards_content">
						   <div class="ourTeams_cards_name"><?php echo $team_cards_name; ?></div>
						   <div class="ourTeams_cards_sociallinks">
							  <ul>
							      <a href="<?php echo $team_cards_linkedin_link['url']; ?>" target="blank_"><li><img src="<?php echo bloginfo('template_directory'); ?>/images/linkedin.svg" alt=""></li></a>
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
			<?php $dr_amina_abdeali_introduction_ = get_field('dr_amina_abdeali_introduction_');
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
			<?php $dr_rabab_reshamvala_introduction_ = get_field('dr_rabab_reshamvala_introduction_');
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
			<?php $dr_niyamat_chimthanawla_introduction_ = get_field('dr_niyamat_chimthanawla_introduction_');
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
			<?php $shirin_chimthanawala_introduction__ = get_field('shirin_chimthanawala_introduction__');
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
			<?php $dr_naznin_chimthanawala_introduction = get_field('dr_naznin_chimthanawala_introduction');
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


<!-- testimonials start  -->
<section class="testimonials">
	<div class="container">
		<div class="row">
			<!-- col start  -->
			<div class="col-md-12">

			    <?php $testimonials_img_block = get_field('testimonials_img_block');
                if( $testimonials_img_block ): ?>
				<div class="row">
					<!-- col start  -->
					<div class="col-md-2  wow fadeIn" data-wow-delay="0.2s">
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_one']['url'] ); ?>" alt=""></div>
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_two']['url'] ); ?>" alt=""></div>
					</div>
					<!-- col end  -->
					<!-- col start  -->
					<div class="col-md-2  wow fadeIn" data-wow-delay="0.2s">
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_three']['url'] ); ?>" alt=""></div>
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_four']['url'] ); ?>" alt=""></div>
					</div>
					<!-- col end  -->
					<!-- col start  -->
					<div class="col-md-2  wow fadeIn" data-wow-delay="0.2s">
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_five']['url'] ); ?>" alt=""></div>
					</div>
					<!-- col end  -->
					<!-- col start  -->
					<div class="col-md-2  wow fadeIn" data-wow-delay="0.2s">
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_six']['url'] ); ?>" alt=""></div>
					</div>
					<!-- col end  -->
					<!-- col start  -->
					<div class="col-md-2  wow fadeIn" data-wow-delay="0.2s">
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_seven']['url'] ); ?>" alt=""></div>
					</div>
					<!-- col end  -->
					<!-- col start  -->
					<div class="col-md-2  wow fadeIn" data-wow-delay="0.2s">
						<div class="testimmonials_imgs"><img src="<?php echo esc_url( $testimonials_img_block['testimonials_image_eight']['url'] ); ?>" alt=""></div>
					</div>
					<!-- col end  -->
					<!-- col start  -->
					<div class="col-md-2  wow fadeIn" data-wow-delay="0.2s">
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
		            <?php $testimonials_section_title = get_field('testimonials_section_title');
                    if( $testimonials_section_title ): ?>
	                <div class="section_title  wow fadeIn" data-wow-delay="0.2s">
		            	<div class="section_title_sub"><img src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg" alt=""> <?php echo $testimonials_section_title['testimonials_section_title_sub_title']; ?></div>
		            	<div class="section_title_main"><?php echo $testimonials_section_title['testimonials_section_title_main']; ?></div>
		            </div>
		            <?php endif; ?>
		            <!-- section title end  -->
				</div>
				<!-- col end  -->

				<!-- col start  -->
				<?php if( have_rows('testimonials_slider') ): ?>
				<div class="col-md-12">
					<div class="testimonial_slide">
						<!-- single slide start  -->
						<?php while( have_rows('testimonials_slider') ): the_row();  
                         $testimonials_slider_content =  get_sub_field('testimonials_slider_content');
			             $testimonials_slider_name =  get_sub_field('testimonials_slider_name');
			             $testimonials_slider_type =  get_sub_field('testimonials_slider_type');
                         ?>
						<div class="singleSlide">
							<div class="testimmonials_cards  wow fadeIn" data-wow-delay="0.2s">
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


<!-- blogs start  -->
<section class="blogs">
	<div class="container">

		<!-- section title start  -->
		<div class="section_title  wow fadeIn" data-wow-delay="0.2s">
            <div class="section_title_sub"><img src="<?php echo bloginfo('template_directory'); ?>/images/Star 1.svg" alt=""> Blog</div>
            <div class="section_title_main">Fresh Perspectives</div>
        </div>
        <!-- section title end  -->
		<div class="row">
    <?php
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 3
    );
    $blog_query = new WP_Query($args);
    if ($blog_query->have_posts()):
        $post_count = 0;
        while ($blog_query->have_posts()): $blog_query->the_post();
            $post_count++;
            $image = get_the_post_thumbnail_url(get_the_ID(), 'large');
            $link = get_permalink();
    ?>
        <?php if ($post_count === 1): ?>
        <!-- First Post - Left Column -->
        <div class="col-md-6">
            <a href="<?php echo esc_url($link); ?>" class="blog_card_link">
                <div class="blogs_latestpost  wow fadeIn" data-wow-delay="0.2s">
                    <div class="blogs_latestpost_img">
                        <img src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>">
                    </div>
                    <div class="blog_latestpost_content">
                        <div class="blog_latestpost_content_title"><?php the_title(); ?></div>
                        <div class="blog_latestpost_content_text"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></div>
                    </div>
                </div>
            </a>
        </div>
        <!-- Start Right Column -->
        <div class="col-md-6">
        <?php else: ?>
            <a href="<?php echo esc_url($link); ?>" class="blog_card_link">
                <div class="blogs_latestpost blogs_latestposttwo  wow fadeIn" data-wow-delay="0.2s">
                    <div class="blogs_latestpost_img">
                        <img src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>">
                    </div>
                    <div class="blog_latestpost_content">
                        <div class="blog_latestpost_content_title"><?php the_title(); ?></div>
                        <div class="blog_latestpost_content_text"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></div>
                    </div>
                </div>
            </a>
        <?php endif; ?>
    <?php
        endwhile;
        wp_reset_postdata();
        echo ($post_count > 1) ? '</div>' : ''; // Close .col-md-6 if needed
    endif;
    ?>
</div>

		
	</div>
</section>
<!-- blog end  -->


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
                <div class="contact_form  wow fadeIn" data-wow-delay="0.2s">
                   <?php echo do_shortcode('[contact-form-7 id="65bf146" title="Contact Page Form"]'); ?>	
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
    
    	$(".eventslide").slick({
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

<script>
document.addEventListener('DOMContentLoaded', function () {
  if (window.innerWidth <= 800) {
    const cards = document.querySelectorAll('.service_block_cards');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
        } else {
          entry.target.classList.remove('active');
        }
      });
    }, {
      threshold: 0.5 // Trigger when 50% visible
    });

    cards.forEach(card => observer.observe(card));
  }
});
</script>
