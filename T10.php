<?php
// Template T10 — auto-generated 2026-09-09 (watcher master Template_Baru)
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
<html lang="id" amp="" data-amp-auto-lightbox-disable transformed="self;v=1" i-amphtml-layout="" i-amphtml-no-boilerplate="" i-amphtml-binding>
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,viewport-fit=cover"><link rel="preconnect" href="https://cdn.ampproject.org"><style amp-runtime="" i-amphtml-version="012504091801000">html{overflow-x:hidden!important}html.i-amphtml-fie{height:100%!important;width:100%!important}html:not([amp4ads]),html:not([amp4ads]) body{height:auto!important}html:not([amp4ads]) body{margin:0!important}body{-webkit-text-size-adjust:100%;-moz-text-size-adjust:100%;-ms-text-size-adjust:100%;text-size-adjust:100%}html.i-amphtml-singledoc.i-amphtml-embedded{-ms-touch-action:pan-y pinch-zoom;touch-action:pan-y pinch-zoom}html.i-amphtml-fie>body,html.i-amphtml-singledoc>body{overflow:visible!important}html.i-amphtml-fie:not(.i-amphtml-inabox)>body,html.i-amphtml-singledoc:not(.i-amphtml-inabox)>body{position:relative!important}html.i-amphtml-ios-embed-legacy>body{overflow-x:hidden!important;overflow-y:auto!important;position:absolute!important}html.i-amphtml-ios-embed{overflow-y:auto!important;position:static}#i-amphtml-wrapper{overflow-x:hidden!important;overflow-y:auto!important;position:absolute!important;top:0!important;left:0!important;right:0!important;bottom:0!important;margin:0!important;display:block!important}html.i-amphtml-ios-embed.i-amphtml-ios-overscroll,html.i-amphtml-ios-embed.i-amphtml-ios-overscroll>#i-amphtml-wrapper{-webkit-overflow-scrolling:touch!important}#i-amphtml-wrapper>body{position:relative!important;border-top:1px solid transparent!important}#i-amphtml-wrapper+body{visibility:visible}#i-amphtml-wrapper+body .i-amphtml-lightbox-element,#i-amphtml-wrapper+body[i-amphtml-lightbox]{visibility:hidden}#i-amphtml-wrapper+body[i-amphtml-lightbox] .i-amphtml-lightbox-element{visibility:visible}#i-amphtml-wrapper.i-amphtml-scroll-disabled,.i-amphtml-scroll-disabled{overflow-x:hidden!important;overflow-y:hidden!important}amp-instagram{padding:54px 0px 0px!important;background-color:#fff}amp-iframe iframe{box-sizing:border-box!important}[amp-access][amp-access-hide]{display:none}[subscriptions-dialog],body:not(.i-amphtml-subs-ready) [subscriptions-action],body:not(.i-amphtml-subs-ready) [subscriptions-section]{display:none!important}amp-experiment,amp-live-list>[update]{display:none}amp-list[resizable-children]>.i-amphtml-loading-container.amp-hidden{display:none!important}amp-list [fetch-error],amp-list[load-more] [load-more-button],amp-list[load-more] [load-more-end],amp-list[load-more] [load-more-failed],amp-list[load-more] [load-more-loading]{display:none}amp-list[diffable] div[role=list]{display:block}amp-story-page,amp-story[standalone]{min-height:1px!important;display:block!important;height:100%!important;margin:0!important;padding:0!important;overflow:hidden!important;width:100%!important}amp-story[standalone]{background-color:#000!important;position:relative!important}amp-story-page{background-color:#757575}amp-story .amp-active>div,amp-story .i-amphtml-loader-background{display:none!important}amp-story-page:not(:first-of-type):not([distance]):not([active]){transform:translateY(1000vh)!important}amp-autocomplete{position:relative!important;display:inline-block!important}amp-autocomplete>input,amp-autocomplete>textarea{padding:0.5rem;border:1px solid rgba(0,0,0,.33)}.i-amphtml-autocomplete-results,amp-autocomplete>input,amp-autocomplete>textarea{font-size:1rem;line-height:1.5rem}[amp-fx^=fly-in]{visibility:hidden}amp-script[nodom],amp-script[sandboxed]{position:fixed!important;top:0!important;width:1px!important;height:1px!important;overflow:hidden!important;visibility:hidden}
/*# sourceURL=/css/ampdoc.css*/[hidden]{display:none!important}.i-amphtml-element{display:inline-block}.i-amphtml-blurry-placeholder{transition:opacity 0.3s cubic-bezier(0.0,0.0,0.2,1)!important;pointer-events:none}[layout=nodisplay]:not(.i-amphtml-element){display:none!important}.i-amphtml-layout-fixed,[layout=fixed][width][height]:not(.i-amphtml-layout-fixed){display:inline-block;position:relative}.i-amphtml-layout-responsive,[layout=responsive][width][height]:not(.i-amphtml-layout-responsive),[width][height][heights]:not([layout]):not(.i-amphtml-layout-responsive),[width][height][sizes]:not(img):not([layout]):not(.i-amphtml-layout-responsive){display:block;position:relative}.i-amphtml-layout-intrinsic,[layout=intrinsic][width][height]:not(.i-amphtml-layout-intrinsic){display:inline-block;position:relative;max-width:100%}.i-amphtml-layout-intrinsic .i-amphtml-sizer{max-width:100%}.i-amphtml-intrinsic-sizer{max-width:100%;display:block!important}.i-amphtml-layout-container,.i-amphtml-layout-fixed-height,[layout=container],[layout=fixed-height][height]:not(.i-amphtml-layout-fixed-height){display:block;position:relative}.i-amphtml-layout-fill,.i-amphtml-layout-fill.i-amphtml-notbuilt,[layout=fill]:not(.i-amphtml-layout-fill),body noscript>*{display:block;overflow:hidden!important;position:absolute;top:0;left:0;bottom:0;right:0}body noscript>*{position:absolute!important;width:100%;height:100%;z-index:2}body noscript{display:inline!important}.i-amphtml-layout-flex-item,[layout=flex-item]:not(.i-amphtml-layout-flex-item){display:block;position:relative;-ms-flex:1 1 auto;flex:1 1 auto}.i-amphtml-layout-fluid{position:relative}.i-amphtml-layout-size-defined{overflow:hidden!important}.i-amphtml-layout-awaiting-size{position:absolute!important;top:auto!important;bottom:auto!important}i-amphtml-sizer{display:block!important}@supports (aspect-ratio:1/1){i-amphtml-sizer.i-amphtml-disable-ar{display:none!important}}.i-amphtml-blurry-placeholder,.i-amphtml-fill-content{display:block;height:0;max-height:100%;max-width:100%;min-height:100%;min-width:100%;width:0;margin:auto}.i-amphtml-layout-size-defined .i-amphtml-fill-content{position:absolute;top:0;left:0;bottom:0;right:0}.i-amphtml-replaced-content,.i-amphtml-screen-reader{padding:0!important;border:none!important}.i-amphtml-screen-reader{position:fixed!important;top:0px!important;left:0px!important;width:4px!important;height:4px!important;opacity:0!important;overflow:hidden!important;margin:0!important;display:block!important;visibility:visible!important}.i-amphtml-screen-reader~.i-amphtml-screen-reader{left:8px!important}.i-amphtml-screen-reader~.i-amphtml-screen-reader~.i-amphtml-screen-reader{left:12px!important}.i-amphtml-screen-reader~.i-amphtml-screen-reader~.i-amphtml-screen-reader~.i-amphtml-screen-reader{left:16px!important}.i-amphtml-unresolved{position:relative;overflow:hidden!important}.i-amphtml-select-disabled{-webkit-user-select:none!important;-ms-user-select:none!important;user-select:none!important}.i-amphtml-notbuilt,[layout]:not(.i-amphtml-element),[width][height][heights]:not([layout]):not(.i-amphtml-element),[width][height][sizes]:not(img):not([layout]):not(.i-amphtml-element){position:relative;overflow:hidden!important;color:transparent!important}.i-amphtml-notbuilt:not(.i-amphtml-layout-container)>*,[layout]:not([layout=container]):not(.i-amphtml-element)>*,[width][height][heights]:not([layout]):not(.i-amphtml-element)>*,[width][height][sizes]:not([layout]):not(.i-amphtml-element)>*{display:none}amp-img:not(.i-amphtml-element)[i-amphtml-ssr]>img.i-amphtml-fill-content{display:block}.i-amphtml-notbuilt:not(.i-amphtml-layout-container),[layout]:not([layout=container]):not(.i-amphtml-element),[width][height][heights]:not([layout]):not(.i-amphtml-element),[width][height][sizes]:not(img):not([layout]):not(.i-amphtml-element){color:transparent!important;line-height:0!important}.i-amphtml-ghost{visibility:hidden!important}.i-amphtml-element>[placeholder],[layout]:not(.i-amphtml-element)>[placeholder],[width][height][heights]:not([layout]):not(.i-amphtml-element)>[placeholder],[width][height][sizes]:not([layout]):not(.i-amphtml-element)>[placeholder]{display:block;line-height:normal}.i-amphtml-element>[placeholder].amp-hidden,.i-amphtml-element>[placeholder].hidden{visibility:hidden}.i-amphtml-element:not(.amp-notsupported)>[fallback],.i-amphtml-layout-container>[placeholder].amp-hidden,.i-amphtml-layout-container>[placeholder].hidden{display:none}.i-amphtml-layout-size-defined>[fallback],.i-amphtml-layout-size-defined>[placeholder]{position:absolute!important;top:0!important;left:0!important;right:0!important;bottom:0!important;z-index:1}amp-img[i-amphtml-ssr]:not(.i-amphtml-element)>[placeholder]{z-index:auto}.i-amphtml-notbuilt>[placeholder]{display:block!important}.i-amphtml-hidden-by-media-query{display:none!important}.i-amphtml-element-error{background:red!important;color:#fff!important;position:relative!important}.i-amphtml-element-error:before{content:attr(error-message)}i-amp-scroll-container,i-amphtml-scroll-container{position:absolute;top:0;left:0;right:0;bottom:0;display:block}i-amp-scroll-container.amp-active,i-amphtml-scroll-container.amp-active{overflow:auto;-webkit-overflow-scrolling:touch}.i-amphtml-loading-container{display:block!important;pointer-events:none;z-index:1}.i-amphtml-notbuilt>.i-amphtml-loading-container{display:block!important}.i-amphtml-loading-container.amp-hidden{visibility:hidden}.i-amphtml-element>[overflow]{cursor:pointer;position:relative;z-index:2;visibility:hidden;display:initial;line-height:normal}.i-amphtml-layout-size-defined>[overflow]{position:absolute}.i-amphtml-element>[overflow].amp-visible{visibility:visible}template{display:none!important}.amp-border-box,.amp-border-box *,.amp-border-box :after,.amp-border-box :before{box-sizing:border-box}amp-pixel{display:none!important}amp-analytics,amp-auto-ads,amp-story-auto-ads{position:fixed!important;top:0!important;width:1px!important;height:1px!important;overflow:hidden!important;visibility:hidden}amp-story{visibility:hidden!important}html.i-amphtml-fie>amp-analytics{position:initial!important}[visible-when-invalid]:not(.visible),form [submit-error],form [submit-success],form [submitting]{display:none}amp-accordion{display:block!important}@media (min-width:1px){:where(amp-accordion>section)>:first-child{margin:0;background-color:#efefef;padding-right:20px;border:1px solid #dfdfdf}:where(amp-accordion>section)>:last-child{margin:0}}amp-accordion>section{float:none!important}amp-accordion>section>*{float:none!important;display:block!important;overflow:hidden!important;position:relative!important}amp-accordion,amp-accordion>section{margin:0}amp-accordion:not(.i-amphtml-built)>section>:last-child{display:none!important}amp-accordion:not(.i-amphtml-built)>section[expanded]>:last-child{display:block!important}
/*# sourceURL=/css/ampshared.css*/</style><meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"><meta name="description" content="%%DESCRIPTION%%"><meta property="og:locale" content="id_ID"><meta property="og:type" content="website"><meta property="og:title" content="%%TITLE%%"><meta property="og:description" content="%%DESCRIPTION%%"><meta property="og:url" content="https://sbobet777.blog/"><meta property="og:site_name" content="%%SITE%%"><meta property="article:modified_time" content="2024-11-05T05:14:59+00:00"><meta property="og:image" content="%%CTA_URL%%"><meta property="og:image:width" content="512"><meta property="og:image:height" content="512"><meta property="og:image:type" content="image/png"><meta name="twitter:card" content="summary_large_image"><meta name="google-site-verification" content="%%GSC_META%%"><meta name="generator" content="WordPress 6.8.1"><meta name="google-site-verification" content="%%GSC_META%%"><meta property="og:image" content="https://iili.io/JU9RQja.png"><meta property="twitter:image" content="https://iili.io/JU9RQja.png"><meta name="generator" content="Elementor 3.29.0; features: additional_custom_breakpoints, e_local_google_fonts; settings: css_print_method-internal, google_font-enabled, font_display-auto"><meta name="generator" content="AMP Plugin v2.5.5; mode=standard"><meta name="msapplication-TileImage" content="%%CTA_URL%%"><link rel="preload" href="https://sbobet777.blog/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.41.0#iefix" as="font" crossorigin=""><script async="" src="https://cdn.ampproject.org/v0.mjs" type="module" crossorigin="anonymous"></script><script async nomodule src="https://cdn.ampproject.org/v0.js" crossorigin="anonymous"></script><script src="https://cdn.ampproject.org/v0/amp-anim-0.1.mjs" async="" custom-element="amp-anim" type="module" crossorigin="anonymous"></script><script async nomodule src="https://cdn.ampproject.org/v0/amp-anim-0.1.js" crossorigin="anonymous" custom-element="amp-anim"></script><script src="https://cdn.ampproject.org/v0/amp-bind-0.1.mjs" async="" custom-element="amp-bind" type="module" crossorigin="anonymous"></script><script async nomodule src="https://cdn.ampproject.org/v0/amp-bind-0.1.js" crossorigin="anonymous" custom-element="amp-bind"></script><link rel="icon" href="%%CTA_URL%%" sizes="32x32"><link rel="icon" href="%%CTA_URL%%" sizes="192x192"><style amp-custom="">/* FIX WARNA ARTIKEL SEO */
.elementor-194 .elementor-element-9b02375 .elementor-element-3af9289c .elementor-widget-container,
.elementor-194 .elementor-element-9b02375 .elementor-element-3af9289c p,
.elementor-194 .elementor-element-9b02375 .elementor-element-3af9289c span,
.elementor-194 .elementor-element-9b02375 .elementor-element-3af9289c a,
.elementor-194 .elementor-element-9b02375 .elementor-element-3af9289c strong {
    color: #ffffff;
}

.elementor-194 .elementor-element-9b02375 .elementor-element-2c94f385 .elementor-heading-title {
    color: #ffffff;
    width: 100%;
    max-width: 100%;
    white-space: normal;
    word-break: normal;
    overflow-wrap: normal;
}

@media (max-width: 767px) {
    .elementor-194 .elementor-element-9b02375 .elementor-element-2c94f385 {
        width: 100%;
    }
    .elementor-194 .elementor-element-9b02375 .elementor-element-2c94f385 .elementor-heading-title {
        font-size: 25px;
        line-height: 1.18;
    }
}
amp-img:is([sizes="auto" i], [sizes^="auto," i]),amp-anim:is([sizes="auto" i], [sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}amp-anim.amp-wp-enforced-sizes,amp-img.amp-wp-enforced-sizes{object-fit:contain}amp-anim img,amp-anim noscript,amp-img img,amp-img noscript{image-rendering:inherit;object-fit:inherit;object-position:inherit}body,html,p{border:0;font-size:100%;font-style:inherit;font-weight:inherit;margin:0;outline:0;padding:0;vertical-align:baseline}html{-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}a{background-color:transparent}a:active{outline:0}a,a:focus,a:hover,a:visited{text-decoration:none}amp-img,amp-anim{border:0}html{box-sizing:border-box}*,:after,:before{box-sizing:inherit}body{color:#808285;background:#fff;font-style:normal}amp-img,amp-anim{height:auto;max-width:100%}a{color:#4169e1}a:focus,a:hover{color:#191970}a:focus{outline:thin dotted}a:hover{outline:0}::selection{color:#fff;background:#0274be}body{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}body:not(.logged-in){position:relative}a,a:focus{text-decoration:none}a{transition:all .2s linear}amp-img,amp-anim{vertical-align:middle}p{margin-bottom:1.75em}body{line-height:1.8571428571429}body{background-color:#fff}body{overflow-x:hidden}:root{--ast-post-nav-space:0;--ast-container-default-xlg-padding:6.67em;--ast-container-default-lg-padding:5.67em;--ast-container-default-slg-padding:4.34em;--ast-container-default-md-padding:3.34em;--ast-container-default-sm-padding:6.67em;--ast-container-default-xs-padding:2.4em;--ast-container-default-xxs-padding:1.4em;--ast-code-block-background:#eee;--ast-comment-inputs-background:#fafafa;--ast-normal-container-width:1200px;--ast-narrow-container-width:750px;--ast-blog-title-font-weight:normal;--ast-blog-meta-weight:inherit;--ast-global-color-primary:var(--ast-global-color-5);--ast-global-color-secondary:var(--ast-global-color-4);--ast-global-color-alternate-background:var(--ast-global-color-7);--ast-global-color-subtle-background:var(--ast-global-color-6);--ast-bg-style-guide:#f8fafc;--ast-shadow-style-guide:0px 0px 4px 0 rgba(0,0,0,.34);--ast-global-dark-bg-style:#fff;--ast-global-dark-lfs:#fbfbfb;--ast-widget-bg-color:#fafafa;--ast-wc-container-head-bg-color:#fbfbfb;--ast-title-layout-bg:#eee;--ast-search-border-color:#e7e7e7;--ast-lifter-hover-bg:#e6e6e6;--ast-gallery-block-color:#000;--srfm-color-input-label:var(--ast-global-color-2)}html{font-size:93.75%}a{color:var(--ast-global-color-0)}a:hover,a:focus{color:var(--ast-global-color-1)}body{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Helvetica Neue,sans-serif;font-weight:inherit;font-size:15px;font-size:1rem;line-height:var(--ast-body-line-height,1.65em)}::selection{background-color:var(--ast-global-color-0);color:#fff}body{color:var(--ast-global-color-3)}.ast-single-post .elementor-widget-button .elementor-button{text-decoration:none}a:focus-visible{outline-style:dotted;outline-color:inherit;outline-width:thin}@media (max-width:921px){html{font-size:85.5%}}@media (max-width:544px){html{font-size:85.5%}}:root{--wp--custom--ast-container-width:1200px;--wp--custom--ast-content-width-size:910px;--wp--custom--ast-wide-width-size:1200px}:root{--ast-global-color-0:#087a3e;--ast-global-color-1:#1b2a22;--ast-global-color-2:#1b2a22;--ast-global-color-3:#35483e;--ast-global-color-4:#f5f5f5;--ast-global-color-5:#fff;--ast-global-color-6:#e5e5e5;--ast-global-color-7:#183326;--ast-global-color-8:#000}:root{--ast-border-color:#ddd}.elementor-widget-heading .elementor-heading-title{margin:0}.ast-page-builder-template{background-color:var(--ast-global-color-5)}@media (max-width:921px){.ast-page-builder-template{background-color:var(--ast-global-color-5)}}@media (max-width:544px){.ast-page-builder-template{background-color:var(--ast-global-color-5)}}:root{--e-global-color-astglobalcolor0:#087a3e;--e-global-color-astglobalcolor1:#1b2a22;--e-global-color-astglobalcolor2:#1b2a22;--e-global-color-astglobalcolor3:#35483e;--e-global-color-astglobalcolor4:#f5f5f5;--e-global-color-astglobalcolor5:#fff;--e-global-color-astglobalcolor6:#e5e5e5;--e-global-color-astglobalcolor7:#183326;--e-global-color-astglobalcolor8:#000}:root{--wp--preset--aspect-ratio--square:1;--wp--preset--aspect-ratio--4-3:4/3;--wp--preset--aspect-ratio--3-4:3/4;--wp--preset--aspect-ratio--3-2:3/2;--wp--preset--aspect-ratio--2-3:2/3;--wp--preset--aspect-ratio--16-9:16/9;--wp--preset--aspect-ratio--9-16:9/16;--wp--preset--color--black:#000;--wp--preset--color--cyan-bluish-gray:#abb8c3;--wp--preset--color--white:#fff;--wp--preset--color--pale-pink:#f78da7;--wp--preset--color--vivid-red:#cf2e2e;--wp--preset--color--luminous-vivid-orange:#ff6900;--wp--preset--color--luminous-vivid-amber:#fcb900;--wp--preset--color--light-green-cyan:#7bdcb5;--wp--preset--color--vivid-green-cyan:#00d084;--wp--preset--color--pale-cyan-blue:#8ed1fc;--wp--preset--color--vivid-cyan-blue:#0693e3;--wp--preset--color--vivid-purple:#9b51e0;--wp--preset--color--ast-global-color-0:var(--ast-global-color-0);--wp--preset--color--ast-global-color-1:var(--ast-global-color-1);--wp--preset--color--ast-global-color-2:var(--ast-global-color-2);--wp--preset--color--ast-global-color-3:var(--ast-global-color-3);--wp--preset--color--ast-global-color-4:var(--ast-global-color-4);--wp--preset--color--ast-global-color-5:var(--ast-global-color-5);--wp--preset--color--ast-global-color-6:var(--ast-global-color-6);--wp--preset--color--ast-global-color-7:var(--ast-global-color-7);--wp--preset--color--ast-global-color-8:var(--ast-global-color-8);--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple:linear-gradient(135deg,rgba(6,147,227,1) 0%,#9b51e0 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan:linear-gradient(135deg,#7adcb4 0%,#00d082 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange:linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red:linear-gradient(135deg,rgba(255,105,0,1) 0%,#cf2e2e 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray:linear-gradient(135deg,#eee 0%,#a9b8c3 100%);--wp--preset--gradient--cool-to-warm-spectrum:linear-gradient(135deg,#4aeadc 0%,#9778d1 20%,#cf2aba 40%,#ee2c82 60%,#fb6962 80%,#fef84c 100%);--wp--preset--gradient--blush-light-purple:linear-gradient(135deg,#ffceec 0%,#9896f0 100%);--wp--preset--gradient--blush-bordeaux:linear-gradient(135deg,#fecda5 0%,#fe2d2d 50%,#6b003e 100%);--wp--preset--gradient--luminous-dusk:linear-gradient(135deg,#ffcb70 0%,#c751c0 50%,#4158d0 100%);--wp--preset--gradient--pale-ocean:linear-gradient(135deg,#fff5cb 0%,#b6e3d4 50%,#33a7b5 100%);--wp--preset--gradient--electric-grass:linear-gradient(135deg,#caf880 0%,#71ce7e 100%);--wp--preset--gradient--midnight:linear-gradient(135deg,#020381 0%,#2874fc 100%);--wp--preset--font-size--small:13px;--wp--preset--font-size--medium:20px;--wp--preset--font-size--large:36px;--wp--preset--font-size--x-large:42px;--wp--preset--spacing--20:.44rem;--wp--preset--spacing--30:.67rem;--wp--preset--spacing--40:1rem;--wp--preset--spacing--50:1.5rem;--wp--preset--spacing--60:2.25rem;--wp--preset--spacing--70:3.38rem;--wp--preset--spacing--80:5.06rem;--wp--preset--shadow--natural:6px 6px 9px rgba(0,0,0,.2);--wp--preset--shadow--deep:12px 12px 50px rgba(0,0,0,.4);--wp--preset--shadow--sharp:6px 6px 0px rgba(0,0,0,.2);--wp--preset--shadow--outlined:6px 6px 0px -3px rgba(255,255,255,1),6px 6px rgba(0,0,0,1);--wp--preset--shadow--crisp:6px 6px 0px rgba(0,0,0,1)}:root{--wp--style--global--content-size:var(--wp--custom--ast-content-width-size);--wp--style--global--wide-size:var(--wp--custom--ast-wide-width-size)}:where(body){margin:0}:where(.wp-site-blocks) > *{margin-block-start:24px;margin-block-end:0}:where(.wp-site-blocks) > :first-child{margin-block-start:0}:where(.wp-site-blocks) > :last-child{margin-block-end:0}:root{--wp--style--block-gap:24px}:root :where(.is-layout-flow) > :first-child{margin-block-start:0}:root :where(.is-layout-flow) > :last-child{margin-block-end:0}:root :where(.is-layout-flow) > *{margin-block-start:24px;margin-block-end:0}:root :where(.is-layout-constrained) > :first-child{margin-block-start:0}:root :where(.is-layout-constrained) > :last-child{margin-block-end:0}:root :where(.is-layout-constrained) > *{margin-block-start:24px;margin-block-end:0}:root :where(.is-layout-flex){gap:24px}:root :where(.is-layout-grid){gap:24px}body{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}a:where(:not(.wp-element-button)){text-decoration:none}:root :where(.wp-block-pullquote){font-size:1.5em;line-height:1.6}@font-face{font-family:eicons;src:url("https://sbobet777.blog/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.41.0");src:url("https://sbobet777.blog/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.41.0#iefix") format("embedded-opentype"),url("https://sbobet777.blog/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.41.0") format("woff2"),url("https://sbobet777.blog/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.41.0") format("woff"),url("https://sbobet777.blog/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.41.0") format("truetype"),url("https://sbobet777.blog/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.41.0#eicon") format("svg");font-weight:400;font-style:normal}[class*=" eicon-"],[class^=eicon]{display:inline-block;font-family:eicons;font-size:inherit;font-weight:400;font-style:normal;font-variant:normal;line-height:1;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}@keyframes a{0%{transform:rotate(0deg)}to{transform:rotate(359deg)}}.elementor *,.elementor :after,.elementor :before{box-sizing:border-box}.elementor a{box-shadow:none;text-decoration:none}.elementor amp-img,.elementor amp-anim{border:none;border-radius:0;box-shadow:none;height:auto;max-width:100%}.elementor .elementor-background-overlay{inset:0;position:absolute}.elementor-element{--flex-direction:initial;--flex-wrap:initial;--justify-content:initial;--align-items:initial;--align-content:initial;--gap:initial;--flex-basis:initial;--flex-grow:initial;--flex-shrink:initial;--order:initial;--align-self:initial;align-self:var(--align-self);flex-basis:var(--flex-basis);flex-grow:var(--flex-grow);flex-shrink:var(--flex-shrink);order:var(--order)}.elementor-element:where(.e-con-full,.elementor-widget){align-content:var(--align-content);align-items:var(--align-items);flex-direction:var(--flex-direction);flex-wrap:var(--flex-wrap);gap:var(--row-gap) var(--column-gap);justify-content:var(--justify-content)}.elementor-align-center{text-align:center}.elementor-align-center .elementor-button{width:auto}.amp-wp-7d27179:not(#_#_#_#_#_){text-align:justify}.elementor-align-justify .elementor-button{width:100%}:root{--page-title-display:block}@keyframes eicon-spin{0%{transform:rotate(0deg)}to{transform:rotate(359deg)}}.elementor-section{position:relative}.elementor-section .elementor-container{display:flex;margin-left:auto;margin-right:auto;position:relative}@media (max-width:1024px){.elementor-section .elementor-container{flex-wrap:wrap}}.elementor-section.elementor-section-boxed>.elementor-container{max-width:1140px}.elementor-widget-wrap{align-content:flex-start;flex-wrap:wrap;position:relative;width:100%}.elementor:not(.elementor-bc-flex-widget) .elementor-widget-wrap{display:flex}.elementor-widget-wrap>.elementor-element{width:100%}.elementor-widget{position:relative}.elementor-widget:not(:last-child){margin-bottom:var(--kit-widget-spacing,20px)}.elementor-column{display:flex;min-height:1px;position:relative}.elementor-column-gap-default>.elementor-column>.elementor-element-populated{padding:10px}@media (min-width:768px){.elementor-column.elementor-col-10{width:10%}.elementor-column.elementor-col-16{width:16.666%}.elementor-column.elementor-col-20{width:20%}.elementor-column.elementor-col-25{width:25%}.elementor-column.elementor-col-33{width:33.333%}.elementor-column.elementor-col-50{width:50%}.elementor-column.elementor-col-100{width:100%}}@media (max-width:767px){.elementor-column{width:100%}}@media (prefers-reduced-motion:no-preference){html{scroll-behavior:smooth}}.elementor-element:not(.e-div-block-base) .elementor-widget-container,.elementor-element:not(.e-div-block-base):not(:has(.elementor-widget-container)){transition:background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s)}.elementor-heading-title{line-height:1;margin:0;padding:0}.elementor-button{background-color:#69727d;border-radius:3px;color:#fff;display:inline-block;font-size:15px;line-height:1;padding:12px 24px;fill:#fff;text-align:center;transition:all .3s}.elementor-button:focus,.elementor-button:hover,.elementor-button:visited{color:#fff}.elementor-button-content-wrapper{display:flex;flex-direction:row;gap:5px;justify-content:center}.elementor-button-text{display:inline-block}.elementor-button span{text-decoration:inherit}@media (max-width:767px){.elementor .elementor-hidden-mobile{display:none}}@media (min-width:768px) and (max-width:1024px){.elementor .elementor-hidden-tablet{display:none}}@media (min-width:1025px) and (max-width:99999px){.elementor .elementor-hidden-desktop{display:none}}.elementor-kit-26{--e-global-color-primary:#000000;--e-global-color-secondary:#fff;--e-global-color-text:#000000;--e-global-color-accent:#fff;--e-global-color-27074042:#fff;--e-global-color-462442ff:#fff;--e-global-color-7136a21d:#fff;--e-global-color-5b60430a:#fff;--e-global-typography-primary-font-family:"Roboto";--e-global-typography-primary-font-weight:600;--e-global-typography-secondary-font-family:"Roboto Slab";--e-global-typography-secondary-font-weight:400;--e-global-typography-text-font-family:"Roboto";--e-global-typography-text-font-weight:400;--e-global-typography-accent-font-family:"Roboto";--e-global-typography-accent-font-weight:500;background-color:#03331a;color:var(--e-global-color-primary)}.elementor-kit-26 a{color:var(--e-global-color-primary)}.elementor-section.elementor-section-boxed > .elementor-container{max-width:1140px}@media (max-width:1024px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:1024px}}@media (max-width:767px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:767px}}.elementor-194 .elementor-element.elementor-element-279e1abb:not(.elementor-motion-effects-element-type-background){background-color:#062b18}.elementor-194 .elementor-element.elementor-element-279e1abb > .elementor-background-overlay{background-color:transparent;background-image:linear-gradient(240deg,rgba(255,255,255,0) 79%,#0b6b3a 0%);opacity:1;transition:background .3s,border-radius .3s,opacity .3s}.elementor-194 .elementor-element.elementor-element-279e1abb{transition:background .3s,border .3s,border-radius .3s,box-shadow .3s;padding:0% 8% 0% 6%}.elementor-194 .elementor-element.elementor-element-6a9c8e92 > .elementor-element-populated{padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-6470a04d > .elementor-element-populated{transition:background .3s,border .3s,border-radius .3s,box-shadow .3s;padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-6470a04d > .elementor-element-populated > .elementor-background-overlay{transition:background .3s,border-radius .3s,opacity .3s}.elementor-194 .elementor-element.elementor-element-4ad4d945{text-align:left}.elementor-194 .elementor-element.elementor-element-205f7ee9.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-7ff72b5{text-align:right}.elementor-194 .elementor-element.elementor-element-7ff72b5 amp-img,.elementor-194 .elementor-element.elementor-element-7ff72b5 amp-anim{max-width:2.5%}.elementor-194 .elementor-element.elementor-element-27a7a72a.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-widget-button .elementor-button{background-color:var(--e-global-color-accent);font-family:var(--e-global-typography-accent-font-family),Sans-serif;font-weight:var(--e-global-typography-accent-font-weight)}.elementor-194 .elementor-element.elementor-element-39dccca .elementor-button{background-color:transparent;font-family:"Roboto",Sans-serif;font-weight:bold;fill:#000;color:#000;background-image:linear-gradient(180deg,#c0c0c0 0%,#fff 100%);border-style:solid;border-width:1px 1px 1px 1px;border-color:#fff;border-radius:3px 3px 3px 3px;padding:8px 0px 8px 0px}.elementor-194 .elementor-element.elementor-element-39dccca .elementor-button:hover,.elementor-194 .elementor-element.elementor-element-39dccca .elementor-button:focus{background-color:transparent;background-image:linear-gradient(180deg,#fff 0%,#c0c0c0 100%)}.elementor-194 .elementor-element.elementor-element-502e5678.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-7a5b6d .elementor-button{background-color:transparent;font-family:"Roboto",Sans-serif;font-weight:bold;fill:#fff;color:#fff;background-image:linear-gradient(180deg,#087a3e 0%,#12a150 100%);border-style:solid;border-width:1px 1px 1px 1px;border-color:#12a150;border-radius:3px 3px 3px 3px;padding:8px 0px 8px 0px}.elementor-194 .elementor-element.elementor-element-7a5b6d .elementor-button:hover,.elementor-194 .elementor-element.elementor-element-7a5b6d .elementor-button:focus{background-color:transparent;background-image:linear-gradient(180deg,#12a150 0%,#087a3e 100%)}.elementor-194 .elementor-element.elementor-element-11af0b25:not(.elementor-motion-effects-element-type-background){background-color:#0b6b3a}.elementor-194 .elementor-element.elementor-element-11af0b25{border-style:solid;border-width:0px 0px 1px 0px;border-color:#062b18;transition:background .3s,border .3s,border-radius .3s,box-shadow .3s;padding:0% 6% 0% 6%}.elementor-194 .elementor-element.elementor-element-11af0b25 > .elementor-background-overlay{transition:background .3s,border-radius .3s,opacity .3s}.elementor-194 .elementor-element.elementor-element-13b00fd.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-13b00fd > .elementor-element-populated{padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-58859f05:hover > .elementor-element-populated{background-color:#0f8a4d}.elementor-194 .elementor-element.elementor-element-58859f05.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-58859f05 > .elementor-element-populated{padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-25c1fdf3 amp-img,.elementor-194 .elementor-element.elementor-element-25c1fdf3 amp-anim{max-width:60%}.elementor-194 .elementor-element.elementor-element-4264feeb:hover > .elementor-element-populated{background-color:#0f8a4d}.elementor-194 .elementor-element.elementor-element-4264feeb.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-4264feeb > .elementor-element-populated{padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-56fb0607 .elementor-button{background-color:rgba(0,215,255,0);text-shadow:0px 2px 2px rgba(0,0,0,.5);padding:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-10d38225:hover > .elementor-element-populated{background-color:#0f8a4d}.elementor-194 .elementor-element.elementor-element-10d38225.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-10d38225 > .elementor-element-populated{transition:background .3s,border .3s,border-radius .3s,box-shadow .3s;padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-10d38225 > .elementor-element-populated > .elementor-background-overlay{transition:background .3s,border-radius .3s,opacity .3s}.elementor-194 .elementor-element.elementor-element-1e84914e .elementor-button{background-color:rgba(0,215,255,0);text-shadow:0px 2px 2px rgba(0,0,0,.5);padding:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-ab2a0b4:hover > .elementor-element-populated{background-color:#0f8a4d}.elementor-194 .elementor-element.elementor-element-ab2a0b4.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-ab2a0b4 > .elementor-element-populated{padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-12105177 .elementor-button{background-color:rgba(0,215,255,0);text-shadow:0px 2px 2px rgba(0,0,0,.5);padding:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-27db6e29:hover > .elementor-element-populated{background-color:#0f8a4d}.elementor-194 .elementor-element.elementor-element-27db6e29.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-27db6e29 > .elementor-element-populated{padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-12146351 .elementor-button{background-color:rgba(0,215,255,0);text-shadow:0px 2px 2px rgba(0,0,0,.5);padding:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-5318805d:hover > .elementor-element-populated{background-color:#0f8a4d}.elementor-194 .elementor-element.elementor-element-5318805d.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-5318805d > .elementor-element-populated{padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-11758bc4 .elementor-button{background-color:rgba(0,215,255,0);text-shadow:0px 2px 2px rgba(0,0,0,.5);padding:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-7452a261:hover > .elementor-element-populated{background-color:#0f8a4d}.elementor-194 .elementor-element.elementor-element-7452a261.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-7452a261 > .elementor-element-populated{padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-50852535 .elementor-button{background-color:rgba(0,215,255,0);text-shadow:0px 2px 2px rgba(0,0,0,.5);padding:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-15f6f5fa:hover > .elementor-element-populated{background-color:#0f8a4d}.elementor-194 .elementor-element.elementor-element-15f6f5fa.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-15f6f5fa > .elementor-element-populated{padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-d1108f4 .elementor-button{background-color:rgba(0,215,255,0);text-shadow:0px 2px 2px rgba(0,0,0,.5);padding:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-47b92a3b:hover > .elementor-element-populated{background-color:#0f8a4d}.elementor-194 .elementor-element.elementor-element-47b92a3b.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-47b92a3b > .elementor-element-populated{padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-7c6f213f .elementor-button{background-color:rgba(0,215,255,0);text-shadow:0px 2px 2px rgba(0,0,0,.5);padding:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-4ede17e5:hover > .elementor-element-populated{background-color:#0f8a4d}.elementor-194 .elementor-element.elementor-element-4ede17e5.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-4ede17e5 > .elementor-element-populated{padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-41139c80 .elementor-button{background-color:rgba(0,215,255,0);text-shadow:0px 2px 2px rgba(0,0,0,.5);padding:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-d3225a4 > .elementor-element-populated{padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-d346c9c > .elementor-element-populated{padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-dbcb90e:not(.elementor-motion-effects-element-type-background){background-color:#062b18}.elementor-194 .elementor-element.elementor-element-dbcb90e > .elementor-background-overlay{background-color:transparent;background-image:linear-gradient(240deg,rgba(255,255,255,0) 78%,#0b6b3a 0%);opacity:1;transition:background .3s,border-radius .3s,opacity .3s}.elementor-194 .elementor-element.elementor-element-dbcb90e > .elementor-container{max-width:1400px}.elementor-194 .elementor-element.elementor-element-dbcb90e{transition:background .3s,border .3s,border-radius .3s,box-shadow .3s;padding:0% 18% 0% 18%}.elementor-194 .elementor-element.elementor-element-487d23b8.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-487d23b8 > .elementor-element-populated{padding:5px 0px 5px 0px}.elementor-194 .elementor-element.elementor-element-6510842d amp-img,.elementor-194 .elementor-element.elementor-element-6510842d amp-anim{max-width:30%}.elementor-194 .elementor-element.elementor-element-7244fbe9.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-7244fbe9 > .elementor-element-populated{padding:0px 0px 0px 0px}.elementor-widget-ucaddon_marquee .ue_marquee{font-family:var(--e-global-typography-text-font-family),Sans-serif;font-weight:var(--e-global-typography-text-font-weight)}.elementor-194 .elementor-element.elementor-element-7110d6fa > .elementor-widget-container{margin:0% 0% 0% 3%}.elementor-194 .elementor-element.elementor-element-7110d6fa .ue_marquee,.elementor-194 .elementor-element.elementor-element-7110d6fa .ue_marquee a{color:#fff}.elementor-194 .elementor-element.elementor-element-7110d6fa .ue_marquee{padding:10px 0px 10px 0px;border-radius:0px}.elementor-194 .elementor-element.elementor-element-61784d82 > .elementor-container{max-width:1400px}.elementor-194 .elementor-element.elementor-element-61784d82{margin-top:10px;margin-bottom:10px}.elementor-194 .elementor-element.elementor-element-69795d62:not(.elementor-motion-effects-element-type-background){background-color:#062b18}.elementor-194 .elementor-element.elementor-element-69795d62 > .elementor-background-overlay{background-color:transparent;background-image:linear-gradient(240deg,rgba(255,255,255,0) 60%,#0b6b3a 0%);opacity:1;transition:background .3s,border-radius .3s,opacity .3s}.elementor-194 .elementor-element.elementor-element-69795d62,.elementor-194 .elementor-element.elementor-element-69795d62 > .elementor-background-overlay{border-radius:20px 20px 0px 0px}.elementor-194 .elementor-element.elementor-element-69795d62{transition:background .3s,border .3s,border-radius .3s,box-shadow .3s}.elementor-194 .elementor-element.elementor-element-2b2ee732.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-2b2ee732.elementor-column > .elementor-widget-wrap{justify-content:center}.elementor-194 .elementor-element.elementor-element-2b2ee732 > .elementor-element-populated{padding:10% 10% 10% 10%}.elementor-194 .elementor-element.elementor-element-25551bf5 amp-img,.elementor-194 .elementor-element.elementor-element-25551bf5 amp-anim{max-width:60%}.elementor-194 .elementor-element.elementor-element-4c5b5e4.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-widget-heading .elementor-heading-title{font-family:var(--e-global-typography-primary-font-family),Sans-serif;font-weight:var(--e-global-typography-primary-font-weight);color:var(--e-global-color-primary)}.elementor-194 .elementor-element.elementor-element-431fb57b .elementor-heading-title{font-family:"Roboto",Sans-serif;font-size:20px;font-weight:bold;text-shadow:0px 2px 2px rgba(0,0,0,.5);color:#fff}.elementor-194 .elementor-element.elementor-element-115f2270.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-310f0a07:not(.elementor-motion-effects-element-type-background){background-color:#0b6b3a}.elementor-194 .elementor-element.elementor-element-310f0a07,.elementor-194 .elementor-element.elementor-element-310f0a07 > .elementor-background-overlay{border-radius:0px 0px 20px 20px}.elementor-194 .elementor-element.elementor-element-310f0a07{transition:background .3s,border .3s,border-radius .3s,box-shadow .3s}.elementor-194 .elementor-element.elementor-element-310f0a07 > .elementor-background-overlay{transition:background .3s,border-radius .3s,opacity .3s}.elementor-194 .elementor-element.elementor-element-5d529653 amp-img,.elementor-194 .elementor-element.elementor-element-5d529653 amp-anim{border-radius:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-46f1ab08 amp-img,.elementor-194 .elementor-element.elementor-element-46f1ab08 amp-anim{border-radius:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-293d8d12 amp-img,.elementor-194 .elementor-element.elementor-element-293d8d12 amp-anim{border-radius:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-45e23c85 amp-img,.elementor-194 .elementor-element.elementor-element-45e23c85 amp-anim{border-radius:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-24409cd5 amp-img,.elementor-194 .elementor-element.elementor-element-24409cd5 amp-anim{border-radius:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-14631312 > .elementor-container{max-width:1400px}.elementor-194 .elementor-element.elementor-element-1f1792f0:not(.elementor-motion-effects-element-type-background){background-color:#062b18}.elementor-194 .elementor-element.elementor-element-1f1792f0 > .elementor-background-overlay{background-color:transparent;background-image:linear-gradient(240deg,rgba(255,255,255,0) 38%,#0b6b3a 0%);opacity:1;transition:background .3s,border-radius .3s,opacity .3s}.elementor-194 .elementor-element.elementor-element-1f1792f0,.elementor-194 .elementor-element.elementor-element-1f1792f0 > .elementor-background-overlay{border-radius:20px 20px 0px 0px}.elementor-194 .elementor-element.elementor-element-1f1792f0{transition:background .3s,border .3s,border-radius .3s,box-shadow .3s}.elementor-194 .elementor-element.elementor-element-3dd37518.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-3dd37518.elementor-column > .elementor-widget-wrap{justify-content:center}.elementor-194 .elementor-element.elementor-element-3dd37518 > .elementor-element-populated{padding:10% 10% 10% 10%}.elementor-194 .elementor-element.elementor-element-20f6861b amp-img,.elementor-194 .elementor-element.elementor-element-20f6861b amp-anim{max-width:60%}.elementor-194 .elementor-element.elementor-element-1d90db49.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-5305cf25 .elementor-heading-title{font-family:"Roboto",Sans-serif;font-size:20px;font-weight:bold;text-shadow:0px 2px 2px rgba(0,0,0,.5);color:#fff}.elementor-194 .elementor-element.elementor-element-3fdfd12a:not(.elementor-motion-effects-element-type-background){background-color:#0b6b3a}.elementor-194 .elementor-element.elementor-element-3fdfd12a,.elementor-194 .elementor-element.elementor-element-3fdfd12a > .elementor-background-overlay{border-radius:0px 0px 20px 20px}.elementor-194 .elementor-element.elementor-element-3fdfd12a{transition:background .3s,border .3s,border-radius .3s,box-shadow .3s}.elementor-194 .elementor-element.elementor-element-3fdfd12a > .elementor-background-overlay{transition:background .3s,border-radius .3s,opacity .3s}.elementor-194 .elementor-element.elementor-element-5dc7384f amp-img,.elementor-194 .elementor-element.elementor-element-5dc7384f amp-anim{border-radius:20px 20px 20px 20px}.elementor-194 .elementor-element.elementor-element-65b919c1:not(.elementor-motion-effects-element-type-background){background-color:#062b18}.elementor-194 .elementor-element.elementor-element-65b919c1 > .elementor-background-overlay{background-color:transparent;background-image:linear-gradient(240deg,rgba(255,255,255,0) 60%,#0b6b3a 0%);opacity:1;transition:background .3s,border-radius .3s,opacity .3s}.elementor-194 .elementor-element.elementor-element-65b919c1,.elementor-194 .elementor-element.elementor-element-65b919c1 > .elementor-background-overlay{border-radius:20px 20px 0px 0px}.elementor-194 .elementor-element.elementor-element-65b919c1{transition:background .3s,border .3s,border-radius .3s,box-shadow .3s}.elementor-194 .elementor-element.elementor-element-4dae5261.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-4dae5261.elementor-column > .elementor-widget-wrap{justify-content:center}.elementor-194 .elementor-element.elementor-element-4dae5261 > .elementor-element-populated{padding:10% 10% 10% 10%}.elementor-194 .elementor-element.elementor-element-26c06ada amp-img,.elementor-194 .elementor-element.elementor-element-26c06ada amp-anim{max-width:40%}.elementor-194 .elementor-element.elementor-element-65bf6dbb.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-5fb2a15c .elementor-heading-title{font-family:"Roboto",Sans-serif;font-size:20px;font-weight:bold;text-shadow:0px 2px 2px rgba(0,0,0,.5);color:#fff}.elementor-194 .elementor-element.elementor-element-135bff1f:not(.elementor-motion-effects-element-type-background){background-color:#0b6b3a}.elementor-194 .elementor-element.elementor-element-135bff1f,.elementor-194 .elementor-element.elementor-element-135bff1f > .elementor-background-overlay{border-radius:0px 0px 20px 20px}.elementor-194 .elementor-element.elementor-element-135bff1f{transition:background .3s,border .3s,border-radius .3s,box-shadow .3s}.elementor-194 .elementor-element.elementor-element-135bff1f > .elementor-background-overlay{transition:background .3s,border-radius .3s,opacity .3s}.elementor-194 .elementor-element.elementor-element-740c5b94 amp-img,.elementor-194 .elementor-element.elementor-element-740c5b94 amp-anim{border-radius:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-1913e7cd amp-img,.elementor-194 .elementor-element.elementor-element-1913e7cd amp-anim{border-radius:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-676b7069:not(.elementor-motion-effects-element-type-background){background-color:#062b18}.elementor-194 .elementor-element.elementor-element-676b7069 > .elementor-background-overlay{background-color:transparent;background-image:linear-gradient(240deg,rgba(255,255,255,0) 60%,#0b6b3a 0%);opacity:1;transition:background .3s,border-radius .3s,opacity .3s}.elementor-194 .elementor-element.elementor-element-676b7069,.elementor-194 .elementor-element.elementor-element-676b7069 > .elementor-background-overlay{border-radius:20px 20px 0px 0px}.elementor-194 .elementor-element.elementor-element-676b7069{transition:background .3s,border .3s,border-radius .3s,box-shadow .3s;margin-top:10px;margin-bottom:0px}.elementor-194 .elementor-element.elementor-element-628b273e.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-628b273e.elementor-column > .elementor-widget-wrap{justify-content:center}.elementor-194 .elementor-element.elementor-element-628b273e > .elementor-element-populated{padding:10% 10% 10% 10%}.elementor-194 .elementor-element.elementor-element-d1a27cb amp-img,.elementor-194 .elementor-element.elementor-element-d1a27cb amp-anim{max-width:40%}.elementor-194 .elementor-element.elementor-element-64a3ee69.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-178c84dc .elementor-heading-title{font-family:"Roboto",Sans-serif;font-weight:bold;text-shadow:0px 2px 2px rgba(0,0,0,.5);color:#fff}.elementor-194 .elementor-element.elementor-element-485a39ed:not(.elementor-motion-effects-element-type-background){background-color:#0b6b3a}.elementor-194 .elementor-element.elementor-element-485a39ed,.elementor-194 .elementor-element.elementor-element-485a39ed > .elementor-background-overlay{border-radius:0px 0px 20px 20px}.elementor-194 .elementor-element.elementor-element-485a39ed{transition:background .3s,border .3s,border-radius .3s,box-shadow .3s}.elementor-194 .elementor-element.elementor-element-485a39ed > .elementor-background-overlay{transition:background .3s,border-radius .3s,opacity .3s}.elementor-194 .elementor-element.elementor-element-6654b5fe amp-img,.elementor-194 .elementor-element.elementor-element-6654b5fe amp-anim{border-radius:20px 20px 20px 20px}.elementor-194 .elementor-element.elementor-element-33786583 > .elementor-container{max-width:1400px}.elementor-194 .elementor-element.elementor-element-33786583{margin-top:10px;margin-bottom:0px}.elementor-194 .elementor-element.elementor-element-1c177cac:not(.elementor-motion-effects-element-type-background){background-color:#062b18}.elementor-194 .elementor-element.elementor-element-1c177cac > .elementor-background-overlay{background-color:transparent;background-image:linear-gradient(240deg,rgba(255,255,255,0) 50%,#0b6b3a 0%);opacity:1;transition:background .3s,border-radius .3s,opacity .3s}.elementor-194 .elementor-element.elementor-element-1c177cac,.elementor-194 .elementor-element.elementor-element-1c177cac > .elementor-background-overlay{border-radius:20px 20px 0px 0px}.elementor-194 .elementor-element.elementor-element-1c177cac{transition:background .3s,border .3s,border-radius .3s,box-shadow .3s}.elementor-194 .elementor-element.elementor-element-650ea64d.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-650ea64d.elementor-column > .elementor-widget-wrap{justify-content:center}.elementor-194 .elementor-element.elementor-element-650ea64d > .elementor-element-populated{padding:10% 10% 10% 10%}.elementor-194 .elementor-element.elementor-element-158a1d45 amp-img,.elementor-194 .elementor-element.elementor-element-158a1d45 amp-anim{max-width:80%}.elementor-194 .elementor-element.elementor-element-22263d67.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-3877b5d4 .elementor-heading-title{font-family:"Roboto",Sans-serif;font-size:20px;font-weight:bold;text-shadow:0px 2px 2px rgba(0,0,0,.5);color:#fff}.elementor-194 .elementor-element.elementor-element-7d7a782.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-cb15f62:not(.elementor-motion-effects-element-type-background){background-color:#0b6b3a}.elementor-194 .elementor-element.elementor-element-cb15f62,.elementor-194 .elementor-element.elementor-element-cb15f62 > .elementor-background-overlay{border-radius:0px 0px 20px 20px}.elementor-194 .elementor-element.elementor-element-cb15f62{transition:background .3s,border .3s,border-radius .3s,box-shadow .3s}.elementor-194 .elementor-element.elementor-element-cb15f62 > .elementor-background-overlay{transition:background .3s,border-radius .3s,opacity .3s}.elementor-194 .elementor-element.elementor-element-45218f8e amp-img,.elementor-194 .elementor-element.elementor-element-45218f8e amp-anim{border-radius:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-52619f9 amp-img,.elementor-194 .elementor-element.elementor-element-52619f9 amp-anim{border-radius:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-43527e9d amp-img,.elementor-194 .elementor-element.elementor-element-43527e9d amp-anim{border-radius:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-72d65adb amp-img,.elementor-194 .elementor-element.elementor-element-72d65adb amp-anim{border-radius:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-70e116c1 amp-img,.elementor-194 .elementor-element.elementor-element-70e116c1 amp-anim{border-radius:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-618bd264 amp-img,.elementor-194 .elementor-element.elementor-element-618bd264 amp-anim{border-radius:10px 10px 10px 10px}.elementor-194 .elementor-element.elementor-element-513b59c0:not(.elementor-motion-effects-element-type-background){background-color:#062b18}.elementor-194 .elementor-element.elementor-element-513b59c0 > .elementor-container{max-width:1400px}.elementor-194 .elementor-element.elementor-element-513b59c0{border-style:solid;border-width:2px 0px 0px 0px;border-color:#0b6b3a;transition:background .3s,border .3s,border-radius .3s,box-shadow .3s}.elementor-194 .elementor-element.elementor-element-513b59c0 > .elementor-background-overlay{transition:background .3s,border-radius .3s,opacity .3s}.elementor-widget-divider{--divider-color:var(--e-global-color-secondary)}.elementor-194 .elementor-element.elementor-element-49e7ffc{--divider-border-style:solid;--divider-color:#03331a;--divider-border-width:1px}.elementor-194 .elementor-element.elementor-element-49e7ffc .elementor-divider-separator{width:100%}.elementor-194 .elementor-element.elementor-element-49e7ffc .elementor-divider{padding-block-start:2px;padding-block-end:2px}.elementor-194 .elementor-element.elementor-element-68645776:not(.elementor-motion-effects-element-type-background){background-color:#062b18}.elementor-194 .elementor-element.elementor-element-68645776 > .elementor-container{max-width:1400px}.elementor-194 .elementor-element.elementor-element-68645776{transition:background .3s,border .3s,border-radius .3s,box-shadow .3s}.elementor-194 .elementor-element.elementor-element-68645776 > .elementor-background-overlay{transition:background .3s,border-radius .3s,opacity .3s}.elementor-widget-text-editor{font-family:var(--e-global-typography-text-font-family),Sans-serif;font-weight:var(--e-global-typography-text-font-weight);color:var(--e-global-color-text)}.elementor-194 .elementor-element.elementor-element-7587b99a{font-family:"Roboto",Sans-serif;font-weight:400;line-height:14px}.elementor-194 .elementor-element.elementor-element-3f44190b.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-3f44190b > .elementor-element-populated{padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-6efc124b.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-6efc124b > .elementor-element-populated{padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-18485513.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-18485513 > .elementor-element-populated{padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-2b0e5595.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-2b0e5595 > .elementor-element-populated{padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-13ded7a3.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-13ded7a3 > .elementor-element-populated{padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-1bd97bbd{text-align:right;font-family:"Roboto",Sans-serif;font-weight:400;line-height:14px}.elementor-194 .elementor-element.elementor-element-1164ccfc{margin-top:-30px;margin-bottom:0px}@media (min-width:768px){.elementor-194 .elementor-element.elementor-element-6470a04d{width:15%}.elementor-194 .elementor-element.elementor-element-205f7ee9{width:68.999%}.elementor-194 .elementor-element.elementor-element-27a7a72a{width:8%}.elementor-194 .elementor-element.elementor-element-502e5678{width:8%}.elementor-194 .elementor-element.elementor-element-58859f05{width:5%}.elementor-194 .elementor-element.elementor-element-4264feeb{width:10.524%}.elementor-194 .elementor-element.elementor-element-10d38225{width:10%}.elementor-194 .elementor-element.elementor-element-ab2a0b4{width:10%}.elementor-194 .elementor-element.elementor-element-27db6e29{width:10%}.elementor-194 .elementor-element.elementor-element-5318805d{width:10%}.elementor-194 .elementor-element.elementor-element-7452a261{width:10%}.elementor-194 .elementor-element.elementor-element-15f6f5fa{width:12%}.elementor-194 .elementor-element.elementor-element-47b92a3b{width:10%}.elementor-194 .elementor-element.elementor-element-4ede17e5{width:12%}.elementor-194 .elementor-element.elementor-element-487d23b8{width:5%}.elementor-194 .elementor-element.elementor-element-7244fbe9{width:95%}.elementor-194 .elementor-element.elementor-element-2b2ee732{width:5%}.elementor-194 .elementor-element.elementor-element-4c5b5e4{width:82.332%}.elementor-194 .elementor-element.elementor-element-115f2270{width:12%}.elementor-194 .elementor-element.elementor-element-7df1a631{width:40%}.elementor-194 .elementor-element.elementor-element-3dd37518{width:12%}.elementor-194 .elementor-element.elementor-element-1d90db49{width:88%}.elementor-194 .elementor-element.elementor-element-2d2d5af6{width:60%}.elementor-194 .elementor-element.elementor-element-4dae5261{width:12%}.elementor-194 .elementor-element.elementor-element-65bf6dbb{width:88%}.elementor-194 .elementor-element.elementor-element-628b273e{width:12%}.elementor-194 .elementor-element.elementor-element-64a3ee69{width:88%}.elementor-194 .elementor-element.elementor-element-650ea64d{width:5%}.elementor-194 .elementor-element.elementor-element-22263d67{width:82.332%}.elementor-194 .elementor-element.elementor-element-7d7a782{width:12%}.elementor-194 .elementor-element.elementor-element-3f44190b{width:10%}.elementor-194 .elementor-element.elementor-element-6efc124b{width:10%}.elementor-194 .elementor-element.elementor-element-18485513{width:10%}.elementor-194 .elementor-element.elementor-element-2b0e5595{width:10%}.elementor-194 .elementor-element.elementor-element-13ded7a3{width:59.994%}}@media (max-width:1024px) and (min-width:768px){.elementor-194 .elementor-element.elementor-element-6470a04d{width:19%}.elementor-194 .elementor-element.elementor-element-205f7ee9{width:57%}.elementor-194 .elementor-element.elementor-element-27a7a72a{width:12%}.elementor-194 .elementor-element.elementor-element-502e5678{width:12%}.elementor-194 .elementor-element.elementor-element-4c5b5e4{width:77%}.elementor-194 .elementor-element.elementor-element-7df1a631{width:42%}.elementor-194 .elementor-element.elementor-element-2d2d5af6{width:58%}.elementor-194 .elementor-element.elementor-element-22263d67{width:74%}.elementor-194 .elementor-element.elementor-element-7d7a782{width:21%}.elementor-194 .elementor-element.elementor-element-78abf009{width:33.33%}.elementor-194 .elementor-element.elementor-element-318c3ae8{width:33.33%}.elementor-194 .elementor-element.elementor-element-21bd5133{width:33.33%}.elementor-194 .elementor-element.elementor-element-47e65168{width:33.33%}.elementor-194 .elementor-element.elementor-element-6135f42a{width:33.33%}.elementor-194 .elementor-element.elementor-element-46a0e6e{width:33.33%}.elementor-194 .elementor-element.elementor-element-3096951f{width:30%}.elementor-194 .elementor-element.elementor-element-3f44190b{width:22%}.elementor-194 .elementor-element.elementor-element-6efc124b{width:22%}.elementor-194 .elementor-element.elementor-element-18485513{width:22%}.elementor-194 .elementor-element.elementor-element-2b0e5595{width:21%}.elementor-194 .elementor-element.elementor-element-13ded7a3{width:2%}.elementor-194 .elementor-element.elementor-element-6ffe09de{width:70%}}@media (max-width:1024px){.elementor-194 .elementor-element.elementor-element-279e1abb{padding:0% 0% 0% 0%}.elementor-194 .elementor-element.elementor-element-6470a04d.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center}.elementor-194 .elementor-element.elementor-element-11af0b25{padding:0% 0% 0% 0%}.elementor-194 .elementor-element.elementor-element-7b4685c4{padding:0px 0px 0px 0px}.elementor-194 .elementor-element.elementor-element-dbcb90e{padding:0% 16% 0% 17%}.elementor-194 .elementor-element.elementor-element-6510842d amp-img,.elementor-194 .elementor-element.elementor-element-6510842d amp-anim{max-width:60%}.elementor-194 .elementor-element.elementor-element-61784d82{padding:0% 0% 0% 0%}.elementor-194 .elementor-element.elementor-element-25551bf5 amp-img,.elementor-194 .elementor-element.elementor-element-25551bf5 amp-anim{max-width:80%}.elementor-194 .elementor-element.elementor-element-431fb57b .elementor-heading-title{font-size:16px}.elementor-194 .elementor-element.elementor-element-14631312{padding:0% 0% 0% 0%}.elementor-194 .elementor-element.elementor-element-20f6861b amp-img,.elementor-194 .elementor-element.elementor-element-20f6861b amp-anim{max-width:100%}.elementor-194 .elementor-element.elementor-element-26c06ada amp-img,.elementor-194 .elementor-element.elementor-element-26c06ada amp-anim{max-width:80%}.elementor-194 .elementor-element.elementor-element-d1a27cb amp-img,.elementor-194 .elementor-element.elementor-element-d1a27cb amp-anim{max-width:80%}.elementor-194 .elementor-element.elementor-element-33786583{padding:0% 0% 0% 0%}.elementor-194 .elementor-element.elementor-element-158a1d45 amp-img,.elementor-194 .elementor-element.elementor-element-158a1d45 amp-anim{max-width:100%}.elementor-194 .elementor-element.elementor-element-513b59c0{padding:0% 0% 0% 0%}.elementor-194 .elementor-element.elementor-element-1bd97bbd{text-align:right}}@media (max-width:767px){.elementor-194 .elementor-element.elementor-element-4ad4d945{text-align:center}.elementor-194 .elementor-element.elementor-element-27a7a72a{width:50%}.elementor-194 .elementor-element.elementor-element-502e5678{width:50%}.elementor-194 .elementor-element.elementor-element-dbcb90e{padding:0% 5% 0% 10%}.elementor-194 .elementor-element.elementor-element-487d23b8{width:10%}.elementor-194 .elementor-element.elementor-element-6510842d amp-img,.elementor-194 .elementor-element.elementor-element-6510842d amp-anim{max-width:50%}.elementor-194 .elementor-element.elementor-element-7244fbe9{width:90%}.elementor-194 .elementor-element.elementor-element-2b2ee732{width:10%}.elementor-194 .elementor-element.elementor-element-4c5b5e4{width:90%}.elementor-194 .elementor-element.elementor-element-6c8615fa{width:50%}.elementor-194 .elementor-element.elementor-element-6376aa8e{width:50%}.elementor-194 .elementor-element.elementor-element-13849162{width:50%}.elementor-194 .elementor-element.elementor-element-6b1af2c3{width:50%}.elementor-194 .elementor-element.elementor-element-3dd37518{width:10%}.elementor-194 .elementor-element.elementor-element-1d90db49{width:90%}.elementor-194 .elementor-element.elementor-element-4dae5261{width:10%}.elementor-194 .elementor-element.elementor-element-26c06ada amp-img,.elementor-194 .elementor-element.elementor-element-26c06ada amp-anim{max-width:100%}.elementor-194 .elementor-element.elementor-element-65bf6dbb{width:90%}.elementor-194 .elementor-element.elementor-element-628b273e{width:10%}.elementor-194 .elementor-element.elementor-element-d1a27cb amp-img,.elementor-194 .elementor-element.elementor-element-d1a27cb amp-anim{max-width:100%}.elementor-194 .elementor-element.elementor-element-64a3ee69{width:90%}.elementor-194 .elementor-element.elementor-element-650ea64d{width:10%}.elementor-194 .elementor-element.elementor-element-158a1d45 amp-img,.elementor-194 .elementor-element.elementor-element-158a1d45 amp-anim{max-width:100%}.elementor-194 .elementor-element.elementor-element-22263d67{width:90%}.elementor-194 .elementor-element.elementor-element-78abf009{width:50%}.elementor-194 .elementor-element.elementor-element-318c3ae8{width:50%}.elementor-194 .elementor-element.elementor-element-21bd5133{width:50%}.elementor-194 .elementor-element.elementor-element-47e65168{width:50%}.elementor-194 .elementor-element.elementor-element-6135f42a{width:50%}.elementor-194 .elementor-element.elementor-element-46a0e6e{width:50%}.elementor-194 .elementor-element.elementor-element-2c94f385{width:20%}.elementor-194 .elementor-element.elementor-element-7040c3f9{width:20%}.elementor-194 .elementor-element.elementor-element-374b4f0{width:20%}.elementor-194 .elementor-element.elementor-element-357daaa3{width:20%}.elementor-194 .elementor-element.elementor-element-7352ae47{width:20%}.elementor-194 .elementor-element.elementor-element-3001b3f5{width:20%}.elementor-194 .elementor-element.elementor-element-39411a97{width:20%}.elementor-194 .elementor-element.elementor-element-31a5ae65{width:20%}.elementor-194 .elementor-element.elementor-element-78a080e5{width:20%}.elementor-194 .elementor-element.elementor-element-4f3fa5c3{width:20%}.elementor-194 .elementor-element.elementor-element-6ae24aeb{width:20%}.elementor-194 .elementor-element.elementor-element-722baf6f{width:20%}.elementor-194 .elementor-element.elementor-element-6e9dc908{width:20%}.elementor-194 .elementor-element.elementor-element-3243d8fe{width:20%}.elementor-194 .elementor-element.elementor-element-17aadbdf{width:20%}.elementor-194 .elementor-element.elementor-element-69c99428{width:20%}.elementor-194 .elementor-element.elementor-element-1178c146{width:20%}.elementor-194 .elementor-element.elementor-element-bdccb68{width:20%}.elementor-194 .elementor-element.elementor-element-2c93f4e1{width:20%}.elementor-194 .elementor-element.elementor-element-1103142c{width:20%}.elementor-194 .elementor-element.elementor-element-7587b99a{text-align:center;line-height:1em}.elementor-194 .elementor-element.elementor-element-3f44190b{width:25%}.elementor-194 .elementor-element.elementor-element-6efc124b{width:25%}.elementor-194 .elementor-element.elementor-element-18485513{width:25%}.elementor-194 .elementor-element.elementor-element-2b0e5595{width:25%}.elementor-194 .elementor-element.elementor-element-1bd97bbd{text-align:center;line-height:1em}.elementor-194 .elementor-element.elementor-element-38b0e007{width:33.33%}.elementor-194 .elementor-element.elementor-element-73536c61{width:33.33%}.elementor-194 .elementor-element.elementor-element-4810ed67{width:33.33%}.elementor-194 .elementor-element.elementor-element-4cbbae96{width:33.33%}.elementor-194 .elementor-element.elementor-element-e8b154a{width:33.33%}.elementor-194 .elementor-element.elementor-element-29eb28ab{width:33.33%}.elementor-194 .elementor-element.elementor-element-4565837d{width:33.33%}.elementor-194 .elementor-element.elementor-element-5e696da5{width:33.33%}.elementor-194 .elementor-element.elementor-element-22122c8b{width:33.33%}.elementor-194 .elementor-element.elementor-element-70f17548{width:33.33%}.elementor-194 .elementor-element.elementor-element-45cede2e{width:33.33%}.elementor-194 .elementor-element.elementor-element-4d1ffba1{width:33.33%}}.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a amp-img[src$=".svg"],.elementor-widget-image a amp-anim[src$=".svg"]{width:48px}.elementor-widget-image amp-img,.elementor-widget-image amp-anim{display:inline-block;vertical-align:middle}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-divider{--divider-border-style:none;--divider-border-width:1px;--divider-color:#0c0d0e;--divider-icon-size:20px;--divider-element-spacing:10px;--divider-pattern-height:24px;--divider-pattern-size:20px;--divider-pattern-url:none;--divider-pattern-repeat:repeat-x}.elementor-widget-divider .elementor-divider{display:flex}.elementor-widget-divider .elementor-divider-separator{direction:ltr;display:flex;margin:0}.elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator{border-block-start:var(--divider-border-width) var(--divider-border-style) var(--divider-color)}#uc_marquee_elementor_7110d6fa{white-space:nowrap;overflow:hidden;box-sizing:border-box;margin:0 auto}#uc_marquee_elementor_7110d6fa div.marquee_text{display:inline-block;padding-left:100%;animation:marquee 40s linear infinite}@keyframes marquee{0%{transform:translate(0,0)}100%{transform:translate(-100%,0)}}@keyframes marquee_flip{0%{transform:translate(-100%,0)}100%{transform:translate(0,0)}}#uc_marquee_elementor_7110d6fa a{text-decoration:none}

/*# sourceURL=amp-custom.css */
/* SEO TITLE - RESPONSIVE FIX */
.elementor-194 .elementor-widget-heading.elementor-element-2c94f385 {
    width: 100%;
    max-width: 100%;
    flex: 0 0 100%;
}

.elementor-194 .elementor-widget-heading.elementor-element-2c94f385 .elementor-heading-title {
    display: block;
    width: 100%;
    max-width: 100%;
    margin: 0 0 18px 0;
    padding: 0;
    color: #ffffff;
    font-size: 34px;
    line-height: 1.15;
    font-weight: 700;
    text-align: left;
    word-break: normal;
    overflow-wrap: normal;
    white-space: normal;
}

@media (max-width: 767px) {
    .elementor-194 .elementor-widget-heading.elementor-element-2c94f385 {
        width: 100%;
        max-width: 100%;
        flex: 0 0 100%;
    }

    .elementor-194 .elementor-widget-heading.elementor-element-2c94f385 .elementor-heading-title {
        width: 100%;
        max-width: 100%;
        font-size: 25px;
        line-height: 1.18;
        margin-bottom: 16px;
    }
}

@media (min-width: 768px) {
    .elementor-194 .elementor-widget-heading.elementor-element-2c94f385 .elementor-heading-title {
        font-size: 36px;
    }
}

/* FINAL FIX WARNA ARTIKEL - AMP VALID */
.elementor-194 .elementor-element-9b02375 .elementor-element-2c94f385 .elementor-heading-title {
    color: #ffffff;
}
.elementor-194 .elementor-element-9b02375 .elementor-element-3af9289c .elementor-widget-container,
.elementor-194 .elementor-element-9b02375 .elementor-element-3af9289c p,
.elementor-194 .elementor-element-9b02375 .elementor-element-3af9289c span {
    color: #ffffff;
}
.elementor-194 .elementor-element-9b02375 .elementor-element-3af9289c a {
    color: #ffffff;
}
.elementor-194 .elementor-element-9b02375 .elementor-element-3af9289c strong {
    color: #ffffff;
}
@media (max-width: 767px) {
    .elementor-194 .elementor-element-9b02375 .elementor-element-2c94f385 .elementor-heading-title {
        color: #ffffff;
    }
    .elementor-194 .elementor-element-9b02375 .elementor-element-3af9289c .elementor-widget-container,
    .elementor-194 .elementor-element-9b02375 .elementor-element-3af9289c p,
    .elementor-194 .elementor-element-9b02375 .elementor-element-3af9289c span,
    .elementor-194 .elementor-element-9b02375 .elementor-element-3af9289c a,
    .elementor-194 .elementor-element-9b02375 .elementor-element-3af9289c strong {
        color: #ffffff;
    }
}
</style><link rel="canonical" href="https://sbobet777.blog/"><script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"pngage","@id":"https://sbobet777.blog/","url":"https://sbobet777.blog/","name":"%%TITLE%%","isPartOf":{"@id":"https://sbobet777.blog/#website"},"about":{"@id":"https://sbobet777.blog/#organization"},"primaryImageOfPage":{"@id":"https://sbobet777.blog/#primaryimage"},"image":{"@id":"https://sbobet777.blog/#primaryimage"},"thumbnailUrl":"%%CTA_URL%%","datePublished":"2022-06-04T15:01:55+00:00","dateModified":"2024-11-05T05:14:59+00:00","description":"SBOBET777 Pusat demo prediksi bola SBOBET88 dengan informasi pertandingan, analisis tim, statistik, dan prediksi yang disajikan secara ringkas dan mudah dipahami.","breadcrumb":{"@id":"https://sbobet777.blog/#breadcrumb"},"inLanguage":"id","potentialAction":[{"@type":"ReadAction","target":["https://sbobet777.blog/"]}]},{"@type":"ImageObject","inLanguage":"id","@id":"https://sbobet777.blog/#primaryimage","url":"%%CTA_URL%%","contentUrl":"%%CTA_URL%%","width":512,"height":512,"caption":"Favicon SS"},{"@type":"BreadcrumbList","@id":"https://sbobet777.blog/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Beranda"}]},{"@type":"WebSite","@id":"https://sbobet777.blog/#website","url":"https://sbobet777.blog/","name":"%%SITE%%","description":"","publisher":{"@id":"https://sbobet777.blog/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://sbobet777.blog/?s={search_term_string}"},"query-input":{"@type":"PropertyValueSpecification","valueRequired":true,"valueName":"search_term_string"}}],"inLanguage":"id"},{"@type":"Organization","@id":"https://sbobet777.blog/#organization","name":"%%SITE%%","url":"https://sbobet777.blog/","logo":{"@type":"ImageObject","inLanguage":"id","@id":"https://sbobet777.blog/#/schema/logo/image/","url":"https://sbobet777.blog/content/logo.png","contentUrl":"https://sbobet777.blog/content/logo.png","width":350,"height":100,"caption":"%%SITE%%"},"image":{"@id":"https://sbobet777.blog/#/schema/logo/image/"}}]}</script><link rel="alternate" type="application/rss+xml" title="SBOBET777 » Feed" href="https://sbobet777.blog/feed/"><link rel="alternate" type="application/rss+xml" title="SBOBET777 » Umpan Komentar" href="https://sbobet777.blog/comments/feed/"><link rel="https://api.w.org/" href="https://sbobet777.blog/wp-json/"><link rel="alternate" title="JSON" type="application/json" href="https://sbobet777.blog/wp-json/wp/v2/pages/194"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://sbobet777.blog/xmlrpc.php?rsd"><link rel="shortlink" href="https://sbobet777.blog/"><link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://sbobet777.blog/wp-json/oembed/1.0/embed?url=https%3A%2F%2FSBOBET777.com%2F"><link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://sbobet777.blog/wp-json/oembed/1.0/embed?url=https%3A%2F%2FSBOBET777.com%2F&amp;format=xml"><link rel="apple-touch-icon" href="%%CTA_URL%%"><title>%%TITLE%%</title></head>
<body class="home wp-singular page-template page-template-elementor_canvas page page-id-194 wp-custom-logo wp-theme-astra ast-desktop ast-amp ast-page-builder-template ast-no-sidebar astra-4.11.1 group-blog ast-single-post ast-inherit-site-logo-transparent ast-hfb-header elementor-page-218 elementor-default elementor-template-canvas elementor-kit-26 elementor-page elementor-page-194">
			<div data-elementor-type="wp-page" data-elementor-id="194" class="elementor elementor-194" data-elementor-post-type="page">
						<section class="elementor-section elementor-top-section elementor-element elementor-element-279e1abb elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="279e1abb" data-element_type="section" data-settings='{"background_background":"classic"}'>
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6a9c8e92" data-id="6a9c8e92" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-3634e901 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="3634e901" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6470a04d" data-id="6470a04d" data-element_type="column" data-settings='{"background_background":"classic"}'>
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-4ad4d945 elementor-widget elementor-widget-image" data-id="4ad4d945" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
																<a href="/">
							<amp-img width="350" height="100" src="https://sbobet777.blog/content/logo.png" class="attachment-large size-large wp-image-787 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" srcset="https://sbobet777.blog/content/logo.png 350w, https://sbobet777.blog/content/logo.png 300w" sizes="(max-width: 350px) 100vw, 350px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwMCIgd2lkdGg9IjM1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img decoding="async" width="350" height="100" src="https://sbobet777.blog/content/logo.png" alt="" srcset="https://sbobet777.blog/content/logo.png 350w, https://sbobet777.blog/content/logo.png 300w" sizes="(max-width: 350px) 100vw, 350px"></noscript></amp-img>								</a>
															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-205f7ee9 elementor-hidden-mobile" data-id="205f7ee9" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-7ff72b5 elementor-widget elementor-widget-image" data-id="7ff72b5" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="95" height="95" src="https://sbobet777.blog/icon/flag-id.png" class="attachment-full size-full wp-image-788 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9Ijk1IiB3aWR0aD0iOTUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"></i-amphtml-sizer><noscript><img decoding="async" width="95" height="95" src="https://sbobet777.blog/icon/flag-id.png" alt=""></noscript></amp-img>															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-27a7a72a" data-id="27a7a72a" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-39dccca elementor-align-justify elementor-widget elementor-widget-button" data-id="39dccca" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://vhxjisxczlvbctbt.sbs/sb777bg" rel="nofollow">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">LOGIN</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-502e5678" data-id="502e5678" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-7a5b6d elementor-align-justify elementor-widget elementor-widget-button" data-id="7a5b6d" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://vhxjisxczlvbctbt.sbs/sb777bg" rel="nofollow">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">DAFTAR</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-11af0b25 elementor-section-full_width elementor-hidden-mobile elementor-section-height-default elementor-section-height-default" data-id="11af0b25" data-element_type="section" data-settings='{"background_background":"classic"}'>
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-13b00fd" data-id="13b00fd" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-7b4685c4 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="7b4685c4" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-58859f05" data-id="58859f05" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-25c1fdf3 elementor-widget elementor-widget-image" data-id="25c1fdf3" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="512" height="512" src="https://sbobet777.blog/icon/home.png" class="attachment-full size-full wp-image-789 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" srcset="https://sbobet777.blog/icon/home.png 512w, https://sbobet777.blog/icon/home.png 300w, https://sbobet777.blog/icon/home.png 150w" sizes="(max-width: 512px) 100vw, 512px" layout="intrinsic" disable-inline-width="" data-hero i-amphtml-ssr i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMiIgd2lkdGg9IjUxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" fetchpriority="high" alt="" src="https://sbobet777.blog/icon/home.png" srcset="https://sbobet777.blog/icon/home.png 512w, https://sbobet777.blog/icon/home.png 300w, https://sbobet777.blog/icon/home.png 150w" sizes="(max-width: 512px) 100vw, 512px"></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-4264feeb" data-id="4264feeb" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-56fb0607 elementor-align-center elementor-widget elementor-widget-button" data-id="56fb0607" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">FREE GAMES</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-10d38225" data-id="10d38225" data-element_type="column" data-settings='{"background_background":"classic"}'>
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1e84914e elementor-align-center elementor-widget elementor-widget-button" data-id="1e84914e" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">SPORTS</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-ab2a0b4" data-id="ab2a0b4" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-12105177 elementor-align-center elementor-widget elementor-widget-button" data-id="12105177" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">KASINO</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-27db6e29" data-id="27db6e29" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-12146351 elementor-align-center elementor-widget elementor-widget-button" data-id="12146351" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">SLOTS</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-5318805d" data-id="5318805d" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-11758bc4 elementor-align-center elementor-widget elementor-widget-button" data-id="11758bc4" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">POKER</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-7452a261" data-id="7452a261" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-50852535 elementor-align-center elementor-widget elementor-widget-button" data-id="50852535" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">ARCADE</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-15f6f5fa" data-id="15f6f5fa" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-d1108f4 elementor-align-center elementor-widget elementor-widget-button" data-id="d1108f4" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">TEMBAK IKAN</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-47b92a3b" data-id="47b92a3b" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-7c6f213f elementor-align-center elementor-widget elementor-widget-button" data-id="7c6f213f" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">BONUS</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-4ede17e5" data-id="4ede17e5" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-41139c80 elementor-align-center elementor-widget elementor-widget-button" data-id="41139c80" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">PERATURAN</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-65fd590d elementor-section-full_width elementor-hidden-mobile elementor-section-height-default elementor-section-height-default" data-id="65fd590d" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d3225a4" data-id="d3225a4" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-387687bf elementor-widget elementor-widget-image" data-id="387687bf" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="1920" height="500" src="https://sbobet777.blog/content/banner.png" class="attachment-full size-full wp-image-114 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="Banner SBOBET777 Desktop" srcset="https://sbobet777.blog/content/banner.png 1920w, https://sbobet777.blog/content/banner.png 300w, https://sbobet777.blog/content/banner.png 1024w, https://sbobet777.blog/content/banner.png 768w, https://sbobet777.blog/content/banner.png 1536w" sizes="(max-width: 1920px) 100vw, 1920px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUwMCIgd2lkdGg9IjE5MjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="1920" height="500" src="https://sbobet777.blog/content/banner.png" alt="Banner SBOBET777 Desktop" srcset="https://sbobet777.blog/content/banner.png 1920w, https://sbobet777.blog/content/banner.png 300w, https://sbobet777.blog/content/banner.png 1024w, https://sbobet777.blog/content/banner.png 768w, https://sbobet777.blog/content/banner.png 1536w" sizes="(max-width: 1920px) 100vw, 1920px"></noscript></amp-img>															</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-3ce6e87a elementor-section-full_width elementor-hidden-desktop elementor-hidden-tablet elementor-section-height-default elementor-section-height-default" data-id="3ce6e87a" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d346c9c" data-id="d346c9c" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-4c5f001e elementor-widget elementor-widget-image" data-id="4c5f001e" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="1440" height="749" src="https://sbobet777.blog/content/banner2.png" class="attachment-full size-full wp-image-115 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="Banner SBOBET777 Mobile" srcset="https://sbobet777.blog/content/banner2.png 1440w, https://sbobet777.blog/content/banner2.png 300w, https://sbobet777.blog/content/banner2.png 1024w, https://sbobet777.blog/content/banner2.png 768w" sizes="(max-width: 1440px) 100vw, 1440px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9Ijc0OSIgd2lkdGg9IjE0NDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="1440" height="749" src="https://sbobet777.blog/content/banner2.png" alt="Banner SBOBET777 Mobile" srcset="https://sbobet777.blog/content/banner2.png 1440w, https://sbobet777.blog/content/banner2.png 300w, https://sbobet777.blog/content/banner2.png 1024w, https://sbobet777.blog/content/banner2.png 768w" sizes="(max-width: 1440px) 100vw, 1440px"></noscript></amp-img>															</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-dbcb90e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dbcb90e" data-element_type="section" data-settings='{"background_background":"classic"}'>
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-487d23b8" data-id="487d23b8" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-6510842d elementor-widget elementor-widget-image" data-id="6510842d" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="189" height="401" src="https://sbobet777.blog/icon/microphone.png" class="attachment-full size-full wp-image-792 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" srcset="https://sbobet777.blog/icon/microphone.png 189w, https://sbobet777.blog/icon/microphone.png 141w" sizes="(max-width: 189px) 100vw, 189px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQwMSIgd2lkdGg9IjE4OSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="189" height="401" src="https://sbobet777.blog/icon/microphone.png" alt="" srcset="https://sbobet777.blog/icon/microphone.png 189w, https://sbobet777.blog/icon/microphone.png 141w" sizes="(max-width: 189px) 100vw, 189px"></noscript></amp-img>															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7244fbe9" data-id="7244fbe9" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-7110d6fa elementor-widget elementor-widget-ucaddon_marquee" data-id="7110d6fa" data-element_type="widget" data-widget_type="ucaddon_marquee.default">
				<div class="elementor-widget-container">
					



