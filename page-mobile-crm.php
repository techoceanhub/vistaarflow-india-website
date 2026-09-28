<?php get_header(); ?>

<main id="main" class="vf-mobile-page">

<style>
.vf-mobile-page{--blue:#215af8;--navy:#0b1220;--muted:#667085;--line:#e5eaf1;--soft:#f6f8fc;--green:#17a768;background:#fff;color:var(--navy);overflow:hidden}
.vf-mobile-page *{box-sizing:border-box}
.vf-mobile-page .container{width:min(1180px,calc(100% - 40px));margin:auto}
.mob-eyebrow{font-size:12px;font-weight:850;letter-spacing:1.5px;color:var(--blue);text-transform:uppercase;margin-bottom:14px}
.mob-hero{padding:90px 0 100px;background:radial-gradient(circle at 82% 25%,#e9efff 0,transparent 34%),linear-gradient(180deg,#fff,#f8faff)}
.mob-hero-grid{display:grid;grid-template-columns:.92fr 1.08fr;gap:70px;align-items:center}
.mob-hero h1{font-size:clamp(43px,5vw,68px);line-height:1.02;letter-spacing:-.045em;margin:0 0 22px;font-weight:850}
.mob-hero h1 em,.mob-heading h2 em,.mob-show h2 em{font-style:normal;color:var(--blue)}
.mob-hero-copy>p{font-size:18px;line-height:1.7;color:var(--muted);max-width:650px;margin:0 0 28px}
.mob-btns{display:flex;gap:12px;flex-wrap:wrap}
.mob-btn{display:inline-flex;align-items:center;gap:9px;padding:13px 20px;border-radius:10px;background:var(--blue);color:#fff!important;text-decoration:none!important;font-weight:750;box-shadow:0 10px 25px rgba(33,90,248,.18)}
.mob-btn.alt{background:#fff;color:var(--navy)!important;border:1px solid var(--line);box-shadow:none}
.mob-proof{display:flex;gap:22px;flex-wrap:wrap;margin-top:25px;color:#475467;font-size:13px;font-weight:700}
.mob-proof span:before{content:"✓";color:var(--green);margin-right:6px}

/* Phone hero */
.phone-stage{position:relative;min-height:570px;display:flex;justify-content:center;align-items:center}
.phone{position:absolute;width:245px;height:505px;border:8px solid #101522;border-radius:42px;background:#fff;box-shadow:0 30px 70px rgba(20,37,70,.22);overflow:hidden}
.phone.one{transform:translateX(-105px) rotate(-5deg);z-index:1}.phone.two{transform:translateX(105px) translateY(20px) rotate(5deg);z-index:2}
.phone-notch{position:absolute;top:7px;left:50%;transform:translateX(-50%);width:80px;height:20px;background:#101522;border-radius:20px;z-index:5}
.phone-screen{height:100%;padding:38px 13px 15px;background:#f7f9fc}
.app-top{display:flex;justify-content:space-between;align-items:center;margin-bottom:15px}.app-top b{font-size:13px}.app-avatar{width:27px;height:27px;border-radius:50%;display:grid;place-items:center;background:#e7efff;color:#215af8;font-size:9px;font-weight:850}
.app-card{background:#fff;border:1px solid #e6eaf0;border-radius:13px;padding:13px;margin-bottom:10px;box-shadow:0 4px 14px rgba(12,29,55,.04)}
.app-card small{font-size:8px;color:#8b95a5;display:block}.app-card strong{font-size:12px;display:block;margin-top:4px}.app-card p{font-size:9px;color:#667085;line-height:1.5;margin:5px 0 0}
.stat-row{display:grid;grid-template-columns:1fr 1fr;gap:8px}.stat{background:#fff;border:1px solid #e6eaf0;border-radius:11px;padding:11px}.stat b{font-size:17px;display:block}.stat small{font-size:8px;color:#8a93a3}
.lead-item{display:flex;gap:8px;align-items:center;padding:9px 0;border-bottom:1px solid #edf0f4}.lead-dot{width:28px;height:28px;border-radius:50%;background:#eaf1ff;display:grid;place-items:center;color:#215af8;font-size:8px;font-weight:850}.lead-item b{font-size:9px;display:block}.lead-item small{font-size:7px;color:#98a2b3}
.push{background:#fff;border:1px solid #e4e8ef;border-radius:13px;padding:11px;margin-bottom:9px;box-shadow:0 7px 20px rgba(13,31,60,.06)}.push-head{display:flex;justify-content:space-between;font-size:8px;color:#7f8998}.push strong{font-size:10px;display:block;margin:6px 0 3px}.push p{font-size:8px;color:#667085;margin:0;line-height:1.45}
.mobile-float{position:absolute;z-index:4;background:#fff;border:1px solid #e2e7ee;border-radius:11px;padding:10px 13px;box-shadow:0 15px 35px rgba(18,40,75,.13);font-size:10px;font-weight:800}.mobile-float.a{right:0;top:105px}.mobile-float.b{left:0;bottom:100px}.mobile-float i{font-style:normal;color:var(--green)}

/* Sections */
.mob-section,.mob-show,.mob-notify,.mob-anywhere{padding:95px 0}
.mob-show,.mob-notify{background:#f7f9fc}
.mob-heading{text-align:center;max-width:770px;margin:0 auto 46px}
.mob-heading h2,.mob-show h2,.mob-anywhere h2{font-size:clamp(32px,4vw,50px);line-height:1.1;letter-spacing:-.035em;margin:0 0 14px}
.mob-heading p,.mob-show p,.mob-anywhere p{color:var(--muted);line-height:1.7;margin:0}
.mob-features{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
.mob-card{padding:26px;border:1px solid var(--line);border-radius:17px;background:#fff;box-shadow:0 7px 26px rgba(16,32,56,.035)}
.mob-icon{width:42px;height:42px;border-radius:11px;display:grid;place-items:center;background:#eaf1ff;color:var(--blue);font-weight:900;margin-bottom:17px}
.mob-card h3{font-size:17px;margin:0 0 9px}.mob-card p{font-size:14px;line-height:1.65;color:var(--muted);margin:0}

/* Push section */
.notify-grid,.anywhere-grid,.show-grid{display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center}
.notify-stack{max-width:500px;margin:auto}
.notify-card{background:#fff;border:1px solid #e4e9f0;border-radius:17px;padding:16px 18px;margin:12px 0;display:flex;gap:13px;box-shadow:0 13px 35px rgba(16,35,68,.07)}
.notify-logo{width:38px;height:38px;flex:0 0 38px;border-radius:10px;background:linear-gradient(135deg,#215af8,#55a0ff);display:grid;place-items:center;color:#fff;font-size:14px;font-weight:900}
.notify-card small{color:#98a2b3;font-size:9px}.notify-card strong{display:block;font-size:13px;margin:2px 0 4px}.notify-card p{font-size:11px;line-height:1.5;margin:0;color:#667085}
.mob-checks{margin-top:24px}.mob-check{display:flex;gap:12px;margin:17px 0}.mob-check i{font-style:normal;width:25px;height:25px;border-radius:50%;display:grid;place-items:center;background:#e9f8ef;color:var(--green);font-size:12px;font-weight:900;flex:0 0 25px}.mob-check strong{font-size:14px}.mob-check p{font-size:13px;margin:4px 0 0;color:var(--muted)}

/* Mobile workflow */
.mob-flow{display:grid;grid-template-columns:repeat(5,1fr);gap:12px;margin-top:44px}
.mob-step{position:relative;text-align:center;padding:22px 12px;border:1px solid var(--line);border-radius:15px;background:#fff}
.mob-step:not(:last-child):after{content:"→";position:absolute;right:-15px;top:50%;transform:translateY(-50%);color:#9aa4b2;font-weight:900;z-index:3}
.mob-num{width:32px;height:32px;border-radius:50%;display:grid;place-items:center;margin:0 auto 10px;background:#eaf1ff;color:var(--blue);font-size:10px;font-weight:900}.mob-step strong{display:block;font-size:12px}.mob-step small{display:block;margin-top:5px;color:#8a93a3;font-size:9px;line-height:1.45}

/* platform */
.platforms{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:25px}
.platform{border:1px solid var(--line);border-radius:15px;padding:20px;background:#fff}.platform span{font-size:24px;display:block;margin-bottom:10px}.platform strong{font-size:15px}.platform p{font-size:12px;margin:6px 0 0;color:#667085}
.crm-preview{background:#fff;border:1px solid var(--line);border-radius:20px;padding:24px;box-shadow:0 22px 55px rgba(18,40,75,.08)}
.crm-row{display:flex;align-items:center;justify-content:space-between;padding:13px;border-bottom:1px solid #edf0f4}.crm-row:last-child{border:0}.crm-row div strong{display:block;font-size:12px}.crm-row div small{color:#98a2b3;font-size:9px}.crm-status{font-size:8px;font-weight:850;padding:5px 8px;border-radius:999px;background:#e9f8ef;color:#12824e}

/* CTA */
.mob-cta{padding:42px 0 105px}.mob-cta-box{padding:56px;border-radius:27px;background:linear-gradient(135deg,#215af8,#173eb1);color:#fff;display:flex;align-items:center;justify-content:space-between;gap:35px;box-shadow:0 30px 70px rgba(33,90,248,.22)}
.mob-cta-box h2{font-size:clamp(30px,4vw,46px);margin:0 0 8px;color:#fff}.mob-cta-box p{margin:0;color:#dce5ff}.mob-cta-box .mob-btn{background:#fff;color:#15399e!important;white-space:nowrap}

@media(max-width:980px){.mob-hero-grid,.notify-grid,.anywhere-grid,.show-grid{grid-template-columns:1fr}.mob-features{grid-template-columns:1fr 1fr}.phone-stage{max-width:650px;margin:auto}.mob-flow{grid-template-columns:1fr 1fr}.mob-step:after{display:none}.mob-cta-box{flex-direction:column;align-items:flex-start}}
@media(max-width:640px){.vf-mobile-page .container{width:min(100% - 26px,1180px)}.mob-hero{padding:70px 0}.mob-hero h1{font-size:42px}.mob-features,.mob-flow,.platforms{grid-template-columns:1fr}.phone-stage{min-height:520px;transform:scale(.82);margin:-30px -45px}.mobile-float{display:none}.mob-section,.mob-show,.mob-notify,.mob-anywhere{padding:72px 0}.mob-cta-box{padding:35px 25px}}
</style>

<section class="mob-hero">
 <div class="container mob-hero-grid">
  <div class="mob-hero-copy">
   <div class="mob-eyebrow">VISTAARFLOW MOBILE CRM</div>
   <h1>Your CRM in your pocket. <em>Your leads always within reach.</em></h1>
   <p>Access VistaarFlow from your mobile device and stay connected to leads, opportunities, tasks and customer activity while you're away from your desk. With mobile push notifications, important CRM updates can reach your team on iOS and Android.</p>
   <div class="mob-btns">
    <a class="mob-btn" href="https://app.vistaarflow.in/signup">Start 14 days free <span>→</span></a>
    <a class="mob-btn alt" href="#mobile-features">Explore Mobile CRM</a>
   </div>
   <div class="mob-proof"><span>iOS app</span><span>Android app</span><span>Push notifications</span></div>
  </div>

  <div class="phone-stage" aria-label="VistaarFlow mobile CRM preview">
   <div class="phone one">
    <span class="phone-notch"></span>
    <div class="phone-screen">
     <div class="app-top"><b>Good morning 👋</b><span class="app-avatar">VF</span></div>
     <div class="stat-row"><div class="stat"><small>New Leads</small><b>18</b></div><div class="stat"><small>Tasks Today</small><b>07</b></div></div>
     <div class="app-card" style="margin-top:10px"><small>RECENT LEADS</small>
      <div class="lead-item"><span class="lead-dot">RS</span><div><b>Rahul Sharma</b><small>Facebook Lead • New</small></div></div>
      <div class="lead-item"><span class="lead-dot">AP</span><div><b>Ananya Patel</b><small>Website • Qualified</small></div></div>
      <div class="lead-item"><span class="lead-dot">VM</span><div><b>Vikram Mehta</b><small>WhatsApp • Follow-up</small></div></div>
     </div>
     <div class="app-card"><small>UPCOMING TASK</small><strong>Follow up with Rahul</strong><p>Today • 4:30 PM</p></div>
    </div>
   </div>

   <div class="phone two">
    <span class="phone-notch"></span>
    <div class="phone-screen">
     <div class="app-top"><b>Notifications</b><span class="app-avatar">3</span></div>
     <div class="push"><div class="push-head"><span>VistaarFlow</span><span>now</span></div><strong>New lead received</strong><p>Rahul Sharma submitted a Facebook lead form.</p></div>
     <div class="push"><div class="push-head"><span>VistaarFlow</span><span>5m</span></div><strong>Follow-up reminder</strong><p>Your follow-up with Ananya Patel is due shortly.</p></div>
     <div class="push"><div class="push-head"><span>VistaarFlow</span><span>18m</span></div><strong>Lead assigned</strong><p>A new CRM lead has been assigned to you.</p></div>
     <div class="push"><div class="push-head"><span>VistaarFlow</span><span>32m</span></div><strong>Opportunity updated</strong><p>The opportunity has moved to the next pipeline stage.</p></div>
    </div>
   </div>
   <span class="mobile-float a"><i>●</i> New lead notification</span>
   <span class="mobile-float b"><i>✓</i> Follow-up reminder</span>
  </div>
 </div>
</section>

<section id="mobile-features" class="mob-section">
 <div class="container">
  <div class="mob-heading">
   <div class="mob-eyebrow">CRM THAT MOVES WITH YOUR TEAM</div>
   <h2>Stay connected even when you're <em>away from your desk.</em></h2>
   <p>Give your team convenient mobile access to the CRM information and actions they need during day-to-day follow-ups.</p>
  </div>
  <div class="mob-features">
   <article class="mob-card"><span class="mob-icon">◎</span><h3>Lead Access</h3><p>View customer and lead information from your mobile device so your team can stay informed while working on the move.</p></article>
   <article class="mob-card"><span class="mob-icon">↗</span><h3>Pipeline Visibility</h3><p>Keep track of opportunities and their CRM stages without needing to return to a desktop for every update.</p></article>
   <article class="mob-card"><span class="mob-icon">✓</span><h3>Tasks & Follow-ups</h3><p>Keep upcoming tasks and customer follow-ups visible so important sales activity stays organized.</p></article>
   <article class="mob-card"><span class="mob-icon">◉</span><h3>Push Notifications</h3><p>Receive supported in-app push notifications for important CRM activity and connect with new leads faster.</p></article>
  </div>
 </div>
</section>

<section class="mob-notify">
 <div class="container notify-grid">
  <div>
   <div class="mob-eyebrow">REAL-TIME MOBILE ALERTS</div>
   <div class="mob-show"><h2 style="margin-top:0">Important CRM activity can <em>reach you faster.</em></h2></div>
   <p style="color:#667085;line-height:1.75">Push notifications help mobile users stay aware of relevant CRM activity without repeatedly opening the application to check for updates.</p>
   <div class="mob-checks">
    <div class="mob-check"><i>✓</i><div><strong>New lead alerts</strong><p>Help users notice incoming leads sooner when supported notification events are enabled.</p></div></div>
    <div class="mob-check"><i>✓</i><div><strong>Assignment notifications</strong><p>Keep team members aware when CRM work or a lead is assigned to them.</p></div></div>
    <div class="mob-check"><i>✓</i><div><strong>Follow-up reminders</strong><p>Surface time-sensitive CRM tasks and follow-up activity on mobile.</p></div></div>
   </div>
  </div>
  <div class="notify-stack">
   <div class="notify-card"><span class="notify-logo">V</span><div><small>VISTAARFLOW • NOW</small><strong>New lead received</strong><p>A new enquiry has entered your CRM and is ready for follow-up.</p></div></div>
   <div class="notify-card"><span class="notify-logo">V</span><div><small>VISTAARFLOW • 5 MIN AGO</small><strong>Lead assigned to you</strong><p>Open VistaarFlow to review the customer details and next action.</p></div></div>
   <div class="notify-card"><span class="notify-logo">V</span><div><small>VISTAARFLOW • 20 MIN AGO</small><strong>Follow-up due</strong><p>Your scheduled customer follow-up is approaching.</p></div></div>
  </div>
 </div>
</section>

<section class="mob-anywhere">
 <div class="container anywhere-grid">
  <div class="crm-preview">
   <div class="app-top"><b>Today's CRM Activity</b><span class="app-avatar">VF</span></div>
   <div class="crm-row"><div><strong>Rahul Sharma</strong><small>New Facebook enquiry</small></div><span class="crm-status">NEW</span></div>
   <div class="crm-row"><div><strong>Ananya Patel</strong><small>Follow-up scheduled</small></div><span class="crm-status">TASK</span></div>
   <div class="crm-row"><div><strong>Vikram Mehta</strong><small>Opportunity updated</small></div><span class="crm-status">PIPELINE</span></div>
   <div class="crm-row"><div><strong>Sana Khan</strong><small>Customer activity</small></div><span class="crm-status">ACTIVE</span></div>
  </div>
  <div>
   <div class="mob-eyebrow">IOS + ANDROID</div>
   <h2>One CRM experience across <em>mobile platforms.</em></h2>
   <p>VistaarFlow's mobile experience is designed to keep your CRM closer to the people doing the follow-up—whether they use iPhone or Android devices.</p>
   <div class="platforms">
    <div class="platform"><span></span><strong>iOS</strong><p>Access VistaarFlow from supported Apple mobile devices.</p></div>
    <div class="platform"><span>◉</span><strong>Android</strong><p>Keep your CRM accessible on supported Android mobile devices.</p></div>
   </div>
  </div>
 </div>
</section>

<section class="mob-show">
 <div class="container">
  <div class="mob-heading">
   <div class="mob-eyebrow">FROM LEAD TO MOBILE FOLLOW-UP</div>
   <h2>Keep the CRM workflow <em>moving.</em></h2>
   <p>Mobile access and push notifications complement your VistaarFlow workflow so your team can react to important CRM activity wherever work happens.</p>
  </div>
  <div class="mob-flow">
   <div class="mob-step"><span class="mob-num">01</span><strong>Lead Captured</strong><small>Lead enters VistaarFlow</small></div>
   <div class="mob-step"><span class="mob-num">02</span><strong>CRM Updated</strong><small>Customer information is available</small></div>
   <div class="mob-step"><span class="mob-num">03</span><strong>User Notified</strong><small>Supported push alert appears</small></div>
   <div class="mob-step"><span class="mob-num">04</span><strong>Open Mobile CRM</strong><small>Review lead and CRM context</small></div>
   <div class="mob-step"><span class="mob-num">05</span><strong>Take Action</strong><small>Continue follow-up and pipeline work</small></div>
  </div>
 </div>
</section>

<section class="mob-cta">
 <div class="container">
  <div class="mob-cta-box">
   <div><h2>Take VistaarFlow wherever business takes you.</h2><p>Stay connected to leads, tasks, opportunities and important CRM activity from mobile.</p></div>
   <a class="mob-btn" href="https://app.vistaarflow.in/signup">Start 14 days free <span>→</span></a>
  </div>
 </div>
</section>

</main>

<?php get_footer(); ?>
