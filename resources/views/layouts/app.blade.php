<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Home | PT. Pakarti Tirtoagung</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Favicons -->
    <link
        href="https://static.wixstatic.com/media/9e510a_d7b5254d0c0b4a668b43bb83c4deb029~mv2.png/v1/fill/w_153,h_94,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/9e510a_d7b5254d0c0b4a668b43bb83c4deb029~mv2.png"
        rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Plato
  * Template URL: https://bootstrapmade.com/plato-responsive-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="https://static.wixstatic.com/media/9e510a_d7b5254d0c0b4a668b43bb83c4deb029~mv2.png/v1/fill/w_153,h_94,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/9e510a_d7b5254d0c0b4a668b43bb83c4deb029~mv2.png"
                    alt="">
                <h1 class="sitename">PT. Pakarti Tirtoagung</h1>
            </a>
            @includeIf('components.navbar')
        </div>
    </header>
    <main class="main">
        <section id="hero" class="hero section dark-background" style="padding: 0; margin: 0;">
            @includeIf('components.hero')
        </section>

        <section id="about" class="about section">
            @includeIf('components.about')

        </section>

        <section id="clients" class="clients section light-background">
            @includeIf('components.clients')
        </section>

        <section id="why-us" class="why-us section">
            @includeIf('components.why-us')
        </section>

        <section id="call-to-action" class="call-to-action section dark-background">
            @includeIf('components.action')
        </section>

        <section id="services" class="services section">
            @includeIf('components.service')
        </section>

        {{-- <section id="portfolio" class="portfolio section">

            @includeIf('components.portofolio')
        </section>

               <section id="testimonials" class="testimonials section dark-background">

            @includeIf('components.testimonial')

        </section>

        <!-- Team Section -->
        <section id="team" class="team section">

            @includeIf('components.team')

        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="pricing section">

            @includeIf('components.pricing')

        </section> --}}
        <section id="faq" class="faq section">
            @includeIf('components.faq')
        </section>
        <section id="contact" class="contact section">

            @includeIf('components.contact')
        </section>
    </main>

    <footer id="footer" class="footer dark-background">

        @includeIf('components.footer')

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('js')
</body>

</html>
