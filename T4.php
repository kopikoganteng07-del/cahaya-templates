<?php
// ============================================================
// TEMPLAT T4 — Cahaya (AMP, gaya RAFI777)
// Aset: logo 350x100 | banner 1080x1080 | servisweb.gif 1920x154 | favicon 512x512
// Sumber: cahaya-4.html (rafi777jp.org) — direbrand & dibersihkan 05/09/2026
// ============================================================
$dataFile = __DIR__ . '/data/data.json';
$homepage = [];
if (is_file($dataFile)) {
    $raw = @file_get_contents($dataFile);
    if ($raw !== false) { $homepage = json_decode($raw, true) ?: []; }
}
$logoSrc   = !empty($homepage['logo_src'])   ? $homepage['logo_src']   : '/img/logo.png';
$bannerSrc = !empty($homepage['banner_src']) ? $homepage['banner_src'] : '/img/banner1.png';
$ctaUrl    = !empty($homepage['cta_daftar']) ? $homepage['cta_daftar'] : '#';
$siteUrl   = 'https://' . ($_SERVER['HTTP_HOST'] ?? 'localhost');
$siteName  = !empty($homepage['site_name']) ? $homepage['site_name'] : strtoupper(preg_replace('/[^a-z0-9]/i', '', $_SERVER['HTTP_HOST'] ?? 'SITUS'));

$tokens = array(
    '%%LOGO_SRC%%'   => htmlspecialchars($logoSrc,   ENT_QUOTES),
    '%%BANNER_SRC%%' => htmlspecialchars($bannerSrc, ENT_QUOTES),
    '%%CTA_URL%%'    => htmlspecialchars($ctaUrl,    ENT_QUOTES),
    '%%SITE_URL%%'   => $siteUrl,
    '%%SITE_NAME%%'  => htmlspecialchars($siteName, ENT_QUOTES),
);

