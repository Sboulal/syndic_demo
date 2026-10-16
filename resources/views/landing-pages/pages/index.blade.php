<x-app-layout layout="landing">
    <!-- ================= BANNER PRINCIPAL ================= -->
    <div class="banner-one-app">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6 banner-one-img text-center ms-2 ms-sm-0">
                    <img src="{{ asset('images/landing-pages/images/home-1/banner-top.webp') }}" alt="Syndify App" class="img-fluid">
                </div>
                <div class="col-sm-6 inner-box">
                    <p class="mb-2 text-uppercase text-secondary">
                        Plateforme de Gestion de Copropriété
                    </p>
                    <h1 class="text-secondary mb-4">Bienvenue sur<br><span class="text-primary">Syndify</span></h1>
                    <p class="mb-5">Gérez votre copropriété en toute simplicité et transparence. Une solution complète pour le syndic, les propriétaires et les résidents.</p>
                    <div class="d-flex align-items-center store-btn">
                        <a href="{{ route('login') }}" class="btn btn-primary">Se Connecter</a>
                        <a href="{{ route('register') }}" class="btn btn-secondary ms-3">S'inscrire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================= FONCTIONNALITÉS ================= -->
    <div class="bg-secondary features-card">
        <div class="container">
            <div class="row mx-2 mx-sm-0">
                <div class="col-lg-6"></div>
                <div class="col-lg-6 top-feature">
                    <div class="text-right">
                        <p class="mb-2 text-white text-uppercase">Pourquoi choisir Syndify</p>
                        <h2 class="mb-3 text-white notch-feature-txt">Fonctionnalités Clés</h2>
                        <p class="mb-5 text-white pb-5">Tout ce dont vous avez besoin pour gérer votre résidence de manière efficace, automatisée et transparente.</p>
                    </div>
                </div>
            </div>
            <div class="row row-cols-sm-2 row-cols-lg-4">
                <div class="col">
                    <div class="card services-box rounded-1">
                        <div class="card-body">
                            <h4 class="mb-3">Gestion des Lots & Résidents</h4>
                            <p>Annuaire complet des propriétaires et locataires avec calcul des quotes-parts.</p>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card services-box rounded-1">
                        <div class="card-body">
                            <h4 class="mb-3">Trésorerie & Cotisations</h4>
                            <p>Suivi en temps réel des paiements, reçus et impayés de la copropriété.</p>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"></rect><line x1="2" y1="10" x2="22" y2="10"></line></svg>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card services-box rounded-1">
                        <div class="card-body">
                            <h4 class="mb-3">Suivi des Réclamations</h4>
                            <p>Système de ticketing pour déclarer et suivre les pannes et interventions.</p>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card services-box rounded-1">
                        <div class="card-body">
                            <h4 class="mb-3">Coffre-fort Numérique</h4>
                            <p>Stockage sécurisé des PV d'assemblée générale, contrats et règlements.</p>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================= APPLICATION MOBILE ================= -->
    <div class="section-padding page-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="mb-2 text-secondary text-uppercase">Application Mobile</p>
                    <h2 class="text-secondary mb-4 fast-afrd-txt">Votre copropriété <br> <span class="text-primary">dans votre poche</span></h2>
                    <p class="mb-5">Téléchargez l'application Syndify pour payer vos cotisations, déclarer un incident ou consulter les annonces du syndic directement depuis votre smartphone.</p>
                    <div class="d-flex align-items-center store-btn flex-wrap">
                        <a href="#"><img src="{{ asset('images/landing-pages/images/home-1/playstore.webp') }}" alt="Google Play" class="img-fluid mb-3 mb-md-0"></a>
                        <a href="#"><img src="{{ asset('images/landing-pages/images/home-1/appstore.webp') }}" alt="App Store" class="img-fluid ms-0 ms-md-3"></a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 text-center">
                    <div class="row align-items-center">
                        <div class="col">
                            <img src="{{ asset('images/landing-pages/images/home-1/dwn-1.webp') }}" alt="Syndify Mobile" class="img-fluid rounded shadow-lg">
                        </div>
                        <div class="col">
                            <img src="{{ asset('images/landing-pages/images/home-1/dwn-2.webp') }}" alt="Syndify App Dashboard" class="img-fluid rounded shadow-lg mt-5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================= TARIFICATION ================= -->
    <div class="section-card-padding bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <p class="mb-2 text-secondary text-uppercase">Tarification</p>
                    <h2 class="text-secondary mb-4">Nos Forfaits <span class="text-primary">Syndic</span></h2>
                    <p class="mb-4">Des offres transparentes adaptées à la taille de votre résidence, sans frais cachés.</p>
                    <a href="{{ route('register') }}" class="btn btn-primary mt-2">Démarrer l'essai gratuit</a>
                </div>
                <div class="col-lg-8 mt-lg-0 mt-4">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 text-center">
                        <div class="col">
                            <div class="card shadow-lg border-0">
                                <div class="card-body">
                                    <h5 class="my-0 fw-normal mb-4">Petite Copropriété</h5>
                                    <h4 class="card-title pricing-card-title mb-0 text-primary mb-4">250 MAD<small class="text-secondary"> / mois</small></h4>
                                    <ul class="list-unstyled my-3 p-0 text-start ms-4">
                                        <li class="mb-3"><i class="text-success me-2">✓</i> Jusqu'à 20 lots</li>
                                        <li class="mb-3"><i class="text-success me-2">✓</i> Gestion de trésorerie</li>
                                        <li class="mb-3"><i class="text-success me-2">✓</i> Application Mobile</li>
                                        <li class="mb-3"><i class="text-success me-2">✓</i> Support par email</li>
                                    </ul>
                                    <button type="button" class="btn btn-outline-primary w-100">Choisir ce plan</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card my-5 border-primary shadow-lg">
                                <div class="card-body page-bg">
                                    <h5 class="my-0 fw-normal mb-4 text-primary">Grande Résidence</h5>
                                    <h4 class="card-title pricing-card-title mb-0 text-primary mb-4">500 MAD <small class="text-secondary"> / mois</small></h4>
                                    <ul class="list-unstyled my-3 p-0 text-start ms-4">
                                        <li class="mb-3"><i class="text-success me-2">✓</i> Lots illimités</li>
                                        <li class="mb-3"><i class="text-success me-2">✓</i> Suivi des impayés avancé</li>
                                        <li class="mb-3"><i class="text-success me-2">✓</i> Gestion des prestataires</li>
                                        <li class="mb-3"><i class="text-success me-2">✓</i> Support prioritaire 24/7</li>
                                    </ul>
                                    <button type="button" class="btn btn-primary w-100">Choisir ce plan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>