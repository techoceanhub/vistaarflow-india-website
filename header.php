<?php if (!defined('ABSPATH'))
  exit; ?><!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1"><?php wp_head(); ?>
</head>

<body <?php body_class(); ?>><?php wp_body_open(); ?>
  <a class="skip-link" href="#main"><?php esc_html_e('Skip to content', 'vistaarflow'); ?></a>
  <header class="site-header" id="site-header">
    <div class="container nav-wrap">
      <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="VistaarFlow home">
        <?php if (has_custom_logo()) {
          the_custom_logo();
        } else { ?><img class="theme-logo"
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/vistaartransparentlogo.png'); ?>"
            alt="<?php esc_attr_e('VistaarFlow — AI-powered CRM for growing business', 'vistaarflow'); ?>"><?php } ?>
      </a>
      <button class="nav-toggle" aria-expanded="false"
        aria-controls="primary-nav"><span></span><span></span><span></span><b
          class="screen-reader-text">Menu</b></button>
      <nav id="primary-nav" class="primary-nav" aria-label="Primary navigation">
        <?php if (has_nav_menu('primary')) {
          wp_nav_menu(['theme_location' => 'primary', 'container' => false]);
        } else { ?>
          <ul>
            <li><a href="<?php echo esc_url(home_url('/#why-us')); ?>">Why VistaarFlow</a></li>
            <li><a href="<?php echo esc_url(home_url('/#platform')); ?>">Platform</a></li>
            <li><a href="<?php echo esc_url(home_url('/#integrations')); ?>">Integrations</a></li>
            <li><a href="<?php echo esc_url(home_url('/#pricing')); ?>">Pricing</a></li>
            <li><a href="<?php echo esc_url(vistaarflow_blog_url()); ?>">Blog</a></li>
            <li><a href="<?php echo esc_url(home_url('/#contact')); ?>">Contact</a></li>
          </ul><?php } ?>
      </nav>
      <div class="nav-actions"><a class="text-link" href="https://app.vistaarflow.in/login">Log in</a>
       <a href="" class="button button-small" href="https://app.vistaarflow.in/signup">Start free</a></div>
    </div>
  </header>