<?php
require_once __DIR__ . '/../config.php';
$pageTitle = $pageTitle ?? SITE_NAME . ' | Rajasthan Tours & Travel Planning';
$pageDescription = $pageDescription ?? 'Plan Udaipur and Rajasthan holidays with custom itineraries, verified stays, private transfers and local travel support from Swiggy Wala.';
$canonical = $canonical ?? SITE_URL . ($_SERVER['REQUEST_URI'] ?? '/');
$canonical = strtok($canonical, '?');
$bodyClass = $bodyClass ?? '';
?>
<!doctype html><html lang="en-IN"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= e($pageTitle) ?></title><meta name="description" content="<?= e($pageDescription) ?>">
<link rel="canonical" href="<?= e($canonical) ?>"><meta name="robots" content="index,follow,max-image-preview:large">
<meta property="og:type" content="website"><meta property="og:title" content="<?= e($pageTitle) ?>"><meta property="og:description" content="<?= e($pageDescription) ?>"><meta property="og:url" content="<?= e($canonical) ?>"><meta property="og:image" content="<?= SITE_URL ?>/assets/images/social-share.webp">
<meta name="twitter:card" content="summary_large_image"><link rel="icon" href="/assets/images/favicon.jpg">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css">
<script type="application/ld+json"><?= json_encode(['@context'=>'https://schema.org','@type'=>'TravelAgency','name'=>SITE_NAME,'url'=>SITE_URL,'logo'=>SITE_URL.'/assets/images/swiggywala-logo.png','telephone'=>PHONE_DISPLAY,'email'=>SUPPORT_EMAIL,'address'=>['@type'=>'PostalAddress','addressLocality'=>'Udaipur','addressRegion'=>'Rajasthan','addressCountry'=>'IN'],'areaServed'=>'Rajasthan, India'], JSON_UNESCAPED_SLASHES) ?></script>
</head><body class="<?= e($bodyClass) ?>">
<div class="topbar"><div class="container topbar-inner"><span>Custom Rajasthan journeys, planned locally</span><div><a href="tel:<?= PHONE_TEL ?>"><?= PHONE_DISPLAY ?></a><a href="mailto:<?= SUPPORT_EMAIL ?>"><?= SUPPORT_EMAIL ?></a></div></div></div>
<header class="site-header"><div class="container nav-wrap">
<a class="brand" href="/"><img src="/assets/images/swiggywala-logo.png" alt="Swiggy Wala travel company logo" width="800" height="159"></a>
<button class="menu-toggle" aria-label="Open navigation" aria-expanded="false"><span></span><span></span><span></span></button>
<nav class="main-nav" aria-label="Main navigation"><a href="/">Home</a><a href="/destinations.php">Destinations</a><a href="/packages.php">Tour Packages</a><a href="/about.php">About</a><a href="/blog.php">Travel Guides</a><a href="/contact.php">Contact</a></nav>
<a class="btn btn-small nav-cta" href="<?= e(wa_link()) ?>" target="_blank" rel="noopener"><?= wa_icon() ?>Plan My Trip</a>
</div></header>
