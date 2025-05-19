<?php
/*

 * Template Name: Terms and Conditions Template

*/
get_header();
?>


<section class="term_consition section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="term_condition_content">
                <?php the_field('content_full_'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
	get_footer();
?>