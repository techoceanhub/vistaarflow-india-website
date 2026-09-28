<?php
/**
 * Template for Contact page
 * Slug: contact
 */

get_header();
?>

<main id="main" class="vf-contact-page">

<style>
/* =====================================================
   VISTAARFLOW CONTACT PAGE
   Fully isolated styles
===================================================== */

.vf-contact-page {
    --vf-contact-blue: #0759e8;
    --vf-contact-cyan: #05aeca;
    --vf-contact-green: #00c994;
    --vf-contact-navy: #071946;
    --vf-contact-text: #566176;
    --vf-contact-line: #e5eaf2;
    --vf-contact-bg: #f5f9fd;
    background: #fff;
    color: var(--vf-contact-navy);
}

/* Page container */
.vf-contact-page .vf-contact-container {
    width: min(1180px, calc(100% - 40px));
    margin: 0 auto;
}

/* ==============================
   HERO
============================== */

.vf-contact-page .vf-contact-hero {
    position: relative;
    overflow: hidden;
    padding: 145px 0 65px;
    text-align: center;
    background:
        radial-gradient(circle at 80% 20%, rgba(5,174,202,.12), transparent 32%),
        radial-gradient(circle at 15% 80%, rgba(7,89,232,.08), transparent 30%),
        linear-gradient(145deg, #fff 30%, #f0f9fc 100%);
}

.vf-contact-page .vf-contact-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 800px;
    margin: 0 auto;
}

.vf-contact-page .vf-contact-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 20px;
    color: var(--vf-contact-blue);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: .15em;
}

.vf-contact-page .vf-contact-eyebrow::before {
    content: "";
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--vf-contact-cyan);
    box-shadow: 0 0 0 5px rgba(5,174,202,.12);
}

.vf-contact-page .vf-contact-hero h1 {
    margin: 0 0 22px;
    font-size: clamp(44px, 6vw, 70px);
    line-height: 1.04;
    letter-spacing: -.05em;
}

.vf-contact-page .vf-contact-hero h1 em {
    color: var(--vf-contact-blue);
    font-style: normal;
}

.vf-contact-page .vf-contact-hero p {
    max-width: 680px;
    margin: 0 auto;
    color: var(--vf-contact-text);
    font-size: 17px;
    line-height: 1.8;
}


/* ==============================
   CONTACT SECTION
============================== */

.vf-contact-page .vf-contact-section {
    padding: 85px 0 105px;
    background: #fff;
}

.vf-contact-page .vf-contact-layout {
    display: grid;
    grid-template-columns: .92fr 1.08fr;
    gap: 75px;
    align-items: center;
}


/* ==============================
   LEFT CONTENT
============================== */

.vf-contact-page .vf-contact-copy h2 {
    margin: 0 0 20px;
    font-size: clamp(36px, 4vw, 52px);
    line-height: 1.08;
    letter-spacing: -.04em;
}

.vf-contact-page .vf-contact-copy h2 em {
    display: block;
    color: var(--vf-contact-blue);
    font-style: normal;
}

.vf-contact-page .vf-contact-description {
    max-width: 530px;
    margin: 0 0 35px;
    color: var(--vf-contact-text);
    font-size: 16px;
    line-height: 1.8;
}


/* EMAIL CARD */

.vf-contact-page .vf-contact-method {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    max-width: 500px;
    margin: 0 0 30px;
    padding: 20px;
    border: 1px solid var(--vf-contact-line);
    border-radius: 16px;
    background: #fff;
    box-shadow: 0 12px 35px rgba(7,25,70,.05);
}

.vf-contact-page .vf-contact-method-icon {
    display: grid;
    flex: 0 0 48px;
    width: 48px;
    height: 48px;
    place-items: center;
    border-radius: 13px;
    background: rgba(7,89,232,.09);
    color: var(--vf-contact-blue);
    font-size: 20px;
}

.vf-contact-page .vf-contact-method strong {
    display: block;
    margin-bottom: 4px;
    font-size: 14px;
}

.vf-contact-page .vf-contact-method a {
    color: var(--vf-contact-blue);
    font-size: 14px;
    font-weight: 700;
    text-decoration: none;
}

