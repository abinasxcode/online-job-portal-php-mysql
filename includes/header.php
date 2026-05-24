<?php 
// session_start();
$base_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];

if (strpos($_SERVER['HTTP_HOST'], 'localhost:8000') === false) {
    $project_folder = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'))[0];
    $base_url .= '/' . $project_folder;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Hire Loop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Find your dream job with Hire Loop — connecting careers, creating futures." />
    <meta name="keywords" content="jobs, careers, employment, hiring, job portal" />
    <meta name="author" content="Hire Loop" />
    <link rel="shortcut icon" href="<?php echo $base_url;?>/images/logo.png ?>">
    
    <!-- Premium Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/custom-bs.css">
    
    <script src="<?php echo $base_url; ?>/js/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/fonts/line-icons/style.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/quill.snow.css">
    <!-- font awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/style.css">
    <script src="<?php echo $base_url; ?>/plugin/ckeditor/ckeditor.js"></script>

    <!-- 3D Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js"></script>

    <style>
/* ============ PREMIUM GLOBAL TYPOGRAPHY ============ */
body {
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif !important;
}
h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: 'Outfit', 'Inter', sans-serif !important;
  font-weight: 700;
}

/* ============ PREMIUM NAVBAR ============ */
.navbar {
  background: rgba(255,255,255,0.92) !important;
  backdrop-filter: blur(16px) saturate(180%) !important;
  -webkit-backdrop-filter: blur(16px) saturate(180%) !important;
  border-bottom: 1px solid rgba(0,0,0,0.04) !important;
  box-shadow: 0 1px 3px rgba(0,0,0,0.04) !important;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1) !important;
  padding: 0.6rem 1rem !important;
}
.navbar-brand {
  font-family: 'Outfit', sans-serif !important;
  font-weight: 800 !important;
  font-size: 1.35rem !important;
  background: linear-gradient(135deg, #6366f1, #06b6d4);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}

.navbar-nav > .nav-item > a.nav-link:not(.dropdown-toggle):not(.btn) {
  position: relative;
  display: inline-block;
  padding-bottom: 4px;
  font-weight: 500;
  color: #334155 !important;
  transition: color .3s ease;
}
.navbar-nav > .nav-item > a.nav-link:not(.dropdown-toggle):not(.btn):hover {
  color: #6366f1 !important;
}

.navbar-nav > .nav-item > a.nav-link:not(.dropdown-toggle):not(.btn)::after {
  content: "";
  position: absolute;
  left: 0; bottom: 0;
  height: 2px; width: 100%;
  background: linear-gradient(90deg, #6366f1, #06b6d4);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform .3s cubic-bezier(0.4, 0, 0.2, 1);
}

.navbar-nav > .nav-item > a.nav-link:not(.dropdown-toggle):not(.btn):hover::after {
  transform: scaleX(1);
}

/* ============ SCROLL REVEAL UTILITY ============ */
.reveal {
  opacity: 0;
  transform: translateY(40px);
  transition: opacity 0.7s cubic-bezier(0.4, 0, 0.2, 1), transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
}
.reveal.revealed {
  opacity: 1;
  transform: translateY(0);
}

/* ============ ANIMATED GRADIENT BORDER ============ */
@keyframes borderGlow {
  0%   { background-position: 0% 50%; }
  50%  { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}
.glow-border {
  position: relative;
  overflow: hidden;
}
.glow-border::before {
  content: '';
  position: absolute;
  inset: -2px;
  border-radius: inherit;
  background: linear-gradient(90deg, #6366f1, #06b6d4, #a855f7, #6366f1);
  background-size: 300% 100%;
  animation: borderGlow 4s ease infinite;
  z-index: -1;
  opacity: 0;
  transition: opacity 0.3s ease;
}
.glow-border:hover::before {
  opacity: 1;
}

/* ============ PARTICLE CANVAS ============ */
#particles-canvas {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  z-index: 1;
  pointer-events: none;
}

/* ============ COUNTER / STATS SECTION ============ */
.stats-section {
  background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #0f172a 100%);
  padding: 60px 0;
  position: relative;
  overflow: hidden;
}
.stats-section::before {
  content: '';
  position: absolute;
  width: 400px; height: 400px;
  background: radial-gradient(circle, rgba(99,102,241,0.15), transparent 70%);
  top: -100px; left: -100px;
}
.stats-section::after {
  content: '';
  position: absolute;
  width: 400px; height: 400px;
  background: radial-gradient(circle, rgba(6,182,212,0.12), transparent 70%);
  bottom: -100px; right: -100px;
}
.stat-box {
  text-align: center;
  padding: 24px;
}
.stat-number {
  font-family: 'Outfit', sans-serif;
  font-size: 2.8rem;
  font-weight: 900;
  background: linear-gradient(135deg, #c7d2fe, #a5f3fc);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  line-height: 1;
  margin-bottom: 8px;
}
.stat-label {
  color: #94a3b8;
  font-size: 0.9rem;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.08em;
}

/* ============ SECTION TITLES ============ */
.section-title {
  font-family: 'Outfit', sans-serif;
  font-weight: 800;
  font-size: 2rem;
  position: relative;
  display: inline-block;
}
.section-title::after {
  content: '';
  position: absolute;
  bottom: -8px;
  left: 50%;
  transform: translateX(-50%);
  width: 60px;
  height: 4px;
  border-radius: 999px;
  background: linear-gradient(90deg, #6366f1, #06b6d4);
}

/* ============ SMOOTH BUTTON TRANSITIONS ============ */
.btn {
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
}
.btn:hover {
  transform: translateY(-2px);
}
.btn-primary {
  background: linear-gradient(135deg, #6366f1, #4f46e5) !important;
  border: none !important;
  box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3) !important;
}
.btn-primary:hover {
  box-shadow: 0 8px 25px rgba(99, 102, 241, 0.45) !important;
}

/* ============ PRELOADER ============ */
@keyframes loaderSpin {
  0% { transform: translate(-50%,-50%) rotate(0deg); }
  100% { transform: translate(-50%,-50%) rotate(360deg); }
}
#overlayer {
  background: linear-gradient(135deg, #0f172a, #1e1b4b) !important;
}
.loader {
  width: 48px;
  height: 48px;
  border: 3px solid rgba(99,102,241,0.2);
  border-top-color: #6366f1;
  border-radius: 50%;
  animation: loaderSpin 0.8s linear infinite;
}

/* keeping caret color consistent */
.navbar-nav .dropdown-toggle::after {
  border-top-color: currentColor; /* bootstrap caret */
}

/* ===== Post a Job pill ===== */
.btn-post{
  border: 0;
  color: #fff !important;
  background: linear-gradient(135deg,#6b7280,#4b5563); /* slate gradient */
  padding: .45rem .9rem;
  border-radius: 999px;
  
  box-shadow: 0 2px 8px rgba(0,0,0,.12);
  display: inline-flex; align-items: center; justify-content: center;
  transition: transform .15s ease, box-shadow .15s ease, filter .15s ease;
}
.btn-post:hover{ transform: translateY(-1px); box-shadow: 0 6px 16px rgba(0,0,0,.18); filter: brightness(1.02); }
.btn-post i{ font-size: .95rem; }

/* ===== User chip (dropdown toggle) ===== */
.user-chip{
  display: inline-flex; align-items: center; gap: 8px;
  padding: .35rem .6rem .35rem .4rem;
  border-radius: 999px;
  border: 1px solid rgba(0,0,0,.08);
  background: #f8fafc;  /* subtle */
  transition: background .15s ease, box-shadow .15s ease, border-color .15s ease;
}
.user-chip:hover{ background: #eef2ff; border-color: rgba(99,102,241,.25); box-shadow: 0 2px 10px rgba(99,102,241,.12); }

/* Avatar with image or initial fallback */
.user-chip .avatar{
  width: 28px; height: 28px; border-radius: 50%;
  background-color: #e2e8f0; background-size: cover; background-position: center;
  display: inline-flex; align-items: center; justify-content: center;
  font-weight: 800; color: #334155;
}
.user-chip .avatar:not(.has-img)::after{
  content: attr(data-initial);
  font-size: .8rem;
}
.user-chip .name{ font-weight: 600; color: #111827; }

/* Caret tweak for dropdown */
.navbar-nav .dropdown-toggle::after{
  margin-left: .35rem;
  border-top-width: .35em; /* slightly larger caret */
}

/* underline effect: no decorate on buttons or dropdowns */
.navbar-nav > .nav-item > a.nav-link:not(.dropdown-toggle):not(.btn)::after{ /* your underline rules */ }

/* compact on very small screens, show only icons/initials if space is tight */
@media (max-width: 420px){
  .btn-post .d-sm-inline{ display: none !important; } /* keep just the + icon */
  .user-chip .name{ display: none; }
}

/* --- Notification bell tweaks --- */
.navbar .nav-item#notifDropdown { margin-right: .5rem; }/* space before user chip */

#notifDropdown .nav-link {
  position: relative;
  padding-right: 1.25rem; /* room for badge */
}

#notifDropdown .fa-bell {
  font-size: 1.15rem;
  line-height: 1;
}

#notifCount {
  position: absolute;
  top: -6px;            
  right: -10px;         
  z-index: 10;
  display: none;
  min-width: 18px;
  height: 18px;
  padding: 0 4px;
  font-size: 11px;
  line-height: 18px;
  border-radius: 999px;
  box-shadow: 0 0 0 2px #fff;
}

/* tiny screens: tuck badge slightly */
@media (max-width: 420px){
  #notifCount { right: -8px; top: -5px; }
}

/* keep notification dates on one line and stop flex from squishing them */
#notifList .list-group-item { align-items: center !important; }
#notifList .notif-date{
  white-space: nowrap;
  flex: 0 0 auto;       
  text-align: right;
  min-width: 78px;      
}
@media (max-width: 480px){ #notifList .notif-date{ display:none; } }


/* Unseen notifications */
#notifList .list-group-item.notif-unseen{
  background-color:#eef2ff !important;                 
}
#notifList .list-group-flush > .list-group-item.notif-unseen{
  border-left:3px solid #3b82f6 !important;            
}
#notifList .list-group-item.notif-unseen .n-title{
  font-weight:700; color:#0f172a;                       
}
#notifList .list-group-item.notif-unseen .small{
  color:#334155;                                       
}

#notifList .list-group-item .notif-dot{
  width:8px; height:8px; border-radius:999px; background:#3b82f6;
  display:inline-block; margin-right:8px; flex:0 0 8px; align-self: .6em;
}

/* ============ 3D PERSPECTIVE & GLOBE ============ */
body {
  perspective: 1200px;
}
.site-wrap {
  transform-style: preserve-3d;
}

/* Globe container */
#globe-container {
  position: absolute;
  right: -5%;
  top: 50%;
  transform: translateY(-50%);
  width: 55%;
  height: 110%;
  z-index: 1;
  pointer-events: none;
  opacity: 0.85;
}
@media (max-width: 768px) {
  #globe-container { display: none !important; }
}

