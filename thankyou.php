<?php
/*

 * Template Name: Thank You Template

*/
get_header();
?>

<style>
  header{
    display:none;
  }
</style>

<?php $thank_you_section = get_field('thank_you_section');
if( $thank_you_section ): ?>
<section class="thathank section-padding">
    <div class="container">
        <div class="row">
            <div class="thank_content">
                <div class="thank_heading"><h1><?php echo $thank_you_section['thank_you_section_main_mesg']; ?></h1></div>
                <div class="thank_main_text"><p><?php echo $thank_you_section['thank_you_section_sub_text']; ?></p></div>
                <div class="bgbtns"><a href="<?php echo esc_url( $thank_you_section['thank_you_section_button_link']['url'] ); ?>"><button><?php echo $thank_you_section['thank_you_section_button_text']; ?></button></a></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>



