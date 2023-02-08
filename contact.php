<?php get_header(); ?>

<?php /* Template Name: contact */ ?>

<div class="flex flex-col justify-center items-center">
    <p class="text-2xl mt-10">Contactez-nous</p>

    <?php echo FrmFormsController::get_form_shortcode(array('id' => 1)); ?>
</div>


<?php get_footer(); ?>
