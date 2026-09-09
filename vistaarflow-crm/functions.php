<?php
if (!defined('ABSPATH')) exit;

function vistaarflow_setup() {
  load_theme_textdomain('vistaarflow', get_template_directory() . '/languages');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo', ['height' => 80, 'width' => 280, 'flex-height' => true, 'flex-width' => true]);
  add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
  add_theme_support('align-wide');
  add_theme_support('responsive-embeds');
  add_theme_support('editor-styles');
  add_editor_style('assets/css/main.css');
  register_nav_menus(['primary' => __('Primary menu','vistaarflow'), 'footer' => __('Footer menu','vistaarflow')]);
}
add_action('after_setup_theme', 'vistaarflow_setup');

function vistaarflow_assets() {
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('vistaarflow-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap', [], null);
  $main_css = get_template_directory() . '/assets/css/main.css';
  $modules_css = get_template_directory() . '/assets/css/home-modules.css';
  $reference_css = get_template_directory() . '/assets/css/reference-copy.css';
  $main_js = get_template_directory() . '/assets/js/main.js';
  $dashboard_js = get_template_directory() . '/assets/js/hero-dashboard.js';
  wp_enqueue_style('vistaarflow-main', get_template_directory_uri() . '/assets/css/main.css', [], file_exists($main_css) ? filemtime($main_css) : $version);
  wp_enqueue_style('vistaarflow-home-modules', get_template_directory_uri() . '/assets/css/home-modules.css', ['vistaarflow-main'], file_exists($modules_css) ? filemtime($modules_css) : $version);
  wp_enqueue_style('vistaarflow-reference-copy', get_template_directory_uri() . '/assets/css/reference-copy.css', ['vistaarflow-home-modules'], file_exists($reference_css) ? filemtime($reference_css) : $version);
  if (is_home() || is_page('blog') || is_page_template('page-blog.php') || is_single()) {
    $blog_sidebar_css = get_template_directory() . '/assets/css/blog-sidebar.css';
    wp_enqueue_style('vistaarflow-blog-sidebar', get_template_directory_uri() . '/assets/css/blog-sidebar.css', ['vistaarflow-main'], file_exists($blog_sidebar_css) ? filemtime($blog_sidebar_css) : $version);
  }
  if (is_single()) {
    $single_post_css = get_template_directory() . '/assets/css/single-post-reference.css';
    wp_enqueue_style('vistaarflow-single-post-reference', get_template_directory_uri() . '/assets/css/single-post-reference.css', ['vistaarflow-blog-sidebar'], file_exists($single_post_css) ? filemtime($single_post_css) : $version);
  }
  wp_enqueue_script('vistaarflow-main', get_template_directory_uri() . '/assets/js/main.js', [], file_exists($main_js) ? filemtime($main_js) : $version, true);
  wp_enqueue_script('vistaarflow-hero-dashboard', get_template_directory_uri() . '/assets/js/hero-dashboard.js', ['vistaarflow-main'], file_exists($dashboard_js) ? filemtime($dashboard_js) : $version, true);
}
add_action('wp_enqueue_scripts', 'vistaarflow_assets');

add_filter('document_title_separator', function () {
  return '-';
});

function vistaarflow_elementor_support() {
  add_theme_support('elementor');
  add_theme_support('elementor-pro');
}
add_action('after_setup_theme', 'vistaarflow_elementor_support');

function vistaarflow_widgets() {
  register_sidebar(['name'=>__('Footer widgets','vistaarflow'),'id'=>'footer-widgets','before_widget'=>'<div class="footer-widget">','after_widget'=>'</div>','before_title'=>'<h3>','after_title'=>'</h3>']);
}
add_action('widgets_init', 'vistaarflow_widgets');

/** Create the two required legal pages when the theme is activated or visited in admin. */
function vistaarflow_ensure_legal_pages() {
  if (!function_exists('wp_insert_post')) return;
  $pages = [
    'privacy-policy' => __('Privacy Policy', 'vistaarflow'),
    'terms-and-conditions' => __('Terms & Conditions', 'vistaarflow'),
  ];
  foreach ($pages as $slug => $title) {
    $existing = get_page_by_path($slug, OBJECT, 'page');
    if (!$existing) {
      wp_insert_post(['post_title'=>$title, 'post_name'=>$slug, 'post_type'=>'page', 'post_status'=>'publish', 'post_content'=>'']);
    } elseif ($existing->post_status !== 'publish') {
      wp_update_post(['ID'=>$existing->ID, 'post_status'=>'publish']);
    }
  }
}
add_action('after_switch_theme', 'vistaarflow_ensure_legal_pages');
add_action('admin_init', 'vistaarflow_ensure_legal_pages');

function vistaarflow_legal_url($slug) {
  $page = get_page_by_path($slug, OBJECT, 'page');
  return $page ? get_permalink($page) : home_url('/' . trim($slug, '/') . '/');
}

function vistaarflow_blog_url() {
  $page_id = (int) get_option('page_for_posts');
  return $page_id ? get_permalink($page_id) : home_url('/blog/');
}

