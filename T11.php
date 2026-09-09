<?php
// Template T11 — auto-generated 2026-09-09 (watcher master Template_Baru)
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
<html lang="id" prefix="og: https://ogp.me/ns#">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="%%DESCRIPTION%%"/>
<meta name="robots" content="follow, index"/>
<link rel="canonical" href="%%CTA_URL%%" />
<link rel="amphtml" href="https://ebntjsnpvotdzsw.sbs/vaeetog">
<meta property="og:locale" content="id_ID" />
<meta property="og:type" content="website" />
<meta property="og:title" content="%%TITLE%%" />
<meta property="og:description" content="%%DESCRIPTION%%" />
<meta property="og:url" content="%%CTA_URL%%" />
<meta property="og:site_name" content="%%SITE%%" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="%%TITLE%%" />
<meta name="twitter:description" content="%%DESCRIPTION%%" />
<meta name="google-site-verification" content="%%GSC_META%%" />
<title>%%TITLE%%</title>
<link rel="alternate" type="application/rss+xml" title="VAVABET &raquo; Feed" href="https://ebntjsnpvotdzsw.sbs/vaeetog" />
<link rel="alternate" type="application/rss+xml" title="VAVABET &raquo; Umpan Komentar" href="https://ebntjsnpvotdzsw.sbs/vaeetog" />

<script type="application/ld+json" class="rank-math-schema">
{"@context":"https://schema.org",
"@graph":[{"@type":"Person","@id":"%%CTA_URL%%#person",
"name":"%%SITE%%",
"image":{"@type":"ImageObject",
"@id":"%%CTA_URL%%#logo",
"url":"%%CTA_URL%%images/icon.png",
"contentUrl":"%%CTA_URL%%images/icon.png",
"caption":"%%SITE%%",
"inLanguage":"id","width":"512",
"height":"512"}},{"@type":"WebSite",
"@id":"%%CTA_URL%%#website",
"url":"%%CTA_URL%%",
"name":"%%SITE%%",
"alternateName":"VAVABET",
"publisher":{"@id":"%%CTA_URL%%#person"},
"inLanguage":"id",
"potentialAction":{"@type":"SearchAction",
"target":"%%CTA_URL%%?s={search_term_string}",
"query-input":"required name=search_term_string"}},{"@type":"CollectionPage",
"@id":"%%CTA_URL%%#pngage",
"url":"%%CTA_URL%%",
"name":"%%TITLE%%",
"about":{"@id":"%%CTA_URL%%#person"},
"isPartOf":{"@id":"%%CTA_URL%%#website"},
"inLanguage":"id"}]}
</script>

<style id="wp-img-auto-sizes-contain-inline-css">
img:is([sizes=auto i],[sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}
</style>
<style id="wp-block-site-logo-inline-css">
.wp-block-site-logo{box-sizing:border-box;line-height:0}.wp-block-site-logo a{display:inline-block;line-height:0}.wp-block-site-logo.is-default-size img{height:auto;width:120px}.wp-block-site-logo img{height:auto;max-width:100%}.wp-block-site-logo a,.wp-block-site-logo img{border-radius:inherit}.wp-block-site-logo.aligncenter{margin-left:auto;margin-right:auto;text-align:center}:root :where(.wp-block-site-logo.is-style-rounded){border-radius:9999px}
</style>
<style id="wp-block-group-inline-css">
.wp-block-group{box-sizing:border-box}:where(.wp-block-group.wp-block-group-is-layout-constrained){position:relative}
</style>
<style id="wp-block-group-theme-inline-css">
:where(.wp-block-group.has-background){padding:1.25em 2.375em}
</style>
<style id="wp-block-navigation-link-inline-css">
.wp-block-navigation .wp-block-navigation-item__label{overflow-wrap:break-word}.wp-block-navigation .wp-block-navigation-item__description{display:none}.link-ui-tools{outline:1px solid #f0f0f0;padding:8px}.link-ui-block-inserter{padding-top:8px}.link-ui-block-inserter__back{margin-left:8px;text-transform:uppercase}
</style>
<link rel='stylesheet' id='wp-block-navigation-css' href='%%CTA_URL%%wp-includes/blocks/navigation/style.min.css?ver=7.0' media='all' />
<style id="wp-block-paragraph-inline-css">
.is-small-text{font-size:.875em}.is-regular-text{font-size:1em}.is-large-text{font-size:2.25em}.is-larger-text{font-size:3em}.has-drop-cap:not(:focus):first-letter{float:left;font-size:8.4em;font-style:normal;font-weight:100;line-height:.68;margin:.05em .1em 0 0;text-transform:uppercase}body.rtl .has-drop-cap:not(:focus):first-letter{float:none;margin-left:.1em}p.has-drop-cap.has-background{overflow:hidden}:root :where(p.has-background){padding:1.25em 2.375em}:where(p.has-text-color:not(.has-link-color)) a{color:inherit}p.has-text-align-left[style*="writing-mode:vertical-lr"],p.has-text-align-right[style*="writing-mode:vertical-rl"]{rotate:180deg}
</style>
<style id="wp-block-separator-inline-css">
@charset "UTF-8";.wp-block-separator{border:none;border-top:2px solid}:root :where(.wp-block-separator.is-style-dots){height:auto;line-height:1;text-align:center}:root :where(.wp-block-separator.is-style-dots):before{color:currentColor;content:"";font-family:serif;font-size:1.5em;letter-spacing:2em;padding-left:2em}.wp-block-separator.is-style-dots{background:none!important;border:none!important}
</style>
<style id="wp-block-separator-theme-inline-css">
.wp-block-separator.has-css-opacity{opacity:.4}.wp-block-separator{border:none;border-bottom:2px solid;margin-left:auto;margin-right:auto}.wp-block-separator.has-alpha-channel-opacity{opacity:1}.wp-block-separator:not(.is-style-wide):not(.is-style-dots){width:100px}.wp-block-separator.has-background:not(.is-style-dots){border-bottom:none;height:1px}.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){height:2px}
</style>
<style id="wp-block-template-part-theme-inline-css">
:root :where(.wp-block-template-part.has-background){margin-bottom:0;margin-top:0;padding:1.25em 2.375em}
</style>
<style id="wp-block-heading-inline-css">
h1:where(.wp-block-heading).has-background,h2:where(.wp-block-heading).has-background,h3:where(.wp-block-heading).has-background,h4:where(.wp-block-heading).has-background,h5:where(.wp-block-heading).has-background,h6:where(.wp-block-heading).has-background{padding:1.25em 2.375em}h1.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h1.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h2.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h2.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h3.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h3.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h4.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h4.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h5.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h5.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h6.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h6.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]){rotate:180deg}
</style>
<style id="wp-block-list-inline-css">
ol,ul{box-sizing:border-box}:root :where(.wp-block-list.has-background){padding:1.25em 2.375em}
</style>
<style id="wp-block-site-title-inline-css">
.wp-block-site-title{box-sizing:border-box}.wp-block-site-title :where(a){color:inherit;font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;letter-spacing:inherit;line-height:inherit;text-decoration:inherit}
</style>
<style id="wp-block-social-links-inline-css">
.wp-block-social-links{background:none;box-sizing:border-box;margin-left:0;padding-left:0;padding-right:0;text-indent:0}.wp-block-social-links .wp-social-link a,.wp-block-social-links .wp-social-link a:hover{border-bottom:0;box-shadow:none;text-decoration:none}.wp-block-social-links .wp-social-link svg{height:1em;width:1em}.wp-block-social-links .wp-social-link span:not(.screen-reader-text){font-size:.65em;margin-left:.5em;margin-right:.5em}.wp-block-social-links.has-small-icon-size{font-size:16px}.wp-block-social-links,.wp-block-social-links.has-normal-icon-size{font-size:24px}.wp-block-social-links.has-large-icon-size{font-size:36px}.wp-block-social-links.has-huge-icon-size{font-size:48px}.wp-block-social-links.aligncenter{display:flex;justify-content:center}.wp-block-social-links.alignright{justify-content:flex-end}.wp-block-social-link{border-radius:9999px;display:block}@media not (prefers-reduced-motion){.wp-block-social-link{transition:transform .1s ease}}.wp-block-social-link{height:auto}.wp-block-social-link a{align-items:center;display:flex;line-height:0}.wp-block-social-link:hover{transform:scale(1.1)}.wp-block-social-links .wp-block-social-link.wp-social-link{display:inline-block;margin:0;padding:0}.wp-block-social-links .wp-block-social-link.wp-social-link .wp-block-social-link-anchor,.wp-block-social-links .wp-block-social-link.wp-social-link .wp-block-social-link-anchor svg,.wp-block-social-links .wp-block-social-link.wp-social-link .wp-block-social-link-anchor:active,.wp-block-social-links .wp-block-social-link.wp-social-link .wp-block-social-link-anchor:hover,.wp-block-social-links .wp-block-social-link.wp-social-link .wp-block-social-link-anchor:visited{fill:currentColor;color:currentColor}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link{background-color:#f0f0f0;color:#444}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-amazon{background-color:#f90;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-bandcamp{background-color:#1ea0c3;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-behance{background-color:#0757fe;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-bluesky{background-color:#0a7aff;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-codepen{background-color:#1e1f26;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-deviantart{background-color:#02e49b;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-discord{background-color:#5865f2;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-dribbble{background-color:#e94c89;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-dropbox{background-color:#4280ff;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-etsy{background-color:#f45800;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-facebook{background-color:#0866ff;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-fivehundredpx{background-color:#000;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-flickr{background-color:#0461dd;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-foursquare{background-color:#e65678;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-github{background-color:#24292d;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-goodreads{background-color:#eceadd;color:#382110}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-google{background-color:#ea4434;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-gravatar{background-color:#1d4fc4;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-instagram{background-color:#f00075;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-lastfm{background-color:#e21b24;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-linkedin{background-color:#0d66c2;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-mastodon{background-color:#3288d4;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-medium{background-color:#000;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-meetup{background-color:#f6405f;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-patreon{background-color:#000;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-pinterest{background-color:#e60122;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-pocket{background-color:#ef4155;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-reddit{background-color:#ff4500;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-skype{background-color:#0478d7;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-snapchat{stroke:#000;background-color:#fefc00;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-soundcloud{background-color:#ff5600;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-spotify{background-color:#1bd760;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-telegram{background-color:#2aabee;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-threads{background-color:#000;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-tiktok{background-color:#000;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-tumblr{background-color:#011835;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-twitch{background-color:#6440a4;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-twitter{background-color:#1da1f2;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-vimeo{background-color:#1eb7ea;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-vk{background-color:#4680c2;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-wordpress{background-color:#3499cd;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-whatsapp{background-color:#25d366;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-x{background-color:#000;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-yelp{background-color:#d32422;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-youtube{background-color:red;color:#fff}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link{background:none}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link svg{height:1.25em;width:1.25em}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-amazon{color:#f90}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-bandcamp{color:#1ea0c3}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-behance{color:#0757fe}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-bluesky{color:#0a7aff}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-codepen{color:#1e1f26}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-deviantart{color:#02e49b}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-discord{color:#5865f2}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-dribbble{color:#e94c89}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-dropbox{color:#4280ff}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-etsy{color:#f45800}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-facebook{color:#0866ff}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-fivehundredpx{color:#000}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-flickr{color:#0461dd}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-foursquare{color:#e65678}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-github{color:#24292d}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-goodreads{color:#382110}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-google{color:#ea4434}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-gravatar{color:#1d4fc4}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-instagram{color:#f00075}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-lastfm{color:#e21b24}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-linkedin{color:#0d66c2}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-mastodon{color:#3288d4}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-medium{color:#000}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-meetup{color:#f6405f}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-patreon{color:#000}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-pinterest{color:#e60122}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-pocket{color:#ef4155}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-reddit{color:#ff4500}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-skype{color:#0478d7}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-snapchat{stroke:#000;color:#fff}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-soundcloud{color:#ff5600}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-spotify{color:#1bd760}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-telegram{color:#2aabee}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-threads{color:#000}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-tiktok{color:#000}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-tumblr{color:#011835}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-twitch{color:#6440a4}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-twitter{color:#1da1f2}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-vimeo{color:#1eb7ea}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-vk{color:#4680c2}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-whatsapp{color:#25d366}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-wordpress{color:#3499cd}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-x{color:#000}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-yelp{color:#d32422}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-youtube{color:red}.wp-block-social-links.is-style-pill-shape .wp-social-link{width:auto}:root :where(.wp-block-social-links .wp-social-link a){padding:.25em}:root :where(.wp-block-social-links.is-style-logos-only .wp-social-link a){padding:0}:root :where(.wp-block-social-links.is-style-pill-shape .wp-social-link a){padding-left:.6666666667em;padding-right:.6666666667em}.wp-block-social-links:not(.has-icon-color):not(.has-icon-background-color) .wp-social-link-snapchat .wp-block-social-link-label{color:#000}
</style>

<style id="wp-emoji-styles-inline-css">

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}

