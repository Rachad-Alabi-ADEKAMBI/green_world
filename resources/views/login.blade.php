@extends('layouts.app')

@section('title', "Green World - Connexion")

@section('content')
<main>
    <section id="login" class="login">
        <container class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 mx-auto">
                    <div class="auth-form">
                        <div class="auth-form-container">
                            <div class="auth-form-header">
                                <h1>Connectez-vous à votre compte</h1>
                                <p>Entrez vos identifiants pour accéder à votre compte</p>
                            </div>
                            <form class="auth-form">
                                <div class="form-group">
                                    <label for="email">Adresse Email</label>
                                    <div class="input-icon-wrapper">
                                        <i class="fas fa-envelope"></i>
                                        <input type="email" id="email" name="email" placeholder="Votre adresse email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Mot de passe</label>
                                    <div class="input-icon-wrapper">
                                        <i class="fas fa-lock"></i>
                                        <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>
                                        <button type="button" class="password-toggle">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="form-options">
                                    <div class="remember-me">
                                        <input type="checkbox" id="remember" name="remember">
                                        <label for="remember">Se souvenir de moi</label>
                                    </div>
                                    <a href="#" class="forgot-password">Mot de passe oublié ?</a>
                                </div>
                                <button type="submit" class="btn btn--primary btn--full btn--animated">
                                    Se connecter <i class="fas fa-sign-in-alt"></i>
                                </button>
                                <div class="auth-divider">
                                    <span>Ou connectez-vous avec</span>
                                </div>
                                <div class="social-login">
                                    <button type="button" class="social-btn social-btn--google">
                                        <i class="fab fa-google"></i> Google
                                    </button>
                                    <button type="button" class="social-btn social-btn--facebook">
                                        <i class="fab fa-facebook-f"></i> Facebook
                                    </button>
                                </div>
                            </form>
                            <div class="auth-footer">
                                <p>Vous n'avez pas de compte ? <a href="/register">Inscrivez-vous maintenant</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </container>
    </section>

</main>
@endsection