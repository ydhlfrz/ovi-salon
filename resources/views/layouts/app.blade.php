<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OVI - Eyelash & Nail Studio</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --bg-primary: #F7F3EE;
            --bg-secondary: #EFE8E1;
            --accent-color: #8C7A6B;
            --text-dark: #2B2623;
            --text-muted: #736B65;
        }

        body {
            background-color: var(--bg-primary);
            color: var(--text-dark);
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        h1, h2, h3, h4, .font-serif {
            font-family: 'Cormorant Garamond', serif;
        }

        .btn-custom {
            background-color: var(--accent-color);
            color: #ffffff;
            border-radius: 30px;
            padding: 10px 24px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            border: none;
        }

        .btn-custom:hover {
            background-color: #756456;
            color: #ffffff;
        }

        .nav-link {
            color: var(--text-dark);
            font-size: 0.95rem;
            margin: 0 8px;
        }

        .nav-link:hover {
            color: var(--accent-color);
        }

        /* --- STYLING HOVER CARD SERVICE --- */
        .service-card {
            position: relative;
            overflow: hidden;
            cursor: pointer;
            border: none;
            background-color: var(--bg-secondary);
            border-radius: 0px;
        }

        .service-card-img-wrapper {
            position: relative;
            overflow: hidden;
            height: 380px;
        }

        .service-card-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .service-card:hover .service-card-img-wrapper img {
            transform: scale(1.08);
        }

        .service-card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(43, 38, 35, 0.45);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .service-card:hover .service-card-overlay {
            opacity: 1;
        }

        .icon-box {
            text-align: center;
            font-size: 0.85rem;
        }

        .icon-box i {
            font-size: 1.5rem;
            color: var(--accent-color);
        }

        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background-color: #ffffff;
            color: var(--text-dark);
            text-decoration: none;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            font-size: 1.1rem;
        }

        .social-link:hover {
            background-color: var(--accent-color);
            color: #ffffff;
            transform: translateY(-3px);
        }

        .lang-switch {
            font-size: 0.85rem;
            font-weight: 600;
        }

        .lang-switch a {
            color: var(--text-muted);
            text-decoration: none;
            padding: 2px 6px;
            border-radius: 4px;
        }

        .lang-switch a.active {
            color: #ffffff;
            background-color: var(--accent-color);
        }

        .brand-logo-nav {
            height: 120px;
            width: auto;
            object-fit: contain;
        }

        .brand-logo-footer {
            height: 75px;
            width: auto;
            object-fit: contain;
        }

        footer {
            background-color: var(--bg-secondary);
        }
    </style>
</head>
<body>

    <!-- Header / Navbar -->
    <nav class="navbar navbar-expand-lg py-2 sticky-top" style="background-color: var(--bg-primary);">
        <div class="container">
            <!-- Logo Gambar Studio -->
            <a class="navbar-brand text-center py-0" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="OVI Studio Logo" class="brand-logo-nav">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#home">{{ __('nav_home') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#about">{{ __('nav_about') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#services">{{ __('nav_services') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#gallery">{{ __('nav_gallery') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#contact">{{ __('nav_contact') }}</a></li>
                </ul>
            </div>

            <div class="d-flex align-items-center gap-3">
                <!-- Toggle Switch Bahasa -->
                <div class="lang-switch bg-white px-2 py-1 rounded-pill shadow-sm">
                    <a href="{{ route('lang.switch', 'en') }}" class="{{ app()->getLocale() == 'en' ? 'active' : '' }}">EN</a>
                    <span class="text-muted">|</span>
                    <a href="{{ route('lang.switch', 'id') }}" class="{{ app()->getLocale() == 'id' ? 'active' : '' }}">ID</a>
                </div>

                <a href="https://wa.me/6285238652587?text=Halo%20OVI%20Studio,%20saya%20ingin%20book%20appointment" class="btn btn-custom btn-sm d-none d-lg-inline-block" target="_blank">
                    <i class="bi bi-whatsapp me-1"></i> {{ __('btn_book_wa') }}
                </a>
            </div>
        </div>
    </nav>

    <!-- Content Utama Blade -->
    @yield('content')

    <!-- Footer -->
    <footer class="py-4 border-top mt-5">
        <div class="container">
            <div class="row align-items-center text-center text-md-start">
                <div class="col-md-4 mb-3 mb-md-0">
                    <small class="text-muted">&copy; 2026 OVI Eyelash & Nail Studio. All rights reserved.</small>
                </div>
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <img src="{{ asset('images/logo.png') }}" alt="OVI Studio Logo" class="brand-logo-footer">
                </div>
                <div class="col-md-4 text-center text-md-end">
                    <span class="font-serif fs-5" style="font-style: italic;">See you soon ♡</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>