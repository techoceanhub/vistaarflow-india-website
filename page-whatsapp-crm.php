<?php get_header(); ?>
<main id="main" class="vf-wa-page">
  <style>
    .vf-wa-page {
      --ink: #07142f;
      --muted: #647087;
      --line: #e6eaf1;
      --blue: #215af8;
      --green: #19b76b;
      --pale: #f7f9fc;
      background: #fff;
      color: var(--ink);
      overflow: hidden
    }

    .vf-wa-page * {
      box-sizing: border-box
    }

    .vf-wa-page .container {
      width: min(1180px, calc(100% - 40px));
      margin: auto
    }

    .vf-wa-page h1,
    .vf-wa-page h2,
    .vf-wa-page h3,
    .vf-wa-page p {
      margin-top: 0
    }

    .vf-wa-page h1 {
      font-size: clamp(44px, 6vw, 76px);
      line-height: 1.02;
      letter-spacing: -.045em;
      margin-bottom: 24px
    }

    .vf-wa-page h2 {
      font-size: clamp(34px, 4.2vw, 54px);
      line-height: 1.08;
      letter-spacing: -.035em;
      margin-bottom: 18px
    }

    .vf-wa-page h3 {
      font-size: 21px;
      line-height: 1.25;
      margin-bottom: 10px
    }

    .vf-wa-page p {
      color: var(--muted);
      line-height: 1.72;
      font-size: 16px
    }

    .vf-wa-page em {
      font-style: normal;
      color: var(--blue)
    }

    .vf-wa-wa-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 9px;
      font-size: 12px;
      font-weight: 800;
      letter-spacing: .12em;
      color: var(--blue);
      margin-bottom: 20px
    }

    .vf-wa-wa-eyebrow:before {
      content: "";
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: var(--green);
      box-shadow: 0 0 0 5px rgba(25, 183, 107, .11)
    }

    .vf-wa-wa-btns {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
      margin-top: 30px
    }

    .vf-wa-wa-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      text-decoration: none;
      padding: 14px 21px;
      border-radius: 10px;
      font-weight: 800;
      background: var(--blue);
      color: #fff;
      box-shadow: 0 10px 30px rgba(33, 90, 248, .18)
    }

    .vf-wa-wa-btn.vf-wa-alt {
      background: #fff;
      color: var(--ink);
      border: 1px solid var(--line);
      box-shadow: none
    }

    .vf-wa-wa-hero {
      position: relative;
      padding: 105px 0 90px;
      background: radial-gradient(circle at 82% 20%, rgba(33, 90, 248, .10), transparent 31%), radial-gradient(circle at 18% 80%, rgba(25, 183, 107, .09), transparent 28%), linear-gradient(180deg, #fbfdff 0%, #fff 100%)
    }

    .vf-wa-wa-hero-grid {
      display: grid;
      grid-template-columns: .92fr 1.08fr;
      gap: 72px;
      align-items: center
    }

    .vf-wa-wa-hero-copy>p {
      font-size: 18px;
      max-width: 610px
    }

    .vf-wa-wa-mini-proof {
      display: flex;
      gap: 22px;
      flex-wrap: wrap;
      margin-top: 27px;
      color: #536077;
      font-size: 13px;
      font-weight: 700
    }

    .vf-wa-wa-mini-proof span:before {
      content: "✓";
      color: var(--green);
      margin-right: 7px
    }

    .vf-wa-wa-app {
      background: #fff;
      border: 1px solid #e5eaf3;
      border-radius: 25px;
      box-shadow: 0 30px 80px rgba(14, 31, 68, .14);
      padding: 15px;
      transform: rotate(1deg);
      position: relative
    }

    .vf-wa-wa-appbar {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 11px 12px 16px;
      border-bottom: 1px solid #edf0f5
    }

    .vf-wa-wa-dot {
      width: 11px;
      height: 11px;
      border-radius: 50%;
      background: #e4e8ef
    }

    .vf-wa-wa-app-title {
      margin-left: 7px;
      font-size: 13px;
      font-weight: 800
    }

    .vf-wa-wa-appbody {
      display: grid;
      grid-template-columns: 145px 1fr 170px;
      min-height: 410px
    }

    .vf-wa-wa-sidebar {
      padding: 17px 9px;
      border-right: 1px solid #edf0f5
    }

    .vf-wa-wa-nav {
      padding: 9px 10px;
      border-radius: 9px;
      font-size: 11px;
      font-weight: 700;
      color: #657086;
      margin-bottom: 5px
    }

    .vf-wa-wa-nav.vf-wa-active {
      background: #eef3ff;
      color: var(--blue)
    }

    .vf-wa-wa-chat {
      padding: 18px;
      background: #f8fafc
    }

    .vf-wa-wa-contact {
      display: flex;
      align-items: center;
      gap: 9px;
      margin-bottom: 20px
    }

    .vf-wa-wa-avatar {
      width: 34px;
      height: 34px;
      border-radius: 50%;
      display: grid;
      place-items: center;
      background: #dff8eb;
      color: #138951;
      font-weight: 900
    }

    .vf-wa-wa-contact strong {
      font-size: 12px;
      display: block
    }

    .vf-wa-wa-contact small {
      font-size: 9px;
      color: #8893a4
    }

    .vf-wa-bubble {
      max-width: 79%;
      padding: 10px 12px;
      border-radius: 11px;
      margin: 9px 0;
      font-size: 10px;
      line-height: 1.45;
      box-shadow: 0 2px 8px rgba(10, 22, 45, .04)
    }

    .vf-wa-bubble.vf-wa-in {
      background: #fff;
      border: 1px solid #e8ebf1
    }

    .vf-wa-bubble.vf-wa-out {
      background: #dcf8e8;
      margin-left: auto
    }

    .vf-wa-wa-ai-box {
      margin-top: 16px;
      background: linear-gradient(135deg, #f0f3ff, #f8f2ff);
      border: 1px solid #e1e4fb;
      padding: 12px;
      border-radius: 12px
    }

    .vf-wa-wa-ai-box b {
      font-size: 10px;
      color: #6449c9
    }

    .vf-wa-wa-ai-box p {
      font-size: 9px;
      line-height: 1.45;
      margin: 5px 0;
      color: #4e5870
    }

    .vf-wa-wa-ai-actions {
      display: flex;
      gap: 6px
    }

    .vf-wa-wa-ai-actions span {
      font-size: 8px;
      background: #fff;
      border: 1px solid #e1e4ed;
      border-radius: 6px;
      padding: 5px 7px;
      font-weight: 800
    }

    .vf-wa-wa-crm {
      padding: 17px 12px;
      border-left: 1px solid #edf0f5
    }

    .vf-wa-wa-crm h4 {
      font-size: 11px;
      margin: 0 0 13px
    }

    .vf-wa-wa-field {
      border-bottom: 1px solid #edf0f5;
      padding: 8px 0
    }

    .vf-wa-wa-field small {
      display: block;
      font-size: 8px;
      color: #8b95a6
    }

    .vf-wa-wa-field b {
      font-size: 9px
    }

    .vf-wa-wa-status {
      display: inline-flex;
      margin-top: 12px;
      padding: 6px 8px;
      border-radius: 99px;
      background: #e7f9ef;
      color: #148653;
      font-size: 8px;
      font-weight: 900
    }

    .vf-wa-wa-floating {
      position: absolute;
      background: #fff;
      border: 1px solid #e6eaf1;
      border-radius: 12px;
      padding: 10px 13px;
      box-shadow: 0 14px 34px rgba(15, 31, 68, .12);
      font-size: 10px;
      font-weight: 800
    }

    .vf-wa-wa-floating.vf-wa-one {
      right: -22px;
      top: 80px
    }

    .vf-wa-wa-floating.vf-wa-two {
      left: -26px;
      bottom: 52px
    }

    .vf-wa-wa-floating i {
      font-style: normal;
      color: var(--green);
      margin-right: 5px
    }

    .vf-wa-wa-section {
      padding: 105px 0
    }

    .vf-wa-wa-heading {
      text-align: center;
      max-width: 800px;
      margin: 0 auto 52px
    }

    .vf-wa-wa-heading p {
      max-width: 680px;
      margin: 0 auto
    }

    .vf-wa-wa-features {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 18px
    }

    .vf-wa-wa-card {
      padding: 28px 24px;
      border: 1px solid var(--line);
      border-radius: 20px;
      background: #fff;
      transition: .25s;
      min-height: 260px
    }

    .vf-wa-wa-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 22px 50px rgba(12, 29, 62, .08)
    }

    .vf-wa-wa-icon {
      width: 48px;
      height: 48px;
      border-radius: 14px;
      display: grid;
      place-items: center;
      margin-bottom: 22px;
      background: #eef3ff;
      color: var(--blue);
      font-size: 21px;
      font-weight: 900
    }

    .vf-wa-wa-card:nth-child(2) .vf-wa-wa-icon {
      background: #e9fbf1;
      color: #14945a
    }

    .vf-wa-wa-card:nth-child(3) .vf-wa-wa-icon,
    .vf-wa-wa-card:nth-child(4) .vf-wa-wa-icon {
      background: #f5efff;
      color: #7851c9
    }

    .vf-wa-wa-card p {
      font-size: 14px
    }

    .vf-wa-wa-showcase {
      background: #07142f;
      color: #fff;
      padding: 105px 0;
      position: relative
    }

    .vf-wa-wa-showcase .vf-wa-wa-eyebrow {
      color: #9db5ff
    }

    .vf-wa-wa-showcase h2 {
      color: #fff
    }

    .vf-wa-wa-showcase p {
      color: #aeb9cc
    }

    .vf-wa-wa-show-grid {
      display: grid;
      grid-template-columns: .9fr 1.1fr;
      gap: 70px;
      align-items: center
    }

    .vf-wa-wa-checks {
      display: grid;
      gap: 17px;
      margin-top: 30px
    }

    .vf-wa-wa-check {
      display: grid;
      grid-template-columns: 35px 1fr;
      gap: 13px
    }

    .vf-wa-wa-check i {
      width: 32px;
      height: 32px;
      border-radius: 10px;
      background: rgba(33, 90, 248, .18);
      color: #91adff;
      display: grid;
      place-items: center;
      font-style: normal
    }

    .vf-wa-wa-check strong {
      font-size: 15px
    }

    .vf-wa-wa-check p {
      font-size: 13px;
      margin: 3px 0 0
    }

    .vf-wa-wa-ai-ui {
      background: #fff;
      color: var(--ink);
      border-radius: 24px;
      padding: 22px;
      box-shadow: 0 28px 80px rgba(0, 0, 0, .25)
    }

    .vf-wa-wa-ai-head {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-bottom: 17px;
      border-bottom: 1px solid var(--line)
    }

    .vf-wa-wa-ai-head strong {
      font-size: 14px
    }

    .vf-wa-ai-pill {
      font-size: 10px;
      background: #eef3ff;
      color: var(--blue);
      font-weight: 900;
      padding: 6px 9px;
      border-radius: 99px
    }

    .vf-wa-wa-ai-panel {
      padding: 20px 0 0
    }

    .vf-wa-wa-ai-panel .vf-wa-customer-msg {
      padding: 14px;
      background: #f6f8fb;
      border-radius: 13px;
      font-size: 12px
    }

    .vf-wa-ai-result {
      margin-top: 14px;
      border: 1px solid #e4e8f1;
      border-radius: 15px;
      padding: 15px
    }

    .vf-wa-ai-result label {
      display: block;
      font-size: 9px;
      font-weight: 900;
      color: #7851c9;
      letter-spacing: .08em;
      margin-bottom: 7px
    }

    .vf-wa-ai-result p {
      font-size: 11px;
      line-height: 1.55;
      margin: 0;
      color: #43506a
    }

    .vf-wa-ai-suggest-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10px;
      margin-top: 10px
    }

    .vf-wa-ai-suggest {
      background: #f8f9fc;
      border-radius: 11px;
      padding: 12px
    }

    .vf-wa-ai-suggest small {
      display: block;
      color: #8993a5;
      font-size: 8px
    }

    .vf-wa-ai-suggest b {
      font-size: 10px
    }

    .vf-wa-wa-flow-section {
      padding: 105px 0;
      background: #f7f9fc
    }

    .vf-wa-wa-flow {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 12px;
      align-items: stretch
    }

    .vf-wa-wa-step {
      position: relative;
      background: #fff;
      border: 1px solid var(--line);
      border-radius: 17px;
      padding: 23px 18px
    }

    .vf-wa-wa-step:not(:last-child):after {
      content: "→";
      position: absolute;
      right: -18px;
      top: 50%;
      z-index: 2;
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background: var(--blue);
      color: #fff;
      display: grid;
      place-items: center;
      font-size: 11px
    }

    .vf-wa-wa-step-num {
      font-size: 11px;
      font-weight: 900;
      color: var(--blue);
      margin-bottom: 22px
    }

    .vf-wa-wa-step h3 {
      font-size: 16px
    }

    .vf-wa-wa-step p {
      font-size: 12px;
      margin: 0
    }

    .vf-wa-wa-templates {
      padding: 105px 0
    }

    .vf-wa-wa-template-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 65px;
      align-items: center
    }

    .vf-wa-template-stack {
      position: relative;
      min-height: 470px
    }

    .vf-wa-template-card {
      position: absolute;
      width: 82%;
      padding: 21px;
      border-radius: 18px;
      background: #fff;
      border: 1px solid var(--line);
      box-shadow: 0 20px 55px rgba(14, 31, 68, .1)
    }

    .vf-wa-template-card:nth-child(1) {
      top: 0;
      left: 0;
      transform: rotate(-3deg)
    }

    .vf-wa-template-card:nth-child(2) {
      top: 105px;
      right: 0;
      transform: rotate(3deg)
    }

    .vf-wa-template-card:nth-child(3) {
      top: 245px;
      left: 7%;
      transform: rotate(-1deg)
    }

    .vf-wa-template-card small {
      font-size: 9px;
      font-weight: 900;
      color: var(--green)
    }

    .vf-wa-template-card h4 {
      font-size: 13px;
      margin: 8px 0
    }

    .vf-wa-template-card p {
      font-size: 11px;
      margin: 0
    }

    .vf-wa-wa-cta {
      padding: 45px 0 105px
    }

    .vf-wa-wa-cta-box {
      padding: 58px;
      border-radius: 28px;
      background: linear-gradient(135deg, #215af8, #173eb1);
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 40px;
      box-shadow: 0 30px 70px rgba(33, 90, 248, .22)
    }

    .vf-wa-wa-cta-box h2 {
      color: #fff;
      margin-bottom: 8px;
      font-size: clamp(30px, 4vw, 48px)
    }

    .vf-wa-wa-cta-box p {
      color: #dce5ff;
      margin: 0
    }

    .vf-wa-wa-cta-box .vf-wa-wa-btn {
      background: #fff;
      color: #15399e;
      white-space: nowrap
    }

    @media(max-width:980px) {

      .vf-wa-wa-hero-grid,
      .vf-wa-wa-show-grid,
      .vf-wa-wa-template-grid {
        grid-template-columns: 1fr
      }

      .vf-wa-wa-features {
        grid-template-columns: 1fr 1fr
      }

      .vf-wa-wa-flow {
        grid-template-columns: 1fr 1fr
      }

      .vf-wa-wa-step:after {
        display: none
      }

      .vf-wa-wa-app {
        max-width: 720px;
        margin: auto
      }

      .vf-wa-wa-hero {
        padding-top: 75px
      }

      .vf-wa-wa-cta-box {
        align-items: flex-start;
        flex-direction: column
      }
    }

    @media(max-width:640px) {
      .vf-wa-page .container {
        width: min(100% - 26px, 1180px)
      }

      .vf-wa-wa-features,
      .vf-wa-wa-flow {
        grid-template-columns: 1fr
      }

      .vf-wa-wa-appbody {
        grid-template-columns: 85px 1fr
      }

      .vf-wa-wa-crm {
        display: none
      }

      .vf-wa-wa-sidebar {
        padding: 12px 5px
      }

      .vf-wa-wa-nav {
        font-size: 8px;
        padding: 7px 5px
      }

      .vf-wa-wa-floating {
        display: none
      }

      .vf-wa-wa-section,
      .vf-wa-wa-showcase,
      .vf-wa-wa-flow-section,
      .vf-wa-wa-templates {
        padding: 76px 0
      }

      .vf-wa-wa-template-grid {
        gap: 30px
      }

      .vf-wa-template-stack {
        min-height: 440px
      }

      .vf-wa-wa-cta-box {
        padding: 36px 27px
      }

      .vf-wa-wa-hero h1 {
        font-size: 43px
      }
    }
  </style>

  <section class="vf-wa-wa-hero">
    <div class="container vf-wa-wa-hero-grid">
      <div class="vf-wa-wa-hero-copy">
        <div class="vf-wa-wa-eyebrow">WHATSAPP CRM FOR SMALL BUSINESSES</div>
        <h1>Turn WhatsApp chats into <em>real opportunities.</em></h1>
        <p>
          Manage customer conversations, approved WhatsApp templates, interactive Flows and AI-assisted replies from one
          connected VistaarFlow workspace — with every lead, task and opportunity in context.
          <strong class="vf-wa-meta-highlight">
            <em>Pay Meta directly at Meta's pricing — not vendor-marked-up pricing.</em>
          </strong>
        </p>
        <div class="vf-wa-wa-btns">
          <a class="vf-wa-wa-btn" href="https://app.vistaarflow.in/signup">Start 14 days free <span>→</span></a>
          <a class="vf-wa-wa-btn vf-wa-alt" href="#vf-wa-wa-features">Explore WhatsApp CRM</a>
        </div>
        <div class="vf-wa-wa-mini-proof"><span>Shared business inbox</span><span>AI-assisted replies</span><span>CRM
            context</span></div>
      </div>
      <div class="vf-wa-wa-app" aria-label="VistaarFlow WhatsApp CRM interface preview">
        <div class="vf-wa-wa-appbar"><i class="vf-wa-wa-dot"></i><i class="vf-wa-wa-dot"></i><i
            class="vf-wa-wa-dot"></i><span class="vf-wa-wa-app-title">VistaarFlow • Communication</span></div>
        <div class="vf-wa-wa-appbody">
          <aside class="vf-wa-wa-sidebar">
            <div class="vf-wa-wa-nav vf-wa-active">💬 Chat</div>
            <div class="vf-wa-wa-nav">▣ Templates</div>
            <div class="vf-wa-wa-nav">⌘ Flows</div>
            <div class="vf-wa-wa-nav">✦ AI Assistant</div>
            <div class="vf-wa-wa-nav">↗ Opportunities</div>
          </aside>
          <div class="vf-wa-wa-chat">
            <div class="vf-wa-wa-contact"><span class="vf-wa-wa-avatar">RS</span>
              <div><strong>Rahul Sharma</strong><small>WhatsApp • Online</small></div>
            </div>
            <div class="vf-wa-bubble vf-wa-in">Hi, I’m interested. Can you share the details?</div>
            <div class="vf-wa-bubble vf-wa-out">Absolutely! I can share the details and help you with the next step.
            </div>
            <div class="vf-wa-wa-ai-box"><b>✦ VistaarFlow AI</b>
              <p>Rahul is showing buying intent. Share relevant details and create a follow-up task.</p>
              <div class="vf-wa-wa-ai-actions"><span>Generate reply</span><span>Create task</span></div>
            </div>
          </div>
          <aside class="vf-wa-wa-crm">
            <h4>CRM Panel</h4>
            <div class="vf-wa-wa-field"><small>Contact</small><b>Rahul Sharma</b></div>
            <div class="vf-wa-wa-field"><small>Lead stage</small><b>Qualified</b></div>
            <div class="vf-wa-wa-field"><small>Owner</small><b>Sales Team</b></div>
            <div class="vf-wa-wa-field"><small>Next task</small><b>Follow up today</b></div><span
              class="vf-wa-wa-status">● Active opportunity</span>
          </aside>
        </div>
        <span class="vf-wa-wa-floating vf-wa-one"><i>✦</i> AI reply ready</span><span
          class="vf-wa-wa-floating vf-wa-two"><i>✓</i> Follow-up created</span>
      </div>
    </div>
  </section>

 <section id="vf-wa-wa-features" class="vf-wa-wa-section"> 
  <div class="container"> 

    <div class="vf-wa-wa-heading"> 
      <div class="vf-wa-wa-eyebrow">ONE CONNECTED WHATSAPP WORKSPACE</div> 

      <h2>
        More than messaging.<br>
        <em>A complete WhatsApp CRM.</em>
      </h2> 

      <p>
        Give your team the tools to communicate, collect information,
        run WhatsApp campaigns and move customers forward without
        losing CRM context.
      </p> 
    </div> 

    <div class="vf-wa-wa-features"> 
      <!-- WhatsApp Messaging -->
      <article class="vf-wa-wa-card">
        <span class="vf-wa-wa-icon">💬</span> 

        <h3>WhatsApp Messaging</h3> 

        <p>
          Manage customer conversations directly from VistaarFlow.
          Keep WhatsApp chats connected with customer details, leads,
          opportunities and follow-up activities in one workspace.
        </p> 
      </article> 


      <!-- WhatsApp Campaigns -->
      <article class="vf-wa-wa-card">
        <span class="vf-wa-wa-icon">📣</span> 

        <h3>WhatsApp Campaigns & Bulk Messaging</h3> 

        <p>
          Send approved WhatsApp templates to selected contacts or
          customer segments in bulk. Manage campaigns, reach multiple
          customers and track communication from your CRM.
        </p> 
      </article> 

      <!-- WhatsApp Templates -->
      <article class="vf-wa-wa-card">
        <span class="vf-wa-wa-icon">▣</span> 

        <h3>WhatsApp Templates</h3> 

        <p>
          Use approved templates for enquiries, follow-ups, reminders,
          offers and customer notifications. Keep communication
          consistent across your team.
        </p> 
      </article> 


      <!-- WhatsApp Flow Builder -->
      <article class="vf-wa-wa-card">
        <span class="vf-wa-wa-icon">⌘</span> 

        <h3>WhatsApp Flow Builder</h3> 

        <p>
          Create interactive WhatsApp Flows for lead qualification,
          registrations, bookings, requirements and feedback —
          then publish them to Meta.
        </p> 
      </article> 

    </div> 
  </div> 
</section>

  <section class="vf-wa-wa-showcase">
    <div class="container vf-wa-wa-show-grid">
      <div>
        <div class="vf-wa-wa-eyebrow">VISTAARFLOW AI + WHATSAPP</div>
        <h2>Understand the conversation.<br><em>Know what to do next.</em></h2>
        <p>AI assistance works alongside your team to make long conversations easier to understand and everyday
          responses quicker to prepare.</p>
        <div class="vf-wa-wa-checks">
          <div class="vf-wa-wa-check"><i>✦</i>
            <div><strong>Conversation Summary</strong>
              <p>Turn a long chat into a concise overview of the customer's requirement and discussion.</p>
            </div>
          </div>
          <div class="vf-wa-wa-check"><i>↗</i>
            <div><strong>Next Action Suggestion</strong>
              <p>Surface a practical next step based on the current conversation and CRM context.</p>
            </div>
          </div>
          <div class="vf-wa-wa-check"><i>✓</i>
            <div><strong>AI Reply Draft</strong>
              <p>Prepare a response that your team can review before sending to the customer.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="vf-wa-wa-ai-ui">
        <div class="vf-wa-wa-ai-head"><strong>AI Chat Assistant</strong><span class="vf-wa-ai-pill">✦ AI powered</span>
        </div>
        <div class="vf-wa-wa-ai-panel">
          <div class="vf-wa-customer-msg"><b>Customer:</b> I’m interested vf-wa-in the 2BHK option. Can we schedule a
            visit for Saturday afternoon?</div>
          <div class="vf-wa-ai-result"><label>AI CONVERSATION SUMMARY</label>
            <p>Customer is interested vf-wa-in the 2BHK option and has requested a site visit on Saturday afternoon.</p>
          </div>
          <div class="vf-wa-ai-result"><label>SUGGESTED REPLY</label>
            <p>Sure! I can help arrange your visit for Saturday afternoon. Please confirm your preferred time and I’ll
              take it forward.</p>
          </div>
          <div class="vf-wa-ai-suggest-row">
            <div class="vf-wa-ai-suggest"><small>NEXT ACTION</small><b>Create site-visit task →</b></div>
            <div class="vf-wa-ai-suggest"><small>LEAD SIGNAL</small><b>High engagement</b></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="vf-wa-wa-flow-section">
    <div class="container">
      <div class="vf-wa-wa-heading">
        <div class="vf-wa-wa-eyebrow">FROM MESSAGE TO FOLLOW-UP</div>
        <h2>Keep every WhatsApp enquiry <em>moving forward.</em></h2>
        <p>Connect communication with the rest of your CRM process instead of leaving valuable conversations inside a
          separate inbox.</p>
      </div>
      <div class="vf-wa-wa-flow">
        <article class="vf-wa-wa-step">
          <div class="vf-wa-wa-step-num">01</div>
          <h3>Message received</h3>
          <p>A customer starts or continues a WhatsApp conversation.</p>
        </article>
        <article class="vf-wa-wa-step">
          <div class="vf-wa-wa-step-num">02</div>
          <h3>AI assists</h3>
          <p>Summarize the chat, draft a reply and surface the next action.</p>
        </article>
        <article class="vf-wa-wa-step">
          <div class="vf-wa-wa-step-num">03</div>
          <h3>Collect details</h3>
          <p>Use messages, templates or a WhatsApp Flow to capture what you need.</p>
        </article>
        <article class="vf-wa-wa-step">
          <div class="vf-wa-wa-step-num">04</div>
          <h3>Update CRM</h3>
          <p>Keep the contact, opportunity, stage and activity connected.</p>
        </article>
        <article class="vf-wa-wa-step">
          <div class="vf-wa-wa-step-num">05</div>
          <h3>Follow up</h3>
          <p>Create the task or next action and keep the opportunity progressing.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="vf-wa-wa-templates">
    <div class="container vf-wa-wa-template-grid">
      <div class="vf-wa-template-stack">
        <article class="vf-wa-template-card"><small>APPROVED TEMPLATE</small>
          <h4>New Enquiry Acknowledgement</h4>
          <p>Hi {{1}}, thank you for your enquiry. Our team has received your request and will assist you shortly.</p>
        </article>
        <article class="vf-wa-template-card"><small>WHATSAPP FLOW</small>
          <h4>Customer Requirement Form</h4>
          <p>Collect structured details such as requirement, preferred date, budget or service interest directly inside
            WhatsApp.</p>
        </article>
        <article class="vf-wa-template-card"><small>AI SUGGESTION</small>
          <h4>Follow up while interest is high</h4>
          <p>The customer requested more information. Create a follow-up task and send the relevant details.</p>
        </article>
      </div>
      <div>
        <div class="vf-wa-wa-eyebrow">TEMPLATES + FLOWS</div>
        <h2>Build repeatable conversations without making them feel disconnected.</h2>
        <p>Templates help your team handle recurring communication consistently. WhatsApp Flows add structured
          interactions when you need to collect customer information or guide them through a process.</p>
        <div class="vf-wa-wa-checks">
          <div class="vf-wa-wa-check"><i>✓</i>
            <div><strong>Manage approved templates</strong>
              <p>Keep frequently used business messages ready for your team.</p>
            </div>
          </div>
          <div class="vf-wa-wa-check"><i>✓</i>
            <div><strong>Build interactive Flows</strong>
              <p>Create structured customer journeys and publish supported Flows to Meta.</p>
            </div>
          </div>
          <div class="vf-wa-wa-check"><i>✓</i>
            <div><strong>Keep the CRM connected</strong>
              <p>Continue with tasks, opportunities and pipeline actions after the conversation.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="vf-wa-wa-cta">
    <div class="container">
      <div class="vf-wa-wa-cta-box">
        <div>
          <h2>Bring WhatsApp and CRM together.</h2>
          <p>Start conversations, use AI assistance and keep every opportunity connected vf-wa-in VistaarFlow.</p>
        </div><a class="vf-wa-wa-btn" href="https://app.vistaarflow.in/signup">Start 14 days free →</a>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>