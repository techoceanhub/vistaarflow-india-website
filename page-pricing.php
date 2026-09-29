<?php get_header(); ?>

<main id="main" class="vistaarflow-pricing-page">

    <style>
        .vistaarflow-pricing-page {
            padding-top: 42px;
        }

        @media (max-width: 768px) {
            .vistaarflow-pricing-page {
                padding-top: 24px;
            }
        }
    </style>

    <style id="vistaarflow-pricing-overflow-fix">
        #pricing .pricing-grid .price-card,

        #pricing .pricing-grid .price-card ul {

            height: auto !important;

            max-height: none !important;

            overflow: visible !important;

            overflow-y: visible !important;

            scrollbar-width: none !important
        }



        #pricing .pricing-grid .price-card ul::-webkit-scrollbar {

            display: none !important;

            width: 0 !important;

            height: 0 !important
        }



        /* ---------- Heading + trust badges ---------- */

        .pricing-hero {

            text-align: center;

            /* max-width: 900px; */

            margin: 0 auto 8px;

        }



        .pricing-hero h2 {

            font-size: clamp(30px, 4vw, 46px);

            font-weight: 800;

            line-height: 1.15;

            color: #0b1220;

            margin: 0 0 22px;

        }



        .pricing-badges {

            display: flex;

            flex-wrap: wrap;

            align-items: center;

            justify-content: center;

            gap: 10px 22px;

            margin: 0 0 40px;

        }



        .pricing-badge {

            display: inline-flex;

            align-items: center;

            gap: 8px;

            font-size: 15px;

            font-weight: 600;

            color: #0b1220;

            white-space: nowrap;

        }



        .pricing-badge.pricing-badge-highlight {

            background: #d9f5e3;

            padding: 6px 14px;

            border-radius: 999px;

        }



        .pricing-badge-check {

            width: 20px;

            height: 20px;

            border-radius: 50%;

            border: 2px solid #17a768;

            color: #17a768;

            flex-shrink: 0;

            display: inline-flex;

            align-items: center;

            justify-content: center;

        }



        .pricing-badge-check svg {

            width: 11px;

            height: 11px;

        }



        /* ---------- Pill billing toggle + callout ---------- */

        .billing-toggle-wrap {

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 18px;

            margin: 0 auto 44px;

            flex-wrap: wrap;

        }



        .billing-pill {

            position: relative;

            display: inline-flex;

            background: #fff;

            border: 1px solid #dfe4ec;

            border-radius: 999px;

            padding: 4px;

            box-shadow: 0 2px 10px rgba(11, 18, 32, .06);

        }



        .billing-pill button {

            position: relative;

            z-index: 2;

            border: none;

            background: transparent;

            padding: 10px 26px;

            font-size: 15px;

            font-weight: 700;

            color: #5b6472;

            border-radius: 999px;

            cursor: pointer;

            transition: color .2s ease;

        }



        .billing-pill button.active {

            color: #fff;

        }



        .billing-pill-thumb {

            position: absolute;

            top: 4px;

            left: 4px;

            height: calc(100% - 8px);

            width: calc(50% - 4px);

            background: #0b1a3d;

            border-radius: 999px;

            transition: transform .25s ease;

            z-index: 1;

        }



        .billing-pill-thumb.is-yearly {

            transform: translateX(100%);

        }



        .billing-callout {

            display: flex;

            align-items: center;

            gap: 8px;

            font-size: 14px;

            color: #0b1220;

            line-height: 1.35;

        }



        .billing-callout-arrow {

            color: #17a768;

            flex-shrink: 0;

        }



        .billing-callout-arrow svg {

            width: 34px;

            height: 34px;

        }



        .billing-callout strong {

            display: block;

            color: #0b1220;

        }



        @media (max-width: 640px) {

            .billing-callout-arrow {

                display: none;

            }

        }



        /* ---------- Price block + per-user price ---------- */

        .price-card .price {

            display: flex;

            flex-wrap: wrap;

            align-items: baseline;

            row-gap: 2px;

        }



        .price-card .price .price-strike {

            text-decoration: line-through;

            color: #b6bcc7;

            font-size: 15px;

            font-weight: 600;

            margin-right: 6px;

        }



        .price-card .price-per-user-line {

            flex-basis: 100%;

            /* display: inline-flex;

      align-items: baseline; */

            gap: 6px;

            font-size: 13px;

            font-weight: 600;

            color: #0b6b3f;

            background: #eafaf1;

            border: 1px solid #bfe9d3;

            border-radius: 8px;

            padding: 6px 5px;

            margin-top: 5px;

            margin-bottom: 5px;

            width: fit-content;

        }



        .price-card .price-per-user-line strong {

            color: #0b1220;

            font-weight: 800;

            font-size: 14px;

        }



        .price-card .price-period-note {

            display: block;

            font-size: 11px;

            color: #8a93a3;

            font-weight: 500;

            margin-top: 6px;

        }



        .price-card.featured .price-per-user-line {

            background: rgba(255, 255, 255, 0.12);

            border-color: rgba(255, 255, 255, 0.25);

            color: #d9f5e3;

        }



        .price-card.featured .price-per-user-line strong {

            color: #fff;

        }



        /* ---------- "Everything in X" line highlight ---------- */

        .price-card ul li.feature-inherit {

            font-weight: 700;

            color: inherit;

            /* don't force a color — respects the featured card's own (often dark-background/light-text) styling */

        }



        /* ---------- AI feature highlight box (matches reference design) ---------- */

        .price-card .ai-feature-box {

            position: relative;

            margin: 18px 0 4px !important;

            padding: 22px 18px 16px !important;

            border-radius: 16px;

            border: 1px solid #e3ead9;

            background: linear-gradient(135deg, #eaf7ee 0%, #f6f2f4 55%, #fbe7f3 100%);

            list-style: none !important;

        }



        .price-card .ai-feature-box::before {

            content: none !important;

            /* prevent the outer checklist checkmark bleeding onto the box itself */

        }



        .price-card .ai-feature-box .ai-badge {

            position: absolute;

            top: -14px;

            right: 14px;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            line-height: 1;

            gap: 4px;

            background: #fff;

            border: 1px solid #ece7f5;

            border-radius: 999px;

            padding: 6px 12px 6px 12px;

            font-size: 12px;

            font-weight: 800;

            color: #0b1220;

            box-shadow: 0 3px 10px rgba(11, 18, 32, .08);

        }



        .price-card .ai-feature-box .ai-badge svg {

            width: 12px;

            height: 12px;

            color: #a463e0;

        }



        .price-card .ai-feature-box ul {

            list-style: none !important;

            margin: 0 !important;

            padding: 0 !important;

        }



        .price-card .ai-feature-box li {

            display: flex;

            align-items: center;

            gap: 10px;

            font-size: 14px;

            line-height: 1.4;

            font-weight: 600;

            color: #0b1220;

            padding: 7px 0;

            margin: 0;

            list-style: none;

        }



        .price-card .ai-feature-box li::before {

            content: "✓";

            display: inline-flex;

            align-items: center;

            justify-content: center;

            width: 18px;

            height: 18px;

            flex: 0 0 18px;

            border-radius: 50%;

            color: #17a768;

            font-size: 13px;

            line-height: 1;

            font-weight: 900;

            margin-top: 0;

        }



        .price-card .ai-feature-box li span {

            flex: 1 1 auto;

        }
    </style>



    <section id="pricing" class="section pricing">
    <div class="container">

      <div class="pricing-hero reveal">
        <div class="pricing-badges">
          <span class="pricing-badge"><span class="pricing-badge-check"><svg viewBox="0 0 16 16" fill="none">
                <path d="M3 8.5l3 3 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg></span>Free 14-day trial</span>
          <span class="pricing-badge"><span class="pricing-badge-check"><svg viewBox="0 0 16 16" fill="none">
                <path d="M3 8.5l3 3 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg></span>Complimentary onboarding</span>
          <span class="pricing-badge pricing-badge-highlight"><span class="pricing-badge-check"><svg viewBox="0 0 16 16"
                fill="none">
                <path d="M3 8.5l3 3 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg></span>Full refund guarantee</span>
          <span class="pricing-badge"><span class="pricing-badge-check"><svg viewBox="0 0 16 16" fill="none">
                <path d="M3 8.5l3 3 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg></span>Dedicated support team</span>
          <span class="pricing-badge"><span class="pricing-badge-check"><svg viewBox="0 0 16 16" fill="none">
                <path d="M3 8.5l3 3 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg></span>No long-term commitment</span>
        </div>
        <h2>Powerfull CRM. <em>Simple, Affordable Pricing.</em></h2>

      </div>

      <!-- Monthly / Yearly pill toggle -->
      <div class="billing-toggle-wrap">
        <div class="billing-pill" role="group" aria-label="Choose billing cycle">
          <span class="billing-pill-thumb" id="billing-pill-thumb"></span>
          <button type="button" class="active" data-billing-btn="monthly">Monthly</button>
          <button type="button" data-billing-btn="yearly">Yearly</button>
        </div>
        <div class="billing-callout">
          <span class="billing-callout-arrow">
            <svg viewBox="0 0 40 40" fill="none">
              <path d="M6 30C6 14 18 6 34 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
              <path d="M28 4l6 4-5 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </span>
          <span>Go Yearly and<br><strong>SAVE UP TO 20%</strong></span>
        </div>
      </div>

      <div class="pricing-grid">
        <?php
        /*
         * Plan data transcribed directly from "VistaarFlow_Full_Plan_Features.xlsx"
         * → sheet "Pricing Card Format". Every "regular" feature matches that sheet's
         * column, in the same order. AI-specific items are pulled out into a separate
         * `ai_features` array so they render inside the highlighted AI box, matching
         * the reference design (badge + gradient box + checklist).
         */
        $plans = [
          [
            'name' => 'Starter',
            'monthly' => 499,
            'tagline' => 'For individuals and small teams getting started with CRM.',
            'user_seats' => 2,
            'ai_features' => [], // no AI box on Starter
            'features' => [
              '2 User Seats',
              '50,000 Contacts',
              '500 Credits*',
              '2 CRM Pipelines',
              'Deal & Stage Tracking',
              'Lead Management',
              'Website Lead Capture',
              'Whatsapp Lead Capture',
              'Mail Integration (Send / Receive)',
              'Microsoft Gmail Integration',
              'Portal Connectivity (99acres, MagicBricks, Housing.com, Zapier)',
              'WhatsApp Integration',
              'Facebook / Meta Lead Integration',
              'Telephony / Calling Integration',
              'Bulk Whatsapp Template Sending',
              'Unlimited Third-Party Call Tracking',
              '5 GB Media Storage',
              'Unlimited Automation',
              'In-App Push Notifications for Fast Connecting',
              'WhatsApp Flow/Form Builder',
              'Task Assignment to Users',
              'Schedule Appointments',
              'Reporting',
              'Create & Maintain Catalog',
              'Email Template Creation & Sending',
              'Lead Assignment to Users / Automated Lead Assignment',
            ],
          ],
          [
            'name' => 'Growth',
            'monthly' => 999,
            'tagline' => 'For growing businesses that need AI, automation and better communication.',
            'user_seats' => 5,
            'ai_features' => [
              'Record Summary',
              'AI Reply',
              'Email Reply Assistant',
              'AI Suggestions',
            ],
            'features' => [
              'Everything in Starter',
              '5 User Seats',
              '1,00,000 Contacts',
              '2,000 Credits*',
              '5 CRM Pipelines',
              'Workflow Automation',
              'WhatsApp Flow/Form Builder',
              'Website Lead Capture',
              'Facebook / Meta Lead Integration',
              'WhatsApp Integration',
              'Telephony / Calling Integration',
              'Unlimited Third-Party Call Tracking',
              '10 GB Media Storage',
            ],
          ],
          [
            'name' => 'Pro',
            'monthly' => 1999,
            'tagline' => 'For established teams that need advanced automation and higher CRM capacity.',
            'user_seats' => 12,
            // 'ai_features'  => [
            //   'AI Summary',
            //   'AI Reply',
            //   '7,500 AI credits/month',
            // ],
            'features' => [
              'Everything in Growth',
              '12 User Seats',
              '1Million Contacts',
              '7,500 Credits*',
              '15 CRM Pipelines',
              'Workflow Automation',
              'Advanced Workflows',
              'Advanced Reports',
              'WhatsApp Flow/Form Builder',
              'Website Lead Capture',
              'Facebook / Meta Lead Integration',
              'WhatsApp Integration',
              'Telephony / Calling Integration',
              'Unlimited Third-Party Call Tracking',
              '15 GB Media Storage',
            ],
          ],
          [
            'name' => 'Agency',
            'monthly' => 4999,
            'tagline' => 'For agencies and larger teams managing high lead volumes and multiple pipelines.',
            'user_seats' => 30,
            // 'ai_features'  => [
            //   'AI Summary',
            //   'AI Reply',
            //   '25,000 AI credits/month',
            // ],
            'features' => [
              'Everything in Pro',
              '30 User Seats',
              '10Million Contacts',
              '25,000 Credits*',
              '50 CRM Pipelines',
              'Workflow Automation',
              'Advanced Workflows',
              'Advanced Reports',
              'WhatsApp Flow/Form Builder',
              'Website Lead Capture',
              'Facebook / Meta Lead Integration',
              'WhatsApp Integration',
              'Telephony / Calling Integration',
              'Unlimited Third-Party Call Tracking',
              'Priority Support',
              '50 GB Media Storage',
            ],
          ],
        ];

        $vf_credits_info_url = 'https://vistaarflow.in/2026/09/18/understanding-vistaarflows-usage-based-credit-pricing-pay-only-for-what-you-actually-use/';
        $vf_yearly_discount = 0.20; // 20% off
        $featured_index = 1;    // "Growth" is highlighted as Most Popular
        
        foreach ($plans as $i => $p):
          $monthly = (int) $p['monthly'];
          $user_seats = (int) $p['user_seats'];

          // Yearly = monthly price minus the discount, rounded to a clean number
          $yearly_monthly_equiv = (int) round(($monthly * (1 - $vf_yearly_discount)) / 10) * 10;
          $yearly_total = $yearly_monthly_equiv * 12;

          // Per-user price = total plan price ÷ number of user seats
          $per_user_monthly = $user_seats > 0 ? round($monthly / $user_seats) : $monthly;
          $per_user_yearly = $user_seats > 0 ? round($yearly_monthly_equiv / $user_seats) : $yearly_monthly_equiv;
          ?>
          <article class="price-card <?php echo $i === $featured_index ? 'featured' : ''; ?> reveal"
            data-monthly-price="<?php echo esc_attr($monthly); ?>"
            data-yearly-monthly="<?php echo esc_attr($yearly_monthly_equiv); ?>"
            data-yearly-total="<?php echo esc_attr($yearly_total); ?>"
            data-user-seats="<?php echo esc_attr($user_seats); ?>"
            data-per-user-monthly="<?php echo esc_attr($per_user_monthly); ?>"
            data-per-user-yearly="<?php echo esc_attr($per_user_yearly); ?>">
            <?php if ($i === $featured_index): ?><span class="popular">MOST POPULAR</span><?php endif; ?>
            <h3><?php echo esc_html($p['name']); ?></h3>
            <p><?php echo esc_html($p['tagline']); ?></p>

            <div class="price" data-mode="monthly">
              <small>₹</small><strong
                class="price-amount"><?php echo esc_html(number_format($monthly)); ?></strong><span>/ month</span>
            </div>
            <div class="price-per-user-line">
              <strong class="price-per-user-amount">₹<?php echo esc_html(number_format($per_user_monthly)); ?></strong> /
              user / month
              <span class="price-period-note">Billed monthly · <?php echo esc_html($user_seats); ?> user seats</span>
            </div>

            <a class="button <?php echo $i === $featured_index ? '' : 'button-outline'; ?>"
              href="https://app.vistaarflow.in/signup">
              Choose <?php echo esc_html($p['name']); ?>
            </a>

            <ul>
              <?php foreach ($p['features'] as $item): ?>
                <?php if (preg_match('/Credits\*$/i', $item)): ?>
                  <li>✓ <a class="credits-link" href="<?php echo esc_url($vf_credits_info_url); ?>" target="_blank"
                      rel="noopener noreferrer"
                      aria-label="<?php echo esc_attr($item . ' — click to learn how credits work'); ?>">
                      <svg class="credits-info-icon" width="13" height="13" viewBox="0 0 16 16" fill="none"
                        aria-hidden="true">
                        <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-width="1.3" />
                        <line x1="8" y1="7.2" x2="8" y2="11.3" stroke="currentColor" stroke-width="1.3"
                          stroke-linecap="round" />
                        <circle cx="8" cy="4.9" r="0.9" fill="currentColor" />
                      </svg><span class="credits-link-text"><?php echo esc_html($item); ?></span>
                    </a>
                  </li>
                <?php elseif (preg_match('/^Everything in /i', $item)): ?>
                  <li class="feature-inherit">✓ <?php echo esc_html($item); ?></li>
                <?php else: ?>
                  <li>✓ <?php echo esc_html($item); ?></li>
                <?php endif; ?>
              <?php endforeach; ?>

              <?php if (!empty($p['ai_features'])): ?>
                <li class="ai-feature-box">
                  <span class="ai-badge">AI
                    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                      <path d="M12 2l1.6 5.6L19 9l-5.4 1.4L12 16l-1.6-5.6L5 9l5.4-1.4L12 2z" />
                      <path d="M19 14l.8 2.8L22.6 17.6 19.8 18.4 19 21.2 18.2 18.4 15.4 17.6 18.2 16.8 19 14z" />
                    </svg>
                  </span>
                  <ul>
                    <?php foreach ($p['ai_features'] as $ai_item): ?>
                      <li><span><?php echo esc_html($ai_item); ?></span></li>
                    <?php endforeach; ?>
                  </ul>
                </li>
              <?php endif; ?>
            </ul>
          </article>
        <?php endforeach; ?>
      </div>

      <!-- <p class="pricing-note">All plans include guided onboarding, team training, cloud hosting, automatic backups and
        regular product updates. Meta WhatsApp conversation charges are billed separately by Meta. Per-user price is the
        plan price divided by the included user seats. Yearly billing saves 20% versus paying monthly.</p> -->
    </div>
  </section>



    <script>

        (function () {

            var pillThumb = document.getElementById('billing-pill-thumb');

            var pillBtns = document.querySelectorAll('.billing-pill [data-billing-btn]');

            var cards = document.querySelectorAll('#pricing .price-card');

            if (!pillThumb || !pillBtns.length) return;



            function formatNumber(n) {

                return Number(n).toLocaleString('en-IN');

            }



            function render(isYearly) {

                pillThumb.classList.toggle('is-yearly', isYearly);

                pillBtns.forEach(function (btn) {

                    var isThisYearly = btn.getAttribute('data-billing-btn') === 'yearly';

                    btn.classList.toggle('active', isThisYearly === isYearly);

                });



                cards.forEach(function (card) {

                    var priceEl = card.querySelector('.price');

                    var amountEl = card.querySelector('.price-amount');

                    var perUserAmtEl = card.querySelector('.price-per-user-amount');

                    var noteEl = card.querySelector('.price-period-note');



                    var monthly = card.getAttribute('data-monthly-price');

                    var yearlyMonthly = card.getAttribute('data-yearly-monthly');

                    var yearlyTotal = card.getAttribute('data-yearly-total');

                    var seats = card.getAttribute('data-user-seats');

                    var perUserMonthly = card.getAttribute('data-per-user-monthly');

                    var perUserYearly = card.getAttribute('data-per-user-yearly');



                    if (isYearly) {

                        priceEl.setAttribute('data-mode', 'yearly');

                        amountEl.innerHTML = '<span class="price-strike">₹' + formatNumber(monthly) + '</span>' + formatNumber(yearlyMonthly);

                        perUserAmtEl.textContent = '₹' + formatNumber(Math.round(perUserYearly));

                        noteEl.textContent = 'Billed annually (₹' + formatNumber(yearlyTotal) + '/yr) · ' + seats + ' user seats';

                    } else {

                        priceEl.setAttribute('data-mode', 'monthly');

                        amountEl.textContent = formatNumber(monthly);

                        perUserAmtEl.textContent = '₹' + formatNumber(Math.round(perUserMonthly));

                        noteEl.textContent = 'Billed monthly · ' + seats + ' user seats';

                    }

                });

            }



            pillBtns.forEach(function (btn) {

                btn.addEventListener('click', function () {

                    render(btn.getAttribute('data-billing-btn') === 'yearly');

                });

            });



            render(false); // default: monthly

        })();

    </script>
    <!-- ================================
     VISTAARFLOW PRICING FAQ
================================ -->

<style>
.vf-pricing-faq {
    padding: 85px 20px 95px;
    background: #ffffff;
}

.vf-pricing-faq-inner {
    max-width: 900px;
    margin: 0 auto;
}

/* Heading */
.vf-pricing-faq-heading {
    text-align: center;
    margin-bottom: 42px;
}

.vf-pricing-faq-heading .faq-label {
    display: inline-block;
    margin-bottom: 12px;
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 1.5px;
    color: #215af8;
}

.vf-pricing-faq-heading h2 {
    margin: 0 0 14px;
    color: #0b1220;
    font-size: clamp(30px, 4vw, 46px);
    line-height: 1.15;
    font-weight: 800;
    letter-spacing: -0.03em;
}

.vf-pricing-faq-heading h2 em {
    color: #215af8;
    font-style: normal;
}

.vf-pricing-faq-heading p {
    max-width: 620px;
    margin: 0 auto;
    color: #667085;
    font-size: 16px;
    line-height: 1.7;
}

/* FAQ List */
.vf-faq-list {
    display: grid;
    gap: 12px;
}

.vf-faq-item {
    background: #ffffff;
    border: 1px solid #e5e9f0;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 5px 22px rgba(11, 18, 32, 0.04);
    transition:
        border-color .2s ease,
        box-shadow .2s ease;
}

.vf-faq-item:hover {
    border-color: #d6deeb;
    box-shadow: 0 8px 28px rgba(11, 18, 32, 0.06);
}

/* Question */
.vf-faq-question {
    width: 100%;
    border: 0;
    background: transparent;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding: 21px 24px;

    text-align: left;
    color: #0b1220;
    font-family: inherit;
    font-size: 16px;
    font-weight: 700;

    cursor: pointer;
}

/* + icon */
.vf-faq-icon {
    width: 30px;
    height: 30px;
    flex: 0 0 30px;

    display: grid;
    place-items: center;

    border-radius: 50%;
    background: #f1f5ff;
    color: #215af8;

    font-size: 21px;
    font-weight: 400;
    line-height: 1;

    transition:
        transform .22s ease,
        background .22s ease,
        color .22s ease;
}

/* Answer */
.vf-faq-answer {
    display: grid;
    grid-template-rows: 0fr;
    transition: grid-template-rows .25s ease;
}

.vf-faq-answer > div {
    overflow: hidden;
}

.vf-faq-answer p {
    margin: 0;
    padding: 0 70px 22px 24px;

    color: #667085;
    font-size: 15px;
    line-height: 1.7;
}

/* Open */
.vf-faq-item.is-open {
    border-color: #d7e1ff;
}

.vf-faq-item.is-open .vf-faq-answer {
    grid-template-rows: 1fr;
}

.vf-faq-item.is-open .vf-faq-icon {
    transform: rotate(45deg);
    background: #215af8;
    color: #ffffff;
}

/* Mobile */
@media (max-width: 640px) {

    .vf-pricing-faq {
        padding: 60px 16px 70px;
    }

    .vf-pricing-faq-heading {
        margin-bottom: 30px;
    }

    .vf-faq-question {
        padding: 18px;
        font-size: 15px;
    }

    .vf-faq-answer p {
        padding: 0 18px 19px;
    }
}
</style>


<section class="vf-pricing-faq">

    <div class="vf-pricing-faq-inner">

        <div class="vf-pricing-faq-heading">

            <span class="faq-label">
                PRICING FAQ
            </span>

            <h2>
                Questions about
                <em>VistaarFlow pricing?</em>
            </h2>

            <p>
                Quick answers about plans, billing, credits,
                WhatsApp charges and getting started with VistaarFlow.
            </p>

        </div>


        <div class="vf-faq-list">

            <!-- FAQ 1 -->
            <article class="vf-faq-item is-open">

                <button
                    class="vf-faq-question"
                    type="button"
                    aria-expanded="true"
                >
                    <span>Is there a free trial?</span>
                    <span class="vf-faq-icon">+</span>
                </button>

                <div class="vf-faq-answer">
                    <div>
                        <p>
                            Yes. VistaarFlow includes a 14-day free trial,
                            allowing you to explore the CRM before choosing
                            a paid plan.
                        </p>
                    </div>
                </div>

            </article>


            <!-- FAQ 2 -->
            <article class="vf-faq-item">

                <button
                    class="vf-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>What is included with onboarding?</span>
                    <span class="vf-faq-icon">+</span>
                </button>

                <div class="vf-faq-answer">
                    <div>
                        <p>
                            All plans include guided onboarding and team
                            training to help your business get started
                            with VistaarFlow.
                        </p>
                    </div>
                </div>

            </article>


            <!-- FAQ 3 -->
            <article class="vf-faq-item">

                <button
                    class="vf-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>Can I choose monthly or yearly billing?</span>
                    <span class="vf-faq-icon">+</span>
                </button>

                <div class="vf-faq-answer">
                    <div>
                        <p>
                            Yes. You can choose monthly or yearly billing.
                            Yearly billing saves 20% compared with paying
                            monthly.
                        </p>
                    </div>
                </div>

            </article>


            <!-- FAQ 4 -->
            <article class="vf-faq-item">

                <button
                    class="vf-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>What are VistaarFlow credits?</span>
                    <span class="vf-faq-icon">+</span>
                </button>

                <div class="vf-faq-answer">
                    <div>
                        <p>
                            Each VistaarFlow plan includes a set number
                            of credits. Credits are used for applicable
                            usage-based actions within the CRM.
                        </p>
                    </div>
                </div>

            </article>


            <!-- FAQ 5 -->
            <article class="vf-faq-item">

                <button
                    class="vf-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>
                        Are WhatsApp charges included in my subscription?
                    </span>

                    <span class="vf-faq-icon">+</span>
                </button>

                <div class="vf-faq-answer">
                    <div>
                        <p>
                            No. Meta WhatsApp conversation charges are
                            billed separately by Meta and are not included
                            in your VistaarFlow subscription.
                        </p>
                    </div>
                </div>

            </article>


            <!-- FAQ 6 -->
            <article class="vf-faq-item">

                <button
                    class="vf-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>
                        Can I change my plan as my business grows?
                    </span>

                    <span class="vf-faq-icon">+</span>
                </button>

                <div class="vf-faq-answer">
                    <div>
                        <p>
                            VistaarFlow offers Starter, Growth, Pro and
                            Agency plans with different user seats,
                            contacts, credits, pipelines, storage and
                            features so you can choose a plan based on
                            your business requirements.
                        </p>
                    </div>
                </div>

            </article>


            <!-- FAQ 7 -->
            <!-- <article class="vf-faq-item">

                <button
                    class="vf-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>
                        Is cloud hosting and backup included?
                    </span>

                    <span class="vf-faq-icon">+</span>
                </button>

                <div class="vf-faq-answer">
                    <div>
                        <p>
                            Yes. All plans include cloud hosting,
                            automatic backups and regular product updates.
                        </p>
                    </div>
                </div>

            </article> -->


            <!-- FAQ 8 -->
            <article class="vf-faq-item">

                <button
                    class="vf-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>
                        Which plan includes AI features?
                    </span>

                    <span class="vf-faq-icon">+</span>
                </button>

                <div class="vf-faq-answer">
                    <div>
                        <p>
                            The Growth plan includes AI features such as
                            Record Summary, AI Reply, Email Reply Assistant
                            and AI Suggestions.
                        </p>
                    </div>
                </div>

            </article>

        </div>

    </div>

</section>


<script>
(function () {

    const faqItems =
        document.querySelectorAll('.vf-faq-item');

    faqItems.forEach(function (item) {

        const button =
            item.querySelector('.vf-faq-question');

        button.addEventListener('click', function () {

            const shouldOpen =
                !item.classList.contains('is-open');


            /* Close all FAQs */

            faqItems.forEach(function (otherItem) {

                otherItem.classList.remove('is-open');

                const otherButton =
                    otherItem.querySelector(
                        '.vf-faq-question'
                    );

                otherButton.setAttribute(
                    'aria-expanded',
                    'false'
                );

            });


            /* Open selected FAQ */

            if (shouldOpen) {

                item.classList.add('is-open');

                button.setAttribute(
                    'aria-expanded',
                    'true'
                );

            }

        });

    });

})();
</script>

</main>

<?php get_footer(); ?>