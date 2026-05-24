<?php
$base_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];

if (strpos($_SERVER['HTTP_HOST'], 'localhost:8000') === false) {
    $project_folder = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'))[0];
    $base_url .= '/' . $project_folder;
}
?>
<footer class="site-footer modern-footer">
  <!-- <a href="#top" class="smoothscroll scroll-top" aria-label="Back to top">
    <span class="icon-keyboard_arrow_up"></span>
  </a> -->

  <div class="footer-top">
    <div class="container">
      <div class="row align-items-center py-4">
        <div class="col-md-6 d-flex align-items-center">
          <img src="<?php echo $base_url; ?>/images/logo.png" alt="" width="36" height="36" class="mr-2">
          <div>
            <div class="h5 mb-0 text-white">Hire Loop</div>
            <small class="text-muted">Connecting careers. Creating futures.</small>
          </div>
        </div>
        <div class="col-md-6 mt-3 mt-md-0">
          <form class="form-inline justify-content-md-end">
            <label class="sr-only" for="nlEmail">Email</label>
            <input id="nlEmail" type="email" class="form-control mr-2 mb-2 mb-md-0" placeholder="Get occasional updates">
            <button class="btn btn-success">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-3 mb-4">
          <h5 class="ft-head">For Job Seekers</h5>
          <ul class="list-unstyled ft-links">
            <li><a href="<?php echo APPURL; ?>/loginRegister.php">Register</a></li>
            <li><a href="<?php echo APPURL; ?>/findjobs.php">Search Jobs</a></li>
            <li><a href="<?php echo APPURL; ?>/loginRegister.php">Login</a></li>
            <li><a href="<?php echo APPURL; ?>/faqs.php">FAQs</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-3 mb-4">
          <h5 class="ft-head">For Employers</h5>
          <ul class="list-unstyled ft-links">
            <li><a href="<?php echo APPURL; ?>/users/employer_dashboard.php">Employer Dashboard</a></li>
            <li><a href="<?php echo APPURL; ?>/jobs/post-job.php">Post a Job</a></li>
            <li><a href="<?php echo APPURL; ?>/loginRegister.php">Login</a></li>
            <li><a href="<?php echo APPURL; ?>/faqs.php">FAQs</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-3 mb-4">
          <h5 class="ft-head">Company</h5>
          <ul class="list-unstyled ft-links">
            <li><a href="<?php echo APPURL; ?>/about.php">About Us</a></li>
            <li><a href="<?php echo APPURL; ?>/careers.php">Careers</a></li>
            <li><a href="<?php echo APPURL; ?>/blog.php">Blog</a></li>
            <li><a href="<?php echo APPURL; ?>/resources.php">Resources</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-3 mb-4">
          <h5 class="ft-head">Contact</h5>
          <div class="footer-social mb-2">
            <a href="#"><span class="icon-facebook"></span></a>
            <a href="#"><span class="icon-twitter"></span></a>
            <a href="#"><span class="icon-instagram"></span></a>
            <a href="#"><span class="icon-linkedin"></span></a>
          </div>
          <div class="text-muted small">
            77 Test Street, XYZ<br>
            <a href="mailto:abinashkundu8@gmail.com">abinashkundu8@gmail.com</a><br>
            <a href="mailto:abinashkundu8@gmail.com">abinashkundu8@gmail.com</a>
          </div>
        </div>
      </div>
      <hr class="ft-hr">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-center pb-3">
        <div class="text-muted small order-2 order-md-1">
          © <?php echo date('Y'); ?> Hire Loop. Developed by <a href="mailto:abinashkundu8@gmail.com">Abinash</a>.
          <br>
          All rights reserved.
        </div>
        <ul class="list-inline mb-2 mb-md-0 order-1 order-md-2">
          <li class="list-inline-item"><a href="<?php echo APPURL; ?>/terms.php">Terms</a></li>
          <li class="list-inline-item"><a href="<?php echo APPURL; ?>/privacy.php">Privacy</a></li>
          <li class="list-inline-item"><a href="<?php echo APPURL; ?>/contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<style>
