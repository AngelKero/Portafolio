// Script simple para mejorar la interactividad del portafolio

document.addEventListener('DOMContentLoaded', function() {
    // Suavizar el scroll al hacer click en los links de navegación
    const navLinks = document.querySelectorAll('.nav-links a');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // El scroll suave ya está en CSS, pero podemos agregar más lógica aquí
            console.log('Navegando a: ' + this.getAttribute('href'));
        });
    });

    // Agregar animación cuando los elementos entran en vista
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observar todas las tarjetas de proyectos
    const projectCards = document.querySelectorAll('.project-card');
    projectCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });

    // Event listener para los botones de contacto
    const contactLinks = document.querySelectorAll('.contact-link');
    contactLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            console.log('Link de contacto clicked: ' + this.getAttribute('href'));
        });
    });
});
