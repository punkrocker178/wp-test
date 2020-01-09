<?php get_header();
  $parentID = wp_get_post_parent_id(get_the_ID());

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

    <?php
    if ($parentID) {
    ?>
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?= get_permalink($parentID)?>">
            <i class="fa fa-home" aria-hidden="true"></i> Back to <?= get_the_title($parentID) ?>
          </a>
          <span class="metabox__main"><?= the_title() ?></span></p>
      </div>
    <?php
    }
    ?>

    <?php 
      $pagesArray = get_pages(array(
        'child_of' => get_the_ID(),
      ));
      if ($parentID || $pagesArray) {
    ?>
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?= get_permalink($parentID) ?>"><?= get_the_title($parentID) ?></a></h2>
      <ul class="min-list">
      <?php 
        if ($parentID) {
          $childrenOf = $parentID;
        } else {
          $childrenOf = get_the_ID();
        }
        wp_list_pages(array(
          'title_li' => NULL,
          'child_of' => $childrenOf
        ));
      ?>
      </ul>
    </div>
    <?php } ?>

    <div class="generic-content">
      <?= the_content() ?>
    </div>

  </div>
<?php
}
get_footer();
