<?php
// Template T24 — auto-generated 2026-09-10 (watcher master Template_Baru)
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
<html ⚡ lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="robots" content="index, follow">
    <title>%%TITLE%%</title>
    <meta name="description"content="RAGAMTOTO merupakan gerai TOTO 4D paling laris di asia saat ini karena memiliki RAGAM pasaran togel dan juga menyediakan bocoran yang sangat interaktif untuk para bettor menghasilkan jackpot paus hanya dalam sekali betting.">
    <link rel="canonical" href="%%CTA_URL%%">
    <link rel="alternate" href="%%CTA_URL%%" hreflang="id" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="%%SITE%%" />
    <meta property="og:title" content="%%TITLE%%" />
    <meta property="og:description" content="%%DESCRIPTION%%" />
    <meta property="og:url" content="%%CTA_URL%%" />
    <meta property="og:image" content="%%CTA_URL%%images/banner.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:locale" content="id_ID" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="%%TITLE%%" />
    <meta name="twitter:description" content="%%DESCRIPTION%%" />
    <meta name="twitter:image" content="%%CTA_URL%%images/banner.png" />
    <link rel="icon" href="%%CTA_URL%%images/favicon.png" />
    <link rel="apple-touch-icon" href="%%CTA_URL%%images/favicon.png" />
    <script async src="https://cdn.ampproject.org/v0.js"></script>

    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

