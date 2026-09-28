<?php get_header(); ?>

<main id="main" class="vf-tel-page">

<style>
.vf-tel-page{--blue:#215af8;--navy:#0b1220;--muted:#667085;--line:#e5eaf1;--soft:#f7f9fc;--green:#17a768;background:#fff;color:var(--navy);overflow:hidden}
.vf-tel-page *{box-sizing:border-box}
.vf-tel-page .container{width:min(1180px,calc(100% - 40px));margin:auto}
.tel-eyebrow{font-size:12px;font-weight:850;letter-spacing:1.5px;color:var(--blue);text-transform:uppercase;margin-bottom:14px}
.tel-hero{padding:92px 0 100px;background:radial-gradient(circle at 82% 22%,#e8efff 0,transparent 34%),linear-gradient(180deg,#fff,#f8faff)}
.tel-hero-grid{display:grid;grid-template-columns:.92fr 1.08fr;gap:68px;align-items:center}
.tel-hero h1{font-size:clamp(43px,5vw,68px);line-height:1.02;letter-spacing:-.045em;margin:0 0 22px;font-weight:850}
.tel-hero h1 em,.tel-heading h2 em,.tel-copy h2 em{font-style:normal;color:var(--blue)}
.tel-hero-copy>p{font-size:18px;line-height:1.7;color:var(--muted);max-width:650px;margin:0 0 28px}
.tel-btns{display:flex;gap:12px;flex-wrap:wrap}
.tel-btn{display:inline-flex;align-items:center;gap:9px;padding:13px 20px;border-radius:10px;background:var(--blue);color:#fff!important;text-decoration:none!important;font-weight:750;box-shadow:0 10px 25px rgba(33,90,248,.18)}
.tel-btn.alt{background:#fff;color:var(--navy)!important;border:1px solid var(--line);box-shadow:none}
.tel-proof{display:flex;gap:22px;flex-wrap:wrap;margin-top:25px;color:#475467;font-size:13px;font-weight:700}
.tel-proof span:before{content:"✓";color:var(--green);margin-right:6px}

/* Telephony UI */
.tel-app{background:#fff;border:1px solid #dfe6ef;border-radius:22px;box-shadow:0 28px 80px rgba(30,55,90,.14);overflow:hidden;position:relative}
.tel-appbar{height:45px;border-bottom:1px solid #e9edf3;display:flex;align-items:center;padding:0 15px;gap:6px;background:#fbfcfe}
.tel-dot{width:8px;height:8px;border-radius:50%;background:#d9dee7}.tel-app-title{font-size:11px;font-weight:750;color:#7a8494;margin-left:8px}
.tel-appbody{display:grid;grid-template-columns:105px 1fr 175px;min-height:425px}
.tel-sidebar{padding:18px 7px;border-right:1px solid #edf0f5;background:#f8faff}
.tel-nav{padding:10px 7px;border-radius:8px;font-size:9px;font-weight:750;color:#667085;margin-bottom:6px}.tel-nav.active{background:#e9f1ff;color:#215af8}
.tel-center{padding:19px}.tel-center h4,.tel-panel h4{font-size:12px;margin:0 0 14px}
.call-card{border:1px solid #e7ebf2;border-radius:12px;padding:13px;margin-bottom:10px;display:flex;gap:10px;align-items:center}
.call-icon{width:32px;height:32px;border-radius:50%;display:grid;place-items:center;background:#e9f8ef;color:#12824e;font-size:11px;font-weight:900}.call-card strong{font-size:10px;display:block}.call-card small{font-size:8px;color:#8a93a3;display:block;margin-top:3px}.call-time{margin-left:auto;font-size:8px;font-weight:800;color:#667085}
.tel-panel{padding:18px 14px;border-left:1px solid #edf0f5;background:#fcfdff}.tel-field{padding:8px 0;border-bottom:1px solid #edf0f5}.tel-field small{display:block;color:#98a2b3;font-size:7px}.tel-field b{display:block;font-size:9px;margin-top:3px}
.tel-status{display:inline-block;margin-top:13px;padding:5px 7px;border-radius:6px;background:#e9f8ef;color:#12824e;font-size:8px;font-weight:800}
.tel-floating{position:absolute;background:#fff;border:1px solid #e2e7ee;border-radius:10px;padding:9px 12px;font-size:9px;font-weight:800;box-shadow:0 12px 30px rgba(18,40,75,.13)}.tel-floating.one{right:16px;top:62px}.tel-floating.two{left:120px;bottom:17px}.tel-floating i{font-style:normal;color:var(--green)}

/* General */
.tel-section,.tel-providers,.tel-flow-section,.tel-ai-section{padding:95px 0}
.tel-providers,.tel-ai-section{background:#f7f9fc}
.tel-heading{text-align:center;max-width:770px;margin:0 auto 46px}
.tel-heading h2,.tel-copy h2{font-size:clamp(32px,4vw,50px);line-height:1.1;letter-spacing:-.035em;margin:0 0 14px}
.tel-heading p,.tel-copy p{color:var(--muted);line-height:1.7;margin:0}
.tel-features{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
.tel-card{padding:26px;border:1px solid var(--line);border-radius:17px;background:#fff;box-shadow:0 7px 26px rgba(16,32,56,.035)}
.tel-icon{width:42px;height:42px;border-radius:11px;display:grid;place-items:center;background:#eaf1ff;color:var(--blue);font-weight:900;margin-bottom:17px}
.tel-card h3{font-size:17px;margin:0 0 9px}.tel-card p{font-size:14px;line-height:1.65;color:var(--muted);margin:0}

/* Providers */
.provider-grid{display:grid;grid-template-columns:1fr 1fr;gap:22px;max-width:900px;margin:auto}
.provider-card{background:#fff;border:1px solid var(--line);border-radius:20px;padding:32px;box-shadow:0 14px 38px rgba(16,35,68,.06)}
.provider-logo{width:58px;height:58px;border-radius:15px;background:#edf3ff;color:var(--blue);display:grid;place-items:center;font-size:22px;font-weight:900;margin-bottom:19px}
.provider-card h3{font-size:24px;margin:0 0 9px}.provider-card p{color:var(--muted);font-size:14px;line-height:1.7;margin:0}
.provider-tag{display:inline-block;margin-top:17px;padding:7px 10px;border-radius:999px;background:#f0f5ff;color:#215af8;font-size:10px;font-weight:850}

/* Flow */
.tel-flow{display:grid;grid-template-columns:repeat(6,1fr);gap:11px}
.tel-step{position:relative;text-align:center;padding:21px 10px;border:1px solid var(--line);border-radius:14px;background:#fff}
.tel-step:not(:last-child):after{content:"→";position:absolute;right:-14px;top:50%;transform:translateY(-50%);color:#9aa4b2;font-weight:900;z-index:3}
.tel-num{width:31px;height:31px;border-radius:50%;display:grid;place-items:center;margin:0 auto 10px;background:#eaf1ff;color:var(--blue);font-size:10px;font-weight:900}.tel-step strong{display:block;font-size:11px}.tel-step small{display:block;margin-top:5px;color:#8a93a3;font-size:9px;line-height:1.45}

/* AI / CRM */
.tel-ai-grid{display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center}
.summary-box{background:#fff;border:1px solid var(--line);border-radius:20px;padding:25px;box-shadow:0 22px 55px rgba(18,40,75,.08)}
.summary-top{display:flex;align-items:center;justify-content:space-between;margin-bottom:18px}.summary-top strong{font-size:14px}.ai-pill{padding:6px 9px;border-radius:999px;background:#eaf1ff;color:#215af8;font-size:9px;font-weight:850}
.summary-line{padding:11px 0;border-bottom:1px solid #edf0f4}.summary-line:last-child{border:0}.summary-line small{font-size:9px;color:#98a2b3;display:block}.summary-line b{font-size:12px;display:block;margin-top:4px}.summary-line p{font-size:11px;color:#667085;line-height:1.55;margin:5px 0 0}
.tel-checks{margin-top:24px}.tel-check{display:flex;gap:12px;margin:17px 0}.tel-check i{font-style:normal;width:25px;height:25px;border-radius:50%;display:grid;place-items:center;background:#e9f8ef;color:var(--green);font-size:12px;font-weight:900;flex:0 0 25px}.tel-check strong{font-size:14px}.tel-check p{font-size:13px;margin:4px 0 0;color:var(--muted)}

/* CTA */
.tel-cta{padding:42px 0 105px}.tel-cta-box{padding:56px;border-radius:27px;background:linear-gradient(135deg,#215af8,#173eb1);color:#fff;display:flex;align-items:center;justify-content:space-between;gap:35px;box-shadow:0 30px 70px rgba(33,90,248,.22)}
.tel-cta-box h2{font-size:clamp(30px,4vw,46px);margin:0 0 8px;color:#fff}.tel-cta-box p{margin:0;color:#dce5ff}.tel-cta-box .tel-btn{background:#fff;color:#15399e!important;white-space:nowrap}

@media(max-width:980px){.tel-hero-grid,.tel-ai-grid{grid-template-columns:1fr}.tel-features{grid-template-columns:1fr 1fr}.tel-flow{grid-template-columns:repeat(2,1fr)}.tel-step:after{display:none}.tel-app{max-width:720px;margin:auto}.tel-cta-box{flex-direction:column;align-items:flex-start}}
@media(max-width:640px){.vf-tel-page .container{width:min(100% - 26px,1180px)}.tel-hero{padding:70px 0}.tel-hero h1{font-size:42px}.tel-features,.provider-grid,.tel-flow{grid-template-columns:1fr}.tel-appbody{grid-template-columns:85px 1fr}.tel-panel{display:none}.tel-floating{display:none}.tel-section,.tel-providers,.tel-flow-section,.tel-ai-section{padding:72px 0}.tel-cta-box{padding:35px 25px}}
</style>

<section class="tel-hero">
 <div class="container tel-hero-grid">
  <div class="tel-hero-copy">
   <div class="tel-eyebrow">VISTAARFLOW CRM + TELEPHONY</div>
   <h1>Connect customer calls with <em>your CRM workflow.</em></h1>
   <p>Connect supported third-party telephony services such as Exotel and Plivo with VistaarFlow to keep call activity closer to your leads, contacts and opportunities. Give your team more customer context before the next follow-up.</p>
   <div class="tel-btns">
    <a class="tel-btn" href="https://app.vistaarflow.in/signup">Start 14 days free <span>→</span></a>
    <a class="tel-btn alt" href="#telephony-features">Explore Telephony CRM</a>
   </div>
   <div class="tel-proof"><span>Exotel integration</span><span>Plivo integration</span><span>CRM call context</span></div>
  </div>

  <div class="tel-app" aria-label="VistaarFlow telephony CRM preview">
   <div class="tel-appbar"><i class="tel-dot"></i><i class="tel-dot"></i><i class="tel-dot"></i><span class="tel-app-title">VistaarFlow • Telephony</span></div>
   <div class="tel-appbody">
    <aside class="tel-sidebar"><div class="tel-nav active">☎ Calls</div><div class="tel-nav">◉ Contacts</div><div class="tel-nav">↗ Opportunities</div><div class="tel-nav">✓ Tasks</div><div class="tel-nav">⚙ Configure</div></aside>
    <div class="tel-center">
     <h4>Recent Call Activity</h4>
     <div class="call-card"><span class="call-icon">↗</span><div><strong>Rahul Sharma</strong><small>Outgoing call • Connected</small></div><span class="call-time">04:18</span></div>
     <div class="call-card"><span class="call-icon">↙</span><div><strong>Ananya Patel</strong><small>Incoming call • Connected</small></div><span class="call-time">02:42</span></div>
     <div class="call-card"><span class="call-icon">↗</span><div><strong>Vikram Mehta</strong><small>Outgoing call • Follow-up</small></div><span class="call-time">01:55</span></div>
     <div class="call-card"><span class="call-icon">↙</span><div><strong>Sana Khan</strong><small>Incoming call</small></div><span class="call-time">03:10</span></div>
    </div>
    <aside class="tel-panel">
     <h4>CRM Context</h4>
     <div class="tel-field"><small>Contact</small><b>Rahul Sharma</b></div>
     <div class="tel-field"><small>Lead Stage</small><b>Qualified</b></div>
     <div class="tel-field"><small>Owner</small><b>Sales Team</b></div>
     <div class="tel-field"><small>Next Task</small><b>Follow up tomorrow</b></div>
     <div class="tel-field"><small>Provider</small><b>Exotel</b></div>
     <span class="tel-status">● Call connected</span>
    </aside>
   </div>
   <span class="tel-floating one"><i>✓</i> Call activity captured</span>
   <span class="tel-floating two"><i>↗</i> CRM context available</span>
  </div>
 </div>
</section>

<section id="telephony-features" class="tel-section">
 <div class="container">
  <div class="tel-heading">
   <div class="tel-eyebrow">CALLING + CUSTOMER CONTEXT</div>
   <h2>More than a phone call.<br><em>Keep it connected to your CRM.</em></h2>
   <p>Bring supported telephony workflows closer to your lead records so your team can work with call activity and customer context from one CRM.</p>
  </div>
  <div class="tel-features">
   <article class="tel-card"><span class="tel-icon">☎</span><h3>Telephony Integration</h3><p>Connect supported third-party calling providers with VistaarFlow and bring telephony activity into your CRM workflow.</p></article>
   <article class="tel-card"><span class="tel-icon">◉</span><h3>Contact Context</h3><p>Keep calls associated with CRM leads and contacts so team members can understand who they are speaking with and what happens next.</p></article>
   <article class="tel-card"><span class="tel-icon">↗</span><h3>Call Tracking</h3><p>Track supported third-party call activity alongside the customer record instead of managing sales calls completely outside your CRM.</p></article>
   <article class="tel-card"><span class="tel-icon">✓</span><h3>Follow-up Workflow</h3><p>Use CRM tasks, opportunities and workflows to continue the customer journey after a call is completed.</p></article>
  </div>
 </div>
</section>

<section class="tel-providers">
 <div class="container">
  <div class="tel-heading">
   <div class="tel-eyebrow">CHOOSE YOUR TELEPHONY PROVIDER</div>
   <h2>Connect with <em>Exotel or Plivo.</em></h2>
   <p>VistaarFlow is designed to work with supported third-party telephony providers, giving businesses flexibility in how they connect calling with their CRM.</p>
  </div>
  <div class="provider-grid">
   <article class="provider-card"><span class="provider-logo">E</span><h3>Exotel</h3><p>Configure Exotel as a supported telephony provider and connect applicable business calling activity with your VistaarFlow CRM records and workflows.</p><span class="provider-tag">TELEPHONY INTEGRATION</span></article>
   <article class="provider-card"><span class="provider-logo">P</span><h3>Plivo</h3><p>Connect supported Plivo calling workflows with VistaarFlow so customer call activity can remain closer to your contacts, leads and sales process.</p><span class="provider-tag">TELEPHONY INTEGRATION</span></article>
  </div>
 </div>
</section>

<section class="tel-flow-section">
 <div class="container">
  <div class="tel-heading">
   <div class="tel-eyebrow">CONNECTED CALL WORKFLOW</div>
   <h2>From customer call to <em>the next CRM action.</em></h2>
   <p>Keep calling activity connected to the broader lead and opportunity journey.</p>
  </div>
  <div class="tel-flow">
   <div class="tel-step"><span class="tel-num">01</span><strong>Lead / Contact</strong><small>Customer exists in CRM</small></div>
   <div class="tel-step"><span class="tel-num">02</span><strong>Call</strong><small>Supported provider handles calling</small></div>
   <div class="tel-step"><span class="tel-num">03</span><strong>Call Activity</strong><small>Relevant activity is tracked</small></div>
   <div class="tel-step"><span class="tel-num">04</span><strong>CRM Context</strong><small>Lead details stay accessible</small></div>
   <div class="tel-step"><span class="tel-num">05</span><strong>Follow-up</strong><small>Create the next CRM action</small></div>
   <div class="tel-step"><span class="tel-num">06</span><strong>Opportunity</strong><small>Continue through the pipeline</small></div>
  </div>
 </div>
</section>

<section class="tel-ai-section">
 <div class="container tel-ai-grid">
  <div class="tel-copy">
   <div class="tel-eyebrow">AI-POWERED CRM CONTEXT</div>
   <h2>Turn supported call information into <em>useful next steps.</em></h2>
   <p>VistaarFlow's AI capabilities can support your wider CRM workflow with features such as call summaries and smart recommendations where applicable, helping teams spend less time reconstructing customer context.</p>
   <div class="tel-checks">
    <div class="tel-check"><i>✓</i><div><strong>AI call summaries</strong><p>Use supported call information to create a concise summary for easier CRM follow-up.</p></div></div>
    <div class="tel-check"><i>✓</i><div><strong>Smart recommendations</strong><p>Use AI assistance to help surface useful next actions based on available CRM context.</p></div></div>
    <div class="tel-check"><i>✓</i><div><strong>Customer history</strong><p>Keep call-related activity closer to the contact, tasks and opportunity journey.</p></div></div>
   </div>
  </div>

  <div class="summary-box">
   <div class="summary-top"><strong>Call Summary</strong><span class="ai-pill">✦ AI ASSISTED</span></div>
   <div class="summary-line"><small>CONTACT</small><b>Rahul Sharma</b></div>
   <div class="summary-line"><small>CALL</small><b>Outgoing • 4m 18s</b></div>
   <div class="summary-line"><small>SUMMARY</small><p>Customer discussed requirements and requested additional details before making a decision.</p></div>
   <div class="summary-line"><small>SUGGESTED NEXT ACTION</small><b>Create follow-up task and share requested information.</b></div>
   <div class="summary-line"><small>CRM STAGE</small><b>Qualified Lead</b></div>
  </div>
 </div>
</section>

<section class="tel-cta">
 <div class="container">
  <div class="tel-cta-box">
   <div><h2>Connect your calls with your customer journey.</h2><p>Bring supported Exotel and Plivo telephony workflows closer to leads, contacts, tasks and opportunities in VistaarFlow.</p></div>
   <a class="tel-btn" href="https://app.vistaarflow.in/signup">Start 14 days free <span>→</span></a>
  </div>
 </div>
</section>

</main>

<?php get_footer(); ?>
