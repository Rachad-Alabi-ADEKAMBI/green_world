<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <title>@yield('title', 'Green World - Agriculture & Gardening Training School')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="header__content">
                <a href="/" class="header__logo">Green World</a>

                <nav class="header__nav">
                    <a href="/home" class="header__nav-link header__nav-link--active">Accueil</a>
                    <a href="/about" class="header__nav-link">À propos</a>
                    <div class="header__nav-dropdown">
                        <a href="/courses'" class="header__nav-link">Secteurs Agricoles <i class="fas fa-chevron-down"></i></a>
                        <div class="header__dropdown-content">
                            <a href="/courses" class="header__dropdown-item">Culture du Maïs</a>
                            <a href="/courses" class="header__dropdown-item">Culture du Soja</a>
                            <a href="/courses" class="header__dropdown-item">Culture du Poivre</a>
                            <a href="/coursesl" class="header__dropdown-item">Production de Tomates</a>
                            <a href="/courses" class="header__dropdown-item">Culture du Riz</a>
                            <a href="/courses" class="header__dropdown-item">Culture du Manioc</a>
                        </div>
                    </div>
                    <a href="/courses" class="header__nav-link">Cours</a>
                    <a href="/#contact" class="header__nav-link">Contact</a>
                    <a href="/dashboard" class="header__nav-link">Tableau de bord</a>
                </nav>


                <button class="btn btn--primary" onclick="window.location.replace('/login')">Login</button>

                <button class="header__menu-toggle" id="menuToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobileMenu">
            <div class="container">
                <a href="/home" class="mobile-menu__link">Home</a>
                <a href="/about" class="mobile-menu__link">About</a>
                <a href="/courses" class="mobile-menu__link">Agricultural Sectors</a>
                <div class="mobile-menu__submenu">
                    <a href="/courses" class="mobile-menu__sublink">Corn Cultivation</a>
                    <a href="/courses" class="mobile-menu__sublink">Soybean Farming</a>
                    <a href="/courses" class="mobile-menu__sublink">Pepper Growing</a>
                    <a href="/courses" class="mobile-menu__sublink">Tomato Production</a>
                    <a href="/courses" class="mobile-menu__sublink">Rice Farming</a>
                    <a href="/courses" class="mobile-menu__sublink">Cassava Cultivation</a>
                </div>
                <a href="/courses" class="mobile-menu__link">Courses</a>
                <a href="/contact" class="mobile-menu__link">Contact</a>
                <button class="btn btn--primary mobile-menu__login-btn" onclick="window.location.replace('/login')">Login</button>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__column">
                    <h3 class="footer__title">Green World</h3>
                    <p class="footer__text">
                        Donner aux agriculteurs et aux passionnés de jardinage les connaissances et les compétences nécessaires pour une agriculture durable. Notre mission est de transformer les pratiques agricoles grâce à l'éducation et à l'innovation.
                    </p>
                    <div class="footer__social">
                        <a href="#" class="footer__social-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="footer__social-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="footer__social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <div class="footer__column">
                    <h3 class="footer__title">Liens Rapides</h3>
                    <ul class="footer__links">
                        <li><a href="index.html" class="footer__link">Accueil</a></li>
                        <li><a href="#about" class="footer__link">À Propos</a></li>
                        <li><a href="sectors.html" class="footer__link">Secteurs Agricoles</a></li>
                        <li><a href="#main-courses" class="footer__link">Cours</a></li>
                        <li><a href="#contact" class="footer__link">Contact</a></li>
                        <li><a href="/login" class="footer__link">Connexion</a></li>
                        <li><a href="/register" class="footer__link">S'inscrire</a></li>
                    </ul>
                </div>

                <div class="footer__column">
                    <h3 class="footer__title">Secteurs Agricoles</h3>
                    <ul class="footer__links">
                        <li><a href="/courses" class="footer__link">Culture du Maïs</a></li>
                        <li><a href="/courses" class="footer__link">Culture du Soja</a></li>
                        <li><a href="/courses" class="footer__link">Culture des Piments</a></li>
                        <li><a href="/courses" class="footer__link">Production de Tomates</a></li>
                        <li><a href="/courses" class="footer__link">Culture du Riz</a></li>
                        <li><a href="/courses" class="footer__link">Culture du Manioc</a></li>
                    </ul>
                </div>

                <div class="footer__column">
                    <h3 class="footer__title">Contactez-nous</h3>
                    <ul class="footer__contact">
                        <li class="footer__contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>123 Route de l'Agriculture, Ville Verte</span>
                        </li>
                        <li class="footer__contact-item">
                            <i class="fas fa-phone"></i>
                            <span>+123 456 7890</span>
                        </li>
                        <li class="footer__contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>info@greenworld.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__bottom">
                <p>&copy; <span id="currentYear"></span> Green World. Tous droits réservés.</p>
            </div>
        </div>
    </footer>


    <script>
        // Set current year in footer
        document.getElementById('currentYear').textContent = new Date().getFullYear();

        // Mobile menu toggle
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');

        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('mobile-menu--open');

            // Change icon based on menu state
            const icon = menuToggle.querySelector('i');
            if (mobileMenu.classList.contains('mobile-menu--open')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('[data-scroll-animation]');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const animation = entry.target.getAttribute('data-scroll-animation');
                        const delay = entry.target.getAttribute('data-scroll-delay') || 0;

                        setTimeout(() => {
                            entry.target.classList.add(animation);
                            entry.target.style.opacity = 1;
                        }, delay);

                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            animatedElements.forEach(element => {
                element.style.opacity = 0;
                observer.observe(element);
            });
        });

        // Counter animation for stats
        function animateCounter(element, target, duration) {
            let start = 0;
            const increment = target / (duration / 16);

            function updateCount() {
                start += increment;
                if (start >= target) {
                    element.textContent = target.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                    return;
                }

                element.textContent = Math.floor(start).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                requestAnimationFrame(updateCount);
            }

            updateCount();
        }

        const statObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumbers = document.querySelectorAll('.about__stat-number, .hero__stat-number');

                    statNumbers.forEach(stat => {
                        const target = parseInt(stat.textContent.replace(/,/g, '').replace(/\+/g, ''));
                        animateCounter(stat, target, 2000);
                    });

                    statObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });

        const statsSection = document.querySelector('.about__stats');
        if (statsSection) {
            statObserver.observe(statsSection);
        }

        const heroStats = document.querySelector('.hero__stats');
        if (heroStats) {
            statObserver.observe(heroStats);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


</body>

</html>