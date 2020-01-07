<h1><?= bloginfo('name')?></h1>
<p><?= bloginfo('description')?></p>
<?php
    while(have_posts()) {
        the_post(); ?>
        <h2>
            <a href="<?= the_permalink()?>"><?= the_title(); ?></a>
        </h2>
        <p><?= the_content(); ?></p>
<?php
}