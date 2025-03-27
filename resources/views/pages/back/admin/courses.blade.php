@extends('layouts.app')

@section('title', "Green World - Cours")

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


                <!-- Tableau des Cours -->
                <div class="admin-card">
                    <div class="admin-card__header">
                        <h2 class="admin-card__title">
                            <i class="fas fa-book"></i> Liste des Cours
                        </h2>
                        <div class="admin-card__actions">
                            <div class="admin-card__filter">
                                <select>
                                    <option>Tous les Cours</option>
                                    <option>Cours Actifs</option>
                                    <option>Cours Inactifs</option>
                                </select>
                            </div>
                            <button class="btn btn--outline-primary btn--sm">
                                <i class="fas fa-plus"></i> Ajouter un Cours
                            </button>
                        </div>
                    </div>
                    <div class="admin-card__content">
                        <div class="admin-table-container">
                            <table class="admin-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Cours</th>
                                        <th>Catégorie</th>
                                        <th>Instructeur</th>
                                        <th>Étudiants</th>
                                        <th>Prix</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#CR001</td>
                                        <td>
                                            <div class="admin-table__course">
                                                <img src="https://images.unsplash.com/photo-1471193945509-9ad0617afabf?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Cours">
                                                <div>
                                                    <p class="admin-table__name">Culture Avancée du Maïs</p>
                                                    <p class="admin-table__date">Créé le : 10 Janv. 2023</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Agriculture</td>
                                        <td>Dr. James Wilson</td>
                                        <td>1 245</td>
                                        <td>1 500 FCFA</td>
                                        <td><span class="admin-badge admin-badge--active">Actif</span></td>
                                        <td>
                                            <div class="admin-table__actions">
                                                <button class="admin-btn admin-btn--view" title="Voir"><i class="fas fa-eye"></i></button>
                                                <button class="admin-btn admin-btn--edit" title="Modifier"><i class="fas fa-edit"></i></button>
                                                <button class="admin-btn admin-btn--delete" title="Supprimer"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#CR002</td>
                                        <td>
                                            <div class="admin-table__course">
                                                <img src="https://images.unsplash.com/photo-1599420186946-7b6fb4e297f0?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Cours">
                                                <div>
                                                    <p class="admin-table__name">Culture Rentable du Soja</p>
                                                    <p class="admin-table__date">Créé le : 15 Févr. 2023</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Agriculture</td>
                                        <td>Dr. Sarah Johnson</td>
                                        <td>987</td>
                                        <td>1 200 FCFA</td>
                                        <td><span class="admin-badge admin-badge--active">Actif</span></td>
                                        <td>
                                            <div class="admin-table__actions">
                                                <button class="admin-btn admin-btn--view" title="Voir"><i class="fas fa-eye"></i></button>
                                                <button class="admin-btn admin-btn--edit" title="Modifier"><i class="fas fa-edit"></i></button>
                                                <button class="admin-btn admin-btn--delete" title="Supprimer"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#CR003</td>
                                        <td>
                                            <div class="admin-table__course">
                                                <img src="https://images.unsplash.com/photo-1592924357228-91a4daadcfea?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Cours">
                                                <div>
                                                    <p class="admin-table__name">Production de Tomates Toute l'Année</p>
                                                    <p class="admin-table__date">Créé le : 5 Mars 2023</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Agriculture Légumière</td>
                                        <td>Prof. Maria Garcia</td>
                                        <td>756</td>
                                        <td>1 300 FCFA</td>
                                        <td><span class="admin-badge admin-badge--active">Actif</span></td>
                                        <td>
                                            <div class="admin-table__actions">
                                                <button class="admin-btn admin-btn--view" title="Voir"><i class="fas fa-eye"></i></button>
                                                <button class="admin-btn admin-btn--edit" title="Modifier"><i class="fas fa-edit"></i></button>
                                                <button class="admin-btn admin-btn--delete" title="Supprimer"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#CR004</td>
                                        <td>
                                            <div class="admin-table__course">
                                                <img src="https://images.unsplash.com/photo-1518568814500-bf0f8d125f46?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Cours">
                                                <div>
                                                    <p class="admin-table__name">Techniques de Culture du Poivron</p>
                                                    <p class="admin-table__date">Créé le : 20 Avr. 2023</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Agriculture Légumière</td>
                                        <td>Dr. Michael Chen</td>
                                        <td>543</td>
                                        <td>1 100 FCFA</td>
                                        <td><span class="admin-badge admin-badge--inactive">Inactif</span></td>
                                        <td>
                                            <div class="admin-table__actions">
                                                <button class="admin-btn admin-btn--view" title="Voir"><i class="fas fa-eye"></i></button>
                                                <button class="admin-btn admin-btn--edit" title="Modifier"><i class="fas fa-edit"></i></button>
                                                <button class="admin-btn admin-btn--delete" title="Supprimer"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#CR005</td>
                                        <td>
                                            <div class="admin-table__course">
                                                <img src="https://images.unsplash.com/photo-1536054745380-d9b9b2a8f0e2?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Cours">
                                                <div>
                                                    <p class="admin-table__name">Masterclass de Culture du Riz</p>
                                                    <p class="admin-table__date">Créé le : 8 Mai 2023</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Agriculture</td>
                                        <td>Prof. John Adamu</td>
                                        <td>421</td>
                                        <td>1 400 FCFA</td>
                                        <td><span class="admin-badge admin-badge--active">Actif</span></td>
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
                                Affichage de 1 à 5 sur 15 entrées
                            </div>
                            <div class="admin-table-pagination__pages">
                                <button class="admin-table-pagination__btn admin-table-pagination__btn--disabled">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="admin-table-pagination__btn admin-table-pagination__btn--active">1</button>
                                <button class="admin-table-pagination__btn">2</button>
                                <button class="admin-table-pagination__btn">3</button>
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