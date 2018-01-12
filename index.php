<?php get_header(); ?>
<div class="content">
  <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        get_template_part('templates/content', get_post_format());
      endwhile;
      the_posts_pagination(array(
        'prev_text' => __('Previous page', 'baldr'),
        'next_text' => __('Next page', 'baldr'),
        'before_page_number' => '<span>' . __('Page', 'baldr') . '</span>'
      ));
    else :
      get_template_part('templates/content', 'none');
    endif;
  ?>
</div>
<aside>
  <?php get_sidebar(); ?>
</aside>
<?php get_footer(); ?>
