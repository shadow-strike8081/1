<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="LITE Computer College - Enroll in top-rated computer courses like Web Development, Graphic Design, and Data Science. Affordable, expert-led training.">
    <meta name="keywords" content="Computer Courses, Coding Bootcamp, Web Development, Data Science, LITE Computer College, Graphic Design">
    <meta name="author" content="LITE Computer College">
    <meta property="og:title" content="LITE Computer College | Master the Future">
    <meta property="og:description" content="Join the leading computer college for hands-on tech training.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://litecomputercollege.com">
    <meta property="og:image" content="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="LITE Computer College - Excellence in IT Education">
    <meta name="twitter:description" content="Transform your career with our comprehensive computer courses.">
    
    <title>LITE Computer College | Master Tech Skills</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- FontAwesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-blue: #0056b3;
            --primary-red: #d62828;
            --secondary-blue: #007bff;
            --secondary-red: #ff4d4d;
            --light-white: #f8f9fa;
            --dark-text: #212529;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            color: var(--dark-text);
        }

        /* Navbar */
        .navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: box-shadow 0.3s ease;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary-blue) !important;
        }
        
        .navbar-brand span {
            color: var(--primary-red);
        }

        .nav-link {
            color: var(--dark-text) !important;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: var(--primary-red) !important;
        }

        .btn-theme {
            background-color: var(--primary-red);
            color: white;
            border-radius: 50px;
            padding: 8px 25px;
            transition: all 0.3s;
        }

        .btn-theme:hover {
            background-color: var(--primary-blue);
            color: white;
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-blue) 0%, #002a5c 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 50%;
            height: 200%;
            background: rgba(214, 40, 40, 0.1);
            transform: rotate(-15deg);
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .btn-hero {
            background-color: var(--primary-red);
            color: white;
            padding: 12px 35px;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(214, 40, 40, 0.4);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .btn-hero:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(214, 40, 40, 0.6);
            background-color: #c11f1f;
            color: white;
        }

        /* Stats Section */
        .stats-section {
            background: var(--light-white);
            padding: 3rem 0;
            position: relative;
            margin-top: 50px;
            z-index: 10;
        }
        
        .stat-card {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            text-align: center;
            transition: all 0.4s ease;
            border-bottom: 5px solid var(--primary-red);
            position: relative;
            overflow: hidden;
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(0, 86, 179, 0.05);
            transition: left 0.4s ease;
            z-index: 0;
        }
        
        .stat-card:hover::before {
            left: 100%;
        }
        
        .stat-card:hover {
            transform: translateY(-15px) scale(1.05);
            box-shadow: 0 25px 60px rgba(214, 40, 40, 0.2);
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary-blue);
        }
        
        .stat-label {
            color: var(--secondary-blue);
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Stats Animation */
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .stat-card.animated {
            animation: slideInUp 0.6s ease forwards;
        }
        
        /* Section Styles */
        .section {
            padding: 6rem 0;
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

        /* Features Section */
        .features-section {
            padding: 80px 0;
            background-color: white;
        }

        .feature-card {
            text-align: center;
            padding: 30px;
            border-radius: 10px;
            transition: transform 0.3s;
            height: 100%;
            border: 1px solid #eee;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border-color: var(--primary-blue);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            line-height: 70px;
            background-color: rgba(0, 86, 179, 0.1);
            color: var(--primary-blue);
            font-size: 2rem;
            border-radius: 50%;
            margin: 0 auto 20px;
            transition: background-color 0.3s, color 0.3s;
        }

        .feature-card:hover .feature-icon {
            background-color: var(--primary-red);
            color: white;
        }

        /* Courses Section */
        .courses-section {
            padding: 80px 0;
            background-color: var(--light-white);
        }

        .course-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .course-img {
            height: 200px;
            background-color: #ddd;
            position: relative;
            overflow: hidden;
        }

        .course-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .course-card:hover .course-img img {
            transform: scale(1.1);
        }

        .course-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--primary-red);
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .course-body {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .course-title {
            font-weight: 700;
            font-size: 1.25rem;
            margin-bottom: 10px;
            color: var(--dark-text);
        }

        .course-desc {
            color: #6c757d;
            font-size: 0.95rem;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .course-footer {
            border-top: 1px solid #eee;
            padding-top: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .course-price {
            font-weight: 700;
            color: var(--primary-blue);
            font-size: 1.2rem;
        }

        /* Contact Section Variables Override */
        /* Preserving existing logic where Contact section uses different shades */
        .contact-section {
            --primary-red-override: #E63946;
            --primary-blue-override: #1D3557;
            --light-blue-override: #457B9D;
            --white-override: #FFFFFF;
        }

        .contact-section {
            background: linear-gradient(135deg, var(--primary-blue-override) 0%, var(--light-blue-override) 100%);
            position: relative;
            overflow: hidden;
            padding: 6rem 0;
        }
        
        .contact-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            height: 100%;
            background: var(--white-override);
            clip-path: polygon(20% 0, 100% 0, 100% 100%, 0% 100%);
        }
        
        .contact-info {
            color: white;
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
            background: var(--primary-red-override);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            margin-right: 1rem;
        }
        
        .contact-form {
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
            position: relative;
            z-index: 5;
        }
        
        .contact-form .form-control {
            padding: 1rem;
            border-radius: 10px;
            border: 2px solid #e9ecef;
            transition: all 0.3s ease;
        }
        
        .contact-form .form-control:focus {
            border-color: var(--primary-blue-override);
            box-shadow: 0 0 0 0.2rem rgba(29, 53, 87, 0.15);
        }
        
        .contact-form .form-label {
            font-weight: 500;
            color: var(--primary-blue-override);
            margin-bottom: 0.5rem;
        }
        
        .contact-form .btn-custom {
            background: var(--primary-red-override);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(230, 57, 70, 0.4);
        }
        
        .contact-form .btn-custom:hover {
            background: white;
            color: var(--primary-red-override);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(230, 57, 70, 0.5);
        }
        
        .contact-info .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .contact-info .social-links a {
            width: 45px;
            height: 45px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .contact-info .social-links a:hover {
            background: var(--primary-red-override);
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
        
        /* Responsive Fix for Contact Section */
        @media (max-width: 991px) {
            .contact-section::before {
                /* FIX: Hide the white overlay on mobile so the white text stays visible on the gradient background */
                display: none;
            }
            
            .contact-form {
                margin-top: 3rem;
            }
        }
        
        @media (max-width: 767px) {
            .section {
                padding: 4rem 0;
            }
            
            .contact-info h2 {
                font-size: 2rem;
            }
            
            .contact-form {
                padding: 2rem;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
        }

        /* Footer */
        .footer {
            background: #1D3557;
            color: white;
            padding: 4rem 0 1rem;
        }
        
        .footer h4 {
            color: white;
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
        
        .footer .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .footer .social-links a {
            width: 45px;
            height: 45px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer .social-links a:hover {
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
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">LITE <span>College</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#courses">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-theme" href="#contact">Apply Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section d-flex align-items-center" id="home">
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1 class="hero-title">Unlock Your Future in <br> <span style="color: #ff9999;">Technology</span></h1>
                    <p class="hero-subtitle">Learn industry-standard skills in coding, design, and data. Join LITE Computer College and start building your career today.</p>
                    <div class="d-flex gap-3">
                        <a href="#courses" class="btn btn-hero">Explore Courses</a>
                        <a href="#about" class="btn btn-outline-light btn-lg px-4" style="border-width: 2px;">Learn More</a>
                    </div>
                </div>
                <!-- Image only visible on large screens -->
                <div class="col-lg-5 d-none d-lg-block text-center">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Student Learning Computer Skills" class="img-fluid rounded-4 shadow-lg" style="border: 5px solid rgba(255,255,255,0.2);">
                </div>
            </div>
        </div>
    </header>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card animate-on-scroll">
                        <div class="stat-number" data-count="15000" data-suffix="+">15,000+</div>
                        <div class="stat-label">Students Trained</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card animate-on-scroll">
                        <div class="stat-number" data-count="25" data-suffix="+">25+</div>
                        <div class="stat-label">Expert Faculty</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card animate-on-scroll">
                        <div class="stat-number" data-count="50" data-suffix="+">50+</div>
                        <div class="stat-label">Courses Offered</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card animate-on-scroll">
                        <div class="stat-number" data-count="95" data-suffix="%">95%</div>
                        <div class="stat-label">Placement Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="about" class="features-section">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose LITE?</h2>
                <p class="text-muted">We provide more than just education; we provide a career path.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card animate-on-scroll">
                        <div class="feature-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <h4>Expert Instructors</h4>
                        <p class="text-muted">Learn from industry professionals with years of real-world experience in technology companies.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card animate-on-scroll">
                        <div class="feature-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4>Recognized Certification</h4>
                        <p class="text-muted">Earn certificates that are recognized globally and valued by top employers in the tech industry.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card animate-on-scroll">
                        <div class="feature-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h4>Job Placement</h4>
                        <p class="text-muted">We offer career counseling and job placement assistance to help you land your dream job.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="courses-section">
        <div class="container">
            <div class="section-title">
                <h2>Popular Courses</h2>
                <p class="text-muted">Browse our most in-demand computer courses.</p>
            </div>
            <div class="row g-4">
                <!-- Course 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="course-card animate-on-scroll">
                        <div class="course-img">
                            <span class="course-badge">Best Seller</span>
                            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Web Development Course">
                        </div>
                        <div class="course-body">
                            <h5 class="course-title">Full Stack Web Development</h5>
                            <p class="course-desc">Master HTML, CSS, JavaScript, React, and Node.js. Build dynamic websites from scratch.</p>
                            <div class="course-footer">
                                <span class="text-muted"><i class="far fa-clock me-1"></i> 6 Months</span>
                                <span class="course-price">$499</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="course-card animate-on-scroll">
                        <div class="course-img">
                            <span class="course-badge">Trending</span>
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Data Science Course">
                        </div>
                        <div class="course-body">
                            <h5 class="course-title">Data Science & Analytics</h5>
                            <p class="course-desc">Learn Python, SQL, and Machine Learning to analyze data and drive business decisions.</p>
                            <div class="course-footer">
                                <span class="text-muted"><i class="far fa-clock me-1"></i> 4 Months</span>
                                <span class="course-price">$599</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="course-card animate-on-scroll">
                        <div class="course-img">
                            <span class="course-badge">Creative</span>
                            <img src="https://images.unsplash.com/photo-1626785774573-4b799314346d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Graphic Design Course">
                        </div>
                        <div class="course-body">
                            <h5 class="course-title">Graphic Design Masterclass</h5>
                            <p class="course-desc">Unlock your creativity with Photoshop, Illustrator, and Figma. Create stunning visuals.</p>
                            <div class="course-footer">
                                <span class="text-muted"><i class="far fa-clock me-1"></i> 3 Months</span>
                                <span class="course-price">$399</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="course-card animate-on-scroll">
                        <div class="course-img">
                            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Digital Marketing Course">
                        </div>
                        <div class="course-body">
                            <h5 class="course-title">Digital Marketing</h5>
                            <p class="course-desc">Learn SEO, Social Media Marketing, and Content Strategy to grow brands online.</p>
                            <div class="course-footer">
                                <span class="text-muted"><i class="far fa-clock me-1"></i> 3 Months</span>
                                <span class="course-price">$350</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="course-card animate-on-scroll">
                        <div class="course-img">
                            <img src="https://images.unsplash.com/photo-1610563166150-b34df4f34731?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Cyber Security Course">
                        </div>
                        <div class="course-body">
                            <h5 class="course-title">Cyber Security Essentials</h5>
                            <p class="course-desc">Protect networks and data. Learn ethical hacking and information security principles.</p>
                            <div class="course-footer">
                                <span class="text-muted"><i class="far fa-clock me-1"></i> 5 Months</span>
                                <span class="course-price">$650</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="course-card animate-on-scroll">
                        <div class="course-img">
                            <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Computer Basics Course">
                        </div>
                        <div class="course-body">
                            <h5 class="course-title">IT Fundamentals</h5>
                            <p class="course-desc">New to tech? Learn computer hardware, software basics, and office productivity tools.</p>
                            <div class="course-footer">
                                <span class="text-muted"><i class="far fa-clock me-1"></i> 2 Months</span>
                                <span class="course-price">$199</span>
                            </div>
                        </div>
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

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Wait for DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
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
            
            // Form validation and submission
            const form = document.getElementById('enquiryForm');
            const successMessage = document.getElementById('formSuccessMessage');
            
            if (form) {
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
            }

            // Stat counter animation
            const statsSection = document.querySelector('.stats-section');
            if (statsSection) {
                const statsObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting && !entry.target.classList.contains('stats-animated')) {
                            animateStats();
                            entry.target.classList.add('stats-animated');
                        }
                    });
                }, { threshold: 0.3 });

                statsObserver.observe(statsSection);
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (navbar) {
                if (window.scrollY > 50) {
                    navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,0.15)';
                } else {
                    navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
                }
            }
        });

        // Stat counter animation function
        function animateStats() {
            const statNumbers = document.querySelectorAll('.stat-number');
            
            statNumbers.forEach(statElement => {
                const finalValue = parseFloat(statElement.getAttribute('data-count'));
                const suffix = statElement.getAttribute('data-suffix') || '';
                let currentValue = 0;
                const increment = finalValue / 50;
                const speed = 40; // milliseconds

                const interval = setInterval(() => {
                    currentValue += increment;
                    
                    if (currentValue >= finalValue) {
                        currentValue = finalValue;
                        clearInterval(interval);
                    }
                    
                    // Format the number with comma separators
                    let displayValue;
                    if (finalValue > 100) {
                        displayValue = Math.floor(currentValue).toLocaleString();
                    } else {
                        displayValue = Math.floor(currentValue);
                    }
                    
                    statElement.textContent = displayValue + suffix;
                }, speed);
            });
        }
    </script>
</body>
</html>