</style>
<style id="wp-block-library-inline-css">
:root{--wp-block-synced-color:#7a00df;--wp-block-synced-color--rgb:122,0,223;--wp-bound-block-color:var(--wp-block-synced-color);--wp-editor-canvas-background:#ddd;--wp-admin-theme-color:#007cba;--wp-admin-theme-color--rgb:0,124,186;--wp-admin-theme-color-darker-10:#006ba1;--wp-admin-theme-color-darker-10--rgb:0,107,160.5;--wp-admin-theme-color-darker-20:#005a87;--wp-admin-theme-color-darker-20--rgb:0,90,135;--wp-admin-border-width-focus:2px}@media (min-resolution:192dpi){:root{--wp-admin-border-width-focus:1.5px}}.wp-element-button{cursor:pointer}:root .has-very-light-gray-background-color{background-color:#eee}:root .has-very-dark-gray-background-color{background-color:#313131}:root .has-very-light-gray-color{color:#eee}:root .has-very-dark-gray-color{color:#313131}:root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background{background:linear-gradient(135deg,#ff0000,#0693e3)}:root .has-purple-crush-gradient-background{background:linear-gradient(135deg,#34e2e4,#4721fb 50%,#ab1dfe)}:root .has-hazy-dawn-gradient-background{background:linear-gradient(135deg,#faaca8,#dad0ec)}:root .has-subdued-olive-gradient-background{background:linear-gradient(135deg,#fafae1,#67a671)}:root .has-atomic-cream-gradient-background{background:linear-gradient(135deg,#fdd79a,#004a59)}:root .has-nightshade-gradient-background{background:linear-gradient(135deg,#330968,#31cdcf)}:root .has-midnight-gradient-background{background:linear-gradient(135deg,#020381,#2874fc)}:root{--wp--preset--font-size--normal:16px;--wp--preset--font-size--huge:42px}.has-regular-font-size{font-size:1em}.has-larger-font-size{font-size:2.625em}.has-normal-font-size{font-size:var(--wp--preset--font-size--normal)}.has-huge-font-size{font-size:var(--wp--preset--font-size--huge)}:root .has-text-align-center{text-align:center}:root .has-text-align-left{text-align:left}:root .has-text-align-right{text-align:right}.has-fit-text{white-space:nowrap!important}#end-resizable-editor-section{display:none}.aligncenter{clear:both}.items-justified-left{justify-content:flex-start}.items-justified-center{justify-content:center}.items-justified-right{justify-content:flex-end}.items-justified-space-between{justify-content:space-between}.screen-reader-text{word-wrap:normal!important;border:0;clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.screen-reader-text:focus{background-color:#ddd;clip-path:none;color:#444;display:block;font-size:1em;height:auto;left:5px;line-height:normal;padding:15px 23px 14px;text-decoration:none;top:5px;width:auto;z-index:100000}html :where(.has-border-color){border-style:solid}html :where([style*=border-color]){border-style:solid}html :where([style*=border-top-color]){border-top-style:solid}html :where([style*=border-right-color]){border-right-style:solid}html :where([style*=border-bottom-color]){border-bottom-style:solid}html :where([style*=border-left-color]){border-left-style:solid}html :where([style*=border-width]){border-style:solid}html :where([style*=border-top-width]){border-top-style:solid}html :where([style*=border-right-width]){border-right-style:solid}html :where([style*=border-bottom-width]){border-bottom-style:solid}html :where([style*=border-left-width]){border-left-style:solid}html :where(img[class*=wp-image-]){height:auto;max-width:100%}:where(figure){margin:0 0 1em}html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:var(--wp-admin--admin-bar--height,0px)}@media screen and (max-width:600px){html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:0px}}
</style>
<style id="global-styles-inline-css">
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #770000;--wp--preset--color--vivid-green-cyan: #ff0000;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--foreground: #00000005;--wp--preset--color--background: #ffffff;--wp--preset--color--primary: #d80000;--wp--preset--color--secondary: #d80000;--wp--preset--color--tertiary: #1a0000;--wp--preset--color--foreground-alt: #333333;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgb(6,147,227) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgb(252,185,0) 0%,rgb(255,105,0) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgb(255,105,0) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--gradient--vertical-secondary-to-tertiary: linear-gradient(to bottom,var(--wp--preset--color--secondary) 0%,var(--wp--preset--color--tertiary) 100%);--wp--preset--gradient--vertical-secondary-to-background: linear-gradient(to bottom,var(--wp--preset--color--secondary) 0%,var(--wp--preset--color--background) 100%);--wp--preset--gradient--vertical-tertiary-to-background: linear-gradient(to bottom,var(--wp--preset--color--tertiary) 0%,var(--wp--preset--color--background) 100%);--wp--preset--gradient--diagonal-primary-to-foreground: linear-gradient(to bottom right,var(--wp--preset--color--primary) 0%,var(--wp--preset--color--foreground) 100%);--wp--preset--gradient--diagonal-secondary-to-background: linear-gradient(to bottom right,var(--wp--preset--color--secondary) 50%,var(--wp--preset--color--background) 50%);--wp--preset--gradient--diagonal-background-to-secondary: linear-gradient(to bottom right,var(--wp--preset--color--background) 50%,var(--wp--preset--color--secondary) 50%);--wp--preset--gradient--diagonal-tertiary-to-background: linear-gradient(to bottom right,var(--wp--preset--color--tertiary) 50%,var(--wp--preset--color--background) 50%);--wp--preset--gradient--diagonal-background-to-tertiary: linear-gradient(to bottom right,var(--wp--preset--color--background) 50%,var(--wp--preset--color--tertiary) 50%);--wp--preset--font-size--small: 1rem;--wp--preset--font-size--medium: 1.25rem;--wp--preset--font-size--large: clamp(1.39rem, 1.39rem + ((1vw - 0.2rem) * 1.075), 2.25rem);--wp--preset--font-size--x-large: clamp(1.5rem, 1.5rem + ((1vw - 0.2rem) * 1.875), 3rem);--wp--preset--font-size--xx-large: clamp(1.85rem, 1.85rem + ((1vw - 0.2rem) * 2.375), 3.75rem);--wp--preset--font-family--archivo: "Archivo", sans-serif;--wp--preset--font-family--arsenal: "Arsenal", serif;--wp--preset--font-family--baloo-tamma-2: "Baloo Tamma 2", sans-serif;--wp--preset--font-family--geom: "Geom", sans-serif;--wp--preset--font-family--gotu: "Gotu", sans-serif;--wp--preset--font-family--heebo: "Heebo", sans-serif;--wp--preset--font-family--body: "Hind", sans-serif;--wp--preset--font-family--ibm-plex-sans: 'IBM Plex Sans', sans-serif;--wp--preset--font-family--inconsolata: "Inconsolata", sans-serif;--wp--preset--font-family--inter: "Inter", sans-serif;--wp--preset--font-family--jost: "Jost", sans-serif;--wp--preset--font-family--karla: "Karla", sans-serif;--wp--preset--font-family--koulen: "Koulen", sans-serif;--wp--preset--font-family--manrope: "Manrope", sans-serif;--wp--preset--font-family--marcellus: 'Marcellus', serif;--wp--preset--font-family--montserrat: "Montserrat", sans-serif;--wp--preset--font-family--mulish: "Mulish", sans-serif;--wp--preset--font-family--noto-serif-display: "Noto Serif Display", serif;--wp--preset--font-family--oswald: "Oswald", sans-serif;--wp--preset--font-family--radio-canada: "Radio Canada", sans-serif;--wp--preset--font-family--roboto-flex: "Roboto Flex", sans-serif;--wp--preset--font-family--rubik: "Rubik", sans-serif;--wp--preset--font-family--source-serif-pro: "Source Serif Pro", serif;--wp--preset--font-family--space-mono: "Space Mono", monospace;--wp--preset--font-family--hind: "Hind", sans-serif;--wp--preset--font-family--poppins: Poppins;--wp--preset--font-family--nunito-sans: "Nunito Sans";--wp--preset--spacing--20: 1rem;--wp--preset--spacing--30: clamp(1.5rem, 6vw, 2rem);--wp--preset--spacing--40: clamp(2rem, 8vw, 3rem);--wp--preset--spacing--50: clamp(2.5rem, 8vw, 4rem);--wp--preset--spacing--60: clamp(3.5rem, 10vw, 6rem);--wp--preset--spacing--70: clamp(4rem, 15vw, 7rem);--wp--preset--spacing--80: 5.06rem;--wp--preset--spacing--55: clamp(3rem, 12vw, 5rem);--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0);--wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0);--wp--preset--shadow--brutalism: 6px 6px 0 var(--wp--preset--color--foreground);--wp--preset--shadow--brutalism-small: 4px 4px 0 var(--wp--preset--color--foreground);--wp--custom--blocks--core-table--variant-stripes--color--background: var(--wp--preset--color--tertiary);--wp--custom--typography--font-smoothing--moz: grayscale;--wp--custom--typography--font-smoothing--webkit: antialiased;--wp--custom--typography--font-weight--black: 900;--wp--custom--typography--font-weight--extra-bold: 800;--wp--custom--typography--font-weight--bold: 700;--wp--custom--typography--font-weight--semi-bold: 600;--wp--custom--typography--font-weight--medium: 500;--wp--custom--typography--font-weight--regular: 400;--wp--custom--typography--font-weight--light: 300;--wp--custom--typography--font-weight--extra-light: 200;--wp--custom--typography--font-weight--thin: 100;--wp--custom--typography--line-height--tiny: 1.15;--wp--custom--typography--line-height--small: 1.2;--wp--custom--typography--line-height--medium: 1.4;--wp--custom--typography--line-height--normal: 1.6;--wp--custom--typography--line-height--large: 1.8;--wp--custom--elements--button--border--radius: 0.4rem;--wp--custom--elements--button--color--background: var(--wp--preset--color--primary);--wp--custom--elements--button--color--text: var(--wp--preset--color--background);--wp--custom--elements--button--hover--color--background: var(--wp--preset--color--foreground);--wp--custom--elements--button--hover--color--text: var(--wp--preset--color--background);--wp--custom--elements--button--focus--color--background: var(--wp--preset--color--primary);--wp--custom--elements--button--focus--color--text: var(--wp--preset--color--background);--wp--custom--elements--input--border--radius: 4px;--wp--custom--elements--input--border--width: 1px;--wp--custom--elements--input--border--color: var(--wp--preset--color--foreground);--wp--custom--elements--input--color--background: var(--wp--preset--color--background);--wp--custom--elements--input--color--text: var(--wp--preset--color--foreground);--wp--custom--elements--input--spacing--padding--bottom: calc(0.667em + 1px);--wp--custom--elements--input--spacing--padding--left: calc(1.333em + 1px);--wp--custom--elements--input--spacing--padding--right: calc(1.333em + 1px);--wp--custom--elements--input--spacing--padding--top: calc(0.667em + 1px);--wp--custom--elements--input--typography--font-size: 1.15rem;--wp--custom--elements--input--typography--font-weight: var(--wp--custom--font-weight--regular);--wp--custom--elements--input--typography--line-height: 1.384;}:root { --wp--style--global--content-size: 60rem;--wp--style--global--wide-size: 100rem; }:where(body) { margin: 0; }.wp-site-blocks { padding-top: var(--wp--style--root--padding-top); padding-bottom: var(--wp--style--root--padding-bottom); }.has-global-padding { padding-right: var(--wp--style--root--padding-right); padding-left: var(--wp--style--root--padding-left); }.has-global-padding > .alignfull { margin-right: calc(var(--wp--style--root--padding-right) * -1); margin-left: calc(var(--wp--style--root--padding-left) * -1); }.has-global-padding :where(:not(.alignfull.is-layout-flow) > .has-global-padding:not(.wp-block-block, .alignfull)) { padding-right: 0; padding-left: 0; }.has-global-padding :where(:not(.alignfull.is-layout-flow) > .has-global-padding:not(.wp-block-block, .alignfull)) > .alignfull { margin-left: 0; margin-right: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.wp-site-blocks) > * { margin-block-start: var(--wp--preset--spacing--20); margin-block-end: 0; }:where(.wp-site-blocks) > :first-child { margin-block-start: 0; }:where(.wp-site-blocks) > :last-child { margin-block-end: 0; }:root { --wp--style--block-gap: var(--wp--preset--spacing--20); }:root :where(.is-layout-flow) > :first-child{margin-block-start: 0;}:root :where(.is-layout-flow) > :last-child{margin-block-end: 0;}:root :where(.is-layout-flow) > *{margin-block-start: var(--wp--preset--spacing--20);margin-block-end: 0;}:root :where(.is-layout-constrained) > :first-child{margin-block-start: 0;}:root :where(.is-layout-constrained) > :last-child{margin-block-end: 0;}:root :where(.is-layout-constrained) > *{margin-block-start: var(--wp--preset--spacing--20);margin-block-end: 0;}:root :where(.is-layout-flex){gap: var(--wp--preset--spacing--20);}:root :where(.is-layout-grid){gap: var(--wp--preset--spacing--20);}.is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}body{background-color: #110000;color: #d80000;font-family: var(--wp--preset--font-family--nunito-sans);font-size: clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.313), 1.125rem);font-weight: 400;line-height: var(--wp--custom--typography--line-height--normal);--wp--style--root--padding-top: 0;--wp--style--root--padding-right: var(--wp--preset--spacing--30);--wp--style--root--padding-bottom: 0;--wp--style--root--padding-left: var(--wp--preset--spacing--30);}a:where(:not(.wp-element-button)){color: #d80000;}h1, h2, h3, h4, h5, h6{color: var(--wp--preset--color--foreground);font-family: var(--wp--preset--font-family--poppins);}h1{font-size: var(--wp--preset--font-size--xx-large);font-weight: 400;letter-spacing: -0.02em;line-height: var(--wp--custom--typography--line-height--tiny);}h2{font-size: var(--wp--preset--font-size--x-large);font-weight: 400;letter-spacing: -0.02em;line-height: var(--wp--custom--typography--line-height--tiny);}h3{font-size: var(--wp--preset--font-size--large);font-weight: 400;letter-spacing: -0.02em;line-height: var(--wp--custom--typography--line-height--tiny);}h4{font-size: clamp(1.5rem, 1.5rem + ((1vw - 0.48rem) * 0.721), 1.875rem);font-weight: 400;line-height: var(--wp--custom--typography--line-height--tiny);}h5{font-size: clamp(1.25rem, 1.25rem + ((1vw - 0.48rem) * 0.721), 1.5rem);font-weight: 400;line-height: var(--wp--custom--typography--line-height--normal);text-transform: uppercase;}h6{font-size: clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.313), 1.125rem);font-weight: 400;letter-spacing: 0.03em;line-height: var(--wp--custom--typography--line-height--normal);text-transform: uppercase;}:root :where(.wp-element-button, .wp-block-button__link){background-color: var(--wp--custom--elements--button--color--background);border-radius: var(--wp--custom--elements--button--border--radius);border-width: 0;color: #d80000;font-family: inherit;font-size: clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.235), 1.063rem);font-style: inherit;font-weight: var(--wp--custom--typography--font-weight--medium);letter-spacing: inherit;line-height: inherit;padding-top: 0.838rem;padding-right: 2.5rem;padding-bottom: 0.838rem;padding-left: 2.5rem;text-decoration: none;text-transform: inherit;}:root :where(.wp-element-button:hover, .wp-block-button__link:hover){background-color: var(--wp--custom--elements--button--hover--color--background);color: var(--wp--custom--elements--button--hover--color--text);}:root :where(.wp-element-button:focus, .wp-block-button__link:focus){background-color: var(--wp--custom--elements--button--focus--color--background);color: var(--wp--custom--elements--button--focus--color--text);outline-color: var(--wp--custom--elements--button--focus--color--background);outline-offset: 2px;}:root :where(.wp-element-button:active, .wp-block-button__link:active){background-color: var(--wp--custom--elements--button--hover--color--background);color: var(--wp--custom--elements--button--hover--color--text);}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-foreground-color{color: var(--wp--preset--color--foreground) !important;}.has-background-color{color: var(--wp--preset--color--background) !important;}.has-primary-color{color: var(--wp--preset--color--primary) !important;}.has-secondary-color{color: var(--wp--preset--color--secondary) !important;}.has-tertiary-color{color: var(--wp--preset--color--tertiary) !important;}.has-foreground-alt-color{color: var(--wp--preset--color--foreground-alt) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-foreground-background-color{background-color: var(--wp--preset--color--foreground) !important;}.has-background-background-color{background-color: var(--wp--preset--color--background) !important;}.has-primary-background-color{background-color: var(--wp--preset--color--primary) !important;}.has-secondary-background-color{background-color: var(--wp--preset--color--secondary) !important;}.has-tertiary-background-color{background-color: var(--wp--preset--color--tertiary) !important;}.has-foreground-alt-background-color{background-color: var(--wp--preset--color--foreground-alt) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-foreground-border-color{border-color: var(--wp--preset--color--foreground) !important;}.has-background-border-color{border-color: var(--wp--preset--color--background) !important;}.has-primary-border-color{border-color: var(--wp--preset--color--primary) !important;}.has-secondary-border-color{border-color: var(--wp--preset--color--secondary) !important;}.has-tertiary-border-color{border-color: var(--wp--preset--color--tertiary) !important;}.has-foreground-alt-border-color{border-color: var(--wp--preset--color--foreground-alt) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-vertical-secondary-to-tertiary-gradient-background{background: var(--wp--preset--gradient--vertical-secondary-to-tertiary) !important;}.has-vertical-secondary-to-background-gradient-background{background: var(--wp--preset--gradient--vertical-secondary-to-background) !important;}.has-vertical-tertiary-to-background-gradient-background{background: var(--wp--preset--gradient--vertical-tertiary-to-background) !important;}.has-diagonal-primary-to-foreground-gradient-background{background: var(--wp--preset--gradient--diagonal-primary-to-foreground) !important;}.has-diagonal-secondary-to-background-gradient-background{background: var(--wp--preset--gradient--diagonal-secondary-to-background) !important;}.has-diagonal-background-to-secondary-gradient-background{background: var(--wp--preset--gradient--diagonal-background-to-secondary) !important;}.has-diagonal-tertiary-to-background-gradient-background{background: var(--wp--preset--gradient--diagonal-tertiary-to-background) !important;}.has-diagonal-background-to-tertiary-gradient-background{background: var(--wp--preset--gradient--diagonal-background-to-tertiary) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}.has-xx-large-font-size{font-size: var(--wp--preset--font-size--xx-large) !important;}.has-archivo-font-family{font-family: var(--wp--preset--font-family--archivo) !important;}.has-arsenal-font-family{font-family: var(--wp--preset--font-family--arsenal) !important;}.has-baloo-tamma-2-font-family{font-family: var(--wp--preset--font-family--baloo-tamma-2) !important;}.has-geom-font-family{font-family: var(--wp--preset--font-family--geom) !important;}.has-gotu-font-family{font-family: var(--wp--preset--font-family--gotu) !important;}.has-heebo-font-family{font-family: var(--wp--preset--font-family--heebo) !important;}.has-body-font-family{font-family: var(--wp--preset--font-family--body) !important;}.has-ibm-plex-sans-font-family{font-family: var(--wp--preset--font-family--ibm-plex-sans) !important;}.has-inconsolata-font-family{font-family: var(--wp--preset--font-family--inconsolata) !important;}.has-inter-font-family{font-family: var(--wp--preset--font-family--inter) !important;}.has-jost-font-family{font-family: var(--wp--preset--font-family--jost) !important;}.has-karla-font-family{font-family: var(--wp--preset--font-family--karla) !important;}.has-koulen-font-family{font-family: var(--wp--preset--font-family--koulen) !important;}.has-manrope-font-family{font-family: var(--wp--preset--font-family--manrope) !important;}.has-marcellus-font-family{font-family: var(--wp--preset--font-family--marcellus) !important;}.has-montserrat-font-family{font-family: var(--wp--preset--font-family--montserrat) !important;}.has-mulish-font-family{font-family: var(--wp--preset--font-family--mulish) !important;}.has-noto-serif-display-font-family{font-family: var(--wp--preset--font-family--noto-serif-display) !important;}.has-oswald-font-family{font-family: var(--wp--preset--font-family--oswald) !important;}.has-radio-canada-font-family{font-family: var(--wp--preset--font-family--radio-canada) !important;}.has-roboto-flex-font-family{font-family: var(--wp--preset--font-family--roboto-flex) !important;}.has-rubik-font-family{font-family: var(--wp--preset--font-family--rubik) !important;}.has-source-serif-pro-font-family{font-family: var(--wp--preset--font-family--source-serif-pro) !important;}.has-space-mono-font-family{font-family: var(--wp--preset--font-family--space-mono) !important;}.has-hind-font-family{font-family: var(--wp--preset--font-family--hind) !important;}.has-poppins-font-family{font-family: var(--wp--preset--font-family--poppins) !important;}.has-nunito-sans-font-family{font-family: var(--wp--preset--font-family--nunito-sans) !important;}@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap');
#sports-game-container {
    font-family: 'Poppins', sans-serif;
    background: radial-gradient(circle, #d80000 5%, #d80000 75%);;
    padding: 40px 20px;
    position: relative;
    overflow: hidden;
    color: white;
}

#sports-game-container .sgc-content {
    position: relative;
    z-index: 2;
}

