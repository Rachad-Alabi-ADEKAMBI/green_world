@extends('layouts.app')

@section('title', "Green World - Fromations")

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


                <!-- Tableau des formations -->
                <div class="admin-card">
                    <div class="admin-card__header">
                        <h2 class="admin-card__title">
                            <i class="fas fa-chalkboard-teacher"></i> Formations en cours
                        </h2>
                        <div class="admin-card__actions">
                            <button class="btn btn--outline-primary btn--sm">
                                <i class="fas fa-plus"></i> Ajouter une formation
                            </button>
                        </div>
                    </div>
                    <div class="admin-card__content">
                        <div class="admin-table-container">
                            <table class="admin-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Formation</th>
                                        <th>Formateur</th>
                                        <th>Date de début</th>
                                        <th>Date de fin</th>
                                        <th>Participants</th>
                                        <th>Progrès</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#TR001</td>
                                        <td>
                                            <div class="admin-table__training">
                                                <div>
                                                    <p class="admin-table__name">Atelier de culture du maïs</p>
                                                    <p class="admin-table__location"><i class="fas fa-map-marker-alt"></i> Centre de formation Green City</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Dr. James Wilson</td>
                                        <td>10 mai 2023</td>
                                        <td>15 juillet 2023</td>
                                        <td>45/50</td>
                                        <td>
                                            <div class="admin-progress">
                                                <div class="admin-progress__bar" style="width: 65%"></div>
                                                <span class="admin-progress__text">65%</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="admin-table__actions">
                                                <button class="admin-btn admin-btn--view" title="Voir"><i class="fas fa-eye"></i></button>
                                                <button class="admin-btn admin-btn--edit" title="Modifier"><i class="fas fa-edit"></i></button>
                                                <button class="admin-btn admin-btn--delete" title="Supprimer"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#TR002</td>
                                        <td>
                                            <div class="admin-table__training">
                                                <div>
                                                    <p class="admin-table__name">Formation intensive en culture du soja</p>
                                                    <p class="admin-table__location"><i class="fas fa-map-marker-alt"></i> Centre de recherche agricole</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Dr. Sarah Johnson</td>
                                        <td>5 avril 2023</td>
                                        <td>30 juin 2023</td>
                                        <td>38/40</td>
                                        <td>
                                            <div class="admin-progress">
                                                <div class="admin-progress__bar" style="width: 80%"></div>
                                                <span class="admin-progress__text">80%</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="admin-table__actions">
                                                <button class="admin-btn admin-btn--view" title="Voir"><i class="fas fa-eye"></i></button>
                                                <button class="admin-btn admin-btn--edit" title="Modifier"><i class="fas fa-edit"></i></button>
                                                <button class="admin-btn admin-btn--delete" title="Supprimer"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#TR003</td>
                                        <td>
                                            <div class="admin-table__training">
                                                <div>
                                                    <p class="admin-table__name">Masterclass de production de tomates</p>
                                                    <p class="admin-table__location"><i class="fas fa-map-marker-alt"></i> Campus Green World</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Prof. Maria Garcia</td>
                                        <td>15 mai 2023</td>
                                        <td>10 août 2023</td>
                                        <td>32/35</td>
                                        <td>
                                            <div class="admin-progress">
                                                <div class="admin-progress__bar" style="width: 45%"></div>
                                                <span class="admin-progress__text">45%</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="admin-table__actions">
                                                <button class="admin-btn admin-btn--view" title="Voir"><i class="fas fa-eye"></i></button>
                                                <button class="admin-btn admin-btn--edit" title="Modifier"><i class="fas fa-edit"></i></button>
                                                <button class="admin-btn admin-btn--delete" title="Supprimer"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#TR004</td>
                                        <td>
                                            <div class="admin-table__training">
                                                <div>
                                                    <p class="admin-table__name">Techniques de culture du poivre</p>
                                                    <p class="admin-table__location"><i class="fas fa-map-marker-alt"></i> Centre communautaire de ferme</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Dr. Michael Chen</td>
                                        <td>1 juin 2023</td>
                                        <td>30 juillet 2023</td>
                                        <td>25/30</td>
                                        <td>
                                            <div class="admin-progress">
                                                <div class="admin-progress__bar" style="width: 30%"></div>
                                                <span class="admin-progress__text">30%</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="admin-table__actions">
                                                <button class="admin-btn admin-btn--view" title="Voir"><i class="fas fa-eye"></i></button>
                                                <button class="admin-btn admin-btn--edit" title="Modifier"><i class="fas fa-edit"></i></button>
                                                <button class="admin-btn admin-btn--delete" title="Supprimer"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#TR005</td>
                                        <td>
                                            <div class="admin-table__training">
                                                <div>
                                                    <p class="admin-table__name">Les bases de la culture du riz</p>
                                                    <p class="admin-table__location"><i class="fas fa-map-marker-alt"></i> Centre d'extension rurale</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Prof. John Adamu</td>
                                        <td>20 mai 2023</td>
                                        <td>25 août 2023</td>
                                        <td>28/30</td>
                                        <td>
                                            <div class="admin-progress">
                                                <div class="admin-progress__bar" style="width: 50%"></div>
                                                <span class="admin-progress__text">50%</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="admin-table__actions">
                                                <button class="admin-btn admin-btn--view" title="Voir"><i class="fas fa-eye"></i></button>
                                                <button class="admin-btn admin-btn--edit" title="Modifier"><i class="fas fa-edit"></i></button>
                                                <button class="admin-btn admin-btn--delete" title="Supprimer"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="admin-table-pagination">
                            <div class="admin-table-pagination__info">
                                Affichage de 1 à 5 sur 8 entrées
                            </div>
                            <div class="admin-table-pagination__pages">
                                <button class="admin-table-pagination__btn admin-table-pagination__btn--disabled">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="admin-table-pagination__btn admin-table-pagination__btn--active">1</button>
                                <button class="admin-table-pagination__btn">2</button>
                                <button class="admin-table-pagination__btn">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
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