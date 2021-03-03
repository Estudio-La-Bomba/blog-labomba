<?php get_header();?>

<?php if (have_posts()): while (have_posts()): the_post();?>

<article>
  <small class="article-date"><?php the_date()?> - </small>
  <small class="article-tags"><?php the_tags('', ', ')?></small>

  <h2 class="article-title">
    <?php the_title();?>
  </h2>

  <p class="article-subtitle"><?php the_field('article_subtitle')?></p>

  <div class="article-content">
    <?php the_content();?>
  </div>
</article>
<hr />

<div class="author-social">
  <div class="author">
    <?php echo do_shortcode('[avatar]'); ?>

    <div>
      <h4><?php the_author(); ?></h4>

      <p>
        <?php the_author_meta('description'); ?>
      </p>

      <ul class="social">
        <?php
	    	if(get_the_author_meta('instagram') ): ?>
        <a class="author-instagram" target="_blank" rel="noopener noreferrer"
          href="<?php echo get_the_author_meta('instagram'); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 35.885 35.877">
            <defs>
              <style>
              .yellow {
                fill: #e1e31c;
              }
              </style>
            </defs>
            <path class="yellow"
              d="M17.941,10.978a9.2,9.2,0,1,0,9.2,9.2A9.184,9.184,0,0,0,17.941,10.978Zm0,15.179a5.98,5.98,0,1,1,5.98-5.98,5.991,5.991,0,0,1-5.98,5.98ZM29.662,10.6a2.146,2.146,0,1,1-2.146-2.146A2.141,2.141,0,0,1,29.662,10.6Zm6.092,2.178c-.136-2.874-.793-5.42-2.9-7.517s-4.643-2.754-7.517-2.9c-2.962-.168-11.84-.168-14.8,0-2.866.136-5.412.793-7.517,2.89S.265,9.9.121,12.771c-.168,2.962-.168,11.84,0,14.8.136,2.874.793,5.42,2.9,7.517s4.643,2.754,7.517,2.9c2.962.168,11.84.168,14.8,0,2.874-.136,5.42-.793,7.517-2.9s2.754-4.643,2.9-7.517c.168-2.962.168-11.832,0-14.794ZM31.927,30.752a6.054,6.054,0,0,1-3.41,3.41c-2.362.937-7.966.721-10.575.721s-8.222.208-10.575-.721a6.054,6.054,0,0,1-3.41-3.41c-.937-2.362-.721-7.966-.721-10.575S3.027,11.955,3.956,9.6a6.054,6.054,0,0,1,3.41-3.41c2.362-.937,7.966-.721,10.575-.721s8.222-.208,10.575.721a6.054,6.054,0,0,1,3.41,3.41c.937,2.362.721,7.966.721,10.575S32.864,28.4,31.927,30.752Z"
              transform="translate(0.005 -2.238)" />
          </svg>
        </a>
        <?php endif; ?>

        <?php
	      if(get_the_author_meta('linkedin') ): ?>
        <a class="author-linkedin" target="_blank" rel="noopener noreferrer"
          href="<?php echo get_the_author_meta('linkedin'); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 35.865 35.865">
            <defs>
              <style>
              .yellow {
                fill: #e1e31c;
              }
              </style>
            </defs>
            <path class="yellow"
              d="M33.3,2.25H2.554A2.573,2.573,0,0,0,0,4.836V35.529a2.573,2.573,0,0,0,2.554,2.586H33.3a2.58,2.58,0,0,0,2.562-2.586V4.836A2.58,2.58,0,0,0,33.3,2.25ZM10.84,32.992H5.524V15.876h5.324V32.992ZM8.182,13.538a3.082,3.082,0,1,1,3.082-3.082,3.084,3.084,0,0,1-3.082,3.082ZM30.766,32.992H25.45V24.666c0-1.985-.04-4.539-2.762-4.539-2.77,0-3.194,2.162-3.194,4.4v8.47H14.178V15.876h5.1v2.338h.072a5.6,5.6,0,0,1,5.036-2.762c5.38,0,6.381,3.547,6.381,8.158Z"
              transform="translate(0 -2.25)" />
          </svg>
        </a>
        <?php endif; ?>
      </ul>
    </div>

  </div>

  <div class="share">
    <div>
      <p>compartilhar</p>
      <ul class="social">
        <li>
          <a href="https://www.instagram.com/estudio.labomba/?hl=pt-br" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="35.885" height="35.877" viewBox="0 0 35.885 35.877">
              <defs>
                <style>
                .yellow {
                  fill: #e1e31c;
                }
                </style>
              </defs>
              <path class="yellow"
                d="M17.941,10.978a9.2,9.2,0,1,0,9.2,9.2A9.184,9.184,0,0,0,17.941,10.978Zm0,15.179a5.98,5.98,0,1,1,5.98-5.98,5.991,5.991,0,0,1-5.98,5.98ZM29.662,10.6a2.146,2.146,0,1,1-2.146-2.146A2.141,2.141,0,0,1,29.662,10.6Zm6.092,2.178c-.136-2.874-.793-5.42-2.9-7.517s-4.643-2.754-7.517-2.9c-2.962-.168-11.84-.168-14.8,0-2.866.136-5.412.793-7.517,2.89S.265,9.9.121,12.771c-.168,2.962-.168,11.84,0,14.8.136,2.874.793,5.42,2.9,7.517s4.643,2.754,7.517,2.9c2.962.168,11.84.168,14.8,0,2.874-.136,5.42-.793,7.517-2.9s2.754-4.643,2.9-7.517c.168-2.962.168-11.832,0-14.794ZM31.927,30.752a6.054,6.054,0,0,1-3.41,3.41c-2.362.937-7.966.721-10.575.721s-8.222.208-10.575-.721a6.054,6.054,0,0,1-3.41-3.41c-.937-2.362-.721-7.966-.721-10.575S3.027,11.955,3.956,9.6a6.054,6.054,0,0,1,3.41-3.41c2.362-.937,7.966-.721,10.575-.721s8.222-.208,10.575.721a6.054,6.054,0,0,1,3.41,3.41c.937,2.362.721,7.966.721,10.575S32.864,28.4,31.927,30.752Z"
                transform="translate(0.005 -2.238)" />
            </svg>
          </a>
        </li>
        <li>
          <a href="https://www.linkedin.com/company/est%C3%BAdio-la-bomba/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="35.865" height="35.865" viewBox="0 0 35.865 35.865">
              <defs>
                <style>
                .yellow {
                  fill: #e1e31c;
                }
                </style>
              </defs>
              <path class="yellow"
                d="M33.3,2.25H2.554A2.573,2.573,0,0,0,0,4.836V35.529a2.573,2.573,0,0,0,2.554,2.586H33.3a2.58,2.58,0,0,0,2.562-2.586V4.836A2.58,2.58,0,0,0,33.3,2.25ZM10.84,32.992H5.524V15.876h5.324V32.992ZM8.182,13.538a3.082,3.082,0,1,1,3.082-3.082,3.084,3.084,0,0,1-3.082,3.082ZM30.766,32.992H25.45V24.666c0-1.985-.04-4.539-2.762-4.539-2.77,0-3.194,2.162-3.194,4.4v8.47H14.178V15.876h5.1v2.338h.072a5.6,5.6,0,0,1,5.036-2.762c5.38,0,6.381,3.547,6.381,8.158Z"
                transform="translate(0 -2.25)" />
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
</div>

