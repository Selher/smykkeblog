<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>


        <?php
        // Hent data
        $product_name = get_field('product_name');

        ?>

        <!-- Præsenter data -->
        <h1><?php echo $product_name; ?></h1>


        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>