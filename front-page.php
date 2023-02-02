<?php get_header(); ?>

<div class="">
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

<?php get_footer(); ?>