$html = <<<'HTMLPAGE'
<!DOCTYPE html>
<html lang="id" prefix="og: https://ogp.me/ns#" amp="" data-amp-auto-lightbox-disable transformed="self;v=1" i-amphtml-layout="" i-amphtml-no-boilerplate="" i-amphtml-binding>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,viewport-fit=cover">
        <link rel="preconnect" href="https://cdn.ampproject.org">
        <style amp-runtime="" i-amphtml-version="012608131752000">
            html {
                overflow-x: hidden!important
            }

            html.i-amphtml-fie {
                height: 100%!important;
                width: 100%!important
            }

            html:not([amp4ads]),html:not([amp4ads]) body {
                height: auto!important
            }

            html:not([amp4ads]) body {
                margin: 0!important
            }

            body {
                -webkit-text-size-adjust: 100%;
                -moz-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
                text-size-adjust: 100%
            }

            html.i-amphtml-singledoc.i-amphtml-embedded {
                -ms-touch-action: pan-y pinch-zoom;
                touch-action: pan-y pinch-zoom
            }

            html.i-amphtml-fie>body,html.i-amphtml-singledoc>body {
                overflow: visible!important
            }

            html.i-amphtml-fie:not(.i-amphtml-inabox)>body,html.i-amphtml-singledoc:not(.i-amphtml-inabox)>body {
                position: relative!important
            }

            html.i-amphtml-ios-embed-legacy>body {
                overflow-x: hidden!important;
                overflow-y: auto!important;
                position: absolute!important
            }

            html.i-amphtml-ios-embed {
                overflow-y: auto!important;
                position: static
            }

            #i-amphtml-wrapper {
                overflow-x: hidden!important;
                overflow-y: auto!important;
                position: absolute!important;
                top: 0!important;
                left: 0!important;
                right: 0!important;
                bottom: 0!important;
                margin: 0!important;
                display: block!important
            }

            html.i-amphtml-ios-embed.i-amphtml-ios-overscroll,html.i-amphtml-ios-embed.i-amphtml-ios-overscroll>#i-amphtml-wrapper {
                -webkit-overflow-scrolling: touch!important
            }

            #i-amphtml-wrapper>body {
                position: relative!important;
                border-top: 1px solid transparent!important
            }

            #i-amphtml-wrapper+body {
                visibility: visible
            }

            #i-amphtml-wrapper+body .i-amphtml-lightbox-element,#i-amphtml-wrapper+body[i-amphtml-lightbox] {
                visibility: hidden
            }

            #i-amphtml-wrapper+body[i-amphtml-lightbox] .i-amphtml-lightbox-element {
                visibility: visible
            }

            #i-amphtml-wrapper.i-amphtml-scroll-disabled,.i-amphtml-scroll-disabled {
                overflow-x: hidden!important;
                overflow-y: hidden!important
            }

            amp-instagram {
                padding: 54px 0px 0px!important;
                background-color: #fff
            }

            amp-iframe iframe {
                box-sizing: border-box!important
            }

            [amp-access][amp-access-hide] {
                display: none
            }

            [subscriptions-dialog],body:not(.i-amphtml-subs-ready) [subscriptions-action],body:not(.i-amphtml-subs-ready) [subscriptions-section] {
                display: none!important
            }

            amp-experiment,amp-live-list>[update] {
                display: none
            }

            amp-list[resizable-children]>.i-amphtml-loading-container.amp-hidden {
                display: none!important
            }

            amp-list [fetch-error],amp-list[load-more] [load-more-button],amp-list[load-more] [load-more-end],amp-list[load-more] [load-more-failed],amp-list[load-more] [load-more-loading] {
                display: none
            }

            amp-list[diffable] div[role=list] {
                display: block
            }

            amp-story-page,amp-story[standalone] {
                min-height: 1px!important;
                display: block!important;
                height: 100%!important;
                margin: 0!important;
                padding: 0!important;
                overflow: hidden!important;
                width: 100%!important
            }

            amp-story[standalone] {
                background-color: #000!important;
                position: relative!important
            }

            amp-story-page {
                background-color: #757575
            }

            amp-story .amp-active>div,amp-story .i-amphtml-loader-background {
                display: none!important
            }

            amp-story-page:not(:first-of-type):not([distance]):not([active]) {
                transform: translateY(1000vh)!important
            }

            amp-autocomplete {
                position: relative!important;
                display: inline-block!important
            }

            amp-autocomplete>input,amp-autocomplete>textarea {
                padding: 0.5rem;
                border: 1px solid rgba(0,0,0,.33)
            }

            .i-amphtml-autocomplete-results,amp-autocomplete>input,amp-autocomplete>textarea {
                font-size: 1rem;
                line-height: 1.5rem
            }

            [amp-fx^=fly-in] {
                visibility: hidden
            }

            amp-script[nodom],amp-script[sandboxed] {
                position: fixed!important;
                top: 0!important;
                width: 1px!important;
                height: 1px!important;
                overflow: hidden!important;
                visibility: hidden
            }

            /*# sourceURL=/css/ampdoc.css*/
            [hidden] {
                display: none!important
            }

            .i-amphtml-element {
                display: inline-block
            }

            .i-amphtml-blurry-placeholder {
                transition: opacity 0.3s cubic-bezier(0.0,0.0,0.2,1)!important;
                pointer-events: none
            }

            [layout=nodisplay]:not(.i-amphtml-element) {
                display: none!important
            }

            .i-amphtml-layout-fixed,[layout=fixed][width][height]:not(.i-amphtml-layout-fixed) {
                display: inline-block;
                position: relative
            }

            .i-amphtml-layout-responsive,[layout=responsive][width][height]:not(.i-amphtml-layout-responsive),[width][height][heights]:not([layout]):not(.i-amphtml-layout-responsive),[width][height][sizes]:not(img):not([layout]):not(.i-amphtml-layout-responsive) {
                display: block;
                position: relative
            }

            .i-amphtml-layout-intrinsic,[layout=intrinsic][width][height]:not(.i-amphtml-layout-intrinsic) {
                display: inline-block;
                position: relative;
                max-width: 100%
            }

            .i-amphtml-layout-intrinsic .i-amphtml-sizer {
                max-width: 100%
            }

            .i-amphtml-intrinsic-sizer {
                max-width: 100%;
                display: block!important
            }

            .i-amphtml-layout-container,.i-amphtml-layout-fixed-height,[layout=container],[layout=fixed-height][height]:not(.i-amphtml-layout-fixed-height) {
                display: block;
                position: relative
            }

            .i-amphtml-layout-fill,.i-amphtml-layout-fill.i-amphtml-notbuilt,[layout=fill]:not(.i-amphtml-layout-fill),body noscript>* {
                display: block;
                overflow: hidden!important;
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0
            }

            body noscript>* {
                position: absolute!important;
                width: 100%;
                height: 100%;
                z-index: 2
            }

            body noscript {
                display: inline!important
            }

            .i-amphtml-layout-flex-item,[layout=flex-item]:not(.i-amphtml-layout-flex-item) {
                display: block;
                position: relative;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto
            }

            .i-amphtml-layout-fluid {
                position: relative
            }

            .i-amphtml-layout-size-defined {
                overflow: hidden!important
            }

            .i-amphtml-layout-awaiting-size {
                position: absolute!important;
                top: auto!important;
                bottom: auto!important
            }

            i-amphtml-sizer {
                display: block!important
            }

            @supports (aspect-ratio: 1/1) {
                i-amphtml-sizer.i-amphtml-disable-ar {
                    display:none!important
                }
            }

            .i-amphtml-blurry-placeholder,.i-amphtml-fill-content {
                display: block;
                height: 0;
                max-height: 100%;
                max-width: 100%;
                min-height: 100%;
                min-width: 100%;
                width: 0;
                margin: auto
            }

            .i-amphtml-layout-size-defined .i-amphtml-fill-content {
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0
            }

            .i-amphtml-replaced-content,.i-amphtml-screen-reader {
                padding: 0!important;
                border: none!important
            }

            .i-amphtml-screen-reader {
                position: fixed!important;
                top: 0px!important;
                left: 0px!important;
                width: 4px!important;
                height: 4px!important;
                opacity: 0!important;
                overflow: hidden!important;
                margin: 0!important;
                display: block!important;
                visibility: visible!important
            }

            .i-amphtml-screen-reader~.i-amphtml-screen-reader {
                left: 8px!important
            }

            .i-amphtml-screen-reader~.i-amphtml-screen-reader~.i-amphtml-screen-reader {
                left: 12px!important
            }

            .i-amphtml-screen-reader~.i-amphtml-screen-reader~.i-amphtml-screen-reader~.i-amphtml-screen-reader {
                left: 16px!important
            }

            .i-amphtml-unresolved {
                position: relative;
                overflow: hidden!important
            }

            .i-amphtml-select-disabled {
                -webkit-user-select: none!important;
                -ms-user-select: none!important;
                user-select: none!important
            }

            .i-amphtml-notbuilt,[layout]:not(.i-amphtml-element),[width][height][heights]:not([layout]):not(.i-amphtml-element),[width][height][sizes]:not(img):not([layout]):not(.i-amphtml-element) {
                position: relative;
                overflow: hidden!important;
                color: transparent!important
            }

            .i-amphtml-notbuilt:not(.i-amphtml-layout-container)>*,[layout]:not([layout=container]):not(.i-amphtml-element)>*,[width][height][heights]:not([layout]):not(.i-amphtml-element)>*,[width][height][sizes]:not([layout]):not(.i-amphtml-element)>* {
                display: none
            }

            amp-img:not(.i-amphtml-element)[i-amphtml-ssr]>img.i-amphtml-fill-content {
                display: block
            }

            .i-amphtml-notbuilt:not(.i-amphtml-layout-container),[layout]:not([layout=container]):not(.i-amphtml-element),[width][height][heights]:not([layout]):not(.i-amphtml-element),[width][height][sizes]:not(img):not([layout]):not(.i-amphtml-element) {
                color: transparent!important;
                line-height: 0!important
            }

            .i-amphtml-ghost {
                visibility: hidden!important
            }

            .i-amphtml-element>[placeholder],[layout]:not(.i-amphtml-element)>[placeholder],[width][height][heights]:not([layout]):not(.i-amphtml-element)>[placeholder],[width][height][sizes]:not([layout]):not(.i-amphtml-element)>[placeholder] {
                display: block;
                line-height: normal
            }

            .i-amphtml-element>[placeholder].amp-hidden,.i-amphtml-element>[placeholder].hidden {
                visibility: hidden
            }

            .i-amphtml-element:not(.amp-notsupported)>[fallback],.i-amphtml-layout-container>[placeholder].amp-hidden,.i-amphtml-layout-container>[placeholder].hidden {
                display: none
            }

            .i-amphtml-layout-size-defined>[fallback],.i-amphtml-layout-size-defined>[placeholder] {
                position: absolute!important;
                top: 0!important;
                left: 0!important;
                right: 0!important;
                bottom: 0!important;
                z-index: 1
            }

            amp-img[i-amphtml-ssr]:not(.i-amphtml-element)>[placeholder] {
                z-index: auto
            }

            .i-amphtml-notbuilt>[placeholder] {
                display: block!important
            }

            .i-amphtml-hidden-by-media-query {
                display: none!important
            }

            .i-amphtml-element-error {
                background: red!important;
                color: #fff!important;
                position: relative!important
            }

            .i-amphtml-element-error:before {
                content: attr(error-message)
            }

            i-amp-scroll-container,i-amphtml-scroll-container {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                display: block
            }

            i-amp-scroll-container.amp-active,i-amphtml-scroll-container.amp-active {
                overflow: auto;
                -webkit-overflow-scrolling: touch
            }

            .i-amphtml-loading-container {
                display: block!important;
                pointer-events: none;
                z-index: 1
            }

            .i-amphtml-notbuilt>.i-amphtml-loading-container {
                display: block!important
            }

            .i-amphtml-loading-container.amp-hidden {
                visibility: hidden
            }

            .i-amphtml-element>[overflow] {
                cursor: pointer;
                position: relative;
                z-index: 2;
                visibility: hidden;
                display: initial;
                line-height: normal
            }

            .i-amphtml-layout-size-defined>[overflow] {
                position: absolute
            }

            .i-amphtml-element>[overflow].amp-visible {
                visibility: visible
            }

            template {
                display: none!important
            }

            .amp-border-box,.amp-border-box *,.amp-border-box :after,.amp-border-box :before {
                box-sizing: border-box
            }

            amp-pixel {
                display: none!important
            }

            amp-analytics,amp-auto-ads,amp-story-auto-ads {
                position: fixed!important;
                top: 0!important;
                width: 1px!important;
                height: 1px!important;
                overflow: hidden!important;
                visibility: hidden
            }

            amp-story {
                visibility: hidden!important
            }

            html.i-amphtml-fie>amp-analytics {
                position: initial!important
            }

            [visible-when-invalid]:not(.visible),form [submit-error],form [submit-success],form [submitting] {
                display: none
            }

            amp-accordion {
                display: block!important
            }

            @media (min-width: 1px) {
                :where(amp-accordion>section)>:first-child {
                    margin:0;
                    background-color: #efefef;
                    padding-right: 20px;
                    border: 1px solid #dfdfdf
                }

                :where(amp-accordion>section)>:last-child {
                    margin: 0
                }
            }

            amp-accordion>section {
                float: none!important
            }

            amp-accordion>section>* {
                float: none!important;
                display: block!important;
                overflow: hidden!important;
                position: relative!important
            }

            amp-accordion,amp-accordion>section {
                margin: 0
            }

            amp-accordion:not(.i-amphtml-built)>section>:last-child {
                display: none!important
            }

            amp-accordion:not(.i-amphtml-built)>section[expanded]>:last-child {
                display: block!important
            }

            /*# sourceURL=/css/ampshared.css*/
        </style>
        <meta name="description" content="RAFI777 sebuah permainan taruhan yang mudah sekali para member menangkan dengan mudah tanpa ada zonk dan akses gampang kapan saja.">
        <meta name="robots" content="index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
        <meta property="og:locale" content="id_ID">
        <meta property="og:type" content="website">
        <meta property="og:title" content="%%SITE_NAME%%">
        <meta property="og:description" content="RAFI777 sebuah permainan taruhan yang mudah sekali para member menangkan dengan mudah tanpa ada zonk dan akses gampang kapan saja.">
        <meta property="og:url" content="%%SITE_URL%%/">
        <meta property="og:site_name" content="%%SITE_NAME%%">
        <meta property="og:updated_time" content="2026-09-05T14:55:35+07:00">
        <meta property="article:published_time" content="2026-09-05T14:10:06+07:00">
        <meta property="article:modified_time" content="2026-09-05T14:55:35+07:00">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="RAFI777 ? Akurasi Permainan Slot Gacor Pemberi Pundi Cuan Berlimpah">
        <meta name="twitter:description" content="RAFI777 sebuah permainan taruhan yang mudah sekali para member menangkan dengan mudah tanpa ada zonk dan akses gampang kapan saja.">
        <meta name="twitter:label1" content="Ditulis oleh">
        <meta name="twitter:data1" content="rafi777">
        <meta name="twitter:label2" content="Waktunya membaca">
        <meta name="twitter:data2" content="Kurang dari semenit">
        <meta name="generator" content="WordPress 7.1">
        <meta name="generator" content="Elementor 4.2.4; features: e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-external, google_font-disabled, font_display-swap">
        <meta name="theme-color" content="#020201">
        <meta name="google-site-verification" content="CPE22CANI57iXk2c9IJNMh4fAH1GFKJtVhXwwg1eE8s">
        <meta name="google-site-verification" content="2b0-06IdGvSRaFyPOszYTQE65_2d7Lp-EXKYi-0qpRk">
        <meta name="generator" content="AMP Plugin v2.5.5; mode=standard">
        <meta name="msapplication-TileImage" content="/images/favicon.png">
        <script async="" src="https://cdn.ampproject.org/v0.mjs" type="module" crossorigin="anonymous"></script>
        <script async nomodule src="https://cdn.ampproject.org/v0.js" crossorigin="anonymous"></script>
        <script src="https://cdn.ampproject.org/v0/amp-anim-0.1.mjs" async="" custom-element="amp-anim" type="module" crossorigin="anonymous"></script>
        <script async nomodule src="https://cdn.ampproject.org/v0/amp-anim-0.1.js" crossorigin="anonymous" custom-element="amp-anim"></script>
        <script src="https://cdn.ampproject.org/v0/amp-bind-0.1.mjs" async="" custom-element="amp-bind" type="module" crossorigin="anonymous"></script>
        <script async nomodule src="https://cdn.ampproject.org/v0/amp-bind-0.1.js" crossorigin="anonymous" custom-element="amp-bind"></script>
        <link rel="icon" href="/images/favicon.png" sizes="32x32">
        <link rel="icon" href="/images/favicon.png" sizes="192x192">
        <style amp-custom="">
            amp-img:is([sizes=auto i],[sizes^="auto," i]),amp-anim:is([sizes=auto i],[sizes^="auto," i]) {
                contain-intrinsic-size: 3000px 1500px
            }

            amp-anim.amp-wp-enforced-sizes,amp-img.amp-wp-enforced-sizes {
                object-fit: contain
            }

            amp-anim img,amp-anim noscript,amp-img img,amp-img noscript {
                image-rendering: inherit;
                object-fit: inherit;
                object-position: inherit
            }

            body,h1,html,p {
                border: 0;
                font-size: 100%;
                font-style: inherit;
                font-weight: inherit;
                margin: 0;
                outline: 0;
                padding: 0;
                vertical-align: baseline
            }

            html {
                -webkit-text-size-adjust: 100%
            }

            body {
                margin: 0
            }

            a {
                background-color: transparent
            }

            a:active {
                outline: 0
            }

            a,a:focus,a:hover,a:visited {
                text-decoration: none
            }

            strong {
                font-weight: 700
            }

            amp-img,amp-anim {
                border: 0
            }

            h1 {
                clear: both
            }

            h1 {
                color: #808285;
                font-size: 2em;
                line-height: 1.2
            }

            html {
                box-sizing: border-box
            }

            *,:after,:before {
                box-sizing: inherit
            }

            body {
                color: #808285;
                background: #fff;
                font-style: normal
            }

            strong {
                font-weight: 700
            }

            amp-img,amp-anim {
                height: auto;
                max-width: 100%
            }

            a {
                color: #4169e1
            }

            a:focus,a:hover {
                color: #191970
            }

            a:focus {
                outline: thin dotted
            }

            a:hover {
                outline: 0
            }

            ::selection {
                color: #fff;
                background: #0274be
            }

            body:not(.logged-in) {
                position: relative
            }

            body {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale
            }

            a,a:focus {
                text-decoration: none
            }

            a {
                transition: all .2s linear
            }

            amp-img,amp-anim {
                vertical-align: middle
            }

            p {
                margin-bottom: 1.75em
            }

            body {
                line-height: 1.8571428571
            }

            body {
                background-color: #fff
            }

            body {
                overflow-x: hidden
            }

            :root {
                --ast-post-nav-space: 0;
                --ast-container-default-xlg-padding: 2.5em;
                --ast-container-default-lg-padding: 2.5em;
                --ast-container-default-slg-padding: 2em;
                --ast-container-default-md-padding: 2.5em;
                --ast-container-default-sm-padding: 2.5em;
                --ast-container-default-xs-padding: 2.4em;
                --ast-container-default-xxs-padding: 1.8em;
                --ast-code-block-background: #eceff3;
                --ast-comment-inputs-background: #f9fafb;
                --ast-normal-container-width: 1200px;
                --ast-narrow-container-width: 750px;
                --ast-blog-title-font-weight: 600;
                --ast-blog-meta-weight: 600;
                --ast-global-color-primary: var(--ast-global-color-4);
                --ast-global-color-secondary: var(--ast-global-color-5);
                --ast-global-color-alternate-background: var(--ast-global-color-6);
                --ast-global-color-subtle-background: var(--ast-global-color-7);
                --ast-bg-style-guide: var(--ast-global-color-secondary,var(--ast-global-color-5));
                --ast-shadow-style-guide: 0px 0px 4px 0 rgba(0,0,0,.34);
                --ast-global-dark-bg-style: #fff;
                --ast-global-dark-lfs: #fbfbfb;
                --ast-widget-bg-color: #fafafa;
                --ast-wc-container-head-bg-color: #fbfbfb;
                --ast-title-layout-bg: #eee;
                --ast-search-border-color: #e7e7e7;
                --ast-lifter-hover-bg: #e6e6e6;
                --ast-gallery-block-color: #000;
                --srfm-color-input-label: var(--ast-global-color-2)
            }

            html {
                font-size: 100%
            }

            a {
                color: var(--ast-global-color-0)
            }

            a:hover,a:focus {
                color: var(--ast-global-color-1)
            }

            body {
                font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Helvetica Neue,sans-serif;
                font-weight: 400;
                font-size: 16px;
                font-size: 1rem;
                line-height: var(--ast-body-line-height,1.65)
            }

            h1 {
                font-weight: 600
            }

            h1 {
                font-size: 36px;
                font-size: 2.25rem;
                font-weight: 600;
                line-height: 1.4em
            }

            ::selection {
                background-color: var(--ast-global-color-0);
                color: #fff
            }

            body,h1 {
                color: var(--ast-global-color-3)
            }

            .ast-single-post .elementor-widget-button .elementor-button {
                text-decoration: none
            }

            a:focus-visible {
                outline-style: dotted;
                outline-color: inherit;
                outline-width: thin
            }

            a:where(.wp-block-button__link) {
                border-radius: 4px;
                box-shadow: 0px 1px 2px 0px rgba(0,0,0,.05)
            }

            :root {
                --ast-comment-inputs-background: #fff
            }

            ::placeholder {
                color: var(--ast-form-field-color,#9ca3af)
            }

            ::-ms-input-placeholder {
                color: var(--ast-form-field-color,#9ca3af)
            }

            .elementor-widget-heading h1.elementor-heading-title {
                line-height: 1.4em
            }

            @media (max-width: 921px) {
                h1 {
                    font-size:30px;
                    font-size: 1.875rem
                }
            }

            @media (max-width: 544px) {
                h1 {
                    font-size:30px;
                    font-size: 1.875rem
                }
            }

            @media (max-width: 921px) {
                html {
                    font-size:91.2%
                }
            }

            @media (max-width: 544px) {
                html {
                    font-size:91.2%
                }
            }

            :root {
                --wp--custom--ast-default-block-top-padding: 3em;
                --wp--custom--ast-default-block-right-padding: 3em;
                --wp--custom--ast-default-block-bottom-padding: 3em;
                --wp--custom--ast-default-block-left-padding: 3em;
                --wp--custom--ast-container-width: 1200px;
                --wp--custom--ast-content-width-size: 1200px;
                --wp--custom--ast-wide-width-size: calc(1200px + var(--wp--custom--ast-default-block-left-padding) + var(--wp--custom--ast-default-block-right-padding))
            }

            @media (max-width: 921px) {
                :root {
                    --wp--custom--ast-default-block-top-padding:3em;
                    --wp--custom--ast-default-block-right-padding: 2em;
                    --wp--custom--ast-default-block-bottom-padding: 3em;
                    --wp--custom--ast-default-block-left-padding: 2em
                }
            }

            @media (max-width: 544px) {
                :root {
                    --wp--custom--ast-default-block-top-padding:3em;
                    --wp--custom--ast-default-block-right-padding: 1.5em;
                    --wp--custom--ast-default-block-bottom-padding: 3em;
                    --wp--custom--ast-default-block-left-padding: 1.5em
                }
            }

            :root {
                --ast-global-color-0: #046bd2;
                --ast-global-color-1: #045cb4;
                --ast-global-color-2: #2a4167;
                --ast-global-color-3: #334155;
                --ast-global-color-4: #fff;
                --ast-global-color-5: #f0f5fa;
                --ast-global-color-6: #111;
                --ast-global-color-7: #d1d5db;
                --ast-global-color-8: #111
            }

            :root {
                --ast-border-color: var(--ast-global-color-7)
            }

            h1 {
                color: var(--ast-global-color-2)
            }

            .elementor-widget-heading .elementor-heading-title {
                margin: 0
            }

            .ast-page-builder-template {
                background-color: var(--ast-global-color-4);
                background-image: none
            }

            @media (max-width: 921px) {
                .ast-page-builder-template {
                    background-color:var(--ast-global-color-4);
                    background-image: none
                }
            }

            @media (max-width: 544px) {
                .ast-page-builder-template {
                    background-color:var(--ast-global-color-4);
                    background-image: none
                }
            }

            :root {
                --e-global-color-astglobalcolor0: #046bd2;
                --e-global-color-astglobalcolor1: #045cb4;
                --e-global-color-astglobalcolor2: #2a4167;
                --e-global-color-astglobalcolor3: #334155;
                --e-global-color-astglobalcolor4: #fff;
                --e-global-color-astglobalcolor5: #f0f5fa;
                --e-global-color-astglobalcolor6: #111;
                --e-global-color-astglobalcolor7: #d1d5db;
                --e-global-color-astglobalcolor8: #111
            }

            :root {
                --wp--preset--aspect-ratio--square: 1;
                --wp--preset--aspect-ratio--4-3: 4/3;
                --wp--preset--aspect-ratio--3-4: 3/4;
                --wp--preset--aspect-ratio--3-2: 3/2;
                --wp--preset--aspect-ratio--2-3: 2/3;
                --wp--preset--aspect-ratio--16-9: 16/9;
                --wp--preset--aspect-ratio--9-16: 9/16;
                --wp--preset--color--black: #000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #fff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--color--ast-global-color-0: var(--ast-global-color-0);
                --wp--preset--color--ast-global-color-1: var(--ast-global-color-1);
                --wp--preset--color--ast-global-color-2: var(--ast-global-color-2);
                --wp--preset--color--ast-global-color-3: var(--ast-global-color-3);
                --wp--preset--color--ast-global-color-4: var(--ast-global-color-4);
                --wp--preset--color--ast-global-color-5: var(--ast-global-color-5);
                --wp--preset--color--ast-global-color-6: var(--ast-global-color-6);
                --wp--preset--color--ast-global-color-7: var(--ast-global-color-7);
                --wp--preset--color--ast-global-color-8: var(--ast-global-color-8);
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,#0693e3 0%,#9b51e0 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,#7adcb4 0%,#00d082 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,#fcb900 0%,#ff6900 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,#ff6900 0%,#cf2e2e 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,#eee 0%,#a9b8c3 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,#4aeadc 0%,#9778d1 20%,#cf2aba 40%,#ee2c82 60%,#fb6962 80%,#fef84c 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,#ffceec 0%,#9896f0 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,#fecda5 0%,#fe2d2d 50%,#6b003e 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,#ffcb70 0%,#c751c0 50%,#4158d0 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg,#fff5cb 0%,#b6e3d4 50%,#33a7b5 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg,#caf880 0%,#71ce7e 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg,#020381 0%,#2874fc 100%);
                --wp--preset--font-size--small: 13px;
                --wp--preset--font-size--medium: 20px;
                --wp--preset--font-size--large: 36px;
                --wp--preset--font-size--x-large: 42px;
                --wp--preset--spacing--20: .44rem;
                --wp--preset--spacing--30: .67rem;
                --wp--preset--spacing--40: 1rem;
                --wp--preset--spacing--50: 1.5rem;
                --wp--preset--spacing--60: 2.25rem;
                --wp--preset--spacing--70: 3.38rem;
                --wp--preset--spacing--80: 5.06rem;
                --wp--preset--shadow--natural: 6px 6px 9px rgba(0,0,0,.2);
                --wp--preset--shadow--deep: 12px 12px 50px rgba(0,0,0,.4);
                --wp--preset--shadow--sharp: 6px 6px 0px rgba(0,0,0,.2);
                --wp--preset--shadow--outlined: 6px 6px 0px -3px #fff,6px 6px #000;
                --wp--preset--shadow--crisp: 6px 6px 0px #000
            }

            :root {
                --wp--style--global--content-size: var(--wp--custom--ast-content-width-size);
                --wp--style--global--wide-size: var(--wp--custom--ast-wide-width-size)
            }

            :where(body) {
                margin: 0
            }

            :where(.wp-site-blocks) > * {
                margin-block-start:24px;margin-block-end:0}

            :where(.wp-site-blocks) > :first-child {
                margin-block-start:0}

            :where(.wp-site-blocks) > :last-child {
                margin-block-end:0}

            :root {
                --wp--style--block-gap: 24px
            }

            :root :where(.is-layout-flow) > :first-child {
                margin-block-start:0}

            :root :where(.is-layout-flow) > :last-child {
                margin-block-end:0}

            :root :where(.is-layout-flow) > * {
                margin-block-start:24px;margin-block-end:0}

            :root :where(.is-layout-constrained) > :first-child {
                margin-block-start:0}

            :root :where(.is-layout-constrained) > :last-child {
                margin-block-end:0}

            :root :where(.is-layout-constrained) > * {
                margin-block-start:24px;margin-block-end:0}

            :root :where(.is-layout-flex) {
                gap: 24px
            }

            :root :where(.is-layout-grid) {
                gap: 24px
            }

            body {
                padding-top: 0px;
                padding-right: 0px;
                padding-bottom: 0px;
                padding-left: 0px
            }

            a:where(:not(.wp-element-button)) {
                text-decoration: none
            }

            :root :where(.wp-block-icon svg) {
                width: 24px
            }

            :root :where(.wp-block-pullquote) {
                font-size: 1.5em;
                line-height: 1.6
            }

            :root {
                --direction-multiplier: 1
            }

            .elementor *,.elementor :after,.elementor :before {
                box-sizing: border-box
            }

            .elementor a {
                box-shadow: none;
                text-decoration: none
            }

            .elementor amp-img,.elementor amp-anim {
                border: none;
                border-radius: 0;
                box-shadow: none;
                height: auto;
                max-width: 100%
            }

            .elementor-element {
                --flex-direction: initial;
                --flex-wrap: initial;
                --justify-content: initial;
                --align-items: initial;
                --align-content: initial;
                --gap: initial;
                --flex-basis: initial;
                --flex-grow: initial;
                --flex-shrink: initial;
                --order: initial;
                --align-self: initial;
                align-self: var(--align-self);
                flex-basis: var(--flex-basis);
                flex-grow: var(--flex-grow);
                flex-shrink: var(--flex-shrink);
                order: var(--order)
            }

            .elementor-element:where(.e-con-full,.elementor-widget) {
                align-content: var(--align-content);
                align-items: var(--align-items);
                flex-direction: var(--flex-direction);
                flex-wrap: var(--flex-wrap);
                gap: var(--row-gap) var(--column-gap);
                justify-content: var(--justify-content)
            }

            .elementor-align-justify .elementor-button {
                width: 100%
            }

            :root {
                --page-title-display: block
            }

            @keyframes eicon-spin {
                0% {
                    transform: rotate(0deg)
                }

                to {
                    transform: rotate(359deg)
                }
            }

            .elementor-widget {
                position: relative
            }

            .elementor-widget:not(:last-child) {
                margin-block-end:var(--kit-widget-spacing,20px)}

            @media (prefers-reduced-motion: no-preference) {
                html {
                    scroll-behavior:smooth
                }
            }

            .e-con {
                --border-radius: 0;
                --border-top-width: 0px;
                --border-right-width: 0px;
                --border-bottom-width: 0px;
                --border-left-width: 0px;
                --border-style: initial;
                --border-color: initial;
                --container-widget-width: 100%;
                --container-widget-height: initial;
                --container-widget-flex-grow: 0;
                --container-widget-align-self: initial;
                --content-width: min(100%,var(--container-max-width,1140px));
                --width: 100%;
                --min-height: initial;
                --height: auto;
                --text-align: initial;
                --margin-top: 0px;
                --margin-right: 0px;
                --margin-bottom: 0px;
                --margin-left: 0px;
                --padding-top: var(--container-default-padding-top,10px);
                --padding-right: var(--container-default-padding-right,10px);
                --padding-bottom: var(--container-default-padding-bottom,10px);
                --padding-left: var(--container-default-padding-left,10px);
                --position: relative;
                --z-index: revert;
                --overflow: visible;
                --gap: var(--widgets-spacing,20px);
                --row-gap: var(--widgets-spacing-row,20px);
                --column-gap: var(--widgets-spacing-column,20px);
                --overlay-mix-blend-mode: initial;
                --overlay-opacity: 1;
                --overlay-transition: .3s;
                --e-con-grid-template-columns: repeat(3,1fr);
                --e-con-grid-template-rows: repeat(2,1fr);
                border-radius: var(--border-radius);
                height: var(--height);
                min-height: var(--min-height);
                min-width: 0;
                overflow: var(--overflow);
                position: var(--position);
                width: var(--width);
                z-index: var(--z-index);
                --flex-wrap-mobile: wrap
            }

            .e-con:where(:not(.e-div-block-base)) {
                transition: background var(--background-transition,.3s),border var(--border-transition,.3s),box-shadow var(--border-transition,.3s),transform var(--e-con-transform-transition-duration,.4s)
            }

            .e-con {
                --margin-block-start: var(--margin-top);
                --margin-block-end: var(--margin-bottom);
                --margin-inline-start: var(--margin-left);
                --margin-inline-end: var(--margin-right);
                --padding-inline-start: var(--padding-left);
                --padding-inline-end: var(--padding-right);
                --padding-block-start: var(--padding-top);
                --padding-block-end: var(--padding-bottom);
                --border-block-start-width: var(--border-top-width);
                --border-block-end-width: var(--border-bottom-width);
                --border-inline-start-width: var(--border-left-width);
                --border-inline-end-width: var(--border-right-width)
            }

            .e-con {
                margin-block-end:var(--margin-block-end);margin-block-start: var(--margin-block-start);
                margin-inline-end:var(--margin-inline-end);margin-inline-start: var(--margin-inline-start);
                padding-inline-end:var(--padding-inline-end);padding-inline-start: var(--padding-inline-start)
            }

            .e-con.e-flex {
                --flex-direction: column;
                --flex-basis: auto;
                --flex-grow: 0;
                --flex-shrink: 1;
                flex: var(--flex-grow) var(--flex-shrink) var(--flex-basis)
            }

            .e-con-full,.e-con>.e-con-inner {
                padding-block-end:var(--padding-block-end);padding-block-start: var(--padding-block-start);
                text-align: var(--text-align)
            }

            .e-con-full.e-flex,.e-con.e-flex>.e-con-inner {
                flex-direction: var(--flex-direction)
            }

            .e-con,.e-con>.e-con-inner {
                display: var(--display)
            }

            .e-con.e-grid {
                --grid-justify-content: start;
                --grid-align-content: start;
                --grid-auto-flow: row
            }

            .e-con.e-grid,.e-con.e-grid>.e-con-inner {
                align-content: var(--grid-align-content);
                align-items: var(--align-items);
                grid-auto-flow: var(--grid-auto-flow);
                grid-template-columns: var(--e-con-grid-template-columns);
                grid-template-rows: var(--e-con-grid-template-rows);
                justify-content: var(--grid-justify-content);
                justify-items: var(--justify-items)
            }

            .e-con-boxed.e-flex {
                align-content: normal;
                align-items: normal;
                flex-direction: column;
                flex-wrap: nowrap;
                justify-content: normal
            }

            .e-con-boxed.e-grid {
                grid-template-columns: 1fr;
                grid-template-rows: 1fr;
                justify-items: legacy
            }

            .e-con-boxed {
                gap: initial;
                text-align: initial
            }

            .e-con.e-flex>.e-con-inner {
                align-content: var(--align-content);
                align-items: var(--align-items);
                align-self: auto;
                flex-basis: auto;
                flex-grow: 1;
                flex-shrink: 1;
                flex-wrap: var(--flex-wrap);
                justify-content: var(--justify-content)
            }

            .e-con.e-grid>.e-con-inner {
                align-items: var(--align-items);
                justify-items: var(--justify-items)
            }

            .e-con>.e-con-inner {
                gap: var(--row-gap) var(--column-gap);
                height: 100%;
                margin: 0 auto;
                max-width: var(--content-width);
                padding-inline-end:0;padding-inline-start:0;width: 100%
            }

            :is([data-widget_type="e-component.default"],[data-widget_type="e-component.default"]>.elementor-section-wrap)>.e-con {
                --margin-right: 0px;
                --margin-left: 0px
            }

            .e-con .elementor-widget.elementor-widget {
                margin-block-end:0}

            .e-con:before {
                border-block-end-width:var(--border-block-end-width);border-block-start-width: var(--border-block-start-width);
                border-color: var(--border-color);
                border-inline-end-width:var(--border-inline-end-width);border-inline-start-width: var(--border-inline-start-width);
                border-radius: var(--border-radius);
                border-style: var(--border-style);
                content: var(--background-overlay);
                display: block;
                height: max(100% + var(--border-top-width) + var(--border-bottom-width),100%);
                left: calc(0px - var(--border-left-width));
                mix-blend-mode: var(--overlay-mix-blend-mode);
                opacity: var(--overlay-opacity);
                position: absolute;
                top: calc(0px - var(--border-top-width));
                transition: var(--overlay-transition,.3s);
                width: max(100% + var(--border-left-width) + var(--border-right-width),100%)
            }

            .e-con:before {
                transition: background var(--overlay-transition,.3s),border-radius var(--border-transition,.3s),opacity var(--overlay-transition,.3s)
            }

            .e-con .elementor-widget {
                min-width: 0
            }

            .e-con>.e-con-inner>.elementor-widget>.elementor-widget-container,.e-con>.elementor-widget>.elementor-widget-container {
                height: 100%
            }

            .e-con.e-con>.e-con-inner>.elementor-widget,.elementor.elementor .e-con>.elementor-widget {
                max-width: 100%
            }

            .e-con .elementor-widget:not(:last-child) {
                --kit-widget-spacing: 0px
            }

            @media (max-width: 767px) {
                .e-con.e-flex {
                    --width:100%;
                    --flex-wrap: var(--flex-wrap-mobile)
                }
            }

            .elementor-element:where(:not(.e-con)):where(:not(.e-div-block-base)) .elementor-widget-container,.elementor-element:where(:not(.e-con)):where(:not(.e-div-block-base)):not(:has(.elementor-widget-container)) {
                transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s)
            }

            .elementor-heading-title {
                line-height: 1;
                margin: 0;
                padding: 0
            }

            .elementor-button {
                background-color: #69727d;
                border-radius: 3px;
                color: #fff;
                display: inline-block;
                fill: #fff;
                font-size: 15px;
                line-height: 1;
                padding: 12px 24px;
                text-align: center;
                transition: all .3s
            }

            .elementor-button:focus,.elementor-button:hover,.elementor-button:visited {
                color: #fff
            }

            .elementor-button-content-wrapper {
                display: flex;
                flex-direction: row;
                gap: 5px;
                justify-content: center
            }

            .elementor-button-icon {
                align-items: center;
                display: flex
            }

            .elementor-button-icon svg {
                height: auto;
                width: 1em
            }

            .elementor-button-icon .e-font-icon-svg {
                height: 1em
            }

            .elementor-button-text {
                display: inline-block
            }

            .elementor-button span {
                text-decoration: inherit
            }

            @media (prefers-reduced-motion:reduce) {
                html *:not(#_#_#_#_#_#_#_#_) {
                    transition-delay: 0s;
                    transition-duration: 0s
                }
            }

            @media (max-width: 767px) {
                .elementor .elementor-hidden-mobile {
                    display:none
                }
            }

            @media (min-width: 768px) and (max-width:1024px) {
                .elementor .elementor-hidden-tablet {
                    display:none
                }
            }

            @media (min-width: 1025px) and (max-width:99999px) {
                .elementor .elementor-hidden-desktop {
                    display:none
                }
            }

            .elementor-kit-12 {
                --e-global-color-primary: #f7f800;
                --e-global-color-secondary: #fa0;
                --e-global-color-text: #fff;
                --e-global-color-accent: #f1ff00;
                --e-global-typography-primary-font-family: "Roboto";
                --e-global-typography-primary-font-weight: 600;
                --e-global-typography-secondary-font-family: "Roboto Slab";
                --e-global-typography-secondary-font-weight: 400;
                --e-global-typography-text-font-family: "Roboto";
                --e-global-typography-text-font-weight: 400;
                --e-global-typography-accent-font-family: "Roboto";
                --e-global-typography-accent-font-weight: 500;
                background-color: #000;
                color: var(--e-global-color-text);
                overscroll-behavior: none
            }

            .elementor-kit-12 h1 {
                color: var(--e-global-color-primary)
            }

            .e-con {
                --container-max-width: 1140px
            }

            .elementor-widget:not(:last-child) {
                margin-block-end:20px}

            .elementor-element {
                --widgets-spacing: 20px 20px;
                --widgets-spacing-row: 20px;
                --widgets-spacing-column: 20px
            }

            @media (max-width: 1024px) {
                .e-con {
                    --container-max-width:1024px
                }
            }

            @media (max-width: 767px) {
                .e-con {
                    --container-max-width:767px
                }
            }

            .elementor-widget-image {
                text-align: center
            }

            .elementor-widget-image a {
                display: inline-block
            }

            .elementor-widget-image a amp-img[src$=".svg"],.elementor-widget-image a amp-anim[src$=".svg"] {
                width: 48px
            }

            .elementor-widget-image amp-img,.elementor-widget-image amp-anim {
                display: inline-block;
                vertical-align: middle
            }

            .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                color: inherit;
                font-size: inherit;
                line-height: inherit
            }

            .elementor-2160 .elementor-element.elementor-element-3aba35e {
                --display: flex;
                --flex-direction: column;
                --container-widget-width: 100%;
                --container-widget-height: initial;
                --container-widget-flex-grow: 0;
                --container-widget-align-self: initial;
                --flex-wrap-mobile: wrap
            }

            .elementor-2160 .elementor-element.elementor-element-dad55f4 {
                --display: flex;
                --flex-direction: column;
                --container-widget-width: 100%;
                --container-widget-height: initial;
                --container-widget-flex-grow: 0;
                --container-widget-align-self: initial;
                --flex-wrap-mobile: wrap
            }

            .elementor-2160 .elementor-element.elementor-element-6b6abb2 {
                --display: grid;
                --e-con-grid-template-columns: repeat(3,1fr);
                --e-con-grid-template-rows: repeat(1,1fr);
                --grid-auto-flow: row
            }

            .elementor-widget-button .elementor-button {
                background-color: var(--e-global-color-accent);
                font-family: var(--e-global-typography-accent-font-family),Sans-serif;
                font-weight: var(--e-global-typography-accent-font-weight)
            }

            .elementor-2160 .elementor-element.elementor-element-7b2130c .elementor-button {
                font-size: 18px;
                font-weight: 500
            }

            .elementor-2160 .elementor-element.elementor-element-3f26064 {
                --display: flex;
                --flex-direction: column;
                --container-widget-width: 100%;
                --container-widget-height: initial;
                --container-widget-flex-grow: 0;
                --container-widget-align-self: initial;
                --flex-wrap-mobile: wrap
            }

            .elementor-2160 .elementor-element.elementor-element-0844577 {
                --display: grid;
                --e-con-grid-template-columns: repeat(3,1fr);
                --e-con-grid-template-rows: repeat(1,1fr);
                --grid-auto-flow: row
            }

            .elementor-2160 .elementor-element.elementor-element-44e0bbd .elementor-button {
                font-size: 18px;
                font-weight: 500
            }

            .elementor-2160 .elementor-element.elementor-element-ee34918 {
                --display: flex;
                --flex-direction: column;
                --container-widget-width: 100%;
                --container-widget-height: initial;
                --container-widget-flex-grow: 0;
                --container-widget-align-self: initial;
                --flex-wrap-mobile: wrap
            }

            .elementor-2160 .elementor-element.elementor-element-f2001a3 {
                --display: flex;
                --flex-direction: column;
                --container-widget-width: 100%;
                --container-widget-height: initial;
                --container-widget-flex-grow: 0;
                --container-widget-align-self: initial;
                --flex-wrap-mobile: wrap
            }

            .elementor-widget-heading .elementor-heading-title {
                font-family: var(--e-global-typography-primary-font-family),Sans-serif;
                font-weight: var(--e-global-typography-primary-font-weight);
                color: var(--e-global-color-primary)
            }

            .elementor-2160 .elementor-element.elementor-element-3d9f9a1 {
                text-align: center
            }

            .elementor-2160 .elementor-element.elementor-element-3d9f9a1 .elementor-heading-title {
                font-family: "Times New Roman",Sans-serif;
                font-size: 24px;
                font-weight: 600
            }

            .elementor-2160 .elementor-element.elementor-element-3279937 {
                --display: flex;
                --flex-direction: column;
                --container-widget-width: 100%;
                --container-widget-height: initial;
                --container-widget-flex-grow: 0;
                --container-widget-align-self: initial;
                --flex-wrap-mobile: wrap
            }

            .elementor-widget-text-editor {
                font-family: var(--e-global-typography-text-font-family),Sans-serif;
                font-weight: var(--e-global-typography-text-font-weight);
                color: var(--e-global-color-text)
            }

            .elementor-2160 .elementor-element.elementor-element-1120b6f {
                text-align: center;
                font-family: "Times New Roman",Sans-serif;
                font-size: 18px;
                font-weight: 400
            }

            .elementor-2160 .elementor-element.elementor-element-1120b6f a {
                color: #ffec00
            }

            .elementor-2160 .elementor-element.elementor-element-b86bf98 {
                --display: flex;
                --min-height: 216px;
                --flex-direction: column;
                --container-widget-width: 100%;
                --container-widget-height: initial;
                --container-widget-flex-grow: 0;
                --container-widget-align-self: initial;
                --flex-wrap-mobile: wrap
            }

            .elementor-2160 .elementor-element.elementor-element-c288912 {
                text-align: center
            }

            .elementor-2160 .elementor-element.elementor-element-c288912 a {
                color: #f5e900
            }

            @media (max-width: 1024px) {
                .elementor-2160 .elementor-element.elementor-element-6b6abb2 {
                    --grid-auto-flow:row
                }

                .elementor-2160 .elementor-element.elementor-element-0844577 {
                    --grid-auto-flow: row
                }
            }

            @media (max-width: 767px) {
                .elementor-2160 .elementor-element.elementor-element-6b6abb2 {
                    --e-con-grid-template-columns:repeat(3,1fr);
                    --e-con-grid-template-rows: repeat(1,1fr);
                    --grid-auto-flow: row
                }

                .elementor-2160 .elementor-element.elementor-element-0844577 {
                    --e-con-grid-template-columns: repeat(1,1fr);
                    --e-con-grid-template-rows: repeat(1,1fr);
                    --grid-auto-flow: row
                }
            }

            .elementor-2160 .elementor-element.elementor-element-f9bdfd2 .elementor-button {
                font-weight: 800;
                text-transform: uppercase;
                letter-spacing: 1.5px;
                clip-path: polygon(10px 0,100% 0,100% calc(100% - 10px),calc(100% - 10px) 100%,0 100%,0 10px);
                box-shadow: 0 0 10px rgba(255,230,0,.35);
                transition: transform .2s ease,box-shadow .2s ease,background .2s ease
            }

            .elementor-2160 .elementor-element.elementor-element-f9bdfd2 .elementor-button:not(#_#_#_#_#_#_#_) {
                background: #000;
                color: #ffe600;
                border: 2px solid #ffe600
            }

            .elementor-2160 .elementor-element.elementor-element-f9bdfd2 .elementor-button:hover {
                transform: translateY(-2px)
            }

            .elementor-2160 .elementor-element.elementor-element-f9bdfd2 .elementor-button:hover:not(#_#_#_#_#_#_#_) {
                background: #ffe600;
                color: #000;
                box-shadow: 0 0 20px #ffe600,inset 0 0 8px rgba(0,0,0,.5)
            }

            .elementor-2160 .elementor-element.elementor-element-f9bdfd2 .elementor-button:active {
                transform: scale(.97)
            }

            .elementor-2160 .elementor-element.elementor-element-7b2130c .elementor-button {
                font-weight: 800;
                text-transform: uppercase;
                letter-spacing: 1.5px;
                clip-path: polygon(10px 0,100% 0,100% calc(100% - 10px),calc(100% - 10px) 100%,0 100%,0 10px);
                box-shadow: 0 0 10px rgba(255,230,0,.35);
                transition: transform .2s ease,box-shadow .2s ease,background .2s ease
            }

            .elementor-2160 .elementor-element.elementor-element-7b2130c .elementor-button:not(#_#_#_#_#_#_#_) {
                background: #000;
                color: #ffe600;
                border: 2px solid #ffe600
            }

            .elementor-2160 .elementor-element.elementor-element-7b2130c .elementor-button:hover {
                transform: translateY(-2px)
            }

            .elementor-2160 .elementor-element.elementor-element-7b2130c .elementor-button:hover:not(#_#_#_#_#_#_#_) {
                background: #ffe600;
                color: #000;
                box-shadow: 0 0 20px #ffe600,inset 0 0 8px rgba(0,0,0,.5)
            }

            .elementor-2160 .elementor-element.elementor-element-7b2130c .elementor-button:active {
                transform: scale(.97)
            }

            .elementor-2160 .elementor-element.elementor-element-045ab76 .elementor-button {
                font-weight: 800;
                text-transform: uppercase;
                letter-spacing: 1.5px;
                clip-path: polygon(10px 0,100% 0,100% calc(100% - 10px),calc(100% - 10px) 100%,0 100%,0 10px);
                box-shadow: 0 0 10px rgba(255,230,0,.35);
                transition: transform .2s ease,box-shadow .2s ease,background .2s ease
            }

            .elementor-2160 .elementor-element.elementor-element-045ab76 .elementor-button:not(#_#_#_#_#_#_#_) {
                background: #000;
                color: #ffe600;
                border: 2px solid #ffe600
            }

            .elementor-2160 .elementor-element.elementor-element-045ab76 .elementor-button:hover {
                transform: translateY(-2px)
            }

            .elementor-2160 .elementor-element.elementor-element-045ab76 .elementor-button:hover:not(#_#_#_#_#_#_#_) {
                background: #ffe600;
                color: #000;
                box-shadow: 0 0 20px #ffe600,inset 0 0 8px rgba(0,0,0,.5)
            }

            .elementor-2160 .elementor-element.elementor-element-045ab76 .elementor-button:active {
                transform: scale(.97)
            }

            .elementor-2160 .elementor-element.elementor-element-e312230 .elementor-button {
                font-weight: 800;
                text-transform: uppercase;
                letter-spacing: 1.5px;
                clip-path: polygon(10px 0,100% 0,100% calc(100% - 10px),calc(100% - 10px) 100%,0 100%,0 10px);
                box-shadow: 0 0 10px rgba(255,230,0,.35);
                transition: transform .2s ease,box-shadow .2s ease,background .2s ease
            }

            .elementor-2160 .elementor-element.elementor-element-e312230 .elementor-button:not(#_#_#_#_#_#_#_) {
                background: #000;
                color: #ffe600;
                border: 2px solid #ffe600
            }

            .elementor-2160 .elementor-element.elementor-element-e312230 .elementor-button:hover {
                transform: translateY(-2px)
            }

            .elementor-2160 .elementor-element.elementor-element-e312230 .elementor-button:hover:not(#_#_#_#_#_#_#_) {
                background: #ffe600;
                color: #000;
                box-shadow: 0 0 20px #ffe600,inset 0 0 8px rgba(0,0,0,.5)
            }

            .elementor-2160 .elementor-element.elementor-element-e312230 .elementor-button:active {
                transform: scale(.97)
            }

            .elementor-2160 .elementor-element.elementor-element-44e0bbd .elementor-button {
                font-weight: 800;
                text-transform: uppercase;
                letter-spacing: 1.5px;
                clip-path: polygon(10px 0,100% 0,100% calc(100% - 10px),calc(100% - 10px) 100%,0 100%,0 10px);
                box-shadow: 0 0 10px rgba(255,230,0,.35);
                transition: transform .2s ease,box-shadow .2s ease,background .2s ease
            }

            .elementor-2160 .elementor-element.elementor-element-44e0bbd .elementor-button:not(#_#_#_#_#_#_#_) {
                background: #000;
                color: #ffe600;
                border: 2px solid #ffe600
            }

            .elementor-2160 .elementor-element.elementor-element-44e0bbd .elementor-button:hover {
                transform: translateY(-2px)
            }

            .elementor-2160 .elementor-element.elementor-element-44e0bbd .elementor-button:hover:not(#_#_#_#_#_#_#_) {
                background: #ffe600;
                color: #000;
                box-shadow: 0 0 20px #ffe600,inset 0 0 8px rgba(0,0,0,.5)
            }

            .elementor-2160 .elementor-element.elementor-element-44e0bbd .elementor-button:active {
                transform: scale(.97)
            }

            .elementor-2160 .elementor-element.elementor-element-1ecd0bd .elementor-button {
                font-weight: 800;
                text-transform: uppercase;
                letter-spacing: 1.5px;
                clip-path: polygon(10px 0,100% 0,100% calc(100% - 10px),calc(100% - 10px) 100%,0 100%,0 10px);
                box-shadow: 0 0 10px rgba(255,230,0,.35);
                transition: transform .2s ease,box-shadow .2s ease,background .2s ease
            }

            .elementor-2160 .elementor-element.elementor-element-1ecd0bd .elementor-button:not(#_#_#_#_#_#_#_) {
                background: #000;
                color: #ffe600;
                border: 2px solid #ffe600
            }

            .elementor-2160 .elementor-element.elementor-element-1ecd0bd .elementor-button:hover {
                transform: translateY(-2px)
            }

            .elementor-2160 .elementor-element.elementor-element-1ecd0bd .elementor-button:hover:not(#_#_#_#_#_#_#_) {
                background: #ffe600;
                color: #000;
                box-shadow: 0 0 20px #ffe600,inset 0 0 8px rgba(0,0,0,.5)
            }

            .elementor-2160 .elementor-element.elementor-element-1ecd0bd .elementor-button:active {
                transform: scale(.97)
            }

            .elementor-2160 .elementor-element.elementor-element-3ffe15f .elementor-widget-container {
                display: inline-block;
                padding: 6px;
                border: 3px solid #ffe600;
                box-shadow: 0 0 15px rgba(255,230,0,.7),inset 0 0 15px rgba(0,240,255,.5);
                clip-path: polygon(20px 0,100% 0,100% calc(100% - 20px),calc(100% - 20px) 100%,0 100%,0 20px);
                transform-origin: bottom center;
                animation: metronom-cyber 2.2s infinite ease-in-out
            }

            .elementor-2160 .elementor-element.elementor-element-3ffe15f amp-img,.elementor-2160 .elementor-element.elementor-element-3ffe15f amp-anim {
                display: block;
                width: 100%;
                height: auto;
                clip-path: polygon(16px 0,100% 0,100% calc(100% - 16px),calc(100% - 16px) 100%,0 100%,0 16px)
            }

            @keyframes metronom-cyber {
                0% {
                    transform: rotate(-6deg);
                    box-shadow: 0 0 20px #ffe600,-5px 0 25px #00f0ff
                }

                25% {
                    box-shadow: 0 0 10px #ffe600,0 0 15px #f05
                }

                50% {
                    transform: rotate(6deg);
                    box-shadow: 0 0 20px #ffe600,5px 0 25px #00f0ff
                }

                75% {
                    box-shadow: 0 0 10px #ffe600,0 0 15px #f05
                }

                100% {
                    transform: rotate(-6deg);
                    box-shadow: 0 0 20px #ffe600,-5px 0 25px #00f0ff
                }
            }

            .elementor-2160 .elementor-element.elementor-element-3279937 .elementor-widget-container {
                position: relative;
                background: rgba(10,10,10,.85);
                border: 1px solid rgba(255,230,0,.4);
                padding: 18px 24px;
                box-shadow: 0 0 15px rgba(255,230,0,.15),inset 0 0 20px rgba(0,0,0,.8);
                clip-path: polygon(15px 0,100% 0,100% calc(100% - 15px),calc(100% - 15px) 100%,0 100%,0 15px)
            }

            .elementor-2160 .elementor-element.elementor-element-3279937 .elementor-widget-container::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 25px;
                height: 25px;
                border-top: 3px solid #ffe600;
                border-left: 3px solid #ffe600;
                box-shadow: -2px -2px 10px #ffe600;
                pointer-events: none
            }

            .elementor-2160 .elementor-element.elementor-element-3279937 .elementor-widget-container::after {
                content: "";
                position: absolute;
                bottom: 0;
                right: 0;
                width: 25px;
                height: 25px;
                border-bottom: 3px solid #ffe600;
                border-right: 3px solid #ffe600;
                box-shadow: 2px 2px 10px #ffe600;
                pointer-events: none
            }

            .elementor-2160 .elementor-element.elementor-element-3279937 p {
                color: #e0e0e0;
                font-family: monospace,sans-serif;
                letter-spacing: .5px;
                line-height: 1.6;
                margin: 0
            }

            .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload):not(#_#_#_#_#_#_#_#_),.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) *:not(#_#_#_#_#_#_#_#_) {
                background-image: none
            }

            @media screen and (max-height: 1024px) {
                .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload):not(#_#_#_#_#_#_#_#_),.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) *:not(#_#_#_#_#_#_#_#_) {
                    background-image:none
                }
            }

            @media screen and (max-height: 640px) {
                .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload):not(#_#_#_#_#_#_#_#_),.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) *:not(#_#_#_#_#_#_#_#_) {
                    background-image:none
                }
            }

            .mario-footer-bar {
                position: fixed;
                bottom: 12px;
                left: 50%;
                transform: translateX(-50%);
                width: 95%;
                max-width: 880px;
                z-index: 99999;
                padding: 10px 16px;
                box-sizing: border-box;
                background-color: #050507;
                background-image: linear-gradient(rgba(255,230,0,.08) 1px,transparent 1px),linear-gradient(90deg,rgba(255,230,0,.05) 1px,transparent 1px),radial-gradient(ellipse at 50% 100%,rgba(255,230,0,.15) 0%,transparent 75%);
                background-size: 24px 24px,24px 24px,100% 100%;
                border: 2px solid #ffe600;
                border-radius: 0;
                clip-path: polygon(18px 0%,calc(100% - 18px) 0%,100% 18px,100% calc(100% - 18px),calc(100% - 18px) 100%,18px 100%,0% calc(100% - 18px),0% 18px);
                box-shadow: 0 0 20px rgba(255,230,0,.4),inset 0 0 15px rgba(255,230,0,.2),0 15px 35px rgba(0,0,0,.95);
                overflow: hidden
            }

            .mario-footer-bar::before {
                content: "";
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background-image: url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 300 60\' preserveAspectRatio=\'none\'%3E%3Cpolygon points=\'10,0 25,0 12,28 32,28 5,60 18,34 2,34\' fill=\'rgba(255,230,0,0.35)\'/%3E%3Cpolygon points=\'90,0 110,0 85,32 115,32 60,60 88,36 68,36\' fill=\'rgba(255,255,255,0.45)\'/%3E%3Cpolygon points=\'180,0 195,0 178,25 200,25 165,60 182,30 162,30\' fill=\'rgba(255,230,0,0.4)\'/%3E%3Cpolygon points=\'260,0 275,0 255,28 280,28 240,60 262,35 245,35\' fill=\'rgba(255,255,255,0.5)\'/%3E%3C/svg%3E");
                background-size: cover;
                background-repeat: no-repeat;
                opacity: .6;
                pointer-events: none;
                z-index: 1;
                animation: cyber-lightning-strike 4s infinite ease-in-out
            }

            .mario-footer-bar::after {
                content: "";
                position: absolute;
                inset: 2px;
                border-top: 2px solid #ffd700;
                border-bottom: 2px solid #ffd700;
                opacity: .7;
                pointer-events: none;
                z-index: 2
            }

            .mario-footer-container {
                position: relative;
                z-index: 3;
                width: 100%;
                margin: 0 auto;
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 8px
            }

            .mario-btn {
                flex: 1;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-decoration: none;
                padding: 8px 4px;
                position: relative;
                background: linear-gradient(180deg,rgba(255,230,0,.06) 0%,rgba(10,10,12,.95) 100%);
                border: 1px solid rgba(255,230,0,.35);
                border-radius: 0;
                clip-path: polygon(8px 0,100% 0,100% calc(100% - 8px),calc(100% - 8px) 100%,0 100%,0 8px);
                box-shadow: inset 0 0 8px rgba(255,230,0,.1);
                overflow: hidden;
                transition: transform .2s ease,border-color .2s ease,box-shadow .2s ease,background .2s ease
            }

            .mario-btn .btn-icon {
                font-size: 16px;
                line-height: 1;
                margin-bottom: 3px;
                color: #ffe600;
                filter: drop-shadow(0 0 6px rgba(255,230,0,.8));
                transition: transform .2s ease
            }

            .mario-btn .btn-text {
                font-size: 10px;
                font-weight: 800;
                color: #fff;
                text-transform: uppercase;
                letter-spacing: 1px;
                text-shadow: 0 0 6px rgba(255,230,0,.5);
                white-space: nowrap
            }

            .mario-btn.mario-btn-highlight {
                background: linear-gradient(135deg,#ffe600 0%,#f80 100%);
                border: 1px solid #fff;
                box-shadow: 0 0 20px rgba(255,230,0,.9),inset 0 0 8px rgba(255,255,255,.8);
                transform: translateY(-2px);
                animation: cyber-glow-pulse 1.8s infinite alternate ease-in-out
            }

            .mario-btn.mario-btn-highlight .btn-icon,.mario-btn.mario-btn-highlight .btn-text {
                color: #050507;
                text-shadow: none;
                filter: none;
                font-weight: 900
            }

            .mario-btn:hover {
                transform: translateY(-3px) scale(1.03);
                background: linear-gradient(180deg,rgba(255,230,0,.25) 0%,rgba(10,10,12,1) 100%);
                border-color: #ffe600;
                box-shadow: 0 0 15px rgba(255,230,0,.7),inset 0 0 10px rgba(255,230,0,.3)
            }

            .mario-btn:hover .btn-icon {
                transform: scale(1.15);
                color: #fff;
                filter: drop-shadow(0 0 8px #ffe600)
            }

            @keyframes cyber-lightning-strike {
                0% {
                    left: -100%;
                    opacity: 0
                }

                15% {
                    opacity: .9
                }

                30% {
                    left: 100%;
                    opacity: 0
                }

                100% {
                    left: 100%;
                    opacity: 0
                }
            }

            @keyframes cyber-glow-pulse {
                0% {
                    box-shadow: 0 0 12px rgba(255,230,0,.7)
                }

                100% {
                    box-shadow: 0 0 25px #ffe600,0 0 10px rgba(255,136,0,.8)
                }
            }

            @media (max-width: 480px) {
                .mario-footer-bar {
                    bottom:8px;
                    width: calc(100% - 16px);
                    padding: 6px 8px;
                    clip-path: polygon(10px 0%,calc(100% - 10px) 0%,100% 10px,100% calc(100% - 10px),calc(100% - 10px) 100%,10px 100%,0% calc(100% - 10px),0% 10px)
                }

                .mario-footer-container {
                    gap: 5px
                }

                .mario-btn {
                    padding: 6px 2px;
                    clip-path: polygon(5px 0,100% 0,100% calc(100% - 5px),calc(100% - 5px) 100%,0 100%,0 5px)
                }

                .mario-btn .btn-icon {
                    font-size: 14px
                }

                .mario-btn .btn-text {
                    font-size: 8px;
                    letter-spacing: .5px
                }
            }

            /*# sourceURL=amp-custom.css */
        </style>
        <script type="application/ld+json" class="rank-math-schema">
            {
                "@context": "https://schema.org",
                "@graph": [
                    {
                        "@type": [
                            "Organization",
                            "Person"
                        ],
                        "@id": "%%SITE_URL%%/#person",
                        "name": "%%SITE_NAME%%",
                        "url": "%%SITE_URL%%",
                        "address": {
                            "@type": "PostalAddress",
                            "addressRegion": "indonesia"
                        },
                        "logo": {
                            "@type": "ImageObject",
                            "@id": "%%SITE_URL%%/#logo",
                            "url": "%%LOGO_SRC%%",
                            "contentUrl": "%%LOGO_SRC%%",
                            "caption": "%%SITE_NAME%%",
                            "inLanguage": "id"
                        },
                        "image": {
                            "@id": "%%SITE_URL%%/#logo"
                        }
                    },
                    {
                        "@type": "WebSite",
                        "@id": "%%SITE_URL%%/#website",
                        "url": "%%SITE_URL%%",
                        "name": "%%SITE_NAME%%",
                        "publisher": {
                            "@id": "%%SITE_URL%%/#person"
                        },
                        "inLanguage": "id",
                        "potentialAction": {
                            "@type": "SearchAction",
                            "target": "%%SITE_URL%%/?s={search_term_string}",
                            "query-input": "required name=search_term_string"
                        }
                    },
                    {
                        "@type": "ImageObject",
                        "@id": "%%LOGO_SRC%%",
                        "url": "%%LOGO_SRC%%",
                        "width": "200",
                        "height": "200",
                        "inLanguage": "id"
                    },
                    {
                        "@type": "WebPage",
                        "@id": "%%SITE_URL%%/#webpage",
                        "url": "%%SITE_URL%%/",
                        "name": "RAFI777 ? Akurasi Permainan Slot Gacor Pemberi Pundi Cuan Berlimpah",
                        "datePublished": "2026-09-05T14:10:06+07:00",
                        "dateModified": "2026-09-05T14:55:35+07:00",
                        "about": {
                            "@id": "%%SITE_URL%%/#person"
                        },
                        "isPartOf": {
                            "@id": "%%SITE_URL%%/#website"
                        },
                        "primaryImageOfPage": {
                            "@id": "%%LOGO_SRC%%"
                        },
                        "inLanguage": "id"
                    },
                    {
                        "@type": "Person",
                        "@id": "%%SITE_URL%%/author/rafi777/",
                        "name": "rafi777",
                        "url": "%%SITE_URL%%/author/rafi777/",
                        "image": {
                            "@type": "ImageObject",
                            "@id": "https://secure.gravatar.com/avatar/3db675d41551e259c810a5eff793ab6e85d196093cb19e38ef32f68917761890?s=96\u0026amp;d=mm\u0026amp;r=g",
                            "url": "https://secure.gravatar.com/avatar/3db675d41551e259c810a5eff793ab6e85d196093cb19e38ef32f68917761890?s=96\u0026amp;d=mm\u0026amp;r=g",
                            "caption": "rafi777",
                            "inLanguage": "id"
                        },
                        "sameAs": [
                            "%%SITE_URL%%"
                        ]
                    },
                    {
                        "@type": "Article",
                        "headline": "RAFI777 ? Akurasi Permainan Slot Gacor Pemberi Pundi Cuan Berlimpah",
                        "keywords": "%%SITE_NAME%%",
                        "datePublished": "2026-09-05T14:10:06+07:00",
                        "dateModified": "2026-09-05T14:55:35+07:00",
                        "author": {"@id": "%%SITE_URL%%/author/rafi777/",
                        "name": "rafi777"
                    },
                    "publisher": {
                        "@id": "%%SITE_URL%%/#person"
                    },
                    "description": "RAFI777 sebuah permainan taruhan yang mudah sekali para member menangkan dengan mudah tanpa ada zonk dan akses gampang kapan saja.",
                    "name": "RAFI777 ? Akurasi Permainan Slot Gacor Pemberi Pundi Cuan Berlimpah",
                    "@id": "%%SITE_URL%%/#richSnippet",
                    "isPartOf": {
                        "@id": "%%SITE_URL%%/#webpage"
                    },
                    "image": {
                        "@id": "%%LOGO_SRC%%"
                    },
                    "inLanguage": "id",
                    "mainEntityOfPage": {"@id": "%%SITE_URL%%/#webpage"
                }
            }
        ]
    }</script>
<link rel="apple-touch-icon" href="/images/favicon.png">
<title>%%SITE_NAME%% - Situs Slot Gacor Terpercaya</title>
</head>
<body class="home wp-singular page-template page-template-elementor_canvas page page-id-2160 wp-custom-logo wp-embed-responsive wp-theme-astra ast-desktop ast-amp ast-page-builder-template ast-no-sidebar astra-4.13.10 ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-normal-title-enabled elementor-default elementor-template-canvas elementor-kit-12 elementor-page elementor-page-2160">
    <div data-elementor-type="wp-page" data-elementor-id="2160" class="elementor elementor-2160" data-elementor-post-type="page">
        <div class="elementor-element elementor-element-3aba35e e-flex e-con-boxed e-con e-parent" data-id="3aba35e" data-element_type="container" data-e-type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-dad55f4 e-con-full e-flex e-con e-child" data-id="dad55f4" data-element_type="container" data-e-type="container">
                    <div class="elementor-element elementor-element-adeb2e7 elementor-widget elementor-widget-image" data-id="adeb2e7" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <amp-img width="350" height="100" src="%%LOGO_SRC%%" class="attachment-large size-large wp-image-542 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="RAFI777-logo" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                <i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer">
                                    <img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwMCIgd2lkdGg9IjM1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=">
                                </i-amphtml-sizer>
                                <noscript>
                                    <img decoding="async" width="350" height="100" src="%%LOGO_SRC%%" alt="RAFI777-logo">
                                </noscript>
                            </amp-img>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-6b6abb2 e-grid e-con-full elementor-hidden-desktop elementor-hidden-tablet e-con e-child" data-id="6b6abb2" data-element_type="container" data-e-type="container">
                    <div class="elementor-element elementor-element-f9bdfd2 elementor-align-justify elementor-widget elementor-widget-button" data-id="f9bdfd2" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm" href="%%CTA_URL%%" target="_blank" rel="noopener">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">Daftar</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-7b2130c elementor-align-justify elementor-widget elementor-widget-button" data-id="7b2130c" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm" href="%%CTA_URL%%" target="_blank" rel="noopener">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-radiation" viewbox="0 0 496 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M328.2 255.8h151.6c9.1 0 16.8-7.7 16.2-16.8-5.1-75.8-44.4-142.2-102.5-184.2-7.4-5.3-17.9-2.9-22.7 4.8L290.4 188c22.6 14.3 37.8 39.2 37.8 67.8zm-37.8 67.7c-12.3 7.7-26.8 12.4-42.4 12.4-15.6 0-30-4.7-42.4-12.4L125.2 452c-4.8 7.7-2.4 18.1 5.6 22.4C165.7 493.2 205.6 504 248 504s82.3-10.8 117.2-29.6c8-4.3 10.4-14.8 5.6-22.4l-80.4-128.5zM248 303.8c26.5 0 48-21.5 48-48s-21.5-48-48-48-48 21.5-48 48 21.5 48 48 48zm-231.8-48h151.6c0-28.6 15.2-53.5 37.8-67.7L125.2 59.7c-4.8-7.7-15.3-10.2-22.7-4.8C44.4 96.9 5.1 163.3 0 239.1c-.6 9 7.1 16.7 16.2 16.7z"/>
                                            </svg>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-045ab76 elementor-align-justify elementor-widget elementor-widget-button" data-id="045ab76" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm" href="%%CTA_URL%%" target="_blank" rel="noopener">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">Login</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-3f26064 e-con-full elementor-hidden-mobile e-flex e-con e-child" data-id="3f26064" data-element_type="container" data-e-type="container">
                    <div class="elementor-element elementor-element-0844577 e-grid e-con-full e-con e-child" data-id="0844577" data-element_type="container" data-e-type="container">
                        <div class="elementor-element elementor-element-e312230 elementor-align-justify elementor-widget elementor-widget-button" data-id="e312230" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-sm" href="%%CTA_URL%%" target="_blank" rel="noopener">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Daftar</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-44e0bbd elementor-align-justify elementor-widget elementor-widget-button" data-id="44e0bbd" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-sm" href="%%CTA_URL%%" target="_blank" rel="noopener">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-icon">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-radiation" viewbox="0 0 496 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M328.2 255.8h151.6c9.1 0 16.8-7.7 16.2-16.8-5.1-75.8-44.4-142.2-102.5-184.2-7.4-5.3-17.9-2.9-22.7 4.8L290.4 188c22.6 14.3 37.8 39.2 37.8 67.8zm-37.8 67.7c-12.3 7.7-26.8 12.4-42.4 12.4-15.6 0-30-4.7-42.4-12.4L125.2 452c-4.8 7.7-2.4 18.1 5.6 22.4C165.7 493.2 205.6 504 248 504s82.3-10.8 117.2-29.6c8-4.3 10.4-14.8 5.6-22.4l-80.4-128.5zM248 303.8c26.5 0 48-21.5 48-48s-21.5-48-48-48-48 21.5-48 48 21.5 48 48 48zm-231.8-48h151.6c0-28.6 15.2-53.5 37.8-67.7L125.2 59.7c-4.8-7.7-15.3-10.2-22.7-4.8C44.4 96.9 5.1 163.3 0 239.1c-.6 9 7.1 16.7 16.2 16.7z"/>
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-1ecd0bd elementor-align-justify elementor-widget elementor-widget-button" data-id="1ecd0bd" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-sm" href="%%CTA_URL%%" target="_blank" rel="noopener">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Login</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-ee34918 e-con-full e-flex e-con e-child" data-id="ee34918" data-element_type="container" data-e-type="container">
                    <div class="elementor-element elementor-element-3ffe15f elementor-widget elementor-widget-image" data-id="3ffe15f" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <amp-img width="1024" height="1024" src="%%BANNER_SRC%%" class="attachment-large size-large wp-image-1444 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" disable-inline-width="" data-hero i-amphtml-ssr i-amphtml-layout="intrinsic">
                                <i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer">
                                    <img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwMjQiIHdpZHRoPSIxMDI0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIvPg==">
                                </i-amphtml-sizer>
                                <img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" fetchpriority="high" alt="" src="%%BANNER_SRC%%">
                            </amp-img>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-f2001a3 e-con-full e-flex e-con e-child" data-id="f2001a3" data-element_type="container" data-e-type="container">
                    <div class="elementor-element elementor-element-a9260bc elementor-widget elementor-widget-image" data-id="a9260bc" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <amp-anim width="1920" height="154" src="/images/servisweb.gif" class="attachment-full size-full wp-image-1977 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic">
                                <i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer">
                                    <img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjE1NCIgd2lkdGg9IjE5MjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+">
                                </i-amphtml-sizer>
                                <noscript>
                                    <img decoding="async" width="1920" height="154" src="/images/servisweb.gif" alt="">
                                </noscript>
                            </amp-anim>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-3d9f9a1 elementor-widget elementor-widget-heading" data-id="3d9f9a1" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-default">RAFI777 ? Akurasi Permainan Slot Gacor Pemberi Pundi Cuan Berlimpah</h1>
                    </div>
                </div>
                <div class="elementor-element elementor-element-3279937 e-con-full e-flex e-con e-child" data-id="3279937" data-element_type="container" data-e-type="container">
                    <div class="elementor-element elementor-element-1120b6f elementor-widget elementor-widget-text-editor" data-id="1120b6f" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>
                                <a href="%%SITE_URL%%/">
                                    <strong>RAFI777</strong>
                                </a>
                                sebuah permainan taruhan yang mudah sekali para member menangkan dengan mudah tanpa ada zonk dan akses gampang kapan saja.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-b86bf98 e-con-full e-flex e-con e-child" data-id="b86bf98" data-element_type="container" data-e-type="container">
                    <div class="elementor-element elementor-element-c288912 elementor-widget elementor-widget-text-editor" data-id="c288912" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>
                                � 2026 
                                <a href="%%SITE_URL%%/">
                                    <strong>RAFI777 </strong>
                                </a>
                                � ALL RIGTHS RESERVED
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mario-footer-bar">
        <div class="mario-footer-container">
            <a href="%%CTA_URL%%" class="mario-btn">
                <span class="btn-icon">🏠</span>
                <span class="btn-text">Home</span>
            </a>
            <a href="%%CTA_URL%%" class="mario-btn">
                <span class="btn-icon">⭐</span>
                <span class="btn-text">Promo</span>
            </a>
            <a href="%%CTA_URL%%" class="mario-btn">
                <span class="btn-icon">🎮</span>
                <span class="btn-text">Games</span>
            </a>
            <a href="%%CTA_URL%%" class="mario-btn mario-btn-highlight">
                <span class="btn-icon">💬</span>
                <span class="btn-text">Live Chat</span>
            </a>
        </div>
    </div>
    <amp-state id="astraAmpMenuExpanded" class="i-amphtml-layout-container" i-amphtml-layout="container">
        <script type="application/json">
            false</script>
    </amp-state>
</body>
</html>


HTMLPAGE;

foreach ($tokens as $tok => $val) {
    $html = str_replace($tok, $val, $html);
}
echo $html;
