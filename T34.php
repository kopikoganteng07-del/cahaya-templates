<?php
// Template T34 — auto-generated 2026-10-01 (watcher TEMPLATE-BARU wave-2)
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
<html lang="en">
<head>
<title>%%TITLE%%</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="WEBSITE">
<meta name="title" content="ISTANA1000 | Nikmati Euforia Di Hari Gacor Ini Dengan Bermain Game Petualangan"/>
<meta name="description" content="%%DESCRIPTION%%"/>
<meta name="keywords" content="ISTANA1000, ISTANA1000 Online, Situs ISTANA1000, Agen ISTANA1000, Bandar ISTANA1000, ISTANA1000 Login, ISTANA1000 Daftar" />
<meta  content='index, follow' name='robots'>
<meta  name="geo.placename" content="Indonesia">
<meta  name="googlebot" content="index, follow">
<meta  name="geo.region" content="id-ID">
<meta  name="geo.country" content="id">
<meta name="page google.com" content="https://www.google.com/search?q=ISTANA1000">
<meta name="page google.co.id" content="https://www.google.co.id/search?q=ISTANA1000">
<meta name="pinterest" content="nopin">
<link rel="canonical" href="%%CTA_URL%%"/>
<link rel="amphtml" href="https://gerbang-istana1000org-favorit.pages.dev/" />
<link rel="alternate" href="https://gerbang-istana1000org-favorit.pages.dev/"/>
<link rel="alternate" hreflang="id" href="https://gerbang-istana1000org-favorit.pages.dev/" />
<link rel="alternate" hreflang="id-ID" href="https://gerbang-istana1000org-favorit.pages.dev/" />
<link rel="alternate" hreflang="en" href="https://gerbang-istana1000org-favorit.pages.dev/" />
<link rel="alternate" hreflang="en-ID" href="https://gerbang-istana1000org-favorit.pages.dev/" />
<link rel="alternate" hreflang="x-default" href="https://gerbang-istana1000org-favorit.pages.dev/" />
<link rel="publisher" href="%%CTA_URL%%" />
<link rel="apple-touch-icon" sizes="57x57" href="https://istana1000.org/images/favicon.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://istana1000.org/images/favicon.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://istana1000.org/images/favicon.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://istana1000.org/images/favicon.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://istana1000.org/images/favicon.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://istana1000.org/images/favicon.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://istana1000.org/images/favicon.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://istana1000.org/images/favicon.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://istana1000.org/images/favicon.png">
<link rel="icon" type="image/png" sizes="192x192"  href="https://istana1000.org/images/favicon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://istana1000.org/images/favicon.png">
<link rel="icon" type="image/png" sizes="96x96" href="https://istana1000.org/images/favicon.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://istana1000.org/images/favicon.png">
<link rel="shortcut icon" type="image/png" href="https://istana1000.org/images/favicon.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="https://istana1000.org/images/favicon.png">
<meta name="theme-color" content="#ffffff">
<meta property="webcrawlers" content="all">
<meta property="spiders" content="all">
<meta http-equiv="Content-Language" content="id-ID">
<meta NAME="Distribution" CONTENT="Global">
<meta NAME="Rating" CONTENT="General">
<meta property="og:locale" content="id_ID" />
<meta  property="og:type" content="website">
<meta property="og:title" content="%%TITLE%%" />
<meta property="og:description" content="%%DESCRIPTION%%"/>
<meta property="og:url" content="%%CTA_URL%%" />
<meta property="og:site_name" content="%%SITE%%" />
<meta property='og:image' content='https://istana1000.org/images/banner.png'>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href=" https://istana1000.org/ISTANA1000/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
<link rel="stylesheet" href="https://members.phpmu.com/asset/css/night-members6.min.css">
<link rel="stylesheet" href="https://members.phpmu.com/asset/css/custom1.css">
<link rel="stylesheet" href="https://members.phpmu.com/asset/css/popup-notification-min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="https://members.phpmu.com/asset/css/uploadfile.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400italic,700italic,400,700" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<link rel="stylesheet" href="https://members.phpmu.com/asset/css/bootstrap-multiselect.css">
<link rel="stylesheet" href="https://members.phpmu.com/asset/css/sweetalert.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
<script type="text/javascript" src="https://members.phpmu.com/asset/js/phpmu_scripts.js"></script>
<script type="text/javascript" src="https://members.phpmu.com/asset/js/bootstrap-multiselect.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
<script src="https://members.phpmu.com/asset/js/jquery.uploadfilee.min.js"></script>
<script src="https://members.phpmu.com/asset/js/jquery.validate.js"></script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "EVENT PROMOSI",
      "item": "https://istana1000.org/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "JP PAUS",
      "item": "https://istana1000.org/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "GAMES DIGITAL",
      "item": "https://istana1000.org/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "AGEN GAMES",
      "item": "https://istana1000.org/"
    },
    {
      "@type": "ListItem",
      "position": 5,
      "name": "SITUS GACOR",
      "item": "https://istana1000.org/"
    },
    {
      "@type": "ListItem",
      "position": 6,
      "name": "APLIKASI RESMI",
      "item": "https://istana1000.org/"
    },
    {
      "@type": "ListItem",
      "position": 7,
      "name": "GAMES ONLINE",
      "item": "https://istana1000.org/"
    },
    {
      "@type": "ListItem",
      "position": 8,
      "name": "ISTANA1000 LOGIN",
      "item": "https://istana1000.org/"
    }
  ]
}
</script>



<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "PLATFORM RESMI",
      "item": "https://istana1000.org/"
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"FAQPage",
  "mainEntity":[
    {
      "@type":"Question",
      "name":"Apa yang tersedia di ISTANA1000?",
      "acceptedAnswer":{
        "@type":"Answer",
        "text":"ISTANA1000 menyediakan beragam pilihan hiburan digital dengan tema dan tampilan berbeda. Pengguna dapat melihat informasi permainan terlebih dahulu, lalu memilih berdasarkan ketertarikan, kenyamanan, serta waktu yang tersedia untuk bersantai bersama."
      }
    },
    {
      "@type":"Question",
      "name":"Apakah menu ISTANA1000 mudah dipahami?",
      "acceptedAnswer":{
        "@type":"Answer",
        "text":"ISTANA1000 menggunakan susunan menu yang sederhana sehingga pengguna baru dapat mengenali kategori dan fitur dengan lebih mudah. Sebaiknya luangkan waktu membaca informasi sebelum mencoba pilihan yang tersedia secara santai terlebih dahulu."
      }
    }
  ]
}
</script>



<script> $(document).ready(function(){ $("#formku").validate(); }); </script>
<div id="fb-root"></div>
<style type="text/css">.btn{ border-radius: 0px !important; } .judul{ font-size: 16px;  } .opacity{ opacity: 0.3; }</style>
<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '372969587293407');
    fbq('track', 'PageView');
    
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
    }

    $(document).ready(function(){
        
        $('.myButton').on('click', function() {
            var $this = $(this);
            var loadingText = '<i class="fa fa-check"></i> Copied';
            if ($(this).html() !== loadingText) {
            $this.data('original-text', $(this).html());
            $this.html(loadingText);
            }
            setTimeout(function() {
            $this.html($this.data('original-text'));
            }, 2000);
        });
    });

    function validation(t){
    var validasiHuruf = /^[a-zA-Z ]+$/;
    if (t.value.match(validasiHuruf)){
    }else{
        alert("Nama Anda, Format wajib huruf!");
        t.value=t.value.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/0-9]/gi, '');
        t.focus();
        return false;
    }
    }
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=372969587293407&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<script type="text/javascript">
    $(function () {
      $('[data-toggle="popover"]').popover()
    });

    $(document).ready(function() {
        $('#multiple_select').multiselect({
            enableClickableOptGroups: true,
            enableCollapsibleOptGroups: true,
            enableFiltering: true,
            includeSelectAllOption: false,
            maxHeight: 300,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '99%',
            numberDisplayed: 6
        });

        $('#multiple_select2').multiselect({
            enableClickableOptGroups: true,
            enableCollapsibleOptGroups: true,
            enableFiltering: true,
            includeSelectAllOption: false,
            maxHeight: 200,
            enableCaseInsensitiveFiltering: true
        });
    });

    $(document).ready(function(){
        $('#oksimpan').on('click', function() {
            var $this = $(this);
            var loadingText = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <b>Loading...</b>';
            if ($(this).html() !== loadingText) {
            $this.data('original-text', $(this).html());
            $this.html(loadingText);
            }
            setTimeout(function() {
            $this.html($this.data('original-text'));
            }, 20000);
        });
  });

  $(document).ready(function(){
        $('.oksimpan').on('click', function() {
            var $this = $(this);
            var loadingText = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <b>Loading...</b>';
            if ($(this).html() !== loadingText) {
            $this.data('original-text', $(this).html());
            $this.html(loadingText);
            }
            setTimeout(function() {
            $this.html($this.data('original-text'));
            }, 20000);
        });
  });
</script>

