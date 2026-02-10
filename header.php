<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rocket Reception | AI Receptionist for Manitoba Small Businesses</title>

    <!-- Basic SEO -->
    <meta name="description" content="Rocket Reception is an AI receptionist for Manitoba small businesses. It answers calls, texts, and website chats using your real business policies—supporting your team, not replacing them.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://rocketreception.ca/">

    <meta name="keywords" content="AI receptionist Manitoba, virtual receptionist Winnipeg, small business call handling, after-hours reception, Rocket Reception">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Rocket Reception | AI Receptionist for Manitoba Small Businesses">
    <meta property="og:description" content="An AI receptionist that answers calls, texts, and chats using your real business rules—so customers get fast, accurate answers even after hours.">
    <meta property="og:url" content="https://rocketreception.ca/">
    <meta property="og:image" content="https://rocketreception.ca/assets/logo.png">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Rocket Reception | AI Receptionist for Manitoba Small Businesses">
    <meta name="twitter:description" content="Fast, accurate call, text, and chat handling for small businesses—without replacing your staff.">
    <meta name="twitter:image" content="https://rocketreception.ca/assets/logo.png">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/rocket-reception-favicon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-header: #ffffff;
            --accent: #d10d52;
            --accent-blue: #0da7d1;
            --text-light: #111111;      /* for header */
            --text-body: #111111;       /* main/body text */
            --text-muted: #666666;      /* secondary text on white */
            --max-width: 1500px;
            --nav-height: 72px;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: "Poppins", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: #ffffff;
            color: var(--text-body);
            font-size: 19px; /* body copy size */
        }

        img {
            max-width: 100%;
            display: block;
        }

        a {
            color: inherit;
        }

        .page-bg {
            min-height: 100vh;
            background: #ffffff;
        }

        .max-width {
            max-width: var(--max-width);
            margin: 0 auto;
            padding-inline: 24px;
        }

        /* HEADER (sticky, logo + nav only) */

        .site-header {
            background-color: var(--bg-header); /* outside 1500px */
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-inner {
            position: relative;
            /* let dropdowns extend beyond the bottom of the header */
            overflow-x: hidden;   /* keep the background/video from leaking sideways */
            overflow-y: visible;
            min-height: var(--nav-height);
            padding-top:0px; 
            padding-bottom:0px;
        }

        .header-bar {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 22px;
            min-height: var(--nav-height);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 16px;
            text-decoration: none;
            font-family: "Poppins", system-ui, sans-serif;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            font-size: 18px; /* increased by 1px */
            color: var(--accent);
        }

        .brand img {
            height: 66px;
            width: auto;
            margin: 0;
        }

        .brand span {
            position: relative;
            top: 3px; /* nudge text down */
            font-size: 20.7px;
        }

        .brand-text {
            white-space: nowrap;
            line-height: 1.05;
        }

        nav.main-nav {
            display: flex;
            align-items: stretch;
            font-family: "Poppins", system-ui, sans-serif;
            font-size: 16px;
            text-transform: none;
        }

        .nav-link {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 18px;
            text-decoration: none;
                        white-space: nowrap;
            transition: background-color 0.18s ease, color 0.18s ease, transform 0.18s ease;
        }

        .nav-link:hover,
        .nav-link:focus-visible {
            background: #ffffff;
            color: var(--accent);
            transform: translateY(-1px);
            outline: none;
        }

        /* Dropdown + submenu structure */

        .main-nav .nav-list {
            display: flex;
            align-items: stretch;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .nav-item {
            position: relative;
        }

        .nav-item-header {
            display: flex;
            align-items: stretch;
        }

        .has-menu .submenu-toggle {
            border: 0;
            background: none;
            padding: 0 0 0 4px;
            cursor: pointer;
            display: none; /* shown on mobile only */
            align-items: center;
            justify-content: center;
        }

        .has-menu .submenu-toggle:focus {
            outline: none;
        }

        .has-menu .submenu-toggle:focus-visible {
            outline: 2px solid var(--accent-blue);
            outline-offset: 2px;
        }

        .has-menu .chevron {
            display: block;
            width: 14px;
            height: 14px;
            background: url("/assets/down-triangle.png") center / contain no-repeat;
            transform: rotate(0deg); /* ▼ by default */
            transition: transform 0.18s ease;
            align-self: center;
            margin-top: 1px;
        }

        .nav-item.open .chevron {
            transform: rotate(180deg);   /* ◀ when open on mobile */
        }

        .dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 220px;
            margin: 0;
            padding: 10px 0;
            list-style: none;
            background: #ffffff;
            color: #111111;
            border-radius: 0 0 4px 4px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
            display: none;
            z-index: 40;
        }

        .dropdown li {
            white-space: nowrap;
        }

        .dropdown a {
            display: block;
            padding: 6px 20px;
            text-decoration: none;
            color: inherit;
        }

        .dropdown a:hover,
        .dropdown a:focus-visible {
            background: rgba(0, 0, 0, 0.04);
            color: inherit;
        }

        /* Show dropdowns on hover / focus on desktop only */
        @media (min-width: 901px) {
            .nav-item.has-menu:hover > .dropdown,
            .nav-item.has-menu:focus-within > .dropdown {
                display: block;
            }
        }

        /* Right-edge protection: flip dropdown on edge items */
        .nav-item--edge > .dropdown {
            right: 0;
            left: auto;
        }

        /* Hamburger toggle */

        .nav-toggle {
            display: none; /* shown only on mobile */
            background: none;
            border: 0;
            padding: 0 4px;
            margin-left: 8px;
            cursor: pointer;
                        align-items: center;
            justify-content: center;
        }

        .nav-toggle-box {
            width: 24px;
            height: 18px;
            position: relative;
        }

        .nav-toggle-line {
            position: absolute;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--text-light);
            border-radius: 1px;
            transition: transform 0.2s ease, opacity 0.2s ease, top 0.2s ease, bottom 0.2s ease;
        }

        .nav-toggle-line:nth-child(1) {
            top: 0;
        }

        .nav-toggle-line:nth-child(2) {
            top: 8px;
        }

        .nav-toggle-line:nth-child(3) {
            bottom: 0;
        }

        .nav-toggle.is-open .nav-toggle-line:nth-child(1) {
            top: 8px;
            transform: rotate(0deg);
        }

        .nav-toggle.is-open .nav-toggle-line:nth-child(2) {
            opacity: 0;
        }

        .nav-toggle.is-open .nav-toggle-line:nth-child(3) {
            bottom: auto;
            top: 8px;
            transform: rotate(-45deg);
        }

        /* HERO (main content) */

        .hero {
            max-width: 720px;
        }

        .hero-kicker {
            font-family: "Poppins", system-ui, sans-serif;
            text-transform: uppercase;
            letter-spacing: 0.17em;
            font-size: 20px;              /* eyebrow mobile */
            color: var(--text-muted);
            margin-bottom: 10px;
        }

        .hero h1 {
            font-family: "Poppins", system-ui, sans-serif;
            font-weight: 700;
            font-size: 40px;              /* H1 mobile */
            line-height: 1.1;
            margin: 0 0 16px;
            color: var(--text-body);
        }

        .hero p {
            margin: 0 0 28px;
            font-size: 19px;              /* body copy */
            color: var(--text-muted);
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        /* Buttons */

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 11px 22px;
            border-radius: 10px;          /* 10px radius */
            border: 1px solid transparent;
            font-family: "Poppins", system-ui, sans-serif;
            font-size: 16px;              /* button text size */
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.18s ease, color 0.18s ease, border-color 0.18s ease, transform 0.18s ease;
        }

        .btn-primary {
            background: var(--accent);
            color: #ffffff;
            border-color: var(--accent);
            font-weight: 600;
        }

        .btn-primary:hover {
            background: #ff4a82;
            border-color: #ff4a82;
            transform: translateY(-1px);
        }

        .btn-ghost {
            background: transparent;
            color: var(--text-body);
            border-color: #cccccc;
        }

        .btn-ghost:hover {
            background: #f5f5f5;
            border-color: #bbbbbb;
            transform: translateY(-1px);
        }

        /* SECTIONS (for layout; main markup lives in temp.php) */

        main {
            padding-top: 0;
            padding-bottom: 96px;
        }

        .service-card .service-link { margin-top:12px; display:block; }

        .section {
            padding-block: 60px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.06);
            scroll-margin-top: var(--nav-height);
        }

        .section:last-of-type {
            border-bottom: none;
        }

        .section-header {
            margin-bottom: 24px;
        }

        .hero-section {
            min-height: 420px;
            display: flex;
            align-items: center;
            padding: 12px 48px 48px;
            margin-top: 3px;
            background-image: url("/assets/hero-image-rocket-reception.jpg");
            background-size: cover;
            background-position: top;
            background-repeat: no-repeat;
            margin-bottom: 0;
            position: relative;
            border-radius: 12px;
        }

        .hero-content {
            width: 50%;
            min-width: 200px;
            max-width: 600px;
            position: relative;
            z-index: 1;
        }

        .hero-headline {
            font-family: "Poppins", system-ui, sans-serif;
            font-weight: 600;
            font-size: 44px;
            line-height: 1.05;
            color: #ffffff;
            margin: 0;
            text-shadow: 0 8px 24px rgba(0, 0, 0, 0.35);
        }

        .hero-support {
            margin: 16px 0 0;
            font-size: 19px;
            line-height: 1.5;
            color: #ffffff;
            text-shadow: 0 6px 18px rgba(0, 0, 0, 0.35);
        }

        .hero-cta {
            margin-top: 20px;
            background: transparent;
            color: #ffffff;
            border: 2px solid #ffffff;
            border-radius: 12px;
            text-shadow: 0 6px 18px rgba(0, 0, 0, 0.35);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
        }

        .hero-cta:hover,
        .hero-cta:focus-visible {
            background: rgba(255, 255, 255, 0.12);
            border-color: #ffffff;
            transform: translateY(-1px);
        }

        .section-intro {
            max-width: 1200px;
            min-width: 320px;
            width: 75%;
            margin: 0 auto 24px;
            text-align: center;
            color: var(--text-muted);
        }

        .section-header {
            max-width: 1200px;
            min-width: 320px;
            width: 75%;
            margin: 0 auto 24px;
            text-align: center;
        }

        .video-embed {
            width: 70%;
            max-width: 1000px;
            margin: 0 auto;
        }

        .intro-video {
            display: block;
            width: 100%;
            height: auto;
            border-radius: 12px;
        }

        .split-section-inner {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 60% 40%;
            gap: 32px;
            align-items: center;
        }

        .split-section-inner.split-reverse {
            grid-template-columns: 40% 60%;
        }

        .split-text {
            text-align: left;
        }

        .split-text .section-title,
        .split-text .section-intro {
            width: 100%;
            max-width: none;
            min-width: 0;
            text-align: left;
            margin-left: 0;
            margin-right: 0;
        }

        .split-media img {
            width: 100%;
            height: 100%;
            max-height: 420px;
            object-fit: cover;
            border-radius: 12px;
            display: block;
        }

        .feature-list {
            margin: 16px 0 0;
            padding-left: 20px;
            color: var(--text-muted);
        }

        .feature-list li {
            margin-bottom: 8px;
        }

        .policy-content {
            max-width: 1000px;
            margin: 0 auto;
            text-align: left;
        }

        .policy-content .section-header,
        .policy-content .section-title,
        .policy-content .section-intro {
            width: 100%;
            max-width: 100%;
            min-width: 0;
            text-align: left;
            margin-left: 0;
            margin-right: 0;
        }

        /* START A PROJECT â€“ FORM (Rocket Reception) */
        #start-project #contact-form {
            margin-top: 28px;
            display: grid;
            gap: 14px;
        }

        /* Inputs + textarea + select */
        #contact-form input,
        #contact-form textarea,
        #contact-form select {
            width: 100%;
            font-family: "Kameron", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            font-size: 19px;
            line-height: 1.4;
            padding: 14px 16px;
            border-radius: 10px;
            border: 1px solid rgba(0, 0, 0, 0.12);
            background: #fafafa;
            color: var(--text-body);
            outline: none;
            transition:
                border-color 0.18s ease,
                background-color 0.18s ease,
                box-shadow 0.18s ease;
            resize: vertical;
        }

        #contact-form textarea {
            min-height: 160px;
        }

        /* Placeholder styling */
        #contact-form input::placeholder,
        #contact-form textarea::placeholder {
            color: #999999;
            opacity: 1;
        }

        /* Hover + focus states */
        #contact-form input:hover,
        #contact-form textarea:hover,
        #contact-form select:hover {
            background: #ffffff;
        }

        #contact-form input:focus,
        #contact-form textarea:focus,
        #contact-form select:focus {
            background: #ffffff;
            border-color: var(--accent);
            box-shadow: 0 0 0 1px rgba(217, 23, 23, 0.12);
        }

        /* Submit button */
        #contact-form button[type="submit"] {
            align-self: flex-start;
            border: none;
            border-radius: 10px;
            padding: 12px 24px;
            font-family: "Manrope", system-ui, sans-serif;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            background: var(--accent);
            color: #ffffff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition:
                background-color 0.18s ease,
                transform 0.18s ease,
                box-shadow 0.18s ease;
            box-shadow: 0 12px 26px rgba(0, 0, 0, 0.18);
        }

        #contact-form button[type="submit"]:hover {
            background: #b40b46;
            transform: translateY(-1px);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.22);
        }

        #contact-form button[type="submit"]:active {
            transform: translateY(0);
            box-shadow: 0 10px 22px rgba(0, 0, 0, 0.18);
        }

        /* Response message */
        #form-response {
            font-size: 14px;
            color: var(--text-muted);
        }

        /* Two-column layout on wider screens */
        @media (min-width: 720px) {
            #start-project #contact-form {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            /* these appear as the 2-up fields */
            #contact-form input[name="name"],
            #contact-form input[name="email"],
            #contact-form input[name="topic"],
            #contact-form input[name="timeframe"] {
                grid-column: span 1;
            }

            /* full-width elements */
            #contact-form textarea,
            #contact-form button[type="submit"],
            #form-response {
                grid-column: 1 / -1;
            }
        }

        .about-grid {
            display: grid;
            gap: 20px;
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .demo-grid {
            display: grid;
            gap: 20px;
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .demo-tile {
            position: relative;
            display: flex;
            align-items: flex-end;
            min-height: 240px;
            padding: 22px;
            border-radius: 12px;
            border: 5px solid #099ec7;
            color: #ffffff;
            text-decoration: none;
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }

        .demo-tile::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
            transition: background 0.2s ease;
        }

        .demo-tile:hover::before,
        .demo-tile:focus-visible::before {
            background: rgba(0, 0, 0, 0.2);
        }

        .demo-tile span {
            position: relative;
            z-index: 1;
            font-weight: 600;
            font-size: 20px;
            text-shadow: 0 2px 2px rgba(0, 0, 0, 0.6);
        }

        .demo-tile--beauty {
            background-image: url("/demo-winnipeg-beauty/assets/hero.jpg");
        }

        .demo-tile--reno {
            background-image: url("/demo-winnipeg-reno-king/assets/hero.jpg");
        }

        .demo-tile--primo {
            background-image: url("/demo-winnipeg-primo-accountants/assets/hero.jpg");
        }

        .about-tile {
            background-color: #0da7d1;
            background-image: linear-gradient(135deg, #0da7d1 0%, #84d0e5 50%, #0da7d1 100%);
            border: 5px solid #099ec7;
            border-radius: 12px;
            padding: 22px;
            color: #ffffff;
        }

        .about-tile h3 {
            margin: 0 0 8px;
            color: #ffffff;
            font-weight: 600;
            font-size: 22px;
            text-shadow: 0 2px 2px #099ec7;
        }

        .about-tile p {
            margin: 0;
            font-size: 17px;
        }

        .section-kicker {
            font-family: "Poppins", system-ui, sans-serif;
            font-size: 20px;              /* eyebrow mobile */
            text-transform: uppercase;
            letter-spacing: 0.18em;
            color: var(--text-muted);
            margin-bottom: 6px;
        }

        .section-title {
            font-family: "Poppins", system-ui, sans-serif;
            margin: 0;
            color: var(--text-body);
        }

        /* Content headings (exclude hero) */
        .content-headline,
        .section-title,
        h1:not(.hero-headline),
        h2 {
            font-family: "Poppins", system-ui, sans-serif;
            font-weight: 600;
            font-size: 48px;
            line-height: 1.1;
            margin: 32px 0 12px;
            color: var(--text-body);
        }

        /* tighten the main top H1 since it's already in a section-header */
        .section-title {
            margin-top: 0;
        }

        /* Sub-heads for process steps */
        h3 {
            font-family: "Poppins", system-ui, sans-serif;
            font-weight: 600;
            font-size: 24px;
            line-height: 1.2;
            margin: 24px 0 8px;
            color: var(--text-body);
        }


        .section p {
            max-width: 800px;
            color: var(--text-muted);
        }

        .about-grid .about-tile p {
            color: #4d4d4d;
        }

        /* SERVICES GRID + CARDS */

        .services-grid {
            display: grid;
            gap: 24px;
        }

        .service-card {
            background: #f9f9f9;
            border-radius: 10px;          /* card radius */
            border: 1px solid rgba(0, 0, 0, 0.06);
            padding: 24px;
        }

        .service-title {
            font-family: "Poppins", system-ui, sans-serif;
            font-size: 22px;
            margin: 0 0 10px;
            color: var(--text-body);
        }

        .service-card p {
            margin: 0;
            color: var(--text-muted);
        }

        /* FOOTER – styles; markup in footer25.php */

        .site-footer {
            background: #ffffff;
            border-top: 1px solid rgba(0, 0, 0, 0.08);
            color: var(--text-muted);
            padding-block: 32px 40px;
        }

        .footer-inner {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            justify-content: space-between;
            align-items: flex-start;
        }

        .footer-small {
            font-size: 13px;
        }

        .footer-nav {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            font-size: 13px;
        }

        .footer-nav a {
            text-decoration: none;
            color: var(--text-muted);
        }

        .footer-nav a:hover {
            color: var(--accent);
        }

        /* RESPONSIVE */

        @media (max-width: 900px) {
            .header-bar {
                align-items: center;
                padding-block: 0;
                flex-wrap: wrap;           /* 👈 this allows rows */
                gap: 0;
            }

            .nav-toggle {
                display: flex;             /* show hamburger on mobile */
            }

            nav.main-nav {
                order: 3;                  /* put nav AFTER logo + hamburger */
                flex-basis: 100%;          /* take full width of row 2 */
                width: 100%;
                margin-top: 0;
                flex-direction: column;
                align-items: flex-start;
                flex-wrap: nowrap;
                border-top: 1px solid rgba(255, 255, 255, 0.25);
                padding-top: 0;
            }

            /* Hide/show nav only when JS is available */
            body.has-js nav.main-nav { display: none; }
            body.has-js nav.main-nav.is-open { display: flex; }

            /* Stack items vertically (you probably already have this bit) */
            .main-nav .nav-list {
                flex-direction: column;
                width: 100%;
            }

            .nav-item {
                width: 100%;
            }

            .nav-item-header {
                display: flex;
                align-items: center;
                justify-content: center;   /* center the group */
                gap: 8px;                  /* space between text and chevron */
                width: 100%;
            }

            /* Show the arrow button on mobile */
            .has-menu .submenu-toggle {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                padding: 0;                /* snug up against the text */
                border: 0;
                background: transparent;
                cursor: pointer;
            }

            /* The little triangle */
            .chevron {
                display: block;
                width: 14px;
                height: 14px;
                                background: url("/assets/down-triangle.png") center / contain no-repeat;
                transform: rotate(0deg);          /* ▼ when closed */
                transition: transform 0.18s ease;
                align-self: center;
                margin-top: 1px;
            }

            /* Rotate when the submenu is open */
            .nav-item.open .chevron {
                transform: rotate(180deg);        /* ▲ / ◀ depending how you see it */
            }

            /* Mobile dropdowns: collapse/expand instead of hover */
            .dropdown {
                position: static;
                min-width: 0;
                background: rgba(0, 0, 0, 0.04);
                                border-radius: 0;
                box-shadow: none;
                padding: 0;
                display: block;
                max-height: 0;
                overflow: hidden;
                text-align: center;
                transition: max-height 0.2s ease, padding 0.2s ease;
            }

            .nav-item.open > .dropdown {
                max-height: 400px;
                padding: 0 0 8px 0;
            }

            .dropdown a {
                padding-inline: 0;
                text-align: center;
            }

            .dropdown a:hover,
            .dropdown a:focus-visible {
                background: transparent;
            }

            .dropdown li:hover,
            .dropdown li:focus-within {
                background: transparent;
            }

            .nav-link {
                flex: 0 0 auto;            /* shrink to text width */
                padding: 16px 0;           /* vertical padding only */
                background: transparent;
            }

            .nav-link:hover,
            .nav-link:focus,
            .nav-link:focus-visible,
            .nav-link:active {
                background: transparent;     /* no white bar */
                outline: none;
            }

            .brand span {
                font-size: 16px;
            }
        }

        @media (max-width: 360px) {
            .brand-text {
                max-width: 110px;
                white-space: normal;
            }
        }

        @media (max-width: 640px) {
            .max-width {
                padding-inline: 16px;
            }

            .hero-section {
                min-height: 320px;
                padding: 12px 28px 28px;
            }

            .hero-headline {
                font-size: 32px;
            }

            .hero-section::after {
                content: "";
                position: absolute;
                inset: 0;
                background: rgba(0, 0, 0, 0.3);
                z-index: 0;
            }

            .hero p {
                font-size: 19px; /* keep body size on mobile too */
            }

            .section {
                padding-block: 48px;
            }

            .about-grid {
                grid-template-columns: 1fr;
            }

            .demo-grid {
                grid-template-columns: 1fr;
            }

            .video-embed {
                width: 100%;
            }

            .split-section-inner,
            .split-section-inner.split-reverse {
                grid-template-columns: 1fr;
            }

            .split-media img {
                max-height: 320px;
            }
        }

        @media (min-width: 640px) {
            .services-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (min-width: 1024px) {
            .services-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (min-width: 641px) and (max-width: 1023px) {
            .about-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .demo-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (min-width: 901px) {
            .site-header .header-inner {
                overflow: visible;
            }
            .has-menu .submenu-toggle {
                display: none;
            }

            /* bump eyebrow + headings on desktop */
            .hero-kicker,
            .section-kicker {
                font-size: 22px;
            }

            .hero-headline {
                font-size: 52px;
            }
        }

    </style>


    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "Rocket Reception",
      "url": "https://rocketreception.ca/",
      "image": "https://rocketreception.ca/assets/logo.png",
      "description": "AI receptionist for small businesses that answers calls, texts, and chats using your real business rules, supporting your team without replacing them.",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Winnipeg",
        "addressRegion": "MB",
        "addressCountry": "CA"
      },
      "areaServed": "CA"
    }
    </script>
</head>
<body>
<div class="page-bg">

    <!-- Sticky header: logo + nav + hamburger -->
    <header id="top" class="site-header">
        <div class="max-width header-inner">
            <div class="header-bar">
                <a href="/" class="brand">
                    <img src="/assets/logo.png" alt="Rocket Reception logo">
                    <span class="brand-text">ROCKET RECEPTION</span>
                </a>

                <!-- Desktop / mobile nav -->
                <nav class="main-nav" aria-label="Primary">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <div class="nav-item-header">
                                <a href="https://rocketreception.ca/" class="nav-link">Home</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <div class="nav-item-header">
                                <a href="https://rocketreception.ca/#demos" class="nav-link">Try the Demos</a>
                            </div>
                        </li>

                        <!-- WHAT IT IS (submenu) -->
                        <li class="nav-item has-menu">
                            <div class="nav-item-header">
                                <a href="https://rocketreception.ca/#what-it-is" class="nav-link">What it is</a>
                                <button class="submenu-toggle" type="button"
                                        aria-expanded="false"
                                        aria-label="Toggle What it is submenu">
                                    <span class="chevron" aria-hidden="true"></span>
                                </button>
                            </div>
                            <ul class="dropdown">
                                <li><a href="https://rocketreception.ca/#what-it-is">What's Rocket Reception</a></li>
                                <li><a href="https://rocketreception.ca/#intro-video">How does it work?</a></li>
                                <li><a href="https://rocketreception.ca/#who-its-for">Who's it For?</a></li>
                                <li><a href="https://rocketreception.ca/#whats-next">What's next?</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <div class="nav-item-header">
                                <a href="https://rocketreception.ca/pricing.php" class="nav-link">Pricing</a>
                            </div>
                        </li>

                        <li class="nav-item nav-item--edge">
                            <div class="nav-item-header">
                                <a href="https://rocketreception.ca/#start-project" class="nav-link">Contact</a>
                            </div>
                        </li>
</ul>
                </nav>



                <!-- Hamburger for mobile -->
                <button class="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
                    <span class="nav-toggle-box">
                        <span class="nav-toggle-line"></span>
                        <span class="nav-toggle-line"></span>
                        <span class="nav-toggle-line"></span>
                    </span>
                </button>
            </div>
        </div>
    </header>