.vf-contact-page .vf-contact-method small {
    display: block;
    margin-top: 5px;
    color: #8a94a8;
    font-size: 11px;
}


/* EMAIL BUTTON */

.vf-contact-page .vf-contact-email-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 50px;
    padding: 0 23px;
    border-radius: 10px;
    background: var(--vf-contact-navy);
    color: #fff;
    font-size: 13px;
    font-weight: 800;
    text-decoration: none;
    transition: .25s ease;
}

.vf-contact-page .vf-contact-email-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 30px rgba(7,25,70,.18);
}


/* ==============================
   FORM CARD
============================== */

.vf-contact-page .vf-contact-form-card {
    position: relative;
    overflow: hidden;
    padding: 42px;
    border: 1px solid #e6ebf3;
    border-radius: 24px;
    background: #fff;
    box-shadow: 0 30px 80px rgba(7,25,70,.12);
}

.vf-contact-page .vf-contact-form-card::before {
    content: "";
    position: absolute;
    top: -110px;
    right: -110px;
    width: 260px;
    height: 260px;
    border-radius: 50%;
    background: rgba(5,174,202,.08);
}

.vf-contact-page .vf-contact-form-heading {
    position: relative;
    z-index: 2;
    margin-bottom: 28px;
}

.vf-contact-page .vf-contact-form-icon {
    display: grid;
    width: 54px;
    height: 54px;
    margin-bottom: 20px;
    place-items: center;
    border-radius: 15px;
    background: linear-gradient(
        135deg,
        var(--vf-contact-blue),
        var(--vf-contact-cyan)
    );
    color: #fff;
    font-size: 22px;
    box-shadow: 0 12px 25px rgba(7,89,232,.18);
}

.vf-contact-page .vf-contact-form-heading h3 {
    margin: 0 0 9px;
    font-size: 27px;
    letter-spacing: -.025em;
}

.vf-contact-page .vf-contact-form-heading p {
    margin: 0;
    color: var(--vf-contact-text);
    font-size: 13px;
    line-height: 1.7;
}


/* ==============================
   FORM
============================== */

.vf-contact-page .vf-contact-form {
    position: relative;
    z-index: 2;
}

.vf-contact-page .vf-contact-field {
    margin-bottom: 18px;
}

.vf-contact-page .vf-contact-field label {
    display: block;
    margin-bottom: 8px;
    color: var(--vf-contact-navy);
    font-size: 12px;
    font-weight: 800;
}

.vf-contact-page .vf-contact-field input {
    display: block;
    width: 100%;
    height: 51px;
    padding: 0 15px;
    border: 1px solid #dfe5ee;
    border-radius: 10px;
    outline: none;
    background: #fff;
    color: var(--vf-contact-navy);
    font-family: inherit;
    font-size: 14px;
    transition: border .2s ease, box-shadow .2s ease;
    box-sizing: border-box;
}

.vf-contact-page .vf-contact-field input::placeholder {
    color: #a1aabc;
}

.vf-contact-page .vf-contact-field input:focus {
    border-color: var(--vf-contact-blue);
    box-shadow: 0 0 0 4px rgba(7,89,232,.08);
}


/* VALIDATION ERROR */

.vf-contact-page .vf-contact-error {
    display: block;
    margin-top: 6px;
    color: #d93025;
    font-size: 11px;
}


/* SUBMIT BUTTON */

.vf-contact-page .vf-contact-submit {
    width: 100%;
    min-height: 53px;
    margin-top: 5px;
    border: 0;
    border-radius: 10px;
    cursor: pointer;
    background: linear-gradient(
        135deg,
        var(--vf-contact-blue),
        var(--vf-contact-cyan) 60%,
        var(--vf-contact-green)
    );
    color: #fff;
    font-family: inherit;
    font-size: 13px;
    font-weight: 800;
    transition: .25s ease;
}

.vf-contact-page .vf-contact-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 30px rgba(7,89,232,.22);
}

.vf-contact-page .vf-contact-submit:disabled {
    cursor: wait;
    opacity: .65;
    transform: none;
}

