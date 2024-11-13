@extends('layouts.app')

@section('title', 'Accueil - Luminis Digital')

@section('content')
<div class="hero">
    <h1>Bienvenue chez Luminis Digital</h1>
    <p>Votre partenaire pour la transformation digitale</p>
    <a href="" class="btn btn-primary">Contactez-nous</a>
</div>

<section class="services-preview">
    <h2>Nos Services</h2>
    <div class="services-grid">
        <div class="service-card">
            <h3>Développement Web</h3>
            <p>Solutions web sur mesure pour votre entreprise</p>
        </div>
        <div class="service-card">
            <h3>Design UX/UI</h3>
            <p>Interfaces intuitives et modernes</p>
        </div>
        <div class="service-card">
            <h3>Marketing Digital</h3>
            <p>Stratégies digitales performantes</p>
        </div>
    </div>
</section>

<section class="about-preview">
    <h2>À Propos de Nous</h2>
    <p>Luminis Digital est votre partenaire de confiance pour tous vos projets numériques. 
       Notre expertise et notre passion nous permettent de créer des solutions innovantes et performantes.</p>
</section>
@endsection