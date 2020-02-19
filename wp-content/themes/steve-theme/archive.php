<?php

get_header();

?>
<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(images/ocean.jpg);"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php the_archive_title(); ?></h1>
    <div class="page-banner__intro">
      <p><?= the_archive_description() ?></p>
    </div>
  </div>
</div>


<div class="container container--narrow page-section">
  <?php
  while (have_posts()) {
    the_post(); ?>
    <div class="post-item">
      <h2 class="headline headline--medium headline--post-title">
        <a href="<?= the_permalink() ?>"><?= the_title() ?></a>
      </h2>
    </div>

    <div class="metabox">
      <p><?= the_author_posts_link() ?> posted on <?= the_time('Y-m-d')?></p>
    </div>

    <div class="generic-content">
      <?= the_excerpt() ?>
      <p><a class="btn btn--blue" href="<?= the_permalink() ?>">Continue reading</a></p>
    </div>

  <?php
  }
  echo paginate_links();
  ?>
</div>
  <?php

  get_footer();

  ?>