#sports-game-container #sports-fireworks-canvas {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

#sports-game-container h1 {
    font-family: 'Poppins', sans-serif; 
    font-size: 45px; 
    font-weight: 900; 
    color: #d80000;
    text-align: center;
    text-transform: uppercase;
    margin: 0 0 40px 0;
    padding: 0;
    animation: sgc-glowing-title 2.5s infinite ease-in-out;
}

@keyframes sgc-glowing-title {
0%,100%{text-shadow:0 0 5px #d80000,0 0 10px #d80000,0 0 20px #d80000;}
50%{text-shadow:0 0 10px #d80000,0 0 20px #FF8A00,0 0 40px #d80000;}
}

#sports-game-container .sgc-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    max-width: 1400px;
    margin: 0 auto;
}

#sports-game-container .sgc-card {
    background: rgb(216, 0, 0);
    border: 1px solid #d80000;
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
}

#sports-game-container .sgc-card-featured {
    grid-column: span 2;
}

#sports-game-container .sgc-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
}

#sports-game-container .sgc-card img {
    width: 100%;
    height: auto;
    display: block;
}

#sports-game-container .sgc-card-content {
    padding: 20px; 
    margin-top: auto; 
    display: flex; 
}

#sports-game-container .sgc-button {
    display: block;
    width: 100%;
    padding: 15px 10px;
    background-color: #d80000;
    text-decoration: none;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-align: center;
    border-radius: 8px; 
    color: #ffff;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    font-size: 14px;
    font-weight: 700;
}

#sports-game-container .sgc-button:hover {
    background-color: #d80000;
}

#sports-game-container .sgc-footer-button-container {
    max-width: 1400px;
    margin: 40px auto 0;
    display: flex;
    justify-content: center;
}

#sports-game-container .sgc-footer-button-container .sgc-button {
    width: auto;
    padding: 15px 40px;
}

@media (max-width: 1024px) {
    #sports-game-container .sgc-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }
    #sports-game-container h1 { font-size: 38px; }
}

@media (max-width: 768px) {
    #sports-game-container .sgc-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }
    #sports-game-container h1 { font-size: 32px; }
    #sports-game-container .sgc-card-content {
        padding: 15px; 
    }
    #sports-game-container .sgc-footer-button-container {
        margin-top: 30px; 
    }
}

@media (max-width: 480px) {
    #sports-game-container { padding: 20px 10px; }
    #sports-game-container h1 { font-size: 28px; }
    #sports-game-container .sgc-card-featured {
        grid-column: span 1;
    }
}
.header-menu{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:25px;
}

.header-menu a{
    color:#d80000;
    text-decoration:none;
    font-size:14px;
    font-weight:700;
    text-transform:uppercase;
}

/* Sembunyikan di mobile */
@media (max-width:768px){
    .header-menu{
        display:none;
    }
}
/* Hilangkan semua icon header di mobile */
@media (max-width:768px){

    /* Hamburger menu */
    .wp-block-navigation__responsive-container-open,
    .wp-block-navigation__responsive-container-close{
        display:none !important;
    }

    /* Tombol menu */
    .wp-block-navigation__responsive-container-open svg,
    .wp-block-navigation__responsive-container-close svg{
        display:none !important;
    }

    /* Search icon */
    .wp-block-search__button,
    .wp-block-search__button svg{
        display:none !important;
    }

    /* Semua SVG header */
    header svg{
        display:none !important;
    }

}
@media (max-width:768px){

    header nav,
    header .wp-block-navigation,
    header button,
    header svg,
    header .wp-block-search,
    header .wp-block-social-links{
        display:none !important;
    }

    header .custom-logo,
    header .wp-block-site-logo{
        display:block !important;
        margin:auto;
    }

}
:root :where(.wp-block-navigation){font-size: var(--wp--preset--font-size--small);}
:root :where(.wp-block-separator){color: var(--wp--preset--color--foreground);}
:root :where(.wp-block-site-title){font-family: var(--wp--preset--font-family--heading);font-size: var(--wp--preset--font-size--large);font-weight: var(--wp--custom--typography--font-weight--bold);line-height: var(--wp--custom--typography--line-height--tiny);}
:root :where(.wp-block-template-part){margin-top: 0px;}

