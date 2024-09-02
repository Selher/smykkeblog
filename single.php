<?php get_header(); ?>
<!-- Denne fil er til single blog-opslag-->
<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php comments_template(); ?>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>