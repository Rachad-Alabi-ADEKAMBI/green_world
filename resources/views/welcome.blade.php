@extends('layouts.app')

@section('title', "Green World - Plateforme d'apprentissage, Suivis et conseils en africulture et projets agricoles")

@section('content')
<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero__background">
            <div class="hero__overlay"></div>
        </div>
        <div class="container">
            <div class="hero__content animate__animated animate__fadeInLeft">
                <div class="hero__badge"></div>
                <h1 class="hero__title">Créons ensemble <span class="hero__highlight">un monde plus vert</span></h1>
                <p class="hero__text">
                    Formations agricoles & Conseils et accompagnements de projets agricoles
                </p>
                <div class="hero__buttons">
                    <button class="btn btn--light btn--animated">
                        <span class="btn__icon"><i class="fas fa-seedling"></i></span>
                        Essai gratuit
                    </button>
                    <button class="btn btn--outline-light">
                        Découvrir les cours <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
                <div class="hero__stats">
                    <div class="hero__stat">
                        <span class="hero__stat-number">1,000+</span>
                        <span class="hero__stat-label">Etudiants</span>
                    </div>
                    <div class="hero__stat">
                        <span class="hero__stat-number">30+</span>
                        <span class="hero__stat-label">Cours</span>
                    </div>
                    <div class="hero__stat">
                        <span class="hero__stat-number">98%</span>
                        <span class="hero__stat-label">Taux de satisfaction</span>
                    </div>
                </div>
            </div>
            <div class="hero__image animate__animated animate__fadeInRight">
                <img src="https://images.unsplash.com/photo-1523348837708-15d4a09cfac2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Farmer in field">
                <div class="hero__image-shape"></div>
            </div>
        </div>
        <div class="hero__shape"></div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title animate__animated animate__fadeIn" data-scroll-animation="animate__fadeIn">
                À propos de Green World
            </h2>

            <div class="about__content">
                <div class="about__image animate__animated animate__fadeInLeft" data-scroll-animation="animate__fadeInLeft">
                    <img src="https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Agriculteurs dans un champ de maïs">
                </div>

                <div class="about__text animate__animated animate__fadeInRight" data-scroll-animation="animate__fadeInRight">
                    <h3 class="about__subtitle">Notre Mission</h3>
                    <p>
                        Fondée en 2019, Green World est une plateforme d’apprentissage dédiée à la formation et à l’accompagnement en agriculture et en gestion de projets agricoles. Notre mission est de promouvoir des pratiques agricoles durables qui augmentent la productivité tout en préservant nos ressources naturelles pour les générations futures.
                    </p>
                    <p>
                        Nous croyons que l'éducation est la clé de la transformation du secteur agricole dans nos communautés. Grâce à nos programmes de formation complets, nous aidons les agriculteurs à maîtriser les techniques, technologies et bonnes pratiques les plus récentes dans le domaine.
                    </p>

                    <h3 class="about__subtitle">Notre Approche</h3>
                    <p>
                        Chez Green World, nous combinons théorie et expérience pratique. Nos formations sont conçues par des experts du secteur agricole possédant plusieurs années d’expérience sur le terrain, garantissant ainsi des enseignements pertinents et à jour.
                    </p>
                    <p>
                        Nous comprenons que chaque agriculteur fait face à des défis uniques. C'est pourquoi nous proposons un accompagnement personnalisé tout au long du parcours d’apprentissage. De plus, nos ressources multilingues permettent de lever toute barrière linguistique à l’accès à une éducation agricole de qualité.
                    </p>

                    <div class="about__stats">
                        <div class="about__stat">
                            <span class="about__stat-number">5 000+</span>
                            <span class="about__stat-label">Étudiants formés</span>
                        </div>
                        <div class="about__stat">
                            <span class="about__stat-number">20+</span>
                            <span class="about__stat-label">Formateurs experts</span>
                        </div>
                        <div class="about__stat">
                            <span class="about__stat-number">15</span>
                            <span class="about__stat-label">Cours en agriculture</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 class="section-title animate__animated animate__fadeIn" data-scroll-animation="animate__fadeIn">Pourquoi choisir Green World ?</h2>

            <div class="features__grid">
                <div class="feature-card animate__animated animate__fadeInUp" data-scroll-animation="animate__fadeInUp" data-scroll-delay="0">
                    <div class="feature-card__icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3 class="feature-card__title">Cours complets</h3>
                    <p class="feature-card__text">
                        Apprenez tout, de l’initiation au jardinage aux techniques agricoles avancées. Notre programme couvre la préparation du sol, les méthodes de plantation, la lutte contre les ravageurs, la récolte et la gestion post-récolte.
                    </p>
                </div>

                <div class="feature-card animate__animated animate__fadeInUp" data-scroll-animation="animate__fadeInUp" data-scroll-delay="200">
                    <div class="feature-card__icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3 class="feature-card__title">Vidéos multilingues</h3>
                    <p class="feature-card__text">
                        Accédez à des vidéos de formation dans votre langue préférée pour une meilleure compréhension. Nous proposons du contenu en anglais, français, espagnol et plusieurs langues locales pour garantir l’accessibilité à tous.
                    </p>
                </div>

                <div class="feature-card animate__animated animate__fadeInUp" data-scroll-animation="animate__fadeInUp" data-scroll-delay="400">
                    <div class="feature-card__icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3 class="feature-card__title">Chat intégré</h3>
                    <p class="feature-card__text">
                        Obtenez une assistance en temps réel et échangez avec d'autres étudiants grâce à notre système de chat. Posez vos questions, partagez vos expériences et collaborez avec des agriculteurs du monde entier.
                    </p>
                </div>

                <div class="feature-card animate__animated animate__fadeInUp" data-scroll-animation="animate__fadeInUp" data-scroll-delay="600">
                    <div class="feature-card__icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="feature-card__title">Suivi personnalisé</h3>
                    <p class="feature-card__text">
                        Bénéficiez d’un accompagnement individuel et de conseils de nos experts. Nous vous fournissons un retour régulier sur vos progrès et adaptons nos recommandations à vos conditions agricoles spécifiques.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Main Courses Section -->
    <section id="main-courses" class="main-courses">
        <div class="container">
            <h2 class="section-title animate__animated animate__fadeIn" data-scroll-animation="animate__fadeIn">Nos Cours Vedettes</h2>
            <p class="main-courses__subtitle animate__animated animate__fadeIn" data-scroll-animation="animate__fadeIn">
                Des programmes de formation complets conçus pour transformer vos pratiques agricoles
            </p>

            <div class="main-courses__grid">
                <div class="main-course-card animate__animated animate__fadeInUp" data-scroll-animation="animate__fadeInUp">
                    <div class="main-course-card__image">
                        <img src="https://images.unsplash.com/photo-1471193945509-9ad0617afabf?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Culture du Maïs">
                        <div class="main-course-card__badge">Meilleure vente</div>
                    </div>
                    <div class="main-course-card__content">
                        <div class="main-course-card__meta">
                            <span><i class="fas fa-clock"></i> 12 Semaines</span>
                            <span><i class="fas fa-signal"></i> Intermédiaire</span>
                            <span><i class="fas fa-users"></i> 1 200+ Étudiants</span>
                        </div>
                        <h3 class="main-course-card__title">Techniques Avancées de Culture du Maïs</h3>
                        <p class="main-course-card__text">
                            Maîtrisez l'art de cultiver du maïs à haut rendement grâce à des méthodes durables. Ce cours complet couvre tout, de la préparation du sol et la sélection des semences aux techniques avancées d'irrigation et stratégies de gestion des parasites.
                        </p>
                        <div class="main-course-card__instructor">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Dr. James Wilson">
                            <div>
                                <h4>Dr. James Wilson</h4>
                                <p>Scientifique Agricole, 15+ ans d'expérience</p>
                            </div>
                        </div>
                        <div class="main-course-card__footer">
                            <div class="main-course-card__price">
                                <span class="main-course-card__price-amount">1 500 FCFA</span>
                                <span class="main-course-card__price-period">/mois</span>
                            </div>
                            <a href="courses/corn-cultivation.html" class="btn btn--primary">
                                S'inscrire <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="main-course-card animate__animated animate__fadeInUp" data-scroll-animation="animate__fadeInUp" data-scroll-delay="200">
                    <div class="main-course-card__image">
                        <img src="https://images.unsplash.com/photo-1599420186946-7b6fb4e297f0?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Culture du Soja">
                    </div>
                    <div class="main-course-card__content">
                        <div class="main-course-card__meta">
                            <span><i class="fas fa-clock"></i> 10 Semaines</span>
                            <span><i class="fas fa-signal"></i> Tous Niveaux</span>
                            <span><i class="fas fa-users"></i> 950+ Étudiants</span>
                        </div>
                        <h3 class="main-course-card__title">Culture Rentable du Soja</h3>
                        <p class="main-course-card__text">
                            Apprenez à maximiser vos rendements et votre rentabilité avec le soja. Ce cours couvre la sélection des variétés, les techniques de plantation, les stratégies de fertilisation, la gestion des maladies et les méthodes de récolte pour des résultats optimaux.
                        </p>
                        <div class="main-course-card__instructor">
                            <img src="https://images.unsplash.com/photo-1607990281513-2c110a25bd8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Dr. Sarah Johnson">
                            <div>
                                <h4>Dr. Sarah Johnson</h4>
                                <p>Spécialiste des Cultures, Ancienne Responsable de l'Extension Agricole</p>
                            </div>
                        </div>
                        <div class="main-course-card__footer">
                            <div class="main-course-card__price">
                                <span class="main-course-card__price-amount">1 200 FCFA</span>
                                <span class="main-course-card__price-period">/mois</span>
                            </div>
                            <a href="courses/soybean-farming.html" class="btn btn--primary">
                                S'inscrire <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="main-course-card animate__animated animate__fadeInUp" data-scroll-animation="animate__fadeInUp" data-scroll-delay="400">
                    <div class="main-course-card__image">
                        <img src="https://images.unsplash.com/photo-1592924357228-91a4daadcfea?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Production de Tomates">
                        <div class="main-course-card__badge">Nouveau</div>
                    </div>
                    <div class="main-course-card__content">
                        <div class="main-course-card__meta">
                            <span><i class="fas fa-clock"></i> 8 Semaines</span>
                            <span><i class="fas fa-signal"></i> Débutant à Avancé</span>
                            <span><i class="fas fa-users"></i> 750+ Étudiants</span>
                        </div>
                        <h3 class="main-course-card__title">Production de Tomates Toute l'Année</h3>
                        <p class="main-course-card__text">
                            Maîtrisez les techniques pour cultiver des tomates saines et à haut rendement tout au long de l'année. Découvrez la culture en serre, les systèmes hydroponiques, la prévention des maladies et les stratégies de commercialisation de vos récoltes.
                        </p>
                        <div class="main-course-card__instructor">
                            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Prof. Maria Garcia">
                            <div>
                                <h4>Prof. Maria Garcia</h4>
                                <p>Experte en Horticulture, 20+ ans d'expérience</p>
                            </div>
                        </div>
                        <div class="main-course-card__footer">
                            <div class="main-course-card__price">
                                <span class="main-course-card__price-amount">1 300 FCFA</span>
                                <span class="main-course-card__price-period">/mois</span>
                            </div>
                            <a href="courses/tomato-production.html" class="btn btn--primary">
                                S'inscrire <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-courses__cta animate__animated animate__fadeIn" data-scroll-animation="animate__fadeIn">
                <a href="courses.html" class="btn btn--outline-primary btn--large">
                    Voir Tous les Cours <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>


    <!-- Section Tarifs -->
    <section class="pricing">
        <div class="container">
            <h2 class="section-title animate__animated animate__fadeIn" data-scroll-animation="animate__fadeIn">Tarification Simple & Abordable</h2>

            <div class="pricing-card animate__animated animate__zoomIn" data-scroll-animation="animate__zoomIn">
                <div class="pricing-card__header">
                    <h3 class="pricing-card__title">Accès Premium</h3>
                    <p class="pricing-card__subtitle">Tout ce dont vous avez besoin pour devenir un expert</p>
                </div>

                <div class="pricing-card__body">
                    <div class="pricing-card__price">
                        <span class="pricing-card__amount">1 000</span>
                        <span class="pricing-card__period">FCFA/mois</span>
                    </div>

                    <p class="pricing-card__trial">Après votre essai gratuit d'un mois</p>

                    <ul class="pricing-card__features">
                        <li class="pricing-card__feature">
                            <i class="fas fa-chevron-right"></i>
                            <span>Accès complet à tous les cours</span>
                        </li>
                        <li class="pricing-card__feature">
                            <i class="fas fa-chevron-right"></i>
                            <span>Contenu vidéo multilingue</span>
                        </li>
                        <li class="pricing-card__feature">
                            <i class="fas fa-chevron-right"></i>
                            <span>Ressources téléchargeables</span>
                        </li>
                        <li class="pricing-card__feature">
                            <i class="fas fa-chevron-right"></i>
                            <span>Support par chat en direct</span>
                        </li>
                        <li class="pricing-card__feature">
                            <i class="fas fa-chevron-right"></i>
                            <span>Retour personnalisé</span>
                        </li>
                        <li class="pricing-card__feature">
                            <i class="fas fa-chevron-right"></i>
                            <span>Webinaires mensuels avec des experts</span>
                        </li>
                        <li class="pricing-card__feature">
                            <i class="fas fa-chevron-right"></i>
                            <span>Accès au forum communautaire</span>
                        </li>
                    </ul>

                    <button class="btn btn--primary btn--large btn--full btn--animated">
                        Commencez votre essai gratuit
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Aperçu des Cours -->
    <section class="courses">
        <div class="container">
            <h2 class="section-title animate__animated animate__fadeIn" data-scroll-animation="animate__fadeIn">Nos Cours Agricoles</h2>

            <div class="courses__grid">
                <div class="course-card animate__animated animate__fadeInUp" data-scroll-animation="animate__fadeInUp" data-scroll-delay="0">
                    <div class="course-card__image">
                        <img src="https://images.unsplash.com/photo-1471193945509-9ad0617afabf?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Culture du Maïs">
                    </div>
                    <div class="course-card__content">
                        <h3 class="course-card__title">Culture du Maïs</h3>
                        <p class="course-card__text">
                            Apprenez les techniques pour cultiver du maïs sain et à haut rendement. Maîtrisez la préparation du sol, le choix des semences, la plantation, la fertilisation et la récolte.
                        </p>
                        <a href="sectors/corn.html" class="btn btn--outline-primary">
                            En savoir plus <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="course-card animate__animated animate__fadeInUp" data-scroll-animation="animate__fadeInUp" data-scroll-delay="200">
                    <div class="course-card__image">
                        <img src="https://images.unsplash.com/photo-1599420186946-7b6fb4e297f0?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Culture du Soja">
                    </div>
                    <div class="course-card__content">
                        <h3 class="course-card__title">Culture du Soja</h3>
                        <p class="course-card__text">
                            Maîtrisez l'art de cultiver du soja pour une productivité maximale. Apprenez la sélection des variétés, les techniques de plantation, la gestion des nuisibles et la récolte.
                        </p>
                        <a href="sectors/soybeans.html" class="btn btn--outline-primary">
                            En savoir plus <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="course-card animate__animated animate__fadeInUp" data-scroll-animation="animate__fadeInUp" data-scroll-delay="400">
                    <div class="course-card__image">
                        <img src="https://images.unsplash.com/photo-1518568814500-bf0f8d125f46?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Culture du Poivre">
                    </div>
                    <div class="course-card__content">
                        <h3 class="course-card__title">Culture du Poivre</h3>
                        <p class="course-card__text">
                            Découvrez les secrets pour cultiver des poivrons savoureux et vibrants. Apprenez les différentes variétés, les conditions de culture, la prévention des maladies et les techniques de récolte.
                        </p>
                        <a href="sectors/peppers.html" class="btn btn--outline-primary">
                            En savoir plus <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="course-card animate__animated animate__fadeInUp" data-scroll-animation="animate__fadeInUp" data-scroll-delay="600">
                    <div class="course-card__image">
                        <img src="https://images.unsplash.com/photo-1592924357228-91a4daadcfea?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Production de Tomates">
                    </div>
                    <div class="course-card__content">
                        <h3 class="course-card__title">Production de Tomates</h3>
                        <p class="course-card__text">
                            Apprenez à cultiver des tomates juteuses et résistantes aux maladies toute l'année. Maîtrisez la production de plantules, la transplantation, les treillis, la gestion des nuisibles et la récolte.
                        </p>
                        <a href="sectors/tomatoes.html" class="btn btn--outline-primary">
                            En savoir plus <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title animate__animated animate__fadeIn" data-scroll-animation="animate__fadeIn">Contactez-nous</h2>

            <div class="contact__content">
                <div class="contact__info animate__animated animate__fadeInLeft" data-scroll-animation="animate__fadeInLeft">
                    <h3 class="contact__subtitle">Informations de Contact</h3>
                    <p class="contact__text">
                        Vous avez des questions sur nos cours ou besoin de plus d'informations ? Notre équipe est là pour vous aider. Remplissez le formulaire ou utilisez les coordonnées ci-dessous pour nous contacter.
                    </p>

                    <div class="contact__details">
                        <div class="contact__detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h4>Notre emplacement</h4>
                                <p>123 Agriculture Road, Green City<br>Pays</p>
                            </div>
                        </div>

                        <div class="contact__detail">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h4>Numéro de téléphone</h4>
                                <p>+123 456 7890<br>+123 456 7891</p>
                            </div>
                        </div>

                        <div class="contact__detail">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h4>Adresse Email</h4>
                                <p>info@greenworld.com<br>support@greenworld.com</p>
                            </div>
                        </div>

                        <div class="contact__detail">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h4>Heures de travail</h4>
                                <p>Lundi - Vendredi : 9h00 - 17h00<br>Samedi : 10h00 - 14h00</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact__social">
                        <a href="#" class="contact__social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="contact__social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="contact__social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="contact__social-link"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="contact__form-container animate__animated animate__fadeInRight" data-scroll-animation="animate__fadeInRight">
                    <form class="contact__form">
                        <div class="form-group">
                            <label for="fullName">Nom complet</label>
                            <input type="text" id="fullName" name="fullName" placeholder="Votre nom complet" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Adresse e-mail</label>
                            <input type="email" id="email" name="email" placeholder="Votre adresse e-mail" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Numéro de téléphone</label>
                            <input type="tel" id="phone" name="phone" placeholder="Votre numéro de téléphone" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="4" placeholder="Votre message" required></textarea>
                        </div>

                        <button type="submit" class="btn btn--primary btn--large btn--animated">
                            Envoyer le message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection