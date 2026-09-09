<footer class="site-footer">
  <div class="container footer-grid">
    <div><a class="brand brand-light" href="<?php echo esc_url(home_url('/')); ?>"><img class="footer-logo"
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/vistaarflow-footer-logo.png'); ?>"
          alt="<?php esc_attr_e('VistaarFlow', 'vistaarflow'); ?>"></a>
      <p>One intelligent workspace for every lead, conversation and next step.</p>
    </div>
    <div>
      <h3>Platform</h3><a href="<?php echo esc_url(home_url('/#platform')); ?>">CRM</a>
      <a href="<?php echo esc_url(home_url('/#integrations')); ?>">Integrations</a>
      <a href="<?php echo esc_url(home_url('/#pricing')); ?>">Pricing</a>
    </div>
    <div>
      <h3>Get started</h3><a href="https://app.vistaarflow.in/signup">Create account</a>
      <a href="https://app.vistaarflow.in/login">Log in</a><a href="mailto:contact@vistaarflow.in">Contact us</a>
      <a class="footer-playstore" href="https://play.google.com/store/apps/details?id=com.techoceanhub.vistaarflow" target="_blank" rel="noopener noreferrer"
        aria-label="<?php esc_attr_e('Get VistaarFlow on Google Play', 'vistaarflow'); ?>">
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <path fill="#00D9FF" d="M3.6 2.3c-.3.3-.5.7-.5 1.3v17c0 .5.2 1 .5 1.3l.1.1L13.9 12 3.7 2.3l-.1 0Z" />
          <path fill="#00F076" d="M17.3 15.4 13.9 12l3.4-3.4 4.6 2.6c.9.5.9 1.4 0 1.9l-4.6 2.3Z" />
          <path fill="#FF3A44" d="M17.3 15.4 13.9 12 3.7 22.1c.4.4 1 .5 1.7.1l11.9-6.8Z" />
          <path fill="#FFCF00" d="M17.3 8.6 5.4 1.8c-.7-.4-1.3-.3-1.7.1L13.9 12l3.4-3.4Z" />
        </svg>
        <span><small>GET IT ON</small>Google Play</span>
      </a>
    </div>
    <div>
      <h3>Legal</h3><a href="<?php echo esc_url(vistaarflow_legal_url('privacy-policy')); ?>">Privacy Policy</a>
      <a href="<?php echo esc_url(vistaarflow_legal_url('terms-and-conditions')); ?>">Terms &amp; Conditions</a>
      <a href="<?php echo esc_url(vistaarflow_legal_url('refund-cancellation-policy')); ?>">Refund &amp; Cancellation
      Policy</a>
    </div>
    <div class="footer-cta"><span>Ready to grow?</span><a class="button button-light"
        href="https://app.vistaarflow.in/signup">Start with VistaarFlow →</a></div>
  </div>
  <div class="container footer-bottom"><span>© <?php echo esc_html(date('Y')); ?> <a href="https://techoceanhub.com/"
        target="_blank" rel="noopener noreferrer">TechOceanHub</a>. All rights reserved.</span><span
      class="legal-links"><a href="<?php echo esc_url(vistaarflow_legal_url('privacy-policy')); ?>">Privacy Policy</a>
      <a href="<?php echo esc_url(vistaarflow_legal_url('terms-and-conditions')); ?>">Terms &amp; Conditions</a>
      <a href="<?php echo esc_url(vistaarflow_legal_url('refund-cancellation-policy')); ?>">Refund &amp; Cancellation
      Policy</a></span></div>
</footer>
<a class="whatsapp-chat" href="<?php echo esc_url(vistaarflow_whatsapp_url()); ?>" target="_blank"
  rel="noopener noreferrer" aria-label="<?php esc_attr_e('Chat with VistaarFlow on WhatsApp', 'vistaarflow'); ?>"><span
    class="whatsapp-tooltip"><?php esc_html_e('Chat with us', 'vistaarflow'); ?></span><svg viewBox="0 0 32 32"
    aria-hidden="true">
    <path fill="currentColor"
      d="M16.05 3A12.9 12.9 0 0 0 5 22.56L3.28 29l6.58-1.72A12.94 12.94 0 1 0 16.05 3Zm0 23.7c-2.03 0-4.02-.55-5.75-1.59l-.41-.24-3.9 1.02 1.04-3.8-.27-.43A10.7 10.7 0 1 1 16.05 26.7Zm5.87-8.02c-.32-.16-1.9-.94-2.19-1.05-.3-.11-.51-.16-.73.16-.21.32-.83 1.05-1.02 1.26-.19.22-.38.24-.7.08-.32-.16-1.36-.5-2.59-1.6a9.72 9.72 0 0 1-1.79-2.23c-.19-.32-.02-.5.14-.66.15-.14.32-.37.49-.56.16-.19.21-.32.32-.54.11-.21.05-.4-.03-.56-.08-.16-.73-1.75-1-2.4-.26-.63-.53-.54-.72-.55h-.62c-.22 0-.57.08-.86.4-.3.33-1.13 1.11-1.13 2.7s1.16 3.13 1.32 3.35c.16.21 2.28 3.48 5.52 4.88.77.33 1.37.53 1.84.68.77.24 1.47.21 2.03.13.62-.09 1.9-.78 2.17-1.53.27-.75.27-1.4.19-1.53-.08-.13-.3-.21-.62-.37Z" />
  </svg></a>
<?php wp_footer(); ?></body>

</html>