<style amp-custom>
body{background:#120C03;background-image:radial-gradient(circle at 50% -10%,rgba(255,215,0,.22),transparent 38%),radial-gradient(circle at 0% 100%,rgba(255,193,7,.10),transparent 35%),radial-gradient(circle at 100% 50%,rgba(212,160,23,.08),transparent 32%);background-attachment:fixed;font-family:system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Arial,sans-serif;color:#fff}
a:-webkit-any-link{text-decoration:none}
.container{max-width:900px;margin:auto}
.article-wrapper{background:linear-gradient(135deg,#8C6B00 0%,#D4A017 20%,#FFF36A 40%,#F8D325 55%,#B8860B 75%,#FFE97A 100%);border-radius:12px;padding:20px;border:1px solid rgba(255,255,255,.5);box-shadow:0 0 5px rgba(255,255,255,.45),0 0 12px rgba(255,215,0,.70),0 0 25px rgba(212,160,23,.45),inset 0 0 12px rgba(255,255,255,.12);transition:box-shadow .35s ease}
.article-wrapper:hover{box-shadow:0 0 7px rgba(255,255,255,.7),0 0 16px rgba(255,215,0,.90),0 0 32px rgba(211, 144, 0, 0.65),inset 0 0 16px rgba(255,255,255,.18)}
h1,h2{text-align:center;margin-bottom:15px}
p{margin-bottom:12px;text-align:justify}
.logo-wrapper{max-width:200px;margin:-30px auto 25px;background:#B8860B;padding:15px;border-radius:0 0 25px 25px;box-shadow:0 0 4px rgba(255,255,255,.9),0 0 10px #FFD700,0 0 22px rgba(255, 196, 0, 0.75),0 0 40px rgba(255, 187, 0, 0.4);transition:box-shadow .35s ease}
.logo-wrapper:hover{box-shadow:0 0 6px #fff,0 0 14px #FFD700,0 0 28px #FFD700,0 0 50px rgba(255,215,0,.70)}
.table-wrapper{position:relative;background:linear-gradient(145deg,#3A2500,#1A1003);border:1px solid rgba(255,193,7,.35);border-radius:14px;padding:16px;margin-top:25px;overflow:hidden;box-shadow:0 8px 30px rgba(0,0,0,.35),0 0 25px rgba(255,193,7,.08)}
.table-wrapper:before{content:"";position:absolute;top:-80px;right:-80px;width:180px;height:180px;background:rgba(255,193,7,.12);filter:blur(55px);border-radius:50%;pointer-events:none}
.table-wrapper:after{content:"";position:absolute;bottom:-100px;left:-80px;width:180px;height:180px;background:rgba(255,193,7,.08);filter:blur(60px);border-radius:50%;pointer-events:none}
table{position:relative;z-index:1;width:100%;border-collapse:separate;border-spacing:0;overflow:hidden;font-size:14px;color:#FFF8D6}
th{position:relative;background:linear-gradient(135deg,#FFD700,#B8860B);color:#fff;padding:14px;text-align:center;font-size:15px;font-weight:800;letter-spacing:.8px;text-transform:uppercase;border:1px solid rgba(255,255,255,.55);box-shadow:0 0 5px rgba(255,255,255,.45),0 0 12px rgba(255,215,0,.55),0 0 25px rgba(255,193,7,.35),inset 0 0 12px rgba(255,255,255,.18);text-shadow:0 0 4px rgba(255,255,255,.8),0 0 10px rgba(255,193,7,.65);transition:box-shadow .35s ease,filter .35s ease}
th:hover{filter:brightness(1.12);box-shadow:0 0 7px rgba(255,255,255,.75),0 0 16px rgba(255, 208, 0, 0.75),0 0 32px rgba(255,215,0,.55),inset 0 0 16px rgba(255,255,255,.25)}
td{padding:12px 13px;border-bottom:1px solid rgba(255,193,7,.16);background:rgba(25,15,3,.42);transition:all .3s ease}
tr:last-child td{border-bottom:0}
td:first-child{width:42%;font-weight:700;color:#FFD700}
tbody tr{transition:all .3s ease}
tbody tr:hover td{background:rgba(255,193,7,.08);color:#fff;box-shadow:inset 0 0 18px rgba(255,193,7,.04)}
tbody tr:hover td:first-child{text-shadow:0 0 8px rgba(255,215,0,.70)}
td strong{color:#fff;text-shadow:0 0 8px rgba(255, 208, 0, 0.5)}
.akses-live{display:inline-flex;align-items:center;justify-content:center;padding:7px 14px;border:1px solid #FFD700;border-radius:7px;background:linear-gradient(135deg,rgba(255,193,7,.16),rgba(255,193,7,.04));color:#FFD700;font-weight:800;text-decoration:none;letter-spacing:.3px;box-shadow:0 0 10px rgba(255, 196, 0, 0.15);transition:all .3s ease}
.akses-live:hover{background:#FFD700;color:#fff;box-shadow:0 0 8px #FFD700,0 0 22px rgba(255,193,7,.65);transform:translateY(-2px)}
@media(max-width:600px){.table-wrapper{padding:10px;border-radius:11px}table{font-size:13px}th{padding:12px 8px;font-size:13px}td{padding:10px 8px}td:first-child{width:40%}.akses-live{padding:6px 10px;font-size:12px}}
.container-btn{position:fixed;bottom:0;left:0;right:0;padding:10px;background:#160D02;z-index:999}
.btn-wrapper{display:flex;gap:12px}
.btn{flex:1;padding:14px 18px;text-align:center;font-weight:700;font-size:14px;letter-spacing:.3px;border-radius:50px;background:linear-gradient(135deg,#FFF36A 0%,#F8D325 45%,#B8860B 100%);color:#fff;border:1px solid rgba(255,255,255,.4);box-shadow:0 0 6px rgba(255, 208, 0, 0.6),0 0 14px rgba(255,193,7,.35),inset 0 1px 0 rgba(255,255,255,.5);text-shadow:0 0 5px rgba(255,255,255,.7);transition:all .25s ease}
.btn:hover{background:linear-gradient(135deg,#FFF8A6 0%,#FFD84D 45%,#D4A017 100%);box-shadow:0 0 8px #FFD700,0 0 20px #FFD700,0 0 40px rgba(255, 208, 0, 0.75),inset 0 1px 0 rgba(255,255,255,.7);transform:translateY(-2px);text-shadow:0 0 8px #fff}
footer{text-align:center;padding:25px 0 90px;font-size:14px;opacity:.8}
.footer-keyword{color:#FFD700;font-weight:800;text-decoration:none;letter-spacing:.3px;transition:all .3s ease}
.footer-keyword:hover{background:#FFD700;color:#fff;box-shadow:0 0 8px #FFD700,0 0 22px rgba(255,193,7,.65);transform:translateY(-2px)}
.neon-keyword{position:relative;color:#FFD700;font-weight:900;text-decoration:none;letter-spacing:.5px;text-shadow:0 0 3px #fff,0 0 8px #FFE97A,0 0 16px #F8D325,0 0 30px rgba(248,211,37,.65);transition:all .35s ease}
.neon-keyword:hover{color:#3A2500;background:linear-gradient(90deg,#fff,#FFE97A,#fff,#F8D325,#fff);background-size:250% auto;-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;text-shadow:0 0 4px #fff,0 0 10px #FFE97A,0 0 20px #F8D325,0 0 35px rgba(248,211,37,.90);animation:neonShine 1.2s linear infinite}
@keyframes neonShine{0%{background-position:0% center}100%{background-position:250% center}}
</style>

</head>

<body>
    <section class="container-btn">
        <div class="container">
            <div class="btn-wrapper">
                <a href="https://mnlqssgnmqvg.sbs/raotoog" class="btn">LOGIN</a>
                <a href="https://mnlqssgnmqvg.sbs/raotoog" class="btn">DAFTAR</a>
            </div>
        </div>
    </section>
    <section style="padding:20px">
        <div class="container">
            <div class="article-wrapper">
                <div class="logo-wrapper">
                    <amp-img src="%%CTA_URL%%images/logo-1.png" width="450" height="100" layout="responsive" alt="Logo RAGAMTOTO"></amp-img>
                </div>
                <amp-img src="%%CTA_URL%%images/banner.png" width="600" height="580" layout="responsive" alt="Banner RAGAMTOTO"></amp-img>
                <h1>RAGAMTOTO >> RAGAM Pasaran Alternatif TOTO 4D Bocoran Interaktif Tembus JP</h1>
                <p><a class="neon-keyword" href="%%CTA_URL%%"><span>RAGAMTOTO</span></a> merupakan gerai TOTO 4D paling laris di asia saat ini karena memiliki RAGAM pasaran togel dan juga menyediakan bocoran yang sangat interaktif untuk para bettor menghasilkan jackpot paus hanya dalam sekali betting.</p>
                <div class="table-wrapper">
                    <table>
                       <thead>
                            <tr>
                                <th colspan="2">FITUR UNGGULAN RAGAMTOTO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Keunggulan</td>
                                <td><strong>Pengalaman Bermain Premium</strong></td>
                            </tr>
                            <tr>
                                <td>Antarmuka</td>
                                <td>Elegan · Modern · Enak Dipandang</td>
                            </tr>
                            <tr>
                                <td>Kecepatan</td>
                                <td>Akses Kilat · Stabil · Lancar</td>
                            </tr>
                            <tr>
                                <td>Kompatibilitas</td>
                                <td>Smartphone · Desktop · Tablet</td>
                            </tr>
                            <tr>
                                <td>Kemudahan</td>
                                <td>Praktis · Sederhana · Tanpa Ribet</td>
                            </tr>
                            <tr>
                                <td>Kenyamanan</td>
                                <td>Desain Ringan · Navigasi Intuitif</td>
                            </tr>
                            <tr>
                                <td>Layanan</td>
                                <td>Tim Support Profesional dan Responsif</td>
                            </tr>
                            <tr>
                                <td>Live Support</td>
                                <td>
                                    <a href="https://ynkadzuywrx.sbs/kulotog" class="akses-live">AKSES LIVE CHAT</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
    <footer>
        &copy; 2026 <a href="%%CTA_URL%%" class="footer-keyword"><span>RAGAMTOTO</span></a> • ALL RIGHTS RESERVED • 18+
    </footer>

</body>

</html>
HTMLPAGE;
$page = strtr($page, ['%%TITLE%%'=>$tit,'%%DESCRIPTION%%'=>$des,'%%SITE%%'=>$site,'%%URL%%'=>$url,'%%DOMAIN%%'=>$dom,'%%CTA_URL%%'=>$cta]);
header('Content-Type: text/html; charset=utf-8');
echo $page;