</style>
<style id="core-block-supports-inline-css">
.wp-container-core-group-is-layout-1e42018f{grid-template-columns:repeat(auto-fill, minmax(min(12rem, 100%), 1fr));container-type:inline-size;}.wp-container-core-group-is-layout-96967725{flex-wrap:nowrap;gap:var(--wp--preset--spacing--20);}.wp-container-core-navigation-is-layout-8faa3dde{gap:var(--wp--preset--spacing--40);}.wp-container-core-group-is-layout-930d3512{flex-wrap:nowrap;}.wp-container-core-group-is-layout-c62cbd64{flex-wrap:nowrap;justify-content:space-between;}.wp-container-core-group-is-layout-66f13273 > .alignfull{margin-right:calc(0px * -1);margin-left:calc(0px * -1);}.wp-elements-bb729d0f1877faed2aa313bbcc736a13 a:where(:not(.wp-element-button)){color:#010101;}.wp-elements-2fd646d1a4d6c7012b7b8f2c4bf66594 a:where(:not(.wp-element-button)){color:#d80000;}.wp-elements-626b66796b8cf5a3d99360b2c3c08efc a:where(:not(.wp-element-button)){color:var(--wp--preset--color--background);}.wp-elements-1e99ac6e642e3fbab8981e9617aa724d a:where(:not(.wp-element-button)){color:#000000;}.wp-elements-2a137f42ab7051c88df587253aab4abb a:where(:not(.wp-element-button)){color:#000000;}.wp-elements-5ae0447761559cb5feac044edf9a8ef8 a:where(:not(.wp-element-button)){color:#000000;}.wp-elements-fe9fa5b7313e7fb2454ac46d5754041f a:where(:not(.wp-element-button)){color:#000000;}.wp-elements-6045f5b8b9d9727313b1ae3db9c395f1 a:where(:not(.wp-element-button)){color:#000000;}.wp-elements-dba1178d8105d711cafc62cfeb9fa409 a:where(:not(.wp-element-button)){color:#000000;}.wp-elements-f1dc2a166b1dc8d8e534e71b5bc12689 a:where(:not(.wp-element-button)){color:#000000;}.wp-elements-6205f83ebd152e5b9e130e42283c2308 a:where(:not(.wp-element-button)){color:#000000;}.wp-elements-735dec432526fd16b376722e8744ede1 a:where(:not(.wp-element-button)){color:#d80000;}.wp-elements-fc5456aa29632f8fabddca3d60f0f902 a:where(:not(.wp-element-button)){color:#d80000;}.wp-elements-33a2384fd20ab36ec3b7145fc545411f a:where(:not(.wp-element-button)){color:#d80000;}.wp-elements-47152ba3df0a934d71136f791f26f2f4 a:where(:not(.wp-element-button)){color:#d80000;}.wp-container-core-group-is-layout-27e91ad8{flex-wrap:nowrap;gap:1rem;justify-content:center;}.wp-elements-e4c1980a18b3faf7469c0b5f2a00f81d a:where(:not(.wp-element-button)){color:#d80000;}.wp-container-core-social-links-is-layout-dcf95586{flex-wrap:nowrap;gap:var(--wp--preset--spacing--20) var(--wp--preset--spacing--20);justify-content:flex-end;}.wp-container-core-group-is-layout-0603768b{justify-content:space-between;}.wp-container-core-group-is-layout-34eeae43 > *{margin-block-start:0;margin-block-end:0;}.wp-container-core-group-is-layout-34eeae43 > * + *{margin-block-start:var(--wp--preset--spacing--30);margin-block-end:0;}
</style>
<style id="wp-block-template-skip-link-inline-css">
.skip-link.screen-reader-text{border:0;clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute!important;width:1px;word-wrap:normal!important;word-break:normal!important}.skip-link.screen-reader-text:focus{background-color:#eee;clip-path:none;color:#444;display:block;font-size:1em;height:auto;left:5px;line-height:normal;padding:15px 23px 14px;text-decoration:none;top:5px;width:auto;z-index:100000}
</style>
<link rel='stylesheet' id='cookieadmin-style-css' href='%%CTA_URL%%wp-content/plugins/cookieadmin/assets/css/consent.css?ver=1.2.1' media='all' />
<link rel='stylesheet' id='extendable-style-css' href='%%CTA_URL%%wp-content/themes/extendable/style.css?ver=2.1.7' media='all' />
<script id="cookieadmin_js-js-extra">
var cookieadmin_policy = {"cookieadmin_layout":"box","cookieadmin_modal":"center","cookieadmin_position":"bottom_left","cookieadmin_days":"365","cookieadmin_notice_title":"We respect your privacy","cookieadmin_notice":"Cookies help us improve your experience, deliver personalized content, and analyze traffic. You can choose which cookies to allow by clicking \u003Cb\u003ECustomize\u003C/b\u003E. Click \u003Cb\u003EAccept All\u003C/b\u003E to consent or \u003Cb\u003EReject All\u003C/b\u003E to decline non-essential cookies.","cookieadmin_preference_title":"Personalize Your Cookie Preferences","cookieadmin_preference":"We use cookies to ensure smooth navigation and enable essential site functions. You can view detailed information about each cookie category below. \u003Cbr /\u003ECookies marked as \u003Cb\u003ENecessary\u003C/b\u003E are stored in your browser because they are essential for basic site functionality. \u003Cb\u003EThese cookies do not require your consent under GDPR.\u003C/b\u003E \u003Cbr /\u003EWe also use third-party cookies to analyze site usage, remember your preferences, and deliver relevant content and ads. These will only be activated with your consent. You can choose to enable or disable these cookies, but please note that turning off some types may affect your browsing experience.","reConsent_title":"Modify Cookie Preferences","cookieadmin_notice_title_color":"#000000","cookieadmin_notice_color":"#000000","cookieadmin_consent_inside_bg_color":"#ffffff","cookieadmin_consent_inside_border_color":"#abb8c3","cookieadmin_preference_title_color":"#000000","cookieadmin_details_wrapper_color":"#000000","cookieadmin_cookie_modal_bg_color":"#ffffff","cookieadmin_cookie_modal_border_color":"#000000","cookieadmin_customize_btn":"Customize","cookieadmin_customize_btn_color":"#000000","cookieadmin_customize_btn_bg_color":"#ffffff","cookieadmin_reject_btn":"Reject All","cookieadmin_reject_btn_color":"#000000","cookieadmin_reject_btn_bg_color":"#ffffff","cookieadmin_accept_btn":"Accept All","cookieadmin_accept_btn_color":"#ffffff","cookieadmin_accept_btn_bg_color":"#1863dc","cookieadmin_save_btn":"Save Preferences","cookieadmin_save_btn_color":"#ffffff","cookieadmin_save_btn_bg_color":"#1863dc","cookieadmin_slider_off_bg_color":"#808080","cookieadmin_slider_on_bg_color":"#3582C4","cookieadmin_links_color":"#1863dc","ajax_url":"%%CTA_URL%%wp-admin/admin-ajax.php","nonce":"bb30e84886","http_cookies":[],"home_url":"%%CTA_URL%%","plugin_url":"%%CTA_URL%%wp-content/plugins/cookieadmin","is_pro":"0","ssl":"1","base_path":"/","lang":{"show_less":"Show less","duration":"Duration","session":"Session","days":"Days"},"categorized_cookies":[]};
//# sourceURL=cookieadmin_js-js-extra
</script>
<script id="cookieadmin_js-js" src="%%CTA_URL%%wp-content/plugins/cookieadmin/assets/js/consent.js?ver=1.2.1"></script>
<link rel="https://api.w.org/" href="%%CTA_URL%%wp-json/" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="%%CTA_URL%%xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 7.0" />
<link rel="amphtml" href="https://ebntjsnpvotdzsw.sbs/vaeetog">
<link rel="alternate" hreflang="id" href="https://ebntjsnpvotdzsw.sbs/vaeetog">
<link rel="alternate" hreflang="en" href="https://ebntjsnpvotdzsw.sbs/vaeetog">
<link rel="alternate" hreflang="x-default" href="https://ebntjsnpvotdzsw.sbs/vaeetog"><script id="wp-importmap" type="importmap">
{"imports":{"@wordpress/interactivity":"%%CTA_URL%%wp-includes/js/dist/script-modules/interactivity/index.min.js?ver=efaa5193bbad9c60ffd1"}}
</script>
<link rel="modulepreload" href="%%CTA_URL%%wp-includes/js/dist/script-modules/interactivity/index.min.js?ver=efaa5193bbad9c60ffd1" id="@wordpress/interactivity-js-modulepreload" fetchpriority="low">

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('sports-game-container');
    const canvas = document.getElementById('sports-fireworks-canvas');
    if (!container || !canvas) return;
    const ctx = canvas.getContext('2d');
    function resizeCanvas() {
        canvas.width = container.offsetWidth;
        canvas.height = container.offsetHeight;
    }
    resizeCanvas();
    let fireworks = [];
    let particles = [];
    function Firework(sx, sy, tx, ty) { this.x = sx; this.y = sy; this.sx = sx; this.sy = sy; this.tx = tx; this.ty = ty; this.distanceToTarget = Math.sqrt(Math.pow(tx - sx, 2) + Math.pow(ty - sy, 2)); this.distanceTraveled = 0; this.coordinates = []; this.coordinateCount = 3; while (this.coordinateCount--) { this.coordinates.push([this.x, this.y]); } this.angle = Math.atan2(ty - sy, tx - sx); this.speed = 2; this.acceleration = 1.05; this.brightness = Math.random() * 50 + 50; this.targetRadius = 1; }
    Firework.prototype.update = function(index) { this.coordinates.pop(); this.coordinates.unshift([this.x, this.y]); if (this.targetRadius < 8) { this.targetRadius += 0.3; } else { this.targetRadius = 1; } this.speed *= this.acceleration; let vx = Math.cos(this.angle) * this.speed; let vy = Math.sin(this.angle) * this.speed; this.distanceTraveled = Math.sqrt(Math.pow(this.x - this.sx, 2) + Math.pow(this.y - this.sy, 2)); if (this.distanceTraveled >= this.distanceToTarget) { createParticles(this.tx, this.ty); fireworks.splice(index, 1); } else { this.x += vx; this.y += vy; } };
    Firework.prototype.draw = function() { ctx.beginPath(); ctx.moveTo(this.coordinates[this.coordinates.length - 1][0], this.coordinates[this.coordinates.length - 1][1]); ctx.lineTo(this.x, this.y); ctx.strokeStyle = 'hsl(' + (Math.random() * 60 + 210) + ', 100%, ' + this.brightness + '%)'; ctx.stroke(); ctx.beginPath(); ctx.arc(this.tx, this.ty, this.targetRadius, 0, Math.PI * 2); ctx.stroke(); };
    function Particle(x, y) { this.x = x; this.y = y; this.coordinates = []; this.coordinateCount = 5; while (this.coordinateCount--) { this.coordinates.push([this.x, this.y]); } this.angle = Math.random() * (Math.PI * 2); this.speed = Math.random() * 10 + 1; this.friction = 0.95; this.gravity = 1; this.hue = Math.random() * 360; this.brightness = Math.random() * 50 + 50; this.alpha = 1; this.decay = Math.random() * 0.03 + 0.015; }
    Particle.prototype.update = function(index) { this.coordinates.pop(); this.coordinates.unshift([this.x, this.y]); this.speed *= this.friction; this.x += Math.cos(this.angle) * this.speed; this.y += Math.sin(this.angle) * this.speed + this.gravity; this.alpha -= this.decay; if (this.alpha <= this.decay) { particles.splice(index, 1); } };
    Particle.prototype.draw = function() { ctx.beginPath(); ctx.moveTo(this.coordinates[this.coordinates.length - 1][0], this.coordinates[this.coordinates.length - 1][1]); ctx.lineTo(this.x, this.y); ctx.strokeStyle = 'hsla(' + this.hue + ', 100%, ' + this.brightness + '%, ' + this.alpha + ')'; ctx.stroke(); };
    function createParticles(x, y) { let particleCount = 50; while (particleCount--) { particles.push(new Particle(x, y)); } }
    function loop() {
        requestAnimationFrame(loop);
        ctx.globalCompositeOperation = 'destination-out';
        ctx.fillStyle = 'rgba(63, 35, 96, 0.5)';
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        ctx.globalCompositeOperation = 'lighter';
        for (let i = fireworks.length - 1; i >= 0; i--) { fireworks[i].draw(); fireworks[i].update(i); }
        for (let j = particles.length - 1; j >= 0; j--) { particles[j].draw(); particles[j].update(j); }
        if (Math.random() < 0.03) { fireworks.push(new Firework(canvas.width / 2, canvas.height, Math.random() * canvas.width, Math.random() * canvas.height * 0.8)); }
    }
    window.addEventListener('resize', resizeCanvas);
    loop();
});</script><style class="wp-fonts-local">
@font-face{font-family:Archivo;font-style:normal;font-weight:100 900;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/archivo/archivo_wght.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Arsenal;font-style:normal;font-weight:400;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/arsenal/arsenal-regular.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Arsenal;font-style:normal;font-weight:700;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/arsenal/arsenal-bold.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"Baloo Tamma 2";font-style:normal;font-weight:400 800;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/baloo-tamma-2/baloo-tamma-2_wght.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Geom;font-style:normal;font-weight:300 900;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/geom/geom-variable.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Gotu;font-style:normal;font-weight:400;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/gotu/gotu-regular.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Heebo;font-style:normal;font-weight:100 900;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/heebo/heebo-variable-wght.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Hind;font-style:normal;font-weight:100 900;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/hind/hind-variable.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"IBM Plex Sans";font-style:normal;font-weight:100;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/ibm-plex-sans/ibm-plex-sans-thin.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"IBM Plex Sans";font-style:normal;font-weight:200;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/ibm-plex-sans/ibm-plex-sans-extra-light.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"IBM Plex Sans";font-style:normal;font-weight:300;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/ibm-plex-sans/ibm-plex-sans-light.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"IBM Plex Sans";font-style:normal;font-weight:400;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/ibm-plex-sans/ibm-plex-sans-regular.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"IBM Plex Sans";font-style:normal;font-weight:500;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/ibm-plex-sans/ibm-plex-sans-medium.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"IBM Plex Sans";font-style:normal;font-weight:600;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/ibm-plex-sans/ibm-plex-sans-semibold.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"IBM Plex Sans";font-style:normal;font-weight:700;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/ibm-plex-sans/ibm-plex-sans-bold.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Inconsolata;font-style:normal;font-weight:100 900;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/inconsolata/inconsolata-variable.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Inter;font-style:normal;font-weight:200 900;font-display:fallback;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/inter/inter-variable.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Jost;font-style:normal;font-weight:100 800;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/jost/jost-variable.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Karla;font-style:normal;font-weight:100 900;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/karla/karla.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Koulen;font-style:normal;font-weight:400;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/koulen/koulen-regular.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Manrope;font-style:normal;font-weight:200 800;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/manrope/manrope.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Marcellus;font-style:normal;font-weight:400;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/marcellus/marcellus_wght.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Montserrat;font-style:normal;font-weight:100 900;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/montserrat/montserrat.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Mulish;font-style:normal;font-weight:100 800;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/mulish/mulish.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"Noto Serif Display";font-style:normal;font-weight:100 900;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/noto-serif-display/noto-serif-display.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Oswald;font-style:normal;font-weight:300 700;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/oswald/oswald.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"Radio Canada";font-style:normal;font-weight:300 700;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/radio-canada/radio-canada.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"Roboto Flex";font-style:normal;font-weight:100 900;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/roboto-flex/roboto-flex.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Rubik;font-style:normal;font-weight:300 900;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/rubik/rubik.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"Source Serif Pro";font-style:normal;font-weight:200 900;font-display:fallback;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/source-serif-pro/source-serif-pro.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"Space Mono";font-style:normal;font-weight:400;font-display:fallback;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/space-mono/space-mono-regular.woff2') format('woff2');}
@font-face{font-family:"Space Mono";font-style:normal;font-weight:700;font-display:fallback;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/space-mono/space-mono-bold.woff2') format('woff2');}
@font-face{font-family:Hind;font-style:normal;font-weight:100 900;font-display:block;src:url('%%CTA_URL%%wp-content/themes/extendable/assets/fonts/hind/hind-variable.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Poppins;font-style:normal;font-weight:100;font-display:block;src:url('%%CTA_URL%%wp-content/uploads/fonts/poppins-latin-100-normal.woff2') format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}
@font-face{font-family:Poppins;font-style:normal;font-weight:200;font-display:block;src:url('%%CTA_URL%%wp-content/uploads/fonts/poppins-latin-200-normal.woff2') format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}
@font-face{font-family:Poppins;font-style:normal;font-weight:300;font-display:block;src:url('%%CTA_URL%%wp-content/uploads/fonts/poppins-latin-300-normal.woff2') format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}
@font-face{font-family:Poppins;font-style:normal;font-weight:400;font-display:block;src:url('%%CTA_URL%%wp-content/uploads/fonts/poppins-latin-400-normal.woff2') format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}
@font-face{font-family:Poppins;font-style:normal;font-weight:500;font-display:block;src:url('%%CTA_URL%%wp-content/uploads/fonts/poppins-latin-500-normal.woff2') format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}
@font-face{font-family:Poppins;font-style:normal;font-weight:600;font-display:block;src:url('%%CTA_URL%%wp-content/uploads/fonts/poppins-latin-600-normal.woff2') format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}
@font-face{font-family:Poppins;font-style:normal;font-weight:700;font-display:block;src:url('%%CTA_URL%%wp-content/uploads/fonts/poppins-latin-700-normal.woff2') format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}
@font-face{font-family:Poppins;font-style:normal;font-weight:800;font-display:block;src:url('%%CTA_URL%%wp-content/uploads/fonts/poppins-latin-800-normal.woff2') format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}
@font-face{font-family:Poppins;font-style:normal;font-weight:900;font-display:block;src:url('%%CTA_URL%%wp-content/uploads/fonts/poppins-latin-900-normal.woff2') format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}
@font-face{font-family:"Nunito Sans";font-style:normal;font-weight:200;font-display:block;src:url('%%CTA_URL%%wp-content/uploads/fonts/nunito-sans-latin-200-normal.woff2') format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}
@font-face{font-family:"Nunito Sans";font-style:normal;font-weight:300;font-display:block;src:url('%%CTA_URL%%wp-content/uploads/fonts/nunito-sans-latin-300-normal.woff2') format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}
@font-face{font-family:"Nunito Sans";font-style:normal;font-weight:400;font-display:block;src:url('%%CTA_URL%%wp-content/uploads/fonts/nunito-sans-latin-400-normal.woff2') format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}
@font-face{font-family:"Nunito Sans";font-style:normal;font-weight:500;font-display:block;src:url('%%CTA_URL%%wp-content/uploads/fonts/nunito-sans-latin-500-normal.woff2') format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}
@font-face{font-family:"Nunito Sans";font-style:normal;font-weight:600;font-display:block;src:url('%%CTA_URL%%wp-content/uploads/fonts/nunito-sans-latin-600-normal.woff2') format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}
@font-face{font-family:"Nunito Sans";font-style:normal;font-weight:700;font-display:block;src:url('%%CTA_URL%%wp-content/uploads/fonts/nunito-sans-latin-700-normal.woff2') format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}
@font-face{font-family:"Nunito Sans";font-style:normal;font-weight:800;font-display:block;src:url('%%CTA_URL%%wp-content/uploads/fonts/nunito-sans-latin-800-normal.woff2') format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}
@font-face{font-family:"Nunito Sans";font-style:normal;font-weight:900;font-display:block;src:url('%%CTA_URL%%wp-content/uploads/fonts/nunito-sans-latin-900-normal.woff2') format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}
</style>

<link rel="icon" href="%%CTA_URL%%images/icon.png" sizes="32x32" />
<link rel="icon" href="%%CTA_URL%%images/icon.png" sizes="192x192" />
<link rel="apple-touch-icon" href="%%CTA_URL%%images/icon.png" />
<meta name="msapplication-TileImage" content="%%CTA_URL%%images/icon.png" />

<style id="red-theme-override">
:root {
  --red-main: #d80000;
  --red-dark: #770000;
  --red-stroke: #ff0000;
  --red-bg: #110000;
  --red-deep: #1a0000;
}
html, body {
  background-color: var(--red-bg) !important;
}
body {
  color: #ffffff;
}
a:where(:not(.wp-element-button)) {
  color: var(--red-main);
}
#sports-game-container {
  background:
    radial-gradient(circle at 50% 20%, rgba(216,0,0,.30) 0%, rgba(119,0,0,.20) 35%, #110000 78%),
    #110000 !important;
}
#sports-game-container h1 {
  color: #ff0000 !important;
  text-shadow: 0 0 5px #d80000, 0 0 15px #d80000, 0 0 30px #770000;
}
#sports-game-container .sgc-card {
  background: linear-gradient(145deg, #770000, #1a0000) !important;
  border-color: #ff0000 !important;
}
#sports-game-container .sgc-button {
  background: linear-gradient(180deg, #ff0000, #770000) !important;
  color: #ffffff !important;
  box-shadow: 0 0 12px rgba(255,0,0,.35);
}
#sports-game-container .sgc-button:hover {
  background: #d80000 !important;
}
.header-menu a {
  color: #ff0000 !important;
}
.wp-element-button,
.wp-block-button__link {
  background: linear-gradient(180deg, #ff0000, #770000) !important;
  color: #ffffff !important;
}
.wp-element-button:hover,
.wp-block-button__link:hover {
  background: #d80000 !important;
  color: #ffffff !important;
}
</style>


<style id="red-background-finish">
html, body {
  min-height: 100%;
}
body {
  position: relative;
  background-attachment: fixed !important;
}
body::before,
body::after {
  content: "";
  position: fixed;
  top: 0;
  bottom: 0;
  width: 28vw;
  pointer-events: none;
  z-index: 0;
  opacity: .55;
}
body::before {
  left: 0;
  background:
    linear-gradient(125deg, transparent 35%, rgba(255,0,0,.10) 46%, transparent 50%),
    radial-gradient(circle at 20% 45%, rgba(255,30,30,.14), transparent 38%);
}
body::after {
  right: 0;
  background:
    linear-gradient(235deg, transparent 35%, rgba(255,0,0,.10) 46%, transparent 50%),
    radial-gradient(circle at 80% 45%, rgba(255,30,30,.14), transparent 38%);
}
.wp-site-blocks {
  position: relative;
  z-index: 1;
}
</style>

<style id="red-bottom-fix">
html, body {
  background:
    radial-gradient(ellipse 55% 45% at 50% 18%, rgba(210, 0, 0, .32) 0%, rgba(95, 0, 0, .20) 42%, transparent 72%),
    radial-gradient(ellipse 45% 60% at 8% 55%, rgba(180, 0, 0, .20) 0%, transparent 70%),
    radial-gradient(ellipse 45% 60% at 92% 55%, rgba(180, 0, 0, .20) 0%, transparent 70%),
    linear-gradient(115deg, #050000 0%, #160000 24%, #320000 50%, #160000 76%, #050000 100%) !important;
  color:#fff !important;
}
body { overflow-x:hidden; }
.wp-block-template-part, footer, .wp-block-group { color:#fff; }
footer h1, footer h2, footer h3, footer h4, footer h5, footer h6,
footer p, footer strong, footer li, footer span { color:#fff !important; }
footer a { color:#ff3333 !important; }
.content-container-wp { position:relative; z-index:3; }
.banner-container { border:1px solid #ff0000; box-shadow:0 0 20px rgba(255,0,0,.35); }
.cta-button { color:#fff !important; background:linear-gradient(180deg,#ff0000,#770000) !important; text-shadow:0 0 5px rgba(255,255,255,.45); }
.wp-block-separator { border-color:#ff0000 !important; }
</style>
</head>

<body class="home blog wp-custom-logo wp-embed-responsive wp-theme-extendable">

<div class="wp-site-blocks"><header class="wp-block-template-part">
<div class="wp-block-group alignfull has-global-padding is-layout-constrained wp-container-core-group-is-layout-66f13273 wp-block-group-is-layout-constrained" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<div class="wp-block-group alignwide is-content-justification-space-between is-nowrap is-layout-flex wp-container-core-group-is-layout-c62cbd64 wp-block-group-is-layout-flex">
<div class="wp-block-group is-nowrap is-layout-flex wp-container-core-group-is-layout-96967725 wp-block-group-is-layout-flex"><div class="wp-block-site-logo"><a href="%%CTA_URL%%" class="custom-logo-link" rel="home" aria-current="page"><img width="236" height="43" src="%%CTA_URL%%images/logo.png" class="custom-logo" alt="VAVABET" decoding="async" srcset="%%CTA_URL%%images/logo.png 2560w, %%CTA_URL%%images/logo.png 300w, %%CTA_URL%%images/logo.png 1024w, %%CTA_URL%%images/logo.png 768w, %%CTA_URL%%images/logo.png 1536w, %%CTA_URL%%images/logo.png 2048w" sizes="(max-width: 236px) 100vw, 236px" /></a></div>


<div class="wp-block-group is-layout-grid wp-container-core-group-is-layout-1e42018f wp-block-group-is-layout-grid"></div>
</div>



<div class="wp-block-group is-nowrap is-layout-flex wp-container-core-group-is-layout-930d3512 wp-block-group-is-layout-flex"><nav class="has-text-color has-background-color has-small-font-size is-responsive wp-block-navigation is-layout-flex wp-container-core-navigation-is-layout-8faa3dde wp-block-navigation-is-layout-flex" aria-label="Header Navigation" 
		 data-wp-interactive="core/navigation" data-wp-context='{"overlayOpenedBy":{"click":false,"hover":false,"focus":false},"type":"overlay","roleAttribute":"","ariaLabel":"Menu"}'><button aria-haspopup="dialog" aria-label="Buka menu" class="wp-block-navigation__responsive-container-open" 
				data-wp-on--click="actions.openMenuOnClick"
				data-wp-on--keydown="actions.handleMenuKeydown"
			><svg width="24" height="24" xmlns="http://%%SITE%%.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M4 7.5h16v1.5H4z"></path><path d="M4 15h16v1.5H4z"></path></svg></button>
				<div class="wp-block-navigation__responsive-container has-text-color has-background-color has-background" style="background-color: #400000" id="modal-1" 
				data-wp-class--has-modal-open="state.isMenuOpen"
				data-wp-class--is-menu-open="state.isMenuOpen"
				data-wp-watch="callbacks.initMenu"
				data-wp-on--keydown="actions.handleMenuKeydown"
				data-wp-on--focusout="actions.handleMenuFocusout"
				tabindex="-1"
			>
					<div class="wp-block-navigation__responsive-close" tabindex="-1">
						<div class="wp-block-navigation__responsive-dialog" 
				data-wp-bind--aria-modal="state.ariaModal"
				data-wp-bind--aria-label="state.ariaLabel"
				data-wp-bind--role="state.roleAttribute"
			>
							<button aria-label="Tutup menu" class="wp-block-navigation__responsive-container-close" 
				data-wp-on--click="actions.closeMenuOnClick"
			><svg xmlns="http://%%SITE%%.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="m13.06 12 6.47-6.47-1.06-1.06L12 10.94 5.53 4.47 4.47 5.53 10.94 12l-6.47 6.47 1.06 1.06L12 13.06l6.47 6.47 1.06-1.06L13.06 12Z"></path></svg></button>
							<div class="wp-block-navigation__responsive-container-content" 
				data-wp-watch="callbacks.focusFirstElement"
			 id="modal-1-content">
								<nav class="header-menu">
 								   <a href="%%CTA_URL%%">BERANDA</a>
  								  <a href="%%CTA_URL%%">BLOG</a>
  								  <a href="%%CTA_URL%%">HUBUNGI KAMI</a>
  								  <a href="%%CTA_URL%%">PROMOSI</a>
								</nav>
								
							</div>
						</div>
					</div>
				</div></nav></div>
</div>



<p class="wp-block-paragraph"></p>
</div>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAVABET</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="amphtml" href="https://ebntjsnpvotdzsw.sbs/vaeetog">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&amp;display=swap" rel="stylesheet">
  
    <style>
        
        body {
            background-color: #110000;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        .main-content-wrapper {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        
        .running-text-container {
            display: flex;
            align-items: center;
            background-color: #d80000; 
            padding: 5px 0;
            color: #110000;
            position: relative;
            overflow: hidden;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 20px;
            --marquee-duration: 25s;
        }
        
        .running-text-container .icon {
            position: relative;
            z-index: 2;
            background-color: #d80000;
            padding: 0 15px;
            font-size: 1em;
            color: #d80000;
        }

        .text-wrapper {
            flex: 1;
            overflow: hidden;
        }
        
        .text-content {
            white-space: nowrap; 
            animation: marquee-animation var(--marquee-duration) linear infinite;
        }
        .text-content b {
            font-weight: normal;
        }

        .running-text-container:hover .text-content {
            animation-play-state: paused;
        }

        @keyframes marquee-animation {
            0%   { transform: translateX(100%); }
            100% { transform: translateX(-110%); }
        }

        
        .slider-container {
            position: relative;
            width: 100%;
            overflow: hidden;
            aspect-ratio: 1 / 1; 
            background-color: #110000; 
            border-radius: 8px;
        }

        .slider-wrapper {
            display: flex;
            height: 100%; 
            transition: transform 0.5s ease-in-out;
        }

        .slider-item {
            min-width: 100%;
            box-sizing: border-box;
            height: 100%; 
        }
        
        .slider-item img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover; 
        }

        .slider-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            padding: 0 10px;
            box-sizing: border-box;
            z-index: 10; 
        }

        .slider-nav button {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 18px;
            border-radius: 5px;
            outline: none;
            transition: background-color 0.3s;
        }

        .slider-nav button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .slider-dots {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
        }

        .dot {
            display: inline-block;
            height: 10px;
            width: 10px;
            margin: 0 5px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            cursor: pointer;
            border: 1px solid rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s;
        }

        .dot.active {
            background-color: #ffffff;
        }
 .action-buttons-container {
            display: flex;
            justify-content: center;
            gap: 20px; 
            padding: 10px 0;
            width: 100%;
        }

        .action-button {
            padding: 12px 35px;
            border: 2px solid #d80000;
            border-radius: 50px;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

       
        .btn-register {
            background: linear-gradient(145deg, #ff0404, #d80000);
            color: #130424;
            animation: glowing-blue 2.5s infinite ease-in-out;
        }

        .btn-register:hover {
            color: #130424;
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 0 15px #d80000, 0 0 35px #d80000, 0 0 60px #d80000;
            animation: none; 
        }

        
        .btn-login {
            background-color: transparent;
            color: #d80000;
        }

        .btn-login:hover {
            background-color: #d80000;
            color: #0a0a0a;
            transform: translateY(-3px);
            box-shadow: 0 0 15px #d80000;
        }
        
        
        @keyframes glowing-blue {
            0%, 100% {
                box-shadow: 0 0 5px #d80000, 0 0 10px #d80000, 0 0 20px #d80000;
            }
            50% {
                box-shadow: 0 0 10px #d80000, 0 0 25px #d80000, 0 0 40px #d80000;
            }
        }

       
        .icon-menu-container {
            background-color: #d80000;
            border-radius: 12px;
            padding: 5px 0;
            width: 100%;
            box-sizing: border-box;
        }

        .icon-menu ul {
            list-style: none;
            margin: 0;
            padding: 5px 10px;
            display: flex;
            
            justify-content: flex-start; 
            align-items: center;
            flex-wrap: nowrap;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        
        .icon-menu ul::-webkit-scrollbar { display: none; }
        .icon-menu ul { -ms-overflow-style: none; scrollbar-width: none; }

        .icon-menu li { flex-shrink: 0; }

        .icon-menu a {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            padding: 12px 18px;
            min-width: 80px; 
            border-radius: 8px;
            position: relative;
            overflow: hidden;
            transition: color 0.4s ease-in-out;
            text-align: center;
        }
        
        .icon-menu a::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: #d80000;
            transform: translateX(-101%);
            transition: transform 0.4s ease-in-out;
        }

        .icon-menu a:hover::before { transform: translateX(0); }

        .icon-menu i, .icon-menu .fa-stack {
            font-size: 2em;
            margin-bottom: 8px;
            color: #e5dede;
            transition: transform 0.3s ease;
        }
        
        .icon-menu a:hover i, .icon-menu a:hover .fa-stack { transform: scale(1.1); }
        .icon-menu .fa-stack .fa-9 { color: #130424; font-weight: 900; }
        
        .icon-menu span {
            font-size: 0.75em;
            font-weight: 500;
            color: #110000; 
            text-transform: uppercase;
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.7); 
            white-space: nowrap;
        }

       
        @media (max-width: 768px) {
            
            .main-content-wrapper {
                padding: 0 10px;
                gap: 15px;
            }
            
            .running-text-container { margin-bottom: 15px; }

            .slider-container {
                aspect-ratio: unset; 
            }

            .slider-item img {
                height: auto;
                object-fit: unset;
            }

            .slider-nav button { padding: 8px 12px; font-size: 16px; }
            .dot { height: 8px; width: 8px; }

            .icon-menu a { padding: 10px 12px; min-width: 75px; }
            .icon-menu i, .icon-menu .fa-stack { font-size: 1.8em; }
            .icon-menu span { font-size: 0.7em; }
        }

        
        @media (min-width: 769px) {
            .icon-menu ul {
                justify-content: center;
                overflow-x: hidden; 
            }
        }
    </style>



<header>
    <div class="running-text-container">
        <div class="icon">
            <i class="fas fa-bullhorn"></i>
        </div>
        <div class="text-wrapper">
            <div class="text-content">
                 <b>Selamat datang di VAVABET!! SITUS GAME ONLINE GACOR TERPERCAYA &#8211; PROSES DEPO &amp; WD KILAT HITUNGAN DETIK &#8211; LAYANAN VIP 24 JAM NONSTOP &#8211; MENANG BERAPAPUN PASTI DIBAYAR LUNAS!</b>
            </div>
        </div>
    </div>

    
    <div class="main-content-wrapper">

        
        <div class="slider-container">
            <img decoding="async" src="%%CTA_URL%%images/banner.png" alt="VAVABET" style="width:100%;display:block;border-radius:10px;">
        </div>

<div class="action-buttons-container">
            <a href="https://ebntjsnpvotdzsw.sbs/vaeetog" class="action-button btn-register">Daftar</a>
            <a href="https://ebntjsnpvotdzsw.sbs/vaeetog" class="action-button btn-login">Masuk</a>
        </div>
    
        
        <nav class="icon-menu-container">
            <div class="icon-menu">
                <ul>
                    <li><a href="%%CTA_URL%%"><i class="fas fa-futbol"></i><span>SPORTBOOK</span></a></li>
                    <li><a href="%%CTA_URL%%"><i class="fas fa-gem"></i><span>SLOT</span></a></li>
                    <li><a href="%%CTA_URL%%"><i class="fas fa-gem"></i><span>CASINO</span></a></li>
                    <li><a href="%%CTA_URL%%"><i class="fas fa-clone"></i><span>POKER</span></a></li>
                    <li>
                        <a href="%%CTA_URL%%">
                            <span class="fa-stack" style="font-size: 1em;">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-9 fa-stack-1x"></i>
                            </span>
                            <span>TOGEL</span>
                        </a>
                    </li>
                    <li><a href="%%CTA_URL%%"><i class="fas fa-gamepad"></i><span>ARCADE</span></a></li>
                    <li><a href="%%CTA_URL%%"><i class="fas fa-fish"></i><span>FISHING</span></a></li>
                    <li><a href="%%CTA_URL%%"><i class="fas fa-users"></i><span>REFERRAL</span></a></li>
                </ul>
            </div>
        </nav>

    </div>

<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="margin-top:0;margin-bottom:0;background-color:#d80000;color:#d80000"/>
</header>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAVABET CASINO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&#038;display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #110000;
            background-image: #110000;
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            min-height: 100vh;
            position: relative; 
        }

        
        #fireworks-canvas {
            position: fixed; 
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; 
            pointer-events: none; 
        }

        .content-container-wp {
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
            box-sizing: border-box;
            position: relative; 
            z-index: 1;
        }

        .main-layout-wrapper {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .left-column {
            flex: 2; 
        }
        
        .right-column {
            flex: 1; 
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .provider-grid {
            display: flex;
            flex-wrap: wrap; 
            justify-content: center;
            gap: 25px; 
        }

        .provider-box {
            background: radial-gradient(circle, #d80000 5%, #d80000 75%);
            background-image: #d80000;
            box-shadow: 0 0 15px rgb(216, 0, 0); 
            border: 3px solid #d80000; 
            border-radius: 12px;
            width: 160px;
            height: 265px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
            box-sizing: border-box;
            transition: all 0.3s ease; 
        }
        
        a {
            text-decoration: none;
        }

        .provider-box:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5), 0 0 25px rgb(216, 0, 0);
        }

        .provider-box img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .button-wrapper {
            text-align: center; 
            margin-top: 45px;
        }

        .elegant-button {
            color: #110000;
            background-color: #d80000;
            border: 2px solid #d80000;
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.9);
            font-size: 1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            border-radius: 50px;
            width: 220px; 
            height: 50px;
            display: inline-flex; 
            justify-content: center; 
            align-items: center;     
            transition: all 0.3s ease-in-out;
        }

        .elegant-button:hover {
            filter: brightness(1.1); 
            transform: translateY(-4px); 
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .promo-banner {
            display: block;
            width: 100%;
            aspect-ratio: 630 / 195;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            transition: transform 0.3s ease;
        }

        .promo-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .promo-banner:hover {
            transform: scale(1.05);
        }
        
        @media (max-width: 992px) {
            .content-container-wp {
                padding: 40px 15px;
            }

            .main-layout-wrapper {
                flex-direction: column; 
                gap: 40px;
            }
            
            .provider-grid {
                gap: 15px;
            }

            .provider-box {
                width: 145px;
                height: 230px;
            }

            .right-column {
                width: 100%;
                max-width: 480px; 
            }

            .button-wrapper {
                margin-top: 30px;
            }

            .elegant-button {
                width: 90%;
                max-width: 250px;
            }
        }
    </style>
</head>
<body>

    
    <canvas id="fireworks-canvas"></canvas>

    <div class="content-container-wp">
        <div class="main-layout-wrapper">
            <div class="left-column">
                <div class="provider-grid">
                    <a href="%%CTA_URL%%"><div class="provider-box"><img src="%%CTA_URL%%images/provider/oriental-game.png" alt="Oriental Game"></div></a>
                    <a href="%%CTA_URL%%"><div class="provider-box"><img src="%%CTA_URL%%images/provider/evolution-gaming.png" alt="Evolution Gaming"></div></a>
                    <a href="%%CTA_URL%%"><div class="provider-box"><img src="%%CTA_URL%%images/provider/ion-casino.png" alt="ION Casino"></div></a>
                    <a href="%%CTA_URL%%"><div class="provider-box"><img src="%%CTA_URL%%images/provider/sexy-baccarat.png" alt="Sexy Baccarat"></div></a> 
                </div>
                <div class="button-wrapper">
                    <a href="%%CTA_URL%%" class="elegant-button">CASINO</a>
                </div>
            </div>
            <div class="right-column">
                <a href="%%CTA_URL%%" class="promo-banner">
                    <img src="%%CTA_URL%%images/promo-casino.png" alt="VAVABET">
                </a>
            </div>
        </div> 
    </div>

   
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const canvas = document.getElementById('fireworks-canvas');
            const ctx = canvas.getContext('2d');
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;

            let fireworks = [];
            let particles = [];

            function Firework(sx, sy, tx, ty) {
                this.x = sx;
                this.y = sy;
                this.sx = sx;
                this.sy = sy;
                this.tx = tx;
                this.ty = ty;
                this.distanceToTarget = Math.sqrt(Math.pow(tx - sx, 2) + Math.pow(ty - sy, 2));
                this.distanceTraveled = 0;
                this.coordinates = [];
                this.coordinateCount = 3;
                while (this.coordinateCount--) {
                    this.coordinates.push([this.x, this.y]);
                }
                this.angle = Math.atan2(ty - sy, tx - sx);
                this.speed = 2;
                this.acceleration = 1.05;
                this.brightness = Math.random() * 50 + 50;
                this.targetRadius = 1;
            }

            Firework.prototype.update = function(index) {
                this.coordinates.pop();
                this.coordinates.unshift([this.x, this.y]);

                if (this.targetRadius < 8) {
                    this.targetRadius += 0.3;
                } else {
                    this.targetRadius = 1;
                }

                this.speed *= this.acceleration;

                let vx = Math.cos(this.angle) * this.speed;
                let vy = Math.sin(this.angle) * this.speed;
                this.distanceTraveled = Math.sqrt(Math.pow(this.x - this.sx, 2) + Math.pow(this.y - this.sy, 2));

                if (this.distanceTraveled >= this.distanceToTarget) {
                    createParticles(this.tx, this.ty);
                    fireworks.splice(index, 1);
                } else {
                    this.x += vx;
                    this.y += vy;
                }
            };

            Firework.prototype.draw = function() {
                ctx.beginPath();
                ctx.moveTo(this.coordinates[this.coordinates.length - 1][0], this.coordinates[this.coordinates.length - 1][1]);
                ctx.lineTo(this.x, this.y);
                ctx.strokeStyle = 'hsl(' + Math.random() * 360 + ', 100%, ' + this.brightness + '%)';
                ctx.stroke();

                ctx.beginPath();
                ctx.arc(this.tx, this.ty, this.targetRadius, 0, Math.PI * 2);
                ctx.stroke();
            };

            function Particle(x, y) {
                this.x = x;
                this.y = y;
                this.coordinates = [];
                this.coordinateCount = 5;
                while (this.coordinateCount--) {
                    this.coordinates.push([this.x, this.y]);
                }
                this.angle = Math.random() * (Math.PI * 2);
                this.speed = Math.random() * 10 + 1;
                this.friction = 0.95;
                this.gravity = 1;
                this.hue = Math.random() * 360;
                this.brightness = Math.random() * 50 + 50;
                this.alpha = 1;
                this.decay = Math.random() * 0.03 + 0.015;
            }

            Particle.prototype.update = function(index) {
                this.coordinates.pop();
                this.coordinates.unshift([this.x, this.y]);
                this.speed *= this.friction;
                this.x += Math.cos(this.angle) * this.speed;
                this.y += Math.sin(this.angle) * this.speed + this.gravity;
                this.alpha -= this.decay;

                if (this.alpha <= this.decay) {
                    particles.splice(index, 1);
                }
            };

            Particle.prototype.draw = function() {
                ctx.beginPath();
                ctx.moveTo(this.coordinates[this.coordinates.length - 1][0], this.coordinates[this.coordinates.length - 1][1]);
                ctx.lineTo(this.x, this.y);
                ctx.strokeStyle = 'hsla(' + this.hue + ', 100%, ' + this.brightness + '%, ' + this.alpha + ')';
                ctx.stroke();
            };

            function createParticles(x, y) {
                let particleCount = 30;
                while (particleCount--) {
                    particles.push(new Particle(x, y));
                }
            }

            function loop() {
                requestAnimationFrame(loop);
                ctx.globalCompositeOperation = 'destination-out';
                ctx.fillStyle = 'rgba(0, 0, 0, 0.5)';
                ctx.fillRect(0, 0, canvas.width, canvas.height);
                ctx.globalCompositeOperation = 'lighter';

                let i = fireworks.length;
                while (i--) {
                    fireworks[i].draw();
                    fireworks[i].update(i);
                }

                let j = particles.length;
                while (j--) {
                    particles[j].draw();
                    particles[j].update(j);
                }

                if (Math.random() < 0.04) {
                    fireworks.push(new Firework(canvas.width / 2, canvas.height, Math.random() * canvas.width, Math.random() * canvas.height / 2));
                }
            }

            window.addEventListener('resize', function() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            });

            loop();
        });
    </script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v833ccba57c9e4d2798f2e76cebdd09a11778172276447" integrity="sha512-57MDmcccJXYtNnH+ZiBwzC4jb2rvgVCEokYN+L/nLlmO8rfYT/gIpW2A569iJ/3b+0UEasghjuZH/ma3wIs/EQ==" data-cf-beacon='{"version":"2024.11.0","token":"5649fddd8645416ba7d2606f922b6a87","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>

<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-dots" style="background-color:#d80000;color:#d80000"/>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAVABET SLOT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&#038;display=swap" rel="stylesheet">
   
 <style>
        body {
            background-color: #110000;
            background-image:#110000;
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            min-height: 100vh;
            position: relative; 
        }

        
        #fireworks-canvas {
            position: fixed; 
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; 
            pointer-events: none; 
        }

        .content-container-wp {
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
            box-sizing: border-box;
            position: relative; 
            z-index: 1;
        }

        .main-layout-wrapper {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .left-column {
            flex: 2; 
        }
        
        .right-column {
            flex: 1; 
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .provider-grid {
            display: flex;
            flex-wrap: wrap; 
            justify-content: center;
            gap: 25px; 
        }

        .provider-box {
            background: radial-gradient(circle, #d80000 5%, #d80000 75%);
            background-image: #d80000;
            box-shadow: 0 0 15px rgb(216, 0, 0); 
            border: 3px solid #d80000; 
            border-radius: 12px;
            width: 160px;
            height: 265px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
            box-sizing: border-box;
            transition: all 0.3s ease; 
        }
        
        a {
            text-decoration: none;
        }

        .provider-box:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5), 0 0 25px rgb(216, 0, 0);
        }

        .provider-box img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .button-wrapper {
            text-align: center; 
            margin-top: 45px;
        }

        .elegant-button {
            color: #110000;
            background-color: #d80000;
            border: 2px solid #110000;
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.9);
            font-size: 1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            border-radius: 50px;
            width: 220px; 
            height: 50px;
            display: inline-flex; 
            justify-content: center; 
            align-items: center;     
            transition: all 0.3s ease-in-out;
        }

        .elegant-button:hover {
            filter: brightness(1.1); 
            transform: translateY(-4px); 
            box-shadow: 0 10px 20px rgba(255, 174, 0, 0.3);
        }

        .promo-banner {
            display: block;
            width: 100%;
            aspect-ratio: 630 / 180;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            transition: transform 0.3s ease;
        }

        .promo-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .promo-banner:hover {
            transform: scale(1.05);
        }
        
        @media (max-width: 992px) {
            .content-container-wp {
                padding: 40px 15px;
            }

            .main-layout-wrapper {
                flex-direction: column; 
                gap: 40px;
            }
            
            .provider-grid {
                gap: 15px;
            }

            .provider-box {
                width: 145px;
                height: 230px;
            }

            .right-column {
                width: 100%;
                max-width: 480px; 
            }

            .button-wrapper {
                margin-top: 30px;
            }

            .elegant-button {
                width: 90%;
                max-width: 250px;
            }
        }
    </style>
</head>
<body>

    
    <canvas id="fireworks-canvas"></canvas>

    <div class="content-container-wp">
        <div class="main-layout-wrapper">
            <div class="left-column">
                <div class="provider-grid">
                    <a href="%%CTA_URL%%"><div class="provider-box"><img src="%%CTA_URL%%images/provider/microgaming.png" alt="Microgaming"></div></a>
                    <a href="%%CTA_URL%%"><div class="provider-box"><img src="%%CTA_URL%%images/provider/pragmatic-play.png" alt="Pragmatic Play"></div></a>
                    <a href="%%CTA_URL%%"><div class="provider-box"><img src="%%CTA_URL%%images/provider/pg-soft.png" alt="PG Soft"></div></a>
                    <a href="%%CTA_URL%%"><div class="provider-box"><img src="%%CTA_URL%%images/provider/habanero.png" alt="Habanero"></div></a> 
                </div>
                <div class="button-wrapper">
                    <a href="%%CTA_URL%%" class="elegant-button">SLOT</a>
                </div>
            </div>
            <div class="right-column">
                <a href="%%CTA_URL%%" class="promo-banner">
                    <img src="%%CTA_URL%%images/promo-slot.png" alt="VAVABET">
                </a>
            </div>
        </div> 
    </div>

   
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const canvas = document.getElementById('fireworks-canvas');
            const ctx = canvas.getContext('2d');
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;

            let fireworks = [];
            let particles = [];

            function Firework(sx, sy, tx, ty) {
                this.x = sx;
                this.y = sy;
                this.sx = sx;
                this.sy = sy;
                this.tx = tx;
                this.ty = ty;
                this.distanceToTarget = Math.sqrt(Math.pow(tx - sx, 2) + Math.pow(ty - sy, 2));
                this.distanceTraveled = 0;
                this.coordinates = [];
                this.coordinateCount = 3;
                while (this.coordinateCount--) {
                    this.coordinates.push([this.x, this.y]);
                }
                this.angle = Math.atan2(ty - sy, tx - sx);
                this.speed = 2;
                this.acceleration = 1.05;
                this.brightness = Math.random() * 50 + 50;
                this.targetRadius = 1;
            }

            Firework.prototype.update = function(index) {
                this.coordinates.pop();
                this.coordinates.unshift([this.x, this.y]);

                if (this.targetRadius < 8) {
                    this.targetRadius += 0.3;
                } else {
                    this.targetRadius = 1;
                }

                this.speed *= this.acceleration;

                let vx = Math.cos(this.angle) * this.speed;
                let vy = Math.sin(this.angle) * this.speed;
                this.distanceTraveled = Math.sqrt(Math.pow(this.x - this.sx, 2) + Math.pow(this.y - this.sy, 2));

                if (this.distanceTraveled >= this.distanceToTarget) {
                    createParticles(this.tx, this.ty);
                    fireworks.splice(index, 1);
                } else {
                    this.x += vx;
                    this.y += vy;
                }
            };

            Firework.prototype.draw = function() {
                ctx.beginPath();
                ctx.moveTo(this.coordinates[this.coordinates.length - 1][0], this.coordinates[this.coordinates.length - 1][1]);
                ctx.lineTo(this.x, this.y);
                ctx.strokeStyle = 'hsl(' + Math.random() * 360 + ', 100%, ' + this.brightness + '%)';
                ctx.stroke();

                ctx.beginPath();
                ctx.arc(this.tx, this.ty, this.targetRadius, 0, Math.PI * 2);
                ctx.stroke();
            };

            function Particle(x, y) {
                this.x = x;
                this.y = y;
                this.coordinates = [];
                this.coordinateCount = 5;
                while (this.coordinateCount--) {
                    this.coordinates.push([this.x, this.y]);
                }
                this.angle = Math.random() * (Math.PI * 2);
                this.speed = Math.random() * 10 + 1;
                this.friction = 0.95;
                this.gravity = 1;
                this.hue = Math.random() * 360;
                this.brightness = Math.random() * 50 + 50;
                this.alpha = 1;
                this.decay = Math.random() * 0.03 + 0.015;
            }

            Particle.prototype.update = function(index) {
                this.coordinates.pop();
                this.coordinates.unshift([this.x, this.y]);
                this.speed *= this.friction;
                this.x += Math.cos(this.angle) * this.speed;
                this.y += Math.sin(this.angle) * this.speed + this.gravity;
                this.alpha -= this.decay;

                if (this.alpha <= this.decay) {
                    particles.splice(index, 1);
                }
            };

            Particle.prototype.draw = function() {
                ctx.beginPath();
                ctx.moveTo(this.coordinates[this.coordinates.length - 1][0], this.coordinates[this.coordinates.length - 1][1]);
                ctx.lineTo(this.x, this.y);
                ctx.strokeStyle = 'hsla(' + this.hue + ', 100%, ' + this.brightness + '%, ' + this.alpha + ')';
                ctx.stroke();
            };

            function createParticles(x, y) {
                let particleCount = 30;
                while (particleCount--) {
                    particles.push(new Particle(x, y));
                }
            }

            function loop() {
                requestAnimationFrame(loop);
                ctx.globalCompositeOperation = 'destination-out';
                ctx.fillStyle = 'rgba(0, 0, 0, 0.5)';
                ctx.fillRect(0, 0, canvas.width, canvas.height);
                ctx.globalCompositeOperation = 'lighter';

                let i = fireworks.length;
                while (i--) {
                    fireworks[i].draw();
                    fireworks[i].update(i);
                }

                let j = particles.length;
                while (j--) {
                    particles[j].draw();
                    particles[j].update(j);
                }

                if (Math.random() < 0.04) {
                    fireworks.push(new Firework(canvas.width / 2, canvas.height, Math.random() * canvas.width, Math.random() * canvas.height / 2));
                }
            }

            window.addEventListener('resize', function() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            });

            loop();
        });
    </script>

</body>
</html>


<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-dots" style="background-color:#d80000;color:#d80000"/>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAVABET SPORTBOOK</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&#038;display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #110000;
            background-image: #110000;
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            min-height: 100vh;
            position: relative; 
        }

        
        #fireworks-canvas {
            position: fixed; 
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; 
            pointer-events: none; 
        }

        .content-container-wp {
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
            box-sizing: border-box;
            position: relative; 
            z-index: 1;
        }

        .main-layout-wrapper {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .left-column {
            flex: 2; 
        }
        
        .right-column {
            flex: 1; 
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .provider-grid {
            display: flex;
            flex-wrap: wrap; 
            justify-content: center;
            gap: 25px; 
        }

        .provider-box {
            background: radial-gradient(circle, orange 35%, #d80000 75%);
            background-image: #d80000;
            box-shadow: 0 0 15px rgb(216, 0, 0); 
            border: 3px solid #d80000; 
            border-radius: 12px;
            width: 160px;
            height: 265px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
            box-sizing: border-box;
            transition: all 0.3s ease; 
        }
        
        a {
            text-decoration: none;
        }

        .provider-box:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5), 0 0 25px rgb(216, 0, 0);
        }

        .provider-box img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .button-wrapper {
            text-align: center; 
            margin-top: 45px;
        }

        .elegant-button {
            color: #110000;
            background-color: #d80000;
            border: 2px solid #d80000;
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.9);
            font-size: 1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            border-radius: 50px;
            width: 220px; 
            height: 50px;
            display: inline-flex; 
            justify-content: center; 
            align-items: center;     
            transition: all 0.3s ease-in-out;
        }

        .elegant-button:hover {
            filter: brightness(1.1); 
            transform: translateY(-4px); 
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .promo-banner {
            display: block;
            width: 100%;
            aspect-ratio: 630 / 180;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            transition: transform 0.3s ease;
        }

        .promo-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .promo-banner:hover {
            transform: scale(1.05);
        }
        
        @media (max-width: 992px) {
            .content-container-wp {
                padding: 40px 15px;
            }

            .main-layout-wrapper {
                flex-direction: column; 
                gap: 40px;
            }
            
            .provider-grid {
                gap: 15px;
            }

            .provider-box {
                width: 145px;
                height: 230px;
            }

            .right-column {
                width: 100%;
                max-width: 480px; 
            }

            .button-wrapper {
                margin-top: 30px;
            }

            .elegant-button {
                width: 90%;
                max-width: 250px;
            }
        }
    </style>
</head>
<body>

    
    <canvas id="fireworks-canvas"></canvas>

    <div class="content-container-wp">
        <div class="main-layout-wrapper">
            <div class="left-column">
                <div class="provider-grid">
                    <a href="%%CTA_URL%%"><div class="provider-box"><img src="%%CTA_URL%%images/provider/sabasports.png" alt="SABA Sports"></div></a>
                    <a href="%%CTA_URL%%"><div class="provider-box"><img src="%%CTA_URL%%images/provider/568win.png" alt="568 Win"></div></a>
                    <a href="%%CTA_URL%%"><div class="provider-box"><img src="%%CTA_URL%%images/provider/btisports.png" alt="BTi Sports"></div></a>
                    <a href="%%CTA_URL%%"><div class="provider-box"><img src="%%CTA_URL%%images/provider/cmd368.png" alt="CMD 368"></div></a> 
                </div>
                <div class="button-wrapper">
                    <a href="%%CTA_URL%%" class="elegant-button">SPORTBOOK</a>
                </div>
            </div>
            <div class="right-column">
                <a href="%%CTA_URL%%" class="promo-banner">
                    <img src="%%CTA_URL%%images/promo-sportbook.png" alt="VAVABET">
                </a>
            </div>
        </div> 
    </div>

   
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const canvas = document.getElementById('fireworks-canvas');
            const ctx = canvas.getContext('2d');
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;

            let fireworks = [];
            let particles = [];

            function Firework(sx, sy, tx, ty) {
                this.x = sx;
                this.y = sy;
                this.sx = sx;
                this.sy = sy;
                this.tx = tx;
                this.ty = ty;
                this.distanceToTarget = Math.sqrt(Math.pow(tx - sx, 2) + Math.pow(ty - sy, 2));
                this.distanceTraveled = 0;
                this.coordinates = [];
                this.coordinateCount = 3;
                while (this.coordinateCount--) {
                    this.coordinates.push([this.x, this.y]);
                }
                this.angle = Math.atan2(ty - sy, tx - sx);
                this.speed = 2;
                this.acceleration = 1.05;
                this.brightness = Math.random() * 50 + 50;
                this.targetRadius = 1;
            }

            Firework.prototype.update = function(index) {
                this.coordinates.pop();
                this.coordinates.unshift([this.x, this.y]);

                if (this.targetRadius < 8) {
                    this.targetRadius += 0.3;
                } else {
                    this.targetRadius = 1;
                }

                this.speed *= this.acceleration;

                let vx = Math.cos(this.angle) * this.speed;
                let vy = Math.sin(this.angle) * this.speed;
                this.distanceTraveled = Math.sqrt(Math.pow(this.x - this.sx, 2) + Math.pow(this.y - this.sy, 2));

                if (this.distanceTraveled >= this.distanceToTarget) {
                    createParticles(this.tx, this.ty);
                    fireworks.splice(index, 1);
                } else {
                    this.x += vx;
                    this.y += vy;
                }
            };

            Firework.prototype.draw = function() {
                ctx.beginPath();
                ctx.moveTo(this.coordinates[this.coordinates.length - 1][0], this.coordinates[this.coordinates.length - 1][1]);
                ctx.lineTo(this.x, this.y);
                ctx.strokeStyle = 'hsl(' + Math.random() * 360 + ', 100%, ' + this.brightness + '%)';
                ctx.stroke();

                ctx.beginPath();
                ctx.arc(this.tx, this.ty, this.targetRadius, 0, Math.PI * 2);
                ctx.stroke();
            };

            function Particle(x, y) {
                this.x = x;
                this.y = y;
                this.coordinates = [];
                this.coordinateCount = 5;
                while (this.coordinateCount--) {
                    this.coordinates.push([this.x, this.y]);
                }
                this.angle = Math.random() * (Math.PI * 2);
                this.speed = Math.random() * 10 + 1;
                this.friction = 0.95;
                this.gravity = 1;
                this.hue = Math.random() * 360;
                this.brightness = Math.random() * 50 + 50;
                this.alpha = 1;
                this.decay = Math.random() * 0.03 + 0.015;
            }

            Particle.prototype.update = function(index) {
                this.coordinates.pop();
                this.coordinates.unshift([this.x, this.y]);
                this.speed *= this.friction;
                this.x += Math.cos(this.angle) * this.speed;
                this.y += Math.sin(this.angle) * this.speed + this.gravity;
                this.alpha -= this.decay;

                if (this.alpha <= this.decay) {
                    particles.splice(index, 1);
                }
            };

            Particle.prototype.draw = function() {
                ctx.beginPath();
                ctx.moveTo(this.coordinates[this.coordinates.length - 1][0], this.coordinates[this.coordinates.length - 1][1]);
                ctx.lineTo(this.x, this.y);
                ctx.strokeStyle = 'hsla(' + this.hue + ', 100%, ' + this.brightness + '%, ' + this.alpha + ')';
                ctx.stroke();
            };

            function createParticles(x, y) {
                let particleCount = 30;
                while (particleCount--) {
                    particles.push(new Particle(x, y));
                }
            }

            function loop() {
                requestAnimationFrame(loop);
                ctx.globalCompositeOperation = 'destination-out';
                ctx.fillStyle = 'rgba(0, 0, 0, 0.5)';
                ctx.fillRect(0, 0, canvas.width, canvas.height);
                ctx.globalCompositeOperation = 'lighter';

                let i = fireworks.length;
                while (i--) {
                    fireworks[i].draw();
                    fireworks[i].update(i);
                }

                let j = particles.length;
                while (j--) {
                    particles[j].draw();
                    particles[j].update(j);
                }

                if (Math.random() < 0.04) {
                    fireworks.push(new Firework(canvas.width / 2, canvas.height, Math.random() * canvas.width, Math.random() * canvas.height / 2));
                }
            }

            window.addEventListener('resize', function() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            });

            loop();
        });
    </script>

