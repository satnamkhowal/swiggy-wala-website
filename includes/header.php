<?php
require_once __DIR__ . '/../config.php';
$siteLocations = require __DIR__ . '/../data/locations.php';
$pageTitle = $pageTitle ?? SITE_NAME . ' | Rajasthan Tours & Travel Planning';
$pageDescription = $pageDescription ?? 'Plan Rajasthan holidays with custom itineraries, private transfers and local travel support from Swiggy Wala.';
$canonical = $canonical ?? SITE_URL . ($_SERVER['REQUEST_URI'] ?? '/');
$canonical = strtok($canonical, '?');
$bodyClass = $bodyClass ?? '';
$pageSchema = $pageSchema ?? null;
$ogType = $ogType ?? 'website';
$ogImage = $ogImage ?? SITE_URL . '/assets/images/social-share.webp';
$extraStylesheets = $extraStylesheets ?? [];
$organizationSchema = ['@context'=>'https://schema.org','@type'=>'TravelAgency','name'=>SITE_NAME,'url'=>SITE_URL,'logo'=>SITE_URL.'/assets/images/brand/logo-horizontal-1600.png','telephone'=>PHONE_DISPLAY,'email'=>SUPPORT_EMAIL,'address'=>['@type'=>'PostalAddress','streetAddress'=>'Agrawal Farm, CBC 05, Vikramaditya Marg, Mansarovar Sector 11, Mansarovar','addressLocality'=>'Jaipur','addressRegion'=>'Rajasthan','postalCode'=>'302020','addressCountry'=>'IN'],'department'=>[['@type'=>'TravelAgency','name'=>$siteLocations['agrawal-farm-mansarovar']['name'],'url'=>SITE_URL.'/locations/agrawal-farm-mansarovar.php','telephone'=>PHONE_DISPLAY,'hasMap'=>$siteLocations['agrawal-farm-mansarovar']['maps_url']],['@type'=>'TravelAgency','name'=>$siteLocations['gopalpura-bypass']['name'],'url'=>SITE_URL.'/locations/gopalpura-bypass.php','telephone'=>PHONE_DISPLAY,'hasMap'=>$siteLocations['gopalpura-bypass']['maps_url']]],'areaServed'=>'Rajasthan, India'];
?>
<!doctype html><html lang="en-IN"><head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?= e(GTM_CONTAINER_ID) ?>');</script>
<!-- End Google Tag Manager -->
<!-- Google Analytics 4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= e(GA_MEASUREMENT_ID) ?>"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag('js',new Date());gtag('config','<?= e(GA_MEASUREMENT_ID) ?>');</script>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= e($pageTitle) ?></title><meta name="description" content="<?= e($pageDescription) ?>">
<link rel="canonical" href="<?= e($canonical) ?>"><meta name="robots" content="index,follow,max-image-preview:large">
<meta property="og:type" content="<?= e($ogType) ?>"><meta property="og:title" content="<?= e($pageTitle) ?>"><meta property="og:description" content="<?= e($pageDescription) ?>"><meta property="og:url" content="<?= e($canonical) ?>"><meta property="og:image" content="<?= e($ogImage) ?>">
<meta name="twitter:card" content="summary_large_image"><meta name="twitter:image" content="<?= e($ogImage) ?>"><meta name="theme-color" content="#42a51d">
<link rel="icon" type="image/svg+xml" href="/assets/images/brand/logo-mark.svg"><link rel="icon" type="image/png" sizes="32x32" href="/assets/images/brand/favicon-32.png"><link rel="apple-touch-icon" href="/assets/images/brand/icon-192.png"><link rel="manifest" href="/site.webmanifest">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css"><link rel="stylesheet" href="/assets/css/locations.css">
<?php foreach($extraStylesheets as $stylesheet): ?><link rel="stylesheet" href="<?= e($stylesheet) ?>"><?php endforeach; ?>
<script type="application/ld+json"><?= json_encode($organizationSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?></script>
<?php if($pageSchema):?><script type="application/ld+json"><?= json_encode($pageSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?></script><?php endif;?>
</head><body class="<?= e($bodyClass) ?>">
<!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= e(GTM_CONTAINER_ID) ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) -->
<div class="topbar"><div class="container topbar-inner"><span>Custom Rajasthan journeys, planned locally</span><div><a href="tel:<?= PHONE_TEL ?>"><?= PHONE_DISPLAY ?></a><a href="mailto:<?= SUPPORT_EMAIL ?>"><?= SUPPORT_EMAIL ?></a></div></div></div>
<header class="site-header"><div class="container nav-wrap">
<a class="brand" href="/"><img src="/assets/images/brand/logo-horizontal.svg" alt="Swiggy Wala Rajasthan tours and travel" width="1200" height="260"></a>
<button class="menu-toggle" aria-label="Open navigation" aria-expanded="false"><span></span><span></span><span></span></button>
<nav class="main-nav" aria-label="Main navigation"><a href="/">Home</a><a href="/services.php">Services</a><a href="/destinations.php">Destinations</a><a href="/packages.php">Tour Packages</a><a href="/locations.php">Locations</a><a href="/gallery/">Gallery</a><a href="/about.php">About</a><a href="/blogs/">Travel Guides</a><a href="/contact.php">Contact</a></nav>
<a class="btn btn-small nav-cta" href="<?= e(wa_link()) ?>" target="_blank" rel="noopener"><?= wa_icon() ?>Plan My Trip</a>
</div></header>