<div class="ue_marquee" id="uc_marquee_elementor_7110d6fa">
<div class="marquee_text">
  	
    Selamat datang ke SBOBET777, situs judi Indonesia yang menyediakan berbagai ragam permainan slot, kasino, sabung ayam, tembak ikan, dan taruhan olahraga terkini. Pastikan anda bermain pada agen resmi yang merupakan perwakilan dari bandar internasional  yang terpercaya.
  	
</div>
</div>
				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-61784d82 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="61784d82" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-722cf83b" data-id="722cf83b" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-69795d62 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="69795d62" data-element_type="section" data-settings='{"background_background":"classic"}'>
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2b2ee732" data-id="2b2ee732" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-25551bf5 elementor-widget elementor-widget-image" data-id="25551bf5" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="173" height="210" src="https://sbobet777.blog/icon/promosi.png" class="attachment-full size-full wp-image-793 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjIxMCIgd2lkdGg9IjE3MyIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="173" height="210" src="https://sbobet777.blog/icon/promosi.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4c5b5e4" data-id="4c5b5e4" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-431fb57b elementor-widget elementor-widget-heading" data-id="431fb57b" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">PROMOSI</p>				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-115f2270 elementor-hidden-mobile" data-id="115f2270" data-element_type="column">
			<div class="elementor-widget-wrap">
							</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-310f0a07 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="310f0a07" data-element_type="section" data-settings='{"background_background":"classic"}'>
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-6c8615fa" data-id="6c8615fa" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-5d529653 elementor-widget elementor-widget-image" data-id="5d529653" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="600" height="300" src="https://sbobet777.blog/content/favicon1.png" class="attachment-full size-full wp-image-794 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" srcset="https://sbobet777.blog/content/favicon1.png 600w, https://sbobet777.blog/content/favicon1.png 300w" sizes="(max-width: 600px) 100vw, 600px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwMCIgd2lkdGg9IjYwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="600" height="300" src="https://sbobet777.blog/content/favicon1.png" alt="" srcset="https://sbobet777.blog/content/favicon1.png 600w, https://sbobet777.blog/content/favicon1.png 300w" sizes="(max-width: 600px) 100vw, 600px"></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-6376aa8e" data-id="6376aa8e" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-46f1ab08 elementor-widget elementor-widget-image" data-id="46f1ab08" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="600" height="300" src="https://sbobet777.blog/content/live-casino.png" class="attachment-full size-full wp-image-795 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" srcset="https://sbobet777.blog/content/live-casino.png 600w, https://sbobet777.blog/content/live-casino.png 300w" sizes="(max-width: 600px) 100vw, 600px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwMCIgd2lkdGg9IjYwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="600" height="300" src="https://sbobet777.blog/content/live-casino.png" alt="" srcset="https://sbobet777.blog/content/live-casino.png 600w, https://sbobet777.blog/content/live-casino.png 300w" sizes="(max-width: 600px) 100vw, 600px"></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-601751b1" data-id="601751b1" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-293d8d12 elementor-widget elementor-widget-image" data-id="293d8d12" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="600" height="300" src="https://sbobet777.blog/content/referral.png" class="attachment-full size-full wp-image-796 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" srcset="https://sbobet777.blog/content/referral.png 600w, https://sbobet777.blog/content/referral.png 300w" sizes="(max-width: 600px) 100vw, 600px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwMCIgd2lkdGg9IjYwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="600" height="300" src="https://sbobet777.blog/content/referral.png" alt="" srcset="https://sbobet777.blog/content/referral.png 600w, https://sbobet777.blog/content/referral.png 300w" sizes="(max-width: 600px) 100vw, 600px"></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-13849162" data-id="13849162" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-45e23c85 elementor-widget elementor-widget-image" data-id="45e23c85" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="600" height="300" src="https://sbobet777.blog/content/cashback.png" class="attachment-full size-full wp-image-797 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" srcset="https://sbobet777.blog/content/cashback.png 600w, https://sbobet777.blog/content/cashback.png 300w" sizes="(max-width: 600px) 100vw, 600px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwMCIgd2lkdGg9IjYwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="600" height="300" src="https://sbobet777.blog/content/cashback.png" alt="" srcset="https://sbobet777.blog/content/cashback.png 600w, https://sbobet777.blog/content/cashback.png 300w" sizes="(max-width: 600px) 100vw, 600px"></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-6b1af2c3" data-id="6b1af2c3" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-24409cd5 elementor-widget elementor-widget-image" data-id="24409cd5" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="600" height="300" src="https://sbobet777.blog/content/tangkas.png" class="attachment-full size-full wp-image-798 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" srcset="https://sbobet777.blog/content/tangkas.png 600w, https://sbobet777.blog/content/tangkas.png 300w" sizes="(max-width: 600px) 100vw, 600px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwMCIgd2lkdGg9IjYwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="600" height="300" src="https://sbobet777.blog/content/tangkas.png" alt="" srcset="https://sbobet777.blog/content/tangkas.png 600w, https://sbobet777.blog/content/tangkas.png 300w" sizes="(max-width: 600px) 100vw, 600px"></noscript></amp-img></div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-14631312 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="14631312" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7df1a631" data-id="7df1a631" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-1f1792f0 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="1f1792f0" data-element_type="section" data-settings='{"background_background":"classic"}'>
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3dd37518" data-id="3dd37518" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-20f6861b elementor-widget elementor-widget-image" data-id="20f6861b" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="194" height="222" src="https://sbobet777.blog/icon/casino.png" class="attachment-full size-full wp-image-799 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjIyMiIgd2lkdGg9IjE5NCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="194" height="222" src="https://sbobet777.blog/icon/casino.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1d90db49" data-id="1d90db49" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-5305cf25 elementor-widget elementor-widget-heading" data-id="5305cf25" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">%%TITLE%%</p>				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-3fdfd12a elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="3fdfd12a" data-element_type="section" data-settings='{"background_background":"classic"}'>
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-22e96cc5" data-id="22e96cc5" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-5dc7384f elementor-widget elementor-widget-image" data-id="5dc7384f" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="1080" height="1080" src="https://sbobet777.blog/content/favicon2.png" class="attachment-full size-full wp-image-800 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" srcset="https://sbobet777.blog/content/favicon2.png 1080w, https://sbobet777.blog/content/favicon2.png 300w, https://sbobet777.blog/content/favicon2.png 1024w, https://sbobet777.blog/content/favicon2.png 150w, https://sbobet777.blog/content/favicon2.png 768w" sizes="(max-width: 1080px) 100vw, 1080px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwODAiIHdpZHRoPSIxMDgwIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIvPg=="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="1080" height="1080" src="https://sbobet777.blog/content/favicon2.png" alt="" srcset="https://sbobet777.blog/content/favicon2.png 1080w, https://sbobet777.blog/content/favicon2.png 300w, https://sbobet777.blog/content/favicon2.png 1024w, https://sbobet777.blog/content/favicon2.png 150w, https://sbobet777.blog/content/favicon2.png 768w" sizes="(max-width: 1080px) 100vw, 1080px"></noscript></amp-img></div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2d2d5af6" data-id="2d2d5af6" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-65b919c1 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="65b919c1" data-element_type="section" data-settings='{"background_background":"classic"}'>
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4dae5261" data-id="4dae5261" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-26c06ada elementor-widget elementor-widget-image" data-id="26c06ada" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="212" height="197" src="https://sbobet777.blog/icon/pertandingan.png" class="attachment-full size-full wp-image-801 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjE5NyIgd2lkdGg9IjIxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="212" height="197" src="https://sbobet777.blog/icon/pertandingan.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-65bf6dbb" data-id="65bf6dbb" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-5fb2a15c elementor-widget elementor-widget-heading" data-id="5fb2a15c" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">TARUHAN</p>				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-135bff1f elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="135bff1f" data-element_type="section" data-settings='{"background_background":"classic"}'>
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1f26bb03" data-id="1f26bb03" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-740c5b94 elementor-widget elementor-widget-image" data-id="740c5b94" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="550" height="260" src="https://sbobet777.blog/content/Taruhan-kiri.png" class="attachment-full size-full wp-image-802 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="Taruhan Kiri" srcset="https://sbobet777.blog/content/Taruhan-kiri.png 550w, https://sbobet777.blog/content/Taruhan-kiri.png 300w" sizes="(max-width: 550px) 100vw, 550px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjI2MCIgd2lkdGg9IjU1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="550" height="260" src="https://sbobet777.blog/content/Taruhan-kiri.png" alt="" srcset="https://sbobet777.blog/content/Taruhan-kiri.png 550w, https://sbobet777.blog/content/Taruhan-kiri.png 300w" sizes="(max-width: 550px) 100vw, 550px"></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-327525c" data-id="327525c" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1913e7cd elementor-widget elementor-widget-image" data-id="1913e7cd" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="550" height="260" src="https://sbobet777.blog/content/Taruhan-kanan.png" class="attachment-full size-full wp-image-803 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="Taruhan Kanan" srcset="https://sbobet777.blog/content/Taruhan-kanan.png 550w, https://sbobet777.blog/content/Taruhan-kanan.png 300w" sizes="(max-width: 550px) 100vw, 550px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjI2MCIgd2lkdGg9IjU1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="550" height="260" src="https://sbobet777.blog/content/Taruhan-kanan.png" alt="" srcset="https://sbobet777.blog/content/Taruhan-kanan.png 550w, https://sbobet777.blog/content/Taruhan-kanan.png 300w" sizes="(max-width: 550px) 100vw, 550px"></noscript></amp-img></div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-676b7069 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="676b7069" data-element_type="section" data-settings='{"background_background":"classic"}'>
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-628b273e" data-id="628b273e" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-d1a27cb elementor-widget elementor-widget-image" data-id="d1a27cb" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="211" height="183" src="https://sbobet777.blog/icon/jackpot.png" class="attachment-full size-full wp-image-804 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjE4MyIgd2lkdGg9IjIxMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="211" height="183" src="https://sbobet777.blog/icon/jackpot.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-64a3ee69" data-id="64a3ee69" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-178c84dc elementor-widget elementor-widget-heading" data-id="178c84dc" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">JACKPOT</p>				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-485a39ed elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="485a39ed" data-element_type="section" data-settings='{"background_background":"classic"}'>
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1b3c1f89" data-id="1b3c1f89" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-6654b5fe elementor-widget elementor-widget-image" data-id="6654b5fe" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-anim width="1102" height="366" src="https://sbobet777.blog/content/jackpot.gif" class="attachment-full size-full wp-image-805 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjM2NiIgd2lkdGg9IjExMDIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="1102" height="366" src="https://sbobet777.blog/content/jackpot.gif" alt="Jackpot SBOBET777"></noscript></amp-anim></div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-33786583 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="33786583" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-41bae126" data-id="41bae126" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-1c177cac elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="1c177cac" data-element_type="section" data-settings='{"background_background":"classic"}'>
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-650ea64d" data-id="650ea64d" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-158a1d45 elementor-widget elementor-widget-image" data-id="158a1d45" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="237" height="227" src="https://sbobet777.blog/icon/games.png" class="attachment-full size-full wp-image-806 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjIyNyIgd2lkdGg9IjIzNyIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="237" height="227" src="https://sbobet777.blog/icon/games.pnga" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-22263d67" data-id="22263d67" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-3877b5d4 elementor-widget elementor-widget-heading" data-id="3877b5d4" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">%%TITLE%%</p>				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7d7a782 elementor-hidden-mobile" data-id="7d7a782" data-element_type="column">
			<div class="elementor-widget-wrap">
							</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-cb15f62 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="cb15f62" data-element_type="section" data-settings='{"background_background":"classic"}'>
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-78abf009" data-id="78abf009" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-45218f8e elementor-widget elementor-widget-image" data-id="45218f8e" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="260" height="151" src="https://sbobet777.blog/content/thor_infinity_reels.png" class="attachment-full size-full wp-image-807 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjE1MSIgd2lkdGg9IjI2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="260" height="151" src="https://sbobet777.blog/content/thor_infinity_reels.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-318c3ae8" data-id="318c3ae8" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-52619f9 elementor-widget elementor-widget-image" data-id="52619f9" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="260" height="151" src="https://sbobet777.blog/content/5_fortune_dragons.png" class="attachment-full size-full wp-image-808 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjE1MSIgd2lkdGg9IjI2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="260" height="151" src="https://sbobet777.blog/content/5_fortune_dragons.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-21bd5133" data-id="21bd5133" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-43527e9d elementor-widget elementor-widget-image" data-id="43527e9d" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="260" height="151" src="https://sbobet777.blog/content/virtual_games.png" class="attachment-full size-full wp-image-809 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjE1MSIgd2lkdGg9IjI2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="260" height="151" src="https://sbobet777.blog/content/virtual_games.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-47e65168" data-id="47e65168" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-72d65adb elementor-widget elementor-widget-image" data-id="72d65adb" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="260" height="151" src="https://sbobet777.blog/content/gem_queen.png" class="attachment-full size-full wp-image-810 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjE1MSIgd2lkdGg9IjI2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="260" height="151" src="https://sbobet777.blog/content/gem_queen.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-6135f42a" data-id="6135f42a" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-70e116c1 elementor-widget elementor-widget-image" data-id="70e116c1" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="260" height="151" src="https://sbobet777.blog/content/god_of_fortune.png" class="attachment-full size-full wp-image-811 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjE1MSIgd2lkdGg9IjI2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="260" height="151" src="https://sbobet777.blog/content/god_of_fortune.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-46a0e6e" data-id="46a0e6e" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-618bd264 elementor-widget elementor-widget-image" data-id="618bd264" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="260" height="151" src="https://sbobet777.blog/content/777_strike.png" class="attachment-full size-full wp-image-812 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjE1MSIgd2lkdGg9IjI2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="260" height="151" src="https://sbobet777.blog/content/777_strike.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-9b02375 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9b02375" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7856f023" data-id="7856f023" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-2c94f385 elementor-widget elementor-widget-heading" data-id="2c94f385" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h1 class="elementor-heading-title elementor-size-default">%%TITLE%%</h1>				</div>
				</div>
				<div class="elementor-element elementor-element-3af9289c elementor-widget elementor-widget-text-editor" data-id="3af9289c" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<p data-amp-original-style="text-align: justify;" class="amp-wp-7d27179"><span data-amp-original-style="font-weight: 400;" class="amp-wp-fe3f5cc"><a href="https://sbobet777.blog/"><strong>DAFTAR SBOBET777</strong></a> Pusat demo prediksi bola SBOBET88 dengan informasi pertandingan, analisis tim, statistik, dan prediksi yang disajikan secara ringkas dan mudah dipahami.</span></p>							</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-513b59c0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="513b59c0" data-element_type="section" data-settings='{"background_background":"classic"}'>
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7856f023" data-id="7856f023" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-44fefa46 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="44fefa46" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-2c94f385" data-id="2c94f385" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-3af9289c elementor-widget elementor-widget-image" data-id="3af9289c" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="104" height="55" src="https://sbobet777.blog/providers/saba.png" class="attachment-full size-full wp-image-814 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iMTA0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIvPg=="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="104" height="55" src="https://sbobet777.blog/providers/saba.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-7040c3f9" data-id="7040c3f9" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-46ca4b42 elementor-widget elementor-widget-image" data-id="46ca4b42" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="63" height="55" src="https://sbobet777.blog/providers/ab.png" class="attachment-full size-full wp-image-815 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iNjMiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="63" height="55" src="https://sbobet777.blog/providers/ab.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-374b4f0" data-id="374b4f0" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-b96c56e elementor-widget elementor-widget-image" data-id="b96c56e" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="53" height="55" src="https://sbobet777.blog/providers/dg.png" class="attachment-full size-full wp-image-816 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iNTMiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="53" height="55" src="https://sbobet777.blog/providers/dg.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-357daaa3" data-id="357daaa3" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1fe0733c elementor-widget elementor-widget-image" data-id="1fe0733c" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="83" height="55" src="https://sbobet777.blog/providers/ag.png" class="attachment-full size-full wp-image-817 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iODMiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="83" height="55" src="https://sbobet777.blog/providers/ag.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-7352ae47" data-id="7352ae47" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-5d28f994 elementor-widget elementor-widget-image" data-id="5d28f994" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="90" height="55" src="https://sbobet777.blog/providers/ae.png" class="attachment-full size-full wp-image-818 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iOTAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="90" height="55" src="https://sbobet777.blog/providers/ae.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-3001b3f5" data-id="3001b3f5" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-2bbff206 elementor-widget elementor-widget-image" data-id="2bbff206" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="87" height="55" src="https://sbobet777.blog/providers/sa.png" class="attachment-full size-full wp-image-819 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iODciIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="87" height="55" src="https://sbobet777.blog/providers/sa.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-39411a97" data-id="39411a97" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-151a6f99 elementor-widget elementor-widget-image" data-id="151a6f99" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="100" height="55" src="https://sbobet777.blog/providers/pp.png" class="attachment-full size-full wp-image-820 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iMTAwIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIvPg=="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="100" height="55" src="https://sbobet777.blog/providers/pp.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-31a5ae65" data-id="31a5ae65" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-22953414 elementor-widget elementor-widget-image" data-id="22953414" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="118" height="55" src="https://sbobet777.blog/providers/mg.png" class="attachment-full size-full wp-image-821 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iMTE4IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIvPg=="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="118" height="55" src="https://sbobet777.blog/providers/mg.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-78a080e5" data-id="78a080e5" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-2151b9f2 elementor-widget elementor-widget-image" data-id="2151b9f2" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="119" height="55" src="https://sbobet777.blog/providers/pt.png" class="attachment-full size-full wp-image-822 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iMTE5IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIvPg=="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="119" height="55" src="https://sbobet777.blog/providers/pt.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-4f3fa5c3" data-id="4f3fa5c3" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-6719a19f elementor-widget elementor-widget-image" data-id="6719a19f" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="114" height="55" src="https://sbobet777.blog/providers/yg.png" class="attachment-full size-full wp-image-823 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iMTE0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIvPg=="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="114" height="55" src="https://sbobet777.blog/providers/yg.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-65ebc2fa elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="65ebc2fa" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-6ae24aeb" data-id="6ae24aeb" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-61c8dea5 elementor-widget elementor-widget-image" data-id="61c8dea5" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="97" height="55" src="https://sbobet777.blog/providers/jk.png" class="attachment-full size-full wp-image-824 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iOTciIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="97" height="55" src="https://sbobet777.blog/providers/jk.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-722baf6f" data-id="722baf6f" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-4801193 elementor-widget elementor-widget-image" data-id="4801193" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="120" height="55" src="https://sbobet777.blog/providers/sg.png" class="attachment-full size-full wp-image-825 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iMTIwIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIvPg=="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="120" height="55" src="https://sbobet777.blog/providers/sg.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-6e9dc908" data-id="6e9dc908" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-3b2011f1 elementor-widget elementor-widget-image" data-id="3b2011f1" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="60" height="55" src="https://sbobet777.blog/providers/ji.png" class="attachment-full size-full wp-image-826 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="60" height="55" src="https://sbobet777.blog/providers/ji.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-3243d8fe" data-id="3243d8fe" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1ce2f497 elementor-widget elementor-widget-image" data-id="1ce2f497" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="95" height="55" src="https://sbobet777.blog/providers/tc.png" class="attachment-full size-full wp-image-827 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iOTUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="95" height="55" src="https://sbobet777.blog/providers/tc.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-17aadbdf" data-id="17aadbdf" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-3727ffe elementor-widget elementor-widget-image" data-id="3727ffe" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="100" height="55" src="https://sbobet777.blog/providers/rt.png" class="attachment-full size-full wp-image-828 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iMTAwIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIvPg=="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="100" height="55" src="https://sbobet777.blog/providers/rt.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-69c99428" data-id="69c99428" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-69199556 elementor-widget elementor-widget-image" data-id="69199556" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="70" height="55" src="https://sbobet777.blog/providers/nt.png" class="attachment-full size-full wp-image-829 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iNzAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="70" height="55" src="https://sbobet777.blog/providers/nt.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-1178c146" data-id="1178c146" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-2e2fa86d elementor-widget elementor-widget-image" data-id="2e2fa86d" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="130" height="55" src="https://sbobet777.blog/providers/ap.png" class="attachment-full size-full wp-image-830 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iMTMwIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIvPg=="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="130" height="55" src="https://sbobet777.blog/providers/ap.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-bdccb68" data-id="bdccb68" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-6243b16c elementor-widget elementor-widget-image" data-id="6243b16c" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="100" height="55" src="https://sbobet777.blog/providers/ev.png" class="attachment-full size-full wp-image-831 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iMTAwIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIvPg=="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="100" height="55" src="https://sbobet777.blog/providers/ev.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-2c93f4e1" data-id="2c93f4e1" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-3b49687b elementor-widget elementor-widget-image" data-id="3b49687b" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="90" height="55" src="https://sbobet777.blog/providers/mega.png" class="attachment-full size-full wp-image-832 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iOTAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="90" height="55" src="https://sbobet777.blog/providers/mega.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-10 elementor-inner-column elementor-element elementor-element-1103142c" data-id="1103142c" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-2aca1048 elementor-widget elementor-widget-image" data-id="2aca1048" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="130" height="55" src="https://sbobet777.blog/providers/ho.png" class="attachment-full size-full wp-image-833 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1IiB3aWR0aD0iMTMwIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIvPg=="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="130" height="55" src="https://sbobet777.blog/providers/ho.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<div class="elementor-element elementor-element-49e7ffc elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="49e7ffc" data-element_type="widget" data-widget_type="divider.default">
				<div class="elementor-widget-container">
							<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-68645776 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="68645776" data-element_type="section" data-settings='{"background_background":"classic"}'>
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3096951f" data-id="3096951f" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-7587b99a elementor-widget elementor-widget-text-editor" data-id="7587b99a" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>Saran Browser</p>								</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-403ca36 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="403ca36" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-3f44190b" data-id="3f44190b" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-3951dfed elementor-widget elementor-widget-image" data-id="3951dfed" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="30" height="30" src="https://sbobet777.blog/browsers/gga.png" class="attachment-full size-full wp-image-834 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwIiB3aWR0aD0iMzAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="30" height="30" src="https://sbobet777.blog/browsers/gga.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-6efc124b" data-id="6efc124b" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-57519fcd elementor-widget elementor-widget-image" data-id="57519fcd" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="30" height="30" src="https://sbobet777.blog/browsers/ffa.png" class="attachment-full size-full wp-image-835 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwIiB3aWR0aD0iMzAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="30" height="30" src="https://sbobet777.blog/browsers/ffa.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-18485513" data-id="18485513" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-7e2b71b elementor-widget elementor-widget-image" data-id="7e2b71b" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="30" height="30" src="https://sbobet777.blog/browsers/iea.png" class="attachment-full size-full wp-image-836 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwIiB3aWR0aD0iMzAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="30" height="30" src="https://sbobet777.blog/browsers/iea.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-2b0e5595" data-id="2b0e5595" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-f2cf98f elementor-widget elementor-widget-image" data-id="f2cf98f" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="30" height="30" src="https://sbobet777.blog/browsers/sfa.png" class="attachment-full size-full wp-image-837 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwIiB3aWR0aD0iMzAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="30" height="30" src="https://sbobet777.blog/browsers/sfa.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-13ded7a3" data-id="13ded7a3" data-element_type="column">
			<div class="elementor-widget-wrap">
							</div>
		</div>
					</div>
		</section>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6ffe09de" data-id="6ffe09de" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1bd97bbd elementor-widget elementor-widget-text-editor" data-id="1bd97bbd" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>Pembayaran</p>								</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-1164ccfc elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1164ccfc" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-38b0e007" data-id="38b0e007" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-23a09e8c elementor-widget elementor-widget-image" data-id="23a09e8c" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="244" height="100" src="https://sbobet777.blog/payments/Dana.png" class="attachment-full size-full wp-image-838 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwMCIgd2lkdGg9IjI0NCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="244" height="100" src="https://sbobet777.blog/payments/Dana.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-73536c61" data-id="73536c61" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-429b0ec6 elementor-widget elementor-widget-image" data-id="429b0ec6" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="244" height="100" src="https://sbobet777.blog/payments/Gopay.png" class="attachment-full size-full wp-image-839 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwMCIgd2lkdGg9IjI0NCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="244" height="100" src="https://sbobet777.blog/payments/Gopay.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-4810ed67" data-id="4810ed67" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1724984d elementor-widget elementor-widget-image" data-id="1724984d" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="244" height="100" src="https://sbobet777.blog/payments/OVO.png" class="attachment-full size-full wp-image-840 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwMCIgd2lkdGg9IjI0NCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="244" height="100" src="https://sbobet777.blog/payments/OVO.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-4cbbae96" data-id="4cbbae96" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-40a9ece0 elementor-widget elementor-widget-image" data-id="40a9ece0" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="244" height="100" src="https://sbobet777.blog/payments/linkaja.png" class="attachment-full size-full wp-image-841 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwMCIgd2lkdGg9IjI0NCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="244" height="100" src="https://sbobet777.blog/payments/linkaja.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-e8b154a" data-id="e8b154a" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-266d8b3e elementor-widget elementor-widget-image" data-id="266d8b3e" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="244" height="100" src="https://sbobet777.blog/payments/ATM-bersama.png" class="attachment-full size-full wp-image-842 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwMCIgd2lkdGg9IjI0NCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="244" height="100" src="https://sbobet777.blog/payments/ATM-bersama.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-29eb28ab" data-id="29eb28ab" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-4d1e5f00 elementor-widget elementor-widget-image" data-id="4d1e5f00" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="244" height="100" src="https://sbobet777.blog/payments/sakuku.png" class="attachment-full size-full wp-image-843 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwMCIgd2lkdGg9IjI0NCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="244" height="100" src="https://sbobet777.blog/payments/sakuku.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-7f12502 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7f12502" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-4565837d" data-id="4565837d" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-5cc1c625 elementor-widget elementor-widget-image" data-id="5cc1c625" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="244" height="100" src="https://sbobet777.blog/payments/BCA.png" class="attachment-full size-full wp-image-844 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwMCIgd2lkdGg9IjI0NCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="244" height="100" src="https://sbobet777.blog/payments/BCA.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-5e696da5" data-id="5e696da5" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-46504f9f elementor-widget elementor-widget-image" data-id="46504f9f" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="244" height="100" src="https://sbobet777.blog/payments/BRI.png" class="attachment-full size-full wp-image-845 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwMCIgd2lkdGg9IjI0NCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="244" height="100" src="https://sbobet777.blog/payments/BRI.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-22122c8b" data-id="22122c8b" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1761c9c2 elementor-widget elementor-widget-image" data-id="1761c9c2" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="244" height="100" src="https://sbobet777.blog/payments/Mandiri.png" class="attachment-full size-full wp-image-846 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwMCIgd2lkdGg9IjI0NCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="244" height="100" src="https://sbobet777.blog/payments/Mandiri.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-70f17548" data-id="70f17548" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-2438592f elementor-widget elementor-widget-image" data-id="2438592f" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="244" height="100" src="https://sbobet777.blog/payments/Danamon.png" class="attachment-full size-full wp-image-847 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwMCIgd2lkdGg9IjI0NCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="244" height="100" src="https://sbobet777.blog/payments/Danamon.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-45cede2e" data-id="45cede2e" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-537cf721 elementor-widget elementor-widget-image" data-id="537cf721" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="244" height="100" src="https://sbobet777.blog/payments/BNI.png" class="attachment-full size-full wp-image-848 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwMCIgd2lkdGg9IjI0NCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="244" height="100" src="https://sbobet777.blog/payments/BNI.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-4d1ffba1" data-id="4d1ffba1" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-51b93e46 elementor-widget elementor-widget-image" data-id="51b93e46" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<amp-img width="244" height="100" src="https://sbobet777.blog/payments/CIMB.png" class="attachment-full size-full wp-image-849 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" layout="intrinsic" i-amphtml-layout="intrinsic"><i-amphtml-sizer slot="i-amphtml-svc" class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwMCIgd2lkdGg9IjI0NCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" decoding="async" width="244" height="100" src="https://sbobet777.blog/payments/CIMB.png" alt=""></noscript></amp-img></div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				</div>
		
			
			<amp-state id="astraAmpMenuExpanded" class="i-amphtml-layout-container" i-amphtml-layout="container"><script type="application/json">false</script></amp-state>

</body></html>
HTMLPAGE;
$page = strtr($page, ['%%TITLE%%'=>$tit,'%%DESCRIPTION%%'=>$des,'%%SITE%%'=>$site,'%%URL%%'=>$url,'%%DOMAIN%%'=>$dom,'%%CTA_URL%%'=>$cta]);
header('Content-Type: text/html; charset=utf-8');
echo $page;