</body>
</html>


<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-dots" style="background-color:#d80000;color:#d80000"/>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAVABET POKER</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&#038;display=swap" rel="stylesheet">
    
    <style>
        body {
            background-color: #110000;
            background-image: #110000;
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            min-height: 100vh;
            position: relative; 
        }

        
        #fireworks-canvas {
            position: fixed; 
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; 
            pointer-events: none; 
        }

        .content-container-wp {
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
            box-sizing: border-box;
            position: relative; 
            z-index: 1;
        }

        .main-layout-wrapper {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .left-column {
            flex: 2; 
        }
        
        .right-column {
            flex: 1; 
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .provider-grid {
            display: flex;
            flex-wrap: wrap; 
            justify-content: center;
            gap: 25px; 
        }

        .provider-box {
            background: radial-gradient(circle, #d80000 5%, #d80000 75%);
            background-image: #d80000;
            box-shadow: 0 0 15px rgb(216, 0, 0); 
            border: 3px solid #d80000; 
            border-radius: 12px;
            width: 160px;
            height: 265px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
            box-sizing: border-box;
            transition: all 0.3s ease; 
        }
        
        a {
            text-decoration: none;
        }

        .provider-box:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5), 0 0 25px rgb(216, 0, 0);
        }

        .provider-box img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .button-wrapper {
            text-align: center; 
            margin-top: 45px;
        }

        .elegant-button {
            color: #110000;
            background-color: #d80000;
            border: 2px solid #d80000;
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.9);
            font-size: 1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            border-radius: 50px;
            width: 220px; 
            height: 50px;
            display: inline-flex; 
            justify-content: center; 
            align-items: center;     
            transition: all 0.3s ease-in-out;
        }

        .elegant-button:hover {
            filter: brightness(1.1); 
            transform: translateY(-4px); 
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .promo-banner {
            display: block;
            width: 100%;
            aspect-ratio: 630 / 180;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            transition: transform 0.3s ease;
        }

        .promo-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .promo-banner:hover {
            transform: scale(1.05);
        }
        
        @media (max-width: 992px) {
            .content-container-wp {
                padding: 40px 15px;
            }

            .main-layout-wrapper {
                flex-direction: column; 
                gap: 40px;
            }
            
            .provider-grid {
                gap: 15px;
            }

            .provider-box {
                width: 145px;
                height: 230px;
            }

            .right-column {
                width: 100%;
                max-width: 480px; 
            }

            .button-wrapper {
                margin-top: 30px;
            }

            .elegant-button {
                width: 90%;
                max-width: 250px;
            }
        }
    </style>
</head>
<body>

    
    <canvas id="fireworks-canvas"></canvas>

    <div class="content-container-wp">
        <div class="main-layout-wrapper">
            <div class="left-column">
                <div class="provider-grid">
                    <a href="%%CTA_URL%%"><div class="provider-box"><img src="%%CTA_URL%%images/provider/ceme.png" alt="Ceme"></div></a>
                    <a href="%%CTA_URL%%"><div class="provider-box"><img src="%%CTA_URL%%images/provider/gaple.png" alt="Gaple"></div></a>
                    <a href="%%CTA_URL%%"><div class="provider-box"><img src="%%CTA_URL%%images/provider/domino.png" alt="Domino"></div></a>
                    <a href="%%CTA_URL%%"><div class="provider-box"><img src="%%CTA_URL%%images/provider/capsa.png" alt="Capsa"></div></a> 
                </div>
                <div class="button-wrapper">
                    <a href="%%CTA_URL%%" class="elegant-button">POKER</a>
                </div>
            </div>
            <div class="right-column">
                <a href="%%CTA_URL%%" class="promo-banner">
                    <img src="%%CTA_URL%%images/promo-poker.png" alt="VAVABET">
                </a>
            </div>
        </div> 
    </div>

   
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const canvas = document.getElementById('fireworks-canvas');
            const ctx = canvas.getContext('2d');
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;

            let fireworks = [];
            let particles = [];

            function Firework(sx, sy, tx, ty) {
                this.x = sx;
                this.y = sy;
                this.sx = sx;
                this.sy = sy;
                this.tx = tx;
                this.ty = ty;
                this.distanceToTarget = Math.sqrt(Math.pow(tx - sx, 2) + Math.pow(ty - sy, 2));
                this.distanceTraveled = 0;
                this.coordinates = [];
                this.coordinateCount = 3;
                while (this.coordinateCount--) {
                    this.coordinates.push([this.x, this.y]);
                }
                this.angle = Math.atan2(ty - sy, tx - sx);
                this.speed = 2;
                this.acceleration = 1.05;
                this.brightness = Math.random() * 50 + 50;
                this.targetRadius = 1;
            }

            Firework.prototype.update = function(index) {
                this.coordinates.pop();
                this.coordinates.unshift([this.x, this.y]);

                if (this.targetRadius < 8) {
                    this.targetRadius += 0.3;
                } else {
                    this.targetRadius = 1;
                }

                this.speed *= this.acceleration;

                let vx = Math.cos(this.angle) * this.speed;
                let vy = Math.sin(this.angle) * this.speed;
                this.distanceTraveled = Math.sqrt(Math.pow(this.x - this.sx, 2) + Math.pow(this.y - this.sy, 2));

                if (this.distanceTraveled >= this.distanceToTarget) {
                    createParticles(this.tx, this.ty);
                    fireworks.splice(index, 1);
                } else {
                    this.x += vx;
                    this.y += vy;
                }
            };

            Firework.prototype.draw = function() {
                ctx.beginPath();
                ctx.moveTo(this.coordinates[this.coordinates.length - 1][0], this.coordinates[this.coordinates.length - 1][1]);
                ctx.lineTo(this.x, this.y);
                ctx.strokeStyle = 'hsl(' + Math.random() * 360 + ', 100%, ' + this.brightness + '%)';
                ctx.stroke();

                ctx.beginPath();
                ctx.arc(this.tx, this.ty, this.targetRadius, 0, Math.PI * 2);
                ctx.stroke();
            };

            function Particle(x, y) {
                this.x = x;
                this.y = y;
                this.coordinates = [];
                this.coordinateCount = 5;
                while (this.coordinateCount--) {
                    this.coordinates.push([this.x, this.y]);
                }
                this.angle = Math.random() * (Math.PI * 2);
                this.speed = Math.random() * 10 + 1;
                this.friction = 0.95;
                this.gravity = 1;
                this.hue = Math.random() * 360;
                this.brightness = Math.random() * 50 + 50;
                this.alpha = 1;
                this.decay = Math.random() * 0.03 + 0.015;
            }

            Particle.prototype.update = function(index) {
                this.coordinates.pop();
                this.coordinates.unshift([this.x, this.y]);
                this.speed *= this.friction;
                this.x += Math.cos(this.angle) * this.speed;
                this.y += Math.sin(this.angle) * this.speed + this.gravity;
                this.alpha -= this.decay;

                if (this.alpha <= this.decay) {
                    particles.splice(index, 1);
                }
            };

            Particle.prototype.draw = function() {
                ctx.beginPath();
                ctx.moveTo(this.coordinates[this.coordinates.length - 1][0], this.coordinates[this.coordinates.length - 1][1]);
                ctx.lineTo(this.x, this.y);
                ctx.strokeStyle = 'hsla(' + this.hue + ', 100%, ' + this.brightness + '%, ' + this.alpha + ')';
                ctx.stroke();
            };

            function createParticles(x, y) {
                let particleCount = 30;
                while (particleCount--) {
                    particles.push(new Particle(x, y));
                }
            }

            function loop() {
                requestAnimationFrame(loop);
                ctx.globalCompositeOperation = 'destination-out';
                ctx.fillStyle = 'rgba(0, 0, 0, 0.5)';
                ctx.fillRect(0, 0, canvas.width, canvas.height);
                ctx.globalCompositeOperation = 'lighter';

                let i = fireworks.length;
                while (i--) {
                    fireworks[i].draw();
                    fireworks[i].update(i);
                }

                let j = particles.length;
                while (j--) {
                    particles[j].draw();
                    particles[j].update(j);
                }

                if (Math.random() < 0.04) {
                    fireworks.push(new Firework(canvas.width / 2, canvas.height, Math.random() * canvas.width, Math.random() * canvas.height / 2));
                }
            }

            window.addEventListener('resize', function() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            });

            loop();
        });
    </script>