.modern-footer{
  color:#cbd5e1; background:#0b1220; position:relative; z-index:1;
}
.modern-footer .scroll-top{
  position:fixed; right:14px; bottom:14px; z-index:1080;
  width:42px; height:42px; border-radius:999px; display:flex; align-items:center; justify-content:center;
  background:#111827; color:#fff; border:1px solid rgba(255,255,255,.08);
  box-shadow:0 8px 16px rgba(0,0,0,.25);
}
.modern-footer .scroll-top:hover{ background:#0f172a; color:#fff; }

/* Top bar */
.footer-top{
  background:
    radial-gradient(600px 180px at 0% 0%, rgba(99,102,241,.18), transparent 60%),
    radial-gradient(600px 180px at 100% 0%, rgba(34,211,238,.15), transparent 60%),
    #0b1220;
  border-bottom:1px solid rgba(255,255,255,.06);
}
.btn-gradient{
  background: linear-gradient(135deg,#6366f1,#22d3ee);
  color:#0b1220; font-weight:700; border:0; border-radius:999px; padding:.45rem 1rem;
}
.btn-gradient:hover{ filter:brightness(1.05); color:#0b1220; }
.footer-top .form-control{
  background:#0f172a; border:1px solid rgba(255,255,255,.12); color:#e5e7eb; border-radius:999px;
}

/* Main columns */
.footer-main{ padding: 28px 0 8px; }
.ft-head{ color:#fff; font-weight:700; margin-bottom:12px; }
.ft-links li{ margin-bottom:.35rem; }
.ft-links a{
  color:#cbd5e1; text-decoration:none; position:relative; display:inline-block;
}
.ft-links a:hover{ color:#fff; }
.ft-links a::after{
  content:""; position:absolute; left:0; bottom:-3px; width:100%; height:2px;
  background:linear-gradient(90deg,#6366f1,#22d3ee); transform:scaleX(0); transform-origin:left; transition:transform .2s ease;
}
.ft-links a:hover::after{ transform:scaleX(1); }

.footer-social a{
  display:inline-flex; align-items:center; justify-content:center;
  width:36px; height:36px; margin-right:6px; border-radius:8px;
  background:#0f172a; color:#e5e7eb; border:1px solid rgba(255,255,255,.08);
  transition: all 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.footer-social a:hover{
  background: linear-gradient(135deg, #6366f1, #06b6d4);
  color:#fff;
  transform: translateY(-4px) scale(1.12);
  box-shadow: 0 8px 20px rgba(99, 102, 241, 0.4);
  border-color: transparent;
}

.ft-hr{ border-color: rgba(255,255,255,.06); }
</style>


</div>

<!-- SCRIPTS -->
<script src="<?php echo $base_url; ?>/js/jquery.min.js"></script>
<script src="<?php echo $base_url; ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $base_url; ?>/js/isotope.pkgd.min.js"></script>
<script src="<?php echo $base_url; ?>/js/stickyfill.min.js"></script>
<script src="<?php echo $base_url; ?>/js/jquery.fancybox.min.js"></script>
<script src="<?php echo $base_url; ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo $base_url; ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php echo $base_url; ?>/js/jquery.animateNumber.min.js"></script>
<script src="<?php echo $base_url; ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo $base_url; ?>/js/quill.min.js"></script>
<script src="<?php echo $base_url; ?>/js/bootstrap-select.min.js"></script>
<script src="<?php echo $base_url; ?>/js/custom.js"></script>

<!-- 3D Globe & Animations -->
<script src="<?php echo $base_url; ?>/js/globe-3d.js"></script>
<script src="<?php echo $base_url; ?>/js/3d-animations.js"></script>

<!-- Dark/Light Mode Toggle -->
<script>
(function(){
  // Apply saved theme immediately to prevent flash
  var saved = localStorage.getItem('hireloop-theme');
  if(saved === 'dark') document.body.classList.add('dark-mode');

  document.addEventListener('DOMContentLoaded', function(){
    var toggle = document.getElementById('themeToggle');
    var icon = document.getElementById('themeIcon');
    if(!toggle || !icon) return;

    function updateIcon(){
      var isDark = document.body.classList.contains('dark-mode');
      icon.className = isDark ? 'fa-solid fa-sun' : 'fa-solid fa-moon';
      toggle.title = isDark ? 'Switch to light mode' : 'Switch to dark mode';
    }

    // Set initial icon state
    updateIcon();

    toggle.addEventListener('click', function(){
      document.body.classList.toggle('dark-mode');
      var isDark = document.body.classList.contains('dark-mode');
      localStorage.setItem('hireloop-theme', isDark ? 'dark' : 'light');
      updateIcon();
    });
  });
})();
</script>

<!-- ============ PARTICLE ANIMATION ============ -->
<script>
(function(){
  var canvas = document.getElementById('particles-canvas');
  if (!canvas) return;
  var ctx = canvas.getContext('2d');
  var particles = [];
  var count = 60;

  function resize(){
    var parent = canvas.parentElement;
    canvas.width = parent.offsetWidth;
    canvas.height = parent.offsetHeight;
  }
  resize();
  window.addEventListener('resize', resize);

  for(var i = 0; i < count; i++){
    particles.push({
      x: Math.random() * canvas.width,
      y: Math.random() * canvas.height,
      vx: (Math.random() - 0.5) * 0.5,
      vy: (Math.random() - 0.5) * 0.5,
      r: Math.random() * 2 + 0.5,
      a: Math.random() * 0.4 + 0.1
    });
  }

  function draw(){
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    for(var i = 0; i < particles.length; i++){
      var p = particles[i];
      p.x += p.vx; p.y += p.vy;
      if(p.x < 0) p.x = canvas.width;
      if(p.x > canvas.width) p.x = 0;
      if(p.y < 0) p.y = canvas.height;
      if(p.y > canvas.height) p.y = 0;

      ctx.beginPath();
      ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
      ctx.fillStyle = 'rgba(165, 180, 252,' + p.a + ')';
      ctx.fill();

      // draw connections
      for(var j = i + 1; j < particles.length; j++){
        var p2 = particles[j];
        var dx = p.x - p2.x, dy = p.y - p2.y;
        var dist = Math.sqrt(dx*dx + dy*dy);
        if(dist < 120){
          ctx.beginPath();
          ctx.moveTo(p.x, p.y);
          ctx.lineTo(p2.x, p2.y);
          ctx.strokeStyle = 'rgba(165, 180, 252,' + (0.08 * (1 - dist/120)) + ')';
          ctx.lineWidth = 0.5;
          ctx.stroke();
        }
      }
    }
    requestAnimationFrame(draw);
  }
  draw();
})();
</script>

<!-- ============ SCROLL REVEAL + COUNTER ============ -->
<script>
(function(){
  // Scroll reveal
  var reveals = document.querySelectorAll('.reveal');
  var observer = new IntersectionObserver(function(entries){
    entries.forEach(function(entry){
      if(entry.isIntersecting){
        entry.target.classList.add('revealed');
      }
    });
  }, { threshold: 0.15 });
  reveals.forEach(function(el){ observer.observe(el); });

  // Counter animation
  var counters = document.querySelectorAll('.stat-number[data-count]');
  var counterObserver = new IntersectionObserver(function(entries){
    entries.forEach(function(entry){
      if(entry.isIntersecting){
        var el = entry.target;
        var target = parseInt(el.getAttribute('data-count'));
        var current = 0;
        var increment = Math.ceil(target / 60);
        var timer = setInterval(function(){
          current += increment;
          if(current >= target){
            current = target;
            clearInterval(timer);
          }
          el.textContent = current.toLocaleString() + '+';
        }, 25);
        counterObserver.unobserve(el);
      }
    });
  }, { threshold: 0.5 });
  counters.forEach(function(el){ counterObserver.observe(el); });

  // Add reveal class to key sections
  document.querySelectorAll('.job-card, .rj-card, .cta-card, .stat-box').forEach(function(el){
    if(!el.classList.contains('reveal')){
      // already animated with animate.css, skip
    }
  });
})();
</script>


</body>
</html>