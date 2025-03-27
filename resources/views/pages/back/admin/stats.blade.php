@extends('layouts.app')

@section('title', "Green World - Statistiques")

@section('content')
<main>
    <div class="admin-body">
        <div class="admin-sidebar-overlay" id="sidebarOverlay"></div>

        <div class="admin-container">
            <!-- Sidebar -->
            @include('pages.back.admin.sidebar')

            <!-- Main Content -->
            <main class="admin-main">
                <div class="admin-main__header">
                    <h1>Tableau de bord</h1>
                    <div class="admin-main__breadcrumb">
                        <a href="index.html">Accueil</a>
                        <i class="fas fa-chevron-right"></i>
                        <span>Tableau de bord</span>
                    </div>
                </div>

                <!-- Cartes de statistiques -->
                <div class="admin-stats">
                    <div class="admin-stat-card">
                        <div class="admin-stat-card__icon admin-stat-card__icon--students">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="admin-stat-card__content">
                            <h3 class="admin-stat-card__title">Total des étudiants</h3>
                            <p class="admin-stat-card__value">5 248</p>
                            <p class="admin-stat-card__change admin-stat-card__change--up">
                                <i class="fas fa-arrow-up"></i> +12% par rapport au mois dernier
                            </p>
                        </div>
                    </div>
                    <div class="admin-stat-card">
                        <div class="admin-stat-card__icon admin-stat-card__icon--courses">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="admin-stat-card__content">
                            <h3 class="admin-stat-card__title">Cours actifs</h3>
                            <p class="admin-stat-card__value">15</p>
                            <p class="admin-stat-card__change admin-stat-card__change--up">
                                <i class="fas fa-arrow-up"></i> 3 nouveaux ce mois-ci
                            </p>
                        </div>
                    </div>
                    <div class="admin-stat-card">
                        <div class="admin-stat-card__icon admin-stat-card__icon--trainings">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="admin-stat-card__content">
                            <h3 class="admin-stat-card__title">Formations en cours</h3>
                            <p class="admin-stat-card__value">8</p>
                            <p class="admin-stat-card__change admin-stat-card__change--neutral">
                                <i class="fas fa-minus"></i> Identique au mois dernier
                            </p>
                        </div>
                    </div>
                    <div class="admin-stat-card">
                        <div class="admin-stat-card__icon admin-stat-card__icon--revenue">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <div class="admin-stat-card__content">
                            <h3 class="admin-stat-card__title">Revenu mensuel</h3>
                            <p class="admin-stat-card__value">1,2M FCFA</p>
                            <p class="admin-stat-card__change admin-stat-card__change--up">
                                <i class="fas fa-arrow-up"></i> +8% par rapport au mois dernier
                            </p>
                        </div>
                    </div>
                </div>

                <div class="admin-stats">
                    <div class="admin-stat-card">
                        <div class="admin-stat-card__icon admin-stat-card__icon--students">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="admin-stat-card__content">
                            <h3 class="admin-stat-card__title">Total des étudiants</h3>
                            <p class="admin-stat-card__value">5 248</p>
                            <p class="admin-stat-card__change admin-stat-card__change--up">
                                <i class="fas fa-arrow-up"></i> +12% par rapport au mois dernier
                            </p>
                        </div>
                    </div>
                    <div class="admin-stat-card">
                        <div class="admin-stat-card__icon admin-stat-card__icon--courses">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="admin-stat-card__content">
                            <h3 class="admin-stat-card__title">Cours actifs</h3>
                            <p class="admin-stat-card__value">15</p>
                            <p class="admin-stat-card__change admin-stat-card__change--up">
                                <i class="fas fa-arrow-up"></i> 3 nouveaux ce mois-ci
                            </p>
                        </div>
                    </div>
                    <div class="admin-stat-card">
                        <div class="admin-stat-card__icon admin-stat-card__icon--trainings">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="admin-stat-card__content">
                            <h3 class="admin-stat-card__title">Formations en cours</h3>
                            <p class="admin-stat-card__value">8</p>
                            <p class="admin-stat-card__change admin-stat-card__change--neutral">
                                <i class="fas fa-minus"></i> Identique au mois dernier
                            </p>
                        </div>
                    </div>
                    <div class="admin-stat-card">
                        <div class="admin-stat-card__icon admin-stat-card__icon--revenue">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <div class="admin-stat-card__content">
                            <h3 class="admin-stat-card__title">Revenu mensuel</h3>
                            <p class="admin-stat-card__value">1,2M FCFA</p>
                            <p class="admin-stat-card__change admin-stat-card__change--up">
                                <i class="fas fa-arrow-up"></i> +8% par rapport au mois dernier
                            </p>
                        </div>
                    </div>
                </div>

            </main>
        </div>

        <script>
            // Set current year in footer
            document.getElementById('currentYear') && (document.getElementById('currentYear').textContent = new Date().getFullYear());

            // Sidebar toggle for mobile
            const sidebarToggle = document.getElementById('sidebarToggle');
            const adminSidebar = document.getElementById('adminSidebar');
            const sidebarOverlay = document.getElementById('sidebarOverlay');

            if (sidebarToggle && adminSidebar && sidebarOverlay) {
                // Toggle sidebar
                sidebarToggle.addEventListener('click', function() {
                    adminSidebar.classList.toggle('admin-sidebar--open');
                    sidebarOverlay.classList.toggle('admin-sidebar-overlay--visible');

                    // Change icon based on sidebar state
                    const icon = sidebarToggle.querySelector('i');
                    if (adminSidebar.classList.contains('admin-sidebar--open')) {
                        icon.classList.remove('fa-bars');
                        icon.classList.add('fa-times');
                    } else {
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    }
                });

                // Close sidebar when clicking on overlay
                sidebarOverlay.addEventListener('click', function() {
                    adminSidebar.classList.remove('admin-sidebar--open');
                    sidebarOverlay.classList.remove('admin-sidebar-overlay--visible');

                    const icon = sidebarToggle.querySelector('i');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                });

                // Close sidebar when clicking on a menu item (for mobile)
                const menuItems = adminSidebar.querySelectorAll('.admin-nav__link');
                menuItems.forEach(item => {
                    item.addEventListener('click', function() {
                        if (window.innerWidth < 992) {
                            adminSidebar.classList.remove('admin-sidebar--open');
                            sidebarOverlay.classList.remove('admin-sidebar-overlay--visible');

                            const icon = sidebarToggle.querySelector('i');
                            icon.classList.remove('fa-times');
                            icon.classList.add('fa-bars');
                        }
                    });
                });
            }

            // Responsive behavior
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 992 && adminSidebar && sidebarOverlay) {
                    adminSidebar.classList.remove('admin-sidebar--open');
                    sidebarOverlay.classList.remove('admin-sidebar-overlay--visible');

                    if (sidebarToggle) {
                        const icon = sidebarToggle.querySelector('i');
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    }
                }
            });
        </script>
    </div>

</main>
@endsection