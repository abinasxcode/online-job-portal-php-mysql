/**
 * 3D Animations - Hire Loop
 * GSAP ScrollTrigger animations + Vanilla-tilt card effects
 */
(function(){
  'use strict';

  // Wait for DOM
  document.addEventListener('DOMContentLoaded', function(){

    // ─── GSAP ScrollTrigger Animations ───────────────
    if(typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined'){
      gsap.registerPlugin(ScrollTrigger);

      // Stats section - 3D flip in
      gsap.utils.toArray('.stat-box').forEach(function(box, i){
        gsap.from(box, {
          scrollTrigger: {trigger: box, start:'top 85%', toggleActions:'play none none none'},
          duration: 0.8,
          delay: i * 0.12,
          opacity: 0,
          rotateX: -40,
          y: 60,
          scale: 0.85,
          ease: 'back.out(1.5)',
          clearProps: 'all'
        });
      });

      // Job cards - slide in with 3D perspective
      gsap.utils.toArray('.job-card').forEach(function(card, i){
        gsap.from(card, {
          scrollTrigger: {trigger: card, start:'top 88%', toggleActions:'play none none none'},
          duration: 0.7,
          delay: i * 0.08,
          opacity: 0,
          x: -60,
          rotateY: 12,
          scale: 0.92,
          ease: 'power3.out',
          clearProps: 'all'
        });
      });

      // Region cards - scale up with rotation
      gsap.utils.toArray('.rj-card').forEach(function(card, i){
        gsap.from(card, {
          scrollTrigger: {trigger: card, start:'top 88%', toggleActions:'play none none none'},
          duration: 0.65,
          delay: i * 0.06,
          opacity: 0,
          y: 50,
          rotateX: -15,
          scale: 0.9,
          ease: 'power2.out',
          clearProps: 'all'
        });
      });

      // Section titles - dramatic entrance
      gsap.utils.toArray('.section-title').forEach(function(title){
        gsap.from(title, {
          scrollTrigger: {trigger: title, start:'top 85%', toggleActions:'play none none none'},
          duration: 0.9,
          opacity: 0,
          y: 40,
          scale: 0.8,
          ease: 'elastic.out(1, 0.6)',
          clearProps: 'all'
        });
      });

      // CTA section - parallax background
      var ctaSection = document.querySelector('.cta-ribbon');
      if(ctaSection){
        gsap.from(ctaSection.querySelectorAll('.cta-title, .lead, .cta-benefits, .btn'), {
          scrollTrigger: {trigger: ctaSection, start:'top 80%', toggleActions:'play none none none'},
          duration: 0.8,
          opacity: 0,
          y: 40,
          stagger: 0.12,
          ease: 'power2.out',
          clearProps: 'all'
        });

        // CTA card 3D entrance
        var ctaCard = ctaSection.querySelector('.cta-card');
        if(ctaCard){
          gsap.from(ctaCard, {
            scrollTrigger: {trigger: ctaCard, start:'top 85%', toggleActions:'play none none none'},
            duration: 1,
            opacity: 0,
            x: 80,
            rotateY: -20,
            scale: 0.85,
            ease: 'power3.out',
            clearProps: 'all'
          });
        }
      }

      // Footer reveal
      var footer = document.querySelector('.modern-footer');
      if(footer){
        gsap.from(footer, {
          scrollTrigger: {trigger: footer, start:'top 95%', toggleActions:'play none none none'},
          duration: 0.8,
          opacity: 0,
          y: 30,
          ease: 'power2.out',
          clearProps: 'all'
        });
      }

      // Navbar shrink on scroll
      ScrollTrigger.create({
        start: 'top -80',
        onUpdate: function(self){
          var nav = document.querySelector('.navbar');
          if(!nav) return;
          if(self.direction === 1 && self.progress > 0){
            nav.style.padding = '0.3rem 1rem';
            nav.style.boxShadow = '0 4px 20px rgba(0,0,0,0.1)';
          } else if(self.progress === 0){
            nav.style.padding = '0.6rem 1rem';
            nav.style.boxShadow = '0 1px 3px rgba(0,0,0,0.04)';
          }
        }
      });
    }

    // ─── Vanilla Tilt on Cards ───────────────────────
    if(typeof VanillaTilt !== 'undefined'){
      // Job cards
      VanillaTilt.init(document.querySelectorAll('.job-card'), {
        max: 5, speed: 400, scale: 1.02, glare: true, 'max-glare': 0.08,
        perspective: 1200
      });

      // Region cards
      VanillaTilt.init(document.querySelectorAll('.rj-card'), {
        max: 8, speed: 400, scale: 1.03, glare: true, 'max-glare': 0.12,
        perspective: 1000
      });

      // Stat boxes
      VanillaTilt.init(document.querySelectorAll('.stat-box'), {
        max: 10, speed: 300, scale: 1.05, glare: true, 'max-glare': 0.15,
        perspective: 800
      });

      // CTA card
      VanillaTilt.init(document.querySelectorAll('.cta-card'), {
        max: 8, speed: 400, scale: 1.02, glare: true, 'max-glare': 0.1,
        perspective: 1000
      });
    }

    // ─── Floating animation for search card ──────────
    var searchCard = document.querySelector('.search-card');
    if(searchCard && typeof gsap !== 'undefined'){
      gsap.to(searchCard, {
        y: -8,
        duration: 3,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
      });
    }

    // ─── Parallax depth on hero elements ─────────────
    var heroSection = document.getElementById('home-section');
    if(heroSection){
      var heroBadge = heroSection.querySelector('.hero-badge');
      var heroTitle = heroSection.querySelector('.hero-title');

      document.addEventListener('mousemove', function(e){
        var cx = (e.clientX / window.innerWidth - 0.5) * 2;
        var cy = (e.clientY / window.innerHeight - 0.5) * 2;

        if(heroBadge) heroBadge.style.transform = 'translate('+(cx*8)+'px, '+(cy*5)+'px)';
        if(heroTitle) heroTitle.style.transform = 'translate('+(cx*-4)+'px, '+(cy*-3)+'px)';
      });
    }

    // ─── Magnetic buttons ────────────────────────────
    document.querySelectorAll('.btn-hero, .btn-primary.btn-lg').forEach(function(btn){
      btn.addEventListener('mousemove', function(e){
        var rect = btn.getBoundingClientRect();
        var x = e.clientX - rect.left - rect.width/2;
        var y = e.clientY - rect.top - rect.height/2;
        btn.style.transform = 'translate('+x*0.15+'px, '+y*0.15+'px) scale(1.05)';
      });
      btn.addEventListener('mouseleave', function(){
        btn.style.transform = '';
      });
    });

  });
})();