/** Put the Why VistaarFlow item first in an assigned WordPress menu. */
function vistaarflow_prioritize_why_menu_item($items, $args) {
  if (!isset($args->theme_location) || $args->theme_location !== 'primary') return $items;
  $why = [];
  $rest = [];
  foreach ($items as $item) {
    $label = strtolower(trim(wp_strip_all_tags($item->title)));
    if (strpos($label, 'why vistaarflow') !== false || strpos($item->url, '#why-us') !== false) $why[] = $item;
    else $rest[] = $item;
  }
  return array_merge($why, $rest);
}
add_filter('wp_nav_menu_objects', 'vistaarflow_prioritize_why_menu_item', 10, 2);

/** Keep legal links present even when the administrator assigns a custom menu. */
function vistaarflow_append_legal_menu_items($items, $args) {
  if (!isset($args->theme_location) || $args->theme_location !== 'primary') return $items;
  $privacy_url = vistaarflow_legal_url('privacy-policy');
  $terms_url = vistaarflow_legal_url('terms-and-conditions');
  if (strpos($items, esc_url($privacy_url)) === false) $items .= '<li class="menu-item menu-item-privacy"><a href="' . esc_url($privacy_url) . '">' . esc_html__('Privacy', 'vistaarflow') . '</a></li>';
  if (strpos($items, esc_url($terms_url)) === false) $items .= '<li class="menu-item menu-item-terms"><a href="' . esc_url($terms_url) . '">' . esc_html__('Terms', 'vistaarflow') . '</a></li>';
  return $items;
}
add_filter('wp_nav_menu_items', 'vistaarflow_append_legal_menu_items', 10, 2);

function vistaarflow_append_blog_menu_item($items, $args) {
  if (!isset($args->theme_location) || $args->theme_location !== 'primary') return $items;
  $blog_url = vistaarflow_blog_url();
  if (strpos($items, esc_url($blog_url)) !== false) return $items;
  return $items . '<li class="menu-item menu-item-blog"><a href="' . esc_url($blog_url) . '">' . esc_html__('Blog', 'vistaarflow') . '</a></li>';
}
add_filter('wp_nav_menu_items', 'vistaarflow_append_blog_menu_item', 9, 2);

function vistaarflow_ensure_blog_page() {
  if (!function_exists('wp_insert_post')) return;
  $page = get_page_by_path('blog', OBJECT, 'page');
  $page_id = $page ? (int) $page->ID : wp_insert_post(['post_title'=>__('Blog','vistaarflow'),'post_name'=>'blog','post_type'=>'page','post_status'=>'publish']);
  if ($page && $page->post_status !== 'publish') wp_update_post(['ID'=>$page_id, 'post_status'=>'publish']);
  if ($page_id && !is_wp_error($page_id) && (int) get_option('page_for_posts') !== $page_id) {
    update_option('page_for_posts', $page_id);
    update_option('vistaarflow_flush_blog_rewrites', 'yes');
  }
}
add_action('after_switch_theme', 'vistaarflow_ensure_blog_page');
add_action('admin_init', 'vistaarflow_ensure_blog_page');
add_action('init', 'vistaarflow_ensure_blog_page', 5);

function vistaarflow_flush_blog_rewrites_once() {
  if (get_option('vistaarflow_flush_blog_rewrites') !== 'yes') return;
  flush_rewrite_rules(false);
  delete_option('vistaarflow_flush_blog_rewrites');
}
add_action('init', 'vistaarflow_flush_blog_rewrites_once', 20);

function vistaarflow_customize_register($customizer) {
  $customizer->add_section('vistaarflow_whatsapp', ['title'=>__('WhatsApp Chat','vistaarflow'),'priority'=>165]);
  $customizer->add_setting('vistaarflow_whatsapp_number', ['default'=>'','sanitize_callback'=>function($value){return preg_replace('/[^0-9]/','',$value);}]);
  $customizer->add_control('vistaarflow_whatsapp_number', ['section'=>'vistaarflow_whatsapp','label'=>__('WhatsApp number','vistaarflow'),'description'=>__('Include country code without +, for example 919876543210.','vistaarflow'),'type'=>'text']);
  $customizer->add_setting('vistaarflow_whatsapp_message', ['default'=>__('Hi VistaarFlow, I would like to learn more about your CRM.','vistaarflow'),'sanitize_callback'=>'sanitize_text_field']);
  $customizer->add_control('vistaarflow_whatsapp_message', ['section'=>'vistaarflow_whatsapp','label'=>__('Prefilled message','vistaarflow'),'type'=>'text']);
}
add_action('customize_register', 'vistaarflow_customize_register');

function vistaarflow_whatsapp_url() {
  $number = preg_replace('/[^0-9]/', '', get_theme_mod('vistaarflow_whatsapp_number', ''));
  $message = get_theme_mod('vistaarflow_whatsapp_message', __('Hi VistaarFlow, I would like to learn more about your CRM.','vistaarflow'));
  return 'https://api.whatsapp.com/send?' . ($number ? 'phone=' . rawurlencode($number) . '&' : '') . 'text=' . rawurlencode($message);
}
