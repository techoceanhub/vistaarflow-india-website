<?php get_header(); ?>
<main id="main" class="reference-single-post">
<?php while(have_posts()): the_post(); $cats=get_the_category(); ?>
  <article <?php post_class(); ?>>
    <header class="reference-single-hero">
      <div class="container">
        <nav class="single-breadcrumb" aria-label="<?php esc_attr_e('Breadcrumb','vistaarflow'); ?>"><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home','vistaarflow'); ?></a><span>→</span><a href="<?php echo esc_url(vistaarflow_blog_url()); ?>"><?php esc_html_e('Journal','vistaarflow'); ?></a></nav>
        <h1><?php the_title(); ?></h1>
        <div class="single-reference-meta">
          <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('F j, Y')); ?></time>
          <i></i><span><?php echo esc_html($cats?$cats[0]->name:__('Insights','vistaarflow')); ?></span>
          <i></i><span><?php comments_number(__('0 comments','vistaarflow'),__('1 comment','vistaarflow'),__('% comments','vistaarflow')); ?></span>
        </div>
      </div>
    </header>
    <section class="reference-single-body">
      <div class="container single-content-layout">
        <div class="single-main-column">
          <?php if(has_post_thumbnail()): ?><figure class="reference-featured"><?php the_post_thumbnail('full'); ?></figure><?php endif; ?>
          <div class="reference-post-content"><?php the_content(); ?></div>
          <div class="reference-share"><b><?php esc_html_e('Share this article','vistaarflow'); ?></b><a target="_blank" rel="noopener" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo rawurlencode(get_permalink()); ?>">LinkedIn</a><a target="_blank" rel="noopener" href="https://api.whatsapp.com/send?text=<?php echo rawurlencode(get_the_title().' '.get_permalink()); ?>">WhatsApp</a></div>
          <nav class="reference-post-navigation"><?php the_post_navigation(['prev_text'=>'<small>'.esc_html__('Previous article','vistaarflow').'</small><span>%title</span>','next_text'=>'<small>'.esc_html__('Next article','vistaarflow').'</small><span>%title</span>']); ?></nav>
        </div>
        <aside class="blog-sidebar single-blog-sidebar" aria-label="<?php esc_attr_e('Blog sidebar','vistaarflow'); ?>">
          <form class="journal-search" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <label class="screen-reader-text" for="single-journal-search"><?php esc_html_e('Search the journal','vistaarflow'); ?></label>
            <input id="single-journal-search" type="search" name="s" placeholder="<?php esc_attr_e('Search the journal','vistaarflow'); ?>">
            <button type="submit"><?php esc_html_e('Search','vistaarflow'); ?></button>
          </form>
          <section class="sidebar-section"><h2><?php esc_html_e('Recent Posts','vistaarflow'); ?></h2><ul>
            <?php foreach(get_posts(['post_type'=>'post','post_status'=>'publish','numberposts'=>5]) as $recent_post): ?><li><a href="<?php echo esc_url(get_permalink($recent_post)); ?>"><?php echo esc_html(get_the_title($recent_post)); ?></a></li><?php endforeach; ?>
          </ul></section>
          <?php $sidebar_categories=get_categories(['hide_empty'=>true]); if($sidebar_categories): ?><section class="sidebar-section sidebar-categories"><h2><?php esc_html_e('Categories','vistaarflow'); ?></h2><ul>
            <?php foreach($sidebar_categories as $sidebar_category): ?><li><a href="<?php echo esc_url(get_category_link($sidebar_category)); ?>"><span><?php echo esc_html($sidebar_category->name); ?></span><b><?php echo esc_html($sidebar_category->count); ?></b></a></li><?php endforeach; ?>
          </ul></section><?php endif; ?>
        </aside>
      </div>
    </section>
  </article>
<?php endwhile; ?>
</main>
<?php get_footer(); ?>
