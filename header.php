<?php
if (!defined('ABSPATH')) {
  exit;
}
?>
<!doctype html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

  <style>
    /* =========================================
           VISTAARFLOW NAVIGATION DROPDOWN
        ========================================= */

    .primary-nav ul {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .primary-nav>ul {
      display: flex;
      align-items: center;
      gap: 28px;
    }

    .primary-nav li {
      position: relative;
      list-style: none;
    }

    .primary-nav a {
      text-decoration: none;
    }


    /* =========================================
           DROPDOWN PARENT
        ========================================= */

    .primary-nav .menu-item-has-children {
      position: relative;
    }


    /* =========================================
           DROPDOWN
        ========================================= */

    .primary-nav .menu-item-has-children>.sub-menu {

      position: absolute;

      top: calc(100% + 10px);
      left: 0;

      min-width: 245px;

      margin: 0;
      padding: 8px;

      background: #ffffff;

      border: 1px solid rgba(0, 0, 0, 0.06);
      border-radius: 12px;

      box-shadow:
        0 15px 40px rgba(0, 0, 0, 0.10);

      opacity: 0;
      visibility: hidden;

      transform: translateY(8px);

      pointer-events: none;

      transition:
        opacity 0.2s ease,
        visibility 0.2s ease,
        transform 0.2s ease;

      z-index: 9999;
    }


    /* Invisible bridge prevents dropdown closing
           while mouse moves from menu to dropdown */

    .primary-nav .menu-item-has-children>.sub-menu::before {

      content: "";

      position: absolute;

      left: 0;
      right: 0;

      top: -12px;

      height: 12px;
    }


    /* =========================================
           SHOW DROPDOWN ON HOVER
        ========================================= */

    .primary-nav .menu-item-has-children:hover>.sub-menu,
    .primary-nav .menu-item-has-children:focus-within>.sub-menu {

      opacity: 1;
      visibility: visible;

      transform: translateY(0);

      pointer-events: auto;
    }


    /* =========================================
           DROPDOWN LINKS
        ========================================= */

    .primary-nav .sub-menu li {
      display: block;
      width: 100%;
    }

    .primary-nav .sub-menu li a {

      display: block;

      width: 100%;

      padding: 11px 14px;

      color: #1d1d1f;

      font-size: 14px;
      font-weight: 500;

      line-height: 1.4;

      white-space: nowrap;

      border-radius: 7px;

      transition:
        background 0.2s ease,
        color 0.2s ease;
    }


    .primary-nav .sub-menu li a:hover,
    .primary-nav .sub-menu li a:focus {

      background: #f5f7ff;

      color: #335cff;
    }


    /* =========================================
           INDUSTRIES DROPDOWN ARROW
        ========================================= */

    .industries-menu>a {

      display: flex;
      align-items: center;

      gap: 6px;
    }

    .industries-menu>a::after {

      content: "";

      width: 6px;
      height: 6px;

      border-right: 1.5px solid currentColor;
      border-bottom: 1.5px solid currentColor;

      transform: rotate(45deg) translateY(-2px);

      transition: transform 0.2s ease;
    }


    .industries-menu:hover>a::after {

      transform: rotate(225deg) translate(-1px, -1px);
    }


    /* =========================================
           MOBILE
        ========================================= */

    @media (max-width: 900px) {

      .primary-nav>ul {
        display: block;
      }

      .primary-nav .menu-item-has-children>.sub-menu {

        position: static;

        min-width: 100%;

        margin-top: 5px;

        padding: 4px 0 4px 15px;

        background: transparent;

        border: 0;
        border-radius: 0;

        box-shadow: none;

        opacity: 1;
        visibility: visible;

        transform: none;

        pointer-events: auto;
      }

      .primary-nav .sub-menu li a {

        padding: 9px 12px;
      }

    }
  </style>

</head>


<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>


  <a class="skip-link" href="#main">
    <?php esc_html_e('Skip to content', 'vistaarflow'); ?>
  </a>


  <!-- =========================================
     HEADER
========================================= -->

  <header class="site-header" id="site-header">

    <div class="container nav-wrap">


      <!-- =====================================
             LOGO
        ====================================== -->

      <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="VistaarFlow home">

        <?php

        if (has_custom_logo()) {

          the_custom_logo();

        } else {

          ?>

          <img class="theme-logo" src="<?php
          echo esc_url(
            get_template_directory_uri()
            . '/assets/images/vistaartransparentlogo.png'
          );
          ?>" alt="<?php
          esc_attr_e(
            'VistaarFlow — AI-powered CRM for growing business',
            'vistaarflow'
          );
          ?>">

          <?php
        }
        ?>

      </a>



      <!-- =====================================
             MOBILE MENU BUTTON
        ====================================== -->

      <button class="nav-toggle" aria-expanded="false" aria-controls="primary-nav">

        <span></span>
        <span></span>
        <span></span>

        <b class="screen-reader-text">
          Menu
        </b>

      </button>



      <!-- =====================================
             PRIMARY NAVIGATION
        ====================================== -->

      <nav id="primary-nav" class="primary-nav" aria-label="Primary navigation">


        <?php

        if (has_nav_menu('primary')) {

          /*
           * WordPress Primary Menu
           */

          wp_nav_menu([
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'main-menu',
            'fallback_cb' => false,
          ]);

        } else {

          ?>


          <ul class="main-menu">


            <!-- =========================
                         FEATURES
                    ========================== -->

            <?php

            echo vistaarflow_features_menu_item();

            // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
          
            ?>



            <!-- =========================
                         INDUSTRIES
                    ========================== -->

            <li class="menu-item menu-item-has-children industries-menu">

              <a href="<?php
              echo esc_url(
                home_url('/industries')
              );
              ?>">

                Industries

              </a>


              <ul class="sub-menu">


                <!-- REAL ESTATE -->

                <li class="menu-item">

                  <a href="<?php
                  echo esc_url(
                    home_url('/real-estate-crm')
                  );
                  ?>">

                    Real Estate

                  </a>

                </li>



                <!-- EDUCATION -->

                <li class="menu-item">

                  <a href="<?php
                  echo esc_url(
                    home_url('/education-crm')
                  );
                  ?>">

                    Education

                  </a>

                </li>



                <!-- SMALL BUSINESS -->

                <li class="menu-item">

                  <a href="<?php
                  echo esc_url(
                    home_url('/small-business-msme-crm')
                  );
                  ?>">

                    Small Business &amp; MSMEs

                  </a>

                </li>



                <!-- AUTOMOTIVE -->

               


              </ul>

            </li>



            <!-- =========================
                         INTEGRATIONS
                    ========================== -->

            <li class="menu-item">

              <a href="<?php
              echo esc_url(
                home_url('/#integrations')
              );
              ?>">

                Integrations

              </a>

            </li>



            <!-- =========================
                         PRICING
                    ========================== -->

            <li class="menu-item">

              <a href="<?php
              echo esc_url(
                home_url('/pricing')
              );
              ?>">

                Pricing

              </a>

            </li>



            <!-- =========================
                         BLOG
                    ========================== -->

            <li class="menu-item">

              <a href="<?php
              echo esc_url(
                vistaarflow_blog_url()
              );
              ?>">

                Blog

              </a>

            </li>



            <!-- =========================
                         CONTACT
                    ========================== -->

            <li class="menu-item">

              <a href="<?php
              echo esc_url(
                home_url('/contact')
              );
              ?>">

                Contact

              </a>

            </li>


          </ul>


          <?php

        }

        ?>


      </nav>



      <!-- =====================================
             HEADER ACTIONS
        ====================================== -->

      <div class="nav-actions">

        <a class="text-link" href="https://app.vistaarflow.in/login">

          Log in

        </a>


        <a href="https://app.vistaarflow.in/signup" class="button button-small">

          Start free

        </a>

      </div>


    </div>

  </header>