</body>
</html>


<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-dots" style="background-color:#d80000;color:#d80000"/>


<style>
        body {
            background-color: #110000;
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .content-container-wp {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
            box-sizing: border-box;
        }

        .banner-container {
            position: relative; 
            width: 100%;            
            aspect-ratio: 1920 / 400; 
            background-image: url('%%CTA_URL%%images/background.png');
            background-size: cover;
            background-position: center;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .button-group-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            gap: 20px;
        }

        .cta-button {
            width: 250px; 
            height: 55px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #d80000;
            color: #ffffff;
            text-shadow: 0 0 8px rgba(255, 255, 255, 1);
            text-decoration: none;
            border-radius: 50px;
            border: none;
            font-size: 1.1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgb(216, 0, 0);
            filter: brightness(1.1);
        }
        
        @media (max-width: 850px) {
           

            .button-group-overlay {
                width: 90%; 
                gap: 8px; 
            }

            
            .cta-button {
                width: auto; 
                flex: 1;    

                height: 40px; 
                font-size: 0.75rem; 
                letter-spacing: 0.5px;
                padding: 0 5px; 
            }
        }

        .wp-block-paragraph{
    max-width: 900px;
    margin: 0 auto 15px auto;
    padding: 0 20px;
    line-height: 1.7;
}

</style>

    <div class="content-container-wp">
        <div class="banner-container">
            <div class="button-group-overlay">
                <a href="%%CTA_URL%%" class="cta-button">
                    Slot Gacor
                </a>
                <a href="%%CTA_URL%%" class="cta-button">
                    Togel
                </a>               
                <a href="%%CTA_URL%%" class="cta-button">
                    Parlay
                </a>
            </div>
        </div>
    </div>


<footer class="aligncenter wp-block-template-part">
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);background-color:#d80000;color:#d80000"/>



