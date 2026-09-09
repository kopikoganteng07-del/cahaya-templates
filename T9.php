<?php
// Template T9 — auto-generated 2026-09-09 (watcher master Template_Baru)
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
<!doctype html>
<html ⚡ lang="id">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>%%TITLE%%</title>
    <link rel="icon" type="image/x-icon" href="https://kom123.net/images/icon.png" />
    <link rel="canonical" href="https://kom123.net/" />
    <meta name="description" content="%%DESCRIPTION%%">
    <meta name="keywords" content="KOM123, login KOM123, daftar KOM123, livechat KOM123, alternatif KOM123, link KOM123">
    <meta name="publisher" content="KOM123">
    <meta name="robots" content="index, follow">
    <!-- AMP core -->
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600;800&family=Exo+2:wght@400;600&display=swap" rel="stylesheet">
    <!-- AMP boilerplate -->
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <!-- THEME: Futuristic Cyan/Blue -->
    <style amp-custom>:root{--cyan:#ffd700;--cyan2:#ffb300;--blueA:#120e05;--blueB:#050505;--ink:#e9fbff}*{box-sizing:border-box}body{margin:0;color:var(--ink);font-family:"Exo 2",system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial,sans-serif;background:radial-gradient(1200px 600px at 50% -10%,rgba(255,215,0,.15),transparent 60%),radial-gradient(900px 600px at 90% 20%,rgba(255,215,0,.08),transparent 70%),url(asset/background.jpg) center/cover fixed no-repeat #05080f}header{background:linear-gradient(180deg,rgba(12,18,2,.92),rgba(10,10,10,.75));border-bottom:1px solid rgba(255,215,0,.45);box-shadow:0 12px 40px rgba(0,0,0,.6),0 0 28px rgba(255,215,0,.18)}.header-wrapper{max-width:720px;margin:0 auto;padding:10px 12px}.logo{display:flex;justify-content:center;padding:10px 0 4px}.logo amp-img{filter:drop-shadow(0 0 12px rgba(135, 44, 255, .35))}.container{max-width:720px;margin:0 auto;padding:0 16px}.thumbs{position:relative;padding:10px;margin-top:16px;border-radius:20px;overflow:hidden;background:linear-gradient(135deg,rgba(255,215,0,.85),rgba(255,140,0,.25)) padding-box,linear-gradient(135deg,rgba(255,215,0,.75),rgba(255,140,0,.25)) border-box;border:1.5px solid transparent;box-shadow:0 20px 60px rgba(0,0,0,.55),0 0 32px rgba(255,215,0,.18);isolation:isolate}.thumbs amp-img{border-radius:14px}.thumbs::before{content:"";position:absolute;inset:-40%;z-index:-1;border-radius:50%;background:conic-gradient(from 0deg,transparent 0deg,rgba(255,215,0,.16) 40deg,transparent 80deg,rgba(255,235,150,.16) 120deg,transparent 160deg,rgba(255,215,0,.16) 200deg,transparent 240deg,rgba(255,235,150,.16) 300deg,transparent 360deg);filter:blur(18px);animation:rotateRing 8s linear infinite}.thumbs::after{content:"";position:absolute;top:0;bottom:0;left:-25%;width:25%;background:linear-gradient(100deg,transparent 0,rgba(255,255,255,.12) 40%,transparent 80%);filter:blur(6px);animation:sweepX 3.5s linear infinite}.btn-body{margin:18px 0 10px;display:grid;grid-template-columns:1fr;gap:14px;perspective:800px}.btn-items{will-change:transform;animation:floatXYTilt 4.8s ease-in-out infinite}.btn-items:nth-child(2){animation-delay:.6s}.btn-items:nth-child(3){animation-delay:1.2s}.btn-items a{position:relative;display:grid;place-items:center;height:60px;overflow:hidden;border-radius:14px;text-decoration:none;text-transform:uppercase;color:var(--ink);background:linear-gradient(180deg,var(--blueA),var(--blueB)) padding-box,linear-gradient(135deg,var(--cyan),var(--cyan2)) border-box;border:1.5px solid transparent;box-shadow:inset 0 0 24px rgba(255,215,0,.08),0 10px 30px rgba(0,0,0,.5),0 0 22px rgba(255,215,0,.18);transition:transform .2s ease,box-shadow .2s ease;-webkit-tap-highlight-color:transparent;animation:neonPulse 2.4s ease-in-out infinite}.btn-items a::before{content:"";position:absolute;inset:-20% -60% -20% -60%;background:linear-gradient(120deg,transparent 0 45%,rgba(255,255,255,.18) 50%,transparent 55% 100%);transform:translateX(-50%);animation:shine 2.2s linear infinite;mix-blend-mode:screen}.btn-items a::after{content:"";position:absolute;inset:-2px;border-radius:inherit;pointer-events:none;background:radial-gradient(60% 80% at 50% -20%,rgba(255,215,0,.28),transparent 60%),radial-gradient(40% 60% at 100% 50%,rgba(255,180,0,.18),transparent 70%);filter:blur(12px);animation:ringBlink 2.8s ease-in-out infinite;z-index:-1}.btn-items a:hover{transform:translateY(-2px)}.btn-items a b{font-family:Orbitron,system-ui,sans-serif;font-weight:800;letter-spacing:.7px;font-size:16px;animation:textFlicker 4s linear infinite}.btn-items a span{display:none}.article{position:relative;margin:20px 0 80px;padding:22px 18px;border-radius:18px;text-align:center;overflow:hidden;background:linear-gradient(180deg,rgba(20,15,3,.9),rgba(8,8,8,.9)) padding-box,linear-gradient(135deg,var(--cyan),rgba(255,140,0,.25)) border-box;border:1.5px solid rgba(44,48,255,.55);box-shadow:0 16px 50px rgba(0,0,0,.55),0 0 22px rgba(255,215,0,.16);animation:cardPulse 6.5s ease-in-out infinite;isolation:isolate}.article::before{content:"";position:absolute;top:-20%;bottom:-20%;left:-30%;width:30%;background:linear-gradient(100deg,transparent 0,rgba(255,255,255,.1) 45%,transparent 60%);filter:blur(8px);animation:sweepX 4.2s linear infinite}.article::after{content:"";position:absolute;inset:-35%;z-index:-1;border-radius:50%;background:conic-gradient(from 0deg,transparent 0deg,rgba(255,215,0,.12) 60deg,transparent 120deg,rgba(255,180,0,.12) 180deg,transparent 240deg,rgba(255,215,0,.12) 300deg,transparent 360deg);filter:blur(18px);animation:rotateRing 10s linear infinite reverse}.article h1{margin:2px 0 .6rem;line-height:1.15;letter-spacing:.8px;font-family:Orbitron,system-ui,sans-serif;font-weight:800;background:linear-gradient(90deg,#e9fbff,var(--cyan2) 40%,#d2faff);-webkit-background-clip:text;background-clip:text;color:transparent}.article h1::after{content:"";display:block;height:2px;width:min(80%,520px);margin:14px auto 0;border-radius:2px;background:linear-gradient(180deg,var(--cyan),transparent 70%);filter:drop-shadow(0 0 6px var(--cyan))}.article p{color:#e6d9b8;margin:10px auto 0;max-width:620px}.sticky-bottom-menu{position:fixed;bottom:0;left:0;right:0;z-index:997;display:grid;grid-template-columns:repeat(5,1fr);background:linear-gradient(180deg,rgba(20,15,3,.95),rgba(8,8,8,.95));border-top:1px solid rgba(255,215,0,.45);box-shadow:0 -12px 30px rgba(0,0,0,.6),0 0 24px rgba(255,215,0,.18)}.menu-items{padding:10px 6px 8px;text-align:center;text-decoration:none;color:var(--ink)}.menu-icons{width:34px;height:34px;margin:0 auto 6px;border-radius:10px;display:grid;place-items:center;background:rgba(9,16,30,.55);border:1px solid rgba(255,215,0,.35);box-shadow:inset 0 0 8px rgba(255,215,0,.12),0 0 8px rgba(255,215,0,.12);animation:iconPulse 3.2s ease-in-out infinite}.menu-items:nth-child(2) .menu-icons{animation-delay:.4s}.menu-items:nth-child(3) .menu-icons{animation-delay:.8s}.menu-items:nth-child(4) .menu-icons{animation-delay:1.2s}.menu-items:nth-child(5) .menu-icons{animation-delay:1.6s}.menu-icons svg{width:20px;height:20px;fill:#ffd700;stroke:#ffec99;stroke-width:1.2}.menu-text{font-size:12px;font-weight:700;letter-spacing:.2px}.menu-login{position:relative;z-index:999;align-self:flex-end}@keyframes rotateRing{to{transform:rotate(360deg)}}@keyframes sweepX{from{transform:translateX(-120%)}to{transform:translateX(140%)}}@keyframes shine{from{transform:translateX(-60%)}to{transform:translateX(60%)}}@keyframes neonPulse{0%{box-shadow:inset 0 0 18px rgba(255,215,0,.06),0 8px 24px rgba(0,0,0,.45),0 0 14px rgba(255,215,0,.14)}50%{box-shadow:inset 0 0 32px rgba(255,215,0,.14),0 12px 40px rgba(0,0,0,.6),0 0 30px rgba(255,215,0,.28)}100%{box-shadow:inset 0 0 20px rgba(255,215,0,.08),0 8px 26px rgba(0,0,0,.48),0 0 18px rgba(255,215,0,.18)}}@keyframes textFlicker{0%,100%{opacity:1;text-shadow:0 0 6px rgba(255,215,0,.6),0 0 18px rgba(255,180,0,.3)}4%,8%{opacity:.85;text-shadow:0 0 8px rgba(255,220,80,.75),0 0 22px rgba(255,180,0,.4)}40%,60%{opacity:.95;text-shadow:0 0 12px rgba(255,215,0,.85),0 0 26px rgba(255,160,0,.45)}}@keyframes ringBlink{0%,100%{opacity:.22}50%{opacity:.45}}@keyframes cardPulse{0%,100%{box-shadow:0 16px 50px rgba(0,0,0,.55),0 0 22px rgba(255,215,0,.16);border-color:rgba(255,215,0,.55)}50%{box-shadow:0 18px 56px rgba(0,0,0,.6),0 0 32px rgba(255,215,0,.26));border-color:rgba(255,140,0,.85)}}@keyframes iconPulse{0%,100%{box-shadow:inset 0 0 8px rgba(255,180,0,.12),0 0 8px rgba(255,215,0,.12)}50%{box-shadow:inset 0 0 12px rgba(255,215,0,.22),0 0 14px rgba(255,140,0,.22)}}@keyframes floatXYTilt{0%{transform:translate3d(0,0,0) rotateZ(0)}20%{transform:translate3d(3px,-7px,0) rotateZ(-.6deg)}40%{transform:translate3d(0,0,0) rotateZ(0)}60%{transform:translate3d(-3px,-5px,0) rotateZ(.6deg)}80%{transform:translate3d(2px,2px,0) rotateZ(-.3deg)}100%{transform:translate3d(0,0,0) rotateZ(0)}}@media(max-width:720px){h1{font-size:20px}.article p{font-size:14px}}@media (prefers-reduced-motion:reduce){.article,.article::after,.article::before,.btn-items,.btn-items a,.btn-items a b,.btn-items a::after,.btn-items a::before,.menu-icons,.thumbs::after,.thumbs::before{animation:none}}</style>
  </head>
  <body>
    <header>
      <div class="header-wrapper">
        <div class="logo">
          <amp-img src="https://kom123.net/images/logo.png" width="200" height="60" alt="Logo" layout="fixed"></amp-img>
        </div>
      </div>
    </header>
    <section class="content">
      <div class="container">
        <div class="thumbs">
          <amp-img src="https://kom123.net/images/banner.png" width="969" height="969" alt="Banner" layout="responsive"></amp-img>
        </div>
        <div class="btn-body">
          <div class="btn-items">
            <a href="%%CTA_URL%%" rel="nofollow noreferrer" target="_blank" title="Daftar KOM123">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <b>DAFTAR</b>
            </a>
          </div>
          <div class="btn-items">
            <a href="%%CTA_URL%%" rel="nofollow noreferrer" target="_blank" title="LiveChat KOM123">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <b>LIVECHAT</b>
            </a>
          </div>
          <div class="btn-items">
            <a href="%%CTA_URL%%" rel="nofollow noreferrer" target="_blank" title="Login KOM123">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <b>LOGIN</b>
            </a>
          </div>
        </div>
        <div class="article">
          <h1>KOM123 : Cara Klaim Bonus New Member Live Casino Terbaru</h1>
          <p>KOM123 Pelajari langkah aktifkan bonus promosi, syarat tersembunyinya, dan tips maksimalkan bonus rollingan agar mendapatkan tambahan modal sejak hari pertama. </p>
        <p class="copyright" style="color:#fffffffff; font-size:14px; text-align:center; margin-top:8px;">© 2026
            KOM123 |
            "_"</a>
      </div>
    </section>
    <!-- Sticky Bottom Menu -->
    <div class="sticky-bottom-menu">
      <a class="menu-items" href="https://kom123.net/" target="_blank" rel="nofollow noopener">
        <div class="menu-icons">
          <svg viewBox="0 0 24 24">
            <polygon points="12,3 3,11 6,11 6,20 10,20 10,14 14,14 14,20 18,20 18,11 21,11 12,3" />
          </svg>
        </div>
        <div class="menu-text">Home</div>
      </a>
      <a class="menu-items" href="%%CTA_URL%%" target="_blank" rel="nofollow noopener">
        <div class="menu-icons">
          <svg viewBox="0 0 24 24">
            <rect x="4" y="4" width="7" height="7" rx="1.5" />
            <rect x="13" y="4" width="7" height="7" rx="1.5" />
            <rect x="4" y="13" width="7" height="7" rx="1.5" />
            <rect x="13" y="13" width="7" height="7" rx="1.5" />
          </svg>
        </div>
        <div class="menu-text">Apps</div>
      </a>
      <a class="menu-items menu-login" href="%%CTA_URL%%" target="_blank" rel="nofollow noopener">
        <div class="menu-icons">
          <svg viewBox="0 0 24 24">
            <circle cx="12" cy="7.5" r="3.2" fill="none" />
            <path d="M5 20c0-3.6 3-6.2 7-6.2s7 2.6 7 6.2" fill="none" />
          </svg>
        </div>
        <div class="menu-text">Daftar</div>
      </a>
      <a class="menu-items" href="%%CTA_URL%%" target="_blank" rel="nofollow noopener">
        <div class="menu-icons">
          <svg viewBox="0 0 24 24">
            <path d="M3.5 12.5l8-8H20v8l-8 8-8.5-8z" fill="none" />
            <circle cx="16.2" cy="7.8" r="1.6" />
          </svg>
        </div>
        <div class="menu-text">Bonus</div>
      </a>
      <a class="menu-items" href="%%CTA_URL%%" target="_blank" rel="nofollow noopener">
        <div class="menu-icons">
          <svg viewBox="0 0 24 24">
            <rect x="3" y="4" width="18" height="12" rx="3" ry="3" fill="none" />
            <circle cx="9" cy="10" r="1.2" />
            <circle cx="12" cy="10" r="1.2" />
            <circle cx="15" cy="10" r="1.2" />
          </svg>
        </div>
        <div class="menu-text">Livechat</div>
      </a>
    </div>
  </body>
</html>
HTMLPAGE;
$page = strtr($page, ['%%TITLE%%'=>$tit,'%%DESCRIPTION%%'=>$des,'%%SITE%%'=>$site,'%%URL%%'=>$url,'%%DOMAIN%%'=>$dom,'%%CTA_URL%%'=>$cta]);
header('Content-Type: text/html; charset=utf-8');
echo $page;
