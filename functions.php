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

/** Create the required legal pages when the theme is activated or visited in admin. */
function vistaarflow_ensure_legal_pages() {
  if (!function_exists('wp_insert_post')) return;
  $pages = [
    'privacy-policy' => __('Privacy Policy', 'vistaarflow'),
    'terms-and-conditions' => __('Terms & Conditions', 'vistaarflow'),
    'refund-cancellation-policy' => __('Refund & Cancellation Policy', 'vistaarflow'),
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
add_action('init', 'vistaarflow_ensure_legal_pages');

function vistaarflow_legal_url($slug) {
  $page = get_page_by_path($slug, OBJECT, 'page');
  return $page ? get_permalink($page) : home_url('/' . trim($slug, '/') . '/');
}

function vistaarflow_blog_url() {
  $page_id = (int) get_option('page_for_posts');
  return $page_id ? get_permalink($page_id) : home_url('/blog/');
}

/** Build one accessible Features dropdown for the header navigation. */
function vistaarflow_features_menu_item() {
  $pages = [
    'WhatsApp CRM' => 'whatsapp-crm',
    'Facebook CRM' => 'facebook-crm',
    'AI-powered CRM' => 'ai-powered-crm',
    'CRM Automation' => 'automation-crm',
    'Mobile CRM' => 'mobile-crm',
    'Email CRM' => 'email-crm',
    'Telephony CRM' => 'telephony-crm',
    'Website Lead Capture' => 'website-lead-capture',
    'Lead Assignment' => 'lead-assignment',
  ];
  $html = '<li class="menu-item menu-item-features"><div class="features-dropdown"><span class="features-trigger" tabindex="0" aria-haspopup="true">Features <span aria-hidden="true"></span></span><ul class="features-dropdown-menu">';
  foreach ($pages as $label => $slug) {
    $html .= '<li><a href="' . esc_url(home_url('/' . $slug . '/')) . '">' . esc_html($label) . '</a></li>';
  }
  return $html . '</ul></div></li>';
}

/** Replace the old Why VistaarFlow item in an assigned WordPress menu. */
function vistaarflow_prioritize_why_menu_item($items, $args) {
  if (!isset($args->theme_location) || $args->theme_location !== 'primary') return $items;
  $rest = [];
  foreach ($items as $item) {
    $label = strtolower(trim(wp_strip_all_tags($item->title)));
    if (strpos($label, 'why vistaarflow') === false && strpos($item->url, '#why-us') === false) $rest[] = $item;
  }
  return $rest;
}
add_filter('wp_nav_menu_objects', 'vistaarflow_prioritize_why_menu_item', 10, 2);

function vistaarflow_prepend_features_menu_item($items, $args) {
  if (!isset($args->theme_location) || $args->theme_location !== 'primary') return $items;
  return vistaarflow_features_menu_item() . $items;
}
add_filter('wp_nav_menu_items', 'vistaarflow_prepend_features_menu_item', 20, 2);

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



function vistaarflow_register_lead_post_type() {
  register_post_type('vf_lead', [
    'labels' => [
      'name' => __('VistaarFlow Leads', 'vistaarflow'),
      'singular_name' => __('VistaarFlow Lead', 'vistaarflow'),
      'menu_name' => __('VistaarFlow Leads', 'vistaarflow'),
      'all_items' => __('All Leads', 'vistaarflow'),
      'view_item' => __('View Lead', 'vistaarflow'),
      'search_items' => __('Search Leads', 'vistaarflow'),
      'not_found' => __('No leads found', 'vistaarflow'),
    ],
    'public' => false,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest' => false,
    'menu_icon' => 'dashicons-businessperson',
    'supports' => ['title'],
  ]);
}
add_action('init', 'vistaarflow_register_lead_post_type');

/** Log mail failures so they are visible in debug.log. */
add_action('wp_mail_failed', function ($err) {
  error_log('VistaarFlow mail failed: ' . $err->get_error_message());
});

/** Normalise an Indian phone number to 10 digits (strips +91 / 91 / leading 0). */
function vistaarflow_normalize_phone($raw) {
  $digits = preg_replace('/\D+/', '', (string) $raw);
  if (strlen($digits) === 12 && strpos($digits, '91') === 0) {
    $digits = substr($digits, 2);
  } elseif (strlen($digits) === 11 && $digits[0] === '0') {
    $digits = substr($digits, 1);
  }
  return $digits;
}

function vistaarflow_client_ip() {
  return isset($_SERVER['REMOTE_ADDR']) ? sanitize_text_field(wp_unslash($_SERVER['REMOTE_ADDR'])) : 'unknown';
}

function vistaarflow_contact_response($success, $message) {
  if (!empty($_POST['vf_ajax']) || wp_doing_ajax()) {
    if ($success) wp_send_json_success(['message' => $message]);
    wp_send_json_error(['message' => $message], 400);
  }
  $status = $success ? 'success' : 'error';
  wp_safe_redirect(add_query_arg('contact_status', $status, home_url('/contact/')));
  exit;
}

function vistaarflow_handle_contact_submission() {
  if (!isset($_SERVER['REQUEST_METHOD']) || $_SERVER['REQUEST_METHOD'] !== 'POST') {
    vistaarflow_contact_response(false, __('Invalid request.', 'vistaarflow'));
  }

  /* ---- Duplicate protection (client token) ----
     If the same token was already saved, report success without saving again. */
  $token = isset($_POST['vf_token']) ? preg_replace('/[^a-zA-Z0-9\-]/', '', wp_unslash($_POST['vf_token'])) : '';
  $token_key = $token ? 'vf_sub_' . md5($token) : '';
  if ($token_key && get_transient($token_key)) {
    vistaarflow_contact_response(true, __('Your enquiry has been sent successfully. Our team will reach out shortly.', 'vistaarflow'));
  }

  /* ---- Rate limit: max 5 submissions per IP per 10 minutes ---- */
  $ip = vistaarflow_client_ip();
  $rate_key = 'vf_rate_' . md5($ip);
  $count = (int) get_transient($rate_key);
  if ($count >= 5) {
    vistaarflow_contact_response(false, __('Too many submissions. Please try again in a few minutes.', 'vistaarflow'));
  }

  $name  = isset($_POST['vf_name']) ? sanitize_text_field(wp_unslash($_POST['vf_name'])) : '';
  $phone = isset($_POST['vf_phone']) ? vistaarflow_normalize_phone(wp_unslash($_POST['vf_phone'])) : '';
  $email = isset($_POST['vf_email']) ? sanitize_email(wp_unslash($_POST['vf_email'])) : '';

  /* ---- Honeypot: keep the record, flag it as spam, show success to the bot ---- */
  $is_spam = !empty($_POST['vf_hp_check']);

  if (!$is_spam && ($name === '' || !preg_match('/^[0-9]{10}$/', $phone) || !is_email($email))) {
    vistaarflow_contact_response(false, __('Please enter a valid name, 10-digit phone number, and email address.', 'vistaarflow'));
  }

  set_transient($rate_key, $count + 1, 10 * MINUTE_IN_SECONDS);

  $lead_id = wp_insert_post([
    'post_type'   => 'vf_lead',
    'post_status' => 'publish',
    'post_title'  => sprintf('%s - %s', $name !== '' ? $name : 'Unknown', current_time('Y-m-d H:i')),
  ], true);
  if (is_wp_error($lead_id)) {
    error_log('VistaarFlow lead insert failed: ' . $lead_id->get_error_message());
    vistaarflow_contact_response(false, __('We could not save your enquiry. Please try again.', 'vistaarflow'));
  }

  update_post_meta($lead_id, '_vf_name', $name);
  update_post_meta($lead_id, '_vf_phone', $phone);
  update_post_meta($lead_id, '_vf_email', $email);
  update_post_meta($lead_id, '_vf_source', 'Website Contact Page');
  update_post_meta($lead_id, '_vf_submitted_at', current_time('mysql'));
  update_post_meta($lead_id, '_vf_ip', $ip);
  update_post_meta($lead_id, '_vf_spam', $is_spam ? 'yes' : 'no');

  if ($token_key) set_transient($token_key, $lead_id, HOUR_IN_SECONDS);

  if ($is_spam) {
    update_post_meta($lead_id, '_vf_mail_status', 'skipped (spam)');
    vistaarflow_contact_response(true, __('Your enquiry has been sent successfully. Our team will reach out shortly.', 'vistaarflow'));
  }

  /* ---- Notification email ---- */
  $sent = wp_mail(
    'contact@vistaarflow.in',
    sprintf(__('New VistaarFlow website enquiry from %s', 'vistaarflow'), $name),
    "Name: {$name}\nPhone: {$phone}\nEmail: {$email}\nSource: Website Contact Page",
    [
      'Reply-To: ' . $email,
      'Content-Type: text/plain; charset=UTF-8',
    ]
  );
  update_post_meta($lead_id, '_vf_mail_status', $sent ? 'sent' : 'failed');

  vistaarflow_contact_response(true, __('Your enquiry has been sent successfully. Our team will reach out shortly.', 'vistaarflow'));
}
add_action('admin_post_nopriv_vistaarflow_contact_submit', 'vistaarflow_handle_contact_submission');
add_action('admin_post_vistaarflow_contact_submit', 'vistaarflow_handle_contact_submission');

function vistaarflow_lead_columns($columns) {
  return [
    'cb'         => $columns['cb'],
    'title'      => __('Lead', 'vistaarflow'),
    'vf_phone'   => __('Phone', 'vistaarflow'),
    'vf_email'   => __('Email', 'vistaarflow'),
    'vf_source'  => __('Source', 'vistaarflow'),
    'vf_mail'    => __('Mail', 'vistaarflow'),
    'vf_spam'    => __('Spam', 'vistaarflow'),
    'date'       => __('Received', 'vistaarflow'),
  ];
}
add_filter('manage_vf_lead_posts_columns', 'vistaarflow_lead_columns');

function vistaarflow_lead_column_value($column, $post_id) {
  $keys = [
    'vf_phone'  => '_vf_phone',
    'vf_email'  => '_vf_email',
    'vf_source' => '_vf_source',
    'vf_mail'   => '_vf_mail_status',
    'vf_spam'   => '_vf_spam',
  ];
  if (isset($keys[$column])) echo esc_html(get_post_meta($post_id, $keys[$column], true));
}
add_action('manage_vf_lead_posts_custom_column', 'vistaarflow_lead_column_value', 10, 2);

function vistaarflow_lead_details_box() {
  add_meta_box('vf-lead-details', __('Lead details', 'vistaarflow'), function ($post) {
    $fields = [
      __('Name', 'vistaarflow')        => '_vf_name',
      __('Phone', 'vistaarflow')       => '_vf_phone',
      __('Email', 'vistaarflow')       => '_vf_email',
      __('Source', 'vistaarflow')      => '_vf_source',
      __('Submitted', 'vistaarflow')   => '_vf_submitted_at',
      __('Mail status', 'vistaarflow') => '_vf_mail_status',
      __('Spam flag', 'vistaarflow')   => '_vf_spam',
      __('IP', 'vistaarflow')          => '_vf_ip',
    ];
    echo '<table class="widefat striped"><tbody>';
    foreach ($fields as $label => $key) {
      echo '<tr><th style="width:140px">' . esc_html($label) . '</th><td>' . esc_html(get_post_meta($post->ID, $key, true)) . '</td></tr>';
    }
    echo '</tbody></table>';
  }, 'vf_lead', 'normal', 'high');
}
add_action('add_meta_boxes_vf_lead', 'vistaarflow_lead_details_box');