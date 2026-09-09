<?php
if (!defined('ABSPATH')) exit;
require_once get_template_directory() . '/inc/legal-content.php';
$is_privacy = is_page('privacy-policy');
$title = $is_privacy ? 'Privacy Policy' : 'Terms & Conditions';
$subtitle = $is_privacy ? 'How Vistaar Flow collects, uses, protects, and manages personal and business data.' : 'The rules and responsibilities that apply when using Vistaar Flow.';
$sections = $is_privacy ? vistaarflow_privacy_sections() : vistaarflow_terms_sections();
get_header(); ?>
<main id="main" class="legal-page">
  <header class="legal-hero"><div class="container narrow"><div class="eyebrow">LEGAL</div><h1><?php echo esc_html($title); ?></h1><p><?php echo esc_html($subtitle); ?></p><div class="legal-meta"><span><b>App:</b> Vistaar Flow<?php echo $is_privacy ? ' CRM' : ''; ?></span><span><b>Parent company:</b> Techoceanhub Private Limited</span><span><b>Effective date:</b> 03 July 2026</span></div></div></header>
  <div class="container narrow legal-content">
    <?php foreach ($sections as $section): ?><section class="legal-card"><h2><?php echo esc_html($section[0]); ?></h2><ul><?php foreach ($section[1] as $item): ?><li><?php echo esc_html($item); ?></li><?php endforeach; ?></ul></section><?php endforeach; ?>
    <section class="legal-card legal-contact"><h2><?php echo esc_html($is_privacy ? '9. Contact And Grievance Redressal' : '13. Contact'); ?></h2><p><?php if ($is_privacy): ?>For privacy questions, data requests, or grievance redressal, contact Techoceanhub Private Limited at <a href="mailto:support@techoceanhub.com">support@techoceanhub.com</a>. Please include your account email, business name, and request details so we can verify and respond appropriately.<?php else: ?>For questions about these Terms, contact Techoceanhub Private Limited at <a href="mailto:support@techoceanhub.com">support@techoceanhub.com</a>.<?php endif; ?></p></section>
    <p class="legal-source">Source: <a href="<?php echo esc_url($is_privacy ? 'https://app.vistaarflow.in/privacy-policy' : 'https://app.vistaarflow.in/terms-and-conditions'); ?>" target="_blank" rel="noopener">VistaarFlow application legal page</a></p>
  </div>
</main>
<?php get_footer(); ?>
