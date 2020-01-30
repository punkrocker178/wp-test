<?php get_header();
while (have_posts()) {
    the_post(); ?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(images/ocean.jpg);"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?= the_title() ?></h1>
            <div class="page-banner__intro">
                <p>Learn how the school of your dreams got started.</p>
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
                <a class="metabox__blog-home-link" href="<?= get_site_url(null, '/blog') ?>">
                    <i class="fa fa-home" aria-hidden="true"></i> Blog Home
                </a>
                <span class="metabox__main"><?= the_author_posts_link() ?> posted on <?= the_time('Y-m-d') ?></span></p>
        </div>
        <div class="generic-content">
            <?php the_content(); ?>
        </div>
    </div>
<?php
    get_footer();
}