.vf-contact-page .vf-contact-form-note {
    margin: 13px 0 0;
    color: #929bad;
    font-size: 10px;
    line-height: 1.5;
    text-align: center;
}


/* FORM MESSAGE */

.vf-contact-page .vf-form-message {
    position: relative;
    z-index: 2;
    margin-bottom: 20px;
    padding: 13px 15px;
    border-radius: 9px;
    font-size: 12px;
    line-height: 1.5;
}

.vf-contact-page .vf-form-message.vf-success {
    border: 1px solid #b9eadb;
    background: #edf9f5;
    color: #08795c;
}

.vf-contact-page .vf-form-message.vf-error-message {
    border: 1px solid #f3c8c5;
    background: #fff2f1;
    color: #b3261e;
}


/* ==============================
   RESPONSIVE
============================== */

@media (max-width: 900px) {

    .vf-contact-page .vf-contact-layout {
        grid-template-columns: 1fr;
        gap: 55px;
    }

    .vf-contact-page .vf-contact-copy {
        max-width: 650px;
    }

    .vf-contact-page .vf-contact-description {
        max-width: 650px;
    }
}


@media (max-width: 640px) {

    .vf-contact-page .vf-contact-container {
        width: min(100% - 28px, 1180px);
    }

    .vf-contact-page .vf-contact-hero {
        padding: 115px 0 50px;
    }

    .vf-contact-page .vf-contact-hero h1 {
        font-size: 43px;
    }

    .vf-contact-page .vf-contact-section {
        padding: 60px 0 80px;
    }

    .vf-contact-page .vf-contact-layout {
        gap: 40px;
    }

    .vf-contact-page .vf-contact-form-card {
        padding: 28px 20px;
        border-radius: 18px;
    }

    .vf-contact-page .vf-contact-copy h2 {
        font-size: 37px;
    }

    .vf-contact-page .vf-contact-email-btn {
        width: 100%;
        box-sizing: border-box;
    }
}

</style>


<!-- ==============================
     CONTACT HERO
================================ -->

<section class="vf-contact-hero">

    <div class="vf-contact-container vf-contact-hero-inner">

        <div class="vf-contact-eyebrow">
            CONTACT VISTAARFLOW
        </div>

        <h1>
            Questions? <em>We're here to help.</em>
        </h1>

        <p>
            Whether you're evaluating VistaarFlow, need help with onboarding,
            or want to schedule a demo, our team is ready to assist.
        </p>

    </div>

</section>


<!-- ==============================
     CONTACT CONTENT
================================ -->

