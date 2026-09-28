<?php get_header(); ?>

<main id="main" class="vf-email-page">

<style>
.vf-email-page{--blue:#215af8;--navy:#0b1220;--muted:#667085;--line:#e5eaf1;--soft:#f7f9fc;--green:#17a768;background:#fff;color:var(--navy);overflow:hidden}
.vf-email-page *{box-sizing:border-box}
.vf-email-page .container{width:min(1180px,calc(100% - 40px));margin:auto}
.em-eyebrow{font-size:12px;font-weight:850;letter-spacing:1.5px;color:var(--blue);text-transform:uppercase;margin-bottom:14px}
.em-hero{padding:92px 0 100px;background:radial-gradient(circle at 82% 22%,#e8efff 0,transparent 34%),linear-gradient(180deg,#fff,#f8faff)}
.em-hero-grid{display:grid;grid-template-columns:.92fr 1.08fr;gap:68px;align-items:center}
.em-hero h1{font-size:clamp(43px,5vw,68px);line-height:1.02;letter-spacing:-.045em;margin:0 0 22px;font-weight:850}
.em-hero h1 em,.em-heading h2 em,.em-copy h2 em{font-style:normal;color:var(--blue)}
.em-hero-copy>p{font-size:18px;line-height:1.7;color:var(--muted);max-width:650px;margin:0 0 28px}
.em-btns{display:flex;gap:12px;flex-wrap:wrap}
.em-btn{display:inline-flex;align-items:center;gap:9px;padding:13px 20px;border-radius:10px;background:var(--blue);color:#fff!important;text-decoration:none!important;font-weight:750;box-shadow:0 10px 25px rgba(33,90,248,.18)}
.em-btn.alt{background:#fff;color:var(--navy)!important;border:1px solid var(--line);box-shadow:none}
.em-proof{display:flex;gap:22px;flex-wrap:wrap;margin-top:25px;color:#475467;font-size:13px;font-weight:700}
.em-proof span:before{content:"✓";color:var(--green);margin-right:6px}

/* Email app */
.em-app{background:#fff;border:1px solid #dfe6ef;border-radius:22px;box-shadow:0 28px 80px rgba(30,55,90,.14);overflow:hidden;position:relative}
.em-appbar{height:45px;border-bottom:1px solid #e9edf3;display:flex;align-items:center;padding:0 15px;gap:6px;background:#fbfcfe}
.em-dot{width:8px;height:8px;border-radius:50%;background:#d9dee7}.em-app-title{font-size:11px;font-weight:750;color:#7a8494;margin-left:8px}
.em-appbody{display:grid;grid-template-columns:105px 1fr 180px;min-height:430px}
.em-sidebar{padding:18px 7px;border-right:1px solid #edf0f5;background:#f8faff}
.em-nav{padding:10px 7px;border-radius:8px;font-size:9px;font-weight:750;color:#667085;margin-bottom:6px}.em-nav.active{background:#e9f1ff;color:#215af8}
.em-compose{padding:20px}.em-compose h4,.em-panel h4{font-size:12px;margin:0 0 14px}
.em-field{border:1px solid #e5e9ef;border-radius:8px;padding:9px 10px;margin-bottom:8px;font-size:9px;color:#667085}.em-field b{color:#111827}
.em-message{border:1px solid #e5e9ef;border-radius:10px;padding:13px;min-height:125px;font-size:9px;line-height:1.65;color:#5e6878}.em-message strong{color:#111827}
.em-tools{display:flex;gap:6px;flex-wrap:wrap;margin-top:10px}.em-tools span{padding:6px 8px;border-radius:6px;background:#f5f7fa;border:1px solid #e5e9ef;font-size:7px;font-weight:800;color:#596273}.em-tools span:first-child{background:#215af8;color:#fff;border-color:#215af8}
.em-panel{padding:18px 14px;border-left:1px solid #edf0f5;background:#fcfdff}.em-template{padding:9px;border:1px solid #e6eaf0;border-radius:8px;margin-bottom:8px}.em-template b{font-size:8px;display:block}.em-template small{font-size:7px;color:#98a2b3}.em-status{display:inline-block;margin-top:9px;padding:5px 7px;border-radius:6px;background:#e9f8ef;color:#12824e;font-size:8px;font-weight:800}
.em-floating{position:absolute;background:#fff;border:1px solid #e2e7ee;border-radius:10px;padding:9px 12px;font-size:9px;font-weight:800;box-shadow:0 12px 30px rgba(18,40,75,.13)}.em-floating.one{right:14px;top:62px}.em-floating.two{left:120px;bottom:16px}.em-floating i{font-style:normal;color:var(--green)}

/* sections */
.em-section,.em-template-section,.em-integration,.em-flow-section{padding:95px 0}
.em-template-section,.em-integration{background:#f7f9fc}
.em-heading{text-align:center;max-width:780px;margin:0 auto 46px}
.em-heading h2,.em-copy h2{font-size:clamp(32px,4vw,50px);line-height:1.1;letter-spacing:-.035em;margin:0 0 14px}
.em-heading p,.em-copy p{color:var(--muted);line-height:1.7;margin:0}
.em-features{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
.em-card{padding:26px;border:1px solid var(--line);border-radius:17px;background:#fff;box-shadow:0 7px 26px rgba(16,32,56,.035)}
.em-icon{width:42px;height:42px;border-radius:11px;display:grid;place-items:center;background:#eaf1ff;color:var(--blue);font-weight:900;margin-bottom:17px}
.em-card h3{font-size:17px;margin:0 0 9px}.em-card p{font-size:14px;line-height:1.65;color:var(--muted);margin:0}

/* Template gallery */
.template-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
.template-card{background:#fff;border:1px solid var(--line);border-radius:17px;padding:22px;box-shadow:0 8px 25px rgba(16,32,56,.04)}
.template-type{font-size:9px;font-weight:850;color:#215af8;letter-spacing:.7px}.template-card h3{font-size:16px;margin:10px 0}.template-preview{padding:13px;background:#f7f9fc;border-radius:9px;font-size:10px;color:#667085;line-height:1.6;min-height:105px}.template-preview b{color:#111827}.template-footer{display:flex;justify-content:space-between;align-items:center;margin-top:13px;font-size:8px;color:#98a2b3}.template-use{padding:5px 8px;border-radius:6px;background:#eaf1ff;color:#215af8;font-weight:850}

/* integration */
.integration-grid{display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center}
.mailbox{background:#fff;border:1px solid var(--line);border-radius:20px;padding:24px;box-shadow:0 22px 55px rgba(18,40,75,.08)}
.mail-row{display:flex;gap:11px;align-items:center;padding:12px;border-bottom:1px solid #edf0f4}.mail-row:last-child{border:0}.mail-avatar{width:34px;height:34px;border-radius:50%;display:grid;place-items:center;background:#eaf1ff;color:#215af8;font-size:9px;font-weight:850}.mail-row b{display:block;font-size:10px}.mail-row small{display:block;color:#98a2b3;font-size:8px;margin-top:3px}.mail-time{margin-left:auto;font-size:8px;color:#98a2b3}
.em-checks{margin-top:24px}.em-check{display:flex;gap:12px;margin:17px 0}.em-check i{font-style:normal;width:25px;height:25px;border-radius:50%;display:grid;place-items:center;background:#e9f8ef;color:var(--green);font-size:12px;font-weight:900;flex:0 0 25px}.em-check strong{font-size:14px}.em-check p{font-size:13px;margin:4px 0 0;color:var(--muted)}

/* flow */
.em-flow{display:grid;grid-template-columns:repeat(6,1fr);gap:11px}
.em-step{position:relative;text-align:center;padding:21px 10px;border:1px solid var(--line);border-radius:14px;background:#fff}.em-step:not(:last-child):after{content:"→";position:absolute;right:-14px;top:50%;transform:translateY(-50%);color:#9aa4b2;font-weight:900;z-index:3}.em-num{width:31px;height:31px;border-radius:50%;display:grid;place-items:center;margin:0 auto 10px;background:#eaf1ff;color:#215af8;font-size:10px;font-weight:900}.em-step strong{display:block;font-size:11px}.em-step small{display:block;margin-top:5px;color:#8a93a3;font-size:9px;line-height:1.45}

/* CTA */
.em-cta{padding:42px 0 105px}.em-cta-box{padding:56px;border-radius:27px;background:linear-gradient(135deg,#215af8,#173eb1);color:#fff;display:flex;align-items:center;justify-content:space-between;gap:35px;box-shadow:0 30px 70px rgba(33,90,248,.22)}.em-cta-box h2{font-size:clamp(30px,4vw,46px);margin:0 0 8px;color:#fff}.em-cta-box p{margin:0;color:#dce5ff}.em-cta-box .em-btn{background:#fff;color:#15399e!important;white-space:nowrap}

@media(max-width:980px){.em-hero-grid,.integration-grid{grid-template-columns:1fr}.em-features{grid-template-columns:1fr 1fr}.template-grid{grid-template-columns:1fr 1fr}.em-flow{grid-template-columns:repeat(2,1fr)}.em-step:after{display:none}.em-app{max-width:720px;margin:auto}.em-cta-box{flex-direction:column;align-items:flex-start}}
@media(max-width:640px){.vf-email-page .container{width:min(100% - 26px,1180px)}.em-hero{padding:70px 0}.em-hero h1{font-size:42px}.em-features,.template-grid,.em-flow{grid-template-columns:1fr}.em-appbody{grid-template-columns:82px 1fr}.em-panel,.em-floating{display:none}.em-section,.em-template-section,.em-integration,.em-flow-section{padding:72px 0}.em-cta-box{padding:35px 25px}}
</style>

<section class="em-hero">
 <div class="container em-hero-grid">
  <div class="em-hero-copy">
   <div class="em-eyebrow">VISTAARFLOW EMAIL CRM</div>
   <h1>Keep customer emails connected to <em>your CRM.</em></h1>
   <p>Connect supported email services with VistaarFlow, use reusable email templates and keep customer communication closer to your contacts, leads, tasks and opportunities—all from one connected CRM workflow.</p>
   <div class="em-btns">
    <a class="em-btn" href="https://app.vistaarflow.in/signup">Start 14 days free <span>→</span></a>
    <a class="em-btn alt" href="#email-features">Explore Email CRM</a>
   </div>
   <div class="em-proof"><span>Email integration</span><span>Reusable templates</span><span>CRM context</span></div>
  </div>

  <div class="em-app" aria-label="VistaarFlow email CRM preview">
   <div class="em-appbar"><i class="em-dot"></i><i class="em-dot"></i><i class="em-dot"></i><span class="em-app-title">VistaarFlow • Email</span></div>
   <div class="em-appbody">
    <aside class="em-sidebar"><div class="em-nav active">✉ Email</div><div class="em-nav">▣ Templates</div><div class="em-nav">◉ Contacts</div><div class="em-nav">↗ Opportunities</div><div class="em-nav">✓ Tasks</div></aside>
    <div class="em-compose">
     <h4>Compose Email</h4>
     <div class="em-field">To: <b>rahul@example.com</b></div>
     <div class="em-field">Subject: <b>Details you requested</b></div>
     <div class="em-message"><strong>Hi Rahul,</strong><br><br>Thank you for your interest. Please find the requested information below. Let me know if you would like to schedule a call to discuss the next steps.<br><br>Regards,<br>Sales Team</div>
     <div class="em-tools"><span>Send Email</span><span>Use Template</span><span>✦ AI Reply</span></div>
    </div>
    <aside class="em-panel">
     <h4>Email Templates</h4>
     <div class="em-template"><b>New Lead Reply</b><small>Initial enquiry response</small></div>
     <div class="em-template"><b>Follow-up</b><small>Customer follow-up</small></div>
     <div class="em-template"><b>Appointment</b><small>Meeting information</small></div>
     <div class="em-template"><b>Thank You</b><small>Post-conversation</small></div>
     <span class="em-status">● CRM contact linked</span>
    </aside>
   </div>
   <span class="em-floating one"><i>✓</i> Email connected to CRM</span>
   <span class="em-floating two"><i>✉</i> Template ready to use</span>
  </div>
 </div>
</section>

<section id="email-features" class="em-section">
 <div class="container">
  <div class="em-heading">
   <div class="em-eyebrow">EMAIL + CUSTOMER CONTEXT</div>
   <h2>Manage email communication with <em>CRM context.</em></h2>
   <p>Keep everyday customer email work closer to the contacts and opportunities your team is already managing.</p>
  </div>
  <div class="em-features">
   <article class="em-card"><span class="em-icon">✉</span><h3>Email Integration</h3><p>Connect supported email services with VistaarFlow so customer email communication can work alongside your CRM process.</p></article>
   <article class="em-card"><span class="em-icon">▣</span><h3>Email Templates</h3><p>Create reusable email content for common enquiries, follow-ups, appointments and other repeat customer communication.</p></article>
   <article class="em-card"><span class="em-icon">◉</span><h3>Contact Context</h3><p>Keep email activity closer to customer records so your team can understand the lead before continuing the conversation.</p></article>
   <article class="em-card"><span class="em-icon">✦</span><h3>AI Reply Assistance</h3><p>Where AI assistance is available, prepare a reply draft from relevant conversation context and review it before sending.</p></article>
  </div>
 </div>
</section>

<section class="em-template-section">
 <div class="container">
  <div class="em-heading">
   <div class="em-eyebrow">REUSABLE EMAIL TEMPLATES</div>
   <h2>Write once. <em>Reuse when you need it.</em></h2>
   <p>Keep frequently used communication ready for your team instead of rewriting the same type of email for every customer.</p>
  </div>
  <div class="template-grid">
   <article class="template-card"><span class="template-type">NEW ENQUIRY</span><h3>Lead Acknowledgement</h3><div class="template-preview"><b>Hi {{first_name}},</b><br>Thank you for your enquiry. We have received your details and our team will follow up with the relevant information.</div><div class="template-footer"><span>Reusable template</span><span class="template-use">USE TEMPLATE</span></div></article>
   <article class="template-card"><span class="template-type">FOLLOW-UP</span><h3>Customer Follow-up</h3><div class="template-preview"><b>Hi {{first_name}},</b><br>Just following up regarding your recent enquiry. Please let us know if you need any additional information or would like to discuss the next step.</div><div class="template-footer"><span>Reusable template</span><span class="template-use">USE TEMPLATE</span></div></article>
   <article class="template-card"><span class="template-type">APPOINTMENT</span><h3>Meeting Confirmation</h3><div class="template-preview"><b>Hi {{first_name}},</b><br>Your meeting is scheduled for {{meeting_date}} at {{meeting_time}}. We look forward to speaking with you.</div><div class="template-footer"><span>Reusable template</span><span class="template-use">USE TEMPLATE</span></div></article>
   <article class="template-card"><span class="template-type">INFORMATION</span><h3>Share Details</h3><div class="template-preview"><b>Hi {{first_name}},</b><br>As discussed, here are the details you requested. Please review them and let us know if you have any questions.</div><div class="template-footer"><span>Reusable template</span><span class="template-use">USE TEMPLATE</span></div></article>
   <article class="template-card"><span class="template-type">REMINDER</span><h3>Follow-up Reminder</h3><div class="template-preview"><b>Hi {{first_name}},</b><br>This is a quick reminder regarding our previous conversation. Let us know a convenient time to continue the discussion.</div><div class="template-footer"><span>Reusable template</span><span class="template-use">USE TEMPLATE</span></div></article>
   <article class="template-card"><span class="template-type">THANK YOU</span><h3>Thank You Email</h3><div class="template-preview"><b>Hi {{first_name}},</b><br>Thank you for your time today. It was great speaking with you. Please feel free to reply if you need any additional assistance.</div><div class="template-footer"><span>Reusable template</span><span class="template-use">USE TEMPLATE</span></div></article>
  </div>
 </div>
</section>

<section class="em-integration">
 <div class="container integration-grid">
  <div class="mailbox">
   <div style="font-size:13px;font-weight:800;margin-bottom:10px">Customer Email Activity</div>
   <div class="mail-row"><span class="mail-avatar">RS</span><div><b>Rahul Sharma</b><small>Re: Pricing details</small></div><span class="mail-time">10:42</span></div>
   <div class="mail-row"><span class="mail-avatar">AP</span><div><b>Ananya Patel</b><small>Meeting confirmation</small></div><span class="mail-time">09:15</span></div>
   <div class="mail-row"><span class="mail-avatar">VM</span><div><b>Vikram Mehta</b><small>Re: Product information</small></div><span class="mail-time">Yesterday</span></div>
   <div class="mail-row"><span class="mail-avatar">SK</span><div><b>Sana Khan</b><small>Follow-up enquiry</small></div><span class="mail-time">Yesterday</span></div>
  </div>
  <div class="em-copy">
   <div class="em-eyebrow">ONE CONNECTED CUSTOMER JOURNEY</div>
   <h2>Email should be part of the <em>CRM conversation.</em></h2>
   <p>Customer communication is more useful when your team can connect it with the lead, opportunity, task and previous activity rather than treating email as an isolated inbox.</p>
   <div class="em-checks">
    <div class="em-check"><i>✓</i><div><strong>Customer context</strong><p>Work with relevant CRM information while handling customer communication.</p></div></div>
    <div class="em-check"><i>✓</i><div><strong>Consistent communication</strong><p>Use reusable templates to keep common messages clear and consistent across your team.</p></div></div>
    <div class="em-check"><i>✓</i><div><strong>Follow-up workflow</strong><p>Continue the customer journey with tasks, pipeline activity and supported CRM automation.</p></div></div>
   </div>
  </div>
 </div>
</section>

<section class="em-flow-section">
 <div class="container">
  <div class="em-heading">
   <div class="em-eyebrow">EMAIL + CRM WORKFLOW</div>
   <h2>From customer email to <em>the next follow-up.</em></h2>
   <p>Keep email communication connected with the wider sales and customer-management process.</p>
  </div>
  <div class="em-flow">
   <div class="em-step"><span class="em-num">01</span><strong>CRM Contact</strong><small>Customer record is available</small></div>
   <div class="em-step"><span class="em-num">02</span><strong>Email</strong><small>Prepare customer communication</small></div>
   <div class="em-step"><span class="em-num">03</span><strong>Template</strong><small>Use reusable content when helpful</small></div>
   <div class="em-step"><span class="em-num">04</span><strong>Send / Reply</strong><small>Continue the conversation</small></div>
   <div class="em-step"><span class="em-num">05</span><strong>Follow-up</strong><small>Create the next CRM action</small></div>
   <div class="em-step"><span class="em-num">06</span><strong>Opportunity</strong><small>Continue through your pipeline</small></div>
  </div>
 </div>
</section>

<section class="em-cta">
 <div class="container">
  <div class="em-cta-box">
   <div><h2>Bring email closer to your customer journey.</h2><p>Connect customer communication, reusable templates and CRM follow-up in VistaarFlow.</p></div>
   <a class="em-btn" href="https://app.vistaarflow.in/signup">Start 14 days free <span>→</span></a>
  </div>
 </div>
</section>

</main>

<?php get_footer(); ?>
