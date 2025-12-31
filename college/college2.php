<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>LITE Computer College - Premier Computer Courses & IT Training</title>
    <meta name="description" content="LITE Computer College offers industry-leading computer courses, programming, web development, cybersecurity, and IT certification training. Join our professional courses today!">
    <meta name="keywords" content="computer courses, IT training, programming, web development, cybersecurity, data science, computer college, coding bootcamp">
    <meta name="author" content="LITE Computer College">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://litecomputercollege.edu">
    
    <!-- Open Graph / Social Media Meta Tags -->
    <meta property="og:title" content="LITE Computer College - Premier Computer Courses & IT Training">
    <meta property="og:description" content="Industry-leading computer courses, programming, web development, cybersecurity, and IT certification training.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://litecomputercollege.edu">
    <meta property="og:image" content="https://litecomputercollege.edu/images/og-image.jpg">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-red: #d32f2f;
            --primary-blue: #1976d2;
            --primary-white: #ffffff;
            --secondary-red: #b71c1c;
            --secondary-blue: #0d47a1;
            --light-gray: #f8f9fa;
            --dark-gray: #343a40;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        
        /* Header & Navigation */
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--primary-blue) !important;
        }
        
        .navbar-brand span {
            color: var(--primary-red);
        }
        
        .navbar {
            background-color: var(--primary-white) !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 1rem 0;
        }
        
        .nav-link {
            font-weight: 500;
            color: var(--dark-gray) !important;
            margin: 0 0.5rem;
            transition: color 0.3s;
        }
        
        .nav-link:hover {
            color: var(--primary-blue) !important;
        }
        
        .btn-primary {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
            padding: 0.5rem 1.5rem;
            font-weight: 600;
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-blue);
            border-color: var(--secondary-blue);
        }
        
        .btn-danger {
            background-color: var(--primary-red);
            border-color: var(--primary-red);
            padding: 0.5rem 1.5rem;
            font-weight: 600;
        }
        
        .btn-danger:hover {
            background-color: var(--secondary-red);
            border-color: var(--secondary-red);
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            color: white;
            padding: 5rem 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="none"/><path d="M0,50 Q25,25 50,50 T100,50" stroke="rgba(255,255,255,0.1)" stroke-width="2" fill="none"/></svg>');
            opacity: 0.3;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
        }
        
        /* Section Styling */
        .section-title {
            color: var(--primary-blue);
            font-weight: 700;
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background-color: var(--primary-red);
        }
        
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        .card-icon {
            font-size: 2.5rem;
            color: var(--primary-blue);
            margin-bottom: 1rem;
        }
        
        .card-title {
            color: var(--primary-blue);
            font-weight: 700;
        }
        
        /* Courses Section */
        .course-card {
            border-top: 5px solid var(--primary-red);
        }
        
        /* Testimonials */
        .testimonial-card {
            border-left: 5px solid var(--primary-blue);
        }
        
        .testimonial-author {
            color: var(--primary-blue);
            font-weight: 600;
        }
        
        /* Contact Form */
        .contact-form {
            background-color: var(--light-gray);
            border-radius: 10px;
            padding: 2.5rem;
        }
        
        .form-control:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 0.25rem rgba(25, 118, 210, 0.25);
        }
        
        /* Footer */
        .footer {
            background-color: var(--dark-gray);
            color: white;
            padding: 3rem 0 1.5rem;
        }
        
        .footer-title {
            color: var(--primary-white);
            font-weight: 700;
            margin-bottom: 1.5rem;
            font-size: 1.3rem;
        }
        
        .footer-links a {
            color: #ccc;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: var(--primary-white);
        }
        
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            color: white;
            transition: background-color 0.3s;
        }
        
        .social-icons a:hover {
            background-color: var(--primary-blue);
        }
        
        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 1.5rem;
            margin-top: 2rem;
            text-align: center;
            color: #aaa;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate-fade-in {
            animation: fadeIn 0.8s ease-out;
        }
        
        /* Performance optimizations */
        img {
            max-width: 100%;
            height: auto;
        }
        
        /* Print styles */
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
    
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "EducationalOrganization",
      "name": "LITE Computer College",
      "description": "Premier institution offering computer courses, programming, web development, cybersecurity, and IT certification training.",
      "url": "https://litecomputercollege.edu",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "123 Tech Street",
        "addressLocality": "Tech City",
        "addressRegion": "TC",
        "postalCode": "12345",
        "addressCountry": "USA"
      },
      "telephone": "+1-234-567-8900",
      "email": "info@litecomputercollege.edu",
      "sameAs": [
        "https://www.facebook.com/litecomputercollege",
        "https://twitter.com/litecollege",
        "https://www.linkedin.com/company/lite-computer-college"
      ]
    }
    </script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-laptop-code me-2"></i>
                LITE <span>Computer College</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
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
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a class="btn btn-danger" href="#contact">Enroll Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 animate-fade-in">
                    <h1 class="hero-title">Transform Your Career with Cutting-Edge Computer Education</h1>
                    <p class="lead mb-4">LITE Computer College offers industry-leading courses in programming, web development, cybersecurity, data science, and more. Gain the skills that employers are looking for.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#courses" class="btn btn-light btn-lg">Explore Courses</a>
                        <a href="#contact" class="btn btn-outline-light btn-lg">Free Consultation</a>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0">
                    <div class="text-center">
                        <div class="bg-white rounded-3 p-4 shadow-lg">
                            <i class="fas fa-laptop-code display-1 text-primary mb-3" style="color: var(--primary-blue) !important;"></i>
                            <h3 class="h4 mb-3" style="color: var(--primary-blue);">Start Your Tech Journey Today</h3>
                            <p class="text-muted">Join 10,000+ successful graduates who transformed their careers with our courses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="py-5 bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title d-inline-block">Our Popular Courses</h2>
                    <p class="text-muted">Choose from our wide range of computer courses designed for beginners to advanced professionals.</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Course 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card course-card h-100">
                        <div class="card-body p-4">
                            <div class="card-icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <h3 class="card-title h5">Full Stack Web Development</h3>
                            <p class="card-text">Learn front-end and back-end technologies including HTML, CSS, JavaScript, React, Node.js, and MongoDB.</p>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <span class="badge bg-danger">12 Weeks</span>
                                <span class="text-primary fw-bold">$899</span>
                            </div>
                            <a href="#contact" class="btn btn-primary mt-3 w-100">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <!-- Course 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card course-card h-100">
                        <div class="card-body p-4">
                            <div class="card-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h3 class="card-title h5">Cybersecurity & Ethical Hacking</h3>
                            <p class="card-text">Master network security, penetration testing, cryptography, and ethical hacking techniques.</p>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <span class="badge bg-danger">16 Weeks</span>
                                <span class="text-primary fw-bold">$1,199</span>
                            </div>
                            <a href="#contact" class="btn btn-primary mt-3 w-100">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <!-- Course 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card course-card h-100">
                        <div class="card-body p-4">
                            <div class="card-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3 class="card-title h5">Data Science & Machine Learning</h3>
                            <p class="card-text">Learn Python, data analysis, visualization, statistical modeling, and machine learning algorithms.</p>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <span class="badge bg-danger">20 Weeks</span>
                                <span class="text-primary fw-bold">$1,499</span>
                            </div>
                            <a href="#contact" class="btn btn-primary mt-3 w-100">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <!-- Course 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card course-card h-100">
                        <div class="card-body p-4">
                            <div class="card-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h3 class="card-title h5">Mobile App Development</h3>
                            <p class="card-text">Build iOS and Android applications using React Native, Flutter, Swift, and Kotlin.</p>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <span class="badge bg-danger">14 Weeks</span>
                                <span class="text-primary fw-bold">$999</span>
                            </div>
                            <a href="#contact" class="btn btn-primary mt-3 w-100">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <!-- Course 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card course-card h-100">
                        <div class="card-body p-4">
                            <div class="card-icon">
                                <i class="fas fa-cloud"></i>
                            </div>
                            <h3 class="card-title h5">Cloud Computing & AWS</h3>
                            <p class="card-text">Master AWS, Azure, Google Cloud platforms, and learn to deploy scalable cloud infrastructure.</p>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <span class="badge bg-danger">10 Weeks</span>
                                <span class="text-primary fw-bold">$799</span>
                            </div>
                            <a href="#contact" class="btn btn-primary mt-3 w-100">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <!-- Course 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card course-card h-100">
                        <div class="card-body p-4">
                            <div class="card-icon">
                                <i class="fas fa-gamepad"></i>
                            </div>
                            <h3 class="card-title h5">Game Development</h3>
                            <p class="card-text">Create 2D and 3D games using Unity, Unreal Engine, C#, and game design principles.</p>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <span class="badge bg-danger">18 Weeks</span>
                                <span class="text-primary fw-bold">$1,099</span>
                            </div>
                            <a href="#contact" class="btn btn-primary mt-3 w-100">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-us" class="py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title d-inline-block">Why Choose LITE Computer College?</h2>
                    <p class="text-muted">We provide exceptional education with industry-relevant curriculum and expert instructors.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 text-center p-4">
                        <div class="card-icon">
                            <i class="fas fa-user-tie text-primary"></i>
                        </div>
                        <h3 class="card-title h5">Expert Instructors</h3>
                        <p class="card-text">Learn from industry professionals with 10+ years of experience in tech companies.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 text-center p-4">
                        <div class="card-icon">
                            <i class="fas fa-briefcase text-primary"></i>
                        </div>
                        <h3 class="card-title h5">Job Placement Assistance</h3>
                        <p class="card-text">95% of our graduates secure jobs within 3 months of course completion.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 text-center p-4">
                        <div class="card-icon">
                            <i class="fas fa-laptop-house text-primary"></i>
                        </div>
                        <h3 class="card-title h5">Flexible Learning</h3>
                        <p class="card-text">Choose between in-person, online, or hybrid learning options to fit your schedule.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 text-center p-4">
                        <div class="card-icon">
                            <i class="fas fa-certificate text-primary"></i>
                        </div>
                        <h3 class="card-title h5">Industry Certifications</h3>
                        <p class="card-text">Earn recognized certifications that enhance your resume and career prospects.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5 bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title d-inline-block">Student Success Stories</h2>
                    <p class="text-muted">Hear from our graduates who have transformed their careers with our courses.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card testimonial-card h-100">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="fas fa-quote-left text-primary fa-2x"></i>
                            </div>
                            <p class="card-text">"The Full Stack Web Development course at LITE Computer College completely changed my career. I went from a retail job to a junior developer role in just 4 months!"</p>
                            <div class="d-flex align-items-center mt-4">
                                <div class="flex-shrink-0">
                                    <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                        <span class="text-white fw-bold">SR</span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="testimonial-author mb-0">Sarah Rodriguez</h5>
                                    <small class="text-muted">Web Developer at TechCorp</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card testimonial-card h-100">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="fas fa-quote-left text-primary fa-2x"></i>
                            </div>
                            <p class="card-text">"The Cybersecurity course provided hands-on experience with real-world tools. I now work as a security analyst protecting financial systems from threats."</p>
                            <div class="d-flex align-items-center mt-4">
                                <div class="flex-shrink-0">
                                    <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                        <span class="text-white fw-bold">MJ</span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="testimonial-author mb-0">Michael Johnson</h5>
                                    <small class="text-muted">Security Analyst at SecureBank</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card testimonial-card h-100">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="fas fa-quote-left text-primary fa-2x"></i>
                            </div>
                            <p class="card-text">"As a career changer, the Data Science course gave me the confidence and skills to enter the tech industry. The instructors were incredibly supportive throughout."</p>
                            <div class="d-flex align-items-center mt-4">
                                <div class="flex-shrink-0">
                                    <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                        <span class="text-white fw-bold">PC</span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="testimonial-author mb-0">Priya Chen</h5>
                                    <small class="text-muted">Data Scientist at AnalyticsPro</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact" class="py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title d-inline-block">Get In Touch</h2>
                    <p class="text-muted">Ready to start your tech journey? Contact us for more information or to enroll in a course.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="contact-form">
                        <form id="enrollmentForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">First Name *</label>
                                    <input type="text" class="form-control" id="firstName" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Last Name *</label>
                                    <input type="text" class="form-control" id="lastName" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone">
                                </div>
                                <div class="col-12">
                                    <label for="courseInterest" class="form-label">Course of Interest *</label>
                                    <select class="form-select" id="courseInterest" required>
                                        <option value="" selected disabled>Select a course</option>
                                        <option value="web-development">Full Stack Web Development</option>
                                        <option value="cybersecurity">Cybersecurity & Ethical Hacking</option>
                                        <option value="data-science">Data Science & Machine Learning</option>
                                        <option value="mobile-dev">Mobile App Development</option>
                                        <option value="cloud-computing">Cloud Computing & AWS</option>
                                        <option value="game-dev">Game Development</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message / Questions</label>
                                    <textarea class="form-control" id="message" rows="4" placeholder="Tell us about your background and goals..."></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="newsletter" checked>
                                        <label class="form-check-label" for="newsletter">
                                            Subscribe to our newsletter for course updates and tech tips
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">Submit Application</button>
                                </div>
                            </div>
                        </form>
                        <div id="formSuccess" class="alert alert-success mt-4 d-none" role="alert">
                            Thank you for your interest! We'll contact you within 24 hours to discuss your enrollment.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h3 class="footer-title">LITE Computer College</h3>
                    <p class="mb-4">Transforming careers through cutting-edge computer education since 2010. We're committed to providing industry-relevant skills for the digital economy.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                    <h3 class="footer-title">Quick Links</h3>
                    <div class="footer-links">
                        <a href="#home">Home</a>
                        <a href="#courses">Courses</a>
                        <a href="#why-us">Why Us</a>
                        <a href="#testimonials">Testimonials</a>
                        <a href="#contact">Contact</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h3 class="footer-title">Popular Courses</h3>
                    <div class="footer-links">
                        <a href="#courses">Full Stack Development</a>
                        <a href="#courses">Cybersecurity</a>
                        <a href="#courses">Data Science</a>
                        <a href="#courses">Mobile App Development</a>
                        <a href="#courses">Cloud Computing</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h3 class="footer-title">Contact Info</h3>
                    <div class="footer-contact">
                        <p class="mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            123 Tech Street, Tech City, TC 12345
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-phone me-2"></i>
                            +1 (234) 567-8900
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-envelope me-2"></i>
                            info@litecomputercollege.edu
                        </p>
                        <p class="mb-0">
                            <i class="fas fa-clock me-2"></i>
                            Mon-Fri: 9am-6pm, Sat: 10am-4pm
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p class="mb-0">&copy; 2023 LITE Computer College. All rights reserved. | <a href="#" class="text-light">Privacy Policy</a> | <a href="#" class="text-light">Terms of Service</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Form submission handler
        document.getElementById('enrollmentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const firstName = document.getElementById('firstName').value;
            const email = document.getElementById('email').value;
            const course = document.getElementById('courseInterest').value;
            
            // In a real application, you would send this data to a server
            // For demo purposes, we'll just show a success message
            const successMessage = document.getElementById('formSuccess');
            successMessage.classList.remove('d-none');
            
            // Scroll to success message
            successMessage.scrollIntoView({ behavior: 'smooth' });
            
            // Reset form after 5 seconds
            setTimeout(() => {
                document.getElementById('enrollmentForm').reset();
                successMessage.classList.add('d-none');
            }, 5000);
            
            // Log submission (for demo)
            console.log('Form submitted:', { firstName, email, course });
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Add active class to nav links on scroll
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                
                if (scrollY >= (sectionTop - 100)) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
        
        // Initialize tooltips
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    </script>
</body>
</html>