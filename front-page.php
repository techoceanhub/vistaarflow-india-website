<?php get_header(); ?>
<main id="main">
  <section class="hero">
    <div class="hero-glow"></div>
    <div class="container hero-grid">
      <div class="hero-copy reveal">
        <div class="eyebrow"><span></span> PREMIUM CRM FEATURES. WITH AFFORDABLE PRICE.</div>
        <h1>Low cost CRM. Built for <em>Small Businesses and MSMEs.</em></h1>
        <p>From startups and small businesses to real estate Agents, VistaarFlow helps you capture leads, automate
          follow-ups, manage pipelines, and close more opportunities from one place.</p>
        <div class="hero-actions">
  <a class="button" href="https://app.vistaarflow.in/signup">Start 14 days free-trial <span>→</span></a>
  <a class="button2" href="<?php echo esc_url(home_url('/contact')); ?>"><i>▶</i> Schedule Demo</a>
</div>
        <div class="trust-row">
          <div class="avatars"><b>VK</b><b>AM</b><b>RS</b><b>+</b></div>
          <p><strong>Simple setup. Real support.</strong><br>No credit card required</p>
        </div>
      </div>
      <div class="hero-visual reveal">
        <div class="animated-dashboard"><img class="hero-dashboard-image"
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/crm-dashboard-v2.png'); ?>"
            alt="VistaarFlow CRM sales dashboard showing leads, revenue, lead performance and AI notifications">
          <div class="metric-overlay metric-leads" aria-hidden="true"><strong class="dashboard-counter"
              data-count="2840">0</strong></div>
          <div class="metric-overlay metric-won" aria-hidden="true"><strong class="dashboard-counter"
              data-count="846">0</strong></div>
          <div class="metric-overlay metric-revenue" aria-hidden="true"><strong><span class="dashboard-counter"
                data-count="84">0</span><span class="metric-decimal">L</span></strong></div><svg class="animated-wave"
            viewBox="0 0 1000 260" aria-hidden="true">
            <defs>
              <linearGradient id="hero-wave-fill" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0" stop-color="#5b70f5" stop-opacity=".22" />
                <stop offset="1" stop-color="#5b70f5" stop-opacity="0" />
              </linearGradient>
            </defs>
            <path class="wave-fill"
              d="M0 210 C95 228 110 190 190 198 S300 142 390 160 S500 94 600 118 S710 72 795 94 S910 42 1000 52 L1000 260 L0 260Z" />
            <path class="wave-line"
              d="M0 210 C95 228 110 190 190 198 S300 142 390 160 S500 94 600 118 S710 72 795 94 S910 42 1000 52" />
            <circle class="wave-dot" r="7">
              <animateMotion dur="4.5s" repeatCount="indefinite"
                path="M0 210 C95 228 110 190 190 198 S300 142 390 160 S500 94 600 118 S710 72 795 94 S910 42 1000 52" />
            </circle>
          </svg>
        </div>
      </div>
    </div>
  </section>
  <style id="vistaarflow-integrations-bar">
    .integrations-bar {
      background: #fff;
      padding: 34px 0 30px;
      overflow: hidden;
    }

    .integrations-bar .container {
      display: flex;
      align-items: center;
      gap: 40px;
    }

    .integrations-bar-text {
      flex: 0 0 auto;
      max-width: 230px;
      font-size: 16px;
      font-weight: 700;
      line-height: 1.35;
      color: #0b1220;
    }

    /* Marquee viewport */
    .integrations-bar-marquee {
      position: relative;
      flex: 1 1 auto;
      overflow: hidden;
      columns: black;
      -webkit-mask-image: linear-gradient(to right, transparent 0, #000 60px, #000 calc(100% - 60px), transparent 100%);
      mask-image: linear-gradient(to right, transparent 0, #000 60px, #000 calc(100% - 60px), transparent 100%);
    }

    .integrations-bar-track {
      display: flex;
      align-items: center;
      width: max-content;
      gap: 56px;
      animation: integrations-bar-scroll 28s linear infinite;
    }

    .integrations-bar-marquee:hover .integrations-bar-track {
      animation-play-state: paused;
    }

    .integrations-bar-item {
      flex: 0 0 auto;
      display: flex;
      align-items: center;
      gap: 9px;
      height: 34px;
      white-space: nowrap;
    }

    .integrations-bar-item svg {
      width: 20px;
      height: 20px;
      flex-shrink: 0;
      color: #215af8;
      transition: color .2s ease;
    }

    .integrations-bar-item span {
      font-size: 22px;
      font-weight: 800;
      letter-spacing: -0.01em;
      color: #215af8;
      transition: color .2s ease;
    }

    .integrations-bar-item:hover svg,
    .integrations-bar-item:hover span {
      color: #031649;
    }

    @keyframes integrations-bar-scroll {
      from {
        transform: translateX(0);
      }

      to {
        /* moves exactly one full (unduplicated) set width to the left for a seamless loop */
        transform: translateX(-50%);
      }
    }

    @media (max-width: 780px) {
      .integrations-bar .container {
        flex-direction: column;
        align-items: flex-start;
        gap: 18px;
      }

      .integrations-bar-text {
        max-width: none;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .integrations-bar-track {
        animation: none;
      }

      .integrations-bar-marquee {
        overflow-x: auto;
      }
    }
  </style>

  <section class="integrations-bar">
    <div class="container">
      <p class="integrations-bar-text">Integrated with the tools you already use</p>

      <div class="integrations-bar-marquee">
        <?php
        /*
         * One entry per integration. `svg` is a small inline icon (currentColor, so it
         * inherits the grayscale/hover-color behaviour automatically) — leave it empty
         * to show just the text label. Duplicated once below for a seamless loop.
         */
        $integrations = [
          [
            'name' => 'WhatsApp',
            'svg' => '<path d="M12 2a10 10 0 00-8.6 15.1L2 22l5.1-1.3A10 10 0 1012 2zm0 18.2a8.2 8.2 0 01-4.2-1.1l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1112 20.2zm4.5-6.1c-.2-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1-.2.2-.7.8-.8.9-.1.2-.3.2-.5.1-.2-.1-1-.4-1.9-1.2-.7-.6-1.2-1.4-1.3-1.6-.1-.2 0-.4.1-.5.1-.1.2-.3.4-.4.1-.1.2-.2.2-.4.1-.1 0-.3 0-.4-.1-.1-.6-1.4-.8-1.9-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.4.1-.6.3-.2.2-.8.8-.8 2s.8 2.3.9 2.5c.1.2 1.6 2.5 3.9 3.5.5.2.9.4 1.3.5.5.2 1 .1 1.4.1.4-.1 1.5-.6 1.7-1.2.2-.6.2-1.1.1-1.2-.1-.1-.2-.2-.4-.3z" fill="currentColor"/>',
          ],
          [
            'name' => 'Meta',
            'svg' => '<path d="M14.5 21v-7.6h2.6l.4-3H14.5v-1.9c0-.9.3-1.5 1.6-1.5h1.6V4.3c-.3 0-1.3-.1-2.4-.1-2.4 0-4 1.4-4 4.1v2.1H8.7v3h2.6V21h3.2z" fill="currentColor"/>',
          ],
          [
            'name' => 'Gmail',
            'svg' => '<path d="M3 6.5A1.5 1.5 0 014.5 5h15A1.5 1.5 0 0121 6.5v11a1.5 1.5 0 01-1.5 1.5h-15A1.5 1.5 0 013 17.5v-11zm2 .3v.2l7 5.2 7-5.2v-.2l-7 5-7-5z" fill="currentColor"/>',
          ],
          [
            'name' => 'Microsoft',
            'svg' => '
        <rect x="3" y="3" width="8" height="8" fill="currentColor"/>
        <rect x="13" y="3" width="8" height="8" fill="currentColor"/>
        <rect x="3" y="13" width="8" height="8" fill="currentColor"/>
        <rect x="13" y="13" width="8" height="8" fill="currentColor"/>
    ',
          ],
          [
            'name' => 'Plivio',
            'svg' => '<path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.4c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" fill="none"/>',
          ],
          // [
          //   'name' => 'Zapier',
          //   'svg' => '<path d="M11 2h2v8.6L19.7 5l1.4 1.4-6.5 6.6H23v2h-8.4l6.5 6.6-1.4 1.4-6.7-6.6V22h-2v-8.6L4.3 20 2.9 18.6l6.5-6.6H1v-2h8.4L2.9 5.4 4.3 4l6.7 6.6V2z" fill="currentColor"/>',
          // ],
          [
            'name' => '99acres',
            'svg' => '<path d="M3 10.5L12 3l9 7.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" fill="none"/><path d="M5 9.5V20a1 1 0 001 1h4v-6h4v6h4a1 1 0 001-1V9.5" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" fill="none"/>',
          ],
          [
            'name' => 'MagicBricks',
            'svg' => '<rect x="4" y="4" width="7" height="7" rx="1" stroke="currentColor" stroke-width="1.6" fill="none"/><rect x="13" y="4" width="7" height="7" rx="1" stroke="currentColor" stroke-width="1.6" fill="none"/><rect x="4" y="13" width="7" height="7" rx="1" stroke="currentColor" stroke-width="1.6" fill="none"/><rect x="13" y="13" width="7" height="7" rx="1" stroke="currentColor" stroke-width="1.6" fill="none"/>',
          ],
          [
            'name' => 'Housing.com',
            'svg' => '<path d="M4 11l8-7 8 7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" fill="none"/><path d="M6 10v9a1 1 0 001 1h10a1 1 0 001-1v-9" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" fill="none"/><path d="M10 20v-5h4v5" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" fill="none"/>',
          ],
          [
            'name' => 'Open Ai',
            'svg' => '
        <path d="M12 3a4 4 0 013.5 2 4 4 0 014.5 4 4 4 0 01-.5 6
        4 4 0 01-3.5 5 4 4 0 01-6.5 1 4 4 0 01-5-4
        4 4 0 01.5-6 4 4 0 013.5-5A4 4 0 0112 3z"
        fill="none"
        stroke="currentColor"
        stroke-width="1.6"
        stroke-linecap="round"
        stroke-linejoin="round"/>
        <path d="M9 8l6 3.5v7M15 8l-6 3.5v7M6 11.5l6 3.5 6-3.5"
        fill="none"
        stroke="currentColor"
        stroke-width="1.6"
        stroke-linecap="round"
        stroke-linejoin="round"/>
    ',
          ],

          [
            'name' => 'Gemini',
            'svg' => '
        <path d="M12 2
        C12.7 7.3 16.7 11.3 22 12
        C16.7 12.7 12.7 16.7 12 22
        C11.3 16.7 7.3 12.7 2 12
        C7.3 11.3 11.3 7.3 12 2Z"
        fill="currentColor"/>
    ',
          ],

          [
            'name' => 'Claude',
            'svg' => '
        <path d="M12 3v18M3 12h18
        M5.6 5.6l12.8 12.8
        M18.4 5.6L5.6 18.4
        M8.5 3.8l7 16.4
        M15.5 3.8l-7 16.4
        M3.8 8.5l16.4 7
        M3.8 15.5l16.4-7"
        fill="none"
        stroke="currentColor"
        stroke-width="1.7"
        stroke-linecap="round"/>
    ',
          ],
        ];

        // Duplicate the list once so the marquee can loop seamlessly (translateX(-50%)).
        $integrations_loop = array_merge($integrations, $integrations);
        ?>
        <div class="integrations-bar-track">
          <?php foreach ($integrations_loop as $item): ?>
            <div class="integrations-bar-item">
              <?php if (!empty($item['svg'])): ?>
                <svg viewBox="0 0 24 24" aria-hidden="true"><?php echo $item['svg']; ?></svg>
              <?php endif; ?>
              <span><?php echo esc_html($item['name']); ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
  <section class="trial-strip" aria-label="14-day free trial offer">
    <div class="trial-strip-bg" aria-hidden="true">
      <span class="trial-orb orb-a"></span>
      <span class="trial-orb orb-b"></span>
      <span class="trial-strip-grid"></span>
    </div>
    <div class="container trial-strip-inner">
      <div class="trial-strip-text">
        <span class="trial-strip-badge trial-strip-cta">14-DAY FREE TRIAL</span>
        <h3>Try VistaarFlow, free for 14 days.</h3>
        <p>Full access to leads, pipelines, automation and AI — explore everything before you commit.</p>
        <div class="trial-strip-perks">
          <span>✓ No Card Required</span>
          <span>✓ No Restrictions</span>
          <span>✓ Cancel anytime</span>
          <span>✓ Guided setup included</span>
        </div>
      </div>
      <a class="trial-strip-cta" href="https://app.vistaarflow.in/signup">Start free trial →</a>
    </div>
  </section>
  <!-- <section class="offer-banner">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/offerbanner.png'); ?>" alt="">
  </section> -->
<!-- ============================================================
     PASTE THIS in front-page.php, directly ABOVE:
        <section class="audience-section" aria-labelledby="audience-title">
     ============================================================ -->

<style id="vistaarflow-pipeline-showcase">
  .pipeline-showcase {
    position: relative;
    background: linear-gradient(180deg, #f5f8ff 0%, #ffffff 100%);
    padding: 88px 0;
    overflow: hidden;
  }

  .pipeline-showcase-layout {
    display: grid;
    grid-template-columns: minmax(0, 5fr) minmax(0, 7fr);
    align-items: center;
    gap: 56px;
  }

  .pipeline-showcase-copy h2 {
    margin: 14px 0 18px;
  }

  .pipeline-showcase-copy>p {
    color: #475069;
    font-size: 17px;
    line-height: 1.7;
    margin: 0 0 22px;
    max-width: 62ch;
  }

  .pipeline-showcase-points {
    list-style: none;
    margin: 0 0 30px;
    padding: 0;
    display: grid;
    gap: 16px;
  }

  .pipeline-showcase-points li {
    display: grid;
    grid-template-columns: 26px 1fr;
    gap: 12px;
    align-items: start;
  }

  .pipeline-showcase-points i {
    width: 26px;
    height: 26px;
    border-radius: 50%;
    background: #e4ecff;
    color: #215af8;
    font-style: normal;
    font-weight: 800;
    font-size: 13px;
    display: grid;
    place-items: center;
    margin-top: 2px;
  }

  .pipeline-showcase-points h3 {
    font-size: 16px;
    line-height: 1.35;
    margin: 0 0 3px;
    color: #0b1220;
  }

  .pipeline-showcase-points p {
    font-size: 14.5px;
    line-height: 1.6;
    color: #5b657d;
    margin: 0;
  }

  .pipeline-showcase-actions {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 22px;
  }

  /* Browser-style frame around the screenshot */
  .pipeline-showcase-figure {
    margin: 0;
    position: relative;
  }

  .pipeline-showcase-frame {
    background: #fff;
    border: 1px solid #dbe3f5;
    border-radius: 16px;
    box-shadow: 0 30px 70px -28px rgba(3, 22, 73, .35);
    overflow: hidden;
  }

  .pipeline-showcase-bar {
    display: flex;
    align-items: center;
    gap: 7px;
    padding: 11px 14px;
    background: #f1f4fb;
    border-bottom: 1px solid #dbe3f5;
  }

  .pipeline-showcase-bar span {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #cfd7ea;
  }

  .pipeline-showcase-bar small {
    margin-left: 10px;
    font-size: 12px;
    color: #6b7590;
  }

  .pipeline-showcase-frame img {
    display: block;
    width: 100%;
    height: auto;
  }

  .pipeline-showcase-figure figcaption {
    margin-top: 14px;
    font-size: 13.5px;
    color: #6b7590;
    text-align: center;
  }

  @media (max-width: 980px) {
    .pipeline-showcase {
      padding: 64px 0;
    }

    .pipeline-showcase-layout {
      grid-template-columns: 1fr;
      gap: 40px;
    }
  }
</style>

<!-- ============================================================
     PASTE THIS in front-page.php, directly ABOVE:
        <section class="audience-section" aria-labelledby="audience-title">

     IMAGE: upload pipeline-dashboard-clean.webp to
        /assets/images/pipeline-dashboard-clean.webp
     (this version has the "Get in Touch" box removed - the box
      is rebuilt below in HTML/CSS so it can be animated)
     ============================================================ -->

<style id="vistaarflow-pipeline-showcase">
  .pps {
    position: relative;
    background: linear-gradient(180deg, #f5f8ff 0%, #ffffff 100%);
    padding: 88px 0 80px;
    overflow: hidden;
  }

  .pps-head {
    text-align: center;
    max-width: 780px;
    margin: 0 auto 44px;
  }

  .pps-head h2 {
    margin: 14px 0 16px;
  }

  .pps-head p {
    color: #475069;
    font-size: 17px;
    line-height: 1.7;
    margin: 0;
  }

  /* ---------- Image stage ---------- */
  .pps-figure {
    margin: 0 auto;
    max-width: 1180px;
  }

  .pps-stage {
    position: relative;
    container-type: inline-size;
  }

  .pps-stage>img {
    display: block;
    width: 100%;
    height: auto;
    border-radius: 22px;
    box-shadow: 0 34px 70px -30px rgba(3, 22, 73, .38);
  }

  .pps-figure figcaption {
    margin-top: 16px;
    text-align: center;
    font-size: 13.5px;
    color: #6b7590;
  }

  /* ---------- Animated "Get in Touch" card ----------
     Everything is sized from --u (1 unit = 1px of the 1672px-wide image),
     so the card scales together with the screenshot. */
  .pps-contact {
    --u: calc(100cqw / 1672);
    position: absolute;
    left: 81.7%;
    top: 27.8%;
    width: 17.7%;
    box-sizing: border-box;
    padding: calc(var(--u) * 26) calc(var(--u) * 26) calc(var(--u) * 28);
    border-radius: calc(var(--u) * 30);
    background: linear-gradient(160deg, rgba(255, 255, 255, .97), rgba(240, 245, 255, .95));
    border: 1px solid rgba(255, 255, 255, .9);
    box-shadow: 0 calc(var(--u) * 30) calc(var(--u) * 60) calc(var(--u) * -18) rgba(3, 22, 73, .35);
    animation: pps-float 7s ease-in-out infinite;
    will-change: transform;
  }

  .pps-contact[hidden] {
    display: none;
  }

  .pps-close {
    position: absolute;
    top: calc(var(--u) * 14);
    right: calc(var(--u) * 14);
    width: calc(var(--u) * 30);
    height: calc(var(--u) * 30);
    border: 0;
    border-radius: 50%;
    background: #fff;
    color: #0b1220;
    font-size: calc(var(--u) * 20);
    line-height: 1;
    display: grid;
    place-items: center;
    padding: 0;
    cursor: pointer;
    box-shadow: 0 2px 8px rgba(3, 22, 73, .18);
  }

  .pps-plane {
    position: absolute;
    top: calc(var(--u) * 52);
    right: calc(var(--u) * 26);
    width: calc(var(--u) * 92);
    height: calc(var(--u) * 92);
    overflow: visible;
    pointer-events: none;
  }

  .pps-plane .pps-plane-icon {
    animation: pps-fly 4.2s ease-in-out infinite;
    transform-origin: center;
    transform-box: fill-box;
  }

  .pps-plane .pps-trail {
    stroke-dasharray: 4 6;
    animation: pps-dash 1.6s linear infinite;
  }

  .pps-contact-title {
    margin: calc(var(--u) * 62) 0 calc(var(--u) * 8);
    font-size: calc(var(--u) * 33);
    line-height: 1.1;
    font-weight: 800;
    letter-spacing: -.02em;
    color: #0b1220;
  }

  .pps-contact-sub {
    margin: 0 0 calc(var(--u) * 26);
    max-width: 82%;
    font-size: calc(var(--u) * 19);
    line-height: 1.35;
    color: #4d5875;
  }

  .pps-row {
    position: relative;
    display: grid;
    grid-template-columns: calc(var(--u) * 52) 1fr auto;
    align-items: center;
    gap: calc(var(--u) * 14);
    padding: calc(var(--u) * 13) calc(var(--u) * 16);
    margin-top: calc(var(--u) * 14);
    border-radius: calc(var(--u) * 16);
    text-decoration: none;
    color: #0b1220;
    opacity: 0;
    animation: pps-in .7s cubic-bezier(.2, .8, .2, 1) forwards;
    transition: transform .25s ease, box-shadow .25s ease;
  }

  .pps-row:hover {
    transform: translateX(calc(var(--u) * -4));
    box-shadow: 0 8px 20px -10px rgba(3, 22, 73, .35);
  }

  .pps-row:focus-visible,
  .pps-close:focus-visible {
    outline: 2px solid #215af8;
    outline-offset: 2px;
  }

  .pps-row-call {
    background: rgba(16, 185, 129, .13);
    animation-delay: .15s;
    --c: #12a15b;
  }

  .pps-row-mail {
    background: rgba(33, 90, 248, .11);
    animation-delay: .3s;
    --c: #1f6bff;
  }

  .pps-row-chat {
    background: rgba(124, 58, 237, .11);
    animation-delay: .45s;
    --c: #7c3aed;
  }

  .pps-ico {
    position: relative;
    width: calc(var(--u) * 52);
    height: calc(var(--u) * 52);
    border-radius: 50%;
    background: var(--c);
    display: grid;
    place-items: center;
  }

  /* soft pulse ring behind each icon, staggered */
  .pps-ico::after {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 50%;
    border: 2px solid var(--c);
    animation: pps-pulse 2.6s ease-out infinite;
  }

  .pps-row-mail .pps-ico::after {
    animation-delay: .8s;
  }

  .pps-row-chat .pps-ico::after {
    animation-delay: 1.6s;
  }

  .pps-ico svg {
    width: 52%;
    height: 52%;
    fill: none;
    stroke: #fff;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .pps-row-call .pps-ico svg {
    animation: pps-ring 3.2s ease-in-out infinite;
    transform-origin: 50% 50%;
  }

  .pps-row-mail .pps-ico svg {
    animation: pps-bob 3.2s ease-in-out .6s infinite;
  }

  .pps-row-chat .pps-ico svg {
    animation: pps-bob 3.2s ease-in-out 1.2s infinite;
  }

  .pps-txt b {
    display: block;
    font-size: calc(var(--u) * 19);
    line-height: 1.2;
  }

  .pps-txt small {
    display: block;
    margin-top: 2px;
    font-size: calc(var(--u) * 15);
    color: #55617c;
  }

  .pps-arrow {
    font-size: calc(var(--u) * 24);
    color: var(--c);
    animation: pps-nudge 2.4s ease-in-out infinite;
  }

  .pps-row-mail .pps-arrow {
    animation-delay: .4s;
  }

  .pps-row-chat .pps-arrow {
    animation-delay: .8s;
  }

  @keyframes pps-float {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(calc(var(--u) * -14));
    }
  }

  @keyframes pps-in {
    from {
      opacity: 0;
      transform: translateX(calc(var(--u) * 24));
    }

    to {
      opacity: 1;
      transform: none;
    }
  }

  @keyframes pps-fly {

    0%,
    100% {
      transform: translate(0, 0) rotate(0);
    }

    50% {
      transform: translate(6px, -8px) rotate(6deg);
    }
  }

  @keyframes pps-dash {
    to {
      stroke-dashoffset: -20;
    }
  }

  @keyframes pps-pulse {
    0% {
      transform: scale(1);
      opacity: .55;
    }

    70%,
    100% {
      transform: scale(1.55);
      opacity: 0;
    }
  }

  @keyframes pps-ring {

    0%,
    60%,
    100% {
      transform: rotate(0);
    }

    66% {
      transform: rotate(-14deg);
    }

    72% {
      transform: rotate(12deg);
    }

    78% {
      transform: rotate(-10deg);
    }

    84% {
      transform: rotate(8deg);
    }

    90% {
      transform: rotate(0);
    }
  }

  @keyframes pps-bob {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-2px) scale(1.06);
    }
  }

  @keyframes pps-nudge {

    0%,
    100% {
      transform: translateX(0);
    }

    50% {
      transform: translateX(calc(var(--u) * 7));
    }
  }

  /* ---------- Feature points ---------- */
  .pps-points {
    list-style: none;
    margin: 56px 0 34px;
    padding: 0;
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 28px;
  }

  .pps-points h3 {
    font-size: 16.5px;
    line-height: 1.35;
    margin: 0 0 6px;
    color: #0b1220;
  }

  .pps-points p {
    font-size: 14.5px;
    line-height: 1.65;
    color: #5b657d;
    margin: 0;
  }

  .pps-points li {
    padding-top: 16px;
    border-top: 2px solid #215af8;
  }

  .pps-actions {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 24px;
  }

  @media (max-width: 980px) {
    .pps {
      padding: 64px 0;
    }

    .pps-points {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }

  /* Phones: the card leaves the image and sits below it at normal size */
  @media (max-width: 720px) {
    .pps-contact {
      --u: 1px;
      position: relative;
      left: auto;
      top: auto;
      width: auto;
      margin: -28px 14px 0;
      padding: 22px 20px 22px;
    }

    .pps-contact-title {
      margin-top: 26px;
      font-size: 24px;
    }

    .pps-plane {
      width: 64px;
      height: 64px;
      top: 22px;
    }

    .pps-points {
      grid-template-columns: 1fr;
    }
  }

  @media (prefers-reduced-motion: reduce) {

    .pps-contact,
    .pps-row,
    .pps-arrow,
    .pps-ico::after,
    .pps-ico svg,
    .pps-plane .pps-plane-icon,
    .pps-plane .pps-trail {
      animation: none !important;
    }

    .pps-row {
      opacity: 1;
    }
  }
</style>

<!-- ============================================================
     PASTE THIS in front-page.php, directly ABOVE:
        <section class="audience-section" aria-labelledby="audience-title">

     IMAGE: upload pipeline-dashboard-clean.png to
        /assets/images/pipeline-dashboard-clean.png
     (this version has the "Get in Touch" box removed - the box
      is rebuilt below in HTML/CSS so it can be animated)
     ============================================================ -->

<style id="vistaarflow-pipeline-showcase">
  .pps {
    position: relative;
    background: linear-gradient(180deg, #f5f8ff 0%, #ffffff 100%);
    padding: 88px 0 80px;
    overflow: hidden;
  }

  .pps-head {
    text-align: center;
    max-width: 780px;
    margin: 0 auto 44px;
  }

  .pps-head h2 {
    margin: 14px 0 16px;
  }

  .pps-head p {
    color: #475069;
    font-size: 17px;
    line-height: 1.7;
    margin: 0;
  }

  /* ---------- Image stage ---------- */
  .pps-figure {
    margin: 0 auto;
    max-width: 1180px;
  }

  .pps-stage {
    position: relative;
    container-type: inline-size;
  }

  .pps-stage>img {
    display: block;
    width: 100%;
    height: auto;
    border-radius: 22px;
    box-shadow: 0 34px 70px -30px rgba(3, 22, 73, .38);
  }

  .pps-figure figcaption {
    margin-top: 16px;
    text-align: center;
    font-size: 13.5px;
    color: #6b7590;
  }

  /* ---------- Animated "Get in Touch" card ----------
     Everything is sized from --u (1 unit = 1px of the 1672px-wide image),
     so the card scales together with the screenshot. */
  .pps-contact {
    --u: calc(100cqw / 1672);
    position: absolute;
    left: 81.7%;
    top: 27.8%;
    width: 17.7%;
    box-sizing: border-box;
    padding: calc(var(--u) * 26) calc(var(--u) * 26) calc(var(--u) * 28);
    border-radius: calc(var(--u) * 30);
    background: linear-gradient(160deg, rgba(255, 255, 255, .97), rgba(240, 245, 255, .95));
    border: 1px solid rgba(255, 255, 255, .9);
    box-shadow: 0 calc(var(--u) * 30) calc(var(--u) * 60) calc(var(--u) * -18) rgba(3, 22, 73, .35);
    animation: pps-float 7s ease-in-out infinite;
    will-change: transform;
  }

  .pps-contact[hidden] {
    display: none;
  }

  .pps-close {
    position: absolute;
    top: calc(var(--u) * 14);
    right: calc(var(--u) * 14);
    width: calc(var(--u) * 30);
    height: calc(var(--u) * 30);
    border: 0;
    border-radius: 50%;
    background: #fff;
    color: #0b1220;
    font-size: calc(var(--u) * 20);
    line-height: 1;
    display: grid;
    place-items: center;
    padding: 0;
    cursor: pointer;
    box-shadow: 0 2px 8px rgba(3, 22, 73, .18);
  }

  .pps-plane {
    position: absolute;
    top: calc(var(--u) * 52);
    right: calc(var(--u) * 26);
    width: calc(var(--u) * 92);
    height: calc(var(--u) * 92);
    overflow: visible;
    pointer-events: none;
  }

  .pps-plane .pps-plane-icon {
    animation: pps-fly 4.2s ease-in-out infinite;
    transform-origin: center;
    transform-box: fill-box;
  }

  .pps-plane .pps-trail {
    stroke-dasharray: 4 6;
    animation: pps-dash 1.6s linear infinite;
  }

  .pps-contact-title {
    margin: calc(var(--u) * 62) 0 calc(var(--u) * 8);
    font-size: calc(var(--u) * 33);
    line-height: 1.1;
    font-weight: 800;
    letter-spacing: -.02em;
    color: #0b1220;
  }

  .pps-contact-sub {
    margin: 0 0 calc(var(--u) * 26);
    max-width: 82%;
    font-size: calc(var(--u) * 19);
    line-height: 1.35;
    color: #4d5875;
  }

  .pps-row {
    position: relative;
    display: grid;
    grid-template-columns: calc(var(--u) * 52) 1fr auto;
    align-items: center;
    gap: calc(var(--u) * 14);
    padding: calc(var(--u) * 13) calc(var(--u) * 16);
    margin-top: calc(var(--u) * 14);
    border-radius: calc(var(--u) * 16);
    text-decoration: none;
    color: #0b1220;
    opacity: 0;
    animation: pps-in .7s cubic-bezier(.2, .8, .2, 1) forwards;
    transition: transform .25s ease, box-shadow .25s ease;
  }

  .pps-row:hover {
    transform: translateX(calc(var(--u) * -4));
    box-shadow: 0 8px 20px -10px rgba(3, 22, 73, .35);
  }

  .pps-row:focus-visible,
  .pps-close:focus-visible {
    outline: 2px solid #215af8;
    outline-offset: 2px;
  }

  .pps-row-call {
    background: rgba(16, 185, 129, .13);
    animation-delay: .15s;
    --c: #12a15b;
  }

  .pps-row-mail {
    background: rgba(33, 90, 248, .11);
    animation-delay: .3s;
    --c: #1f6bff;
  }

  .pps-row-chat {
    background: rgba(124, 58, 237, .11);
    animation-delay: .45s;
    --c: #7c3aed;
  }

  .pps-ico {
    position: relative;
    width: calc(var(--u) * 52);
    height: calc(var(--u) * 52);
    border-radius: 50%;
    background: var(--c);
    display: grid;
    place-items: center;
  }

  /* soft pulse ring behind each icon, staggered */
  .pps-ico::after {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 50%;
    border: 2px solid var(--c);
    animation: pps-pulse 2.6s ease-out infinite;
  }

  .pps-row-mail .pps-ico::after {
    animation-delay: .8s;
  }

  .pps-row-chat .pps-ico::after {
    animation-delay: 1.6s;
  }

  .pps-ico svg {
    width: 52%;
    height: 52%;
    fill: none;
    stroke: #fff;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .pps-row-call .pps-ico svg {
    animation: pps-ring 3.2s ease-in-out infinite;
    transform-origin: 50% 50%;
  }

  .pps-row-mail .pps-ico svg {
    animation: pps-bob 3.2s ease-in-out .6s infinite;
  }

  .pps-row-chat .pps-ico svg {
    animation: pps-bob 3.2s ease-in-out 1.2s infinite;
  }

  .pps-txt b {
    display: block;
    font-size: calc(var(--u) * 19);
    line-height: 1.2;
  }

  .pps-txt small {
    display: block;
    margin-top: 2px;
    font-size: calc(var(--u) * 15);
    color: #55617c;
  }

  .pps-arrow {
    font-size: calc(var(--u) * 24);
    color: var(--c);
    animation: pps-nudge 2.4s ease-in-out infinite;
  }

  .pps-row-mail .pps-arrow {
    animation-delay: .4s;
  }

  .pps-row-chat .pps-arrow {
    animation-delay: .8s;
  }

  @keyframes pps-float {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(calc(var(--u) * -14));
    }
  }

  @keyframes pps-in {
    from {
      opacity: 0;
      transform: translateX(calc(var(--u) * 24));
    }

    to {
      opacity: 1;
      transform: none;
    }
  }

  @keyframes pps-fly {

    0%,
    100% {
      transform: translate(0, 0) rotate(0);
    }

    50% {
      transform: translate(6px, -8px) rotate(6deg);
    }
  }

  @keyframes pps-dash {
    to {
      stroke-dashoffset: -20;
    }
  }

  @keyframes pps-pulse {
    0% {
      transform: scale(1);
      opacity: .55;
    }

    70%,
    100% {
      transform: scale(1.55);
      opacity: 0;
    }
  }

  @keyframes pps-ring {

    0%,
    60%,
    100% {
      transform: rotate(0);
    }

    66% {
      transform: rotate(-14deg);
    }

    72% {
      transform: rotate(12deg);
    }

    78% {
      transform: rotate(-10deg);
    }

    84% {
      transform: rotate(8deg);
    }

    90% {
      transform: rotate(0);
    }
  }

  @keyframes pps-bob {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-2px) scale(1.06);
    }
  }

  @keyframes pps-nudge {

    0%,
    100% {
      transform: translateX(0);
    }

    50% {
      transform: translateX(calc(var(--u) * 7));
    }
  }

  /* ---------- Feature points ---------- */
  .pps-points {
    list-style: none;
    margin: 56px 0 34px;
    padding: 0;
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 28px;
  }

  .pps-points h3 {
    font-size: 16.5px;
    line-height: 1.35;
    margin: 0 0 6px;
    color: #0b1220;
  }

  .pps-points p {
    font-size: 14.5px;
    line-height: 1.65;
    color: #5b657d;
    margin: 0;
  }

  .pps-points li {
    padding-top: 16px;
    border-top: 2px solid #215af8;
  }

  .pps-actions {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 24px;
  }

  @media (max-width: 980px) {
    .pps {
      padding: 64px 0;
    }

    .pps-points {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }

  /* Phones: the card leaves the image and sits below it at normal size */
  @media (max-width: 720px) {
    .pps-contact {
      --u: 1px;
      position: relative;
      left: auto;
      top: auto;
      width: auto;
      margin: -28px 14px 0;
      padding: 22px 20px 22px;
    }

    .pps-contact-title {
      margin-top: 26px;
      font-size: 24px;
    }

    .pps-plane {
      width: 64px;
      height: 64px;
      top: 22px;
    }

    .pps-points {
      grid-template-columns: 1fr;
    }
  }

  /* ---------- Start animations only when scrolled into view ----------
     JS adds .pps-armed on load (paused), then .pps-live when visible.
     Without JS nothing is paused, so the card still animates. */
  .pps-stage.pps-armed .pps-contact,
  .pps-stage.pps-armed .pps-contact *,
  .pps-stage.pps-armed .pps-contact *::after {
    animation-play-state: paused;
  }

  .pps-stage.pps-armed.pps-live .pps-contact,
  .pps-stage.pps-armed.pps-live .pps-contact *,
  .pps-stage.pps-armed.pps-live .pps-contact *::after {
    animation-play-state: running;
  }

  @media (prefers-reduced-motion: reduce) {

    .pps-contact,
    .pps-row,
    .pps-arrow,
    .pps-ico::after,
    .pps-ico svg,
    .pps-plane .pps-plane-icon,
    .pps-plane .pps-trail {
      animation: none !important;
    }

    .pps-row {
      opacity: 1;
    }
  }
</style>

<!-- ============================================================
     PASTE THIS in front-page.php, directly ABOVE:
        <section class="audience-section" aria-labelledby="audience-title">

     IMAGE: upload pipeline-dashboard-clean.png to
        /assets/images/pipeline-dashboard-clean.png
     (this version has the "Get in Touch" box removed - the box
      is rebuilt below in HTML/CSS so it can be animated)
     ============================================================ -->

<style id="vistaarflow-pipeline-showcase">
  .pps {
    position: relative;
    background: linear-gradient(180deg, #f5f8ff 0%, #ffffff 100%);
    padding: 88px 0 80px;
    overflow: hidden;
  }

  .pps-head {
    text-align: center;
    max-width: 780px;
    margin: 0 auto 44px;
  }

  .pps-head h2 {
    margin: 14px 0 16px;
  }

  .pps-head p {
    color: #475069;
    font-size: 17px;
    line-height: 1.7;
    margin: 0;
  }

  /* ---------- Image stage ---------- */
  .pps-figure {
    margin: 0 auto;
    max-width: 1180px;
  }

  .pps-stage {
    position: relative;
    container-type: inline-size;
  }

  .pps-stage>img {
    display: block;
    width: 100%;
    height: auto;
    border-radius: 22px;
    box-shadow: 0 34px 70px -30px rgba(3, 22, 73, .38);
  }

  .pps-figure figcaption {
    margin-top: 16px;
    text-align: center;
    font-size: 13.5px;
    color: #6b7590;
  }

  /* ---------- Animated "Get in Touch" card ----------
     Everything is sized from --u (1 unit = 1px of the 1672px-wide image),
     so the card scales together with the screenshot. */
  .pps-contact {
    --u: calc(100cqw / 1672);
    position: absolute;
    left: 81.7%;
    top: 27.8%;
    width: 17.7%;
    box-sizing: border-box;
    padding: calc(var(--u) * 26) calc(var(--u) * 26) calc(var(--u) * 28);
    border-radius: calc(var(--u) * 30);
    background: linear-gradient(160deg, rgba(255, 255, 255, .97), rgba(240, 245, 255, .95));
    border: 1px solid rgba(255, 255, 255, .9);
    box-shadow: 0 calc(var(--u) * 30) calc(var(--u) * 60) calc(var(--u) * -18) rgba(3, 22, 73, .35);
    animation: pps-float 7s ease-in-out infinite;
    will-change: transform;
  }

  .pps-contact[hidden] {
    display: none;
  }

  .pps-close {
    position: absolute;
    top: calc(var(--u) * 14);
    right: calc(var(--u) * 14);
    width: calc(var(--u) * 30);
    height: calc(var(--u) * 30);
    border: 0;
    border-radius: 50%;
    background: #fff;
    color: #0b1220;
    font-size: calc(var(--u) * 20);
    line-height: 1;
    display: grid;
    place-items: center;
    padding: 0;
    cursor: pointer;
    box-shadow: 0 2px 8px rgba(3, 22, 73, .18);
  }

  .pps-plane {
    position: absolute;
    top: calc(var(--u) * 52);
    right: calc(var(--u) * 26);
    width: calc(var(--u) * 92);
    height: calc(var(--u) * 92);
    overflow: visible;
    pointer-events: none;
  }

  .pps-plane .pps-plane-icon {
    animation: pps-fly 6.5s ease-in-out infinite;
    transform-origin: center;
    transform-box: fill-box;
  }

  .pps-plane .pps-trail {
    stroke-dasharray: 4 6;
    animation: pps-dash 3s linear infinite;
  }

  .pps-contact-title {
    margin: calc(var(--u) * 62) 0 calc(var(--u) * 8);
    font-size: calc(var(--u) * 33);
    line-height: 1.1;
    font-weight: 800;
    letter-spacing: -.02em;
    color: #0b1220;
  }

  .pps-contact-sub {
    margin: 0 0 calc(var(--u) * 26);
    max-width: 82%;
    font-size: calc(var(--u) * 19);
    line-height: 1.35;
    color: #4d5875;
  }

  .pps-row {
    position: relative;
    display: grid;
    grid-template-columns: calc(var(--u) * 52) 1fr auto;
    align-items: center;
    gap: calc(var(--u) * 14);
    padding: calc(var(--u) * 13) calc(var(--u) * 16);
    margin-top: calc(var(--u) * 14);
    border-radius: calc(var(--u) * 16);
    text-decoration: none;
    color: #0b1220;
    opacity: 0;
    animation: pps-in 1.3s cubic-bezier(.2, .8, .2, 1) forwards;
    transition: transform .25s ease, box-shadow .25s ease;
  }

  .pps-row:hover {
    transform: translateX(calc(var(--u) * -4));
    box-shadow: 0 8px 20px -10px rgba(3, 22, 73, .35);
  }

  .pps-row:focus-visible,
  .pps-close:focus-visible {
    outline: 2px solid #215af8;
    outline-offset: 2px;
  }

  .pps-row-call {
    background: rgba(16, 185, 129, .13);
    animation-delay: .3s;
    --c: #12a15b;
  }

  .pps-row-mail {
    background: rgba(33, 90, 248, .11);
    animation-delay: .8s;
    --c: #1f6bff;
  }

  .pps-row-chat {
    background: rgba(124, 58, 237, .11);
    animation-delay: 1.3s;
    --c: #7c3aed;
  }

  .pps-ico {
    position: relative;
    width: calc(var(--u) * 52);
    height: calc(var(--u) * 52);
    border-radius: 50%;
    background: var(--c);
    display: grid;
    place-items: center;
  }

  /* soft pulse ring behind each icon, staggered */
  .pps-ico::after {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 50%;
    border: 2px solid var(--c);
    animation: pps-pulse 4.2s ease-out infinite;
  }

  .pps-row-mail .pps-ico::after {
    animation-delay: 1.4s;
  }

  .pps-row-chat .pps-ico::after {
    animation-delay: 2.8s;
  }

  .pps-ico svg {
    width: 52%;
    height: 52%;
    fill: none;
    stroke: #fff;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .pps-row-call .pps-ico svg {
    animation: pps-ring 5.5s ease-in-out infinite;
    transform-origin: 50% 50%;
  }

  .pps-row-mail .pps-ico svg {
    animation: pps-bob 5s ease-in-out 1s infinite;
  }

  .pps-row-chat .pps-ico svg {
    animation: pps-bob 5s ease-in-out 2s infinite;
  }

  .pps-txt b {
    display: block;
    font-size: calc(var(--u) * 19);
    line-height: 1.2;
  }

  .pps-txt small {
    display: block;
    margin-top: 2px;
    font-size: calc(var(--u) * 15);
    color: #55617c;
  }

  .pps-arrow {
    font-size: calc(var(--u) * 24);
    color: var(--c);
    animation: pps-nudge 3.8s ease-in-out infinite;
  }

  .pps-row-mail .pps-arrow {
    animation-delay: .7s;
  }

  .pps-row-chat .pps-arrow {
    animation-delay: 1.4s;
  }

  @keyframes pps-float {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(calc(var(--u) * -14));
    }
  }

  @keyframes pps-in {
    from {
      opacity: 0;
      transform: translateX(calc(var(--u) * 24));
    }

    to {
      opacity: 1;
      transform: none;
    }
  }

  @keyframes pps-fly {

    0%,
    100% {
      transform: translate(0, 0) rotate(0);
    }

    50% {
      transform: translate(6px, -8px) rotate(6deg);
    }
  }

  @keyframes pps-dash {
    to {
      stroke-dashoffset: -20;
    }
  }

  @keyframes pps-pulse {
    0% {
      transform: scale(1);
      opacity: .55;
    }

    70%,
    100% {
      transform: scale(1.55);
      opacity: 0;
    }
  }

  @keyframes pps-ring {

    0%,
    60%,
    100% {
      transform: rotate(0);
    }

    66% {
      transform: rotate(-14deg);
    }

    72% {
      transform: rotate(12deg);
    }

    78% {
      transform: rotate(-10deg);
    }

    84% {
      transform: rotate(8deg);
    }

    90% {
      transform: rotate(0);
    }
  }

  @keyframes pps-bob {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-2px) scale(1.06);
    }
  }

  @keyframes pps-nudge {

    0%,
    100% {
      transform: translateX(0);
    }

    50% {
      transform: translateX(calc(var(--u) * 7));
    }
  }

  /* ---------- Feature points ---------- */
  .pps-points {
    list-style: none;
    margin: 56px 0 34px;
    padding: 0;
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 28px;
  }

  .pps-points h3 {
    font-size: 16.5px;
    line-height: 1.35;
    margin: 0 0 6px;
    color: #0b1220;
  }

  .pps-points p {
    font-size: 14.5px;
    line-height: 1.65;
    color: #5b657d;
    margin: 0;
  }

  .pps-points li {
    padding-top: 16px;
    border-top: 2px solid #215af8;
  }

  .pps-actions {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 24px;
  }

  @media (max-width: 980px) {
    .pps {
      padding: 64px 0;
    }

    .pps-points {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }

  /* Phones: the card leaves the image and sits below it at normal size */
  @media (max-width: 720px) {
    .pps-contact {
      --u: 1px;
      position: relative;
      left: auto;
      top: auto;
      width: auto;
      margin: -28px 14px 0;
      padding: 22px 20px 22px;
    }

    .pps-contact-title {
      margin-top: 26px;
      font-size: 24px;
    }

    .pps-plane {
      width: 64px;
      height: 64px;
      top: 22px;
    }

    .pps-points {
      grid-template-columns: 1fr;
    }
  }

  /* ---------- Start animations only when scrolled into view ----------
     JS adds .pps-armed on load (paused), then .pps-live when visible.
     Without JS nothing is paused, so the card still animates. */
  .pps-stage.pps-armed .pps-contact,
  .pps-stage.pps-armed .pps-contact *,
  .pps-stage.pps-armed .pps-contact *::after {
    animation-play-state: paused;
  }

  .pps-stage.pps-armed.pps-live .pps-contact,
  .pps-stage.pps-armed.pps-live .pps-contact *,
  .pps-stage.pps-armed.pps-live .pps-contact *::after {
    animation-play-state: running;
  }

  @media (prefers-reduced-motion: reduce) {

    .pps-contact,
    .pps-row,
    .pps-arrow,
    .pps-ico::after,
    .pps-ico svg,
    .pps-plane .pps-plane-icon,
    .pps-plane .pps-trail {
      animation: none !important;
    }

    .pps-row {
      opacity: 1;
    }
  }
</style>

<!-- ============================================================
     PASTE THIS in front-page.php, directly ABOVE:
        <section class="audience-section" aria-labelledby="audience-title">

     IMAGE: upload pipeline-dashboard-clean.png to
        /assets/images/pipeline-dashboard-clean.png
     (this version has the "Get in Touch" box removed - the box
      is rebuilt below in HTML/CSS so it can be animated)
     ============================================================ -->

<style id="vistaarflow-pipeline-showcase">
  .pps {
    position: relative;
    background: linear-gradient(180deg, #f5f8ff 0%, #ffffff 100%);
    padding: 88px 0 80px;
    overflow: hidden;
  }

  .pps-head {
    text-align: center;
    max-width: 780px;
    margin: 0 auto 44px;
  }

  .pps-head h2 {
    margin: 14px 0 16px;
  }

  .pps-head p {
    color: #475069;
    font-size: 17px;
    line-height: 1.7;
    margin: 0;
  }

  /* ---------- Image stage ---------- */
  .pps-figure {
    margin: 0 auto;
    max-width: 1180px;
  }

  .pps-stage {
    position: relative;
    container-type: inline-size;
  }

  .pps-stage>img {
    display: block;
    width: 100%;
    height: auto;
    border-radius: 22px;
    box-shadow: 0 34px 70px -30px rgba(3, 22, 73, .38);
  }

  .pps-figure figcaption {
    margin-top: 16px;
    text-align: center;
    font-size: 13.5px;
    color: #6b7590;
  }

  /* ---------- Animated "Get in Touch" card ----------
     Everything is sized from --u (1 unit = 1px of the 1672px-wide image),
     so the card scales together with the screenshot. */
  .pps-contact {
    --u: calc(100cqw / 1672);
    position: absolute;
    left: 81.7%;
    top: 27.8%;
    width: 17.7%;
    box-sizing: border-box;
    padding: calc(var(--u) * 26) calc(var(--u) * 26) calc(var(--u) * 28);
    border-radius: calc(var(--u) * 30);
    background: linear-gradient(160deg, rgba(255, 255, 255, .97), rgba(240, 245, 255, .95));
    border: 1px solid rgba(255, 255, 255, .9);
    box-shadow: 0 calc(var(--u) * 30) calc(var(--u) * 60) calc(var(--u) * -18) rgba(3, 22, 73, .35);
    animation: pps-float 7s ease-in-out infinite;
    will-change: transform;
  }

  .pps-contact[hidden] {
    display: none;
  }

  .pps-close {
    position: absolute;
    top: calc(var(--u) * 14);
    right: calc(var(--u) * 14);
    width: calc(var(--u) * 30);
    height: calc(var(--u) * 30);
    border: 0;
    border-radius: 50%;
    background: #fff;
    color: #0b1220;
    font-size: calc(var(--u) * 20);
    line-height: 1;
    display: grid;
    place-items: center;
    padding: 0;
    cursor: pointer;
    box-shadow: 0 2px 8px rgba(3, 22, 73, .18);
  }

  .pps-plane {
    position: absolute;
    top: calc(var(--u) * 52);
    right: calc(var(--u) * 26);
    width: calc(var(--u) * 92);
    height: calc(var(--u) * 92);
    overflow: visible;
    pointer-events: none;
  }

  .pps-plane .pps-plane-icon {
    animation: pps-fly 6.5s ease-in-out infinite;
    transform-origin: center;
    transform-box: fill-box;
  }

  .pps-plane .pps-trail {
    stroke-dasharray: 4 6;
    animation: pps-dash 3s linear infinite;
  }

  .pps-contact-title {
    margin: calc(var(--u) * 62) 0 calc(var(--u) * 8);
    font-size: calc(var(--u) * 33);
    line-height: 1.1;
    font-weight: 800;
    letter-spacing: -.02em;
    color: #0b1220;
  }

  .pps-contact-sub {
    margin: 0 0 calc(var(--u) * 26);
    max-width: 82%;
    font-size: calc(var(--u) * 19);
    line-height: 1.35;
    color: #4d5875;
  }

  .pps-row {
    position: relative;
    display: grid;
    grid-template-columns: calc(var(--u) * 52) 1fr auto;
    align-items: center;
    gap: calc(var(--u) * 14);
    padding: calc(var(--u) * 13) calc(var(--u) * 16);
    margin-top: calc(var(--u) * 14);
    border-radius: calc(var(--u) * 16);
    text-decoration: none;
    color: #0b1220;
    opacity: 0;
    animation: pps-in 1.3s cubic-bezier(.2, .8, .2, 1) forwards;
    transition: transform .25s ease, box-shadow .25s ease;
  }

  .pps-row:hover {
    transform: translateX(calc(var(--u) * -4));
    box-shadow: 0 8px 20px -10px rgba(3, 22, 73, .35);
  }

  .pps-row:focus-visible,
  .pps-close:focus-visible {
    outline: 2px solid #215af8;
    outline-offset: 2px;
  }

  .pps-row-mail {
    background: rgba(33, 90, 248, .11);
    animation-delay: .3s;
    --c: #1f6bff;
  }

  .pps-row-chat {
    background: rgba(124, 58, 237, .11);
    animation-delay: .8s;
    --c: #7c3aed;
  }

  .pps-ico {
    position: relative;
    width: calc(var(--u) * 52);
    height: calc(var(--u) * 52);
    border-radius: 50%;
    background: var(--c);
    display: grid;
    place-items: center;
  }

  /* soft pulse ring behind each icon, staggered */
  .pps-ico::after {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 50%;
    border: 2px solid var(--c);
    animation: pps-pulse 4.2s ease-out infinite;
  }

  .pps-row-mail .pps-ico::after {
    animation-delay: 0s;
  }

  .pps-row-chat .pps-ico::after {
    animation-delay: 2s;
  }

  .pps-ico svg {
    width: 52%;
    height: 52%;
    fill: none;
    stroke: #fff;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .pps-row-mail .pps-ico svg {
    animation: pps-bob 5s ease-in-out 0s infinite;
  }

  .pps-row-chat .pps-ico svg {
    animation: pps-bob 5s ease-in-out 2.5s infinite;
  }

  .pps-txt b {
    display: block;
    font-size: calc(var(--u) * 19);
    line-height: 1.2;
  }

  .pps-txt small {
    display: block;
    margin-top: 2px;
    font-size: calc(var(--u) * 15);
    color: #55617c;
  }

  .pps-arrow {
    font-size: calc(var(--u) * 24);
    color: var(--c);
    animation: pps-nudge 3.8s ease-in-out infinite;
  }

  .pps-row-mail .pps-arrow {
    animation-delay: 0s;
  }

  .pps-row-chat .pps-arrow {
    animation-delay: 1.2s;
  }

  @keyframes pps-float {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(calc(var(--u) * -14));
    }
  }

  @keyframes pps-in {
    from {
      opacity: 0;
      transform: translateX(calc(var(--u) * 24));
    }

    to {
      opacity: 1;
      transform: none;
    }
  }

  @keyframes pps-fly {

    0%,
    100% {
      transform: translate(0, 0) rotate(0);
    }

    50% {
      transform: translate(6px, -8px) rotate(6deg);
    }
  }

  @keyframes pps-dash {
    to {
      stroke-dashoffset: -20;
    }
  }

  @keyframes pps-pulse {
    0% {
      transform: scale(1);
      opacity: .55;
    }

    70%,
    100% {
      transform: scale(1.55);
      opacity: 0;
    }
  }

  @keyframes pps-ring {

    0%,
    60%,
    100% {
      transform: rotate(0);
    }

    66% {
      transform: rotate(-14deg);
    }

    72% {
      transform: rotate(12deg);
    }

    78% {
      transform: rotate(-10deg);
    }

    84% {
      transform: rotate(8deg);
    }

    90% {
      transform: rotate(0);
    }
  }

  @keyframes pps-bob {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-2px) scale(1.06);
    }
  }

  @keyframes pps-nudge {

    0%,
    100% {
      transform: translateX(0);
    }

    50% {
      transform: translateX(calc(var(--u) * 7));
    }
  }

  /* ---------- Feature points ---------- */
  .pps-points {
    list-style: none;
    margin: 56px 0 34px;
    padding: 0;
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 28px;
  }

  .pps-points h3 {
    font-size: 16.5px;
    line-height: 1.35;
    margin: 0 0 6px;
    color: #0b1220;
  }

  .pps-points p {
    font-size: 14.5px;
    line-height: 1.65;
    color: #5b657d;
    margin: 0;
  }

  .pps-points li {
    padding-top: 16px;
    border-top: 2px solid #215af8;
  }

  .pps-actions {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 24px;
  }

  @media (max-width: 980px) {
    .pps {
      padding: 64px 0;
    }

    .pps-points {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }

  /* Phones: the card leaves the image and sits below it at normal size */
  @media (max-width: 720px) {
    .pps-contact {
      --u: 1px;
      position: relative;
      left: auto;
      top: auto;
      width: auto;
      margin: -28px 14px 0;
      padding: 22px 20px 22px;
    }

    .pps-contact-title {
      margin-top: 26px;
      font-size: 24px;
    }

    .pps-plane {
      width: 64px;
      height: 64px;
      top: 22px;
    }

    .pps-points {
      grid-template-columns: 1fr;
    }
  }

  /* ---------- Start animations only when scrolled into view ----------
     JS adds .pps-armed on load (paused), then .pps-live when visible.
     Without JS nothing is paused, so the card still animates. */
  .pps-stage.pps-armed .pps-contact,
  .pps-stage.pps-armed .pps-contact *,
  .pps-stage.pps-armed .pps-contact *::after {
    animation-play-state: paused;
  }

  .pps-stage.pps-armed.pps-live .pps-contact,
  .pps-stage.pps-armed.pps-live .pps-contact *,
  .pps-stage.pps-armed.pps-live .pps-contact *::after {
    animation-play-state: running;
  }

  @media (prefers-reduced-motion: reduce) {

    .pps-contact,
    .pps-row,
    .pps-arrow,
    .pps-ico::after,
    .pps-ico svg,
    .pps-plane .pps-plane-icon,
    .pps-plane .pps-trail {
      animation: none !important;
    }

    .pps-row {
      opacity: 1;
    }
  }
</style>

<section id="sales-pipeline" class="pps" aria-labelledby="pps-title">
  <div class="container">

    <div class="pps-head reveal">
      <div class="eyebrow">VISUAL SALES PIPELINE CRM</div>
      <h2 id="pps-title">Every opportunity in view. <em>Every deal moving forward.</em></h2>
      <p>VistaarFlow gives small businesses, startups and real estate agents a clear, visual sales pipeline. See every
        lead and opportunity by stage, know who owns it, and act on the next follow-up before a deal goes cold, all from
        one simple CRM pipeline management dashboard.</p>
    </div>

    <figure class="pps-figure reveal">
      <div class="pps-stage">
        <!-- REPLACE the file name below to swap the screenshot -->
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/piplineweb.png'); ?>"
          alt="VistaarFlow CRM opportunity pipeline board with leads organised into New, Qualified, Follow Up and Won stages, plus search, filters and close rate"
          width="1672" height="941" loading="lazy" decoding="async">

        <aside class="pps-contact" aria-label="Contact VistaarFlow">
          <button class="pps-close" type="button" aria-label="Dismiss"
            onclick="this.closest('.pps-contact').hidden=true">&times;</button>

          <svg class="pps-plane" viewBox="0 0 92 92" aria-hidden="true">
            <path class="pps-trail" d="M6 78 C 14 52, 40 60, 52 40" fill="none" stroke="#7fa0ff" stroke-width="1.6"
              stroke-linecap="round" />
            <g class="pps-plane-icon" transform="translate(50 6) scale(1.5)" fill="none" stroke="#3b6bff"
              stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 2 11 13M22 2l-7 20-4-9-9-4z" />
            </g>
          </svg>

          <p class="pps-contact-title">Get in Touch</p>
          <p class="pps-contact-sub">We're here to help you at every step.</p>

          <a class="pps-row pps-row-mail" href="mailto:contact@vistaarflow.in">
            <span class="pps-ico"><svg viewBox="0 0 24 24" aria-hidden="true">
                <rect x="3" y="5" width="18" height="14" rx="2" />
                <path d="m3 7 9 6 9-6" />
              </svg></span>
            <span class="pps-txt"><b>Email Us</b><small>Send us an email</small></span>
            <span class="pps-arrow" aria-hidden="true">&rarr;</span>
          </a>

          <!-- TODO: replace 910000000000 with your WhatsApp number (country code + number, no + or spaces) -->
          <a class="pps-row pps-row-chat"
            href="<?php echo esc_url('https://wa.me/919867310179?text=' . rawurlencode('Hi VistaarFlow, I would like to know more about your CRM.')); ?>"
            target="_blank" rel="noopener noreferrer">
            <span class="pps-ico"><svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M21 12a8 8 0 0 1-11.6 7.1L4 20l1-4.6A8 8 0 1 1 21 12z" />
                <path d="M9 11.5h.01M12 11.5h.01M15 11.5h.01" />
              </svg></span>
            <span class="pps-txt"><b>Chat with Us</b><small>Message us on WhatsApp</small></span>
            <span class="pps-arrow" aria-hidden="true">&rarr;</span>
          </a>
        </aside>
      </div>
      <figcaption>Track leads and opportunities across every stage of your sales pipeline.</figcaption>
    </figure>

    <ul class="pps-points reveal">
      <li>
        <h3>Kanban-style opportunity tracking</h3>
        <p>Organise leads from New to Qualified, Follow Up and Won on a board your whole team understands at a glance.
        </p>
      </li>
      <li>
        <h3>Multiple pipelines for every process</h3>
        <p>Run separate pipelines for sales, property enquiries, bookings or renewals, each with its own stages.</p>
      </li>
      <li>
        <h3>Search, filters and close-rate insight</h3>
        <p>Find any opportunity in seconds and track contacts, stages and conversion rate in real time.</p>
      </li>
      <li>
        <h3>Call, email and WhatsApp from the card</h3>
        <p>Reach out to a lead in one click from the opportunity, with every conversation kept on the record.</p>
      </li>
    </ul>

    <div class="pps-actions">
      <a class="button" href="https://app.vistaarflow.in/signup">Start 14 days free-trial <span>→</span></a>
      <a class="text-arrow" href="<?php echo esc_url(home_url('/contact')); ?>">Book a live demo →</a>
    </div>

  </div>
</section>

<script>
  (function () {
    var stage = document.querySelector('#sales-pipeline .pps-stage');
    if (!stage) return;
    stage.classList.add('pps-armed');
    function start() { stage.classList.add('pps-live'); }
    if (!('IntersectionObserver' in window)) { start(); return; }
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { start(); io.disconnect(); }
      });
    }, { threshold: 0.35 });
    io.observe(stage);
  })();
