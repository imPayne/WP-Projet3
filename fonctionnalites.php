<?php get_header(); ?>

<?php /* Template Name: fonctionnalites */ ?>

<div class=" h-60 bg-gradient-to-r from-pink-light to-pink-strong flex flex-col justify-center items-center">
    <h1 class="text-white text-4xl mt-20"><?php the_field('titre'); ?></h1>
    <h2 class="text-white text-4xl mt-15"><?php the_field('sous-titre'); ?></h2>


</div>


<div>
<?php
    $i = 0;
    $classe = "flex-row-reverse";
    if( have_rows('repeteur') ):?>
        <ul class="slides">
    <?php while( have_rows('repeteur') ) : the_row();

    // Load sub field value.
        $image1=get_sub_field('image1');
        $size = 'section2ImageSize'; // (thumbnail, medium, large, full or custom size)

    ?>
            <div>
                <div class="flex items-center justify-center space-x-20 space-y-32  <?php if ($i % 2 === 0){echo $classe;} ?>">
                    <div class="">
                        <?php if ($image1) {
                            echo wp_get_attachment_image($image1, $size);
                            }
                        ?>
                    </div>
                    <?php $sub_value2 = get_sub_field('titre2');
                    $sub_value3 = get_sub_field('editeur');
                    // Do something...

                    ?>
                    <div>
                        <li class="flex flex-col mr-4 mb-20 ">
                            <p class="text-3xl"><?php the_sub_field('titre2'); ?></p>
                            <p><?php the_sub_field('editeur'); ?></p>

                        </li>
                    </div>
                </div>
            </div>
                <?php $i = $i+1;  endwhile ?>
        </ul>
    <?php endif ?>
</div>








<?php get_footer(); ?>