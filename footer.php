<?php wp_footer(); ?>
</body>



<div class=" text-2xl h-80 bg-gradient-to-r from-pink-light to-pink-strong ">

    <?php
    $image1=get_field('image_footer','options');
    if($image1) {
        echo wp_get_attachment_image( $image1, 'full');
    }
    ?>

    <p class="md:text-sm ml-2 text-white pt-5">
        <?php the_field('description', 'options') ?>
    </p>


    <div class="flex flex-col justify-center items-center">




        <p class="text-white ml-20 text-base">
            <?php the_field('adresse', 'options') ?>
        </p>

        <p class="text-white ml-20 text-base">
            <?php the_field('adresse2', 'options') ?>
        </p>

        <p class="text-white ml-20">
            <?php the_field('license', 'options') ?>
        </p>

    </div>
</div>


</html>