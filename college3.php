<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="LITE Computer College - Premier computer education institute offering courses in programming, web development, data science, and more. Transform your career with expert training.">
    <meta name="keywords" content="computer courses, programming, web development, data science, computer training, IT education, coding classes, software training">
    <meta name="author" content="LITE Computer College">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Social Media -->
    <meta property="og:title" content="LITE Computer College - Excellence in IT Education">
    <meta property="og:description" content="Transform your career with our comprehensive computer courses. Expert faculty, hands-on training, and 100% placement assistance.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://litecomputercollege.com">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="LITE Computer College - Excellence in IT Education">
    <meta name="twitter:description" content="Transform your career with our comprehensive computer courses.">
    
    <title>LITE Computer College | Best Computer Training Institute</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-red: #E63946;
            --primary-blue: #1D3557;
            --light-blue: #457B9D;
            --white: #FFFFFF;
            --off-white: #F8F9FA;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--primary-blue);
        }
        
        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Navbar Styles */
        .navbar {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--light-blue) 100%);
            padding: 1rem 0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-weight: 800;
            font-size: 1.8rem;
            color: var(--white) !important;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .navbar-brand span {
            color: var(--primary-red);
        }
        
        .nav-link {
            color: var(--white) !important;
            font-weight: 500;
            padding: 0.5rem 1.2rem !important;
            border-radius: 25px;
            transition: all 0.3s ease;
            margin: 0 0.2rem;
        }
        
        .nav-link:hover, .nav-link.active {
            background: var(--primary-red);
            transform: translateY(-2px);
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--light-blue) 50%, var(--primary-red) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: float 15s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            50% { transform: translate(-20px, 20px) rotate(5deg); }
        }
        
        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--white);
            margin-bottom: 1.5rem;
            animation: slideInLeft 1s ease-out;
        }
        
        .hero-content h1 span {
            color: var(--primary-red);
            background: var(--white);
            padding: 0 1rem;
            border-radius: 10px;
            display: inline-block;
        }
        
        .hero-content p {
            font-size: 1.3rem;
            color: rgba(255,255,255,0.9);
            margin-bottom: 2rem;
            animation: slideInLeft 1s ease-out 0.3s both;
        }
        
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .btn-custom {
            background: var(--primary-red);
            color: var(--white);
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(230, 57, 70, 0.4);
        }
        
        .btn-custom:hover {
            background: var(--white);
            color: var(--primary-red);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(230, 57, 70, 0.5);
        }
        
        .btn-outline-custom {
            background: transparent;
            color: var(--white);
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: 3px solid var(--white);
            transition: all 0.3s ease;
        }
        
        .btn-outline-custom:hover {
            background: var(--white);
            color: var(--primary-blue);
            transform: translateY(-5px);
        }
        
        .hero-image {
            animation: slideInRight 1s ease-out 0.5s both;
            text-align: center;
        }
        
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .hero-icon {
            font-size: 15rem;
            color: rgba(255,255,255,0.2);
            animation: pulse 2s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        /* Stats Section */
        .stats-section {
            background: var(--white);
            padding: 3rem 0;
            position: relative;
            margin-top: -50px;
            z-index: 10;
        }
        
        .stat-card {
            background: var(--white);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            text-align: center;
            transition: all 0.3s ease;
            border-bottom: 5px solid var(--primary-red);
        }
        
        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary-blue);
        }
        
        .stat-label {
            color: var(--light-blue);
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        /* Section Styles */
        .section {
            padding: 6rem 0;
        }
        
        .section-bg {
            background: var(--off-white);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 4rem;
        }
        
        .section-title h2 {
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--primary-blue);
            position: relative;
            display: inline-block;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-red), var(--primary-blue));
            border-radius: 5px;
        }
        
        .section-title p {
            margin-top: 1.5rem;
            color: #6c757d;
            font-size: 1.1rem;
        }
        
        /* About Section */
        .about-image {
            position: relative;
        }
        
        .about-image img {
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        }
        
        .about-image::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            width: 100px;
            height: 100px;
            background: var(--primary-red);
            border-radius: 20px;
            z-index: -1;
        }
        
        .about-image::after {
            content: '';
            position: absolute;
            bottom: -20px;
            right: -20px;
            width: 150px;
            height: 150px;
            background: var(--primary-blue);
            border-radius: 20px;
            z-index: -1;
        }
        
        .feature-list {
            list-style: none;
            padding: 0;
        }
        
        .feature-list li {
            padding: 0.8rem 0;
            border-bottom: 1px solid #e9ecef;
        }
        
        .feature-list li i {
            color: var(--primary-red);
            margin-right: 1rem;
            font-size: 1.2rem;
        }
        
        /* Courses Section */
        .course-card {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
            height: 100%;
            position: relative;
        }
        
        .course-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 60px rgba(0,0,0,0.2);
        }
        
        .course-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-red), var(--primary-blue));
        }
        
        .course-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-red), var(--primary-blue));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: -40px auto 1.5rem;
            position: relative;
        }
        
        .course-icon i {
            font-size: 2rem;
            color: var(--white);
        }
        
        .course-card h4 {
            color: var(--primary-blue);
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .course-card p {
            color: #6c757d;
            margin-bottom: 1.5rem;
        }
        
        .course-features {
            padding: 0;
            margin-bottom: 1.5rem;
        }
        
        .course-features li {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 0.5rem;
        }
        
        .course-features li i {
            color: var(--primary-red);
        }
        
        .course-price {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-blue);
        }
        
        .course-price span {
            font-size: 1rem;
            color: #6c757d;
            font-weight: 400;
        }
        
        /* Why Choose Us */
        .why-card {
            text-align: center;
            padding: 2.5rem;
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }
        
        .why-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        }
        
        .why-icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, var(--primary-blue), var(--light-blue));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
        }
        
        .why-icon i {
            font-size: 2.5rem;
            color: var(--white);
        }
        
        .why-card h4 {
            color: var(--primary-blue);
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        /* Contact Section */
        .contact-section {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--light-blue) 100%);
            position: relative;
            overflow: hidden;
        }
        
        .contact-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            height: 100%;
            background: var(--white);
            clip-path: polygon(20% 0, 100% 0, 100% 100%, 0% 100%);
        }
        
        .contact-info {
            color: var(--white);
            position: relative;
            z-index: 5;
        }
        
        .contact-info h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .contact-item i {
            width: 50px;
            height: 50px;
            background: var(--primary-red);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            margin-right: 1rem;
        }
        
        .contact-form {
            background: var(--white);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
            position: relative;
            z-index: 5;
        }
        
        .form-control {
            padding: 1rem;
            border-radius: 10px;
            border: 2px solid #e9ecef;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 0.2rem rgba(29, 53, 87, 0.15);
        }
        
        .form-label {
            font-weight: 500;
            color: var(--primary-blue);
            margin-bottom: 0.5rem;
        }
        
        /* Testimonials */
        .testimonial-card {
            background: var(--white);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            text-align: center;
            position: relative;
        }
        
        .testimonial-card::before {
            content: '"';
            font-size: 8rem;
            color: rgba(230, 57, 70, 0.1);
            position: absolute;
            top: -30px;
            left: 20px;
            font-family: Georgia, serif;
        }
        
        .testimonial-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-red), var(--primary-blue));
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 2.5rem;
            font-weight: 700;
        }
        
        .testimonial-card p {
            color: #6c757d;
            font-style: italic;
            margin-bottom: 1.5rem;
        }
        
        .testimonial-card h5 {
            color: var(--primary-blue);
            font-weight: 700;
            margin-bottom: 0.2rem;
        }
        
        .testimonial-card span {
            color: var(--primary-red);
            font-size: 0.9rem;
        }
        
        /* Footer */
        .footer {
            background: var(--primary-blue);
            color: var(--white);
            padding: 4rem 0 1rem;
        }
        
        .footer h4 {
            color: var(--white);
            font-weight: 700;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 1rem;
        }
        
        .footer h4::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary-red);
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 0.8rem;
        }
        
        .footer-links a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: var(--primary-red);
            padding-left: 5px;
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .social-links a {
            width: 45px;
            height: 45px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background: var(--primary-red);
            transform: translateY(-5px);
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            margin-top: 3rem;
            padding-top: 1.5rem;
            text-align: center;
            color: rgba(255,255,255,0.7);
        }
        
        /* Scroll to Top */
        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--primary-red);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
            border: none;
            box-shadow: 0 5px 20px rgba(230, 57, 70, 0.4);
        }
        
        .scroll-top.visible {
            opacity: 1;
            visibility: visible;
        }
        
        .scroll-top:hover {
            background: var(--primary-blue);
            transform: translateY(-5px);
        }
        
        /* Animation on Scroll */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Responsive */
        @media (max-width: 991px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .contact-section::before {
                width: 100%;
                clip-path: none;
            }
            
            .contact-form {
                margin-top: 3rem;
            }
        }
        
        @media (max-width: 767px) {
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .hero-content p {
                font-size: 1.1rem;
            }
            
            .stat-number {
                font-size: 2rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .section {
                padding: 4rem 0;
            }
            
            .stats-section {
                margin-top: 0;
            }
        }
        
        /* Preloader */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }
        
        .preloader.hidden {
            opacity: 0;
            visibility: hidden;
        }
        
        .loader {
            width: 60px;
            height: 60px;
            border: 5px solid rgba(255,255,255,0.3);
            border-top-color: var(--primary-red);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
    
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "EducationalOrganization",
        "name": "LITE Computer College",
        "description": "Premier computer education institute offering courses in programming, web development, data science, and more.",
        "url": "https://litecomputercollege.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "123 Tech Street",
            "addressLocality": "City",
            "addressRegion": "State",
            "postalCode": "12345",
            "addressCountry": "US"
        },
        "telephone": "+1-234-567-8900",
        "sameAs": [
            "https://facebook.com/litecomputercollege",
            "https://twitter.com/litecomputercollege",
            "https://linkedin.com/company/litecomputercollege"
        ]
    }
    </script>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <div class="loader"></div>
    </div>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <i class="bi bi-pc-display-horizontal"></i> LITE <span>College</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#courses">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#why-us">Why Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1>Welcome to <span>LITE</span> Computer College</h1>
                        <p>Transform your future with cutting-edge computer education. Expert faculty, hands-on training, and 100% placement assistance.</p>
                        <div class="d-flex gap-3 flex-wrap">
                            <a href="#courses" class="btn btn-custom">
                                <i class="bi bi-book"></i> Explore Courses
                            </a>
                            <a href="#contact" class="btn btn-outline-custom">
                                <i class="bi bi-telephone"></i> Contact Us
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <i class="bi bi-laptop hero-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card animate-on-scroll">
                        <div class="stat-number" data-count="15000">0</div>
                        <div class="stat-label">Students Trained</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card animate-on-scroll">
                        <div class="stat-number" data-count="25">0</div>
                        <div class="stat-label">Expert Faculty</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card animate-on-scroll">
                        <div class="stat-number" data-count="50">0</div>
                        <div class="stat-label">Courses Offered</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card animate-on-scroll">
                        <div class="stat-number" data-count="95">0</div>
                        <div class="stat-label">% Placement Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 animate-on-scroll">
                    <div class="about-image">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=500&fit=crop" alt="Students learning computers at LITE Computer College" class="img-fluid" width="600" height="500">
                    </div>
                </div>
                <div class="col-lg-6 animate-on-scroll">
                    <div class="section-title text-start">
                        <h2>About LITE Computer College</h2>
                    </div>
                    <p class="lead mb-4">LITE Computer College is a premier institution dedicated to providing quality computer education and empowering students with cutting-edge technical skills.</p>
                    <p class="mb-4">Since our establishment, we have been committed to excellence in IT education. Our industry-aligned curriculum, state-of-the-art labs, and experienced faculty ensure that our students are well-prepared for the dynamic tech industry.</p>
                    <ul class="feature-list">
                        <li><i class="bi bi-check-circle-fill"></i> Industry-Recognized Certifications</li>
                        <li><i class="bi bi-check-circle-fill"></i> Hands-on Practical Training</li>
                        <li><i class="bi bi-check-circle-fill"></i> Small Batch Sizes for Personal Attention</li>
                        <li><i class="bi bi-check-circle-fill"></i> Flexible Timings for Working Professionals</li>
                        <li><i class="bi bi-check-circle-fill"></i> 100% Placement Assistance</li>
                    </ul>
                    <a href="#contact" class="btn btn-custom mt-4">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Courses Section -->
    <section class="section section-bg" id="courses">
        <div class="container">
            <div class="section-title animate-on-scroll">
                <h2>Our Popular Courses</h2>
                <p>Choose from our wide range of industry-relevant courses designed to boost your career</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="course-card p-4 animate-on-scroll">
                        <div class="course-icon">
                            <i class="bi bi-code-slash"></i>
                        </div>
                        <h4 class="text-center">Web Development</h4>
                        <p class="text-center">Master HTML, CSS, JavaScript, React, Node.js and build modern websites.</p>
                        <ul class="course-features list-unstyled">
                            <li><i class="bi bi-check"></i> 6 Months Duration</li>
                            <li><i class="bi bi-check"></i> 10+ Live Projects</li>
                            <li><i class="bi bi-check"></i> Job Assistance</li>
                        </ul>
                        <div class="text-center">
                            <div class="course-price">$999 <span>/ course</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="course-card p-4 animate-on-scroll">
                        <div class="course-icon">
                            <i class="bi bi-database"></i>
                        </div>
                        <h4 class="text-center">Data Science</h4>
                        <p class="text-center">Learn Python, Machine Learning, AI, and Big Data analytics.</p>
                        <ul class="course-features list-unstyled">
                            <li><i class="bi bi-check"></i> 8 Months Duration</li>
                            <li><i class="bi bi-check"></i> 15+ Case Studies</li>
                            <li><i class="bi bi-check"></i> Industry Certification</li>
                        </ul>
                        <div class="text-center">
                            <div class="course-price">$1499 <span>/ course</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="course-card p-4 animate-on-scroll">
                        <div class="course-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h4 class="text-center">Mobile App Development</h4>
                        <p class="text-center">Build native and cross-platform mobile apps with Flutter & React Native.</p>
                        <ul class="course-features list-unstyled">
                            <li><i class="bi bi-check"></i> 6 Months Duration</li>
                            <li><i class="bi bi-check"></i> App Store Deployment</li>
                            <li><i class="bi bi-check"></i> Portfolio Building</li>
                        </ul>
                        <div class="text-center">
                            <div class="course-price">$1299 <span>/ course</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="course-card p-4 animate-on-scroll">
                        <div class="course-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        <h4 class="text-center">Cyber Security</h4>
                        <p class="text-center">Learn ethical hacking, network security, and cyber defense strategies.</p>
                        <ul class="course-features list-unstyled">
                            <li><i class="bi bi-check"></i> 6 Months Duration</li>
                            <li><i class="bi bi-check"></i> CEH Preparation</li>
                            <li><i class="bi bi-check"></i> Lab Access</li>
                        </ul>
                        <div class="text-center">
                            <div class="course-price">$1199 <span>/ course</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="course-card p-4 animate-on-scroll">
                        <div class="course-icon">
                            <i class="bi bi-cloud"></i>
                        </div>
                        <h4 class="text-center">Cloud Computing</h4>
                        <p class="text-center">Master AWS, Azure, Google Cloud and DevOps practices.</p>
                        <ul class="course-features list-unstyled">
                            <li><i class="bi bi-check"></i> 5 Months Duration</li>
                            <li><i class="bi bi-check"></i> 3 Cloud Certifications</li>
                            <li><i class="bi bi-check"></i> Real-time Projects</li>
                        </ul>
                        <div class="text-center">
                            <div class="course-price">$1399 <span>/ course</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="course-card p-4 animate-on-scroll">
                        <div class="course-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h4 class="text-center">Digital Marketing</h4>
                        <p class="text-center">SEO, SEM, Social Media Marketing, and Analytics mastery.</p>
                        <ul class="course-features list-unstyled">
                            <li><i class="bi bi-check"></i> 3 Months Duration</li>
                            <li><i class="bi bi-check"></i> Google Ads Certified</li>
                            <li><i class="bi bi-check"></i> Live Campaigns</li>
                        </ul>
                        <div class="text-center">
                            <div class="course-price">$799 <span>/ course</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Why Choose Us -->
    <section class="section" id="why-us">
        <div class="container">
            <div class="section-title animate-on-scroll">
                <h2>Why Choose LITE Computer College?</h2>
                <p>We provide the best learning environment and resources for your success</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="why-card animate-on-scroll">
                        <div class="why-icon">
                            <i class="bi bi-person-video3"></i>
                        </div>
                        <h4>Expert Faculty</h4>
                        <p>Learn from industry professionals with 10+ years of real-world experience.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="why-card animate-on-scroll">
                        <div class="why-icon">
                            <i class="bi bi-pc-display"></i>
                        </div>
                        <h4>Modern Labs</h4>
                        <p>State-of-the-art computer labs with latest software and high-speed internet.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="why-card animate-on-scroll">
                        <div class="why-icon">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <h4>Placement Support</h4>
                        <p>100% placement assistance with tie-ups with 500+ leading companies.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="why-card animate-on-scroll">
                        <div class="why-icon">
                            <i class="bi bi-journal-check"></i>
                        </div>
                        <h4>Certified Courses</h4>
                        <p>Industry-recognized certifications that boost your resume and career prospects.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="why-card animate-on-scroll">
                        <div class="why-icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <h4>Small Batches</h4>
                        <p>Personal attention with limited students per batch for better learning.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="why-card animate-on-scroll">
                        <div class="why-icon">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <h4>Flexible Timings</h4>
                        <p>Weekday, weekend, and online batches to suit your schedule.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonials -->
    <section class="section section-bg" id="testimonials">
        <div class="container">
            <div class="section-title animate-on-scroll">
                <h2>What Our Students Say</h2>
                <p>Success stories from our accomplished alumni</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card animate-on-scroll">
                        <div class="testimonial-img">JD</div>
                        <p>"LITE Computer College transformed my career. The web development course gave me practical skills that helped me land my dream job at a top tech company."</p>
                        <h5>John Doe</h5>
                        <span>Web Developer at Google</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card animate-on-scroll">
                        <div class="testimonial-img">SM</div>
                        <p>"The data science program here is exceptional. The instructors are knowledgeable and always ready to help. I'm now working as a Data Analyst at Amazon."</p>
                        <h5>Sarah Miller</h5>
                        <span>Data Analyst at Amazon</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card animate-on-scroll">
                        <div class="testimonial-img">MJ</div>
                        <p>"Best decision I ever made was joining LITE. The cyber security course opened doors I never knew existed. Now I'm a Security Consultant at Microsoft."</p>
                        <h5>Mike Johnson</h5>
                        <span>Security Consultant at Microsoft</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="section contact-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-info animate-on-scroll">
                        <h2>Get In Touch</h2>
                        <p class="mb-5">Ready to start your journey? Contact us today for a free counseling session and discover the right course for you.</p>
                        
                        <div class="contact-item">
                            <i class="bi bi-geo-alt-fill"></i>
                            <div>
                                <strong>Address:</strong><br>
                                123 Tech Street, Education Hub,<br>
                                City, State - 12345
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <i class="bi bi-telephone-fill"></i>
                            <div>
                                <strong>Phone:</strong><br>
                                +1 (234) 567-8900
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <i class="bi bi-envelope-fill"></i>
                            <div>
                                <strong>Email:</strong><br>
                                info@litecomputercollege.com
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <i class="bi bi-clock-fill"></i>
                            <div>
                                <strong>Working Hours:</strong><br>
                                Mon - Sat: 9:00 AM - 8:00 PM<br>
                                Sunday: Closed
                            </div>
                        </div>
                        
                        <div class="social-links">
                            <a href="https://facebook.com" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://twitter.com" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                            <a href="https://instagram.com" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                            <a href="https://linkedin.com" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            <a href="https://youtube.com" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form animate-on-scroll">
                        <h3 class="mb-4 text-center">Enquiry Form</h3>
                        <form id="enquiryForm" novalidate>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">First Name *</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" required aria-required="true">
                                    <div class="invalid-feedback">Please enter your first name</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Last Name *</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" required aria-required="true">
                                    <div class="invalid-feedback">Please enter your last name</div>
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" name="email" required aria-required="true">
                                    <div class="invalid-feedback">Please enter a valid email address</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number *</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required aria-required="true" pattern="[0-9]{10}">
                                    <div class="invalid-feedback">Please enter a valid 10-digit phone number</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="course" class="form-label">Interested Course *</label>
                                    <select class="form-control" id="course" name="course" required aria-required="true">
                                        <option value="">Select a Course</option>
                                        <option value="web-development">Web Development</option>
                                        <option value="data-science">Data Science</option>
                                        <option value="mobile-app">Mobile App Development</option>
                                        <option value="cyber-security">Cyber Security</option>
                                        <option value="cloud-computing">Cloud Computing</option>
                                        <option value="digital-marketing">Digital Marketing</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a course</div>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Your Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tell us about your goals or ask any questions..."></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="agree" name="agree" required aria-required="true">
                                        <label class="form-check-label" for="agree">
                                            I agree to receive calls and emails from LITE Computer College regarding courses and offers.
                                        </label>
                                        <div class="invalid-feedback">You must agree before submitting</div>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-custom w-100">
                                        <i class="bi bi-send"></i> Submit Enquiry
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div id="formSuccessMessage" class="alert alert-success mt-4 d-none" role="alert">
                            <i class="bi bi-check-circle-fill"></i> Thank you! Your enquiry has been submitted successfully. We'll contact you shortly.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h4><i class="bi bi-pc-display-horizontal"></i> LITE Computer College</h4>
                    <p>Empowering students with cutting-edge computer education since 2010. Your success is our mission.</p>
                    <div class="social-links">
                        <a href="https://facebook.com" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://twitter.com" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                        <a href="https://instagram.com" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://linkedin.com" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#courses">Courses</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h4>Popular Courses</h4>
                    <ul class="footer-links">
                        <li><a href="#courses">Web Development</a></li>
                        <li><a href="#courses">Data Science</a></li>
                        <li><a href="#courses">Cyber Security</a></li>
                        <li><a href="#courses">Cloud Computing</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h4>Contact Info</h4>
                    <ul class="footer-links">
                        <li><i class="bi bi-geo-alt"></i> 123 Tech Street, City</li>
                        <li><i class="bi bi-telephone"></i> +1 (234) 567-8900</li>
                        <li><i class="bi bi-envelope"></i> info@litecollege.com</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 LITE Computer College. All Rights Reserved. | <a href="#" style="color: rgba(255,255,255,0.7);">Privacy Policy</a> | <a href="#" style="color: rgba(255,255,255,0.7);">Terms of Service</a></p>
            </div>
        </div>
    </footer>
    
    <!-- Scroll to Top Button -->
    <button class="scroll-top" id="scrollTop" aria-label="Scroll to top">
        <i class="bi bi-arrow-up"></i>
    </button>
    
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Wait for DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Preloader
            const preloader = document.getElementById('preloader');
            window.addEventListener('load', function() {
                setTimeout(function() {
                    preloader.classList.add('hidden');
                }, 500);
            });
            
            // Navbar scroll effect
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 100) {
                    navbar.style.padding = '0.5rem 0';
                    navbar.style.boxShadow = '0 4px 20px rgba(0,0,0,0.2)';
                } else {
                    navbar.style.padding = '1rem 0';
                    navbar.style.boxShadow = '0 4px 15px rgba(0,0,0,0.1)';
                }
            });
            
            // Active nav link highlighting
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');
            
            window.addEventListener('scroll', function() {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 100;
                    const sectionHeight = section.offsetHeight;
                    if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === '#' + current) {
                        link.classList.add('active');
                    }
                });
            });
            
            // Scroll to top button
            const scrollTopBtn = document.getElementById('scrollTop');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 500) {
                    scrollTopBtn.classList.add('visible');
                } else {
                    scrollTopBtn.classList.remove('visible');
                }
            });
            
            scrollTopBtn.addEventListener('click', function() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
            
            // Animation on scroll
            const animateElements = document.querySelectorAll('.animate-on-scroll');
            
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            
            animateElements.forEach(element => {
                observer.observe(element);
            });
            
            // Counter animation
            const counters = document.querySelectorAll('.stat-number');
            let countersAnimated = false;
            
            function animateCounters() {
                counters.forEach(counter => {
                    const target = parseInt(counter.getAttribute('data-count'));
                    const duration = 2000;
                    const step = target / (duration / 16);
                    let current = 0;
                    
                    const updateCounter = () => {
                        current += step;
                        if (current < target) {
                            counter.textContent = Math.floor(current).toLocaleString() + (target === 95 ? '%' : '+');
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = target.toLocaleString() + (target === 95 ? '%' : '+');
                        }
                    };
                    
                    updateCounter();
                });
            }
            
            const statsSection = document.querySelector('.stats-section');
            const statsObserver = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !countersAnimated) {
                        countersAnimated = true;
                        animateCounters();
                    }
                });
            }, { threshold: 0.5 });
            
            statsObserver.observe(statsSection);
            
            // Form validation and submission
            const form = document.getElementById('enquiryForm');
            const successMessage = document.getElementById('formSuccessMessage');
            
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                if (!form.checkValidity()) {
                    e.stopPropagation();
                    form.classList.add('was-validated');
                    return;
                }
                
                // Simulate form submission
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...';
                submitBtn.disabled = true;
                
                setTimeout(function() {
                    form.reset();
                    form.classList.remove('was-validated');
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    successMessage.classList.remove('d-none');
                    
                    setTimeout(function() {
                        successMessage.classList.add('d-none');
                    }, 5000);
                }, 1500);
            });
            
            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        const offsetTop = target.offsetTop - 70;
                        window.scrollTo({
                            top: offsetTop,
                            behavior: 'smooth'
                        });
                        
                        // Close mobile menu if open
                        const navbarCollapse = document.getElementById('navbarNav');
                        if (navbarCollapse.classList.contains('show')) {
                            const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                            bsCollapse.hide();
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>