<?php get_header(); ?>

<main id="main" class="la-page">

<style>
.la-page{--blue:#215af8;--navy:#0b1220;--muted:#667085;--line:#e5eaf1;--soft:#f7f9fc;--green:#17a768;background:#fff;color:var(--navy);overflow:hidden}
.la-page *{box-sizing:border-box}
.la-page .container{width:min(1180px,calc(100% - 40px));margin:auto}
.lax-la-eyebrow{font-size:12px;font-weight:850;letter-spacing:1.5px;color:var(--blue);text-transform:uppercase;margin-bottom:14px}
.lax-la-hero{padding:92px 0 100px;background:radial-gradient(circle at 82% 22%,#e8efff 0,transparent 34%),linear-gradient(180deg,#fff,#f8faff)}
.lax-la-hero-grid{display:grid;grid-template-columns:.92fr 1.08fr;gap:68px;align-items:center}
.lax-la-hero h1{font-size:clamp(43px,5vw,68px);line-height:1.02;letter-spacing:-.045em;margin:0 0 22px;font-weight:850}
.lax-la-hero h1 em,.lax-la-heading h2 em,.lax-la-copy h2 em{font-style:normal;color:var(--blue)}
.lax-la-hero-copy>p{font-size:18px;line-height:1.7;color:var(--muted);max-width:650px;margin:0 0 28px}
.lax-la-btns{display:flex;gap:12px;flex-wrap:wrap}.lax-la-btn{display:inline-flex;align-items:center;gap:9px;padding:13px 20px;border-radius:10px;background:var(--blue);color:#fff!important;text-decoration:none!important;font-weight:750;box-shadow:0 10px 25px rgba(33,90,248,.18)}.lax-la-btn.lax-alt{background:#fff;color:var(--navy)!important;border:1px solid var(--line);box-shadow:none}
.lax-la-proof{display:flex;gap:22px;flex-wrap:wrap;margin-top:25px;color:#475467;font-size:13px;font-weight:700}.lax-la-proof span:before{content:"✓";color:var(--green);margin-right:6px}

/* Hero assignment UI */
.lax-assign-app{background:#fff;border:1px solid #dfe6ef;border-radius:22px;box-shadow:0 28px 80px rgba(30,55,90,.14);overflow:hidden;position:relative}
.lax-appbar{height:45px;border-bottom:1px solid #e9edf3;display:flex;align-items:center;padding:0 15px;gap:6px;background:#fbfcfe}.lax-dot{width:8px;height:8px;border-radius:50%;background:#d9dee7}.lax-app-title{font-size:11px;font-weight:750;color:#7a8494;margin-left:8px}
.lax-appbody{display:grid;grid-template-columns:105px 1fr;min-height:440px}.lax-sidebar{padding:18px 7px;border-right:1px solid #edf0f5;background:#f8faff}.lax-nav{padding:10px 7px;border-radius:8px;font-size:9px;font-weight:750;color:#667085;margin-bottom:6px}.lax-nav.lax-active{background:#e9f1ff;color:#215af8}
.lax-assign-main{padding:20px}.lax-assign-head{display:flex;justify-content:space-between;align-items:center;margin-bottom:16px}.lax-assign-head strong{font-size:12px}.lax-active-pill{font-size:8px;padding:5px 8px;border-radius:999px;background:#e9f8ef;color:#12824e;font-weight:850}
.lax-lead-row{border:1px solid #e6eaf0;border-radius:11px;padding:11px 12px;margin-bottom:8px;display:grid;grid-template-columns:30px 1fr auto;gap:9px;align-items:center}.lax-avatar{width:30px;height:30px;border-radius:50%;display:grid;place-items:center;background:#eaf1ff;color:#215af8;font-size:8px;font-weight:900}.lax-lead-row b{font-size:9px;display:block}.lax-lead-row small{font-size:7px;color:#98a2b3}.lax-agent{font-size:8px;font-weight:850;padding:5px 7px;border-radius:6px;background:#f4f6f9;color:#475467}
.lax-rr-box{margin-top:13px;border:1px solid #dce5ff;background:#f7f9ff;border-radius:12px;padding:12px}.lax-rr-title{font-size:8px;color:#215af8;font-weight:900;margin-bottom:9px}.lax-rr-agents{display:flex;gap:7px}.lax-rr-agent{flex:1;text-align:center;background:#fff;border:1px solid #e3e8f1;border-radius:8px;padding:8px 4px}.lax-rr-agent i{width:25px;height:25px;border-radius:50%;background:#edf2ff;display:grid;place-items:center;margin:0 auto 4px;font-style:normal;font-size:7px;font-weight:900;color:#215af8}.lax-rr-agent b{font-size:7px;display:block}.lax-rr-agent small{font-size:6px;color:#98a2b3}.lax-rr-agent.lax-next{border-color:#215af8;box-shadow:0 0 0 2px #e8efff}
.lax-la-floating{position:absolute;background:#fff;border:1px solid #e2e7ee;border-radius:10px;padding:9px 12px;font-size:9px;font-weight:800;box-shadow:0 12px 30px rgba(18,40,75,.13)}.lax-la-floating.lax-one{right:15px;top:63px}.lax-la-floating.lax-two{left:120px;bottom:15px}.lax-la-floating i{font-style:normal;color:var(--green)}

/* Sections */
.lax-la-section,.lax-la-round,.lax-la-rules,.lax-la-flow-section{padding:95px 0}.lax-la-round,.lax-la-rules{background:#f7f9fc}
.lax-la-heading{text-align:center;max-width:790px;margin:0 auto 46px}.lax-la-heading h2,.lax-la-copy h2{font-size:clamp(32px,4vw,50px);line-height:1.1;letter-spacing:-.035em;margin:0 0 14px}.lax-la-heading p,.lax-la-copy p{color:var(--muted);line-height:1.7;margin:0}
.lax-la-features{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}.lax-la-card{padding:26px;border:1px solid var(--line);border-radius:17px;background:#fff;box-shadow:0 7px 26px rgba(16,32,56,.035)}.lax-la-icon{width:42px;height:42px;border-radius:11px;display:grid;place-items:center;background:#eaf1ff;color:var(--blue);font-weight:900;margin-bottom:17px}.lax-la-card h3{font-size:17px;margin:0 0 9px}.lax-la-card p{font-size:14px;line-height:1.65;color:var(--muted);margin:0}

/* Round robin */
.lax-la-grid{display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center}.lax-round-box{background:#fff;border:1px solid var(--line);border-radius:20px;padding:27px;box-shadow:0 22px 55px rgba(18,40,75,.08)}.lax-incoming{text-align:center;border:1px solid #dce5ff;background:#f7f9ff;border-radius:11px;padding:12px;font-size:10px;font-weight:850;color:#215af8;max-width:250px;margin:auto}.lax-down{height:26px;width:2px;background:#dce2ea;margin:auto;position:relative}.lax-down:after{content:"▼";position:absolute;bottom:-5px;left:50%;transform:translateX(-50%);font-size:7px;color:#a4adba}.lax-team{display:grid;grid-template-columns:repeat(3,1fr);gap:9px}.lax-team-member{text-align:center;border:1px solid #e5e9ef;border-radius:11px;padding:13px 5px}.lax-team-member.lax-next{border-color:#215af8;background:#f7f9ff}.lax-team-member i{width:36px;height:36px;border-radius:50%;display:grid;place-items:center;background:#eaf1ff;color:#215af8;font-style:normal;font-size:9px;font-weight:900;margin:0 auto 7px}.lax-team-member b{font-size:9px;display:block}.lax-team-member small{font-size:7px;color:#98a2b3}.lax-queue{display:flex;justify-content:center;align-items:center;gap:7px;margin-top:14px;font-size:8px;color:#667085}.lax-queue span{padding:5px 7px;border-radius:6px;background:#f3f5f8;font-weight:800}.lax-queue strong{color:#215af8}
.lax-la-checks{margin-top:24px}.lax-la-check{display:flex;gap:12px;margin:17px 0}.lax-la-check i{font-style:normal;width:25px;height:25px;border-radius:50%;display:grid;place-items:center;background:#e9f8ef;color:var(--green);font-size:12px;font-weight:900;flex:0 0 25px}.lax-la-check strong{font-size:14px}.lax-la-check p{font-size:13px;margin:4px 0 0;color:var(--muted)}

/* Rules */
.lax-rule-box{background:#fff;border:1px solid var(--line);border-radius:20px;padding:25px;box-shadow:0 22px 55px rgba(18,40,75,.08)}.lax-rule-label{font-size:8px;font-weight:900;color:#98a2b3;margin:0 0 6px}.lax-rule-select{padding:11px 12px;border:1px solid #e4e8ef;background:#fbfcfe;border-radius:8px;font-size:10px;font-weight:750;margin-bottom:12px}.lax-rule-plus{text-align:center;color:#9aa4b2;margin:-3px 0 9px}.lax-priority-row{display:grid;grid-template-columns:32px 1fr auto;gap:9px;align-items:center;padding:10px;border:1px solid #e6eaf0;border-radius:9px;margin:7px 0}.lax-priority-num{width:25px;height:25px;border-radius:7px;background:#eaf1ff;color:#215af8;display:grid;place-items:center;font-size:8px;font-weight:900}.lax-priority-row b{font-size:9px}.lax-priority-row small{font-size:7px;color:#98a2b3}.lax-priority-tag{font-size:7px;font-weight:850;color:#667085}

/* flow */
.lax-la-flow{display:grid;grid-template-columns:repeat(6,1fr);gap:11px}.lax-la-step{position:relative;text-align:center;padding:21px 10px;border:1px solid var(--line);border-radius:14px;background:#fff}.lax-la-step:not(:last-child):after{content:"→";position:absolute;right:-14px;top:50%;transform:translateY(-50%);color:#9aa4b2;font-weight:900;z-index:3}.lax-la-num{width:31px;height:31px;border-radius:50%;display:grid;place-items:center;margin:0 auto 10px;background:#eaf1ff;color:#215af8;font-size:10px;font-weight:900}.lax-la-step strong{display:block;font-size:11px}.lax-la-step small{display:block;margin-top:5px;color:#8a93a3;font-size:9px;line-height:1.45}

/* CTA */
.lax-la-cta{padding:42px 0 105px}.lax-la-cta-box{padding:56px;border-radius:27px;background:linear-gradient(135deg,#215af8,#173eb1);color:#fff;display:flex;align-items:center;justify-content:space-between;gap:35px;box-shadow:0 30px 70px rgba(33,90,248,.22)}.lax-la-cta-box h2{font-size:clamp(30px,4vw,46px);margin:0 0 8px;color:#fff}.lax-la-cta-box p{margin:0;color:#dce5ff}.lax-la-cta-box .lax-la-btn{background:#fff;color:#15399e!important;white-space:nowrap}
@media(max-width:980px){.lax-la-hero-grid,.lax-la-grid{grid-template-columns:1fr}.lax-la-features{grid-template-columns:1fr 1fr}.lax-la-flow{grid-template-columns:repeat(2,1fr)}.lax-la-step:after{display:none}.lax-assign-app{max-width:720px;margin:auto}.lax-la-cta-box{flex-direction:column;align-items:flex-start}}
@media(max-width:640px){.la-page .container{width:min(100% - 26px,1180px)}.lax-la-hero{padding:70px 0}.lax-la-hero h1{font-size:42px}.lax-la-features,.lax-la-flow{grid-template-columns:1fr}.lax-appbody{grid-template-columns:82px 1fr}.lax-la-floating{display:none}.lax-la-section,.lax-la-round,.lax-la-rules,.lax-la-flow-section{padding:72px 0}.lax-la-cta-box{padding:35px 25px}}
</style>

<section class="lax-la-hero">
 <div class="container lax-la-hero-grid">
  <div class="lax-la-hero-copy">
   <div class="lax-la-eyebrow">VISTAARFLOW AUTOMATIC LEAD ASSIGNMENT</div>
   <h1>Send every new lead to <em>the right co-agent automatically.</em></h1>
   <p>Distribute incoming leads across your team using configured assignment rules. With multiple co-agents, round-robin distribution rotates new leads through the assignment sequence, so nobody has to choose an owner manually every time.</p>
   <div class="lax-la-btns"><a class="lax-la-btn" href="https://app.vistaarflow.in/signup">Start 14 days free <span>→</span></a><a class="lax-la-btn lax-alt" href="#assignment-features">Explore Lead Assignment</a></div>
   <div class="lax-la-proof"><span>Automatic assignment</span><span>Multiple co-agents</span><span>Round-robin distribution</span></div>
  </div>

  <div class="lax-assign-app">
   <div class="lax-appbar"><i class="lax-dot"></i><i class="lax-dot"></i><i class="lax-dot"></i><span class="lax-app-title">VistaarFlow • Lead Assignment</span></div>
   <div class="lax-appbody">
    <aside class="lax-sidebar"><div class="lax-nav lax-active">↗ Assignment</div><div class="lax-nav">◉ Leads</div><div class="lax-nav">♟ Team</div><div class="lax-nav">⚙ Rules</div><div class="lax-nav">▣ Logs</div></aside>
    <div class="lax-assign-main">
     <div class="lax-assign-head"><strong>Recent Lead Assignments</strong><span class="lax-active-pill">● ROUND ROBIN ACTIVE</span></div>
     <div class="lax-lead-row"><span class="lax-avatar">RS</span><div><b>Rahul Sharma</b><small>Website Lead</small></div><span class="lax-agent">→ Aisha</span></div>
     <div class="lax-lead-row"><span class="lax-avatar">AP</span><div><b>Ananya Patel</b><small>Meta Lead</small></div><span class="lax-agent">→ Rohan</span></div>
     <div class="lax-lead-row"><span class="lax-avatar">VM</span><div><b>Vikram Mehta</b><small>Website Lead</small></div><span class="lax-agent">→ Neha</span></div>
     <div class="lax-rr-box"><div class="lax-rr-title">NEXT ASSIGNMENT SEQUENCE</div><div class="lax-rr-agents"><div class="lax-rr-agent lax-next"><i>AK</i><b>Aisha</b><small>Next</small></div><div class="lax-rr-agent"><i>RK</i><b>Rohan</b><small>Then</small></div><div class="lax-rr-agent"><i>NS</i><b>Neha</b><small>Then</small></div></div></div>
    </div>
   </div>
   <span class="lax-la-floating lax-one"><i>✓</i> New lead assigned</span><span class="lax-la-floating lax-two"><i>↻</i> Round robin continues</span>
  </div>
 </div>
</section>

<section id="assignment-features" class="lax-la-section">
 <div class="container">
  <div class="lax-la-heading"><div class="lax-la-eyebrow">AUTOMATIC LEAD DISTRIBUTION</div><h2>No more manually deciding <em>who gets the next lead.</em></h2><p>Set up your assignment process once and let VistaarFlow route every incoming lead to the right co-agent based on your configured rules.</p></div>
  <div class="lax-la-features">
   <article class="lax-la-card"><span class="lax-la-icon">⚡</span><h3>Automatic Assignment</h3><p>Assign incoming leads to a configured team member automatically, without selecting an owner for every enquiry.</p></article>
   <article class="lax-la-card"><span class="lax-la-icon">↻</span><h3>Round Robin</h3><p>Rotate lead assignments across multiple co-agents in sequence for a fair and structured distribution process.</p></article>
   <article class="lax-la-card"><span class="lax-la-icon">⚙</span><h3>Assignment Rules</h3><p>Configure rules around your business process so that different types of leads follow the appropriate assignment path.</p></article>
   <article class="lax-la-card"><span class="lax-la-icon">♟</span><h3>Multiple Co-Agents</h3><p>Add multiple team members to your assignment process and keep lead ownership clearly visible inside the CRM.</p></article>
  </div>
 </div>
</section>

<section class="lax-la-round">
 <div class="container lax-la-grid">
  <div class="lax-round-box">
   <div class="lax-incoming">NEW LEAD RECEIVED</div><div class="lax-down"></div>
   <div class="lax-team"><div class="lax-team-member lax-next"><i>AK</i><b>Aisha</b><small>Gets Lead #4</small></div><div class="lax-team-member"><i>RK</i><b>Rohan</b><small>Gets Lead #5</small></div><div class="lax-team-member"><i>NS</i><b>Neha</b><small>Gets Lead #6</small></div></div>
   <div class="lax-queue"><span>Lead #1 → Aisha</span><strong>→</strong><span>#2 → Rohan</span><strong>→</strong><span>#3 → Neha</span></div>
  </div>
  <div class="lax-la-copy">
   <div class="lax-la-eyebrow">ROUND-ROBIN LEAD ASSIGNMENT</div><h2>Rotate new leads across <em>multiple co-agents.</em></h2><p>When several co-agents handle the same type of lead, round robin moves through the configured sequence one agent at a time and then starts the rotation again.</p>
   <div class="lax-la-checks"><div class="lax-la-check"><i>✓</i><div><strong>Sequential distribution</strong><p>Each new eligible lead goes to the next co-agent in the configured rotation.</p></div></div><div class="lax-la-check"><i>✓</i><div><strong>Less manual routing</strong><p>Managers no longer need to pick an agent each time a matching lead arrives.</p></div></div><div class="lax-la-check"><i>✓</i><div><strong>Clear lead ownership</strong><p>Once a lead is assigned, the CRM shows which co-agent owns it for follow-up.</p></div></div></div>
  </div>
 </div>
</section>

<section class="lax-la-rules">
 <div class="container lax-la-grid">
  <div class="lax-la-copy">
   <div class="lax-la-eyebrow">ASSIGNMENT RULES</div><h2>Route leads based on <em>your business setup.</em></h2><p>Use assignment rules to decide which team or co-agent group receives a lead, then apply the distribution method that suits your process.</p>
   <div class="lax-la-checks"><div class="lax-la-check"><i>✓</i><div><strong>Lead source</strong><p>Create routing logic for leads from supported sources such as website forms or Meta leads.</p></div></div><div class="lax-la-check"><i>✓</i><div><strong>Business-specific fields</strong><p>Use relevant CRM information and custom fields in your rules, where supported.</p></div></div><div class="lax-la-check"><i>✓</i><div><strong>Rule priority</strong><p>Keep multiple assignment rules in a deliberate order of evaluation.</p></div></div></div>
  </div>
  <div class="lax-rule-box"><div class="lax-rule-label">WHEN</div><div class="lax-rule-select">New lead is received</div><div class="lax-rule-plus">＋</div><div class="lax-rule-label">IF</div><div class="lax-rule-select">Lead Source = Website / Meta</div><div class="lax-rule-plus">↓</div><div class="lax-rule-label">ASSIGN USING</div><div class="lax-rule-select">↻ Round Robin — Co-Agent Team</div><div style="margin-top:15px"><div class="lax-priority-row"><span class="lax-priority-num">1</span><div><b>Aisha Khan</b><small>Co-Agent</small></div><span class="lax-priority-tag">ACTIVE</span></div><div class="lax-priority-row"><span class="lax-priority-num">2</span><div><b>Rohan Kapoor</b><small>Co-Agent</small></div><span class="lax-priority-tag">ACTIVE</span></div><div class="lax-priority-row"><span class="lax-priority-num">3</span><div><b>Neha Shah</b><small>Co-Agent</small></div><span class="lax-priority-tag">ACTIVE</span></div></div></div>
 </div>
</section>

<section class="lax-la-flow-section">
 <div class="container">
  <div class="lax-la-heading"><div class="lax-la-eyebrow">AUTOMATED ASSIGNMENT FLOW</div><h2>From incoming lead to <em>assigned co-agent.</em></h2><p>Connect lead capture directly with ownership and follow-up.</p></div>
  <div class="lax-la-flow"><div class="lax-la-step"><span class="lax-la-num">01</span><strong>Lead Arrives</strong><small>From your website, Meta or another source</small></div><div class="lax-la-step"><span class="lax-la-num">02</span><strong>Rules Checked</strong><small>The matching assignment rule is evaluated</small></div><div class="lax-la-step"><span class="lax-la-num">03</span><strong>Team Selected</strong><small>The relevant co-agent group is chosen</small></div><div class="lax-la-step"><span class="lax-la-num">04</span><strong>Round Robin</strong><small>The next agent in sequence is selected</small></div><div class="lax-la-step"><span class="lax-la-num">05</span><strong>Owner Assigned</strong><small>Lead ownership is updated in the CRM</small></div><div class="lax-la-step"><span class="lax-la-num">06</span><strong>Follow-up</strong><small>The agent continues the customer journey</small></div></div>
 </div>
</section>

<section class="lax-la-cta"><div class="container"><div class="lax-la-cta-box"><div><h2>Distribute leads without the manual shuffle.</h2><p>Automatically assign incoming leads across your co-agent team and keep every lead connected to a clear owner.</p></div><a class="lax-la-btn" href="https://app.vistaarflow.in/signup">Start 14 days free <span>→</span></a></div></div></section>

</main>

<?php get_footer(); ?>