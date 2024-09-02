<!-- Denne fil er til blog-opslagenes kommentare -->

<?php if ( have_comments() ) : ?>
    <h3><?php comments_number(); ?></h3>
    <ol>
        <?php wp_list_comments(); ?>
    </ol>
<?php endif; ?>
<?php comment_form(); ?>