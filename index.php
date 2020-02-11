<?php get_header();?>

<header>
  <h1>Compartilhar conhecimento faz parte da nossa essência.</h1>

  <?php
$args = array('showposts' => 1);
$query = new WP_Query($args);

if ($query->have_posts()) {while ($query->have_posts()) {$query->the_post();
    ?>

  <a href="<?php the_permalink();?>" class="help">
    <span>artigo</span>
    <div class="arrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="23.336" height="34.989" viewBox="0 0 23.336 34.989">
        <defs>
          <style>
          .arrow {
            fill: #e1e31c;
          }
          </style>
        </defs>
        <path class="arrow"
          d="M34.136,30.188a1.588,1.588,0,0,0-2.236-.012l-7.4,7.377V9.443a1.58,1.58,0,0,0-3.16,0v28.11l-7.4-7.389a1.6,1.6,0,0,0-2.236.012,1.573,1.573,0,0,0,.012,2.224L21.8,42.414h0a1.774,1.774,0,0,0,.5.328,1.508,1.508,0,0,0,.608.122,1.584,1.584,0,0,0,1.106-.45L34.1,32.4A1.548,1.548,0,0,0,34.136,30.188Z"
          transform="translate(-11.247 -7.875)" />
      </svg>
    </div>
  </a>

  <?php
}}
wp_reset_postdata();
?>
</header>
</div>

<?php get_footer();?>