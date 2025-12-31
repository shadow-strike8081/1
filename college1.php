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
    <title>LITE Computer College | Master Tech Skills</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

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

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .section-title h2 {
            font-weight: 700;
            color: var(--primary-blue);
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background-color: var(--primary-red);
            margin: 15px auto 0;
            border-radius: 2px;
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

        /* Registration Form */
        .register-section {
            padding: 80px 0;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .form-container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
        }

        .form-control {
            border: 1px solid #ced4da;
            padding: 12px;
            margin-bottom: 15px;
        }
        
        .form-control:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 0.2rem rgba(0, 86, 179, 0.25);
        }

        .form-header h3 {
            color: var(--primary-blue);
            font-weight: 700;
        }

        /* Footer */
        footer {
            background-color: #0b1c2e;
            color: white;
            padding: 60px 0 20px;
        }

        .footer-logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
            display: inline-block;
        }
        
        .footer-logo span {
            color: var(--primary-red);
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #adb5bd;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }

        .social-icons a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255,255,255,0.1);
            color: white;
            border-radius: 50%;
            margin-right: 10px;
            transition: background 0.3s;
            text-decoration: none;
        }

        .social-icons a:hover {
            background-color: var(--primary-red);
        }

        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            margin-top: 40px;
            padding-top: 20px;
            text-align: center;
            font-size: 0.9rem;
            color: #adb5bd;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            .hero-section::after {
                display: none;
            }
        }
    </style>
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
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-theme" href="#contact">Apply Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section d-flex align-items-center">
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

    <!-- Features Section -->
    <section id="about" class="features-section">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose LITE?</h2>
                <p class="text-muted">We provide more than just education; we provide a career path.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <h4>Expert Instructors</h4>
                        <p class="text-muted">Learn from industry professionals with years of real-world experience in technology companies.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4>Recognized Certification</h4>
                        <p class="text-muted">Earn certificates that are recognized globally and valued by top employers in the tech industry.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
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
                    <div class="course-card">
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
                    <div class="course-card">
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
                    <div class="course-card">
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
                    <div class="course-card">
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
                    <div class="course-card">
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
                    <div class="course-card">
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

    <!-- Registration Form Section -->
    <section id="contact" class="register-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="form-container">
                        <div class="form-header text-center mb-4">
                            <h3>Apply for Admission</h3>
                            <p class="text-muted">Fill out the form below to register for a course.</p>
                        </div>
                        <form id="admissionForm" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fullName" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="fullName" placeholder="John Doe" required>
                                        <div class="invalid-feedback">Please enter your name.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                                        <div class="invalid-feedback">Please enter a valid email.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" placeholder="+1 234 567 890" required>
                                        <div class="invalid-feedback">Please enter your phone number.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="courseSelect" class="form-label">Interested Course</label>
                                        <select class="form-select" id="courseSelect" required>
                                            <option value="" selected disabled>Select a course</option>
                                            <option value="web-dev">Web Development</option>
                                            <option value="data-science">Data Science</option>
                                            <option value="graphic-design">Graphic Design</option>
                                            <option value="digital-marketing">Digital Marketing</option>
                                            <option value="cyber-security">Cyber Security</option>
                                            <option value="it-fundamentals">IT Fundamentals</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a course.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message (Optional)</label>
                                <textarea class="form-control" id="message" rows="3" placeholder="Tell us about your goals..."></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-theme btn-lg">Submit Application</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <a href="#" class="footer-logo">LITE <span>College</span></a>
                    <p class="text-muted" style="color: #adb5bd !important;">Empowering the next generation of tech leaders with accessible, high-quality education in computer sciences.</p>
                    <div class="social-icons mt-3">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="mb-3">Quick Links</h5>
                    <div class="footer-links">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#courses">Courses</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3">Our Courses</h5>
                    <div class="footer-links">
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Data Science</a></li>
                            <li><a href="#">Graphic Design</a></li>
                            <li><a href="#">Cyber Security</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="mb-3">Contact Us</h5>
                    <div class="footer-links">
                        <ul style="color: #adb5bd;">
                            <li class="d-flex"><i class="fas fa-map-marker-alt mt-1 me-2" style="color: var(--primary-red);"></i> 123 Tech Street, Silicon Valley, CA</li>
                            <li><i class="fas fa-phone me-2" style="color: var(--primary-red);"></i> +1 (555) 123-4567</li>
                            <li><i class="fas fa-envelope me-2" style="color: var(--primary-red);"></i> info@litecollege.edu</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p class="mb-0">&copy; 2023 LITE Computer College. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Scripts -->
    <script>
        // Form Validation Logic
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('admissionForm');
            
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    event.preventDefault();
                    // Simulate successful submission
                    const btn = form.querySelector('button[type="submit"]');
                    const originalText = btn.innerHTML;
                    
                    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
                    btn.disabled = true;
                    
                    setTimeout(() => {
                        btn.innerHTML = '<i class="fas fa-check"></i> Submitted Successfully!';
                        btn.classList.remove('btn-theme');
                        btn.classList.add('btn-success');
                        
                        setTimeout(() => {
                            form.reset();
                            form.classList.remove('was-validated');
                            btn.innerHTML = originalText;
                            btn.disabled = false;
                            btn.classList.add('btn-theme');
                            btn.classList.remove('btn-success');
                            alert("Thank you for applying to LITE Computer College! We will contact you soon.");
                        }, 2000);
                    }, 1500);
                }
                
                form.classList.add('was-validated');
            }, false);

            // Smooth Scrolling for Anchor Links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        // Close mobile menu if open
                        const navbarToggler = document.querySelector('.navbar-toggler');
                        const navbarCollapse = document.querySelector('.navbar-collapse');
                        if (navbarCollapse.classList.contains('show')) {
                            navbarToggler.click();
                        }

                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
            
            // Add scroll effect to navbar
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('shadow-sm');
                } else {
                    navbar.classList.remove('shadow-sm');
                }
            });
        });
    </script>
</body>
</html>