</script>
  <section class="audience-section" aria-labelledby="audience-title">
    <div class="container">
      <div class="audience-heading reveal">
        <div class="eyebrow">BUILT AROUND YOUR JOURNEY</div>
        <h2 id="audience-title">Built for the way <em>your business grows.</em></h2>
      </div>
      <div class="audience-grid">
        <article class="audience-card reveal"><span class="audience-icon" aria-hidden="true">↗</span>
          <h3>Startups</h3>
          <p>Build a structured sales process from day one and keep every lead organized as your business grows.</p>
        </article>
        <article class="audience-card reveal"><span class="audience-icon" aria-hidden="true">◈</span>
          <h3>Small Businesses</h3>
          <p>Manage customers, follow-ups, appointments, and team activities without complicated CRM systems.</p>
        </article>
        <article class="audience-card reveal"><span class="audience-icon" aria-hidden="true">⌂</span>
          <h3>Real Estatess Agents</h3>
          <p>Capture property enquiries, manage leads across projects, automate follow-ups, and track every opportunity
            through your sales pipeline.</p>
        </article>
      </div>
    </div>
  </section>
  <!-- ============================================================
     REPLACE this in front-page.php:
        <section id="whatsapp-container">

        </section>
     WITH everything below.
     ============================================================ -->

  <section id="whatsapp-container" class="section" aria-labelledby="whatsapp-title">
    <span class="wa-glow wa-glow-one" aria-hidden="true"></span>
    <span class="wa-glow wa-glow-two" aria-hidden="true"></span>

    <div class="container">

      <div class="wa-heading reveal">
        <div class="eyebrow">WHATSAPP BULK MESSAGING &amp; CAMPAIGNS</div>
        <h2 id="whatsapp-title">Promotional WhatsApp campaigns,<br><em>sent the smart way.</em></h2>
        <p>VistaarFlow turns WhatsApp into a real sales channel. Use the built-in WhatsApp bulk message sender to run
          approved promotional WhatsApp campaigns, connect the official WhatsApp Business API for two-way conversations,
          and keep a secure backup for WhatsApp chats inside your CRM — so every enquiry becomes a contact, and every
          contact becomes an opportunity.</p>
      </div>

      <div class="wa-layout">

        <!-- ---------- Visual: phone + live conversation ---------- -->
        <div class="wa-visual reveal">
          <div class="wa-phone">
            <div class="wa-phone-top">
              <span class="wa-avatar">
                <img
                  src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/validated-whatsapp.svg'); ?>"
                  alt="WhatsApp Business" loading="lazy" decoding="async" width="28" height="28">
              </span>
              <div class="wa-phone-meta">
                <strong>VistaarFlow Business</strong>
                <small><i aria-hidden="true"></i> Verified business account</small>
              </div>
              <span class="wa-phone-dots" aria-hidden="true">•••</span>
            </div>

            <div class="wa-thread">
              <div class="wa-bubble wa-in">
                <p>Hi! I saw your ad. Please share the 2BHK price list.</p>
                <time>10:41 AM</time>
              </div>
              <div class="wa-bubble wa-out">
                <p><strong>Thanks for reaching out!</strong> Here is the updated price list and floor plan.</p>
                <time>10:41 AM <i aria-hidden="true">✓✓</i></time>
              </div>
              <div class="wa-bubble wa-out wa-bubble-card">
                <span class="wa-doc" aria-hidden="true">📄</span>
                <div>
                  <b>Project-Brochure.pdf</b>
                  <small>2 pages • 1.4 MB</small>
                </div>
                <time>10:42 AM <i aria-hidden="true">✓✓</i></time>
              </div>
              <div class="wa-bubble wa-in">
                <p>Can I book a site visit this Saturday?</p>
                <time>10:44 AM</time>
              </div>
              <div class="wa-typing" aria-hidden="true"><span></span><span></span><span></span></div>
            </div>

            <div class="wa-composer" aria-hidden="true">
              <span>Reply generated by VistaarFlow AI…</span>
              <b>➤</b>
            </div>
          </div>

          <!-- floating stat chips -->
          <span class="wa-chip wa-chip-one">
            <b>98%</b><small>Message open rate</small>
          </span>
          <span class="wa-chip wa-chip-two">
            <i aria-hidden="true"></i><b>Broadcast sent</b><small>5,000 contacts</small>
          </span>
        </div>

        <!-- ---------- Copy: keyword-led capability list ---------- -->
        <div class="wa-copy reveal">
          <ul class="wa-list">
            <li>
              <span class="wa-list-icon" aria-hidden="true">📣</span>
              <div>
                <h3>Promotional WhatsApp messages that actually convert</h3>
                <p>Launch offers, price drops, new launches and festive campaigns using pre-approved template messages.
                  Segment by source, stage, city or interest so every promotional WhatsApp message reaches the right
                  audience instead of your entire database.</p>
              </div>
            </li>
            <li>
              <span class="wa-list-icon" aria-hidden="true">🚀</span>
              <div>
                <h3>WhatsApp bulk message sender, built for teams</h3>
                <p>Upload a list or pick a CRM segment and broadcast in minutes. Our WhatsApp bulk message sender
                  handles
                  personalisation, images, PDFs and buttons, then reports delivered, read and replied counts back into
                  your pipeline automatically.</p>
              </div>
            </li>
            <li>
              <span class="wa-list-icon" aria-hidden="true">💰</span>
              <div>
                <h3>Pay Meta directly. No intermediary fees.</h3>
                <p>Your WhatsApp messaging is billed straight to Meta through your own Facebook Business account — no
                  reseller, no BSP markup, no inflated per-message rates. You see exactly what each conversation costs
                  and
                  keep the difference.</p>
              </div>
            </li>
            <li>
              <span class="wa-list-icon" aria-hidden="true">💬</span>
              <div>
                <h3>A WhatsApp message sender your whole team shares</h3>
                <p>Send msg on WhatsApp straight from a lead record — no phone switching, no personal numbers. Multiple
                  agents work one shared inbox, with assignment, internal notes, quick replies and full conversation
                  history on every contact.</p>
              </div>
            </li>
            <li>
              <span class="wa-list-icon" aria-hidden="true">🛡️</span>
              <div>
                <h3>Secure backup for WhatsApp conversations</h3>
                <p>Every chat, media file and campaign result is stored in your CRM with automatic cloud backup. When an
                  employee leaves, the customer relationship stays — a reliable backup for WhatsApp history your
                  business
                  actually owns.</p>
              </div>
            </li>
          </ul>

          <div class="wa-actions">
            <a class="button" href="https://app.vistaarflow.in/signup">Start sending on WhatsApp →</a>
            <a class="wa-text-link" href="mailto:contact@vistaarflow.in">Talk to our WhatsApp API team</a>
          </div>
        </div>
      </div>

      <!-- ---------- Channel / workflow strip ---------- -->
      <div class="wa-flow reveal" role="list" aria-label="WhatsApp lead workflow inside VistaarFlow">
        <div class="wa-flow-step" role="listitem">
          <span class="wa-flow-icon">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/validated-meta.svg'); ?>" alt=""
              loading="lazy" decoding="async" width="26" height="26">
          </span>
          <strong>Ad or website enquiry</strong>
          <small>Click-to-WhatsApp ads, forms and widgets create the contact instantly.</small>
        </div>
        <span class="wa-flow-arrow" aria-hidden="true">→</span>
        <div class="wa-flow-step" role="listitem">
          <span class="wa-flow-icon">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/validated-whatsapp.svg'); ?>"
              alt="" loading="lazy" decoding="async" width="26" height="26">
          </span>
          <strong>Instant WhatsApp reply</strong>
          <small>Template message, catalogue or brochure goes out within seconds.</small>
        </div>
        <span class="wa-flow-arrow" aria-hidden="true">→</span>
        <div class="wa-flow-step" role="listitem">
          <span class="wa-flow-icon wa-flow-icon-text" aria-hidden="true">⌘</span>
          <strong>Automated follow-up</strong>
          <small>Reminders, drip sequences and stage updates run without manual chasing.</small>
        </div>
        <span class="wa-flow-arrow" aria-hidden="true">→</span>
        <div class="wa-flow-step" role="listitem">
          <span class="wa-flow-icon wa-flow-icon-text" aria-hidden="true">✓</span>
          <strong>Opportunity won</strong>
          <small>Chat history, media and notes stay backed up on the customer record.</small>
        </div>
      </div>

      <p class="wa-note">Business messaging is sent through Meta's official WhatsApp Business API. Template approval and
        Meta conversation charges are billed by Meta and are separate from your VistaarFlow subscription.</p>

    </div>
  </section>
  <section class="logo-strip">
    <div class="container"><span>Connect the tools your team already loves</span>
      <div><b>WhatsApp</b><b>Meta</b><b>Gmail</b><b>Google Calendar</b><b>Twilio</b><b>OpenAI</b></div>
    </div>
  </section>

  <section id="integrations" class="section integrations">
    <div class="container split">
      <div class="reveal">
        <div class="eyebrow">OPEN INTEGRATIONS</div>
        <p>Your team can continue working with the tools they are comfortable using while managing everything from one
          connected CRM.</p>
        <h2>Your business.<br><em>Your integrations.</em></h2>
        <p>No vendor lock-in. Choose ChatGPT, Google Gemini, or Claude for AI, and integrate Exotel, Twilio, or Plivo
          for business calling. Generate AI-powered call summaries, meeting notes, lead scoring, smart recommendations,
          workflow assistance, and telephony—all seamlessly integrated into your VistaarFlow CRM.</p>
        <ul class="check-list">
          <li>Native integrations, APIs and automation tools</li>
          <li>AI call summaries, notes and recommendations</li>
          <li>Flexible telephony and communication providers</li>
        </ul><a class="button button-dark" href="https://app.vistaarflow.in/signup">Build your connected CRM →</a>
      </div>
      <div class="orbit integration-art reveal" role="img"
        aria-label="VistaarFlow connected to Twilio, Gemini, ChatGPT, Plivo, WhatsApp, Meta, Gmail and website tools">
        <span class="integration-glow" aria-hidden="true"></span><span class="integration-ring ring-a"
          aria-hidden="true"></span><span class="integration-ring ring-b" aria-hidden="true"></span>
        <div class="integration-hub"><span class="integration-logo-crop"><img
              src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/vistaartransparentlogo.png'); ?>"
              alt="VistaarFlow"></span></div><span class="moving-app app-twilio"><img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/validated-twilio.svg'); ?>"
            alt="Twilio"></span><span class="moving-app app-gemini"><img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/validated-gemini.svg'); ?>"
            alt="Gemini"></span><span class="moving-app app-chatgpt"><img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/validated-chatgpt.svg'); ?>"
            alt="ChatGPT"></span><span class="moving-app app-meta"><img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/validated-meta.svg'); ?>"
            alt="Meta"></span><span class="moving-app app-gmail"><img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/validated-gmail.svg'); ?>"
            alt="Gmail"></span><span class="moving-app app-plivo"><img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/validated-plivo.svg'); ?>"
            alt="Plivo"></span><span class="moving-app app-whatsapp"><img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/validated-whatsapp.svg'); ?>"
            alt="WhatsApp"></span><span class="moving-app app-website"><img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/channel-website.svg'); ?>"
            alt="Website"></span>
      </div>
    </div>
  </section>

  <section id="platform" class="section platform">
    <div class="container">
      <div class="section-heading centered reveal">
        <div class="eyebrow">ONE CONNECTED CRM</div>
        <h2>Everything your team needs.<br><em>Nothing that gets in the way.</em></h2>
        <p>Replace scattered tools and missed follow-ups with one calm, connected system.</p>
      </div>
      <div class="feature-grid">
        <article class="feature feature-large reveal">
          <div class="feature-copy"><span class="feature-icon blue">⌁</span>
            <h3>Every conversation. One clear timeline.</h3>
            <p>Manage marketing campaigns from the same connected timeline. Every conversation, activity, and
              opportunity stays in sync.</p>
            <div class="channel-tags">
              <span>Website</span><span>Meta</span><span>WhatsApp</span><span>Email</span><span>Call</span><span>Appointment</span><span>Campaign</span>
            </div>
          </div>
          <div class="timeline-ui">
            <div class="contact"><b>PS</b>
              <div><strong>Priya Sharma</strong><small>Qualified lead • Mumbai</small></div><span>•••</span>
            </div>
            <div class="timeline timeline-compact">
              <div><i class="green">✓</i>
                <p><b>WhatsApp message received</b></p><time>10:42 AM</time>
              </div>
              <div><i class="blue">◎</i>
                <p><b>Meta lead received</b></p><time>10:44 AM</time>
              </div>
              <div><i class="green">✓</i>
                <p><b>WhatsApp message</b></p><time>11:02 AM</time>
              </div>
              <div><i class="orange">↗</i>
                <p><b>Email opened</b></p><time>11:30 AM</time>
              </div>
              <div><i class="blue">☎</i>
                <p><b>Call connected</b></p><time>12:05 PM</time>
              </div>
              <div><i class="green">◷</i>
                <p><b>Appointment booked</b></p><time>12:20 PM</time>
              </div>
              <div><i class="blue">✦</i>
                <p><b>Campaign added</b></p><time>12:28 PM</time>
              </div>
            </div>
          </div>
        </article>
        <article class="feature pipeline-feature reveal">
          <div class="pipeline-copy"><span class="feature-icon blue">↗</span>
            <h3>Flexible pipelines. Zero manual chasing.</h3>
            <p>Automate every stage, never miss a follow-up, and move deals forward effortlessly.</p>
            <ul>
              <li>Automated follow-ups</li>
              <li>Automated reminders</li>
              <li>Automatic pipeline stage updates</li>
              <li>Workflows that run without manual effort</li>
            </ul>
          </div>
          <div class="pipeline-image-wrap"><span class="pipeline-flow" aria-hidden="true"></span><img
              class="pipeline-reference-image"
              src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/flexible-pipeline-premium-light.png'); ?>"
              alt="Sales pipeline moving from New Lead through Contacted, Qualified and Proposal to Won, with automated reminders, notifications, email and workflow actions"><span
              class="pipeline-pulse pulse-clock-one" aria-hidden="true"></span><span
              class="pipeline-pulse pulse-clock-two" aria-hidden="true"></span><span class="pipeline-pulse pulse-bell"
              aria-hidden="true"></span><span class="pipeline-pulse pulse-email" aria-hidden="true"></span><span
              class="pipeline-pulse pulse-action" aria-hidden="true"></span></div>
        </article>
        <article class="feature ai-feature reveal"><span class="feature-icon ai-label">AI</span>
          <h3>AI that works beside your team</h3>
          <p>Summarize calls, draft replies, score leads, recommend next actions, and provide AI-powered workflow
            assistance at scale.</p>
          <div class="ai-recommendation">
            <div class="ai-bot" aria-hidden="true"><span>••</span></div>
            <div class="ai-recommendation-copy"><small>✦ VistaarFlow AI</small>
              <p><strong>Priya Sharma is highly engaged.</strong><br>Recommend sending the demo calendar link now.</p>
              <button type="button">View suggestion</button>
            </div>
            <div class="lead-score"><span>▂▅█</span><strong>92</strong><small>Lead score</small></div>
          </div>
        </article>
        <article class="feature dark workflow-feature reveal"><span class="feature-icon workflow-label">⌘</span>
          <h3>Build workflows your way</h3>
          <p>Create unlimited pipelines for sales, support, onboarding, bookings, site visits, renewals, or any custom
            workflow.</p>
          <div class="workflow-steps"><span><i>⚙</i>New lead</span><b></b><span><i>◉</i>Nurture in
              WhatsApp</span><b></b><span><i>⚙</i>Assign sales team</span><b></b><span><i>✉</i>Send
              follow-up</span><b></b><span><i>⚑</i>Move to next stage</span></div>
        </article>
      </div>
    </div>
  </section>

  <section id="business-highlights" class="integration-showcase">
    <div class="integration-showcase-glow glow-one" aria-hidden="true"></div>
    <div class="integration-showcase-glow glow-two" aria-hidden="true"></div>
    <div class="container">
      <div class="integration-showcase-heading reveal">
        <div class="eyebrow">OPEN INTEGRATIONS &amp; YOUR FAVORITE TOOLS ⭐</div>
        <h2>Built around the way<br><em>your business works.</em></h2>
        <p>VistaarFlow is built to work with the tools you already use. Connect your preferred apps, platforms, and
          services through native integrations, APIs, or automation tools—so your team can continue working the way
          they’re comfortable while managing everything from one connected CRM.</p>
      </div>
      <div class="integration-card-shell reveal">
        <div class="integration-highlight-track" tabindex="0"
          aria-label="VistaarFlow integration and workflow highlights">
          <article class="integration-highlight"><span class="highlight-icon">🔗</span>
            <h3>Your Business. Your Integrations.</h3>
            <p>No vendor lock-in. Choose ChatGPT, Google Gemini, or Claude for AI, and integrate Exotel, Twilio, or
              Plivo for business calling. Generate AI-powered call summaries, meeting notes, lead scoring, smart
              recommendations, workflow assistance, and telephony—all seamlessly integrated into your VistaarFlow CRM.
            </p>
          </article>
          <article class="integration-highlight"><span class="highlight-icon">🔄</span>
            <h3>Flexible Pipelines &amp; Workflow Automation</h3>
            <p>Design unlimited pipelines for sales, support, admissions, bookings, site visits, renewals, or any custom
              workflow. Automate lead assignments, follow-ups, reminders, notifications, and stage updates to keep your
              business moving without manual effort.</p>
          </article>
          <article class="integration-highlight"><span class="highlight-icon">📱</span>
            <h3>Unified Customer Communication</h3>
            <p>Manage website leads, Meta Lead Ads, WhatsApp, email, phone calls, appointments, and marketing campaigns
              from one connected timeline. Every conversation, activity, and opportunity stays in sync.</p>
          </article>
          <article class="integration-highlight"><span class="highlight-icon">📦</span>
            <h3>Custom Catalogs &amp; Business Flexibility</h3>
            <p>Manage properties, courses, products, vehicles, services, or any custom catalog while integrating the
              tools your team already uses. Connect WhatsApp, Meta, Gmail, Google Calendar, telephony, payment gateways,
              and more—without changing your existing workflow.</p>
          </article>
          <article class="integration-highlight"><span class="highlight-icon">📈</span>
            <h3>Built to Scale. Built for Growth.</h3>
            <p>Whether you're a startup or a growing enterprise, VistaarFlow scales with your teams, branches, and
              operations. Manage leads, customer communication, sales, automation, billing, reporting, and AI-powered
              productivity from one secure platform.</p>
          </article>
        </div>
        <div class="integration-slider-controls"><button class="integration-prev" type="button"
            aria-label="Previous integration highlight">←</button><span>Explore every way VistaarFlow fits your
            business</span><button class="integration-next" type="button"
            aria-label="Next integration highlight">→</button></div>
      </div>
    </div>
  </section>


 

  <section class="instant-lead-section" aria-labelledby="instant-lead-title">
    <div class="container instant-lead-layout">
      <div class="instant-lead-visual reveal">
        <div class="instant-lead-frame"><img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/vistaarflow-mobile-lead-notification.webp'); ?>"
            alt="VistaarFlow CRM mobile notification showing a newly received enquiry from Rahul Sharma" loading="lazy"
            decoding="async" width="1200" height="800"></div><span class="instant-lead-badge"><i aria-hidden="true"></i>
          New enquiry captured</span>
      </div>
      <div class="instant-lead-copy reveal">
        <div class="eyebrow">RESPOND FASTER WITH PUSH NOTIFICATIONS</div>
        <h2 id="instant-lead-title">Know the moment a <em>new lead arrives.</em></h2>
        <p>VistaarFlow keeps your team close to every opportunity with timely lead notifications. See who enquired, open
          the details, and start the right follow-up without waiting for another spreadsheet or inbox check.</p>
        <ul>
          <li>Instant visibility for new enquiries</li>
          <li>Lead details ready for action</li>
          <li>Faster, more consistent follow-up</li>
          <li>Never miss a lead with Push notifications</li>
        </ul><a class="text-arrow" href="https://app.vistaarflow.in/signup">Start capturing leads →</a>
      </div>
    </div>
  </section>

  <section class="section business-flex">
    <div class="container business-grid">
      <article class="business-card reveal">
        <div class="eyebrow">BUILT AROUND YOUR BUSINESS</div>
        <h2>Custom Catalogs &amp; Business Flexibility</h2>
        <p>Manage properties, courses, products, vehicles, services, or any custom catalog while integrating the tools
          your team already uses. Connect WhatsApp, Meta, Gmail, Google Calendar, telephony, payment gateways, and
          more—without changing your existing workflow.</p><img class="business-art"
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/catalog-flexibility-v2.png'); ?>"
          alt="Property, course, product, vehicle, service and custom catalogs connected to a payment gateway">
        <div class="art-labels catalog-labels">
          <span>Property</span><span>Course</span><span>Product</span><span>Vehicle</span><span>Service</span><span>Custom
            Catalog</span><span>Payment Gateway</span>
        </div>
      </article>
      <article class="business-card reveal">
        <div class="eyebrow">GROW WITHOUT LIMITS</div>
        <h2>Built to Scale. Built for Growth.</h2>
        <p>VistaarFlow grows with your team without adding unnecessary complexity. Manage leads, customer communication,
          sales pipelines, automation, appointments, reporting, and AI-powered assistance from one practical platform.
        </p><img class="business-art integration-business-art"
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/open-integrations.jpeg'); ?>"
          alt="VistaarFlow connected with WhatsApp, Facebook Ads, website leads, telephony, ChatGPT, Claude, email marketing and Gemini">
      </article>
    </div>
  </section>

  <section id="channels" class="section channels">
    <div class="container">
      <div class="section-heading reveal">
        <div class="eyebrow">CAPTURE LEADS EVERYWHERE</div>
        <h2>Your customers are everywhere.<br><em>Now your leads aren't.</em></h2>
        <p>VistaarFlow brings these high-impact channels together, helping your team respond faster and convert more
          opportunities from one connected CRM.</p>
      </div>
      <div class="channel-grid">
        <article class="reveal"><span>01</span><i><img
              src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/channel-website.svg'); ?>"
              alt=""></i>
          <h3>Website lead capture</h3>
          <p>Embed forms, widgets and landing pages. Leads capture instantly triggers the right follow-up automatically.
          </p>
        </article>
        <article class="reveal"><span>02</span><i><img class="capture-channel-logo capture-meta-logo"
              src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/capture-meta.png'); ?>" alt=""></i>
          <h3>Meta Lead Capture</h3>
          <p>Run timely ads on Meta, trigger workflows, and start conversations as soon as a new Meta lead enters
            VistaarFlow.</p>
        </article>
        <article class="reveal"><span>03</span><i><img class="capture-channel-logo"
              src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/capture-whatsapp.png'); ?>"
              alt=""></i>
          <h3>WhatsApp Business</h3>
          <p>Publish WhatsApp Flows directly to Meta and convert every WhatsApp conversation into Contacts and
            Opportunities inside your CRM.</p>
        </article>
      </div>
    </div>
  </section>
  
  <section class="section success-support" aria-labelledby="success-support-title">
    <div class="container">
      <div class="success-support-panel reveal">
        <div class="success-support-heading">
          <div class="eyebrow">WITH YOU AT EVERY STEP</div>
          <h2 id="success-support-title">Do it all, <em>but never do it alone.</em></h2>
          <p>From your first import to every future release, our team and platform help you keep moving confidently.</p>
        </div>
        <div class="success-support-layout">
          <div class="success-benefits success-benefits-left">
            <div class="success-benefit"><i aria-hidden="true">✓</i><span>Guided onboarding to help you set up your
                CRM.</span></div>
            <div class="success-benefit"><i aria-hidden="true">✓</i><span>Product training for administrators and your
                team.</span></div>
            <div class="success-benefit"><i aria-hidden="true">✓</i><span>Support via email, phone, and live
                chat.</span></div>
            <div class="success-benefit"><i aria-hidden="true">✓</i><span>Assistance with importing your existing
                contacts and data.</span></div>
          </div>
          <div class="success-agent" aria-hidden="true"><span class="agent-ring agent-ring-one"></span><span
              class="agent-ring agent-ring-two"></span><svg viewBox="0 0 240 280" role="presentation">
              <defs>
                <linearGradient id="agent-shirt" x1="0" y1="0" x2="1" y2="1">
                  <stop stop-color="#0759e8" />
                  <stop offset="1" stop-color="#05aeca" />
                </linearGradient>
              </defs>
              <circle cx="120" cy="83" r="47" fill="#f0b990" />
              <path d="M76 78c0-39 19-59 51-59 29 0 48 21 46 54-15-8-26-23-31-36-12 20-34 35-66 41Z" fill="#071946" />
              <path d="M93 121h54v35H93z" fill="#e8a57c" />
              <path d="M54 280v-74c0-43 26-68 66-68s66 25 66 68v74Z" fill="url(#agent-shirt)" />
              <path d="M71 79c-13 0-20 10-20 26v17c0 13 8 22 20 22" fill="none" stroke="#001846" stroke-width="9"
                stroke-linecap="round" />
              <path d="M169 79c13 0 20 10 20 26v17c0 13-8 22-20 22" fill="none" stroke="#001846" stroke-width="9"
                stroke-linecap="round" />
              <rect x="43" y="99" width="19" height="37" rx="9" fill="#0759e8" />
              <rect x="178" y="99" width="19" height="37" rx="9" fill="#0759e8" />
              <path d="M188 132c0 23-13 31-34 31" fill="none" stroke="#001846" stroke-width="5"
                stroke-linecap="round" />
              <circle cx="151" cy="163" r="6" fill="#00c994" />
              <circle cx="102" cy="87" r="4" fill="#071946" />
              <circle cx="139" cy="87" r="4" fill="#071946" />
              <path d="M109 108c7 6 16 6 23 0" fill="none" stroke="#9b4e42" stroke-width="4" stroke-linecap="round" />
            </svg><span class="agent-status"><b></b>Support online</span></div>
          <div class="success-benefits success-benefits-right">
            <div class="success-benefit"><i aria-hidden="true">✓</i><span>Regular product updates and new feature
                releases.</span></div>
            <div class="success-benefit"><i aria-hidden="true">✓</i><span>Secure cloud hosting with automatic
                backups.</span></div>
            <div class="success-benefit"><i aria-hidden="true">✓</i><span>Access to our knowledge base and help
                center.</span></div>
            <div class="success-benefit"><i aria-hidden="true">✓</i><span>Flexible monthly or yearly billing
                options.</span></div>
          </div>
        </div>
        <div class="success-trust">
          <div><strong>1:1</strong><span>Guided setup support</span></div>
          <div><strong>Secure</strong><span>Cloud hosting &amp; backups</span></div>
          <div><strong>Always</strong><span>Improving with new releases</span></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section blog-preview">
    <div class="container">
      <div class="blog-heading reveal">
        <div>
          <div class="eyebrow">GROWTH NOTES</div>
          <h2>Ideas to help your <em>business flow.</em></h2>
        </div><a class="text-arrow" href="<?php echo esc_url(vistaarflow_blog_url()); ?>">Explore all articles →</a>
      </div>
      <div class="post-grid">
        <?php $vf_posts = new WP_Query(['posts_per_page' => 3, 'post_status' => 'publish']);
        if ($vf_posts->have_posts()):
          while ($vf_posts->have_posts()):
            $vf_posts->the_post(); ?>
            <article class="post-card reveal"><a class="post-thumb" href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) {
                the_post_thumbnail('large');
              } else { ?><span class="post-placeholder">V</span><?php } ?><span class="post-category"><?php $cats = get_the_category();
                  echo esc_html($cats ? $cats[0]->name : 'Insights'); ?></span></a>
              <div class="post-card-body">
                <div class="post-meta"><?php echo esc_html(get_the_date()); ?></div>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 18)); ?></p><a class="read-more"
                  href="<?php the_permalink(); ?>">Read article →</a>
              </div>
            </article><?php endwhile;
          wp_reset_postdata();
        else:
          $title = 'How smart follow-ups turn leads into customers'; ?>
          <article class="post-card reveal">
            <div class="post-thumb"><span class="post-placeholder">V</span><span class="post-category">COMING SOON</span>
            </div>
            <div class="post-card-body">
              <h3><?php echo esc_html($title); ?></h3>
              <p>Practical CRM strategies and growth lessons for ambitious teams.</p>
            </div>
          </article><?php endif; ?>
      </div>
    </div>
  </section>

  <section id="faq" class="section faq-section" aria-labelledby="faq-title">
    <div class="container faq-layout">
      <div class="faq-intro reveal">
        <div class="eyebrow">FREQUENTLY ASKED QUESTIONS</div>
        <h2 id="faq-title">Everything you need to know about <em>VistaarFlow.</em></h2>
        <p>Clear answers about the platform, automation, flexibility, lead management, and getting started.</p><a
          class="button button-dark" href="https://app.vistaarflow.in/signup">Start with VistaarFlow →</a>
      </div>
      <div class="faq-list reveal">
        <?php $faqs = [
          ['What is VistaarFlow CRM?', 'VistaarFlow is an AI-powered CRM designed to help startups, small businesses, and real estate companies manage leads, customer conversations, sales pipelines, follow-ups, and everyday sales activities from one platform.'],
          ['Is VistaarFlow suitable for startups?', 'Yes. VistaarFlow helps startups build an organized sales process from the beginning. You can manage incoming leads, assign them to your team, track conversations, automate follow-ups, and monitor opportunities as your business grows.'],
          ['How can VistaarFlow help small businesses?', 'VistaarFlow brings your leads, customer interactions, appointments, follow-ups, and sales pipeline together. It reduces repetitive manual work and helps your team stay focused on customers who need attention.'],
          ['Is VistaarFlow useful for real estate companies?', 'Yes. Real estate teams can use VistaarFlow to manage buyer and investor enquiries, organize leads by project or pipeline, schedule site visits, track follow-ups, and manage opportunities from initial enquiry to closure.'],
          ['Can VistaarFlow capture leads from different sources?', 'Yes. VistaarFlow is designed to bring leads from multiple sources into one organized CRM, helping your team respond faster and avoid scattered lead management.'],
          ['Does VistaarFlow support automated follow-ups?', 'Yes. You can create workflows for follow-ups, reminders, lead assignments, notifications, and sales-stage activities so important opportunities don\'t get missed.'],
          ['Can I manage WhatsApp conversations in VistaarFlow?', 'VistaarFlow can bring supported WhatsApp interactions into the customer journey, making it easier for your team to view conversations and follow-up activities alongside lead information.'],
          ['Can I create different sales pipelines?', 'Yes. You can organize opportunities using pipelines and stages that match your sales process, whether you\'re managing business enquiries, property leads, or different products and services.'],
          ['Does VistaarFlow use AI?', 'Yes. VistaarFlow includes AI-powered capabilities designed to assist teams with lead management, follow-ups, prioritization, and day-to-day CRM activities.'],
          ['Is VistaarFlow difficult to use?', 'VistaarFlow is designed to keep everyday CRM activities straightforward. Teams can manage leads, conversations, tasks, appointments, and opportunities without navigating an unnecessarily complicated system.'],
          ['Can multiple team members use VistaarFlow?', 'Yes. VistaarFlow supports team-based lead management so businesses can assign leads, coordinate activities, and maintain visibility across their sales process.'],
          ['Is VistaarFlow only for large sales teams?', 'No. VistaarFlow is particularly suited to growing teams that want to establish a structured sales process without adopting an overly complex enterprise CRM.'],
          ['Why choose VistaarFlow?', 'VistaarFlow combines lead management, communication, sales pipelines, automation, appointments, and AI-powered assistance in one platform—helping growing businesses spend less time managing their CRM and more time converting opportunities.'],
        ];
        foreach ($faqs as $faq): ?>
          <details class="faq-item">
            <summary><span><?php echo esc_html($faq[0]); ?></span><i aria-hidden="true"></i></summary>
            <div class="faq-answer">
              <p><?php echo esc_html($faq[1]); ?></p>
            </div>
          </details><?php endforeach; ?>
        <nav class="faq-pagination" aria-label="FAQ pages"><button class="faq-page-prev" type="button"
            aria-label="Previous FAQ page">←</button>
          <div class="faq-page-numbers"></div><button class="faq-page-next" type="button"
            aria-label="Next FAQ page">→</button>
        </nav>
      </div>
    </div>
  </section>

  <section class="final-cta">
    <div class="container reveal">
      <div class="cta-orb"></div><span class="eyebrow">YOUR NEXT CHAPTER STARTS HERE</span>
      <h2>Ready to make your<br>sales flow <em>visible?</em></h2>
      <p>Import your leads, connect WhatsApp and email, then let your whole team work from one CRM.</p>
      <div><a class="button button-light" href="https://app.vistaarflow.in/signup">Create your account →</a><a
          href="https://app.vistaarflow.in/login">Already have an account? Log in</a></div>
    </div>
  </section>
  
</main><?php get_footer(); ?>