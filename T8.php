<?php
// Template T8 — auto-generated 2026-09-09 (watcher master Template_Baru)
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
<html amp lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <title>%%TITLE%%</title>
    <meta name="description" content="%%DESCRIPTION%%" />
    <meta name="keywords" content="DEWI777" />
    <link rel="canonical" href="https://dewi777login.net/" />
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="#1B3D3C" />
    <meta content="true" name="HandheldFriendly">
    <meta content="width" name="MobileOptimized">
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="language" content="ID">
    <meta name="copyright" content="DEWI777">
    <meta name="supported-amp-formats" content="websites,stories,ads,email">
    <meta name="author" content="DEWI777">
    <meta name="google" content="notranslate"/>
    <meta name="distribution" content="Global">
    <meta name="publisher" content="DEWI777">
    <meta name="rating" content="general">
    <meta name="geo.placename" content="DKI Jakarta">
    <meta name="geo.country" content="ID">
    <meta name="geo.region" content="ID" />
    <meta name="tgn.nation" content="Indonesia">
    <meta property="og:image" content="https://dewi777login.net/images/icon.png"/>
    <link rel="icon" href="https://dewi777login.net/images/icon.png">
    <link rel="apple-touch-icon-precomposed" href="https://dewi777login.net/images/icon.png">
    <link rel="preload" href="https://dewi777login.net/images/icon.png" as="image">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    
    <style amp-boilerplate>
        body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}
        @-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
        @-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
        @-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
        @-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
        @keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
    </style>
    <noscript>
        <style amp-boilerplate>
            body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}
        </style>
    </noscript>

    <style amp-custom>
        /* RESET & BASE STYLES */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-family: sans-serif;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        body {
            -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            position: relative;
            font-style: normal;
            line-height: 1.6;
            color: #ffffff;
            min-height: 100vh;
        }

        /* BACKGROUND RESPONSIF */
        .background-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .desktop-bg, .mobile-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .desktop-bg {
            display: block;
        }

        .mobile-bg {
            display: none;
        }

        @media (max-width: 768px) {
            .desktop-bg {
                display: none;
            }
            .mobile-bg {
                display: block;
            }
        }

        /* LAYOUT STYLES */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px;
        }

        .col-md-12 {
            width: 100%;
            padding: 0 15px;
        }

        .text-center {
            text-align: center;
        }

        .clear {
            clear: both;
        }

        .spacer {
            margin: 30px 0;
        }

        /* HEADER & LOGO */
        .ch1n {
            padding: 20px 0;
        }

        .ch1n amp-img {
            margin: 0 auto;
        }

        /* SLIDER */
        .slide {
            width: 100%;
            border: 2px solid #f1d437;
            border-radius: 4px;
            overflow: hidden;
            margin: 20px 0;
        }

        /* BUTTON STYLES */
        .n-columns-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin: 20px 0;
        }

        .login, .register {
            padding: 15px 10px;
            text-align: center;
            font-weight: 700;
            text-decoration: none;
            border-radius: 10px;
            border: 1px solid #f1d437;
            transition: all 0.3s ease;
        }

        .login {
            text-shadow: 2px 2px #032d06;
            background: linear-gradient(to bottom, #059710 0, #032d06 100%);
            color: #ffffff;
        }

        .register {
            text-shadow: 1px 1px #032d06;
            background: linear-gradient(to bottom, #059710, #032d06);
            color: #ffffff;
        }

        .login:hover, .register:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        /* CONTENT SECTION */
        .site-description {
            background: #032d06;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            box-shadow: 0 0 20px #f1d437;
        }

        .site-description h1 {
            font-size: 1.8em;
            margin-bottom: 20px;
            text-align: center;
            color: #ffffff;
        }

        .site-description p {
            margin-bottom: 15px;
            line-height: 1.6;
        }

        /* TABLE STYLES */
        table.rankjp {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background: #06750e;
        }

        table.rankjp thead {
            background: linear-gradient(180deg, #f1d437 15%, #ff9900 50%, #af6b05 85%);
        }

        table.rankjp th {
            padding: 15px;
            font-weight: 700;
            color: #ffffff;
            text-align: center;
            font-size: 1.1em;
        }

        table.rankjp td {
            padding: 12px 15px;
            border: 1px solid #f1d437;
            text-align: left;
        }

        table.rankjp tbody tr:nth-child(even) {
            background: rgba(255, 255, 255, 0.05);
        }

        /* FOOTER NAVIGATION */
        .fixed-footer {
            display: flex;
            justify-content: space-around;
            position: fixed;
            background: linear-gradient(to bottom, #059710, #032d06);
            padding: 10px 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 99;
            border-radius: 20px 20px 0 0;
            box-shadow: 0 -2px 20px #f1d437;
        }

        .fixed-footer a {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: #ffffff;
            font-size: 12px;
            font-weight: 600;
            padding: 5px;
        }

        .fixed-footer img {
            width: 24px;
            height: 24px;
            margin-bottom: 5px;
        }

        .tada {
            animation: tada 2s infinite;
        }

        @keyframes tada {
            0% { transform: scale(1); }
            10%, 20% { transform: scale(0.9) rotate(-3deg); }
            30%, 50%, 70%, 90% { transform: scale(1.1) rotate(3deg); }
            40%, 60%, 80% { transform: scale(1.1) rotate(-3deg); }
            100% { transform: scale(1) rotate(0); }
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 768px) {
            .container {
                width: 95%;
                padding: 0 10px;
            }
            
            .n-columns-2 {
                grid-template-columns: 1fr;
                gap: 10px;
            }
            
            .site-description {
                padding: 15px;
                margin: 15px 0;
            }
            
            table.rankjp {
                font-size: 0.9em;
            }
            
            table.rankjp th,
            table.rankjp td {
                padding: 8px 10px;
            }
            
            .fixed-footer {
                padding: 8px 0;
            }
            
            .fixed-footer a {
                font-size: 11px;
            }
        }

        @media (max-width: 480px) {
            .ch1n amp-img {
                width: 200px;
                height: auto;
            }
            
            .site-description h1 {
                font-size: 1.4em;
            }
            
            .login, .register {
                padding: 12px 8px;
                font-size: 0.9em;
            }
        }

        /* ANIMATIONS */
        @keyframes blinking {
            0% { border-color: #ffffff; }
            50% { border-color: #ffffff; }
            100% { border-color: #ffffff; }
        }

        .blinking {
            animation: blinking 2s infinite;
        }
    </style>

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "url": "https://dewi777login.net/",
        "logo": "https://dewi777login.net/images/banner.png    ",
        "name": "DEWI777",
        "description": "DEWI777 Ikuti perjalanan seru menelusuri jantung industri hiburan online DEWI777 yang paling dinamis, penuh inovasi, dan selalu siap memanjakan mata semua para pemain."
    }
    </script>
</head>

<body data-rsssl='1'>
    <!-- Background Images -->
    <div class="background-container">
        <amp-img class="desktop-bg"
            src="https://i.pinimg.com/736x/6d/38/73/6d387337095a71c28601c879c63f26ea.jpg"
            width="1920"
            height="1080"
            layout="responsive"
            alt="Background Desktop">
        </amp-img>
        <amp-img class="mobile-bg"
            src="https://i.pinimg.com/736x/6d/38/73/6d387337095a71c28601c879c63f26ea.jpg"
            width="750"
            height="1334"
            layout="responsive"
            alt="Background Mobile">
        </amp-img>
    </div>

    <!-- Header Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="ch1n">
                    <amp-img src="https://dewi777login.net/images/logo.png"
                        width="240"
                        height="75"
                        layout="fixed"
                        title="DEWI777"
                        alt="DEWI777">
                    </amp-img>
                </div>
            </div>
        </div>
    </div>

    <div class="clear"></div>

    <!-- Main Banner -->
    <div class="container">
        <div class="slide">
            <amp-img src="https://dewi777login.net/images/banner.png"
                width="500"
                height="500"
                layout="responsive"
                title="DEWI777"
                alt="DEWI777 Banner">
            </amp-img>
        </div>
    </div>

    <!-- Login/Register Buttons -->
    <div class="container">
        <div class="n-columns-2">
            <a href="%%CTA_URL%%" rel="nofollow noreferrer" class="login">LOGIN</a>
            <a href="%%CTA_URL%%" rel="nofollow noreferrer" class="register">DAFTAR</a>
        </div>
    </div>

    <div class="clear"></div>
    <div class="spacer"></div>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-description">
                    <h1>DEWI777 - Eksplorasi Tanpa Batas di Dunia Hiburan Online DEWI777</h1>
                    
                    <table class="rankjp">
                        <thead>
                            <tr>
                                <th colspan="2">Info Seputar Situs DEWI777</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>⭐ Nama Situs</td>
                                <td>DEWI777</td>
                            </tr>
                            <tr>
                                <td>⭐ PLayanan Deposit & Withdraw</td>
                                <td>Aman dan Terpercaya</td>
                            </tr>
                            <tr>
                                <td>⭐ Promosi & Bonus</td>
                                <td>Harian dan Mingguan</td>
                            </tr>
                            <tr>
                                <td>⭐ Provider Terlengkap</td>
                                <td>Pragmatic Play, Pg Soft, DLL</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <br>
                    <p style="text-align: center;">
                        <span style="color: #ffffff;"> © 2026 | DEWI777 x "_" | Semua hak dilindungi.</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</br>

    <!-- Fixed Footer Navigation -->
    <div class="fixed-footer">
        <a href="%%CTA_URL%%" rel="nofollow noopener" target="_blank">
            <amp-img src="https://dewi777login.net/images/icon.png"
                width="20"
                height="20"
                layout="fixed"
                alt="Login">
            </amp-img>
            LOGIN
        </a>
        <a href="%%CTA_URL%%" rel="nofollow noopener" target="_blank">
            <amp-img src="https://dewi777login.net/images/icon.png"
                width="20"
                height="20"
                layout="fixed"
                alt="Daftar">
            </amp-img>
            DAFTAR
        </a>
        <a href="%%CTA_URL%%" rel="nofollow noopener" target="_blank" class="tada">
            <amp-img src="https://dewi777login.net/images/icon.png"
                width="20"
                height="20"
                layout="fixed"
                alt="Live Chat">
            </amp-img>
            LIVE CHAT
        </a>
    </div>
</body>
</html>
HTMLPAGE;
$page = strtr($page, ['%%TITLE%%'=>$tit,'%%DESCRIPTION%%'=>$des,'%%SITE%%'=>$site,'%%URL%%'=>$url,'%%DOMAIN%%'=>$dom,'%%CTA_URL%%'=>$cta]);
header('Content-Type: text/html; charset=utf-8');
echo $page;
