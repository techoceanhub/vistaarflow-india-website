<?php
get_header();
$paged = max(1, (int) get_query_var('paged'));
$blog_query = is_home() ? $GLOBALS['wp_query'] : new WP_Query([
  'post_type' => 'post',
  'post_status' => 'publish',
  'paged' => $paged,
]);
?>
<main id="main" class="blog-index">
  <header class="blog-hero"><div class="container"><div class="eyebrow">VISTAARFLOW BLOG</div><h1>Better systems.<br><em>Smarter growth.</em></h1><p>Practical CRM, AI, automation and customer communication insights for growing businesses.</p></div></header>
  <div class="container blog-list"><div class="blog-layout"><div class="post-grid">
    <?php if ($blog_query->have_posts()): while ($blog_query->have_posts()): $blog_query->the_post(); ?>
      <article <?php post_class('post-card'); ?>><a class="post-thumb" href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) { the_post_thumbnail('large'); } else { ?><span class="post-placeholder">V</span><?php } ?><span class="post-category"><?php $cats = get_the_category(); echo esc_html($cats ? $cats[0]->name : 'Insights'); ?></span></a><div class="post-card-body"><div class="post-meta"><?php echo esc_html(get_the_date()); ?></div><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 22)); ?></p><a class="read-more" href="<?php the_permalink(); ?>">Read article →</a></div></article>
    <?php endwhile; else: ?>
      <div class="blog-empty"><h2>Fresh ideas are on the way.</h2><p>We’re preparing practical guides about CRM, AI, WhatsApp and sales automation.</p></div>
    <?php endif; ?>
  </div><div class="blog-page-pagination"><?php echo wp_kses_post(paginate_links(['total' => (int) $blog_query->max_num_pages, 'current' => $paged, 'prev_text' => '← Previous', 'next_text' => 'Next →'])); ?></div>
  <aside class="blog-sidebar" aria-label="<?php esc_attr_e('Blog sidebar','vistaarflow'); ?>">
    <form class="journal-search" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
      <label class="screen-reader-text" for="journal-search-field"><?php esc_html_e('Search the journal','vistaarflow'); ?></label>
      <input id="journal-search-field" type="search" name="s" placeholder="<?php esc_attr_e('Search the journal','vistaarflow'); ?>" value="<?php echo esc_attr(get_search_query()); ?>">
      <button type="submit"><?php esc_html_e('Search','vistaarflow'); ?></button>
    </form>
    <section class="sidebar-section">
      <h2><?php esc_html_e('Recent Posts','vistaarflow'); ?></h2>
      <ul><?php
        $recent_posts = get_posts(['post_type'=>'post','post_status'=>'publish','numberposts'=>5]);
        foreach ($recent_posts as $recent_post) {
          printf('<li><a href="%s">%s</a></li>', esc_url(get_permalink($recent_post)), esc_html(get_the_title($recent_post)));
        }
      ?></ul>
    </section>
    <?php $sidebar_categories = get_categories(['hide_empty'=>true]); if ($sidebar_categories): ?>
      <section class="sidebar-section sidebar-categories">
        <h2><?php esc_html_e('Categories','vistaarflow'); ?></h2>
        <ul><?php foreach ($sidebar_categories as $sidebar_category): ?><li><a href="<?php echo esc_url(get_category_link($sidebar_category)); ?>"><span><?php echo esc_html($sidebar_category->name); ?></span><b><?php echo esc_html($sidebar_category->count); ?></b></a></li><?php endforeach; ?></ul>
      </section>
    <?php endif; ?>
  </aside></div></div>
</main>
<?php
if ($blog_query !== $GLOBALS['wp_query']) wp_reset_postdata();
get_footer();
