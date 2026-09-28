<?php get_header(); ?>

<main id="main" class="vf-fb-page">

    <style>
        .vf-fb-page {
            --blue: #1877f2;
            --navy: #0b1220;
            --muted: #667085;
            --line: #e5eaf1;
            --soft: #f5f8ff;
            --green: #17a768;
            background: #fff;
            color: var(--navy);
            overflow: hidden
        }

        .vf-fb-page * {
            box-sizing: border-box
        }

        .vf-fb-page .container {
            width: min(1180px, calc(100% - 40px));
            margin: auto
        }

        .fb-eyebrow {
            font-size: 12px;
            font-weight: 850;
            letter-spacing: 1.5px;
            color: var(--blue);
            text-transform: uppercase;
            margin-bottom: 14px
        }

        .fb-hero {
            padding: 92px 0 96px;
            background: radial-gradient(circle at 82% 22%, #e7f0ff 0, transparent 32%), linear-gradient(180deg, #fff, #f8fbff)
        }

        .fb-hero-grid {
            display: grid;
            grid-template-columns: .9fr 1.1fr;
            gap: 64px;
            align-items: center
        }

        .fb-hero h1 {
            font-size: clamp(42px, 5vw, 68px);
            line-height: 1.02;
            letter-spacing: -.045em;
            margin: 0 0 22px;
            font-weight: 850
        }

        .fb-hero h1 em,
        .fb-heading h2 em,
        .fb-show h2 em {
            font-style: normal;
            color: var(--blue)
        }

        .fb-hero-copy>p {
            font-size: 18px;
            line-height: 1.7;
            color: var(--muted);
            max-width: 650px;
            margin: 0 0 28px
        }

        .fb-btns {
            display: flex;
            gap: 12px;
            flex-wrap: wrap
        }

        .fb-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 13px 20px;
            border-radius: 10px;
            background: var(--blue);
            color: #fff !important;
            text-decoration: none !important;
            font-weight: 750;
            box-shadow: 0 10px 25px rgba(24, 119, 242, .18)
        }

        .fb-btn.alt {
            background: #fff;
            color: var(--navy) !important;
            border: 1px solid var(--line);
            box-shadow: none
        }

        .fb-proof {
            display: flex;
            gap: 22px;
            flex-wrap: wrap;
            margin-top: 25px;
            color: #475467;
            font-size: 13px;
            font-weight: 700
        }

        .fb-proof span:before {
            content: "✓";
            color: var(--green);
            margin-right: 6px
        }

        /* CRM preview */
        .fb-app {
            background: #fff;
            border: 1px solid #dfe6ef;
            border-radius: 22px;
            box-shadow: 0 28px 80px rgba(30, 55, 90, .14);
            overflow: hidden;
            position: relative
        }

        .fb-appbar {
            height: 45px;
            border-bottom: 1px solid #e9edf3;
            display: flex;
            align-items: center;
            padding: 0 15px;
            gap: 6px;
            background: #fbfcfe
        }

        .fb-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #d9dee7
        }

        .fb-app-title {
            font-size: 11px;
            font-weight: 750;
            color: #7a8494;
            margin-left: 8px
        }

        .fb-appbody {
            display: grid;
            grid-template-columns: 112px 1fr 180px;
            min-height: 420px
        }

        .fb-sidebar {
            padding: 18px 8px;
            border-right: 1px solid #edf0f5;
            background: #f8faff
        }

        .fb-nav {
            padding: 10px 8px;
            border-radius: 8px;
            font-size: 9px;
            font-weight: 750;
            color: #667085;
            margin-bottom: 6px
        }

        .fb-nav.active {
            background: #e9f2ff;
            color: #1668d4
        }

        .fb-leads {
            padding: 18px
        }

        .fb-leads h4,
        .fb-detail h4 {
            font-size: 12px;
            margin: 0 0 14px
        }

        .fb-lead-row {
            border: 1px solid #e7ebf2;
            border-radius: 10px;
            padding: 11px;
            margin-bottom: 9px;
            display: flex;
            gap: 9px;
            align-items: center
        }

        .fb-avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: #e8f1ff;
            color: #1668d4;
            font-size: 10px;
            font-weight: 850
        }

        .fb-lead-row strong {
            display: block;
            font-size: 10px
        }

        .fb-lead-row small {
            display: block;
            color: #8a93a3;
            font-size: 8px;
            margin-top: 3px
        }

        .fb-new {
            font-size: 7px;
            background: #e9f8ef;
            color: #12824e;
            padding: 3px 6px;
            border-radius: 999px;
            margin-left: auto;
            font-weight: 850
        }

        .fb-detail {
            padding: 18px 14px;
            border-left: 1px solid #edf0f5;
            background: #fcfdff
        }

        .fb-field {
            padding: 8px 0;
            border-bottom: 1px solid #edf0f5
        }

        .fb-field small {
            display: block;
            color: #98a2b3;
            font-size: 7px
        }

        .fb-field b {
            display: block;
            font-size: 9px;
            margin-top: 3px
        }

        .fb-source {
            display: inline-block;
            margin-top: 13px;
            padding: 5px 7px;
            border-radius: 6px;
            background: #e9f2ff;
            color: #1668d4;
            font-size: 8px;
            font-weight: 800
        }

        .fb-floating {
            position: absolute;
            background: #fff;
            border: 1px solid #e2e7ee;
            border-radius: 10px;
            padding: 9px 12px;
            font-size: 9px;
            font-weight: 800;
            box-shadow: 0 12px 30px rgba(18, 40, 75, .13)
        }

        .fb-floating.one {
            right: 18px;
            top: 62px
        }

        .fb-floating.two {
            left: 130px;
            bottom: 18px
        }

        .fb-floating i {
            font-style: normal;
            color: var(--green)
        }

        /* General */
        .fb-section,
        .fb-show,
        .fb-flow-section,
        .fb-data-section {
            padding: 95px 0
        }

        .fb-section {
            background: #fff
        }

        .fb-show,
        .fb-data-section {
            background: #f7f9fc
        }

        .fb-heading {
            text-align: center;
            max-width: 760px;
            margin: 0 auto 46px
        }

        .fb-heading h2,
        .fb-show h2 {
            font-size: clamp(32px, 4vw, 50px);
            line-height: 1.1;
            letter-spacing: -.035em;
            margin: 0 0 14px
        }

        .fb-heading p,
        .fb-show p {
            color: var(--muted);
            line-height: 1.7;
            margin: 0
        }

        .fb-features {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px
        }

        .fb-card {
            padding: 26px;
            border: 1px solid var(--line);
            border-radius: 17px;
            background: #fff;
            box-shadow: 0 7px 26px rgba(16, 32, 56, .035)
        }

        .fb-icon {
            width: 42px;
            height: 42px;
            border-radius: 11px;
            display: grid;
            place-items: center;
            background: #eaf2ff;
            color: var(--blue);
            font-weight: 900;
            margin-bottom: 17px
        }

        .fb-card h3 {
            font-size: 17px;
            margin: 0 0 9px
        }

        .fb-card p {
            font-size: 14px;
            line-height: 1.65;
            color: var(--muted);
            margin: 0
        }

        /* Data mapping */
        .fb-data-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 55px;
            align-items: center
        }

        .fb-form-card {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 22px 55px rgba(18, 40, 75, .09)
        }

        .fb-form-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 18px
        }

        .fb-form-top strong {
            font-size: 15px
        }

        .fb-meta-pill {
            font-size: 9px;
            font-weight: 850;
            color: #1668d4;
            background: #eaf2ff;
            border-radius: 999px;
            padding: 6px 9px
        }

        .fb-form-field {
            padding: 11px 13px;
            border: 1px solid #e7ebf1;
            border-radius: 9px;
            margin: 8px 0
        }

        .fb-form-field small {
            display: block;
            color: #98a2b3;
            font-size: 9px;
            margin-bottom: 3px
        }

        .fb-form-field b {
            font-size: 12px
        }

        .fb-map {
            margin-top: 15px;
            padding: 13px;
            border-radius: 10px;
            background: #f4f8ff;
            color: #345;
            font-size: 11px;
            line-height: 1.65
        }

        .fb-map strong {
            color: var(--blue)
        }

        .fb-checks {
            margin-top: 24px
        }

        .fb-check {
            display: flex;
            gap: 12px;
            margin: 17px 0
        }

        .fb-check i {
            font-style: normal;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: #e9f8ef;
            color: var(--green);
            font-size: 12px;
            font-weight: 900;
            flex: 0 0 25px
        }

        .fb-check strong {
            font-size: 14px
        }

        .fb-check p {
            font-size: 13px;
            margin: 4px 0 0;
            color: var(--muted)
        }

        /* Flow */
        .fb-flow {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
            align-items: stretch
        }

        .fb-step {
            position: relative;
            text-align: center;
            padding: 19px 9px;
            border: 1px solid var(--line);
            border-radius: 14px;
            background: #fff
        }

        .fb-step:not(:last-child):after {
            content: "→";
            position: absolute;
            right: -13px;
            top: 50%;
            transform: translateY(-50%);
            color: #9aa4b2;
            font-weight: 900;
            z-index: 3
        }

        .fb-num {
            width: 30px;
            height: 30px;
            margin: 0 auto 10px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: #eaf2ff;
            color: var(--blue);
            font-size: 10px;
            font-weight: 900
        }

        .fb-step strong {
            font-size: 11px;
            display: block
        }

        .fb-step small {
            font-size: 9px;
            line-height: 1.4;
            color: #8a93a3;
            display: block;
            margin-top: 5px
        }

        /* Showcase */
        .fb-show-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center
        }

        .fb-automation {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 22px 55px rgba(18, 40, 75, .08)
        }

        .fb-auto-row {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 13px;
            border-radius: 10px;
            border: 1px solid #e8ecf2;
            margin: 9px 0;
            font-size: 12px;
            font-weight: 750
        }

        .fb-auto-icon {
            width: 29px;
            height: 29px;
            border-radius: 8px;
            background: #eaf2ff;
            color: var(--blue);
            display: grid;
            place-items: center;
            font-size: 11px
        }

        .fb-auto-arrow {
            text-align: center;
            color: #98a2b3;
            font-size: 13px
        }

        /* CTA */
        .fb-cta {
            padding: 40px 0 105px
        }

        .fb-cta-box {
            padding: 55px;
            border-radius: 26px;
            background: linear-gradient(135deg, #1877f2, #0d4fb5);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 35px;
            box-shadow: 0 30px 70px rgba(24, 119, 242, .22)
        }

        .fb-cta-box h2 {
            font-size: clamp(30px, 4vw, 46px);
            margin: 0 0 8px;
            color: #fff
        }

        .fb-cta-box p {
            margin: 0;
            color: #e3edff
        }

        .fb-cta-box .fb-btn {
            background: #fff;
            color: #1257bf !important;
            white-space: nowrap
        }
        .vf-wa-meta-highlight{
            color: #1877f2;
        }

        @media(max-width:980px) {

            .fb-hero-grid,
            .fb-data-grid,
            .fb-show-grid {
                grid-template-columns: 1fr
            }

            .fb-features {
                grid-template-columns: 1fr 1fr
            }

            .fb-flow {
                grid-template-columns: repeat(2, 1fr)
            }

            .fb-step:after {
                display: none
            }

            .fb-app {
                max-width: 720px;
                margin: auto
            }

            .fb-cta-box {
                flex-direction: column;
                align-items: flex-start
            }
        }

        @media(max-width:640px) {
            .vf-fb-page .container {
                width: min(100% - 26px, 1180px)
            }

            .fb-hero {
                padding: 70px 0
            }

            .fb-hero h1 {
                font-size: 42px
            }

            .fb-features,
            .fb-flow {
                grid-template-columns: 1fr
            }

            .fb-appbody {
                grid-template-columns: 85px 1fr
            }

            .fb-detail {
                display: none
            }

            .fb-floating {
                display: none
            }

            .fb-section,
            .fb-show,
            .fb-flow-section,
            .fb-data-section {
                padding: 72px 0
            }

            .fb-cta-box {
                padding: 34px 25px
            }
        }
    </style>

    <section class="fb-hero">
        <div class="container fb-hero-grid">
            <div class="fb-hero-copy">
                <div class="fb-eyebrow">FACEBOOK & META LEAD CRM</div>
                <h1>Turn Facebook form submissions into <em>CRM opportunities.</em></h1>
                <p>Connect Meta Lead Ads with VistaarFlow and bring submitted lead-form data directly into your CRM.
                    Organize contacts, map fields, assign owners, trigger workflows, and move qualified enquiries into
                    your sales pipeline. <strong class="vf-wa-meta-highlight">No need to pay extra for a separate Facebook lead plugin — Meta Lead
                    integration is built into VistaarFlow CRM. Simply connect your account and start capturing leads.</strong> 
                </p>
                <div class="fb-btns">
                    <a class="fb-btn" href="https://app.vistaarflow.in/signup">Start 14 days free <span>→</span></a>
                    <a class="fb-btn alt" href="#fb-features">Explore Facebook CRM</a>
                </div>
                <div class="fb-proof"><span>Meta lead capture</span><span>Automatic assignment</span><span>Workflow
                        automation</span></div>
            </div>

            <div class="fb-app" aria-label="VistaarFlow Facebook lead CRM preview">
                <div class="fb-appbar"><i class="fb-dot"></i><i class="fb-dot"></i><i class="fb-dot"></i><span
                        class="fb-app-title">VistaarFlow • Facebook Leads</span></div>
                <div class="fb-appbody">
                    <aside class="fb-sidebar">
                        <div class="fb-nav active">ⓕ Meta Leads</div>
                        <div class="fb-nav">▣ Forms</div>
                        <div class="fb-nav">⇄ Mapping</div>
                        <div class="fb-nav">↗ Pipeline</div>
                        <div class="fb-nav">⚡ Automation</div>
                    </aside>
                    <div class="fb-leads">
                        <h4>New Facebook Leads</h4>
                        <div class="fb-lead-row"><span class="fb-avatar">RS</span>
                            <div><strong>Rahul Sharma</strong><small>Full Stack Course • 2 min ago</small></div><span
                                class="fb-new">NEW</span>
                        </div>
                        <div class="fb-lead-row"><span class="fb-avatar">AP</span>
                            <div><strong>Ananya Patel</strong><small>Website Development • 12 min ago</small></div><span
                                class="fb-new">NEW</span>
                        </div>
                        <div class="fb-lead-row"><span class="fb-avatar">VM</span>
                            <div><strong>Vikram Mehta</strong><small>CRM Demo • 24 min ago</small></div>
                        </div>
                        <div class="fb-lead-row"><span class="fb-avatar">SK</span>
                            <div><strong>Sana Khan</strong><small>Digital Marketing • 36 min ago</small></div>
                        </div>
                    </div>
                    <aside class="fb-detail">
                        <h4>Lead Details</h4>
                        <div class="fb-field"><small>Name</small><b>Rahul Sharma</b></div>
                        <div class="fb-field"><small>Phone</small><b>+91 98XXXXXX21</b></div>
                        <div class="fb-field"><small>Email</small><b>rahul@example.com</b></div>
                        <div class="fb-field"><small>Interest</small><b>Full Stack Course</b></div>
                        <div class="fb-field"><small>Owner</small><b>Admissions Team</b></div>
                        <span class="fb-source">Source • Facebook Lead Ad</span>
                    </aside>
                </div>
                <span class="fb-floating one"><i>✓</i> New lead captured</span>
                <span class="fb-floating two"><i>⚡</i> Owner assigned automatically</span>
            </div>
        </div>
    </section>

    <section id="fb-features" class="fb-section">
        <div class="container">
            <div class="fb-heading">
                <div class="fb-eyebrow">FROM META LEAD ADS TO YOUR CRM</div>
                <h2>Capture the enquiry.<br><em>Continue the journey.</em></h2>
                <p>Bring Facebook and Instagram lead-form enquiries into VistaarFlow and give your team a structured
                    process for handling every new lead.</p>
            </div>
            <div class="fb-features">
                <article class="fb-card"><span class="fb-icon">ⓕ</span>
                    <h3>Facebook Lead Capture</h3>
                    <p>Bring leads generated through connected Facebook and Instagram Lead Ads into VistaarFlow without
                        manually exporting and importing lead files.</p>
                </article>
                <article class="fb-card"><span class="fb-icon">▣</span>
                    <h3>Form Data Capture</h3>
                    <p>Capture submitted lead-form information such as name, phone, email and other supported form
                        responses inside the CRM.</p>
                </article>
                <article class="fb-card"><span class="fb-icon">⇄</span>
                    <h3>Field Mapping</h3>
                    <p>Map Meta lead-form questions to the appropriate VistaarFlow contact fields or custom fields so
                        incoming information is stored correctly.</p>
                </article>
                <article class="fb-card"><span class="fb-icon">⚡</span>
                    <h3>Lead Assignment</h3>
                    <p>Use configured lead-assignment rules and workflows to route incoming enquiries to the appropriate
                        team member for faster follow-up.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="fb-data-section">
        <div class="container fb-data-grid">
            <div>
                <div class="fb-eyebrow">FORM SUBMISSION → CRM RECORD</div>
                <div class="fb-show">
                    <h2 style="margin-top:0">Keep submitted lead data <em>organized and actionable.</em></h2>
                </div>
                <p style="color:#667085;line-height:1.75">When a prospect submits a connected Meta lead form,
                    VistaarFlow can bring that lead into the CRM. Mapped form responses become usable customer
                    information your team can work with immediately.</p>
                <div class="fb-checks">
                    <div class="fb-check"><i>✓</i>
                        <div><strong>Contact information</strong>
                            <p>Store mapped details such as name, phone number and email address.</p>
                        </div>
                    </div>
                    <div class="fb-check"><i>✓</i>
                        <div><strong>Custom form responses</strong>
                            <p>Map relevant questions such as course, property, product or service interest into CRM
                                fields.</p>
                        </div>
                    </div>
                    <div class="fb-check"><i>✓</i>
                        <div><strong>Lead source context</strong>
                            <p>Keep the lead connected to its Facebook/Meta acquisition source for better follow-up
                                context.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fb-form-card">
                <div class="fb-form-top"><strong>New Facebook Lead</strong><span class="fb-meta-pill">META LEAD
                        FORM</span></div>
                <div class="fb-form-field"><small>Full Name</small><b>Rahul Sharma</b></div>
                <div class="fb-form-field"><small>Phone Number</small><b>+91 98XXXXXX21</b></div>
                <div class="fb-form-field"><small>Email Address</small><b>rahul@example.com</b></div>
                <div class="fb-form-field"><small>Interested Course</small><b>Full Stack Development</b></div>
                <div class="fb-form-field"><small>Preferred Time</small><b>Evening</b></div>
                <div class="fb-map"><strong>Field mapping</strong><br>full_name → Contact Name<br>phone_number →
                    Phone<br>course_interest → Interested Course<br>preferred_time → Preferred Time</div>
            </div>
        </div>
    </section>

    <section class="fb-flow-section">
        <div class="container">
            <div class="fb-heading">
                <div class="fb-eyebrow">A CONNECTED LEAD JOURNEY</div>
                <h2>From ad click to <em>sales follow-up.</em></h2>
                <p>Once a new Meta lead enters VistaarFlow, your configured CRM process can take over.</p>
            </div>
            <div class="fb-flow">
                <div class="fb-step"><span class="fb-num">01</span><strong>Meta Lead Ad</strong><small>Customer
                        discovers your offer</small></div>
                <div class="fb-step"><span class="fb-num">02</span><strong>Instant Form</strong><small>Customer submits
                        details</small></div>
                <div class="fb-step"><span class="fb-num">03</span><strong>Lead Capture</strong><small>Lead enters
                        VistaarFlow</small></div>
                <div class="fb-step"><span class="fb-num">04</span><strong>Field Mapping</strong><small>Responses map to
                        CRM fields</small></div>
                <div class="fb-step"><span class="fb-num">05</span><strong>Assignment</strong><small>Owner can be
                        assigned</small></div>
                <div class="fb-step"><span class="fb-num">06</span><strong>Pipeline</strong><small>Qualified lead
                        becomes opportunity</small></div>
                <div class="fb-step"><span class="fb-num">07</span><strong>Follow-up</strong><small>Tasks and workflows
                        continue</small></div>
            </div>
        </div>
    </section>

    <section class="fb-show">
        <div class="container fb-show-grid">
            <div>
                <div class="fb-eyebrow">AUTOMATION AFTER CAPTURE</div>
                <h2>Don't stop at collecting leads.<br><em>Put them into action.</em></h2>
                <p>Lead capture is only the beginning. VistaarFlow can use your configured CRM workflows to organize
                    incoming enquiries, assign responsibility and help your team continue the sales process.</p>
                <div class="fb-checks">
                    <div class="fb-check"><i>✓</i>
                        <div><strong>Automatic lead assignment</strong>
                            <p>Route incoming leads using your configured assignment rules.</p>
                        </div>
                    </div>
                    <div class="fb-check"><i>✓</i>
                        <div><strong>Pipeline management</strong>
                            <p>Create opportunities for qualified prospects and track them through the relevant stages.
                            </p>
                        </div>
                    </div>
                    <div class="fb-check"><i>✓</i>
                        <div><strong>Workflow follow-up</strong>
                            <p>Use configured automations for tasks, reminders, notifications and other supported
                                follow-up actions.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fb-automation">
                <div class="fb-auto-row"><span class="fb-auto-icon">ⓕ</span>New Meta lead received</div>
                <div class="fb-auto-arrow">↓</div>
                <div class="fb-auto-row"><span class="fb-auto-icon">⇄</span>Map submitted form fields</div>
                <div class="fb-auto-arrow">↓</div>
                <div class="fb-auto-row"><span class="fb-auto-icon">●</span>Create / update CRM contact</div>
                <div class="fb-auto-arrow">↓</div>
                <div class="fb-auto-row"><span class="fb-auto-icon">↗</span>Assign lead owner</div>
                <div class="fb-auto-arrow">↓</div>
                <div class="fb-auto-row"><span class="fb-auto-icon">▣</span>Create opportunity when qualified</div>
                <div class="fb-auto-arrow">↓</div>
                <div class="fb-auto-row"><span class="fb-auto-icon">⚡</span>Continue configured follow-up workflow</div>
            </div>
        </div>
    </section>

    <section class="fb-cta">
        <div class="container">
            <div class="fb-cta-box">
                <div>
                    <h2>Make every Meta lead easier to manage.</h2>
                    <p>Capture Facebook and Instagram lead-form enquiries inside one connected VistaarFlow CRM.</p>
                </div>
                <a class="fb-btn" href="https://app.vistaarflow.in/signup">Start 14 days free <span>→</span></a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>