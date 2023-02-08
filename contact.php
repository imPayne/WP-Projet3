<?php get_header(); ?>


<?php /* Template Name: contact */ ?>

<div class="flex flex-col justify-center items-center">
    <h1 class="text-contact text-4xl mt-20">Contact</h1>

    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1 ) ); ?>
</div>



<?php get_footer(); ?>
