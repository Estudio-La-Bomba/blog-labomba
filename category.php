<?php get_header();?>

<header class="articles-title">
  <h1>Compartilhar conhecimento faz parte da nossa essência.</h1>
</header>

<main class="articles">

  <?php if (have_posts()): while (have_posts()): the_post();?>

  <div class="articles-single" data-aos="fade-up" data-aos-delay="200">
    <a href="<?php the_permalink();?>"><?php the_post_thumbnail()?></a>

    <a href="<?php the_permalink();?>">
      <h2 class="aticles-single-title">
        <?php the_title();?>
      </h2>
    </a>

    <small class="articles-single-tags"><?php the_tags('', ', ')?></small>

    <p><?php the_excerpt();?></p>
  </div>

  <?php endwhile;else: ?>
  <p><?php esc_html_e('Sorry, no posts matched your criteria.');?></p>
  <?php endif;?>

</main>
</div>

<?php get_footer();?>