<?php get_header(); ?>

<main id="main" class="vf-ai-page">

<style>
.vf-ai-page{--blue:#215af8;--navy:#0b1220;--muted:#667085;--line:#e5eaf1;--soft:#f7f9fc;--green:#17a768;--purple:#7047eb;background:#fff;color:var(--navy);overflow:hidden}
.vf-ai-page *{box-sizing:border-box}
.vf-ai-page .container{width:min(1180px,calc(100% - 40px));margin:auto}
.ai-eyebrow{font-size:12px;font-weight:850;letter-spacing:1.5px;color:var(--blue);text-transform:uppercase;margin-bottom:14px}
.ai-hero{padding:92px 0 100px;background:radial-gradient(circle at 82% 20%,#ebe9ff 0,transparent 31%),radial-gradient(circle at 68% 65%,#e8f1ff 0,transparent 30%),linear-gradient(180deg,#fff,#f8faff)}
.ai-hero-grid{display:grid;grid-template-columns:.92fr 1.08fr;gap:68px;align-items:center}
.ai-hero h1{font-size:clamp(43px,5vw,68px);line-height:1.02;letter-spacing:-.045em;margin:0 0 22px;font-weight:850}
.ai-hero h1 em,.ai-heading h2 em,.ai-copy h2 em{font-style:normal;color:var(--blue)}
.ai-hero-copy>p{font-size:18px;line-height:1.7;color:var(--muted);max-width:650px;margin:0 0 28px}
.ai-btns{display:flex;gap:12px;flex-wrap:wrap}
.ai-btn{display:inline-flex;align-items:center;gap:9px;padding:13px 20px;border-radius:10px;background:var(--blue);color:#fff!important;text-decoration:none!important;font-weight:750;box-shadow:0 10px 25px rgba(33,90,248,.18)}
.ai-btn.alt{background:#fff;color:var(--navy)!important;border:1px solid var(--line);box-shadow:none}
.ai-proof{display:flex;gap:22px;flex-wrap:wrap;margin-top:25px;color:#475467;font-size:13px;font-weight:700}
.ai-proof span:before{content:"✦";color:var(--purple);margin-right:6px}

/* AI workspace */
.ai-app{background:#fff;border:1px solid #dfe6ef;border-radius:22px;box-shadow:0 28px 80px rgba(30,55,90,.14);overflow:hidden;position:relative}
.ai-appbar{height:45px;border-bottom:1px solid #e9edf3;display:flex;align-items:center;padding:0 15px;gap:6px;background:#fbfcfe}
.ai-dot{width:8px;height:8px;border-radius:50%;background:#d9dee7}.ai-app-title{font-size:11px;font-weight:750;color:#7a8494;margin-left:8px}
.ai-appbody{display:grid;grid-template-columns:105px 1fr 190px;min-height:440px}
.ai-sidebar{padding:18px 7px;border-right:1px solid #edf0f5;background:#f8faff}
.ai-nav{padding:10px 7px;border-radius:8px;font-size:9px;font-weight:750;color:#667085;margin-bottom:6px}.ai-nav.active{background:#eeeaff;color:#6342cf}
.ai-chat{padding:19px}.ai-contact{display:flex;align-items:center;gap:9px;margin-bottom:16px}.ai-avatar{width:31px;height:31px;border-radius:50%;display:grid;place-items:center;background:#eaf1ff;color:#215af8;font-size:9px;font-weight:850}.ai-contact strong{display:block;font-size:10px}.ai-contact small{font-size:8px;color:#98a2b3}
.bubble{max-width:78%;padding:10px 12px;border-radius:12px;font-size:9px;line-height:1.5;margin:8px 0}.bubble.in{background:#f0f2f6}.bubble.out{background:#215af8;color:#fff;margin-left:auto}
.ai-assist{border:1px solid #ded8ff;background:#f8f6ff;border-radius:12px;padding:12px;margin-top:15px}.ai-assist b{font-size:9px;color:#6747d6}.ai-assist p{font-size:8px;color:#5f6878;line-height:1.5;margin:6px 0 8px}.ai-actions{display:flex;gap:6px;flex-wrap:wrap}.ai-actions span{font-size:7px;font-weight:800;padding:5px 7px;border-radius:6px;background:#fff;border:1px solid #e2ddf8;color:#6041c7}
.ai-panel{padding:18px 14px;border-left:1px solid #edf0f5;background:#fcfdff}.ai-panel h4{font-size:12px;margin:0 0 14px}.ai-field{padding:8px 0;border-bottom:1px solid #edf0f5}.ai-field small{display:block;color:#98a2b3;font-size:7px}.ai-field b{display:block;font-size:9px;margin-top:3px}.ai-score{display:inline-block;margin-top:13px;padding:5px 8px;border-radius:999px;background:#e9f8ef;color:#12824e;font-size:8px;font-weight:850}
.ai-floating{position:absolute;background:#fff;border:1px solid #e2e7ee;border-radius:10px;padding:9px 12px;font-size:9px;font-weight:800;box-shadow:0 12px 30px rgba(18,40,75,.13)}.ai-floating.one{right:15px;top:62px}.ai-floating.two{left:120px;bottom:16px}.ai-floating i{font-style:normal;color:var(--purple)}

/* sections */
.ai-section,.ai-summary-section,.ai-reply-section,.ai-suggestion-section{padding:95px 0}
.ai-summary-section,.ai-suggestion-section{background:#f7f9fc}
.ai-heading{text-align:center;max-width:780px;margin:0 auto 46px}
.ai-heading h2,.ai-copy h2{font-size:clamp(32px,4vw,50px);line-height:1.1;letter-spacing:-.035em;margin:0 0 14px}
.ai-heading p,.ai-copy p{color:var(--muted);line-height:1.7;margin:0}
.ai-features{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
.ai-card{padding:30px;border:1px solid var(--line);border-radius:18px;background:#fff;box-shadow:0 7px 26px rgba(16,32,56,.04)}
.ai-icon{width:46px;height:46px;border-radius:12px;display:grid;place-items:center;background:#f0edff;color:var(--purple);font-size:17px;font-weight:900;margin-bottom:18px}
.ai-card h3{font-size:20px;margin:0 0 10px}.ai-card p{font-size:14px;line-height:1.7;color:var(--muted);margin:0}
.ai-tag{display:inline-block;margin-top:16px;padding:6px 9px;border-radius:999px;background:#f3f5f8;color:#667085;font-size:9px;font-weight:850}

/* feature showcases */
.ai-grid{display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center}
.ai-checks{margin-top:24px}.ai-check{display:flex;gap:12px;margin:17px 0}.ai-check i{font-style:normal;width:25px;height:25px;border-radius:50%;display:grid;place-items:center;background:#eeeaff;color:#6847d7;font-size:12px;font-weight:900;flex:0 0 25px}.ai-check strong{font-size:14px}.ai-check p{font-size:13px;margin:4px 0 0;color:var(--muted)}
.demo-box{background:#fff;border:1px solid var(--line);border-radius:20px;padding:25px;box-shadow:0 22px 55px rgba(18,40,75,.08)}
.demo-top{display:flex;align-items:center;justify-content:space-between;margin-bottom:18px}.demo-top strong{font-size:14px}.ai-pill{padding:6px 9px;border-radius:999px;background:#f0edff;color:#6847d7;font-size:9px;font-weight:850}
.demo-chat{padding:12px;border-radius:11px;background:#f5f7fa;font-size:11px;line-height:1.6;color:#596273;margin-bottom:12px}
.demo-result{padding:14px;border:1px solid #e1dcfa;background:#faf9ff;border-radius:11px}.demo-result small{display:block;color:#765bd2;font-size:8px;font-weight:850;margin-bottom:6px}.demo-result p{font-size:11px;line-height:1.6;color:#4e5868;margin:0}.demo-result strong{font-size:11px;line-height:1.55;display:block}
.suggestion{display:flex;gap:10px;align-items:flex-start;padding:12px;border:1px solid #e7ebf1;border-radius:10px;margin:9px 0}.suggestion span{width:28px;height:28px;flex:0 0 28px;border-radius:8px;background:#f0edff;color:#6847d7;display:grid;place-items:center;font-size:10px;font-weight:900}.suggestion b{font-size:11px;display:block}.suggestion small{font-size:9px;color:#7c8695;line-height:1.5;display:block;margin-top:3px}

/* flow */
.ai-flow{display:grid;grid-template-columns:repeat(5,1fr);gap:12px;margin-top:45px}
.ai-step{position:relative;text-align:center;padding:21px 10px;border:1px solid var(--line);border-radius:14px;background:#fff}.ai-step:not(:last-child):after{content:"→";position:absolute;right:-15px;top:50%;transform:translateY(-50%);color:#9aa4b2;font-weight:900;z-index:3}.ai-num{width:31px;height:31px;border-radius:50%;display:grid;place-items:center;margin:0 auto 10px;background:#f0edff;color:#6847d7;font-size:10px;font-weight:900}.ai-step strong{display:block;font-size:11px}.ai-step small{display:block;margin-top:5px;color:#8a93a3;font-size:9px;line-height:1.45}
  .vf-wa-meta-highlight{
            color: #1877f2;
        }
/* CTA */
.ai-cta{padding:42px 0 105px}.ai-cta-box{padding:56px;border-radius:27px;background:linear-gradient(135deg,#215af8,#5634c8);color:#fff;display:flex;align-items:center;justify-content:space-between;gap:35px;box-shadow:0 30px 70px rgba(53,69,190,.22)}.ai-cta-box h2{font-size:clamp(30px,4vw,46px);margin:0 0 8px;color:#fff}.ai-cta-box p{margin:0;color:#e8e5ff}.ai-cta-box .ai-btn{background:#fff;color:#3d35a7!important;white-space:nowrap}

@media(max-width:980px){.ai-hero-grid,.ai-grid{grid-template-columns:1fr}.ai-features{grid-template-columns:1fr}.ai-flow{grid-template-columns:1fr 1fr}.ai-step:after{display:none}.ai-app{max-width:720px;margin:auto}.ai-cta-box{flex-direction:column;align-items:flex-start}}
@media(max-width:640px){.vf-ai-page .container{width:min(100% - 26px,1180px)}.ai-hero{padding:70px 0}.ai-hero h1{font-size:42px}.ai-flow{grid-template-columns:1fr}.ai-appbody{grid-template-columns:82px 1fr}.ai-panel,.ai-floating{display:none}.ai-section,.ai-summary-section,.ai-reply-section,.ai-suggestion-section{padding:72px 0}.ai-cta-box{padding:35px 25px}}
</style>

<section class="ai-hero">
 <div class="container ai-hero-grid">
  <div class="ai-hero-copy">
   <div class="ai-eyebrow">AI-POWERED CRM FOR GROWING BUSINESSES</div>
   <h1>Understand every conversation. <em>Know what to do next.</em></h1>
<p>
  VistaarFlow brings AI assistance into your CRM workflow with AI summaries, reply drafting and contextual suggestions—helping your team understand customer conversations faster and prepare the next action with more context.
  <strong class="vf-wa-meta-highlight">Choose from three AI providers — OpenAI, Google Gemini, or Anthropic Claude — connect your preferred provider and use AI directly within VistaarFlow CRM.</strong>
</p>   <div class="ai-btns">
    <a class="ai-btn" href="https://app.vistaarflow.in/signup">Start 14 days free <span>→</span></a>
    <a class="ai-btn alt" href="#ai-features">Explore AI CRM</a>
   </div>
   <div class="ai-proof"><span>AI Summary</span><span>AI Reply</span><span>AI Suggestions</span></div>
  </div>

  <div class="ai-app" aria-label="VistaarFlow AI CRM preview">
   <div class="ai-appbar"><i class="ai-dot"></i><i class="ai-dot"></i><i class="ai-dot"></i><span class="ai-app-title">VistaarFlow • AI Assistant</span></div>
   <div class="ai-appbody">
    <aside class="ai-sidebar"><div class="ai-nav active">✦ AI Assistant</div><div class="ai-nav">💬 Chat</div><div class="ai-nav">◉ Contacts</div><div class="ai-nav">↗ Opportunities</div><div class="ai-nav">✓ Tasks</div></aside>
    <div class="ai-chat">
     <div class="ai-contact"><span class="ai-avatar">RS</span><div><strong>Rahul Sharma</strong><small>Customer conversation</small></div></div>
     <div class="bubble in">I'm interested in the project. Can you share the pricing and payment plan?</div>
     <div class="bubble out">Sure. I'll share the available details with you.</div>
     <div class="bubble in">Thanks. I may be available for a call tomorrow evening.</div>
     <div class="ai-assist"><b>✦ VistaarFlow AI</b><p>Customer is interested, requested pricing/payment details and indicated availability for a call tomorrow evening.</p><div class="ai-actions"><span>Generate Reply</span><span>Next Action</span><span>Create Task</span></div></div>
    </div>
    <aside class="ai-panel">
     <h4>CRM Context</h4>
     <div class="ai-field"><small>Contact</small><b>Rahul Sharma</b></div>
     <div class="ai-field"><small>Lead Stage</small><b>Qualified</b></div>
     <div class="ai-field"><small>Interest</small><b>Project Details</b></div>
     <div class="ai-field"><small>Next Task</small><b>Call tomorrow</b></div>
     <span class="ai-score">● Follow-up suggested</span>
    </aside>
   </div>
   <span class="ai-floating one"><i>✦</i> AI summary ready</span>
   <span class="ai-floating two"><i>✦</i> Suggested reply generated</span>
  </div>
 </div>
</section>

<section id="ai-features" class="ai-section">
 <div class="container">
  <div class="ai-heading">
   <div class="ai-eyebrow">AI INSIDE YOUR CRM WORKFLOW</div>
   <h2>Less time understanding context.<br><em>More time taking action.</em></h2>
   <p>Use AI assistance alongside your CRM data and customer conversations to make everyday follow-up work easier to manage.</p>
  </div>
  <div class="ai-features">
   <article class="ai-card"><span class="ai-icon">≡</span><h3>AI Summary</h3><p>Turn lengthy customer conversations or supported activity into a concise overview so your team can understand the important context faster.</p><span class="ai-tag">UNDERSTAND FASTER</span></article>
   <article class="ai-card"><span class="ai-icon">✦</span><h3>AI Reply</h3><p>Generate a relevant reply draft based on available conversation context. Your team can review and adjust the response before sending it.</p><span class="ai-tag">RESPOND FASTER</span></article>
   <article class="ai-card"><span class="ai-icon">↗</span><h3>AI Suggestions</h3><p>Surface contextual next-action suggestions such as following up, creating a task, sharing information or progressing the lead.</p><span class="ai-tag">KNOW WHAT'S NEXT</span></article>
  </div>
 </div>
</section>

<section class="ai-summary-section">
 <div class="container ai-grid">
  <div class="ai-copy">
   <div class="ai-eyebrow">AI SUMMARY</div>
   <h2>Turn long conversations into <em>clear customer context.</em></h2>
   <p>Instead of reading through an entire conversation before every follow-up, use AI-assisted summaries to quickly understand what the customer discussed and what matters next.</p>
   <div class="ai-checks">
    <div class="ai-check"><i>✦</i><div><strong>Conversation overview</strong><p>Condense lengthy discussions into a practical summary.</p></div></div>
    <div class="ai-check"><i>✦</i><div><strong>Customer requirement</strong><p>Surface important requirements from the available conversation context.</p></div></div>
    <div class="ai-check"><i>✦</i><div><strong>Faster handovers</strong><p>Help another team member understand the conversation without starting from the beginning.</p></div></div>
   </div>
  </div>
  <div class="demo-box">
   <div class="demo-top"><strong>Conversation Summary</strong><span class="ai-pill">✦ AI GENERATED</span></div>
   <div class="demo-chat">Customer asked about pricing, available options and payment details. They are interested and said they are available for a call tomorrow evening.</div>
   <div class="demo-result"><small>AI SUMMARY</small><p>Rahul is evaluating the offering and needs pricing and payment information before proceeding. He has indicated availability for a follow-up call tomorrow evening.</p></div>
  </div>
 </div>
</section>

<section class="ai-reply-section">
 <div class="container ai-grid">
  <div class="demo-box">
   <div class="demo-top"><strong>AI Reply Assistant</strong><span class="ai-pill">✦ DRAFT</span></div>
   <div class="demo-chat"><strong style="font-size:10px">Customer:</strong><br>Can you send me the pricing details? I can speak tomorrow evening if needed.</div>
   <div class="demo-result"><small>SUGGESTED REPLY</small><p>Absolutely. I'll share the relevant pricing details with you. I can also arrange a follow-up for tomorrow evening so we can discuss your questions.</p></div>
   <div style="display:flex;gap:8px;margin-top:12px"><span style="padding:7px 10px;border-radius:7px;background:#215af8;color:#fff;font-size:9px;font-weight:800">Use Reply</span><span style="padding:7px 10px;border-radius:7px;border:1px solid #e2e7ee;font-size:9px;font-weight:800">Regenerate</span></div>
  </div>
  <div class="ai-copy">
   <div class="ai-eyebrow">AI REPLY</div>
   <h2>Prepare customer responses <em>with AI assistance.</em></h2>
   <p>AI Reply helps your team prepare a response using the available conversation context. The generated text remains a draft that can be reviewed, adjusted and then sent by your team.</p>
   <div class="ai-checks">
    <div class="ai-check"><i>✦</i><div><strong>Context-aware drafting</strong><p>Generate replies based on the customer conversation available to the AI assistant.</p></div></div>
    <div class="ai-check"><i>✦</i><div><strong>Review before sending</strong><p>Your team stays in control and can edit the generated response.</p></div></div>
    <div class="ai-check"><i>✦</i><div><strong>Quicker everyday responses</strong><p>Reduce the time spent repeatedly drafting common follow-up messages.</p></div></div>
   </div>
  </div>
 </div>
</section>

<section class="ai-suggestion-section">
 <div class="container ai-grid">
  <div class="ai-copy">
   <div class="ai-eyebrow">AI SUGGESTIONS</div>
   <h2>Move from conversation to <em>the next practical action.</em></h2>
   <p>Use AI-assisted suggestions to help your team identify useful next steps from the available conversation and CRM context.</p>
   <div class="ai-checks">
    <div class="ai-check"><i>✦</i><div><strong>Follow-up suggestion</strong><p>Surface when a customer conversation indicates that another follow-up may be useful.</p></div></div>
    <div class="ai-check"><i>✦</i><div><strong>Task recommendation</strong><p>Suggest creating a task when the conversation contains a clear future action.</p></div></div>
    <div class="ai-check"><i>✦</i><div><strong>CRM next action</strong><p>Help your team decide whether to share information, follow up or continue the lead journey.</p></div></div>
   </div>
  </div>
  <div class="demo-box">
   <div class="demo-top"><strong>Suggested Next Actions</strong><span class="ai-pill">✦ AI</span></div>
   <div class="suggestion"><span>01</span><div><b>Share pricing details</b><small>The customer explicitly requested pricing and payment information.</small></div></div>
   <div class="suggestion"><span>02</span><div><b>Create follow-up task</b><small>Schedule a call for tomorrow evening based on the customer's availability.</small></div></div>
   <div class="suggestion"><span>03</span><div><b>Continue qualification</b><small>Use the next conversation to understand requirements and buying timeline.</small></div></div>
  </div>
 </div>
</section>

<section class="ai-section">
 <div class="container">
  <div class="ai-heading">
   <div class="ai-eyebrow">AI + CRM CONTEXT</div>
   <h2>From customer conversation to <em>better-organized follow-up.</em></h2>
   <p>AI assistance works alongside your CRM workflow rather than replacing your team.</p>
  </div>
  <div class="ai-flow">
   <div class="ai-step"><span class="ai-num">01</span><strong>Customer Conversation</strong><small>Interaction enters CRM context</small></div>
   <div class="ai-step"><span class="ai-num">02</span><strong>AI Summary</strong><small>Understand the discussion</small></div>
   <div class="ai-step"><span class="ai-num">03</span><strong>AI Suggestion</strong><small>Surface a useful next action</small></div>
   <div class="ai-step"><span class="ai-num">04</span><strong>AI Reply</strong><small>Prepare a response draft</small></div>
   <div class="ai-step"><span class="ai-num">05</span><strong>Team Action</strong><small>Review and continue follow-up</small></div>
  </div>
 </div>
</section>

<section class="ai-cta">
 <div class="container">
  <div class="ai-cta-box">
   <div><h2>Put AI to work inside your CRM.</h2><p>Summarize conversations, prepare replies and surface useful next actions with VistaarFlow AI assistance.</p></div>
   <a class="ai-btn" href="https://app.vistaarflow.in/signup">Start 14 days free <span>→</span></a>
  </div>
 </div>
</section>

</main>

<?php get_footer(); ?>
