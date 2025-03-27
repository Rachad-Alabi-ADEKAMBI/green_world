@extends('layouts.app')

@section('title', "Green World - Inscription")

@section('content')
<main>
    <main>
        <!-- Register Section -->
        <section class="auth-section">
            <div class="container">
                <div class="auth-container">
                    <div class="auth-image">
                        <img src="https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Agriculteurs dans un champ">
                        <div class="auth-overlay">
                            <div class="auth-overlay-content">
                                <h2>Rejoignez notre communauté</h2>
                                <p>Commencez votre aventure agricole avec Green World et accédez à des connaissances et des ressources d'experts.</p>
                                <div class="auth-benefits">
                                    <div class="auth-benefit">
                                        <i class="fas fa-video"></i>
                                        <span>Accès à tous les cours</span>
                                    </div>
                                    <div class="auth-benefit">
                                        <i class="fas fa-comments"></i>
                                        <span>Soutien communautaire</span>
                                    </div>
                                    <div class="auth-benefit">
                                        <i class="fas fa-certificate"></i>
                                        <span>Obtenez des certificats</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="auth-form-container">
                        <div class="auth-form-header">
                            <h1>Créez votre compte</h1>
                            <p>Remplissez vos informations pour rejoindre Green World</p>
                        </div>
                        <form class="auth-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="firstName">Prénom</label>
                                    <div class="input-icon-wrapper">
                                        <i class="fas fa-user"></i>
                                        <input type="text" id="firstName" name="firstName" placeholder="Votre prénom" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Nom de famille</label>
                                    <div class="input-icon-wrapper">
                                        <i class="fas fa-user"></i>
                                        <input type="text" id="lastName" name="lastName" placeholder="Votre nom de famille" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Adresse Email</label>
                                <div class="input-icon-wrapper">
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" id="email" name="email" placeholder="Votre adresse email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone">Numéro de téléphone</label>
                                <div class="input-icon-wrapper">
                                    <i class="fas fa-phone"></i>
                                    <input type="tel" id="phone" name="phone" placeholder="Votre numéro de téléphone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
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
                            <div class="form-group">
                                <label>Intérêt pour</label>
                                <div class="checkbox-group">
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="corn" name="interests" value="corn">
                                        <label for="corn">Culture du maïs</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="soybeans" name="interests" value="soybeans">
                                        <label for="soybeans">Culture de soja</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="tomatoes" name="interests" value="tomatoes">
                                        <label for="tomatoes">Production de tomates</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="peppers" name="interests" value="peppers">
                                        <label for="peppers">Culture de poivrons</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group terms-group">
                                <div class="checkbox-item">
                                    <input type="checkbox" id="terms" name="terms" required>
                                    <label for="terms">J'accepte les <a href="#">Conditions d'utilisation</a> et la <a href="#">Politique de confidentialité</a></label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn--primary btn--full btn--animated">
                                Créer un compte <i class="fas fa-user-plus"></i>
                            </button>
                        </form>
                        <div class="auth-footer">
                            <p>Vous avez déjà un compte ? <a href="login.html">Connectez-vous</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

</main>
@endsection