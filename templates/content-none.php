<section class="section">
  <header>
    <h1>
      <?php _e('Nothing to see here :/', 'baldr'); ?>
    </h1>
  </header>
  <div class="content">
    <?php if (is_home() && current_user_can('publish_posts')) : ?>
      <strong>
        <?php
          printf(
            __(
              'Ready to publish your first post? <a href="%s">Get started here</a>',
              'baldr'
            ),
            esc_url(admin_url('post-new.php'))
          );
        ?>
      </strong>
    <?php elseif (is_search()) : ?>
      <strong>
        <?php
          _e(
            'Sorry, but nothing matched your search terms. Try again with different keywords',
            'baldr'
          );
        ?>
      </strong>
      <?php get_search_form(); ?>
    <?php else : ?>
      <?php
        _e(
          'Seems we cannot find what you are looking for. Try searching for it',
          'baldr'
        );
      ?>
      <?php get_search_form(); ?>
    <?php endif; ?>
  </div>
</section>
