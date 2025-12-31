<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="KickOff - The ultimate destination for football fans. Get the latest stats, player highlights, and join our community. Experience the beautiful game like never before.">
    <meta name="keywords" content="football, soccer, sports, league, stats, match, creative football website">
    <meta name="author" content="KickOff Team">
    <meta name="theme-color" content="#0f172a">
    
    <!-- Open Graph for SEO -->
    <meta property="og:title" content="KickOff | The Heart of Football">
    <meta property="og:description" content="Experience the passion, the energy, and the glory of the beautiful game.">
    <meta property="og:image" content="https://placehold.co/1200x630/0f172a/FFF?text=KickOff+Football">
    <meta property="og:type" content="website">

    <title>KickOff | The Heart of Football</title>
    
    <!-- Favicon -->
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>⚽</text></svg>">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #38ef7d;
            --secondary-color: #11998e;
            --accent-color: #ff5f6d;
            --dark-bg: #0f172a;
            --card-bg: #1e293b;
            --text-light: #f8fafc;
            --text-muted: #94a3b8;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: var(--dark-bg);
            color: var(--text-light);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }

        /* Creative Gradient Backgrounds */
        .bg-gradient-custom {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
        }

        .text-gradient {
            background: linear-gradient(to right, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Navbar Styling */
        .navbar {
            background-color: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .navbar-brand {
            font-weight: 900;
            font-size: 1.5rem;
            color: var(--primary-color) !important;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .nav-link {
            color: var(--text-light) !important;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .btn-custom {
            background: linear-gradient(45deg, var(--secondary-color), var(--primary-color));
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(56, 239, 125, 0.3);
            color: white;
        }

        /* Hero Section */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            padding-top: 80px;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -20%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, var(--secondary-color) 0%, transparent 70%);
            opacity: 0.2;
            z-index: 0;
            filter: blur(60px);
        }

        .hero-content {
            z-index: 1;
        }

        .hero-image {
            position: relative;
            z-index: 1;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        /* Cards */
        .feature-card {
            background-color: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            padding: 2rem;
            transition: transform 0.3s ease, border-color 0.3s ease;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary-color);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            background: rgba(56, 239, 125, 0.1);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            color: var(--primary-color);
        }

        /* Gallery/News */
        .news-img {
            height: 250px;
            object-fit: cover;
            border-radius: 20px 20px 0 0;
            transition: transform 0.5s ease;
        }

        .card {
            background-color: var(--card-bg);
            border: none;
            border-radius: 20px;
            overflow: hidden;
        }
        
        .card:hover .news-img {
            transform: scale(1.05);
        }

        .card-body {
            color: var(--text-light);
        }

        /* Accessibility: Ensure high contrast for muted text on dark backgrounds */
        .text-muted {
            color: #cbd5e1 !important;
        }

        /* Form Section */
        .form-control {
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-light);
            border-radius: 10px;
            padding: 12px;
        }

        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.1);
            border-color: var(--primary-color);
            color: var(--text-light);
            box-shadow: 0 0 0 0.25rem rgba(56, 239, 125, 0.25);
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--text-muted);
        }

        /* Footer */
        footer {
            background-color: #0b1120;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            padding: 4rem 0 2rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255,255,255,0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-light);
            transition: all 0.3s ease;
            text-decoration: none;
            margin-right: 10px;
        }

        .social-link:hover {
            background-color: var(--primary-color);
            color: var(--dark-bg);
        }
        
        /* Stats Counter */
        .stat-number {
            font-size: 3rem;
            font-weight: 900;
            color: var(--primary-color);
        }

        /* Accessibility Focus */
        *:focus-visible {
            outline: 2px solid var(--accent-color);
            outline-offset: 2px;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" aria-label="Main Navigation">
        <div class="container">
            <a class="navbar-brand" href="#">
                Kick<span class="text-white">Off</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Join Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="home" class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content mb-5 mb-lg-0">
                    <span class="text-uppercase fw-bold text-gradient mb-2 d-block">Welcome to the League</span>
                    <h1 class="display-3 mb-4">Unleash Your <br><span class="text-white">Football Passion</span></h1>
                    <p class="lead text-muted mb-4">Join the ultimate community for football enthusiasts. Track stats, follow matches, and train like a pro with our exclusive content.</p>
                    <div class="d-flex gap-3">
                        <a href="#contact" class="btn btn-custom btn-lg">Join Club</a>
                        <a href="#features" class="btn btn-outline-light btn-lg rounded-pill px-4">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <!-- Semantic Image with Alt Text -->
                    <img src="https://placehold.co/600x600/11998e/ffffff?text=Football+Player&font=montserrat" alt="Football player kicking a ball" width="600" height="600" class="img-fluid rounded-4 shadow-lg hero-image w-75">
                </div>
            </div>
        </div>
    </header>

    <!-- Stats Section -->
    <section class="py-5" aria-label="Statistics">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="p-4 rounded-4" style="background: rgba(255,255,255,0.02);">
                        <div class="stat-number" data-target="500">0</div>
                        <p class="text-muted mb-0">Matches Played</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-4" style="background: rgba(255,255,255,0.02);">
                        <div class="stat-number" data-target="120">0</div>
                        <p class="text-muted mb-0">Professional Clubs</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-4" style="background: rgba(255,255,255,0.02);">
                        <div class="stat-number" data-target="10">0</div>
                        <p class="text-muted mb-0">Million Fans</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-5 mb-3">Why Choose KickOff?</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">We bring you closer to the game with real-time analytics, exclusive interviews, and a vibrant community.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <article class="feature-card">
                        <div class="icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
                            </svg>
                        </div>
                        <h3>Live Analytics</h3>
                        <p class="text-muted">Get real-time data on player performance, match statistics, and tactical breakdowns instantly.</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="feature-card">
                        <div class="icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                            </svg>
                        </div>
                        <h3>Global Community</h3>
                        <p class="text-muted">Connect with millions of fans worldwide. Discuss matches, transfers, and share your passion.</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="feature-card">
                        <div class="icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-trophy-fill" viewBox="0 0 16 16">
                                <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.845-2.153 3.374-3.769 4.213a8 8 0 0 1 3.308 3.275.5.5 0 0 1-.686.637 11.918 11.918 0 0 0-2.477-1.556c.055.22.106.452.153.693a.5.5 0 0 1-.986.234 9.172 9.172 0 0 1-1.56-4.22c-1.57-.863-2.912-2.396-3.726-4.25a3 3 0 1 1-1.127-5.89A40.198 40.198 0 0 1 2.5.5Z"/>
                            </svg>
                        </div>
                        <h3>Exclusive Content</h3>
                        <p class="text-muted">Access behind-the-scenes footage, player interviews, and documentaries you won't find anywhere else.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News -->
    <section id="news" class="py-5 bg-opacity-10 bg-black">
        <div class="container py-5">
            <h2 class="display-5 mb-5 text-center">Latest Highlights</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://placehold.co/600x400/2d3436/ffffff?text=Match+Day" class="news-img card-img-top" alt="Stadium packed with fans" width="600" height="400">
                        <div class="card-body p-4">
                            <span class="badge bg-danger mb-2">Live</span>
                            <h5 class="card-title">Championship Final</h5>
                            <p class="card-text text-muted">The intense battle for the trophy continues this weekend with the top two teams.</p>
                            <a href="#" class="btn btn-link text-white p-0 text-decoration-none">Read More &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://placehold.co/600x400/2d3436/ffffff?text=Top+Scorer" class="news-img card-img-top" alt="Player celebrating a goal" width="600" height="400">
                        <div class="card-body p-4">
                            <span class="badge bg-success mb-2">Stats</span>
                            <h5 class="card-title">Golden Boot Race</h5>
                            <p class="card-text text-muted">Who will take home the Golden Boot this season? The stats are closer than ever.</p>
                            <a href="#" class="btn btn-link text-white p-0 text-decoration-none">Read More &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://placehold.co/600x400/2d3436/ffffff?text=Transfer+News" class="news-img card-img-top" alt="Manager signing contract" width="600" height="400">
                        <div class="card-body p-4">
                            <span class="badge bg-info mb-2">News</span>
                            <h5 class="card-title">Transfer Market</h5>
                            <p class="card-text text-muted">Breaking news on the latest signings and rumors from the summer transfer window.</p>
                            <a href="#" class="btn btn-link text-white p-0 text-decoration-none">Read More &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact" class="py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="display-5 mb-4">Join Our Club</h2>
                    <p class="lead text-muted mb-4">Ready to step onto the pitch? Fill out the form to subscribe to our newsletter and get exclusive updates.</p>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-3 d-flex align-items-center">
                            <span class="me-3 text-success">&#10004;</span> Weekly Match Analysis
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <span class="me-3 text-success">&#10004;</span> Exclusive Merchandise Offers
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <span class="me-3 text-success">&#10004;</span> Access to Fan Events
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 p-md-5 rounded-4" style="background-color: var(--card-bg); border: 1px solid rgba(255,255,255,0.1);">
                        <form id="contactForm" novalidate>
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" placeholder="John Doe" required aria-required="true">
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="john@example.com" required aria-required="true">
                                <div class="invalid-feedback">Please enter a valid email.</div>
                            </div>
                            <div class="mb-4">
                                <label for="message" class="form-label">Favorite Team (Optional)</label>
                                <input type="text" class="form-control" id="message" placeholder="e.g. FC Barcelona">
                            </div>
                            <button type="submit" class="btn btn-custom w-100 btn-lg">Sign Up Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <a class="navbar-brand mb-3 d-block" href="#">
                        Kick<span class="text-white">Off</span>
                    </a>
                    <p class="text-muted small">Bringing the world's most popular sport to your fingertips. Copyright &copy; 2023 KickOff Inc.</p>
                </div>
                <div class="col-lg-2 col-6">
                    <h6 class="text-white mb-3">Links</h6>
                    <ul class="list-unstyled text-muted small">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted hover-white">Home</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted hover-white">About</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted hover-white">Matches</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6">
                    <h6 class="text-white mb-3">Support</h6>
                    <ul class="list-unstyled text-muted small">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted hover-white">Help Center</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted hover-white">Privacy</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted hover-white">Terms</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h6 class="text-white mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a href="#" class="social-link" aria-label="Facebook">F</a>
                        <a href="#" class="social-link" aria-label="Twitter">T</a>
                        <a href="#" class="social-link" aria-label="Instagram">I</a>
                        <a href="#" class="social-link" aria-label="YouTube">Y</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Custom JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            
            // Navbar Background Change on Scroll
            const navbar = document.querySelector('.navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('shadow-sm');
                    navbar.style.backgroundColor = 'rgba(15, 23, 42, 1)';
                } else {
                    navbar.classList.remove('shadow-sm');
                    navbar.style.backgroundColor = 'rgba(15, 23, 42, 0.95)';
                }
            });

            // Form Validation & Submission Logic
            const form = document.getElementById('contactForm');
            form.addEventListener('submit', (event) => {
                event.preventDefault();
                event.stopPropagation();

                if (form.checkValidity()) {
                    // Simulate form submission
                    const btn = form.querySelector('button[type="submit"]');
                    const originalText = btn.innerHTML;
                    
                    btn.innerHTML = 'Signing Up...';
                    btn.disabled = true;

                    setTimeout(() => {
                        alert('Welcome to the club! You have successfully signed up.');
                        form.reset();
                        btn.innerHTML = originalText;
                        btn.disabled = false;
                        form.classList.remove('was-validated');
                    }, 1500);
                } else {
                    form.classList.add('was-validated');
                }
            });

            // Simple Number Counter Animation
            const counters = document.querySelectorAll('.stat-number');
            const speed = 200; // The lower the slower

            const animateCounters = () => {
                counters.forEach(counter => {
                    const updateCount = () => {
                        const target = +counter.getAttribute('data-target');
                        const count = +counter.innerText;
                        
                        // Lower inc to slow and higher to slow
                        const inc = target / speed;

                        if (count < target) {
                            // Add inc to count and output in counter
                            counter.innerText = Math.ceil(count + inc);
                            // Call function every ms
                            setTimeout(updateCount, 20);
                        } else {
                            counter.innerText = target + (target === 10 ? 'M+' : '+');
                        }
                    };
                    updateCount();
                });
            };

            // Trigger animation when stats section is in view
            let animated = false;
            const statsSection = document.querySelector('section[aria-label="Statistics"]');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if(entry.isIntersecting && !animated) {
                        animateCounters();
                        animated = true;
                    }
                });
            });

            if(statsSection) {
                observer.observe(statsSection);
            }
        });
    </script>
</body>
</html>
