// Dans resources/js/app.js

const initNavigation = () => {
    const menuToggle = document.getElementById('menuToggle');
    const mainNav = document.querySelector('.main-nav');
    const navList = document.querySelector('.nav-list');
    
    if (!menuToggle || !mainNav) return;
    
    let isAnimating = false;
    
    menuToggle.addEventListener('click', function() {
        if (isAnimating) return;
        isAnimating = true;
        
        const isActive = mainNav.classList.contains('active');
        const spans = this.getElementsByTagName('span');
        
        // Animation du bouton et du menu
        if (!isActive) {
            // Ouverture du menu
            mainNav.classList.add('active');
            
            // Animation du burger
            spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
            spans[1].style.opacity = '0';
            spans[2].style.transform = 'rotate(-45deg) translate(7px, -6px)';
            
            // Délai pour l'animation des liens
            setTimeout(() => {
                navList.style.opacity = '1';
                navList.style.transform = 'translateY(0)';
                isAnimating = false;
            }, 100);
        } else {
            // Animation de fermeture
            navList.style.opacity = '0';
            navList.style.transform = 'translateY(-10px)';
            
            // Retour du burger à l'état initial
            spans[0].style.transform = 'none';
            spans[1].style.opacity = '1';
            spans[2].style.transform = 'none';
            
            // Délai avant de fermer le menu
            setTimeout(() => {
                mainNav.classList.remove('active');
                isAnimating = false;
            }, 300);
        }
    });

    // Fermeture du menu lors du clic sur un lien
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 768 && !isAnimating) {
                const spans = menuToggle.getElementsByTagName('span');
                
                // Animation de fermeture similaire
                navList.style.opacity = '0';
                navList.style.transform = 'translateY(-10px)';
                
                spans[0].style.transform = 'none';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'none';
                
                setTimeout(() => {
                    mainNav.classList.remove('active');
                }, 300);
            }
        });
    });
};

// Animation du header au scroll (améliorée)
const initHeaderScroll = () => {
    let lastScroll = 0;
    const header = document.querySelector('.main-header');
    
    if (!header) return;

    const handleScroll = () => {
        const currentScroll = window.pageYOffset;
        
        // Ajout d'un seuil pour éviter les micro-mouvements
        if (Math.abs(currentScroll - lastScroll) < 10) return;
        
        if (currentScroll > lastScroll && currentScroll > 80) {
            header.style.transform = 'translateY(-100%)';
        } else {
            header.style.transform = 'translateY(0)';
        }
        
        lastScroll = currentScroll;
    };

    // Utilisation de requestAnimationFrame pour de meilleures performances
    let ticking = false;
    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                handleScroll();
                ticking = false;
            });
            ticking = true;
        }
    });
};

// Initialisation
document.addEventListener('DOMContentLoaded', () => {
    initNavigation();
    initHeaderScroll();
});