@extends('layouts.app')

@section('title', "Green World - Paramètres")

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

                <section class="section">
                    <container class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-8 p-3 mx-auto">
                                <form class="auth-form">
                                    <div class="form-group">
                                        <label for="phone">Numéro de téléphone</label>
                                        <div class="input-icon-wrapper">
                                            <i class="fas fa-phone"></i>
                                            <input type="tel" id="phone" name="phone" placeholder="Votre numéro de téléphone">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Nouveau mot de passe</label>
                                        <div class="input-icon-wrapper">
                                            <i class="fas fa-lock"></i>
                                            <input type="password" id="password" name="password" placeholder="Créez un mot de passe" required>
                                            <button type="button" class="password-toggle">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                        <div class="password-strength">
                                            <div class="strength-meter">
                                                <div class="strength-segment"></div>
                                                <div class="strength-segment"></div>
                                                <div class="strength-segment"></div>
                                                <div class="strength-segment"></div>
                                            </div>
                                            <span class="strength-text">Force du mot de passe</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirmPassword">Confirmer le mot de passe</label>
                                        <div class="input-icon-wrapper">
                                            <i class="fas fa-lock"></i>
                                            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirmez votre mot de passe" required>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn--primary  mt-3 btn--full btn--animated">
                                        Valider <i class="fas fa-check-plus"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </container>
                </section>

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