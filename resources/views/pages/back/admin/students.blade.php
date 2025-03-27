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


                <!-- Students Table -->
                <div class="admin-card">
                    <div class="admin-card__header">
                        <h2 class="admin-card__title">
                            <i class="fas fa-user-graduate"></i> Liste des étudiants
                        </h2>
                        <div class="admin-card__actions">
                            <div class="admin-card__filter">
                                <select>
                                    <option>Tous les étudiants</option>
                                    <option>Étudiants actifs</option>
                                    <option>Étudiants inactifs</option>
                                </select>
                            </div>
                            <button class="btn btn--outline-primary btn--sm">
                                <i class="fas fa-plus"></i> Ajouter un étudiant
                            </button>
                        </div>
                    </div>
                    <div class="admin-card__content">
                        <div class="admin-table-container">
                            <table class="admin-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Cours inscrits</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#ST001</td>
                                        <td>
                                            <div class="admin-table__user">
                                                <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Étudiant">
                                                <div>
                                                    <p class="admin-table__name">Marie Koné</p>
                                                    <p class="admin-table__date">Inscrit le : 15 Jan, 2023</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>marie.kone@example.com</td>
                                        <td>+123 456 7890</td>
                                        <td>3</td>
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
                                        <td>#ST002</td>
                                        <td>
                                            <div class="admin-table__user">
                                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Étudiant">
                                                <div>
                                                    <p class="admin-table__name">Amadou Diallo</p>
                                                    <p class="admin-table__date">Inscrit le : 3 Févr, 2023</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>amadou.diallo@example.com</td>
                                        <td>+123 456 7891</td>
                                        <td>2</td>
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
                                        <td>#ST003</td>
                                        <td>
                                            <div class="admin-table__user">
                                                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Étudiant">
                                                <div>
                                                    <p class="admin-table__name">Fatou Sow</p>
                                                    <p class="admin-table__date">Inscrit le : 12 Mars, 2023</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>fatou.sow@example.com</td>
                                        <td>+123 456 7892</td>
                                        <td>1</td>
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
                                        <td>#ST004</td>
                                        <td>
                                            <div class="admin-table__user">
                                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Étudiant">
                                                <div>
                                                    <p class="admin-table__name">Ibrahim Touré</p>
                                                    <p class="admin-table__date">Inscrit le : 5 Avril, 2023</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>ibrahim.toure@example.com</td>
                                        <td>+123 456 7893</td>
                                        <td>4</td>
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
                                        <td>#ST005</td>
                                        <td>
                                            <div class="admin-table__user">
                                                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Étudiant">
                                                <div>
                                                    <p class="admin-table__name">Aisha Bah</p>
                                                    <p class="admin-table__date">Inscrit le : 20 Mai, 2023</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>aisha.bah@example.com</td>
                                        <td>+123 456 7894</td>
                                        <td>2</td>
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
                                Affichage de 1 à 5 sur 248 entrées
                            </div>
                            <div class="admin-table-pagination__pages">
                                <button class="admin-table-pagination__btn admin-table-pagination__btn--disabled">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="admin-table-pagination__btn admin-table-pagination__btn--active">1</button>
                                <button class="admin-table-pagination__btn">2</button>
                                <button class="admin-table-pagination__btn">3</button>
                                <button class="admin-table-pagination__btn">4</button>
                                <button class="admin-table-pagination__btn">5</button>
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