<?php get_header();?>

<header class="articles-title">
  <h1>Compartilhar conhecimento faz parte da nossa essência.</h1>
</header>

<main class="articles">

  <?php
    $args = array('category' => 'blog');
    $query = new WP_Query($args);

    if ($query->have_posts()) { while ($query->have_posts()) {$query->the_post();
  ?>

  <div class="articles-single">
    <a href="<?php the_permalink();?>"><?php the_post_thumbnail()?></a>

    <a href="<?php the_permalink();?>">
      <h2 class="aticles-single-title">
        <?php the_title();?>
      </h2>
    </a>

    <small class="articles-single-tags"><?php the_tags('', ', ')?></small>

    <p><?php the_excerpt();?></p>
  </div>

  <?php
    }}
    wp_reset_postdata();
  ?>

  </main>
</div>

<?php get_footer();?>
