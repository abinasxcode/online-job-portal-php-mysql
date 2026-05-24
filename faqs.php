<?php require "config/config.php";
?>
<?php require "includes/header.php"; ?>

<style>
/* ===== FAQ Page Styles ===== */
.faq-hero {
  background: linear-gradient(135deg, #0d1320 0%, #170f30 50%, #0d1320 100%);
  padding: 80px 0 50px;
  text-align: center;
  position: relative;
  overflow: hidden;
}
.faq-hero::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background:
    radial-gradient(ellipse 50% 50% at 30% 50%, rgba(124,109,240,0.1), transparent),
    radial-gradient(ellipse 40% 40% at 70% 40%, rgba(94,234,212,0.06), transparent);
  pointer-events: none;
}
.faq-hero h1 {
  font-family: 'Outfit', sans-serif;
  font-weight: 800;
  background: linear-gradient(135deg, #e8e4ff 0%, #c4b5fd 40%, #a5f3fc 100%);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}
.faq-hero p {
  color: #94a3b8;
  font-size: 1.1rem;
}

.faq-section {
  padding: 60px 0;
  background: #f8fafc;
}

.faq-card {
  border: none;
  border-radius: 14px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.04);
  margin-bottom: 14px;
  overflow: hidden;
  transition: box-shadow 0.3s ease, transform 0.2s ease;
}
.faq-card:hover {
  box-shadow: 0 8px 28px rgba(124, 109, 240, 0.1);
  transform: translateY(-1px);
}

.faq-card .card-header {
  background: #fff;
  border: none;
  padding: 0;
}
.faq-card .card-header button {
  width: 100%;
  text-align: left;
  padding: 18px 22px;
  font-weight: 600;
  font-size: 1.05rem;
  color: #1e293b;
  background: transparent;
  border: none;
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
  transition: color 0.2s;
}
.faq-card .card-header button:hover {
  color: #7c6df0;
}
.faq-card .card-header button .faq-icon {
  width: 28px;
  height: 28px;
  border-radius: 8px;
  background: linear-gradient(135deg, #7c6df0, #6358d4);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 0.85rem;
  flex-shrink: 0;
  transition: transform 0.3s ease;
}
.faq-card .card-header button[aria-expanded="true"] .faq-icon {
  transform: rotate(45deg);
}

.faq-card .card-body {
  padding: 0 22px 20px;
  color: #475569;
  line-height: 1.7;
}

.faq-category {
  font-family: 'Outfit', sans-serif;
  font-weight: 700;
  color: #1e293b;
  margin-bottom: 20px;
  padding-bottom: 10px;
  border-bottom: 3px solid transparent;
  border-image: linear-gradient(90deg, #7c6df0, #36d7c7) 1;
  display: inline-block;
}

.faq-search {
  max-width: 500px;
  margin: 20px auto 0;
}
.faq-search .form-control {
  border-radius: 999px;
  padding: 12px 20px;
  border: 1px solid rgba(255,255,255,0.15);
  background: rgba(255,255,255,0.08);
  color: #fff;
  font-size: 1rem;
}
.faq-search .form-control::placeholder {
  color: #94a3b8;
}
.faq-search .form-control:focus {
  border-color: #7c6df0;
  box-shadow: 0 0 0 3px rgba(124,109,240,0.15);
  background: rgba(255,255,255,0.1);
  color: #fff;
}
</style>

<!-- FAQ Hero -->
<section class="faq-hero">
  <div class="container position-relative" style="z-index:2;">
    <h1 class="display-5 mb-3">Frequently Asked Questions</h1>
    <p>Everything you need to know about Hire Loop. Can't find the answer? <a href="<?php echo APPURL; ?>/contact.php" class="text-info">Contact us</a>.</p>
    <div class="faq-search">
      <input type="text" class="form-control" id="faqSearch" placeholder="Search questions...">
    </div>
  </div>
</section>

<!-- FAQ Content -->
<section class="faq-section">
  <div class="container" style="max-width: 800px;">

    <!-- For Job Seekers -->
    <h4 class="faq-category mt-2"><i class="fa fa-user mr-2"></i>For Job Seekers</h4>
    <div id="faqJobSeekers">

      <div class="card faq-card">
        <div class="card-header" id="faq1h">
          <button data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1">
            How do I create an account?
            <span class="faq-icon"><i class="fa fa-plus"></i></span>
          </button>
        </div>
        <div id="faq1" class="collapse show" aria-labelledby="faq1h">
          <div class="card-body">
            Click the <strong>"Log In/Register"</strong> button in the navigation bar. Select <strong>"Job Seeker"</strong> as your account type, fill in your details (name, email, password), and click Register. You'll be logged in immediately and can start browsing jobs.
          </div>
        </div>
      </div>

      <div class="card faq-card">
        <div class="card-header" id="faq2h">
          <button class="collapsed" data-toggle="collapse" data-target="#faq2" aria-expanded="false" aria-controls="faq2">
            How do I apply for a job?
            <span class="faq-icon"><i class="fa fa-plus"></i></span>
          </button>
        </div>
        <div id="faq2" class="collapse" aria-labelledby="faq2h">
          <div class="card-body">
            Browse jobs from the <strong>"Explore Jobs"</strong> page or search using the hero search bar. Click on any job listing to view details, then click the <strong>"Apply Now"</strong> button. Upload your CV if required and submit your application. You can track all your applications from your profile.
          </div>
        </div>
      </div>

      <div class="card faq-card">
        <div class="card-header" id="faq3h">
          <button class="collapsed" data-toggle="collapse" data-target="#faq3" aria-expanded="false" aria-controls="faq3">
            Can I save jobs and apply later?
            <span class="faq-icon"><i class="fa fa-plus"></i></span>
          </button>
        </div>
        <div id="faq3" class="collapse" aria-labelledby="faq3h">
          <div class="card-body">
            Yes! When viewing any job listing, click the <strong>bookmark/save</strong> icon. All your saved jobs are accessible from your profile under <strong>"Saved Jobs"</strong>. Just make sure to apply before the deadline shown on each listing.
          </div>
        </div>
      </div>

      <div class="card faq-card">
        <div class="card-header" id="faq4h">
          <button class="collapsed" data-toggle="collapse" data-target="#faq4" aria-expanded="false" aria-controls="faq4">
            How do I set my availability?
            <span class="faq-icon"><i class="fa fa-plus"></i></span>
          </button>
        </div>
        <div id="faq4" class="collapse" aria-labelledby="faq4h">
          <div class="card-body">
            Go to your profile and select <strong>"My Availability"</strong>. You can set your available hours for each day of the week. Employers can see this when reviewing your application, helping them match you with suitable shifts and schedules.
          </div>
        </div>
      </div>

      <div class="card faq-card">
        <div class="card-header" id="faq5h">
          <button class="collapsed" data-toggle="collapse" data-target="#faq5" aria-expanded="false" aria-controls="faq5">
            Is Hire Loop free for job seekers?
            <span class="faq-icon"><i class="fa fa-plus"></i></span>
          </button>
        </div>
        <div id="faq5" class="collapse" aria-labelledby="faq5h">
          <div class="card-body">
            <strong>Absolutely!</strong> Creating an account, searching for jobs, applying, saving listings, and setting up your profile are all completely free for job seekers. There are no hidden fees or premium tiers.
          </div>
        </div>
      </div>

    </div>

    <!-- For Employers -->
    <h4 class="faq-category mt-5"><i class="fa fa-building mr-2"></i>For Employers</h4>
    <div id="faqEmployers">

      <div class="card faq-card">
        <div class="card-header" id="faq6h">
          <button class="collapsed" data-toggle="collapse" data-target="#faq6" aria-expanded="false" aria-controls="faq6">
            How do I post a job?
            <span class="faq-icon"><i class="fa fa-plus"></i></span>
          </button>
        </div>
        <div id="faq6" class="collapse" aria-labelledby="faq6h">
          <div class="card-body">
            Register as an <strong>Employer</strong>, then go to your <strong>Employer Dashboard</strong>. Click <strong>"Post a Job"</strong> and fill in the job title, description, region, type, salary range, and deadline. Once submitted, your listing will be reviewed and published.
          </div>
        </div>
      </div>

      <div class="card faq-card">
        <div class="card-header" id="faq7h">
          <button class="collapsed" data-toggle="collapse" data-target="#faq7" aria-expanded="false" aria-controls="faq7">
            How do I review applications?
            <span class="faq-icon"><i class="fa fa-plus"></i></span>
          </button>
        </div>
        <div id="faq7" class="collapse" aria-labelledby="faq7h">
          <div class="card-body">
            From your <strong>Employer Dashboard</strong>, you can see all incoming applications. Click on any application to view the candidate's profile, CV, and availability. You can then <strong>accept</strong> or <strong>reject</strong> the application, and the candidate will be notified automatically.
          </div>
        </div>
      </div>

      <div class="card faq-card">
        <div class="card-header" id="faq8h">
          <button class="collapsed" data-toggle="collapse" data-target="#faq8" aria-expanded="false" aria-controls="faq8">
            Can I edit or delete a posted job?
            <span class="faq-icon"><i class="fa fa-plus"></i></span>
          </button>
        </div>
        <div id="faq8" class="collapse" aria-labelledby="faq8h">
          <div class="card-body">
            Yes. Navigate to your <strong>Employer Dashboard</strong> and find the job listing you want to modify. You can edit details like description, deadline, or salary, and also deactivate or remove listings that are no longer open.
          </div>
        </div>
      </div>

    </div>

    <!-- General -->
    <h4 class="faq-category mt-5"><i class="fa fa-circle-info mr-2"></i>General</h4>
    <div id="faqGeneral">

      <div class="card faq-card">
        <div class="card-header" id="faq9h">
          <button class="collapsed" data-toggle="collapse" data-target="#faq9" aria-expanded="false" aria-controls="faq9">
            How do I reset my password?
            <span class="faq-icon"><i class="fa fa-plus"></i></span>
          </button>
        </div>
        <div id="faq9" class="collapse" aria-labelledby="faq9h">
          <div class="card-body">
            Log in to your account, then go to your profile dropdown and select <strong>"Change Password"</strong>. Enter your current password and your new password, then save. If you've forgotten your password entirely, contact our support team for help.
          </div>
        </div>
      </div>

      <div class="card faq-card">
        <div class="card-header" id="faq10h">
          <button class="collapsed" data-toggle="collapse" data-target="#faq10" aria-expanded="false" aria-controls="faq10">
            What regions are supported?
            <span class="faq-icon"><i class="fa fa-plus"></i></span>
          </button>
        </div>
        <div id="faq10" class="collapse" aria-labelledby="faq10h">
          <div class="card-body">
            Hire Loop currently supports major Indian cities including <strong>Mumbai, Delhi, Bengaluru, Hyderabad, Chennai, Kolkata, Pune, Ahmedabad, Jaipur, Lucknow</strong>, and more. We're continuously expanding our coverage to new regions.
          </div>
        </div>
      </div>

      <div class="card faq-card">
        <div class="card-header" id="faq11h">
          <button class="collapsed" data-toggle="collapse" data-target="#faq11" aria-expanded="false" aria-controls="faq11">
            How do notifications work?
            <span class="faq-icon"><i class="fa fa-plus"></i></span>
          </button>
        </div>
        <div id="faq11" class="collapse" aria-labelledby="faq11h">
          <div class="card-body">
            You'll receive real-time notifications for important events — such as when an employer views your application, accepts/rejects it, or when new jobs matching your region are posted. Check the <strong>bell icon</strong> in the navbar to see your latest notifications.
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- FAQ Search Script -->
<script>
document.addEventListener('DOMContentLoaded', function(){
  var search = document.getElementById('faqSearch');
  if(!search) return;
  search.addEventListener('input', function(){
    var q = this.value.toLowerCase().trim();
    document.querySelectorAll('.faq-card').forEach(function(card){
      var text = card.textContent.toLowerCase();
      card.style.display = text.includes(q) ? '' : 'none';
    });
  });
});
</script>

<?php require "includes/footer.php"; ?>
