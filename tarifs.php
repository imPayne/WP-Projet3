<?php
/**
 * Template Name: Tarifs
 */
?>
<?php get_header(); ?>

<div>
    <div class="w-auto h-auto p-6 bg-pink-light flex flex-col items-center" id="section1">
        <h1 class="m-2 mt-14 text-5xl font-nunito tracking-tight font-bold text-white"><?php the_field('titletarifs') ?></h1>
        <div class="my-10 flex flex-row">
                <?php
                if (have_rows('boxtarifs')):
                    while(have_rows('boxtarifs')) : the_row();
                        $title = get_sub_field('title');
                        $infos = get_sub_field('infos');
                        $price = get_sub_field('price');
                        $priceNbr = get_sub_field('nbrprice');
                        //create array here to get all info in then there is just to loop and display each elem in <p>
                        $info1 = get_sub_field('info1');
                        $info2 = get_sub_field('info2');
                        $info3 = get_sub_field('info3');
                        $info4 = get_sub_field('info4');
                    ?>
                <div class="my-4 mx-6 py-6 w-80 h-auto bg-white flex justify-center items-center rounded-lg">
                    <div class="flex flex-col items-center">
                        <h2 class="p-2 text-xl font-nunito tracking-tight font-bold"><?php echo $title ?></h2>
                        <p class="text-md"><?php echo $infos ?></p>
                        <p class="mt-10 text-5xl font-semibold"><?php echo $price ?></p>
                        <p class="mt-6 mb-10 text-5xl font-semibold"><?php echo $priceNbr ?></p>
                        <div>
                            <div class="flex items-center">
                                <P class="text-pink-light font-semibold">N </P>
                                <P class="text-left mt-4 text-lg"><?php echo $info1 ?></P>
                            </div>
                            <div class="flex items-center">
                                <P class="text-pink-light font-semibold">N </P>
                                <P class="text-left mt-4 text-lg"><?php echo $info2 ?></P>
                            </div>
                            <div class="flex items-center">
                                <P class="text-pink-light font-semibold">N </P>
                                <P class="text-left mt-4 text-lg"><?php echo $info3 ?></P>
                            </div>
                            <div class="flex items-center">
                                <P class="text-pink-light font-semibold">N </P>
                                <P class="text-left mt-4 text-lg"><?php echo $info4 ?></P>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
        </div>
    </div>

    <div class="m-10 h-80 w-auto flex flex-col items-center justify-center" id="section2">
        <p class="font-semibold"><?php the_field('description') ?></p>
        <a href="/" class="m-4 mt-10 text-white border-2 border-white bg-pink-light py-3 px-10 rounded-full font-bold">
            <?php
            the_field('buttoncontact');
            ?>
        </a>
    </div>
</div>

<?php get_footer(); ?>
