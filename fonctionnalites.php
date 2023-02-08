<?php get_header(); ?>

<?php /* Template Name: fonctionnalites */ ?>

<div class=" bg-gradient-to-r from-pink-light to-pink-strong flex flex-col justify-center items-center">
    <h1 class="text-white text-4xl mt-20"><?php the_field('titre'); ?></h1>
    <h2 class="text-white text-4xl mt-20"><?php the_field('sous-titre'); ?></h2>


</div>


<div>
<?php
    if( have_rows('repeteur') ):?>
        <ul class="slides">
    // Loop through rows.
    <?php while( have_rows('repeteur') ) : the_row();

    // Load sub field value.
        $image1=get_field('image1');
        if($image1) {
            echo wp_get_attachment_image( $image1);
        }
        $sub_value2 = get_sub_field('titre2');
        $sub_value3 = get_sub_field('editeur');
    // Do something...

        ?>

        <li>
            <?php echo wp_get_attachment_image( $image1 ); ?>
            <p><?php the_sub_field('titre2'); ?></p>
            <p><?php the_sub_field('editeur'); ?></p>

        </li>
            <?php endwhile ?>
        </ul>
    <?php endif ?>

    // End loop.

</div>






<?php get_footer(); ?>