<?php get_header(); ?>

<main id="main" class="web-page">

<style>
.web-page{--blue:#215af8;--navy:#0b1220;--muted:#667085;--line:#e5eaf1;--soft:#f7f9fc;--green:#17a768;background:#fff;color:var(--navy);overflow:hidden}
.web-page *{box-sizing:border-box}
.web-page .container{width:min(1180px,calc(100% - 40px));margin:auto}
.webx-web-eyebrow{font-size:12px;font-weight:850;letter-spacing:1.5px;color:var(--blue);text-transform:uppercase;margin-bottom:14px}
.webx-web-hero{padding:92px 0 100px;background:radial-gradient(circle at 82% 22%,#e8efff 0,transparent 34%),linear-gradient(180deg,#fff,#f8faff)}
.webx-web-hero-grid{display:grid;grid-template-columns:.92fr 1.08fr;gap:68px;align-items:center}
.webx-web-hero h1{font-size:clamp(43px,5vw,68px);line-height:1.02;letter-spacing:-.045em;margin:0 0 22px;font-weight:850}
.webx-web-hero h1 em,.webx-web-heading h2 em,.webx-web-copy h2 em{font-style:normal;color:var(--blue)}
.webx-web-hero-copy>p{font-size:18px;line-height:1.7;color:var(--muted);max-width:650px;margin:0 0 28px}
.webx-web-btns{display:flex;gap:12px;flex-wrap:wrap}
.webx-web-btn{display:inline-flex;align-items:center;gap:9px;padding:13px 20px;border-radius:10px;background:var(--blue);color:#fff!important;text-decoration:none!important;font-weight:750;box-shadow:0 10px 25px rgba(33,90,248,.18)}
.webx-web-btn.webx-alt{background:#fff;color:var(--navy)!important;border:1px solid var(--line);box-shadow:none}
.webx-web-proof{display:flex;gap:22px;flex-wrap:wrap;margin-top:25px;color:#475467;font-size:13px;font-weight:700}
.webx-web-proof span:before{content:"✓";color:var(--green);margin-right:6px}

/* Hero website/form + CRM */
.webx-capture-stage{position:relative;min-height:490px}
.webx-browser{position:absolute;left:0;top:30px;width:68%;background:#fff;border:1px solid #dfe6ef;border-radius:18px;box-shadow:0 25px 65px rgba(24,45,80,.13);overflow:hidden}
.webx-browser-top{height:36px;background:#f7f9fc;border-bottom:1px solid #e9edf3;display:flex;align-items:center;padding:0 12px;gap:5px}.webx-browser-dot{width:7px;height:7px;border-radius:50%;background:#d6dce5}.webx-browser-url{height:18px;flex:1;margin-left:8px;border-radius:5px;background:#fff;border:1px solid #e6eaf0;font-size:7px;color:#98a2b3;padding:4px 7px}
.site-preview{padding:20px;background:linear-gradient(135deg,#f6f9ff,#fff)}.site-preview h3{font-size:17px;margin:0 0 5px}.site-preview>p{font-size:8px;color:#7d8796;margin:0 0 15px}
.webx-web-form{background:#fff;border:1px solid #e4e9f0;border-radius:12px;padding:14px}.webx-form-row{display:grid;grid-template-columns:1fr 1fr;gap:7px}.webx-form-field{border:1px solid #e4e8ee;border-radius:7px;padding:8px;font-size:7px;color:#8a94a4;margin-bottom:7px}.webx-form-btn{background:#215af8;color:#fff;border-radius:7px;text-align:center;padding:8px;font-size:8px;font-weight:850}
.webx-crm-window{position:absolute;right:0;bottom:0;width:57%;background:#fff;border:1px solid #dfe6ef;border-radius:17px;box-shadow:0 25px 65px rgba(24,45,80,.17);overflow:hidden;z-index:2}.webx-crm-top{padding:12px 14px;border-bottom:1px solid #edf0f4;font-size:9px;font-weight:850}.webx-crm-body{padding:14px}.webx-crm-badge{font-size:7px;font-weight:850;color:#12824e;background:#e9f8ef;padding:5px 7px;border-radius:999px;display:inline-block}.webx-crm-body h4{font-size:12px;margin:10px 0}.webx-crm-field{padding:7px 0;border-bottom:1px solid #edf0f4}.webx-crm-field small{font-size:6px;color:#98a2b3;display:block}.webx-crm-field b{font-size:8px;display:block;margin-top:2px}
.webx-capture-arrow{position:absolute;left:54%;top:48%;z-index:5;width:42px;height:42px;border-radius:50%;background:#215af8;color:#fff;display:grid;place-items:center;font-size:18px;box-shadow:0 9px 25px rgba(33,90,248,.3)}
.webx-web-floating{position:absolute;z-index:6;background:#fff;border:1px solid #e2e7ee;border-radius:10px;padding:9px 12px;font-size:9px;font-weight:800;box-shadow:0 12px 30px rgba(18,40,75,.13)}.webx-web-floating.webx-one{right:7px;top:14px}.webx-web-floating.webx-two{left:25px;bottom:15px}.webx-web-floating i{font-style:normal;color:var(--green)}

/* sections */
.webx-web-section,.webx-web-data,.webx-web-automation,.webx-web-flow-section{padding:95px 0}
.webx-web-data,.webx-web-automation{background:#f7f9fc}
.webx-web-heading{text-align:center;max-width:790px;margin:0 auto 46px}
.webx-web-heading h2,.webx-web-copy h2{font-size:clamp(32px,4vw,50px);line-height:1.1;letter-spacing:-.035em;margin:0 0 14px}
.webx-web-heading p,.webx-web-copy p{color:var(--muted);line-height:1.7;margin:0}
.webx-web-features{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
.webx-web-card{padding:26px;border:1px solid var(--line);border-radius:17px;background:#fff;box-shadow:0 7px 26px rgba(16,32,56,.035)}
.webx-web-icon{width:42px;height:42px;border-radius:11px;display:grid;place-items:center;background:#eaf1ff;color:var(--blue);font-weight:900;margin-bottom:17px}
.webx-web-card h3{font-size:17px;margin:0 0 9px}.webx-web-card p{font-size:14px;line-height:1.65;color:var(--muted);margin:0}

/* data mapping */
.webx-web-grid{display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center}
.webx-mapping-box{background:#fff;border:1px solid var(--line);border-radius:20px;padding:25px;box-shadow:0 22px 55px rgba(18,40,75,.08)}
.webx-mapping-head{display:grid;grid-template-columns:1fr 35px 1fr;gap:10px;font-size:9px;font-weight:850;color:#98a2b3;margin-bottom:10px}
.webx-map-row{display:grid;grid-template-columns:1fr 35px 1fr;gap:10px;align-items:center;margin:8px 0}.webx-map-field{border:1px solid #e4e8ee;border-radius:8px;padding:10px;font-size:9px;font-weight:750;background:#fbfcfe}.webx-map-arrow{text-align:center;color:#215af8;font-weight:900}
.webx-web-checks{margin-top:24px}.webx-web-check{display:flex;gap:12px;margin:17px 0}.webx-web-check i{font-style:normal;width:25px;height:25px;border-radius:50%;display:grid;place-items:center;background:#e9f8ef;color:var(--green);font-size:12px;font-weight:900;flex:0 0 25px}.webx-web-check strong{font-size:14px}.webx-web-check p{font-size:13px;margin:4px 0 0;color:var(--muted)}

/* Automation */
.webx-auto-box{background:#fff;border:1px solid var(--line);border-radius:20px;padding:25px;box-shadow:0 22px 55px rgba(18,40,75,.08)}.webx-auto-node{display:flex;align-items:center;gap:11px;border:1px solid #e6eaf0;border-radius:10px;padding:12px;margin:0 auto;max-width:360px}.webx-auto-node span{width:31px;height:31px;border-radius:8px;background:#eaf1ff;color:#215af8;display:grid;place-items:center;font-size:10px;font-weight:900}.webx-auto-node b{font-size:10px;display:block}.webx-auto-node small{font-size:8px;color:#98a2b3}.webx-auto-line{width:2px;height:19px;background:#dce2ea;margin:auto}

/* Flow */
.webx-web-flow{display:grid;grid-template-columns:repeat(6,1fr);gap:11px}.webx-web-step{position:relative;text-align:center;padding:21px 10px;border:1px solid var(--line);border-radius:14px;background:#fff}.webx-web-step:not(:last-child):after{content:"→";position:absolute;right:-14px;top:50%;transform:translateY(-50%);color:#9aa4b2;font-weight:900;z-index:3}.webx-web-num{width:31px;height:31px;border-radius:50%;display:grid;place-items:center;margin:0 auto 10px;background:#eaf1ff;color:#215af8;font-size:10px;font-weight:900}.webx-web-step strong{display:block;font-size:11px}.webx-web-step small{display:block;margin-top:5px;color:#8a93a3;font-size:9px;line-height:1.45}

/* CTA */
.webx-web-cta{padding:42px 0 105px}.webx-web-cta-box{padding:56px;border-radius:27px;background:linear-gradient(135deg,#215af8,#173eb1);color:#fff;display:flex;align-items:center;justify-content:space-between;gap:35px;box-shadow:0 30px 70px rgba(33,90,248,.22)}.webx-web-cta-box h2{font-size:clamp(30px,4vw,46px);margin:0 0 8px;color:#fff}.webx-web-cta-box p{margin:0;color:#dce5ff}.webx-web-cta-box .webx-web-btn{background:#fff;color:#15399e!important;white-space:nowrap}

@media(max-width:980px){.webx-web-hero-grid,.webx-web-grid{grid-template-columns:1fr}.webx-web-features{grid-template-columns:1fr 1fr}.webx-web-flow{grid-template-columns:repeat(2,1fr)}.webx-web-step:after{display:none}.webx-capture-stage{max-width:700px;margin:auto}.webx-web-cta-box{flex-direction:column;align-items:flex-start}}
@media(max-width:640px){.web-page .container{width:min(100% - 26px,1180px)}.webx-web-hero{padding:70px 0}.webx-web-hero h1{font-size:42px}.webx-web-features,.webx-web-flow{grid-template-columns:1fr}.webx-capture-stage{min-height:420px}.webx-browser{width:82%}.webx-crm-window{width:72%}.webx-web-floating{display:none}.webx-web-section,.webx-web-data,.webx-web-automation,.webx-web-flow-section{padding:72px 0}.webx-web-cta-box{padding:35px 25px}}
</style>

<section class="webx-web-hero">
 <div class="container webx-web-hero-grid">
  <div class="webx-web-hero-copy">
   <div class="webx-web-eyebrow">VISTAARFLOW WEBSITE LEAD CAPTURE</div>
   <h1>Turn website enquiries into <em>CRM leads automatically.</em></h1>
   <p>Capture every enquiry submitted through your website forms and route it straight into VistaarFlow. Map form fields to CRM records, assign leads to the right team member and manage follow-up from one centralized workflow.</p>
   <div class="webx-web-btns">
    <a class="webx-web-btn" href="https://app.vistaarflow.in/signup">Start 14 days free <span>→</span></a>
    <a class="webx-web-btn webx-alt" href="#website-features">Explore Lead Capture</a>
   </div>
   <div class="webx-web-proof"><span>Website forms</span><span>Field mapping</span><span>CRM lead capture</span></div>
  </div>

  <div class="webx-capture-stage">
   <div class="webx-browser">
    <div class="webx-browser-top"><i class="webx-browser-dot"></i><i class="webx-browser-dot"></i><i class="webx-browser-dot"></i><div class="webx-browser-url">yourwebsite.com/enquire</div></div>
    <div class="site-preview"><h3>Request More Information</h3><p>Share your details and our team will get in touch with you.</p><div class="webx-web-form"><div class="webx-form-row"><div class="webx-form-field">Rahul Sharma</div><div class="webx-form-field">+91 98765 43210</div></div><div class="webx-form-field">rahul@example.com</div><div class="webx-form-field">Interested in: Full Stack Development</div><div class="webx-form-field">Preferred time: Evening</div><div class="webx-form-btn">SUBMIT ENQUIRY</div></div></div>
   </div>
   <span class="webx-capture-arrow">→</span>
   <div class="webx-crm-window"><div class="webx-crm-top">VistaarFlow • New Website Lead</div><div class="webx-crm-body"><span class="webx-crm-badge">● CAPTURED</span><h4>Rahul Sharma</h4><div class="webx-crm-field"><small>PHONE</small><b>+91 98765 43210</b></div><div class="webx-crm-field"><small>EMAIL</small><b>rahul@example.com</b></div><div class="webx-crm-field"><small>INTEREST</small><b>Full Stack Development</b></div><div class="webx-crm-field"><small>SOURCE</small><b>Website Form</b></div></div></div>
   <span class="webx-web-floating webx-one"><i>✓</i> Form submitted</span><span class="webx-web-floating webx-two"><i>✓</i> Lead captured in CRM</span>
  </div>
 </div>
</section>

<section id="website-features" class="webx-web-section">
 <div class="container">
  <div class="webx-web-heading"><div class="webx-web-eyebrow">FROM YOUR WEBSITE TO YOUR CRM</div><h2>Stop manually copying <em>website enquiries.</em></h2><p>Connect your website forms to the CRM processes your team already relies on for contacts, lead assignment, tasks and opportunities.</p></div>
  <div class="webx-web-features">
   <article class="webx-web-card"><span class="webx-web-icon">▤</span><h3>Form Lead Capture</h3><p>Automatically bring submissions from your connected website enquiry forms into VistaarFlow as new leads.</p></article>
   <article class="webx-web-card"><span class="webx-web-icon">↔</span><h3>Field Mapping</h3><p>Match each website form field to the right CRM field so every detail is stored accurately and consistently.</p></article>
   <article class="webx-web-card"><span class="webx-web-icon">◉</span><h3>Contact Management</h3><p>Keep customer information organized in a single CRM record, ready for future conversations and follow-up.</p></article>
   <article class="webx-web-card"><span class="webx-web-icon">⚡</span><h3>Workflow Ready</h3><p>Apply your assignment rules, tasks, pipelines and supported automations to every captured website lead.</p></article>
  </div>
 </div>
</section>

<section class="webx-web-data">
 <div class="container webx-web-grid">
  <div class="webx-web-copy"><div class="webx-web-eyebrow">FORM DATA → CRM FIELDS</div><h2>Keep submitted information <em>structured and useful.</em></h2><p>Every business collects different information through its forms. Field mapping connects each submitted value to the CRM field your team needs, so no detail is lost.</p>
   <div class="webx-web-checks"><div class="webx-web-check"><i>✓</i><div><strong>Standard customer details</strong><p>Map core information such as name, phone number and email address.</p></div></div><div class="webx-web-check"><i>✓</i><div><strong>Business-specific responses</strong><p>Link additional form responses to the appropriate standard or custom CRM fields.</p></div></div><div class="webx-web-check"><i>✓</i><div><strong>Lead source context</strong><p>Keep the website source visible on every record so your team knows where each enquiry came from.</p></div></div></div>
  </div>
  <div class="webx-mapping-box"><div class="webx-mapping-head"><span>WEBSITE FORM</span><span></span><span>CRM FIELD</span></div><div class="webx-map-row"><div class="webx-map-field">Full Name</div><div class="webx-map-arrow">→</div><div class="webx-map-field">Contact Name</div></div><div class="webx-map-row"><div class="webx-map-field">Phone Number</div><div class="webx-map-arrow">→</div><div class="webx-map-field">Phone</div></div><div class="webx-map-row"><div class="webx-map-field">Email Address</div><div class="webx-map-arrow">→</div><div class="webx-map-field">Email</div></div><div class="webx-map-row"><div class="webx-map-field">Interested Course</div><div class="webx-map-arrow">→</div><div class="webx-map-field">Interest</div></div><div class="webx-map-row"><div class="webx-map-field">Preferred Time</div><div class="webx-map-arrow">→</div><div class="webx-map-field">Custom Field</div></div><div class="webx-map-row"><div class="webx-map-field">Website</div><div class="webx-map-arrow">→</div><div class="webx-map-field">Lead Source</div></div></div>
 </div>
</section>

<section class="webx-web-automation">
 <div class="container webx-web-grid">
  <div class="webx-auto-box"><div class="webx-auto-node"><span>▤</span><div><small>TRIGGER</small><b>Website form submitted</b></div></div><div class="webx-auto-line"></div><div class="webx-auto-node"><span>◉</span><div><small>CRM ACTION</small><b>Create / update contact</b></div></div><div class="webx-auto-line"></div><div class="webx-auto-node"><span>↗</span><div><small>ASSIGNMENT</small><b>Assign lead owner</b></div></div><div class="webx-auto-line"></div><div class="webx-auto-node"><span>✓</span><div><small>FOLLOW-UP</small><b>Create configured next action</b></div></div></div>
  <div class="webx-web-copy"><div class="webx-web-eyebrow">LEAD CAPTURE + AUTOMATION</div><h2>Make every form submission <em>the start of your workflow.</em></h2><p>Once an enquiry enters VistaarFlow, your configured CRM process takes over, from lead ownership and tasks to opportunities and supported automations.</p><div class="webx-web-checks"><div class="webx-web-check"><i>✓</i><div><strong>Assign the right owner</strong><p>Use lead-assignment rules to route each enquiry to the right team member.</p></div></div><div class="webx-web-check"><i>✓</i><div><strong>Create follow-up activity</strong><p>Set up tasks and reminders so no enquiry goes unattended.</p></div></div><div class="webx-web-check"><i>✓</i><div><strong>Move qualified leads into the pipeline</strong><p>Create and manage opportunities as soon as an enquiry becomes a potential deal.</p></div></div></div></div>
 </div>
</section>

<section class="webx-web-flow-section">
 <div class="container">
  <div class="webx-web-heading"><div class="webx-web-eyebrow">WEBSITE LEAD WORKFLOW</div><h2>From form submission to <em>sales follow-up.</em></h2><p>Keep every website enquiry connected to the next step your team needs to take.</p></div>
  <div class="webx-web-flow"><div class="webx-web-step"><span class="webx-web-num">01</span><strong>Visitor Arrives</strong><small>A customer visits your website</small></div><div class="webx-web-step"><span class="webx-web-num">02</span><strong>Form Submitted</strong><small>The visitor shares their enquiry details</small></div><div class="webx-web-step"><span class="webx-web-num">03</span><strong>Lead Captured</strong><small>The data enters VistaarFlow</small></div><div class="webx-web-step"><span class="webx-web-num">04</span><strong>Fields Mapped</strong><small>Information is organized in the CRM</small></div><div class="webx-web-step"><span class="webx-web-num">05</span><strong>Owner Assigned</strong><small>The lead reaches the right user</small></div><div class="webx-web-step"><span class="webx-web-num">06</span><strong>Follow-up</strong><small>Your team continues the conversation</small></div></div>
 </div>
</section>

<section class="webx-web-cta"><div class="container"><div class="webx-web-cta-box"><div><h2>Turn your website into a CRM lead source.</h2><p>Capture enquiries, organize customer data and manage follow-up, all inside VistaarFlow.</p></div><a class="webx-web-btn" href="https://app.vistaarflow.in/signup">Start 14 days free <span>→</span></a></div></div></section>

</main>

<?php get_footer(); ?>