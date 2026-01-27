// ============================================================================
// CONFIGURACIÓN DE GSAP Y PORTAFOLIO
// ============================================================================
gsap.registerPlugin(ScrollTrigger);

// ============================================================================
// ANIMACIONES CON GSAP SCROLLTRIGGER - EXPERIENCIA INMERSIVA DEL PORTAFOLIO
// ============================================================================

document.addEventListener("DOMContentLoaded", function () {
  // ==================== PARALAJE HERO ====================
  // Efecto de paralaje sutil para el texto del hero
  const heroContent = document.querySelector(".hero-content");
  if (heroContent) {
    gsap.to(heroContent, {
      y: 100,
      opacity: 0.8,
      scrollTrigger: {
        trigger: ".hero",
        start: "top center",
        end: "bottom center",
        scrub: 1.5, // Paralaje suave con scroll
        markers: false,
      },
    });
  }

  // Flotación suave de la foto en el hero
  const heroPhotoFrame = document.querySelector(".hero-photo-frame");
  if (heroPhotoFrame) {
    gsap.to(heroPhotoFrame, {
      y: 12,
      duration: 3.5,
      ease: "sine.inOut",
      repeat: -1,
      yoyo: true,
    });
  }

  // ==================== REVELACIÓN DE SECCIONES ====================
  // Animaciones de fade-in y slide-up para las secciones principales
  const sections = [
    { selector: ".about", stagger: 0 },
    { selector: ".skills", stagger: 0 },
    { selector: ".experience", stagger: 0 },
    { selector: ".education", stagger: 0 },
    { selector: ".projects", stagger: 0 },
    { selector: ".contact", stagger: 0 },
  ];

  sections.forEach((section) => {
    gsap.fromTo(
      section.selector,
      {
        opacity: 0,
        y: 30,
      },
      {
        opacity: 1,
        y: 0,
        duration: 0.8,
        ease: "power2.out",
        scrollTrigger: {
          trigger: section.selector,
          start: "top 80%",
          end: "top 50%",
          toggleActions: "play none none none",
          markers: false,
        },
      },
    );
  });

  // ==================== ITEMS DE HABILIDADES - REVELACIÓN ESCALONADA ====================
  // Los items de habilidades se desvanecen uno por uno con efecto dominó
  const skillItems = document.querySelectorAll(".skill-item");
  if (skillItems.length > 0) {
    gsap.fromTo(
      skillItems,
      {
        opacity: 0,
        y: 20,
      },
      {
        opacity: 1,
        y: 0,
        duration: 0.6,
        stagger: 0.1, // Efecto dominó - 0.1s entre cada item
        ease: "power2.out",
        scrollTrigger: {
          trigger: ".skills-grid",
          start: "top 70%",
          end: "top 30%",
          toggleActions: "play none none none",
          markers: false,
        },
      },
    );
  }

  // ==================== TARJETAS DE PROYECTOS - REVELACIÓN ESCALONADA ====================
  // Tarjetas de proyectos con entrada escalonada
  const projectCards = document.querySelectorAll(".project-card");
  if (projectCards.length > 0) {
    gsap.fromTo(
      projectCards,
      {
        opacity: 0,
        y: 30,
      },
      {
        opacity: 1,
        y: 0,
        duration: 0.7,
        stagger: 0.15, // Escalonamiento entre tarjetas de proyectos
        ease: "power2.out",
        scrollTrigger: {
          trigger: ".projects-grid",
          start: "top 70%",
          end: "top 20%",
          toggleActions: "play none none none",
          markers: false,
        },
      },
    );
  }

  // ==================== ITEMS DE EDUCACIÓN - REVELACIÓN ESCALONADA ====================
  // Items de educación con animación escalonada
  const educationItems = document.querySelectorAll(".education-item");
  if (educationItems.length > 0) {
    gsap.fromTo(
      educationItems,
      {
        opacity: 0,
        x: -30,
      },
      {
        opacity: 1,
        x: 0,
        duration: 0.7,
        stagger: 0.2, // Escalonamiento entre items de educación
        ease: "power2.out",
        scrollTrigger: {
          trigger: ".education-list",
          start: "top 75%",
          end: "top 25%",
          toggleActions: "play none none none",
          markers: false,
        },
      },
    );
  }

  // ==================== TARJETAS DE DESTACADOS - REVELACIÓN ESCALONADA ====================
  // Tarjetas de destacados en la sección About
  const highlightCards = document.querySelectorAll(".highlight-card");
  if (highlightCards.length > 0) {
    gsap.fromTo(
      highlightCards,
      {
        opacity: 0,
        scale: 0.8,
      },
      {
        opacity: 1,
        scale: 1,
        duration: 0.6,
        stagger: 0.12,
        ease: "back.out(1.5)", // Efecto rebote para destacados
        scrollTrigger: {
          trigger: ".about-highlights",
          start: "top 75%",
          end: "top 35%",
          toggleActions: "play none none none",
          markers: false,
        },
      },
    );
  }

  // ==================== ITEMS DE LÍNEA DE TIEMPO - REVELACIÓN DE IZQUIERDA A DERECHA ====================
  // Items de experiencia en la línea de tiempo se animan desde la izquierda
  const timelineItems = document.querySelectorAll(".timeline-item");
  if (timelineItems.length > 0) {
    gsap.fromTo(
      timelineItems,
      {
        opacity: 0,
        x: -50,
      },
      {
        opacity: 1,
        x: 0,
        duration: 0.7,
        stagger: 0.2,
        ease: "power2.out",
        scrollTrigger: {
          trigger: ".experience-timeline",
          start: "top 75%",
          end: "top 25%",
          toggleActions: "play none none none",
          markers: false,
        },
      },
    );
  }

  // ==================== ABOUT TEXT - LINE REVEAL EFFECT ====================
  // Headlines with fade + scale effect for premium feel
  const h2Elements = document.querySelectorAll("section h2, section h3");
  if (h2Elements.length > 0) {
    h2Elements.forEach((element) => {
      gsap.fromTo(
        element,
        {
          opacity: 0,
          y: 15,
          letterSpacing: "-0.02em",
        },
        {
          opacity: 1,
          y: 0,
          letterSpacing: "0em",
          duration: 0.6,
          ease: "power2.out",
          scrollTrigger: {
            trigger: element,
            start: "top 80%",
            end: "top 60%",
            toggleActions: "play none none none",
            markers: false,
          },
        },
      );
    });
  }

  // ==================== SMOOTH SCROLL NAVIGATION ====================
  const navLinks = document.querySelectorAll(".nav-links a");
  navLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      const href = this.getAttribute("href");
      if (href.startsWith("#")) {
        e.preventDefault();
        const target = document.querySelector(href);
        if (target) {
          target.scrollIntoView({ behavior: "smooth" });
        }
      }
    });
  });

  // ==================== INTERACTIVE HOVER EFFECTS ====================
  // Add subtle hover animation to clickable elements
  const interactiveElements = document.querySelectorAll(
    ".cta-button, .project-card, .skill-item",
  );
  interactiveElements.forEach((element) => {
    element.addEventListener("mouseenter", () => {
      gsap.to(element, {
        y: -3,
        duration: 0.3,
        ease: "power2.out",
        overwrite: "auto",
      });
    });

    element.addEventListener("mouseleave", () => {
      gsap.to(element, {
        y: 0,
        duration: 0.3,
        ease: "power2.out",
        overwrite: "auto",
      });
    });
  });

  // ==================== CONTACT LINKS ====================
  const contactLinks = document.querySelectorAll(".contact-link");
  contactLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      // Prevent default only for placeholder links
      if (this.getAttribute("href") === "#") {
        e.preventDefault();
      }
    });
  });

  // ==================== EDUCATIONAL TOOLTIPS (TIPPY.JS) ====================
  // Initialize Tippy.js for business-value educational tooltips
  const tooltipElements = document.querySelectorAll("[data-tippy-content]");

  tooltipElements.forEach((element) => {
    tippy(element, {
      content: element.getAttribute("data-tippy-content"),
      theme: "glass",
      placement: "top",
      animation: "shift-away",
      arrow: true,
      duration: [300, 250],
      inertia: true,
      interactiveDebounce: 75,
      touch: ["hold", 500],
      appendTo: document.body,
    });

    // Accesibilidad: agregar aria-label para lectores de pantalla
    const tooltipText = element.getAttribute("data-tippy-content");
    if (tooltipText) {
      element.setAttribute("aria-label", tooltipText);
    }
  });
});
