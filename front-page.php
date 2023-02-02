<?php get_header(); ?>

<div>
    <div class="w-full h-96 bg-pink">
        <h1 class="">
            <?php
            the_field('title');
            ?>
        </h1>
        <h2>
            <?php
                the_field('subtitle');
            ?>
        </h2>
        <a href="/">
            <?php 
                the_field('buttontext');
            ?>
        </a>
        <a href="/">
            <?php 
                the_field('buttoncontact');
            ?>
        </a>
    </div>
</div>

<?php get_footer(); ?>