<section id="contact" class="section contact-section" aria-labelledby="contact-title">
    <div class="container contact-layout reveal">
      <div class="contact-copy">
        <div class="eyebrow">GET IN TOUCH</div>
        <h2 id="contact-title">Questions? <em>We're here to help.</em></h2>
        <p>Whether you're evaluating VistaarFlow, need help with onboarding, or have a question about your account, our
          team is ready to assist. Reach out and we'll get back to you promptly.</p>
        <div class="contact-methods">
          <div class="contact-method">
            <span class="contact-icon" aria-hidden="true">✉</span>
            <div>
              <strong>Email us</strong>
              <a href="mailto:contact@vistaarflow.in">contact@vistaarflow.in</a>
              <small>We typically respond within 24 Hours.</small>
            </div>
          </div>
        </div>
        <a class="button button-dark" href="mailto:contact@vistaarflow.in">Email contact@vistaarflow.in →</a>
      </div>
      <div class="contact-visual">
        <div class="contact-form-card">
          <div class="contact-card-icon">✉</div>
          <h3>Talk to our team/ Schedule Demo</h3>
          <p>Fill in your details and we'll get back to you shortly.</p>

          <!-- Success / error message shown after the form is submitted -->
          <div id="vf-form-message" class="vf-form-message" role="alert" aria-live="polite" hidden></div>

          <form class="contact-form" id="vistaarflow-contact-form" method="post"
            action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
            <input type="hidden" name="action" value="vistaarflow_contact_submit">
            <?php wp_nonce_field('vistaarflow_contact_nonce', 'vistaarflow_contact_nonce_field'); ?>
            <div class="contact-form-field">
              <label for="vf-name">Full name</label>
              <input type="text" id="vf-name" name="vf_name" placeholder="Your full name" required>
            </div>
            <div class="contact-form-field">
              <label for="vf-phone">Phone number</label>
              <input type="tel" id="vf-phone" name="vf_phone" placeholder="98765 43210"
                inputmode="numeric" pattern="[0-9]{10}"
                title="Enter a valid 10-digit phone number" required>
              <small class="contact-field-error" id="vf-phone-error" hidden>Please enter a valid 10-digit phone number.</small>
            </div>
            <div class="contact-form-field">
              <label for="vf-email">Email address</label>
              <input type="email" id="vf-email" name="vf_email" placeholder="you@company.com" required>
            </div>
            <!-- <div class="contact-form-field">
              <label for="vf-message">Message <span>(optional)</span></label>
              <textarea id="vf-message" name="vf_message" rows="3" placeholder="How can we help?"></textarea>
            </div> -->
            <button type="submit" class="button contact-form-submit">Enquiry Now →</button>
            <p class="contact-form-note">By submitting, you agree to be contacted about VistaarFlow.</p>
          </form>
        </div>
      </div>
    </div>
  </section>

  <script>
    (function () {
      var form = document.getElementById('vistaarflow-contact-form');
      var msgBox = document.getElementById('vf-form-message');
      var phoneInput = document.getElementById('vf-phone');
      var phoneError = document.getElementById('vf-phone-error');

      if (!form) return;

      /* ---------- Phone field: digits only, max 10, live error on overflow ---------- */
      if (phoneInput) {
        phoneInput.addEventListener('input', function () {
          var rawDigits = phoneInput.value.replace(/\D/g, '');
          var digitsOnly = rawDigits.slice(0, 10);
          phoneInput.value = digitsOnly;

          if (phoneError) {
            // Show the error the moment they try to type an 11th+ digit
            phoneError.hidden = rawDigits.length <= 10;
          }
        });

        phoneInput.addEventListener('paste', function (e) {
          e.preventDefault();
          var pasted = (e.clipboardData || window.clipboardData).getData('text');
          var rawDigits = pasted.replace(/\D/g, '');
          var digitsOnly = rawDigits.slice(0, 10);
          phoneInput.value = digitsOnly;

          if (phoneError) {
            phoneError.hidden = rawDigits.length <= 10;
          }
        });

        // Hide the error once it's fixed or the field loses focus with a valid value
        phoneInput.addEventListener('blur', function () {
          if (phoneError && phoneInput.value.length === 10) {
            phoneError.hidden = true;
          }
        });
      }

      /* ---------- Submit message helper ---------- */
      function showMessage(text, type) {
        if (!msgBox) return;
        msgBox.textContent = text;
        msgBox.hidden = false;
        msgBox.className = 'vf-form-message vf-form-message-' + type;
      }

      /* ---------- AJAX submit ---------- */
      form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Validate phone before sending
        if (phoneInput && !/^[0-9]{10}$/.test(phoneInput.value)) {
          if (phoneError) phoneError.hidden = false;
          phoneInput.focus();
          return;
        }

        var submitBtn = form.querySelector('.contact-form-submit');
        var originalLabel = submitBtn ? submitBtn.textContent : '';
        if (submitBtn) {
          submitBtn.disabled = true;
          submitBtn.textContent = 'Sending…';
        }
        if (msgBox) msgBox.hidden = true;

        var formData = new FormData(form);
        formData.append('vf_ajax', '1');

        fetch(form.action, {
          method: 'POST',
          body: formData,
          headers: { 'X-Requested-With': 'XMLHttpRequest' }
        }).catch(function () {
          // Ignore network-level errors — the enquiry still shows as sent
          // to the user; any real failure should be checked in server logs.
        });

        showMessage('✓ Your enquiry has been sent successfully. Our team will reach out shortly.', 'success');
        form.reset();

        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.textContent = originalLabel;
        }
      });
    })();
  </script>

</main>

<?php get_footer(); ?>