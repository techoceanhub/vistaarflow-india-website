<?php
if (!defined('ABSPATH')) exit;
require_once get_template_directory() . '/inc/legal-content.php';
$is_privacy = is_page('privacy-policy');
$is_refund = is_page('refund-cancellation-policy');
$title = $is_refund ? 'Refund & Cancellation Policy' : ($is_privacy ? 'Privacy Policy' : 'Terms & Conditions');
$subtitle = $is_refund
  ? 'The conditions applicable to subscription cancellations, refunds, renewals, upgrades, and third-party charges.'
  : ($is_privacy ? 'How Vistaar Flow collects, uses, protects, and manages personal and business data.' : 'The rules and responsibilities that apply when using Vistaar Flow.');
$sections = $is_refund ? vistaarflow_refund_sections() : ($is_privacy ? vistaarflow_privacy_sections() : vistaarflow_terms_sections());
get_header(); ?>
<main id="main" class="legal-page">
  <header class="legal-hero"><div class="container narrow"><div class="eyebrow">LEGAL</div><h1><?php echo esc_html($title); ?></h1><p><?php echo esc_html($subtitle); ?></p><div class="legal-meta"><?php if ($is_refund): ?><span><b>Last updated:</b> September 2, 2026</span><?php else: ?><span><b>App:</b> Vistaar Flow<?php echo $is_privacy ? ' CRM' : ''; ?></span><span><b>Parent company:</b> Techoceanhub Private Limited</span><span><b>Effective date:</b> 03 July 2026</span><?php endif; ?></div></div></header>
  <div class="container narrow legal-content">
    <?php if ($is_refund): ?><div class="legal-card legal-policy-intro"><p>At VistaarFlow, we aim to provide a reliable and transparent CRM experience for businesses using our platform. This Refund &amp; Cancellation Policy explains the conditions applicable to subscription cancellations, refunds, renewals, upgrades, and third-party charges.</p><p>By purchasing or subscribing to a paid VistaarFlow plan, you agree to this Refund &amp; Cancellation Policy.</p></div><?php endif; ?>
    <?php foreach ($sections as $section): ?><section class="legal-card"><h2><?php echo esc_html($section[0]); ?></h2><?php if ($is_refund): ?><?php foreach ($section[1] as $block): ?><?php if ($block[0] === 'list'): ?><ul><?php foreach ($block[1] as $item): ?><li><?php echo esc_html($item); ?></li><?php endforeach; ?></ul><?php else: ?><p><?php echo esc_html($block[1]); ?></p><?php endif; ?><?php endforeach; ?><?php else: ?><ul><?php foreach ($section[1] as $item): ?><li><?php echo esc_html($item); ?></li><?php endforeach; ?></ul><?php endif; ?></section><?php endforeach; ?>
    <?php if (!$is_refund): ?><section class="legal-card legal-contact"><h2><?php echo esc_html($is_privacy ? '9. Contact And Grievance Redressal' : '13. Contact'); ?></h2><p><?php if ($is_privacy): ?>For privacy questions, data requests, or grievance redressal, contact Techoceanhub Private Limited at <a href="mailto:contact@vistaarflow.in">contact@vistaarflow.in</a>. Please include your account email, business name, and request details so we can verify and respond appropriately.<?php else: ?>For questions about these Terms, contact Techoceanhub Private Limited at <a href="mailto:contact@vistaarflow.in">contact@vistaarflow.in</a>.<?php endif; ?></p></section>
    <p class="legal-source">Source: <a href="<?php echo esc_url($is_privacy ? 'https://app.vistaarflow.in/privacy-policy' : 'https://app.vistaarflow.in/terms-and-conditions'); ?>" target="_blank" rel="noopener">VistaarFlow application legal page</a></p><?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