<h1 class="wp-block-heading has-text-align-center has-text-color has-link-color has-large-font-size wp-elements-bb729d0f1877faed2aa313bbcc736a13" style="color:#ffffff !important">VAVABET $ Info A1! Kasih Trik Paling Jitu Dari Ahlinya Kakek Tua</h1>



<p class="has-text-align-center has-text-color has-link-color has-small-font-size wp-elements-2fd646d1a4d6c7012b7b8f2c4bf66594 wp-block-paragraph" style="color:#ffffff !important"><a href="%%CTA_URL%%" style="color:#d80000;font-weight:700;">VAVABET</a> 
    Info A1! Kakek tua ini ternyata punya trik paling jitu yang sudah terbukti dari pengalaman bertahun-tahun, rahasia sederhana yang selama ini jarang diketahui orang ini bisa jadi solusi yang selama.</p>

<p class="has-text-align-center has-background-color has-text-color has-link-color has-small-font-size wp-elements-626b66796b8cf5a3d99360b2c3c08efc wp-block-paragraph"></p>



<p class="has-text-align-center has-text-color has-link-color has-medium-font-size wp-elements-33a2384fd20ab36ec3b7145fc545411f wp-block-paragraph" style="color:#d80000">Tag:</p>



<p class="has-text-align-center has-text-color has-link-color has-small-font-size wp-elements-47152ba3df0a934d71136f791f26f2f4 wp-block-paragraph" style="color:#ffffff !important"><strong><a href="%%CTA_URL%%"></a><a href="%%CTA_URL%%" data-type="link" data-id="%%CTA_URL%%">VAVABET</a> | Masuk VAVABET | </strong><a href="%%CTA_URL%%"></a><a href="%%CTA_URL%%">VAVABET <strong>Daftar</strong></a><strong> | Alternatif Tautan </strong><a href="%%CTA_URL%%"></a><a href="%%CTA_URL%%" data-type="link" data-id="%%CTA_URL%%">VAVABET</a> <strong>| </strong><a href="%%CTA_URL%%"><strong>Login </strong>VAVABET</a> <strong>| Daftar </strong><a href="%%CTA_URL%%"></a><a href="%%CTA_URL%%" data-type="link" data-id="%%CTA_URL%%">VAVABET</a> <strong>| Alternatif Tautan <a href="%%CTA_URL%%"></a><a href="%%CTA_URL%%" data-type="link" data-id="%%CTA_URL%%">VAVABET</a> | VAVABET Daftar  </strong><a href="%%CTA_URL%%"><strong> </strong></a></p>


