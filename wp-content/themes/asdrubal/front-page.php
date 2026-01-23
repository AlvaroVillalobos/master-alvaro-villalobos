<?php get_header(); ?>

<?php 
// Busca en: /tu-tema/plantillas/display-posts/card-posts.php
// Llamamos al archivo que tiene el Loop y la Query
get_template_part( 'plantillas/trespost' );
?>

<main class="home-container">

    <section class="intro-title">
        <div class="sticker-wrapper">
            <span class="bubble-white">Qué</span>
            <span class="bubble-dark">hacemos</span>
        </div>
    </section>

    <section class="services-grid">
        
        <article class="service-item">
            <div class="icon-circle bg-pink">💡</div>
            <h3>Estrategia</h3>
            <ul>
                <li>Auditorías de canales digitales.</li>
                <li>Implementaciones analíticas.</li>
                <li>Planes integrales.</li>
                <li>Consultoría estratégica.</li>
            </ul>
        </article>

        <article class="service-item">
            <div class="icon-circle bg-yellow">🧭</div>
            <h3>Posicionamiento SEO</h3>
            <ul>
                <li>Auditorías completas.</li>
                <li>SEO local.</li>
                <li>Planes de contenidos.</li>
                <li>SEO para Ecommerce.</li>
            </ul>
        </article>

        <article class="service-item">
            <div class="icon-circle bg-red">📢</div>
            <h3>Paid Media</h3>
            <ul>
                <li>Auditoría de campañas activas.</li>
                <li>Set Ups completos.</li>
                <li>Optimización continua.</li>
                <li>Línea creativa.</li>
            </ul>
        </article>

        <article class="service-item">
            <div class="icon-circle bg-dark">✏️</div>
            <h3>Contenidos</h3>
            <ul>
                <li>Auditoría de contenidos.</li>
                <li>Optimización SEO.</li>
                <li>Planes de comunicación.</li>
                <li>Redacción y diseño.</li>
            </ul>
        </article>

        <article class="service-item">
            <div class="icon-circle bg-pink-light">💖</div>
            <h3>Social Media</h3>
            <ul>
                <li>Auditoría de perfiles sociales.</li>
                <li>Diseño estratégico completo.</li>
                <li>Definición de línea visual.</li>
                <li>Community Management.</li>
                <li>Oportunidades y campañas.</li>
            </ul>
        </article>

        <article class="service-item">
            <div class="icon-circle bg-yellow-light">📧</div>
            <h3>Email Marketing</h3>
            <ul>
                <li>Auditoría de base de datos.</li>
                <li>Definición de flujos.</li>
                <li>Estrategia de automatizaciones.</li>
                <li>Diseño de copys y creatividades.</li>
                <li>Implementaciones y analítica.</li>
            </ul>
        </article>

        <article class="service-item">
            <div class="icon-circle bg-dark-red">📸</div>
            <h3>Influencers</h3>
            <ul>
                <li>Auditoría según estrategia.</li>
            </ul>
        </article>

        <article class="service-item">
            <div class="icon-circle bg-yellow-border">🎨</div>
            <h3>Diseño Digital</h3>
            <ul>
                <li>Branding.</li>
            </ul>
        </article>

        <article class="service-item">
            <div class="icon-circle bg-purple">🖥️</div>
            <h3>Diseño y Desarrollo</h3>
            <ul>
                <li>Páginas web corporativas.</li>
            </ul>
        </article>

    </section>
</main>

<?php get_footer(); ?>