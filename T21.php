<?php
// Template T21 — auto-generated 2026-09-10 (watcher master Template_Baru)
$d = null;
foreach ([__DIR__ . '/data/data.json', __DIR__ . '/data.json'] as $f) {
    if (is_readable($f)) { $d = json_decode(file_get_contents($f), true); if ($d) break; }
}
$site = $d['homepage']['site'] ?? strtoupper(preg_replace('/^www\./', '', $_SERVER['HTTP_HOST'] ?? ''));
$url = $d['url'] ?? ('https://' . ($_SERVER['HTTP_HOST'] ?? ''));
$dom = $d['domain'] ?? preg_replace('/^www\./', '', parse_url($url, PHP_URL_HOST) ?? '');
$tit = $d['homepage']['title'] ?? $site;
$des = $d['homepage']['description'] ?? '';
$cta = $d['cta_url'] ?? $url;
$page = <<<'HTMLPAGE'
<!DOCTYPE html>
<html amp lang="id">
<head>
  <!-- ======================== HEAD ======================== -->

  <!-- Basic Meta -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

  <!-- SEO Meta -->
  <title>%%TITLE%%</title>
  <meta name="description" content="%%DESCRIPTION%%">
  <meta name="robots" content="index,follow">
  <meta name="keywords" content="ASIA777, ASIA777, ASIA777 daftar, ASIA777 login, ASIA777 resmi, panduan ASIA777, ASIA777 gacor, berbagai kondisi game, situs ASIA777, akses ASIA777" />
  <link href="https://asia777jp.com/" rel="canonical" itemprop="mainEntityOfPage" />
  <link rel="amphtml" href="https://asia777jp.com/"/>
  <link rel="alternate" href="https://asia777jp.com/" hreflang="en"/>
  <link rel="alternate" href="https://asia777jp.com/" hreflang="id"/>
  <link rel="alternate" href="https://asia777jp.com/" hreflang="x-default"/>
  <link rel="alternate" href="https://asia777jp.com/" hreflang="en-US"/>
  <link rel="icon" type="image/png" href="https://asia777jp.com/images/favicon.png" sizes="16x16">

  <!-- Itemprop Meta -->
  <meta itemprop="name" content="ASIA777">
  <meta itemprop="description" content="ASIA777 Temukan pilihan situs lotre modern dengan tampilan praktis, akses mudah, beragam permainan, serta fitur lengkap yang nyaman digunakan kapan saja.">
  <meta itemprop="image" content="https://asia777jp.com/images/banner.png">

  <!-- Open Graph Meta -->
  <meta property="og:url" content="https://asia777jp.com/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="%%TITLE%%">
  <meta property="og:description" content="%%DESCRIPTION%%">
  <meta property="og:image" content="https://asia777jp.com/images/banner.png">

  <!-- Twitter Meta -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="ASIA777">
  <meta name="twitter:creator" content="ASIA777">
  <meta name="twitter:title" content="%%TITLE%%">
  <meta name="twitter:description" content="%%DESCRIPTION%%">
  <meta name="twitter:image" content="https://asia777jp.com/images/banner.png">

  <!-- Preconnect & AMP Script -->
  <link rel="preconnect" href="https://cdn.ampproject.org/">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
  <script async src="https://cdn.ampproject.org/v0.js"></script>

  <!-- Font Import -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap">

  <!-- AMP Boilerplate -->
  <style amp-boilerplate>
    body {
      -webkit-animation: -amp-start 8s steps(1,end) 0s 1 normal both;
      -moz-animation: -amp-start 8s steps(1,end) 0s 1 normal both;
      -ms-animation: -amp-start 8s steps(1,end) 0s 1 normal both;
      animation: -amp-start 8s steps(1,end) 0s 1 normal both;
    }
    @-webkit-keyframes -amp-start { from { visibility: hidden; } to { visibility: visible; } }
    @-moz-keyframes -amp-start { from { visibility: hidden; } to { visibility: visible; } }
    @-ms-keyframes -amp-start { from { visibility: hidden; } to { visibility: visible; } }
    @-o-keyframes -amp-start { from { visibility: hidden; } to { visibility: visible; } }
    @keyframes -amp-start { from { visibility: hidden; } to { visibility: visible; } }
  </style>
  <noscript>
    <style amp-boilerplate>
      body {
        -webkit-animation: none;
        -moz-animation: none;
        -ms-animation: none;
        animation: none;
      }
    </style>
  </noscript>

  <!-- ======================== CSS / STYLE ======================== -->
  <style amp-custom>
    /* Root Color Variables */
    :root {
      --primary-color: #ff8a00;
      --secondary-color: #8a3f00;
      --dark-color: #120b06;
      --darkest-color: #1a0d05;
      --text-common-color: #ffffff;
      --text-btn-primary-color: #1a0d05;
      --border-primary: #ff8a00;
      --bg-info-content: #321707;
      --bg-success-color: #28a745;
      --infobar-linear-gradient-color: linear-gradient(#ff8a00, #e06f00);
      --infobar-linear-gradient-color-alpha: linear-gradient(#8f4300, #4a2108);
      --shadow-primary: 0 0 10px -4px rgba(255, 138, 0, 0.7);
      --shadow-soft: 0 0 10px -1px rgba(138, 63, 0, 0.7);
    }

    /* Reset */
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    html {
      height: 100%;
      font-family: sans-serif;
      font-size: 0.9rem;
      line-height: 1.15;
      text-size-adjust: 100%;
      -webkit-tap-highlight-color: transparent;
    }

    body {
      position: relative;
      min-height: 100%;
      margin: 0;
      font-family: "Exo 2", sans-serif;
      font-size: 1.05rem;
      line-height: 1.5;
      color: var(--text-common-color);
      background-color: var(--darkest-color);
    }

    a {
      color: var(--primary-color);
      text-decoration: none;
    }

    a:hover {
      color: #e06f00;
    }

    amp-img,
    iframe,
    object,
    svg,
    video {
      vertical-align: middle;
    }

    amp-img {
      max-width: 100%;
      height: auto;
    }

    /* Background Wrapper */
    .custom-background {
      background-image: url("");
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    /* Main Layout */
    .page-wrap {
      width: 900px;
      max-width: 100%;
      margin: 0 auto;
      padding-top: 63px;
      padding-bottom: 90px;
      background-color: var(--dark-color);
      box-shadow: var(--shadow-soft);
    }

    .container {
      width: 900px;
      max-width: 100%;
      margin: 0 auto;
      background-color: var(--darkest-color);
      box-shadow: var(--shadow-primary);
    }

    /* Top Navigation */
    .top-nav {
      position: fixed;
      top: 0;
      right: 0;
      left: 0;
      z-index: 1030;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      padding: 0.64rem 1rem;
      background-color: var(--darkest-color);
      width: 900px;
      max-width: 100%;
      margin: 0 auto;
      box-shadow: var(--shadow-primary);
    }

    .nav-logo amp-img {
      width: 100%;
      max-width: 160px;
    }

    .livechat-btn {
      display: inline-block;
      padding: 0.5rem 0.75rem;
      font-size: 1rem;
      line-height: 1;
      font-weight: 600;
      color: var(--text-btn-primary-color);
      background: var(--infobar-linear-gradient-color);
      border: 1px solid hsla(0, 0%, 100%, 0.1);
      border-radius: 0.25rem;
      animation: blink 1.2s linear infinite;
    }

    .livechat-btn:hover {
      background: #e06f00;
      color: var(--text-btn-primary-color);
    }

    /* Running Text / Info Bar */
    .info-area {
      position: relative;
      display: flex;
      align-items: center;
      width: 100%;
      color: var(--text-common-color);
      background-image: var(--infobar-linear-gradient-color);
    }

    .info-area::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: calc(100% - 35px);
      height: 100%;
      background-color: var(--bg-info-content);
      border-top: 2px solid var(--border-primary);
      border-bottom: 1px solid var(--border-primary);
      transform: skew(-35deg, 0deg);
      transform-origin: bottom left;
    }

    .info-bar {
      position: relative;
      margin-right: 35px;
      padding: 0.25rem 0.5rem;
      font-size: 1.1rem;
      color: #000000;
      background-image: var(--infobar-linear-gradient-color);
    }

    .info-bar::before,
    .info-bar::after {
      content: "";
      position: absolute;
      top: 0;
      height: 100%;
      background-image: var(--infobar-linear-gradient-color);
      transform: skew(-35deg, 0deg);
      transform-origin: bottom left;
    }

    .info-bar::before {
      left: 0;
      width: 100%;
    }

    .info-bar::after {
      right: -15px;
      width: 10px;
    }

    .info-bar-text {
      position: relative;
      font-weight: 700;
    }

    .info-text {
      position: relative;
      z-index: 1;
      flex: 1 1 auto;
      overflow: hidden;
      white-space: nowrap;
      padding: 0.25rem 0;
    }

    .marquee-container {
      margin-top: 4px;
    }

    .marquee {
      display: flex;
      align-items: center;
      min-width: 100%;
      animation: marquee 30s linear infinite;
    }

    .marquee > div {
      width: 100%;
    }

    /* Main Banner */
    .banner-wrap {
      position: relative;
      width: 100%;
      overflow: hidden;
    }

    .banner-wrap amp-img {
      display: block;
      width: 100%;
      padding: 0.5rem;
      border-radius: 1rem;
    }

    /* Action Buttons */
    .action-row {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      margin-right: 0;
      margin-left: 0;
    }

    .action-col {
      position: relative;
      flex-basis: 0;
      flex-grow: 1;
      max-width: 100%;
      padding-right: 0;
      padding-left: 0;
    }

    .action-btn {
      display: block;
      width: 100%;
      padding: 0.45rem 0.75rem;
      font-size: 1.25rem;
      line-height: 1.5;
      text-align: center;
      color: var(--text-btn-primary-color);
      border: 0;
    }

    .action-btn.login {
      color: var(--text-common-color);
      background: var(--infobar-linear-gradient-color-alpha);
    }

    .action-btn.register {
      background: var(--infobar-linear-gradient-color);
    }

    .action-btn:hover {
      font-weight: 600;
      color: #2a1200;
    }

    /* Category Menu */
    .category-menu {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      margin: 0.5rem;
      padding: 0.25rem;
      text-align: center;
      font-size: 0.9rem;
      background-color: var(--darkest-color);
      border: 1px solid var(--border-primary);
      border-radius: 9999px;
    }

    .category-item {
      flex: 1 1 20%;
      min-width: 90px;
      padding: 0.5rem 0;
    }

    .category-item a {
      display: flex;
      flex-direction: column;
      color: var(--text-common-color);
    }

    .category-item a:hover {
      color: var(--primary-color);
      transform: scale(1.05);
      transition: 0.3s;
    }

    .category-icon {
      display: block;
      margin-bottom: 0.2rem;
      font-size: 1.5rem;
      line-height: 1;
    }

    /* Jackpot Box */
    .jackpot-box {
      margin: 0.25rem;
      padding: 0.5rem 1rem;
      text-align: center;
      background-color: var(--darkest-color);
      border: 1px solid var(--border-primary);
      border-radius: 0.5rem;
    }

    .title-underline {
      position: relative;
      height: 1px;
      margin-top: 0.5rem;
      margin-bottom: 1.3rem;
    }

    .title-underline::before {
      content: "";
      position: absolute;
      top: 0;
      left: 30%;
      right: 30%;
      width: 40%;
      height: 1px;
      background-image: var(--infobar-linear-gradient-color);
    }

    .title-underline::after {
      content: "";
      position: absolute;
      z-index: 1;
      top: -4px;
      left: calc(50% - 5px);
      width: 10px;
      height: 10px;
      transform: rotate(45deg);
      background-color: var(--primary-color);
      border-right: 1px solid var(--primary-color);
      border-bottom: 1px solid var(--primary-color);
    }

    .jackpot-frame {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      overflow: hidden;
      background: linear-gradient(to right, transparent, #ff8a00 50%, transparent);
      border: 1px solid var(--border-primary);
      border-radius: 0.25rem;
    }

    .jackpot-display {
      width: 100%;
      padding: 16px;
      letter-spacing: 5px;
      text-align: center;
    }

    .jackpot-display > div {
      padding: 0.5rem;
      color: #ffffff;
      font-size: 2.1rem;
      line-height: 2.5rem;
      letter-spacing: 1px;
      background-color: #321707;
      box-shadow: inset 0 0 2px 1px var(--darkest-color);
      border-radius: 0.25rem;
    }

    .lights-row {
      position: absolute;
      left: 0;
      display: flex;
      justify-content: space-between;
      width: 100%;
      height: 10px;
      padding: 0 3px;
    }

    .lights-row.top {
      top: 3px;
    }

    .lights-row.bottom {
      bottom: 3px;
    }

    .light-big,
    .light-small {
      background-color: #ffb000;
      border-radius: 50%;
    }

    .light-big {
      width: 10px;
      height: 10px;
      animation: pulseLight 1s ease infinite;
    }

    .light-small {
      width: 5px;
      height: 5px;
      animation: pulseLight 1s steps(1) infinite;
    }

    /* Info Table */
    .table-wrap {
      padding: 1rem;
    }

    table {
      width: 100%;
      border-radius: 12px;
      border-collapse: separate;
      border-spacing: 0.4rem;
    }

    td {
      padding: 10px;
      background: var(--darkest-color);
      border-radius: 12px;
    }

    td:first-child {
      width: 35%;
      font-weight: 700;
    }

    /* Article / SEO Text */
    .headline {
      padding: 0 1rem 1rem;
    }

    .headline h1 {
      margin-top: 1.2rem;
      margin-bottom: 0.8rem;
      font-size: 2.1rem;
      line-height: 1.2;
      font-weight: 500;
    }

    .text-highlight {
      color: var(--primary-color);
    }

    .headline-box {
      padding: 0.75rem 1rem;
      text-align: center;
      background-color: var(--darkest-color);
      border: 1px solid var(--border-primary);
      border-radius: 0.5rem;
    }

    .headline-lead {
      font-size: 1.4rem;
      line-height: 2rem;
      font-weight: 700;
    }

    .footer-note {
      padding: 1rem;
      text-align: center;
      color: #d9b08a;
    }

    .footer-note a {
      color: #d8c1ad;
      font-weight: 700;
    }

    /* Bottom Navigation */
    .nav-bottom {
      position: fixed;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 40;
      width: 900px;
      max-width: 100%;
      margin: 0 auto;
      background: var(--infobar-linear-gradient-color);
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }

    .nav-bottom ul {
      display: flex;
      width: 100%;
      margin: 0;
      padding: 0.25rem;
      list-style: none;
    }

    .nav-bottom li {
      flex-basis: 0;
      flex-grow: 1;
      font-size: 0.75rem;
      line-height: 1rem;
      text-align: center;
    }

    .nav-bottom a {
      display: flex;
      flex-direction: column;
      padding: 0.5rem 0.25rem;
      color: var(--text-btn-primary-color);
      font-size: 0.75rem;
      line-height: 1rem;
      font-weight: 600;
      text-transform: uppercase;
      white-space: nowrap;
    }

    .nav-bottom a:hover {
      color: var(--text-common-color);
      background-color: var(--darkest-color);
      border-top-left-radius: 0.375rem;
      border-top-right-radius: 0.375rem;
    }

    .promo-link {
      color: var(--secondary-color);
      background: #ff8a00;
      border-radius: 0.5rem;
    }

    .nav-icon {
      display: block;
      margin-bottom: 0.15rem;
      font-size: 1rem;
    }

    /* Animation */
    @keyframes marquee {
      0% { transform: translateX(100%); }
      100% { transform: translateX(-100%); }
    }

    @keyframes blink {
      0% { opacity: 0; }
      50% { opacity: 0.8; }
      100% { opacity: 1; }
    }

    @keyframes pulseLight {
      50% { background-color: var(--text-common-color); }
    }

    /* Responsive */
    @media only screen and (max-width: 600px) {
      .jackpot-display > div {
        font-size: 1.18rem;
        line-height: 1.7rem;
      }

      .category-item {
        flex: 1 1 25%;
      }
    }

    @media only screen and (max-width: 360px) {
      .jackpot-display > div {
        font-size: 0.9rem;
        line-height: 1rem;
      }

      .category-item {
        flex: 1 1 33.33%;
      }
    }
  </style>
</head>
<body class="custom-background">
  <!-- ======================== BODY ======================== -->

  <!-- Main Wrapper -->
  <div class="page-wrap">

    <!-- ======================== TOP NAV ======================== -->
    <nav class="top-nav container">
      <a class="nav-logo" href="/">
        <amp-img src="https://asia777jp.com/images/logo.png" alt="ASIA777" width="160" height="45" layout="fixed"></amp-img>
      </a>
      <a class="livechat-btn" href="%%CTA_URL%%" target="_blank">LIVECHAT</a>
    </nav>

    <!-- ======================== MAIN CONTENT ======================== -->
    <div class="container">

      <!-- Running Text / Marquee -->
      <div class="info-area">
        <div class="info-bar">
          <div class="info-bar-text">INFO</div>
        </div>
        <div class="info-text">
          <div class="marquee-container">
            <div class="marquee">
              <div><span>ASIA777 Temukan pilihan situs lotre modern dengan tampilan praktis, akses mudah, beragam permainan, serta fitur lengkap yang nyaman digunakan kapan saja.</span></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Banner -->
      <div class="banner-wrap">
        <amp-img
          src="https://asia777jp.com/images/banner.png"
          alt="ASIA777"
          width="1200"
          height="675"
          layout="responsive">
        </amp-img>
      </div>

      <!-- CTA Buttons -->
      <div class="action-row">
        <div class="action-col">
          <a href="%%CTA_URL%%" target="_blank" class="action-btn login">MASUK</a>
        </div>
        <div class="action-col">
          <a href="%%CTA_URL%%" target="_blank" class="action-btn register">DAFTAR</a>
        </div>
      </div>

      <!-- Category Menu -->
      <div class="category-menu">
        <div class="category-item"><a href="/"><span class="category-icon">🎯</span>TOGEL</a></div>
        <div class="category-item"><a href="/"><span class="category-icon">🎰</span>SLOT</a></div>
        <div class="category-item"><a href="/"><span class="category-icon">🎲</span>CASINO</a></div>
        <div class="category-item"><a href="/"><span class="category-icon">🕹️</span>ARCADE</a></div>
        <div class="category-item"><a href="/"><span class="category-icon">⚽</span>BOLA</a></div>
      </div>

      <!-- Jackpot / Highlight Box -->
      <div class="jackpot-box">
        <div class="title-underline"></div>
        <div class="jackpot-frame">
          <div class="jackpot-display">
            <div>ASIA777</div>
          </div>
          <div class="lights-row top">
            <span class="light-big"></span><span class="light-small"></span><span class="light-big"></span><span class="light-small"></span><span class="light-big"></span><span class="light-small"></span><span class="light-big"></span><span class="light-small"></span><span class="light-big"></span><span class="light-small"></span><span class="light-big"></span><span class="light-small"></span><span class="light-big"></span><span class="light-small"></span><span class="light-big"></span>
          </div>
          <div class="lights-row bottom">
            <span class="light-big"></span><span class="light-small"></span><span class="light-big"></span><span class="light-small"></span><span class="light-big"></span><span class="light-small"></span><span class="light-big"></span><span class="light-small"></span><span class="light-big"></span><span class="light-small"></span><span class="light-big"></span><span class="light-small"></span><span class="light-big"></span><span class="light-small"></span><span class="light-big"></span>
          </div>
        </div>
      </div>

      <!-- Info Table -->
      <div class="table-wrap">
        <table>
          <tbody>
            <tr><td>Nama Platform</td><td>ASIA777</td></tr>
            <tr><td>Status Platform</td><td>Aktif & Terverifikasi</td></tr>
            <tr><td>Akses Layanan</td><td>24 Jam Setiap Hari</td></tr>
            <tr><td>Performa Sistem</td><td>Cepat & Stabil</td></tr>
            <tr><td>Keamanan Data</td><td>Sistem Perlindungan Modern</td></tr>
            <tr><td>Metode Pembayaran</td><td>Bank & E-Wallet</td></tr>
            <tr><td>Customer Support</td><td>Responsif Setiap Saat</td></tr>
          </tbody>
        </table>
      </div>

      <!-- SEO Content / Article Area -->
      <div class="headline">
        <h1 style="text-align: center;"><span class="text-highlight">ASIA777 - Indonesia's Most Famous Modern Lottery Site Easy to Win</span></h1>
        <div class="headline-box">
          <div class="headline-lead"> ASIA777 Temukan pilihan situs lotre modern dengan tampilan praktis, akses mudah, beragam permainan, serta fitur lengkap yang nyaman digunakan kapan saja.</div>
          <div class="title-underline"></div>
          <div class="footer-note">
            Copyright © <a href="/">ASIA777</a>
          </div>
        </div>
      </div>
    </div>

    <!-- ======================== BOTTOM NAV ======================== -->
    <div class="nav-bottom">
      <ul>
        <li><a href="#"><span class="nav-icon">🏠</span>Beranda</a></li>
        <li><a href="%%CTA_URL%%" target="_blank"><span class="nav-icon">📝</span>Daftar</a></li>
        <li><a href="%%CTA_URL%%" target="_blank"><span class="nav-icon">👤</span>Masuk</a></li>
        <li><a href="%%CTA_URL%%" target="_blank" class="promo-link"><span class="nav-icon">🎁</span>Promo</a></li>
        <li><a href="%%CTA_URL%%" target="_blank"><span class="nav-icon">💬</span>Live Chat</a></li>
      </ul>
    </div>
  </div>
</body>
</html>
HTMLPAGE;
$page = strtr($page, ['%%TITLE%%'=>$tit,'%%DESCRIPTION%%'=>$des,'%%SITE%%'=>$site,'%%URL%%'=>$url,'%%DOMAIN%%'=>$dom,'%%CTA_URL%%'=>$cta]);
header('Content-Type: text/html; charset=utf-8');
echo $page;