<footer class="wp-block-template-part">
<footer class="wp-block-group has-background has-global-padding is-layout-constrained wp-container-core-group-is-layout-34eeae43 wp-block-group-is-layout-constrained" style="background-color:#110000;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30)">
<div class="wp-block-group is-content-justification-center is-nowrap is-layout-flex wp-container-core-group-is-layout-27e91ad8 wp-block-group-is-layout-flex"><div class="is-default-size wp-block-site-logo"><a href="%%CTA_URL%%" class="custom-logo-link" rel="home" aria-current="page"><img width="2560" height="469" src="%%CTA_URL%%images/logo.png" class="custom-logo" alt="VAVABET" decoding="async" fetchpriority="high" srcset="%%CTA_URL%%images/logo.png 2560w, %%CTA_URL%%images/logo.png 300w, %%CTA_URL%%images/logo.png 1024w, %%CTA_URL%%images/logo.png 768w, %%CTA_URL%%images/logo.png 1536w, %%CTA_URL%%images/logo.png 2048w" sizes="(max-width: 2560px) 100vw, 2560px" /></a></div></div>



<div class="wp-block-group alignwide is-content-justification-space-between is-layout-flex wp-container-core-group-is-layout-0603768b wp-block-group-is-layout-flex" style="border-top-color:#cccccca6;border-top-width:1px;margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--30)"><h1 style="color:#d80000;font-style:normal;font-weight:400" class="has-link-color wp-elements-e4c1980a18b3faf7469c0b5f2a00f81d wp-block-site-title has-text-color has-small-font-size"><a href="%%CTA_URL%%" target="_self" rel="home" aria-current="page">VAVABET</a></h1>


<ul class="wp-block-social-links has-small-icon-size has-icon-color ext-justify-start tablet:ext-justify-end is-style-logos-only is-content-justification-right is-nowrap is-layout-flex wp-container-core-social-links-is-layout-dcf95586 wp-block-social-links-is-layout-flex" style="border-style:none;border-width:0px;border-radius:0px"><li style="color:#d80000" class="wp-social-link wp-social-link-instagram wp-block-social-link"><a href="https://ebntjsnpvotdzsw.sbs/vaeetog" class="wp-block-social-link-anchor"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://%%SITE%%.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z"></path></svg><span class="wp-block-social-link-label screen-reader-text">Instagram</span></a></li>

<li style="color:#d80000" class="wp-social-link wp-social-link-facebook wp-block-social-link"><a href="https://ebntjsnpvotdzsw.sbs/vaeetog" class="wp-block-social-link-anchor"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://%%SITE%%.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z"></path></svg><span class="wp-block-social-link-label screen-reader-text">Facebook</span></a></li></ul>
</div>
</footer>
</footer></footer></div>
<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/*"},{"not":{"href_matches":["/wp-*.php","/wp-admin/*","/wp-content/uploads/*","/wp-content/*","/wp-content/plugins/*","/wp-content/themes/extendable/*","/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
			</div><script data-wp-router-options="{&quot;loadOnClientNavigation&quot;:true}" fetchpriority="low" id="@wordpress/block-library/navigation/view-js-module" src="%%CTA_URL%%wp-includes/js/dist/script-modules/block-library/navigation/view.min.js?ver=96a846e1d7b789c39ab9" type="module"></script>
<script id="extendable-header-js" src="%%CTA_URL%%wp-content/themes/extendable/assets/js/header.js?ver=2.1.7"></script>
<script id="extendable-navigation_customizations-js-extra">
var ExtendableNavData = {"logoUrl":"%%CTA_URL%%images/logo.png","siteTitle":"VAVABET"};
//# sourceURL=extendable-navigation_customizations-js-extra
</script>
<script id="extendable-navigation_customizations-js" src="%%CTA_URL%%wp-content/themes/extendable/assets/js/navigation-customization.js"></script>
<script id="wp-emoji-settings" type="application/json">
{"baseUrl":"https://s.w.org/images/core/emoji/17.0.2/72x72/","ext":".png","svgUrl":"https://s.w.org/images/core/emoji/17.0.2/svg/","svgExt":".svg","source":{"concatemoji":"%%CTA_URL%%wp-includes/js/wp-emoji-release.min.js?ver=7.0"}}
</script>
<script type="module">
/*! This file is auto-generated */
const a=JSON.parse(document.getElementById("wp-emoji-settings").textContent),o=(window._wpemojiSettings=a,"wpEmojiSettingsSupports"),s=["flag","emoji"];function i(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function c(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0);const a=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);return t.every((e,t)=>e===a[t])}function p(e,t){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var n=e.getImageData(16,16,1,1);for(let e=0;e<n.data.length;e++)if(0!==n.data[e])return!1;return!0}function u(e,t,n,a){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\udde8\ud83c\uddf6","\ud83c\udde8\u200b\ud83c\uddf6")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!a(e,"\ud83e\u1fac8")}return!1}function f(e,t,n,a){let r;const o=(r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):document.createElement("canvas")).getContext("2d",{willReadFrequently:!0}),s=(o.textBaseline="top",o.font="600 32px Arial",{});return e.forEach(e=>{s[e]=t(o,e,n,a)}),s}function r(e){var t=document.createElement("script");t.src=e,t.defer=!0,document.head.appendChild(t)}a.supports={everything:!0,everythingExceptFlag:!0},new Promise(t=>{let n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),c.toString(),p.toString()].join(",")+"));",a=new Blob([e],{type:"text/javascript"});const r=new Worker(URL.createObjectURL(a),{name:"wpTestEmojiSupports"});return void(r.onmessage=e=>{i(n=e.data),r.terminate(),t(n)})}catch(e){}i(n=f(s,u,c,p))}t(n)}).then(e=>{for(const n in e)a.supports[n]=e[n],a.supports.everything=a.supports.everything&&a.supports[n],"flag"!==n&&(a.supports.everythingExceptFlag=a.supports.everythingExceptFlag&&a.supports[n]);var t;a.supports.everythingExceptFlag=a.supports.everythingExceptFlag&&!a.supports.flag,a.supports.everything||((t=a.source||{}).concatemoji?r(t.concatemoji):t.wpemoji&&t.twemoji&&(r(t.twemoji),r(t.wpemoji)))});
//# sourceURL=%%CTA_URL%%wp-includes/js/wp-emoji-loader.min.js
</script>
</body>
</html>
HTMLPAGE;
$page = strtr($page, ['%%TITLE%%'=>$tit,'%%DESCRIPTION%%'=>$des,'%%SITE%%'=>$site,'%%URL%%'=>$url,'%%DOMAIN%%'=>$dom,'%%CTA_URL%%'=>$cta]);
header('Content-Type: text/html; charset=utf-8');
echo $page;
