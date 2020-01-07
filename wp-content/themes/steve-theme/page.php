<?php get_header();

    while(have_posts()) {
        the_post(); ?>
        <h2>This is a Page</h2>
        <h2>
            <?= the_title(); ?>
        </h2>
        <p><?= the_content(); ?></p>
<?php
    get_footer();
}