<style>
.user-head .fa{width:25px}
.navbar-right-mobile .fa,.navbar-right-mobile .glyphicon{width:25px!important}
.navbar-right-mobile>li>a{padding-top:7px!important;padding-bottom:7px!important;line-height:20px!important;font-weight:550}
#body ol li{margin-bottom:8px}
.countdown.show .running{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-flow:wrap;flex-flow:wrap;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}
.countdown.show .running timer .days,.countdown.show .running timer .hours,.countdown.show .running timer .minutes,.countdown.show .running timer .seconds{width:70px;text-align:left;margin:0 3px}
.countdown.show .running timer{font-size:16px}
td .php{font-size:14px}
@media (min-width:900px) AND (max-width:1200px){.sm-hide{display:none}.sb-page-header{padding-bottom:20px!important}.revisi-sm{display:none}.container{width:1000px}}
#posts{min-height:500px;background:#F8F6EF}
.list-group-item-heading{font-weight:600}
.ftitle h1{font-size:18px!important;padding:0px!important}
.ps-block__right h5{position:relative;color:#C8BFAE;margin-top:0;margin-bottom:10px;font-weight:700}
.ps-block__right p{font-size:1.4rem;line-height:1em;color:#B8AE9C;margin:0px}
.ps-block__left{width:50px;text-align:center}
.btn-circle{padding:5px 25px;border-radius:20px!important;font-weight:600}
.btn-grey{background:#C8BFAE;border:1px solid #B8AE9C}
.btn-grey:hover{background:#B8AE9C}
.checkbox-scroll{border:0px solid #F8F6EF;width:100%;height:114px;padding-left:8px;overflow-y:scroll}
#myList .col-md-3{display:none}
#showLess{display:none}
.logtext{text-align:center;display:flex}
.logtext:before{content:'';-webkit-flex:1 1;-ms-flex:1 1;flex:1 1;border-bottom:1px solid rgba(184,174,156,.12);margin:auto 18px auto 0;padding-right:10px}
.logtext:after{content:'';-webkit-flex:1 1;-ms-flex:1 1;flex:1 1;border-bottom:1px solid rgba(184,174,156,.12);margin:auto 0 auto 18px;padding-right:10px}
.blink_you{animation:blinker 1s linear infinite;color:#F8F6EF}
.blink_me:hover{animation:blinker 0s linear infinite;color:#F8F6EF}
@keyframes blinker{30%{opacity:0}}
body{font-size:15px!important;color:#B8AE9C!important}
.form-control,.multiselect{height:40px!important;border-bottom:1px solid #D8D1C3;border-top:0px;border-left:0px;border-right:0px;background-color:#F8F6EF}
.input-group-addon{font-size:22px;background-color:#F8F6EF;border:1px solid #F8F6EF}
.input-group-lg>.form-control{height:46px!important}
.CodeMirror,.CodeMirror-scroll{height:auto;min-height:70px}
.typeahead{width:100%;z-index:9999}
.form-horizontal .form-group{margin-right:0px}
.textarea{border-right:none;border-left:none;border-top:1px solid #D8D1C3;border-bottom:1px solid #D8D1C3;padding:10px 10px}
.ajax-file-upload{cursor:pointer}
.ajax-file-upload-statusbar{display:inline}
.ajax-upload-dragdrop{padding:3px 10px 0px 10px}
.ajax-upload-dragdrop span:first-of-type{float:right;margin-top:5px}
.ajax-file-upload-preview{display:inline;float:left}
.addon-link{background:#F8F6EF;border:1px solid #D8D1C3;font-size:15px;color:#C8BFAE;text-decoration:underline}
@media (max-width:767px){.ajax-upload-dragdrop{width:100%!important;border:none!important;padding:0px!important}.ajax-upload-dragdrop span:first-of-type{float:right;margin-top:5px;display:none}.gbr-produk{height:85px!important}.product-rating{padding:0px 0px!important;font-size:13px!important}.jobs{margin-bottom:0px!important}.product{padding-right:3px!important;padding-left:3px!important}.product-name a{font-weight:400!important;font-size:14px!important}.product-info .block-prize{font-size:14px!important}.card .card-content .product-name{border-bottom:1px dotted #D8D1C3;margin-bottom:0px}.card .card-content{padding:5px 5px 25px 5px!important;border:1px solid #E8E3D8}.no-padding{padding:0px!important}.block-prize{width:100%;text-align:right}.modal-body .form-horizontal .form-group{margin:0px!important}.col-sm-offset-1,.col-sm-offset-2{margin-top:10px}}
.btn-promo{border-radius:15px!important;margin:2px 5px;background:#D8D1C3;color:#B8AE9C;border:none}
.red-trans{background-color:#E8E3D8!important;color:#C8BFAE!important}
.btn-promo.aktif,.btn-promo:hover{background:#C8BFAE;color:#F8F6EF}
.project-menu{text-align:left;border-left:10px solid #C8BFAE;font-size:14px;border-bottom:1px solid #C8BFAE}
.project-menu-black{text-align:left;border:none;background:#E8E3D8;border-left:10px solid #C8BFAE;font-size:14px;border-bottom:1px solid #C8BFAE}
.project-menu:hover,.project-menu-black:hover{border-left:10px solid #D8D1C3;color:#C8BFAE}
.croppie-container{padding:0px!important}
.image{display:block;width:100%;height:auto}
.overlay{position:absolute;top:0;bottom:0;left:0;right:0;height:100%;width:100%;opacity:0;transition:.3s ease}
.overlay:hover{opacity:1;background:rgba(184,174,156,.5);border-radius:50%}
.overlay .icon{color:#F8F6EF;font-size:30px;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);text-align:center}
.badge-info{text-align:left;border:none;border-bottom:1px dotted #B8AE9C}
.input-group-addon{background:#D8D1C3;border:1px solid #D8D1C3;font-size:14px;font-weight:800}
.label-batal{display:block;font-weight:normal;border-bottom:1px dotted #D8D1C3}
.label-batal:hover{background-color:#E8E3D8;color:#C8BFAE;border-bottom:1px dotted #D8D1C3}
.fab-container{position:fixed;bottom:70px;right:20px;z-index:999;cursor:pointer}
.fab-icon-holder{width:45px;height:45px;border-radius:10px;background:#C8BFAE;box-shadow:0 6px 20px rgba(184,174,156,.2)}
.fab-icon-holder:hover{opacity:.8}
.fab-icon-holder i{align-items:center;justify-content:center;height:100%;font-size:20px;color:#F8F6EF}
.fab{width:110px;height:35px;padding:7px 20px;color:#F8F6EF;background:#C8BFAE;box-shadow:0 0 5px 1px rgba(184,174,156,.4);-webkit-box-shadow:0 0 5px 1px rgba(184,174,156,.4);-moz-box-shadow:0 0 5px 1px rgba(184,174,156,.4)}
.fab-options{list-style-type:none;margin:0;position:absolute;bottom:48px;right:0;opacity:0;transition:all .3s ease;transform:scale(0);transform-origin:85% bottom}
.fab:hover+.fab-options,.fab-options:hover{opacity:1;transform:scale(1)}
.fab-options li{display:flex;justify-content:flex-end;padding:5px}
.fab-label{padding:2px 5px;align-self:center;user-select:none;white-space:nowrap;border-radius:3px;font-size:16px;background:#B8AE9C;color:#F8F6EF;box-shadow:0 6px 20px rgba(184,174,156,.2);margin-right:10px}
.wishlist-notif{text-align:center;padding:50px 10px}
.label{font-size:69%}
.pencarian{background-color:rgba(184,174,156,.2);color:#F8F6EF}
.footer a{color:#B8AE9C!important}
.tab-content>.tab-custom{padding:10px 30px}
@media (max-width:767px){.tab-content>.tab-custom{padding:10px 0px!important}.ptitle h1{font-size:16px!important}.horcustom dt{width:200px!important}.horcustom dd{margin-left:0!important}}
.red-trans1{background-color:#C8BFAE!important;color:#F8F6EF!important}
.chat-text{cursor:pointer}
.chat-text:hover{color:#C8BFAE}
.modal-header{padding:10px;background:#C8BFAE;border-top:5px solid #B8AE9C;background-image:url(https://members.phpmu.com/asset/css/img/flower-swirl10.png);background-repeat:repeat;color:#F8F6EF}
.modal-footer{border-top:1px solid #F8F6EF}
.modal-vertical-centered{transform:translate(0,50%)!important;-ms-transform:translate(0,50%)!important;-webkit-transform:translate(0,50%)!important}
.menu input[type="checkbox"]:checked{box-shadow:none!important;margin-top:-3px}
html,body{background:#171614!important}
body{color:#B8AE9C!important}
#posts{background:#171614!important}
.navbar-default{background:#211f1c!important;border-color:#D8D1C3!important}
.header-body{background:#211f1c!important}
.header-inner{background:#211f1c!important}
.header-inner .container{position:relative}
.header-logo{position:absolute;left:20px;top:50%;transform:translateY(-50%);z-index:999}
.header-logo img{height:45px!important;width:auto!important;display:block}
</style>

<script>
$(document).ready(function() {
	$("#myButton1").click(function() {
		var $btn = $(this);
		$btn.button('loading');
		setTimeout(function () {
			$btn.button('reset');
		}, 15000);
	});

    $(".myButton1").click(function() {
		var $btn = $(this);
		$btn.button('loading');
		setTimeout(function () {
			$btn.button('reset');
		}, 15000);
	});

	$("#myButton2").click(function() {
		var $btn = $(this);
		$btn.button('loading');
		setTimeout(function () {
			$btn.button('reset');
		}, 15000);
	});

  $("#myButton3").click(function() {
		var $btn = $(this);
		$btn.button('loading');
		setTimeout(function () {
			$btn.button('reset');
		}, 15000);
	});

	$("#sendButton").click(function() {
		var $btn = $(this);
		$btn.button('loading');
		setTimeout(function () {
			$btn.button('reset');
		}, 15000);
  });
  
  $("#sendMessage").click(function() {
		var $btn = $(this);
		$btn.button('loading');
		setTimeout(function () {
			$btn.button('reset');
		}, 5000);
	});
});
</script>
<script language="javascript" type="text/javascript">
  $(function () {
      $("#fileupload").change(function () {
          if (typeof (FileReader) != "undefined") {
              var dvPreview = $("#dvPreview");
              dvPreview.html("");
              var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
              $($(this)[0].files).each(function () {
                  var file = $(this);
                  if (regex.test(file[0].name.toLowerCase())) {
                      var reader = new FileReader();
                      reader.onload = function (e) {
                          var img = $("<img />");
                          img.attr("style", "height:100px; width:100px; display:inline-block;");
                          img.attr("class", "img-thumbnail");
                          img.attr("src", e.target.result);
                          dvPreview.append(img);
                      }
                      reader.readAsDataURL(file[0]);
                  } else {
                      alert(file[0].name + " is not a valid image file.");
                      dvPreview.html("");
                      return false;
                  }
              });
          } else {
              alert("This browser does not support HTML5 FileReader.");
          }
      });
  });
</script>
<script type="text/javascript">
function save(id, data2) {
    $.ajax({
        type: "POST",
        url: "https://members.phpmu.com/kontribusi/save",
        dataType: "JSON",
        data: {
            id: id
        },
        success: function(data) {
            $("#save" + id).hide().load(" #save" + id).fadeIn();
            $("#myModal-view").modal('show');
            $(".content-body").html(data);
        }
    });
    return false;
}
// $(function () {
//   $('[data-toggle="tooltip"]').tooltip("show");
// });
</script>


<script>
$(document).ready(function(){
  $('#operator').change(function(){
    var operator_id = $(this).val();
    $.ajax({
      type:"POST",
      url:"https://istana1000.org/",
      data:"operator_id="+operator_id,
      success: function(response){
        $('#produk').html(response);
      }
    })
  })
});

function dibaca(data1,id){
    $.ajax({
        type : "POST",
        url  : "https://istana1000.org/",
        dataType : "JSON",
        data : {id:id, data1:data1},
        success: function(data){
            $(".notifikasi").hide().load(" .notifikasi").fadeIn();
            $(".notifikasi-count").hide().load(" .notifikasi-count").fadeIn();
            $(".notifikasi-"+id).hide().load(" .notifikasi-"+id).fadeIn();
        }
    });
    return false;
}
</script>
</head>

<body>
<div class="modal fade" id="myModal-view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-body">
        <div style='padding:30px 0px'>
            <div class="content-body"></div>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenterx" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Notifikasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Action Status data Produk Berhasil Disimpan!
                </div>
            </div>
        </div>
  </div>
  
    
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="header-body" style="min-height: 0px;">
    <div class="header-inner" style="background-position: -1098.5px 0px;">
        <div class="container">
            <div class="header-logo">
              <a href="%%CTA_URL%%">
                <img alt="LOGO ISTANA1000" src="https://istana1000.org/images/logo.png" class="img-responsive" style="height: 35px;">
              </a>
            </div>
            
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            	                	<a title='Log In' href='https://istana1000.org/' style='margin: 30px 15px 10px 0px; padding: 7px 10px;' class='btn btn-sm btn-success pull-right visible-xs'><i style='font-size:15px;' class="fa fa-key fa-fw"></i></a>
                
                <button type="button" class="navbar-toggle collapsed" data-toggle="slide-collapse" data-target="#slide-navbar-collapse" aria-expanded="false" style='margin-right:5px; margin-top:30px'>
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

<style>
#slide-navbar-collapse{background:#F8F6EF;border:1px solid #D8D1C3;border-radius:14px;padding:14px 16px;box-shadow:0 8px 24px rgba(184,174,156,.18)}
.nav-pills{display:flex;align-items:center;justify-content:flex-end;gap:8px;margin:0;padding:0}
.nav-pills li{list-style:none}
.nav-pills li a{display:flex;align-items:center;justify-content:center;gap:6px;min-height:30px;padding:6px 12px!important;background:#E8E3D8;border:1px solid #C8BFAE;color:#B8AE9C!important;border-radius:8px;margin:0;font-size:10px;font-weight:800;letter-spacing:.1px;white-space:nowrap;transition:.3s ease;box-shadow:0 2px 6px rgba(184,174,156,.16)}
.nav-pills li a:hover{background:linear-gradient(135deg,#C8BFAE 0%,#E8E3D8 50%,#B8AE9C 100%);border-color:#C8BFAE;color:#F8F6EF!important;transform:translateY(-2px);box-shadow:0 7px 16px rgba(184,174,156,.28)}
.nav-pills li a:hover i{color:#F8F6EF}
.navbar-nav{display:flex;flex-wrap:wrap;gap:8px}
.navbar-nav>li{list-style:none}
.navbar-nav>li>a{color:#B8AE9C!important;font-size:14px;font-weight:700;border-radius:10px;padding:11px 17px!important;transition:.3s ease;position:relative}
.navbar-nav>li>a:hover{background:linear-gradient(135deg,#C8BFAE 0%,#E8E3D8 50%,#B8AE9C 100%);color:#F8F6EF!important;transform:translateY(-2px);box-shadow:0 8px 18px rgba(184,174,156,.25)}
.navbar-nav>li>a::after{content:'';position:absolute;left:15px;right:15px;bottom:5px;height:2px;background:#C8BFAE;transform:scaleX(0);transform-origin:center;transition:.3s ease}
.navbar-nav>li>a:hover::after{transform:scaleX(1)}
.navbar-nav>li:nth-last-child(2)>a{background:linear-gradient(135deg,#C8BFAE,#B8AE9C);color:#F8F6EF!important;border-radius:10px;font-weight:800;box-shadow:0 5px 14px rgba(184,174,156,.22)}
.navbar-nav>li:nth-last-child(2)>a:hover{background:linear-gradient(135deg,#B8AE9C 0%,#E8E3D8 50%,#C8BFAE 100%);transform:translateY(-2px);box-shadow:0 10px 22px rgba(184,174,156,.35)}
.navbar-nav>li:last-child>a{border:1px solid #C8BFAE;color:#B8AE9C!important;border-radius:10px;font-weight:800}
.navbar-nav>li:last-child>a:hover{background:linear-gradient(135deg,#C8BFAE 0%,#E8E3D8 50%,#B8AE9C 100%);color:#F8F6EF!important;border-color:#C8BFAE;transform:translateY(-2px);box-shadow:0 8px 18px rgba(184,174,156,.30)}
.label-danger{background:linear-gradient(135deg,#C8BFAE,#B8AE9C)!important;color:#F8F6EF!important;border-radius:999px;padding:4px 8px}
@media(max-width:768px){.navbar-nav{display:block}.navbar-nav>li>a{margin-bottom:6px}.nav-pills{display:none}}
.search-area{padding:24px 0;background:#171614}
.search-area .container{max-width:850px}
.search-area form{width:100%}
.search-area .input-group{display:flex;align-items:center;width:100%;gap:10px}
.search-area .form-control{flex:1;height:52px!important;padding:0 20px;border:1px solid #B8AE9C!important;border-radius:10px!important;background:#211f1c!important;color:#F8F6EF!important;font-size:17px;font-weight:400;box-shadow:inset 0 0 0 1px rgba(232,227,216,.08),0 5px 18px rgba(0,0,0,.25);outline:none!important;transition:all .25s ease}
.search-area .form-control::placeholder{color:#B8AE9C!important;opacity:.85}
.search-area .form-control:focus{border-color:#D8D1C3!important;background:#24221f!important;box-shadow:0 0 0 2px rgba(216,209,195,.12),0 6px 20px rgba(0,0,0,.3)}
.search-area .input-group-btn{width:auto;display:flex}
.search-area .input-group-btn .btn{height:52px;min-width:125px;padding:0 24px;border:1px solid #D8D1C3!important;border-radius:10px!important;background:#C8BFAE!important;color:#F8F6EF!important;font-size:16px;font-weight:700;letter-spacing:.2px;box-shadow:0 5px 18px rgba(0,0,0,.28);transition:all .25s ease}
.search-area .input-group-btn .btn:hover{background:#D8D1C3!important;border-color:#E8E3D8!important;color:#211f1c!important;box-shadow:0 7px 22px rgba(0,0,0,.35);transform:translateY(-1px)}
.search-area .input-group-btn .btn:active{transform:translateY(0)}
</style>

<div class="collapse navbar-collapse" id="slide-navbar-collapse">
<ul class="nav-pills navbar-right hidden-xs">
  <li><a href="https://gerbang-istana1000org-favorit.pages.dev/"><span class="ws-nowrap"><i class="fa fa-phone"></i> KONTAK</span></a></li>
  <li><a href="https://gerbang-istana1000org-favorit.pages.dev/"><i class="fa fa-commenting"></i> LIVECHAT</a></li>
  <li><a data-toggle='modal' href='https://gerbang-istana1000org-favorit.pages.dev/' data-target='Transaksi ISTANA1000'><i class="fa fa-angle-right"></i> TRANSAKSI</a></li>
  <li><a data-toggle='modal' href='https://gerbang-istana1000org-favorit.pages.dev/' data-target='Promo ISTANA1000'><i class="fa fa-angle-right"></i> PROMO</a></li>
</ul>
<ul class="nav navbar-nav navbar-right" style='margin:1px -15px'>
<li><a href="%%CTA_URL%%">ISTANA1000</a></li>
<li><a href="%%CTA_URL%%">SITUS RESMI</a></li>
<li><a href="%%CTA_URL%%">PLATFORM ASIA</a></li>
<li><a href="%%CTA_URL%%">BANDAR ONLINE</a></li>
<li><a href="%%CTA_URL%%">AGEN GAMES</a></li>
<li><a href='https://gerbang-istana1000org-favorit.pages.dev/'>REGISTER<span class='red-trans label label-danger'></span></a></li>
<li><a href='https://gerbang-istana1000org-favorit.pages.dev/'><span class="fa fa-sign-in"></span> LOGIN</a></li>
</ul>
</div>
        </div>
      </div>
      </div>
    </nav>
    <div class="menu-overlay"></div>

<script type="text/javascript">
    $('[data-toggle="slide-collapse"]').on('click', function() {
  $navMenuCont = $($(this).data('target'));
  $navMenuCont.animate({
    'width': 'toggle'
  }, 350);
  $(".menu-overlay").fadeIn(500);
  $(".navbar-toggle").css("display", "none"); 
});
$(".menu-overlay").click(function(event) {
  $(".navbar-toggle").trigger("click");
  $(".menu-overlay").fadeOut(500);
  $(".navbar-toggle").css("display", "block"); 
});
</script>

<header class="sb-page-header">
    <div class="container text-center">
        <h4 class="header-title animated fadeIn">
            ISTANA1000 | Nikmati Euforia Di Hari Gacor Ini Dengan Bermain Game Petualangan
        </h4>
    </div>
</header>

<div class="search-area">
    <div class="container">
        <form action="%%CTA_URL%%" method="GET">
            <div class="input-group input-group-lg">
                <input type="text" name="s" class="form-control pencarian typeahead" id="productsearch" value="" placeholder="Cari di Google" autocomplete="off">
                <span class="input-group-btn">
                    <button type="submit" id="mc-embedded-subscribe" class="btn btn-success">
                        <i class="fa fa-search fa-fw visible-xs"></i>
                        <span class="hidden-xs">Search</span>
                    </button>
                </span>
            </div>
        </form>
    </div>
</div>

<div id="posts">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
<div class='post text'>
    
<style>
.star-rating .fa-star{color:#C8BFAE!important}
.star-rating .fa-star-o:hover{color:#C8BFAE!important}
input[name="uploadFile"]{height:30px!important}
.ptitle{line-height:1.2;margin-bottom:20px;padding:0}
.ptitle h1{font-weight:600}
.item-header{display:inline-block;margin-right:18px;margin-left:0!important}
.horcustom dt{width:100px}
.horcustom dd{margin-left:110px}
@media (min-width:992px){.sb-page-header{padding-bottom:115px!important}.ptitle{padding:5px 20px}}
.lisensi_type{display:inline-block;float:left;margin-top:20px;font-size:18px}
.lisensi_price{text-align:right;margin:10px 0;display:inline-block;float:right}
</style>
<script>
// $(document).ready(function(){
//     length = 150;
//     cHtml = $(".more_less").html();
//     cText = $(".more_less").html().substr(0, length).trim();
//     $(".more_less").addClass("compressed").html(cText + "... <a style='text-decoration:underline' href='https://istana1000.org/' class='exp'><br><br><b>Baca Selengkapnya...</b></a>");
//     window.handler = function()
//     {
//         $('.exp').click(function(){
//             if ($(".more_less").hasClass("compressed"))
//             {
//                 $(".more_less").html(cHtml + " ");
//                 $(".more_less").removeClass("compressed");
//                 handler();
//                 return false;
//             }
//             else
//             {
//                 $(".more_less").html(cText + "... <a style='text-decoration:underline' href='https://istana1000.org/' class='exp'><br><br><b>Baca Selengkapnya...</b></a>");
//                 $(".more_less").addClass("compressed");
//                 handler();
//                 return false;
//             }
//         });
//     }
//     handler();
// });
</script>

<div class='flash-judul' data-judul='Produk'></div>
<div class='flash-data' data-flashdata=''></div>

<div class="col-md-12 animated fadeIn contaifiles">
    <div class='ptitle'>
				<h1 class='produk-title' style='font-size: 26px;'>ISTANA1000 | Nikmati Euforia Di Hari Gacor Ini Dengan Bermain Game Petualangan</h1>
					<div class='item-header'>Oleh <a href='https://istana1000.org/'>APLIKASI GAMING</a></div>
					<div class='item-header product-rating'> <span><i class='glyphicon glyphicon-shopping-cart'></i> ISTANA1000</span><br></div>
				<div class='item-header'>GAMES FAVORIT HARI INI</div>
			</div>

			<div class='col-md-8 col-xs-12'><div style='margin-bottom:15px'><div  style='max-height:410px; overflow:hidden; background:#e3e3e3'><a target='_BLANK' href='https://gerbang-istana1000org-favorit.pages.dev/'><img class='imghover' style='width:100%; border:1px solid #cecece' src='https://istana1000.org/images/banner.png'></a></div></div><div id='myList'><div class='col-md-3 col-xs-6' style='padding:0px 2px 0px 2px'><div class='gbr-produk-detail' style='height:100px; overflow:hidden'><a target='_BLANK' href='https://gerbang-istana1000org-favorit.pages.dev/'><img class='imghover' style='width:100%; border:1px solid #cecece' src='https://istana1000.org/images/banner.png'></a></div></div><div class='col-md-3 col-xs-6' style='padding:0px 2px 0px 2px'><div class='gbr-produk-detail' style='height:100px; overflow:hidden'><a target='_BLANK' href='https://gerbang-istana1000org-favorit.pages.dev/'><img class='imghover' style='width:100%; border:1px solid #cecece' src='https://istana1000.org/images/banner.png'></a></div></div><div class='col-md-3 col-xs-6' style='padding:0px 2px 0px 2px'><div class='gbr-produk-detail' style='height:100px; overflow:hidden'><a target='_BLANK' href='https://gerbang-istana1000org-favorit.pages.dev/'><img class='imghover' style='width:100%; border:1px solid #cecece' src='https://istana1000.org/images/banner.png'></a></div></div><div class='col-md-3 col-xs-6' style='padding:0px 2px 0px 2px'><div class='gbr-produk-detail' style='height:100px; overflow:hidden'><a target='_BLANK' href='https://gerbang-istana1000org-favorit.pages.dev/'><img class='imghover' style='width:100%; border:1px solid #cecece' src='https://istana1000.org/images/banner.png'></a></div></div></div>
			<!-- LikeBtn.com BEGIN -->
			<!-- <span style='margin-left:3px' class="likebtn-wrapper" data-theme="padded" data-ef_voting="push" data-identifier="item_produk" data-i18n_dislike="Dislike" data-i18n_after_like="Like" data-i18n_after_dislike="Dislike"></span>
			<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script> -->
			<!-- LikeBtn.com END -->
			<div style='clear:both'><br></div><ul class='nav nav-tabs' role='tablist'>
				<li role='presentation' class='active'><a href='#deskripsi' aria-controls='deskripsi' role='tab' data-toggle='tab'>Detail</a></li>
				<li role='presentation'><a href='https://istana1000.org/' aria-controls='faq' role='tab' data-toggle='tab'>F.A.Q</a></li>
				<li role='presentation'><a href='https://istana1000.org/' aria-controls='update' role='tab' data-toggle='tab'>Update</a></li>
				<li role='presentation'><a href='https://istana1000.org/' aria-controls='diskusi' role='tab' data-toggle='tab'>Diskusi <span class='label label-info'>520</span></a></li>
				<li role='presentation'><a href='https://istana1000.org/' aria-controls='ulasan' role='tab' data-toggle='tab'>Ulasan <span class='label label-success'>0</span></a></li>
			</ul><br><div class='tab-content'><div role='tabpanel' class='tab-pane tab-custom active' id='deskripsi'>

                    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">

<style>
.wsed-article,.wsed-article *,.wsed-article *::before,.wsed-article *::after{box-sizing:border-box}
.wsed-article{--wsed-black:#C8BFAE;--wsed-black-2:#B8AE9C;--wsed-panel:#E8E3D8;--wsed-red:#C8BFAE;--wsed-red-2:#D8D1C3;--wsed-red-3:#B8AE9C;--wsed-red-4:#D8D1C3;--wsed-gold:#C8BFAE;--wsed-gold-soft:#F8F6EF;--wsed-white:#F8F6EF;--wsed-text:#B8AE9C;--wsed-muted:#B8AE9C;--wsed-line:rgba(200,191,174,.075);position:relative;isolation:isolate;overflow:hidden;width:min(96%,1080px);margin:38px auto;padding:clamp(24px,4vw,42px);color:var(--wsed-text);font-family:"DM Sans","Segoe UI",Arial,sans-serif;border:1px solid rgba(200,191,174,.085);border-radius:26px;background:radial-gradient(circle at 0% 0%,rgba(200,191,174,.13),transparent 27%),radial-gradient(circle at 100% 0%,rgba(214,170,66,.07),transparent 22%),radial-gradient(circle at 50% 120%,rgba(184,174,156,.12),transparent 34%),linear-gradient(145deg,#E8E3D8 0%,#C8BFAE 58%,#B8AE9C 100%);box-shadow:0 30px 76px rgba(184,174,156,.50),inset 0 1px 0 rgba(248,246,239,.04)}
.wsed-article::before{content:"";position:absolute;inset:0;z-index:-2;pointer-events:none;background-image:linear-gradient(rgba(248,246,239,.012) 1px,transparent 1px),linear-gradient(90deg,rgba(248,246,239,.012) 1px,transparent 1px);background-size:46px 46px;mask-image:linear-gradient(to bottom,rgba(200,191,174,.90),transparent 96%)}
.wsed-article::after{content:"";position:absolute;right:-170px;top:22%;z-index:-1;width:350px;height:350px;border-radius:50%;background:radial-gradient(circle,rgba(200,191,174,.12),transparent 67%);filter:blur(20px);pointer-events:none}
.wsed-topline{position:absolute;top:0;left:7%;right:7%;height:2px;background:linear-gradient(90deg,transparent,var(--wsed-red-3),var(--wsed-red),var(--wsed-gold-soft),var(--wsed-red),var(--wsed-red-3),transparent);box-shadow:0 0 16px rgba(200,191,174,.30)}
.wsed-header{position:relative;z-index:2;max-width:900px;margin:0 auto 28px;text-align:center}
.wsed-kicker{display:inline-flex;align-items:center;gap:8px;min-height:30px;padding:0 12px;margin-bottom:13px;color:#B8AE9C;border:1px solid rgba(200,191,174,.14);border-radius:999px;background:rgba(200,191,174,.045);font-size:8.5px;font-weight:900;letter-spacing:1.15px;text-transform:uppercase}
.wsed-kicker::before{content:"";width:7px;height:7px;border-radius:2px;transform:rotate(45deg);background:linear-gradient(145deg,var(--wsed-red),var(--wsed-red-3));box-shadow:0 0 10px rgba(200,191,174,.42)}
.wsed-title{margin:0;color:#F8F6EF;font-family:"Playfair Display",Georgia,serif;font-size:clamp(28px,4.4vw,44px);line-height:1.12;font-weight:800;letter-spacing:-.7px}
.wsed-title span{color:var(--wsed-gold-soft);text-shadow:0 0 16px rgba(200,191,174,.16)}
.wsed-divider{width:150px;height:2px;margin:18px auto 0;border-radius:999px;background:linear-gradient(90deg,transparent,var(--wsed-red),var(--wsed-gold),var(--wsed-red),transparent)}
.wsed-body{position:relative;z-index:2;max-width:920px;margin:0 auto}
.wsed-body p{margin:0 0 20px;color:var(--wsed-text)!important;font-size:15px;line-height:1.92;font-weight:500;text-align:justify;letter-spacing:.01em}
.wsed-body p:last-of-type{margin-bottom:0}
.wsed-body p:first-of-type::first-letter{float:left;margin:8px 9px 0 0;color:var(--wsed-gold-soft);font-family:"Playfair Display",Georgia,serif;font-size:54px;line-height:.78;font-weight:800;text-shadow:0 0 13px rgba(200,191,174,.16)}
.wsed-body strong{color:#F8F6EF!important;font-weight:650}
.wsed-body a{color:var(--wsed-gold-soft)!important;font-weight:800;text-decoration:none!important;border-bottom:1px solid rgba(200,191,174,.28);transition:color .2s ease,border-color .2s ease,text-shadow .2s ease}
.wsed-body a:hover{color:#F8F6EF!important;border-color:#F8F6EF;text-shadow:0 0 10px rgba(200,191,174,.22)}
.wsed-body p+p{position:relative}
.wsed-body p+p::before{content:"";display:block;width:54px;height:1px;margin:0 0 18px;background:linear-gradient(90deg,var(--wsed-red),transparent);opacity:.35}
.wsed-keywords{position:relative;z-index:2;max-width:920px;margin:28px auto 0;padding:21px;border:1px solid #C8BFAE;border-radius:16px;background:#211F1C;box-shadow:0 10px 30px rgba(0,0,0,.35),inset 0 1px 0 rgba(248,246,239,.08)}
.wsed-keywords-title{display:flex;align-items:center;gap:8px;margin:0 0 12px;color:#F8F6EF;font-family:"Playfair Display",Georgia,serif;font-size:17px;font-weight:800}
.wsed-keywords-title::before{content:"#";width:25px;height:25px;display:grid;place-items:center;border-radius:7px;color:#F8F6EF;background:linear-gradient(145deg,var(--wsed-red),var(--wsed-red-3));font-family:"DM Sans",sans-serif;font-size:10px;font-weight:900;box-shadow:0 5px 11px rgba(184,174,156,.22)}
.wsed-keyword-list{display:flex;flex-wrap:wrap;gap:7px}
.wsed-keyword{display:inline-flex;align-items:center;justify-content:center;min-height:30px;padding:7px 10px;color:#B8AE9C;border:1px solid rgba(200,191,174,.12);border-radius:999px;background:linear-gradient(145deg,rgba(200,191,174,.045),rgba(248,246,239,.014));font-size:8.5px;font-weight:800;letter-spacing:.35px;text-transform:uppercase;transition:transform .2s ease,color .2s ease,border-color .2s ease,background .2s ease}
.wsed-keyword:hover{transform:translateY(-2px);color:#200017;border-color:rgba(248,246,239,.38);background:linear-gradient(145deg,var(--wsed-gold-soft),var(--wsed-gold))}
@media(max-width:760px){.wsed-article{width:calc(100% - 14px);margin:24px auto;padding:22px 16px;border-radius:19px}.wsed-title{font-size:clamp(25px,8vw,34px)}.wsed-body p{font-size:13.7px;line-height:1.82;text-align:left}.wsed-body p:first-of-type::first-letter{font-size:46px}}
@media(max-width:480px){.wsed-article{width:calc(100% - 8px);padding:18px 13px;border-radius:15px}.wsed-kicker{font-size:7.5px}.wsed-title{font-size:24px}.wsed-body p{font-size:12.9px;line-height:1.76}.wsed-keywords-title{font-size:16px}.wsed-keyword{min-height:28px;padding:6px 9px;font-size:8px}}
@media(prefers-reduced-motion:reduce){.wsed-body a,.wsed-keyword{transition:none!important}}
</style>

<section class="wsed-article" aria-label="Artikel ISTANA1000">
    <div class="wsed-topline" aria-hidden="true"></div>
    <header class="wsed-header">
        <span class="wsed-kicker">
            ISTANA1000 OFFICIAL ARTICLE
        </span>
        <h2 class="wsed-title">
            <span>Informasi Lengkap ISTANA1000</span>
        </h2>
        <div class="wsed-divider" aria-hidden="true"></div>
    </header>
    <article class="wsed-body">
        <p><strong><a href="%%CTA_URL%%">Aplikasi ISTANA1000</a> menawarkan ruang hiburan digital dengan tampilan yang mudah dipahami, sehingga pengguna dapat menjelajahi berbagai pilihan permainan tanpa merasa kebingungan. Nuansa antarmuka yang ringan membuat perpindahan menu terasa praktis, sementara informasi pada setiap pilihan disusun secara sederhana agar nyaman dibaca. Pengalaman seperti ini cocok untuk pengguna yang menyukai eksplorasi dan ingin mencoba suasana permainan berbeda dalam waktu luang. Selain memperhatikan tampilan, penting juga menikmati permainan secara santai, mengatur waktu, serta memahami fitur yang tersedia sebelum mulai bermain. ISTANA1000 dapat menjadi salah satu tempat untuk mengenal variasi permainan bertema petualangan dengan karakter, misi, dan elemen visual yang beragam. Pilihan tersebut dapat dicoba bergantian sesuai selera. Setiap sesi dapat dinikmati sesuai preferensi pribadi tanpa perlu terburu-buru mengejar hasil tertentu. Dengan pendekatan yang santai, pengguna bisa lebih fokus menikmati desain, cerita, tantangan, dan detail kecil yang membuat pengalaman digital terasa lebih hidup, sekaligus tetap menjaga aktivitas bermain sebagai hiburan yang terukur dan menyenangkan.</strong></p>
    </article>

    <section class="wsed-keywords" aria-labelledby="wsed-keywords-title">
        <h2 class="wsed-keywords-title" id="wsed-keywords-title">
            Keyword Terkait :
        </h2>
        <div class="wsed-keyword-list">
            <span class="wsed-keyword">PLATFORM ISTANA1000</span>
            <span class="wsed-keyword">SITUS ISTANA1000</span>
            <span class="wsed-keyword">ISTANA1000 LOGIN</span>
            <span class="wsed-keyword">AGEN ISTANA1000</span>
            <span class="wsed-keyword">ISTANA1000 DAFTAR</span>
            <span class="wsed-keyword">BANDAR ISTANA1000</span>
            <span class="wsed-keyword">ISTANA1000 ONLINE</span>
        </div>
    </section>
</div>

<div role='tabpanel' class='tab-pane tab-custom' id='faq'><center style='padding:50px 0px'>
						<img style='width:220px' src='https://members.phpmu.com/asset/no-product.png'><br>
						Maaf, Tidak ada data..</center></div>

				<div role='tabpanel' class='tab-pane tab-custom' id='diskusi'>
<table style='background:#fff; border-radius:6px' class='table table-hover dont-break-out'>
<thead>

<tr id='komentar9001'>
<td class='hidden-xs' width='60px' style='border:none'>
<img style='width:50px' src='https://istana1000.org/images/favicon.png' class='img-thumbnail' alt='User Image'>
</td>
<td style='border-left:1px solid #D8D1C3'>
<div style='padding:5px 0;background-color:#F8F6EF;border-bottom:1px solid #D8D1C3'>
<a style='margin-left:10px;color:#C8BFAE'>Cantika</a>
<br class='visible-xs'>
<small style='color:#B8AE9C;margin-left:10px'>Commented On 2026-06-14 11:23:12</small>
<small style='color:#B8AE9C' class='pull-right'><button class='pull-right btn btn-xs btn-default'>Member</button></small>
</div>

<div style='clear:both'></div>
<div style='display:inline-block'>Saya cukup sering bermain di ISTANA1000...</div>
<div style='display:none'>Saya cukup sering bermain di ISTANA1000 karena pilihan permainannya lengkap dan selalu ada update game terbaru. Tampilan situsnya juga ringan sehingga nyaman digunakan melalui smartphone kapan saja.</div>
<hr style='margin:5px 0px'>
</td>
</tr>

<tr id='komentar9002'>
<td class='hidden-xs' width='60px' style='border:none'>
<img style='width:50px' src='https://istana1000.org/images/favicon.png' class='img-thumbnail'>
</td>
<td style='border-left: 1px solid #ddd;'>
<div style='padding:5px 0px; background-color:#f6f8fa; border-bottom: 1px solid #e4e4e4'>
<a style='margin-left:10px; color:#000'>Satria</a>
<br class='visible-xs'>
<small style='color:#b7b7b7; margin-left:10px'>Commented On 2026-06-12 09:12:21</small>
<small style='color:#000' class='pull-right'><button class='pull-right btn btn-xs btn-default'>Visitor</button></small>
</div>

<div style='clear:both'></div>
<div style='display:inline-block'>Menurut saya ISTANA1000 memiliki navigasi...</div>
<div style='display:none'>Menurut saya ISTANA1000 memiliki navigasi yang mudah dipahami dan akses yang cepat. Selain itu, informasi permainan yang sedang populer juga diperbarui secara rutin sehingga lebih praktis saat memilih game</div>
<hr style='margin:5px 0px'>
</td>
</tr>

<tr id='komentar9003'>
<td class='hidden-xs' width='60px' style='border:none'>
<img style='width:50px' src='https://istana1000.org/images/favicon.png' class='img-thumbnail'>
</td>
<td style='border-left: 1px solid #ddd;'>
<div style='padding:5px 0px; background-color:#f6f8fa; border-bottom: 1px solid #e4e4e4'>
<a style='margin-left:10px; color:#000'>Abeng</a>
<br class='visible-xs'>
<small style='color:#b7b7b7; margin-left:10px'>Commented On 2026-06-10 02:41:25</small>
<small style='color:#000' class='pull-right'><button class='pull-right btn btn-xs btn-default'>User</button></small>
</div>

<div style='clear:both'></div>
<div style='display:inline-block'>Yang saya suka dari ISTANA1000 adalah...</div>
<div style='display:none'>Yang saya suka dari ISTANA1000 adalah koleksi permainan dari provider ternama yang cukup lengkap. Proses aksesnya lancar dan tampilannya terlihat modern dibanding banyak platform lainnya.</div>
<hr style='margin:5px 0px'>
</td>
</tr>

<tr id='komentar9004'>
<td class='hidden-xs' width='60px' style='border:none'>
<img style='width:50px' src='https://istana1000.org/images/favicon.png' class='img-thumbnail'>
</td>
<td style='border-left: 1px solid #ddd;'>
<div style='padding:5px 0px; background-color:#f6f8fa; border-bottom: 1px solid #e4e4e4'>
<a style='margin-left:10px; color:#000'>Iqbal</a>
<br class='visible-xs'>
<small style='color:#b7b7b7; margin-left:10px'>Commented On 08 Jan 2026 08:31:11</small>
<small style='color:#000' class='pull-right'><button class='pull-right btn btn-xs btn-default'>Visitor</button></small>
</div>

<div style='clear:both'></div>
<div style='display:inline-block'>Saya menemukan banyak permainan menarik di ISTANA1000 dengan tampilan yang responsif...</div>
<div style='display:none'>Saya menemukan banyak permainan menarik di ISTANA1000 dengan tampilan yang responsif. Platform ini cukup nyaman digunakan baik melalui perangkat mobile maupun desktop.</div><hr style='margin:5px 0px'><button id='click_2700' style='display:block; color:green' class='btn btn-xs hidee_2700'>Lihat detail, Ada 1 Balasan</button><button id='click_2700' style='display:none; color:green' class='btn btn-xs hidee_2700'>Sembunyikan Balasan...</button><div class='hidee_2700' style='display:none'><div style='background:#f4f4f4; border:1px solid #e3e3e3'>
                            <div class='alert-success' style=' padding:3px'>
                            <a style='margin-left:10px; color:#000' href='https://istana1000.org/'> GAMES ONLINE</a> <br class='visible-xs'> <small style='margin-left:10px'><i style='font-size:12px; color:#fff'> Replied on 23 Mar 2020 11:41:22</i></small><button style='background:transparent; border-radius:5px !important;'  class='pull-right btn btn-xs btn-default'>Owner</button> 
                            <button style='background:transparent; border-radius:5px !important; margin-right:3px'  class='pull-right btn btn-xs btn-default'>Author</button> 
                            </div>

                            <div style='padding-left:20px'>Pembayaran juga dapat dilakukan secara otomatis melalui QRIS, sehingga proses deposit biasanya langsung terkonfirmasi dan masuk ke akun Anda</div><div style='clear:both'><br></div></div></div></td></tr>
                    
                    <tr><td colspan='2'><div class='hidee_2700' style='display:none; font-size:12px; color:rgb(4, 121, 76); text-align:center'>Silakan login terlebih dahulu untuk menulis atau membalas komentar!</div></td></tr></thead>
</table><ul class='pagination'><li class='disabled'><li class='active'><a href='https://istana1000.org/'>1<span class='sr-only'></span></a></li><li><a href="%%CTA_URL%%" data-ci-pagination-page="2">2</a></li><li><a href="%%CTA_URL%%" data-ci-pagination-page="2" rel="next">&gt;</a></ul></div>
		
				<div role='tabpanel' class='tab-pane tab-custom' id='ulasan'><div class='col-md-6 col-xs-12'>
<div class='col-md-4 col-xs-12'>
        <center>
            <h1 style='font-weight:600'>4.7 / <small>5</small></h1>
            <span class='fa fa-star-o'></span>
                  <span class='fa fa-star' style='color:orange'></span>
                  <span class='fa fa-star' style='color:orange'></span>
                  <span class='fa fa-star' style='color:orange'></span>
                  <span class='fa fa-star' style='color:orange'></span>
        </center>
  </div>
  
  <div class='col-md-8 col-xs-12'><span style='display:block; border-bottom:1px dotted #cecece'><span class='fa fa-star' style='color:orange'></span> <b>5</b> <span class='pull-right'>7.530 Orang</span></span><span style='display:block; border-bottom:1px dotted #cecece'><span class='fa fa-star' style='color:orange'></span> <b>4</b> <span class='pull-right'>2.130 Orang</span></span><span style='display:block; border-bottom:1px dotted #cecece'><span class='fa fa-star' style='color:orange'></span> <b>3</b> <span class='pull-right'>0 Orang</span></span><span style='display:block; border-bottom:1px dotted #cecece'><span class='fa fa-star' style='color:orange'></span> <b>2</b> <span class='pull-right'>0 Orang</span></span><span style='display:block; border-bottom:1px dotted #cecece'><span class='fa fa-star' style='color:orange'></span> <b>1</b> <span class='pull-right'>0 Orang</span></span></div></div>

<div style='clear:both'><br></div><center style='padding:50px 0px'>Banyak pemain yang merasa puas!</center></div></div>
		</div><div class='col-md-4 col-xs-12'>
			<div class='panel panel-success' style='border-color:#d7d7d7; margin-bottom:10px;'>
				<div style='padding:10px 20px'><div class='pricex'>
						<div class='lisensi_type'>Regular</div>
						<div class='lisensi_price'><span class='price-old'>Rp 10,000</span><span class='price-new'>Rp 8,000</span></div>
					</div>

<style>
.panel.panel-success{border:none!important;border-radius:24px!important;overflow:hidden;background:linear-gradient(145deg,#F8F6EF,#E8E3D8);box-shadow:0 15px 40px rgba(184,174,156,.18);margin-bottom:20px}
.pricex{text-align:center;padding:15px 0}
.lisensi_price{font-size:18px;font-weight:700;color:#C8BFAE!important}
.lisensi_price .price-old{font-size:12px;font-weight:600;color:#B8AE9C;text-decoration:line-through;margin-right:8px}
.lisensi_price .price-new{font-size:20px;font-weight:900;color:#C8BFAE}
.panel ul{list-style:none;padding:0 15px;margin:15px 0}
.panel ul li{position:relative;padding:8px 0 8px 24px;color:#B8AE9C;font-size:14px}
.panel ul li::before{content:'✓';position:absolute;left:0;color:#C8BFAE;font-weight:800}
.btn-success{background:linear-gradient(135deg,#C8BFAE,#B8AE9C)!important;border:none!important;border-radius:14px!important;font-weight:800!important;color:#F8F6EF!important;box-shadow:0 10px 25px rgba(200,191,174,.25)}
.btn-info{background:linear-gradient(135deg,#E8E3D8,#C8BFAE)!important;border:none!important;border-radius:14px!important;color:#F8F6EF!important}
.btn-danger{border-radius:14px!important;border:1px solid #D8D1C3!important;background:#F8F6EF!important;color:#B8AE9C!important}
.dl-horizontal{margin:0}
.dl-horizontal dt{color:#B8AE9C;font-weight:800;padding:6px 0}
.dl-horizontal dd{color:#B8AE9C;padding:6px 0}
.dl-horizontal a{color:#C8BFAE;font-weight:700;text-decoration:none}
.dl-horizontal dd:last-child{color:#C8BFAE;font-weight:800}
.img-thumbnail{border-radius:14px!important;border:2px solid rgba(200,191,174,.25)!important}
h5 a{color:#B8AE9C!important;text-decoration:none;font-size:1.5rem!important}
.btn-xs{border-radius:10px!important;font-weight:700!important}
.badge-info{background:#F8F6EF!important;border:1px solid #D8D1C3!important;color:#B8AE9C!important;text-align:left;padding:10px 12px!important;margin-bottom:8px!important;transition:.3s}
.badge-info:hover{transform:translateX(4px);border-color:#C8BFAE!important;box-shadow:0 8px 20px rgba(200,191,174,.08)}
.badge{float:right;background:linear-gradient(135deg,#C8BFAE,#B8AE9C)!important;color:#F8F6EF!important;border-radius:999px!important;padding:4px 10px!important;font-weight:800;font-size:1.1rem!important}
a{transition:.3s}
a:hover{opacity:.85}
@media(max-width:768px){.panel.panel-success{border-radius:18px!important}.badge-info{font-size:1.2rem!important}}
.panel.panel-success{position:relative;overflow:hidden;margin:20px 0;border:1px solid #D8D1C3!important;border-radius:22px!important;background:linear-gradient(145deg,#F8F6EF,#E8E3D8 55%,#F8F6EF)!important;box-shadow:0 18px 45px rgba(184,174,156,.22),inset 0 1px 0 #F8F6EF}
.panel.panel-success:before{content:"";display:block;height:4px;background:linear-gradient(90deg,#B8AE9C,#C8BFAE,#F8F6EF,#C8BFAE,#B8AE9C)}
.panel.panel-success .pricex{position:relative;padding:22px 15px;text-align:center}
.panel.panel-success .pricex:after{content:"";display:block;width:55px;height:2px;margin:10px auto 0;border-radius:999px;background:linear-gradient(90deg,#B8AE9C,#C8BFAE,#B8AE9C)}
.panel.panel-success .lisensi_price{color:#C8BFAE!important;font-weight:900}
.panel.panel-success .lisensi_price span:last-child{font-size:28px!important;font-weight:900!important}
.panel.panel-success hr{margin:8px 20px;border:0;border-top:1px solid #D8D1C3}
.panel.panel-success ul{margin:15px 20px;padding:0;list-style:none;border:1px solid #D8D1C3;border-radius:16px;background:rgba(248,246,239,.65);overflow:hidden}
.panel.panel-success ul li{position:relative;padding:12px 14px 12px 40px;color:#B8AE9C;font-size:13px;border-bottom:1px solid rgba(216,209,195,.55)}
.panel.panel-success ul li:last-child{border-bottom:none}
.panel.panel-success ul li:before{content:"✓";position:absolute;left:13px;top:10px;width:21px;height:21px;display:flex;align-items:center;justify-content:center;border-radius:50%;background:linear-gradient(145deg,#C8BFAE,#B8AE9C);color:#F8F6EF;font-size:10px;font-weight:900}
.panel.panel-success .btn-success{margin:0 20px;width:calc(100% - 40px);background:linear-gradient(135deg,#C8BFAE,#B8AE9C)!important;border:0!important;border-radius:13px!important;color:#F8F6EF!important;font-weight:900!important;font-size:1.2rem!important;box-shadow:0 9px 22px rgba(184,174,156,.25)}
.panel.panel-success .btn-info{margin:8px 20px;width:calc(100% - 40px)!important;background:#F8F6EF!important;border:1px solid #C8BFAE!important;border-radius:13px!important;color:#B8AE9C!important;font-weight:800;font-size:1.2rem!important}
.panel.panel-success .btn-danger{background:#F8F6EF!important;border:1px solid #D8D1C3!important;border-radius:12px!important;color:#B8AE9C!important}
.panel.panel-success .horcustom{margin:16px 20px!important;padding:0!important;border:1px solid #D8D1C3;border-radius:17px;background:#F8F6EF;overflow:hidden}
.panel.panel-success .dl-horizontal{margin:0;padding:8px 16px;text-align:center}
.panel.panel-success .dl-horizontal:before{content:"DETAIL PLATFORM";display:block;padding:12px 0 10px;color:#C8BFAE;font-size:20px;font-weight:900;letter-spacing:1.5px;border-bottom:1px solid #D8D1C3}
.panel.panel-success .dl-horizontal dt{float:none;width:100%;padding:9px 0 3px;color:#B8AE9C;font-size:15px;font-weight:900;text-align:center}
.panel.panel-success .dl-horizontal dd{margin:0;padding:0 0 10px;color:#B8AE9C;font-size:12px;font-weight:700;text-align:center;line-height:1.5;border-bottom:1px solid rgba(216,209,195,.5)}
.panel.panel-success .dl-horizontal dd:last-child{border-bottom:none;color:#C8BFAE;font-weight:900}
.panel.panel-success .dl-horizontal a{color:#C8BFAE!important;font-weight:800;text-decoration:none}
.panel.panel-success .dl-horizontal dd:last-child{color:#C8BFAE;font-weight:900}
.panel.panel-success a:hover{color:#B8AE9C!important}
.navbar-fixed-bottom .btn-primary{padding:8px 16px!important;font-size:14px!important;font-weight:800!important;line-height:1.42857143!important;border-radius:20px!important;background:#B8AE9C!important;border:1px solid #B8AE9C!important;color:#F8F6EF!important}
.navbar-fixed-bottom .btn-primary:hover{background:#A99F8E!important;border-color:#A99F8E!important;color:#F8F6EF!important}
</style>

<dl class='dl-horizontal'>
    <dt>SERVER</dt>
    <dd><a href='https://istana1000.org/'>LUAR NEGERI</a></dd>
    <dt>NAMA SITUS</dt><dd>ISTANA1000</dd>
    <dt>AKSES</dt><dd><b>Mobile &amp; Desktop</b></dd>
    <dt>JENIS</dt><dd>ALL GAMES</dd>
    <dt>PEMBAYARAN</dt><dd><a href='https://istana1000.org/'>BANK · E-WALLET · PULSA · QRIS</a></dd>
    <dt>RATING</dt><dd>★★★★★</dd>
</dl>
</div>
<div class='panel panel-success' style='border-color:#d7d7d7;'>
	<div style='padding:8px'>
		<img class='img-thumbnail pull-left' style='width:45px; border:1px solid #8a8a8a; margin-right:6px' src='https://istana1000.org/images/favicon.png'>
			<h5 style='margin:5px 0px 0px 0px'><a href='https://istana1000.org/'><b>PLATFORM ISTANA1000</b></a></h5>
				<a class='btn btn-info btn-xs' href='https://istana1000.org/'>Lihat Profile</a>
				<a class='btn btn-success btn-xs' href='https://gerbang-istana1000org-favorit.pages.dev/'><i class='fa fa-comments-o fa-fw'></i>  Chat Pelanggan</a>
				<div style='clear:both'><br>
             </div>
<a class='btn btn-default btn-xs btn-block badge-info' href='https://istana1000.org/'>Pilihan Layanan <span class='badge'>Lengkap</span></a>
<a class='btn btn-default btn-xs btn-block badge-info' style='cursor:default' href='https://istana1000.org/'>Member Aktif <span class='badge'>25000+</span></a>
<a class='btn btn-default btn-xs btn-block badge-info' style='cursor:default' href='https://istana1000.org/'>Transaksi Diproses <span class='badge'>Cepat</span></a>
<a class='btn btn-default btn-xs btn-block badge-info' style='cursor:default' href='https://istana1000.org/'>Update Layanan <span class='badge'>Hari Ini</span></a>
<hr style='margin:10px 0px; border-color:#fff'>
<a class='btn btn-default btn-xs btn-block badge-info' style='cursor:default' href='https://istana1000.org/'>Bantuan Akun <span class='badge'>24 Jam</span></a>
<a class='btn btn-default btn-xs btn-block badge-info' style='cursor:default' href='https://istana1000.org/'>Respon Layanan <span class='badge' style='background:#28a745'>Online</span></a>
<a class='btn btn-default btn-xs btn-block badge-info' style='cursor:default' href='https://istana1000.org/'>Kendala Akses <span class='badge'>Dibantu</span></a>
</div>
	</div>
<div class='product col-md-6 col-xs-6 hover'></div>
</div></div><div style='clear:both'></div><br>
<div class="modal fade" id="fileberbayar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h5 style='color:rgb(0, 255, 157)' class="modal-title" id="myModalLabel">Pemberitahuan !!!</h5>
  </div>
  <div class="modal-body">
  <center>Maaf, File ini berbayar (Rp <b>952,000 </b>).. <br>
      Hubungi <a href='https://istana1000.org/'>GAMES ONLINE</a> untuk Mendapatkan file ini.<br>
      Atau bisa klik <a href='https://istana1000.org/'>Disini</a> untuk menghubunginya, Terima kasih.. ^_^<br><br>
  </center>
  </div>
</div>
</div>
</div>

<div class="modal fade" id="premiummembers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h5 style='color:rgb(19, 146, 114)' class="modal-title" id="myModalLabel">Pemberitahuan !!!</h5>
  </div>
  <div class="modal-body">
    <center>Haloo Ibuk. <b></b>,.. <br>  		Hak akses File ini gratis untuk Premium members.. <br>
      	Silahkan klik <a href='https://istana1000.org/'>Disini</a> Untuk Melanjutkan...</center><br>
  </div>
</div>
</div>
</div>

<div class='navbar navbar-fixed-bottom hidden-xs' style='background:#dbdbdb; padding:10px; box-shadow: rgba(49, 53, 59, 0.16) 0px -2px 6px 0px'>
		<div class='container'>
			<span class='pull-left'>
				<img class='img-thumbnail pull-left' style='width:40px; border:1px solid #8a8a8a; margin-right:6px' src='https://istana1000.org/images/favicon.png'>
				<h5 style='margin:5px 0px 0px 0px; display:inline-block; min-width:150px'><a href='https://istana1000.org/'><b>GAMES ONLINE</b></a></h5>
				<br><small><span style='color:#211f1c;'>Free Account</span></small>
			</span>
			<span class='pull-right' style='display:inline-flex'> 
				<i style='margin-right:5px'>Total.</i> <span style='margin-right:20px; font-size:23px'><b>Rp20,000 </b></span> 
				<span><a class='btn btn-primary' href='https://gerbang-istana1000org-favorit.pages.dev/'>Daftar Sekarang</a>
 			          <a target='_BLANK' class='btn btn-success' href='https://istana1000.org/'><i class='fa fa-comments-o fa-fw'></i> Chat Pelanggan</a></span>
			</span>
		</div>
	</div><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
$(document).ready(function(){
var settings = {
    url: "https://istana1000.org/",
    formData: {id: ""},
    dragDrop: false,
	maxFileCount:1,
    multiple: false,
    fileName: "uploadFile",
	maxFileSize:5000*1024,
    allowedTypes:"jpg,png,gif,jpeg",		
    returnType:"json",
	onSuccess:function(files,data,xhr)
    {
       // alert((data));
    },
    showDone:false,
    showDelete:true,
    deleteCallback: function(data,pd) {
        $.post("https://istana1000.org/",{op: "delete", name:data},
            function(resp, textStatus, jqXHR) {
                // $("#status").append("<div>File Deleted</div>");   
            });
        for(var i=0;i<data.length;i++) {
            $.post("https://istana1000.org/",{op:"delete",name:data[i]},
            function(resp, textStatus, jqXHR) {
                // $("#status").append("<div>File Deleted</div>");  
            });
        }   
        pd.statusbar.hide();
    }   
}
$("#mulitplefileuploader").uploadFile(settings);
});
</script>

<script>
    var $star_rating = $('.star-rating .fa');
    var SetRatingStar = function() {
    return $star_rating.each(function() {
        if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
        return $(this).removeClass('fa-star-o').addClass('fa-star');
        } else {
        return $(this).removeClass('fa-star').addClass('fa-star-o');
        }
    });
    };

    $star_rating.on('click', function() {
    $star_rating.siblings('input.rating-value').val($(this).data('rating'));
    return SetRatingStar();
    });

    SetRatingStar();
    $(document).ready(function() {
    });

    $(".selected").click(function() {
            var selected = $(this).hasClass("highlight");
            $(".selected").removeClass("highlight");
            if(!selected){
            $(this).addClass("highlight");
            }
        
    });
</script>

</div>
</div>  
</div>    
</div>
</div>
<br>

<style>
:root{--container-footer-bg:#211f1c;--container-footer-panel:#E8E3D8;--container-footer-border:rgba(184,174,156,.35);--container-footer-text:#B8AE9C;--container-footer-title:#C8BFAE;--container-footer-accent:#C8BFAE}
.container-footer{width:100%;background:var(--container-footer-bg);color:var(--container-footer-text);font-family:Arial,Helvetica,sans-serif;box-sizing:border-box;padding:44px 0 18px}
.container-footer *{box-sizing:border-box}.container-footer a{text-decoration:none}
.container-footer-container{width:min(1180px,calc(100% - 32px));margin:0 auto}
.container-footer-top{display:grid;grid-template-columns:310px 1fr;gap:34px;align-items:start;padding-bottom:30px}
.container-footer-brand{min-width:0}.container-footer-logo{display:block;width:220px;max-width:100%;height:auto;margin:0 0 20px}
.container-footer-brand-title{margin:0 0 10px;color:var(--container-footer-title);font-size:17px;line-height:1.35;font-weight:800;letter-spacing:.2px;text-transform:uppercase}
.container-footer-address{margin:0;color:#B8AE9C;font-size:14px;line-height:1.75;font-style:normal}
.container-footer-contact{margin-top:30px}
.container-footer-contact a{display:flex!important;justify-content:center!important;align-items:center!important;width:100%!important}
.container-footer-contact img{display:block!important;width:200px!important;height:auto!important;max-width:100%!important}
.container-footer-menu{display:grid;grid-template-columns:repeat(5,minmax(0,1fr));background:var(--container-footer-panel);border:1px solid var(--container-footer-border);border-radius:14px;overflow:hidden}
.container-footer-column{min-width:0;padding:24px 22px 26px;border-right:1px solid var(--container-footer-border)}.container-footer-column:last-child{border-right:0}
.container-footer-heading{margin:0 0 18px;color:var(--container-footer-title);font-size:17px;line-height:1.35;font-weight:800}
.container-footer-subheading{margin:26px 0 16px;color:var(--container-footer-title);font-size:16px;line-height:1.35;font-weight:800}
.container-footer-list{list-style:none;margin:0;padding:0}.container-footer-list li{margin:0 0 11px}.container-footer-list li:last-child{margin-bottom:0}
.container-footer-link{display:inline-block;color:var(--container-footer-text);font-size:14px;line-height:1.5;font-weight:600;transition:color .2s ease,transform .2s ease}
.container-footer-link:hover{color:var(--container-footer-accent);transform:translateX(3px)}
.container-footer-bottom{display:flex;align-items:center;justify-content:space-between;gap:20px;margin-top:26px;padding-top:18px;border-top:1px solid var(--container-footer-border)}
.container-footer-copy{margin:0;color:#B8AE9C;font-size:13px;line-height:1.6}.container-footer-bottom-links{display:flex;flex-wrap:wrap;gap:10px 18px;margin:0;padding:0;list-style:none}
.container-footer-bottom-links a{color:#B8AE9C;font-size:13px;font-weight:600;transition:color .2s ease}.container-footer-bottom-links a:hover{color:var(--container-footer-accent)}
@media(max-width:1100px){.container-footer-top{grid-template-columns:1fr}.container-footer-menu{grid-template-columns:repeat(3,minmax(0,1fr))}.container-footer-column:nth-child(3){border-right:0}.container-footer-column:nth-child(-n+3){border-bottom:1px solid var(--container-footer-border)}}
@media(max-width:767px){.container-footer{padding-top:32px}.container-footer-container{width:min(100% - 22px,1180px)}.container-footer-menu{grid-template-columns:repeat(2,minmax(0,1fr))}.container-footer-column{padding:20px 18px 22px}.container-footer-column:nth-child(odd){border-right:1px solid var(--container-footer-border)}.container-footer-column:nth-child(even){border-right:0}.container-footer-column:nth-child(-n+4){border-bottom:1px solid var(--container-footer-border)}.container-footer-column:nth-child(5){grid-column:1/-1;border-right:0}.container-footer-bottom{align-items:flex-start;flex-direction:column}}
@media(max-width:520px){.container-footer-menu{grid-template-columns:1fr}.container-footer-column,.container-footer-column:nth-child(odd),.container-footer-column:nth-child(even){border-right:0;border-bottom:1px solid var(--container-footer-border)}.container-footer-column:last-child{border-bottom:0}.container-footer-column:nth-child(5){grid-column:auto}.container-footer-logo{width:190px}.container-footer-bottom-links{display:grid;grid-template-columns:1fr 1fr;width:100%}}
</style>

<footer class="container-footer">
  <div class="container-footer-container">
    <div class="container-footer-top">
      <div class="container-footer-brand">
        <a aria-label="ISTANA1000">
          <img src="https://istana1000.org/images/logo.png" alt="ISTANA1000" class="container-footer-logo">
        </a>
        <h3 class="container-footer-brand-title">APLIKASI GAMING OFFICIAL</h3>
        <address class="container-footer-address">
          Jl. Raya Cikarang No. 77, Kabupaten Bekasi<br>
          Bekasi 17125 - Indonesia
          <div class="container-footer-contact">
            <a href="%%CTA_URL%%" target="_blank" rel="noopener noreferrer">
              <img src="https://istana1000.org/images/daftar-sekarang.gif" alt="Daftar Sekarang">
            </a>
          </div>
        </address>
      </div>

<div class="container-footer-menu">
   <div class="container-footer-column">
   <h3 class="container-footer-heading">Products</h3>
   <ul class="container-footer-list">
    <li><a class="container-footer-link">ISTANA1000</a></li>
    <li><a class="container-footer-link">PLATFORM ASIA</a></li>
    <li><a class="container-footer-link">AGEN GAMES</a></li>
    <li><a class="container-footer-link">BANDAR ONLINE</a></li>
    <li><a class="container-footer-link">SITUS RESMI</a></li>
    <li><a class="container-footer-link">GAMES ONLINE</a></li>
    <li><a class="container-footer-link">EVENT PROMOSI</a></li>
    <li><a class="container-footer-link">HADIAH CASHBACK</a></li>
   </ul>
</div>

<div class="container-footer-column">
  <h3 class="container-footer-heading">Layanan</h3>
  <ul class="container-footer-list">
    <li><a class="container-footer-link">Promo Terbaru</a></li>
    <li><a class="container-footer-link">Bonus &amp; Reward</a></li>
    <li><a class="container-footer-link">Benefit Member</a></li>
    <li><a class="container-footer-link">Pilihan Pembayaran</a></li>
    <li><a class="container-footer-link">Panduan Deposit</a></li>
    <li><a class="container-footer-link">Panduan Withdraw</a></li>
    <li><a class="container-footer-link">Program Referral</a></li>
  </ul>
</div>

<div class="container-footer-column">
  <h3 class="container-footer-heading">Pusat Bantuan</h3>
  <ul class="container-footer-list">
    <li><a class="container-footer-link">Bantuan Member</a></li>
    <li><a class="container-footer-link">Customer Support</a></li>
    <li><a class="container-footer-link">Bantuan 24 Jam</a></li>
    <li><a class="container-footer-link">Pertanyaan Umum</a></li>
    <li><a class="container-footer-link">Panduan Keamanan</a></li>
  </ul>
</div>

<div class="container-footer-column">
  <h3 class="container-footer-heading">Member</h3>
  <ul class="container-footer-list">
    <li><a class="container-footer-link" href="https://gerbang-istana1000org-favorit.pages.dev/">Masuk ke Akun</a></li>
    <li><a class="container-footer-link" href="https://gerbang-istana1000org-favorit.pages.dev/">Buat Akun Baru</a></li>
    <li><a class="container-footer-link" href="https://gerbang-istana1000org-favorit.pages.dev/">Bantuan Password</a></li>
    <li><a class="container-footer-link">Keamanan Akun</a></li>
    <li><a class="container-footer-link">Verifikasi Member</a></li>
    <li><a class="container-footer-link">Benefit Member</a></li>
  </ul>
</div>

<div class="container-footer-column">
  <h3 class="container-footer-heading">Informasi</h3>
  <ul class="container-footer-list">
    <li><a class="container-footer-link">Panduan untuk Pemula</a></li>
    <li><a class="container-footer-link">Cara Menggunakan Layanan</a></li>
    <li><a class="container-footer-link">Informasi &amp; Kebijakan</a></li>
    <li><a class="container-footer-link">Kontak Resmi</a></li>
  </ul>
</div>
</div>
</div>

    <div class="container-footer-bottom">
      <p class="container-footer-copy">&copy; 2026 ISTANA1000. Seluruh hak dilindungi.</p>
      <ul class="container-footer-bottom-links">
        <li><a>Tentang Kami</a></li>
        <li><a>Kebijakan Privasi</a></li>
        <li><a>Syarat &amp; Ketentuan</a></li>
        <li><a>Hubungi Kami</a></li>
      </ul>
    </div>
  </div>
</footer>

</div>

</div>
</section>


<footer style='background:#292723'>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <p class="footer" style='color:#B8AE9C' >
        <span><br>Copyright © 2026, <a style='color:#C8BFAE' href='https://istana1000.org/'>APLIKASI RESMI</a>.</span>
            <br>Oleh <a href="%%CTA_URL%%">ISTANA1000 Team</a> | <a href="%%CTA_URL%%">Privacy Policy</a> | <a href="https://istana1000.org/syarat-dan-ketentuan">Terms of Service</a>.
        </p>
        </div>
    </div>
</div>
</footer>

    <div class="modal fade" id="validasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h5 class="modal-title" id="myModalLabel">Silahkan Verifikasi Email Anda</h5>
      </div>
      <div class="modal-body">
        <center>Maaf, Sebelum download diwajibkan untuk verifikasi email.<br>
          Silahkan Verifikasi alamat email anda sekarang juga, <br>
          untuk memastikan data profile yang anda isikan sudah benar, <br>
          Verifikasi email : <a href='https://istana1000.org/'></a> <br>
          <a style='margin-top:10px;' class='btn btn-sm btn-primary' href='https://istana1000.org/'><i class="fa fa-envelope fa-fw"></i> Kirimkan Email Verifikasi</a></center><br>
      </div>
    </div>
    </div>
  </div>
    
    <div class="modal fade" id="validasimembers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h5 class="modal-title" id="myModalLabel">Silahkan Verifikasi Email Anda</h5>
      </div>
      <div class="modal-body">
        <center>Silahkan Verifikasi alamat email anda sekarang juga, <br>
          untuk memastikan data profile yang anda isikan sudah benar, <br>
          Verifikasi email : <a href='https://istana1000.org/'></a> <br>
          <a style='margin-top:10px;' target='_BLANK' class='btn btn-sm btn-primary' href='https://istana1000.org/'><i class="fa fa-envelope fa-fw"></i> Kirimkan Email Verifikasi</a></center><br>
      </div>
    </div>
    </div>
  </div>

    <div class="modal fade bs-example-modal-lg" id="myModalDetail-revisi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h5 class="modal-title" id="myModalLabel">Kirim Laporan Produk</h5>
          </div>
          <div class="modal-body">
            <div class="content-body"></div>
          </div>
      </div>
  </div>
  </div>
  
  <div class="modal fade" id="rekening" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h5 class="modal-title" id="myModalLabel">Rekening Kami</h5>
      </div>
            <div class="modal-body">
      <table class='table table-condensed table-hover'>
      <tr><td rowspan='4' style='width:105px'><img style='width:100px' src='https://sengamp4.site/assets/images/bank/bsi.png'></td></tr>
                <tr><th colspan='3' scope='row' class='rekening'> BSI - Bank Syariah Indonesia (451)</th></tr>
                <tr><td colspan='3' scope='row'> </td></tr>
                <tr><td colspan='3' scope='row'> </td></tr>
                <tr><td colspan='3'>&nbsp;</td></tr><tr><td rowspan='4' style='width:105px'><img style='width:100px' src='https://sengamp4.site/assets/images/bank/muamalat.png'></td></tr>
                <tr><th colspan='3' scope='row' class='rekening'> Bank Muamalat (147)</th></tr>
                <tr><td colspan='3' scope='row'> </td></tr>
                <tr><td colspan='3' scope='row'> </td></tr>
                <tr><td colspan='3'>&nbsp;</td></tr><tr><td rowspan='4' style='width:105px'><img style='width:100px' src='https://sengamp4.site/assets/images/bank/bca.png'></td></tr>
                <tr><th colspan='3' scope='row' class='rekening'> Bank Bca (3500)</th></tr>
                <tr><td colspan='3' scope='row'> </td></tr>
                <tr><td colspan='3' scope='row'> </td></tr>
                <tr><td colspan='3'>&nbsp;</td></tr><tr><td rowspan='4' style='width:105px'><img style='width:100px' src='https://sengamp4.site/assets/images/bank/bri.png'></td></tr>
                <tr><th colspan='3' scope='row' class='rekening'> Bank Bri (250)</th></tr>
                <tr><td colspan='3' scope='row'> </td></tr>
                <tr><td colspan='3' scope='row'> </td></tr>
                <tr><td colspan='3'>&nbsp;</td></tr><tr><td rowspan='4' style='width:105px'><img style='width:100px' src='https://sengamp4.site/assets/images/bank/bni.png'></td></tr>
                <tr><th colspan='3' scope='row' class='rekening'> Bank Bni (170)</th></tr>
                <tr><td colspan='3' scope='row'> </td></tr>
                <tr><td colspan='3' scope='row'> </td></tr>
                <tr><td colspan='3'>&nbsp;</td></tr><tr><td rowspan='4' style='width:105px'><img style='width:100px' src='https://sengamp4.site/assets/images/bank/mandiri.png'></td></tr>
                <tr><th colspan='3' scope='row' class='rekening'> Bank Mandiri (200)</th></tr>
                <tr><td colspan='3' scope='row'> </td></tr>
                <tr><td colspan='3' scope='row'> </td></tr>
                <tr><td colspan='3'>&nbsp;</td></tr><tr><td rowspan='4' style='width:105px'><img style='width:100px' src='https://sengamp4.site/assets/images/bank/permata.png'></td></tr>
                <tr><th colspan='3' scope='row' class='rekening'> Bank Permata (107)</th></tr>
                <tr><td colspan='3' scope='row'> </td></tr>
                <tr><td colspan='3' scope='row'> </td></tr>
                <tr><td colspan='3'>&nbsp;</td></tr>      </table>
            </div>
    </div>
    </div>
  </div>
  
    <div class="modal fade bs-example-modal-lg" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h5 class="modal-title" id="myModalLabel">Selamat datang Kembali!</h5>
        </div>
        <div class="modal-body">
          <div class='col-lg-6 hidden-xs'>
                      <div class='ps-block__item' style='margin-bottom: 18px;'>
                      <div class='ps-block__left' style='display:block; float:left'><i style='font-size:35px; margin-right:20px' class='fa fa-send'></i></div>
                      <div class='ps-block__right'>
                          <h5 style='margin-bottom:0px'>Pengiriman gratis</h5>
                          <p>Untuk pesanan min Rp 99.000</p>
                      </div>
                  </div><div class='ps-block__item' style='margin-bottom: 18px;'>
                      <div class='ps-block__left' style='display:block; float:left'><i style='font-size:35px; margin-right:20px' class='fa fa-money'></i></div>
                      <div class='ps-block__right'>
                          <h5 style='margin-bottom:0px'>100% uang Kembali</h5>
                          <p>Jika Produk Bermasalah</p>
                      </div>
                  </div><div class='ps-block__item' style='margin-bottom: 18px;'>
                      <div class='ps-block__left' style='display:block; float:left'><i style='font-size:35px; margin-right:20px' class='fa fa-lock'></i></div>
                      <div class='ps-block__right'>
                          <h5 style='margin-bottom:0px'>Pembayaran aman</h5>
                          <p>Pembayaran aman 100%</p>
                      </div>
                  </div><div class='ps-block__item' style='margin-bottom: 18px;'>
                      <div class='ps-block__left' style='display:block; float:left'><i style='font-size:35px; margin-right:20px' class='fa fa-headphones'></i></div>
                      <div class='ps-block__right'>
                          <h5 style='margin-bottom:0px'>Dukungan 1 x 24 jam</h5>
                          <p>Dukungan khusus untuk anda</p>
                      </div>
                  </div><div class='ps-block__item' style='margin-bottom: 18px;'>
                      <div class='ps-block__left' style='display:block; float:left'><i style='font-size:35px; margin-right:20px' class='fa fa-gift'></i></div>
                      <div class='ps-block__right'>
                          <h5 style='margin-bottom:0px'>Layanan Hadiah</h5>
                          <p>Mendukung layanan hadiah</p>
                      </div>
                  </div>
                  <hr style='padding:0px'>
                  <div class='info--register-bottom' style='margin-bottom:20px'>
                      <center><span>Belum punya akun? </span> <a href='https://istana1000.org/' class='btn-register' target='_parent'>Daftar sekarang!</a></center>
                  </div>
            </div>
            
            <div class='col-lg-6 col-xs-12'>
                  <a href='https://gerbang-istana1000org-favorit.pages.dev/' class='btn btn-default btn-block'>Masuk dengan <span class='fa fa-google'></span>Google</a>
                  <div style='clear:both'></div>
                  <br><div class='logtext'>atau masuk dengan</div><form action="%%CTA_URL%%" class="form-horizontal" role="form" method="post" accept-charset="utf-8">
                  <div  class="form-group" style='margin:15px 0px'>
                      <div style='background:#fff;' class="input-group col-sm-12">
                          <span class="input-group-addon"><i class='fa fa-envelope fa-fw'></i></span>
                          <input type="email" class="required form-control" name="email" placeholder='Your E-mail' required>
                      </div>
                  </div>
                  <div class="form-group" style='margin:15px 0px'>
                      <div style='background:#fff;' class="input-group col-sm-12">
                          <span class="input-group-addon"><i id='icon' style='cursor: pointer !important' class='fa fa-eye-slash fa-fw'></i></span>
                          <input id='password' type="password" class="active required form-control" name="password" placeholder='Your Password' required>
                      </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12 col-xs-12" style='margin-top:-15px;'>
                      <div class="checkbox">
                        <label class='col-sm-offset-1 visible-xs'>
                          Belum Terdaftar? <a href="%%CTA_URL%%">Buat Akun anda.</a>
                        </label>
                        <label class='pull-right'>
                          <a data-dismiss="modal" aria-hidden="true" data-toggle='modal' href='#lupapass' data-target='#lupapass' title="Lupa Password Members">Lupa Password?</a>
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group" style='margin:15px 0px'>
                      <div class="input-group col-sm-12 col-xs-12">
                        <button type="submit" style='min-width:150px' id='oksimpan' name='login' class="btn btn-primary btn-grey btn-block">MASUK</button>
                      </div>
                  </div>

            </div>  
            <div style='clear:both'></div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
    var input = document.getElementById('password'),
    icon = document.getElementById('icon');

    icon.onclick = function () {
        if(input.className == 'active required form-control') {
            input.setAttribute('type', 'text');
            icon.className = 'fa fa-eye fa-fw';
            input.className = 'required form-control';
        } else {
            input.setAttribute('type', 'password');
            icon.className = 'fa fa-eye-slash fa-fw';
            input.className = 'active required form-control';
        }
   }
  </script>
  
    <div class="modal fade" id="lupapass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h5 class="modal-title" id="myModalLabel">Email - Lupa Password?</h5>
        </div><center>
        <div class="modal-body">
          <form action="%%CTA_URL%%" class="form-horizontal" role="form" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <center>Lupa password Anda? <br>Masukkan alamat Email yang terdaftar pada member area.</center><br>
                    <div style='background:#fff;' class="input-group col-sm-10 col-xs-12">
                        <span class="input-group-addon"><i class='fa fa-envelope fa-fw'></i></span>
                        <input style='text-transform:lowercase;' type="email" class="required form-control" placeholder='Your Email' name="email" required>
                    </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-11 col-xs-12" style='margin-top:-15px;'>
                    <div class="checkbox">
                      <label class='pull-right'>
                      <a data-dismiss="modal" aria-hidden="true" data-toggle='modal' href='#lupasms' data-target='#lupasms' title="Reset Password Via SMS">Coba Reset Via Whatsapp?</a>
                      </label>
                    </div>
                  </div>
                </div>
            <div style='clear:both'></div>
        </div>
        <div class="modal-footer">
                <button type="submit" style='min-width:150px' name='lupa' class="btn btn-primary">SUBMIT</button>
                <a class="btn btn-default" data-dismiss="modal" aria-hidden="true" data-toggle='modal' href='#login' data-target='#login' title="Kembali Login">Kembali Login?</a>
        </div>
        </form>
        </center>
      </div>
    </div>
  </div>
  
    <div class="modal fade" id="lupasms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h5 class="modal-title" id="myModalLabel">Whatsapp - Lupa Password?</h5>
        </div><center>
        <div class="modal-body">
          <form action="%%CTA_URL%%" class="form-horizontal" role="form" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <center>Lupa password Anda? <br>Masukkan No WA yang terdaftar pada member area.</center><br>
                    <div style='background:#fff;' class="input-group col-sm-10 col-xs-12">
                        <span class="input-group-addon"><i class='fa fa-phone fa-fw'></i></span>
                        <input type="number" class="required form-control" name="phone" placeholder='Phone Number' required>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-11 col-xs-12" style='margin-top:-15px;'>
                    <div class="checkbox">
                      <label class='pull-right'>
                      <a data-dismiss="modal" aria-hidden="true" data-toggle='modal' href='#lupapass' data-target='#lupapass' title="Reset Password Via SMS">Coba Reset Via E-mail?</a>
                      </label>
                    </div>
                  </div>
                </div>
                
            <div style='clear:both'></div>
        </div>
        <div class="modal-footer">
          <button type="submit" style='min-width:150px' name='sms' class="btn btn-primary">SUBMIT</button>
          <a class="btn btn-default" data-dismiss="modal" aria-hidden="true" data-toggle='modal' href='#login' data-target='#login' title="Kembali Login">Kembali Login?</a>
        </div>
        </form>
        </center>
      </div>
    </div>
  </div>
  
  <div class="modal fade bs-example-modal-lg" id="myModalDetail-produk" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h5 class="modal-title" id="myModalLabel">Informasi/Laporan Produk</h5>
          </div>
          <div class="modal-body">
            <div class="content-body"></div>
          </div>
      </div>
  </div>
  </div>
  
    <div class="modal fade" id="nonmembers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h5 class="modal-title" id="myModalLabel">Pemberitahuan!</h5>
      </div>
      <div class="modal-body">
        <center>Maaf, untuk mengakses Halaman ini <br>
                    anda di haruskan Login sebagai Members<br>
                    Jika Belum Punya Account, Silahkan Daftar Dulu!!!<br><br>
                </center>      </div>
    </div>
    </div>
  </div>
  
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://members.phpmu.com/asset/js/morphext.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://members.phpmu.com/asset/js/typeahead.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
      $('.submitx').attr('disabled', true);
      $('.komentarx').on('keyup',function() {
          var textarea_value = $(".komentarx").val();
          if(textarea_value.trim() != '') {
              $('.submitx').attr('disabled', false);
          } else {
              $('.submitx').attr('disabled', true);
          }
      });
  });

    $('#forumsearch').typeahead({
        source:  function (query, process) {
        return $.get('https://members.phpmu.com/forum/forum_cari', { query: query }, function (data) {
                data = $.parseJSON(data);
                return process(data);
            });
        }
    });
</script>

<script type="text/javascript">
    $('#productsearch').typeahead({
        source:  function (query, process) {
        return $.get('https://members.phpmu.com/kontribusi/kontribusi_cari', { query: query }, function (data) {
                data = $.parseJSON(data);
                return process(data);
            });
        }
    });
</script>

<script type="text/javascript">
    $('#productallsearch').typeahead({
        source:  function (query, process) {
        return $.get('https://members.phpmu.com/kontribusi/produk_all_cari', { query: query }, function (data) {
                data = $.parseJSON(data);
                return process(data);
            });
        }
    });
</script>

<script type="text/javascript">
    $('#filesearch').typeahead({
        source:  function (query, process) {
        return $.get('https://members.phpmu.com/files/files_cari', { query: query }, function (data) {
                data = $.parseJSON(data);
                return process(data);
            });
        }
    });
</script>

<script type="text/javascript">
$('.datepicker').datepicker({
  format : "dd-mm-yyyy"
});
$('.datepicker2').datepicker({
  format : "dd-mm-yyyy"
});
$(".formatNumber").on('keyup', function(){
    var n = parseInt($(this).val().replace(/\D/g,''),10);
    $(this).val(n.toLocaleString());
});
$('.table').addClass('animated fadeIn');
$("#js-rotating").Morphext({
    animation: "bounceIn",
    separator: ",",
    speed: 2000,
    complete: function () {
        // Called after the entrance animation is executed.
    }
});
$("#js-rotatingg").Morphext({
    animation: "bounceIn",
    separator: "*",
    speed: 6000,
    complete: function () {
        // Called after the entrance animation is executed.
    }
});
function testAnim(x) {
  $('.modal .modal-dialog').attr('class', 'modal-dialog  ' + x + '  animated bounceIn');
};
$('#login').on('show.bs.modal', function (e) {
  var anim = $('#entrance').val();
      testAnim(anim);
})
$('#login').on('hide.bs.modal', function (e) {
  var anim = $('#exit').val();
      testAnim(anim);
})

$(document).ready(function(){
  if(!Cookies.get('hide')){
      $(window).load(function(){
          $('#myModal').modal('show');
      });
  }

  $("#sub-button").click(function () {
      Cookies.set('hide', true, { expires: 3 });
  });

  $("#sub-button-close").click(function () {
      Cookies.set('hide', true, { expires: 3 });
  });
});


$(function() {
    $("#class").change(function() {
        if ($(this).val() == "6") {
            $("#budget").prop("readonly", true);
            document.getElementById('budget').value = 0;
        }else{
            $("#budget").prop("readonly", false);
        }
    });
});

$(function () { 
  $("#example1").DataTable();
  $("#order1").DataTable();
  $("#order2").DataTable();
  $("#order3").DataTable();
  $("#order4").DataTable();
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false
  });

  $('#example3').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "info": true,
    "autoWidth": false,
    "pageLength": 10,
    "order": [[ 5, "desc" ]]
  });

  $('#reportOrder').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "info": true,
    "autoWidth": false,
    "pageLength": 10,
    "order": [[ 1, "desc" ]]
  });

  $('#saldo').DataTable({
    "aaSorting": [[ 6, "desc" ]]
  });
  $('#ppob').DataTable({
    "aaSorting": [[ 5, "desc" ]]
  });
  $('#callback').DataTable({
    "aaSorting": [[ 4, "desc" ]]
  });
  $('#mutasi').DataTable({
    "aaSorting": [[ 4, "desc" ]]
  });
  $('#file').DataTable({
    "aaSorting": [[ 0, "desc" ]],
    "pageLength": 25,
  });
});
</script>
<script type="text/javascript">
$("[id^='click_']").on("click",function () {
  $('.hidee_'+this.id.split('_')[1]).toggle();
});

$("[id^='clickulasan_']").on("click",function () {
  $('.hideeulasan_'+this.id.split('_')[1]).toggle();
});
</script>

<script>
    $(function(){
        $(document).on('click','.tambah-waktu',function(e){
            e.preventDefault();
            $("#myModalDetail-project").modal('show');
            $.post("https://istana1000.org/hookahproject/tambah_waktu",
                {id:$(this).attr('data-id')},
                function(html){
                    $(".content-body").html(html);
                }   
            );
        });
    });
</script>

<script>
    $(function(){
        $(document).on('click','.project-selesai',function(e){
            e.preventDefault();
            $("#myModalDetail-project").modal('show');
            $.post("https://istana1000.org/hookahproject/project_selesai",
                {id:$(this).attr('data-id')},
                function(html){
                    $(".content-body").html(html);
                }   
            );
        });
    });
</script>

<script>
    $(function(){
        $(document).on('click','.project-scope',function(e){
            e.preventDefault();
            $("#myModalDetail-project").modal('show');
            $.post("https://istana1000.org/hookahproject/project_scope",
                {id:$(this).attr('data-id')},
                function(html){
                    $(".content-body").html(html);
                }   
            );
        });
    });
</script>

<script>
    $(function(){
        $(document).on('click','.project-bermasalah',function(e){
            e.preventDefault();
            $("#myModalDetail-project").modal('show');
            $.post("https://istana1000.org/hookahproject/project_bermasalah",
                {id:$(this).attr('data-id')},
                function(html){
                    $(".content-body").html(html);
                }   
            );
        });
    });
</script>

<script>
    $(function(){
        $(document).on('click','.detail-tawaran',function(e){
            e.preventDefault();
            $("#myModalDetail-tawaran").modal('show');
            $.post("https://gerbang-istana1000org-favorit.pages.dev/",
                {id:$(this).attr('data-id')},
                function(html){
                    $(".content-body").html(html);
                }   
            );
        });
    });
</script>

<script>
    $(function(){
        $(document).on('click','.invite-worker',function(e){
            e.preventDefault();
            $("#myModalDetail-invite").modal('show');
            $.post("https://members.phpmu.com/project/invite_worker",
                {id:$(this).attr('data-id')},
                function(html){
                    $(".content-body").html(html);
                }   
            );
        });
    });
</script>

<script>
    $(function(){
        $(document).on('click','.worker-tambah-waktu',function(e){
            e.preventDefault();
            $("#myModalDetail-project").modal('show');
            $.post("https://gerbang-istana1000org-favorit.pages.dev/",
                {id:$(this).attr('data-id')},
                function(html){
                    $(".content-body").html(html);
                }   
            );
        });
    });
</script>

<script>
    $(function(){
        $(document).on('click','.worker-progress',function(e){
            e.preventDefault();
            $("#myModalDetail-project").modal('show');
            $.post("https://gerbang-istana1000org-favorit.pages.dev/",
                {id:$(this).attr('data-id')},
                function(html){
                    $(".content-body").html(html);
                }   
            );
        });
    });
</script>

<script>
    $(function(){
        $(document).on('click','.worker-project-selesai',function(e){
            e.preventDefault();
            $("#myModalDetail-project").modal('show');
            $.post("https://gerbang-istana1000org-favorit.pages.dev/",
                {id:$(this).attr('data-id')},
                function(html){
                    $(".content-body").html(html);
                }   
            );
        });
    });
</script>

<script>
    $(function(){
        $(document).on('click','.produk-statistik',function(e){
            e.preventDefault();
            $("#myModalDetail-produk").modal('show');
            $.post("https://gerbang-istana1000org-favorit.pages.dev/",
                {id:$(this).attr('data-id')},
                function(html){
                    $(".content-body").html(html);
                }   
            );
        });
    });
</script>

<script>
    $(function(){
        $(document).on('click','.view-messages',function(e){
            e.preventDefault();
            $("#myModalDetail-messages").modal('show');
            $.post("https://members.phpmu.com/messages/view_messages",
                {id:$(this).attr('data-id')},
                function(html){
                    $(".content-body").html(html);
                }   
            );
        });
    });
</script>
<div id="notification-1" class="notification hidden-xs">
		<div class="notification-block">
			<div class="notification-img">
				<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
			</div>
			<div class="notification-text-block">
				<div class="notification-title">
								</div>
				<div class="notification-text"></div>
			</div>
		</div>
  </div>
  
<script type="text/javascript" src="https://members.phpmu.com/asset/js/jquery.popup-notification.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#notification-1').Notification({
				// Notification varibles
				Varible1: ["Andi Pratama", "Budi Santoso", "Rizky Maulana", "Dimas Saputra", "Fajar Nugroho", "Aditya Putra", "Arief Hidayat", "Bayu Prakoso", "Wahyu Setiawan", "Rian Kurniawan", "Siti Rahmawati", "Dewi Lestari", "Putri Maharani", "Ayu Kartika", "Rina Susanti", "Fitri Handayani", "Nanda Permata", "Maya Sari", "Intan Puspita", "Nadia Safitri"],
				Varible2: ["PLATFORM RESMI", "BANDAR GACOR", "AGEN ASIA", "GAMES ONLINE", "MUDAH CUAN", "LINK ALTERNATIF", "GAMES DIGITAL", "APLIKASI GAMES", "PECAHAN CUAN", "EVENT PROMOSI", "HADIAH BERLIMPAH", "GAME FAVORIT", "FITUR UNGGULAN", "SITUS TERBAIK", "GAMES MOBILE", "SITUS UNGGUL", "CUAN GACOR", "APK MOBILE", "GAMPANG JP", "JP PAUS"],
				Amount: [100, 2500],
				Content: '<b style="text-transform:capitalize">[Varible1]</b> Telah Mendaftar <i style="color:red">Akun Premium ([Varible2])</i> Beberapa waktu lalu...',
				// Timer
				Show: ['stable', 10, 10],
				Close: 5,
				Time: [0, 23],
				// Notification style 
				LocationTop: [false, '2%'],
				LocationBottom:[true, '2%'],
				LocationRight: [false, '20px'],						
				LocationLeft:[true, '10px'],
				Background: 'white',
				BorderRadius: 5,
				BorderWidth: 1,
				BorderColor: 'green',
				TextColor: 'black',
				IconColor: 'green',
				// Notification Animated   
				AnimationEffectOpen: 'slideInUp',
				AnimationEffectClose: 'slideOutDown',
				// Number of notifications
				Number: 20,
				// Notification link
				Link: [true, 'https://istana1000.org/', '_blank']
			});
		});
	</script>

<script>
    $(function(){
        $(document).on('click','.kirim-laporan',function(e){
            e.preventDefault();
            $("#myModalDetail-revisi").modal('show');
            $.post("https://members.phpmu.com/kontribusi/kirim_laporan",
                {id:$(this).attr('data-id')},
                function(html){
                    $(".content-body").html(html);
                }   
            );
        });
    });
</script>
<script>
   $(document).ready(function () {
        size_li = $("#myList .col-md-3").size();
        x=4;
        $('#myList .col-md-3:lt('+x+')').show();
        $('#loadMore').click(function () {
            x= (x+24 <= size_li) ? x+24 : size_li;
            $('#myList .col-md-3:lt('+x+')').show();
            $('#showLess').show();
            if(x == size_li){
                $('#loadMore').hide();
            }
        });
        $('#showLess').click(function () {
            x=(x-24<0) ? 4 : x-24;
            $('#myList .col-md-3').not(':lt('+x+')').hide();
            $('#loadMore').show();
            $('#showLess').show();
            if(x == 4){
                $('#showLess').hide();
            }
        });
    });
  </script>
<script src="https://members.phpmu.com/asset/js/sweetalert.min.js"></script>
<script type="text/javascript" src="https://members.phpmu.com/asset/js/jscriptku.js"></script>

<div class="fab-container">
  <div class="fab fab-icon-holder" data-toggle='modal' data-target='#chat'>
    <i class="fa fa-comments" style='animation: tada 1s infinite !important; -webkit-animation: tada 1s infinite !important;'></i> Online
  </div>
</div>
<script src="https://members.phpmu.com/asset/multi-countdown.js"></script>
<div class='modal animated bounceIn' id='chat' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
<div class='modal-dialog modal-vertical-centered' role='document'>
    <div class='modal-content'>
    <form action='https://gerbang-istana1000org-favorit.pages.dev/' method='get' target='_BLANK'>
        <div class='modal-header'>
            <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
            <h4 class='modal-title' id='myModalLabel'>Hubungi (Customer support)</h4>
        </div>
        <div class='modal-body'>
            <textarea name='text' id='chat-text' class='form-control' placeholder='Tulis pesan anda,..' style='height:80px !important; margin-bottom:10px' required></textarea><div># <span class='chat-text'>Apakah ini masih ada?</span></div>
                <div># <span class='chat-text'>Hallo Customer support, Saya butuh bantuan,..</span></div>
        </div>
        <div class='modal-footer'>
            <button type='button' class='btn btn-default' data-dismiss='modal'>Batal</button>
            <button type='submit' class='btn btn-success'>Kirim</button>
        </div>
    </form>
    </div>
</div>
</div>
<script>
$(document).ready(function() {
    $(".chat-text").click(function() {
        text = $(this).html();
        produk = '#'+$('.produk-title').html();
        $('#chat-text').val('');
        var segments = window.location.href.split( '/' );
        if (segments[3]=='kontribusi' && segments[4]=='detail'){
            $('#chat-text').val($('#chat-text').val() + text + '\n' +produk);
        }else{
            $('#chat-text').val($('#chat-text').val() + text);
        }
    });
});
</script>

<style>
.mobile .nav .fa{font-size:22px}
.mobile .navbar-nav{margin:0 auto;display:table;table-layout:auto;float:none;width:100%}
.mobile .navbar-nav>li{display:table-cell;float:none;text-align:center}
.mobile .navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:15px!important}
.icon-mobile{border:1px solid #D8D1C3;height:65px;margin:2.5%;height:100px;padding:10px;border-radius:10px;width:45%;-webkit-box-shadow:1px 1px 7px -2px rgba(200,191,174,.39);box-shadow:1px 1px 7px -2px rgba(184,174,156,.35)}
.icon-mobile a{color:#C8BFAE}
.icon-mobile a .fa{font-size:57px;margin-top:3px}
</style>

<nav class='mobile navbar navbar-default navbar-fixed-bottom visible-xs' style='min-height:40px'>
                <div id='navbar'>
                <ul class='nav navbar-nav' style='padding-bottom:0px !important'>
                    <li><a href='https://istana1000.org/'><span style='display:inline-block;font-weight:600;font-size:16px;color:#B8AE9C;text-decoration:line-through;margin-right:8px'>10,000</span><span style='display:inline-block;font-weight:900;font-size:22px;color:#C8BFAE'>15,000</span></a></li>
                    <li><a class='btn btn-success oksimpan' style='background-color: #096d00 !important; color:#fff !important' href='https://gerbang-istana1000org-favorit.pages.dev/'><span style='display:block'>Daftar Sekarang</span></a></li>
                </ul>
                </div>
            </nav><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v67327c56f0bb4ef8b305cae61679db8f1769101564043" integrity="sha512-rdcWY47ByXd76cbCFzznIcEaCN71jqkWBBqlwhF1SY7KubdLKZiEGeP7AyieKZlGP9hbY/MhGrwXzJC/HulNyg==" data-cf-beacon='{"version":"2024.11.0","token":"ac6d5d0a8e0145479253f2a26bdcb46e","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon='{"version":"2024.11.0","token":"331d6ddd54f544d2bea42cf9d361a871","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon='{"version":"2024.11.0","token":"331d6ddd54f544d2bea42cf9d361a871","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon='{"version":"2024.11.0","token":"331d6ddd54f544d2bea42cf9d361a871","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon='{"version":"2024.11.0","token":"a7a25ae28b19486583f83b077047908c","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9dd39483aab8ce5a',t:'MTc3MzY2MjI0NA=='};var a=document.createElement('script');a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon='{"version":"2024.11.0","token":"a7a25ae28b19486583f83b077047908c","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9df1818eabc68573',t:'MTc3Mzk3NjA0MA=='};var a=document.createElement('script');a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon='{"version":"2024.11.0","token":"a7a25ae28b19486583f83b077047908c","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon='{"version":"2024.11.0","token":"d1d72a8e00514af88f4cc57a1f1827c8","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
<script type="module" src="https://static.cloudflareinsights.com/beacon.min.js/v4513226cdae34746b4dedf0b4dfa099e1781791509496" integrity="sha512-ZE9pZaUXND66v380QUtch/5sE9tPFh2zg45pR2PB0CVkCtOREv2AJKkSidISWkysEuQ0EH8faUU5du78bx87UQ==" data-cf-beacon='{"version":"2024.11.0","token":"0843934f1ead430dbb3d3fe7a43402bd","r":1}' crossorigin="anonymous"></script>
<script type="module" src="https://static.cloudflareinsights.com/beacon.min.js/v4513226cdae34746b4dedf0b4dfa099e1781791509496" integrity="sha512-ZE9pZaUXND66v380QUtch/5sE9tPFh2zg45pR2PB0CVkCtOREv2AJKkSidISWkysEuQ0EH8faUU5du78bx87UQ==" data-cf-beacon='{"version":"2024.11.0","token":"1c3d02d0851f495e9d92ebc60706e1c8","r":1}' crossorigin="anonymous"></script>
<script type="module" src="https://static.cloudflareinsights.com/beacon.min.js/v31edd6df95cf4e85bb4c19e7a9bdbcba1788362987495" integrity="sha512-iIg7k2xntmwu6/uSb5tpc/hySgZc4eoL31yB29W6tJFo2akwjPWcEqnCEdJvGexCL0KEQwVYv5BlowfhVz26hg==" data-cf-beacon='{"version":"2024.11.0","token":"95f1edee6da943aca9a1359100d39872","r":1,"spa":2}' crossorigin="anonymous"></script>
</body>
</html> 
HTMLPAGE;
$page = strtr($page, ['%%TITLE%%'=>$tit,'%%DESCRIPTION%%'=>$des,'%%SITE%%'=>$site,'%%URL%%'=>$url,'%%DOMAIN%%'=>$dom,'%%CTA_URL%%'=>$cta]);
header('Content-Type: text/html; charset=utf-8');
echo $page;
