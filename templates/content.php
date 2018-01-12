<article id="post-<?php the_ID(); ?>" class="section" <?php post_class(); ?>>
  <header>
    <?php if (is_sticky() && is_home() && !is_paged()) : ?>
      <h1>
        <?php _e('Featured', 'baldr'); ?>
      </h1>
    <?php endif; ?>
    <?php
      the_title(
        sprintf('<h2><a href="%s" rel="bookmark">', esc_url(get_permalink())),
        '</a></h2>'
      );
    ?>
  </header>
  <section class="section is-paddingless">
    <?php
      the_content(
        sprintf(
          __('Continue reading<span>"%s"</span>', 'baldr'),
          get_the_title()
        )
      );
      wp_link_pages(array(
        'before' => '<div><span>' . __('Pages:', 'baldr') . '</span>',
        'after' => '</div>',
        'link_before' => '<span>',
        'link_after' => '</span>',
        'pagelink' => '<span>' . __('Page', 'baldr') . ' </span>%',
        'separator' => '<span>, </span>'
      ));
    ?>
  </section>
  <footer>
    <?php
      edit_post_link(
        '<button class="button is-info">Edit</button>'
      );
    ?>
  </footer>
</article>