<?php endwhile;else: ?>
<p><?php esc_html_e('Sorry, no posts matched your criteria.');?></p>
<?php endif;?>

<div class="article-slider">
  <div class="article-dots">
    <div class="article-dots-prev">
      <svg width="34" height="34" viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg">
        <g fill="none" fill-rule="evenodd">
          <path
            d="M16.887 33.273C7.835 33.273.5 25.937.5 16.886.5 7.836 7.835.5 16.887.5c9.05 0 16.386 7.336 16.386 16.386 0 9.05-7.337 16.387-16.387 16.387z">
          </path>
          <path d="M12.034 16.886h10.438"></path>
          <path d="M16.04 13.162l-4.006 3.725 4.005 3.722"></path>
        </g>
      </svg>
    </div>

    <div class="article-dots-next">
      <svg width="34" height="34" viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg">
        <g fill-rule="evenodd">
          <path
            d="M.5 16.886C.5 7.836 7.836.5 16.887.5c9.049 0 16.384 7.336 16.384 16.386 0 9.05-7.335 16.387-16.384 16.387C7.836 33.273.5 25.937.5 16.886z">
          </path>
          <path d="M21.738 16.886H11.3m6.433 3.724l4.005-3.725-4.005-3.722"></path>
        </g>
      </svg>
    </div>
  </div>


  <div class="article-carousel">

    <?php
$tags = wp_get_post_tags($post->ID);
if ($tags) {
    $tag_ids = array();
    foreach ($tags as $individual_tag) {
        $tag_ids[] = $individual_tag->term_id;
    }

    $args = array(
        'tag__in' => $tag_ids,
        'post__not_in' => array($post->ID),
        'showposts' => 5, // Quantidade de posts relacionados que deverá ser exibida.
    );
    $my_query = new wp_query($args);
    if ($my_query->have_posts()) {
        while ($my_query->have_posts()) {
            $my_query->the_post();
            ?>
    <div class="article-carousel-item">
      <a href="<?php the_permalink()?>">
        <?php the_post_thumbnail()?>
        <h4><?php the_title()?></h4>
        <small><?php the_tags('', ', ')?></small>
      </a>
    </div>
    <?php
}
    }
}
?>


  </div>

  <div></div>

  <a class="button" href="<?php site_url()?>/category/blog/">
    todos os artigos
  </a>
</div>

<?php get_footer();?>