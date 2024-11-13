<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luminis Digital - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- <script type="module" src="{{ asset('js/app.js') }}"></script> -->
</head>
<body>
    <!-- Header -->
    <header class="main-header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="/">Luminis Digital</a>
                </div>
                
                <button class="mobile-menu-toggle" id="menuToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <nav class="main-nav">
                    <ul class="nav-list">
                        <li><a href="/" class="nav-link">Accueil</a></li>
                        <li><a href="/services" class="nav-link">Services</a></li>
                        <li><a href="/projets" class="nav-link">Projets</a></li>
                        <li><a href="/contact" class="nav-link contact-link">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3>Luminis Digital</h3>
                    <p>Votre partenaire digital pour des solutions innovantes et performantes.</p>
                </div>

                <div class="footer-section">
                    <h3>Liens rapides</h3>
                    <ul class="footer-links">
                        <li><a href="/services">Services</a></li>
                        <li><a href="/projets">Projets</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Contact</h3>
                    <ul class="contact-info">
                        <li>Email: contact@luminis-digital.com</li>
                        <li>Tél: +33 (0)1 23 45 67 89</li>
                        <li>Adresse: Paris, France</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Luminis Digital. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
    <!-- <script type="module" src="{{ asset('js/app.js') }}"></script> -->
</body>
</html>