/* Hero 3D variant */
.hero-3d {
  background: linear-gradient(135deg, #0d1320 0%, #170f30 40%, #0d1320 100%) !important;
  overflow: hidden;
  position: relative;
}
.hero-3d::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background:
    radial-gradient(ellipse 60% 50% at 30% 50%, rgba(124,109,240,0.08), transparent),
    radial-gradient(ellipse 40% 40% at 70% 40%, rgba(94,234,212,0.05), transparent);
  z-index: 1;
  pointer-events: none;
}
.hero-3d > .container {
  position: relative;
  z-index: 5;
}
.hero-3d #particles-canvas {
  z-index: 2;
}

/* 3D card transforms */
.job-card, .rj-card, .stat-box, .cta-card {
  transform-style: preserve-3d;
  will-change: transform;
}

/* Tilt glare overlay fix */
.js-tilt-glare {
  border-radius: inherit;
}

/* ============ EYE-COMFORT COLOR REFINEMENTS ============ */
.hero-gradient {
  background: linear-gradient(135deg, #e8e4ff 0%, #c4b5fd 35%, #a5f3fc 70%, #d4f4ef 100%) !important;
  -webkit-background-clip: text !important;
  background-clip: text !important;
  color: transparent !important;
}

.stats-section {
  background: linear-gradient(135deg, #0d1320 0%, #170f30 50%, #0d1320 100%) !important;
}
.stat-number {
  background: linear-gradient(135deg, #c4b5fd, #a5f3fc) !important;
  -webkit-background-clip: text !important;
  background-clip: text !important;
  -webkit-text-fill-color: transparent !important;
}

.btn-primary {
  background: linear-gradient(135deg, #7c6df0, #6358d4) !important;
  box-shadow: 0 4px 18px rgba(124, 109, 240, 0.3) !important;
}
.btn-primary:hover {
  box-shadow: 0 8px 28px rgba(124, 109, 240, 0.45) !important;
}

.navbar-brand {
  background: linear-gradient(135deg, #7c6df0, #36d7c7) !important;
  -webkit-background-clip: text !important;
  background-clip: text !important;
}

/* Soft glow on interactive 3D elements */
.job-card:hover {
  box-shadow: 0 12px 36px rgba(124, 109, 240, 0.12), 0 4px 12px rgba(0,0,0,0.06) !important;
}
.rj-card:hover {
  box-shadow: 0 14px 40px rgba(124, 109, 240, 0.1), 0 4px 12px rgba(0,0,0,0.06) !important;
}

/* Floating keyframe for search card */
@keyframes float3d {
  0%, 100% { transform: translateY(0) rotateX(0); }
  50% { transform: translateY(-8px) rotateX(1deg); }
}

/* Smooth page transitions */
.site-section, .stats-section, .cta-ribbon, .modern-footer {
  transform-style: preserve-3d;
}

/* ============ DARK/LIGHT MODE TOGGLE ============ */
.theme-toggle-btn {
  width: 38px;
  height: 38px;
  border-radius: 999px;
  border: 1px solid rgba(0,0,0,0.08);
  background: #f1f5f9;
  color: #475569;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1rem;
  margin-right: 8px;
  transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
  cursor: pointer;
  order: -1;
}
.theme-toggle-btn:hover {
  background: #e2e8f0;
  transform: rotate(15deg) scale(1.1);
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}
@media (min-width: 992px) {
  .theme-toggle-btn { order: 0; margin-left: 0; margin-right: 10px; }
}

/* ============ DARK MODE ============ */
body.dark-mode {
  background: #0d1320 !important;
  color: #d1d5db !important;
}

/* Navbar */
body.dark-mode .navbar {
  background: rgba(13,19,32,0.92) !important;
  border-bottom-color: rgba(255,255,255,0.06) !important;
}
body.dark-mode .navbar-nav > .nav-item > a.nav-link {
  color: #cbd5e1 !important;
}
body.dark-mode .navbar-nav > .nav-item > a.nav-link:hover {
  color: #a78bfa !important;
}
body.dark-mode .navbar-brand {
  background: linear-gradient(135deg, #a78bfa, #5eead4) !important;
  -webkit-background-clip: text !important;
  background-clip: text !important;
}
body.dark-mode .theme-toggle-btn {
  background: #1e293b;
  border-color: rgba(255,255,255,0.1);
  color: #fbbf24;
}
body.dark-mode .theme-toggle-btn:hover {
  background: #334155;
}
body.dark-mode .user-chip {
  background: #1e293b;
  border-color: rgba(255,255,255,0.08);
}
body.dark-mode .user-chip .name {
  color: #e2e8f0;
}
body.dark-mode .dropdown-menu {
  background: #1a1f35;
  border-color: rgba(255,255,255,0.08);
}
body.dark-mode .dropdown-item {
  color: #cbd5e1;
}
body.dark-mode .dropdown-item:hover {
  background: rgba(124,109,240,0.12);
  color: #fff;
}

/* Site wrap & sections */
body.dark-mode .site-wrap {
  background: #0d1320;
}
body.dark-mode .site-section {
  background: #0d1320;
}
body.dark-mode .bg-light {
  background: #111827 !important;
}

/* Cards */
body.dark-mode .job-card {
  background: #1a1f35;
  border: 1px solid rgba(255,255,255,0.05);
}
body.dark-mode .job-title {
  color: #e2e8f0;
}
body.dark-mode .job-meta,
body.dark-mode .job-company {
  color: #94a3b8 !important;
}
body.dark-mode .job-sub {
  color: #64748b;
}
body.dark-mode .rj-card {
  background: #1a1f35;
  border-color: rgba(255,255,255,0.06);
  color: #e2e8f0;
}
body.dark-mode .rj-card .text-muted {
  color: #94a3b8 !important;
}
body.dark-mode .cta-card {
  background: rgba(26,31,53,0.95);
  color: #e2e8f0;
}
body.dark-mode .cta-card .text-muted {
  color: #94a3b8 !important;
}

/* Text */
body.dark-mode h1, body.dark-mode h2, body.dark-mode h3,
body.dark-mode h4, body.dark-mode h5, body.dark-mode h6 {
  color: #e2e8f0;
}
body.dark-mode .text-muted {
  color: #94a3b8 !important;
}
body.dark-mode p {
  color: #b0b8c8;
}
body.dark-mode .section-title {
  color: #e2e8f0;
}

/* Inputs */
body.dark-mode .form-control {
  background: #1a1f35;
  border-color: rgba(255,255,255,0.1);
  color: #e2e8f0;
}
body.dark-mode .bootstrap-select > .btn {
  background: #1a1f35 !important;
  border-color: rgba(255,255,255,0.1) !important;
  color: #e2e8f0 !important;
}

/* Footer */
body.dark-mode .modern-footer {
  background: #080c16;
}
body.dark-mode .footer-top {
  background:
    radial-gradient(600px 180px at 0% 0%, rgba(124,109,240,0.12), transparent 60%),
    radial-gradient(600px 180px at 100% 0%, rgba(54,215,199,0.1), transparent 60%),
    #080c16;
}

/* Search card on hero */
body.dark-mode .search-card {
  background: rgba(26,31,53,0.6);
  border-color: rgba(255,255,255,0.1);
}

/* FAQ page */
body.dark-mode .faq-section {
  background: #0d1320 !important;
}
body.dark-mode .faq-card {
  background: #1a1f35;
  border: 1px solid rgba(255,255,255,0.05);
}
body.dark-mode .faq-card .card-header {
  background: #1a1f35;
}
body.dark-mode .faq-card .card-header button {
  color: #e2e8f0;
}
body.dark-mode .faq-card .card-body {
  color: #94a3b8;
}

/* Badges & misc */
body.dark-mode .badge-success { background: #065f46 !important; }
body.dark-mode .badge-danger { background: #991b1b !important; }
body.dark-mode .badge-info { background: #155e75 !important; }
body.dark-mode .badge-primary { background: #6358d4 !important; }

/* CTA wave */
body.dark-mode .cta-wave-divider {
  background: #0d1320;
}
body.dark-mode .cta-wave-divider svg path {
  fill: #0d1320;
}

/* Scrollbar */
body.dark-mode ::-webkit-scrollbar {
  width: 8px;
}
body.dark-mode ::-webkit-scrollbar-track {
  background: #0d1320;
}
body.dark-mode ::-webkit-scrollbar-thumb {
  background: #334155;
  border-radius: 999px;
}

/* Smooth transition for theme switch */
body, .navbar, .site-wrap, .job-card, .rj-card, .cta-card,
.form-control, .dropdown-menu, .modern-footer, .footer-top,
.site-section, .faq-card, .faq-card .card-header {
  transition: background-color 0.4s ease, color 0.4s ease, border-color 0.4s ease, box-shadow 0.4s ease;
}

    </style>
   
  </head>
  <body id="top">

  <!-- <div id="overlayer"></div> -->
  <!-- <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> -->
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <!-- <div  class="site-logo col-6"><a href="<?php echo $base_url; ?>">Online Job Portal</a></div> -->

          <!--  -->
          
      
        </div>
      </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light static-top glass-effect animate__animated animate__fadeInDown">
  <div class="container">

    <a href="<?php echo $base_url; ?>" class="navbar-brand animate__animated animate__fadeInDown stagger-1">
      <img src="<?php echo $base_url;?>/images/logo.png" alt="" width="30" height="30">
      Hire Loop
    </a>

    <!-- Dark/Light Mode Toggle -->
    <button id="themeToggle" class="btn btn-sm theme-toggle-btn" type="button" aria-label="Toggle dark/light mode" title="Toggle theme">
      <i class="fa-solid fa-moon" id="themeIcon"></i>
    </button>

    <!-- FOR MOBILE TOGGLE -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- COLLAPSIBLE MENU -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">

        <li class="nav-item animate__animated animate__fadeInDown stagger-2">
          <a class="nav-link active" aria-current="page" href="<?php echo $base_url; ?>">Home</a>
        </li>
        <li class="nav-item animate__animated animate__fadeInDown stagger-3">
          <a href="<?php echo $base_url; ?>/about.php" class="nav-link active">About</a>
        </li>
        <li class="nav-item animate__animated animate__fadeInDown stagger-4">
          <a href="<?php echo $base_url; ?>/contact.php" class="nav-link active">Contact</a>
        </li>
        <li class="nav-item animate__animated animate__fadeInDown stagger-5">
          <a href="<?php echo $base_url; ?>/faqs.php" class="nav-link active">FAQs</a>
        </li>
        <li class="nav-item animate__animated animate__fadeInDown stagger-5">
          <a href="<?php echo $base_url; ?>/gerneral/companies.php" class="nav-link active">Companies</a>
        </li>
        <li class="nav-item animate__animated animate__fadeInDown stagger-5">
          <a href="<?php echo $base_url; ?>/findjobs.php" class="nav-link active">Explore Jobs</a>
        </li>

        <?php if (isset($_SESSION['username'])): ?>
        <?php if (isset($_SESSION['type']) && $_SESSION['type'] === "Employer"): ?>
        <!-- Employer Dashboard -->
        <li class="nav-item mr-2">
          <a href="<?php echo $base_url; ?>/users/employer_dashboard.php" class="btn btn-post">
            <i class="fa-solid fa-gauge mr-1"></i>
            <span class="d-none d-sm-inline">Dashboard</span>
          </a>
        </li>
      <?php endif; ?>


  <?php if (isset($_SESSION['username'])): ?>
  <!-- Notifications -->
  <li class="nav-item dropdown" id="notifDropdown">
    <a class="nav-link position-relative" href="#" id="notifBell"
       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa-regular fa-bell"></i>
      <span id="notifCount"
            class="badge badge-danger badge-pill"
            style="position:absolute; top:0; right:6px; display:none;">0</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="notifBell" style="min-width:320px;">
      <div class="dropdown-header d-flex justify-content-between align-items-center">
        <span>Notifications</span>
        <button class="btn btn-link btn-sm p-0" id="notifMarkAll">Mark all read</button>
      </div>
      <div id="notifList" style="max-height:360px; overflow:auto;">
        <div class="p-3 text-muted small">Loading…</div>
      </div>
      <div class="dropdown-footer text-center p-2">
        <a href="<?php echo $base_url; ?>/users/notifications_center.php" class="small">View all</a>
      </div>
    </div>
  </li>
<?php endif; ?>


  <!-- User chip dropdown -->
  <?php
    $initial = strtoupper(substr($_SESSION['username'] ?? 'U', 0, 1));
    $avatar  = !empty($_SESSION['img']) ? $base_url . '/users/user-images/' . $_SESSION['img'] : '';
  ?>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle user-chip" href="#" id="navbarDropdown"
       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="avatar <?php echo $avatar ? 'has-img' : '' ?>"
            <?php if ($avatar) echo 'style="background-image:url(' . htmlspecialchars($avatar) . ')"'; ?>
            data-initial="<?php echo htmlspecialchars($initial); ?>"></span>
      <span class="name d-none d-md-inline"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="<?php echo $base_url; ?>/users/public-profile.php?id=<?php echo $_SESSION['id']; ?>">Public profile</a>
      <a class="dropdown-item" href="<?php echo $base_url; ?>/users/update-profile.php?upd_id=<?php echo $_SESSION['id']; ?>">Update profile</a>

      <?php if($_SESSION['type'] == "Job Seeker"): ?>
        <a class="dropdown-item" href="<?php echo $base_url; ?>/users/my_availability.php?id=<?php echo $_SESSION['id']; ?>">My Availability</a>
        <a class="dropdown-item" href="<?php echo $base_url; ?>/users/saved_jobs.php?id=<?php echo $_SESSION['id']; ?>">Saved Jobs</a>
        <a class="dropdown-item" href="<?php echo $base_url; ?>/users/applied_jobs.php?id=<?php echo $_SESSION['id']; ?>">Applied Jobs</a>
      <?php endif; ?>

      <?php if($_SESSION['type'] == "Employer"): ?>
        <a class="dropdown-item" href="<?php echo $base_url; ?>/users/employer_dashboard.php">Employer Dashboard</a>
      <?php endif; ?>

        <a class="dropdown-item" href="<?php echo $base_url; ?>/users/change_password.php">Change Password</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="<?php echo $base_url; ?>/auth/logout.php">Logout</a>
    </div>
  </li>
<?php else: ?>
  <li class="nav-item">
    <a href="<?php echo $base_url; ?>/auth/loginRegister.php" class="nav-link active">Log In/Register</a>
  </li>
<?php endif; ?>


      </ul>
    </div>
  </div>
</nav>


<?php
/* === Availability reminder toast (Job Seeker only) ====================== */
if (!empty($_SESSION['id']) && ($_SESSION['type'] ?? '') === 'Job Seeker') {
  (function () use ($conn, $base_url) {
    $uid = (int)($_SESSION['id'] ?? 0);

    $isAvailPage = (strpos($_SERVER['SCRIPT_NAME'] ?? '', 'my_availability.php') !== false);
    if (empty($_SESSION['saw_avail_toast']) && !$isAvailPage) {

      // Use unique names so we don't collide with page variables
      $avStmt = $conn->prepare("
        SELECT monday,tuesday,wednesday,thursday,friday,saturday,sunday
        FROM availability WHERE user_id = :uid LIMIT 1
      ");
      $avStmt->execute([':uid' => $uid]);
      $avRow = $avStmt->fetch(PDO::FETCH_ASSOC);

      $needsReminder = false;
      if (!$avRow) {
        $needsReminder = true;
      } else {
        $days = ['monday','tuesday','wednesday','thursday','friday','saturday','sunday'];
        $anySet = false;
        foreach ($days as $d) {
          if (!empty($avRow[$d]) && strtolower((string)$avRow[$d]) !== 'none') { $anySet = true; break; }
        }
        $needsReminder = !$anySet;
      }

      if ($needsReminder) {
        $_SESSION['saw_avail_toast'] = 1;
        $availUrl = rtrim($base_url, '/') . '/users/my_availability.php?id=' . $uid;
        ?>
        <!-- Availability Reminder Toast -->
        <div aria-live="polite" aria-atomic="true"
             style="position: fixed; right: 1rem; bottom: 1rem; z-index: 1080;">
          <div class="toast shadow avail-reminder-toast" role="alert" aria-live="assertive" aria-atomic="true"
               data-autohide="false" style="min-width: 320px;">
            <div class="toast-header">
              <i class="fa-regular fa-calendar-check mr-2 text-primary"></i>
              <strong class="mr-auto">Reminder</strong>
              <small class="text-muted">Just now</small>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="toast-body">
              <div class="mb-2"><strong>Availability information missing.</strong></div>
              <div class="text-muted" style="line-height:1.4;">
                Please add your weekly availability so employers know when you’re available for interviews
                and shifts. You can update it at any time.
              </div>
              <a class="btn btn-sm btn-primary mt-2" href="<?php echo htmlspecialchars($availUrl); ?>">
                Set availability now
              </a>
            </div>
          </div>
        </div>

        <script>
          (function(w, $){
            var $t = $('.avail-reminder-toast');
            if ($ && $.fn && $.fn.toast) { $t.toast('show'); }
            else { $t.addClass('show'); }
          })(window, window.jQuery);
        </script>
        <?php
      }
      unset($avStmt, $avRow, $needsReminder);
    }
  })();
}
?>



<script>
(function(){
  var base = <?php echo json_encode($base_url); ?>;

  function refreshCount(){
    $.get(base + '/users/notifications_api.php', {action:'count'}, function(res){
      if(!res || !res.ok) return;
      var c = res.count|0;
      var $b = $('#notifCount');
      if(c>0){ $b.text(c).show(); } else { $b.hide(); }
    }, 'json');
  }

  function formatNotifDate(iso){
  if(!iso) return '';
  var d = new Date(String(iso).replace(' ','T'));
  var now = new Date();
  if (d.toDateString() === now.toDateString()) return 'Today';
  var sameYear = d.getFullYear() === now.getFullYear();
  return d.toLocaleDateString(undefined,
    sameYear ? {month:'short', day:'numeric'} : {month:'short', day:'numeric', year:'numeric'}
  );
  }


  function loadList(){
  $('#notifList').html('<div class="p-3 text-muted small">Loading…</div>');
  $.get(base + '/users/notifications_api.php', {action:'list', limit:8}, function(res){
    if(!res || !res.ok){
      $('#notifList').html('<div class="p-3 text-danger small">Failed to load.</div>');
      return;
    }
    var items = Array.isArray(res.items) ? res.items.slice(0,8) : [];
    if(!items.length){
      $('#notifList').html('<div class="p-3 text-muted small">No notifications.</div>');
      $('#notifCount').hide();
      return;
    }
    var html = '<div class="list-group list-group-flush">';
    items.forEach(function(n){
      var seen = Number(n.seen) === 1;
      html += '<a href="#" class="list-group-item list-group-item-action d-flex align-items-start'
            + (seen ? '' : ' notif-unseen') + '"'
            + ' data-id="'+n.id+'" data-link="'+(n.link_path||'#')+'">'
            +   (seen ? '<div class="mr-2"><i class="fa-regular fa-bell"></i></div>'
                      : '<span class="notif-dot mr-2"></span>')
            +   '<div class="flex-grow-1">'
            +     '<div class="n-title">'+ $('<div>').text(n.title||'').html() +'</div>'
            +     '<div class="small text-muted">'+ $('<div>').text(n.message||'').html() +'</div>'
            +   '</div>'
            +   '<div class="notif-date small text-muted ml-2">'
            +     formatNotifDate(n.created_at)
            +   '</div>'
            + '</a>';

    });
    html += '</div>';
    $('#notifList').html(html);
  }, 'json');
}
$(document).on('click', '#notifList .list-group-item', function(e){
  e.preventDefault();
  var $row = $(this);
  var id   = $row.data('id');
  var link = $row.data('link');
  $.post(base + '/users/notifications_api.php', {action:'mark', id:id}, function(){
    refreshCount();
    if (link && link !== '#') window.location = link;
    else $row.removeClass('notif-unseen');   // visually mark as seen
  }, 'json');
});



  // Open dropdown -> load list
  $('#notifBell').on('click', function(){ loadList(); });

  // Click a notification -> mark seen, then navigate
  $(document).on('click', '#notifList .list-group-item', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    var link = $(this).data('link');
    $.post(base + '/users/notifications_api.php', {action:'mark', id:id}, function(){
      refreshCount();
      if (link && link !== '#') window.location = link;
    }, 'json');
  });

  // Mark all as read
  $('#notifMarkAll').on('click', function(e){
    e.preventDefault();
    $.post(base + '/users/notifications_api.php', {action:'mark_all'}, function(){
      refreshCount();
      loadList();
    }, 'json');
  });

  // Initial + light polling
  <?php if (isset($_SESSION['id'])): ?>
    refreshCount();
    setInterval(refreshCount, 60000);
  <?php endif; ?>
})();
</script>
