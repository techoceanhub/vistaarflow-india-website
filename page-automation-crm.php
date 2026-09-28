<?php get_header(); ?>

<main id="main" class="vf-auto-page">

<style>
.vf-auto-page{--blue:#215af8;--navy:#0b1220;--muted:#667085;--line:#e5eaf1;--soft:#f7f9fc;--green:#17a768;background:#fff;color:var(--navy);overflow:hidden}
.vf-auto-page *{box-sizing:border-box}
.vf-auto-page .container{width:min(1180px,calc(100% - 40px));margin:auto}
.auto-eyebrow{font-size:12px;font-weight:850;letter-spacing:1.5px;color:var(--blue);text-transform:uppercase;margin-bottom:14px}
.auto-hero{padding:92px 0 100px;background:radial-gradient(circle at 82% 22%,#e8efff 0,transparent 34%),linear-gradient(180deg,#fff,#f8faff)}
.auto-hero-grid{display:grid;grid-template-columns:.92fr 1.08fr;gap:68px;align-items:center}
.auto-hero h1{font-size:clamp(43px,5vw,68px);line-height:1.02;letter-spacing:-.045em;margin:0 0 22px;font-weight:850}
.auto-hero h1 em,.auto-heading h2 em,.auto-copy h2 em{font-style:normal;color:var(--blue)}
.auto-hero-copy>p{font-size:18px;line-height:1.7;color:var(--muted);max-width:650px;margin:0 0 28px}
.auto-btns{display:flex;gap:12px;flex-wrap:wrap}
.auto-btn{display:inline-flex;align-items:center;gap:9px;padding:13px 20px;border-radius:10px;background:var(--blue);color:#fff!important;text-decoration:none!important;font-weight:750;box-shadow:0 10px 25px rgba(33,90,248,.18)}
.auto-btn.alt{background:#fff;color:var(--navy)!important;border:1px solid var(--line);box-shadow:none}
.auto-proof{display:flex;gap:22px;flex-wrap:wrap;margin-top:25px;color:#475467;font-size:13px;font-weight:700}
.auto-proof span:before{content:"✓";color:var(--green);margin-right:6px}

/* Automation builder mockup */
.auto-app{background:#fff;border:1px solid #dfe6ef;border-radius:22px;box-shadow:0 28px 80px rgba(30,55,90,.14);overflow:hidden;position:relative}
.auto-appbar{height:45px;border-bottom:1px solid #e9edf3;display:flex;align-items:center;padding:0 15px;gap:6px;background:#fbfcfe}
.auto-dot{width:8px;height:8px;border-radius:50%;background:#d9dee7}.auto-app-title{font-size:11px;font-weight:750;color:#7a8494;margin-left:8px}
.auto-appbody{display:grid;grid-template-columns:105px 1fr;min-height:445px}
.auto-sidebar{padding:18px 7px;border-right:1px solid #edf0f5;background:#f8faff}
.auto-nav{padding:10px 7px;border-radius:8px;font-size:9px;font-weight:750;color:#667085;margin-bottom:6px}.auto-nav.active{background:#e9f1ff;color:#215af8}
.builder{padding:22px 26px;background:#fcfdff}
.builder-head{display:flex;justify-content:space-between;align-items:center;margin-bottom:18px}.builder-head strong{font-size:12px}.live-pill{font-size:8px;font-weight:850;padding:5px 8px;border-radius:999px;background:#e9f8ef;color:#12824e}
.flow-node{max-width:330px;margin:0 auto;border:1px solid #e3e8ef;border-radius:12px;padding:12px 14px;background:#fff;box-shadow:0 5px 15px rgba(18,40,75,.04);display:flex;gap:10px;align-items:center}
.node-icon{width:31px;height:31px;border-radius:9px;display:grid;place-items:center;background:#eaf1ff;color:#215af8;font-size:11px;font-weight:900}.node-copy small{display:block;font-size:7px;color:#98a2b3}.node-copy b{font-size:10px;display:block;margin-top:2px}
.flow-line{width:2px;height:21px;background:#dce2ea;margin:0 auto;position:relative}.flow-line:after{content:"▼";position:absolute;bottom:-7px;left:50%;transform:translateX(-50%);font-size:7px;color:#a5aebb}
.flow-node.trigger{border-color:#cbdcff}.flow-node.action .node-icon{background:#e9f8ef;color:#12824e}.flow-node.condition .node-icon{background:#fff4df;color:#b56b00}
.auto-floating{position:absolute;background:#fff;border:1px solid #e2e7ee;border-radius:10px;padding:9px 12px;font-size:9px;font-weight:800;box-shadow:0 12px 30px rgba(18,40,75,.13)}.auto-floating.one{right:15px;top:63px}.auto-floating.two{left:120px;bottom:17px}.auto-floating i{font-style:normal;color:var(--green)}

/* sections */
.auto-section,.auto-usecases,.auto-flow-section,.auto-builder-section{padding:95px 0}
.auto-usecases,.auto-builder-section{background:#f7f9fc}
.auto-heading{text-align:center;max-width:780px;margin:0 auto 46px}
.auto-heading h2,.auto-copy h2{font-size:clamp(32px,4vw,50px);line-height:1.1;letter-spacing:-.035em;margin:0 0 14px}
.auto-heading p,.auto-copy p{color:var(--muted);line-height:1.7;margin:0}
.auto-features{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
.auto-card{padding:26px;border:1px solid var(--line);border-radius:17px;background:#fff;box-shadow:0 7px 26px rgba(16,32,56,.035)}
.auto-icon{width:42px;height:42px;border-radius:11px;display:grid;place-items:center;background:#eaf1ff;color:var(--blue);font-weight:900;margin-bottom:17px}
.auto-card h3{font-size:17px;margin:0 0 9px}.auto-card p{font-size:14px;line-height:1.65;color:var(--muted);margin:0}

/* use cases */
.use-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:17px}
.use-card{background:#fff;border:1px solid var(--line);border-radius:17px;padding:24px}.use-top{display:flex;align-items:center;gap:11px;margin-bottom:13px}.use-badge{width:35px;height:35px;border-radius:10px;background:#eaf1ff;color:#215af8;display:grid;place-items:center;font-weight:900}.use-card h3{font-size:15px;margin:0}.use-card p{font-size:13px;color:#667085;line-height:1.65;margin:0}
.mini-flow{display:flex;align-items:center;gap:6px;flex-wrap:wrap;margin-top:16px}.mini-flow span{font-size:8px;font-weight:800;background:#f5f7fa;border:1px solid #e7ebf1;border-radius:6px;padding:6px 7px}.mini-flow i{font-style:normal;color:#a0a8b5;font-size:9px}

/* workflow */
.auto-flow{display:grid;grid-template-columns:repeat(6,1fr);gap:11px}
.auto-step{position:relative;text-align:center;padding:21px 10px;border:1px solid var(--line);border-radius:14px;background:#fff}
.auto-step:not(:last-child):after{content:"→";position:absolute;right:-14px;top:50%;transform:translateY(-50%);color:#9aa4b2;font-weight:900;z-index:3}
.auto-num{width:31px;height:31px;border-radius:50%;display:grid;place-items:center;margin:0 auto 10px;background:#eaf1ff;color:var(--blue);font-size:10px;font-weight:900}.auto-step strong{display:block;font-size:11px}.auto-step small{display:block;margin-top:5px;color:#8a93a3;font-size:9px;line-height:1.45}

/* builder explanation */
.builder-grid{display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center}
.rule-box{background:#fff;border:1px solid var(--line);border-radius:20px;padding:25px;box-shadow:0 22px 55px rgba(18,40,75,.08)}
.rule-label{font-size:9px;font-weight:850;color:#98a2b3;margin-bottom:7px}
.rule-select{border:1px solid #e2e7ee;border-radius:9px;padding:11px 12px;font-size:11px;font-weight:700;margin-bottom:13px;background:#fbfcfe}
.rule-plus{text-align:center;color:#98a2b3;font-size:12px;margin:-2px 0 10px}
.auto-checks{margin-top:24px}.auto-check{display:flex;gap:12px;margin:17px 0}.auto-check i{font-style:normal;width:25px;height:25px;border-radius:50%;display:grid;place-items:center;background:#e9f8ef;color:var(--green);font-size:12px;font-weight:900;flex:0 0 25px}.auto-check strong{font-size:14px}.auto-check p{font-size:13px;margin:4px 0 0;color:var(--muted)}

/* CTA */
.auto-cta{padding:42px 0 105px}.auto-cta-box{padding:56px;border-radius:27px;background:linear-gradient(135deg,#215af8,#173eb1);color:#fff;display:flex;align-items:center;justify-content:space-between;gap:35px;box-shadow:0 30px 70px rgba(33,90,248,.22)}
.auto-cta-box h2{font-size:clamp(30px,4vw,46px);margin:0 0 8px;color:#fff}.auto-cta-box p{margin:0;color:#dce5ff}.auto-cta-box .auto-btn{background:#fff;color:#15399e!important;white-space:nowrap}

@media(max-width:980px){.auto-hero-grid,.builder-grid{grid-template-columns:1fr}.auto-features{grid-template-columns:1fr 1fr}.use-grid{grid-template-columns:1fr 1fr}.auto-flow{grid-template-columns:repeat(2,1fr)}.auto-step:after{display:none}.auto-app{max-width:720px;margin:auto}.auto-cta-box{flex-direction:column;align-items:flex-start}}
@media(max-width:640px){.vf-auto-page .container{width:min(100% - 26px,1180px)}.auto-hero{padding:70px 0}.auto-hero h1{font-size:42px}.auto-features,.use-grid,.auto-flow{grid-template-columns:1fr}.auto-appbody{grid-template-columns:82px 1fr}.auto-floating{display:none}.builder{padding:18px 12px}.auto-section,.auto-usecases,.auto-flow-section,.auto-builder-section{padding:72px 0}.auto-cta-box{padding:35px 25px}}
</style>

<section class="auto-hero">
 <div class="container auto-hero-grid">
  <div class="auto-hero-copy">
   <div class="auto-eyebrow">VISTAARFLOW CRM AUTOMATION</div>
   <h1>Unlimited Automation. <em>Keep every lead moving forward.</em></h1>
   <p>Build CRM workflows for lead assignment, follow-ups, reminders, notifications and stage updates. Let VistaarFlow handle routine actions automatically while your team focuses on conversations and conversions.</p>
   <div class="auto-btns">
    <a class="auto-btn" href="https://app.vistaarflow.in/signup">Start 14 days free <span>→</span></a>
    <a class="auto-btn alt" href="#automation-features">Explore Automation</a>
   </div>
   <div class="auto-proof"><span>Workflow automation</span><span>Lead assignment</span><span>Follow-up actions</span></div>
  </div>

  <div class="auto-app" aria-label="VistaarFlow automation builder preview">
   <div class="auto-appbar"><i class="auto-dot"></i><i class="auto-dot"></i><i class="auto-dot"></i><span class="auto-app-title">VistaarFlow • Workflow Automation</span></div>
   <div class="auto-appbody">
    <aside class="auto-sidebar"><div class="auto-nav active">⚡ Workflows</div><div class="auto-nav">◉ Triggers</div><div class="auto-nav">◇ Conditions</div><div class="auto-nav">✓ Actions</div><div class="auto-nav">▣ Logs</div></aside>
    <div class="builder">
     <div class="builder-head"><strong>New Lead Follow-up</strong><span class="live-pill">● ACTIVE</span></div>
     <div class="flow-node trigger"><span class="node-icon">⚡</span><div class="node-copy"><small>TRIGGER</small><b>New lead created</b></div></div>
     <div class="flow-line"></div>
     <div class="flow-node condition"><span class="node-icon">◇</span><div class="node-copy"><small>CONDITION</small><b>Source = Facebook Lead</b></div></div>
     <div class="flow-line"></div>
     <div class="flow-node action"><span class="node-icon">↗</span><div class="node-copy"><small>ACTION</small><b>Assign lead owner</b></div></div>
     <div class="flow-line"></div>
     <div class="flow-node action"><span class="node-icon">✓</span><div class="node-copy"><small>ACTION</small><b>Create follow-up task</b></div></div>
     <div class="flow-line"></div>
     <div class="flow-node action"><span class="node-icon">◉</span><div class="node-copy"><small>ACTION</small><b>Notify assigned user</b></div></div>
    </div>
   </div>
   <span class="auto-floating one"><i>✓</i> Workflow active</span>
   <span class="auto-floating two"><i>⚡</i> Action completed automatically</span>
  </div>
 </div>
</section>

<section id="automation-features" class="auto-section">
 <div class="container">
  <div class="auto-heading">
   <div class="auto-eyebrow">AUTOMATION BUILT INTO YOUR CRM</div>
   <h2>Define the rules once.<br><em>Let the workflow continue.</em></h2>
   <p>Use triggers, conditions and actions to reduce repetitive CRM work and create a more consistent process for your team.</p>
  </div>
  <div class="auto-features">
   <article class="auto-card"><span class="auto-icon">⚡</span><h3>Workflow Triggers</h3><p>Start a configured workflow when a relevant CRM event occurs, such as a new lead entering your process.</p></article>
   <article class="auto-card"><span class="auto-icon">◇</span><h3>Conditions & Rules</h3><p>Use business rules to determine when the workflow should continue and which action should happen next.</p></article>
   <article class="auto-card"><span class="auto-icon">↗</span><h3>Automatic Assignment</h3><p>Route leads to the appropriate team member using your configured lead-assignment logic.</p></article>
   <article class="auto-card"><span class="auto-icon">✓</span><h3>Follow-up Actions</h3><p>Automate supported tasks, reminders, notifications and stage updates so routine work does not depend entirely on manual action.</p></article>
  </div>
 </div>
</section>

<section class="auto-usecases">
 <div class="container">
  <div class="auto-heading">
   <div class="auto-eyebrow">AUTOMATE EVERYDAY CRM WORK</div>
   <h2>Useful workflows for <em>growing businesses.</em></h2>
   <p>Build automation around the way your business already handles leads, customers and opportunities.</p>
  </div>
  <div class="use-grid">
   <article class="use-card"><div class="use-top"><span class="use-badge">01</span><h3>New Lead Assignment</h3></div><p>Automatically route an incoming lead using your configured assignment rules.</p><div class="mini-flow"><span>New Lead</span><i>→</i><span>Check Rule</span><i>→</i><span>Assign Owner</span></div></article>
   <article class="use-card"><div class="use-top"><span class="use-badge">02</span><h3>Follow-up Tasks</h3></div><p>Create supported follow-up actions when a lead reaches the relevant point in your process.</p><div class="mini-flow"><span>Lead Event</span><i>→</i><span>Create Task</span><i>→</i><span>Reminder</span></div></article>
   <article class="use-card"><div class="use-top"><span class="use-badge">03</span><h3>Pipeline Stage Updates</h3></div><p>Use configured workflow logic to support stage updates as your CRM process moves forward.</p><div class="mini-flow"><span>Condition</span><i>→</i><span>Update Stage</span><i>→</i><span>Notify</span></div></article>
   <article class="use-card"><div class="use-top"><span class="use-badge">04</span><h3>Team Notifications</h3></div><p>Notify the relevant user when important CRM activity requires their attention.</p><div class="mini-flow"><span>CRM Event</span><i>→</i><span>Find User</span><i>→</i><span>Notify</span></div></article>
   <article class="use-card"><div class="use-top"><span class="use-badge">05</span><h3>Lead Source Workflows</h3></div><p>Create different processes for website, Meta, WhatsApp or other supported lead sources.</p><div class="mini-flow"><span>Lead Source</span><i>→</i><span>Condition</span><i>→</i><span>Action</span></div></article>
   <article class="use-card"><div class="use-top"><span class="use-badge">06</span><h3>Custom Business Processes</h3></div><p>Use pipelines and automation for sales, support, admissions, bookings, site visits, renewals and other custom workflows.</p><div class="mini-flow"><span>Trigger</span><i>→</i><span>Rules</span><i>→</i><span>Actions</span></div></article>
  </div>
 </div>
</section>

<section class="auto-flow-section">
 <div class="container">
  <div class="auto-heading">
   <div class="auto-eyebrow">EXAMPLE AUTOMATION</div>
   <h2>A new lead arrives. <em>VistaarFlow takes the next steps.</em></h2>
   <p>A configured workflow can connect lead capture with assignment, CRM tasks, notifications and pipeline activity.</p>
  </div>
  <div class="auto-flow">
   <div class="auto-step"><span class="auto-num">01</span><strong>Lead Captured</strong><small>Website, Meta or another source</small></div>
   <div class="auto-step"><span class="auto-num">02</span><strong>Rules Checked</strong><small>Workflow evaluates conditions</small></div>
   <div class="auto-step"><span class="auto-num">03</span><strong>Owner Assigned</strong><small>Lead goes to the right user</small></div>
   <div class="auto-step"><span class="auto-num">04</span><strong>Task Created</strong><small>Follow-up action is prepared</small></div>
   <div class="auto-step"><span class="auto-num">05</span><strong>User Notified</strong><small>Team member sees the action</small></div>
   <div class="auto-step"><span class="auto-num">06</span><strong>Lead Progresses</strong><small>Continue through the pipeline</small></div>
  </div>
 </div>
</section>

<section class="auto-builder-section">
 <div class="container builder-grid">
  <div class="auto-copy">
   <div class="auto-eyebrow">TRIGGER → CONDITION → ACTION</div>
   <h2>Build automation around <em>your business process.</em></h2>
   <p>Your pipeline can be different from another business. VistaarFlow automation is designed to support configurable workflows so you can connect CRM events with the actions your team needs.</p>
   <div class="auto-checks">
    <div class="auto-check"><i>✓</i><div><strong>Start with a trigger</strong><p>Choose the CRM event that should begin the workflow.</p></div></div>
    <div class="auto-check"><i>✓</i><div><strong>Add conditions</strong><p>Use relevant rules to control when particular actions should run.</p></div></div>
    <div class="auto-check"><i>✓</i><div><strong>Choose actions</strong><p>Configure supported actions such as assignment, tasks, reminders, notifications and stage updates.</p></div></div>
   </div>
  </div>
  <div class="rule-box">
   <div class="rule-label">WHEN THIS HAPPENS</div>
   <div class="rule-select">⚡ New lead is created</div>
   <div class="rule-plus">＋</div>
   <div class="rule-label">ONLY IF</div>
   <div class="rule-select">◇ Lead source equals Facebook</div>
   <div class="rule-plus">＋</div>
   <div class="rule-label">DO THIS</div>
   <div class="rule-select">↗ Assign lead to Admissions Team</div>
   <div class="rule-plus">＋</div>
   <div class="rule-select">✓ Create follow-up task</div>
   <div class="rule-plus">＋</div>
   <div class="rule-select">◉ Send team notification</div>
  </div>
 </div>
</section>

<section class="auto-cta">
 <div class="container">
  <div class="auto-cta-box">
   <div><h2>Spend less time on repetitive CRM work.</h2><p>Build workflows that help your team assign, follow up and move leads through your process consistently.</p></div>
   <a class="auto-btn" href="https://app.vistaarflow.in/signup">Start 14 days free <span>→</span></a>
  </div>
 </div>
</section>

</main>

<?php get_footer(); ?>
