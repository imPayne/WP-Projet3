<?php get_header(); ?>

<div id="container">

    <div id="section1">
        <div class="w-full h-96 bg-gradient-to-r from-pink-light to-pink-strong flex flex-col justify-center items-center">
            <h1 class="text-6xl text-white font-nunito tracking-tight">
                <?php
                the_field('title');
                ?>
            </h1>
            <h2 class="mt-4 text-2xl text-white">
                <?php
                    the_field('subtitle');
                ?>
            </h2>
            <div class="flex">
                <a href="/" class="m-4 mt-12 text-pink-light bg-white py-3 px-16 rounded-full font-bold">
                    <?php
                        the_field('buttontext');
                    ?>
                </a>
                <a href="/" class="m-4 mt-12 text-white border-2 border-white bg-pink-light py-3 px-10 rounded-full font-bold">
                    <?php
                        the_field('buttoncontact');
                    ?>
                </a>
            </div>
        </div>
    </div>

    <div id="section2">
        <div id="box1">
            <?php
            $image1 = get_field('image1');
            $size = 'section2ImageSize'; // (thumbnail, medium, large, full or custom size)
            if($image1) {
                echo wp_get_attachment_image( $image1, $size );
            }
            ?>
            <h1 class="mt-4 text-2xl"><?php the_field('title_image1') ?></h1>
            <p><?php the_field('description_image1') ?></p>
        </div>
        <div id="box2">
            <?php
            $image2 = get_field('image2');
            $size = 'section2ImageSize'; // (thumbnail, medium, large, full or custom size)
            if($image2) {
                echo wp_get_attachment_image( $image2, $size );
            }
            ?>
            <h1 class="mt-4 text-2xl"><?php the_field('title_image2') ?></h1>
            <p><?php the_field('description_image2') ?></p>
        </div>
        <div id="box3">
            <?php
            $image3 = get_field('image3');
            $size = 'section2ImageSize'; // (thumbnail, medium, large, full or custom size)
            if($image3) {
                echo wp_get_attachment_image( $image3, $size );
            }
            ?>
            <h1 class="mt-4 text-2xl"><?php the_field('title_image3') ?></h1>
            <p><?php the_field('description_image3') ?></p>
        </div>
    </div>

    <div id="section3">
            <?php while( have_rows('title_secteurs')): the_row();
            $image1 = get_sub_field('secteur_image1');
            $image2 = get_sub_field('secteur_image2');
            $image3 = get_sub_field('secteur_image3');
            $image4 = get_sub_field('secteur_image4');
            $image5 = get_sub_field('secteur_image5');

            if ($image1 && $image2 && $image3 && $image4 && $image5) {
                $size = "section3ImageSize";
                echo wp_get_attachment_image($image1, $size);
                ?>
                <h1 class="mt-4 text-2xl"><?php echo get_sub_field('title_secteur_image1');?></h1>
                <?php echo wp_get_attachment_image($image2, $size); ?>
                <h1 class="mt-4 text-2xl"><?php echo get_sub_field('title_secteur_image2');?></h1>
                <?php echo wp_get_attachment_image($image3, $size); ?>
                <h1 class="mt-4 text-2xl"><?php echo get_sub_field('title_secteur_image3');?></h1>
                <?php echo wp_get_attachment_image($image4, $size); ?>
                <h1 class="mt-4 text-2xl"><?php echo get_sub_field('title_secteur_image4');?></h1>
                <?php echo wp_get_attachment_image($image5, $size); ?>
                <h1 class="mt-4 text-2xl"><?php echo get_sub_field('title_secteur_image5');?></h1>
                <?php } ?>
            <?php endwhile; ?>
    </div>

</div>

<?php get_footer(); ?>