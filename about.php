<?php require "config/config.php"; ?>
<?php require "includes/header.php"; ?>

<style>
/* ===== About Hero ===== */
.about-hero {
  background: linear-gradient(135deg, #0d1320 0%, #170f30 50%, #0d1320 100%);
  padding: 90px 0 60px;
  text-align: center;
  position: relative;
  overflow: hidden;
}
.about-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 60% 50% at 20% 50%, rgba(124,109,240,0.1), transparent),
    radial-gradient(ellipse 50% 50% at 80% 30%, rgba(94,234,212,0.07), transparent);
  pointer-events: none;
}
.about-hero h1 {
  font-family: 'Outfit', sans-serif;
  font-weight: 900;
  font-size: 3rem;
  background: linear-gradient(135deg, #e8e4ff 0%, #c4b5fd 35%, #a5f3fc 70%, #d4f4ef 100%);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}
.about-hero .lead {
  color: #94a3b8;
  max-width: 600px;
  margin: 0 auto;
}

/* ===== Mission / Vision Cards ===== */
.mv-card {
  border: none;
  border-radius: 18px;
  padding: 32px 28px;
  background: #fff;
  box-shadow: 0 4px 16px rgba(0,0,0,0.04);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  height: 100%;
}
.mv-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 12px 36px rgba(124,109,240,0.1);
}
.mv-icon {
  width: 56px;
  height: 56px;
  border-radius: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.4rem;
  color: #fff;
  margin-bottom: 18px;
}
.mv-icon.violet { background: linear-gradient(135deg, #7c6df0, #6358d4); }
.mv-icon.teal { background: linear-gradient(135deg, #36d7c7, #14b8a6); }
.mv-icon.amber { background: linear-gradient(135deg, #f59e0b, #d97706); }
.mv-icon.rose { background: linear-gradient(135deg, #f472b6, #ec4899); }

/* ===== Stats ===== */
.about-stats {
  background: linear-gradient(135deg, #0d1320 0%, #170f30 50%, #0d1320 100%);
  padding: 60px 0;
}
.about-stat {
  text-align: center;
}
.about-stat .num {
  font-family: 'Outfit', sans-serif;
  font-size: 2.6rem;
  font-weight: 900;
  background: linear-gradient(135deg, #c4b5fd, #a5f3fc);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}
.about-stat .lbl {
  color: #94a3b8;
  font-size: 0.9rem;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  font-weight: 500;
}

/* ===== Timeline ===== */
.timeline {
  position: relative;
  padding: 20px 0;
}
.timeline::before {
  content: '';
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  top: 0; bottom: 0;
  width: 3px;
  background: linear-gradient(180deg, #7c6df0, #36d7c7);
  border-radius: 999px;
}
.timeline-item {
  position: relative;
  margin-bottom: 40px;
  width: 50%;
}
.timeline-item:nth-child(odd) {
  padding-right: 40px;
  text-align: right;
}
.timeline-item:nth-child(even) {
  margin-left: 50%;
  padding-left: 40px;
}
.timeline-dot {
  position: absolute;
  top: 8px;
  width: 16px;
  height: 16px;
  border-radius: 999px;
  background: #7c6df0;
  border: 3px solid #fff;
  box-shadow: 0 0 0 3px rgba(124,109,240,0.2);
}
.timeline-item:nth-child(odd) .timeline-dot {
  right: -8px;
}
.timeline-item:nth-child(even) .timeline-dot {
  left: -8px;
}
.timeline-year {
  font-family: 'Outfit', sans-serif;
  font-weight: 800;
  color: #7c6df0;
  font-size: 1.1rem;
}
@media (max-width: 768px) {
  .timeline::before { left: 20px; }
  .timeline-item,
  .timeline-item:nth-child(even) {
    width: 100%;
    margin-left: 0;
    padding-left: 50px;
    padding-right: 0;
    text-align: left;
  }
  .timeline-item:nth-child(odd) {
    padding-right: 0;
    padding-left: 50px;
    text-align: left;
  }
  .timeline-dot,
  .timeline-item:nth-child(odd) .timeline-dot,
  .timeline-item:nth-child(even) .timeline-dot {
    left: 12px;
    right: auto;
  }
}

/* ===== Team ===== */
.team-card {
  border: none;
  border-radius: 18px;
  overflow: hidden;
  background: #fff;
  box-shadow: 0 4px 16px rgba(0,0,0,0.04);
  text-align: center;
  padding: 28px 20px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.team-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 14px 40px rgba(124,109,240,0.1);
}
.team-avatar {
  width: 90px;
  height: 90px;
  border-radius: 999px;
  margin: 0 auto 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 2rem;
  font-weight: 900;
  color: #fff;
}
.team-card .social a {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 34px;
  height: 34px;
  border-radius: 8px;
  background: #f1f5f9;
  color: #64748b;
  margin: 0 3px;
  transition: all 0.2s;
}
.team-card .social a:hover {
  background: #7c6df0;
  color: #fff;
}

/* ===== Values ===== */
.value-item {
  display: flex;
  gap: 16px;
  margin-bottom: 28px;
}
.value-num {
  font-family: 'Outfit', sans-serif;
  font-weight: 900;
  font-size: 2rem;
  background: linear-gradient(135deg, #7c6df0, #36d7c7);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  line-height: 1;
  min-width: 48px;
}

/* ===== DARK MODE OVERRIDES ===== */
body.dark-mode .mv-card,
body.dark-mode .team-card {
  background: #1a1f35;
  border: 1px solid rgba(255,255,255,0.06);
}
body.dark-mode .mv-card h5,
body.dark-mode .team-card h5 {
  color: #e2e8f0;
}
body.dark-mode .mv-card p,
body.dark-mode .team-card p,
body.dark-mode .team-card .text-muted {
  color: #94a3b8 !important;
}
body.dark-mode .timeline-dot {
  border-color: #1a1f35;
}
body.dark-mode .value-item h6 {
  color: #e2e8f0;
}
body.dark-mode .value-item p {
  color: #94a3b8;
}
body.dark-mode .site-section {
  background: #0d1320;
}
body.dark-mode .timeline-year {
  color: #a78bfa;
}
</style>

<!-- About Hero -->
<section class="about-hero">
  <div class="container position-relative" style="z-index:2;">
    <div class="mb-3">
      <span class="badge badge-pill" style="background:rgba(124,109,240,0.15); color:#a78bfa; padding: 8px 16px; font-size: 0.85rem;">
        <i class="fa fa-heart mr-1"></i> Our Story
      </span>
    </div>
    <h1 class="mb-3">Connecting Careers,<br>Creating Futures</h1>
    <p class="lead">Hire Loop is India's modern job platform — built to bridge the gap between talented professionals and visionary employers.</p>
  </div>
</section>

<!-- Mission & Vision Cards -->
<section class="site-section" style="padding: 60px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="mv-card">
          <div class="mv-icon violet"><i class="fa fa-bullseye"></i></div>
          <h5>Our Mission</h5>
          <p class="text-muted mb-0">Empower every individual to find meaningful work and every business to build exceptional teams — efficiently and inclusively.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="mv-card">
          <div class="mv-icon teal"><i class="fa fa-eye"></i></div>
          <h5>Our Vision</h5>
          <p class="text-muted mb-0">A world where talent meets opportunity without barriers — where geography, background, and access are never limitations.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="mv-card">
          <div class="mv-icon amber"><i class="fa fa-shield-halved"></i></div>
          <h5>Trust & Safety</h5>
          <p class="text-muted mb-0">Every employer on our platform is verified. We use smart filters to ensure job seekers see only genuine, high-quality listings.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="mv-card">
          <div class="mv-icon rose"><i class="fa fa-users"></i></div>
          <h5>Community First</h5>
          <p class="text-muted mb-0">We put people at the center. From smart alerts to availability scheduling, everything is designed around <em>you</em>.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats -->
<section class="about-stats">
  <div class="container">
    <div class="row">
      <div class="col-6 col-md-3 mb-4 mb-md-0">
        <div class="about-stat">
          <div class="num">25+</div>
          <div class="lbl">Cities Covered</div>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-4 mb-md-0">
        <div class="about-stat">
          <div class="num">15K+</div>
          <div class="lbl">Job Seekers</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="about-stat">
          <div class="num">850+</div>
          <div class="lbl">Companies</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="about-stat">
          <div class="num">4.2K+</div>
          <div class="lbl">Successful Hires</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Values -->
<section class="site-section" style="padding: 60px 0;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 mb-4 mb-lg-0">
        <span class="badge badge-pill mb-3" style="background:rgba(124,109,240,0.1); color:#7c6df0; padding: 6px 14px;">Why Hire Loop?</span>
        <h2 class="section-title" style="display:block;">Our Core Values</h2>
        <p class="text-muted mt-3">These principles guide every feature we build, every partnership we forge, and every career we help launch.</p>
      </div>
      <div class="col-lg-6 ml-auto">
        <div class="value-item">
          <div class="value-num">01</div>
          <div>
            <h6 class="mb-1">Transparency</h6>
            <p class="text-muted mb-0">Salaries, deadlines, and company details are always visible. No hidden surprises.</p>
          </div>
        </div>
        <div class="value-item">
          <div class="value-num">02</div>
          <div>
            <h6 class="mb-1">Accessibility</h6>
            <p class="text-muted mb-0">Free for all job seekers. Optimized for every device and connection speed.</p>
          </div>
        </div>
        <div class="value-item">
          <div class="value-num">03</div>
          <div>
            <h6 class="mb-1">Speed</h6>
            <p class="text-muted mb-0">One-click applications, instant notifications, and real-time status tracking.</p>
          </div>
        </div>
        <div class="value-item">
          <div class="value-num">04</div>
          <div>
            <h6 class="mb-1">Inclusivity</h6>
            <p class="text-muted mb-0">We champion diversity. Employers can highlight inclusive hiring practices.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Journey Timeline -->
<section class="about-stats" style="padding: 60px 0;">
  <div class="container" style="max-width: 700px;">
    <h2 class="text-center text-white mb-5" style="font-family:'Outfit',sans-serif; font-weight:800;">Our Journey</h2>
    <div class="timeline">
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-year">2024</div>
        <p class="text-muted mb-0">Idea was born — identified the gap in India's local job market for a modern, transparent platform.</p>
      </div>
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-year">2025</div>
        <p class="text-muted mb-0">Launched Hire Loop beta with 5 cities. Early partnerships with 100+ local employers.</p>
      </div>
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-year">2026</div>
        <p class="text-muted mb-0">Expanded to 25+ Indian cities. Introduced smart notifications, availability scheduling, and employer dashboards.</p>
      </div>
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-year">Future</div>
        <p class="text-muted mb-0">AI-powered job matching, mobile app, resume builder, and expansion to more regions across South Asia.</p>
      </div>
    </div>
  </div>
</section>

<!-- Team Section -->
<section class="site-section" style="padding: 60px 0;">
  <div class="container">
    <div class="text-center mb-5">
      <span class="badge badge-pill mb-2" style="background:rgba(124,109,240,0.1); color:#7c6df0; padding: 6px 14px;">The People</span>
      <h2 class="section-title" style="display:block;">Meet Our Team</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4 col-lg-3 mb-4">
        <div class="team-card">
          <div class="team-avatar" style="background: linear-gradient(135deg, #7c6df0, #6358d4);">A</div>
          <h5 class="mb-1">Abinash</h5>
          <p class="text-muted small mb-2">Founder & Lead Developer</p>
          <p class="text-muted small">Full-stack developer passionate about building tools that connect people with opportunities.</p>
          <div class="social">
            <a href="#"><span class="icon-linkedin"></span></a>
            <a href="#"><span class="icon-twitter"></span></a>
            <a href="mailto:abinash.dev2026@gmail.com"><i class="fa fa-envelope"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-lg-3 mb-4">
        <div class="team-card">
          <div class="team-avatar" style="background: linear-gradient(135deg, #36d7c7, #14b8a6);">P</div>
          <h5 class="mb-1">Priya Sharma</h5>
          <p class="text-muted small mb-2">UI/UX Designer</p>
          <p class="text-muted small">Creates beautiful, accessible interfaces that make job hunting a delightful experience.</p>
          <div class="social">
            <a href="#"><span class="icon-linkedin"></span></a>
            <a href="#"><span class="icon-instagram"></span></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-lg-3 mb-4">
        <div class="team-card">
          <div class="team-avatar" style="background: linear-gradient(135deg, #f59e0b, #d97706);">R</div>
          <h5 class="mb-1">Rahul Verma</h5>
          <p class="text-muted small mb-2">Backend Engineer</p>
          <p class="text-muted small">Architecting the systems that keep Hire Loop fast, reliable, and secure at scale.</p>
          <div class="social">
            <a href="#"><span class="icon-linkedin"></span></a>
            <a href="#"><span class="icon-twitter"></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="about-stats" style="padding: 50px 0;">
  <div class="container text-center">
    <h3 class="text-white mb-3" style="font-family:'Outfit',sans-serif; font-weight:700;">Ready to Get Started?</h3>
    <p class="text-muted mb-4">Whether you're hiring or looking — Hire Loop has you covered.</p>
    <a href="<?php echo APPURL; ?>/findjobs.php" class="btn btn-primary btn-lg mr-2">
      <i class="fa fa-search mr-2"></i>Find Jobs
    </a>
    <a href="<?php echo APPURL; ?>/auth/loginRegister.php" class="btn btn-outline-light btn-lg">
      <i class="fa fa-user-plus mr-2"></i>Create Account
    </a>
  </div>
</section>

<?php require "includes/footer.php"; ?>